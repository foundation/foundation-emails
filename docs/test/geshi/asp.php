<?php
/*************************************************************************************
 * asp.php
 * --------
 * Author: Amit Gupta (http://blog.igeek.info/)
 * Copyright: (c) 2004 Amit Gupta (http://blog.igeek.info/), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/08/13
 *
 * ASP language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/12/30 (1.0.3)
 *   -  Strings only delimited by ", comments by '
 * 2004/11/27 (1.0.2)
 *   -  Added support for multiple object splitters
 * 2004/10/27 (1.0.1)
 *   -  Added support for URLs
 * 2004/08/13 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2004/11/27)
 * -------------------------
 * * Include all the functions, keywords etc that I have missed
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
    'LANG_NAME' => 'ASP',
    'COMMENT_SINGLE' => array(1 => "'", 2 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'include', 'file', 'Const', 'Dim', 'Option', 'Explicit', 'Implicit', 'Set', 'Select', 'ReDim', 'Preserve',
            'ByVal', 'ByRef', 'End', 'Private', 'Public', 'If', 'Then', 'Else', 'ElseIf', 'Case', 'With', 'NOT',
            'While', 'Wend', 'For', 'Loop', 'Do', 'Request', 'Response', 'Server', 'ADODB', 'Session', 'Application',
            'Each', 'In', 'Get', 'Next', 'INT', 'CINT', 'CBOOL', 'CDATE', 'CBYTE', 'CCUR', 'CDBL', 'CLNG', 'CSNG',
            'CSTR', 'Fix', 'Is', 'Sgn', 'String', 'Boolean', 'Currency', 'Me', 'Single', 'Long', 'Integer', 'Byte',
            'Variant', 'Double', 'To', 'Let', 'Xor', 'Resume', 'On', 'Error', 'Imp', 'GoTo', 'Call', 'Global'
            ),
        2 => array(
            'Null', 'Nothing', 'And',
            'False',
            'True', 'var', 'Or', 'BOF', 'EOF', 'xor',
            'Function', 'Class', 'New', 'Sub'
            ),
        3 => array(
            'CreateObject', 'Write', 'Redirect', 'Cookies', 'BinaryRead', 'ClientCertificate', 'Form', 'QueryString',
            'ServerVariables', 'TotalBytes', 'AddHeader', 'AppendToLog', 'BinaryWrite', 'Buffer', 'CacheControl',
            'Charset', 'Clear', 'ContentType', 'End()', 'Expires', 'ExpiresAbsolute', 'Flush()', 'IsClientConnected',
            'PICS', 'Status', 'Connection', 'Recordset', 'Execute', 'Abandon', 'Lock', 'UnLock', 'Command', 'Fields',
            'Properties', 'Property', 'Send', 'Replace', 'InStr', 'TRIM', 'NOW', 'Day', 'Month', 'Hour', 'Minute', 'Second',
            'Year', 'MonthName', 'LCase', 'UCase', 'Abs', 'Array', 'As', 'LEN', 'MoveFirst', 'MoveLast', 'MovePrevious',
            'MoveNext', 'LBound', 'UBound', 'Transfer', 'Open', 'Close', 'MapPath', 'FileExists', 'OpenTextFile', 'ReadAll'
            )
        ),
    'SYMBOLS' => array(
        1 => array(
            '<%', '%>'
            ),
        0 => array(
            '(', ')', '[', ']', '!', '@', '%', '&', '*', '|', '/', '<', '>',
            ';', ':', '?', '='),
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #990099; font-weight: bold;',
            2 => 'color: #0000ff; font-weight: bold;',
            3 => 'color: #330066;'
            ),
        'COMMENTS' => array(
            1 => 'color: #008000;',
            2 => 'color: #ff6600;',
            'MULTI' => 'color: #008000;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #006600; font-weight:bold;'
            ),
        'STRINGS' => array(
            0 => 'color: #cc0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #800000;'
            ),
        'METHODS' => array(
            1 => 'color: #9900cc;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #006600; font-weight: bold;',
            1 => 'color: #000000; font-weight: bold;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        0 => array(
            '<%' => '%>'
            ),
        1 => array(
            '<script language="vbscript" runat="server">' => '</script>'
            ),
        2 => array(
            '<script language="javascript" runat="server">' => '</script>'
            ),
        3 => "/(?P<start><%=?)(?:\"[^\"]*?\"|\/\*(?!\*\/).*?\*\/|.)*?(?P<end>%>|\Z)/sm"
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => true,
        2 => true,
        3 => true
        )
);

?>