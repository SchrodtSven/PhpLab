<?php

require_once 'src/PhpLab/Autoload.php';
use SchrodtSven\PhpLab\Repl\Interpreter;
use SchrodtSven\PhpLab\Repl\Lexer;
use SchrodtSven\PhpLab\Types\ListClass;

$foo = new ListClass([2,33,4,55,66]);
print($foo[3]);