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
                <summary>Nos offres de prêt</summary>
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
                            <a href="{{ route('LoanRequest') }}">Demander un Prêt</a>
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
                            <a href="{{ route('LoanRequest') }}">Demander un Prêt</a>
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
                            <a href="{{ route('LoanRequest') }}">Demander un Prêt</a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div></div>
                            <h5>Prêt Jeune</h5>
                        </div>
                        <p>Nous accompagnons les jeunes dans la construction de leur vie professionnelle future</p>
                        <div>
                            <p>Jusqu'à 20000€</p>
                            <p>Jusqu'à 90 Mois</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('LoanRequest') }}">Demander un Prêt</a>
                        </div>
                    </div>
                </div>

            </details>

        </div>
    </section>

    <section id="section4d">
        <h4 class="w-100 text-center">Le prêt Auto</h4>
        <div class="container">
            <p>Exemple pour un Prêt Personnel Auto de 20 000 € sur 60 mois (hors assurance facultative) :
            </p>
            <p class="w-100 text-center">Vous remboursez 60 échéances de 379,54 €,
                Pas de frais de dossier pour toute demande de prêt initiée en ligne.
                Taux débiteur fixe : 5,23 % l'an.</p>
            <h5>Taux Annuel Effectif Global (TAEG) fixe : 5,36 %(1).
                Montant total dû par l'emprunteur : 22 772,40 €. Intérêts : 2 772,40 €.</h5>
            <p>En cas de souscription à l'assurance facultative(2) (décès, Perte Totale et Irréversible d'Autonomie,
                Incapacité Temporaire Totale de travail) : taux annuel effectif de l'assurance (TAEA) : 1,52%, montant total
                dû par l'emprunteur au titre de l'assurance sur la durée totale du prêt : 804,00 €,
                montant de l'assurance par mois : 13,40 €, ce montant s'ajoute à l'échéance de remboursement du crédit.</p>
            <a href="{{ route('LoanRequest') }}">Faire une demande en ligne</a>
        </div>
        <h4 class="my-3">LES AVANTAGES DU PRÊT AUTO</h4>
        <div class="container ss">
            <div class="row">
                <div>
                    <div>
                        <i class="bi bi-database-check"></i>
                        <h6>Financement</h6>
                    </div>
                    <div>
                        <h4>UN FINANCEMENT DÉDIÉ À VOTRE PROJET</h4>
                        <p>Vous bénéficiez d'un crédit personnalisable en fonction de vos capacités de remboursement, sans
                            frais de dossier(3).</p>
                    </div>
                </div>
                <div>
                    <div>
                        <i class="bi bi-keyboard"></i>
                        <h6>100% en Ligne</h6>
                    </div>
                    <div>
                        <h4>UNE RÉPONSE DE PRINCIPE IMMÉDIATE</h4>
                        <p>Vous pouvez concrétiser rapidement votre acquisition.

                        </p>
                    </div>
                </div>
                <div>
                    <div>
                        <i class="bi bi-currency-euro"></i>
                        <h6>Remboursement anticipé</h6>
                    </div>
                    <div>
                        <h4>EN FONCTION DE VOTRE BUDGET</h4>
                        <p>
                            Vous avez la possibilité de rembourser votre crédit de manière anticipée
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <h6>BESOIN D'AIDE SUR LE PRÊT AUTO ?</h6>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-chat-left-text-fill"></i>Faut-il un apport préalable?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Le Prêt Auto ne nécessite pas d'apport préalable. Bien entendu, un apport est toujours
                                    utile, ne serait-ce que pour diminuer les mensualités de votre prêt et la durée de
                                    remboursement.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="bi bi-chat-left-text-fill"></i>Quels sont les montants et durées maximum?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    Vous pouvez emprunter de 1 000 € à 75 000 €, sur une durée allant de 4 mois à 108 mois.

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="section3s">
        <h4>Pour construire cotre projet immobilier, nous sommes là</h4>
        <div class="container">
            <div class="row">
                <div>
                    <img src="{{ asset('public/img/loans/immo.svg') }}" alt="">
                    <h6 class="w-100 text-center">Un taux adapté</h6>
                    <p>Votre taux d'intérêt ajusté et des mensualités adaptées selon les caractéristiques de votre projet
                        immobilier.</p>

                </div>
                <div>
                    <img src="{{ asset('public/img/loans/immo2.svg') }}" alt="">
                    <h6 class="w-100 text-center">Des démarches simplifiées</h6>
                    <p>Un accompagnement tout au long de votre projet : recherche de biens, financement, assurance du
                        logement, gestion simplifiée de vos contrats.</p>
                </div>
                <div>
                    <img src="{{ asset('public/img/loans/immo3.svg') }}" alt="">
                    <h6 class="w-100 text-center">Des services en ligne performants
                    </h6>
                    <p>Votre projet « réalisable » 100 % en ligne : demande de prêt, partage de documents justificatifs,
                        suivi du projet, signature de l'offre.

                    </p>
                </div>
                <div>
                    <img src="{{ asset('public/img/loans/immo4.svg') }}" alt="">
                    <h6 class="w-100 text-center">Un conseiller à vos côtés
                    </h6>
                    <p>À tout moment, l'accompagnement d'un conseiller en agence ou par téléphone pour vous aider à
                        concrétiser votre projet.

                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="section3">
        <h4 class="w-100 text-center mt-5">Demandez votre Prêt depuis chez vous</h4>
        <h6 class="w-100 text-center">Facile et en quelques clics, remplissez votre demande de prêt en ligne et recevez une
            réponse de principe en moins de 72 heures</h6>

        <div>
            <div>
                <span>1</span>
                <p>Remplissez votre demande en ligne</p>
            </div>
            <div>
                <span>2</span>
                <p>Recevez une réponse de principe</p>
            </div>
            <div>
                <span>3</span>
                <p>Envoyez vos documents justificatifs</p>
            </div>
        </div>
        <div>
            <a href="{{ route('LoanRequest') }}">Demandez un prêt</a>
        </div>
    </section>
@endsection
