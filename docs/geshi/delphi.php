<?php
/*************************************************************************************
 * delphi.php
 * ----------
 * Author: J�rja Norbert (jnorbi@vipmail.hu), Benny Baumann (BenBE@omorphia.de)
 * Copyright: (c) 2004 J�rja Norbert, Benny Baumann (BenBE@omorphia.de), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/07/26
 *
 * Delphi (Object Pascal) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2012/06/27 (1.0.8.11)
 *   -  Added some keywords
 *   -  fixed hex numbers and hex char literals (including WideChar)
 *   -  Added support for FPC-Style generics
 * 2008/05/23 (1.0.7.22)
 *   -  Added description of extra language features (SF#1970248)
 * 2005/11/19 (1.0.3)
 *   -  Updated the very incomplete keyword and type lists
 * 2005/09/03 (1.0.2)
 *   -  Added support for hex numbers and string entities
 * 2004/11/27 (1.0.1)
 *   -  Added support for multiple object splitters
 * 2004/10/27 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2004/11/27)
 * -------------------------
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
    'LANG_NAME' => 'Delphi',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('(*' => '*)', '{' => '}'),
    //Compiler directives
    'COMMENT_REGEXP' => array(2 => '/\\{\\$.*?}|\\(\\*\\$.*?\\*\\)/U'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'"),
    'ESCAPE_CHAR' => '',

    'KEYWORDS' => array(
        1 => array(
            'Abstract', 'And', 'Array', 'As', 'Asm', 'At', 'Begin', 'Case',
            'Class', 'Const', 'Constructor', 'Contains', 'Default', 'delayed', 'Destructor',
            'DispInterface', 'Div', 'Do', 'DownTo', 'Else', 'End', 'Except',
            'Export', 'Exports', 'External', 'File', 'Finalization', 'Finally', 'For',
            'Function', 'Generic', 'Goto', 'If', 'Implementation', 'In', 'Inherited',
            'Initialization', 'Inline', 'Interface', 'Is', 'Label', 'Library', 'Message',
            'Mod', 'Nil', 'Not', 'Object', 'Of', 'On', 'Or', 'Overload', 'Override',
            'Package', 'Packed', 'Private', 'Procedure', 'Program', 'Property',
            'Protected', 'Public', 'Published', 'Read', 'Raise', 'Record', 'Register',
            'Repeat', 'Requires', 'Resourcestring', 'Set', 'Shl', 'Shr', 'Specialize', 'Stored',
            'Then', 'ThreadVar', 'To', 'Try', 'Type', 'Unit', 'Until', 'Uses', 'Var',
            'Virtual', 'While', 'With', 'Write', 'Xor', 'assembler', 'far',
            'near', 'pascal', 'cdecl', 'safecall', 'stdcall', 'varargs'
            ),
        2 => array(
            'false', 'self', 'true',
            ),
        3 => array(
            'Abs', 'AcquireExceptionObject', 'Addr', 'AnsiToUtf8', 'Append', 'ArcTan',
            'Assert', 'AssignFile', 'Assigned', 'BeginThread', 'BlockRead',
            'BlockWrite', 'Break', 'ChDir', 'Chr', 'Close', 'CloseFile',
            'CompToCurrency', 'CompToDouble', 'Concat', 'Continue', 'Copy', 'Cos',
            'Dec', 'Delete', 'Dispose', 'DoubleToComp', 'EndThread', 'EnumModules',
            'EnumResourceModules', 'Eof', 'Eoln', 'Erase', 'ExceptAddr',
            'ExceptObject', 'Exclude', 'Exit', 'Exp', 'FilePos', 'FileSize',
            'FillChar', 'Finalize', 'FindClassHInstance', 'FindHInstance',
            'FindResourceHInstance', 'Flush', 'Frac', 'FreeMem', 'Get8087CW',
            'GetDir', 'GetLastError', 'GetMem', 'GetMemoryManager',
            'GetModuleFileName', 'GetVariantManager', 'Halt', 'Hi', 'High',
            'IOResult', 'Inc', 'Include', 'Initialize', 'Insert', 'Int',
            'IsMemoryManagerSet', 'IsVariantManagerSet', 'Length', 'Ln', 'Lo', 'Low',
            'MkDir', 'Move', 'New', 'Odd', 'OleStrToStrVar', 'OleStrToString', 'Ord',
            'PUCS4Chars', 'ParamCount', 'ParamStr', 'Pi', 'Pos', 'Pred', 'Ptr',
            'Random', 'Randomize', 'Read', 'ReadLn', 'ReallocMem',
            'ReleaseExceptionObject', 'Rename', 'Reset', 'Rewrite', 'RmDir', 'Round',
            'RunError', 'Seek', 'SeekEof', 'SeekEoln', 'Set8087CW', 'SetLength',
            'SetLineBreakStyle', 'SetMemoryManager', 'SetString', 'SetTextBuf',
            'SetVariantManager', 'Sin', 'SizeOf', 'Slice', 'Sqr', 'Sqrt', 'Str',
            'StringOfChar', 'StringToOleStr', 'StringToWideChar', 'Succ', 'Swap',
            'Trunc', 'Truncate', 'TypeInfo', 'UCS4StringToWideString', 'UTF8Decode',
            'UTF8Encode', 'UnicodeToUtf8', 'UniqueString', 'UpCase', 'Utf8ToAnsi',
            'Utf8ToUnicode', 'Val', 'VarArrayRedim', 'VarClear',
            'WideCharLenToStrVar', 'WideCharLenToString', 'WideCharToStrVar',
            'WideCharToString', 'WideStringToUCS4String', 'Write', 'WriteLn',

            'Abort', 'AddExitProc', 'AddTerminateProc', 'AdjustLineBreaks', 'AllocMem',
            'AnsiCompareFileName', 'AnsiCompareStr', 'AnsiCompareText',
            'AnsiDequotedStr', 'AnsiExtractQuotedStr', 'AnsiLastChar',
            'AnsiLowerCase', 'AnsiLowerCaseFileName', 'AnsiPos', 'AnsiQuotedStr',
            'AnsiSameStr', 'AnsiSameText', 'AnsiStrComp', 'AnsiStrIComp',
            'AnsiStrLComp', 'AnsiStrLIComp', 'AnsiStrLastChar', 'AnsiStrLower',
            'AnsiStrPos', 'AnsiStrRScan', 'AnsiStrScan', 'AnsiStrUpper',
            'AnsiUpperCase', 'AnsiUpperCaseFileName', 'AppendStr', 'AssignStr',
            'Beep', 'BoolToStr', 'ByteToCharIndex', 'ByteToCharLen', 'ByteType',
            'CallTerminateProcs', 'ChangeFileExt', 'CharLength', 'CharToByteIndex',
            'CharToByteLen', 'CompareMem', 'CompareStr', 'CompareText', 'CreateDir',
            'CreateGUID', 'CurrToStr', 'CurrToStrF', 'CurrentYear', 'Date',
            'DateTimeToFileDate', 'DateTimeToStr', 'DateTimeToString',
            'DateTimeToSystemTime', 'DateTimeToTimeStamp', 'DateToStr', 'DayOfWeek',
            'DecodeDate', 'DecodeDateFully', 'DecodeTime', 'DeleteFile',
            'DirectoryExists', 'DiskFree', 'DiskSize', 'DisposeStr', 'EncodeDate',
            'EncodeTime', 'ExceptionErrorMessage', 'ExcludeTrailingBackslash',
            'ExcludeTrailingPathDelimiter', 'ExpandFileName', 'ExpandFileNameCase',
            'ExpandUNCFileName', 'ExtractFileDir', 'ExtractFileDrive',
            'ExtractFileExt', 'ExtractFileName', 'ExtractFilePath',
            'ExtractRelativePath', 'ExtractShortPathName', 'FileAge', 'FileClose',
            'FileCreate', 'FileDateToDateTime', 'FileExists', 'FileGetAttr',
            'FileGetDate', 'FileIsReadOnly', 'FileOpen', 'FileRead', 'FileSearch',
            'FileSeek', 'FileSetAttr', 'FileSetDate', 'FileSetReadOnly', 'FileWrite',
            'FinalizePackage', 'FindClose', 'FindCmdLineSwitch', 'FindFirst',
            'FindNext', 'FloatToCurr', 'FloatToDateTime', 'FloatToDecimal',
            'FloatToStr', 'FloatToStrF', 'FloatToText', 'FloatToTextFmt',
            'FmtLoadStr', 'FmtStr', 'ForceDirectories', 'Format', 'FormatBuf',
            'FormatCurr', 'FormatDateTime', 'FormatFloat', 'FreeAndNil',
            'GUIDToString', 'GetCurrentDir', 'GetEnvironmentVariable',
            'GetFileVersion', 'GetFormatSettings', 'GetLocaleFormatSettings',
            'GetModuleName', 'GetPackageDescription', 'GetPackageInfo', 'GetTime',
            'IncAMonth', 'IncMonth', 'IncludeTrailingBackslash',
            'IncludeTrailingPathDelimiter', 'InitializePackage', 'IntToHex',
            'IntToStr', 'InterlockedDecrement', 'InterlockedExchange',
            'InterlockedExchangeAdd', 'InterlockedIncrement', 'IsDelimiter',
            'IsEqualGUID', 'IsLeapYear', 'IsPathDelimiter', 'IsValidIdent',
            'Languages', 'LastDelimiter', 'LoadPackage', 'LoadStr', 'LowerCase',
            'MSecsToTimeStamp', 'NewStr', 'NextCharIndex', 'Now', 'OutOfMemoryError',
            'QuotedStr', 'RaiseLastOSError', 'RaiseLastWin32Error', 'RemoveDir',
            'RenameFile', 'ReplaceDate', 'ReplaceTime', 'SafeLoadLibrary',
            'SameFileName', 'SameText', 'SetCurrentDir', 'ShowException', 'Sleep',
            'StrAlloc', 'StrBufSize', 'StrByteType', 'StrCat', 'StrCharLength',
            'StrComp', 'StrCopy', 'StrDispose', 'StrECopy', 'StrEnd', 'StrFmt',
            'StrIComp', 'StrLCat', 'StrLComp', 'StrLCopy', 'StrLFmt', 'StrLIComp',
            'StrLen', 'StrLower', 'StrMove', 'StrNew', 'StrNextChar', 'StrPCopy',
            'StrPLCopy', 'StrPas', 'StrPos', 'StrRScan', 'StrScan', 'StrToBool',
            'StrToBoolDef', 'StrToCurr', 'StrToCurrDef', 'StrToDate', 'StrToDateDef',
            'StrToDateTime', 'StrToDateTimeDef', 'StrToFloat', 'StrToFloatDef',
            'StrToInt', 'StrToInt64', 'StrToInt64Def', 'StrToIntDef', 'StrToTime',
            'StrToTimeDef', 'StrUpper', 'StringReplace', 'StringToGUID', 'Supports',
            'SysErrorMessage', 'SystemTimeToDateTime', 'TextToFloat', 'Time',
            'TimeStampToDateTime', 'TimeStampToMSecs', 'TimeToStr', 'Trim',
            'TrimLeft', 'TrimRight', 'TryEncodeDate', 'TryEncodeTime',
            'TryFloatToCurr', 'TryFloatToDateTime', 'TryStrToBool', 'TryStrToCurr',
            'TryStrToDate', 'TryStrToDateTime', 'TryStrToFloat', 'TryStrToInt',
            'TryStrToInt64', 'TryStrToTime', 'UnloadPackage', 'UpperCase',
            'WideCompareStr', 'WideCompareText', 'WideFmtStr', 'WideFormat',
            'WideFormatBuf', 'WideLowerCase', 'WideSameStr', 'WideSameText',
            'WideUpperCase', 'Win32Check', 'WrapText',

            'ActivateClassGroup', 'AllocateHwnd', 'BinToHex', 'CheckSynchronize',
            'CollectionsEqual', 'CountGenerations', 'DeallocateHwnd', 'EqualRect',
            'ExtractStrings', 'FindClass', 'FindGlobalComponent', 'GetClass',
            'GroupDescendantsWith', 'HexToBin', 'IdentToInt',
            'InitInheritedComponent', 'IntToIdent', 'InvalidPoint',
            'IsUniqueGlobalComponentName', 'LineStart', 'ObjectBinaryToText',
            'ObjectResourceToText', 'ObjectTextToBinary', 'ObjectTextToResource',
            'PointsEqual', 'ReadComponentRes', 'ReadComponentResEx',
            'ReadComponentResFile', 'Rect', 'RegisterClass', 'RegisterClassAlias',
            'RegisterClasses', 'RegisterComponents', 'RegisterIntegerConsts',
            'RegisterNoIcon', 'RegisterNonActiveX', 'SmallPoint', 'StartClassGroup',
            'TestStreamFormat', 'UnregisterClass', 'UnregisterClasses',
            'UnregisterIntegerConsts', 'UnregisterModuleClasses',
            'WriteComponentResFile',

            'ArcCos', 'ArcCosh', 'ArcCot', 'ArcCotH', 'ArcCsc', 'ArcCscH', 'ArcSec',
            'ArcSecH', 'ArcSin', 'ArcSinh', 'ArcTan2', 'ArcTanh', 'Ceil',
            'CompareValue', 'Cosecant', 'Cosh', 'Cot', 'CotH', 'Cotan', 'Csc', 'CscH',
            'CycleToDeg', 'CycleToGrad', 'CycleToRad', 'DegToCycle', 'DegToGrad',
            'DegToRad', 'DivMod', 'DoubleDecliningBalance', 'EnsureRange', 'Floor',
            'Frexp', 'FutureValue', 'GetExceptionMask', 'GetPrecisionMode',
            'GetRoundMode', 'GradToCycle', 'GradToDeg', 'GradToRad', 'Hypot',
            'InRange', 'IntPower', 'InterestPayment', 'InterestRate',
            'InternalRateOfReturn', 'IsInfinite', 'IsNan', 'IsZero', 'Ldexp', 'LnXP1',
            'Log10', 'Log2', 'LogN', 'Max', 'MaxIntValue', 'MaxValue', 'Mean',
            'MeanAndStdDev', 'Min', 'MinIntValue', 'MinValue', 'MomentSkewKurtosis',
            'NetPresentValue', 'Norm', 'NumberOfPeriods', 'Payment', 'PeriodPayment',
            'Poly', 'PopnStdDev', 'PopnVariance', 'Power', 'PresentValue',
            'RadToCycle', 'RadToDeg', 'RadToGrad', 'RandG', 'RandomRange', 'RoundTo',
            'SLNDepreciation', 'SYDDepreciation', 'SameValue', 'Sec', 'SecH',
            'Secant', 'SetExceptionMask', 'SetPrecisionMode', 'SetRoundMode', 'Sign',
            'SimpleRoundTo', 'SinCos', 'Sinh', 'StdDev', 'Sum', 'SumInt',
            'SumOfSquares', 'SumsAndSquares', 'Tan', 'Tanh', 'TotalVariance',
            'Variance'
            ),
        4 => array(
            'AnsiChar', 'AnsiString', 'Bool', 'Boolean', 'Byte', 'ByteBool', 'Cardinal', 'Char',
            'Comp', 'Currency', 'DWORD', 'Double', 'Extended', 'Int64', 'Integer', 'IUnknown',
            'LongBool', 'LongInt', 'LongWord', 'PAnsiChar', 'PAnsiString', 'PBool', 'PBoolean', 'PByte',
            'PByteArray', 'PCardinal', 'PChar', 'PComp', 'PCurrency', 'PDWORD', 'PDate', 'PDateTime',
            'PDouble', 'PExtended', 'PInt64', 'PInteger', 'PLongInt', 'PLongWord', 'Pointer', 'PPointer',
            'PShortInt', 'PShortString', 'PSingle', 'PSmallInt', 'PString', 'PHandle', 'PVariant', 'PWord',
            'PWordArray', 'PWordBool', 'PWideChar', 'PWideString', 'Real', 'Real48', 'ShortInt', 'ShortString',
            'Single', 'SmallInt', 'String', 'TClass', 'TDate', 'TDateTime', 'TextFile', 'THandle',
            'TObject', 'TTime', 'Variant', 'WideChar', 'WideString', 'Word', 'WordBool'
            ),
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        ),
    'SYMBOLS' => array(
        0 => array('(', ')', '[', ']'),
        1 => array('.', ',', ':', ';'),
        2 => array('@', '^'),
        3 => array('=', '+', '-', '*', '/')
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000000; font-weight: bold;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;',
            4 => 'color: #000066; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #008000; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #ff0000; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000066;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000ff;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;'
            ),
        'REGEXPS' => array(
            0 => 'color: #0000cc;',
            1 => 'color: #ff0000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #000066;',
            1 => 'color: #000066;',
            2 => 'color: #000066;',
            3 => 'color: #000066;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        //Hex numbers
        0 => '(?<!\#)\$[0-9a-fA-F]+(?!\w)',
        //Characters
        1 => '\#(?:\$[0-9a-fA-F]{1,4}|\d{1,5})'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 2,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            3 => array(
                'DISALLOWED_AFTER' => '(?=\s*[(;])'
                )
            )
        )
);

?>
