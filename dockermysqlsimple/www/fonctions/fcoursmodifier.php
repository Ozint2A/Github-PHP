<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/config/autoload.php');

$cours = Cours::find($_POST['id']);
$cours->setNom($_POST['nom']);
$cours->setDescription($_POST['description']);
$cours->save();

header("Location /index.php");
