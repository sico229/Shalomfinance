@extends('Mails.Template.template3')
@section('contenu')
    <p style="margin: 0;">{{ "L'utilisateur " . $user->nom . ' ' . $user->prenom . ' a envoyé ses documents justificatifs' }}</p>
    <p style="margin: 0;">{{ "Vous pourrez trouver ces documents en pièces jointes et  dans l'espace administrateur" }}</p>
    <p style="margin: 0;">{{ 'Vous pouvez maintenant activer le compte de cet utilisateur à partir de votre espace admin' }}
    </p>
    <p style="margin: 0;">
        {{ 'Si vous le souhaitez, vous pouvez envoyer un mail au client pour lui demander plus de justificatis.' }}</p>
@endsection
