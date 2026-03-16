<?php

/**
 * Mocking class - used for testing/developing -  representing a wallet
 * 
 * Testing, that visibility is bound to class, NOT instances 
 * 
 * @package PhpLab
 * @author  Sven Schrodt <sven@schrodt.nrw>
 * @version 0.1
 * @since 2026-03-16
 * @link https://github.com/SchrodtSven/PhpLab
 */

namespace SchrodtSven\PhpLab\Mock;

class Wallet
{

    private const string GT = "GT";
    private const string LT = "LT";

    public function __construct(private int $bal) {}

    public function isGreaterThan(Wallet $other): bool
    {
        // This works: we can read $other's private $bal
        // because we're inside the Wallet class scope
        return $this->cmp($other, self::GT);
    }

    public function isLessThan(Wallet $other): bool
    {
        // This works: we can read $other's private $bal
        // because we're inside the Wallet class scope
        return $this->cmp($other, self::LT);
    }


    private function cmp(Wallet $other, string $mode = ""): bool
    {
        return match ($mode) {
            self::GT => $this->bal > $other->bal,
            self::LT => $this->bal < $other->bal,
            default =>  false
        };
    }
}

