@extends('Template.Layout1')
@section('styles')
    <link rel="stylesheet" href="{{ asset('node_modules/owl.carousel/dist/assets//owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/Accueil.css') }}">
@endsection
@section('SectionAccueil')
    <div class="AccueilSection1">

        <h3>Bienvenue sur Banque</h3>
        <p>Des solutions adaptées pour tous besoins : gestion et
            ouverture de compte en ligne, simulation de crédit,
            assurance, épargne… une banque présente à vos côtés au quotidien.</p>


    </div>
    <div class="AccueilSection2">
        <div class="container">

            <div>
                <div>
                    <div><i class="bi bi-car-front"></i></div>
                    <div>
                        <h4>Une voiture moins polluante, c’est circuler librement !</h4>
                    </div>
                    <div>
                        <a href="http://">En savoir plus</a>
                    </div>
                </div>
                <div>
                    <p>
                        En 2023, de nombreuses villes mettront en place de nouvelles restrictions antipollution… Alors
                        n’attendez plus et profitez de notre Prêt personnel Auto pour financer votre futur véhicule.
                    </p>
                    <p>
                        Un crédit vous engage et doit être remboursé. Vérifiez vos capacités de remboursement avant de vous
                        engager.
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <div><i class="bi bi-piggy-bank-fill"></i></div>
                    <div>
                        <h4>En épargne, les bons conseils, c’est essentiel !</h4>
                    </div>
                    <div>
                        <a href="http://">En savoir plus</a>
                    </div>
                </div>
                <div>
                    <p>
                        BNP Paribas met à votre disposition son expertise pour vous accompagner dans tous vos projets
                        d’épargne !
                    </p>
                    <p>
                        Après avoir testé la qualité de la relation client dans le secteur financier, le magazine Challenges
                        et Retraite.com ont décerné le label du Meilleur Conseil Epargne 2022 à BNP Paribas.

                    </p>
                </div>
            </div>
            <div>
                <div>
                    <div><i class="bi bi-chat-dots-fill"></i></div>
                    <div>
                        <h4>Nous écoutons vos besoins</h4>
                    </div>
                    <div>
                        <a href="http://">En savoir plus</a>
                    </div>
                </div>
                <div>
                    <p>
                        Recevez 80€* dans votre cagnotte pour chaque parrainage validé. Et pour votre filleul : 80€ offerts
                        pour toute ouverture d'un compte de dépôt en ligne + 1 an d’Esprit Libre offert !


                    </p>
                </div>
            </div>


        </div>
    </div>
    <div class="AccueilSection3">
        <h4>BNP PARIBAS VOUS ACCOMPAGNE</h4>
        <div class="container">
            <div>
                <div>
                    <div>
                        <i class="bi bi-shield-fill-check"></i>
                        <h6>ESPRIT LIBRE ÉVOLUE ! </h6>
                    </div>
                    <div>
                        <p>Vous souhaitez protéger votre vie numérique ?
                            Bénéficiez de nouvelles prestations* avec les contrats d’assurance de la gamme BNP Paribas
                            Sécurité.</p>
                    </div>
                    <div>
                        <a href="http://">Je découvre</a>
                    </div>
                </div>
                <div>
                    <div>
                        <i class="bi bi-phone-fill"></i>
                        <h6>Votre banque</h6>
                    </div>
                    <div>
                        <p>Vous souhaitez protéger votre vie numérique ?
                            Bénéficiez de nouvelles prestations* avec les contrats d’assurance de la gamme BNP Paribas
                            Sécurité.</p>
                    </div>
                    <div>
                        <a href="http://">Je découvre</a>
                    </div>
                </div>

            </div>
            <div>
                <img src="{{ asset('public/img/cryptodyn.jpg') }}" alt="" class="img img-fluid">
                <div>
                    <div>
                        <h4>OPTION CRYPTOGRAMME DYNAMIQUE</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur fuga, voluptates ex quae
                            labore possimus repellendus eaque nisi perspiciatis! Sed cum maxime suscipit quo? Sapiente.</p>

                    </div>
                    <div>
                        <a href="http://">Je découvre</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="AccueilSection4">
        <h1>Nous vous accompagnons dans vos prêts</h1>
    </div>
    <div class="AccueilSection5">
        <h2>Besoin d'un prêt pour vos projets?</h2>
        <p>Nous vous offrons des formules de prêt adaptées à vos différents besoins</p>
        <p>Nos offres de prêts sont accessibles en 72 heures et directement virés sur votre compte</p>
        <div class="row">
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Prêt Consommation
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.

                                <a href="">Demander un Prêt</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Prêt Immobilier
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Prêt Automobile
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                Prêt Personnel
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                &nbsp;
            </div>
            {{-- <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('public/img/pret-bancaire-portugal.jpg') }}" alt="" srcset="">
            </div> --}}
        </div>
    </div>
    <div class="AccueilSection6">
        <h3 class="w-100 text-center text-bold py-10">Nos Partenaires</h3>

        <div class="owl-carousel owl-theme">
            <img src="{{ asset('public/img/1.jpg') }}" alt="">
            <img src="{{ asset('public/img/2.jpg') }}" alt="">
            <img src="{{ asset('public/img/3.jpg') }}" alt="">
            <img src="{{ asset('public/img/4.jpg') }}" alt="">
            <img src="{{ asset('public/img/5.jpg') }}" alt="">
            <img src="{{ asset('public/img/7.jpg') }}" alt="">
            <img src="{{ asset('public/img/8.jpg') }}" alt="">

        </div>
    </div>
    <div class="AccueilSection7">
        <div class="row container">
            <div>

                <div>
                    <h1>72</h1>
                    <h3>Heures</h3>
                </div>
            </div>
            <div>
                <h2>Pour vos projets</h2>
                <h6>Nous sommes là</h6>
                <p>Simulez gratuitement votre prêt</p>
                <div>
                    <div>
                        <div>Montant :<span class="MontantShow text-bold"></span></div>
                        <div>Durée de remboursement :<span class="DureShow">76</span></div>
                        <div class="sliderContainer">

                            <div>
                                <p>
                                    <span>0€</span>
                                    <span class="AmmountCurrentValue">gt</span>
                                    <span>50 000€</span>
                                </p>
                                <input class="Amount" type="range" min="500" max="50000" step="500"
                                    value="25000">
                            </div>
                            <div class="my-5">
                                <p>
                                    <span>9</span>
                                    <span class="DureCurrentValue">gt</span>
                                    <span>120</span>
                                </p>
                                <input class="dure" type="range" min="9" max="120" step="3"
                                    value="6">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/js/Accueil.js') }}"></script>
@endsection
