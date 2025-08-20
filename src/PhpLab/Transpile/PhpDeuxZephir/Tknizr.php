<?php

declare(strict_types=1);
/**
 * Tokenising PHP code for usage in transpiling to Zephir
 * 
 * - sanitizing var names ($foo -> foo)
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-20
 */
namespace SchrodtSven\PhpLab\Transpile\PhpDeuxZephir;


class Tknizr
{
    private array $tokens;

    private array $sanitized;

    public function __construct(private string $code)
    {
        $this->tokens = \PhpToken::tokenize($this->code);
        $blackHole = array_shift($this->tokens); // Getting T_OPEN_TAG ('<php') off
        $this->tokens = array_values($this->tokens);
        $this->sanitizeVars();
    }


    /**
     * Remove whitespace tokens from list of tokens
     */
    public function removeWs(): self
    {
        $this->sanitized = array_filter($this->tokens, function ($itm) {
            if($itm->id == \T_WHITESPACE)
                return false;
            else 
                return true;
        });
        $this->sanitized = array_values($this->sanitized);
        return $this;
    }


    private function sanitizeVars(): void
    {
        array_walk($this->tokens, function(&$itm) {
                if($itm->id == \T_VARIABLE )
                    $itm->text = mb_substr($itm->text, 1);
        });
    }
    /**
     * Get the value of tokens
     *
     * @return array
     */
    public function getTokens(): array
    {
        return $this->tokens;
    }

    /**
     * Get the value of sanitized
     *
     * @return array
     */
    public function getSanitized(): array
    {
        return $this->sanitized;
    }
}



