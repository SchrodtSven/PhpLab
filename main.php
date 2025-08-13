<?php

require_once 'src/PhpLab/Autoload.php';
use SchrodtSven\PhpLab\Repl\Interpreter;
use SchrodtSven\PhpLab\Repl\Lexer;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\StringClass;
use SchrodtSven\PhpLab\Data\NamedSymbols;
use SchrodtSven\PhpLab\Types\DictClass;
use SchrodtSven\PhpLab\Data\Mocky;

$idc = array_rand(Mocky::FEM_FIRST, 23);

$first = new ListClass([]);

foreach($idc as $idx) {
    $cur = new StringClass(Mocky::FEM_FIRST[$idx]);
    $whole = clone( $cur);
    $bg = $cur->substr(0, rand(1, strlen($cur)-1));
    $en = $cur->substr(-3, 3);
    $mid = $cur->substr(rand(1, round(strlen($cur)/2, 0)), rand(3, strlen($cur)-2));
    $first->push([(string) $whole->q(), (string) $bg->q(), (string) $mid->q(), (string) $en->q()]);
}
print_r($first);
$tpl = ' #[TestWith(%s)]' . PHP_EOL;
foreach($first as $itm) {
    $str = (new StringClass(implode(', ', $itm)))->append(']')->prepend('[');
    printf($tpl, $str);
}