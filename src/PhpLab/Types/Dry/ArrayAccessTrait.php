<?php

declare(strict_types=1);
/**
 * Array Access Trait - allowing to access list/array dta via [] operators
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types\Dry;

trait ArrayAccessTrait
{
    


    public function offsetGet($offset): mixed
    {
        return $this->dta[$offset] ?? null;
    }

    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->dta[] = $value;
        } else {
            $this->dta[$offset] = $value;
        }
    }

    public function offsetExists($offset): bool
    {
        return isset($this->dta[$offset]);
    }

    public function offsetUnset($offset): void
    {
        unset($this->dta[$offset]);
    }

}