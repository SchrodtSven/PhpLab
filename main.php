<?php

require_once 'src/PhpLab/Autoload.php';



use SchrodtSven\PhpLab\Streams\CsvManager;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\Operational\ArrayFilter;


$fn = 'src/PhpLab/Data/non-php/germany.csv';
$csv = new CsvManager($fn);

$lst = $csv->asList();

$filter = new ArrayFilter($lst);

#$filtered = $filter->by('country')->generic('Germany', ArrayFilter::NE);
# idx: 46388
#$filtered = $filter->by('city')->contains('Berlin');

#$filtered = $filter->by('idx')->gt(46300);




print_r($filter->min('idx'));
echo PHP_EOL;
print_r($filter->max('idx'));

print_r($filter->uniq('admin_name'));