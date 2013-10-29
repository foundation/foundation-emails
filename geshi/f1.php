<?php
/*************************************************************************************
 * f1.php
 * -------
 * Author: Juro Bystricky (juro@f1compiler.com)
 * Copyright: K2 Software Corp.
 * Release Version: 1.0.8.11
 * Date Started: 2010/07/06
 *
 * Formula One language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2010/07/06 (1.0.8.9)
 *  -  First Release
 *
 * TODO
 * -------------------------
 *  -  Add more RTL functions with URLs
 *
 *************************************************************************************
 *
 * This file is part of GeSHi.
 *
 * GeSHi is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * GeSHi is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with GeSHi; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array(
    'LANG_NAME' => 'Formula One',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('{' => '}'),
    'COMMENT_REGEXP' => array(
        //Nested Comments
        2 =>  "/(\{(?:\{.*\}|[^\{])*\})/m"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'",'"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[\\\\nrt\'\"?\n]#i",
        //Hexadecimal Char Specs (Utf16 codes, Unicode versions only)
        2 => "#\\\\u[\da-fA-F]{4}#",
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE |
        GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX_0O |
        GESHI_NUMBER_HEX_PREFIX |
        GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            'pred','proc','subr','else','elsif','iff','if','then','false','true',
            'case','of','use','local','mod','end','list','file','all','one','max','min','rel',
            'external','Nil','_stdcall','_cdecl','_addressof','_pred','_file','_line'
            ),
        2 => array(
            'Ascii','Bin','I','L','P','R','S','U'
            ),
        3 => array(
            'Append','in','Dupl','Len','Print','_AllDifferent','_AllAscending',
            '_AllDescending','_Ascending','_Descending'
            )
        ),
    'SYMBOLS' => array(
        0 => array('(', ')', '[', ']'),
        1 => array('<', '>','='),
        2 => array('+', '-', '*', '/'),
        3 => array('&', '|'),
        4 => array(':', ';')
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff;',
            2 => 'color: #000080;',
            3 => 'color: #000080;',
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'COMMENTS' => array(
            1 => 'color: #008000; font-style: italic;',
            2 => 'color: #008000; font-style: italic;',
            'MULTI' => 'color: #008000; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #009999; font-weight: bold;',
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #800000;'
            ),
        'METHODS' => array(
            1 => 'color: #202020;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000;',
            1 => 'color: #000000;',
            2 => 'color: #000000;',
            3 => 'color: #000000;',
            4 => 'color: #000000;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => 'http://www.f1compiler.com/f1helponline/f1_runtime_library.html#{FNAME}'
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
        ),
    'TAB_WIDTH' => 4
);

?>