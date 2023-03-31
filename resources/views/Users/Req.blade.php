@extends('Template.layout2')
@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/Req.css') }}">
@endsection
@section('contenu')
    <div id="Req">
        <div class="container">
            <div class="alert alert-success">
                <p>{{ $user->civilite . ' ' . $user->nom . ' ' . $user->prenom }}</p>
                <p>Nous sommes heureux d'enregistrer votre demande d'ouverture de compte en ligne.</p>
                <p>Nous venons de vous envoyer un mail pour la suite de votre demande. Si vous ne retrouvez pas ce mail dans
                    votre boîte, veuillez consulter vos spams.</p>
                <p class="text-center"><a class="btn btn-success" href="{{ route('Accueil') }}">Revenir à la page d'accueil</a>
                </p>
            </div>
        </div>
    </div>
@endsection
