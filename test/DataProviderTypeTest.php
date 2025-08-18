<?php

declare(strict_types=1);
/**
 * Unit test showing different types of DataProvider functionality
 * 
 * - Adding,
 * - Subtracting  
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-14
 */

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\TestWith;

final class DataProviderTypeTest extends TestCase
{
    #[DataProvider('additionProvider')]
    #[TestDox('Adding $a to $b results in $expected')]
    public function testAddByStaticDataProvider(int $expected, int $a, int $b): void
    {
        $this->assertSame($expected, $a + $b);
    }


    #[DataProvider('subtractionProvider')]
    #[TestDox('Subtracting $b from $a results in $expected')]
    public function testSubByStaticDataProvider(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a - $b);
    }

    #[TestWith([100, 22, 122])]
    #[TestWith([32, 10, 42])]
    #[TestWith([90, 21, 111])]
    #[TestWith([100, 4, 104])]
    #[TestWith([53, 5, 58])]
    #[TestWith([34, 7, 41])]
    #[TestWith([94, 4, 98])]
    #[TestWith([83, 20, 103])]
    #[TestWith([92, 8, 100])]
    #[TestWith([80, 10, 90])]
    #[TestWith([37, 12, 49])]
    #[TestWith([66, 8, 74])]
    #[TestWith([73, 1, 74])]
    #[TestWith([84, 20, 104])]
    #[TestWith([44, 13, 57])]
    #[TestWith([53, 19, 72])]
    #[TestWith([86, 4, 90])]
    #[TestWith([55, 23, 78])]
    #[TestWith([87, 15, 102])]
    #[TestWith([55, 17, 72])]
    #[TestWith([47, 20, 67])]
    #[TestWith([55, 17, 72])]
    #[TestWith([71, 19, 90])]
    public function testAddWithTestWithAttribute(int $a, int $b, int $expected): void
    {
        $this->assertSame($a + $b, $expected);
    }


    #[TestWith([434, 48, 386])]
    #[TestWith([819, 81, 738])]
    #[TestWith([379, 76, 303])]
    #[TestWith([300, 284, 16])]
    #[TestWith([510, 16, 494])]
    #[TestWith([748, 265, 483])]
    #[TestWith([603, 162, 441])]
    #[TestWith([792, 20, 772])]
    #[TestWith([616, 205, 411])]
    #[TestWith([646, 112, 534])]
    #[TestWith([296, 212, 84])]
    #[TestWith([760, 222, 538])]
    #[TestWith([864, 128, 736])]
    #[TestWith([999, 155, 844])]
    #[TestWith([958, 132, 826])]
    #[TestWith([894, 247, 647])]
    #[TestWith([1008, 209, 799])]
    #[TestWith([438, 157, 281])]
    #[TestWith([521, 26, 495])]
    #[TestWith([982, 2, 980])]
    #[TestWith([569, 204, 365])]
    #[TestWith([310, 126, 184])]
    #[TestWith([650, 225, 425])]
    public function testSubWithTestWithAttribute(int $a, int $b, int $expected): void
    {
        $this->assertSame($a - $b, $expected);
    }

    public static function additionProvider(): array
    {
        return [
            'data set 1' => [0, 0, 0],
            'data set 2' => [1, 0, 1],
            'data set 3' => [2, 1, 1],
            'data set 4' => [3, 2, 1],
            'data set 5' => [42, 23, 19]
        ];
    }

    public static function subtractionProvider(): array
    {
        return [
            'data set 1' => [849, 60, 789],
            'data set 2' => [935, 119, 816],
            'data set 3' => [575, 42, 533],
            'data set 4' => [357, 137, 220],
            'data set 5' => [644, 220, 424],
            'data set 6' => [821, 9, 812],
            'data set 7' => [928, 179, 749],
            'data set 8' => [462, 149, 313],
            'data set 9' => [970, 262, 708],
            'data set 10' => [976, 208, 768],
            'data set 11' => [449, 23, 426],
            'data set 12' => [730, 134, 596],
            'data set 13' => [771, 109, 662],
            'data set 14' => [872, 231, 641],
            'data set 15' => [819, 196, 623],
            'data set 16' => [698, 15, 683],
            'data set 17' => [673, 174, 499],
            'data set 18' => [870, 63, 807],
            'data set 19' => [400, 91, 309],
            'data set 20' => [902, 31, 871],
            'data set 21' => [424, 212, 212],
            'data set 22' => [324, 164, 160],
            'data set 23' => [449, 40, 409]
        ];
    }
}
