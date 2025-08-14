<?php
/**
 *  Trait managing array slices 
 * 
 * - vertical (“lines”) and 
 * - horizontal (“columns”)
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-13
 */

namespace SchrodtSven\PhpLab\Types\Dry;
use SchrodtSven\PhpLab\Types\ListClass;
trait ArraySliceTrait
{
    public const int SLC_DFT = 8;
    /**
     * @FIXME implement support for $step param
     *
     *
     * @param integer $offset
     * @param integer $length
     * @param integer $step
     * @return void
     */
    public function slice(int $offset, ?int $length=null, int $step=1): ListClass
    {
        return new ListClass(array_slice($this->dta, $offset, $length));
    }

    public function head(int $number=ListClass::SLC_DFT): ListClass
    {
        return $this->slice(0, $number);
    }

    public function tail(int $number=ListClass::SLC_DFT): ListClass
    {
        return $this->slice($number * -1);
    }

    // * @FIXME implement support muliple columns
    public function column(string $name): ListClass
    {
        return new ListClass(array_column($this->dta, $name));
    }
}