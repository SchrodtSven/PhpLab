<?php

require_once 'src/PhpLab/Autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


use SchrodtSven\PhpLab\Streams\CsvManager;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\Operational\ArrayFilter;
use SchrodtSven\PhpLab\Data\ArrayExternalDataProvider;
use SchrodtSven\PhpLab\Snaky\Kernel\Accessor;

$foo = ['::2',
        '1:2',
        '1:2:2',
    //    ['foo', 'bar']
];
foreach($foo as $itm) {
    $bar = new Accessor($itm);
    if(is_array($itm))
        $itm = implode(', ', $itm);
    print ($itm . PHP_EOL);
    print($bar) . PHP_EOL;

   // var_dump(explode(':', $itm));
}   


#var_dump(str_contains('1:2', ':'));
