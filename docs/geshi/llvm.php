<?php
/*************************************************************************************
 * llvm.php
 * --------
 * Author: Benny Baumann (BenBE@geshi.org), Azriel Fasten (azriel.fasten@gmail.com)
 * Copyright: (c) 2010 Benny Baumann (http://qbnz.com/highlighter/), Azriel Fasten (azriel.fasten@gmail.com)
 * Release Version: 1.0.8.11
 * Date Started: 2010/10/14
 *
 * LLVM language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2010/10/14 (1.0.8.10)
 *  -  First Release
 *
 * TODO (updated 2010/10/14)
 * -------------------------
 * * Check if all links aren't broken
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

$language_data = array(
    'LANG_NAME' => 'LLVM Intermediate Representation',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array(),
    'HARDQUOTE' => array("\"", "\""),
    'HARDESCAPE' => array("\"", "\\"),
    'HARDCHAR' => "\\",
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        // 1 => "#\\\\[nfrtv\$\"\n\\\\]#i",
        //Hexadecimal Char Specs
        // 2 => "#\\\\x[\da-fA-F]{1,2}#i",
        //Octal Char Specs
        // 3 => "#\\\\[0-7]{1,3}#",
        //String Parsing of Variable Names
        // 4 => "#\\$[a-z0-9_]+(?:\\[[a-z0-9_]+\\]|->[a-z0-9_]+)?|(?:\\{\\$|\\$\\{)[a-z0-9_]+(?:\\[('?)[a-z0-9_]*\\1\\]|->[a-z0-9_]+)*\\}#i",
        //Experimental extension supporting cascaded {${$var}} syntax
        // 5 => "#\$[a-z0-9_]+(?:\[[a-z0-9_]+\]|->[a-z0-9_]+)?|(?:\{\$|\$\{)[a-z0-9_]+(?:\[('?)[a-z0-9_]*\\1\]|->[a-z0-9_]+)*\}|\{\$(?R)\}#i",
        //Format String support in ""-Strings
        // 6 => "#%(?:%|(?:\d+\\\\\\\$)?\\+?(?:\x20|0|'.)?-?(?:\d+|\\*)?(?:\.\d+)?[bcdefFosuxX])#"
        ),
    'NUMBERS' =>
    GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        0 => array(
            'to', 'nuw', 'nsw', 'align', 'inbounds', 'entry', 'return'
            ),
        //Terminator Instructions
        1 => array(
            'ret', 'br', 'switch', 'indirectbr', 'invoke', 'unwind', 'unreachable'
            ),
        //Binary Operations
        2 => array(
            'add', 'fadd', 'sub', 'fsub', 'mul', 'fmul', 'udiv', 'sdiv', 'fdiv', 'urem', 'frem', 'srem'
            ),
        //Bitwise Binary Operations
        3 => array(
            'shl', 'lshr', 'ashr', 'and', 'or', 'xor'
            ),
        //Vector Operations
        4 => array(
            'extractelement', 'insertelement', 'shufflevector'
            ),
        //Aggregate Operations
        5 => array(
            'extractvalue', 'insertvalue'
            ),
        //Memory Access and Addressing Operations
        6 => array(
            'alloca', 'load', 'store', 'getelementptr'
            ),
        //Conversion Operations
        7 => array(
            'trunc', 'zext', 'sext', 'fptrunc', 'fpext', 'fptoui', 'fptosi',
            'uitofp', 'sitofp', 'ptrtoint', 'inttoptr', 'bitcast'
            ),
        //Other Operations
        8 => array(
            'icmp', 'fcmp', 'phi', 'select', 'call', 'va_arg'
            ),
        //Linkage Types
        9 => array(
            'private', 'linker_private', 'linker_private_weak', 'linker_private_weak_def_auto',
            'internal', 'available_externally', 'linkonce', 'common', 'weak', 'appending',
            'extern_weak', 'linkonce_odr', 'weak_odr', 'externally visible', 'dllimport', 'dllexport',
            ),
        //Calling Conventions
        10 => array(
            'ccc', 'fastcc', 'coldcc', 'cc 10'
            ),
        //Named Types
        11 => array(
            'type'
            ),
        //Parameter Attributes
        12 => array(
            'zeroext', 'signext', 'inreg', 'byval', 'sret', 'noalias', 'nocapture', 'nest'
            ),
        //Function Attributes
        13 => array(
            'alignstack', 'alwaysinline', 'inlinehint', 'naked', 'noimplicitfloat', 'noinline', 'noredzone', 'noreturn',
            'nounwind', 'optsize', 'readnone', 'readonly', 'ssp', 'sspreq',
            ),
        //Module-Level Inline Assembly
        14 => array(
            'module asm'
            ),
        //Data Layout
        15 => array(
            'target datalayout'
            ),
        //Primitive Types
        16 => array(
            'x86mmx',
            'void',
            'label',
            'metadata',
            'opaque'
            ),
        //Floating Point Types
        17 => array(
            'float', 'double', 'fp128', 'x86_fp80', 'ppc_fp128',
            ),
        //Simple Constants
        18 => array(
            'false', 'true', 'null'
            ),
        //Global Variable and Function Addresses
        19 => array(
            'global', 'addrspace', 'constant', 'section'
            ),
        //Functions
        20 => array(
            'declare', 'define'
            ),
        //Complex Constants
        21 => array(
            'zeroinitializer'
            ),
        //Undefined Values
        22 => array(
            'undef'
            ),
        //Addresses of Basic Blocks
        23 => array(
            'blockaddress'
            ),
        //Visibility Styles
        24 => array(
            'default', 'hidden', 'protected'
            ),
        25 => array(
            'volatile'
            ),
        26 => array(
            'tail'
            ),
        ),
    'SYMBOLS' => array(
        0 => array(
            '(', ')', '[', ']', '{', '}',
            '!', '@', '%', '&', '|', '/',
            '<', '>',
            '=', '-', '+', '*',
            '.', ':', ',', ';'
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true,
        7 => true,
        8 => true,
        9 => true,
        10 => true,
        11 => true,
        12 => true,
        13 => true,
        14 => true,
        15 => true,
        16 => true,
        17 => true,
        18 => true,
        19 => true,
        20 => true,
        21 => true,
        22 => true,
        23 => true,
        24 => true,
        25 => true,
        26 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            0 => 'color: #209090;',
            1 => 'color: #0000F0;',
            2 => 'color: #00F000; font-weight: bold;',
            3 => 'color: #F00000;',
            4 => 'color: #00F0F0; font-weight: bold;',
            5 => 'color: #F000F0; font-weight: bold;',
            6 => 'color: #403020; font-weight: bold;',
            7 => 'color: #909090; font-weight: bold;',
            8 => 'color: #009090; font-weight: bold;',
            9 => 'color: #900090; font-weight: bold;',
            10 => 'color: #909000; font-weight: bold;',
            11 => 'color: #000090; font-weight: bold;',
            12 => 'color: #900000; font-weight: bold;',
            13 => 'color: #009000; font-weight: bold;',
            14 => 'color: #F0F090; font-weight: bold;',
            15 => 'color: #F090F0; font-weight: bold;',
            16 => 'color: #90F0F0; font-weight: bold;',
            17 => 'color: #9090F0; font-weight: bold;',
            18 => 'color: #90F090; font-weight: bold;',
            19 => 'color: #F09090; font-weight: bold;',
            20 => 'color: #4040F0; font-weight: bold;',
            21 => 'color: #40F040; font-weight: bold;',
            22 => 'color: #F04040; font-weight: bold;',
            23 => 'color: #F0F040; font-weight: bold;',
            24 => 'color: #F040F0; font-weight: bold;',
            25 => 'color: #40F0F0; font-weight: bold;',
            26 => 'color: #904040; font-weight: bold;',
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #660099; font-weight: bold;',
            3 => 'color: #660099; font-weight: bold;',
            4 => 'color: #006699; font-weight: bold;',
            5 => 'color: #006699; font-weight: bold; font-style: italic;',
            6 => 'color: #009933; font-weight: bold;',
            'HARD' => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #0000ff;',
            'HARD' => 'color: #0000ff;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #208080;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #208080;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color:#800080;',
            ),
        'METHODS' => array(
            1 => 'color: #004000;',
            2 => 'color: #004000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;',
            ),
        'REGEXPS' => array(
            0 => 'color: #007088;',
            1 => 'color: #007088;',
            // 2 => 'color: #000088;',
            3 => 'color: #700088;',
            4 => 'color: #010088;',
            // 5 => 'color: #610088;',
            // 6 => 'color: #616088;',
            // 7 => 'color: #616988;',
            // 8 => 'color: #616908;',
            9 => 'color: #6109F8;',
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => '',
            4 => '',
            5 => ''
            )
        ),
    'URLS' => array(
        0 => '',
        1 => 'http://llvm.org/docs/LangRef.html#i_{FNAME}',
        2 => 'http://llvm.org/docs/LangRef.html#i_{FNAME}',
        3 => 'http://llvm.org/docs/LangRef.html#i_{FNAME}',
        4 => 'http://llvm.org/docs/LangRef.html#i_{FNAME}',
        5 => 'http://llvm.org/docs/LangRef.html#i_{FNAME}',
        6 => 'http://llvm.org/docs/LangRef.html#i_{FNAME}',
        7 => 'http://llvm.org/docs/LangRef.html#i_{FNAME}',
        8 => 'http://llvm.org/docs/LangRef.html#i_{FNAME}',
        9 => 'http://llvm.org/docs/LangRef.html#linkage_{FNAME}',
        10 => 'http://llvm.org/docs/LangRef.html#callingconv',
        11 => 'http://llvm.org/docs/LangRef.html#namedtypes',
        12 => 'http://llvm.org/docs/LangRef.html#paramattrs',
        13 => 'http://llvm.org/docs/LangRef.html#fnattrs',
        14 => 'http://llvm.org/docs/LangRef.html#moduleasm',
        15 => 'http://llvm.org/docs/LangRef.html#datalayout',
        16 => 'http://llvm.org/docs/LangRef.html#t_{FNAME}',
        17 => 'http://llvm.org/docs/LangRef.html#t_floating',
        18 => 'http://llvm.org/docs/LangRef.html#simpleconstants',
        19 => 'http://llvm.org/docs/LangRef.html#globalvars',
        20 => 'http://llvm.org/docs/LangRef.html#functionstructure',
        21 => 'http://llvm.org/docs/LangRef.html#complexconstants',
        22 => 'http://llvm.org/docs/LangRef.html#undefvalues',
        23 => 'http://llvm.org/docs/LangRef.html#blockaddress',
        24 => 'http://llvm.org/docs/LangRef.html#visibility',
        25 => 'http://llvm.org/docs/LangRef.html#volatile',
        26 => 'http://llvm.org/docs/LangRef.html#i_call',
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        //Variables
        0 => '%[-a-zA-Z$\._][-a-zA-Z$\._0-9]*',
        //Labels
        // 1 => '[-a-zA-Z$\._0-9]+:',
        1 => '(?<!\w)[\-\w\$\.]+:(?![^">]*<)',
        //Strings
        // 2 => '"[^"]+"',
        //Unnamed variable slots
        3 => '%[-]?[0-9]+',
        //Integer Types
        4 => array(
            GESHI_SEARCH => '(?<!\w)i\d+(?!\w)',
            GESHI_REPLACE => '\\0',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '<a href="http://llvm.org/docs/LangRef.html#t_integer">',
            GESHI_AFTER => '</a>'
            ),
        //Comments
        // 5 => ';.*',
        //Integer literals
        // 6 => '\\b[-]?[0-9]+\\b',
        //Floating point constants
        // 7 => '\\b[-+]?[0-9]+\.[0-9]*\([eE][-+]?[0-9]+\)?\\b',
        //Hex constants
        // 8 => '\\b0x[0-9A-Fa-f]+\\b',
        //Global variables
        9 => array(
            GESHI_SEARCH => '@[-a-zA-Z$\._][-a-zA-Z$\._0-9]*',
            GESHI_REPLACE => '\\0',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '<a href="http://llvm.org/docs/LangRef.html#globalvars">',
            GESHI_AFTER => '</a>'
            ),
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true
        ),
    'SCRIPT_DELIMITERS' => array(),
    'TAB_WIDTH' => 4
);

?>