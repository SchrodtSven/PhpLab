<?php

declare(strict_types=1);
/**
 * Unit tests for ListClass (and its traits)
 * 
 * @see https://docs.phpunit.de/en/12.3/attributes.html#dataprovider
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2025-08-13
 */
 
use PHPUnit\Framework\TestCase;
use SchrodtSven\PhpLab\Types\StringClass;
use PHPUnit\Framework\Attributes\TestWith;
use SchrodtSven\PhpLab\Types\ListClass;

class ListClassTest extends TestCase
{
    
    #[TestWith([['Baz', 'Foo', 'Gaz', 'Guy', 'bar', 'nn'], 6])]
    #[TestWith([[23, 42, 3.145], 3])]
    public function testIfCountWorxCorrectly(array $origin, int $count): void
    {   
        $lst = new ListClass($origin);
        $this->assertTrue(count($lst) == $count);
        $r = new \Random\Randomizer;
        $lst[] = 'Foo' . (string) $r->nextFloat();
        $this->assertTrue(count($lst) == $count +1);
    }
    
    public function testIfExceptionIsThrownOnNonList(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $lst = new ListClass(['first' => 'Nick', 'last'=> 'Miller', 'Foo' => 42]);
    }
}