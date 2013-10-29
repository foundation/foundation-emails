<?php
/*************************************************************************************
 * rpmspec.php
 * ---------------------------------
 * Author: Paul Grinberg (gri6507 TA unity-linux TOD org)
 * Copyright: (c) 2010 Paul Grinberg
 * Release Version: 1.0.8.11
 * Date Started: 2010/04/27
 *
 * RPM Spec language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2010/04/27 (0.1)
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
    'LANG_NAME' => 'RPM Specification File',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array(),
    'QUOTEMARKS' => array('"','`'),
    'ESCAPE_CHAR' => '\\',
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        ),
    'KEYWORDS' => array(
        ),
    'SYMBOLS' => array(
        '<', '>', '=',
        '!', '@', '~', '&', '|', '^',
        '+','-', '*', '/', '%',
        ',', ';', '?', '.', ':'
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
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
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;',
            2 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            1 => 'color: #0000ff;',
            2 => 'color: #009999;',
            3 => 'color: #000000; font-weight: bold;',
            4 => 'color: #ff6600; font-style: italic;',
            ),
        'SCRIPT' => array(
            )
        ),
    'REGEXPS' => array(
        1 => array(
            // search for generic macros
            GESHI_SEARCH => '(%{?[a-zA-Z0-9_]+}?)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => '',
            ),
        2 => array(
            // search for special macros
            GESHI_SEARCH => '(%(?:define|patch\d*|mklibname|mkrel|configure\S+|makeinstall\S+|make_session|make|defattr|config|doc|setup))',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'i',
            GESHI_BEFORE => '',
            GESHI_AFTER => '',
            ),
        3 => array (
            // special definitions
            GESHI_SEARCH => '((?:summary|license|buildroot|buildrequires|provides|version|release|source\d*|group|buildarch|autoreqprov|provides|obsoletes|vendor|distribution|suggests|autoreq|autoprov|conflicts|name|url|requires|patch\d*):)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'i',
            GESHI_BEFORE => '',
            GESHI_AFTER => '',
            ),
        4 => array (
            // section delimiting words
            GESHI_SEARCH => '(%(?:description|package|prep|build|install|clean|postun|preun|post|pre|files|changelog))',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'i',
            GESHI_BEFORE => '',
            GESHI_AFTER => '',
            ),
        ),
    'URLS' => array(),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array(),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
);

?>