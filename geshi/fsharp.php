<?php
/*************************************************************************************
 * fsharp.php
 * ----------
 * Author: julien ortin (jo_spam-divers@yahoo.fr)
 * Copyright: (c) 2009 julien ortin
 * Release Version: 1.0.8.11
 * Date Started: 2009/09/20
 *
 * F# language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/09/22 (1.0.1)
 *  -  added rules for single char handling (generics ['a] vs char ['x'])
 *  -  added symbols and keywords
 * 2009/09/20 (1.0.0)
 *  -  Initial release
 *
 * TODO
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

$language_data = array(
    'LANG_NAME' => 'F#',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(3 => '/\(\*(?!\)).*?\*\)/s'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'HARDQUOTE' => array('@"', '"'),
    'HARDESCAPE' => array('"'),
    'HARDCHAR' => '"',
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        /* main F# keywords */
        /* section 3.4 */
        1 => array(
            'abstract', 'and', 'as', 'assert', 'base', 'begin', 'class', 'default', 'delegate', 'do', 'done',
            'downcast', 'downto', 'elif', 'else', 'end', 'exception', 'extern', 'false', 'finally', 'for',
            'fun', 'function', 'if', 'in', 'inherit', 'inline', 'interface', 'internal', 'lazy', 'let',
            'match', 'member', 'module', 'mutable', 'namespace', 'new', 'not', 'null', 'of', 'open', 'or',
            'override', 'private', 'public', 'rec', 'return', 'sig', 'static', 'struct', 'then', 'to',
            'true', 'try', 'type', 'upcast', 'use', 'val', 'void', 'when', 'while', 'with', 'yield',
            'asr', 'land', 'lor', 'lsl', 'lsr', 'lxor', 'mod',
            /* identifiers are reserved for future use by F# */
            'atomic', 'break', 'checked', 'component', 'const', 'constraint', 'constructor',
            'continue', 'eager', 'fixed', 'fori', 'functor', 'global', 'include', 'method', 'mixin',
            'object', 'parallel', 'params', 'process', 'protected', 'pure', 'sealed', 'tailcall',
            'trait', 'virtual', 'volatile',
            /* take monads into account */
            'let!', 'yield!'
            ),
        /* define names of main libraries in F# Core, so we can link to it
         * http://research.microsoft.com/en-us/um/cambridge/projects/fsharp/manual/namespaces.html
         */
        2 => array(
            'Array', 'Array2D', 'Array3D', 'Array4D', 'ComparisonIdentity', 'HashIdentity', 'List',
            'Map', 'Seq', 'SequenceExpressionHelpers', 'Set', 'CommonExtensions', 'Event',
            'ExtraTopLevelOperators', 'LanguagePrimitives', 'NumericLiterals', 'Operators',
            'OptimizedClosures', 'Option', 'String', 'NativePtr', 'Printf'
            ),
        /* 17.2 & 17.3 */
        3 => array(
            'abs', 'acos', 'asin', 'atan', 'atan2', 'ceil', 'cos', 'cosh', 'exp',
            'floor', 'log', 'log10', 'pown', 'round', 'sign', 'sin', 'sinh', 'sqrt',
            'tan', 'tanh',
            'ignore',
            'fst', 'snd',
            'stdin', 'stdout', 'stderr',
            'KeyValue',
            'max', 'min'
            ),
        /* Pervasives Types & Overloaded Conversion Functions */
        4 => array(
            'bool', 'byref', 'byte', 'char', 'decimal', 'double', 'exn', 'float', 'float32',
            'FuncConvert', 'ilsigptr', 'int', 'int16', 'int32', 'int64', 'int8',
            'nativeint', 'nativeptr', 'obj', 'option', 'ref', 'sbyte', 'single', 'string', 'uint16',
            'uint32', 'uint64', 'uint8', 'unativeint', 'unit',
            'enum',
            'async', 'seq', 'dict'
            ),
        /* 17.2 Exceptions */
        5 => array (
            'failwith', 'invalidArg', 'raise', 'rethrow'
            ),
        /* 3.3 Conditional compilation & 13.3 Compiler Directives + light / light off */
        6 => array(
            '(*IF-FSHARP', 'ENDIF-FSHARP*)', '(*F#', 'F#*)', '(*IF-OCAML', 'ENDIF-OCAML*)',
            '#light',
            '#if', '#else', '#endif', '#indent', '#nowarn', '#r', '#reference',
            '#I', '#Include', '#load', '#time', '#help', '#q', '#quit',
            ),
        /* 3.11 Pre-processor Declarations / Identifier Replacements */
        7 => array(
            '__SOURCE_DIRECTORY__', '__SOURCE_FILE__', '__LINE__'
            ),
        /* 17.2 Object Transformation Operators */
        8 => array(
            'box', 'hash', 'sizeof', 'typeof', 'typedefof', 'unbox'
            )
        ),
    /* 17.2 basic operators + the yield and yield! arrows */
    'SYMBOLS' => array(
        1 => array('+', '-', '/', '*', '**', '%', '~-'),
        2 => array('<', '<=', '>', '<=', '=', '<>'),
        3 => array('<<<', '>>>', '^^^', '&&&', '|||', '~~~'),
        4 => array('|>', '>>', '<|', '<<'),
        5 => array('!', '->', '->>'),
        6 => array('[',']','(',')','{','}', '[|', '|]', '(|', '|)'),
        7 => array(':=', ';', ';;')
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true, /* keywords */
        2 => true, /* modules */
        3 => true, /* pervasives functions */
        4 => true, /* types and overloaded conversion operators */
        5 => true, /* exceptions */
        6 => true, /* conditional compilation & compiler Directives */
        7 => true, /* pre-processor declarations / identifier replacements */
        8 => true  /* object transformation operators */
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #06c; font-weight: bold;', /* nice blue */
            2 => 'color: #06c; font-weight: bold;', /* nice blue */
            3 => 'color: #06c; font-weight: bold;', /* nice blue */
            4 => 'color: #06c; font-weight: bold;', /* nice blue */
            5 => 'color: #06c; font-weight: bold;', /* nice blue */
            6 => 'color: #06c; font-weight: bold;', /* nice blue */
            7 => 'color: #06c; font-weight: bold;', /* nice blue */
            8 => 'color: #06c; font-weight: bold;' /* nice blue */
            ),
        'COMMENTS' => array(
            'MULTI' => 'color: #5d478b; font-style: italic;', /* light purple */
            1 => 'color: #5d478b; font-style: italic;',
            2 => 'color: #5d478b; font-style: italic;', /* light purple */
            3 => 'color: #5d478b; font-style: italic;' /* light purple */
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
        /* some of keywords are Pervasives functions (land, lxor, asr, ...) */
        1 => '',
        2 => 'http://research.microsoft.com/en-us/um/cambridge/projects/fsharp/manual/namespaces.html',
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => ''
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
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "(?<![a-zA-Z0-9\$_\|\#>|^])",
            'DISALLOWED_AFTER' => "(?![a-zA-Z0-9_<\|%\\-])"
        )
    )
);

?>