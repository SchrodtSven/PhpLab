<?php

declare(strict_types=1);
/**
 * Iterator Trait - allowing to access list/array dta via [] operators
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-13
 */

namespace SchrodtSven\PhpLab\Types\Dry;


trait IteratorTrait
{
    // The following functions implement interface \Iterator making it possible
    // to iterate container objects with foreach

    /**
     * Resetting pointer to first array element
     */
    public function rewind(): void
    {
        reset($this->dta);
    }

    /**
     * Getting current element
     *
     */
    public function current(): mixed
    {
        return current($this->dta);
    }

    /**
     * Getting key of current element
     * 
     * @return mixed
     */
    public function key(): mixed
    {
        return key($this->dta);
    }

    /**
     * Forward internal array pointer
     * 
     * @return mixed|void
     */
    public function next(): void
    {
        next($this->dta);
    }

    /**
     * Returning if current element is valid
     *
     * @return bool
     */
    public function valid(): bool
    {
        return ($this->current() !== false);
    }
}