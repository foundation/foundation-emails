<?php
/*************************************************************************************
 * pic16.php
 * -------
 * Author: Phil Mattison (mattison@ohmikron.com)
 * Copyright: (c) 2008 Ohmikron Corp. (http://www.ohmikron.com/)
 * Release Version: 1.0.8.11
 * Date Started: 2008/07/30
 *
 * PIC16 Assembler language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/07/30 (1.0.8)
 *   -  First Release
 *
 * TODO (updated 2008/07/30)
 * -------------------------
 *
 *************************************************************************************
 *
 *   This file is part of GeSHi.
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
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'PIC16',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        /*Instructions*/
        1 => array(
            'addcf','adddcf','addlw','addwf','andlw','andwf','bc','bcf','bdc',
            'bnc','bndc','bnz','bsf','btfsc','btfss','bz','call','clrc','clrdc',
            'clrf','clrw','clrwdt','clrz','comf','decf','goto','incf','incfsz',
            'iorlw','iorwf','lcall','lgoto','movf','movfw','movlw','movwf',
            'option','negf','nop','retfie','retlw','return','rlf','rrf','setc',
            'setdc','setz','skpc','skpdc','skpnc','skpndc','skpnz','skpz',
            'sleep','subcf','subdcf','sublw','subwf','swapf','tris','tstf',
            'xorlw','xorwf'
            ),
        /*Registers*/
        2 => array(
            'INDF','TMR0','OPTION','PCL','STATUS','FSR','PORTA','PORTB','PORTC',
            'PORTD','PORTE','PORTF','TRISA','TRISB','TRISC','TRISD','TRISE',
            'TRISF','PCLATH','INTCON','PIR1','PIE1','PCON','CMCON','VRCON',
            'F','W'
            ),
        /*Directives*/
        3 => array(
            '_BADRAM','BANKISEL','BANKSEL','CBLOCK','CODE','_CONFIG','CONSTANT',
            'DA','DATA','DB','DE','#DEFINE','DT','DW','ELSE','END','ENDC',
            'ENDIF','ENDM','ENDW','EQU','ERROR','ERRORLEVEL','EXITM','EXPAND',
            'EXTERN','FILL','GLOBAL','IDATA','_IDLOCS','IF','IFDEF','IFNDEF',
            'INCLUDE','#INCLUDE','LIST','LOCAL','MACRO','_MAXRAM','MESSG',
            'NOEXPAND','NOLIST','ORG','PAGE','PAGESEL','PROCESSOR','RADIX',
            'RES','SET','SPACE','SUBTITLE','TITLE','UDATA','UDATA_ACS',
            'UDATA_OVR','UDATA_SHR','#UNDEFINE','VARIABLE','WHILE',
            'D','H','O','B','A'
            ),
        ),
    'SYMBOLS' => array('=','.',',',':'),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000a0; font-weight: bold;',
            2 => 'color: #aa3300; font-weight: bold;',
            3 => 'color: #0000ff;',
            ),
        'COMMENTS' => array(
            1 => 'color: #00a000;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #ff0000;'
            ),
        'BRACKETS' => array(
            0 => 'color: #0000ff;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff7700;'
            ),
        'NUMBERS' => array(
            0 => 'color: #ff7700;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #7777ff;'
            ),
        'REGEXPS' => array(),
        'SCRIPT' => array()
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC |
        GESHI_NUMBER_BIN_SUFFIX |
        GESHI_NUMBER_HEX_PREFIX |
        GESHI_NUMBER_HEX_SUFFIX,
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array(),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "a-zA-Z0-9\$_\|\#>|^",
            'DISALLOWED_AFTER' => "a-zA-Z0-9_<\|%"
            )
        )
);

?>
