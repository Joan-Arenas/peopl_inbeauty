$(document).ready(function () {
// **** FONCTION AJOUTER AU PANIER ****

    $(".ajoutPanier").click(function () {
        const id = $(this).data("id")
        $.ajax({
            url: "ajouter/" + id
        }).done(function (result) {
            $("#" + id).html(result.qte)
        })
    });

// **** FONCTION DIMINUER AU PANIER ****
    $(".diminuerPanier").click(function () {
        const id = $(this).data("id")
        $.ajax({
            url: "diminuer/" + id
        }).done(function (result) {
            if (result.qte <= 0) {
                $("#tr-" + id).remove()
            } else {
                $("#" + id).html(result.qte)
            }
        })
    });
})



