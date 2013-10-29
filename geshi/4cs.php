<?php
/*************************************************************************************
 * 4cs.php
 * ------
 * Author: Jason Curl (jason.curl@continental-corporation.com)
 * Copyright: (c) 2009 Jason Curl
 * Release Version: 1.0.8.11
 * Date Started: 2009/09/05
 *
 * 4CS language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/09/05
 *   -  First Release
 *
 * TODO (updated 2009/09/01)
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
    'LANG_NAME' => 'GADV 4CS',
    'COMMENT_SINGLE' => array(1 => "//"),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'All', 'AllMatches', 'And', 'And_Filters', 'As', 'Asc', 'BasedOn',
            'BestMatch', 'Block', 'Buffer', 'ByRef', 'ByVal', 'Call', 'Channel',
            'Chr', 'Clear', 'Close', 'Confirm', 'Const', 'Continue', 'Cos',
            'Critical', 'Declare', 'Default', 'DefaultChannel', 'DefaultDelayTime',
            'DefaultReceiveMode', 'DefaultResponseTime', '#Define', 'DelayTime',
            'Delete', 'Div', 'Else', '#Else', 'ElseIf', '#ElseIf', 'End', 'EndCritical',
            'EndInlineC', 'EndFunction', 'EndIf', '#EndIf', 'EndInputList',
            'EndLocalChannel', 'EndScenario', 'EndSub', 'EndWhile', 'Error',
            'ErrorLevelOff', 'ErrorLevelOn', 'ErrorLevelSet', 'ErrorLevelSetRaw',
            'Event', 'EventMode', 'EventOff', 'EventOn', 'EventSet', 'EventSetRaw',
            'Execute', 'Exit', 'Exp', 'FileClose', 'FilterClear', 'FileEOF', 'FileOpen',
            'FileRead', 'FileSize', 'FileWrite', 'FilterAdd', 'FilterMode',
            'FilterOff', 'FilterOn', 'For', 'Format', 'Function', 'GoOnline', 'GoTo',
            'Handle', 'Hide', 'If', '#If', '#IfDef', '#IfNDef', 'Ignore', '#Include',
            'InlineC', 'Input', 'InputItem', 'InputList', 'Kill', 'LBound', 'LocalChannel',
            'Local', 'Log', 'Log10', 'LogOff', 'LogOn', 'Loop', 'Message', 'Mod',
            'MonitorChannel', 'MostFormat', 'MostMessage', 'Named', 'Never', 'Next',
            'NoOrder', 'Not', 'Nothing', 'NoWait', 'Numeric', 'OnError', 'OnEvent',
            'Or', 'Or_Filters', 'Order', 'Pass', 'Pow', 'Prototype', 'Quit', 'Raise',
            'Random', 'Receive', 'ReceiveMode', 'ReceiveRaw', 'Redim', 'Remote', 'Repeat',
            'Repeated', 'ResponseTime', 'Resume', 'ResumeCritical', 'RT_Common',
            'RT_Dll_Call', 'RT_FILEIO', 'RT_General', 'RT_HardwareAccess',
            'RT_MessageVariableAccess', 'RT_Scenario', 'RT_VariableAccess', 'Runtime',
            'Scenario', 'ScenarioEnd', 'ScenarioStart', 'ScenarioStatus', 'ScenarioTerminate',
            'Send', 'SendRaw', 'Set', 'SetError', 'Sin', 'Single', 'Show', 'Start',
            'StartCritical', 'Starts', 'Static', 'Step', 'Stop', 'String', 'Sub',
            'System_Error', 'TerminateAllChilds', 'Terminates', 'Then', 'Throw', 'TimeOut',
            'To', 'TooLate', 'Trunc', 'UBound', 'Unexpected', 'Until', 'User_Error',
            'View', 'Wait', 'Warning', 'While', 'XOr'
            ),
        2 => array(
            'alias', 'winapi', 'long', 'char', 'double', 'float', 'int', 'short', 'lib'
            )
        ),
    'SYMBOLS' => array(
        '=', ':=', '<', '>', '<>'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000C0; font-weight: bold;',
            2 => 'color: #808080;'
            ),
        'COMMENTS' => array(
            1 => 'color: #008000;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000080;'
            ),
        'STRINGS' => array(
            0 => 'color: #800080;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #66cc66;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #000080;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => ''
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