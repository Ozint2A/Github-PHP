<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/config/autoload.php");

$pizza = Pizza::find($_POST['id']);
$pizza->setNom($_POST['nom']);
$pizza->setPrix($_POST['prix']);

$ingredientsPizza = $pizza->getIngredientsPizza();
foreach($ingredientsPizza as $cp){
    $cp->delete();
}
$lesIngredients = Ingredients::findAll();
foreach ($lesIngredients as $ingredient) {
    $quantite = $_POST["ingredients".$ingredient->getId()];
    if($quantite>=0){
        $ingredientsPizza = new IngredientsPizza($ingredient, $pizza, $quantite);
        $ingredientsPizza->save();
    }
}

$pizza->save();

header("Location: /pizzaliste.php");