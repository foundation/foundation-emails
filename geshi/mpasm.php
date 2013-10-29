<?php
/*************************************************************************************
 * mpasm.php
 * ---------
 * Author: Bakalex (bakalex@gmail.com)
 * Copyright: (c) 2004 Bakalex, Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/12/6
 *
 * Microchip Assembler language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/05/23 (1.0.7.22)
 *  - Added description of extra language features (SF#1970248)
 * 2005/01/29 (1.0.0)
 *  - First Release
 *
 * TODO (updated 2005/12/6)
 * -------------------------
 *
 * For the moment, i've only added PIC16C6X registers. We need more (PIC16F/C7x/8x,
 * PIC10, PIC18 and dsPIC registers).
 * Must take a look to dsPIC instructions.
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
    'LANG_NAME' => 'Microchip Assembler',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        /*Directive Language*/
        4 => array(
            'CONSTANT', '#DEFINE', 'END', 'EQU', 'ERROR', 'ERROR-LEVEL', '#INCLUDE', 'LIST',
            'MESSG', 'NOLIST', 'ORG', 'PAGE', 'PROCESSOR', 'RADIX', 'SET', 'SPACE', 'SUBTITLE',
            'TITLE', '#UNDEFINE', 'VARIABLE', 'ELSE', 'ENDIF', 'ENDW', 'IF', 'IFDEF', 'IFNDEF',
            'WHILE', '__BADRAM', 'CBLOCK', '__CONFIG', 'DA', 'DATA', 'DB', 'DE', 'DT', 'DW',
            'ENDC', 'FILL', '__IDLOCS', '__MAXRAM', 'RES', 'ENDM', 'EXITM', 'EXPAND', 'LOCAL',
            'MACRO', 'NOEXPAND', 'BANKISEL', 'BANKSEL', 'CODE', 'EXTERN', 'GLOBAL', 'IDATA',
            'PAGESEL', 'UDATA', 'UDATA_ACS', 'UDATA_OVR', 'UDATA_SHR'
            ),
        /* 12&14-bit Specific Instruction Set*/
        1 => array(
            'andlw', 'call', 'clrwdt', 'goto', 'iorlw', 'movlw', 'option', 'retlw', 'sleep',
            'tris', 'xorlw', 'addwf', 'andwf', 'clrf', 'clrw', 'comf', 'decf', 'decfsz', 'incf',
            'incfsz', 'iorwf', 'movf', 'nop', 'rlf', 'rrf', 'subwf', 'swapf', 'xorwf',
            'bcf', 'bsf', 'btfsc', 'btfss',
            'addlw', 'retfie', 'return', 'sublw', 'addcf', 'adddcf', 'b', 'bc', 'bdc',
            'bnc', 'bndc', 'bnz', 'bz', 'clrc', 'clrdc', 'clrz', 'lcall', 'lgoto', 'movfw',
            'negf', 'setc', 'setdc', 'setz', 'skpc', 'skpdc', 'skpnc', 'skpndc', 'skpnz', 'skpz',
            'subcf', 'subdcf', 'tstf'
            ),
        /* 16-bit Specific Instructiob Set */
        2 => array (
            'movfp', 'movlb', 'movlp', 'movpf', 'movwf', 'tablrd', 'tablwt', 'tlrd', 'tlwt',
            'addwfc', 'daw', 'mullw', 'negw', 'rlcf', 'rlncf', 'rrcf', 'rrncf', 'setf', 'subwfb',
            'btg', 'cpfseq', 'cpfsgt', 'cpfslt', 'dcfsnz', 'infsnz', 'tstfsz', 'lfsr', 'bnn',
            'bnov', 'bra', 'pop', 'push', 'rcall', 'reset'
            ),
        /* Registers */
        3 => array(
            'INDF', 'TMR0', 'PCL', 'STATUS', 'FSR', 'PORTA', 'PORTB', 'PORTC', 'PORTD', 'PORTE',
            'PCLATH', 'INTCON', 'PIR1', 'PIR2', 'TMR1L', 'TMR1H', 'T1CON', 'TMR2', 'T2CON', 'TMR2L',
            'TMR2H', 'TMR0H', 'TMR0L', 'SSPBUF', 'SSPCON', 'CCPR1L', 'CCPR1H', 'CCP1CON', 'RCSTA',
            'TXREG', 'RCREG', 'CCPR2L', 'CCPR2H', 'CCP2CON', 'OPTION', 'TRISA', 'TRISB', 'TRISC',
            'TRISD', 'TRISE', 'PIE2', 'PIE1', 'PR2', 'SSPADD', 'SSPSTAT', 'TXSTA', 'SPBRG'
            ),
        /*Operands*/
        5 => array(
            'high','low'
            )
        ),
    'SYMBOLS' => array(
        '[', ']', '(', ')'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #00007f;',
            2 => 'color: #0000ff;',
            3 => 'color: #007f00;',
            4 => 'color: #46aa03; font-weight:bold;',
            5 => 'color: #7f0000;'
            ),
        'COMMENTS' => array(
            1 => 'color: #adadad; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #7f007f;'
            ),
        'NUMBERS' => array(
            0 => 'color: #ff0000;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'REGEXPS' => array(
            0 => 'color: #ff0000;',
            1 => 'color: #ff0000;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        //Hex numbers
        0 => '[0-9a-fA-F]{1,32}[hH]',
        //Binary numbers
        1 => '[01]{1,64}[bB]'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
