<?php
/*************************************************************************************
 * 6502tasm.php
 * -------
 * Author: Warren Willmey
 * Copyright: (c) 2010 Warren Willmey.
 * Release Version: 1.0.8.11
 * Date Started: 2010/06/02
 *
 * MOS 6502 (6510) TASM/64TASS (64TASS being the super set of TASM) language file for GeSHi.
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
    'LANG_NAME' => 'MOS 6502 (6510) TASM/64TASS 1.46 Assembler format',
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
        /* Directives. */
        3 => array(
            '.al', '.align', '.as', '.assert', '.binary', '.byte', '.cerror', '.char',
            '.comment', '.cpu', '.cwarn', '.databank', '.dpage', '.else', '.elsif',
            '.enc', '.endc', '.endif', '.endm', '.endp', '.error', '.fi', '.fill',
            '.for', '.here', '.if', '.ifeq', '.ifmi', '.ifne', '.ifpl',
            '.include', '.int', '.logical', '.long', '.macro', '.next', '.null', '.offs',
            '.page', '.pend', '.proc', '.rept', '.rta', '.shift', '.text', '.warn', '.word',
            '.xl', '.xs',
//            , '*='        // Not a valid keyword (uses both * and = signs) moved to symbols instead.
            ),

        /* 6502/6510 undocumented opcodes (often referred to as illegal instructions).
        *  These are present in the 6502/6510 but NOT in the newer CMOS revisions of the 65C02 or 65816.
        *  As they are undocumented instructions there are no "official" names for them, these are the names
        *  used by 64TASS V1.46.
        */
        4 => array(
            'ahx', 'alr', 'anc', 'ane', 'arr', 'asr', 'axs', 'dcm',
            'dcp', 'ins', 'isb', 'isc', 'jam', 'lae', 'las', 'lax',
            'lds', 'lxa', 'rla', 'rra', 'sax', 'sbx', 'sha', 'shs',
            'shx', 'shy', 'slo', 'sre', 'tas', 'xaa',
            ),
        /* 65c02 instructions, MOS added a few (much needed) instructions in the
        *  CMOS version of the 6502, but stupidly removed the undocumented/illegal opcodes.  */
        5 => array(
            'bra', 'dea', 'gra', 'ina', 'phx', 'phy', 'plx', 'ply',
            'stz', 'trb', 'tsb',
            ),
        /* 65816 instructions. */
        6 => array(
            'brl', 'cop', 'jml', 'jsl', 'mvn', 'mvp', 'pea', 'pei',
            'per', 'phb', 'phd', 'phk', 'plb', 'pld', 'rep', 'rtl',
            'sep', 'stp', 'swa', 'tad', 'tcd', 'tcs', 'tda',
            'tdc', 'tsa', 'tsc', 'txy', 'tyx', 'wai', 'xba', 'xce',
            ),
        /* Deprecated directives (or yet to be implemented). */
        7 => array(
            '.global', '.check'
            ),
        ),
    'SYMBOLS' => array(
//        '[', ']', '(', ')', '{', '}',    // These are already defined by GeSHi as BRACKETS.
        '*=', '#', '<', '>', '`', '=', '<', '>',
        '!=', '>=', '<=', '+', '-', '*', '/', '//', '|',
        '^', '&', '<<', '>>', '-', '~', '!',
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
            1 => 'color: #00f; font-weight:bold;',
            2 => 'color: #00f; font-weight:bold;',
            3 => 'color: #080; font-weight:bold;',
            4 => 'color: #f00; font-weight:bold;',
            5 => 'color: #80f; font-weight:bold;',
            6 => 'color: #f08; font-weight:bold;',
            7 => 'color: #a04; font-weight:bold; font-style: italic;',
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
            GESHI_NUMBER_BIN_PREFIX_PERCENT => 'color: #f00;',
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #080;'
            ),
        'REGEXPS' => array(
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
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC |
        GESHI_NUMBER_HEX_PREFIX_DOLLAR |
        GESHI_NUMBER_BIN_PREFIX_PERCENT,
        // AMCE Octal format not support and gets picked up as Decimal unfortunately.
    'REGEXPS' => array(
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