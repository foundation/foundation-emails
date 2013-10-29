<?php
/*************************************************************************************
 * pixelbender.php
 * ----------------
 * Author: Richard Olsson (r@richardolsson.se)
 * Copyright: (c) 2008 Richard Olsson (richardolsson.se)
 * Release Version: 1.0.8.11
 * Date Started: 2008/11/16
 *
 * Pixel Bender 1.0 language file for GeSHi.
 *
 *
 * Please feel free to modify this file, although I would greatly appreciate
 * it if you would then send some feedback on why the file needed to be
 * changed, using the e-mail address above.
 *
 *
 * The colors are inspired by those used in the Pixel Bender Toolkit, with
 * some slight modifications.
 *
 * For more info on Pixel Bender, see the Adobe Labs Wiki article at
 * http://labs.adobe.com/wiki/index.php/Pixel_Bender_Toolkit.
 *
 * Keyword groups are defined as follows (groups marked with an asterisk
 * inherit their names from terminology used in the language specification
 * included with the Pixel Bender Toolkit, see URL above.)
 *
 *  1. languageVersion & kernel keywords
 *  2. Kernel Members *
 *  3. Types *
 *  4. Statements * & qualifiers (in, out, inout)
 *  5. Built-in functions *
 *  6. Meta-data names
 *  7. Preprocessor & Pre-defined symbols *
 *
 *
 * CHANGES
 * -------
 * 2008/11/16 (1.0.8.2)
 *  - Initial release
 *
 * TODO (updated 2008/11/16)
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

$language_data = array(
    'LANG_NAME' => 'Pixel Bender 1.0',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'languageVersion', 'kernel'
            ),
        2 => array(
            'import', 'parameter', 'dependent', 'const', 'input', 'output',
            'evaluatePixel', 'evaluateDependents', 'needed', 'changed', 'generated'
            ),
        3 => array(
            'bool', 'bool2', 'bool3', 'bool4', 'int', 'int2', 'int3', 'int4',
            'float', 'float2', 'float3', 'float4', 'float2x2', 'float3x3', 'float4x4',
            'pixel2', 'pixel3', 'pixel4', 'region', 'image1', 'image2', 'image3', 'image4',
            'imageRef', 'void'
            ),
        4 => array(
            'in', 'out', 'inout', 'if', 'else', 'for', 'while', 'do', 'break',
            'continue', 'return'
            ),
        5 => array(
            'radians', 'degrees', 'sin', 'cos', 'tan', 'asin', 'acos', 'atan', 'pow',
            'exp', 'exp2', 'log', 'log2', 'sqrt', 'inverseSqrt', 'abs', 'sign', 'floor',
            'ceil', 'fract', 'mod', 'min', 'max', 'step', 'clamp', 'mix', 'smoothStep',
            'length', 'distance', 'dot', 'cross', 'normalize', 'matrixCompMult', 'lessThan',
            'lessThanEqual', 'greaterThan', 'greaterThanEqual', 'equal', 'notEqual', 'any',
            'all', 'not', 'nowhere', 'everywhere', 'transform', 'union', 'intersect',
            'outset', 'inset', 'bounds', 'isEmpty', 'sample', 'sampleLinear', 'sampleNearest',
            'outCoord', 'dod', 'pixelSize', 'pixelAspectRatio'
            ),
        6 => array(
            'namespace', 'vendor', 'version', 'minValue', 'maxValue', 'defaultValue', 'description'
            ),
        7 => array(
            '#if', '#endif', '#ifdef', '#elif', 'defined', '#define',
            'AIF_ATI', 'AIF_NVIDIA', 'AIF_FLASH_TARGET'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '!', '%', '&', '|', '+', '-', '*', '/', '=', '<', '>', '?', ':'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true,
        7 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0033ff;',
            2 => 'color: #0033ff; font-weight: bold;',
            3 => 'color: #0033ff;',
            4 => 'color: #9900cc; font-weight: bold;',
            5 => 'color: #333333;',
            6 => 'color: #666666;',
            7 => 'color: #990000;',
        ),
        'COMMENTS' => array(
            1 => 'color: #009900;',
            'MULTI' => 'color: #3f5fbf;'
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #990000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #000000; font-weight:bold;'
            ),
        'METHODS' => array(
            0 => 'color: #000000;',
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000; font-weight: bold;'
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
        7 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array('.'),
    'REGEXPS' => array(),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array()
);


?>
