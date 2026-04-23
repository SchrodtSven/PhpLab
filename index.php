<?php

require_once 'src/PhpLab/Autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use SchrodtSven\PhpLab\Entity\User;

$usr = new User();

$usr->name = " Sven Schrodt  ";
$usr->setPass("L1nuXSuxx!");
var_dump($usr);