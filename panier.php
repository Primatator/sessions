<?php

require_once "tab.php";

 foreach($articles as $indice => $article):?>
     <?= $article["nom"] ?>           
     <img src="https://place-hold.it/152x100" class="mr-3" alt="...">
     <h2 class="mt-0"><?= $article["nom"] ?>
     <p class="card-text text-primary h4"><?= $article["prix"] ?> €</p>

 




<?php endforeach ?>
               

 





