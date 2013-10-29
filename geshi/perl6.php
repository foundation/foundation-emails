<?php
/*************************************************************************************
 * perl6.php
 * ---------
 * Author: Kodi Arfer (kodiarfer {at} warpmail {period} net); forked from perl.php 1.0.8 by Andreas Gohr (andi@splitbrain.org), Ben Keen (ben.keen@gmail.com)
 * Copyright: (c) 2009 Kodi Arfer, (c) 2004 Andreas Gohr, Ben Keen (http://www.benjaminkeen.org/), Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2009/11/07
 *
 * Perl 6 language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/12/25 (1.0.8.6)
 *   - First Release
 *
 * TODO (updated 2009/11/07)
 * -------------------------
 * * It's all pretty rough. Perl 6 is complicated; this'll never be more
 *   than reasonably accurate unless it's carefully written to match
 *   STD.pm.
 * * It's largely incomplete. Lots of keywords are no doubt missing.
 * * Recognize comments like #`( Hello! ).
 * * Recognize qw-ing angle brackets.
 * * ! should probably be in OBJECT_SPLITTERS too, but putting it there
 *   gives bizarre results. What to do?.
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Perl 6',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array('=begin' => '=end'),
    'COMMENT_REGEXP' => array(
        //Regular expressions
        2 => "/(?<=[\\s^])(s|tr|y)\\/(?:\\\\.|(?!\n)[^\\/\\\\])+\\/(?:\\\\.|(?!\n)[^\\/\\\\])*\\/[msixpogcde]*(?=[\\s$\\.\\;])|(?<=[\\s^(=])(m|q[qrwx]?)?\\/(?:\\\\.|(?!\n)[^\\/\\\\])+\\/[msixpogc]*(?=[\\s$\\.\\,\\;\\)])/iU",
        //Regular expression match variables
        3 => '/\$\d+/',
        //Heredoc
        4 => '/<<\s*?([\'"]?)([a-zA-Z0-9]+)\1;[^\n]*?\\n.*\\n\\2(?![a-zA-Z0-9])/siU',
        //Beastly hack to finish highlighting each POD block
        5 => '((?<==end) .+)'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'HARDQUOTE' => array("'", "'"),            // An optional 2-element array defining the beginning and end of a hard-quoted string
    'HARDESCAPE' => array('\\\''),
        // Things that must still be escaped inside a hard-quoted string
        // If HARDQUOTE is defined, HARDESCAPE must be defined
        // This will not work unless the first character of each element is either in the
        // QUOTEMARKS array or is the ESCAPE_CHAR
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'do', 'else', 'elsif', 'for', 'if', 'then', 'until',
            'while', 'loop', 'repeat', 'my', 'xor', 'or', 'and',
            'unless', 'next', 'last', 'redo', 'not', 'our', 'let',
            'temp', 'state', 'enum', 'constant', 'continue', 'cmp',
            'ne', 'eq', 'lt', 'gt', 'le', 'ge', 'leg', 'div', 'X',
            'Z', 'x', 'xx', 'given', 'when', 'default', 'has',
            'returns', 'of', 'is', 'does', 'where', 'subset', 'but',
            'True', 'False', 'return', 'die', 'fail'
            ),
        2 => array(
            'use', 'sub', 'multi', 'method', 'submethod', 'proto',
            'class', 'role', 'grammar', 'regex', 'token', 'rule',
            'new', 'BEGIN', 'END', 'CHECK', 'INIT', 'START', 'FIRST',
            'ENTER', 'LEAVE', 'KEEP', 'UNDO', 'NEXT', 'LAST', 'PRE',
            'POST', 'CATCH', 'CONTROL', 'BUILD'
            ),
        3 => array(
            'all', 'any', 'cat', 'classify', 'defined', 'grep', 'first',
            'keys', 'kv', 'join', 'map', 'max', 'min', 'none', 'one', 'pairs',
            'print', 'printf', 'roundrobin', 'pick', 'reduce', 'reverse', 'say',
            'shape', 'sort', 'srand', 'undefine', 'uri', 'values', 'warn', 'zip',

            # Container
            'rotate', 'comb', 'end', 'elems', 'delete',
            'exists', 'pop', 'push', 'shift', 'splice',
            'unshift', 'invert', 'decode',

            # Numeric
            'succ', 'pred', 'abs', 'exp', 'log',
            'log10', 'rand', 'roots', 'cis', 'unpolar', 'i', 'floor',
            'ceiling', 'round', 'truncate', 'sign', 'sqrt',
            'polar', 're', 'im', 'I', 'atan2', 'nude',
            'denominator', 'numerator',

            # Str
            'p5chop', 'chop', 'p5chomp', 'chomp', 'lc', 'lcfirst',
            'uc', 'ucfirst', 'normalize', 'samecase', 'sameaccent',
            'capitalize', 'length', 'chars', 'graphs', 'codes',
            'bytes', 'encode', 'index', 'pack', 'quotemeta', 'rindex',
            'split', 'words', 'flip', 'sprintf', 'fmt',
            'substr', 'trim', 'unpack', 'match', 'subst', 'trans'
            )
        ),
    'SYMBOLS' => array(
        '<', '>', '=',
        '!', '@', '~', '&', '|', '^',
        '+','-', '*', '/', '%',
        ',', ';', '?', '.', ':',
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #009966; font-style: italic;',
            3 => 'color: #0000ff;',
            4 => 'color: #cc0000; font-style: italic;',
            5 => 'color: #666666; font-style: italic;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            'HARD' => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;',
            'HARD' => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;',
            2 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            0 => 'color: #0000ff;',
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::'
        ),
    'REGEXPS' => array(
        //Variable
        0 => '(?:[$@%]|&amp;)(?:(?:[\^:*?!~]|&lt;)?[a-zA-Z_][a-zA-Z0-9_]*|(?=\.))'
        # We treat the . twigil specially so the name can be highlighted as an
        # object field (via OBJECT_SPLITTERS).
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'COMMENTS' => array(
            'DISALLOWED_BEFORE' => '$'
        )
    )
);

?>