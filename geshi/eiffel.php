<?php
/*************************************************************************************
 * eiffel.php
 * ----------
 * Author: Zoran Simic (zsimic@axarosenberg.com)
 * Copyright: (c) 2005 Zoran Simic
 * Release Version: 1.0.8.11
 * Date Started: 2005/06/30
 *
 * Eiffel language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/06/30 (1.0.7)
 *  -  Initial release
 *
 * TODO (updated 2005/06/30)
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
    'LANG_NAME' => 'Eiffel',
    'COMMENT_SINGLE' => array(1 => '--'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '%',
    'KEYWORDS' => array(
        1 => array(
            'separate',
            'invariant',
            'inherit',
            'indexing',
            'feature',
            'expanded',
            'deferred',
            'class'
            ),
        2 => array(
            'xor',
            'when',
            'variant',
            'until',
            'unique',
            'undefine',
            'then',
            'strip',
            'select',
            'retry',
            'rescue',
            'require',
            'rename',
            'reference',
            'redefine',
            'prefix',
            'or',
            'once',
            'old',
            'obsolete',
            'not',
            'loop',
            'local',
            'like',
            'is',
            'inspect',
            'infix',
            'include',
            'implies',
            'if',
            'frozen',
            'from',
            'external',
            'export',
            'ensure',
            'end',
            'elseif',
            'else',
            'do',
            'creation',
            'create',
            'check',
            'as',
            'and',
            'alias',
            'agent'
            ),
        3 => array(
            'Void',
            'True',
            'Result',
            'Precursor',
            'False',
            'Current'
            ),
        4 => array(
            'UNIX_SIGNALS',
            'UNIX_FILE_INFO',
            'UNBOUNDED',
            'TWO_WAY_TREE_CURSOR',
            'TWO_WAY_TREE',
            'TWO_WAY_SORTED_SET',
            'TWO_WAY_LIST',
            'TWO_WAY_CURSOR_TREE',
            'TWO_WAY_CIRCULAR',
            'TWO_WAY_CHAIN_ITERATOR',
            'TUPLE',
            'TREE',
            'TRAVERSABLE',
            'TO_SPECIAL',
            'THREAD_CONTROL',
            'THREAD_ATTRIBUTES',
            'THREAD',
            'TABLE',
            'SUBSET',
            'STRING_HANDLER',
            'STRING',
            'STREAM',
            'STORABLE',
            'STD_FILES',
            'STACK',
            'SPECIAL',
            'SORTED_TWO_WAY_LIST',
            'SORTED_STRUCT',
            'SORTED_LIST',
            'SINGLE_MATH',
            'SET',
            'SEQUENCE',
            'SEQ_STRING',
            'SEMAPHORE',
            'ROUTINE',
            'RESIZABLE',
            'RECURSIVE_TREE_CURSOR',
            'RECURSIVE_CURSOR_TREE',
            'REAL_REF',
            'REAL',
            'RAW_FILE',
            'RANDOM',
            'QUEUE',
            'PROXY',
            'PROFILING_SETTING',
            'PROCEDURE',
            'PRIORITY_QUEUE',
            'PRIMES',
            'PRECOMP',
            'POINTER_REF',
            'POINTER',
            'PLATFORM',
            'PLAIN_TEXT_FILE',
            'PATH_NAME',
            'PART_SORTED_TWO_WAY_LIST',
            'PART_SORTED_SET',
            'PART_SORTED_LIST',
            'PART_COMPARABLE',
            'OPERATING_ENVIRONMENT',
            'ONCE_CONTROL',
            'OBJECT_OWNER',
            'OBJECT_CONTROL',
            'NUMERIC',
            'NONE',
            'MUTEX',
            'MULTI_ARRAY_LIST',
            'MULTAR_LIST_CURSOR',
            'MEMORY',
            'MEM_INFO',
            'MEM_CONST',
            'MATH_CONST',
            'LIST',
            'LINKED_TREE_CURSOR',
            'LINKED_TREE',
            'LINKED_STACK',
            'LINKED_SET',
            'LINKED_QUEUE',
            'LINKED_PRIORITY_QUEUE',
            'LINKED_LIST_CURSOR',
            'LINKED_LIST',
            'LINKED_CURSOR_TREE',
            'LINKED_CIRCULAR',
            'LINKABLE',
            'LINEAR_ITERATOR',
            'LINEAR',
            'ITERATOR',
            'IO_MEDIUM',
            'INTERNAL',
            'INTEGER_REF',
            'INTEGER_INTERVAL',
            'INTEGER',
            'INFINITE',
            'INDEXABLE',
            'IDENTIFIED_CONTROLLER',
            'IDENTIFIED',
            'HIERARCHICAL',
            'HEAP_PRIORITY_QUEUE',
            'HASHABLE',
            'HASH_TABLE_CURSOR',
            'HASH_TABLE',
            'GENERAL',
            'GC_INFO',
            'FUNCTION',
            'FORMAT_INTEGER',
            'FORMAT_DOUBLE',
            'FIXED_TREE',
            'FIXED_LIST',
            'FIXED',
            'FINITE',
            'FILE_NAME',
            'FILE',
            'FIBONACCI',
            'EXECUTION_ENVIRONMENT',
            'EXCEPTIONS',
            'EXCEP_CONST',
            'DYNAMIC_TREE',
            'DYNAMIC_LIST',
            'DYNAMIC_CIRCULAR',
            'DYNAMIC_CHAIN',
            'DOUBLE_REF',
            'DOUBLE_MATH',
            'DOUBLE',
            'DISPENSER',
            'DIRECTORY_NAME',
            'DIRECTORY',
            'DECLARATOR',
            'DEBUG_OUTPUT',
            'CURSOR_TREE_ITERATOR',
            'CURSOR_TREE',
            'CURSOR_STRUCTURE',
            'CURSOR',
            'COUNTABLE_SEQUENCE',
            'COUNTABLE',
            'CONTAINER',
            'CONSOLE',
            'CONDITION_VARIABLE',
            'COMPARABLE_STRUCT',
            'COMPARABLE_SET',
            'COMPARABLE',
            'COMPACT_TREE_CURSOR',
            'COMPACT_CURSOR_TREE',
            'COLLECTION',
            'CIRCULAR_CURSOR',
            'CIRCULAR',
            'CHARACTER_REF',
            'CHARACTER',
            'CHAIN',
            'CELL',
            'BOX',
            'BOUNDED_STACK',
            'BOUNDED_QUEUE',
            'BOUNDED',
            'BOOLEAN_REF',
            'BOOLEAN',
            'BOOL_STRING',
            'BIT_REF',
            'BINARY_TREE',
            'BINARY_SEARCH_TREE_SET',
            'BINARY_SEARCH_TREE',
            'BILINEAR',
            'BI_LINKABLE',
            'BASIC_ROUTINES',
            'BAG',
            'ASCII',
            'ARRAYED_TREE',
            'ARRAYED_STACK',
            'ARRAYED_QUEUE',
            'ARRAYED_LIST_CURSOR',
            'ARRAYED_LIST',
            'ARRAYED_CIRCULAR',
            'ARRAY2',
            'ARRAY',
            'ARGUMENTS',
            'ANY',
            'ACTIVE'
            ),
        5 => array(
            'yes',
            'visible',
            'trace',
            'system',
            'root',
            'profile',
            'override_cluster',
            'object',
            'no',
            'multithreaded',
            'msil_generation_type',
            'line_generation',
            'library',
            'inlining_size',
            'inlining',
            'include_path',
            'il_verifiable',
            'exclude',
            'exception_trace',
            'dynamic_runtime',
            'dotnet_naming_convention',
            'disabled_debug',
            'default',
            'debug',
            'dead_code_removal',
            'console_application',
            'cluster',
            'cls_compliant',
            'check_vape',
            'assertion',
            'array_optimization',
            'all',
            'address_expression'
            ),
        ),
    'SYMBOLS' => array(
        '+', '-', '*', '?', '=', '/', '%', '&', '>', '<', '^', '!', '|', ':',
        '(', ')', '{', '}', '[', ']', '#'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => true,
        5 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0600FF; font-weight: bold;',
            2 => 'color: #0600FF; font-weight: bold;',
            3 => 'color: #800080;',
            4 => 'color: #800000',
            5 => 'color: #603000;'
            ),
        'COMMENTS' => array(
            1 => 'color: #008000; font-style: italic;',
            'MULTI' => ''
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #005070; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #FF0000;'
            ),
        'STRINGS' => array(
            0 => 'color: #0080A0;'
            ),
        'NUMBERS' => array(
            0 => 'color: #FF0000;'
            ),
        'METHODS' => array(
            1 => 'color: #000060;',
            2 => 'color: #000050;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #600000;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => 'http://www.google.com/search?q=site%3Ahttp%3A%2F%2Fdocs.eiffel.com%2Feiffelstudio%2Flibraries+{FNAMEL}&amp;btnI=I%27m+Feeling+Lucky',
        5 => ''
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
