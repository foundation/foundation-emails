<?php
/*************************************************************************************
 * glsl.php
 * -----
 * Author: Benny Baumann (BenBE@omorphia.de)
 * Copyright: (c) 2008 Benny Baumann (BenBE@omorphia.de)
 * Release Version: 1.0.8.11
 * Date Started: 2008/03/20
 *
 * glSlang language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/03/20 (1.0.7.21)
 *   -  First Release
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
    'LANG_NAME' => 'glSlang',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        //Multiline-continued single-line comments
        1 => '/\/\/(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //Multiline-continued preprocessor define
        2 => '/#(?:\\\\\\\\|\\\\\\n|.)*$/m'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'if', 'else', 'for', 'while', 'do', 'break', 'continue', 'asm',
            'switch', 'case', 'default', 'return', 'discard',
            'namespace', 'using', 'sizeof', 'cast'
            ),
        2 => array(
            'const', 'uniform', 'attribute', 'centroid', 'varying', 'invariant',
            'in', 'out', 'inout', 'input', 'output', 'typedef', 'volatile',
            'public', 'static', 'extern', 'external', 'packed',
            'inline', 'noinline', 'noperspective', 'flat'
            ),
        3 => array(
            'void', 'bool', 'int', 'long', 'short', 'float', 'half', 'fixed',
            'unsigned', 'lowp', 'mediump', 'highp', 'precision',
            'vec2', 'vec3', 'vec4', 'bvec2', 'bvec3', 'bvec4',
            'dvec2', 'dvec3', 'dvec4', 'fvec2', 'fvec3', 'fvec4',
            'hvec2', 'hvec3', 'hvec4', 'ivec2', 'ivec3', 'ivec4',
            'mat2', 'mat3', 'mat4', 'mat2x2', 'mat3x2', 'mat4x2',
            'mat2x3', 'mat3x3', 'mat4x3', 'mat2x4', 'mat3x4', 'mat4x4',
            'sampler1D', 'sampler2D', 'sampler3D', 'samplerCube',
            'sampler1DShadow', 'sampler2DShadow',
            'struct', 'class', 'union', 'enum', 'interface', 'template'
            ),
        4 => array(
            'this', 'false', 'true'
            ),
        5 => array(
            'radians', 'degrees', 'sin', 'cos', 'tan', 'asin', 'acos', 'atan',
            'pow', 'exp2', 'log2', 'sqrt', 'inversesqrt', 'abs', 'sign', 'ceil',
            'floor', 'fract', 'mod', 'min', 'max', 'clamp', 'mix', 'step',
            'smoothstep', 'length', 'distance', 'dot', 'cross', 'normalize',
            'ftransform', 'faceforward', 'reflect', 'matrixCompMult', 'equal',
            'lessThan', 'lessThanEqual', 'greaterThan', 'greaterThanEqual',
            'notEqual', 'any', 'all', 'not', 'texture1D', 'texture1DProj',
            'texture1DLod', 'texture1DProjLod', 'texture2D', 'texture2DProj',
            'texture2DLod', 'texture2DProjLod', 'texture3D', 'texture3DProj',
            'texture3DLod', 'texture3DProjLod', 'textureCube', 'textureCubeLod',
            'shadow1D', 'shadow1DProj', 'shadow1DLod', 'shadow1DProjLod',
            'shadow2D', 'shadow2DProj', 'shadow2DLod', 'shadow2DProjLod',
            'noise1', 'noise2', 'noise3', 'noise4'
            ),
        6 => array(
            'gl_Position', 'gl_PointSize', 'gl_ClipVertex', 'gl_FragColor',
            'gl_FragData', 'gl_FragDepth', 'gl_FragCoord', 'gl_FrontFacing',
            'gl_Color', 'gl_SecondaryColor', 'gl_Normal', 'gl_Vertex',
            'gl_MultiTexCoord0', 'gl_MultiTexCoord1', 'gl_MultiTexCoord2',
            'gl_MultiTexCoord3', 'gl_MultiTexCoord4', 'gl_MultiTexCoord5',
            'gl_MultiTexCoord6', 'gl_MultiTexCoord7', 'gl_FogCoord',
            'gl_MaxLights', 'gl_MaxClipPlanes', 'gl_MaxTextureUnits',
            'gl_MaxTextureCoords', 'gl_MaxVertexAttribs', 'gl_MaxVaryingFloats',
            'gl_MaxVertexUniformComponents', 'gl_MaxVertexTextureImageUnits',
            'gl_MaxCombinedTextureImageUnits', 'gl_MaxTextureImageUnits',
            'gl_MaxFragmentUniformComponents', 'gl_MaxDrawBuffers', 'gl_Point',
            'gl_ModelViewMatrix', 'gl_ProjectionMatrix', 'gl_FrontMaterial',
            'gl_ModelViewProjectionMatrix', 'gl_TextureMatrix', 'gl_ClipPlane',
            'gl_NormalMatrix', 'gl_ModelViewMatrixInverse', 'gl_BackMaterial',
            'gl_ProjectionMatrixInverse', 'gl_ModelViewProjectionMatrixInverse',
            'gl_TextureMatrixInverse', 'gl_ModelViewMatrixTranspose', 'gl_Fog',
            'gl_ProjectionMatrixTranspose', 'gl_NormalScale', 'gl_DepthRange',
            'gl_odelViewProjectionMatrixTranspose', 'gl_TextureMatrixTranspose',
            'gl_ModelViewMatrixInverseTranspose', 'gl_LightSource',
            'gl_ProjectionMatrixInverseTranspose', 'gl_LightModel',
            'gl_ModelViewProjectionMatrixInverseTranspose', 'gl_TexCoord',
            'gl_TextureMatrixInverseTranspose', 'gl_TextureEnvColor',
            'gl_FrontLightModelProduct', 'gl_BackLightModelProduct',
            'gl_FrontLightProduct', 'gl_BackLightProduct', 'gl_ObjectPlaneS',
            'gl_ObjectPlaneT', 'gl_ObjectPlaneR', 'gl_ObjectPlaneQ',
            'gl_EyePlaneS', 'gl_EyePlaneT', 'gl_EyePlaneR', 'gl_EyePlaneQ',
            'gl_FrontColor', 'gl_BackColor', 'gl_FrontSecondaryColor',
            'gl_BackSecondaryColor', 'gl_FogFragCoord', 'gl_PointCoord'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']', '=', '+', '-', '*', '/', '!', '%', '^',
        '&', '?', ':', '.', '|', ';', ',', '<', '>'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000000; font-weight: bold;',
            2 => 'color: #333399; font-weight: bold;',
            3 => 'color: #000066; font-weight: bold;',
            4 => 'color: #333399; font-weight: bold;',
            5 => 'color: #993333; font-weight: bold;',
            6 => 'color: #551111;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #009900;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000066;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000ff;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #000066;'
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
        6 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'OOLANG' => array(
            'MATCH_BEFORE' => '',
            'MATCH_AFTER' => '[a-zA-Z_][a-zA-Z0-9_]*',
            'MATCH_SPACES' => '[\s]*'
        )
    )
);

?>