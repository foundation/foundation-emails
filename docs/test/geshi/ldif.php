<?php
/*************************************************************************************
 * ldif.php
 * --------
 * Author: Bruno Harbulot (Bruno.Harbulot@manchester.ac.uk)
 * Copyright: (c) 2005 deguix, (c) 2010 Bruno Harbulot
 * Release Version: 1.0.8.11
 * Date Started: 2010/03/01
 *
 * LDIF language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2010/03/01 (1.0.8.11)
 *   -  First Release
 *   -  Derived from ini.php (INI language), (c) 2005 deguix
 *
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
    'LANG_NAME' => 'LDIF',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        ),
    'SYMBOLS' => array(
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => ''
            ),
        'STRINGS' => array(
            0 => 'color: #933;'
            ),
        'NUMBERS' => array(
            0 => ''
            ),
        'METHODS' => array(
            0 => ''
            ),
        'SYMBOLS' => array(
            ),
        'REGEXPS' => array(
            0 => 'color: #000066; font-weight: bold;',
            1 => 'color: #FF0000;'
            ),
        'SCRIPT' => array(
            0 => ''
            )
        ),
    'URLS' => array(
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        0 => array(
            GESHI_SEARCH => '([a-zA-Z0-9_]+):(.+)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => ':\\2'
            ),
        1 => array(
            // Evil hackery to get around GeSHi bug: <>" and ; are added so <span>s can be matched
            // Explicit match on variable names because if a comment is before the first < of the span
            // gets chewed up...
            GESHI_SEARCH => '([<>";a-zA-Z0-9_]+):(.+)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1:',
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