<?php
/*************************************************************************************
 * visualprolog.php
 * ----------
 * Author: Thomas Linder Puls (puls@pdc.dk)
 * Copyright: (c) 2008 Thomas Linder Puls (puls@pdc.dk)
 * Release Version: 1.0.8.11
 * Date Started: 2008/11/20
 *
 * Visual Prolog language file for GeSHi.
 *
 * CHANGES
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
    'LANG_NAME' => 'Visual Prolog',
    'COMMENT_SINGLE' => array(1 => '%'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'HARDQUOTE' => array('@"', '"'),
    'HARDESCAPE' => array('""'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'clauses','constants','constructors','delegate','domains','facts',
            'goal','guards','inherits','monitor','namespace','open',
            'predicates','properties','resolve','supports'
            ),
        2 => array(
            'align','and','anyflow','as','bitsize','catch','determ','digits',
            'div','do','else','elseif','erroneous','externally','failure',
            'finally','from','language','mod','multi','nondeterm','or',
            'procedure','quot','rem','single','then','to'
            ),
        3 => array(
            '#bininclude','#else','#elseif','#endif','#error','#export',
            '#externally','#if','#import','#include','#message','#options',
            '#orrequires','#requires','#then','#warning'
            ),
        ),
    'SYMBOLS' => array(
        '+', '-', '*', '?', '=', '/', '>', '<', '^', '!', ':', '(', ')', '{', '}', '[', ']'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => true,
        1 => true,
        2 => true,
        3 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #808000;',
            2 => 'color: #333399;',
            3 => 'color: #800080;',
            ),
        'COMMENTS' => array(
            1 => 'color: #AA77BD',
            'MULTI' => 'color: #AA77BD'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #008080;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #00B7B7;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000FF;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            0 => 'color: #008000;',
            1 => 'color: #808000;',
            2 => 'color: #333399;',
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => ':',
        2 => '::'
        ),
    'REGEXPS' => array(
        0 => "(?<![a-zA-Z0-9_])(?!(?:PIPE|SEMI)>)[A-Z_]\w*(?!\w)",
        1 => "\\b(end\\s+)?(implement|class|interface)\\b",
        2 => "\\b(end\\s+)?(foreach|if|try)\\b",
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);

?>
