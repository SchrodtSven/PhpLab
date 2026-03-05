<?php

declare(strict_types=1);

/**
 * Testing stuff file 
 * 
 * @package PhpLab
 * @author  Sven Schrodt <sven@schrodt.nrw>
 * @version 0.1
 * @since 2025-03-06
 * @link https://github.com/SchrodtSven/PhpLab
 */


require_once 'src/PhpLab/Autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


use SchrodtSven\PhpLab\Wtf\BaseClient;
use SchrodtSven\PhpLab\Wtf\Comm\CurlClient;
use SchrodtSven\PhpLab\Wtf\Comm\HttpParser;

//echo (new BaseClient())->search("Spider-Man");

# $uri = "https://schrodt.nrw/bin/zce53.jpg";
$uri = 'https://schrodt.nrw/now.php'; // HTTP resource with minimal payload for testing purpose
$hc = new CurlClient();
$hc->get($uri);
var_dump($hc);
//var_dump($hc->getPayload());
// var_dump($hc->getHeaders());
// var_dump($hc->getHttpStatus());
// var_dump($hc->getVersion());
