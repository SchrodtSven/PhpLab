<?php

declare(strict_types=1);
/**
 * Tiny interpreter for REPL mini poc
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Repl;

class Interpreter
{
    public function __construct()
    {
        echo (date('H:i:s'));   
    }

}