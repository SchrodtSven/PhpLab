<?php

declare(strict_types=1);
/**
 * Interface for tiny ( ||simple) parsers, getting typed information from file/stream resources
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-03-26
 */


namespace SchrodtSven\PhpLab\Snaky;

interface TinyParserInterface
{
    public function get(string $type, mixed $val);
}
