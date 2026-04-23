<?php

require_once 'src/PhpLab/Autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use SchrodtSven\PhpLab\Entity\User;
use SchrodtSven\PhpLab\Data\ArrayExternalDataProvider;
$usr = new User();

$usr->name = " Sven Schrodt  ";
$usr->setPass("L1nuXSuxx!");
var_dump($usr);


var_dump(ArrayExternalDataProvider::MAIN_MOCK);