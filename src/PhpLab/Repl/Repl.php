<?php

declare(strict_types=1);
/**
 * Tiny template for a REPL environment 
 * - just awfully hacked prototype, not even a POC
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/Phlox
 * @package Phlox
 * @version 0.1
 * @since 2025-08-11
 */
class Repl
{
    private float $version = 0.9;
    private string $name = 'SchrodtSven\PhpLab\Repl:  REPL version ';
    private string $welc = '*** %s Welcome user ***';
    private string $prmt = '> ';
    private array $grmr = ['QUIT', 'DATE', 'HELP', 'NOW', 'BYE'];

    // modes defining how to react on user's input on prompt
    private const array REPL_MODE  = ['dft', 'mrr', 'rot'];
    private string $crtMode = 'rot';

    private const string  EXIT = 'BYE';
    private const string  TIN = 'The time is now: ';

    private const int MAX_INP_BUFF = 1024;

    public function __construct()
    {
        echo implode(PHP_EOL, [
            sprintf($this->welc, $this->name . $this->version),
            $this->now(),
            $this->prmt
        ]);
    }

    public function loop(): void
    {
        while (true) {
            $inp = $this->readLn();
            if ($inp === self::EXIT) {
                exit(0);
            }
            $this->printLn($this->parseInput($inp));
            echo $this->prmt;
        }
    }

    private function readLn(): string
    {
        return trim(fread(\STDIN, self::MAX_INP_BUFF));
    }

    private function printLn(string $txt): void
    {
        echo $txt . PHP_EOL;
    }

    private function parseInput(string $inp): string
    {

        return match (true) {
            in_array($inp, ['NOW', 'DATE']) => $this->now(false),
            $inp == 'ROT' => str_rot13(trim($inp)),
            default => 'Parse error: unknown command!'
        };
    }

    private function now(bool $prol = true): string
    {
        return ($prol)
            ? self::TIN . date('Y-m-d H:i:s')
            : date('Y-m-d H:i:s');
    }
}
# (new Repl)->loop();
