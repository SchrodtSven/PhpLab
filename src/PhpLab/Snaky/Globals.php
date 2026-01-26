<?php

declare(strict_types=1);
/**
 * Global function simulation parts of a snake-like syntax 
 * 
 *  - function names will be prefixed by 'k', if being a reserved name
 *      Don't ask, or @see https://github.com/SchrodtSven/Koalas_Zep   
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-18
 */
use SchrodtSven\PhpLab\Snaky\Ctx\CtxInterface;
use SchrodtSven\PhpLab\Snaky\Ctx\Manager;
use SchrodtSven\PhpLab\Types\ListClass;

function with(mixed $obj): CtxInterface
{
    return new Manager($obj);
}


function klist(array|ListClass $arr): array
{
    $tmp = $arr instanceof ListClass ? $arr->raw() : $arr;
    return array_values($tmp);

}

function kprint(mixed $obj)
{
    //@fixme
}



