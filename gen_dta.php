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
$all = $filter->getFiltered()->col('ip_address')->raw();
$idc = array_rand($all, 55);
#print_r($filter->getFiltered()->col('ip_address')->raw());

#print_r($idc);
#exit();
$ipNum = new ListClass([]);

foreach($idc as $idx) {
    $cur = new StringClass($all[$idx]);
    $whole = clone( $cur);
    // $bg = $cur->substr(0, rand(1, strlen((string) $cur)-5));
    // $en = $cur->substr(-3, 3);
    $st = rand(0, round(strlen((string) $cur)/3, 0));
    $le = strlen((string) $cur) - rand(0, round(strlen((string) $cur)/2, 0));
    $mid = $cur->substr($st, $le);
    $ipNum->push([$st, $le, $whole->q(), (string) $mid->q()]);
}


foreach($ipNum as $legacy) 
{
    echo '[';
    print((string) (implode(', ', $legacy)));
    echo '],' . PHP_EOL;
}