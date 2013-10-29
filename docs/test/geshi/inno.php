<?php
/*************************************************************************************
 * Inno.php
 * ----------
 * Author: Thomas Klingler (hotline@theratech.de) based on delphi.php from J�rja Norbert (jnorbi@vipmail.hu)
 * Copyright: (c) 2004 J�rja Norbert, Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2005/07/29
 *
 * Inno Script language inkl. Delphi (Object Pascal) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/09/03
 *   -  First Release
 *
 * TODO (updated 2005/07/27)
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
    'LANG_NAME' => 'Inno',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('(*' => '*)'),
    'CASE_KEYWORDS' => 0,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'Setup','Types','Components','Tasks','Dirs','Files','Icons','INI',
            'InstallDelete','Languages','Messages','CustomMessage',
            'LangOptions','Registry','RUN','UninstallDelete','UninstallRun',
            'app','win','sys','syswow64','src','sd','pf','pf32','pf64','cf',
            'cf32','cf64','tmp','fonts','dao','group','localappdata','sendto',
            'userappdata','commonappdata','userdesktop','commondesktop',
            'userdocs','commondocs','userfavorites','commonfavorites',
            'userprograms','commonprograms','userstartmenu','commonstartmenu',
            'userstartup','commonstartup','usertemplates','commontemplates'
            ),
        2 => array(
            'nil', 'false', 'true', 'var', 'type', 'const','And', 'Array', 'As', 'Begin', 'Case', 'Class', 'Constructor', 'Destructor', 'Div', 'Do', 'DownTo', 'Else',
            'End', 'Except', 'File', 'Finally', 'For', 'Function', 'Goto', 'If', 'Implementation', 'In', 'Inherited', 'Interface',
            'Is', 'Mod', 'Not', 'Object', 'Of', 'On', 'Or', 'Packed', 'Procedure', 'Property', 'Raise', 'Record',
            'Repeat', 'Set', 'Shl', 'Shr', 'Then', 'ThreadVar', 'To', 'Try', 'Unit', 'Until', 'Uses', 'While', 'With', 'Xor',

            'HKCC','HKCR','HKCU','HKLM','HKU','alwaysoverwrite','alwaysskipifsameorolder','append',
            'binary','classic','closeonexit','comparetimestamp','confirmoverwrite',
            'createkeyifdoesntexist','createonlyiffileexists','createvalueifdoesntexist',
            'deleteafterinstall','deletekey','deletevalue','dirifempty','dontcloseonexit',
            'dontcopy','dontcreatekey','disablenouninstallwarning','dword','exclusive','expandsz',
            'external','files','filesandordirs','fixed','fontisnttruetype','ignoreversion','iscustom','isreadme',
            'modern','multisz','new','noerror','none','normal','nowait','onlyifdestfileexists',
            'onlyifdoesntexist','onlyifnewer','overwrite','overwritereadonly','postinstall',
            'preservestringtype','promptifolder','regserver','regtypelib','restart','restartreplace',
            'runhidden','runmaximized','runminimized','sharedfile','shellexec','showcheckbox',
            'skipifnotsilent','skipifsilent','silent','skipifdoesntexist',
            'skipifsourcedoesntexist','sortfilesbyextension','unchecked','uninsalwaysuninstall',
            'uninsclearvalue','uninsdeleteentry','uninsdeletekey','uninsdeletekeyifempty',
            'uninsdeletesection','uninsdeletesectionifempty','uninsdeletevalue',
            'uninsneveruninstall','useapppaths','verysilent','waituntilidle'
            ),
        3 => array(
            'Abs', 'Addr', 'AnsiCompareStr', 'AnsiCompareText', 'AnsiContainsStr', 'AnsiEndsStr', 'AnsiIndexStr', 'AnsiLeftStr',
            'AnsiLowerCase', 'AnsiMatchStr', 'AnsiMidStr', 'AnsiPos', 'AnsiReplaceStr', 'AnsiReverseString', 'AnsiRightStr',
            'AnsiStartsStr', 'AnsiUpperCase', 'ArcCos', 'ArcSin', 'ArcTan', 'Assigned', 'BeginThread', 'Bounds', 'CelsiusToFahrenheit',
            'ChangeFileExt', 'Chr', 'CompareStr', 'CompareText', 'Concat', 'Convert', 'Copy', 'Cos', 'CreateDir', 'CurrToStr',
            'CurrToStrF', 'Date', 'DateTimeToFileDate', 'DateTimeToStr', 'DateToStr', 'DayOfTheMonth', 'DayOfTheWeek', 'DayOfTheYear',
            'DayOfWeek', 'DaysBetween', 'DaysInAMonth', 'DaysInAYear', 'DaySpan', 'DegToRad', 'DeleteFile', 'DiskFree', 'DiskSize',
            'DupeString', 'EncodeDate', 'EncodeDateTime', 'EncodeTime', 'EndOfADay', 'EndOfAMonth', 'Eof', 'Eoln', 'Exp', 'ExtractFileDir',
            'ExtractFileDrive', 'ExtractFileExt', 'ExtractFileName', 'ExtractFilePath', 'FahrenheitToCelsius', 'FileAge',
            'FileDateToDateTime', 'FileExists', 'FilePos', 'FileSearch', 'FileSetDate', 'FileSize', 'FindClose', 'FindCmdLineSwitch',
            'FindFirst', 'FindNext', 'FloatToStr', 'FloatToStrF', 'Format', 'FormatCurr', 'FormatDateTime', 'FormatFloat', 'Frac',
            'GetCurrentDir', 'GetLastError', 'GetMem', 'High', 'IncDay', 'IncMinute', 'IncMonth', 'IncYear', 'InputBox',
            'InputQuery', 'Int', 'IntToHex', 'IntToStr', 'IOResult', 'IsInfinite', 'IsLeapYear', 'IsMultiThread', 'IsNaN',
            'LastDelimiter', 'Length', 'Ln', 'Lo', 'Log10', 'Low', 'LowerCase', 'Max', 'Mean', 'MessageDlg', 'MessageDlgPos',
            'MonthOfTheYear', 'Now', 'Odd', 'Ord', 'ParamCount', 'ParamStr', 'Pi', 'Point', 'PointsEqual', 'Pos', 'Pred',
            'Printer', 'PromptForFileName', 'PtInRect', 'RadToDeg', 'Random', 'RandomRange', 'RecodeDate', 'RecodeTime', 'Rect',
            'RemoveDir', 'RenameFile', 'Round', 'SeekEof', 'SeekEoln', 'SelectDirectory', 'SetCurrentDir', 'Sin', 'SizeOf',
            'Slice', 'Sqr', 'Sqrt', 'StringOfChar', 'StringReplace', 'StringToWideChar', 'StrToCurr', 'StrToDate', 'StrToDateTime',
            'StrToFloat', 'StrToInt', 'StrToInt64', 'StrToInt64Def', 'StrToIntDef', 'StrToTime', 'StuffString', 'Succ', 'Sum', 'Tan',
            'Time', 'TimeToStr', 'Tomorrow', 'Trunc', 'UpCase', 'UpperCase', 'VarType', 'WideCharToString', 'WrapText', 'Yesterday',
            'Append', 'AppendStr', 'Assign', 'AssignFile', 'AssignPrn', 'Beep', 'BlockRead', 'BlockWrite', 'Break',
            'ChDir', 'Close', 'CloseFile', 'Continue', 'DateTimeToString', 'Dec', 'DecodeDate', 'DecodeDateTime',
            'DecodeTime', 'Delete', 'Dispose', 'EndThread', 'Erase', 'Exclude', 'Exit', 'FillChar', 'Flush', 'FreeAndNil',
            'FreeMem', 'GetDir', 'GetLocaleFormatSettings', 'Halt', 'Inc', 'Include', 'Insert', 'MkDir', 'Move', 'New',
            'ProcessPath', 'Randomize', 'Read', 'ReadLn', 'ReallocMem', 'Rename', 'ReplaceDate', 'ReplaceTime',
            'Reset', 'ReWrite', 'RmDir', 'RunError', 'Seek', 'SetLength', 'SetString', 'ShowMessage', 'ShowMessageFmt',
            'ShowMessagePos', 'Str', 'Truncate', 'Val', 'Write', 'WriteLn',

            'AdminPrivilegesRequired','AfterInstall','AllowCancelDuringInstall','AllowNoIcons','AllowRootDirectory','AllowUNCPath','AlwaysRestart','AlwaysShowComponentsList','AlwaysShowDirOnReadyPage','AlwaysShowGroupOnReadyPage ','AlwaysUsePersonalGroup','AppComments','AppContact','AppCopyright','AppendDefaultDirName',
            'AppendDefaultGroupName','AppId','AppModifyPath','AppMutex','AppName','AppPublisher',
            'AppPublisherURL','AppReadmeFile','AppSupportURL','AppUpdatesURL','AppVerName','AppVersion',
            'Attribs','BackColor','BackColor2','BackColorDirection','BackSolid','BeforeInstall',
            'ChangesAssociations','ChangesEnvironment','Check','CodeFile','Comment','Compression','CopyMode',
            'CreateAppDir','CreateUninstallRegKey','DefaultDirName','DefaultGroupName',
            'DefaultUserInfoName','DefaultUserInfoOrg','DefaultUserInfoSerial',
            'Description','DestDir','DestName','DirExistsWarning',
            'DisableDirPage','DisableFinishedPage',
            'DisableProgramGroupPage','DisableReadyMemo','DisableReadyPage',
            'DisableStartupPrompt','DiskClusterSize','DiskSliceSize','DiskSpaceMBLabel',
            'DiskSpanning','DontMergeDuplicateFiles','EnableDirDoesntExistWarning','Encryption',
            'Excludes','ExtraDiskSpaceRequired','Filename','Flags','FlatComponentsList','FontInstall',
            'GroupDescription','HotKey','IconFilename','IconIndex','InfoAfterFile','InfoBeforeFile',
            'InternalCompressLevel','Key','LanguageDetectionMethod',
            'LicenseFile','MergeDuplicateFiles','MessagesFile','MinVersion','Name',
            'OnlyBelowVersion','OutputBaseFilename','OutputManifestFile','OutputDir',
            'Parameters','Password','Permissions','PrivilegesRequired','ReserveBytes',
            'RestartIfNeededByRun','Root','RunOnceId','Section','SetupIconFile',
            'ShowComponentSizes','ShowLanguageDialog','ShowTasksTreeLines','SlicesPerDisk',
            'SolidCompression','Source','SourceDir','StatusMsg','Subkey',
            'TimeStampRounding','TimeStampsInUTC','TouchDate','TouchTime','Type',
            'UninstallDisplayIcon','UninstallDisplayName','UninstallFilesDir','UninstallIconFile',
            'UninstallLogMode','UninstallRestartComputer','UninstallStyle','Uninstallable',
            'UpdateUninstallLogAppName','UsePreviousAppDir','UsePreviousGroup',
            'UsePreviousTasks','UsePreviousSetupType','UsePreviousUserInfo',
            'UserInfoPage','UseSetupLdr','ValueData','ValueName','ValueType',
            'VersionInfoVersion','VersionInfoCompany','VersionInfoDescription','VersionInfoTextVersion',
            'WindowResizable','WindowShowCaption','WindowStartMaximized',
            'WindowVisible','WizardImageBackColor','WizardImageFile','WizardImageStretch','WizardSmallImageBackColor','WizardSmallImageFile','WizardStyle','WorkingDir'
            ),
        4 => array(
            'AnsiChar', 'AnsiString', 'Boolean', 'Byte', 'Cardinal', 'Char', 'Comp', 'Currency', 'Double', 'Extended',
            'Int64', 'Integer', 'LongInt', 'LongWord', 'PAnsiChar', 'PAnsiString', 'PChar', 'PCurrency', 'PDateTime',
            'PExtended', 'PInt64', 'Pointer', 'PShortString', 'PString', 'PVariant', 'PWideChar', 'PWideString',
            'Real', 'Real48', 'ShortInt', 'ShortString', 'Single', 'SmallInt', 'String', 'TBits', 'TConvType', 'TDateTime',
            'Text', 'TextFile', 'TFloatFormat', 'TFormatSettings', 'TList', 'TObject', 'TOpenDialog', 'TPoint',
            'TPrintDialog', 'TRect', 'TReplaceFlags', 'TSaveDialog', 'TSearchRec', 'TStringList', 'TSysCharSet',
            'TThreadFunc', 'Variant', 'WideChar', 'WideString', 'Word'
            ),
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '@', '%', '&', '*', '|', '/', '<', '>'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000000; font-weight: bold;',/*bold Black*/
            2 => 'color: #000000;font-style: italic;',/*Black*/
            3 => 'color: #0000FF;',/*blue*/
            4 => 'color: #CC0000;'/*red*/
            ),
        'COMMENTS' => array(
            1 => 'color: #33FF00; font-style: italic;',
            'MULTI' => 'color: #33FF00; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
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
            1 => 'color: #006600;'
            ),
        'REGEXPS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000; font-weight: bold;',
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
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
