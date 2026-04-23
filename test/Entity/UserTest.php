<?php

declare(strict_types=1);
/**
 * Unit tests for User entity class
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-04-23
 */

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\TestWith;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\StringClass;
use SchrodtSven\PhpLab\Entity\User;

class UserTest extends TestCase
{
    public function testBasix(string $name =" Schrodt, Sven", string $pass = "Lorem Ipsum"): void
    {
        $foo = new User();
        $foo->name = $name;
        $foo->setPass($pass);
        $this->assertTrue($foo->name == trim($name));
        $this->assertTrue($foo->pass == md5($pass));
        $this->assertTrue($foo->getCreated() instanceof \DateTime);
    }
}