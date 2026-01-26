<?php

declare(strict_types=1);
/**
 * Implementing context manager (like in pythons's contextlib.contextmanager)
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-18
 */

namespace SchrodtSven\PhpLab\Snaky\Ctx;

class Manager implements CtxInterface
{
    public function __construct(object $cobj)
    {
        $this->_enter();
    }    

    public function __destruct()
    {
       $this->_exit();
    }

    public function do(callable $clj)
    {
        // do stuff $clj && self::$cobj
    }

    protected function _enter()
    {
        // prepare stuff
    }

    protected function _exit()
    {
        // wipe stuff (close resource(s) etc.)
    }
}