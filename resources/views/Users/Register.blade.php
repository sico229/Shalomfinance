@extends('Template.layout2')
@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/Register.css') }}">
@endsection
@section('contenu')
    <div id="Register">
        <section id="Section1">
            <div class="container">
                <div>
                    <img class="img" src="{{ asset('public/img/register/horloge.35b39879.png') }}" alt="">
                </div>
                <div>
                    <h1>SIMPLE ET RAPIDE, OUVREZ VOTRE COMPTE !</h1>
                </div>
            </div>
            <div class="container">
                <div>
                    <div>
                        <img src="{{ asset('public/img/register/ecran.acbb9439.png') }}" alt="">
                    </div>

                    <div>
                        <p>1</p>
                        <p>Remplissez votre formulaire en ligne</p>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="{{ asset('public/img/register/depot.0ba2e974.png') }}" alt="">
                    </div>
                    <div>
                        <p>2</p>
                        <p>Envoyez vos pièces justificatives</p>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="{{ asset('public/img/register/versement.74e12f89.png') }}" alt="">
                    </div>
                    <div>
                        <p>3</p>
                        <p>Votre compte est ouvert</p>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="{{ asset('public/img/register/contact.2678d529.png') }}" alt="">
                    </div>
                    <div>
                        <p>4</p>
                        <p>Devenez client BNP Paribas</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <h4>J'ouvre un compte chez ShalomFinance</h4>
                <div>

                    <p><i class="bi bi-gift"></i>Offre de Bienvenue</p>
                    <p>Bénéficiez de 1 an de gratuité sur Esprit Libre et ses Essentiels</p>
                </div>
                <h6 class="my-5 text-center">JE SAISIS MES INFORMATIONS CI-DESSOUS</h6>

            </div>
            <div class="container">
                <div class="form-group">
                    <p>Ma Civilité</p>
                    <div>
                        <div class="radio-inputs">
                            <label class="radio">
                                <input type="radio" name="civilite" value="Monsieur" name="radio" checked="">
                                <span class="name">Monsieur</span>
                            </label>


                            <label class="radio">
                                <input type="radio" name="civilite" value="Madame" name="radio">
                                <span class="name">Madame</span>
                            </label>
                        </div>
                    </div>

                </div>

                <div>
                    <div class="form__group field">
                        <input required="" name="nom" placeholder="Votre Nom" class="form__field" type="input">
                        <label class="form__label" for="name">Votre Nom</label>
                        <input type="hidden" name="ErreurNom" value="Veuillez indiquer votre nom">
                    </div>
                    <div class="form__group field">

                        <input required="" name="prenom" placeholder="Votre Prénom" class="form__field" type="input">
                        <label class="form__label" for="name">Votre Prénom</label>
                        <input type="hidden" name="ErreurPrenom" value="Veuillez indiquer votre prénom">
                        <input type="hidden" name="Erreurs" value="Le formulaire comporte des erreurs">
                    </div>
                    <div class="form__group field">
                        <input required="" name="naissance" placeholder="Date de Naissance" class="form__field"
                            type="date">
                        <label class="form__label" for="name">Date de Naissance</label>
                        <input type="hidden" name="ErreurNaissance"
                            value="Vous n'avez pas indiqué votre date de naissance">
                    </div>

                    <div class="form__group field">
                        <input required="" placeholder="Votre Adresse" name="adresse" class="form__field" type="input">
                        <label class="form__label" for="name">Votre Adresse</label>
                        <input type="hidden" name="ErreurAdresse" value="Nous n'avez pas indiqué votre adresse">
                    </div>
                    <div class="form__group field">
                        <input required="" name="ville" placeholder="Ville" class="form__field" type="input">
                        <label class="form__label" for="name">Ville</label>
                        <input type="hidden" name="ErreurVille" value="Veuillez indiquer votre ville">
                    </div>
                    <div class="form__group field">
                        <input required="" name="telephone" placeholder="N° de Téléphone" class="form__field"
                            type="input">
                        <label class="form__label" for="name">N° de Téléphone</label>
                        <input type="hidden" name="ErreurTelephone" value="Veuillez indiquer votre N° de téléphone">
                    </div>
                    <div class="form__group field">
                        <input required="" name="email" placeholder="Adresse email" class="form__field"
                            type="input">
                        <label class="form__label" for="name">Adresse email</label>
                        <input type="hidden" name="ErreurEmail" value="Veuillez indiquer votre adresse email valide">
                    </div>
                </div>
                <div class="my-5">
                    <button class="btn btn-rounded btn-center enregistreur">ENVOYER MA DEMANDE</button>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('public/js/Register.js') }}"></script>
@endsection
