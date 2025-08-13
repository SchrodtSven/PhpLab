<?php

/**
 * Named symbols as public const strings
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

    public const string WIFI = '🛜';
    public const string HYPHEN = "-";

    // Symbolz for Mac special keys
    public const string MAC_KBD_CTRL = '⌃';  // Control
    public const string MAC_KBD_OPT = '⌥';  // Option
    public const string MAC_KBD_SHFT = '⇧';  // Shift
    public const string MAC_KBD_CMD = '⌘';  // Command
    public const string MAC_KBD_CMD_ALT = '';  // Alt. Command (apple)

    // @see: ftp://ftp.unicode.org/Public/MAPPINGS/VENDORS/APPLE/KEYBOARD.TXT
    // These are the official Unicode symbol mappings published by Apple.
    public const string  APPLE_RET_LTR = '↩'; // Return left tp right
    public const string  APPLE_RET_RTL = '↪'; // Return right to left
    public const string  APPLE_ESC = '⎋'; // Escape
    public const string  APPLE_CAP_LCK = '⇪'; // Caps lock
    public const string  APPLE_EJT = '❘⃝'; // Eject
    public const string  APPLE_PWR = '⏏'; // Power

    
       
}
