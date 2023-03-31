const $jq = jQuery.noConflict();
$jq(document).ready(function ($) {
    var myModal = new bootstrap.Modal(document.getElementById("RetourModal"), {
        keyboard: false,
    });

    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    //$(".loader2Container").css("display", "flex");
    $(".enregistreur").click(function () {
        const civilites = document.getElementsByName("civilite");
        var civilite = "";
        // Parcourir les éléments radio pour trouver celui qui est coché
        for (let i = 0; i < civilites.length; i++) {
            if (civilites[i].checked) {
                // Obtenir la valeur de l'élément radio coché
                const selectedcivilite = civilites[i].value;
                civilite = selectedcivilite; // affichera la valeur du fruit sélectionné (apple, orange, ou banana)
                break; // Sortir de la boucle une fois qu'un élément radio a été trouvé
            }
        }
        const civ = civilite;
        const nom = $("input[name='nom'").val();
        const prenom = $("input[name='prenom'").val();
        const naissance = $("input[name='naissance'").val();
        const adresse = $("input[name='adresse'").val();
        const ville = $("input[name='ville'").val();
        const email = $("input[name='email'").val();
        const telephone = $("input[name='telephone'").val();
        $(".modal-title").text($("input[name='Erreurs'").val());

        if (nom == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='ErreurNom'").val() +
                    "</p>"
            );
            myModal.show();
        } else if (prenom == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='ErreurPrenom'").val() +
                    "</p>"
            );
            myModal.show();
        } else if (naissance == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='ErreurNaissance'").val() +
                    "</p>"
            );
            myModal.show();
        } else if (adresse == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='ErreurAdresse'").val() +
                    "</p>"
            );
            myModal.show();
        } else if (ville == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='ErreurVille'").val() +
                    "</p>"
            );
            myModal.show();
        } else if (telephone == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='ErreurTelephone'").val() +
                    "</p>"
            );
            myModal.show();
        } else if (!validateEmail(email)) {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='ErreurEmail'").val() +
                    "</p>"
            );
            myModal.show();
        } else {
            $(".loader2Container").fadeIn().css("display", "flex");
            $.post(
                "SaveRegister",
                {
                    _token: $("input[name='_token']").val(),
                    civilite: civ,
                    nom: nom,
                    prenom: prenom,
                    naissance: naissance,
                    adresse: adresse,
                    ville: ville,
                    telephone: telephone,
                    email: email,
                },
                function (data) {
                    $(".loader2Container").fadeOut().css("display", "none");
                    if (data.status == 1) {
                        //Erreur
                        $(".modal-body").html(
                            "<p class='text-danger'>" + data.message + "</p>"
                        );
                        myModal.show();
                    } else if (data.status == 0) {
                        window.location.href = data.redirect;
                    }
                }
            );
        }
    });
});
