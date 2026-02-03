<?php

/**
 * Base class only existing to test distributed namespace <-> file sysdtem location
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-02-03
 */

namespace SchrodtSven\App;

class Base
{
    public function __construct()
    {
        echo sprintf(
            "Created on %s @ %s",
            php_uname(),
            date('Y-m-d H:i:s')
        );
    }
}
