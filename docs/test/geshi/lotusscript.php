<?php
/**
 * lotusscript.php
 * ------------------------
 * Author: Richard Civil (info@richardcivil.net)
 * Copyright: (c) 2008 Richard Civil (info@richardcivil.net), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2008/04/12
 *
 * LotusScript language file for GeSHi.
 *
 * LotusScript source: IBM Lotus Notes/Domino 8 Designer Help
 *
 * CHANGES
 * -------
 * 2008/04/12 (1.0.7.22)
 *     -  First Release
 *
 * TODO (2008/04/12)
 * -----------------
 *
 *************************************************************************************
 *
 *   This file is part of GeSHi.
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
    'LANG_NAME' => 'LotusScript',
    'COMMENT_SINGLE' => array(1 => "'"),
    'COMMENT_MULTI' => array('%REM' => '%END REM'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"' , "|"),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array (
            'Yield', 'Year', 'Xor', 'Write', 'With', 'Width', 'While', 'Wend',
            'Weekday', 'VarType', 'Variant', 'Val', 'UString', 'UString$',
            'UseLSX', 'Use', 'Until', 'Unlock', 'Unicode', 'Uni', 'UChr',
            'UChr$', 'UCase', 'UCase$', 'UBound', 'TypeName', 'Type', 'TRUE',
            'Trim', 'Trim$', 'Today', 'To', 'TimeValue', 'TimeSerial', 'Timer',
            'TimeNumber', 'Time', 'Time$', 'Then', 'Text', 'Tan', 'Tab', 'Sub',
            'StrToken', 'StrToken$', 'StrRightBack', 'StrRightBack$',
            'StrRight', 'StrRight$', 'StrLeftBack', 'StrLeftBack$', 'StrLeft',
            'StrLeft$', 'String', 'String$', 'StrConv', 'StrCompare', 'StrComp',
            'Str', 'Str$', 'Stop', 'Step', 'Static', 'Sqr', 'Split', 'Spc',
            'Space', 'Space$', 'Sleep', 'Single', 'Sin', 'Shell', 'Shared',
            'Sgn', 'SetFileAttr', 'SetAttr', 'Set', 'SendKeys', 'Select',
            'Seek', 'Second', 'RTrim', 'RTrim$', 'RSet', 'Round', 'Rnd',
            'RmDir', 'RightC', 'RightC$', 'RightBP', 'RightBP$', 'RightB',
            'RightB$', 'Right', 'Right$', 'Return', 'Resume', 'Reset',
            'Replace', 'Remove', 'Rem', 'ReDim', 'Read', 'Randomize',
            'Random', 'Put', 'Public', 'Property', 'Private', 'Print',
            'Preserve', 'Pitch', 'PI', 'Output', 'Or', 'Option', 'Open', 'On',
            'Oct', 'Oct$', 'NULL', 'Now', 'NOTHING', 'Not', 'NoPitch', 'NoCase',
            'Next', 'New', 'Name', 'MsgBox', 'Month', 'Mod', 'MkDir', 'Minute',
            'MidC', 'MidC$', 'MidBP', 'MidBP$', 'MidB', 'MidB$', 'Mid', 'Mid$',
            'MessageBox', 'Me', 'LTrim', 'LTrim$', 'LSServer', 'LSI_Info',
            'LSet', 'Loop', 'Long', 'Log', 'LOF', 'Lock', 'LOC', 'LMBCS',
            'ListTag', 'List', 'Line', 'Like', 'Lib', 'Let', 'LenC', 'LenBP',
            'LenB', 'Len', 'LeftC', 'LeftC$', 'LeftBP', 'LeftBP$', 'LeftB',
            'LeftB$', 'Left', 'Left$', 'LCase', 'LCase$', 'LBound', 'Kill',
            'Join', 'IsUnknown', 'IsScalar', 'IsObject', 'IsNumeric', 'IsNull',
            'IsList', 'IsEmpty', 'IsElement', 'IsDate', 'IsArray', 'IsA', 'Is',
            'Integer', 'Int', 'InStrC', 'InStrBP', 'InStrB', 'InStr', 'InputBP',
            'InputBP$', 'InputBox', 'InputBox$', 'InputB', 'InputB$', 'Input',
            'Input$', 'In', 'IMSetMode', 'Implode', 'Implode$', 'Imp',
            'IMEStatus', 'If', 'Hour', 'Hex', 'Hex$', 'Goto', 'GoSub',
            'GetThreadInfo', 'GetFileAttr', 'GetAttr', 'Get', 'Function',
            'FullTrim', 'From', 'FreeFile', 'Fraction', 'Format', 'Format$',
            'ForAll', 'For', 'Fix', 'FileLen', 'FileDateTime', 'FileCopy',
            'FileAttr', 'FALSE', 'Explicit', 'Exp', 'Exit', 'Execute', 'Event',
            'Evaluate', 'Error', 'Error$', 'Err', 'Erl', 'Erase', 'Eqv', 'EOF',
            'Environ', 'Environ$', 'End', 'ElseIf', 'Else', 'Double', 'DoEvents',
            'Do', 'Dir', 'Dir$', 'Dim', 'DestroyLock', 'Delete', 'DefVar',
            'DefStr', 'DefSng', 'DefLng', 'DefInt', 'DefDbl', 'DefCur',
            'DefByte', 'DefBool', 'Declare', 'Day', 'DateValue', 'DateSerial',
            'DateNumber', 'Date', 'Date$', 'DataType', 'CVDate', 'CVar',
            'Currency', 'CurDrive', 'CurDrive$', 'CurDir', 'CurDir$', 'CStr',
            'CSng', 'CreateLock', 'Cos', 'Const', 'Compare', 'Command',
            'Command$', 'CodeUnlock', 'CodeLockCheck', 'CodeLock', 'Close',
            'CLng', 'Class', 'CInt', 'Chr', 'Chr$', 'ChDrive', 'ChDir', 'CDbl',
            'CDat', 'CCur', 'CByte', 'CBool', 'Case', 'Call', 'ByVal', 'Byte',
            'Boolean', 'Bind', 'Binary', 'Bin', 'Bin$', 'Beep', 'Base', 'Atn2',
            'Atn', 'ASin', 'Asc', 'As', 'ArrayUnique', 'ArrayReplace',
            'ArrayGetIndex', 'ArrayAppend', 'Append', 'AppActivate', 'Any',
            'And', 'Alias', 'ActivateApp', 'ACos', 'Access', 'Abs', '%Include',
            '%If', '%END', '%ElseIf', '%Else'
            ),
        2 => array (
            'NotesXSLTransformer', 'NotesXMLProcessor', 'NotesViewNavigator',
            'NotesViewEntryCollection', 'NotesViewEntry', 'NotesViewColumn',
            'NotesView', 'NotesUIWorkspace', 'NotesUIView', 'NotesUIScheduler',
            'NotesUIDocument', 'NotesUIDatabase', 'NotesTimer', 'NotesStream',
            'NotesSession', 'NotesSAXParser', 'NotesSAXException',
            'NotesSAXAttributeList', 'NotesRichTextTable', 'NotesRichTextTab',
            'NotesRichTextStyle', 'NotesRichTextSection', 'NotesRichTextRange',
            'NotesRichTextParagraphStyle', 'NotesRichTextNavigator',
            'NotesRichTextItem', 'NotesRichTextDocLink',
            'NotesReplicationEntry', 'NotesReplication', 'NotesRegistration',
            'NotesOutlineEntry', 'NotesOutline', 'NotesNoteCollection',
            'NotesNewsLetter', 'NotesName', 'NotesMIMEHeader',
            'NotesMIMEEntity', 'NotesLog', 'NotesItem', 'NotesInternational',
            'NotesForm', 'NotesEmbeddedObject', 'NotesDXLImporter',
            'NotesDXLExporter', 'NotesDOMXMLDeclNode', 'NotesDOMTextNode',
            'NotesDOMProcessingInstructionNode', 'NotesDOMParser',
            'NotesDOMNotationNode', 'NotesDOMNodeList', 'NotesDOMNode',
            'NotesDOMNamedNodeMap', 'NotesDOMEntityReferenceNode',
            'NotesDOMEntityNode', 'NotesDOMElementNode',
            'NotesDOMDocumentTypeNode', 'NotesDOMDocumentNode',
            'NotesDOMDocumentFragmentNode', 'NotesDOMCommentNode',
            'NotesDOMCharacterDataNote', 'NotesDOMCDATASectionNode',
            'NotesDOMAttributeNode', 'NotesDocumentCollection', 'NotesDocument',
            'NotesDbDirectory', 'NotesDateTime', 'NotesDateRange',
            'NotesDatabase', 'NotesColorObject', 'NotesAgent',
            'NotesAdministrationProcess', 'NotesACLEntry', 'NotesACL',
            'Navigator', 'Field', 'Button'
            )
        ) ,
    'SYMBOLS' => array(
        '(', ')'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF;',
            2 => 'color: #0000EE;'
            ),
        'COMMENTS' => array(
            1 => 'color: #008000;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #000000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #FF00FF;'
            ),
        'METHODS' => array(
            1 => 'color: #0000AA;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #006600;'
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
        ),
    'TAB_WIDTH' => 2
);

?>
