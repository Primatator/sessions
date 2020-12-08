<?php
require_once "tab.php";

?>

<div class="jumbotron row">
    <div class="col-md-10 m-auto">
        <h1 class="display-4">Bienvenue sur notre site de vente de produits régionaux!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-10 m-auto row">

        <?php foreach($articles as $indice => $article) : ?>

            <article class="card col-md-6 col-lg-4">
                <img src="<?= $article["image"] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title h5"><?= $article["nom"] ?></h2>
                    <p class="card-text"><?= $article["description"] ?></p>
                    <p class="card-text text-primary h4"><?= $article["prix"] ?> €</p>
                    <a href="index.php?page=produit&art=<?= $indice ?>" class="btn btn-primary">Voir l'article</a>
                </div>
            </article>

        <?php endforeach ?>

        <!-- <article class="card col-md-6 col-lg-4">
            <img src="https://place-hold.it/500x300" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title h5">Et autem ut officia.</h2>
                <p class="card-text">Eligendi rerum quo ut repudiandae accusantium. Odio explicabo nihil officia.</p>
                <p class="card-text text-primary h4">10,90 €</p>
                <a href="" class="btn btn-primary">Voir l'article</a>
            </div>
        </article>
        <article class="card col-md-6 col-lg-4">
            <img src="https://place-hold.it/500x300" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title h5">Consequatur doloremque nihil dolorem.</h2>
                <p class="card-text">Cumque labore fugit consequatur qui. Ea minus qui et. Autem qui cum deleniti a.</p>
                <p class="card-text text-primary h4">12,90 €</p>
                <a href="" class="btn btn-primary">Voir l'article</a>
            </div>
        </article>
        <article class="card col-md-6 col-lg-4">
            <img src="https://place-hold.it/500x300" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title h5">Et veniam quos.</h2>
                <p class="card-text">Incidunt eos omnis placeat necessitatibus. Quidem necessitatibus suscipit voluptatum aut quod quam.</p>
                <p class="card-text text-primary h4">8,90 €</p>
                <a href="" class="btn btn-primary">Voir l'article</a>
            </div>
        </article>
        <article class="card col-md-6 col-lg-4">
            <img src="https://place-hold.it/500x300" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title h5">Nam perspiciatis.</h2>
                <p class="card-text">Dolor qui autem cum voluptatum est vitae. Deleniti et ut voluptates et. Sed vel ipsum enim totam.</p>
                <p class="card-text text-primary h4">24,90 €</p>
                <a href="" class="btn btn-primary">Voir l'article</a>
            </div>
        </article>
        <article class="card col-md-6 col-lg-4">
            <img src="https://place-hold.it/500x300" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title h5">Sapiente dolore fugiat.</h2>
                <p class="card-text">Est delectus veritatis quo ipsum qui. Id error omnis sit minima et. Eum accusamus non beatae.</p>
                <p class="card-text text-primary h4">5,40 €</p>
                <a href="" class="btn btn-primary">Voir l'article</a>
            </div>
        </article>
        <article class="card col-md-6 col-lg-4">
            <img src="https://place-hold.it/500x300" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title h5">Quia reprehenderit similique.</h2>
                <p class="card-text">Nemo dolore explicabo consectetur. Exercitationem ipsum pariatur cumque iure id quidem.</p>
                <p class="card-text text-primary h4">3,90 €</p>
                <a href="" class="btn btn-primary">Voir l'article</a>
            </div>
        </article> -->
    </div>
</div>