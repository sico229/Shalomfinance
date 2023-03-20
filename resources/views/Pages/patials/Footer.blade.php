<footer>
    <div>
        <p>Suivez-nous sur <i class="bi bi-facebook"></i><i class="bi bi-twitter"></i><i class="bi bi-youtube"></i><i
                class="bi bi-instagram"></i></p>
    </div>
    <div>
        <div>
            <h4>Contactez-nous</h4>
            <p class="w-100">
                <a href="http://">Nos conseillers vous répondent par téléphone, chat, mail ou bien encore grâce à
                    nos SAV Facebook et Twitter. </a>
            </p>
        </div>
        <div>
            <h4>Trouver une agence</h4>
            <p class="w-100">
                <a href="http://">Trouvez facilement l'agence la plus proche et ses horaires d'ouverture </a>
            </p>
        </div>
        <div>
            <h4>Les applications mobiles</h4>
            <p class="w-100">
                <a href="http://">Trouvez facilement l'agence la plus proche et ses horaires d'ouverture </a>
            </p>
        </div>
    </div>
    <div>
        <div>
            <h5>Informations Légales</h5>
            <ul>
                <li><a href="">Données Personnelles</a></li>
                <li><a href="">Mentions légales</a></li>
                <li><a href="">Cookies</a></li>
                <li><a href="">Règlementations</a></li>
            </ul>
        </div>
        <div>
            <h5>Nous connaître</h5>
            <ul>
                <li><a href="">La banque d'un monde qui change</a></li>
                <li><a href="">Nos engagements responsables</a></li>
                <li><a href="">Emploi et carrière</a></li>
            </ul>
        </div>
        <div>
            <h5>Informations Légales</h5>
            <ul>
                <li><a href="">Données Personnelles</a></li>
                <li><a href="">Mentions légales</a></li>
                <li><a href="">Cookies</a></li>
                <li><a href="">Règlementations</a></li>
            </ul>
        </div>
        <div>
            <h5>Autres sites</h5>
            <ul>
                <li><a href="">Données Personnelles</a></li>
                <li><a href="">Mentions légales</a></li>
                <li><a href="">Cookies</a></li>
                <li><a href="">Règlementations</a></li>
            </ul>
        </div>
    </div>
    <div>
        <p>Pour la bonne exécution de vos contrats, et en cas de réclamations/contestations, votre Conseiller est
            joignable sur sa ligne directe (appel non surtaxé). Si vous ne disposez plus de son numéro de téléphone
            direct, envoyez-lui un message par votre messagerie sécurisée, il vous le donnera à nouveau en retour.
        </p>
    </div>
    @if (!Session::has('CookieAccepted'))
        @include('Pages.patials.Cookie')
    @endif
</footer>
