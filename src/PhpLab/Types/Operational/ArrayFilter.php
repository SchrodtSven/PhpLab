<?php

declare(strict_types=1);
/**
 * Class handling arrays  (! necessary 0-based, numeric consecutive indexed arrays)
 * managing data and operations on it
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types\Operational;
use SchrodtSven\PhpLab\Types\ListClass;

 

class ArrayFilter 
{
    protected string $criterion;
    protected string $op = '==';
    protected mixed $vl;
    public function __construct(protected ListClass $dta) 
    {
       
    }

    public function by(string $crit): self
    {
        $this->criterion = $crit;
        return $this;
    }

    public function eq(mixed $value ): ListClass
    {
        return $this->dta->filter(function($v ,$k) use($value) {
            if($v[$this->criterion] == $value)
                return true;
            else 
                return false;
        });
    }


}
