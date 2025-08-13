<?php

require_once 'src/PhpLab/Autoload.php';
use SchrodtSven\PhpLab\Streams\CsvManager;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\Operational\ArrayFilter;

#$fn = 'src/PhpLab/Data/non-php/female_first.csv';
$fn = 'src/PhpLab/Data/non-php/city_country_geo_pop.csv';
$csv = new CsvManager($fn);

$lst = new ListClass($csv->asArray());

$filter = new ArrayFilter($lst);

$filtered = $filter->by('city')->eq('Berlin');

print_r($filtered);

