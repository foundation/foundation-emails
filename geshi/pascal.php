<?php
/*************************************************************************************
 * pascal.php
 * ----------
 * Author: Tux (tux@inamil.cz)
 * Copyright: (c) 2004 Tux (http://tux.a4.cz/), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/07/26
 *
 * Pascal language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/05/23 (1.0.7.22)
 *   -  Added description of extra language features (SF#1970248)
 * 2004/11/27 (1.0.2)
 *  -  Added support for multiple object splitters
 * 2004/10/27 (1.0.1)
 *   -  Added support for URLs
 * 2004/08/05 (1.0.0)
 *   -  Added support for symbols
 * 2004/07/27 (0.9.1)
 *   -  Pascal is OO language. Some new words.
 * 2004/07/26 (0.9.0)
 *   -  First Release
 *
 * TODO (updated 2004/11/27)
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
    'LANG_NAME' => 'Pascal',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('(*' => '*)', '{' => '}'),
    //Compiler directives
    'COMMENT_REGEXP' => array(2 => '/\\{\\$.*?}|\\(\\*\\$.*?\\*\\)/U'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'"),
    'ESCAPE_CHAR' => '',

    'KEYWORDS' => array(
        1 => array(
            'absolute','asm','assembler','begin','break','case','catch','cdecl',
            'const','constructor','default','destructor','div','do','downto',
            'else','end','except','export','exports','external','far',
            'finalization','finally','for','forward','function','goto','if',
            'implementation','in','index','inherited','initialization','inline',
            'interface','interrupt','label','library','mod','name','not','of',
            'or','overload','override','private','procedure','program',
            'property','protected','public','published','raise','repeat',
            'resourcestring','shl','shr','stdcall','stored','switch','then',
            'to','try','type','unit','until','uses','var','while','with','xor'
            ),
        2 => array(
            'nil', 'false', 'true',
            ),
        3 => array(
            'abs','and','arc','arctan','blockread','blockwrite','chr','dispose',
            'cos','eof','eoln','exp','get','ln','new','odd','ord','ordinal',
            'pred','read','readln','sin','sqrt','succ','write','writeln'
            ),
        4 => array(
            'ansistring','array','boolean','byte','bytebool','char','file',
            'integer','longbool','longint','object','packed','pointer','real',
            'record','set','shortint','smallint','string','union','word'
            ),
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        ),
    'SYMBOLS' => array(
        0 => array('(', ')', '[', ']'),
        1 => array('.', ',', ':', ';'),
        2 => array('@', '^'),
        3 => array('=', '+', '-', '*', '/')
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000000; font-weight: bold;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;',
            4 => 'color: #000066; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #008000; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #ff0000; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;',
            //'HARD' => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;'
            ),
        'REGEXPS' => array(
            0 => 'color: #0000cc;',
            1 => 'color: #ff0000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #000066;',
            1 => 'color: #000066;',
            2 => 'color: #000066;',
            3 => 'color: #000066;'
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
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        //Hex numbers
        0 => '\$[0-9a-fA-F]+',
        //Characters
        1 => '\#(?:\$[0-9a-fA-F]{1,2}|\d{1,3})'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);

?>