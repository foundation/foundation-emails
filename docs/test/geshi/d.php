<?php
/*************************************************************************************
 * d.php
 * -----
 * Author: Thomas Kuehne (thomas@kuehne.cn)
 * Contributors:
 *  - Jimmy Cao
 * Copyright: (c) 2005 Thomas Kuehne (http://thomas.kuehne.cn/)
 * Release Version: 1.0.8.11
 * Date Started: 2005/04/22
 *
 * D language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2011/06/28 (0.0.3) (Jimmy Cao)
 *  -  added D2 features
 * 2005/04/22 (0.0.2)
 *  -  added _d_* and sizeof/ptrdiff_t
 * 2005/04/20 (0.0.1)
 *  -  First release
 *
 * TODO (updated 2005/04/22)
 * -------------------------
 * * nested comments
 * * correct handling of r"" and ``
 * * correct handling of ... and ..
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
    'LANG_NAME' => 'D',
    'COMMENT_SINGLE' => array(2 => '///', 1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/', '/+' => '+/'),
    'COMMENT_REGEXP' => array(
        // doxygen comments
        3 => '#/\*\*(?![\*\/]).*\*/#sU',
        // raw strings
        4 => '#r"[^"]*"#s',
        // Script Style interpreter comment
        5 => "/\A#!(?=\\/).*?$/m"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"', "'"),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[abfnrtv\\'\"?\n\\\\]#i",
        //Hexadecimal Char Specs
        2 => "#\\\\x[\da-fA-F]{2}#",
        //Hexadecimal Char Specs
        3 => "#\\\\u[\da-fA-F]{4}#",
        //Hexadecimal Char Specs
        4 => "#\\\\U[\da-fA-F]{8}#",
        //Octal Char Specs
        5 => "#\\\\[0-7]{1,3}#",
        //Named entity escapes
        /*6 => "#\\\\&(?:quot|amp|lt|gt|OElig|oelig|Scaron|scaron|Yuml|circ|tilde|".
            "ensp|emsp|thinsp|zwnj|zwj|lrm|rlm|ndash|mdash|lsquo|rsquo|sbquo|".
            "ldquo|rdquo|bdquo|dagger|Dagger|permil|lsaquo|rsaquo|euro|nbsp|".
            "iexcl|cent|pound|curren|yen|brvbar|sect|uml|copy|ordf|laquo|not|".
            "shy|reg|macr|deg|plusmn|sup2|sup3|acute|micro|para|middot|cedil|".
            "sup1|ordm|raquo|frac14|frac12|frac34|iquest|Agrave|Aacute|Acirc|".
            "Atilde|Auml|Aring|AElig|Ccedil|Egrave|Eacute|Ecirc|Euml|Igrave|".
            "Iacute|Icirc|Iuml|ETH|Ntilde|Ograve|Oacute|Ocirc|Otilde|Ouml|".
            "times|Oslash|Ugrave|Uacute|Ucirc|Uuml|Yacute|THORN|szlig|agrave|".
            "aacute|acirc|atilde|auml|aring|aelig|ccedil|egrave|eacute|ecirc|".
            "euml|igrave|iacute|icirc|iuml|eth|ntilde|ograve|oacute|ocirc|".
            "otilde|ouml|divide|oslash|ugrave|uacute|ucirc|uuml|yacute|thorn|".
            "yuml|fnof|Alpha|Beta|Gamma|Delta|Epsilon|Zeta|Eta|Theta|Iota|".
            "Kappa|Lambda|Mu|Nu|Xi|Omicron|Pi|Rho|Sigma|Tau|Upsilon|Phi|Chi|".
            "Psi|Omega|alpha|beta|gamma|delta|epsilon|zeta|eta|theta|iota|".
            "kappa|lambda|mu|nu|xi|omicron|pi|rho|sigmaf|sigma|tau|upsilon|".
            "phi|chi|psi|omega|thetasym|upsih|piv|bull|hellip|prime|Prime|".
            "oline|frasl|weierp|image|real|trade|alefsym|larr|uarr|rarr|darr|".
            "harr|crarr|lArr|uArr|rArr|dArr|hArr|forall|part|exist|empty|".
            "nabla|isin|notin|ni|prod|sum|minus|lowast|radic|prop|infin|ang|".
            "and|or|cap|cup|int|there4|sim|cong|asymp|ne|equiv|le|ge|sub|sup|".
            "nsub|sube|supe|oplus|otimes|perp|sdot|lceil|rceil|lfloor|rfloor|".
            "lang|rang|loz|spades|clubs|hearts|diams);#",*/
        // optimized:
        6 => "#\\\\&(?:A(?:Elig|acute|circ|grave|lpha|ring|tilde|uml)|Beta|".
            "C(?:cedil|hi)|D(?:agger|elta)|E(?:TH|acute|circ|grave|psilon|ta|uml)|".
            "Gamma|I(?:acute|circ|grave|ota|uml)|Kappa|Lambda|Mu|N(?:tilde|u)|".
            "O(?:Elig|acute|circ|grave|m(?:ega|icron)|slash|tilde|uml)|".
            "P(?:hi|i|rime|si)|Rho|S(?:caron|igma)|T(?:HORN|au|heta)|".
            "U(?:acute|circ|grave|psilon|uml)|Xi|Y(?:acute|uml)|Zeta|".
            "a(?:acute|c(?:irc|ute)|elig|grave|l(?:efsym|pha)|mp|n[dg]|ring|".
            "symp|tilde|uml)|b(?:dquo|eta|rvbar|ull)|c(?:ap|cedil|e(?:dil|nt)|".
            "hi|irc|lubs|o(?:ng|py)|rarr|u(?:p|rren))|d(?:Arr|a(?:gger|rr)|".
            "e(?:g|lta)|i(?:ams|vide))|e(?:acute|circ|grave|m(?:pty|sp)|nsp|".
            "psilon|quiv|t[ah]|u(?:ml|ro)|xist)|f(?:nof|orall|ra(?:c(?:1[24]|34)|sl))|".
            "g(?:amma|e|t)|h(?:Arr|arr|e(?:arts|llip))|i(?:acute|circ|excl|grave|mage|".
            "n(?:fin|t)|ota|quest|sin|uml)|kappa|l(?:Arr|a(?:mbda|ng|quo|rr)|ceil|".
            "dquo|e|floor|o(?:wast|z)|rm|s(?:aquo|quo)|t)|m(?:acr|dash|".
            "i(?:cro|ddot|nus)|u)|n(?:abla|bsp|dash|e|i|ot(?:in)?|sub|tilde|u)|".
            "o(?:acute|circ|elig|grave|line|m(?:ega|icron)|plus|r(?:d[fm])?|".
            "slash|ti(?:lde|mes)|uml)|p(?:ar[at]|er(?:mil|p)|hi|iv?|lusmn|ound|".
            "r(?:ime|o[dp])|si)|quot|r(?:Arr|a(?:dic|ng|quo|rr)|ceil|dquo|e(?:al|g)|".
            "floor|ho|lm|s(?:aquo|quo))|s(?:bquo|caron|dot|ect|hy|i(?:gmaf?|m)|".
            "pades|u(?:be?|m|p[123e]?)|zlig)|t(?:au|h(?:e(?:re4|ta(?:sym)?)|insp|".
            "orn)|i(?:lde|mes)|rade)|u(?:Arr|a(?:cute|rr)|circ|grave|ml|".
            "psi(?:h|lon)|uml)|weierp|xi|y(?:acute|en|uml)|z(?:eta|w(?:j|nj)));#",
        ),
    'HARDQUOTE' => array('`', '`'),
    'HARDESCAPE' => array(),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
                'break', 'case', 'continue', 'do', 'else',
                'for', 'foreach', 'goto', 'if', 'return',
                'switch', 'while', 'foreach_reverse'
            ),
        2 => array(
                'alias', 'asm', 'assert', 'body', 'cast',
                'catch', 'default', 'delegate', 'delete',
                'extern', 'false', 'finally', 'function',
                'import', 'in', 'inout',
                'invariant', 'is', 'lazy', 'mixin', 'module', 'new',
                'null', 'out', 'pragma', 'ref', 'super', 'this',
                'throw', 'true', 'try', 'typeid',
                'typeof', 'union', 'with', 'scope'
            ),
        3 => array(
                'ClassInfo', 'Error', 'Exception',
                'Interface', 'Object', 'IMonitor',
                'OffsetTypeInfo', 'Throwable',
                'TypeInfo_Class', 'TypeInfo', '__traits',
                '__EOF__', '__FILE__', '__LINE__',
            ),
        4 => array(
                'abstract', 'align', 'auto', 'bit', 'bool',
                'byte', 'cdouble', 'cfloat', 'char',
                'class', 'const', 'creal', 'dchar', 'dstring', 'debug',
                'deprecated', 'double', 'enum', 'export',
                'final', 'float', 'idouble', 'ifloat', 'immutable', 'int',
                'interface', 'ireal', 'long', 'nothrow', 'override',
                'package', 'private', 'protected', 'ptrdiff_t',
                'public', 'real', 'short', 'shared', 'size_t',
                'static', 'string', 'struct', 'synchronized',
                'template', 'ubyte', 'ucent', 'uint',
                'ulong', 'unittest', 'ushort', 'version',
                'void', 'volatile', 'wchar', 'wstring',
                '__gshared', '@disable', '@property', 'pure', 'safe'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '?', '!', ';', ':', ',', '...', '..',
        '+', '-', '*', '/', '%', '&', '|', '^', '<', '>', '=', '~',
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #aaaadd; font-weight: bold;',
            4 => 'color: #993333;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #009933; font-style: italic;',
            3 => 'color: #009933; font-style: italic;',
            4 => 'color: #ff0000;',
            5 => 'color: #0040ff;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #660099; font-weight: bold;',
            3 => 'color: #660099; font-weight: bold;',
            4 => 'color: #660099; font-weight: bold;',
            5 => 'color: #006699; font-weight: bold;',
            6 => 'color: #666699; font-weight: bold; font-style: italic;',
            'HARD' => '',
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;',
            'HARD' => 'color: #ff0000;'
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
            1 => 'color: #006600;',
            2 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
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
        1 => '.',
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