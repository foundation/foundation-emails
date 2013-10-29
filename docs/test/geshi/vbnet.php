<?php
/*************************************************************************************
 * vbnet.php
 * ---------
 * Author: Alan Juden (alan@judenware.org)
 * Copyright: (c) 2004 Alan Juden, Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/06/04
 *
 * VB.NET language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2004/11/27 (1.0.0)
 *  -  Initial release
 *
 * TODO (updated 2004/11/27)
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
    'LANG_NAME' => 'vb.net',
    'COMMENT_SINGLE' => array(1 => "'"),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        //Keywords
        1 => array(
            'AddHandler', 'AddressOf', 'Alias', 'And', 'AndAlso', 'As', 'ByRef', 'ByVal',
            'Call', 'Case', 'Catch', 'Char', 'Class', 'Const', 'Continue',
            'Declare', 'Default',
            'Delegate', 'Dim', 'DirectCast', 'Do', 'Each', 'Else', 'ElseIf', 'End', 'EndIf',
            'Enum', 'Erase', 'Error', 'Event', 'Exit', 'False', 'Finally', 'For', 'Friend', 'Function',
            'Get', 'GetType', 'GetXMLNamespace', 'Global', 'GoSub', 'GoTo', 'Handles', 'If', 'Implements',
            'Imports', 'In', 'Inherits', 'Interface', 'Is', 'IsNot', 'Let', 'Lib', 'Like', 'Loop', 'Me',
            'Mod', 'Module', 'Module Statement', 'MustInherit', 'MustOverride', 'MyBase', 'MyClass', 'Namespace',
            'Narrowing', 'New', 'Next', 'Not', 'Nothing', 'NotInheritable', 'NotOverridable', 'Of', 'On',
            'Operator', 'Option', 'Optional', 'Or', 'OrElse', 'Out', 'Overloads', 'Overridable', 'Overrides',
            'ParamArray', 'Partial', 'Private', 'Property', 'Protected', 'Public', 'RaiseEvent', 'ReadOnly', 'ReDim',
            'REM', 'RemoveHandler', 'Resume', 'Return', 'Select','Set', 'Shadows', 'Shared', 'Static', 'Step',
            'Stop', 'Structure', 'Sub', 'SyncLock', 'Then', 'Throw', 'To', 'True', 'Try', 'TryCast', 'TypeOf',
            'Using', 'Wend', 'When', 'While', 'Widening', 'With', 'WithEvents', 'WriteOnly', 'Xor'
            ),
        //Data Types
        2 => array(
            'Boolean', 'Byte', 'Date', 'Decimal', 'Double', 'Integer', 'Long', 'Object',
            'SByte', 'Short', 'Single', 'String', 'UInteger', 'ULong', 'UShort'
            ),
        //Compiler Directives
        3 => array(
            '#Const', '#Else', '#ElseIf', '#End', '#If'
            ),
        //Constants
        4 => array(
            'CBool', 'CByte', 'CChar', 'CChr', 'CDate', 'CDbl', 'CDec','CInt', 'CLng', 'CLng8', 'CObj', 'CSByte', 'CShort',
            'CSng', 'CStr', 'CType', 'CUInt', 'CULng', 'CUShort'
            ),
        //Linq
        5 => array(
            'By','From','Group','Where'
            ),
        //Built-in functions
        7 => array(
            'ABS', 'ARRAY', 'ASC', 'ASCB', 'ASCW', 'CALLBYNAME', 'CHOOSE', 'CHR', 'CHR$', 'CHRB', 'CHRB$', 'CHRW',
            'CLOSE', 'COMMAND', 'COMMAND$', 'CONVERSION',
            'COS', 'CREATEOBJECT', 'CURDIR', 'CVDATE', 'DATEADD',
            'DATEDIFF', 'DATEPART', 'DATESERIAL', 'DATEVALUE', 'DAY', 'DDB', 'DIR', 'DIR$',
            'EOF', 'ERROR$', 'EXP', 'FILEATTR', 'FILECOPY', 'FILEDATATIME', 'FILELEN', 'FILTER',
            'FIX', 'FORMAT', 'FORMAT$', 'FORMATCURRENCY', 'FORMATDATETIME', 'FORMATNUMBER',
            'FORMATPERCENT', 'FREEFILE', 'FV', 'GETALLSETTINGS', 'GETATTRGETOBJECT', 'GETSETTING',
            'HEX', 'HEX$', 'HOUR', 'IIF', 'IMESTATUS', 'INPUT$', 'INPUTB', 'INPUTB$', 'INPUTBOX',
            'INSTR', 'INSTRB', 'INSTRREV', 'INT', 'IPMT', 'IRR', 'ISARRAY', 'ISDATE', 'ISEMPTY',
            'ISERROR', 'ISNULL', 'ISNUMERIC', 'ISOBJECT', 'JOIN', 'LBOUND', 'LCASE', 'LCASE$',
            'LEFT', 'LEFT$', 'LEFTB', 'LEFTB$', 'LENB', 'LINEINPUT', 'LOC', 'LOF', 'LOG', 'LTRIM',
            'LTRIM$', 'MID$', 'MIDB', 'MIDB$', 'MINUTE', 'MIRR', 'MKDIR', 'MONTH', 'MONTHNAME',
            'MSGBOX', 'NOW', 'NPER', 'NPV', 'OCT', 'OCT$', 'PARTITION', 'PMT', 'PPMT', 'PV',
            'RATE', 'REPLACE', 'RIGHT', 'RIGHT$', 'RIGHTB', 'RIGHTB$', 'RMDIR', 'RND', 'RTRIM',
            'RTRIM$', 'SECOND', 'SIN', 'SLN', 'SPACE', 'SPACE$', 'SPC', 'SPLIT', 'SQRT', 'STR', 'STR$',
            'STRCOMP', 'STRCONV', 'STRING$', 'STRREVERSE', 'SYD', 'TAB', 'TAN', 'TIMEOFDAY',
            'TIMER', 'TIMESERIAL', 'TIMEVALUE', 'TODAY', 'TRIM', 'TRIM$', 'TYPENAME', 'UBOUND',
            'UCASE', 'UCASE$', 'VAL', 'WEEKDAY', 'WEEKDAYNAME', 'YEAR'
            ),
        ),
    'SYMBOLS' => array(
        '+', '-', '*', '?', '=', '/', '%', '&', '>', '<', '^', '!',
        '(', ')', '{', '}', '.'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        7 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF; font-weight: bold;',  //Keywords
            2 => 'color: #6a5acd;',                     //primitive Data Types
            3 => 'color: #6a5acd; font-weight: bold;',  //preprocessor-commands
            4 => 'color: #cd6a5a;',                     //Constants
            5 => 'color: #cd6a5a; font-weight: bold;',  //LinQ
            7 => 'color: #000066;',                     //Built-in functions
            ),
        'COMMENTS' => array(
            1 => 'color: #008000; font-style: italic;',
            'MULTI' => 'color: #008000; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #008080; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #a52a2a; back-color: #fffacd;'
            ),
        'NUMBERS' => array(
            0 => 'color: #a52a2a; back-color: #fffacd;'
            ),
        'METHODS' => array(
            1 => 'color: #000000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => 'http://www.google.com/search?q={FNAMEU}+site:msdn.microsoft.com',
        4 => '',
        5 => '',
        7 => 'http://www.google.com/search?q={FNAMEU}+site:msdn.microsoft.com'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 =>'.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            7 => array(
                'DISALLOWED_AFTER' => '(?!\w)(?=\s*\()'
                )
            )
        )
);

?>