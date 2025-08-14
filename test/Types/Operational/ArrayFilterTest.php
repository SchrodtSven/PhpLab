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
    private string $fn = 'src/PhpLab/Data/non-php/mock_detail.json';
    private ListClass $lst;
    private ArrayFilter $filter;

    public function setUp():void
    {
        
        $this->lst = ListClass::fromJsonFile($this->fn);
        $this->filter = $this->lst->getFilter();
    }

    public function testFilterBasix(): void
    {
        $stack = new ListClass();
        $this->assertTrue(count($stack) == 0);
        $this->assertInstanceOf(ArrayFilter::class, $stack->getFilter());
    }

    public function testIfUniqWorxProperly(): void
    {

        $countries = ['France', 'Japan','Germany','United Kingdom'];

        $uniq = $this->filter->by('country')->uniq();

        $this->assertSame(count($countries), $uniq->count());
        foreach($uniq as $itm) {
            $this->assertTrue(in_array($itm, $countries));
        }
    }

    public function testIfBetweenWorxProperly(): void
    {
        $ids = $this->filter->by('id')->between(991, 989);
        $this->assertSame(3, $ids->getFiltered()->count());
    }

}
