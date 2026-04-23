<?php

declare(strict_types=1);
/**
 * Foo - testing tiny parser
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-02-04
 */

require_once 'src/PhpLab/Autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use SchrodtSven\PhpLab\Data\ArrayExternalDataProvider;

foreach (ArrayExternalDataProvider::MAIN_MOCK as $itm) {
    printf(
        "['%s', '%s'],%s",
        $itm[3],
        md5($itm[1] . $itm[2]),
        PHP_EOL
    );
}
