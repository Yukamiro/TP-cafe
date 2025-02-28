<?php
require_once "data.php";
var_dump(
    $_POST
);
?>

<form method="POST" action="confirmBoisson.php">

    <select name="nom" id="nom">
        <?php foreach ($boissons as $boisson) { ?>
            <option value="<?php echo ($boisson["nom"]) ?>">
                <?php echo ($boisson["nom"]) ?>
            </option>
        <?php
        }
        ?>
    </select>


    <label for="submit"></label>
    <input type="submit" value="Envoyer">
</form>