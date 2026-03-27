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

    public const string ACT_SRCH = "wbsearchentities";

    public const string DFT_FRMT = "json";

    public const string DFT_LNG = "en";

    public const string DFT_Q = "lemma";

    public const string ERR_KEY = "The parameter %s is NOT VALID!";

    protected bool $devMode = true;


    protected string $endpoint = "https://www.wikidata.org/w/api.php?";

    protected array $params = [
        "action" => self::ACT_SRCH,
        "format" => self::DFT_FRMT,
        "language" => self::DFT_LNG,
        "search" => self::DFT_Q
    ];


    public function buildUri(string $lemma): string
    {
        return $this->endpoint .  http_build_query($this->params);
    }

    public function search(string $lemma): string
    {
        $this->params['action'] = self::ACT_SRCH;
        $this->params['search'] = $lemma;
        $tmpUri = $this->buildUri($lemma);
        if ($this->devMode)
            print($tmpUri);
        return $tmpUri;
    }

    /**
     * Get the value of devMode
     *
     * @return bool
     */
    public function getDevMode(): bool
    {
        return $this->devMode;
    }

    /**
     * Set the value of devMode
     *
     * @param bool $devMode
     *
     * @return self
     */
    public function setDevMode(bool $devMode): self
    {
        $this->devMode = $devMode;

        return $this;
    }

    public function __set($name, $value)
    {
        $this->checkParamKey($name);
        $this->params[$name] = $value;
    }

    public function __get($name)
    {
        $this->checkParamKey($name);
        return $this->params[$name];
    }

    protected function checkParamKey(string $name)
    {
        if (!array_key_exists($name, $this->params))
            throw new \Exception(sprintf(self::ERR_KEY, $name));
    }
}
