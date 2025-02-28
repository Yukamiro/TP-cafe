<?php
require_once "data.php";
var_dump($_POST);

if ($_POST == $boissons["nom"]) {
    header("location: choixSucre.php");
    exit();
} else {
    header("location: choixBoisson.php");
    exit();
}
