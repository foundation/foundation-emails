<?php
/*************************************************************************************
 * ocaml.php
 * ----------
 * Author: Flaie (fireflaie@gmail.com)
 * Copyright: (c) 2005 Flaie, Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2005/08/27
 *
 * OCaml (Objective Caml) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/08/27 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2005/08/27)
 * -------------------------
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
    'LANG_NAME' => 'OCaml (brief)',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array('(*' => '*)'),
    'CASE_KEYWORDS' => 0,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => "",
    'KEYWORDS' => array(
        /* main OCaml keywords */
        1 => array(
            'and', 'as', 'asr', 'begin', 'class', 'closed', 'constraint', 'do', 'done', 'downto', 'else',
            'end', 'exception', 'external', 'failwith', 'false', 'flush', 'for', 'fun', 'function', 'functor',
            'if', 'in', 'include', 'inherit',  'incr', 'land', 'let', 'load', 'los', 'lsl', 'lsr', 'lxor',
            'match', 'method', 'mod', 'module', 'mutable', 'new', 'not', 'of', 'open', 'option', 'or', 'parser',
            'private', 'ref', 'rec', 'raise', 'regexp', 'sig', 'struct', 'stdout', 'stdin', 'stderr', 'then',
            'to', 'true', 'try', 'type', 'val', 'virtual', 'when', 'while', 'with'
            )
        ),
    /* highlighting symbols is really important in OCaml */
    'SYMBOLS' => array(
        ';', '!', ':', '.', '=', '%', '^', '*', '-', '/', '+',
        '>', '<', '(', ')', '[', ']', '&', '|', '#', "'"
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #06c; font-weight: bold;' /* nice blue */
            ),
        'COMMENTS' => array(
            'MULTI' => 'color: #5d478b; font-style: italic;' /* light purple */
            ),
        'ESCAPE_CHAR' => array(
            ),
        'BRACKETS' => array(
            0 => 'color: #6c6;'
            ),
        'STRINGS' => array(
            0 => 'color: #3cb371;' /* nice green */
            ),
        'NUMBERS' => array(
            0 => 'color: #c6c;' /* pink */
            ),
        'METHODS' => array(
            1 => 'color: #060;' /* dark green */
            ),
        'REGEXPS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #a52a2a;' /* maroon */
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
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
