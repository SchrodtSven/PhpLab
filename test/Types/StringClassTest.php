<?php
/**
 * Unit tests
 * 
 * @see https://docs.phpunit.de/en/12.3/attributes.html#dataprovider
 */
use PHPUnit\Framework\TestCase;
use SchrodtSven\PhpLab\Types\StringClass;
use PHPUnit\Framework\Attributes\TestWith;
class StringClassTest extends TestCase
{
    

    #[TestWith(['Foo_bar', 'fooBar'])]
    #[TestWith(['Foo_bar_Baz', 'fooBarBaz'])]
    public function testIfIsCamelizable(string $origin, string $expected): void
    {
        $s = new StringClass($origin);
        $this->assertSame((string) $s->camelize(), $expected);
    }

    #[TestWith(['var foo = 23;', 4])]
    #[TestWith(['Foo bar    nn. Gas.  Guy Baz', 6])]
    public function testIfSplitCorrectlyByWhitespace(string $origin, int $count): void
    {   
        $s = new StringClass($origin);
        $this->assertTrue(count($s->splitByWS()) == $count);
    }
    
}