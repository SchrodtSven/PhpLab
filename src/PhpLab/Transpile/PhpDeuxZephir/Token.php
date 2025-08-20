<?php

declare(strict_types=1);
/**
 * Tokenising PHP code for usage in transpiling to Zephir
 * 
 * - sanitizing var names ($foo -> foo)
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-20
 */
namespace SchrodtSven\PhpLab\Transpile\PhpDeuxZephir;


class Token extends \PhpToken
{
    // on 20125-08-20: [max(T_*), min(T_*)] == [405, 1], so let's give a little space between us
    
    public const TOKEN_LET_ASSIGN = 666; 
}



