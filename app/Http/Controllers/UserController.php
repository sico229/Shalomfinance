<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Params;
use SicoHelpers\Helpers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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

        return response(["status"=>0,"titre"=>"Demande enregistrée","message"=>"Votre demande d'ouverture de compte en ligne a été enregistrée avec succès. Nous vous encverrons un mail de pour la suite de votre demande"]);
    }
}
