<?php

declare(strict_types=1);
/**
 * Global function simulation parts of a snake-like syntax 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-18
 */
use SchrodtSven\PhpLab\Snaky\Ctx\CtxInterface;
use SchrodtSven\PhpLab\Snaky\Ctx\Manager;

function with(mixed $obj): CtxInterface
{
    return new Manager($obj);
}

function kprint(mixed $obj)
{
    
}



