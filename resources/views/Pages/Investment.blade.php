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
            <div class="l2">
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

    <section id="Section4">
        <div class="container">
            <div>
                <i class="bi bi-bank2"></i>
                <h4>Compte d'Instruments Financiers</h4>
                <p>Investissez sur une gamme étendue de valeurs mobilières, sans limitation de plafond, ni durée de
                    détention imposée.

                </p>
            </div>
            <div>
                <i class="bi bi-wallet2"></i>
                <h4>Plan d'Épargne en Actions

                </h4>
                <p>Dynamisez votre portefeuille en investissant dans des valeurs mobilières françaises et européennes tout
                    en bénéficiant d'un cadre fiscal avantageux.

                </p>
            </div>
            <div>
                <i class="bi bi-piggy-bank"></i>
                <h4>Plan d'Épargne en Actions PME-ETI

                </h4>
                <p>Diversifiez votre épargne en investissant dans les petites et moyennes entreprises - entreprises tailles
                    intermédiaires en bénéficiant d'un cadre fiscal avantageux.

                </p>
            </div>
        </div>
    </section>
    <section id="Section5">
        <h4>DÉCOUVREZ NOS OUTILS</h4>
        <p>Nos outils d'aide à la décision</p>
        <div class="container">
            <div>
                <i class="bi bi-stars"></i>
                <p class="p1">Strategy builder</p>
                <p>Investissez dans ce qui vous inspire, des thèmes populaires aux stratégies d'expert.</p>
            </div>
            <div>
                <i class="bi bi-graph-up-arrow"></i>
                <p class="p1">Technical insight</p>
                <p>Identifiez les figures graphiques et les évènements techniques pour guider vos stratégies
                    d'investissement.</p>
            </div>
        </div>
    </section>
@endsection
