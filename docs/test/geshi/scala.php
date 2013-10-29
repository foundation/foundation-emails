<?php
/*************************************************************************************
 * scala.php
 * ----------
 * Author: Franco Lombardo (franco@francolombardo.net)
 * Copyright: (c) 2008 Franco Lombardo, Benny Baumann
 * Release Version: 1.0.8.11
 * Date Started: 2008/02/08
 *
 * Scala language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/02/08 (1.0.7.22)
 *   -  First Release
 *
 * TODO (updated 2007/04/27)
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
    'LANG_NAME' => 'Scala',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(2 => "/\\'(?!\w\\'|\\\\)\w+(?=\s)/"),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'",'"'),
    'ESCAPE_CHAR' => '\\',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[nfrtv\$\"\n\\\\]#i",
        //Hexadecimal Char Specs
        2 => "#\\\\x[\da-fA-F]{1,2}#i",
        //Hexadecimal Char Specs (unicode)
        3 => "#\\\\u[\da-fA-F]{1,4}#",
        //Hexadecimal Char Specs (Extended Unicode)
        4 => "#\\\\U[\da-fA-F]{1,8}#",
        ),
    'KEYWORDS' => array(
        1 => array(
            'abstract', 'case', 'catch', 'class', 'def',
            'do', 'else', 'extends', 'false', 'final',
            'finally', 'for', 'forSome', 'if', 'implicit',
            'import', 'match', 'new', 'null', 'object',
            'override', 'package', 'private', 'protected', 'requires',
            'return', 'sealed', 'super', 'this', 'throw',
            'trait', 'try', 'true', 'type', 'val',
            'var', 'while', 'with', 'yield'
            ),
        2 => array(
            'void', 'double', 'int', 'boolean', 'byte', 'short', 'long', 'char', 'float'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '*', '&', '%', '!', ';', '<', '>', '?',
        '_', ':', '=', '=>', '<<:',
        '<%', '>:', '#', '@'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff; font-weight: bold;',
            2 => 'color: #9999cc; font-weight: bold;',
            ),
        'COMMENTS' => array(
            1 => 'color: #008000; font-style: italic;',
            2 => 'color: #CC66FF;',
            'MULTI' => 'color: #00ff00; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #6666ff; font-weight: bold;',
            1 => 'color: #6666ff; font-weight: bold;',
            2 => 'color: #5555ff; font-weight: bold;',
            3 => 'color: #4444ff; font-weight: bold;',
            4 => 'color: #3333ff; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #F78811;'
            ),
        'STRINGS' => array(
            0 => 'color: #6666FF;'
            ),
        'NUMBERS' => array(
            0 => 'color: #F78811;'
            ),
        'METHODS' => array(
            1 => 'color: #000000;',
            2 => 'color: #000000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #000080;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => 'http://scala-lang.org',
        2 => ''
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