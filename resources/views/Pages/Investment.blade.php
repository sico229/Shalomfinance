@extends('Template.layout2')
@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/Investment.css') }}">
@endsection
@section('contenu')
    <section id="Section1">
        <div>
            <div class="container">
                <h4>NOS OFFRES ET SERVICES D'INVESTISSEMENT EN BOURSE
                </h4>
                <p>Découvrez l'ensemble des offres, des services et des comptes dédiés proposés
                    par SHALOMFINANCE pour vous guider dans vos investissements en Bourse.</p>
            </div>
        </div>
    </section>

    <section id="Section2">
        <div class="container">
            <h4>Développez votre connaissance de la Bourse et des Marchés financiers

            </h4>
            <p>Trouvez l'offre la plus adaptée à votre profil d'investisseur grâce aux outils et services performants de BNP
                Paribas.

            </p>
            <p>Comment investir en Bourse avec SHALOMFINANCE ?

            </p>
            <div>
                <div class="row">
                    <div class="col-md-3">
                        <img class="img img-fluid" src="{{ asset('public/img/invest/profil-utilisateur.svg') }}"
                            alt="profil-utilisateur.svg">
                        <p>1.Créez votre Profil Client</p>
                    </div>
                    <div class="col-md-3">
                        <img class="img img-fluid" src="{{ asset('public/img/invest/illu-couple.svg') }}"
                            alt="profil-utilisateur.svg">
                        <p>2.Ouvrez un compte dédié</p>
                    </div>
                    <div class="col-md-3">
                        <img class="img img-fluid" src="{{ asset('public/img/invest/select-tarifs.svg') }}"
                            alt="profil-utilisateur.svg">
                        <p>3.Sélectionnez une offre tarifaire adaptée à vos besoins</p>
                    </div>
                    <div class="col-md-3">
                        <img class="img img-fluid" src="{{ asset('public/img/invest/invest-bourse.svg') }}"
                            alt="profil-utilisateur.svg">
                        <p>4.Cinvest-bourse.svg</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Section3">
        <div class="container">
            <h4>COMMENCEZ LES INVESTISSEMENTS EN BOURSE</h4>

            <div>
                <div>
                    <i class="bi bi-graph-up-arrow"></i>
                    <h4>Découvrez la Bourse</h4>
                    <p>Qu'est-ce que la Bourse ? Pourquoi et comment investir ? Découvrez toutes les réponses à ces
                        questions.

                    </p>

                </div>
                <div>
                    <i class="bi bi-person-plus-fill"></i>
                    <h4>Créez votre Profil Client

                    </h4>
                    <p>Le Profil Client est réalisé dans votre intérêt. Il nous permet de vous accompagner dans vos
                        décisions d'investissement.

                    </p>

                </div>
            </div>

            <h4>OUVREZ UN COMPTE DÉDIÉ POUR L'INVESTISSEMENT EN BOURSE</h4>
            <div>
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('public/img/invest/avantages-compte-pro-en-ligne.png') }}" alt=""
                            class="img img-fluid">
                    </div>
                    <div class="col-md-7">
                        <h5>Ouvrez en ligne facilement et rapidement un compte dédié à la Bourse

                        </h5>
                        <p>Vous pouvez dorénavant ouvrir un compte Titres, PEA, PEA-PME grâce à la souscription 100 % en
                            ligne.

                        </p>
                        <p>Nous vous remboursons les frais de transfert de votre compte PEA ou PEA-PME dans la limite
                            d'un
                            forfait de 150 € (si le montant minimum de votre compte Bourse est de 5 000 €).

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
