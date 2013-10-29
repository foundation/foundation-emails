<?php
/*************************************************************************************
 * per.php
 * --------
 * Author: Lars Gersmann (lars.gersmann@gmail.com)
 * Copyright: (c) 2007 Lars Gersmann
 * Release Version: 1.0.8.11
 * Date Started: 2007/06/03
 *
 * Per (forms) (FOURJ's Genero 4GL) language file for GeSHi.
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
    'LANG_NAME' => 'per',
    'COMMENT_SINGLE' => array(1 => '--', 2 => '#'),
    'COMMENT_MULTI' => array('{' => '}'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            "ACCELERATOR",
            "ACCELERATOR2",
            "ACTION",
            "ALT",
            "AND",
            "AUTO",
            "AUTONEXT",
            "AUTOSCALE",
            "BETWEEN",
            "BOTH",
            "BUTTON",
            "BUTTONEDIT",
            "BUTTONTEXTHIDDEN",
            "BY",
            "BYTE",
            "CANVAS",
            "CENTER",
            "CHECKBOX",
            "CLASS",
            "COLOR",
            "COLUMNS",
            "COMBOBOX",
            "COMMAND",
            "COMMENT",
            "COMMENTS",
            "COMPACT",
            "COMPRESS",
            "CONFIG",
            "CONTROL",
            "CURRENT",
            "DATABASE",
            "DATEEDIT",
            "DEC",
            "DEFAULT",
            "DEFAULTS",
            "DELIMITERS",
            "DISPLAY",
            "DISPLAYONLY",
            "DOWNSHIFT",
            "DYNAMIC",
            "EDIT",
            "FIXED",
            "FOLDER",
            "FONTPITCH",
            "FORMAT",
            "FORMONLY",
            "GRID",
            "GRIDCHILDRENINPARENT",
            "GROUP",
            "HBOX",
            "HEIGHT",
            "HIDDEN",
            "HORIZONTAL",
            "INCLUDE",
            "INITIAL",
            "INITIALIZER",
            "INPUT",
            "INSTRUCTIONS",
            "INTERVAL",
            "INVISIBLE",
            "IS",
            "ITEM",
            "ITEMS",
            "JUSTIFY",
            "KEY",
            "KEYS",
            "LABEL",
            "LEFT",
            "LIKE",
            "LINES",
            "MATCHES",
            "NAME",
            "NOENTRY",
            "NONCOMPRESS",
            "NORMAL",
            "NOT",
            "NOUPDATE",
            "OPTIONS",
            "OR",
            "ORIENTATION",
            "PACKED",
            "PAGE",
            "PICTURE",
            "PIXELHEIGHT",
            "PIXELS",
            "PIXELWIDTH",
            "POINTS",
            "PROGRAM",
            "PROGRESSBAR",
            "QUERYCLEAR",
            "QUERYEDITABLE",
            "RADIOGROUP",
            "RECORD",
            "REQUIRED",
            "REVERSE",
            "RIGHT",
            "SAMPLE",
            "SCREEN",
            "SCROLL",
            "SCROLLBARS",
            "SCROLLGRID",
            "SECOND",
            "SEPARATOR",
            "SHIFT",
            "SIZE",
            "SIZEPOLICY",
            "SMALLFLOAT",
            "SMALLINT",
            "SPACING",
            "STRETCH",
            "STYLE",
            "TABINDEX",
            "TABLE",
            "TAG",
            "TEXT",
            "TEXTEDIT",
            "THROUGH",
            "THRU",
            "TITLE",
            "TO",
            "TOOLBAR",
            "TOPMENU",
            "TYPE",
            "UNHIDABLE",
            "UNHIDABLECOLUMNS",
            "UNMOVABLE",
            "UNMOVABLECOLUMNS",
            "UNSIZABLE",
            "UNSIZABLECOLUMNS",
            "UNSORTABLE",
            "UNSORTABLECOLUMNS",
            "UPSHIFT",
            "USER",
            "VALIDATE",
            "VALUECHECKED",
            "VALUEMAX",
            "VALUEMIN",
            "VALUEUNCHECKED",
            "VARCHAR",
            "VARIABLE",
            "VBOX",
            "VERIFY",
            "VERSION",
            "VERTICAL",
            "TIMESTAMP",
            "WANTCOLUMNSANCHORED", /* to be removed! */
            "WANTFIXEDPAGESIZE",
            "WANTNORETURNS",
            "WANTTABS",
            "WHERE",
            "WIDGET",
            "WIDTH",
            "WINDOWSTYLE",
            "WITHOUT",
            "WORDWRAP",
            "X",
            "Y",
            "ZEROFILL",
            "SCHEMA",
            "ATTRIBUTES",
            "TABLES",
            "LAYOUT",
            "END"
            ),
        2 => array(
            "YEAR",
            "BLACK",
            "BLINK",
            "BLUE",
            "YELLOW",
            "WHITE",
            "UNDERLINE",
            "CENTURY",
            "FRACTION",
            "CHAR",
            "CHARACTER",
            "CHARACTERS",
            "CYAN",
            "DATE",
            "DATETIME",
            "DAY",
            "DECIMAL",
            "FALSE",
            "FLOAT",
            "GREEN",
            "HOUR",
            "INT",
            "INTEGER",
            "MAGENTA",
            "MINUTE",
            "MONEY",
            "NONE",
            "NULL",
            "REAL",
            "RED",
            "TRUE",
            "TODAY",
            "MONTH",
            "IMAGE"
            ),
        ),
    'SYMBOLS' => array(
        '+', '-', '*', '?', '=', '/', '%', '>', '<', '^', '!', '|', ':',
        '(', ')', '[', ']'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0600FF;',
            2 => 'color: #0000FF; font-weight: bold;',
            ),
        'COMMENTS' => array(
            1 => 'color: #008080; font-style: italic;',
            2 => 'color: #008080;',
            'MULTI' => 'color: green'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #008080; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #808080;'
            ),
        'NUMBERS' => array(
            0 => 'color: #FF0000;'
            ),
        'METHODS' => array(
            1 => 'color: #0000FF;',
            2 => 'color: #0000FF;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #008000;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
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
