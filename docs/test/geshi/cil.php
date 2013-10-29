<?php
/*************************************************************************************
 * cil.php
 * --------
 * Author: Marcus Griep (neoeinstein+GeSHi@gmail.com)
 * Copyright: (c) 2007 Marcus Griep (http://www.xpdm.us)
 * Release Version: 1.0.8.11
 * Date Started: 2007/10/24
 *
 * CIL (Common Intermediate Language) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2004/10/24 (1.0.8)
 *  -  First Release
 *
 * TODO (updated 2007/10/24)
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
    'LANG_NAME' => 'CIL',
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'COMMENT_SINGLE' => array('//'),
    'COMMENT_MULTI' => array(),
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(//Dotted
            '.zeroinit', '.vtfixup', '.vtentry', '.vtable', '.ver', '.try', '.subsystem', '.size', '.set', '.removeon',
            '.publickeytoken', '.publickey', '.property', '.permissionset', '.permission', '.pdirect', '.param', '.pack',
            '.override', '.other', '.namespace', '.mresource', '.module', '.method', '.maxstack', '.manifestres', '.locals',
            '.localized', '.locale', '.line', '.language', '.import', '.imagebase', '.hash', '.get', '.fire', '.file', '.field',
            '.export', '.event', '.entrypoint', '.emitbyte', '.data', '.custom', '.culture', '.ctor', '.corflags', '.class',
            '.cctor', '.assembly', '.addon'
            ),
        2 => array(//Attributes
            'wrapper', 'with', 'winapi', 'virtual', 'vector', 'vararg', 'value', 'userdefined', 'unused', 'unmanagedexp',
            'unmanaged', 'unicode', 'to', 'tls', 'thiscall', 'synchronized', 'struct', 'strict', 'storage', 'stdcall',
            'static', 'specialname', 'special', 'serializable', 'sequential', 'sealed', 'runtime', 'rtspecialname', 'request',
            'reqsecobj', 'reqrefuse', 'reqopt', 'reqmin', 'record', 'public', 'privatescope', 'private', 'preservesig',
            'prejitgrant', 'prejitdeny', 'platformapi', 'pinvokeimpl', 'pinned', 'permitonly', 'out', 'optil', 'opt',
            'notserialized', 'notremotable', 'not_in_gc_heap', 'noprocess', 'noncaslinkdemand', 'noncasinheritance',
            'noncasdemand', 'nometadata', 'nomangle', 'nomachine', 'noinlining', 'noappdomain', 'newslot', 'nested', 'native',
            'modreq', 'modopt', 'marshal', 'managed', 'literal', 'linkcheck', 'lcid', 'lasterr', 'internalcall', 'interface',
            'instance', 'initonly', 'init', 'inheritcheck', 'in', 'import', 'implicitres', 'implicitcom', 'implements',
            'illegal', 'il', 'hidebysig', 'handler', 'fromunmanaged', 'forwardref', 'fixed', 'finally', 'final', 'filter',
            'filetime', 'field', 'fault', 'fastcall', 'famorassem', 'family', 'famandassem', 'extern', 'extends', 'explicit',
            'error', 'enum', 'endmac', 'deny', 'demand', 'default', 'custom', 'compilercontrolled', 'clsid', 'class', 'cil',
            'cf', 'cdecl', 'catch', 'beforefieldinit', 'autochar', 'auto', 'at', 'assert', 'assembly', 'as', 'any', 'ansi',
            'alignment', 'algorithm', 'abstract'
            ),
        3 => array(//Types
            'wchar', 'void', 'variant', 'unsigned', 'valuetype', 'typedref', 'tbstr', 'sysstring', 'syschar', 'string',
            'streamed_object', 'stream', 'stored_object', 'safearray', 'objectref', 'object', 'nullref', 'method', 'lpwstr',
            'lpvoid', 'lptstr', 'lpstruct', 'lpstr', 'iunknown', 'int64', 'int32', 'int16', 'int8', 'int', 'idispatch',
            'hresult', 'float64', 'float32', 'float', 'decimal', 'date', 'currency', 'char', 'carray', 'byvalstr',
            'bytearray', 'boxed', 'bool', 'blob_object', 'blob', 'array'
            ),
        4 => array(//Prefix
            'volatile', 'unaligned', 'tail', 'readonly', 'no', 'constrained'
            ),
        5 => array(//Suffix
            'un', 'u8', 'u4', 'u2', 'u1', 'u', 's', 'ref', 'r8', 'r4', 'm1', 'i8', 'i4', 'i2', 'i1', 'i'#, '.8', '.7', '.6', '.5', '.4', '.3', '.2', '.1', '.0'
            ),
        6 => array(//Base
            'xor', 'switch', 'sub', 'stloc',
            'stind', 'starg',
            'shr', 'shl', 'ret', 'rem', 'pop', 'or', 'not', 'nop', 'neg', 'mul',
            'localloc', 'leave', 'ldnull', 'ldloca',
            'ldloc', 'ldind', 'ldftn', 'ldc', 'ldarga',
            'ldarg', 'jmp', 'initblk', 'endfinally', 'endfilter',
            'endfault', 'dup', 'div', 'cpblk', 'conv', 'clt', 'ckfinite', 'cgt', 'ceq', 'calli',
            'call', 'brzero', 'brtrue', 'brnull', 'brinst',
            'brfalse', 'break', 'br', 'bne', 'blt', 'ble', 'bgt', 'bge', 'beq', 'arglist',
            'and', 'add'
            ),
        7 => array(//Object
            'unbox.any', 'unbox', 'throw', 'stsfld', 'stobj', 'stfld', 'stelem', 'sizeof', 'rethrow', 'refanyval', 'refanytype', 'newobj',
            'newarr', 'mkrefany', 'ldvirtftn', 'ldtoken', 'ldstr', 'ldsflda', 'ldsfld', 'ldobj', 'ldlen', 'ldflda', 'ldfld',
            'ldelema', 'ldelem', 'isinst', 'initobj', 'cpobj', 'castclass',
            'callvirt', 'callmostderived', 'box'
            ),
        8 => array(//Other
            'prefixref', 'prefix7', 'prefix6', 'prefix5', 'prefix4', 'prefix3', 'prefix2', 'prefix1', 'prefix0'
            ),
        9 => array(//Literal
            'true', 'null', 'false'
            ),
        10 => array(//Comment-like
            '#line', '^THE_END^'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '!', '!!'
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
        10 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color:maroon;font-weight:bold;',
            2 => 'color:blue;font-weight:bold;',
            3 => 'color:purple;font-weight:bold;',
            4 => 'color:teal;',
            5 => 'color:blue;',
            6 => 'color:blue;',
            7 => 'color:blue;',
            8 => 'color:blue;',
            9 => 'color:00008B',
            10 => 'color:gray'
            ),
        'COMMENTS' => array(
            0 => 'color:gray;font-style:italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #008000; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #006400;'
            ),
        'STRINGS' => array(
            0 => 'color: #008000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #00008B;'
            ),
        'METHODS' => array(
            1 => 'color: #000033;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #006400;'
            ),
        'REGEXPS' => array(
            0 => 'color:blue;'
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
        9 => '',
        10 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '::'
        ),
    'REGEXPS' => array(
        0 => '(?<=ldc\\.i4\\.)[0-8]|(?<=(?:ldarg|ldloc|stloc)\\.)[0-3]' # Pickup the opcodes that end with integers
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);

?>
