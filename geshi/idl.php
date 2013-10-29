<?php
/*************************************************************************************
 * idl.php
 * -------
 * Author: Cedric Bosdonnat (cedricbosdo@openoffice.org)
 * Copyright: (c) 2006 Cedric Bosdonnat
 * Release Version: 1.0.8.11
 * Date Started: 2006/08/20
 *
 * Unoidl language file for GeSHi.
 *
 * 2006/08/20 (1.0.0)
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
    'LANG_NAME' => 'Uno Idl',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'published', 'get', 'set', 'service', 'singleton', 'type', 'module', 'interface', 'struct',
            'const', 'constants', 'exception', 'enum', 'raises', 'typedef'
            ),
        2 => array(
            'bound', 'maybeambiguous', 'maybedefault', 'maybevoid', 'oneway', 'optional',
            'readonly', 'in', 'out', 'inout', 'attribute', 'transient', 'removable'
            ),
        3 => array(
            'True', 'False', 'TRUE', 'FALSE'
            ),
        4 => array(
            'string', 'long', 'byte', 'hyper', 'boolean', 'any', 'char', 'double',
            'void', 'sequence', 'unsigned'
            ),
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']', '=', '+', '-', '*', '/', '!', '%', '^', '&', ':', ';', '...'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #990078; font-weight: bold',
            2 => 'color: #36dd1c;',
            3 => 'color: #990078; font-weight: bold',
            4 => 'color: #0000ec;'
            ),
        'COMMENTS' => array(
            1 => 'color: #3f7f5f;',
            2 => 'color: #808080;',
            'MULTI' => 'color: #4080ff; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #666666; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #808080;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000dd;'
            ),
        'METHODS' => array(
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
        3 => '',
        4 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        1 => '::'
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
