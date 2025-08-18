<?php

/**
 * Unit tests for functions within the DRY subnamespace (traits)
 * 
 * @see https://docs.phpunit.de/en/12.3/attributes.html#dataprovider
 */

use PHPUnit\Framework\TestCase;
use SchrodtSven\PhpLab\Types\StringClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\Attributes\DataProvider;
class StringTraitTest extends TestCase
{

    // StringBoolTrait testing

    #[TestWith(['Aileen', 'Aile', 'een', 'een'])]
    #[TestWith(['Analise', 'Ana', 'lise', 'ise'])]
    #[TestWith(['Andree', 'An', 'dree', 'ree'])]
    #[TestWith(['Ania', 'An', 'ia', 'nia'])]
    #[TestWith(['Auroora', 'A', 'uroor', 'ora'])]
    #[TestWith(['Biddy', 'Bi', 'ddy', 'ddy'])]
    #[TestWith(['Carolin', 'Caroli', 'lin', 'lin'])]
    #[TestWith(['Daniele', 'Da', 'iel', 'ele'])]
    #[TestWith(['Daphene', 'Daphe', 'hene', 'ene'])]
    #[TestWith(['Dasha', 'Das', 'ha', 'sha'])]
    #[TestWith(['Desdemona', 'D', 'emona', 'ona'])]
    #[TestWith(['Donnajean', 'Donnaje', 'jean', 'ean'])]
    #[TestWith(['Georgeta', 'Georget', 'rget', 'eta'])]
    #[TestWith(['Hilda', 'H', 'ild', 'lda'])]
    #[TestWith(['Kaycee', 'K', 'cee', 'cee'])]
    #[TestWith(['Lucie', 'Luc', 'uci', 'cie'])]
    #[TestWith(['Lurette', 'Lur', 'uret', 'tte'])]
    #[TestWith(['Mair', 'M', 'ai', 'air'])]
    #[TestWith(['Maureen', 'Maure', 'reen', 'een'])]
    #[TestWith(['Milli', 'Mi', 'ill', 'lli'])]
    #[TestWith(['Nikkie', 'Nikk', 'ikk', 'kie'])]
    #[TestWith(['Suzanne', 'Suzan', 'ne', 'nne'])]
    #[TestWith(['Zorah', 'Zor', 'rah', 'ah'])]
    public function testIfBeginsEndsContainsWorxProperly(string $origin, string $bg, string $md, string $en): void
    {
        $s = new StringClass($origin);
        $this->assertTrue($s->begins($bg));
        $this->assertTrue($s->ends($en));
        $this->assertTrue($s->contains($md));
    }

    // MultibyteStringTrait


     #[DataProvider('legacyIpNumSubstringProvider')]
    public function testIfLegacyIpNumSubstrWorxProperly(int $start, int $length, string $address, string $substr): void
    {
        $this->assertSame(
            (string) (new StringClass($address))->substr($start, $length),
            $substr
        );
    }






    // Data providers

    public static function legacyIpNumSubstringProvider(): array
    {
        return [
            [4, 13, '166.41.66.174', '41.66.174'],
            [0, 11, '122.234.141.216', '122.234.141'],
            [3, 10, '237.61.115.141', '.61.115.14'],
            [4, 13, '110.180.27.187', '180.27.187'],
            [1, 12, '118.90.60.122', '18.90.60.122'],
            [4, 12, '29.67.125.57', '7.125.57'],
            [4, 6, '59.102.87.42', '02.87.'],
            [3, 11, '128.0.18.204', '.0.18.204'],
            [4, 10, '82.72.81.21', '2.81.21'],
            [5, 10, '191.129.153.27', '29.153.27'],
            [0, 9, '58.5.30.225', '58.5.30.2'],
            [3, 14, '106.189.224.111', '.189.224.111'],
            [2, 9, '16.242.2.166', '.242.2.16'],
            [2, 12, '44.46.238.237', '.46.238.237'],
            [4, 11, '84.148.246.32', '48.246.32'],
            [2, 9, '117.114.79.35', '7.114.79.'],
            [1, 7, '112.113.153.21', '12.113.'],
            [2, 6, '93.63.96.190', '.63.96'],
            [0, 12, '104.175.21.77', '104.175.21.7'],
            [0, 10, '240.102.71.155', '240.102.71'],
            [1, 9, '248.15.86.25', '48.15.86.'],
            [4, 9, '113.154.254.153', '154.254.1'],
            [1, 13, '171.196.40.69', '71.196.40.69'],
            [2, 7, '29.101.105.128', '.101.10'],
            [0, 10, '139.159.116.30', '139.159.11'],
            [3, 12, '88.142.121.131', '142.121.131'],
            [1, 6, '167.93.119.18', '67.93.'],
            [3, 11, '119.176.156.74', '.176.156.74'],
            [2, 14, '149.218.163.74', '9.218.163.74'],
            [2, 14, '191.219.207.172', '1.219.207.172'],
            [3, 6, '65.159.52.124', '159.52'],
            [2, 9, '68.197.51.38', '.197.51.3'],
            [2, 14, '125.221.46.225', '5.221.46.225'],
            [1, 12, '79.91.135.224', '9.91.135.224'],
            [2, 8, '52.12.53.253', '.12.53.2'],
            [4, 6, '82.149.47.63', '49.47.'],
            [3, 6, '189.67.100.43', '.67.10'],
            [1, 10, '251.247.214.182', '51.247.214'],
            [4, 6, '189.230.113.8', '230.11'],
            [4, 8, '83.227.58.203', '27.58.20'],
            [4, 13, '5.239.128.160', '9.128.160'],
            [4, 7, '8.188.109.86', '8.109.8'],
            [4, 9, '190.227.170.218', '227.170.2'],
            [0, 11, '237.11.65.239', '237.11.65.2'],
            [4, 7, '98.228.165.44', '28.165.'],
            [2, 12, '250.18.38.83', '0.18.38.83'],
            [0, 9, '203.22.44.89', '203.22.44'],
            [1, 9, '191.35.71.212', '91.35.71.'],
            [2, 9, '169.2.24.160', '9.2.24.16'],
            [1, 13, '61.43.163.129', '1.43.163.129'],
            [0, 13, '239.61.206.63', '239.61.206.63'],
            [0, 9, '101.64.234.29', '101.64.23'],
            [1, 8, '199.92.99.82', '99.92.99'],
            [2, 13, '140.212.124.29', '0.212.124.29'],
            [0, 12, '187.4.84.254', '187.4.84.254']
        ];
    }
}
