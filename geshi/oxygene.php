<?php
/*************************************************************************************
 * oxygene.php
 * ----------
 * Author: Carlo Kok (ck@remobjects.com), J�rja Norbert (jnorbi@vipmail.hu), Benny Baumann (BenBE@omorphia.de)
 * Copyright: (c) 2004 J�rja Norbert, Benny Baumann (BenBE@omorphia.de), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2010/01/11
 *
 * Delphi Prism (Oxygene) language file for GeSHi.
 * Based on the original Delphi language file.
 *
 * CHANGES
 * -------
 * 2012/06/28 (1.0.8.11)
 *   -  Added "write" keyword for properties
 * 2010/01/11 (1.0.0)
 *   -  First Release
 *
 *************************************************************************************
 *
 *   This file is part of GeSHi.
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
    'LANG_NAME' => 'Oxygene (Delphi Prism)',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('(*' => '*)', '{' => '}'),
    //Compiler directives
    'COMMENT_REGEXP' => array(2 => '/{\\$.*?}|\\(\\*\\$.*?\\*\\)/U'),
    'CASE_KEYWORDS' => 0,
    'QUOTEMARKS' => array("'"),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'and',   'begin', 'case', 'const',  'div', 'do', 'downto', 'else',
            'end',  'for',  'function', 'if', 'in', 'mod', 'not', 'of', 'or',
            'procedure', 'repeat', 'record', 'set', 'shl', 'shr', 'then', 'to',
            'type', 'until', 'uses', 'var','while', 'with', 'xor', 'exit', 'break',
            'class', 'constructor', 'inherited', 'private', 'public', 'protected',
            'property', 'As', 'Is', 'Unit', 'Continue', 'Try', 'Except', 'Forward',
            'Interface','Implementation', 'nil', 'out', 'loop', 'namespace', 'true',
            'false', 'new', 'ensure', 'require', 'on', 'event', 'delegate', 'method',
            'raise', 'assembly', 'module', 'using','locking', 'old', 'invariants', 'operator',
            'self', 'async', 'finalizer', 'where', 'yield', 'nullable', 'Future',
            'From',  'Finally', 'dynamic'
            ),
        2 => array(
            'override', 'virtual', 'External', 'read', 'add', 'remove','final', 'abstract',
            'empty', 'global', 'locked', 'sealed', 'reintroduce', 'implements', 'each',
            'default', 'partial', 'finalize', 'enum', 'flags', 'result', 'readonly', 'unsafe',
            'pinned', 'matching', 'static', 'has', 'step', 'iterator', 'inline', 'nested',
            'Implies', 'Select', 'Order', 'By', 'Desc', 'Asc', 'Group', 'Join', 'Take',
            'Skip', 'Concat', 'Union', 'Reverse', 'Distinct', 'Into', 'Equals', 'params',
            'sequence', 'index', 'notify', 'Parallel', 'create', 'array', 'Queryable', 'Aspect',
            'volatile', 'write'
            ),
        3 => array(
            'chr', 'ord', 'inc', 'dec', 'assert', 'iff', 'assigned','futureAssigned', 'length', 'low', 'high', 'typeOf', 'sizeOf', 'disposeAndNil', 'Coalesce', 'unquote'
            ),
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
//        4 => false,
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
//            4 => 'color: #000066; font-weight: bold;'
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
            0 => 'color: #000066;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000ff;'
            ),
        'METHODS' => array(
            1 => 'color: #000000;'
            ),
        'REGEXPS' => array(
            0 => 'color: #9ac;',
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
//        4 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        //Hex numbers
        0 => '\$[0-9a-fA-F]+',
        //Characters
        1 => '\#\$?[0-9]{1,3}'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 2
);

?>