<?php

declare(strict_types=1);
/**
 *  HTTP request object
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
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