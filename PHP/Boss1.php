<?php
/*
echo("Coucou\n");

$reponse = readline("est-ce qu'il fait beau ?\n");

echo("ah lala ! ta réponse est $reponse ! \n");

// Exo : Somme et moyenne
$monTableau = [];
$monTableau[]=2;
$monTableau[]=5;
$monTableau[]=9;
$monTableau[]=15;
foreach($monTableau as $element){
    echo($element);
}

$monTableau = [];
for($i=1;$i<=5;$i++){
	$reponse = readline("Donne un entier");
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
*/

// boss final : entretien d'embauche
function embaucheOuPas($reponse1, $reponse2){
	if($reponse1=='n' && $reponse2=='n'){
		return 'entretien';
	}elseif($reponse1=='n' && $reponse2=='o'){
		return 'Dommage';
	}elseif($reponse1=='o' && $reponse2=='n'){
		return 'Embauché';
	}elseif($reponse1=='o' && $reponse2=='o'){
		return 'entretien';
	}
}

$reponse1 = readline("Motivé ?");
$reponse2 = readline("Bcq de pauses ?");
$resultat = embaucheOuPas($reponse1, $reponse2);

echo($resultat);