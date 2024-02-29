<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/config/autoload.php');

$cours = new Cours($_POST['nom'], $_POST['description']);

$cours->save();

header("Location: /index.php");