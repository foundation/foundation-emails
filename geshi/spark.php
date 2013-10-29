<?php
/*************************************************************************************
 * ada.php
 * -------
 * Author: Phil Thornley (tux@inmail.cz)
 * Copyright: (c) 2004 Phil Thornley (http://www.sparksure.com)
 * Release Version: 1.0.8.11
 * Date Started: 2010/08/22
 *
 * SPARK language file for GeSHi.
 *
 * Created by modifying Ada file version 1.0.2
 * Words are from SciTe configuration file
 *
 * CHANGES
 * -------
 * 2010/08/28 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2010/08/22)
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
    'LANG_NAME' => 'SPARK',
    'COMMENT_SINGLE' => array(1 => '--', 2 => '--#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'begin', 'declare', 'do', 'else', 'elsif', 'exception', 'for', 'if',
            'is', 'loop', 'while', 'then', 'end', 'select', 'case', 'until',
            'goto', 'return'
            ),
        2 => array(
            'abs', 'and', 'at', 'mod', 'not', 'or', 'rem', 'xor'
            ),
        3 => array(
            'abort', 'abstract', 'accept', 'access', 'aliased', 'all', 'array',
            'body', 'constant', 'delay', 'delta', 'digits', 'entry', 'exit',
            'function', 'generic', 'in', 'interface', 'limited', 'new', 'null',
            'of', 'others', 'out', 'overriding', 'package', 'pragma', 'private',
            'procedure', 'protected', 'raise', 'range', 'record', 'renames',
            'requeue', 'reverse', 'separate', 'subtype', 'synchronized',
            'tagged', 'task', 'terminate', 'type', 'use', 'when', 'with'
            )
        ),
    'SYMBOLS' => array(
        '(', ')'
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
            2 => 'color: #adadad; font-style: italic; font-weight: bold;'
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