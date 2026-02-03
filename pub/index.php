<?php

declare(strict_types=1);
/**
 * Bootstrapping  ...
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package JSLab
 * @version 0.23
 * @since 2026-02-03
 */

chdir('../');

require_once 'src/PhpLab/Autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use SchrodtSven\App\Base;
use SchrodtSven\PhpLab\Mvc\Router;
echo '<pre>';
$r = new Router();

var_dump([$r, $r->req]);

$foo = new Base();