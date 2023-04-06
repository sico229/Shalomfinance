<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Params;
use SicoHelpers\Helpers;
use App\Models\Documents;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function Register(){
        return Helpers::Viewer('Users.Register');
    }
    public function SaveRegister(Request $req){
        //Vérification de l'adresse email dans la base de données

        $user=User::where('email',$req->email)->first();
        $req->email=Str::lower($req->email);
        if(!filter_var($req->email, FILTER_VALIDATE_EMAIL)){
            return response(["status"=>1,"message"=>"Cette adresse email ne semble pas correcte"]);
        }
        if($user){
            //L'adresse email existe déjà dans la bse de données
            return response(["status"=>1,"message"=>"Cette adresse email est déjà utilisée pour ouvrir un compte en ligne chez nous"]);
        }

        $user=new User();
        $user->civilite=$req->civilite;
        $user->nom=$req->nom;
        $user->prenom=$req->prenom;
        $user->dateNaissance=$req->naissance;
        $user->adresse=$req->adresse;
        $user->ville=$req->ville;
        $user->email=$req->email;
        $user->telephone=$req->telephone;
        $user->pays=Helpers::pays('r');
        $user->langue=Helpers::langue();
        $user->created_at=date('d-m-y H:i');
        $user->token=Helpers::tokener();
        $user->save();
        Helpers::Whatsap("
        Un nouveau client vient de demander l'ouverture de son compte en ligne: 
        %0A
        Nom: ".$req->nom."%0A
        Prénom: ".$req->prenom."%0A
        Date Nai:".$req->naissance."%0A
        email: ".$req->email."%0A
        Tél: ".$req->telephone."%0A
        Pays: ".$user->pays."%0A
        Langue: ".$user->langue."%0A%0ANous lui avons envoyé un mail pour lui demander ses justificatifs. Vous serez informé quand il aura envoyé les justificatis. Vous pouvez retrouver les détails de ce client dans votre espace administrateur");
        $params=Params::first();
        Helpers::Mailer($params->proprio,$params->nom,"Un nouveau client",["user"=>$user,"Params"=>$params],"NotificationRegister");
        Helpers::Mailer($user->email,$user->nom." ".$user->prenom,"Bienvenue à SHALOMFINANCE",["user"=>$user,"Params"=>$params],"Register");

        return response(["status"=>0,"titre"=>"Demande enregistrée","message"=>"Votre demande d'ouverture de compte en ligne a été enregistrée avec succès. Nous vous encverrons un mail de pour la suite de votre demande","redirect"=>"/shalomfinance.com/req/".$user->token]);
    }
    public function req(Request $req){
        $user=User::where('token',$req->user)->first();  
        if($user){
            return Helpers::Viewer('Users.Req',['user'=>$user]);     
        }
        Session::flash('RetourModal',['titre'=>"Lien Expiré","type"=>"danger","message"=>"Le lien que vous avez suivi n'est plus valide"]);
        return redirect()->route('Accueil');
    }
    public function Documents(Request $req){
        $user=User::where('token',$req->user)->first();  
        if(!$user){
            session()->flash('RetourModal', ["titre"=>"Lien invalide","type"=>"danger","message"=>"Le lien que vous avez suivi est invalide"]);
            
            return Helpers::Viewer('Pages.Accueil');     
        }
        return Helpers::Viewer('Users.Documents',['user'=>$user]);
    }
    public function DocumentsUpload(Request $req){
        // $user=User::where('token',$req->user)->first();
        // $version=Helpers::version($user->langue);
        $identite=$req->files->all()['identite'];
        $domicile=$req->files->all()['domicile'];
        $user=User::where('token',$req->user)->first();
        $version=Helpers::version($user->langue);
        $extension=["jpg","JPG","PNG","png","pdf","jpeg","JPEG"];
        $errors=[];
        $token=Helpers::tokener("all",8);
        
        
        //dd($req->file('identite')[0]->extension());
        if($req->typeIdentite==""){
            return response(["status"=>1,"message"=>"Veuillez indiquer le type de justificatif d'identité"]);
        }
        if($req->typeDomicile==""){
            return response(["status"=>1,"message"=>"Veuillez indiquer le type de justificatif de domicile"]);
        }
        if($req->file('identite')==""){
            return response(["status"=>1,"message"=>"Une erreur s'est produite lors de l'envoi de vos documents"]);
        }
        foreach ($identite as $key => $value) {
            if(!in_array($value->getClientOriginalExtension(),$extension)){
                array_push($errors,"Seuls les formats jpg, JPG, JPEG, jpeg,");
            }
        }
        foreach ($domicile as $key => $value) {
            if(!in_array($value->getClientOriginalExtension(),$extension)){
                array_push($errors,"Seuls les formats jpg, JPG, JPEG, jpeg,");
            }
        }
        if(sizeof($errors)>0){
            return response(["status"=>1,"message"=>$errors]);
        }
       
        
        //$user->update(['typeIdentite' => $req->typeIdentite, 'typeDomicile' => $req->typeDomicile]);
        

        foreach($req->file('identite') as $k => $v) {
            $document= new Documents(); 
            $document->typeId=$req->typeIdentite;    
            $document->PhotoId=$value;    
            $document->token=$token;
            $document->user_id=$user->id;
            $path = Storage::disk('public')->putFile('Documents', $req->file('identite')[$k]);
            $filename = basename($path);
            $result['url'] = $filename;
            $document->PhotoId=$path;
            $document->save();     
           
        }

        foreach($req->file('domicile') as $k => $v) {
            $document= new Documents(); 
            $document->typeDom=$req->typeDomicile;    
            $document->PhotoDom=$value; 
            $document->user_id=$user->id;
            $document->token=$token;
            $path = Storage::disk('public')->putFile('Documents', $req->file('domicile')[$k]);
            $filename = basename($path);
            $result['url'] = $filename;
            $document->PhotoDom=$path;
            $document->save();     
           
        }
        $user->lastConnexion=date('d-m-Y H:i');
        $user->save();
        
        $params=Params::first();
        $docs=[];
       
        foreach ($user->documents as $key => $value) {
            if($value->PhotoId!=null){
                $docs[$key]=$value->PhotoId;
            }else{
                $docs[$key]=$value->photoDom;
            }
        };
        
        
 
        try {
            Helpers::Mailer($user->email,$user->nom." ".$user->prenom,"Nous avons reçu vos documents",["user"=>$user,"Params"=>$params],"Documents");       
        Helpers::Mailer($params->proprio,$user->nom." ".$user->prenom,"Un client a envoyé ses documents",["version"=>$version,"user"=>$user,"Params"=>$params],"documentsProprio",$docs);
       } catch (\Throwable $th) {
        //throw $th;
       }
        Helpers::Whatsap("Le client ".$user->nom." ".$user->prenom." a envoyé ses documents");
       
        return response(["status"=>0,"message"=>"Nous avons bien reçu vos documents. Nous les analysons et vous serez contacté(e) dans les heures à venir pour la validation de votre compte et votre RIB","redirect"=>"hgjkl"]);

    
    }
}
