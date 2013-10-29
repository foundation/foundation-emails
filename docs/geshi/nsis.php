<?php
/*************************************************************************************
 * nsis.php
 * --------
 * Author: deguix (cevo_deguix@yahoo.com.br), Tux (http://tux.a4.cz/)
 * Copyright: (c) 2005 deguix, 2004 Tux (http://tux.a4.cz/), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2005/12/03
 *
 * Nullsoft Scriptable Install System language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/12/03 (2.0.2)
 *   - Updated to NSIS 2.11.
 * 2005/06/17 (2.0.1)
 *   - Updated to NSIS 2.07b0.
 * 2005/04/05 (2.0.0)
 *   - Updated to NSIS 2.06.
 * 2004/11/27 (1.0.2)
 *   - Added support for multiple object splitters
 * 2004/10/27 (1.0.1)
 *   - Added support for URLs
 * 2004/08/05 (1.0.0)
 *   - First Release
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
    'LANG_NAME' => 'NSIS',
    'COMMENT_SINGLE' => array(1 => ';', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'",'"','`'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            '!appendfile', '!addIncludeDir', '!addplugindir', '!cd', '!define', '!delfile', '!echo', '!else',
            '!endif', '!error', '!execute', '!ifdef', '!ifmacrodef', '!ifmacrondef', '!ifndef', '!include',
            '!insertmacro', '!macro', '!macroend', '!packhdr', '!tempfile', '!system', '!undef', '!verbose',
            '!warning'
            ),
        2 => array(
            'AddBrandingImage', 'AllowRootDirInstall', 'AutoCloseWindow', 'BGFont',
            'BGGradient', 'BrandingText', 'Caption', 'ChangeUI', 'CheckBitmap', 'CompletedText', 'ComponentText',
            'CRCCheck', 'DetailsButtonText', 'DirShow', 'DirText', 'DirVar', 'DirVerify', 'FileErrorText',
            'Function', 'FunctionEnd', 'Icon', 'InstallButtonText', 'InstallColors', 'InstallDir',
            'InstallDirRegKey', 'InstProgressFlags', 'InstType', 'LangString', 'LangStringUP', 'LicenseBkColor',
            'LicenseData', 'LicenseForceSelection', 'LicenseLangString', 'LicenseText', 'LoadLanguageFile',
            'MiscButtonText', 'Name', 'OutFile', 'Page', 'PageEx', 'PageExEnd', 'Section',
            'SectionEnd', 'SectionGroup', 'SectionGroupEnd', 'SetCompressor', 'SetFont', 'ShowInstDetails',
            'ShowUninstDetails', 'SilentInstall', 'SilentUnInstall', 'SpaceTexts', 'SubCaption', 'SubSection',
            'SubSectionEnd', 'UninstallButtonText', 'UninstallCaption', 'UninstallIcon', 'UninstallSubCaption',
            'UninstallText', 'UninstPage', 'Var', 'VIAddVersionKey', 'VIProductVersion', 'WindowIcon', 'XPStyle'
            ),
        3 => array(
            'AddSize', 'AllowSkipFiles', 'FileBufSize', 'GetInstDirError', 'PageCallbacks',
            'SectionIn', 'SetCompress', 'SetCompressionLevel', 'SetCompressorDictSize',
            'SetDatablockOptimize', 'SetDateSave', 'SetOverwrite', 'SetPluginUnload'
            ),
        4 => array(
            'Abort', 'BringToFront', 'Call', 'CallInstDLL', 'ClearErrors', 'CopyFiles','CreateDirectory',
            'CreateFont', 'CreateShortCut', 'Delete', 'DeleteINISec', 'DeleteINIStr', 'DeleteRegKey',
            'DeleteRegValue', 'DetailPrint', 'EnableWindow', 'EnumRegKey', 'EnumRegValue', 'Exch', 'Exec',
            'ExecShell', 'ExecWait', 'ExpandEnvStrings', 'File', 'FileClose', 'FileOpen', 'FileRead',
            'FileReadByte', 'FileSeek', 'FileWrite', 'FileWriteByte', 'FindClose', 'FindFirst', 'FindNext',
            'FindWindow', 'FlushINI', 'GetCurInstType', 'GetCurrentAddress', 'GetDlgItem', 'GetDLLVersion',
            'GetDLLVersionLocal', 'GetErrorLevel', 'GetFileTime', 'GetFileTimeLocal', 'GetFullPathName',
            'GetFunctionAddress', 'GetLabelAddress', 'GetTempFileName', 'GetWindowText', 'Goto', 'HideWindow',
            'IfAbort', 'IfErrors', 'IfFileExists', 'IfRebootFlag', 'IfSilent', 'InitPluginsDir', 'InstTypeGetText',
            'InstTypeSetText', 'IntCmp', 'IntCmpU', 'IntFmt', 'IntOp', 'IsWindow', 'LockWindow', 'LogSet', 'LogText',
            'MessageBox', 'Nop', 'Pop', 'Push', 'Quit', 'ReadEnvStr', 'ReadIniStr', 'ReadRegDWORD', 'ReadRegStr',
            'Reboot', 'RegDLL', 'Rename', 'ReserveFile', 'Return', 'RMDir', 'SearchPath', 'SectionGetFlags',
            'SectionGetInstTypes', 'SectionGetSize', 'SectionGetText', 'SectionSetFlags', 'SectionSetInstTypes',
            'SectionSetSize', 'SectionSetText', 'SendMessage', 'SetAutoClose', 'SetBrandingImage', 'SetCtlColors',
            'SetCurInstType', 'SetDetailsPrint', 'SetDetailsView', 'SetErrorLevel', 'SetErrors', 'SetFileAttributes',
            'SetOutPath', 'SetRebootFlag', 'SetShellVarContext', 'SetSilent', 'ShowWindow', 'Sleep', 'StrCmp',
            'StrCpy', 'StrLen', 'UnRegDLL', 'WriteINIStr', 'WriteRegBin', 'WriteRegDWORD', 'WriteRegExpandStr',
            'WriteRegStr', 'WriteUninstaller'
            ),
        5 => array(
            'all', 'alwaysoff', 'ARCHIVE', 'auto', 'both', 'bzip2', 'checkbox', 'components', 'current',
            'custom', 'directory', 'false', 'FILE_ATTRIBUTE_ARCHIVE', 'FILE_ATTRIBUTE_HIDDEN', 'FILE_ATTRIBUTE_NORMAL',
            'FILE_ATTRIBUTE_OFFLINE', 'FILE_ATTRIBUTE_READONLY', 'FILE_ATTRIBUTE_SYSTEM,TEMPORARY',
            'FILE_ATTRIBUTE_TEMPORARY', 'force', 'HIDDEN', 'hide', 'HKCC', 'HKCR', 'HKCU', 'HKDD', 'HKEY_CLASSES_ROOT',
            'HKEY_CURRENT_CONFIG', 'HKEY_CURRENT_USER', 'HKEY_DYN_DATA', 'HKEY_LOCAL_MACHINE', 'HKEY_PERFORMANCE_DATA',
            'HKEY_USERS', 'HKLM', 'HKPD', 'HKU', 'IDABORT', 'IDCANCEL', 'IDIGNORE', 'IDNO', 'IDOK', 'IDRETRY', 'IDYES',
            'ifdiff', 'ifnewer', 'instfiles', 'lastused', 'leave', 'license', 'listonly', 'lzma', 'manual',
            'MB_ABORTRETRYIGNORE', 'MB_DEFBUTTON1', 'MB_DEFBUTTON2', 'MB_DEFBUTTON3', 'MB_DEFBUTTON4',
            'MB_ICONEXCLAMATION', 'MB_ICONINFORMATION', 'MB_ICONQUESTION', 'MB_ICONSTOP', 'MB_OK', 'MB_OKCANCEL',
            'MB_RETRYCANCEL', 'MB_RIGHT', 'MB_SETFOREGROUND', 'MB_TOPMOST', 'MB_YESNO', 'MB_YESNOCANCEL', 'nevershow',
            'none', 'normal', 'off', 'OFFLINE', 'on', 'radiobuttons', 'READONLY', 'RO', 'SHCTX', 'SHELL_CONTEXT', 'show',
            'silent', 'silentlog', 'SW_HIDE', 'SW_SHOWMAXIMIZED', 'SW_SHOWMINIMIZED', 'SW_SHOWNORMAL', 'SYSTEM',
            'textonly', 'true', 'try', 'uninstConfirm', 'zlib'
            ),
        6 => array(
            '/a', '/components', '/COMPONENTSONLYONCUSTOM', '/CUSTOMSTRING', '/e', '/FILESONLY', '/FINAL', '/gray', '/GLOBAL',
            '/ifempty', '/IMGID', '/ITALIC', '/lang', '/NOCUSTOM', '/nonfatal', '/NOUNLOAD', '/oname', '/r', '/REBOOTOK',
            '/RESIZETOFIT', '/SOLID', '/SD', '/SHORT', '/silent', '/STRIKE', '/TIMEOUT', '/TRIMCENTER', '/TRIMLEFT',
            '/TRIMRIGHT', '/UNDERLINE', '/windows', '/x'
            ),
        7 => array(
            '.onGUIEnd', '.onGUIInit', '.onInit', '.onInstFailed', '.onInstSuccess', '.onMouseOverSection',
            '.onRebootFailed', '.onSelChange', '.onUserAbort', '.onVerifyInstDir', 'un.onGUIEnd', 'un.onGUIInit',
            'un.onInit', 'un.onRebootFailed', 'un.onUninstFailed', 'un.onUninstSuccess', 'un.onUserAbort'
            ),
        8 => array(
            'MUI.nsh', '"${NSISDIR}\Contrib\Modern UI\System.nsh"', 'MUI_SYSVERSION', 'MUI_ICON', 'MUI_UNICON',
            'MUI_HEADERIMAGE', 'MUI_HEADERIMAGE_BITMAP', 'MUI_HEADERIMAGE_BITMAP_NOSTRETCH', 'MUI_HEADERIMAGE_BITMAP_RTL',
            'MUI_HEADERIMAGE_BITMAP_RTL_NOSTRETCH', 'MUI_HEADERIMAGE_UNBITMAP', 'MUI_HEADERIMAGE_UNBITMAP_NOSTRETCH',
            'MUI_HEADERIMAGE_UNBITMAP_RTL', 'MUI_HEADERIMAGE_UNBITMAP_RTL_NOSTRETCH', 'MUI_HEADERIMAGE_RIGHT', 'MUI_BGCOLOR',
            'MUI_UI', 'MUI_UI_HEADERIMAGE', 'MUI_UI_HEADERIMAGE_RIGHT', 'MUI_UI_COMPONENTSPAGE_SMALLDESC',
            'MUI_UI_COMPONENTSPAGE_NODESC', 'MUI_WELCOMEFINISHPAGE_BITMAP', 'MUI_WELCOMEFINISHPAGE_BITMAP_NOSTRETCH',
            'MUI_WELCOMEFINISHPAGE_INI', 'MUI_UNWELCOMEFINISHPAGE_BITMAP', 'MUI_UNWELCOMEFINISHPAGE_BITMAP_NOSTRETCH',
            'MUI_UNWELCOMEFINISHPAGE_INI', 'MUI_LICENSEPAGE_BGCOLOR', 'MUI_COMPONENTSPAGE_CHECKBITMAP',
            'MUI_COMPONENTSPAGE_SMALLDESC', 'MUI_COMPONENTSPAGE_NODESC', 'MUI_INSTFILESPAGE_COLORS',
            'MUI_INSTFILESPAGE_PROGRESSBAR', 'MUI_FINISHPAGE_NOAUTOCLOSE', 'MUI_UNFINISHPAGE_NOAUTOCLOSE',
            'MUI_ABORTWARNING', 'MUI_ABORTWARNING_TEXT', 'MUI_UNABORTWARNING', 'MUI_UNABORTWARNING_TEXT',
            'MUI_PAGE_WELCOME', 'MUI_PAGE_LICENSE', 'MUI_PAGE_COMPONENTS', 'MUI_PAGE_DIRECTORY',
            'MUI_PAGE_STARTMENU', 'MUI_PAGE_INSTFILES', 'MUI_PAGE_FINISH', 'MUI_UNPAGE_WELCOME',
            'MUI_UNPAGE_CONFIRM', 'MUI_UNPAGE_LICENSE', 'MUI_UNPAGE_COMPONENTS', 'MUI_UNPAGE_DIRECTORY',
            'MUI_UNPAGE_INSTFILES', 'MUI_UNPAGE_FINISH', 'MUI_PAGE_HEADER_TEXT', 'MUI_PAGE_HEADER_SUBTEXT',
            'MUI_WELCOMEPAGE_TITLE', 'MUI_WELCOMEPAGE_TITLE_3LINES', 'MUI_WELCOMEPAGE_TEXT',
            'MUI_LICENSEPAGE_TEXT_TOP', 'MUI_LICENSEPAGE_TEXT_BOTTOM', 'MUI_LICENSEPAGE_BUTTON',
            'MUI_LICENSEPAGE_CHECKBOX', 'MUI_LICENSEPAGE_CHECKBOX_TEXT', 'MUI_LICENSEPAGE_RADIOBUTTONS',
            'MUI_LICENSEPAGE_RADIOBUTTONS_TEXT_ACCEPT', 'MUI_LICENSEPAGE_RADIOBUTTONS_TEXT_DECLINE',
            'MUI_COMPONENTSPAGE_TEXT_TOP', 'MUI_COMPONENTSPAGE_TEXT_COMPLIST', 'MUI_COMPONENTSPAGE_TEXT_INSTTYPE',
            'MUI_COMPONENTSPAGE_TEXT_DESCRIPTION_TITLE', 'MUI_COMPONENTSPAGE_TEXT_DESCRIPTION_INFO',
            'MUI_DIRECTORYPAGE_TEXT_TOP', 'MUI_DIRECTORYPAGE_TEXT_DESTINATION', 'MUI_DIRECTORYPAGE_VARIABLE',
            'MUI_DIRECTORYPAGE_VERIFYONLEAVE', 'MUI_STARTMENU_WRITE_BEGIN', 'MUI_STARTMENU_WRITE_END',
            'MUI_STARTMENUPAGE_TEXT_TOP', 'MUI_STARTMENUPAGE_TEXT_CHECKBOX', 'MUI_STARTMENUPAGE_DEFAULTFOLDER',
            'MUI_STARTMENUPAGE_NODISABLE', 'MUI_STARTMENUPAGE_REGISTRY_ROOT', 'MUI_STARTMENUPAGE_REGISTRY_KEY',
            'MUI_STARTMENUPAGE_REGISTRY_VALUENAME', 'MUI_INSTFILESPAGE_FINISHHEADER_TEXT',
            'MUI_INSTFILESPAGE_FINISHHEADER_SUBTEXT', 'MUI_INSTFILESPAGE_ABORTHEADER_TEXT',
            'MUI_INSTFILESPAGE_ABORTHEADER_SUBTEXT', 'MUI_FINISHPAGE_TITLE', 'MUI_FINISHPAGE_TITLE_3LINES',
            'MUI_FINISHPAGE_TEXT', 'MUI_FINISHPAGE_TEXT_LARGE', 'MUI_FINISHPAGE_BUTTON',
            'MUI_FINISHPAGE_TEXT_REBOOT', 'MUI_FINISHPAGE_TEXT_REBOOTNOW', 'MUI_FINISHPAGE_TEXT_REBOOTLATER',
            'MUI_FINISHPAGE_RUN', 'MUI_FINISHPAGE_RUN_TEXT', 'MUI_FINISHPAGE_RUN_PARAMETERS',
            'MUI_FINISHPAGE_RUN_NOTCHECKED', 'MUI_FINISHPAGE_RUN_FUNCTION', 'MUI_FINISHPAGE_SHOWREADME',
            'MUI_FINISHPAGE_SHOWREADME_TEXT', 'MUI_FINISHPAGE_SHOWREADME_NOTCHECKED',
            'MUI_FINISHPAGE_SHOWREADME_FUNCTION', 'MUI_FINISHPAGE_LINK', 'MUI_FINISHPAGE_LINK_LOCATION',
            'MUI_FINISHPAGE_LINK_COLOR', 'MUI_FINISHPAGE_NOREBOOTSUPPORT', 'MUI_UNCONFIRMPAGE_TEXT_TOP',
            'MUI_UNCONFIRMPAGE_TEXT_LOCATION', 'MUI_LANGUAGE', 'MUI_LANGDLL_DISPLAY',
            'MUI_LANGDLL_REGISTRY_ROOT', 'MUI_LANGDLL_REGISTRY_KEY', 'MUI_LANGDLL_REGISTRY_VALUENAME',
            'MUI_LANGDLL_WINDOWTITLE', 'MUI_LANGDLL_INFO', 'MUI_LANGDLL_ALWAYSSHOW',
            'MUI_RESERVEFILE_INSTALLOPTIONS', 'MUI_RESERVEFILE_LANGDLL', 'MUI_FUNCTION_DESCRIPTION_BEGIN',
            'MUI_DESCRIPTION_TEXT', 'MUI_FUNCTION_DESCRIPTION_END', 'MUI_INSTALLOPTIONS_EXTRACT',
            'MUI_INSTALLOPTIONS_EXTRACT_AS', 'MUI_HEADER_TEXT', 'MUI_INSTALLOPTIONS_DISPLAY',
            'MUI_INSTALLOPTIONS_INITDIALOG', 'MUI_INSTALLOPTIONS_SHOW',
            'MUI_INSTALLOPTIONS_DISPLAY_RETURN', 'MUI_INSTALLOPTIONS_SHOW_RETURN',
            'MUI_INSTALLOPTIONS_READ', 'MUI_INSTALLOPTIONS_WRITE',
            'MUI_CUSTOMFUNCTION_GUIINIT', 'MUI_CUSTOMFUNCTION_UNGUIINIT',
            'MUI_CUSTOMFUNCTION_ABORT', 'MUI_CUSTOMFUNCTION_UNABORT',
            'MUI_PAGE_CUSTOMFUNCTION_PRE', 'MUI_PAGE_CUSTOMFUNCTION_SHOW', 'MUI_PAGE_CUSTOMFUNCTION_LEAVE',
            'MUI_WELCOMEFINISHPAGE_CUSTOMFUNCTION_INIT'
            ),
        9 => array(
            'LogicLib.nsh', '${LOGICLIB}', 'LOGICLIB_STRCMP', 'LOGICLIB_INT64CMP', 'LOGICLIB_SECTIONCMP', '${If}', '${Unless}',
            '${ElseIf}', '${ElseUnless}', '${Else}', '${EndIf}', '${EndUnless}', '${AndIf}', '${AndUnless}',
            '${OrIf}', '${OrUnless}', '${IfThen}', '${IfCmd}', '${Select}', '${Case2}', '${Case3}',
            '${Case4}', '${Case5}', '${CaseElse}', '${Default}', '${EndSelect}', '${Switch}',
            '${Case}', '${EndSwitch}', '${Do}', '${DoWhile}', '${UntilWhile}', '${Continue}', '${Break}',
            '${Loop}', '${LoopWhile}', '${LoopUntil}', '${While}', '${ExitWhile}', '${EndWhile}', '${For}',
            '${ForEach}', '${ExitFor}', '${Next}', '${Abort}', '${Errors}', '${RebootFlag}', '${Silent}',
            '${FileExists}', '${Cmd}', '${SectionIsSelected}', '${SectionIsSectionGroup}',
            '${SectionIsSectionGroupEnd}', '${SectionIsBold}', '${SectionIsReadOnly}',
            '${SectionIsExpanded}', '${SectionIsPartiallySelected}'
            ),
        10 => array(
            'StrFunc.nsh', '${STRFUNC}', '${StrCase}', '${StrClb}', '${StrIOToNSIS}', '${StrLoc}', '${StrNSISToIO}', '${StrRep}',
            '${StrSort}', '${StrStr}', '${StrStrAdv}', '${StrTok}', '${StrTrimNewLines}'
            ),
        11 => array(
            'UpgradeDLL.nsh', 'UPGRADEDLL_INCLUDED', 'UpgradeDLL'
            ),
        12 => array(
            'Sections.nsh', 'SECTIONS_INCLUDED', '${SF_SELECTED}', '${SF_SECGRP}', '${SF_SUBSEC}', '${SF_SECGRPEND}',
            '${SF_SUBSECEND}', '${SF_BOLD}', '${SF_RO}', '${SF_EXPAND}', '${SF_PSELECTED}', '${SF_TOGGLED}',
            '${SF_NAMECHG}', '${SECTION_OFF}', 'SelectSection', 'UnselectSection', 'ReverseSection',
            'StartRadioButtons', 'RadioButton', 'EndRadioButtons', '${INSTTYPE_0}', '${INSTTYPE_1}', '${INSTTYPE_2}',
            '${INSTTYPE_3}', '${INSTTYPE_4}', '${INSTTYPE_5}', '${INSTTYPE_6}', '${INSTTYPE_7}', '${INSTTYPE_8}',
            '${INSTTYPE_9}', '${INSTTYPE_10}', '${INSTTYPE_11}', '${INSTTYPE_12}', '${INSTTYPE_13}', '${INSTTYPE_14}',
            '${INSTTYPE_15}', '${INSTTYPE_16}', '${INSTTYPE_17}', '${INSTTYPE_18}', '${INSTTYPE_19}', '${INSTTYPE_20}',
            '${INSTTYPE_21}', '${INSTTYPE_22}', '${INSTTYPE_23}', '${INSTTYPE_24}', '${INSTTYPE_25}', '${INSTTYPE_26}',
            '${INSTTYPE_27}', '${INSTTYPE_28}', '${INSTTYPE_29}', '${INSTTYPE_30}', '${INSTTYPE_31}', '${INSTTYPE_32}',
            'SetSectionInInstType', 'ClearSectionInInstType', 'SetSectionFlag', 'ClearSectionFlag', 'SectionFlagIsSet'
            ),
        13 => array(
            'Colors.nsh', 'WHITE', 'BLACK', 'YELLOW', 'RED', 'GREEN', 'BLUE', 'MAGENTA', 'CYAN', 'rgb2hex'
            ),
        14 => array(
            'FileFunc.nsh', '${Locate}', '${GetSize}', '${DriveSpace}', '${GetDrives}', '${GetTime}', '${GetFileAttributes}', '${GetFileVersion}', '${GetExeName}', '${GetExePath}', '${GetParameters}', '${GetOptions}', '${GetRoot}', '${GetParent}', '${GetFileName}', '${GetBaseName}', '${GetFileExt}', '${BannerTrimPath}', '${DirState}', '${RefreshShellIcons}'
            ),
        15 => array(
            'TextFunc.nsh', '${LineFind}', '${LineRead}', '${FileReadFromEnd}', '${LineSum}', '${FileJoin}', '${TextCompare}', '${ConfigRead}', '${ConfigWrite}', '${FileRecode}', '${TrimNewLines}'
            ),
        16 => array(
            'WordFunc.nsh', '${WordFind}', '${WordFind2X}', '${WordFind3X}', '${WordReplace}', '${WordAdd}', '${WordInsert}', '${StrFilter}', '${VersionCompare}', '${VersionConvert}'
            )
        ),
    'SYMBOLS' => array(
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        7 => false,
        8 => false,
        9 => false,
        10 => false,
        11 => false,
        12 => false,
        13 => false,
        14 => false,
        15 => false,
        16 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000066; font-weight:bold;',
            2 => 'color: #000066;',
            3 => 'color: #003366;',
            4 => 'color: #000099;',
            5 => 'color: #ff6600;',
            6 => 'color: #ff6600;',
            7 => 'color: #006600;',
            8 => 'color: #006600;',
            9 => 'color: #006600;',
            10 => 'color: #006600;',
            11 => 'color: #006600;',
            12 => 'color: #006600;',
            13 => 'color: #006600;',
            14 => 'color: #006600;',
            15 => 'color: #006600;',
            16 => 'color: #006600;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #666666; font-style: italic;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #660066; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => ''
            ),
        'STRINGS' => array(
            0 => 'color: #660066;'
            ),
        'NUMBERS' => array(
            0 => ''
            ),
        'METHODS' => array(
            0 => ''
            ),
        'SYMBOLS' => array(
            0 => ''
            ),
        'REGEXPS' => array(
            0 => 'color: #660000;',
            1 => 'color: #660000;',
            2 => 'color: #660000;',
            3 => 'color: #660000;',
            4 => 'color: #660000;',
            5 => 'color: #660000;',
            6 => 'color: #660000;',
            7 => 'color: #000099;',
            8 => 'color: #003399;'
            ),
        'SCRIPT' => array(
            0 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => '',
        9 => '',
        10 => '',
        11 => '',
        12 => '',
        13 => '',
        14 => '',
        15 => '',
        16 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        0 => '\$\$',
        1 => '\$\\r',
        2 => '\$\\n',
        3 => '\$\\t',
        4 => '\$[a-zA-Z0-9_]+',
        5 => '\$\{.{1,256}\}',
        6 => '\$\\\(.{1,256}\\\)',
        7 => array(
            GESHI_SEARCH => '([^:\/\\\*\?\"\<\>(?:<PIPE>)\s]*?)(::)([^:\/\\\*\?\"\<\>(?:<PIPE>)\s]*?)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => '\\2\\3'
            ),
        8 => array(
            GESHI_SEARCH => '([^:\/\\\*\?\"\<\>(?:<PIPE>)\s]*?)(::)([^:\/\\\*\?\"\<\>(?:<PIPE>)]*?\s)',
            GESHI_REPLACE => '\\3',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1\\2',
            GESHI_AFTER => ''
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
