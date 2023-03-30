@extends('Mails.Template.template1')
@section('contenu')
    <p style="margin: 0;">Un nouveau client a demandé l'ouverture de son compte en ligne:</p>
    <p style="margin: 0;">Nom du client : {{ $user->nom . ' ' . $user->prenom }}</p>
    <p style="margin: 0;">Adresse: {{ $user->adresse . ' - ' . $user->ville . ' - ' . $user->telephone . ' - ' . $user->email }}</p>
    <p style="margin: 0;">Pays : {{ $user->pays }}</p>
@endsection
