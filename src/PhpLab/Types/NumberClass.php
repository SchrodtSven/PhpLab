<?php declare(strict_types=1);
/**
 * Handling numbers as objects
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P7DataType
 * @package P7DataType
 * @version 0.1
 * @since 2025-01-08
 */

 #        P7DataTypes\Core\NumberClass
namespace P7DataTypes\Core;

use P7DataTypes\Core\ArrayClass;
use P7DataTypes\Core\StringClass;
use Generator;
use InvalidArgumentException;

class NumberClass
{
    public const TYPES = ['int', 'double', 'float', 'bool'];

    public const string ERROR_INPUT_TYPE = "ERROR: %s is not a valid input type - valid types: %s";

    protected mixed $imported;

    protected string $source;

    protected string $target;



    public function __construct(protected mixed $content = 0)
    {
        // $this->sanitize($content) --> is_numeric??


    }

    /**
     * Importing data as current content
     *
     * @param mixed $import
     * @return self
     */
    public function import(mixed $import): self
    {
        $this->imported = $import;
        return $this;
    }

    /**
     * Importing data from type $source (optional)
     *
     * @param string $source
     * @return self
     */
    public function from(string $source): self
    {
        $this->sanitize($source);
        $this->source = $source;
        return $this;
    }

    /**
     * Importing as type $target
     *
     * @param string $target
     * @return self
     */
    public function as(string $target = 'float'): self
    {
        $this->sanitize($target);
        $this->target = $target;
        $this->content = match ($target) {
            'int' => (int) $this->imported,
            'double', 'float' => (float) $this->imported
        };
        return $this;
    }

    /**
     * Generator function for numbers from current value to $max by $step
     *
     * @param integer|float $max
     * @param integer $step
     * @return Generator
     */
    public function upTo(int|float $max, int|float $step = 1): Generator
    {
        foreach(range($this->content, $max, $step) as $i) {
            yield $i;
        }
    }

     /**
     * Generator function for numbers from current value to $min by $step
     *
     * @param integer|float $min
     * @param integer $step
     * @return Generator
     */
    public function downTo(int|float $min, int|float $step = 1): Generator
    {
        foreach(range($this->content, $min, $step) as $i) {
            yield $i;
        }
    }

    /**
     * Sanitizing imported data 
     * 
     * @FIXME
     *
     * @param string $type
     * @return void
     */
    protected function sanitize(string $type): void
    {
        if (!$this->ensureType($type))
            throw new InvalidArgumentException(sprintf(self::ERROR_INPUT_TYPE, $type, implode(', ', self::TYPES)));
    }

    /**
     * Detecting, if given type is valid for Number instances
     *
     * @param string $given
     * @return boolean
     */
    public function ensureType(string $given): bool
    {
        return in_array($given, self::TYPES);
    }

    /**
     * Getter for current (raw) content
     *
     * @return mixed
     */
    public function raw(): mixed
    {
        return $this->content;
    }

    /**
     * Formatting for output 
     * 
     * @param int $decimals - number of decimal digits
     * @param string $decimalSeparator
     * @param string $thousandsSeparator
     */
    public function format(int $decimals = 0, string $decimalSeparator = '.', string $thousandsSeparator = ","): string
    {
        return number_format($this->content, $decimals, $decimalSeparator, $thousandsSeparator);
    }

    /**
     * Magical interceptor function for string context, if you need more control use self::format()
     *  
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->content;
    }
}