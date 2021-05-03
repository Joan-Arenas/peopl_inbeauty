$(document).ready(function () {
    $(".navPanier").mouseenter(function (e) {
        e.preventDefault();
        $.ajax({
            url: "/panier",
            methods: "GET"
        }).done((contenuPanier) => {

            const imagePath = "/images/produits/";
            $(".contenu-panier").empty();

            contenuPanier.forEach(function (article) {
                $(".contenu-panier").append(
                    `<th>
                                            <div class="p-2">
                                                <img src="${ imagePath }/${ article.fichierPhoto }" 
                                                     alt="${article.nom}" width="70"
                                                     class="img-fluid rounded shadow-sm">
                                                <div class="ml-3 d-inline-block align-middle">
                                                    <h5 class="mb-0">
                                                        <a 
                                                           class="text-dark d-inline-block align-middle">"${article.nom}"</a>
                                                    </h5>
                                                    <span class="text-muted font-weight-normal font-italic d-block">Categorie: "${article.categorie}"</span>
                                                </div>
                                            </div>
                                        </th>`
                );
            })
        })
    });
});

