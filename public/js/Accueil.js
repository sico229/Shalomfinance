const $jq = jQuery.noConflict();
$jq(document).ready(function ($) {
    var myModal = new bootstrap.Modal(document.getElementById("RetourModal"), {
        keyboard: false,
    });
    // myModal.show();

    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    const MontantSlider = document.querySelector(".MontantInput");
    const DureSlider = document.querySelector(".DureInput");
    var taux = 0.28;
    $(".TypePret").change((e) => {
        switch (e.target.value) {
            case "conso":
                taux = 0.22;
                break;
            case "immo":
                taux = 0.26;
                break;
            case "perso":
                taux = 0.28;
                break;
            case "auto":
                taux = 0.27;
                break;

            default:
                taux = 0.23;
                break;
        }
        Calculateur();
    });
    MontantSlider.oninput = (e) => {
        Calculateur();
    };
    DureSlider.oninput = (e) => {
        Calculateur();
    };
    // MontantSlider.oninput((e) => {
    //     console.log(e.target.value);
    // });
    //Calculateur///////////////////////
    function Calculateur() {
        var Montant = document.querySelector(".MontantInput").value;
        var Dure = document.querySelector(".DureInput").value;

        const montantValue = document.querySelector(".montantValue");
        const dureValue = document.querySelector(".dureValue");
        $(".montantValue")
            .html($(".MontantInput").val() + "€")
            .css("left", $(".MontantInput").val() / 2000 + "%");
        $(".MtShow").html($(".MontantInput").val() + "€");

        $(".dureValue")
            .html($(".DureInput").val())
            .css("left", $(".DureInput").val() / 1.2 + "%");
        $(".DrShow").html($(".DureInput").val() + " Mois");

        function calculerMensualite(montant, taeg, duree) {
            var tauxMensuel = Math.pow(1 + taeg, 1 / 12) - 1; // conversion du taeg annuel en taux mensuel
            var mensualite =
                (montant * tauxMensuel) /
                (1 - Math.pow(1 + tauxMensuel, -duree));
            return mensualite.toFixed(2); // arrondi à 2 décimales
        }

        var mens = calculerMensualite(
            $(".MontantInput").val(),
            taux,
            $(".DureInput").val()
        );
        $(".MsShow").html(mens);
        $(".TxShow").html(taux);

        // dureValue.html(dureValue).css("left", dureValue / 1.2 + "%");

        // document.querySelector(".MontantInput").html(Montant + "€");
        // $(".DureShow").html(dureInput.value);
    }

    $(".counter").counterUp();

    //Cookiesetter

    $(".contactform").click((e) => {
        e.preventDefault();
        const nom = $("input[name='nom'").val();
        const email = $("input[name='email'").val();
        const telephone = $("input[name='telephone'").val();
        const message = $("textarea[name='message'").val();
        $(".modal-title").text(
            "Veuillez fournir les informations necessaires pour vous recontacter"
        );
        $(".modal-content").css({ color: "#be2727", fontWeight: "bold" });
        if (nom == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='erreurNom'").val() +
                    "</p>"
            );
            myModal.show();
        } else if (!validateEmail(email)) {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='erreurEmail'").val() +
                    "</p>"
            );
            myModal.show();
        } else if (telephone == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='erreurTelephone'").val() +
                    "</p>"
            );
            myModal.show();
        } else if (message == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='erreurMessage'").val() +
                    "</p>"
            );
            myModal.show();
        } else {
            const bouton = $(".contactform").html();
            console.log(bouton);
            $(".contactform").html(
                "<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>" +
                    $("input[name='MsgEncours'").val()
            );
            $.post(
                "FormulaireContact",
                {
                    _token: $("input[name='_token']").val(),
                    nom: nom,
                    email: email,
                    telephone: telephone,
                    message: message,
                },
                function (data) {
                    if (data == 0) {
                        $(".modal-title").text("Message Envoyé");
                        $(".modal-content").css({
                            color: "#036640",
                            fontWeight: "bold",
                        });
                        const success = $("input[name='MsgSuccess']").val();

                        $(".modal-body").html(
                            "<p class='text-success'>" + success + "</p>"
                        );
                        $(".modal-content")
                            .css({
                                color: "#036640",
                                fontWeight: "bold",
                            })
                            .removeClass("alert-danger");
                        myModal.show();
                        $("input").val("");
                        $("textarea").val("");
                        $(".contactform").html(bouton);
                    }
                }
            );
        }
    });
});
