const $jq = jQuery.noConflict();
$jq(document).ready(function ($) {
    var myModal = new bootstrap.Modal(document.getElementById("RetourModal"), {
        keyboard: false,
    });

    function previewImages() {
        const preview = document.querySelector("#preview1");
        const files = document.querySelector("#identiteFiles").files;
        const labelIdentite = document.querySelector(".identite");

        if (files.length < 3) {
            for (let i = 0; i < files.length; i++) {
                const reader = new FileReader();

                reader.addEventListener(
                    "load",
                    function () {
                        const image = new Image();
                        image.src = reader.result;

                        preview.appendChild(image);
                    },
                    false
                );
                labelIdentite.innerHTML = "Documents en cours de chargement...";
                if (files[i]) {
                    reader.readAsDataURL(files[i]);
                }
            }
        } else {
            alert("Deux images au maximum");
        }
    }

    $("#identiteFiles").on("change", previewImages);
    $("#domicileFile").on("change", previewImages2);

    $(".modal-title").text($("input[name='Erreurs'").val());
    function previewImages2() {
        const preview = document.querySelector("#preview2");
        const files = document.querySelector("#domicileFile").files;
        const labelIdentite = document.querySelector(".domicile");

        if (files.length < 3) {
            for (let i = 0; i < files.length; i++) {
                const reader = new FileReader();

                reader.addEventListener(
                    "load",
                    function () {
                        const image = new Image();
                        image.src = reader.result;
                        preview.appendChild(image);
                    },
                    false
                );
                labelIdentite.innerHTML = "Documents en cours de chargement...";
                if (files[i]) {
                    reader.readAsDataURL(files[i]);
                }
            }
        } else {
            alert("Deux images au maximum");
        }
    }
    $(".validator12").click(function (event) {
        event.preventDefault();
        if ($(".typeIdentite").val() == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='ErrType'").val() +
                    "</p>"
            );
            myModal.show();
        } else if ($(".typeDomicile").val() == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='ErrDom'").val() +
                    "</p>"
            );
            myModal.show();
        } else if ($("#identite").val() == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='identiteVide'").val() +
                    "</p>"
            );
            myModal.show();
        } else if ($("#domicile").val() == "") {
            $(".modal-body").html(
                "<p class='text-danger'>" +
                    $("input[name='domicileVide'").val() +
                    "</p>"
            );
            myModal.show();
        } else {
            $(".loader2Container").fadeIn().css("display", "flex");
            const identite = document.getElementById("identiteFiles");
            const identiteFiles = identite.files;

            const domicile = document.getElementById("domicileFile");
            const domicileFiles = domicile.files;

            const formData = new FormData();
            for (let i = 0; i < identiteFiles.length; i++) {
                formData.append("identite[]", identiteFiles[i]);
            }
            for (let i = 0; i < domicileFiles.length; i++) {
                formData.append("domicile[]", domicileFiles[i]);
            }
            formData.append("user", $('input[name="user"]').val());
            formData.append("_token", $("input[name='_token']").val());
            formData.append("user", $('input[name="user"]').val());
            formData.append("typeIdentite", $(".typeIdentite").val());
            formData.append("typeDomicile", $(".typeDomicile").val());

            fetch("DocumentsUpload", {
                method: "POST",
                body: formData,
            })
                .then((response) => {
                    $(".modal-title").text(
                        $("input[name='DocumentsEnvoyes'").val()
                    );
                    $(".loader2Container").fadeOut().css("display", "none");
                    if (response.status == 200) {
                        $(".modal-body").html(
                            "<p class='text-success'>" +
                                response.data.message +
                                "</p>"
                        );
                        console.log(response.data.redirect);
                        window.location.href = response.data.redirect;
                        myModal.show();
                    }
                })
                .catch((error) => {
                    $(".loader2Container").fadeOut().css("display", "none");
                    $(".modal-body").html(
                        "<p class='text-success'>" +
                            $("input[name='RetourUpload'").val() +
                            "</p>"
                    );
                    myModal.show();
                });
        }
    });
});
