<?php

declare(strict_types=1);
/**
 * Global functions 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Phplab
 * @package Phplab
 * @version 0.1
 * @since 2025-11-27
 */

use SchrodtSven\PhpLab\Snaky\Ctx\Manager;

function with(object $obj): Manager 
{
    return Manager($ob);
}