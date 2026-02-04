<?php

declare(strict_types=1);
/**
 * Parser for templates with alternative PHP Syntax (phtml)
 * 
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

class PhtmlParser implements \Stringable
{

    
    private string $tplRoot = 'App/tpl/';
    private string $tplSfx = '.phtml';
    
    public function __construct(private string $tpl = 'index')
    {
        
    }

    public function set(string $name, mixed $value): self
    {
        $this->content[$name] = $value;
        return $this;
    }

    public function get(string $name): string
    {
        return $this->content[$name] ?? '';
    }

    public function __get(string $name): mixed
    {
        return $this->get($name);
    }

    public function __set(string $name, mixed $value): void
    {
        $this->set($name, $value);
    }


     
    public function render(): string
    {
       return $this->renderInternal($this->tplDir . $this->tpl);
    }

    public function renderView(string $viewName): string
    {
        return $this->renderInternal($this->tplRoot . $viewName );
    }
        
    public function renderDoclet(string $fileName): string
    {
        $tmp = (new self())->setTpl($fileName);
        return $tmp->render();
    }

    /**
     * Internally used rendering function using PHP's output control mechanism
     *
     * 
     * @see https://www.php.net/manual/en/ref.outcontrol.php
     * @param string $fullPath
     * @return string
     */
    private function renderInternal(string $fullPath): string
    {
        ob_start();
        require $fullPath . $this->tplSuffix;
        $view = ob_get_contents();
        ob_end_clean();
        return $view;
    }
    /**
     * Get the value of tpl
     *
     * @return string
     */
    public function getTpl(): string
    {
        return $this->tpl;
    }

    /**
     * Set the value of tpl
     *
     * @param string $tpl
     *
     * @return self
     */
    public function setTpl(string $tpl): self
    {
        $this->tpl = $tpl;
        return $this;
    }

    /**
     * Get the value of view
     *
     * @return string
     */
    public function getView(): string
    {
        return $this->view;
    }

    /**
     * Set the value of view
     *
     * @param string $view
     *
     * @return self
     */
    public function setView(string $view): self
    {
        $this->view = $view;
        return $this;
    }
}