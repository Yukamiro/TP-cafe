<?php
require_once "data.php";
var_dump($_GET);


if (isset($_GET["boisson"], $_GET["gouter"])) {

    foreach ($boissons as $boisson) {
        foreach ($gouters as $gouter) {

            if ($_GET["boisson"] == $boisson["nom"] and $_GET["gouter"] == $gouter["name"]) {
                $gouterChoisis = $gouter["name"];
                $boissonChoisis = $boisson["nom"];
            }
        }
    }
} else {
    header("location: confirmCommande.php");
}

?>

<p> Vous avez choisie un(e) <?php echo ($boissonChoisis) ?> et un <?php echo ($gouterChoisis) ?></p>

<form method="POST" action="confirmCommande.php?boisson=<?php echo ($_GET["boisson"] . "&gouter=" . $_GET["gouter"]) ?>">
    <label for="sucre"> Combien de sucre ? (0 => 5) sur votre <?php echo ($_GET["boisson"]) ?></label>
    <input type="number" id="sucre" name="sucre" value="5" min="0" max="5">
    <label for="submit"></label>
    <input type="submit" value="Envoyer">

</form>