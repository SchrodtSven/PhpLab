<?php

declare(strict_types=1);
/**
 * Interface for classes with stack operations 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Types;

interface StackInterface
{
   public function push(mixed $value): self;
   
   public function pop(): mixed;

   public function unshift(mixed $value): self;

   public function shift(): mixed;

}