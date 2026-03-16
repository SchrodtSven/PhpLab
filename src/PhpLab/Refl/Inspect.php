<?php

/**
 * Inspecting class using PHP's Reflection API
 * 
 * @package PhpLab
 * @author  Sven Schrodt <sven@schrodt.nrw>
 * @version 0.1
 * @since 2026-03-16
 * @link https://github.com/SchrodtSven/PhpLab
 */

namespace SchrodtSven\PhpLab\Refl;

use ReflectionClass;

class Inspect
{
    public object $obj;
    public ReflectionClass $refl;

    public function __construct(object $obj)
    {
        $this->obj = $obj;
        $this->refl = new ReflectionClass($obj);
    }

    public function __get(string $name): mixed
    {
        $property = $this->refl->getProperty($name);

        return $property->getValue($this->obj);
    }

    public function __set(string $name, mixed $value): void
    {
        (fn() => $this->{$name} = $value)->call($this->obj);
    }

    public function __call(string $name, array $params = []): mixed
    {
        return (fn() => $this->{$name}(...$params))->call($this->obj);
    }
}
