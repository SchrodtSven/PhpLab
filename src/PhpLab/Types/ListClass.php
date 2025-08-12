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

class ListClass implements \ArrayAccess, StackInterface
{
    use ArrayAccessTrait;
    use StackOperationTrait;
    use ArrayCallbackTrait;
    
    public function __construct(protected array $dta = [])
    {
        
    }

    public function isList(): bool
    {
        return array_is_list($this->dta);
    }

    public function join(string $glue): StringClass
    {
        return new StringClass(implode($glue, $this->dta));
    }
}