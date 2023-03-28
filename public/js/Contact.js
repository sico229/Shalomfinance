const $jq = jQuery.noConflict();
$jq(document).ready(function ($) {
    var myModal = new bootstrap.Modal(document.getElementById("RetourModal"), {
        keyboard: false,
    });

    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    $(".contactform").click((e) => {
        e.preventDefault();
        const nom = $("input[name='nom'").val();
        const email = $("input[name='email'").val();
        const telephone = $("input[name='telephone'").val();
        const message = $("textarea[name='message'").val();
        $(".modal-title").text($("input[name='Erreurs'").val());
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
