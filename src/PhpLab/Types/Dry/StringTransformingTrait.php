<?php

declare(strict_types=1);
/**
 * Trait for string transformation
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2023-05-16
 */

namespace SchrodtSven\PhpLab\Types\Dry;

use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Data\NamedSymbols;
use SchrodtSven\PhpLab\Types\StringClass;

trait StringTransformingTrait
{   
    /** 
     * Splitting string at UpperCasedSubstrings
     *
     * @param string $string
     * @return ListClass
     */
    public function splitOnUpperCaseSubstring(): ListClass
    {
        return new ListClass(preg_split('/(?=[A-Z])/', $this->dta, - 1, \PREG_SPLIT_NO_EMPTY));
    }

    /**
     * Transforming string separated by $separator into camelCasedString
     *
     * @param string $text
     * @param string $separator
     * @return self
     */
    public function camelize(string $separator = NamedSymbols::UNDERSCORE, bool $lowerFirst = true): self
    {
        
        $tmp = $this->splitBy($separator);
     
        $first = (new StringClass($tmp->shift()))->lower();

        $tmp->walk(function(&$item) {
            $item = (new StringClass($item))->lower()->upperFirst();
        });
     
        return ($lowerFirst) 
                    ? $first->append($tmp->join(''))
                    : $first->append($tmp->join(''))->upperFirst();
    }
     
    /**
     * Transforming camelCasedString to snake_cased_string
     *
     * @param string $string
     * @param boolean $lowercase
     * @return self
     */
    public function snakify(bool $lowercase= true, string $glue = NamedSymbols::UNDERSCORE): self
    {
        return ($this->splitOnUpperCaseSubstring($this->dta))->join($glue)->lower();
    }

    /**
     * Transforming first character to upper first
     *
     * @return self
     */
    public function upperFirst(): self
    {
        
        $this->dta = ucfirst($this->dta);
        return $this;
    }

    /**
     * Transforming first character to upper first
     *
     * @return self
     */
    public function lowerFirst(): self
    {
        
        $this->dta = lcfirst($this->dta);
        return $this;
    }

}