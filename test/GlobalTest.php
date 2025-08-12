<?php
/**
 * Unit tests
 * 
 * @see https://docs.phpunit.de/en/12.3/attributes.html#dataprovider
 */
use PHPUnit\Framework\TestCase;
use SchrodtSven\PhpLab\Types\StringClass;
use PHPUnit\Framework\Attributes\TestWith;
class GlobalTest extends TestCase
{
    

    #[TestWith(['Foo'])]
    #[TestWith(['bart'])]
    #[TestWith(['bartels'])]
    #[TestWith(['Moo'])]
    public function testIfIsStringable(string $a): void
    {
        
        $this->assertTrue(is_string($a));
    }

    
}