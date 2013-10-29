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
 * 2008/03/29 (1.0.7.22)
 *   -  Fixed warnings resulting from missing style information
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
    'LANG_NAME' => 'OCaml',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array('(*' => '*)'),
    'COMMENT_REGEXP' => array(1 => '/\(\*(?:(?R)|.)+?\*\)/s'),
    'CASE_KEYWORDS' => 0,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => "",
    'KEYWORDS' => array(
        /* main OCaml keywords */
        1 => array(
            'and', 'as', 'asr', 'begin', 'class', 'closed', 'constraint', 'do', 'done', 'downto', 'else',
            'end', 'exception', 'external', 'failwith', 'false', 'for', 'fun', 'function', 'functor',
            'if', 'in', 'include', 'inherit',  'incr', 'land', 'let', 'load', 'los', 'lsl', 'lsr', 'lxor',
            'match', 'method', 'mod', 'module', 'mutable', 'new', 'not', 'of', 'open', 'option', 'or', 'parser',
            'private', 'ref', 'rec', 'raise', 'regexp', 'sig', 'struct', 'stdout', 'stdin', 'stderr', 'then',
            'to', 'true', 'try', 'type', 'val', 'virtual', 'when', 'while', 'with'
            ),
        /* define names of main librarys, so we can link to it */
        2 => array(
            'Arg', 'Arith_status', 'Array', //'Array1', 'Array2', 'Array3',
            'ArrayLabels', 'Big_int', 'Bigarray', 'Buffer', 'Callback',
            'CamlinternalLazy', 'CamlinternalMod', 'CamlinternalOO', 'Char',
            'Complex', 'Condition', 'Dbm', 'Digest', 'Dynlink', 'Event',
            'Filename', 'Format', 'Gc', 'Genlex', 'Graphics', 'GraphicsX11',
            'Hashtbl', 'Int32', 'Int64', 'Lazy', 'Lexing', 'List', 'ListLabels',
            'Map', 'Marshal', 'MoreLabels', 'Mutex', 'Nativeint', 'Num', 'Obj',
            'Oo', 'Parsing', 'Pervasives', 'Printexc', 'Printf', 'Queue',
            'Random', 'Scanf', 'Set', 'Sort', 'Stack', 'StdLabels', 'Str',
            'Stream', 'String', 'StringLabels', 'Sys', 'Thread', 'ThreadUnix',
            'Tk', 'Unix', 'UnixLabels', 'Weak'
            ),
        /* just link to the Pervasives functions library, cause it's the default opened library when starting OCaml */
        3 => array(
            'abs', 'abs_float', 'acos', 'asin', 'at_exit', 'atan', 'atan2',
            'bool_of_string', 'ceil', 'char_of_int', 'classify_float',
            'close_in', 'close_in_noerr', 'close_out', 'close_out_noerr',
            'compare', 'cos', 'cosh', 'decr', 'epsilon_float', 'exit', 'exp',
            'float', 'float_of_int', 'float_of_string', 'floor', 'flush',
            'flush_all', 'format_of_string', 'frexp', 'fst', 'ignore',
            'in_channel_length', 'infinity', 'input', 'input_binary_int',
            'input_byte', 'input_char', 'input_line', 'input_value',
            'int_of_char', 'int_of_float', 'int_of_string', 'invalid_arg',
            'ldexp', 'log', 'log10', 'max', 'max_float', 'max_int', 'min',
            'min_float', 'min_int', 'mod_float', 'modf', 'nan', 'open_in',
            'open_in_bin', 'open_in_gen', 'open_out', 'open_out_bin',
            'open_out_gen', 'out_channel_length', 'output', 'output_binary_int',
            'output_byte', 'output_char', 'output_string', 'output_value',
            'pos_in', 'pos_out',  'pred', 'prerr_char', 'prerr_endline',
            'prerr_float', 'prerr_int', 'prerr_newline', 'prerr_string',
            'print_char', 'print_endline', 'print_float', 'print_int',
            'print_newline', 'print_string', 'read_float', 'read_int',
            'read_line', 'really_input', 'seek_in', 'seek_out',
            'set_binary_mode_in', 'set_binary_mode_out', 'sin', 'sinh', 'snd',
            'sqrt', 'string_of_bool', 'string_of_float', 'string_of_format',
            'string_of_int', 'succ', 'tan', 'tanh', 'truncate'
            ),
        /* here Pervasives Types */
        4 => array (
            'array','bool','char','exn','file_descr','format','fpclass',
            'in_channel','int','int32','int64','list','nativeint','open_flag',
            'out_channel','string','Sys_error','unit'
            ),
        /* finally Pervasives Exceptions */
        5 => array (
            'Exit', 'Invalid_Argument', 'Failure', 'Division_by_zero'
            )
        ),
    /* highlighting symbols is really important in OCaml */
    'SYMBOLS' => array(
        '+.', '-.', '*.', '/.', '[<', '>]',
        ';', '!', ':', '.', '=', '%', '^', '*', '-', '/', '+',
        '>', '<', '(', ')', '[', ']', '&', '|', '#', "'",
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => true, /* functions name are case sensitive */
        3 => true, /* types name too */
        4 => true, /* pervasives types */
        5 => true  /* pervasives exceptions */
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #06c; font-weight: bold;', /* nice blue */
            2 => 'color: #06c; font-weight: bold;', /* nice blue */
            3 => 'color: #06c; font-weight: bold;', /* nice blue */
            4 => 'color: #06c; font-weight: bold;', /* nice blue */
            5 => 'color: #06c; font-weight: bold;' /* nice blue */
            ),
        'COMMENTS' => array(
            'MULTI' => 'color: #5d478b; font-style: italic;', /* light purple */
            1 => 'color: #5d478b; font-style: italic;' /* light purple */
            ),
        'ESCAPE_CHAR' => array(
            ),
        'BRACKETS' => array(
            0 => 'color: #a52a2a;'
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
            1 => 'font-weight:bold; color:#339933;',
            2 => 'font-weight:bold; color:#993399;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #a52a2a;' /* maroon */
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        /* some of keywords are Pervasives functions (land, lxor, asr, ...) */
        1 => '',
        /* link to the wanted library */
        2 => 'http://caml.inria.fr/pub/docs/manual-ocaml/libref/{FNAME}.html',
        /* link to Pervasives functions */
        3 => 'http://caml.inria.fr/pub/docs/manual-ocaml/libref/Pervasives.html#VAL{FNAME}',
        /* link to Pervasives type */
        4 => 'http://caml.inria.fr/pub/docs/manual-ocaml/libref/Pervasives.html#TYPE{FNAME}',
        /* link to Pervasives exceptions */
        5 => 'http://caml.inria.fr/pub/docs/manual-ocaml/libref/Pervasives.html#EXCEPTION{FNAME}'
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        1 => '~\w+',
        2 => '`(?=(?-i:[a-z]))\w*',
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>