<?php
require_once "data.php";
var_dump($_GET);
var_dump($_POST);


// Vérifie si la boisson choisis existe en renvoyant la valeur "true"
if (isset($_GET["boisson"], $_GET["gouter"])) {
    // Une boucle qui passe par toute les boissons
    foreach ($boissons as $boisson) {
        foreach ($gouters as $gouter) {
            // Vérifie si le nom correspond au nom choisis de la boisson
            if ($_GET["boisson"] == $boisson["nom"] and $_GET["gouter"] == $gouter["name"]) {
                // Vérifie si le sucre est dans la boisson en renvoyant la valeur "true"
                if (isset($_POST["sucre"])) {
                    $nombreSucre = $_POST["sucre"];
                    // Un if qui vérifie si la valeur du sucre est entre 0 et 5 et que ce n'est pas une chaîne de caractère
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
                            ?> et un <?php echo ($_GET["gouter"]) ?> :
                            <?php echo ($boisson["prix"] + $gouter["price"]); ?> €
                        </p>

                    <?php
                        // Renvoie à la page du choix de la boisson en cas d'erreur
                    } else {
                        header("location: choixBoisson.php");
                    }
                } else {
                    //Renvoie le récapitulatif de la commande sans le sucre
                    ?>
                    <p> Voici votre récapitulatif :
                        <?php echo ($_GET["boisson"]) ?> et un
                        <?php echo ($_GET["gouter"]) ?> :
                        <?php echo ($boisson["prix"] + $gouter["price"]); ?> €
                    </p>
                <?php
                }
                ?>
                <form method="POST" action="finCommande.php">
                    <input type="submit" value="Valider la commande">
                    <input type="submit" value="Annuler la commande" formaction="choixBoisson.php">
                </form>

<?php
            }
        }
    }
    // Renvoie à la page du choix de la boisson en cas d'erreur
} else {
    header("location: choixBoisson.php");
}
