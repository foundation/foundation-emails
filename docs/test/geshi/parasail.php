<?php
/*************************************************************************************
 * parasail.php
 * -------
 * Author: T. Taft (taft@adacore.com)
 * Copyright: (c) 2012 AdaCore (http://adacore.com/)
 * Release Version: 1.0.8.11
 * Date Started: 2012/08/02
 *
 * ParaSail language file for GeSHi.
 *
 * Words are from SciTe configuration file
 *
 * CHANGES
 * -------
 * 2012/08/02 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2012/08/02)
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
    'LANG_NAME' => 'ParaSail',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('{' => '}'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'all', 'block', 'case', 'continue', 'each',
            'else', 'elsif', 'exit', 'for',
            'forward', 'if', 'loop', 'return', 'reverse', 'some',
            'then', 'until', 'while', 'with'
            ),
        2 => array(
            'abs', 'and','in', 'mod', 'not', 'null', 'or', 'rem', 'xor'
            ),
        3 => array(
            'abstract', 'class',
            'concurrent', 'const', 
            'end', 'extends', 'exports', 
            'func', 'global', 'implements', 'import',
            'interface', 'is', 'lambda', 'locked', 
            'new', 'of', 'op', 'optional',
            'private', 'queued', 'ref',
            'separate', 'type', 'var',
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '<', '>'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #00007f;',
            2 => 'color: #0000ff;',
            3 => 'color: #46aa03; font-weight:bold;',
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'COMMENTS' => array(
            1 => 'color: #adadad; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #7f007f;'
            ),
        'NUMBERS' => array(
            0 => 'color: #ff0000;'
            ),
        'METHODS' => array(
            1 => 'color: #202020;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>