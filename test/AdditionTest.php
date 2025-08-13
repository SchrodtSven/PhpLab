<?php declare(strict_types=1);
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class AdditionTest extends TestCase
{
    #[DataProvider('additionProvider')]
    #[TestDox('Adding $a to $b results in $expected')]
    public function testAdd(int $expected, int $a, int $b)
    {
        $this->assertSame($expected, $a + $b);
    }

    public static function additionProvider()
    {
        return [
            'data set 1' => [0, 0, 0],
            'data set 2' => [1, 0, 1],
            'data set 3' => [2, 1, 1],
            'data set 4' => [3, 2, 1]
        ];
    }
}