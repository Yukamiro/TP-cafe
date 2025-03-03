<?php
require_once "data.php";
var_dump($_POST);

if (isset($_POST["nom"]) == true) {

    foreach ($boissons as $boisson) {

        if ($_POST["nom"] == $boisson["nom"]) {

            // mettre un if pour dire que la boisson qu'on a choisis contient du sucre oui ou non
            if ($boisson["sucre"] == true) {
                header("location: choixSucre.php?boisson=" . $_POST["nom"]);
            } else {
                header("location: confirmCommande.php?boisson=" . $_POST["nom"]);
            }
        }
    }
} else {
    header("location: choixBoisson.php");
}
