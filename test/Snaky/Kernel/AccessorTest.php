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
use SchrodtSven\PhpLab\Snaky\Kernel\Accessor;
use PHPUnit\Framework\TestCase;

final class AccessorTest extends TestCase
{
    #[DataProvider('accessorProvider')]
    public function testAccessorisDefault(string $accessor, bool $default): void
    {
        $acc = new Accessor($accessor);
        $this->assertSame($acc->getIsDefault(), $default);
    }



    public static function accessorProvider(): array
    {
        return [
            'data set 1' => ['0:1:2', false],
            'data set 2' => ['id', true],
            'data set 2' => ['::3', false],
            
        ];
    }
}
