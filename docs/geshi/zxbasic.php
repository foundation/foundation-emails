<?php
/*************************************************************************************
 * zxbasic.php
 * -------------
 * Author: Jose Rodriguez (a.k.a. Boriel)
 * Based on Copyright: (c) 2005 Roberto Rossi (http://rsoftware.altervista.org) Freebasic template
 * Release Version: 1.0.8.11
 * Date Started: 2010/06/19
 *
 * ZXBasic language file for GeSHi.
 *
 * More details at http://www.zxbasic.net/
 *
 * CHANGES
 * -------
 * 2010/06/19 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2007/02/06)
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
    'LANG_NAME' => 'ZXBasic',
    'COMMENT_SINGLE' => array(
        1 => "'",
        2 => '#',
        3 => 'REM'
        ),
    'COMMENT_MULTI' => array("/'" => "'/"),
    'CASE_KEYWORDS' => GESHI_CAPS_UPPER, //GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            "ASM", "BEEP", "BOLD", "BORDER", "BRIGHT", "ByRef", "ByVal", "CAST",
            "CIRCLE", "CLS", "CONST", "CONTINUE", "DECLARE", "DIM", "DO",
            "DRAW", "ELSE", "ELSEIF", "END", "EXIT", "FastCall", "FLASH", "FOR",
            "FUNCTION", "GOTO", "GOSUB", "GO", "IF", "INK", "INVERSE", "ITALIC",
            "LET", "LOAD", "LOOP", "NEXT", "OVER", "PAPER", "PAUSE", "PI",
            "PLOT", "POKE", "PRINT", "RANDOMIZE", "REM", "RETURN", "SAVE",
            "StdCall", "Sub", "THEN", "TO", "UNTIL", "VERIFY", "WEND", "WHILE",
            ),

        // types
        2 => array(
            'byte', 'ubyte', 'integer', 'uinteger', 'long', 'ulong', 'fixed',
            'float', 'string'
            ),

        // Functions
        3 => array(
            "ABS", "ACS", "ASN", "ATN", "CHR", "CODE", "COS", "CSRLIN", "EXP",
            "HEX", "HEX16", "INKEY", "INT", "LEN", "LN", "PEEK", "POS", "RND",
            "SCREEN$", "SGN", "SIN", "SQR", "STR", "TAN", "VAL",
            ),

        // Operators and modifiers
        4 => array(
            "AT", "AS", "AND", "MOD", "NOT", "OR", "SHL", "SHR", "STEP", "XOR"
            )
        ),
    'SYMBOLS' => array(
        '(', ')'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000080; font-weight: bold;', // Commands
            2 => 'color: #800080; font-weight: bold;', // Types
            3 => 'color: #006000; font-weight: bold;', // Functions
            4 => 'color: #801010; font-weight: bold;'  // Operators and Modifiers
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #339933;',
            3 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'BRACKETS' => array(
            //0 => 'color: #66cc66;'
            0 => 'color: #007676;'
            ),
        'STRINGS' => array(
            //0 => 'color: #ff0000;'
            0 => 'color: #A00000; font-style: italic;'
            ),
        'NUMBERS' => array(
            //0 => 'color: #cc66cc;'
            0 => 'color: #b05103;'// font-weight: bold;'
            ),
        'METHODS' => array(
            0 => 'color: #66cc66;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
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
        1 => '.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>