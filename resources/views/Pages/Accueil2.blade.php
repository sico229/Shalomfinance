@extends('Template.Layout2')

<link rel="stylesheet" href="{{ asset('public/css/Accueil2.css') }}">


@section('contenu')
    <div>
        <section id="AccueilSection1">
            <h2>BIENVENUE SUR SHALOMFINANCE</h2>
            <p>Des solutions adaptées pour tous besoins : gestion et
                ouverture de compte en ligne, simulation de crédit,
                assurance, épargne… une banque présente à vos côtés au quotidien.</p>

            <div class="container">
                <div>
                    <div>
                        <p><i class="bi bi-keyboard"></i></p>
                        <p>100% accessible en ligne</p>
                        <p>Accédez à votre compte en ligne depuis votre smartphone ou votre ordinateur</p>
                        <p><a href="{{ route('Register') }}">Ouvrir un Compte</a></p>
                    </div>
                    <div>
                        <p>Sans bouger de chez vous, ouvrez votre compte en ligne et effectuez toutes vos opérations
                            bancaires
                        </p>
                    </div>
                </div>
                <div>
                    <div>
                        <p><i class="bi bi-award"></i></p>
                        <p>Meilleurs Services</p>
                        <p>Nous vous offrons des solutions inovantes</p>
                        <p><a href="{{ route('Register') }}">Ouvrir un Compte</a></p>

                    </div>
                    <div>
                        <p>Un service client dédié vous accompagne 24h/24</p>
                    </div>
                </div>
                <div>
                    <div>
                        <p><i class="bi bi-shield-fill-check"></i></p>
                        <p>Services Securisés</p>
                        <p>Vos opérations bancaires sont couvertes à 100%</p>
                        <p><a href="{{ route('Register') }}">Ouvrir un Compte</a></p>

                    </div>
                    <div>
                        <p>Nous utilisons les dernières technologies de sécurité sur nos plateformes</p>
                    </div>
                </div>

            </div>
        </section>
        <section id="AccueilSection2">
            &nbsp;
        </section>
        <section id="AccueilSection3">
            <h2>Comment ça marche?</h2>
            <div class="stepsWrapper">
                <div>
                    <div><span>1</span></div>
                    <p>
                    <h3 class="w-100 text-center text-bold">Demande en ligne</h3>
                    <p>Remplissez votre demande d'ouverture de compte en ligne en quelques minutes, sans bouger de chez vous
                        sur
                        nos plateformes sécurisées</p>
                    </p>
                </div>
                <div>
                    <div><span>2</span></div>
                    <p>
                    <h3 class="w-100 text-center text-bold">Envoyez vos documents</h3>
                    <p>Une fois votre demande d'ouverture de compte acceptée, vous enverrez les documents justificatifs de
                        votre
                        identité et de votre domicile</p>
                    </p>
                </div>
                <div>
                    <div><span>3</span></div>
                    <p>
                    <h3 class="w-100 text-center text-bold">Votre compte activé</h3>
                    <p>Après etude de vos documents, votre compte en ligne est activé et vous recevez vos identifiants pour
                        vous
                        connecter</p>
                    </p>
                </div>




            </div>
            <a href="{{ route('Register') }}">Ouvrir compte en ligne</a>
        </section>
        <section id="AccueilSection6">
            <div class="container row">
                <div class="col-md-6">
                    <h4>Bénéficiez de votre carte Visa dès l'ouverture de votre compte en ligne</h4>
                    <p>Nous vous offrons les meilleures solutions de payement avec les dernières technologie de sécurité</p>
                </div>
                <div class="col-md-6">
                    {{-- <div class="credit-card visa">
                    <div class="card-front">
                        <div class="card-logo">
                            <img src="https://blog.logomyway.com/wp-content/uploads/2022/02/visa-logo-2.jpg"
                                alt="Visa Logo">
                        </div>
                        <div class="card-number">1234 5678 9012 3456</div>
                        <div class="card-holder-name">John Doe</div>
                        <div class="expiration-date">MM/YY</div>
                    </div>
                    <div class="card-back">
                        <div class="security-code">123</div>
                        <div class="card-logo"></div>
                    </div>
                </div> --}}

                    <img class="img img-fluid" src="{{ asset('public/img/Banque-en-ligne.png') }}" alt="Banque en ligne">
                </div>

            </div>
        </section>

        <section id="AccueilSection4">
            <h2>Nous vous accompagnons dans vos projets</h2>
        </section>

        <section id="AccueilSection5">
            <div class="row px-0 mx-0">
                <div class="col-md-6">
                    <img src="{{ asset('public/img/amiesshoppingete.jpg') }}" alt="conso" class="img img-fluid">
                </div>
                <div class="col-md-6">
                    <h4 class="w-100 text-center">Obtenez votre prêt en 72H</h4>
                    <p class="w-100 text-center">
                        Nous vous proposons diverses formule de prêts sur mesure spécialement étudiées pour vous accompagner
                        dans vos projets
                    </p>
                    <p class="w-100 text-center">Simuler gratuitement votre prêt en ligne et obtenez une réponse de principe
                        dans un delai de 24H</p>
                    <p class="justify-center">
                        <a href="{{ route('LoanRequest') }}">Demander un Prêt</a>
                    </p>
                </div>
            </div>
        </section>

        <section id="AccueilSection7">
            <div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Prêt Consommation
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Bénéficiez d'un prêt consommation accessible en 72 heures et pouvant atteindre 75 000€,
                                remboursable jusqu'en 36 mois à un taux exceptionnel de 2.8%
                            </div>
                            <div>
                                <a href="{{ route('LoanRequest') }}" class="btn">Demander un Prêt</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Prêt Immobilier
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Nous vous proposons un prêt immobilier à un taux de 2.8% pouvant atteindre jusqu'à 500000€
                                et
                                remboursable jusqu'à 15 ans
                            </div>
                            <div>
                                <a href="{{ route('LoanRequest') }}" class="btn">Demander un Prêt</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Prêt Personnel
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Bénéficiez d'un prêt personnel pour vos besoins urgent d'argent. Nous vous proposons une
                                formule
                                de prêt personnel accessibles en 72H maximum à un taux exceptionnel de 2.3%
                            </div>
                            <div>
                                <a href="{{ route('LoanRequest') }}" class="btn">Demander un Prêt</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Prêt Automobile
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Un prêt automobile pour vos envie s'auto neuve ou de seconde main. Nous vous accompagnons
                                avec
                                un
                            </div>
                            <div>
                                <a href="{{ route('LoanRequest') }}" class="btn">Demander un Prêt</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <h4 class="w-100 text-center">Simulateur de Prêt</h4>
                    <p>Evaluez gratuitement votre prêt sans engagement de votre part</p>
                    <select class="form-control TypePret col-md-6">
                        <option value="">Type de Prêt</option>
                        <option value="conso">Prêt Consommation</option>
                        <option value="immo">Prêt Immobilier</option>
                        <option value="auto">Prêt auto</option>
                        <option value="perso">Prêt Personnel</option>
                    </select>
                    <p class="my-0">Montant Souhaité: <span class="MtShow">----</span></p>
                    <p class="my-0">Durée de remboursement: <span class="DrShow">----</span></p>
                    <p class="my-0">Mensualite: <span class="MsShow">----</span></p>
                    <p class="my-0">Taux: <span class="TxShow">----</span></p>

                </div>
                <div class="choicer">
                    <div class="range">
                        <div class="sliderValue">
                            <span class="montantValue">10000€</span>
                        </div>
                        <div class="field">
                            <span class="value">5 000€</span>
                            <input type="range" min="5000" max="200000" step="1000" value="10000"
                                class="MontantInput">
                            <span class="value">200 000€</span>
                        </div>
                    </div>
                    <div class="range">
                        <div class="sliderValue">
                            <span class="dureValue">6 Mois</span>
                        </div>
                        <div class="field">
                            <span class="value">6 Mois</span>
                            <input type="range" min="6" max="120" step="3" value="9"
                                class="DureInput">
                            <span class="value">120 Mois</span>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center">
                        <a href="{{ route('LoanRequest') }}" class="btn btn-lg">Demander un Prêt</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="AccueilSection8">
            <h4 class="w-100 text-center text-bold my-10">Nos Partenaires</h4>
            {{-- <div class="slider">
                <div class="slide-track">
                    @for ($i = 0; $i < 7; $i++)
                        <div class="slide">
                            <img src="{{ asset('public/img/1.png') }}" alt="img" />
                        </div>
                    @endfor
                </div>
            </div> --}}

            <div class="slider-container slider-1">
                <div class="sliders">
                    @for ($i = 1; $i < 9; $i++)
                        @if ($i == 6)
                            <p><img src="{{ asset('public/img/' . 7 . '.jpg') }}" alt="" /></p>
                        @else
                            <p><img src="{{ asset('public/img/' . $i . '.jpg') }}" alt="" /></p>
                        @endif
                        <p><img src="{{ asset('public/img/' . 8 . '.jpg') }}" alt="" /></p>
                    @endfor
                </div>
            </div>



        </section>

        <section id="AccueilSection9">
            <div class="cover"></div>
            <div id="ctp">
                <div class="counter-container">
                    <i class="bi bi-bank2"></i>
                    <div class="counter">16112</div>
                    <p>Clients en 2022</p>
                </div>
                <div class="counter-container">
                    <i class="bi bi-hand-thumbs-up-fill"></i>
                    <div class="counter">832</div>
                    <p>Prêts accordés en 2022</p>
                </div>
                <div class="counter-container">
                    <i class="bi bi-trophy-fill"></i>
                    <div class="counter">24</div>
                    <p>Récompenses en 2022</p>
                </div>


            </div>
        </section>

        <section id="AccueilSection10">
            <div class="row">
                <div class="col">
                    <img class="img img-fluid" src="{{ asset('public/img/Customer.webp') }}" alt="Call center">

                </div>
                <div class="col px-2">
                    <h4>Un service client à votre écoute</h4>
                    <p>Joignez nos conseillers clients 24h/24</p>
                    <p>Une équipe jeune et diversifiée pour vous répondre</p>
                    <p>UDes réponses personnalisées pour vous aider</p>
                </div>
            </div>
        </section>

        <section id="AccueilSection11">
            <div class="row">
                <div>

                    <iframe class="img-thumbnail"
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d83996.9815208028!2d2.2739402080942925!3d48.86000908949318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbnp%20paribas%20paris!5e0!3m2!1sfr!2sfr!4v1678869004036!5m2!1sfr!2sfr"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <div>
                    <h2>Contactez-vous</h2>
                    <p>Des preoccupation? N'hésitez pas à nous contacter</p>
                    <p>Nos services clients vous répondront dans les minutes qui suivent</p>
                    <div class="container">
                        <div class="form-group my-2">
                            <input type="text" name="nom" placeholder="Votre nom" class="form-control">
                            <input type="hidden" name="erreurNom" value="Veuillez indiquer votre nom">
                        </div>
                        <div class="form-group my-2">
                            <input type="email" name="email" placeholder="Votre adresse email" class="form-control">
                            <input type="hidden" name="erreurEmail"
                                value="Veuillez renseigner une adresse email valide">
                        </div>
                        <div class="form-group my-2">
                            <input type="tel" name="telephone" placeholder="Votre N° de téléphone"
                                class="form-control">
                            <input type="hidden" name="erreurTelephone"
                                value="Veuillez renseigner votre numéro de téléphone">
                        </div>
                        <div class="form-group my-2">
                            <input type="hidden" name="erreurMessage" value="Votre message est vide">
                            <div class="form-floating">
                                <textarea name="message" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Votre Message ici</label>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-center py-2">
                            <input type="hidden" name="MsgEncours" value="Envoi de votre message">
                            <input type="hidden" name="MsgSuccess"
                                value="Message envoyé avec succès. Nos conseillers clients vous contacteront dans un bref delai. Merci de nous choisir">
                            <button class="btn btn-center contactform">Envoyer votre message</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="AccueilSection12">
            <h2>Devenez Client chez ShallomFinance</h2>
            <p>Chez ShallomFinance, nos services 100% connectés vous permettent d'ouvrir un compte en ligne en quelques
                clics et de le gérer à distance depuis votre ordinateur, votre tablette ou votre smartphone. Vous avez le
                choix de la gestion de votre compte : depuis l'agence la plus proche de chez vous ou en ligne.</p>
            <div class="container">
                <div>
                    <div>
                        <i class="bi bi-bank2"></i>
                        <p class="my-0">700 Agences</p>
                        <p class="text-bold my-0">En Europe</p>
                    </div>
                    <div>
                        <i class="bi bi-headset"></i>
                        <p class="my-0">Un conseiller </p>
                        <p class="text-bold my-0">dédié</p>
                    </div>
                    <div>
                        <i class="bi bi-shield-fill-check"></i>
                        <p class="my-0">Un Espace </p>
                        <p class="text-bold my-0">Sécurisé</p>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div>
                    <i class="bi bi-stopwatch-fill"></i>
                    <p>SIMPLE ET RAPIDE, OUVREZ VOTRE COMPTE en ligne !</p>
                </div>
                <div>
                    <div>
                        <i class="bi bi-keyboard"></i>
                        <div>
                            <p>01</p>
                            <p>Remplissez votre demande en ligne</p>

                        </div>
                        <p class="w-100">Nos services étudieront votre éligibilité et vous vous autoriseront à
                            poursuivre l'ouverture
                            de votre compte en ligne</p>
                    </div>
                    <div>
                        <i class="bi bi-file-earmark-person"></i>
                        <div>
                            <p>02</p>
                            <p>Envoyez vos justificatifs</p>
                        </div>
                        <p class="w-100">Envoyez vos documents justificatifs d'identité ( Carte d'identité, permis de
                            conduire, passeport, titre de séjour) et de domicile ( Facture d'électricité ou de gaz, avis
                            d'imposition...etc)</p>
                    </div>
                    <div>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>03</p>
                            <p>Votre compte est ouvert</p>
                        </div>
                        <p class="w-100">Nos services anti-fraude valident vos documents et votre compte en ligne est
                            ouvert</p>
                    </div>

                </div>
            </div>
        </section>


    </div>
@endsection
@section('scripts')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script> --}}
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{ asset('node_modules/Counter-Up-master/jquery.counterup.min.js') }}" defer></script>
    <script src="{{ asset('public/js/Accueil.js') }}" defer></script>
@endsection
