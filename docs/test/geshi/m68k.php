<?php
/*************************************************************************************
 * m68k.php
 * --------
 * Author: Benny Baumann (BenBE@omorphia.de)
 * Copyright: (c) 2007 Benny Baumann (http://www.omorphia.de/), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2007/02/06
 *
 * Motorola 68000 Assembler language file for GeSHi.
 *
 * Syntax definition as commonly used by the motorola documentation for the
 * MC68HC908GP32 Microcontroller (and maybe others).
 *
 * CHANGES
 * -------
 * 2008/05/23 (1.0.7.22)
 *   -  Added description of extra language features (SF#1970248)
 * 2007/06/02 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2007/06/02)
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
    'LANG_NAME' => 'Motorola 68000 Assembler',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        /*CPU*/
        1 => array(
            'adc','add','ais','aix','and','asl','asr','bcc','bclr','bcs','beq',
            'bge','bgt','bhcc','bhcs','bhi','bhs','bih','bil','bit','ble','blo',
            'bls','blt','bmc','bmi','bms','bne','bpl','bra','brclr','brn',
            'brset','bset','bsr','cbeq','clc','cli','clr','cmp','com','cphx',
            'cpx','daa','dbnz','dec','div','eor','inc','jmp','jsr','lda','ldhx',
            'ldx','lsl','lsr','mov','mul','neg','nop','nsa','ora','psha','pshh',
            'pshx','pula','pulh','pulx','rol','ror','rsp','rti','rts','sbc',
            'sec','sei','sta','sthx','stop','stx','sub','swi','tap','tax','tpa',
            'tst','tsx','txa','txs','wait'
        ),
        /*registers*/
        2 => array(
            'a','h','x',
            'hx','sp'
            ),
        /*Directive*/
        3 => array(
            '#define','#endif','#else','#ifdef','#ifndef','#include','#undef',
            '.db','.dd','.df','.dq','.dt','.dw','.end','.org','equ'
            ),
        ),
    'SYMBOLS' => array(
        ','
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff; font-weight:bold;',
            2 => 'color: #0000ff;',
            3 => 'color: #46aa03; font-weight:bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #adadad; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #0000ff;'
            ),
        'STRINGS' => array(
            0 => 'color: #7f007f;'
            ),
        'NUMBERS' => array(
            0 => 'color: #dd22dd;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #008000;'
            ),
        'REGEXPS' => array(
            0 => 'color: #22bbff;',
            1 => 'color: #22bbff;',
            2 => 'color: #993333;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        //Hex numbers
        0 => '#?0[0-9a-fA-F]{1,32}[hH]',
        //Binary numbers
        1 => '\%[01]{1,64}[bB]',
        //Labels
        2 => '^[_a-zA-Z][_a-zA-Z0-9]*?\:'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 8
);

?>
