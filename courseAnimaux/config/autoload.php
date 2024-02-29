<?php
spl_autoload_register(function($class){
    require_once("classes/$class.php");
    // $_SERVER['DOCUMENT_ROOT'] .
});