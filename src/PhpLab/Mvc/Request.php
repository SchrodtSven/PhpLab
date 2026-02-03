<?php

declare(strict_types=1);
/**
 * Global functions 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Phplab
 * @package Phplab
 * @version 0.1
 * @since 2026-02-03
 */


namespace SchrodtSven\PhpLab\Mvc;


class Request
{

    private string $path = ''; 
    private string $query = '';
    private array $_params;
    
    public function __construct(array $params = []) 
    {
        $this->path = $params['path'] ?? $this->path;
        $this->query = $params['query'] ?? $this->query;
        $this->_init();

    }

    private function _init()
    {
        // get important info from super globals
        $this->_params = $_REQUEST;
    }

}