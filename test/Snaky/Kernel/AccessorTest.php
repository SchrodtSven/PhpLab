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
 * @version 0.23
 * @since 2025-08-14
 */

use PHPUnit\Framework\Attributes\DataProvider;
use SchrodtSven\PhpLab\Snaky\Kernel\Accessor;
use PHPUnit\Framework\TestCase;

final class AccessorTest extends TestCase
{
    #[DataProvider('accessorProvider')]
    public function testAccessorisDefault(string $accessor, bool $default, bool $isVert, array $stEnSt): void
    {
        $acc = new Accessor($accessor);
        $this->assertSame($acc->getIsDefault(), $default);
    }

    #[DataProvider('accessorProvider')]
    public function testAccessorisVertical(string $accessor, bool $default, bool $isVert, array $stEnSt): void
    {
        $acc = new Accessor($accessor);
        $this->assertSame($acc->getIsVertical(), $isVert);
    }


    #[DataProvider('accessorProvider')]
    public function testStartEndStep(string $accessor, bool $default, bool $isVert, array $stEnSt): void
    {
        $acc = new Accessor($accessor);
        $this->assertSame($acc->getSlcEnd(), $stEnSt['end']);
        $this->assertSame($acc->getSlcStart(), $stEnSt['start']);
        $this->assertSame($acc->getSlcStep(), $stEnSt['step']);
    }
    public static function accessorProvider(): array
    {
        return [
            'data set 1' => [':1:2', false, true, ['start' => 0, 'end' => 1, 'step' => 2]],
            'data set 2' => ['id', true, true, ['start' => null, 'end' => null, 'step' => null]],
            'data set 3' => ['::3', false, true, ['start' => 0, 'end' => \PHP_INT_MAX, 'step' => 3]],
            'data set 4' => ['::', false, true, ['start' => 0, 'end' => \PHP_INT_MAX, 'step' => 1]]


        ];
    }
}
