<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "config/autoload.php");

function effaceEcran(){
    echo chr(27)."[2J";
    echo chr(27)."[;H";
}

$participants = [];
$participants[] = new Lapin("Mario");
$participants[] = new Tortue("Jean Marc");
$participants[] = new Wapiti("Gabriel");
$participants[] = new Serpents("Marco");
$participants[] = new CochonsInde("boby");

for($tour=1; $tour<=10; $tour++){
    effaceEcran();
    echo("Tourr " . $tour . "\n");
    // les particpants jouent (avancent et lancent un sort)
    foreach($participants as $participant){
        $participant->avancer();
        $participant->lanceSort($participants);
    }
    // affichage des positions quand tous les participants ont joué
    foreach($participants as $participant){
        echo($participant->getGraphPosition());
    }
    sleep(1);
}