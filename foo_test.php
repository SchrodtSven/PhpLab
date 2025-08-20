<?php

declare(strict_types=1);

require_once 'src/PhpLab/Autoload.php';
use SchrodtSven\PhpLab\Transpile\PhpDeuxZephir\Tknizr;
use SchrodtSven\PhpLab\Transpile\PhpDeuxZephir\Parser;

$tokens = \PhPToken::tokenize("<?php a = 23;");
//$tokens = \PhPToken::tokenize("<?php \$foo = 23;");
foreach($tokens as $token) {
    echo "Line: {$token->line} ID:{$token->id} Name:{$token->getTokenName()} TXT:('{$token->text}')", PHP_EOL;
}