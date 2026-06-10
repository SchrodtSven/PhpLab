<?php

declare(strict_types=1);
/**
 * Class for number guessing games
 * 
 * Motivation: 
 * 
 * - create little CLI game
 * - testing \Random\Randomizer ext.
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-06-10
 */

namespace SchrodtSven\PhpLab\Game;

use InvalidArgumentException;
use Override;
use Stringable;

class GuessNumber implements Stringable
{

    private int $s3cr3t = 0;

    private array $guesses = [];

    private int $noOfGuesses = 0;

    private const string NE = '%d is too %s%s';

    private const string EQ = '%d is correct!%s';

    public function __construct(private int $max = 100, private int $min = 0)
    {
        if ($max > getrandmax()) {
            throw new InvalidArgumentException('$max is too big!');
        }
        $r = new \Random\Randomizer();
        $this->s3cr3t = $r->getInt($min, $max);
    }

    #[Override]
    public function __toString(): string
    {
        return sprintf(
            'Min: %d, Max: %d, Secret: %d %sGuessed numberz: %s%sYou needed %d tries%s',
            $this->min,
            $this->max,
            $this->s3cr3t,
            PHP_EOL,
            implode(', ', $this->guesses),
            PHP_EOL,
            count($this->guesses),
            PHP_EOL
        );
    }

    public function guess(): int
    {
        print "Your next guess: ";
        $stdin = fopen('php://stdin', 'r');
        $curr = (int) trim(fgets($stdin));
        array_push($this->guesses, $curr);
        print $curr . PHP_EOL;
        return $curr;
    }

    //@FIXME - use match condtional stmt for elegance!!!
    public function eval(int $no): bool
    {
        if ($no == $this->s3cr3t) {
            printf(self::EQ, $no, PHP_EOL);
            return true;
        }

        if ($no > $this->s3cr3t) {
            printf(self::NE, $no, "big", PHP_EOL);
        }

        if ($no < $this->s3cr3t) {
            printf(self::NE, $no, "small", PHP_EOL);
        }
        return false;
    }

    public function run(): void
    {
        printf(
            'Guess an number between %d and %d%s',
            $this->min,
            $this->max,
            PHP_EOL
        );
        while (!$this->eval($this->guess())) {
        }
    }
}



$game = new GuessNumber();


$game->run();
print $game;
