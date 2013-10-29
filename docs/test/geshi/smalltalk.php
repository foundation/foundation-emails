<?php
/*************************************************************************************
 * smalltalk.php
 * --------
 * Author: Bananeweizen (Bananeweizen@gmx.de)
 * Copyright: (c) 2005 Bananeweizen (www.bananeweizen.de)
 * Release Version: 1.0.8.11
 * Date Started: 2005/03/27
 *
 * Smalltalk language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2006-05-24 (1.0.0)
 *   -  First Release
 *
 * TODO
 * -------------------------
 * * recognize nested array symbols correctly
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
    'LANG_NAME' => 'Smalltalk',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array('"' => '"'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'"),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'self','super','true','false','nil'
            )
        ),
    'SYMBOLS' => array(
        '[', ']', '=' , ':=', '(', ')', '#'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #7f007f;'
            ),
        'COMMENTS' => array(
            'MULTI' => 'color: #007f00; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => ''
            ),
        'STRINGS' => array(
            0 => 'color: #7f0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #7f0000;'
            ),
        'METHODS' => array(
            0 => ''
            ),
        'SYMBOLS' => array(
            0 => 'color: #000066; font-weight:bold;'
            ),
        'REGEXPS' => array(
            0 => 'color: #0000ff;',
            1 => 'color: #7f0000;',
            2 => 'color: #7f0000;',
            3 => 'color: #00007f;',
            5 => 'color: #00007f;',
            6 => 'color: #00007f;'
            ),
        'SCRIPT' => array(
            0 => ''
            )
        ),
    'URLS' => array(
        1 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        0 => array(
            GESHI_SEARCH => '([^a-zA-Z0-9_#<])([A-Z]+[a-zA-Z0-9_]*)(?!>)', //class names
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        1 => array(
            GESHI_SEARCH => '(#+)([a-zA-Z0-9_]+)', //symbols
            GESHI_REPLACE => '\\1\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        2 => array(
            GESHI_SEARCH => '(#\s*\([^)]*\))', //array symbols
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        3 => array(
            GESHI_SEARCH => '<PIPE>([a-zA-Z0-9_\s]+)<PIPE>', //temporary variables
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '|',
            GESHI_AFTER => '|'
            ),
        5 => array(
            GESHI_SEARCH => '([:(,=[.*\/+-]\s*(?!\d+\/))([a-zA-Z0-9_]+)', //message parameters, message receivers
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 's',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        6 => array(
            GESHI_SEARCH => '([a-zA-Z0-9_]+)(\s*:=)', //assignment targets
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => '\\2'
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>