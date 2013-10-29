<?php
/*************************************************************************************
 * 6502kickass.php
 * -------
 * Author: Warren Willmey
 * Copyright: (c) 2010 Warren Willmey.
 * Release Version: 1.0.8.11
 * Date Started: 2010/06/07
 *
 * MOS 6502 (6510) Kick Assembler 3.13 language file for GeSHi.
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
    'LANG_NAME' => 'MOS 6502 (6510) Kick Assembler format',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        /* 6502/6510 Opcodes including undocumented opcodes as Kick Assembler 3.13 does not make a distinction - they are ALL valid. */
        1 => array(
            'adc', 'ahx', 'alr', 'anc', 'anc2', 'and', 'arr', 'asl',
            'axs', 'bcc', 'bcs', 'beq', 'bit', 'bmi', 'bne', 'bpl',
            'brk', 'bvc', 'bvs', 'clc', 'cld', 'cli', 'clv', 'cmp',
            'cpx', 'cpy', 'dcp', 'dec', 'dex', 'dey', 'eor', 'inc',
            'inx', 'iny', 'isc', 'jmp', 'jsr', 'las', 'lax', 'lda',
            'ldx', 'ldy', 'lsr', 'nop', 'ora', 'pha', 'php', 'pla',
            'plp', 'rla', 'rol', 'ror', 'rra', 'rti', 'rts', 'sax',
            'sbc', 'sbc2', 'sec', 'sed', 'sei', 'shx', 'shy', 'slo',
            'sre', 'sta', 'stx', 'sty', 'tas', 'tax', 'tay', 'tsx',
            'txa', 'txs', 'tya', 'xaa',
            ),
        /* DTV additional Opcodes. */
        2 => array(
            'bra', 'sac', 'sir'
            ),
        /* Index Registers, yes the 6502 has other registers by they are only
        * accessable by specific opcodes. */
        3 => array(
            'x', 'y'
            ),
        /* Directives. */
        4 => array(
            '.pc', '.pseudopc', 'virtual', '.align', '.byte', '.word', '.text', '.fill',
            '.import source', '.import binary', '.import c64', '.import text', '.import', '.print', '.printnow',
            '.error', '.var', '.eval', '.const', '.eval const', '.enum', '.label', '.define', '.struct',
            'if', '.for', '.macro', '.function', '.return', '.pseudocommand', '.namespace', '.filenamespace',
            '.assert', '.asserterror',
            ),
        /* Kick Assembler 3.13 Functions/Operators. */
        5 => array(
            'size', 'charAt', 'substring', 'asNumber', 'asBoolean', 'toIntString', 'toBinaryString', 'toOctalString',
            'toHexString', 'lock',                                       // String functions/operators.
            'get', 'set', 'add', 'remove', 'shuffle',                    // List functions.
            'put', 'keys',                                               // Hashtable functions.
            'getType', 'getValue', 'CmdArgument',                        // Pseudo Commands functions.
            'asmCommandSize',                                            // Opcode Constants functions.
            'LoadBinary', 'getSize',
            'LoadSid', 'getData',
            'LoadPicture', 'width', 'height', 'getPixel', 'getSinglecolorByte', 'getMulticolorByte',
            'createFile', 'writeln',
            'cmdLineVars',
            'getX', 'getY', 'getZ',                                             // Vector functions.
            'RotationMatrix', 'ScaleMatrix', 'MoveMatrix', 'PerspectiveMatrix', // Matrix functions.

            ),

        /* Kick Assembler 3.13 Math Functions. */
        6 => array(
            'abs', 'acos', 'asin', 'atan', 'atan2', 'cbrt', 'ceil', 'cos', 'cosh',
            'exp', 'expm1', 'floor', 'hypot', 'IEEEremainder', 'log', 'log10',
            'log1p', 'max', 'min', 'pow', 'mod', 'random', 'round', 'signum',
            'sin', 'sinh', 'sqrt', 'tan', 'tanh', 'toDegrees', 'toRadians',
            ),

        /* Kick Assembler 3.13 Objects/Data Types. */
        7 => array(
            'List',          // List() Object.
            'Hashtable',     // Hashtable() Object.
            'Vector',        // Vector() Object.
            'Matrix',        // Matrix() Object.
            ),

        /* Kick Assembler 3.13 Constants. */
        8 => array(
            'PI', 'E',                                                         // Math Constants.
            'AT_ABSOLUTE' , 'AT_ABSOLUTEX' , 'AT_ABSOLUTEY' , 'AT_IMMEDIATE',  // Pseudo Commands Constants.
            'AT_INDIRECT' , 'AT_IZEROPAGEX' , 'AT_IZEROPAGEY' , 'AT_NONE',
            'BLACK', 'WHITE', 'RED', 'CYAN', 'PURPLE', 'GREEN', 'BLUE',        // Colour Constants.
            'YELLOW', 'ORANGE', 'BROWN', 'LIGHT_RED', 'DARK_GRAY', 'GRAY',
            'LIGHT_GREEN', 'LIGHT_BLUE', 'LIGHT_GRAY',
            'C64FILE',                                                         // Template Tag names.
            'BF_C64FILE', 'BF_BITMAP_SINGLECOLOR', 'BF_KOALA' , 'BF_FLI',      // Binary format constant
            ),

        ),
    'SYMBOLS' => array(
//        '[', ']', '(', ')', '{', '}',    // These are already defined by GeSHi as BRACKETS.
        '-', '+', '-', '*', '/', '>', '<', '<<', '>>', '&', '|', '^', '=', '==',
        '!=', '>=', '<=', '!', '&&', '||', '#',
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => true,
        5 => true,
        6 => true,
        7 => true,
        8 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #00f; font-weight:bold;',
            2 => 'color: #00f; font-weight:bold;',
            3 => 'color: #00f; font-weight:bold;',
            4 => 'color: #080; font-weight:bold;',
            5 => 'color: #80f; font-weight:bold;',
            6 => 'color: #f08; font-weight:bold;',
            7 => 'color: #a04; font-weight:bold; font-style: italic;',
            8 => 'color: #f08; font-weight:bold;',
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
            GESHI_NUMBER_FLT_NONSCI         => 'color: #f00;',
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #080;'
            ),
        'REGEXPS' => array(
            0 => 'color: #933;',
            1 => 'color: #933;',
            2 => 'color: #933;',
            3 => 'color: #00f; font-weight:bold;',
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
        GESHI_NUMBER_BIN_PREFIX_PERCENT,
        // AMCE Octal format not support and gets picked up as Decimal unfortunately.
    'REGEXPS' => array(
        //Labels end with a collon.
        0 => '[!]{0,1}[_a-zA-Z][_a-zA-Z0-9]*\:',
        //Multi Labels (local labels) references start with ! and end with + or - for forward/backward reference.
        1 => '![_a-zA-Z][_a-zA-Z0-9]*[+-]',
        //Macros start with a colon :Macro.
        2 => ':[_a-zA-Z][_a-zA-Z0-9]*',
        // Opcode Constants, such as LDA_IMM, STA_IZPY are basically all 6502 opcodes
        // in UPPER case followed by _underscore_ and the ADDRESS MODE.
        // As you might imagine that is rather a lot ( 78 supported Opcodes * 12 Addressing modes = 936 variations)
        // So I thought it better and easier to maintain as a regular expression.
        // NOTE: The order of the Address Modes must be maintained or it wont work properly (eg. place ZP first and find out!)
        3 => '[A-Z]{3}[2]?_(?:IMM|IND|IZPX|IZPY|ZPX|ZPY|ABSX|ABSY|REL|ABS|ZP)',
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 8,
    'PARSER_CONTROL' => array(
        'NUMBERS'  => array(
            'PRECHECK_RX' => '/[\da-fA-F\.\$\%]/'
            ),
        'KEYWORDS' => array(
            5 => array (
                'DISALLOWED_BEFORE' => "(?<![a-zA-Z0-9\$_\|\;>|^&'\"])"
                ),
            6 => array (
                'DISALLOWED_BEFORE' => "(?<![a-zA-Z0-9\$_\|\;>|^&'\"])"
                ),
            8 => array (
                'DISALLOWED_BEFORE' => "(?<![a-zA-Z0-9\$_\|\;>|^&'\"])"
                )
            )
        ),
);

?>