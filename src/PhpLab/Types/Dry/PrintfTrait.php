<?php
/**
 * Trait wrapping native functions to code/decode strings for usage in different contexts:
 * 
 * - quote
 * - encode
 * - decode
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types\Dry;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Data\NamedSymbols;
use SchrodtSven\PhpLab\Types\StringClass;

trait PrintfTrait
{
    /**
     * Undocumented function
     *
     * @param string|StringClass $string
     * @return void
     */
    protected function sprintfAppend(string|StringClass $string): void
    {
        $this->sprintfReplace($this->dta, $string);
    }

    /**
     * Undocumented function
     *
     * @param string|StringClass $string
     * @return void
     */
    protected function sprintfPrepend(string|StringClass $string): void
    {
        $this->sprintfReplace($string, $this->dta);
    }

    /**
     * Undocumented function
     *
     * @param string|StringClass $format
     * @param array $args
     * @return void
     */
    protected function vsprintfReplace(string|StringClass $format, array $args): void
    {
        $this->dta = vsprintf($format, $args);
    }

    /**
     * Undocumented function
     *
     * @param string|StringClass $string
     * @param string $plus
     * @return void
     */
    protected function sprintfReplace(string|StringClass $string, string $plus = ''): void
    {
        $this->dta = sprintf('%s%s', $string, $plus);
    }
}