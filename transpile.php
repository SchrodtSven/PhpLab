<?php

declare(strict_types=1);
/**
 * Tokenising PHP code for usage in transpiling to Zephir
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-20
 */

require_once 'src/PhpLab/Autoload.php';
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

use SchrodtSven\PhpLab\Transpile\PhpDeuxZephir\Tknizr;
use SchrodtSven\PhpLab\Transpile\PhpDeuxZephir\Parser;

$tkr = new Tknizr(file_get_contents('src/PhpLab/Transpile/PhpDeuxZephir/codes/ex2.php'));
// $tokens = $tkr->getTokens();
// foreach($tokens as $tkn) {
//     print(implode(' | ', get_object_vars($tkn)));
// }

// print_r($tokens);

foreach ($tkr->removeWs()->getSanitized() as $i => $token) {
    echo "IDX: {$i} Line: {$token->line} ID:{$token->id} Name:{$token->getTokenName()} TXT:('{$token->text}')", PHP_EOL;
}


//print(implode('', $tkr->getTokens()));
$parser = new Parser($tkr->removeWs()->getSanitized());
// var_dump($parser);



// die("sdsd");
// print_r($parser->getTokens());
print(implode('', $parser->getTokens()));