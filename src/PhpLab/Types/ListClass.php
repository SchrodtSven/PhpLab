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


use SchrodtSven\PhpLab\Types\StringClass;
use SchrodtSven\PhpLab\Types\StackInterface;
use SchrodtSven\PhpLab\Types\Dry\StackOperationTrait;
use SchrodtSven\PhpLab\Types\Dry\ArrayAccessTrait;
use SchrodtSven\PhpLab\Types\Dry\ArrayCallbackTrait;
use SchrodtSven\PhpLab\Types\Dry\ArraySortTrait;
use SchrodtSven\PhpLab\Types\Dry\IteratorTrait;
use SchrodtSven\PhpLab\Types\Dry\ArraySliceTrait;
use SchrodtSven\PhpLab\Types\Operational\ArrayFilter;

class ListClass implements \ArrayAccess, \Countable, StackInterface, \Iterator, \JsonSerializable
{
    use ArrayAccessTrait;
    use StackOperationTrait;
    use ArrayCallbackTrait;
    use ArraySortTrait;
    use ArraySliceTrait;
    use IteratorTrait;

    
    public function __construct(protected array $dta = []) 
    {
        if(!array_is_list($this->dta)) {
            throw new \InvalidArgumentException('Not a list!', 01232);
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

    public function filter(callable $clj, bool $reIdx=true, int $mode=\ARRAY_FILTER_USE_BOTH): self
    {
        $tmp = array_filter($this->dta, $clj, $mode);
        return ($reIdx) 
            ? new ListClass(array_values($tmp))
            : new ArrayClass($tmp);
    }

    public function getFilter(): ArrayFilter
    {
        return new ArrayFilter($this);
    }

    public function jsonSerialize(): mixed
    {
        return json_encode($this->dta);
    }

    public function col(string $col): self
    {
        return new self(array_column($this->dta, $col));
    }

    

    public static function fromJsonFile(string $fn): self 
    {
        return new self(json_decode(file_get_contents($fn), true));
    }
}
