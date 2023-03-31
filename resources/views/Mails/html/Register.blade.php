@extends('Mails.Template.template3')
@section('contenu')
    <p style="margin: 0;">{{ $user->civilite . ' ' . $user->nom . ' ' . $user->nom . ',' }}</p>
    <p style="margin: 0;">{{ 'Bienvenue à SHALOMFINANCE' }}</p>
    <p style="margin: 0;">{{ 'Nous sommes contents de vous accueillir parmis nos clients' }}</p>
    <p style="margin: 0;">{{ "Pour nous, plus qu'un client, vous êtes un partenaire" }}</p>
    <p style="margin: 0;">
        {{ "Pour finaliser l'ouverture de votre compte en ligne, veuillez cliquer sur le bouton ci-dessous pour nous envoyer vos documents justificatifs" }}
    </p>
    <p style="margin: 0;">
        {{ "Pour justifier de votre identité, vous pouvez nous envoyer une photo des deux faces de votre carte nationale d'identité, une photo de votre passeport ( Page comportant vos noms et votre photo), une photo des deux faces de votre permis de conduire ou une photo des deux faces de votre carte de séjour" }}
    </p>
@endsection
@section('bouton')
    <a href="{{ $Params->url . '/Documents/' . $user->token }}" class="btn" style="display: block;">Envoyez vos
        documents</a>
@endsection
@section('afterBouton')
    <p style="margin: 0;">
        Si le bouton ne marche pas, vous pouvez copier le lien ci-dessous et coller dans la barre d'adresse
        de votre navigateur
    </p>
    <p style="margin: 0;"><a href="{{ $Params->url . '/Documents/' . $user->token }}" class="btn"
            style="display: block;">Envoyez vos
            documents</a></p>
@endsection
