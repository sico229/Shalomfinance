<?php

namespace App\Http\Controllers;

use App\Models\Params;
use App\Models\Message;
use SicoHelpers\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        return Helpers::Viewer("Pages.Accueil2");
    }

    public function Cookie(Request $req){
        Session::put('CookieAccepted',true);
        return 1;
    }

    public function LangageChanger(Request $req){
        Session::put('service_langue',$req->langue);
        return 1;

    }

    public function SaveContactForm(Request $req){
        $message=new Message();
        $message->NomExpediteur=$req->nom;
        $message->EmailExpediteur=$req->email;
        $message->TelephoneExpediteur=$req->email;
        $message->Message=$req->message;
        $message->date=date('d-m H:i');
        $message->token=Helpers::tokener();
        // $message->save();
        $Params=Params::first();
        
        Helpers::Mailer($Params->proprio,$Params->nom,"Message d'un visiteur",["req"=>$req,"Params"=>$Params],"Notification");
        Helpers::Whatsap("Vous avez reçu un message d'un client: %0A
        Nom du Client: ".$req->nom."%0A
        Tel: ".$req->telephone."%0A
        Emeil: ".$req->email."%0A
        Message: ".$req->message);
        return 0;
    }

    public function Comptes(){
        return Helpers::Viewer('Pages.Comptes');
    }

    public function Loans(){
        return Helpers::Viewer('Pages.Loans');
    }
    public function Assurance(){
        return Helpers::Viewer('Pages.Assurance');
    }
    public function Savings(){
        return Helpers::Viewer('Pages.Savings');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
