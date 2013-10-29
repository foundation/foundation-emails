<?php
/*************************************************************************************
 * clojure.php
 * --------
 * Author: Jess Johnson (jess@grok-code.com)
 * Copyright: (c) 2009 Jess Johnson (http://grok-code.com)
 * Release Version: 1.0.8.11
 * Date Started: 2009/09/20
 *
 * Clojure language file for GeSHi.
 *
 * This file borrows significantly from the lisp language file for GeSHi
 *
 * CHANGES
 * -------
 * 2009/09/20 (1.0.8.6)
 *  -  First Release
 *
 * TODO (updated 2009/09/20)
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
    'LANG_NAME' => 'Clojure',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array(';|' => '|;'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'defn', 'defn-', 'defmulti', 'defmethod', 'defmacro', 'deftest',
            'defstruct', 'def', 'defonce', 'let', 'letfn', 'do', 'cond', 'condp',
            'for', 'loop', 'recur', 'when', 'when-not', 'when-let', 'when-first',
            'if', 'if-let', 'if-not', 'doto', 'and', 'or','not','aget','aset',
            'dosync', 'doseq', 'dotimes', 'dorun', 'doall',
            'load', 'import', 'unimport', 'ns', 'in-ns', 'refer', 'print',
            'try', 'catch', 'finally', 'throw', 'fn', 'update-in',
            'with-open', 'with-local-vars', 'binding',
            'gen-class', 'gen-and-load-class', 'gen-and-save-class',
            'implement', 'proxy', 'lazy-cons', 'with-meta',
            'struct', 'struct-map', 'delay', 'locking', 'sync', 'time', 'apply',
            'remove', 'merge', 'interleave', 'interpose', 'distinct',
            'cons', 'concat', 'lazy-cat', 'cycle', 'rest', 'frest', 'drop',
            'drop-while', 'nthrest', 'take', 'take-while', 'take-nth', 'butlast',
            'reverse', 'sort', 'sort-by', 'split-at', 'partition', 'split-with',
            'first', 'ffirst', 'rfirst', 'zipmap', 'into', 'set', 'vec',
            'to-array-2d', 'not-empty', 'seq?', 'not-every?', 'every?', 'not-any?',
            'map', 'mapcat', 'vector?', 'list?', 'hash-map', 'reduce', 'filter',
            'vals', 'keys', 'rseq', 'subseq', 'rsubseq', 'count', 'empty?',
            'fnseq', 'repeatedly', 'iterate', 'drop-last',
            'repeat', 'replicate', 'range',  'into-array',
            'line-seq', 'resultset-seq', 're-seq', 're-find', 'tree-seq', 'file-seq',
            'iterator-seq', 'enumeration-seq', 'declare',  'xml-seq',
            'symbol?', 'string?', 'vector', 'conj', 'str',
            'pos?', 'neg?', 'zero?', 'nil?', 'inc', 'dec', 'format',
            'alter', 'commute', 'ref-set', 'floor', 'assoc', 'send', 'send-off'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']', '!', '%', '^', '&', '/','+','-','*','=','<','>',';','|', '.', '..', '->',
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => true,
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
            0 => 'color: #555;',
            1 => 'color: #555;'
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
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
            '::', ':'
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