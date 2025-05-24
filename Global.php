<?php
/**
 * FIXME/TODO
 * 
 * - kprint output styles 
 *   - var_dump, 
 *   - print_r, 
 *   - sqlite, 
 *   - pythonic ([1, 2, 3, {'name': 'Foo'}, 'Lorem'])
 */


error_reporting(E_ALL);
ini_set('display_startup_errors', true);
ini_set('display_errors', true);
require_once 'PrintHelper.php';

static $sep = " ";
static $end = PHP_EOL;



/**
 * Generic print “drop-in replacement” working with 
 * 
 * - different styles/modes (see main DocBlock above)
 * - variadic parameters (linke in Python etc.)
 *
 * @param [type] ...$args
 * @return void
 */
function kprint(...$args): void
{
    $ph = PrintHelper::getInst();
    $end = $ph->preparsePrint('end', $args);
    $sep = $ph->preparsePrint('sep', $args);
    unset($args['end'], $args['sep'], $foo);
    ## temp. h@cK:
    print_r($args);
    //var_dump(array_merge($args));
}






kprint(12, 44, [new stdClass(), 23.42],'HAllo', sep:' | ', end:'-+'.PHP_EOL);