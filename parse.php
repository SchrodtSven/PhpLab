<?php

$dta = file('dta/mime_types.txt');

foreach($dta as $itm) {
    $tmp = explode("\t", $itm);
    var_dump($tmp);
    exit(23);
}

