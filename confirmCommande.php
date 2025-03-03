<?php
require_once "data.php";

var_dump($_GET);
var_dump($_POST);

// Vérifie si la boisson choisis existe en renvoyant la valeur "true"
if (isset($_GET["boisson"]) == true) {
    // Une boucle qui passe par toute les boissons
    foreach ($boissons as $boisson) {
        // Vérifie si le nom correspond au nom choisis de la boisson
        if ($_GET["boisson"] == $boisson["nom"]) {
            // Vérifie si le sucre est dans la boisson en renvoyant la valeur "true"
            if (isset($_POST["sucre"]) == true) {

                $nombreSucre = $_POST["sucre"];
                // Un if qui vérifie si la valeur du sucre est entre 0 et 5
                if ($nombreSucre >= 0 and $nombreSucre <= 5 and $nombreSucre != "") {
                    //Renvoie le récapitulatif de la commande avec le sucre
?>
                    <p> Voici votre récapitulatif :
                        <?php echo ($_GET["boisson"]) ?> avec
                        <?php
                        echo ($nombreSucre);
                        // un if qui permet de rajouter un "s" sur le sucre si il y en à plusieurs 
                        if ($nombreSucre >= 2) {
                            echo (" sucres ");
                        } else {
                            echo (" sucre ");
                        }
                        ?>cela vous fera <?php echo ($boisson["prix"]); ?> € </p>
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
            } else {
                //Renvoie le récapitulatif de la commande sans le sucre
                ?>
                <p> Voici votre récapitulatif :
                    <?php echo ($_GET["boisson"]) ?> cela vous fera <?php echo ($boisson["prix"]); ?> € </p>

                <form method="POST" action="finCommande.php">
                    <label for="submit"></label>
                    <input type="submit" value="Valider la commande">
                </form>
                <form method="POST" action="choixBoisson.php">
                    <label for="submit"></label>
                    <input type="submit" value="Annuler ma commande">
                </form>
<?php
            }
        }
    }
    // Renvoie à la page du choix de la boisson en cas d'erreur
} else {
    header("location: choixBoisson.php");
}
