<?php

declare(strict_types=1);
/**
 * HTTP response object
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-02-03
 */


namespace SchrodtSven\PhpLab\Mvc;


class Response
{

    // Default MIME type
    private const string MT = "text/html";



    public function __construct(private array $params = []) 
    {

        
    }

    


}