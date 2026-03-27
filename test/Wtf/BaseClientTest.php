<?php

declare(strict_types=1);
/**
 * Unit Testing base funcionality of Wiki Tele Foo Base client
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-03-27
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use SchrodtSven\PhpLab\Wtf\BaseClient;

class BaseClientTest extends TestCase
{

    private BaseClient $client;

    private const string URI_SRCH = 'https://www.wikidata.org/w/api.php?action=%s&format=%s&language=%s&search=%s';

    public static function setUpBeforeClass(): void {}

    public static function tearDownAfterClass(): void {}

    #[DataProvider('MetaSynVarProvider')]
    public function testFoundation(string $q): void
    {
        $this->client = new BaseClient();
        $this->client->setDevMode(false);

        $this->assertTrue($this->client->format == 'json');
        $this->assertTrue($this->client->language == 'en');
        $this->assertSame(
            sprintf(
                self::URI_SRCH, 
                $this->client::ACT_SRCH,
                $this->client::DFT_FRMT,
                $this->client::DFT_LNG,
                $q


            ), 
            $this->client->search($q)
        );

        $this->assertTrue($this->client->search == $q);
        // https://www.wikidata.org/w/api.php?action=wbsearchentities&format=json&language=en&search=Foo

        $this->expectException(\Exception::class);
        $this->client->bar = 42;
    }

    public static function MetaSynVarProvider(): array
    {
        return [
            ['quux'],
            ['foobar'],
            ['foo'],
            ['baz'],
            ['bar'],
            ['qux'],
            ['xyzzy'],
            ['corge'],
            ['grault'],
            ['garply'],
            ['waldo'],
            ['fred'],
            ['plugh'],
            ['thud'],
            ['spam'],
            ['ham'],
            ['eggs'],
            ['Spider-Man']
        ];
    }
}
