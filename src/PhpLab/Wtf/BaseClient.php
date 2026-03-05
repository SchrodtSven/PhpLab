<?php

declare(strict_types=1);
/**
 * Http client for Wiki* services
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-02-04
 */


namespace SchrodtSven\PhpLab\Wtf;


class BaseClient
{

    protected const string ACT_SRCH = "wbsearchentities";

    protected bool $devMode = true;
    

    protected string $endpoint = "https://www.wikidata.org/w/api.php";
    protected array $params = [
        "action" => "wbsearchentities",
        "format" => 'json',
        "language" => 'en',
        "search" => 'lemma'
    ];


    public function buildUri(string $lemma): string
    {
        return $this->endpoint . '?' . http_build_query($this->params);
    }

    public function search(string $lemma)
    {
        $this->params['action'] = self::ACT_SRCH;
        $this->params['search'] = $lemma;
        $tmpUri = $this->buildUri($lemma);
        if ($this->devMode)
            print($tmpUri);
    }
}
