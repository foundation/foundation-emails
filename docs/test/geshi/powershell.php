<?php
/*************************************************************************************
 * powershell.php
 * ---------------------------------
 * Author: Frode Aarebrot (frode@aarebrot.net)
 * Copyright: (c) 2008 Frode Aarebrot (http://www.aarebrot.net)
 * Release Version: 1.0.8.11
 * Date Started: 2008/06/20
 *
 * PowerShell language file for GeSHi.
 *
 * I've tried to make this language file as true to the highlighting in PowerGUI as
 * possible. Unfortunately it's not 100% complete, although it is pretty close.
 *
 * I've included some classes and their members, but there's tons and tons of these.
 * I suggest you add the ones you need yourself. I've included a few Sharepoint ones
 * in this language file.
 *
 * CHANGES
 * -------
 * 2008/06/20 (1.0.8)
 *  -  First Release
 *
 * TODO (updated 2008/06/20)
 * -------------------------
 * - Color text between Cmdlets/Aliases and pipe/end-of-line
 * - Try and get -- and ++ to work in the KEYWORDS array with the other operators
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
    'LANG_NAME' => 'PowerShell',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array('<#' => '#>'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '`',
    'KEYWORDS' => array(
        1 => array(
            // Cmdlets
            'Add-Content', 'Add-History', 'Add-Member', 'Add-PSSnapin', 'Clear-Content', 'Clear-Item',
            'Clear-ItemProperty', 'Clear-Variable', 'Compare-Object', 'ConvertFrom-SecureString',
            'Convert-Path', 'ConvertTo-Html', 'ConvertTo-SecureString', 'Copy-Item', 'Copy-ItemProperty',
            'Export-Alias', 'Export-Clixml', 'Export-Console', 'Export-Csv', 'ForEach-Object',
            'Format-Custom', 'Format-List', 'Format-Table', 'Format-Wide', 'Get-Acl', 'Get-Alias',
            'Get-AuthenticodeSignature', 'Get-ChildItem', 'Get-Command', 'Get-Content', 'Get-Credential',
            'Get-Culture', 'Get-Date', 'Get-EventLog', 'Get-ExecutionPolicy', 'Get-Help', 'Get-History',
            'Get-Host', 'Get-Item', 'Get-ItemProperty', 'Get-Location', 'Get-Member',
            'Get-PfxCertificate', 'Get-Process', 'Get-PSDrive', 'Get-PSProvider', 'Get-PSSnapin',
            'Get-Service', 'Get-TraceSource', 'Get-UICulture', 'Get-Unique', 'Get-Variable',
            'Get-WmiObject', 'Group-Object', 'Import-Alias', 'Import-Clixml', 'Import-Csv',
            'Invoke-Expression', 'Invoke-History', 'Invoke-Item', 'Join-Path', 'Measure-Command',
            'Measure-Object', 'Move-Item', 'Move-ItemProperty', 'New-Alias', 'New-Item',
            'New-ItemProperty', 'New-Object', 'New-PSDrive', 'New-Service', 'New-TimeSpan',
            'New-Variable', 'Out-Default', 'Out-File', 'Out-Host', 'Out-Null', 'Out-Printer',
            'Out-String', 'Pop-Location', 'Push-Location', 'Read-Host', 'Remove-Item',
            'Remove-ItemProperty', 'Remove-PSDrive', 'Remove-PSSnapin', 'Remove-Variable', 'Rename-Item',
            'Rename-ItemProperty', 'Resolve-Path', 'Restart-Service', 'Resume-Service', 'Select-Object',
            'Select-String', 'Set-Acl', 'Set-Alias', 'Set-AuthenticodeSignature', 'Set-Content',
            'Set-Date', 'Set-ExecutionPolicy', 'Set-Item', 'Set-ItemProperty', 'Set-Location',
            'Set-PSDebug', 'Set-Service', 'Set-TraceSource', 'Set-Variable', 'Sort-Object', 'Split-Path',
            'Start-Service', 'Start-Sleep', 'Start-Transcript', 'Stop-Process', 'Stop-Service',
            'Stop-Transcript', 'Suspend-Service', 'Tee-Object', 'Test-Path', 'Trace-Command',
            'Update-FormatData', 'Update-TypeData', 'Where-Object', 'Write-Debug', 'Write-Error',
            'Write-Host', 'Write-Output', 'Write-Progress', 'Write-Verbose', 'Write-Warning'
            ),
        2 => array(
            // Aliases
            'ac', 'asnp', 'clc', 'cli', 'clp', 'clv', 'cpi', 'cpp', 'cvpa', 'diff', 'epal', 'epcsv', 'fc',
            'fl', 'ft', 'fw', 'gal', 'gc', 'gci', 'gcm', 'gdr', 'ghy', 'gi', 'gl', 'gm',
            'gp', 'gps', 'group', 'gsv', 'gsnp', 'gu', 'gv', 'gwmi', 'iex', 'ihy', 'ii', 'ipal', 'ipcsv',
            'mi', 'mp', 'nal', 'ndr', 'ni', 'nv', 'oh', 'rdr', 'ri', 'rni', 'rnp', 'rp', 'rsnp', 'rv',
            'rvpa', 'sal', 'sasv', 'sc', 'select', 'si', 'sl', 'sleep', 'sort', 'sp', 'spps', 'spsv', 'sv',
            'tee', 'write', 'cat', 'cd', 'clear', 'cp', 'h', 'history', 'kill', 'lp', 'ls',
            'mount', 'mv', 'popd', 'ps', 'pushd', 'pwd', 'r', 'rm', 'rmdir', 'echo', 'cls', 'chdir',
            'copy', 'del', 'dir', 'erase', 'move', 'rd', 'ren', 'set', 'type'
            ),
        3 => array(
            // Reserved words
            'break', 'continue', 'do', 'for', 'foreach', 'while', 'if', 'switch', 'until', 'where',
            'function', 'filter', 'else', 'elseif', 'in', 'return', 'param', 'throw', 'trap'
            ),
        4 => array(
            // Operators
            '-eq', '-ne', '-gt', '-ge', '-lt', '-le', '-ieq', '-ine', '-igt', '-ige', '-ilt', '-ile',
            '-ceq', '-cne', '-cgt', '-cge', '-clt', '-cle', '-like', '-notlike', '-match', '-notmatch',
            '-ilike', '-inotlike', '-imatch', '-inotmatch', '-clike', '-cnotlike', '-cmatch', '-cnotmatch',
            '-contains', '-notcontains', '-icontains', '-inotcontains', '-ccontains', '-cnotcontains',
            '-isnot', '-is', '-as', '-replace', '-ireplace', '-creplace', '-and', '-or', '-band', '-bor',
            '-not', '-bnot', '-f', '-casesensitive', '-exact', '-file', '-regex', '-wildcard'
            ),
        5 => array(
            // Options
            '-Year', '-Wrap', '-Word', '-Width', '-WhatIf', '-Wait', '-View', '-Verbose', '-Verb',
            '-Variable', '-ValueOnly', '-Value', '-Unique', '-UFormat', '-TypeName', '-Trace', '-TotalCount',
            '-Title', '-TimestampServer', '-TargetObject', '-Syntax', '-SyncWindow', '-Sum', '-String',
            '-Strict', '-Stream', '-Step', '-Status', '-Static', '-StartupType', '-Start', '-StackName',
            '-Stack', '-SourceId', '-SimpleMatch', '-ShowError', '-Separator', '-SecureString', '-SecureKey',
            '-SecondValue', '-SecondsRemaining', '-Seconds', '-Second', '-Scope', '-Root', '-Role',
            '-Resolve', '-RemoveListener', '-RemoveFileListener', '-Registered', '-ReferenceObject',
            '-Recurse', '-RecommendedAction', '-ReadCount', '-Quiet', '-Query', '-Qualifier', '-PSSnapin',
            '-PSProvider', '-PSHost', '-PSDrive', '-PropertyType', '-Property', '-Prompt', '-Process',
            '-PrependPath', '-PercentComplete', '-Pattern', '-PathType', '-Path', '-PassThru', '-ParentId',
            '-Parent', '-Parameter', '-Paging', '-OutVariable', '-OutBuffer', '-Option', '-OnType', '-Off',
            '-Object', '-Noun', '-NoTypeInformation', '-NoQualifier', '-NoNewline', '-NoElement',
            '-NoClobber', '-NewName', '-Newest', '-Namespace', '-Name', '-Month', '-Minutes', '-Minute',
            '-Minimum', '-Milliseconds', '-Message', '-MemberType', '-Maximum', '-LogName', '-LiteralPath',
            '-LiteralName', '-ListenerOption', '-List', '-Line', '-Leaf', '-Last', '-Key', '-ItemType',
            '-IsValid', '-IsAbsolute', '-InputObject', '-IncludeEqual', '-IncludeChain', '-Include',
            '-IgnoreWhiteSpace', '-Id', '-Hours', '-Hour', '-HideTableHeaders', '-Head', '-GroupBy',
            '-Functionality', '-Full', '-Format', '-ForegroundColor', '-Force', '-First', '-FilterScript',
            '-Filter', '-FilePath', '-Expression', '-ExpandProperty', '-Expand', '-ExecutionPolicy',
            '-ExcludeProperty', '-ExcludeDifferent', '-Exclude', '-Exception', '-Examples', '-ErrorVariable',
            '-ErrorRecord', '-ErrorId', '-ErrorAction', '-End', '-Encoding', '-DisplayName', '-DisplayHint',
            '-DisplayError', '-DifferenceObject', '-Detailed', '-Destination', '-Description', '-Descending',
            '-Depth', '-DependsOn', '-Delimiter', '-Debugger', '-Debug', '-Days', '-Day', '-Date',
            '-CurrentOperation', '-Culture', '-Credential', '-Count', '-Container', '-Confirm',
            '-ComputerName', '-Component', '-Completed', '-ComObject', '-CommandType', '-Command',
            '-Column', '-Class', '-ChildPath', '-Character', '-Certificate', '-CategoryTargetType',
            '-CategoryTargetName', '-CategoryReason', '-CategoryActivity', '-Category', '-CaseSensitive',
            '-Body', '-BinaryPathName', '-Begin', '-BackgroundColor', '-Average', '-AutoSize', '-Audit',
            '-AsString', '-AsSecureString', '-AsPlainText', '-As', '-ArgumentList', '-AppendPath', '-Append',
            '-Adjust', '-Activity', '-AclObject'
            ),
        6 => array(
            '_','args','DebugPreference','Error','ErrorActionPreference',
            'foreach','Home','Host','Input','LASTEXITCODE','MaximumAliasCount',
            'MaximumDriveCount','MaximumFunctionCount','MaximumHistoryCount',
            'MaximumVariableCount','OFS','PsHome',
            'ReportErrorShowExceptionClass','ReportErrorShowInnerException',
            'ReportErrorShowSource','ReportErrorShowStackTrace',
            'ShouldProcessPreference','ShouldProcessReturnPreference',
            'StackTrace','VerbosePreference','WarningPreference','PWD'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '=', '<', '>', '@', '|', '&', ',', '?',
        '+=', '-=', '*=', '/=', '%=', '*', '/', '%', '!', '+', '-', '++', '--'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #008080; font-weight: bold;',
            2 => 'color: #008080; font-weight: bold;',
            3 => 'color: #0000FF;',
            4 => 'color: #FF0000;',
            5 => 'color: #008080; font-style: italic;',
            6 => 'color: #000080;'
            ),
        'COMMENTS' => array(
            1 => 'color: #008000;',
            'MULTI' => 'color: #008000;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #008080; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #800000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #804000;'
            ),
        'METHODS' => array(
            0 => 'color: pink;'
            ),
        'SYMBOLS' => array(
            0 => 'color: pink;'
            ),
        'REGEXPS' => array(
            0 => 'color: #800080;',
            3 => 'color: #008080;',
            4 => 'color: #008080;',
            5 => 'color: #800000;',
            6 => 'color: #000080;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => 'about:blank',
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        // special after pipe
        3 => array(
            GESHI_SEARCH => '(\[)(int|long|string|char|bool|byte|double|decimal|float|single|regex|array|xml|scriptblock|switch|hashtable|type|ref|psobject|wmi|wmisearcher|wmiclass|object)((\[.*\])?\])',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => 'si',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => '\3'
            ),
        // Classes
        4 => array(
            GESHI_SEARCH => '(\[)(System\.Reflection\.Assembly|System\.Net\.CredentialCache|Microsoft\.SharePoint\.SPFileLevel|Microsoft\.SharePoint\.Publishing\.PublishingWeb|Microsoft\.SharePoint\.Publishing|Microsoft\.SharePoint\.SPWeb)(\])',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => 'i',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => '\3'
            ),
        // Members
        // There's about a hundred million of these, add the ones you need as you need them
        5 => array (
            GESHI_SEARCH => '(::)(ReflectionOnlyLoadFrom|ReflectionOnlyLoad|ReferenceEquals|LoadWithPartialName|LoadFrom|LoadFile|Load|GetExecutingAssembly|GetEntryAssembly|GetCallingAssembly|GetAssembly|Equals|DefaultNetworkCredentials|DefaultCredentials|CreateQualifiedName|Checkout|Draft|Published|IsPublishingWeb)',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => ''
            ),
        // Special variables
        6 => array(
            GESHI_SEARCH => '(\$)(\$[_\^]?|\?)(?!\w)',
            GESHI_REPLACE => '\1\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        // variables
        //BenBE: Please note that changes here and in Keyword group 6 have to be synchronized in order to work properly.
        //This Regexp must only match, if keyword group 6 doesn't. If this assumption fails
        //Highlighting of the keywords will be incomplete or incorrect!
        0 => "(?<!\\\$|>)[\\\$](\w+)(?=[^|\w])",
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            4 => array(
                'DISALLOWED_AFTER' => '(?![a-zA-Z])',
                'DISALLOWED_BEFORE' => ''
                ),
            6 => array(
                'DISALLOWED_BEFORE' => '(?<!\$>)\$'
                )
            )
        )
);

?>