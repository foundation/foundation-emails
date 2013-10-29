<?php
/*************************************************************************************
 * cuesheet.php
 * ----------
 * Author: Benny Baumann (benbe@geshi.org)
 * Copyright: (c) 2009 Benny Baumann (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2009/12/21
 *
 * Cuesheet language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/12/21 (1.0.8.6)
 *   -  First Release
 *
 * TODO (updated 2009/12/21)
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
    'LANG_NAME' => 'Cuesheet',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        //Single-Line Comments using REM command
        1 => "/(?<=\bREM\b).*?$/im",
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_UPPER,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'CATALOG','CDTEXTFILE','FILE','FLAGS','INDEX','ISRC','PERFORMER',
            'POSTGAP','PREGAP','REM','SONGWRITER','TITLE','TRACK'
            ),
        2 => array(
            'AIFF', 'BINARY', 'MOTOROLA', 'MP3', 'WAVE'
            ),
        3 => array(
            '4CH', 'DCP', 'PRE', 'SCMS'
            ),
        4 => array(
            'AUDIO', 'CDG', 'MODE1/2048', 'MODE1/2336', 'MODE2/2336',
            'MODE2/2352', 'CDI/2336', 'CDI/2352'
            )
        ),
    'SYMBOLS' => array(
        ':'
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
            1 => 'color: #000000; font-weight: bold;',
            2 => 'color: #000066; font-weight: bold;',
            3 => 'color: #000066; font-weight: bold;',
            4 => 'color: #000066; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080;',
            ),
        'BRACKETS' => array(
            0 => 'color: #0000ff;'
            ),
        'STRINGS' => array(
            0 => 'color: #0000ff;'
            ),
        'NUMBERS' => array(
            0 => 'color: #006600;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000066;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            1 => 'color: #000099;',
            2 => 'color: #009900;',
            )
        ),
    'URLS' => array(
        1 => 'http://digitalx.org/cuesheetsyntax.php#{FNAMEL}',
        2 => '',
        3 => '',
        4 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        2 => '\b[A-Za-z0-9]{5}\d{7}\b',
        1 => '(?<=[\s:]|^)\d+(?=[\s:]|$)',
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 2,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => '(?<![\w\.])',
            'DISALLOWED_AFTER' => '(?![\w\.])',
            )
        )
);

?>