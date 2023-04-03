var myModal = new bootstrap.Modal(document.getElementById("RetourModal"), {
    keyboard: false,
});

function previewImages() {
    const preview = document.querySelector("#preview1");
    const files = document.querySelector("#identite").files;
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
$(".modal-title").text($("input[name='Erreurs'").val());
function previewImages2() {
    const preview = document.querySelector("#preview2");
    const files = document.querySelector("#domicile").files;
    const labelIdentite2 = document.querySelector(".domicile");

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
            labelIdentite2.innerHTML = "Documents en cours de chargement...";
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
            "<p class='text-danger'>" + $("input[name='ErrType'").val() + "</p>"
        );
        myModal.show();
    } else if ($(".typeDomicile").val() == "") {
        $(".modal-body").html(
            "<p class='text-danger'>" + $("input[name='ErrDom'").val() + "</p>"
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
        const fileInput = document.querySelector('input[type="file"]');
        const files = fileInput.files;

        if (files.length === 0) {
            console.log("No files selected.");
            return;
        }

        const formData = new FormData();

        for (let i = 0; i < files.length; i++) {
            formData.append("file[]", files[i]);
        }
        formData.append("_token", $("input[name='_token']").val());
        formData.append("user", $("input[name='_token']").val());

        fetch("DocumentsUpload", {
            method: "POST",
            body: formData,
        })
            .then((response) => {
                console.log(response.data);
            })
            .catch((error) => {
                console.error("Upload error:", error);
            });
    }
});
