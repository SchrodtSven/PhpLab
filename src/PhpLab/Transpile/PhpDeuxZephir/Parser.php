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


class Parser
{
    public function __construct(private array $tokens)
    {
        //var_dump($tokens);die;
        $this->preParse();
    }

    private function preParse(): void
    {
        for($i=0;$i<count($this->tokens);$i++) {
            if ($this->tokens[$i]->getTokenName() == \T_VARIABLE) {
                if($this->tokens[$i+1]->getTokenName() == '=') {
                    $this->tokens[$i]->text = 'let ' . $this->tokens[$i]->text;
                }
            }
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



