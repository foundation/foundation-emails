<?php
/*************************************************************************************
 * div.php
 * ---------------------------------
 * Author: Gabriel Lorenzo (ermakina@gmail.com)
 * Copyright: (c) 2005 Gabriel Lorenzo (http://ermakina.gazpachito.net)
 * Release Version: 1.0.8.11
 * Date Started: 2005/06/19
 *
 * DIV language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/06/22 (1.0.0)
 *  -  First Release, includes "2nd gen" ELSEIF statement
 *
 * TODO (updated 2005/06/22)
 * -------------------------
 *  -  I'm pretty satisfied with this, so nothing for now... :P
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
    'LANG_NAME' => 'DIV',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_UPPER,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'while','until','to','switch','step','return','repeat','loop','if','from','frame','for','end','elseif',
            'else','default','debug','continue','clone','case','break','begin'
            ),
        2 => array(
            'xor','whoami','type','sizeof','pointer','or','offset','not','neg','mod','id','dup','and','_ne','_lt',
            '_le','_gt','_ge','_eq'
            ),
        3 => array(
            'setup_program','program','process','private','local','import','global','function','const',
            'compiler_options'
            ),
        4 => array(
            'word','struct','string','int','byte'
            ),
        ),
    'SYMBOLS' => array(
        '(',')','[',']','=','+','-','*','/','!','%','^','&',':',';',',','<','>'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0040b1;',
            2 => 'color: #000000;',
            3 => 'color: #000066; font-weight: bold;',
            4 => 'color: #993333;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => 'color: #44aa44;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            0 => 'color: #202020;',
            ),
        'SYMBOLS' => array(
            0 => 'color: #44aa44;'
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
    'OBJECT_SPLITTERS' => array(),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
