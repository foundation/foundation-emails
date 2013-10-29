<?php
/*************************************************************************************
 * locobasic.php
 * -------------
 * Author: Nacho Cabanes
 * Copyright: (c) 2009 Nacho Cabanes (http://www.nachocabanes.com)
 * Release Version: 1.0.8.11
 * Date Started: 2009/03/22
 *
 * Locomotive Basic (Amstrad CPC series) language file for GeSHi.
 *
 * More details at http://en.wikipedia.org/wiki/Locomotive_BASIC
 *
 * CHANGES
 * -------
 * 2009/03/22 (1.0.8.3)
 *  -  First Release
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
    'LANG_NAME' => 'Locomotive Basic',
    'COMMENT_SINGLE' => array(1 => "'", 2 => 'REM'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            "AFTER", "AND", "AUTO", "BORDER", "BREAK", "CALL", "CAT", "CHAIN",
            "CLEAR", "CLG", "CLS", "CLOSEIN", "CLOSEOUT", "CONT", "CURSOR",
            "DATA", "DEF", "DEFINT", "DEFREAL", "DEFSTR", "DEG", "DELETE",
            "DERR", "DI", "DIM", "DRAW", "DRAWR", "EDIT", "EI", "ELSE", "END",
            "ENV", "ENT", "EOF", "ERASE", "ERL", "ERR", "ERROR", "EVERY",
            "FILL", "FN", "FOR", "FRAME", "GOSUB", "GOTO", "GRAPHICS", "HIMEM",
            "IF", "INK", "INPUT", "KEY", "LET", "LINE", "LIST", "LOAD",
            "LOCATE", "MASK", "MEMORY", "MERGE", "MODE", "MOVE", "MOVER", "NEW",
            "NEXT", "NOT", "ON", "OPENIN", "OPENOUT", "OR", "ORIGIN", "PAPER",
            "PEEK", "PEN", "PLOT", "PLOTR", "POKE", "PRINT", "RAD", "RANDOMIZE",
            "READ", "RELEASE", "REMAIN", "RENUM", "RESTORE", "RESUME", "RETURN",
            "RUN", "SAVE", "SPEED", "SOUND", "SPC", "SQ", "STEP", "STOP", "SWAP",
            "SYMBOL", "TAB", "TAG", "TAGOFF", "TEST", "TESTR", "TIME", "TO",
            "THEN", "TRON", "TROFF", "USING", "WAIT", "WEND", "WHILE", "WIDTH",
            "WINDOW", "WRITE", "XOR", "ZONE"
            ),
        2 => array(
            "ABS", "ASC", "ATN", "BIN", "CHR", "CINT", "COPYCHR", "COS",
            "CREAL", "DEC", "FIX", "FRE", "EXP", "HEX", "INKEY", "INP", "INSTR",
            "INT", "JOY", "LEFT", "LEN", "LOG", "LOG10", "LOWER", "MAX", "MID",
            "MIN", "MOD", "OUT", "PI", "POS", "RIGHT", "RND", "ROUND", "SGN",
            "SIN", "SPACE", "SQR", "STR", "STRING", "TAN", "UNT", "UPPER",
            "VAL", "VPOS", "XPOS", "YPOS"
            )
        ),
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
            1 => 'color: #000088; font-weight: bold;',
            2 => 'color: #AA00AA; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080;',
            2 => 'color: #808080;'
            ),
        'BRACKETS' => array(
            0 => 'color: #ff0000;'
            ),
        'STRINGS' => array(
            0 => 'color: #008800;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0044ff;'
            ),
        'METHODS' => array(
            0 => 'color: #66cc66;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
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