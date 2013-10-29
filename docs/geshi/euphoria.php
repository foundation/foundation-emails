<?php
/*************************************************************************************
 * euphoria.php
 * ---------------------------------
 * Author: Nicholas Koceja (nerketur@hotmail.com)
 * Copyright: (c) 2010 Nicholas Koceja
 * Release Version: 1.0.8.11
 * Date Started: 11/24/2010
 *
 * Euphoria language file for GeSHi.
 *
 * Author's note:  The colors are based off of the Euphoria Editor (ed.ex) colors.
 * Also, I added comments in places so I could remember a few things about Euphoria.
 *
 *
 * CHANGES
 * -------
 * <date-of-release> (1.0.8.9)
 *  -  First Release
 *
 * TODO (updated <date-of-release>)
 * -------------------------
 * seperate the funtions from the procedures, and have a slight color change for each.
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
    'LANG_NAME' => 'Euphoria',
    'COMMENT_SINGLE' => array(1 => '--'),
    'COMMENT_MULTI' => array(), //Euphoria doesn't support multi-line comments
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array( // keywords
            'and', 'by', 'constant', 'do', 'else', 'elsif', 'end', 'exit',
            'for', 'function', 'global', 'if', 'include', 'not', 'or',
            'procedure', 'return', 'then', 'to', 'type', 'while', 'with',
            'without', 'xor'
            ),
        2 => array( // built-ins
            'abort', 'and_bits', 'append', 'arctan', 'atom', 'c_func', 'call',
            'c_proc', 'call_func', 'call_proc', 'clear_screen', 'close', 'compare',
            'command_line', 'cos', 'date', 'equal', 'find', 'find_from', 'floor',
            'getc', 'getenv', 'gets', 'get_key', 'get_pixel', 'integer', 'length',
            'log', 'machine_func', 'machine_proc', 'match', 'match_from',
            'mem_copy', 'mem_set', 'not_bits', 'object', 'open', 'or_bits', 'peek',
            'peek4s', 'peek4u', 'pixel', 'platform', 'poke', 'poke4', 'position',
            'power', 'prepend', 'print', 'printf', 'profile', 'puts', 'rand',
            'remainder', 'repeat', 'routine_id', 'sequence', 'sin', 'sprintf',
            'sqrt', 'system', 'system_exec', 'tan', 'task_clock_stop',
            'task_clock_start', 'task_create', 'task_list', 'task_schedule',
            'task_self', 'task_status', 'task_suspend', 'task_yield', 'time',
            'trace', 'xor_bits'
            ),
        ),
    'SYMBOLS' => array(
        0 => array(
            '(', ')', '{', '}', '[', ']'
            ),
        1 => array(
            '+', '-', '*', '/', '=', '&', '^'
            ),
        2 => array(
            '&', '?', ','
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff; font-weight: bold;', // keywords
            2 => 'color: #cc33ff; font-weight: bold;', // builtins
            ),
        'COMMENTS' => array(
            1 => 'color: #ff0000; font-style: italic;',
            'MULTI' => '' // doesn't exist
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #009900; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #999900; font-weight: bold;'
            ),
        'STRINGS' => array(
            0 => 'color: #00cc00;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc33cc; font-style: italic'
            ),
        'METHODS' => array( // Doesn't exist in Euphoria.  Everything is a function =)
            0 => ''
            ),
        'SYMBOLS' => array(
            0 => 'color: #999900;', // brackets
            1 => 'color: #333333;', // operators
            2 => 'color: #333333; font-style: bold' // print+concat
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array( // Never included in scripts.
            )
        ),
    'REGEXPS' => array(
        ),
    'URLS' => array(
        1 => '',
        2 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>