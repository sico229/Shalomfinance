@extends('Template.layout2')
@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/Contact.css') }}">
@endsection
@section('contenu')
    <div id="Contact">
        <section id="Section1">
            <div>
                <h1>Nous Contacter</h1>
            </div>
        </section>
        <section id="Section2">
            <h4>Par Mail</h4>
            <div>
                <form action="">
                    <input type="hidden" name="Erreurs"
                        value="Veuillez fournir les informations necessaires pour vous recontacter">
                    <div class="form-group">
                        <label for="nom">Votre Nom</label>
                        <input type="text" name="nom" class="form-control">
                        <input type="hidden" name="erreurNom" value="Veuillez idiquer votre nom">
                    </div>
                    <div class="form-group">
                        <label for="email">Votre adresse email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        <input type="hidden" name="erreurEmail" value="Vous n'avez pas indiqué une adresse email valide">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Votre N° de téléphone</label>
                        <input type="text" name="telephone" class="form-control">
                        <input type="hidden" name="erreurTelephone" value="Vous n'avez pas indiqué votre N° de téléphone">
                    </div>
                    <div class="form-group">
                        <label for="message">Votre Message</label>
                        <input type="hidden" name="erreurMessage" value="Votre message est vide">
                        <input type="hidden" name="MsgEncours" value="Envoi en cours...">
                        <input type="hidden" name="MsgSuccess"
                            value="Votre message a été envoyé avec succès et nous vous contacterons dans un bref délai pour une réponse">
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group sb">
                        <button class="btn btn-center contactform">ENVOYER</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('public/js/Contact.js') }}"></script>
@endsection
