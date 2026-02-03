<?php

declare(strict_types=1);
/**
 * Unit test on ListClass's stack operations using Depends attribute
 * 
 * - push() 
 * - pop()
 * - unshift()
 * - shift()
 * - lastKey()
 * - firstKey
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2025-08-14
 */

use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\ArrayClass;
class StackOperationTest extends TestCase
{
    public const string FOO = 'foo';
    public const int Q42 = 2 * 21;

    public const string BAR = 'bar';
    public const float BAZ = 33.3;

public function testEmpty(): ListClass
    {
        $stack = new ListClass();
        $this->assertTrue(count($stack) == 0);

        return $stack;
    }

    #[Depends('testEmpty')]
    public function testPush(ListClass $stack): ListClass
    {
        
        $stack->push(self::FOO);
        $this->assertSame('foo', $stack[count($stack) - 1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    #[Depends('testPush')]
    public function testPop(ListClass $stack): ListClass
    {
        $this->assertSame(self::FOO, $stack->pop());
        $this->assertEmpty($stack);

        $stack->push(self::Q42);
        return $stack;
    }

    #[Depends('testPop')]
    public function testUnshift(ListClass $stack): ListClass
    {
        $stack->unshift(self::FOO);
        $this->assertTrue(count($stack) == 2);
        return $stack;
    }


    #[Depends('testUnshift')]
    public function testShift(ListClass $stack): void
    {
        $this->assertSame($stack->shift(), self::FOO);
        $this->assertSame($stack->shift(), self::Q42);
        $this->assertEmpty($stack);
    }
    
     #[DataProvider('ArrayProvider')]
    public function testFirstLastKeys(array $origin, $l, $f): void
    {
        $lst = new ArrayClass($origin);
        $this->assertSame($l, $lst->lastKey());
        $this->assertSame($f, $lst->firstKey());
        
        $lst->unshift( self::BAZ);
        $lst->push(self::BAR);

        $this->assertSame(self::BAR, $lst[$lst->lastKey()]);
        $this->assertSame(self::BAZ, $lst[$lst->firstKey()]);

    }

    public static function ArrayProvider(): array
    {
        return [
            [[99, 77, 23, 'Foo'], 3, 0],
            [['Foo' => 42, 'di' => 'IoC', 99=>2.4], 99, 'Foo']

        ];
    }
}