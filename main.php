<?php

require_once 'src/PhpLab/Autoload.php';
use SchrodtSven\PhpLab\Repl\Interpreter;
use SchrodtSven\PhpLab\Repl\Lexer;

$lexer = new Lexer();

#var_dump($lexer->tokenizeLn('ROT foo bar -m'));

var_dump(array_is_list([]));