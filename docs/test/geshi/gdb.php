<?php
/*************************************************************************************
 * gdb.php
 * --------
 * Author: Milian Wolff (mail@milianw.de)
 * Copyright: (c) 2009 Milian Wolff
 * Release Version: 1.0.8.11
 * Date Started: 2009/06/24
 *
 * GDB language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/06/24 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2009/06/24)
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
    'LANG_NAME' => 'GDB',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        0 => array(
            'Application',
            'signal',
            ),
        1 => array(
            'Segmentation fault',
            '[KCrash Handler]',
            ),
        ),
    'NUMBERS' => false,
    'SYMBOLS' => array(
        ),
    'CASE_SENSITIVE' => array(
        0 => true,
        1 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            0 => 'font-weight:bold;',
            1 => 'font-weight:bold; color: #ff0000;'
            ),
        'COMMENTS' => array(
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => 'font-weight:bold;'
            ),
        'STRINGS' => array(
            0 => 'color: #933;'
            ),
        'NUMBERS' => array(
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            ),
        'REGEXPS' => array(
            0 => 'color: #000066; font-weight:bold;',
            1 => 'color: #006600;',
            2 => 'color: #B07E00;',
            3 => 'color: #0057AE; text-style:italic;',
            4 => 'color: #0057AE; text-style:italic;',
            5 => 'color: #442886;',
            6 => 'color: #442886; font-weight:bold;',
            7 => 'color: #FF0000; font-weight:bold;',
            8 => 'color: #006E26;',
            9 => 'color: #555;',
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        0 => '',
        1 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        //[Current Thread...], [KCrash Handler] etc.
        0 => array(
            GESHI_SEARCH => '^\[.+\]',
            GESHI_REPLACE => '\\0',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        //stack number
        1 => array(
            GESHI_SEARCH => '^#\d+',
            GESHI_REPLACE => '\\0',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        //Thread X (Thread...)
        2 => array(
            GESHI_SEARCH => '^Thread \d.+$',
            GESHI_REPLACE => '\\0',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        //Files with linenumbers
        3 => array(
            GESHI_SEARCH => '(at\s+)(.+)(:\d+\s*)$',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            ),
        //Libs without linenumbers
        4 => array(
            GESHI_SEARCH => '(from\s+)(.+)(\s*)$',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            ),
        //Line numbers
        5 => array(
            GESHI_SEARCH => '(:)(\d+)(\s*)$',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            ),
        //Location
        6 => array(
            GESHI_SEARCH => '(\s+)(in\s+)?([^ 0-9][^ ]*)([ \n]+\()',
            GESHI_REPLACE => '\\3',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1\\2',
            GESHI_AFTER => '\\4'
            ),
        // interesting parts: abort, qFatal, assertions, null ptrs, ...
        7 => array(
            GESHI_SEARCH => '\b((?:\*__GI_)?(?:__assert_fail|abort)|qFatal|0x0)\b([^\.]|$)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => '\\2'
            ),
        // Namespace / Classes
        8 => array(
            GESHI_SEARCH => '\b(\w+)(::)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'U',
            GESHI_BEFORE => '',
            GESHI_AFTER => '\\2'
            ),
        // make ptr adresses and <value optimized out> uninteresting
        9 => '\b(?:0x[a-f0-9]{2,}|value\s+optimized\s+out)\b'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'ENABLE_FLAGS' => array(
            'NUMBERS' => false
            ),
        )
);

// kate: replace-tabs on; indent-width 4;

?>
