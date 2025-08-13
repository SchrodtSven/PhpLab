<?php

declare(strict_types=1);
/**
 * Class handling strings 
 * managing data and operations on it
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types;

use PhpParser\NameContext;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\Dry\StringContextTrait;
use SchrodtSven\PhpLab\Types\Dry\StringBoolTrait;
use SchrodtSven\PhpLab\Types\Dry\StringEmbracingTrait;
use SchrodtSven\PhpLab\Types\Dry\PrintfTrait;
use SchrodtSven\PhpLab\Types\Dry\StringTransformingTrait;
use SchrodtSven\PhpLab\Types\Dry\MultiByteStringTrait;
use SchrodtSven\PhpLab\Data\NamedSymbols;

class StringClass implements \Stringable
{
    use MultiByteStringTrait;
    use StringEmbracingTrait;
    use PrintfTrait;
    use StringBoolTrait;
    #use SubStringTrait;
    #use CodeBuildingTrait;
    use StringContextTrait;
    use StringTransformingTrait;

    public function __construct(protected string $dta) {}

    public function splitByWS(bool $asNative = false): array|ListClass
    {
        $tmp = preg_split('/\s+/', $this->dta, -1, \PREG_SPLIT_NO_EMPTY);
        return ($asNative)
            ? $tmp
            : new ListClass($tmp);
    }

    public function __toString(): string
    {
        return $this->dta;
    }

    public function splitBy(string $separator): ListClass
    {
        return new ListClass(explode($separator, $this->dta));
    }

    public function replace(string|array $find, string|array $replace = ''): self
    {

        $this->dta = str_replace($find, $replace, $this->dta);
        return $this;
    }

    public function embrace(string $start): self
    {

        $this->dta = $this->enclose($this->dta, $start);
        return $this;
    }

    public function append(string|StringClass $string): self
    {

        $this->sprintfAppend($string);
        return $this;
    }

    public function prepend(string|StringClass $string): self
    {

        $this->sprintfPrepend($string);
        return $this;
    }

    /**
     * Trimming (often unneeded) white space on string boundaries of current content
     * 
     * @param string $characters
     * @return StringClass
     */
    public function trim(string $characters = " \n\r\t\v\x00"): self
    {

        $this->dta = trim($this->dta, $characters);
        return $this;
    }



    /**
     * Explicit alias for __toString for future usage in interfaces
     *
     * @return string
     */
    public function raw(): string
    {
        return $this->dta;
    }

    /**
     * Getting sub string enclosed by $start and $end 
     * - $start and $end will be quoted for regex context
     * 
     * @param string $start 
     * @param string $end 
     * @return self
     */
    public function stringsBetween(string $start, string $end): self
    {
        $start = preg_quote($start);
        $end = preg_quote($end);
        $pattern = "/{$start}(.*){$end}/U"; // ungreedy modififer
        preg_match_all($pattern, $this->dta, $txt);
        //@FIXME -> error detection
        $this->dta = $txt[1][0];
        return $this;
    }

    // @fixme: Check if this is the right place

    public static function sanitizeStringClass(mixed $txtable): self
    {
        if(! $txtable instanceof StringClass) {
            return new self((string) $txtable);
        } else {
            return $txtable;
        }
    }

    public function q(string $mark = NamedSymbols::SINGLE_QUOTES_START): self
    {
        $this->append($mark)->prepend($mark);
        return $this;
    }
}
