<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/config/autoload.php');

$cours = Cours::find($_GET['id']);

$cours->delete();

header("Location /index.php");