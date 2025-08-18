<?php

require_once 'src/PhpLab/Autoload.php';



use SchrodtSven\PhpLab\Streams\CsvManager;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\Operational\ArrayFilter;
use SchrodtSven\PhpLab\Data\ArrayExternalDataProvider;

$prv = new ArrayExternalDataProvider();

print_r($prv->getMockDataMeta(["first_name", "lat", "lng", "mvie_gnr"], 3));

