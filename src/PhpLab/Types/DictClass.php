<?php

declare(strict_types=1);
/**
 * Class handling dictionaries (scalar keyed arrays)
 * managing data and operations on it
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\StringClass;

class DictClass extends ListClass 
{
   
    public function __construct(protected array $dta = []) 
    {}

    
    
}
