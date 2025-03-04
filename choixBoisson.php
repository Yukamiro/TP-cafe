<?php
require_once "data.php";
var_dump($_POST);
?>

<form method="POST" action="confirmBoisson.php">

    <select name="nom" id="nom">
        <?php foreach ($boissons as $boisson) { ?>
            <option value="<?php echo ("Café expresso") ?>">
                <?php echo ($boisson["nom"]) ?>
            </option>
        <?php
        }
        ?>
    </select>
    <select name="name" id="name">
        <?php foreach ($gouters as $gouter) { ?>
            <option value="<?php echo ("kinder Bueno") ?>">
                <?php echo ($gouter["name"]) ?>
            </option>
        <?php
        }
        ?>
    </select>

    <label for="submit"></label>
    <input type="submit" value="Envoyer">
</form>