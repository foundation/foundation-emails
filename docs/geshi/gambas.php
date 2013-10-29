<?php
/*************************************************************************************
 * gambas.php
 * ---------
 * Author: Jesus Guardon (jguardon@telefonica.net)
 * Copyright: (c) 2009 Jesus Guardon (http://gambas-es.org),
 *                     Benny Baumann (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/08/20
 *
 * GAMBAS language file for GeSHi.
 * GAMBAS Official Site: http://gambas.sourceforge.net
 *
 * CHANGES
 * -------
 * 2009/09/26 (1.0.1)
 *  -  Splitted dollar-ended keywords in another group to match with or without '$'
 *  -  Modified URL for object/components keywords search through Google "I'm feeling lucky"
 * 2009/09/23 (1.0.0)
 *  -  Initial release
 *
 * TODO (updated 2009/09/26)
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
    'LANG_NAME' => 'GAMBAS',
    'COMMENT_SINGLE' => array(1 => "'"),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        //keywords
        1 => array(
            'APPEND', 'AS', 'BREAK', 'BYREF', 'CASE', 'CATCH', 'CLASS', 'CLOSE', 'CONST', 'CONTINUE', 'COPY',
            'CREATE', 'DEBUG', 'DEC', 'DEFAULT', 'DIM', 'DO', 'EACH', 'ELSE', 'END', 'ENDIF', 'ERROR', 'EVENT', 'EXEC',
            'EXPORT', 'EXTERN', 'FALSE', 'FINALLY', 'FLUSH', 'FOR', 'FUNCTION', 'GOTO', 'IF', 'IN', 'INC', 'INHERITS',
            'INPUT', 'FROM', 'IS', 'KILL', 'LAST', 'LIBRARY', 'LIKE', 'LINE INPUT', 'LINK', 'LOCK', 'LOOP', 'ME',
            'MKDIR', 'MOVE', 'NEW', 'NEXT', 'NULL', 'OPEN', 'OPTIONAL', 'OUTPUT', 'PIPE', 'PRINT', 'PRIVATE',
            'PROCEDURE', 'PROPERTY', 'PUBLIC', 'QUIT', 'RAISE', 'RANDOMIZE', 'READ', 'REPEAT', 'RETURN', 'RMDIR',
            'SEEK', 'SELECT', 'SHELL', 'SLEEP', 'STATIC', 'STEP', 'STOP', 'SUB', 'SUPER', 'SWAP', 'THEN', 'TO',
            'TRUE', 'TRY', 'UNLOCK', 'UNTIL', 'WAIT', 'WATCH', 'WEND', 'WHILE', 'WITH', 'WRITE'
            ),
        //functions
        2 => array(
            'Abs', 'Access', 'Acos', 'Acosh', 'Alloc', 'Ang', 'Asc', 'ASin', 'ASinh', 'Asl', 'Asr', 'Assign', 'Atan',
            'ATan2', 'ATanh',
            'BChg', 'BClr', 'Bin', 'BSet', 'BTst',
            'CBool', 'Cbr', 'CByte', 'CDate', 'CFloat', 'Choose', 'Chr', 'CInt', 'CLong', 'Comp', 'Conv', 'Cos',
            'Cosh', 'CShort', 'CSng', 'CStr',
            'DateAdd', 'DateDiff', 'Day', 'DConv', 'Deg', 'DFree', 'Dir',
            'Eof', 'Eval', 'Exist', 'Exp', 'Exp10', 'Exp2', 'Expm',
            'Fix', 'Format', 'Frac', 'Free',
            'Hex', 'Hour', 'Hyp',
            'Iif', 'InStr', 'Int', 'IsAscii', 'IsBlank', 'IsBoolean', 'IsByte', 'IsDate', 'IsDigit', 'IsDir',
            'IsFloat', 'IsHexa', 'IsInteger', 'IsLCase', 'IsLetter', 'IsLong', 'IsNull', 'IsNumber', 'IsObject',
            'IsPunct', 'IsShort', 'IsSingle', 'IsSpace', 'IsString', 'IsUCase', 'IsVariant',
            'LCase', 'Left', 'Len', 'Lof', 'Log', 'Log10', 'Log2', 'Logp', 'Lsl', 'Lsr', 'LTrim',
            'Mag', 'Max', 'Mid', 'Min', 'Minute', 'Month', 'Now', 'Quote',
            'Rad', 'RDir', 'Realloc', 'Replace', 'Right', 'RInStr', 'Rnd', 'Rol', 'Ror', 'Round', 'RTrim',
            'Scan', 'SConv', 'Second', 'Seek', 'Sgn', 'Shl', 'Shr', 'Sin', 'Sinh', 'Space', 'Split', 'Sqr',
            'Stat', 'Str', 'StrPtr', 'Subst',
            'Tan', 'Tanh', 'Temp$', 'Time', 'Timer', 'Tr', 'Trim', 'TypeOf',
            'UCase', 'Unquote', 'Val', 'VarPtr', 'Week', 'WeekDay', 'Year'
            ),
        //string functions
        3 => array(
            'Bin$', 'Chr$', 'Conv$', 'DConv$', 'Format$', 'Hex$', 'LCase$', 'Left$', 'LTrim$', 'Mid$', 'Quote$',
            'Replace$', 'Right$', 'SConv$', 'Space$', 'Str$', 'String$', 'Subst$', 'Tr$', 'Trim$', 'UCase$',
            'Unquote$'
            ),
        //datatypes
        4 => array(
            'Boolean', 'Byte', 'Short', 'Integer', 'Long', 'Single', 'Float', 'Date', 'String', 'Variant', 'Object',
            'Pointer', 'File'
            ),
        //operators
        5 => array(
            'AND', 'DIV', 'MOD', 'NOT', 'OR', 'XOR'
            ),
        //objects/classes
        6 => array(
            'Application', 'Array', 'Byte[]', 'Collection', 'Component', 'Enum', 'Observer', 'Param', 'Process',
            'Stream', 'System', 'User', 'Chart', 'Compress', 'Crypt', 'Blob', 'Connection', 'DB', 'Database',
            'DatabaseUser', 'Field', 'Index', 'Result', 'ResultField', 'Table', 'DataBrowser', 'DataCombo',
            'DataControl', 'DataSource', 'DataView', 'Desktop', 'DesktopFile', 'Balloon', 'ColorButton',
            'ColorChooser', 'DateChooser', 'DirChooser', 'DirView', 'Expander', 'FileChooser', 'FileView',
            'FontChooser', 'InputBox', 'ListContainer', 'SidePanel', 'Stock', 'TableView', 'ToolPanel', 'ValueBox',
            'Wizard', 'Dialog', 'ToolBar', 'WorkSpace', 'DnsClient', 'SerialPort', 'ServerSocket', 'Socket',
            'UdpSocket', 'FtpClient', 'HttpClient', 'SmtpClient', 'Regexp', 'Action', 'Button', 'CheckBox',
            'ColumnView', 'ComboBox', 'Draw', 'Container', 'Control', 'Cursor', 'DrawingArea', 'Embedder',
            'Font', 'Form', 'Frame', 'GridView', 'HBox', 'HPanel', 'HSplit', 'IconView', 'Image', 'Key', 'Label',
            'Line', 'ListBox', 'ListView', 'Menu', 'Message', 'Mouse', 'MovieBox', 'Panel', 'Picture', 'PictureBox',
            'ProgressBar', 'RadioButton', 'ScrollBar', 'ScrollView', 'Separator', 'Slider', 'SpinBox', 'TabStrip',
            'TextArea', 'TextBox', 'TextLabel', 'ToggleButton', 'TrayIcon', 'TreeView', 'VBox', 'VPanel', 'VSplit',
            'Watcher', 'Window', 'Dial', 'Editor', 'LCDNumber', 'Printer', 'TextEdit', 'WebBrowser', 'GLarea',
            'Report', 'ReportCloner', 'ReportContainer', 'ReportControl', 'ReportDrawing', 'ReportField', 'ReportHBox',
            'ReportImage', 'ReportLabel', 'ReportSection', 'ReportSpecialField', 'ReportTextLabel', 'ReportVBox',
            'CDRom', 'Channel', 'Music', 'Sound', 'Settings', 'VideoDevice', 'Vb', 'CGI', 'HTML', 'Request', 'Response',
            'Session', 'XmlDocument', 'XmlNode', 'XmlReader', 'XmlReaderNodeType', 'XmlWriter', 'RpcArray', 'RpcClient',
            'RpcFunction', 'RpcServer', 'RpcStruct', 'RpcType', 'XmlRpc', 'Xslt'
            ),
        //constants
        7 => array(
            'Pi'
            ),
        ),
    'SYMBOLS' => array(
        '&', '&=', '&/', '*', '*=', '+', '+=', '-', '-=', '//', '/', '/=', '=', '==', '\\', '\\=',
        '^', '^=', '[', ']', '{', '}', '<', '>', '<>', '<=', '>='
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
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0600FF; font-weight: bold;',          // Keywords
            2 => 'color: #8B1433;',                             // Functions
            3 => 'color: #8B1433;',                             // String Functions
            4 => 'color: #0600FF;',                             // Data Types
            5 => 'color: #1E90FF;',                             // Operators
            6 => 'color: #0600FF;',                             // Objects/Components
            7 => 'color: #0600FF;'                              // Constants
            ),
        'COMMENTS' => array(
            1 => 'color: #1A5B1A; font-style: italic;',
            'MULTI' => 'color: #1A5B1A; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #008080;'
            ),
        'BRACKETS' => array(
            0 => 'color: #612188;'
            ),
        'STRINGS' => array(
            0 => 'color: #7E4B05;'
            ),
        'NUMBERS' => array(
            0 => 'color: #FF0000;',
            GESHI_NUMBER_INT_BASIC => 'color: #FF0000;'
            ),
        'METHODS' => array(
            1 => 'color: #0000FF;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #6132B2;'
            ),
        'REGEXPS' => array(
            //3 => 'color: #8B1433;'  //fakes '$' colour matched by REGEXP
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => 'http://gambasdoc.org/help/lang/{FNAMEL}',
        2 => 'http://gambasdoc.org/help/lang/{FNAMEL}',
        3 => 'http://www.google.com/search?hl=en&amp;q={FNAMEL}+site:http://gambasdoc.org/help/lang/&amp;btnI=I%27m%20Feeling%20Lucky',
        4 => 'http://gambasdoc.org/help/lang/type/{FNAMEL}',
        5 => 'http://gambasdoc.org/help/lang/{FNAMEL}',
        6 => 'http://www.google.com/search?hl=en&amp;q={FNAMEL}+site:http://gambasdoc.org/&amp;btnI=I%27m%20Feeling%20Lucky',
        7 => 'http://gambasdoc.org/help/lang/{FNAMEL}'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 =>'.'
        ),
    'REGEXPS' => array(
        //3 => "\\$(?!\\w)"   //matches '$' at the end of Keyword
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            2 => array(
                'DISALLOWED_AFTER' => "(?![a-zA-Z0-9_\|%\\-&;\$])"
                )
            )
        )
);

?>