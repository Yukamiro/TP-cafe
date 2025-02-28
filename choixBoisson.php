<?php
require_once "data.php";

?>

<form method="POST" action="data.php">

    <select name="type" id="type">
        <?php foreach ($boissons as $boisson) { ?>
            <option value="<?php $boisson["nom"] ?>"><?php $boisson["nom"] ?></option>
        <?php
        }
        ?>
    </select>
</form>



<input type="submit" value="Envoyer">