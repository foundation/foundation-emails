<?php
/*************************************************************************************
 * lolcode.php
 * ----------
 * Author: Benny Baumann (BenBE@geshi.org)
 * Copyright: (c) 2008 Benny Baumann (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2009/10/31
 *
 * LOLcode language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/10/31 (1.0.8.1)
 *   -  First Release
 *
 * TODO
 * ----
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
    'LANG_NAME' => 'LOLcode',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        1 => "/\bBTW\b.*$/im",
        2 => "/(^|\b)(?:OBTW\b.+?\bTLDR|LOL\b.+?\/LOL)(\b|$)/si"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_UPPER,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        1 => '/:[)>o":]/',
        2 => '/:\([\da-f]+\)/i',
        3 => '/:\{\w+\}/i',
        4 => '/:\[\w+\]/i',
        ),
    'KEYWORDS' => array(
        //Statements
        1 => array(
            'VISIBLE', 'HAI', 'KTHX', 'KTHXBYE', 'SMOOSH', 'GIMMEH', 'PLZ',
            'ON', 'INVISIBLE', 'R', 'ITZ', 'GTFO', 'COMPLAIN', 'GIMME',

            'OPEN', 'FILE', 'I HAS A', 'AWSUM THX', 'O NOES', 'CAN', 'HAS', 'HAZ',
            'HOW DOES I', 'IF U SAY SO', 'FOUND YR', 'BORROW', 'OWN', 'ALONG',
            'WITH', 'WIT', 'LOOK', 'AT', 'AWSUM', 'THX'
            ),
        //Conditionals
        2 => array(
            'IZ', 'YARLY', 'NOWAI', 'WTF?', 'MEBBE', 'OMG', 'OMGWTF',
            'ORLY?', 'OF', 'NOPE', 'SO', 'IM', 'MAI',

            'O RLY?', 'SUM', 'BOTH SAEM', 'DIFFRINT', 'BOTH', 'EITHER', 'WON',
            'DIFF', 'PRODUKT', 'QUOSHUNT', 'MOD', 'MKAY', 'OK', 'THING',
            'BIGNESS'
            ),
        //Repetition
        3 => array(
            'IN', 'OUTTA', 'LOOP', 'WHILE'
            ),
        //Operators \Math
        4 => array(
            'AN', 'AND', 'NOT', 'UP', 'YR', 'UPPIN', 'NERF', 'NERFIN', 'NERFZ',
            'SMASHING', 'UR', 'KINDA', 'LIKE', 'SAEM', 'BIG', 'SMALL',
            'BIGGR', 'SMALLR', 'BIGGER', 'SMALLER', 'GOOD', 'CUTE', 'THAN'
            )
        ),
    'SYMBOLS' => array(
        '.', ',', '?',
        '!!'
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
            1 => 'color: #008000;',
            2 => 'color: #000080;',
            3 => 'color: #000080;',
            4 => 'color: #800000;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; style: italic;',
            2 => 'color: #666666; style: italic;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'ESCAPE_CHAR' => array(
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
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'SPACE_AS_WHITESPACE' => true
            )
        ),
    'TAB_WIDTH' => 4
);

?>