<?php

declare(strict_types=1);
/**
 * Class with static file helper functions
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.23
 * @since 2026-02-19
 */


namespace SchrodtSven\PhpLab\Core;

use InvalidArgumentException;

class FileExceptionHelper
{

    private const int CODE_EXISTS = 404; 
    private const int CODE_IS_READABLE = 401; 
    private const int CODE_IS_WRITEABLE = 403; 
    private const int CODE_IS_DIRECTORY = 666; 

    public const array ERR_MSG = [
        401 => 'Unauthorized read access try to file %s',
        403 => 'Unauthorized write access try to file %s',
        404 => 'Requested file "%s" does not exist!',
        666 => 'Requested file "%s" is not a directory'

    ];

    public static function exceptionIfNotFileExists(string $fn): void
    {
        if (!file_exists($fn)) {
            //throw new InvalidArgumentException(sprintf(self::ERR[404], $fn), 404);
            self::byCode($fn, self::CODE_EXISTS);
        }
    }

    public static function byCode(string $fn, int $code): void
    {
        $result = match($code) {
            self::CODE_IS_READABLE => is_readable($fn),
            self::CODE_IS_WRITEABLE => is_writable($fn),
            self::CODE_EXISTS => file_exists($fn),
            self::CODE_IS_DIRECTORY => is_dir($fn),
        };

        if(!$result)
                self::genericException($code, $fn);
    }

    private static function genericException(int $code, string $msg): void
    {
        throw new InvalidArgumentException(sprintf(self::ERR_MSG[$code], $msg), $code);
    }
}
