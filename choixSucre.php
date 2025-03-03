<?php
require_once "data.php";
var_dump($_GET);
var_dump($_POST);


if (isset($_GET["boisson"]) == true) {

    foreach ($boissons as $boisson) {

        if ($_GET["boisson"] == $boisson["nom"]) {
            $boissonChoisis = $boisson["nom"];
        }
    }
} else {
    header("location: confirmCommande.php");
}

?>

<p> Vous avez choisie <?php echo ($boissonChoisis) ?></p>

<form method="POST" action="confirmCommande.php?boisson=<?php echo ($_GET["boisson"]) ?>">
    <label for="sucre"> Combien de sucre ? (0 => 5)</label>
    <input type="number" id="sucre" name="sucre" value="0" min="0" max="5">
    <label for="submit"></label>
    <input type="submit" value="Envoyer">

</form>