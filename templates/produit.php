<?php
require_once "tab.php";

//var_dump($_GET);

$indice = (isset($_GET["art"]))? $_GET["art"] : 0;
$article = $articles[$indice];

?>

<div class="container">
    <div class="media mt-4">
        <div class="column col-6">
            <img src="<?= $article["image"] ?>" class="mr-3" alt="...">
            <div class="row m-2">
                <img src="https://place-hold.it/152x100" class="mr-3" alt="...">
                <img src="https://place-hold.it/152x100" class="mr-3" alt="...">
                <img src="https://place-hold.it/152x100" class="mr-3" alt="...">
            </div>
        </div>
        
        <div class="media-body">
            <h2 class="mt-0"><?= $article["nom"] ?> <span class="badge badge-secondary">Nouveauté !</span></h5>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Well done!</h4>
                <p><?= $article["ref"] ?></p>
                <hr>
                <p class="mb-0">Stock restant : <?= $article["stock"] ?> unités</p>
            </div>
            <p><?= $article["description"] ?></p>
            <p class="card-text text-primary h4"><?= $article["prix"] ?> €</p>
            <a class="btn btn-primary" href="panier.php" role="button">Ajouter au panier</a>
        </div>
    </div>
</div>