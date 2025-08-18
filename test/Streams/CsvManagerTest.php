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
use SchrodtSven\PhpLab\Streams\CsvManager;
use SchrodtSven\PhpLab\Types\ListClass;
final class CsvManagerTest extends TestCase
{
    private string $fn = 'src/PhpLab/Data/non-php/female_first.csv';
    private CsvManager $manager;

   public function setUp(): void
   {
        $this->manager = new CsvManager($this->fn);
   }

   public function testIfIsInstanceOfFoo(): void
   {
     $this->assertInstanceOf(ListClass::class, $this->manager->asList());

     $this->assertIsArray($this->manager->asArray());
     $arr = $this->manager->literal();
     $this->assertIsArray($arr);
     $this->assertIsString((string)($this->manager));
   }

   public function testHeader(): void
   {
        $cols = $this->manager->columns();
        $this->assertSame($cols[0], 'id');
        $this->assertSame($cols[1], 'first_name');
   }
}
