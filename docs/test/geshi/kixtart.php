<?php
/*************************************************************************************
 * kixtart.php
 * --------
 * Author: Riley McArdle (riley@glyff.net)
 * Copyright: (c) 2007 Riley McArdle (http://www.glyff.net/)
 * Release Version: 1.0.8.11
 * Date Started: 2007/08/31
 *
 * PHP language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2007/08/31 (1.0.7.22)
 *  -  First Release
 *
 * TODO (updated 2007/08/31)
 * -------------------------
 * *
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
    'LANG_NAME' => 'KiXtart',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'While', 'Loop',
            'Use',
            'Small',
            'Sleep',
            'Shell',
            'SetTime',
            'SetM',
            'SetL',
            'Set',
            'Select', 'Case',
            'Run',
            'Return',
            'Redim',
            'RD',
            'Quit',
            'Play',
            'Move',
            'MD',
            'Include',
            'If', 'Else', 'Endif',
            'GoTo',
            'GoSub',
            'Go',
            'Global',
            'GetS',
            'Get',
            'Function', 'Endfunction',
            'For', 'Next',
            'Each',
            'FlushKb',
            'Exit',
            'Do', 'Until',
            'Display',
            'Dim',
            'Del',
            'Debug',
            'Copy',
            'Cookie1',
            'Color',
            'CLS',
            'CD',
            'Call',
            'Break',
            'Big',
            'Beep',
            ),
        2 => array(
            '@Address',
            '@Build',
            '@Color',
            '@Comment',
            '@CPU',
            '@CRLF',
            '@CSD',
            '@CurDir',
            '@Date',
            '@Day',
            '@Domain',
            '@DOS',
            '@Error',
            '@FullName',
            '@HomeDir',
            '@HomeDrive',
            '@HomeShr',
            '@HostName',
            '@InWin',
            '@IPaddressX',
            '@KiX',
            '@LanRoot',
            '@LDomain',
            '@LDrive',
            '@LM',
            '@LogonMode',
            '@LongHomeDir',
            '@LServer',
            '@MaxPWAge',
            '@MDayNo',
            '@MHz',
            '@MonthNo',
            '@Month',
            '@MSecs',
            '@OnWoW64',
            '@PID',
            '@PrimaryGroup',
            '@Priv',
            '@ProductSuite',
            '@ProductType',
            '@PWAge',
            '@RAS',
            '@Result',
            '@RServer',
            '@ScriptDir',
            '@ScriptExe',
            '@ScriptName',
            '@SError',
            '@SID',
            '@Site',
            '@StartDir',
            '@SysLang',
            '@Ticks',
            '@Time',
            '@TsSession',
            '@UserID',
            '@UserLang',
            '@WDayNo',
            '@Wksta',
            '@WUserID',
            '@YDayNo',
            '@Year',
            ),
        3 => array(
            'WriteValue',
            'WriteProfileString',
            'WriteLine',
            'VarTypeName',
            'VarType',
            'Val',
            'UnloadHive',
            'UCase',
            'Ubound',
            'Trim',
            'Substr',
            'SRnd',
            'Split',
            'SidToName',
            'ShutDown',
            'ShowProgramGroup',
            'SetWallpaper',
            'SetTitle',
            'SetSystemState',
            'SetOption',
            'SetFocus',
            'SetFileAttr',
            'SetDefaultPrinter',
            'SetConsole',
            'SetAscii',
            'SendMessage',
            'SendKeys',
            'SaveKey',
            'RTrim',
            'Round',
            'Rnd',
            'Right',
            'RedirectOutput',
            'ReadValue',
            'ReadType',
            'ReadProfileString',
            'ReadLine',
            'Open',
            'MessageBox',
            'MemorySize',
            'LTrim',
            'Logoff',
            'LogEvent',
            'LoadKey',
            'LoadHive',
            'Len',
            'Left',
            'LCase',
            'KeyExist',
            'KbHit',
            'Join',
            'IsDeclared',
            'Int',
            'InStrRev',
            'InStr',
            'InGroup',
            'IIF',
            'GetObject',
            'GetFileVersion',
            'GetFileTime',
            'GetFileSize',
            'GetFileAttr',
            'GetDiskSpace',
            'FreeFileHandle',
            'FormatNumber',
            'Fix',
            'ExpandEnvironmentVars',
            'Exist',
            'Execute',
            'EnumValue',
            'EnumLocalGroup',
            'EnumKey',
            'EnumIpInfo',
            'EnumGroup',
            'Dir',
            'DelValue',
            'DelTree',
            'DelProgramItem',
            'DelProgramGroup',
            'DelPrinterConnection',
            'DelKey',
            'DecToHex',
            'CStr',
            'CreateObject',
            'CompareFileTimes',
            'Close',
            'ClearEventLog',
            'CInt',
            'Chr',
            'CDbl',
            'Box',
            'BackupEventLog',
            'At',
            'AScan',
            'Asc',
            'AddProgramItem',
            'AddProgramGroup',
            'AddPrinterConnection',
            'AddKey',
            'Abs'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '?', ':', '+', '-', '*', '/', '&', '|', '^', '~', '<', '>', '='
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;'
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
            1 => 'color: #006600;',
            2 => 'color: #006600;'
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
        1 => 'http://www.kixtart.org/manual/Commands/{FNAMEL}.htm',
        2 => '',
        3 => 'http://www.kixtart.org/manual/Functions/{FNAMEL}.htm'
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
        0 => true,
        1 => true,
        2 => true,
        3 => true
        ),
    'TAB_WIDTH' => 4
);

?>
