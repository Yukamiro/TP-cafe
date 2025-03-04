<?php
require_once "data.php";
var_dump($_GET);
var_dump($_POST);

if (isset($_POST["nom"], $_POST["name"])) {

    foreach ($boissons as $boisson) {
        foreach ($gouters as $gouter) {

            if ($_POST["nom"] == $boisson["nom"] and $_POST["name"] == $gouter["name"]) {

                // mettre un if pour dire que la boisson qu'on a choisis contient du sucre oui ou non
                if ($boisson["sucre"] == true) {
                    header("location: choixSucre.php?boisson=" . $_POST["nom"] . "&gouter=" . $_POST["name"]);
                } else {
                    header("location: confirmCommande.php?boisson=" . $_POST["nom"] . "&gouter=" . $_POST["name"]);
                }
            }
        }
    }
} else {
    header("location: choixBoisson.php");
}
