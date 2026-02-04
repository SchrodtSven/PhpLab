<?php

require_once 'src/PhpLab/Autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use SchrodtSven\PhpLab\Types\StringClass;

use SchrodtSven\PhpLab\Parser\Generic;




// $bar = new StringClass("dhfjhdsf    dksjndkjs   666");
// var_dump($bar->splitBy("    "));
// exit();


// $foo = Generic::fromFile('dta/mime_types.txt');
$foo = Generic::fromFile('dta/foo.txt');
$foo->splitEntitiesBy("    ");
var_dump($foo->getLines());



//var_dump(explode("\t", $foo->getLines()[5]));

