<?php
/*************************************************************************************
 * hicest.php
 * --------
 * Author: Georg Petrich (spt@hicest.com)
 * Copyright: (c) 2010 Georg Petrich (http://www.HicEst.com)
 * Release Version: 1.0.8.11
 * Date Started: 2010/03/15
 *
 * HicEst language file for GeSHi.
 *
 * CHANGES
 * -------
 * yyyy/mm/dd (v.v.v.v)
 *  -  First Release
 *
 * TODO (updated yyyy/mm/dd)
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

$language_data = array(
    'LANG_NAME' => 'HicEst',
    'COMMENT_SINGLE' => array(1 => '!'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"', '\''),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            '$cmd_line', 'abs', 'acos', 'alarm', 'alias', 'allocate', 'appendix', 'asin', 'atan', 'axis', 'beep',
            'call', 'ceiling', 'char', 'character', 'com', 'continue', 'cos', 'cosh', 'data', 'diffeq', 'dimension', 'dlg', 'dll',
            'do', 'edit', 'else', 'elseif', 'end', 'enddo', 'endif', 'exp', 'floor', 'function', 'fuz', 'goto', 'iand', 'ichar',
            'ieor', 'if', 'index', 'init', 'int', 'intpol', 'ior', 'key', 'len', 'len_trim', 'line', 'lock', 'log', 'max', 'maxloc',
            'min', 'minloc', 'mod', 'nint', 'not', 'open', 'pop', 'ran', 'read', 'real', 'return', 'rgb', 'roots', 'sign', 'sin',
            'sinh', 'solve', 'sort', 'subroutine', 'sum', 'system', 'tan', 'tanh', 'then', 'time', 'use', 'window', 'write', 'xeq'
            )
        ),
    'SYMBOLS' => array(
        1 => array(
            '(', ')', '+', '-', '*', '/', '=', '<', '>', '!', '^', ':', ','
            ),
        2 => array(
            '$', '$$'
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #ff0000;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #0000ff;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;',
            ),
        'METHODS' => array(
            0 => 'color: #004000;'
            ),
        'SYMBOLS' => array(
            1 => 'color: #339933;',
            2 => 'color: #ff0000;'
            ),
        'REGEXPS' => array(),
        'SCRIPT' => array()
        ),
    'URLS' => array(1 => ''),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'REGEXPS' => array(),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array()
);

?>