<?php

require_once 'src/PhpLab/Autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


use SchrodtSven\PhpLab\Parser\Generic;

// $foo = Generic::fromFile('dta/mime_types.txt');
$foo = Generic::fromFile('dta/foo.txt');
$foo->splitEntitiesBy("\t");
var_dump($foo->getLines());



//var_dump(explode("\t", $foo->getLines()[5]));

