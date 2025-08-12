<?php

declare(strict_types=1);
/**
 * Class handling strings 
 * managing data and operations on it
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Repl;

use Stringable;

class StringClass implements Stringable
{
    public function __construct(protected string $dta)
    {
        
    }

    //@fixme -> alternative: return instances of ListClass|array
    public function splitByWS(string $txt, bool $asNative = true): array
    {
        return preg_split('/\s+/', $txt, -1, \PREG_SPLIT_NO_EMPTY);
        
    }

    public function __toString(): string
    {
        return $this->dta;
    }
}