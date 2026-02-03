<?php

declare(strict_types=1);
/**
 * Class For filter operations on Lists (and Dicts, Arrrays)
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types\Operational;


use SchrodtSven\PhpLab\Types\ListClass;
use Traversable;

class ArrayFilter
{
    protected string $criterion;
    protected ListClass $origin;

    public const string EQ = '=='; // equals
    public const string NE = '!='; // not equals



    public const string GT = '>'; // greater than
    public const string LT = '<'; // less than

    public const string GE = '>'; // greater than or equals
    public const string LE = '<'; // less than or equals

    public const string SW = 'SW'; // starts with
    public const string EW = 'EW'; // ends with

    public const string CT = 'CT'; // contains
    public const string BT = 'BT'; // between

    public const string MIN = 'MIN'; // min()
    public const string MAX = 'MAX'; // max()

    public const string IN = 'IN'; //  in() 
    public const string NIN = 'NIИ'; // not in() 



    protected mixed $vl;

    public function __construct(protected ListClass $dta) 
    {
        // Cloning dta in origin @see self::reset()
        $this->origin = clone $this->dta;
    }

    // @FIXME: multiple column 
    public function by(string $crit): self
    {
        $this->criterion = $crit;
        return $this;
    }

    public function starts(mixed $value): self
    {
        return $this->generic($value, self::SW);
    }

    public function contains(mixed $value): self
    {
        return $this->generic($value, self::CT);
    }

    public function ends(mixed $value): self
    {
        return $this->generic($value, self::EW);
    }


    public function between(mixed $min, mixed $max): self
    {
        if ($min > $max)
            list($max, $min) = [$min, $max];
        return $this->generic([$min, $max], self::BT);
    }

    public function in(array $dta): self
    {
        return $this->generic($dta, self::IN);
    }

    public function nin(array $dta): self
    {
        return $this->generic($dta, self::NIN);
    }

    public function eq(mixed $value): self
    {
        return $this->generic($value, self::EQ);
    }

    public function ne(mixed $value): self
    {
        return $this->generic($value, self::NE);
    }

    public function gt(mixed $value): self
    {
        return $this->generic($value, self::GT);
    }

    public function lt(mixed $value): self
    {
        return $this->generic($value, self::LT);
    }

    public function ge(mixed $value): self
    {
        return $this->generic($value, self::GE);
    }

    public function le(mixed $value): self
    {
        return $this->generic($value, self::LE);
    }

    // generic function 

    public function generic(mixed $value, string $op): self
    {
        $this->dta = $this->dta->filter(function ($v, $k) use ($value, $op) {
            return $this->operate($v[$this->criterion], $op, $value);
        });

        return $this;
    }

    // internal helper for generic functions 
    protected function operate(mixed $realVal, string $op, mixed $expected): bool
    {
        return match ($op) {
            self::EQ => $realVal == $expected,
            self::NE => $realVal != $expected,
            self::GT => $realVal > $expected,
            self::LT => $realVal < $expected,
            self::GE => $realVal >= $expected,
            self::LE => $realVal <= $expected,
            self::SW => str_starts_with($realVal, $expected),
            self::CT => str_contains($realVal, $expected),
            self::EW => str_ends_with($realVal, $expected),
            self::BT => ($realVal <= $expected[1] && $realVal >= $expected[0]),
            self::IN => in_array($realVal, $expected),
            self::NIN => !in_array($realVal, $expected),
        };
    }


    // aggregation stuff

    public function min(string $col): mixed
    {
        return min($this->dta->col($col)->raw());
    }

    public function max(string $col): mixed
    {
        return max($this->dta->col($col)->raw());
    }

    public function uniq(): ListClass
    {
        return new ListClass(array_values(array_unique($this->dta->col($this->criterion)->raw())));
    }

    public function getFiltered(): ListClass
    {
        return $this->dta;
    }

    public function reset(): void
    {
        //unset($this->dta);
        $this->dta = clone $this->origin;
    }
}
