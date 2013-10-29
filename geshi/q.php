<?php
/*************************************************************************************
 * q.php
 * -----
 * Author: Ian Roddis (ian.roddis@proteanmind.net)
 * Copyright: (c) 2008 Ian Roddis (http://proteanmind.net)
 * Release Version: 1.0.8.11
 * Date Started: 2009/01/21
 *
 * q/kdb+ language file for GeSHi.
 *
 * Based on information available from code.kx.com
 *
 * CHANGES
 * -------
 * 2010/01/21 (1.0.0)
 *   -  First Release
 *
 * TODO (updated <1.0.0>)
 * -------------------------
 *  - Fix the handling of single line comments
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
    'LANG_NAME'                 => 'q/kdb+',
    'COMMENT_SINGLE'            => array(1 => '//'),
    'COMMENT_MULTI'             => array(),
    'COMMENT_REGEXP'            => array(
        2 => '/ \s\/.*/',         # This needs to get fixed up, since it won't catch some instances
        # Multi line comments (Moved from REGEXPS)
        3 => '/^\/\s*?\n.*?\n\\\s*?\n/smi'
        ),
    'CASE_KEYWORDS'             => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS'                => array('"'),
    'ESCAPE_CHAR'               => '\\',
    'OOLANG'                    => false,
    'OBJECT_SPLITTERS'          => array(),
    'STRICT_MODE_APPLIES'       => GESHI_NEVER,
    'SCRIPT_DELIMITERS'         => array(),
    'HIGHLIGHT_STRICT_BLOCK'    => array(),
    'TAB_WIDTH'                 => 4,
    'KEYWORDS' => array(
        1 => array(
            'abs', 'acos', 'all', 'and', 'any', 'asc', 'asin', 'asof', 'atan', 'attr', 'avg', 'avgs', 'bin', 'ceiling',
            'cols', 'cor', 'cos', 'count', 'cov', 'cross', 'cut', 'deltas', 'desc', 'dev', 'differ', 'distinct',
            'div', 'each', 'enlist', 'eval', 'except', 'exec', 'exit', 'exp', 'fills', 'first', 'flip', 'floor',
            'fkeys', 'get', 'getenv', 'group', 'gtime', 'hclose', 'hcount', 'hdel', 'hopen', 'hsym', 'iasc', 'idesc',
            'in', 'insert', 'inter', 'inv', 'joins', 'key', 'keys', 'last', 'like', 'load', 'log', 'lower',
            'lsq', 'ltime', 'ltrim', 'mavg', 'max', 'maxs', 'mcount', 'md5', 'mdev', 'med', 'meta', 'min', 'mins',
            'mmax', 'mmin', 'mmu', 'mod', 'msum', 'neg', 'next', 'not', 'null', 'or', 'over', 'parse', 'peach',
            'plist', 'prd', 'prds', 'prev', 'rand', 'rank', 'ratios', 'raze', 'read0', 'read1', 'reciprocal',
            'reverse', 'rload', 'rotate', 'rsave', 'rtrim', 'save', 'scan', 'set', 'setenv', 'show', 'signum',
            'sin', 'sqrt', 'ss', 'ssr', 'string', 'sublist', 'sum', 'sums', 'sv', 'system', 'tables', 'tan', 'til', 'trim',
            'txf', 'type', 'ungroup', 'union', 'upper', 'upsert', 'value', 'var', 'view', 'views', 'vs',
            'wavg', 'within', 'wsum', 'xasc', 'xbar', 'xcol', 'xcols', 'xdesc', 'xexp', 'xgroup', 'xkey',
            'xlog', 'xprev', 'xrank'
            ),
        # kdb database template keywords
        2 => array(
            'aj', 'by', 'delete', 'fby', 'from', 'ij', 'lj', 'pj', 'select', 'uj', 'update', 'where', 'wj',
            ),
        ),
    'SYMBOLS' => array(
        '?', '#', ',', '_', '@', '.', '^', '~', '$', '!', '\\', '\\', '/:', '\:', "'", "':", '::', '+', '-', '%', '*'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #009900; font-weight: bold;',
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #666666; font-style: italic;',
            3 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #660099; font-weight: bold;',
            3 => 'color: #660099; font-weight: bold;',
            4 => 'color: #660099; font-weight: bold;',
            5 => 'color: #006699; font-weight: bold;',
            'HARD' => '',
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #990000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000dd;',
            GESHI_NUMBER_BIN_PREFIX_0B => 'color: #208080;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #208080;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #208080;',
            GESHI_NUMBER_FLT_SCI_SHORT => 'color:#800080;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI_F => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI => 'color:#800080;'
            ),
        'METHODS' => array(
            1 => 'color: #202020;',
            2 => 'color: #202020;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            2   => 'color: #999900;',
            ),
        'SCRIPT' => array(
            )
        ),
    'REGEXPS' => array(
        # Symbols
        2 => '`[^\s"]*',
        ),
    'URLS'  => array(
        1   => '',
        2   => '',
        ),
);

?>