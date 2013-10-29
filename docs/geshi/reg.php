<?php
/*************************************************************************************
 * reg.php
 * -------
 * Author: Sean Hanna (smokingrope@gmail.com)
 * Copyright: (c) 2006 Sean Hanna
 * Release Version: 1.0.8.11
 * Date Started: 03/15/2006
 *
 * Microsoft Registry Editor language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/05/23 (1.0.7.22)
 *  -  Added description of extra language features (SF#1970248)
 *  -  Updated and optimized most regular expressions
 * 03/15/2006 (0.5.0)
 *  -  Syntax File Created
 * 04/27/2006 (0.9.5)
 *  -  Syntax Coloring Cleaned Up
 *  -  First Release
 * 04/29/2006 (1.0.0)
 *  -  Updated a few coloring settings
 *
 * TODO (updated 4/27/2006)
 * -------------------------
 * - Add a verification to the multi-line portion of the hex field regex
 *    for a '\' character on the line preceding the line of the multi-line
 *    hex field.
 *
 * KNOWN ISSUES (updated 4/27/2006)
 * ---------------------------------
 *
 * - There are two regexes for the multiline hex value regex. The regex for
 *        all lines after the first does not verify that the previous line contains
 *        a line continuation character '\'. This regex also does not check for
 *        end of line as it should.
 *
 * - If number_highlighting is enabled during processing of this syntax file
 *    many of the regexps used will appear slightly incorrect.
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
    'LANG_NAME' => 'Microsoft Registry',
    'COMMENT_SINGLE' => array(1 =>';'),
    'COMMENT_MULTI' => array( ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
//        1 => array(),
//        2 => array(),
        /* Registry Key Constants Not Used */
        3 => array(
            'HKEY_LOCAL_MACHINE',
            'HKEY_CLASSES_ROOT',
            'HKEY_CURRENT_USER',
            'HKEY_USERS',
            'HKEY_CURRENT_CONFIG',
            'HKEY_DYN_DATA',
            'HKLM', 'HKCR', 'HKCU', 'HKU', 'HKCC', 'HKDD'
            )
        ),
    'SYMBOLS' => array(
        '='
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
//        1 => false,
//        2 => false,
        3 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
//            1 => 'color: #00CCFF;',
//            2 => 'color: #0000FF;',
            3 => 'color: #800000;'
            ),
        'COMMENTS' => array(
            1 => 'color: #009900;'
            ),
        'ESCAPE_CHAR' => array(
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #009900;'
            ),
        'NUMBERS' => array(
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            0 => 'color: #00CCFF;',
            1 => 'color: #0000FF;',
            2 => '',
            3 => 'color: #0000FF;',
            4 => 'color: #0000FF;',
            5 => '',
            6 => '',
            7 => '',
            8 => 'color: #FF6600;',
            )
        ),
    'URLS' => array(
//        1 => '',
//        2 => '',
        3 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        // Highlight Key Delimiters
        0 => array(
            GESHI_SEARCH => '((^|\\n)\\s*)(\\\\\\[(.*)\\\\\\])(\\s*(\\n|$))',
            GESHI_REPLACE => '\\3',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\5'
//            GESHI_CLASS => 'kw1'
            ),
        // Highlight File Format Header Version 5
        1 => array(
            GESHI_SEARCH => '(^\s*)(Windows Registry Editor Version \d+\.\d+)(\s*$)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3',
            GESHI_CLASS => 'geshi_registry_header'
            ),
        // Highlight File Format Header Version 4
        2 => array(
            GESHI_SEARCH => '(^\\s*)(REGEDIT\s?\d+)(\s*$)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3',
            GESHI_CLASS => 'geshi_registry_header'
            ),
        // Highlight dword: 32 bit integer values
        3 => array(
            GESHI_SEARCH => '(=\s*)(dword:[0-9a-fA-F]{8})(\s*$)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
//            GESHI_CLASS => 'kw2'
            ),
        // Highlight variable names
        4 => array(
            GESHI_SEARCH => '(^\s*)(\&quot;.*?\&quot;)(\s*=)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3',
            GESHI_CLASS => 'geshi_variable'
            ),
        // Highlight String Values
        5 => array(
            GESHI_SEARCH => '(=\s*)(\&quot;.*?\&quot;)(\s*$)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3',
            GESHI_CLASS => 'st0'
            ),
        // Highlight Hexadecimal Values (Single-Line and Multi-Line)
        6 => array(
            GESHI_SEARCH => '(=\s*\n?\s*)(hex:[0-9a-fA-F]{2}(,(\\\s*\n\s*)?[0-9a-fA-F]{2})*)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '',
            GESHI_CLASS => 'kw2'
            ),
        // Highlight Default Variable
        7 => array(
            GESHI_SEARCH => '(^\s*)(@)(\s*=)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'm',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3',
            GESHI_CLASS => 'geshi_variable'
            ),
        // Highlight GUID's found anywhere.
        8 => array(
            GESHI_SEARCH => '(\{[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}\})',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'i',
            GESHI_BEFORE => '',
            GESHI_AFTER => '',
            GESHI_CLASS => 'geshi_guid'
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'ENABLE_FLAGS' => array(
            'NUMBERS' => GESHI_NEVER,
        )
    )
);

?>
