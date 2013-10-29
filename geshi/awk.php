<?php
/************************************************
 * awk.php
 * -------
 * Author: George Pollard (porges@porg.es)
 * Copyright: (c) 2009 George Pollard
 * Release Version: 1.0.8.11
 * Date Started: 2009/01/28
 *
 * Awk language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/01/28 (1.0.8.5)
 *   -  First Release
 *
 * TODO (updated 2009/01/28)
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
    'LANG_NAME' => 'awk',
    'COMMENT_SINGLE' => array(
        1 => '#'
        ),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array (
        1 => array(
            'for', 'in', 'if', 'else', 'while', 'do', 'continue', 'break'
            ),
        2 => array(
            'BEGIN', 'END'
            ),
        3 => array(
            'ARGC', 'ARGV', 'CONVFMT', 'ENVIRON',
            'FILENAME', 'FNR', 'FS', 'NF', 'NR', 'OFMT',
            'OFS','ORS','RLENGTH','RS','RSTART','SUBSEP'
            ),
        4 => array(
            'gsub','index','length','match','split',
            'sprintf','sub','substr','tolower','toupper',
            'atan2','cos','exp','int','log','rand',
            'sin','sqrt','srand'
            ),
        5 => array(
            'print','printf','getline','close','fflush','system'
            ),
        6 => array(
            'function', 'return'
            )
        ),
    'SYMBOLS' => array (
        0 => array(
            '(',')','[',']','{','}'
            ),
        1 => array(
            '!','||','&&'
            ),
        2 => array(
            '<','>','<=','>=','==','!='
            ),
        3 => array(
            '+','-','*','/','%','^','++','--'
            ),
        4 => array(
            '~','!~'
            ),
        5 => array(
            '?',':'
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000000; font-weight: bold;',
            2 => 'color: #C20CB9; font-weight: bold;',
            3 => 'color: #4107D5; font-weight: bold;',
            4 => 'color: #07D589; font-weight: bold;',
            5 => 'color: #0BD507; font-weight: bold;',
            6 => 'color: #078CD5; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color:#808080;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'SYMBOLS' => array(
            0 => 'color:black;',
            1 => 'color:black;',
            2 => 'color:black;',
            3 => 'color:black;',
            4 => 'color:#C4C364;',
            5 => 'color:black;font-weight:bold;'),
        'SCRIPT' => array(),
        'REGEXPS' => array(
            0 => 'color:#000088;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #000000;'
            ),
        'BRACKETS' => array(
            0 => 'color: #7a0874; font-weight: bold;'
            ),
        'METHODS' => array()
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array (),
    'REGEXPS' => array(
        0 => "\\$[a-zA-Z0-9_]+"
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array (),
    'HIGHLIGHT_STRICT_BLOCK' => array()
);

?>
