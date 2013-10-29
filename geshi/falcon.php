<?php
/*************************************************************************************
 * falcon.php
 * ---------------------------------
 * Author: billykater (billykater+geshi@gmail.com)
 * Copyright: (c) 2010 billykater (http://falconpl.org/)
 * Release Version: 1.0.8.11
 * Date Started: 2010/06/07
 *
 * Falcon language file for GeSHi.
 *
 * CHANGES
 * -------
 * <2010/8/1> (1.0.8.10)
 *  -  First Release
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
 * ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Falcon',
    'COMMENT_SINGLE' => array( 1 => '//' ),
    'COMMENT_MULTI' => array( '/*' => '*/' ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array( "'", '"' ),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'break','case','catch','class','const','continue','def','default',
            'dropping','elif','else','end','enum','for','forfirst','forlast',
            'formiddle','from','function','global','if','init','innerfunc',
            'launch','loop','object','raise','return','select','state','static',
            'switch','try','while'
        ),
        2 => array(
            'false','nil','true',
        ),
        3 => array(
            'and','as','eq','fself','in','not','notin','or','provides','self','to'
        ),
        4 => array(
            'directive','export','import','load','macro'
        ),
        5 => array(
            'ArrayType','BooleanType','ClassMethodType','ClassType','DictionaryType',
            'FunctionType','MemBufType','MethodType','NilType','NumericType','ObjectType',
            'RangeType','StringType','LBindType'
        ),
        6 => array(
            "CurrentTime","IOStream","InputStream","MemBufFromPtr","OutputStream",
            "PageDict","ParseRFC2822","abs","acos","all",
            "allp","any","anyp","argd","argv",
            "arrayAdd","arrayBuffer","arrayCompact","arrayDel","arrayDelAll",
            "arrayFill","arrayFind","arrayHead","arrayIns","arrayMerge",
            "arrayNM","arrayRemove","arrayResize","arrayScan","arraySort",
            "arrayTail","asin","assert","atan","atan2",
            "attributes","baseClass","beginCritical","bless","brigade",
            "broadcast","cascade","ceil","choice","chr",
            "className","clone","combinations","compare","consume",
            "cos","deg2rad","deoob","derivedFrom","describe",
            "deserialize","dictBack","dictBest","dictClear","dictFill",
            "dictFind","dictFront","dictGet","dictKeys","dictMerge",
            "dictRemove","dictSet","dictValues","dirChange","dirCurrent",
            "dirMake","dirMakeLink","dirReadLink","dirRemove","dolist",
            "endCritical","epoch","eval","exit","exp",
            "factorial","fileChgroup","fileChmod","fileChown","fileCopy",
            "fileExt","fileMove","fileName","fileNameMerge","filePath",
            "fileRemove","fileType","fileUnit","filter","fint",
            "firstOf","floop","floor","fract","getAssert",
            "getEnviron","getProperty","getSlot","getSystemEncoding","getenv",
            "iff","include","input","inspect","int",
            "isBound","isCallable","isoob","lbind","len",
            "let","lit","log","map","max",
            "metaclass","min","numeric","oob","ord",
            "paramCount","paramIsRef","paramSet","parameter","passvp",
            "permutations","pow","print","printl","properties",
            "rad2deg","random","randomChoice","randomDice","randomGrab",
            "randomPick","randomSeed","randomWalk","readURI","reduce",
            "retract","round","seconds","serialize","set",
            "setProperty","setenv","sin","sleep","stdErr",
            "stdErrRaw","stdIn","stdInRaw","stdOut","stdOutRaw",
            "strBack","strBackFind","strBackTrim","strBuffer","strCmpIgnoreCase",
            "strEndsWith","strEscape","strEsq","strFill","strFind",
            "strFromMemBuf","strFront","strFrontTrim","strLower","strMerge",
            "strReplace","strReplicate","strSplit","strSplitTrimmed","strStartsWith",
            "strToMemBuf","strTrim","strUnescape","strUnesq","strUpper",
            "strWildcardMatch","subscribe","systemErrorDescription","tan","times",
            "toString","transcodeFrom","transcodeTo","typeOf","unsetenv",
            "unsubscribe","valof","vmFalconPath","vmIsMain","vmModuleName",
            "vmModuleVersionInfo","vmSearchPath","vmSystemType","vmVersionInfo","vmVersionName",
            "writeURI","xmap","yield","yieldOut"
        ),
        7 => array(
            "AccessError","Array","BOM","Base64","Class",
            "ClassMethod","CloneError","CmdlineParser","CodeError","Continuation",
            "Dictionary","Directory","Error","FileStat","Format",
            "Function","GarbagePointer","GenericError","Integer","InterruptedError",
            "IoError","Iterator","LateBinding","List","MathError",
            "MemoryBuffer","MessageError","Method","Numeric","Object",
            "ParamError","ParseError","Path","Range","Semaphore",
            "Sequence","Set","Stream","String","StringStream",
            "SyntaxError","Table","TableError","TimeStamp","TimeZone",
            "Tokenizer","TypeError","URI","VMSlot"
        ),
        8 => array(
            "args","scriptName","scriptPath"
        ),
        9 => array(
            "GC"
        ),
    ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => 'http://falconpl.org/project_docs/core/functions.html#typeOf',
        6 => 'http://falconpl.org/project_docs/core/functions.html#{FNAME}',
        7 => 'http://falconpl.org/project_docs/core/class_{FNAME}.html',
        8 => 'http://falconpl.org/project_docs/core/globals.html#{FNAME}',
        9 => 'http://falconpl.org/project_docs/core/object_{FNAME}.html)'
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
        9 => true
    ),
    'SYMBOLS' => array(
        '(',')','$','%','&','/','{','[',']','=','}','?','+','-','#','*','@',
        '<','>','|',',',':',';','\\','^'
    ),
    'REGEXPS' => array(
        0 => array(
            GESHI_SEARCH => '(\[)([a-zA-Z_]|\c{C})(?:[a-zA-Z0-9_]|\p{C})*(\])',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3',

        ),
    ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        0 => array( '<?' => '?>' )
    ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true
    ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000080;font-weight:bold;',
            2 => 'color: #800000;font-weight:bold;',
            3 => 'color: #800000;font-weight:bold;',
            4 => 'color: #000080;font-weight:bold;',
            5 => 'color: #000000;font-weight:bold;',
            6 => 'font-weight:bold;',
            7 => 'font-weight:bold;',
            8 => 'font-weight:bold;'
        ),
        'COMMENTS' => array(
            1 => 'color: #29B900;',
            'MULTI' => 'color: #008080'
        ),
        'STRINGS' => array(
            0 => 'color: #800000'
        ),
        'BRACKETS' => array(
            0 => 'color: #000000'
        ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #800000'
        ),
        'NUMBERS' => array(
            0 => 'color: #000000'
        ),
        'METHODS' => array(
            0 => 'color: #000000'
        ),
        'SYMBOLS' => array(
            0 => 'color: #8B0513'
        ),
        'SCRIPT' => array(
            0 => ''
        ),
        'REGEXPS' => array(
            0 => 'color: #FF00FF'
        )
    ),

    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        '.'
    )
);
?>