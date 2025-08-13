<?php
/**
 * Wrapper trait for reusage of native functions applying  callbacks/closures on each element
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
 * @version 0.1
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types\Dry;
use SchrodtSven\PhpLab\Data\NamedSymbols;
use SchrodtSven\PhpLab\Types\StringClass;

trait ArrayCallbackTrait
{
    

    /**
     * Applying callback on every element
     * 
     * @param callable $callback 
     * @return self
     */
    public function walk(callable $callback): self
    {
        array_walk($this->dta, $callback);
        return $this;
    }
 
    public function trim(): self
    {
        $this->walk(function (&$item) {
            $item =StringClass::sanitizeStringClass($item);
            $item->trim();
        });
        return $this;
    }

    public function quote(string $mark = NamedSymbols::SINGLE_QUOTES_START): self
    {
       $this->prepareForQuoting()->walk(function (&$item) use($mark) {
            $item->prepend($mark)->append($mark);
        });
        return $this;
    }

    protected function prepareForQuoting(): self
    {
        $this->walk(function (&$item) {
            $item =StringClass::sanitizeStringClass($item);
            $item->addSlashes();
        });
        return $this;
    }

    public function map(?callable $callback = null): self
    {
        return new self(array_map($callback, $this->dta));
    }

    public function mapMultiple(?callable $callback = null, array ...$arrays): self
    {
        return new self(array_map($callback, $this->dta, $arrays));
    }
}