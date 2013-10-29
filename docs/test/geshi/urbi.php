<?php
/*************************************************************************************
 * urbi.php
 * -------
 * Author: Alexandre Morgand (morgand.alexandre@gmail.com)
 * Copyright: (c) 2011 Morgand (http://gostai.com)
 * Release Version: 1.0.8.11
 * Date Started: 2011/09/10
 *
 * Urbi language file for GeSHi.
 *
 * CHANGES
 * -------
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
    'LANG_NAME' => 'Urbi',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        //Multiline-continued single-line comments
        1 => '/\/\/(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //Multiline-continued preprocessor define
        2 => '/#(?:\\\\\\\\|\\\\\\n|.)*$/m',
        // Urbi warning.
        3 => "#\[[0-9a-f]{8}:warning\].*#",
        // Urbi message from echo.
        4 => '#\[[0-9a-f]{8}\] \*\*\*.*#',
        // Urbi error message.
        6 => '#\[[0-9a-f]{8}:error\].*#',
        // Urbi system message.
        5 => '#\[00.*\].*#',
        // Nested comment. Max depth 4.
        7 => '#\/\*(.|\n)*\/\*(.|\n)*\*\/(.|\n)*\*\/#',
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(
        0 => '"',
        1 => '\'',
        ),
    // For Urbi, disable escape char is better.
    'ESCAPE_CHAR' => '\\',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[abfnrtv\\\'\"?\n]#",
        //Hexadecimal Char Specs
        2 => "#\\\\x[\da-fA-F]{2}#",
        //Hexadecimal Char Specs
        3 => "#\\\\u[\da-fA-F]{4}#",
        //Hexadecimal Char Specs
        4 => "#\\\\U[\da-fA-F]{8}#",
        //Octal Char Specs
        5 => "#\\\\[0-7]{1,3}#",
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        // Condition keywords.
        1 => array(
            'at', 'at;', 'at|', 'at&', 'at,', 'break', 'call', 'case', 'catch', 'continue',
            'do', 'else', 'every', 'every&', 'every,', 'every;', 'every|', 'for', 'for&',
            'for,', 'for;', 'foreach', 'for|', 'freezeif', 'goto', 'if', 'in', 'loop',
            'loop&', 'loop,', 'loop;', 'loop|', 'or_eq', 'stopif', 'switch', 'try',
            'waituntil', 'when', 'whenever', 'while', 'while&', 'while,', 'while;',
            'while|', 'throw', 'onleave', 'watch', 'return', 'and_eq', 'default', 'finally',
            'timeout', 'xor_eq'
            ),
        // Type.
        2 => array(
            'virtual', 'using', 'namespace', 'inline', 'protected', 'private', 'public',
            'typename', 'typeid', 'class', 'const_cast', 'dynamic_cast', 'friend',
            'template', 'enum', 'static_cast', 'reinterpret_cast', 'mutable', 'explicit'
            ),
        // Standard function.
        3 => array(
            'this', 'sizeof', 'delete', 'assert', 'isdef', 'compl', 'detach',
            'disown', '__HERE__', 'asm'
            ),
        // Type.
        4 => array(
            'char', 'const', 'double', 'int', 'long', 'typedef', 'union',
            'unsigned', 'var', 'short', 'wchar_t', 'volatile', 'signed', 'bool',
            'float', 'struct', 'auto', 'register', 'static', 'extern', 'function',
            'export', 'external', 'internal', 'closure', 'BIN'
            ),
        ),
    'SYMBOLS' => array(
        0 => array('(', ')', '{', '}', '[', ']'),
        1 => array('<', '>','=', '!=', '==', '==='),
        2 => array('+', '-', '*', '/', '%', 'bitand', 'bitor', 'xor'),
        3 => array('!', '^', '&', '|'),
        4 => array('?', ':', ';')
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff;',
            2 => 'color: #0000ff;',
            3 => 'color: #0000dd;',
            4 => 'color: #0000ff;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666;',
            2 => 'color: #339900;',
            3 => 'color: #d46b0f;',
            4 => 'color: #20b537;',
            5 => 'color: #73776f;',
            6 => 'color: #a71616;',
            7 => 'color: #666666;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #ff0000;',
            1 => 'color: #ff0000;',
            ),
        'BRACKETS' => array(
            0 => 'color: #7a0874; font-weight: bold;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;',
            1 => 'color: #007788;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000dd;'
            ),
        'METHODS' => array(
            1 => 'color: #007788;',
            2 => 'color: #007788;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #008000;',
            1 => 'color: #0000f8;',
            2 => 'color: #000040;',
            3 => 'color: #000040; font-weight: bold;',
            4 => 'color: #008080;'
            ),
        'REGEXPS' => array(
            0 => 'color: #0000dd',
            1 => 'color: #0000dd;',
            2 => 'color: #0000dd;',
            3 => 'color: #0000dd;',
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::',
        // FIXME: add -> splitter.
        ),
    'REGEXPS' => array(
        0 => '0x[0-9a-fA-F]([0-9a-fA-F_]*[0-9a-fA-F])*',
        1 => '[0-9]([0-9_]*[0-9])*(e|E)(-|\+)?[0-9]([0-9_]*[0-9])*',
        2 => '[0-9]([0-9_]*[0-9])*(min|s|ms|h|d)',
        3 => '[0-9]+_([0-9_])*[0-9]',
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
);

?>
