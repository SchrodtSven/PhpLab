<?php

declare(strict_types=1);
/**
 * Stack operation  Trait - push, pop, shift, unshift
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types\Dry;

trait StackOperationTrait
{
    /**
     * Push elements onto the end of array
     *
     * @param mixed $value
     * @return self
     */   
    public function push(mixed $value): self
    {
        array_push($this->dta, $value);
        return $this;
    }
   
    /**
     * Pop the element off the end of array
     *
     * @return mixed
     */
    public function pop(): mixed
    {
        return array_pop($this->dta);
    }
 
    /**
     * Prepend elements to the beginning of an array
     *
     * @param mixed $value
     * @return self
     */
    public function unshift(mixed $value): self
    {
        array_unshift($this->dta, $value);
        return $this;
    }
    /**
     * Shift an element off the beginning of array
     *
     * @return mixed
     */
    public function shift(): mixed
    {
        return array_shift($this->dta);
    }

    /**
     * Gets the first key|index of an array
     *
     * @return string|integer|null
     */
    public function firstKey(): string|int|null
    {
        return array_key_first($this->dta);
    }

    /**
     * Gets the last key|index of an array
     *
     * @return string|integer|null
     */
    public function lastKey(): string|int|null
    {
        return array_key_last($this->dta);
    }
}