<?php
require_once('classes/compte.php');

$monCompte = new CompteBancaire('Mario');
$monCompte->depot(1000);
$monCompte->negatifAutorise = true;
$monCompte->retrait(900);
echo(' le solde est de: '.$monCompte->getSolde());

$monAutreCompte = new CompteBancaire('Abdelkaderr');
$monAutreCompte->depot(1000);
$monAutreCompte->negatifAutorise = false;
$monAutreCompte->retrait(1100);
echo(' le solde est de: '.$monAutreCompte->getSolde());

