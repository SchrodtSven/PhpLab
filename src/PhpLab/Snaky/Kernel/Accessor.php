<?php

declare(strict_types=1);
/**
 * Accessor entity class representing slice addressing with index operators from data types like:
 * 
 * “Vertical sclices” (“rows”)
 * 
 * - ['0:4'] - first five  “rows”
 * - [':4'] - first five  “rows”
 * - [':'] - all  “rows”
 * - ['4:'] - all  “rows” but the first four
 * 
 * “Horizontal sclices” (“columns”)
 * 
 * - [['id', 'mail']] - cutting  named “cols” from data structure
 * - [['2:4']] - cutting  “cols” from 3rd to fifth index from data structure
 * 
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-18
 */
namespace SchrodtSven\PhpLab\Snaky\Kernel;

class Accessor implements \Stringable
{
    public const string SLC_SEP = ':'; 
    protected bool $isVertical; // boolean indication if we are working as accessor for rows or not
    protected array $columns; // Column names for resulting data structure 
    protected bool $isDefault = false; //

    protected ?int $slcStart = null;
    protected ?int $slcEnd = null;
    protected ?int $slcStep = null;
     
    public function __construct(protected int|string|array $accessor)
    {
        $this->analyze();
    }

    public function analyze(): void
    {
        if(is_array($this->accessor)) {
            $this->isVertical = false;
            $this->parseColumns();
        } else {
              $this->isVertical = true;
              $this->parseScalar();
        }
    }

    public function parseColumns()
    {
       //$this->columns = $accessor;
       //@FIXME
    }

    public function parseScalar()
    {   
       //var_dump($this->accessor);
        if(is_int($this->accessor)) {
            $this->isDefault = true;
        } elseif(str_contains($this->accessor, self::SLC_SEP)) {
            $this->parseSlc();
        } else {
            $this->isDefault = true;
        }

    }

    public function parseSlc(): void
    {
        $parts = explode(self::SLC_SEP, $this->accessor);
        //var_dump($parts);
        if(count($parts) == 1) {
            list ($this->slcStart, $this->slcEnd, $this->slcStep) = [0, \PHP_INT_MAX, 1];
        }
        if(count($parts) == 2) {
            list ($this->slcStart, $this->slcEnd, $this->slcStep) = [(int) $parts[0], (int) $parts[1], 1];
            

        } elseif(count($parts) == 3) {
            // for now we do ignore if there were more parts!!!, but: @FIXME
            list($this->slcStart, $this->slcEnd, $this->slcStep) = [(int) $parts[0], (int) $parts[1], (int) $parts[2]];
        }

        $this->sanitzeStartEndSlice();
    }

    public function sanitzeStartEndSlice()
    {
        if(empty($this->slcStart)) {
                $this->slcStart = 0;
            }
            if(empty($this->slcEnd)) {
                $this->slcEnd = \PHP_INT_MAX;
            }
            if(empty($this->slcStep)) {
                $this->slcStep= 1;
            }
    }

    public function __toString(): string
    {
        
        return ($this->isDefault) 
                    ? (string) $this->accessor
                    : (($this->isVertical) 
                        ? "Vertical slice: start: {$this->slcStart}, end: {$this->slcEnd}, step: {$this->slcStep}"
                        : "Horizontal slice with colums: (" . implode(', ', $this->accessor) . ')');

        
    }

    /**
     * Get the value of isDefault
     *
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * Set the value of isDefault
     *
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get the value of isVertical
     *
     * @return bool
     */
    public function getIsVertical(): bool
    {
        return $this->isVertical;
    }

    /**
     * Set the value of isVertical
     *
     * @param bool $isVertical
     *
     * @return self
     */
    public function setIsVertical(bool $isVertical): self
    {
        $this->isVertical = $isVertical;

        return $this;
    }

    /**
     * Get the value of columns
     *
     * @return array
     */
    public function getColumns(): array
    {
        return $this->columns;
    }

    /**
     * Set the value of columns
     *
     * @param array $columns
     *
     * @return self
     */
    public function setColumns(array $columns): self
    {
        $this->columns = $columns;

        return $this;
    }

    /**
     * Get the value of slcStart
     *
     * @return ?int
     */
    public function getSlcStart(): ?int
    {
        return $this->slcStart;
    }

    /**
     * Get the value of slcEnd
     *
     * @return ?int
     */
    public function getSlcEnd(): ?int
    {
        return $this->slcEnd;
    }

    /**
     * Get the value of slcStep
     *
     * @return ?int
     */
    public function getSlcStep(): ?int
    {
        return $this->slcStep;
    }
}


