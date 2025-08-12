<?php
/**
 * Trait wrapping native functions testing strings:
 * 
 *  - begins, 
 *  - ends, 
 *  - contains,
 *  - matches regular expression,
 *  - ...
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types\Dry;


trait StringBoolTrait
{
    // Simple string comparison methods

    /**
     * Checking if current string content begins with $begin
     *
     * @param string $begin
     * @return boolean
     */
    public function begins(string $begin): bool
    {
        return \str_starts_with($this->dta, $begin);
    }

    /**
     *  Checking if current string content ends with $ends     
     *
     * @param string $end
     * @return boolean
     */
    public function ends(string $end): bool
    {
        return \str_ends_with($this->dta, $end);
    }

    /**
     *  Checking if current string content contains $needle
     *
     * @param string $needle
     * @return boolean
     */
    public function contains(string $needle): bool
    {
        return \str_contains($this->dta, $needle);
    }

    /**
     * Checkin if current string content matches against regular expression $pattern
     *
     * @param string $pattern
     * @param array|null $matches
     * @param integer $flags
     * @param integer $offset
     * @return ListClass
     */
    public function matchesRegExp(string $pattern, ?array &$matches = null,int $flags = 0, int $offset = 0): array
    {
        $result = preg_match($pattern, $this->dta, $matches, $flags, $offset);
        $matches['result'] = $result;
        return $matches;
    }
}