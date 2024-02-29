<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/config/autoload.php");

$ingredients = new Ingredients($_POST['nom'], $_POST['prix'], $_POST['calorie']);


$ingredients->save();

header("Location: /ingredientsliste.php");