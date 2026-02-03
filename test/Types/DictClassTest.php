<?php

declare(strict_types=1);
/**
 * Unit tests for DictClass (and its traits)
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
use SchrodtSven\PhpLab\Types\DictClass;

class DictClassTest extends TestCase
{
    
    #[TestWith([['id' => 2345, 'name' => 'Foo Bar'], 2])]
    #[TestWith([['first' => 'Nick', 'last'=> 'Miller', 'Foo' => 42], 3])]
    public function testIfCountWorxCorrectly(array $origin, int $count): void
    {   
        $dct = new DictClass($origin);
        $this->assertTrue(count($dct) == $count);
        $dct['profession'] = 'H@kk3r';
        $this->assertTrue(count($dct) == $count+1);
    }
    #[TestWith([['id' => 2345, 'name' => 'Foo Bar', 'profession' => 'H@kk3r'], '{"id":2345,"name":"Foo Bar","profession":"H@kk3r"}'])]    
    public function testIfJsonSerialzWorkxProperly(array $origin, string $json): void
    {
        $this->assertSame((new DictClass($origin))->jsonSerialize(), $json);
    }
    
}