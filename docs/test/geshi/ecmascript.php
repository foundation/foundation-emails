<?php
/*************************************************************************************
 * ecmascript.php
 * --------------
 * Author: Michel Mariani (http://www.tonton-pixel.com/site/)
 * Copyright: (c) 2010 Michel Mariani (http://www.tonton-pixel.com/site/)
 * Release Version: 1.0.8.11
 * Date Started: 2010/01/08
 *
 * ECMAScript language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2010/01/08 (1.0.8.6)
 *  -  First Release
 *  -  Adapted from javascript.php to support plain ECMAScript/JavaScript (no HTML, no DOM)
 *  -  Fixed regular expression for 'COMMENT_REGEXP' to exclude 'COMMENT_MULTI' syntax
 *  -  Added '~' and removed '@' from 'SYMBOLS'
 *  -  Cleaned up and expanded the list of 'KEYWORDS'
 *  -  Added support for 'ESCAPE_REGEXP' and 'NUMBERS' (from c.php)
 *  -  Selected colors to match my web site color chart
 *  -  Added full number highlighting in all C language style formats
 *  -  Added highlighting of escape sequences in strings, in all C language style formats including Unicode (\uXXXX).
 *
 * TODO (updated 2010/01/08)
 * -------------------------
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
    'LANG_NAME' => 'ECMAScript',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    // Regular Expression Literals
    'COMMENT_REGEXP' => array(2 => "/(?<=[\\s^])s\\/(?:\\\\.|(?!\n)[^\\*\\/\\\\])+\\/(?:\\\\.|(?!\n)[^\\*\\/\\\\])+\\/[gimsu]*(?=[\\s$\\.\\;])|(?<=[\\s^(=])m?\\/(?:\\\\.|(?!\n)[^\\*\\/\\\\])+\\/[gimsu]*(?=[\\s$\\.\\,\\;\\)])/iU"),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[\\\\abfnrtv\'\"?\n]#i",
        //Hexadecimal Char Specs
        2 => "#\\\\x[\da-fA-F]{2}#",
        //Hexadecimal Char Specs
        3 => "#\\\\u[\da-fA-F]{4}#",
        //Hexadecimal Char Specs
        4 => "#\\\\U[\da-fA-F]{8}#",
        //Octal Char Specs
        5 => "#\\\\[0-7]{1,3}#"
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array( // Reserved literals
            'false', 'true',
            'null'
            ),
        2 => array( // Main keywords
            'break', 'case', 'catch', 'continue', 'default', 'delete', 'do', 'else',
            'finally', 'for', 'function', 'if', 'in', 'instanceof', 'new', 'return',
            'switch', 'this', 'throw', 'try', 'typeof', 'var', 'void', 'while',
            'with'
            ),
        3 => array( // Extra keywords or keywords reserved for future use
            'abstract', 'as', 'boolean', 'byte', 'char', 'class', 'const', 'debugger',
            'double', 'enum', 'export', 'extends', 'final', 'float', 'goto', 'implements',
            'import', 'int', 'interface', 'is', 'long', 'native', 'namespace', 'package',
            'private', 'protected', 'public', 'short', 'static', 'super', 'synchronized', 'throws',
            'transient', 'use', 'volatile'
            ),
        4 => array( // Operators
            'get', 'set'
            ),
        5 => array( // Built-in object classes
            'Array', 'Boolean', 'Date', 'EvalError', 'Error', 'Function', 'Math', 'Number',
            'Object', 'RangeError', 'ReferenceError', 'RegExp', 'String', 'SyntaxError', 'TypeError', 'URIError'
            ),
        6 => array( // Global properties
            'Infinity', 'NaN', 'undefined'
            ),
        7 => array( // Global methods
            'decodeURI', 'decodeURIComponent', 'encodeURI', 'encodeURIComponent',
            'eval', 'isFinite', 'isNaN', 'parseFloat', 'parseInt',
            // The escape and unescape functions do not work properly for non-ASCII characters and have been deprecated.
            // In JavaScript 1.5 and later, use encodeURI, decodeURI, encodeURIComponent, and decodeURIComponent.
            'escape', 'unescape'
            ),
        8 => array( // Function's arguments
            'arguments'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}',
        '+', '-', '*', '/', '%',
        '!', '.', '&', '|', '^',
        '<', '>', '=', '~',
        ',', ';', '?', ':'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true,
        7 => true,
        8 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #009999;',
            2 => 'color: #1500C8;',
            3 => 'color: #1500C8;',
            4 => 'color: #1500C8;',
            5 => 'color: #1500C8;',
            6 => 'color: #1500C8;',
            7 => 'color: #1500C8;',
            8 => 'color: #1500C8;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #CC0000;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #3366CC;',
            1 => 'color: #3366CC;',
            2 => 'color: #3366CC;',
            3 => 'color: #3366CC;',
            4 => 'color: #3366CC;',
            5 => 'color: #3366CC;',
            'HARD' => '',
            ),
        'BRACKETS' => array(
            0 => 'color: #008800;'
            ),
        'STRINGS' => array(
            0 => 'color: #9900FF;'
            ),
        'NUMBERS' => array(
            0 => 'color: #FF00FF;',
            GESHI_NUMBER_BIN_PREFIX_0B => 'color: #FF00FF;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #FF00FF;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #FF00FF;',
            GESHI_NUMBER_FLT_SCI_SHORT => 'color: #FF00FF;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color: #FF00FF;',
            GESHI_NUMBER_FLT_NONSCI_F => 'color: #FF00FF;',
            GESHI_NUMBER_FLT_NONSCI => 'color: #FF00FF;'
            ),
        'METHODS' => array(
            1 => 'color: #660066;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);

?>