<?php

declare(strict_types=1);
/**
 * Unit tests for ListClass (and its traits)
 * 
 * @see https://docs.phpunit.de/en/12.3/attributes.html#dataprovider
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-13
 */

namespace SchrodtSven\PhpLab\Streams;

class CsvManager
{

    private array $dta = [];
    private array $cols = [];

    public function __construct(
        private ?string $fn = null,
        private ?int $len = null,
        private string $sep = ",",
        private string $enc = "\"",
        private string $esc = "\\"
    ) {
        //@FIXME - validate path
        if (! is_null($this->fn))
            $this->readCsv($this->fn);
    }

    public function readCsv(string $fn): void
    {
        if(!file_exists($fn))
            throw new \InvalidArgumentException(('File not found: ' . $fn));
        $this->fn = $fn;
        $tmp = array_map(
            function ($a) {
                // @see https://wiki.php.net/rfc/kill-csv-escaping
                return str_getcsv($a, escape: $this->esc);
            },
            file($fn)
        );
        $this->cols = array_shift($tmp);

        foreach ($tmp as $row) {
            $this->dta[] = array_combine($this->cols, $row);
        }
    }

    public function toCsv(string $fn):  void
    {
        file_put_contents($fn, $this->raw());
    }

    public function asArray(): array
    {
        return $this->dta;
    }

    public function raw(): array
    {
        $tmp = [implode($this->sep, $this->cols)];
        foreach ($this->dta as $row) {
            $tmp[] = implode($this->sep, $row);
        }

        return $tmp;
    }

    public function columns(): array
    {
        return $this->cols;
    }
}