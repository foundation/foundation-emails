<?php
/*************************************************************************************
 * objeck.php
 * --------
 * Author: Randy Hollines (objeck@gmail.com)
 * Copyright: (c) 2010 Randy Hollines (http://code.google.com/p/objeck-lang/)
 * Release Version: 1.0.8.11
 * Date Started: 2010/07/01
 *
 * Objeck Programming Language language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2010/07/26 (1.0.8.10)
 *  -  Added new and missing keywords and symbols: 'String', 'each', '+=', '-=', '*=' and '/='.
 * 2010/07/01 (1.0.8.9)
 *  -  First Release
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

$language_data = array(
    'LANG_NAME' => 'Objeck Programming Language',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array('#~' => '~#'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'virtual', 'if', 'else', 'do', 'while', 'use', 'bundle', 'native',
            'static', 'public', 'private', 'class', 'function', 'method',
            'select', 'other', 'enum', 'for', 'each', 'label', 'return', 'from'
            ),
        2 => array(
            'Byte', 'Int', 'Nil', 'Float', 'Char', 'Bool', 'String'
            ),
        3 => array(
            'true', 'false'
            )
        ),
    'SYMBOLS' => array(
        1 => array(
            '(', ')', '{', '}', '[', ']', '+', '-', '*', '/', '%', '=', '<', '>', '&', '|', ':', ';', ',', '+=', '-=', '*=', '/=',
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #b1b100;',
            3 => 'color: #b1b100;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #0000ff;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;',
            ),
        'METHODS' => array(
            0 => 'color: #004000;'
            ),
        'SYMBOLS' => array(
            1 => 'color: #339933;'
            ),
        'REGEXPS' => array(),
        'SCRIPT' => array()
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '-&gt;'
        ),
    'REGEXPS' => array(),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array()
);

?>