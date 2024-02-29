<?php
/*
$prenom = readline("Comment t'appelles-tu ? ");

echo("Coucou $prenom!  ");

$age = readline("Quelle age a tu ? ");

echo("$prenom.... $age ans ??? Menteur ! ");
*/
$monTableau= [];
for ($i =1; $i<=5; $i++){  
    $reponse = readline("un entier ? ");
    $monTableau[] = $reponse;
}
$somme = 0;
$nombre = 0;
foreach($monTableau as $element){
    $somme = $somme + $element;
    $nombre++;
}
echo("La somme est $somme \n");
$moyenne = $somme/$nombre;
echo("La moyenne est $moyenne \n");
