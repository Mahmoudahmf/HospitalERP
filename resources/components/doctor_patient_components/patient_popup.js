if(document.body.contains(document.getElementById("Prescription_btn"))) {
    document.getElementById("Prescription_btn").addEventListener("click", function () {
        document.querySelector(".examination_description_main").style.display =
            "flex";
    });

    document.getElementById("popup_close").addEventListener("click", function () {
        document.querySelector(".examination_description_main").style.display =
            "none";
    });

}
