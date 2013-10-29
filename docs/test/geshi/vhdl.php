<?php
/*************************************************************************************
 * vhdl.php
 * --------
 * Author: Alexander 'E-Razor' Krause (admin@erazor-zone.de)
 * Contributors:
 *  - Kevin Thibedeau (kevinpt@yahoo.com)
 * Copyright: (c) 2005 Alexander Krause
 * Release Version: 1.0.8.11
 * Date Started: 2005/06/15
 *
 * VHDL (VHSICADL, very high speed integrated circuit HDL) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2012/4/30 (1.0.8.10)
 *  -  Reworked to support new features of VHDL-2008.
 *  -    Changes include: multi-line comments, all new keywords, PSL keywords and metacomments,
 *  -    based literals, attribute highlighting, preprocessor macros (from PSL), and other small
 *  -    improvements.
 * 2008/05/23 (1.0.7.22)
 *  -  Added description of extra language features (SF#1970248)
 *  -  Optimized regexp group 0 somewhat
 * 2006/06/15 (1.0.0)
 *  -  First Release
 *
 * TODO
 * ----
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
    'LANG_NAME' => 'VHDL',
    'COMMENT_SINGLE' => array(1 => '--'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        // PSL adds C-preprocessor support
        1 => '/(?<=\s)#(?:\\\\\\\\|\\\\\\n|.)*$/m',
        // PSL metacomments (single-line only for now)
        2 => '/--\s*@?psl(?:.)*?;$/m',
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        /*keywords*/
        1 => array(
            'access','after','alias','all','attribute','architecture','array','begin',
            'block','body','buffer','bus','case','case?','component','configuration','constant','context',
            'disconnect','downto','else','elsif','end','entity','exit','file','for','force',
            'function','generate','generic','group','guarded','if','impure','in',
            'inertial','inout','is','label','library','linkage','literal','loop',
            'map','new','next','null','of','on','open','others','out','package',
            'port','postponed','procedure','process','protected','pure','range','record','register',
            'reject','release','report','return','select','severity','shared','signal','subtype',
            'then','to','transport','type','unaffected','units','until','use','variable',
            'wait','when','while','with'
            ),
        /*types and standard libs*/
        2 => array(
            'bit','bit_vector','character','boolean','integer','real','time','delay_length','string',
            'severity_level','positive','natural','signed','unsigned','line','text',
            'std_logic','std_logic_vector','std_ulogic','std_ulogic_vector',
            'sfixed','ufixed','float','float32','float64','float128',
            'work','ieee','std_logic_1164','math_real','math_complex','textio',
            'numeric_std','numeric_std_signed','numeric_std_unsigned','numeric_bit'
            ),
        /*operators*/
        3 => array(
            'abs','and','mod','nor','not','or','rem','rol','ror','sla','sll','sra','srl','xnor','xor'
            ),
        /*psl*/
        4 => array(
            'assert','assume','assume_guarantee','clock','const','countones','cover','default',
            'endpoint','fairness','fell','forall','inf','inherit','isunknown','onehot','onehot0','property',
            'prev','restrict','restrict_guarantee','rose','sequence','stable','strong','union','vmode','vprop','vunit'
            ),
        /*psl operators*/
        5 => array(
            'abort','always','before','before!','before!_','before_','eventually!','never',
            'next!','next_a','next_a!','next_e','next_e!','next_event','next_event!','next_event_a','next_event_a!',
            'next_event_e','next_event_e!','until!','until!_','until_','within'
            )
        ),
    'SYMBOLS' => array(
        '[', ']', '(', ')',
        ';',':',
        '<','>','=','+','-','*','/','&','|','?'
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
            1 => 'color: #000080; font-weight: bold;',
            2 => 'color: #0000ff;',
            3 => 'color: #000066;',
            4 => 'color: #000080; font-weight: bold;',
            5 => 'color: #000066;'
            ),
        'COMMENTS' => array(
            1 => 'color: #008000; font-style: italic;',
            2 => 'color: #ff0000; font-weight: bold;',
            'MULTI' => 'color: #008000; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000066;'
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
            0 => 'color: #000066;'
            ),
        'REGEXPS' => array(
            0 => 'color: #ff0000;',
            //1 => 'color: #ff0000;',
            2 => 'color: #ee82ee;'
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
        //Based literals, scientific notation, and time units
        0 => '(\b\d+#[[:xdigit:]_]+#)|'.
            '(\b[\d_]+(\.[\d_]+)?[eE][+\-]?[\d_]+)|'.
            '(\b(hr|min|sec|ms|us|ns|ps|fs)\b)',
        //Character literals
        /* GeSHi won't match this pattern for some reason and QUOTEMARKS
         * can't be used because it interferes with attribute parsing */
        /*1 => "\b'.'\b",*/
        //Attributes
        2 => "'\w+(?!')"
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
