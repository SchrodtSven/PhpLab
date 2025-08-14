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
#print_r($lst->tail());

#print_r($filter->by('id')->between(991, 989));

#print_r($filter->by('gender')->nin(['Male', 'Female']));

# ->by('last_name')->ends('er')
#print_r($filter->by('city')->eq('Berlin')->by('first_name')->in(['Felita', 'Harland'])->getFiltered());


print_r($filter->by('first_name')->uniq());