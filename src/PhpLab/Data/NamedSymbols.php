<?php
/**
 * Class managing named symbols as public const stringants
 * 
 *  - begins, 
 *  - ends, 
 *  - contains,
 *  - matches regular expression,
 *  - ...
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-12
 */

namespace SchrodtSven\PhpLab\Data;

class NamedSymbols
{
    public const string CHEVRONS_START = '<';  // open chevrons
    public const string CHEVRONS_END   = '>';  // close chevrons
    public const string PARENTHESES_START = '(';  // open parentheses
    public const string PARENTHESES_END   = ')';  // close parentheses
    public const string BRACES_START = '{';  // open braces
    public const string BRACES_END   = '}';  // close braces
    public const string BRACKETS_START = '[';  // open brackets
    public const string BRACKETS_END   = ']';  // close brackets
    public const string PIPE_START = '|';  // open pipe
    public const string PIPE_END   = '|';  // close pipe
    public const string TICK_START = '´';  // open tick
    public const string TICK_END   = '´';  // close tick
    public const string BACKTICK_START = '`';  // open backtick
    public const string BACKTICK_END   = '`';  // close backtick
    public const string SINGLE_QUOTES_START = '\'';  // open single quotes
    public const string SINGLE_QUOTES_END   = '\'';  // close single quotes
    public const string DOUBLE_QUOTES_START = '"';  // open double quotes
    public const string DOUBLE_QUOTES_END   = '"';  // close double quotes
    public const string TYPOGRAPHIC_SINGLE_QUOTES_START = '‘';  // open typographic single quotes
    public const string TYPOGRAPHIC_SINGLE_QUOTES_END   = '’';  // close typographic single quotes
    public const string TYPOGRAPHIC_DOUBLE_QUOTES_START = '“';  // open typographic double quotes
    public const string TYPOGRAPHIC_DOUBLE_QUOTES_END   = '”';  // close typographic double quotes

     // Card Suits
     public const string  BLACK_SPADE_SUIT = '♠';

     public const string  BLACK_HEART_SUIT = '♥';
     
     public const string  BLACK_DIAMOND_SUIT = '♦';
 
     public const string  BLACK_CLUB_SUIT = '♣';

     /**
     * Constant name for underscore (aliases: underline, underdash, low line or low dash)
     * 
     * @var string
     */
    public const string UNDERSCORE = "_";
    
    
    public const string HYPHEN = "-";
}