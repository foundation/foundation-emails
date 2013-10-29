<?php
/*************************************************************************************
 * 6502acme.php
 * -------
 * Author: Warren Willmey
 * Copyright: (c) 2010 Warren Willmey.
 * Release Version: 1.0.8.11
 * Date Started: 2010/05/26
 *
 * MOS 6502 (more specifically 6510) ACME Cross Assembler 0.93 by Marco Baye language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2010/07/22
 *  -  First Release
 *
 * TODO (updated 2010/07/22)
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
    'LANG_NAME' => 'MOS 6502 (6510) ACME Cross Assembler format',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        /* 6502/6510 Opcodes. */
        1 => array(
            'adc', 'and', 'asl', 'bcc', 'bcs', 'beq', 'bit', 'bmi',
            'bne', 'bpl', 'brk', 'bvc', 'bvs', 'clc', 'cld', 'cli',
            'clv', 'cmp', 'cpx', 'cpy', 'dec', 'dex', 'dey', 'eor',
            'inc', 'inx', 'iny', 'jmp', 'jsr', 'lda', 'ldx', 'ldy',
            'lsr', 'nop', 'ora', 'pha', 'php', 'pla', 'plp', 'rol',
            'ror', 'rti', 'rts', 'sbc', 'sec', 'sed', 'sei', 'sta',
            'stx', 'sty', 'tax', 'tay', 'tsx', 'txa', 'txs', 'tya',
            ),
        /* Index Registers, yes the 6502 has other registers by they are only
        * accessable by specific opcodes. The 65816 also has access to the stack pointer S. */
        2 => array(
            'x', 'y', 's'
            ),
        /* Directives or "pseudo opcodes" as defined by ACME 0.93 file AllPOs.txt. */
        3 => array(
            '!8', '!08', '!by', '!byte',
            '!16', '!wo', '!word',
            '!24', '!32',
            '!fi', '!fill',
            '!align',
            '!ct', '!convtab',
            '!tx', '!text',
            '!pet',
            '!raw',
            '!scrxor',
            '!to',
            '!source',
            '!bin', '!binary',
            '!zn', '!zone',
            '!sl',
            '!svl',
            '!sal',
            '!if', '!ifdef',
            '!for',
            '!set',
            '!do', 'while', 'until',
            '!eof', '!endoffile',
            '!warn', '!error', '!serious',
            '!macro',
//            , '*='        // Not a valid keyword (uses both * and = signs) moved to symbols instead.
            '!initmem',
            '!pseudopc',
            '!cpu',
            '!al', '!as', '!rl', '!rs',
            ),

        /* 6502/6510 undocumented opcodes (often referred to as illegal instructions).
        *  These are present in the 6502/6510 but NOT in the newer CMOS revisions of the 65C02 or 65816.
        *  As they are undocumented instructions there are no "official" names for them, there are also
        *  several more that mainly perform various forms of crash and are not supported by ACME 0.93.
        */
        4 => array(
            'anc', 'arr', 'asr', 'dcp', 'dop', 'isc', 'jam', 'lax',
            'rla', 'rra', 'sax', 'sbx', 'slo', 'sre', 'top',
            ),
        /* 65c02 instructions, MOS added a few (much needed) instructions in the CMOS version of the 6502, but stupidly removed the undocumented/illegal opcodes.
        *  ACME 0.93 does not support the rmb0-7 and smb0-7 instructions (they are currently rem'ed out).  */
        5 => array(
            'bra', 'phx', 'phy', 'plx', 'ply', 'stz', 'trb', 'tsb'
            ),
        /* 65816 instructions. */
        6 => array(
            'brl', 'cop', 'jml', 'jsl', 'mvn', 'mvp', 'pea', 'pei',
            'per', 'phb', 'phd', 'phk', 'plb', 'pld', 'rep', 'rtl',
            'sep', 'tcd', 'tcs', 'tdc', 'tsc', 'txy', 'tyx', 'wdm',
            'xba', 'xce',
            ),
        /* Deprecated directives or "pseudo opcodes" as defined by ACME 0.93 file AllPOs.txt. */
        7 => array(
            '!cbm',
            '!sz', '!subzone',
            '!realpc',
            ),
        /* Math functions, some are aliases for the symbols. */
        8 => array(
            'not', 'div', 'mod', 'xor', 'or', 'sin', 'cos', 'tan',
            'arcsin', 'arccos', 'arctan', 'int', 'float',

            ),

        ),
    'SYMBOLS' => array(
//        '[', ']', '(', ')', '{', '}',    // These are already defined by GeSHi as BRACKETS.
        '*=', '#', '!', '^', '-', '*', '/',
        '%', '+', '-', '<<', '>>', '>>>',
        '<', '>', '^', '<=', '<', '>=', '>', '!=',
        '=', '&', '|', '<>',
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
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #00f; font-weight:bold;',
            2 => 'color: #00f; font-weight:bold;',
            3 => 'color: #080; font-weight:bold;',
            4 => 'color: #f00; font-weight:bold;',
            5 => 'color: #80f; font-weight:bold;',
            6 => 'color: #f08; font-weight:bold;',
            7 => 'color: #a04; font-weight:bold; font-style: italic;',
            8 => 'color: #000;',
            ),
        'COMMENTS' => array(
            1 => 'color: #999; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #009; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000;'
            ),
        'STRINGS' => array(
            0 => 'color: #080;'
            ),
        'NUMBERS' => array(
            GESHI_NUMBER_INT_BASIC          => 'color: #f00;',
            GESHI_NUMBER_HEX_PREFIX_DOLLAR  => 'color: #f00;',
            GESHI_NUMBER_HEX_PREFIX         => 'color: #f00;',
            GESHI_NUMBER_BIN_PREFIX_PERCENT => 'color: #f00;',
            GESHI_NUMBER_FLT_NONSCI         => 'color: #f00;',
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #080;'
            ),
        'REGEXPS' => array(
            0   => 'color: #f00;'
            , 1 => 'color: #933;'
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
        6 => '',
        7 => '',
        8 => '',
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC |
        GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_HEX_PREFIX_DOLLAR |
        GESHI_NUMBER_HEX_PREFIX |
        GESHI_NUMBER_BIN_PREFIX_PERCENT,
        // AMCE Octal format not support and gets picked up as Decimal unfortunately.
    'REGEXPS' => array(
        //ACME .# Binary number format. e.g. %..##..##..##
        0 => '\%[\.\#]{1,64}',
        //ACME Local Labels
        1 => '\.[_a-zA-Z][_a-zA-Z0-9]*',
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 8,
    'PARSER_CONTROL' => array(
        'NUMBERS' => array(
            'PRECHECK_RX' => '/[\da-fA-F\.\$\%]/'
            )
        )
);

?>