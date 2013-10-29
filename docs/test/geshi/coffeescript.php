<?php
/*************************************************************************************
 * coffeescript.php
 * ----------
 * Author: Trevor Burnham (trevorburnham@gmail.com)
 * Copyright: (c) 2010 Trevor Burnham (http://iterative.ly)
 * Release Version: 1.0.8.11
 * Date Started: 2010/06/08
 *
 * CoffeeScript language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2010/06/08 (1.0.8.9)
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

$language_data = array (
    'LANG_NAME' => 'CoffeeScript',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array('###' => '###'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    //Longest quotemarks ALWAYS first
    'QUOTEMARKS' => array('"""', "'''", '"', "'"),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(

        /*
        ** Set 1: control keywords
        */
        1 => array(
            'break', 'by', 'catch', 'continue', 'else', 'finally', 'for', 'in', 'of', 'if',
            'return', 'switch', 'then', 'throw', 'try', 'unless', 'when', 'while', 'until'
            ),

        /*
        ** Set 2: logic keywords
        */
        2 => array(
            'and', 'or', 'is', 'isnt', 'not'
            ),

        /*
        ** Set 3: other keywords
        */
        3 => array(
            'instanceof', 'new', 'delete', 'typeof',
            'class', 'super', 'this', 'extends'
            ),

        /*
        ** Set 4: constants
        */
        4 => array(
            'true', 'false', 'on', 'off', 'yes', 'no',
            'Infinity', 'NaN', 'undefined', 'null'
            )
        ),
    'SYMBOLS' => array(
            '(', ')', '[', ']', '{', '}', '*', '&', '|', '%', '!', ',', ';', '<', '>', '?', '`',
            '+', '-', '*', '/', '->', '=>', '<<', '>>', '@', ':', '^'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #ff7700;font-weight:bold;',
            2 => 'color: #008000;',
            3 => 'color: #dc143c;',
            4 => 'color: #0000cd;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: black;'
            ),
        'STRINGS' => array(
            0 => 'color: #483d8b;'
            ),
        'NUMBERS' => array(
            0 => 'color: #ff4500;'
            ),
        'METHODS' => array(
            1 => 'color: black;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
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
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        0 => array(
            '<script type="text/coffeescript">' => '</script>'
            )
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true
        )
);

?>