<?php

declare(strict_types=1);
/**
 * Foo - testing tiny parser
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-02-04
 */

require_once 'src/PhpLab/Autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use SchrodtSven\PhpLab\Parser\TinyParser;


$prs = new TinyParser();
$prs->title='Sven\' s Document' . date('Y-m-d H:i:s');
$prs->content='<h1>Foo</h1>';
echo $prs;

