<?php

declare(strict_types=1);
/**
 * Class For filter operations on Lists(Dict, Arrray)
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types\Operational;

use PhpParser\Node\Expr\List_;
use SchrodtSven\PhpLab\Types\ListClass;



class ArrayFilter
{
    protected string $criterion;

    public const string EQ = '=='; // equals
    public const string NE = '!='; // not equals



    public const string GT = '>'; // greater than
    public const string LT = '<'; // less than

    public const string GE = '>'; // greater than or equals
    public const string LE = '<'; // less than or equals

    public const string CT = 'CT'; // contains
    public const string BT = 'BT'; // between

    public const string MIN = 'MIN'; // min()
    public const string MAX = 'MAX'; // max()



    protected mixed $vl;
    public function __construct(protected ListClass $dta) {}

    // @FIXME: multiple column 
    public function by(string $crit): self
    {
        $this->criterion = $crit;
        return $this;
    }

    public function contains(mixed $value): ListClass
    {
        return $this->generic($value, self::CT);
    }


    public function between(mixed $min, mixed $max): ListClass
    {
        return $this->generic([$min, $max], self::BT);
    }

    public function eq(mixed $value): ListClass
    {
        return $this->generic($value, self::EQ);
    }

    public function ne(mixed $value): ListClass
    {
        return $this->generic($value, self::NE);
    }

    public function gt(mixed $value): ListClass
    {
        return $this->generic($value, self::GT);
    }

    public function lt(mixed $value): ListClass
    {
        return $this->generic($value, self::LT);
    }

    public function ge(mixed $value): ListClass
    {
        return $this->generic($value, self::GE);
    }

    public function le(mixed $value): ListClass
    {
        return $this->generic($value, self::LE);
    }

    // generic function 

    public function generic(mixed $value, string $op): ListClass
    {
        return $this->dta->filter(function ($v, $k) use ($value, $op) {
            if ($this->operate($v[$this->criterion], $op, $value))
                return true;
            else
                return false;
        });
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
            self::CT => str_contains($realVal, $expected),
            self::BT => ($realVal >= $expected[1] && $realVal <= $expected[0]),
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

    public function uniq(string $col): ListClass
    {
        return new ListClass(array_values(array_unique($this->dta->col($col)->raw())));
    }
}
