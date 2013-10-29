<?php
/*************************************************************************************
 * intercal.php
 * ----------
 * Author: Benny Baumann (BenBE@geshi.org)
 * Copyright: (c) 2008 Benny Baumann (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2009/10/31
 *
 * INTERCAL language file for GeSHi.
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
    'LANG_NAME' => 'INTERCAL',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_UPPER,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        //Politeness
        1 => array(
            'DO', 'DOES', 'DONT', 'DON\'T', 'NOT', 'PLEASE', 'PLEASENT', 'PLEASEN\'T', 'MAYBE'
            ),
        //Statements
        2 => array(
            'STASH', 'RETRIEVE', 'NEXT', 'RESUME', 'FORGET', 'ABSTAIN', 'ABSTAINING',
            'COME', 'FROM', 'CALCULATING', 'REINSTATE', 'IGNORE', 'REMEMBER',
            'WRITE', 'IN', 'READ', 'OUT', 'GIVE', 'UP'
            )
        ),
    'SYMBOLS' => array(
        '.', ',', ':', ';', '#',
        '~', '$', '&', '?',
        '\'', '"', '<-'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000080; font-weight: bold;',
            2 => 'color: #000080; font-weight: bold;'
            ),
        'COMMENTS' => array(
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
            1 => 'color: #808080; font-style: italic;'
            )
        ),
    'URLS' => array(
        1 => '',
        2 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        1 => '^\(\d+\)'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'ENABLE_FLAGS' => array(
            'COMMENTS' => GESHI_NEVER,
            'STRINGS' => GESHI_NEVER,
            'NUMBERS' => GESHI_NEVER
            )
        )
);

?>