<?php
session_start();

$identifiant = $_POST['identifiant'];
$mdp = $_POST['motdepasse'];

$identifiantOK = "mario@mario.fr";
$mdpOK = "Paraguay";

if ($identifiant == $identifiantOK and $mdp == $mdpOK) {
    $_SESSION['identifiant'] = $identifiant;
    $resultat = ["msg" => 'Connexion Ok', "numero" => "1"];
} else {
    $resultat = ["msg" => 'Veuillez retaper votre identifiant/mdp', "numero" => "2"];
}
echo json_encode($resultat);
