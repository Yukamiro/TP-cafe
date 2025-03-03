<?php
require_once "data.php";

var_dump($_GET);
var_dump($_POST);

if (isset($_POST["nom"]) == true) {
    if (isset($_POST["sucre"]) == true) {

        foreach ($boissons as $boisson) {
            echo ($boisson["sucre"]);

            if ($_GET["boisson"] == $boisson["nom"]) {
                $boissonChoisis = $boisson["nom"];
            }
        }
    }
}
