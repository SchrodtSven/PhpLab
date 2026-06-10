<?php

declare(strict_types=1);
/**
 * Abstract class for CLI based games
 * 
 * Motivation: 
 * 
 * - DRY stuff
 * - testing CLI base functions
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-06-10
 */

namespace SchrodtSven\PhpLab\Game;

use InvalidArgumentException;
use Override;
use Stringable;

class AbstractCli
{

    private const string WELCOME = 'Welcome to %s - the time is now: %s';

    public function readLine(string $parseAs = 'string')
    {
        $stdin = fopen('php://stdin', 'r');
        $curr = trim(fgets($stdin));

        return match (strtolower($parseAs)) {
            
            'bool' => (bool) $curr,
            'int' => (int) $curr,
            'float' => (float) $curr,
            default => $curr
        };
    }
}


$cli = new AbstractCli();

$foo = $cli->readLine('int');
var_dump($foo);