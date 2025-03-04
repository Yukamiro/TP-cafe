<?php
require_once "data.php";
var_dump($_POST);
?>

<form method="POST" action="confirmBoisson.php">
    <label for="name">Choisir une boisson</label>
    <select name="nom" id="nom">
        <?php foreach ($boissons as $boisson) { ?>

            <option value="<?php echo ($boisson["nom"]) ?>">
                <?php echo ($boisson["nom"]) ?>
            </option>
        <?php
        }
        ?>
    </select>
    <label for="name">Choisir un gouter (c'est bon pour toi petit)</label>
    <select name="name" id="name">
        <?php foreach ($gouters as $gouter) { ?>
            <option value="<?php echo ($gouter["name"]) ?>">
                <?php echo ($gouter["name"]) ?>
            </option>
        <?php
        }
        ?>
    </select>

    <label for="submit"></label>
    <input type="submit" value="Envoyer">
</form>