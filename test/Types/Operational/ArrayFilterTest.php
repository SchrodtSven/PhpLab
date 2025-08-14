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
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\ArrayClass;
use SchrodtSven\PhpLab\Types\Operational\ArrayFilter;

#[CoversClass(ArrayFilter::class)]
final class ArrayFilterTest extends TestCase
{
    private string $fn = 'src/PhpLab/Data/non-php/mock_detail.json';
    private ListClass $lst;
    private ArrayFilter $filter;

    public function setUp(): void
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

        $countries = ['France', 'Japan', 'Germany', 'United Kingdom'];

        $uniq = $this->filter->by('country')->uniq();

        $this->assertSame(count($countries), $uniq->count());
        foreach ($uniq as $itm) {
            $this->assertTrue(in_array($itm, $countries));
        }
    }

    public function testIfBetweenWorxProperly(): void
    {
        $ids = $this->filter->by('id')->between(991, 989);
        $this->assertSame(3, $ids->getFiltered()->count());
        
        $this->filter->reset();
        $min = mt_rand(0, 500);
        $max = mt_rand($min+5, 1000);
        $newIds = $this->filter->by('id')->between($min, $max)->getFiltered()->col('id')->raw();
        for ($i = 0; $i < count($newIds); $i++) {
                $curr = $newIds[$i];
                
                $this->assertTrue($curr >= $min && $curr <=$max);
            }
    }

    public function testIfContainsWorxProperly(): void
    {

        $genre = ['Crime', 'Romance', 'Drama', 'Adventure', 'Comedy', 'Fantasy', 'Musical'];
        foreach ($genre as $look4) {
            $this->filter->reset();
            $curr = $this->filter->by('mvie_gnr')->contains($look4)->getFiltered()->col('mvie_gnr')->raw();
            for ($i = 0; $i < count($curr); $i++) {
                $this->assertTrue(str_contains($curr[$i], $look4));
            }
        }
    }

    public function testReset(): void
    {
        $this->filter->reset();
        $this->assertTrue(count($this->filter->getFiltered()) == 1000);
        $this->filter->by('gender')->eq('Female')->getFiltered();
        $this->assertTrue(count($this->filter->getFiltered()) < 1000);
        $this->filter->reset();
        $this->assertTrue(count($this->filter->getFiltered()) == 1000);
    }

    public function testAggregates(): void
    {
        $this->filter->reset();
        $this->assertTrue(str_starts_with($this->filter->min('member_since'), '1923'));
        $this->assertTrue(str_starts_with($this->filter->max('member_since'), '2025'));
    }

    # member_since
}
