<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/config/autoload.php");

$pizza = new Pizza($_POST['nom'], $_POST['prix']);
$pizza->save();
// $lesIngredients = Ingredients::findAll();
// foreach($lesIngredients as $ingredients){
//     $quantite = $_POST['ingredients'. $ingredients->getId()];
//     if($quantite>0){
//         $ingredientsPizza = new IngredientsPizza($ingredients, $pizza, $quantite);
//         $ingredientsPizza->save();
//     }
// }

header("Location: /pizzaliste.php");