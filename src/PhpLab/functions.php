<?php

declare(strict_types=1);
/**
 * Global functions 
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2025-11-27
 */

use SchrodtSven\PhpLab\Snaky\Ctx\Manager;

function with(object $obj): Manager 
{
    return Manager($ob);
}