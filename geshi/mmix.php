<?php
/*************************************************************************************
 * mmix.php
 * -------
 * Author: Benny Baumann (BenBE@geshi.org)
 * Copyright: (c) 2009 Benny Baumann (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2009/10/16
 *
 * MMIX Assembler language file for GeSHi.
 *
 * This is an implementation of the MMIX language as designed by Donald E. Knuth
 *
 * CHANGES
 * -------
 * 2004/08/05 (1.0.8.6)
 *   -  First Release
 *
 * TODO (updated 2009/10/16)
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
    'LANG_NAME' => 'MMIX',
    'COMMENT_SINGLE' => array(1 => ';', 2 => '%'),
    'COMMENT_MULTI' => array(),
    //Line address prefix suppression
    'COMMENT_REGEXP' => array(
        3 => "/^\s*(?!\s)[^\w].*$/m",
        4 => "/^\s*[0-9a-f]{12,16}+(?:\s+[0-9a-f]+(?:\.{3}[0-9a-f]{2,})?)?:/mi"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'NUMBERS' => array(
        1 => '(?<![\d\$#\w])[\da-fA-F]+(?!\w)',
        2 => '#[\da-fA-F]+',
        3 => '\$\d+'
        ),
    'KEYWORDS' => array(
        /*CPU*/
        1 => array(
            '16ADDU','2ADDU','4ADDU','8ADDU','ADD','ADDU','AND','ANDN','ANDNH',
            'ANDNL','ANDNMH','ANDNML','BDIF','BEV','BN','BNN','BNP','BNZ','BOD',
            'BP','BZ','CMP','CMPU','CSEV','CSN','CSNN','CSNP','CSNZ','CSOD',
            'CSP','CSWAP','CSZ','DIV','DIVU','FADD','FCMP','FCMPE','FDIV',
            'FEQL','FEQLE','FINT','FIX','FIXU','FLOT','FLOTU','FMUL','FREM',
            'FSQRT','FSUB','FUN','FUNE','GET','GETA','GO','INCH','INCL','INCMH',
            'INCML','JMP','LDA','LDB','LDBU','LDHT','LDO','LDOU','LDSF','LDT',
            'LDTU','LDUNC','LDVTS','LDW','LDWU','MOR','MUL','MULU','MUX','MXOR',
            'NAND','NEG','NEGU','NOR','NXOR','ODIF','OR','ORH','ORL','ORMH',
            'ORML','ORN','PBEV','PBN','PBNN','PBNP','PBNZ','PBOD','PBP','PBZ',
            'POP','PREGO','PRELD','PREST','PUSHGO','PUSHJ','PUT','RESUME','SADD',
            'SAVE','SETH','SETL','SETMH','SETML','SFLOT','SFLOTU','SL','SLU',
            'SR','SRU','STB','STBU','STCO','STHT','STO','STOU','STSF','STT',
            'STTU','STUNC','STW','STWU','SUB','SUBU','SWYM','SYNC','SYNCD',
            'SYNCID','TDIF','TRAP','TRIP','UNSAVE','WDIF','XOR','ZSEV','ZSN',
            'ZSNN','ZSNP','ZSNZ','ZSOD','ZSP','ZSZ'
            ),
        2 => array(
            'BSPEC','BYTE','ESPEC','GREG','IS','LOC','LOCAL','OCTA',
            'PREFIX','SET','TETRA','WYDE'
            ),
        /*registers*/
        3 => array(
            'rA','rB','rC','rD','rE','rF','rG','rH','rI','rJ','rK','rL','rM',
            'rN','rO','rP','rQ','rR','rS','rT','rU','rV','rW','rX','rY','rZ',
            'rBB','rTT','rWW','rXX','rYY','rZZ'
            ),
//        /*Directive*/
//        4 => array(
//            ),
//        /*Operands*/
//        5 => array(
//            )
        ),
    'SYMBOLS' => array(
        '[', ']', '(', ')',
        '+', '-', '*', '/', '%',
        '.', ',', ';', ':',
        '<<','>>'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => false,
        3 => true,
//        4 => false,
//        5 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #00007f; font-weight: bold;',
            2 => 'color: #0000ff; font-weight: bold;',
            3 => 'color: #00007f;',
//            4 => 'color: #000000; font-weight: bold;',
//            5 => 'color: #000000; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #666666; font-style: italic;',
            3 => 'color: #666666; font-style: italic;',
            4 => 'color: #adadad; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900; font-weight: bold;'
            ),
        'STRINGS' => array(
            0 => 'color: #7f007f;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000ff;',
            1 => 'color: #0000ff;',
            2 => 'color: #0000ff;',
            3 => 'color: #00007f;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
//            0 => 'color: #0000ff;',
//            1 => 'color: #0000ff;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
//        4 => '',
//        5 => ''
        ),
/*
    'NUMBERS' =>
        GESHI_NUMBER_BIN_PREFIX_PERCENT |
        GESHI_NUMBER_BIN_SUFFIX |
        GESHI_NUMBER_HEX_PREFIX |
        GESHI_NUMBER_HEX_SUFFIX |
        GESHI_NUMBER_OCT_SUFFIX |
        GESHI_NUMBER_INT_BASIC |
        GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F |
        GESHI_NUMBER_FLT_SCI_ZERO,
*/
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        //Hex numbers
//        0 => /*  */ "(?<=([\\s\\(\\)\\[\\],;.:+\\-\\/*]))(?:[0-9][0-9a-fA-F]{0,31}[hH]|0x[0-9a-fA-F]{1,32})(?=([\\s\\(\\)\\[\\],;.:+\\-\\/*]))",
        //Binary numbers
//        1 => "(?<=([\\s\\(\\)\\[\\],;.:+\\-\\/*]))[01]{1,64}[bB](?=([\\s\\(\\)\\[\\],;.:+\\-\\/*]))"
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 8,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "(?<![a-zA-Z0-9\$_\|\#>|^])",
            'DISALLOWED_AFTER' => "(?![a-zA-Z0-9_<\|%])"
        )
    )
);

?>