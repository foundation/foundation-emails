<?php
/*************************************************************************************
 * bnf.php
 * --------
 * Author: Rowan Rodrik van der Molen (rowan@bigsmoke.us)
 * Copyright: (c) 2006 Rowan Rodrik van der Molen (http://www.bigsmoke.us/)
 * Release Version: 1.0.8.11
 * Date Started: 2006/09/28
 *
 * BNF (Backus-Naur form) language file for GeSHi.
 *
 * See http://en.wikipedia.org/wiki/Backus-Naur_form for more info on BNF.
 *
 * CHANGES
 * -------
 * 2008/05/23 (1.0.7.22)
 *  -  Added description of extra language features (SF#1970248)
 *  -  Removed superflicious regexps
 * 2006/09/18 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2006/09/18)
 * -------------------------
 * * Nothing I can think of
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
    'LANG_NAME' => 'bnf',
    'COMMENT_SINGLE' => array(';'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"', "'"),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(),
    'SYMBOLS' => array(
        0 => array('(', ')'),
        1 => array('<', '>'),
        2 => array('[', ']'),
        3 => array('{', '}'),
        4 => array('=', '*', '/', '|', ':'),
    ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false
    ),
    'STYLES' => array(
        'KEYWORDS' => array(),
        'COMMENTS' => array(
            0 => 'color: #666666; font-style: italic;', // Single Line comments
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => ''
            ),
        'STRINGS' => array(
            0 => 'color: #a00;',
            1 => 'color: #a00;'
            ),
        'NUMBERS' => array(
            0 => ''
            ),
        'METHODS' => array(
            0 => ''
            ),
        'SYMBOLS' => array(
            0 => 'color: #000066; font-weight: bold;', // Round brackets
            1 => 'color: #000066; font-weight: bold;', // Angel Brackets
            2 => 'color: #000066; font-weight: bold;', // Square Brackets
            3 => 'color: #000066; font-weight: bold;', // BRaces
            4 => 'color: #006600; font-weight: bold;', // Other operator symbols
        ),
        'REGEXPS' => array(
            0 => 'color: #007;',
            ),
        'SCRIPT' => array(
            0 => ''
            )
        ),
    'URLS' => array(),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'REGEXPS' => array(
        //terminal symbols
        0 => array(
            GESHI_SEARCH => '(&lt;)([^&]+?)(&gt;)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            ),
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>