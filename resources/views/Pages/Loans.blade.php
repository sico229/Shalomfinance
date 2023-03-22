@extends('Template.layout2')
@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/Comptes.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/Loans.css') }}">
@endsection
@section('contenu')
    <section id="section1l">
        <div class="cover">
            <div>
                <h4 class="w-100 text-center">Nos Offres de Prêts</h4>
                <p class="w-100 text-center">Nous vous proposons des formules de prêts variées pour mieux répondre à vos
                    besoins de financement</p>
                <div>
                    <a href="{{ route('Conditions') }}">Voir nos conditions</a>
                    <a href="{{ route('LoanSimulator') }}">Simulez votre prêt</a>
                </div>
                <p>Un crédit vous engage et doit être remboursé. Vérifiez vos capacités de remboursement avant de vous
                    engager.</p>
            </div>
        </div>
    </section>
    <section id="section2">
        <p>Découvrez nos différentes formules de prêts et leurs avantages</p>

        <div>
            <details open>
                <summary>Le Prêt Consommation</summary>
                <p>Un besoin, un projet ? Découvrez nos solutions de financement pour vous accompagner.</p>
                <p>Nous vous offrons plusieurs crédits à la consommation</p>
                <div>
                    <div>
                        <div>
                            <div></div>
                            <h5>Prêt Auto</h5>
                        </div>
                        <p>Un crédit adapté pour financer tout type de véhicule (voiture neuve, d'occasion, moto...).</p>
                        <div>
                            <p>Jusqu'à 75000€</p>
                            <p>Jusqu'à 108 Mois</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="">Demander un Prêt</a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div></div>
                            <h5>Prêt travaux</h5>
                        </div>
                        <p>Un crédit dédié au financement de vos travaux de décoration ou d'aménagement</p>
                        <div>
                            <p>Jusqu'à 75000€</p>
                            <p>Jusqu'à 108 Mois</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="">Demander un Prêt</a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div></div>
                            <h5>Prêt Projet</h5>
                        </div>
                        <p>Le mini-prêt Coup de Pouce par FLOA pour financer vos projets immédiats.</p>
                        <div>
                            <p>Jusqu'à 1000€</p>
                            <p>Jusqu'à 03 Mois</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="">Demander un Prêt</a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div></div>
                            <h5>Prêt Jeune</h5>
                        </div>
                        <p>Le mini-prêt Coup de Pouce par FLOA pour financer vos projets immédiats.</p>
                        <div>
                            <p>Jusqu'à 1000€</p>
                            <p>Jusqu'à 03 Mois</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="">Demander un Prêt</a>
                        </div>
                    </div>
                </div>

            </details>

        </div>
    </section>
    <section id="section2">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('public/img/comptes/1.png') }}" alt="" class="img img-thumbnail">
            </div>
            <div class="col-md-7">
                <h4>Bénéficiez de votre carte Visa</h4>
                <p>Dès l'ouverture de votre compte en ligne, faites la demande de votre carte de retrait Visa</p>
                <p>La carte Visa de <span class="shalom">SHALOMFINANCE</span> vous permet d'effectuer des retraits dans tous
                    les distributeurs en Union
                    Européénne sans frais et à des tarifs exceptionnels partout ailleurs dans le monde</p>
            </div>
        </div>

        <div class="py-5 d-flex justify-content-center">
            <a href="{{ route('LoanRequest') }}">Ouvrir un compte en ligne</a>
        </div>
    </section>
    <section id="section3">
        <h4 class="w-100 text-center mt-5">Ouvrez votre compte en ligne depuis chez vous!</h4>
        <h6 class="w-100 text-center">Facile et en quelques clics, ouvrez votre compte en ligne sans vous déplacer de chez
            vous</h6>

        <div>
            <div>
                <span>1</span>
                <p>Remplissez votre demande en ligne</p>
            </div>
            <div>
                <span>2</span>
                <p>Envoyez vos documents justificatifs</p>
            </div>
            <div>
                <span>3</span>
                <p>Votre compte en ligne est ouvert</p>
            </div>
        </div>
        <div>
            <a href="{{ route('LoanRequest') }}">Ouvrir un compte en ligne</a>
        </div>
    </section>
@endsection
