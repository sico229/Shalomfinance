jQuery(document).ready(function ($) {
    $(".AccepterCooquie").click(function (e) {
        e.preventDefault();
        $(".cooquie").fadeOut();

        $.post(
            "acceptcookie",
            {
                _token: $("input[name='_token']").val(),
                choix: 1,
            },
            function (data) {
                $(".cooquie").fadeOut();
                setTimeout(() => {
                    $(".cooquie").css("display", "none");
                }, 2000);
            }
        );
    });

    $(".LangageChoice").click((e) => {
        e.preventDefault();
        $.post(
            "LangageChanger",
            {
                _token: $("input[name='_token']").val(),
                langue: e.target.getAttribute("langue"),
            },
            function (data) {
                if (data == 1) {
                    location.reload();
                }
            }
        );
    });

    //Retour Modal
    bootstrap.Modal(document.getElementById("RestourModal"), {}).show();

    function Modaler(title = null, contenu = null, position = null) {
        var myModal = new bootstrap.Modal(
            document.getElementById("exampleModal"),
            {}
        );
        myModal.show();
    }

    $(".hamb").click(function (e) {
        e.preventDefault();
        $(".nati").toggleClass("show");
        return false;
    });

    window.addEventListener("scroll", function () {
        if (window.pageYOffset > 40) {
            $("nav").css("top", "75px");
        } else {
            $("nav").css("top", "115px");
        }
    });

    // Loader

    function Loader(loader) {
        $("." + loader).css("display", "flex");
        function changeContenu() {
            var contenu = document.getElementById("loaderText");
            var tableau = [
                "ShalomFinance",
                "Veuillez patienter",
                "Bientôt disponible",
            ];
            var i = 0;

            setInterval(function () {
                contenu.innerHTML = tableau[i];
                contenu.style.content = "'jjjjjj'";
                i++;
                if (i >= tableau.length) {
                    i = 0;
                }
            }, 2000);
        }
        changeContenu();
    }

    // Loader("scanner");
});
