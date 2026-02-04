<?php

declare(strict_types=1);
/**
 * Tiny parser - replacing placeholders in templste files (default: '{{NAME}}')
 * 
 *  - rendering tpl files with placeholders
 *  - implementing Stringable
 *  - save to static files 
 *  - miy2c...
 * 
 * @FIXME Delete not replaced placeholders
 * * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-02-04
 */


namespace SchrodtSven\PhpLab\Parser;
use SchrodtSven\PhpLab\Parser\ParsedEntity;
use SchrodtSven\PhpLab\Types\StringClass;

class TinyParser implements \Stringable
{

    private const string TPL_PH = '{{%s}}';
    
    private string $tplRoot = 'App/tpl/';
    private string $tplSfx = '.tpl';
    
    private $replacement = [];

    public function __construct(private string $tpl = 'index') {}

    public function __set($name, $value): void
    {
        $this->replacement[$name] = $value;
    }

    public function __get($name): ?string
    {
        return $this->replacement[$name] ?? null;
    }

    public function render(): string
    {
        $raw = file_get_contents("{$this->tplRoot}{$this->tpl}{$this->tplSfx}");

        foreach ($this->replacement as $k => $v) {
            $raw = str_replace(
                sprintf(self::TPL_PH, $k),
                $v,
                $raw
            );
        }

        return $raw;
    }

    public function __toString()
    {
        return $this->render();
    }

    /**
     * Saving dynamically rendered content to static file
     *
     * @param string $fn
     * @return self
     */
    public function save(string $fn): self
    {
        file_put_contents($fn, $this->render());
        return $this;
    }

    /**
     * Get the value of replacement
     */
    public function getReplacement(): array
    {
        return $this->replacement;
    }

    /**
     * Set the value of replacement
     */
    public function setReplacement($replacement): self
    {
        $this->replacement = $replacement;

        return $this;
    }
}