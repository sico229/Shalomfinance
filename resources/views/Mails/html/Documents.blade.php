@extends('Mails.Template.template3')
@section('contenu')
    <p style="margin: 0;">{{ $user->civilite . ' ' . $user->nom . ' ' . $user->nom . ',' }}</p>
    <p style="margin: 0;">{{ 'Nous venons de recevoir vos documents justificatifs' }}</p>
    <p style="margin: 0;">
        {{ 'Nos services compétents les étudieront et si vos documents sont authentiques, votre compte sera ouvert en ligne dans les 24 prochaines heures' }}
    </p>
    <p style="margin: 0;">{{ 'Merci de nous avoir choisi' }}</p>
@endsection
