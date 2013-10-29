<?php
/*************************************************************************************
 * freeswitch.php
 * --------
 * Author: James Rose (james.gs@stubbornroses.com)
 * Copyright: (c) 2006 Christian Lescuyer http://xtian.goelette.info
 * Release Version: 1.0.8.11n/a
 * Date Started: 2011/11/18
 *
 * FreeSWITCH language file for GeSHi.
 *
 * This file is based on robots.php
 *
 * 2011/11/18 (1.0.0)
 *   -  First Release
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
    'LANG_NAME' => 'FreeSWITCH',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(1 => "/^Comment:.*?$/m"),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
//        1 => array(
//            'Disallow', 'Request-rate', 'Robot-version',
//            'Sitemap', 'User-agent', 'Visit-time'
//            )
        ),
    'SYMBOLS' => array(
//        ':'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false
        ),

//order is important. regexes will overwrite most things....
    'STYLES' => array(
        'KEYWORDS' => array(
//            1 => 'color: #FF0000; font-weight: bold;',//red
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
//            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
//            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
//            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
//            0 => 'color: #66cc66;'
            ),
        'REGEXPS' => array(
            0 => 'color: firebrick; font-weight: bold;',
            1 => 'color: cornflowerblue; font-weight: bold;',
            2 => 'color: goldenrod; font-weight: bold;',
            3 => 'color: green; font-weight: bold;',
            4 => 'color: dimgrey; font-style: italic;',
            5 => 'color: green; font-weight: bold;',
            6 => 'color: firebrick; font-weight: bold;',
            7 => 'color: indigo; font-weight: italic;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
//        1 => 'http://www.robotstxt.org/wc/norobots.html'
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        0 => array(
            GESHI_SEARCH => '(^.*ERROR.*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'im',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        1 => array(
            GESHI_SEARCH => '(^.*NOTICE.*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'im',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        2 => array(
            GESHI_SEARCH => '(^.*DEBUG.*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        3 => array(
            GESHI_SEARCH => '(^.*INFO.*|.*info\(.*|^Channel.*|^Caller.*|^variable.*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        4 => array(
            GESHI_SEARCH => '(^Dialplan.*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'im',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        5 => array(
            GESHI_SEARCH => '(Regex\ \(PASS\))',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        6 => array(
            GESHI_SEARCH => '(Regex\ \(FAIL\))',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        7 => array(
            GESHI_SEARCH => '(\d{7,15})',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            )
        ),

    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
