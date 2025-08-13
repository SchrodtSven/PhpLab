<?php

require_once 'src/PhpLab/Autoload.php';
use SchrodtSven\PhpLab\Repl\Interpreter;
use SchrodtSven\PhpLab\Repl\Lexer;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\StringClass;
use SchrodtSven\PhpLab\Data\NamedSymbols;

$code = "NOW --verbose ";
$code = 'Foo bar    nn. Gaz.   Guy Baz';

$t = new StringClass($code);
$tkn = $t->splitByWS(false);
var_dump($tkn);
// $tkn->walk(function(&$item) {
    
//     $item = (new StringClass($item))->enclose("'", "'");
// });
$tkn->sort()->quote();
print($tkn->join(', ')->append(']')->prepend('['));
$cmd = $tkn->shift();

print($cmd);


// /P8Two/src/P8Two/Type/ListClass.php