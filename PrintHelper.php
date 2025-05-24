<?php

class PrintHelper
{
    private static $_inst = null;

    private const array MODES = ['pythonic', 'print_r', 'var_dump', 'sqlite', 'koalas'];

    private string $currMode = 'print_r';

    public static function getInst(): static
    {
        if (is_null(static::$_inst))
            static::$_inst = new static();
        return static::$_inst;
    }

    public function renderOutput(...$args): string
    {
        $tmp = '';

        return $tmp;
    }

    public function preparsePrint(string $what, $args): ?string
    {
        $sep = " ";
        $end = PHP_EOL;
        return match ($what) {
            'sep' => $args['sep'] ?? $sep,
            'end' => $args['end'] ?? $end,
            default => null
        };
    }
}
