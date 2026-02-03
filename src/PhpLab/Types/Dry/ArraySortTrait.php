<?php
/**
 * Wrapper for reusage of native sorting functions offering OOP interface
 * 
 *  - array_walk
 *  - array_map
 *  -  & some array walking/mapping custom functions
 *      - trimming
 *      - quoting
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2025-08-13
 */

namespace SchrodtSven\PhpLab\Types\Dry;

trait ArraySortTrait
{
    

    /**
     * Generic sorting function
     *
     * @param [type] $flags
     * @return self
     */
    public function sort(int $flags = \SORT_REGULAR): self
    {
        sort($this->dta, $flags);
        return $this;
    }

    /**
     * Generic multi array sorting function
     *
     * @param mixed $sortOrder
     * @param [type] $sortFlags
     * @param mixed ...$rest
     * @return boolean
     */
    public function multiSort(mixed $sortOrder = \SORT_ASC, $sortFlags = \SORT_REGULAR, mixed ...$rest): bool
    {
        return array_multisort($this->dta, $sortOrder, $sortFlags, ...$rest);
    }
 

}