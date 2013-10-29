<?php
/*************************************************************************************
 * c.php
 * -----
 * Author: Nigel McNie (nigel@geshi.org)
 * Contributors:
 *  - Jack Lloyd (lloyd@randombit.net)
 *  - Michael Mol (mikemol@gmail.com)
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2004/06/04
 *
 * C language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/01/22 (1.0.8.3)
 *   -  Made keywords case-sensitive.
 * 2008/05/23 (1.0.7.22)
 *   -  Added description of extra language features (SF#1970248)
 * 2004/XX/XX (1.0.4)
 *   -  Added a couple of new keywords (Jack Lloyd)
 * 2004/11/27 (1.0.3)
 *   -  Added support for multiple object splitters
 * 2004/10/27 (1.0.2)
 *   -  Added support for URLs
 * 2004/08/05 (1.0.1)
 *   -  Added support for symbols
 * 2004/07/14 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2009/02/08)
 * -------------------------
 *  -  Get a list of inbuilt functions to add (and explore C more
 *     to complete this rather bare language file
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
    'LANG_NAME' => 'C',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        //Multiline-continued single-line comments
        1 => '/\/\/(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //Multiline-continued preprocessor define
        2 => '/#(?:\\\\\\\\|\\\\\\n|.)*$/m'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[\\\\abfnrtv\'\"?\n]#i",
        //Hexadecimal Char Specs
        2 => "#\\\\x[\da-fA-F]{2}#",
        //Hexadecimal Char Specs
        3 => "#\\\\u[\da-fA-F]{4}#",
        //Hexadecimal Char Specs
        4 => "#\\\\U[\da-fA-F]{8}#",
        //Octal Char Specs
        5 => "#\\\\[0-7]{1,3}#"
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            'if', 'return', 'while', 'case', 'continue', 'default',
            'do', 'else', 'for', 'switch', 'goto'
            ),
        2 => array(
            'null', 'false', 'break', 'true', 'function', 'enum', 'extern', 'inline'
            ),
        3 => array(
            // assert.h
            'assert',

            //complex.h
            'cabs', 'cacos', 'cacosh', 'carg', 'casin', 'casinh', 'catan',
            'catanh', 'ccos', 'ccosh', 'cexp', 'cimag', 'cis', 'clog', 'conj',
            'cpow', 'cproj', 'creal', 'csin', 'csinh', 'csqrt', 'ctan', 'ctanh',

            //ctype.h
            'digittoint', 'isalnum', 'isalpha', 'isascii', 'isblank', 'iscntrl',
            'isdigit', 'isgraph', 'islower', 'isprint', 'ispunct', 'isspace',
            'isupper', 'isxdigit', 'toascii', 'tolower', 'toupper',

            //inttypes.h
            'imaxabs', 'imaxdiv', 'strtoimax', 'strtoumax', 'wcstoimax',
            'wcstoumax',

            //locale.h
            'localeconv', 'setlocale',

            //math.h
            'acos', 'asin', 'atan', 'atan2', 'ceil', 'cos', 'cosh', 'exp',
            'fabs', 'floor', 'frexp', 'ldexp', 'log', 'log10', 'modf', 'pow',
            'sin', 'sinh', 'sqrt', 'tan', 'tanh',

            //setjmp.h
            'longjmp', 'setjmp',

            //signal.h
            'raise',

            //stdarg.h
            'va_arg', 'va_copy', 'va_end', 'va_start',

            //stddef.h
            'offsetof',

            //stdio.h
            'clearerr', 'fclose', 'fdopen', 'feof', 'ferror', 'fflush', 'fgetc',
            'fgetpos', 'fgets', 'fopen', 'fprintf', 'fputc', 'fputchar',
            'fputs', 'fread', 'freopen', 'fscanf', 'fseek', 'fsetpos', 'ftell',
            'fwrite', 'getc', 'getch', 'getchar', 'gets', 'perror', 'printf',
            'putc', 'putchar', 'puts', 'remove', 'rename', 'rewind', 'scanf',
            'setbuf', 'setvbuf', 'snprintf', 'sprintf', 'sscanf', 'tmpfile',
            'tmpnam', 'ungetc', 'vfprintf', 'vfscanf', 'vprintf', 'vscanf',
            'vsprintf', 'vsscanf',

            //stdlib.h
            'abort', 'abs', 'atexit', 'atof', 'atoi', 'atol', 'bsearch',
            'calloc', 'div', 'exit', 'free', 'getenv', 'itoa', 'labs', 'ldiv',
            'ltoa', 'malloc', 'qsort', 'rand', 'realloc', 'srand', 'strtod',
            'strtol', 'strtoul', 'system',

            //string.h
            'memchr', 'memcmp', 'memcpy', 'memmove', 'memset', 'strcat',
            'strchr', 'strcmp', 'strcoll', 'strcpy', 'strcspn', 'strerror',
            'strlen', 'strncat', 'strncmp', 'strncpy', 'strpbrk', 'strrchr',
            'strspn', 'strstr', 'strtok', 'strxfrm',

            //time.h
            'asctime', 'clock', 'ctime', 'difftime', 'gmtime', 'localtime',
            'mktime', 'strftime', 'time',

            //wchar.h
            'btowc', 'fgetwc', 'fgetws', 'fputwc', 'fputws', 'fwide',
            'fwprintf', 'fwscanf', 'getwc', 'getwchar', 'mbrlen', 'mbrtowc',
            'mbsinit', 'mbsrtowcs', 'putwc', 'putwchar', 'swprintf', 'swscanf',
            'ungetwc', 'vfwprintf', 'vswprintf', 'vwprintf', 'wcrtomb',
            'wcscat', 'wcschr', 'wcscmp', 'wcscoll', 'wcscpy', 'wcscspn',
            'wcsftime', 'wcslen', 'wcsncat', 'wcsncmp', 'wcsncpy', 'wcspbrk',
            'wcsrchr', 'wcsrtombs', 'wcsspn', 'wcsstr', 'wcstod', 'wcstok',
            'wcstol', 'wcstoul', 'wcsxfrm', 'wctob', 'wmemchr', 'wmemcmp',
            'wmemcpy', 'wmemmove', 'wmemset', 'wprintf', 'wscanf',

            //wctype.h
            'iswalnum', 'iswalpha', 'iswcntrl', 'iswctype', 'iswdigit',
            'iswgraph', 'iswlower', 'iswprint', 'iswpunct', 'iswspace',
            'iswupper', 'iswxdigit', 'towctrans', 'towlower', 'towupper',
            'wctrans', 'wctype'
            ),
        4 => array(
            'auto', 'char', 'const', 'double',  'float', 'int', 'long',
            'register', 'short', 'signed', 'sizeof', 'static', 'struct',
            'typedef', 'union', 'unsigned', 'void', 'volatile', 'wchar_t',

            'int8', 'int16', 'int32', 'int64',
            'uint8', 'uint16', 'uint32', 'uint64',

            'int_fast8_t', 'int_fast16_t', 'int_fast32_t', 'int_fast64_t',
            'uint_fast8_t', 'uint_fast16_t', 'uint_fast32_t', 'uint_fast64_t',

            'int_least8_t', 'int_least16_t', 'int_least32_t', 'int_least64_t',
            'uint_least8_t', 'uint_least16_t', 'uint_least32_t', 'uint_least64_t',

            'int8_t', 'int16_t', 'int32_t', 'int64_t',
            'uint8_t', 'uint16_t', 'uint32_t', 'uint64_t',

            'intmax_t', 'uintmax_t', 'intptr_t', 'uintptr_t',
            'size_t', 'off_t'
            ),
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']',
        '+', '-', '*', '/', '%',
        '=', '<', '>',
        '!', '^', '&', '|',
        '?', ':',
        ';', ','
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;',
            4 => 'color: #993333;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #339933;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #660099; font-weight: bold;',
            3 => 'color: #660099; font-weight: bold;',
            4 => 'color: #660099; font-weight: bold;',
            5 => 'color: #006699; font-weight: bold;',
            'HARD' => '',
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000dd;',
            GESHI_NUMBER_BIN_PREFIX_0B => 'color: #208080;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #208080;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #208080;',
            GESHI_NUMBER_FLT_SCI_SHORT => 'color:#800080;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI_F => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI => 'color:#800080;'
            ),
        'METHODS' => array(
            1 => 'color: #202020;',
            2 => 'color: #202020;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => 'http://www.opengroup.org/onlinepubs/009695399/functions/{FNAMEL}.html',
        4 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);

?>