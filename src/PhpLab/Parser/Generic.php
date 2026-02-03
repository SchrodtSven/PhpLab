<?php

declare(strict_types=1);
/**
 * Generic text (file) parser
 * 
 * - from string
 * - from pre-parsed text file
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-02-03
 */


namespace SchrodtSven\PhpLab\Parser;
use SchrodtSven\PhpLab\Parser\ParsedEntity;
use SchrodtSven\PhpLab\Types\StringClass;

class Generic
{

    private ParsedEntity $lines;

    public function __construct(private string|array $cnt)
    {
        if (is_string($cnt)) {
            $this->cnt = explode(PHP_EOL, $this->cnt);
        }

        $this->lines = new ParsedEntity($this->cnt);
        $this->_entype();
    }

    public static function fromFile(string $path) : self
    {
        return new self(file($path));
    }

    public function _entype(): void
    {
        for($i=0;$i<count($this->lines);$i++) {
            $this->lines[$i] = new StringClass($this->lines[$i]);
        }
    }

    public function splitEntitiesBy(string $sep): self
    {
        $this->lines->map(function($itm) use($sep) {
            return $itm->splitBy($sep);
        });

        // foreach($this->lines as &$itm) {
        //     $itm = $itm->splitBy($sep);
        // }


        return $this;
    }

    public function getLines(): ParsedEntity
    {
        return $this->lines;
    }
}
