<?php
require_once "data.php";

var_dump($_GET);
var_dump($_POST);

if (isset($_GET["boisson"]) == true) {

    if (isset($_POST["sucre"]) == true) {
        foreach ($boissons as $boisson) {
            if ($_GET["boisson"] == $boisson["nom"]) {



                $nombreSucre = $_POST["sucre"];
                if ($nombreSucre >= 0 and $nombreSucre <= 5) {
?>
                    <p> Voici votre récapitulatif :
                        <?php echo ($_GET["boisson"]) ?> avec
                        <?php
                        echo ($nombreSucre);
                        if ($nombreSucre >= 2) {
                            echo (" sucres ");
                        } else {
                            echo (" sucre ");
                        }
                        ?>cela vous fera <?php echo ($boisson["prix"]); ?> euros </p>
                    <?php

                    ?>
                    <form method="POST" action="finCommande.php">
                        <label for="submit"></label>
                        <input type="submit" value="Valider la commande">
                    </form>
                    <form method="POST" action="choixBoisson.php">
                        <label for="submit"></label>
                        <input type="submit" value="Annuler ma commande">
                    </form>
<?php

                } else {
                    header("location: choixBoisson.php");
                }
            }
        }
    } else {

        header("location: choixBoisson.php");
    }
} else {
    header("location: choixBoisson.php");
}
