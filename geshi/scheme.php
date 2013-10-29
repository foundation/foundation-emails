<?php
/*************************************************************************************
 * scheme.php
 * ----------
 * Author: Jon Raphaelson (jonraphaelson@gmail.com)
 * Copyright: (c) 2005 Jon Raphaelson, Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/08/30
 *
 * Scheme language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/09/22 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2005/09/22)
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
    'LANG_NAME' => 'Scheme',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array('#|' => '|#'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'abs', 'acos', 'and', 'angle', 'append', 'appply', 'approximate',
            'asin', 'assoc', 'assq', 'assv', 'atan',

            'begin', 'boolean?', 'bound-identifier=?',

            'caar', 'caddr', 'cadr', 'call-with-current-continuation',
            'call-with-input-file', 'call-with-output-file', 'call/cc', 'car',
            'case', 'catch', 'cdddar', 'cddddr', 'cdr', 'ceiling', 'char->integer',
            'char-alphabetic?', 'char-ci<=?', 'char-ci<?', 'char-ci?', 'char-ci>=?',
            'char-ci>?', 'char-ci=?', 'char-downcase', 'char-lower-case?',
            'char-numeric', 'char-ready', 'char-ready?', 'char-upcase',
            'char-upper-case?', 'char-whitespace?', 'char<=?', 'char<?', 'char=?',
            'char>=?', 'char>?', 'char?', 'close-input-port', 'close-output-port',
            'complex?', 'cond', 'cons', 'construct-identifier', 'cos',
            'current-input-port', 'current-output-port',

            'd', 'define', 'define-syntax', 'delay', 'denominator', 'display', 'do',

            'e', 'eof-object?', 'eq?', 'equal?', 'eqv?', 'even?', 'exact->inexact',
            'exact?', 'exp', 'expt', 'else',

            'f', 'floor', 'for-each', 'force', 'free-identifer=?',

            'gcd', 'gen-counter', 'gen-loser', 'generate-identifier',

            'identifier->symbol', 'identifier', 'if', 'imag-part', 'inexact->exact',
            'inexact?', 'input-port?', 'integer->char', 'integer?', 'integrate-system',

            'l', 'lambda', 'last-pair', 'lcm', 'length', 'let', 'let*', 'letrec',
            'list', 'list->string', 'list->vector', 'list-ref', 'list-tail', 'list?',
            'load', 'log',

            'magnitude', 'make-polar', 'make-promise', 'make-rectangular',
            'make-string', 'make-vector', 'map', 'map-streams', 'max', 'member',
            'memq', 'memv', 'min', 'modulo',

            'negative', 'newline', 'nil', 'not', 'null?', 'number->string', 'number?',
            'numerator',

            'odd?', 'open-input-file', 'open-output-file', 'or', 'output-port',

            'pair?', 'peek-char', 'positive?', 'procedure?',

            'quasiquote', 'quote', 'quotient',

            'rational', 'rationalize', 'read', 'read-char', 'real-part', 'real?',
            'remainder', 'return', 'reverse',

            's', 'sequence', 'set!', 'set-char!', 'set-cdr!', 'sin', 'sqrt', 'string',
            'string->list', 'string->number', 'string->symbol', 'string-append',
            'string-ci<=?', 'string-ci<?', 'string-ci=?', 'string-ci>=?',
            'string-ci>?', 'string-copy', 'string-fill!', 'string-length',
            'string-ref', 'string-set!', 'string<=?', 'string<?', 'string=?',
            'string>=?', 'string>?', 'string?', 'substring', 'symbol->string',
            'symbol?', 'syntax', 'syntax-rules',

            't', 'tan', 'template', 'transcript-off', 'transcript-on', 'truncate',

            'unquote', 'unquote-splicing', 'unwrap-syntax',

            'vector', 'vector->list', 'vector-fill!', 'vector-length', 'vector-ref',
            'vector-set!', 'vector?',

            'with-input-from-file', 'with-output-to-file', 'write', 'write-char',

            'zero?'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']', '!', '%', '^', '&', '/','+','-','*','=','<','>',';','|'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            0 => 'color: #202020;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
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
