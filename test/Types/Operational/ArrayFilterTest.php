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
 * @version 0.1
 * @since 2025-08-14
 */

use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\ArrayClass;
use SchrodtSven\PhpLab\Types\Operational\ArrayFilter;

class ArrayFilterTest extends TestCase
{
   
public function testFilterBasix(): void
    {
        $stack = new ListClass();
        $this->assertTrue(count($stack) == 0);
        $this->assertInstanceOf(ArrayFilter::class, $stack->getFilter());
        
    }

   
}