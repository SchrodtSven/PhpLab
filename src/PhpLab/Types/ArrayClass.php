<?php

declare(strict_types=1);
/**
 * Class handling arrays  (! necessary 0-based, numeric consecutive indexed arrays)
 * managing data and operations on it
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types;


use SchrodtSven\PhpLab\Types\StringClass;
use SchrodtSven\PhpLab\Types\StackInterface;
use SchrodtSven\PhpLab\Types\Dry\StackOperationTrait;
use SchrodtSven\PhpLab\Types\Dry\ArrayAccessTrait;
use SchrodtSven\PhpLab\Types\Dry\ArrayCallbackTrait;
use SchrodtSven\PhpLab\Types\Dry\ArraySortTrait;
use SchrodtSven\PhpLab\Types\Dry\IteratorTrait;
use SchrodtSven\PhpLab\Types\Dry\ArraySliceTrait;

class ArrayClass extends ListClass
{
    
    
    public function __construct(protected array $dta = []) 
    {
       
    }

}
