<?php
require_once 'src/PhpLab/Autoload.php';

use PhpParser\Node\Expr\Cast\String_;
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
$all = new ListClass($filter->getFiltered()->raw());
$flr = $all->getFilter();
$tmp = $flr->by('id')->between(333, 777);
#print_r($tmp->getFiltered()->tail());
#exit();
#$idc = array_rand($all, 55);
#print_r($filter->getFiltered()->col('ip_address')->raw());

foreach($all as $itm) {
    foreach($itm as $k => &$part) {

        if(!is_numeric($part)) {
            $part = "\"{$part}\"";
        }
       
    }
     print '[' . implode(', ', $itm) . '],' .PHP_EOL;
}

$kys = array_keys($itm);
foreach($kys as &$k) {
     $k = "\"{$k}\"";
}
print '[' . implode(', ', $kys) . '],' .PHP_EOL;
#var_dump($all->tail());