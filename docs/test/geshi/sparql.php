<?php
/*************************************************************************************
 * sparql.php
 * -------
 * Author: Karima Rafes (karima.rafes@bordercloud.com)
 * Copyright: (c) 2011 Bourdercloud.com
 * Release Version: 1.0.8.11
 * Date Started: 2011/11/05
 *
 * SPARQL language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2011/11/05 (1.0.0)
 *  -  First Release
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
    'LANG_NAME' => 'SPARQL',
    'COMMENT_SINGLE' => array('#'),
    'COMMENT_MULTI' => array('/*' => '*/' ),
    'COMMENT_REGEXP' => array(
        //IRI (it's not a comment ;)
        1 => "/<[^> ]*>/i"
        ),
    'CASE_KEYWORDS' => 1,
    'QUOTEMARKS' => array("'", '"', '`'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'BASE','PREFIX','SELECT','DISTINCT','REDUCED','CONSTRUCT','DESCRIBE','ASK','FROM',
            'NAMED','WHERE','ORDER','BY','ASC','DESC','LIMIT','OFFSET','OPTIONAL','GRAPH',
            'UNION','FILTER','STR','LANG','LANGMATCHES','DATATYPE','BOUND','SAMETERM',
            'ISIRI','ISURI','ISBLANK',
            'ISLITERAL','REGEX','SUBSTR','TRUE',
            'FALSE','LOAD','CLEAR',
            'DROP','ADD','MOVE','COPY',
            'CREATE','DELETE','INSERT',
            'USING','SILENT','DEFAULT','ALL',
            'DATA','WITH','INTO','TO',
            'AS','GROUP','HAVING','UNDEF',
            'BINDINGS','SERVICE','BIND','MINUS_KEYWORD',
            'IRI','URI', 'BNODE',
            'RAND','ABS','CEIL','FLOOR','ROUND',
            'CONCAT','STRLEN',
            'UCASE','LCASE','ENCODE_FOR_URI',
            'CONTAINS','STRSTARTS',
            'STRENDS','STRBEFORE',
            'STRAFTER','REPLACE',
            'YEAR','MONTH',
            'DAY','HOURS',
            'MINUTES','SECONDS',
            'TIMEZONE','TZ',
            'NOW','MD5',
            'SHA1','SHA224',
            'SHA256','SHA384',
            'SHA512','COALESCE',
            'IF','STRLANG','STRDT',
            'ISNUMERIC','COUNT',
            'SUM','MIN',
            'MAX','AVG','SAMPLE',
            'GROUP_CONCAT ','NOT',
            'IN','EXISTS','SEPARATOR'
            )
        ),
    'REGEXPS' => array(
        //Variables without braces
        1 => "\\?[a-zA-Z_][a-zA-Z0-9_]*",
        //prefix
        2 => "[a-zA-Z_.\\-0-9]*:",
        //tag lang
        3 => "@[^ .)}]*",
        ),
    'SYMBOLS' => array(
        0 => array(
            '{', '}' , '.', ';'
            ),
        1 => array(
            '^^',
            '<=','>=','!=','=','<','>','|',
            '&&','||',
            '(',')','[', ']',
            '+','-','*','!','/'
            ),
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #993333; font-weight: bold;'
            ),
        'COMMENTS' => array(
            0 => 'color: #808080; font-style: italic;',
            1 => 'color: #000078;',
            //2 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #FF63C3;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #0000FF;',
            1 => 'color: #FF8000; font-weight: bold;'
            ),
        'SCRIPT' => array(),
        'REGEXPS' => array(
            1 => 'color: #007800;',
            2 => 'color: #780078;',
            3 => 'color: #005078;'
            )
        ),
    'URLS' => array(
        1 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array()
);

?>