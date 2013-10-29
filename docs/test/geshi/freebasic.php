<?php
/*************************************************************************************
 * freebasic.php
 * -------------
 * Author: Roberto Rossi
 * Copyright: (c) 2005 Roberto Rossi (http://rsoftware.altervista.org)
 * Release Version: 1.0.8.11
 * Date Started: 2005/08/19
 *
 * FreeBasic (http://www.freebasic.net/) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/08/19 (1.0.0)
 *  -  First Release
 *
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
    'LANG_NAME' => 'FreeBasic',
    'COMMENT_SINGLE' => array(1 => "'", 2 => '#'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            "append", "as", "asc", "asin", "asm", "atan2", "atn", "beep", "bin", "binary", "bit",
            "bitreset", "bitset", "bload", "bsave", "byref", "byte", "byval", "call",
            "callocate", "case", "cbyte", "cdbl", "cdecl", "chain", "chdir", "chr", "cint",
            "circle", "clear", "clng", "clngint", "close", "cls", "color", "command",
            "common", "cons", "const", "continue", "cos", "cshort", "csign", "csng",
            "csrlin", "cubyte", "cuint", "culngint", "cunsg", "curdir", "cushort", "custom",
            "cvd", "cvi", "cvl", "cvlongint", "cvs", "cvshort", "data", "date",
            "deallocate", "declare", "defbyte", "defdbl", "defined", "defint", "deflng",
            "deflngint", "defshort", "defsng", "defstr", "defubyte", "defuint",
            "defulngint", "defushort", "dim", "dir", "do", "double", "draw", "dylibload",
            "dylibsymbol", "else", "elseif", "end", "enum", "environ", 'environ$', "eof",
            "eqv", "erase", "err", "error", "exec", "exepath", "exit", "exp", "export",
            "extern", "field", "fix", "flip", "for", "fre", "freefile", "function", "get",
            "getjoystick", "getkey", "getmouse", "gosub", "goto", "hex", "hibyte", "hiword",
            "if", "iif", "imagecreate", "imagedestroy", "imp", "inkey", "inp", "input",
            "instr", "int", "integer", "is", "kill", "lbound", "lcase", "left", "len",
            "let", "lib", "line", "lobyte", "loc", "local", "locate", "lock", "lof", "log",
            "long", "longint", "loop", "loword", "lset", "ltrim", "mid", "mkd", "mkdir",
            "mki", "mkl", "mklongint", "mks", "mkshort", "mod", "multikey", "mutexcreate",
            "mutexdestroy", "mutexlock", "mutexunlock", "name", "next", "not", "oct", "on",
            "once", "open", "option", "or", "out", "output", "overload", "paint", "palette",
            "pascal", "pcopy", "peek", "peeki", "peeks", "pipe", "pmap", "point", "pointer",
            "poke", "pokei", "pokes", "pos", "preserve", "preset", "print", "private",
            "procptr", "pset", "ptr", "public", "put", "random", "randomize", "read",
            "reallocate", "redim", "rem", "reset", "restore", "resume",
            "return", "rgb", "rgba", "right", "rmdir", "rnd", "rset", "rtrim", "run",
            "sadd", "screen", "screencopy", "screeninfo", "screenlock", "screenptr",
            "screenres", "screenset", "screensync", "screenunlock", "seek", "statement",
            "selectcase", "setdate", "setenviron", "setmouse",
            "settime", "sgn", "shared", "shell", "shl", "short", "shr", "sin", "single",
            "sizeof", "sleep", "space", "spc", "sqr", "static", "stdcall", "step", "stop",
            "str", "string", "strptr", "sub", "swap", "system", "tab", "tan",
            "then", "threadcreate", "threadwait", "time", "timer", "to", "trans",
            "trim", "type", "ubound", "ubyte", "ucase", "uinteger", "ulongint", "union",
            "unlock", "unsigned", "until", "ushort", "using", "va_arg", "va_first",
            "va_next", "val", "val64", "valint", "varptr", "view", "viewprint", "wait",
            "wend", "while", "width", "window", "windowtitle", "with", "write", "xor",
            "zstring", "explicit", "escape", "true", "false"
            )
        ),
    'SYMBOLS' => array(
        '(', ')'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080;',
            2 => 'color: #339933;'
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
        1 => ''
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
