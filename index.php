<?php
session_start();

// index.php?page=produit&art=3

//var_dump($_GET);
var_dump($_POST);
var_dump($_SESSION);

/* 
$_GET = [
    "page" => "produit",
    "art" => 3
] 
*/

$page = (isset($_GET["page"]))? $_GET["page"] : "home";

switch($page) {
    case "home" : $template = "produits.php";
    break;
    case "produit" : $template = "produit.php";
    break;
    case "connexion" : $template = "connexion.php";
    break;
    case "deconnexion" : $template = deconnect();
    break;
    case "panier" : $template = connect();
    break;
    default : $template = "produits.php";
}


function connect() {

    // Il s'agira avant de vérifier le droit de l'utilisateur à se connecter au système

    if(isset($_POST['email'])) {
        $_SESSION["user"] = $_POST['email'];
    }

    if(isset($_SESSION["user"])) {
        return "panier.php";
    } else {
        return "produits.php";
    }
  
}

function deconnect() {

    $_SESSION = [];
    session_destroy();

    return "produits.php";
}


function ajoutPanier() {

}

//$template = "panier.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Produits locaux provençaux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="img/lavande.png" alt=""> MADE IN PROVENCE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?page=produits">Tous nos produits <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">

                <?php if(!isset($_SESSION["user"])): ?>
                    <a class="nav-link" href="index.php?page=connexion">Connexion <span class="sr-only"></span></a>
                <?php else: ?>
                    <a class="nav-link" href="index.php?page=deconnexion">Déconnexion <span class="sr-only"></span></a>
                    <a class="nav-link" href="index.php?page=panier">Mon panier <span class="sr-only"></span></a>
                <?php endif ?>

                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- Le code spécifique d'une page -->
    <?php require "templates/$template" ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            
</body>
</html>