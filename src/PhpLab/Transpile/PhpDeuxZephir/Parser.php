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
 * @version 0.23
 * @since 2025-08-20
 */
namespace SchrodtSven\PhpLab\Transpile\PhpDeuxZephir;

use PhpToken;
use SchrodtSven\PhpLab\Transpile\PhpDeuxZephir\Token;

class Parser
{
    protected array $zepTkn = [];
    public function __construct(private array $tokens)
    {
        // var_dump($tokens);
        // var_dump(count($this->tokens));
        // die;
        $this->preParse();
    }

    private function preParse(): void
    {
        
        for($i=0;$i<count($this->tokens);$i++) {
            //echo $i;
            if ($this->tokens[$i]->id == \T_VARIABLE) {
                echo "yes!";
                if($this->lookahead($i, 61)) {
                    $this->tokens[$i]->text = 'let ' . $this->tokens[$i]->text;
                }
            }
        }
    }

    private function lookahead(int $offset, int $expectedId, $ignore = \T_WHITESPACE)
    {
        for($i=$offset;$i<count($this->tokens);$i++) {   
            if($this->tokens[$i]->id == $ignore)
                continue;
            if($this->tokens[$i]->id == $expectedId)
                return true;
            else 
                return false;

        }
    }

    /**
     * Get the value of tokens
     */
    public function getTokens()
    {
        return $this->tokens;
    }
}



