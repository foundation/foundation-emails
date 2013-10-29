<?php
/*************************************************************************************
 * oberon2.php
 * ----------
 * Author: mbishop (mbishop@esoteriq.org)
 * Copyright: (c) 2009 mbishop (mbishop@esoteriq.org)
 * Release Version: 1.0.8.11
 * Date Started: 2009/02/10
 *
 * Oberon-2 language file for GeSHi.
 *
 * CHANGES
 * -------
 *
 * TODO
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
    'LANG_NAME' => 'Oberon-2',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array('(*' => '*)'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'HARDQUOTE' => array("'", "'"),
    'HARDESCAPE' => array("''"),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'ARRAY', 'BEGIN', 'BY', 'CASE',
            'CONST', 'DIV', 'DO', 'ELSE', 'ELSIF', 'END',
            'EXIT', 'FOR', 'IF', 'IMPORT', 'IN', 'IS',
            'LOOP', 'MOD', 'MODULE', 'OF',
            'OR', 'POINTER', 'PROCEDURE', 'RECORD',
            'REPEAT', 'RETURN', 'THEN', 'TO',
            'TYPE', 'UNTIL', 'VAR', 'WHILE', 'WITH'
            ),
        2 => array(
            'NIL', 'FALSE', 'TRUE',
            ),
        3 => array(
            'ABS', 'ASH', 'ASSERT', 'CAP', 'CHR', 'COPY', 'DEC',
            'ENTIER', 'EXCL', 'HALT', 'INC', 'INCL', 'LEN',
            'LONG', 'MAX', 'MIN', 'NEW', 'ODD', 'ORD', 'SHORT', 'SIZE'
            ),
        4 => array(
            'BOOLEAN', 'CHAR', 'SHORTINT', 'LONGINT',
            'INTEGER', 'LONGREAL', 'REAL', 'SET', 'PTR'
            ),
        ),
    'SYMBOLS' => array(
        ',', ':', '=', '+', '-', '*', '/', '#', '~'
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
            1 => 'color: #000000; font-weight: bold;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;',
            4 => 'color: #000066; font-weight: bold;'
            ),
        'COMMENTS' => array(
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
            1 => 'color: #0066ee;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
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