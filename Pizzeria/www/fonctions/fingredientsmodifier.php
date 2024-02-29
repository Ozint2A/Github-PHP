<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/config/autoload.php");

$ingredients = Ingredients::find($_POST['id']);
$ingredients->setNom($_POST['nom']);
$ingredients->setPrix($_POST['prix']);
$ingredients->setCalorie($_POST['calorie']);
$ingredients->save();

header("Location: /ingredientsliste.php");