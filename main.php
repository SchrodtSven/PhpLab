<?php

require_once 'src/PhpLab/Autoload.php';
use SchrodtSven\PhpLab\Repl\Interpreter;
use SchrodtSven\PhpLab\Repl\Lexer;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\StringClass;
use SchrodtSven\PhpLab\Data\NamedSymbols;
$r = new \Random\Randomizer();

$t = implode(', ', range(1,9));

print($t);



