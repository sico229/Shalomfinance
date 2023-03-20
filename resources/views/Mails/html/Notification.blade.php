@extends('Mails.Template.template1')
@section('contenu')
    <p style="margin: 0;">Vous avez reçu le message d'un client:</p>
    <p style="margin: 0;">Nom du client : {{ $req->nom }}</p>
    <p style="margin: 0;">N° du Client: {{ $req->telephone }}</p>
    <p style="margin: 0;">Adresse du client : {{ $req->email }}</p>
    <p style="margin: 0;">Contenu du message: </p>
    <p style="margin: 0;">{{ $req->message }}</p>
@endsection
