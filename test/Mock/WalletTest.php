<?php

/**
 * Unit test for class SchrodtSven\PhpLab\Mock\Wallet
 * 
 * @see https://docs.phpunit.de/en/12.3/attributes.html#dataprovider
 */

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\TestWith;

use SchrodtSven\PhpLab\Mock\Wallet;



class WalletTest extends TestCase
{


    public function testBasix(): void
    {


        $mine = new Wallet(100);
        $yours = new Wallet(50);

        // returns true
        $this->assertTrue($mine->isGreaterThan($yours));
        $this->assertFalse($mine->isLessThan($yours));
    }
}
