<?php

declare(strict_types=1);
/**
 * Context interface
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-18
 */

namespace SchrodtSven\PhpLab\Snaky\Ctx;

interface CtxInterface
{
    public function __construct(object $cobj);    

    public function do(callable $clj);    
}