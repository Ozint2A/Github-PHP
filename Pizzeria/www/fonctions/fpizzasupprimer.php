<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/config/autoload.php");

$pizza = Pizza::find($_GET['id']);
$pizza->delete();

header("Location: /pizzaliste.php");
