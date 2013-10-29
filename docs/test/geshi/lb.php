<?php
/*************************************************************************************
 * lb.php
 * --------
 * Author: Chris Iverson (cj.no.one@gmail.com)
 * Copyright: (c) 2010 Chris Iverson
 * Release Version: 1.0.8.11
 * Date Started: 2010/07/18
 *
 * Liberty BASIC language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2010/07/22
 *  -  First Release
 *
 * 2010/08/23
 *  -  Added missing default variables
 *
 * TODO (updated 2010/07/20)
 * -------------------------
 * Prevent highlighting numbers in handle names(constants beginning with #)
 * Allow number highlighting after a single period(e.g.  .9 = 0.9, should be
 *     highlighted
 * Prevent highlighting keywords within branch labels(within brackets)
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
    'LANG_NAME' => 'Liberty BASIC',
    'COMMENT_SINGLE' => array(1 => '\''),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'and', 'append', 'as', 'beep', 'bmpbutton', 'bmpsave', 'boolean',
            'button', 'byref', 'call', 'callback', 'calldll', 'callfn', 'case',
            'checkbox', 'close', 'cls', 'colordialog', 'combobox', 'confirm',
            'cursor', 'data', 'dialog', 'dim', 'dll', 'do', 'double', 'dump',
            'dword', 'else', 'end', 'error', 'exit', 'field', 'filedialog',
            'files', 'fontdialog', 'for', 'function', 'get', 'gettrim',
            'global', 'gosub', 'goto', 'graphicbox', 'graphics', 'groupbox',
            'if', 'input', 'kill', 'let', 'line', 'listbox', 'loadbmp',
            'locate', 'long', 'loop', 'lprint', 'mainwin', 'maphandle', 'menu',
            'mod', 'name', 'next', 'nomainwin', 'none', 'notice', 'on',
            'oncomerror', 'or', 'open', 'out', 'output', 'password', 'playmidi',
            'playwave', 'popupmenu', 'print', 'printerdialog', 'prompt', 'ptr',
            'put', 'radiobutton', 'random', 'randomize', 'read', 'readjoystick',
            'redim', 'rem', 'restore', 'resume', 'return', 'run', 'scan',
            'seek', 'select', 'short', 'sort', 'statictext', 'stop', 'stopmidi',
            'struct', 'stylebits', 'sub', 'text', 'textbox', 'texteditor',
            'then', 'timer', 'titlebar', 'to', 'trace', 'ulong', 'unloadbmp',
            'until', 'ushort', 'void', 'wait', 'window', 'wend', 'while',
            'word', 'xor'
            ),
        2 => array(
            'abs', 'acs', 'asc', 'asn', 'atn', 'chr$', 'cos', 'date$',
            'dechex$', 'eof', 'eval', 'eval$', 'exp', 'hbmp', 'hexdec', 'hwnd',
            'inp', 'input$', 'inputto$', 'instr', 'int', 'left$', 'len', 'lof',
            'log', 'lower$', 'max', 'midipos', 'mid$', 'min', 'mkdir', 'not',
            'right$', 'rmdir', 'rnd', 'sin', 'space$', 'sqr', 'str$', 'tab',
            'tan', 'time$', 'trim$', 'txcount', 'upper$', 'using', 'val',
            'winstring', 'word$'
            ),
        3 => array(
            'BackgroundColor$', 'Com', 'ComboboxColor$', 'ComError', 'ComErrorNumber',
            'CommandLine$', 'ComPortNumber', 'DefaultDir$',
            'DisplayHeight', 'DisplayWidth', 'Drives$', 'Err', 'Err$',
            'ForegroundColor$', 'Inkey$', 'Joy1x', 'Joy1y', 'Joy1z',
            'Joy1button1', 'Joy1button2', 'Joy2x', 'Joy2y', 'Joy2z',
            'Joy2button1', 'Joy2button2', 'ListboxColor$', 'MouseX', 'MouseY', 'Platform$',
            'PrintCollate', 'PrintCopies', 'PrinterFont$', 'PrinterName$', 'StartupDir$',
            'TextboxColor$', 'TexteditorColor$', 'Version$', 'WindowHeight',
            'WindowWidth', 'UpperLeftX', 'UpperLeftY'
            )
        ),
    'SYMBOLS' => array(
        1 => array(
            '(', ')', '[', ']', '+', '-', '*', '/', '%', '=', '<', '>', ':', ',', '#'
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF;',
            2 => 'color: #AD0080;',
            3 => 'color: #008080;'
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
            0 => 'color: #008000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #FF0000;',
            ),
        'METHODS' => array(
            0 => 'color: #004000;'
            ),
        'SYMBOLS' => array(
            1 => 'color: #339933;'
            ),
        'REGEXPS' => array(),
        'SCRIPT' => array()
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'REGEXPS' => array(),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array(),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            2 => array(
                //In LB, the second keyword list is a list of built-in functions,
                //and their names should not be highlighted unless being used
                //as a function name.
                'DISALLOWED_AFTER' => '(?=\s*\()'
                )
            )
        )
);

?>