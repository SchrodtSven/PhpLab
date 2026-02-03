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

trait StringContextTrait
{
    /**
     * Quoting pattern for usage in (PCRE) regular expressions
     *
     * @return self
     */
    public function quoteForRegExp(): self
    {
        $this->dta = preg_quote($this->dta);
        return $this;
    }

    /**
     * Encoding string for context URI
     *
     * @return self
     */
    public function encodeForUri(): self
    {
        $this->dta = urlencode($this->dta);
        return $this;
    }

    /**
     * Decode URI encoded string
     *
     * @param string $encoded
     * @return self
     */
    public function decodeFromUri(string $encoded): self
    { 
        return new self(urldecode($encoded));
    }

    /**
     * Adding c strle slashes
     *
     * @param string $characters
     * @return self
     */
    public function addCSlashes(string $characters): self
    { 
        $this->dta = addcslashes($this->dta, $characters);
        return $this;
    }
    /**
     * Adding slashes to special characters
     * @return self
     */
    public function addSlashes(): self
    { 
        $this->dta = addslashes($this->dta);
        return $this;
    }

    /**
     * Uuedecoding string
     *
     * @return string|false
     */
    public function uuDecode(): string|false
    {
        return convert_uudecode($this->dta);
    }

    /**
     * UUencoding string
     *
     * @return string
     */
    public function uuEncode(): string
    {
        return convert_uuencode($this->dta);
    }

    /**
     * Encoding string to printed quotable 
     *
     * @return self
     */
    public function encodeQuotedPrintable(): self
    {
        return new self(quoted_printable_encode($this->dta));
    }

    /**
     * Decoding printed quotable encoded string 
     *
     * @param string $encoded
     * @return self
     */
    public function decodeQuotedPrintable(string $encoded): self
    {
        return new self(quoted_printable_decode($encoded));
    }
}