<?php
/****************************************************************************
 * modula2.php
 * -----------
 * Author: Benjamin Kowarsch (benjamin@modula2.net)
 * Copyright: (c) 2009 Benjamin Kowarsch (benjamin@modula2.net)
 * Release Version: 1.0.8.11
 * Date Started: 2009/11/05
 *
 * Modula-2 language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2010/05/22 (1.0.8.8)
 *   -  First Release
 *
 * TODO (updated 2010/05/22)
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
    'LANG_NAME' => 'Modula-2',
    'COMMENT_MULTI' => array('(*' => '*)'),
    'COMMENT_SINGLE' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'HARDQUOTE' => array("'", "'"),
    'HARDESCAPE' => array("''"),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array( /* reserved words */
            'AND', 'ARRAY', 'BEGIN', 'BY', 'CASE', 'CONST', 'DEFINITION',
            'DIV', 'DO', 'ELSE', 'ELSIF', 'END', 'EXIT', 'EXPORT', 'FOR',
            'FROM', 'IF', 'IMPLEMENTATION', 'IMPORT', 'IN', 'LOOP', 'MOD',
            'MODULE', 'NOT', 'OF', 'OR', 'POINTER', 'PROCEDURE', 'QUALIFIED',
            'RECORD', 'REPEAT', 'RETURN', 'SET', 'THEN', 'TO', 'TYPE',
            'UNTIL', 'VAR', 'WHILE', 'WITH'
            ),
        2 => array( /* pervasive constants */
            'NIL', 'FALSE', 'TRUE',
            ),
        3 => array( /* pervasive types */
            'BITSET', 'CAP', 'CHR', 'DEC', 'DISPOSE', 'EXCL', 'FLOAT',
            'HALT', 'HIGH', 'INC', 'INCL', 'MAX', 'MIN', 'NEW', 'ODD', 'ORD',
            'SIZE', 'TRUNC', 'VAL'
            ),
        4 => array( /* pervasive functions and macros */
            'ABS', 'BOOLEAN', 'CARDINAL', 'CHAR', 'INTEGER',
            'LONGCARD', 'LONGINT', 'LONGREAL', 'PROC', 'REAL'
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
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        1 => ''
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