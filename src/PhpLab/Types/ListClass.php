<?php

declare(strict_types=1);
/**
 * Class handling list (0-based, numeric consecutive indexed arrays)
 * managing data and operations on it
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types;

use Countable;
use SchrodtSven\PhpLab\Types\StringClass;
use SchrodtSven\PhpLab\Types\StackInterface;
use SchrodtSven\PhpLab\Types\Dry\StackOperationTrait;
use SchrodtSven\PhpLab\Types\Dry\ArrayAccessTrait;
use SchrodtSven\PhpLab\Types\Dry\ArrayCallbackTrait;
use SchrodtSven\PhpLab\Types\Dry\ArraySortTrait;

class ListClass implements \ArrayAccess, \Countable, StackInterface
{
    use ArrayAccessTrait;
    use StackOperationTrait;
    use ArrayCallbackTrait;
    use ArraySortTrait;
    public function __construct(protected array $dta = []) 
    {
        if(!array_is_list($this->dta)) {
            throw new \InvalidArgumentException('Not a list!', 666);
        }
    }

    // needed in subclasses
    // @fixme: use here to test if given dta is list
    public function isList(): bool
    {
        return array_is_list($this->dta);
    }

    public function join(string $glue): StringClass
    {
        return new StringClass(implode($glue, $this->dta));
    }

    public function count(): int
    {
        return count($this->dta);
    }

    public function raw(): array
    {
        return $this->dta;
    }
}
