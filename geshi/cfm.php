<?php
/*************************************************************************************
 * cfm.php
 * -------
 * Author: Diego
 * Copyright: (c) 2006 Diego
 * Release Version: 1.0.8.11
 * Date Started: 2006/02/25
 *
 * ColdFusion language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2006/02/25 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2006/02/25)
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
    'LANG_NAME' => 'ColdFusion',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        /* CFM Tags */
        1 => array(
            'cfabort', 'cfapplet', 'cfapplication', 'cfargument', 'cfassociate',
            'cfbreak', 'cfcache', 'cfcase', 'cfcatch', 'cfchart', 'cfchartdata',
            'cfchartseries', 'cfcol', 'cfcollection', 'cfcomponent',
            'cfcontent', 'cfcookie', 'cfdefaultcase', 'cfdirectory',
            'cfdocument', 'cfdocumentitem', 'cfdocumentsection', 'cfdump',
            'cfelse', 'cfelseif', 'cferror', 'cfexecute', 'cfexit', 'cffile',
            'cfflush', 'cfform', 'cfformgroup', 'cfformitem', 'cfftp',
            'cffunction', 'cfgrid', 'cfgridcolumn', 'cfgridrow', 'cfgridupdate',
            'cfheader', 'cfhtmlhead', 'cfhttp', 'cfhttpparam', 'cfif',
            'cfimport', 'cfinclude', 'cfindex', 'cfinput', 'cfinsert',
            'cfinvoke', 'cfinvokeargument', 'cfldap', 'cflocation', 'cflock',
            'cflog', 'cflogin', 'cfloginuser', 'cflogout', 'cfloop', 'cfmail',
            'cfmailparam', 'cfmailpart', 'cfmodule', 'cfNTauthenticate',
            'cfobject', 'cfobjectcache', 'cfoutput', 'cfparam', 'cfpop',
            'cfprocessingdirective', 'cfprocparam',
            'cfprocresult', 'cfproperty', 'cfquery', 'cfqueryparam',
            'cfregistry', 'cfreport', 'cfreportparam', 'cfrethrow', 'cfreturn',
            'cfsavecontent', 'cfschedule', 'cfscript', 'cfsearch', 'cfselect',
            'cfset', 'cfsetting', 'cfsilent', 'cfstoredproc',
            'cfswitch', 'cftable', 'cftextarea', 'cfthrow', 'cftimer',
            'cftrace', 'cftransaction', 'cftree', 'cftreeitem', 'cftry',
            'cfupdate', 'cfwddx'
            ),
        /* HTML Tags */
        2 => array(
            'a', 'abbr', 'acronym', 'address', 'applet',

            'base', 'basefont', 'bdo', 'big', 'blockquote', 'body', 'br', 'button', 'b',

            'caption', 'center', 'cite', 'code', 'colgroup', 'col',

            'dd', 'del', 'dfn', 'dir', 'div', 'dl', 'dt',

            'em',

            'fieldset', 'font', 'form', 'frame', 'frameset',

            'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html',

            'iframe', 'ilayer', 'img', 'input', 'ins', 'isindex', 'i',

            'kbd',

            'label', 'legend', 'link', 'li',

            'map', 'meta',

            'noframes', 'noscript',

            'object', 'ol', 'optgroup', 'option',

            'param', 'pre', 'p',

            'q',

            'samp', 'script', 'select', 'small', 'span', 'strike', 'strong', 'style', 'sub', 'sup', 's',

            'table', 'tbody', 'td', 'textarea', 'text', 'tfoot', 'thead', 'th', 'title', 'tr', 'tt',

            'ul', 'u',

            'var',
            ),
        /* HTML attributes */
        3 => array(
            'abbr', 'accept-charset', 'accept', 'accesskey', 'action', 'align', 'alink', 'alt', 'archive', 'axis',
            'background', 'bgcolor', 'border',
            'cellpadding', 'cellspacing', 'char', 'charoff', 'charset', 'checked', 'cite', 'class', 'classid', 'clear', 'code', 'codebase', 'codetype', 'color', 'cols', 'colspan', 'compact', 'content', 'coords',
            'data', 'datetime', 'declare', 'defer', 'dir', 'disabled',
            'enctype',
            'face', 'for', 'frame', 'frameborder',
            'headers', 'height', 'href', 'hreflang', 'hspace', 'http-equiv',
            'id', 'ismap',
            'label', 'lang', 'language', 'link', 'longdesc',
            'marginheight', 'marginwidth', 'maxlength', 'media', 'method', 'multiple',
            'name', 'nohref', 'noresize', 'noshade', 'nowrap',
            'object', 'onblur', 'onchange', 'onclick', 'ondblclick', 'onfocus', 'onkeydown', 'onkeypress', 'onkeyup', 'onload', 'onmousedown', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onreset', 'onselect', 'onsubmit', 'onunload',
            'profile', 'prompt',
            'readonly', 'rel', 'rev', 'rowspan', 'rows', 'rules',
            'scheme', 'scope', 'scrolling', 'selected', 'shape', 'size', 'span', 'src', 'standby', 'start', 'style', 'summary',
            'tabindex', 'target', 'text', 'title', 'type',
            'usemap',
            'valign', 'value', 'valuetype', 'version', 'vlink', 'vspace',
            'width'
            ),
        /* CFM Script delimeters */
        4 => array(
            'var', 'function', 'while', 'if','else'
            ),
        /* CFM Functions */
        5 => array(
            'Abs', 'GetFunctionList', 'LSTimeFormat','ACos','GetGatewayHelper','LTrim','AddSOAPRequestHeader','GetHttpRequestData',
            'Max','AddSOAPResponseHeader','GetHttpTimeString','Mid','ArrayAppend','GetLocale','Min','ArrayAvg','GetLocaleDisplayName',
            'Minute','ArrayClear','GetMetaData','Month','ArrayDeleteAt','GetMetricData','MonthAsString','ArrayInsertAt','GetPageContext',
            'Now','ArrayIsEmpty','GetProfileSections','NumberFormat','ArrayLen','GetProfileString','ParagraphFormat','ArrayMax',
            'GetLocalHostIP','ParseDateTime','ArrayMin','GetSOAPRequest','Pi','ArrayNew','GetSOAPRequestHeader','PreserveSingleQuotes',
            'ArrayPrepend','GetSOAPResponse','Quarter','ArrayResize','GetSOAPResponseHeader','QueryAddColumn','ArraySet',
            'GetTempDirectory','QueryAddRow','ArraySort','QueryNew','ArraySum','GetTempFile','QuerySetCell',
            'ArraySwap','GetTickCount','QuotedValueList','ArrayToList','GetTimeZoneInfo','Rand','Asc','GetToken','Randomize',
            'ASin','Hash','RandRange','Atn','Hour','REFind','BinaryDecode','HTMLCodeFormat','REFindNoCase','BinaryEncode',
            'HTMLEditFormat','ReleaseComObject','BitAnd','IIf','RemoveChars','BitMaskClear','IncrementValue','RepeatString',
            'BitMaskRead','InputBaseN','Replace','BitMaskSet','Insert','ReplaceList','BitNot','Int','ReplaceNoCase','BitOr',
            'IsArray','REReplace','BitSHLN','IsBinary','REReplaceNoCase','BitSHRN','IsBoolean','Reverse','BitXor','IsCustomFunction',
            'Right','Ceiling','IsDate','RJustify','CharsetDecode','IsDebugMode','Round','CharsetEncode','IsDefined','RTrim',
            'Chr','IsLeapYear','Second','CJustify','IsLocalHost','SendGatewayMessage','Compare','IsNumeric','SetEncoding',
            'CompareNoCase','IsNumericDate','SetLocale','Cos','IsObject','SetProfileString','CreateDate','IsQuery','SetVariable',
            'CreateDateTime','IsSimpleValue','Sgn','CreateObject','IsSOAPRequest','Sin','CreateODBCDate','IsStruct','SpanExcluding',
            'CreateODBCDateTime','IsUserInRole','SpanIncluding','CreateODBCTime','IsValid','Sqr','CreateTime','IsWDDX','StripCR',
            'CreateTimeSpan','IsXML','StructAppend','CreateUUID','IsXmlAttribute','StructClear','DateAdd','IsXmlDoc','StructCopy',
            'DateCompare','IsXmlElem','StructCount','DateConvert','IsXmlNode','StructDelete','DateDiff','IsXmlRoot','StructFind',
            'DateFormat','JavaCast','StructFindKey','DatePart','JSStringFormat','StructFindValue','Day','LCase','StructGet',
            'DayOfWeek','Left','StructInsert','DayOfWeekAsString','Len','StructIsEmpty','DayOfYear','ListAppend','StructKeyArray',
            'DaysInMonth','ListChangeDelims','StructKeyExists','DaysInYear','ListContains','StructKeyList','DE','ListContainsNoCase',
            'StructNew','DecimalFormat','ListDeleteAt','StructSort','DecrementValue','ListFind','StructUpdate','Decrypt','ListFindNoCase',
            'Tan','DecryptBinary','ListFirst','TimeFormat','DeleteClientVariable','ListGetAt','ToBase64','DirectoryExists',
            'ListInsertAt','ToBinary','DollarFormat','ListLast','ToScript','Duplicate','ListLen','ToString','Encrypt','ListPrepend',
            'Trim','EncryptBinary','ListQualify','UCase','Evaluate','ListRest','URLDecode','Exp','ListSetAt','URLEncodedFormat',
            'ExpandPath','ListSort','URLSessionFormat','FileExists','ListToArray','Val','Find','ListValueCount','ValueList',
            'FindNoCase','ListValueCountNoCase','Week','FindOneOf','LJustify','Wrap','FirstDayOfMonth','Log','WriteOutput',
            'Fix','Log10','XmlChildPos','FormatBaseN','LSCurrencyFormat','XmlElemNew','GetAuthUser','LSDateFormat','XmlFormat',
            'GetBaseTagData','LSEuroCurrencyFormat','XmlGetNodeType','GetBaseTagList','LSIsCurrency','XmlNew','GetBaseTemplatePath',
            'LSIsDate','XmlParse','GetClientVariablesList','LSIsNumeric','XmlSearch','GetCurrentTemplatePath','LSNumberFormat',
            'XmlTransform','GetDirectoryFromPath','LSParseCurrency','XmlValidate','GetEncoding','LSParseDateTime','Year',
            'GetException','LSParseEuroCurrency','YesNoFormat','GetFileFromPath','LSParseNumber'
            ),
        /* CFM Attributes */
        6 => array(
            'dbtype','connectstring','datasource','username','password','query','delimeter','description','required','hint','default','access','from','to','list','index'
            ),
        7 => array(
            'EQ', 'GT', 'LT', 'GTE', 'LTE', 'IS', 'LIKE', 'NEQ'
            )
        ),
    'SYMBOLS' => array(
        '/', '=', '{', '}', '(', ')', '[', ']', '<', '>', '&'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        7 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #990000; font-weight: bold;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #0000FF;',
            4 => 'color: #000000; font-weight: bold;',
            5 => 'color: #0000FF;',
            6 => 'color: #0000FF;',
            7 => 'color: #0000FF;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #0000FF;'
            ),
        'STRINGS' => array(
            0 => 'color: #009900;'
            ),
        'NUMBERS' => array(
            0 => 'color: #FF0000;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #0000FF;'
            ),
        'SCRIPT' => array(
            0 => 'color: #808080; font-style: italic;',
            1 => 'color: #00bbdd;',
            2 => 'color: #0000FF;',
            3 => 'color: #000099;',
            4 => 'color: #333333;',
            5 => 'color: #333333;'
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => 'http://december.com/html/4/element/{FNAMEL}.html',
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_ALWAYS,
    'SCRIPT_DELIMITERS' => array(
        0 => array(
            '<!--' => '-->'
            ),
        1 => array(
            '<!DOCTYPE' => '>'
            ),
        2 => "/(?!<#)(?:(?:##)*)(#)[a-zA-Z0-9_\.\(\)]+(#)/",
        3 => array(
            '<cfscript>' => '</cfscript>'
            ),
        4 => array(
            '<' => '>'
            ),
        5 => '/((?!<!)<)(?:"[^"]*"|\'[^\']*\'|(?R)|[^">])+?(>)/si'
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => false,
        1 => false,
        2 => true,
        3 => true,
        4 => true,
        5 => true
        ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            1 => array(
                'DISALLOWED_BEFORE' => '(?<=&lt;|&lt;\/)',
                'DISALLOWED_AFTER' => '(?=\s|\/|&gt;)',
                ),
            2 => array(
                'DISALLOWED_BEFORE' => '(?<=&lt;|&lt;\/)',
                'DISALLOWED_AFTER' => '(?=\s|\/|&gt;)',
                ),
            3 => array(
                'DISALLOWED_BEFORE' => '(?<![a-zA-Z0-9\$_\|\#>|^])', // allow ; before keywords
                'DISALLOWED_AFTER' => '(?![a-zA-Z0-9_\|%\\-])', // allow & after keywords
                ),
            7 => array(
                'DISALLOWED_BEFORE' => '(?<![a-zA-Z0-9\$_\|\#>&|^])', // allow ; before keywords
                'DISALLOWED_AFTER' => '(?![a-zA-Z0-9_\|%\\-])', // allow & after keywords
                )
            )
        )
);

?>