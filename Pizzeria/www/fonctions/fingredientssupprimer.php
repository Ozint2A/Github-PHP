<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/config/autoload.php");

$ingredients = Ingredients::find($_GET['id']);

$ingredients->delete();

header("Location: /ingredientsliste.php");