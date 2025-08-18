<?php

require_once 'src/PhpLab/Autoload.php';



use SchrodtSven\PhpLab\Streams\CsvManager;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\Operational\ArrayFilter;


$fn = 'src/PhpLab/Data/non-php/germany.csv';
$csv = new CsvManager($fn);

$lst = $csv->asList();

$filter = new ArrayFilter($lst);

//$filtered = $filter->by('country')->generic('Germany', ArrayFilter::NE);
$filtered = $filter->by('city')
                        ->contains('Berlin');

print_r($filtered->getFiltered()->raw());
# idx: 46388
#$filtered = $filter->by('city')->contains('Berlin');

#$filtered = $filter->by('idx')->gt(46300);

#exit();


print_r($filter->min('idx')); 
echo PHP_EOL;
print_r($filter->max('idx'));
echo PHP_EOL;
print_r($filter->by('admin_name')->uniq());
echo PHP_EOL;