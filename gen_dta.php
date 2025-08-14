<?php
require_once 'src/PhpLab/Autoload.php';
use SchrodtSven\PhpLab\Repl\Interpreter;
use SchrodtSven\PhpLab\Repl\Lexer;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\StringClass;
use SchrodtSven\PhpLab\Data\NamedSymbols;
use SchrodtSven\PhpLab\Types\DictClass;
use SchrodtSven\PhpLab\Data\Mocky;

$fn = 'src/PhpLab/Data/non-php/mock_detail.json';
$lst = ListClass::fromJsonFile($fn);
$filter = $lst->getFilter();
$foo = $filter->min('member_since');
$bar = $filter->max('member_since');
print_r([$foo, $bar]);
