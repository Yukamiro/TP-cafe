<?php
require_once "data.php";
var_dump($_GET);

if (isset($_POST["nom"]) == true) {

    foreach ($boissons as $boisson) {

        if ($_POST["nom"] == $boisson["nom"]) {

            // mettre un if pour dire que la boisson qu'on a choisis contient du sucre oui ou non
            if ($boisson["sucre"] == true) {
                header("location: choixSucre.php$_GET");
            } else {
                header("location: confirmCommande.php$_GET");
            }
        }
    }
} else {
    header("location: choixBoisson.php");
}
