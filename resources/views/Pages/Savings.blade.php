@extends('Template.layout2')
@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/Savings.css') }}">
@endsection
@section('contenu')
    <section id="Section1">
        <div>
            <div class="cover"></div>
            <div>
                <h2>LIVRET A</h2>
                <p>Le Livret A est un livret d'épargne disponible à tout moment et rémunéré à 3%(1) net d'impôt avec un
                    plafond de 22 950 €.</p>
                <a href="{{ route('Register') }}">Ouvrir un compte Livret A</a>
            </div>
        </div>
    </section>

    <section id="Section2">
        <div class="container">
            <div>
                <h4>OFFRE DE BIENVENUE SPÉCIALE MINEURS</h4>
                <div>
                    <p>80€ offerts <span>Exclusivement en ligne</span></p>
                    <p>pour l'ouverture à un mineur
                        d'un 1er contrat chez BNP Paribas au choix parmi le Livret A(2) ou le Livret Jeune(3) ou le Compte
                        de Dépôt</p>
                    <p><a href="{{ route('Register') }}">Ouvrir un Compte en ligne</a></p>
                </div>
            </div>
        </div>
    </section>

    <section id="Section3">
        <div class="container">
            <h4>DÉCOUVREZ LE LIVRET A</h4>

            <div>
                <div>
                    <div>
                        <i class="bi bi-piggy-bank-fill"></i>
                        <p>Une épargne de précaution 100% sécurisée</p>
                    </div>
                    <p>
                        Vous disposez de votre Livret A comme vous le souhaitez pour une durée illimitée à tout moment.

                    </p>
                </div>
                <div>
                    <div>
                        <i class="bi bi-balloon-fill"></i>
                        <p>Des versements libres et/ou automatiques</p>
                    </div>
                    <p>
                        Choisissez le mode d'alimentation de votre Livret A et le montant des versements.

                    </p>
                </div>
                <div>
                    <div>
                        <i class="bi bi-clipboard-check-fill"></i>
                        <p>Détention d'un seul Livret A par personne</p>
                    </div>
                    <p>
                        Une même personne ne peut détenir qu'un seul Livret A, toute banque confondue.

                    </p>
                </div>



            </div>
        </div>
    </section>


    <section id="Section5">
        <div class="container">
            <h4>BESOIN D'AIDE SUR LE LIVRET A ?</h4>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="bi bi-chat-left-dots"></i> Que veut dire capitaliser des intérêts ?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Dès qu'une somme d'argent est placée sur un compte produisant des intérêts, ces intérêts au
                                fil du temps vont être intégrés au capital et produire à leur tour des intérêts.
                                Capitaliser des intérêts, c'est donc tout simplement récolter des intérêts en chaîne à la
                                suite d'un placement.
                                La bonne nouvelle, c'est qu'en définitive, vous allez récupérer le capital placé, les
                                intérêts de ce capital et les intérêts des intérêts.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="bi bi-chat-left-dots"></i>Cumuler un Livret A et un livret de Développement Durable et
                            Solidaire (LDDS), est-ce possible ?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Vous pouvez détenir un Livret A et un Livret de Développement Durable et Solidaire. Cette
                                solution est idéale si vous avez atteint le plafond de votre Livret A et que vous cherchez à
                                placer une somme d'argent complémentaire en toute sécurité. Ces deux livrets d'épargne vous
                                proposent en effet la même rémunération et la même disponibilité des fonds.
                                Vous pouvez aussi cumuler un Livret A et un Livret d'Épargne Populaire (LEP) si vous êtes
                                éligible à ce livret (sous conditions de ressources).
                                Un rappel : une même personne n'a pas le droit de cumuler plusieurs livrets réglementés
                                identiques (plusieurs Livrets A ou plusieurs LDDS à son même nom).
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="Section6">
        <div class="container">
            <div>
                <h6>Éligibilité</h6>
                <p>L'ouverture d'un Livret A est possible pour toute personne physique (majeure ou mineure/résidente ou non
                    résidente). Le Livret A est ouvert à titre individuel : il ne peut être ouvert sous forme jointe
                    c'est-à-dire au nom de deux personnes.</p>
                <p>Une même personne ne peut détenir qu'un seul Livret A (ou Livret Bleu du Crédit Mutuel).</p>
                <p>L'ouverture à un majeur protégé est autorisée sous réserve qu'il soit dûment représenté ou assisté.</p>
            </div>
            <div>
                <h6>Rémunération</h6>
                <p>Le taux du Livret A est de 3% (taux en vigueur au 01/02/2023) net d'impôt et de contributions sociales.
                </p>
            </div>
            <div>
                <h6>Méthode de calcul des intérêts et dates de valeur</h6>
                <p>Les intérêts sont calculés selon la méthode des intérêts anticipés et des intérêts rétrogrades. Les
                    retraits
                    effectués avant le 31 décembre de l'année en cours, sont productifs d'intérêts rétrogrades qui viennent
                    diminuer les intérêts anticipés calculés, dans la limite de ces derniers.

                </p>
                <p>
                    Les sommes versées portent intérêt à partir du premier jour de la quinzaine qui suit le versement ou le
                    virement (le 16 du même mois ou le 1er du mois suivant). Les sommes retirées cessent de porter intérêt à
                    partir du premier jour de la quinzaine au cours de laquelle intervient le retrait (soit le 1er ou le
                    16).


                </p>
                <p>
                    Ainsi, pour ne pas perdre un seul jour d'intérêts, il vous est conseillé d'effectuer vos versements
                    avant le
                    16 ou le 1er du mois et vos retraits après le 15 ou le 30.


                </p>
            </div>
            <div>
                <h6>Ainsi, pour ne pas perdre un seul jour d'intérêts, il vous est conseillé d'effectuer vos versements
                    avant le
                    16 ou le 1er du mois et vos retraits après le 15 ou le 30.

                </h6>
                <p>Le plafond du Livret A est de 22 950 €.
                    Ce plafond ne peut être dépassé que par la capitalisation des intérêts.</p>
                <p>Exemple : votre Livret A est actuellement à 16 280 € en raison des dépôts et retraits effectués et de la
                    capitalisation des intérêts.

                </p>
                <p>
                    Vous pouvez donc verser 22 950 € - 16 280 € soit 6 670 €.
                </p>
            </div>
            <div>
                <h6>Versements et alimentation</h6>
                <p>Les versements sur le Livret A sont de 10 € minimum pour le dépôt initial et les versements ultérieurs.

                </p>
                <p>L'alimentation du Livret A est libre ou périodique (mensuelle, trimestrielle, semestrielle).

                </p>
            </div>
            <div>
                <h6>Durée</h6>
                <p>La durée du Livret A est illimitée.

                </p>
            </div>
            <div>
                <h6>Fiscalité</h6>
                <p>La fiscalité du Livret A est particulièrement avantageuse puisque les intérêts bancaires sont exonérés de
                    l'impôt sur le revenu et des contributions sociales.

                </p>
                <p>Pour prendre connaissance des principales règles fiscales applicables sur ce produit, veuillez consultez
                    notre espace Fiscalité de d'Épargne.

                </p>
            </div>
        </div>
    </section>
@endsection
