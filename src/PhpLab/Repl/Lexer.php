<?php

declare(strict_types=1);
/**
 * Tiny lexer for REPL mini poc
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Repl;
class Lexer
{
    public function tokenizeLn(string $ln):array
    {
        return preg_split('/\s+/', $ln, -1, PREG_SPLIT_NO_EMPTY);
    }
}
