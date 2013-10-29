<?php
/*************************************************************************************
 * dot.php
 * ---------------------------------
 * Author: Adrien Friggeri (adrien@friggeri.net)
 * Copyright: (c) 2007 Adrien Friggeri (http://www.friggeri.net)
 * Release Version: 1.0.8.11
 * Date Started: 2007/05/30
 *
 * dot language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2007/05/30 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2007/05/30)
 * -------------------------
 * Everything
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
    'LANG_NAME' => 'dot',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'URL', 'arrowhead', 'arrowsize', 'arrowtail', 'bb', 'bgcolor', 'bottomlabel',
            'center', 'clusterrank', 'color', 'comment', 'constraint', 'decorate',
            'dir', 'distortion', 'fillcolor', 'fixedsize', 'fontcolor',
            'fontname', 'fontsize', 'group', 'headclip', 'headlabel', 'headport',
            'height', 'id', 'label', 'labelangle', 'labeldistance', 'labelfontcolor',
            'labelfontname', 'labelfontsize', 'layer', 'layers', 'margin', 'mclimit',
            'minlen', 'nodesep', 'nslimit', 'ordering', 'orientation', 'page',
            'pagedir', 'peripheries', 'port_label_distance', 'quantum', 'rank', 'rankdir',
            'ranksep', 'ratio', 'regular', 'rotate', 'samehead', 'sametail', 'searchsize',
            'shape', 'shapefile', 'showboxes', 'sides', 'size', 'skew', 'style',
            'tailclip', 'taillabel', 'tailport', 'toplabel', 'weight', 'width'
            ),
        2 => array(
            'node', 'graph', 'digraph', 'strict', 'edge', 'subgraph'
            ),
        3 => array(
            'Mcircle', 'Mdiamond', 'Mrecord', 'Msquare', 'auto', 'back', 'bold',
            'both', 'box', 'circle', 'compress', 'dashed', 'diamond', 'dot',
            'dotted', 'doublecircle', 'doubleoctagon', 'egg', 'ellipse', 'epsf',
            'false', 'fill', 'filled', 'forward', 'global', 'hexagon', 'house',
            'inv', 'invdot', 'invhouse', 'invis', 'invodot', 'invtrapezium',
            'invtriangle', 'local', 'max', 'min', 'none', 'normal', 'octagon',
            'odot', 'out', 'parallelogram', 'plaintext', 'polygon', 'record',
            'same', 'solid', 'trapezium', 'triangle', 'tripleoctagon', 'true'
            ),
        4 => array(
            'aliceblue', 'antiquewhite', 'aquamarine', 'azure', 'beige', 'bisque', 'black',
            'blanchedalmond', 'blue', 'blueviolet', 'brown', 'burlywood', 'cadetblue',
            'chartreuse', 'chocolate', 'coral', 'cornflowerblue', 'cornsilk', 'crimson',
            'cyan', 'darkgoldenrod', 'darkgreen', 'darkkhaki', 'darkolivegreen',
            'darkorange', 'darkorchid', 'darksalmon', 'darkseagreen', 'darkslateblue',
            'darkslategray', 'darkturquoise', 'darkviolet', 'deeppink', 'deepskyblue',
            'dimgray', 'dodgerblue', 'firebrick', 'forestgreen', 'gainsboro', 'ghostwhite',
            'gold', 'goldenrod', 'gray', 'green', 'greenyellow', 'honeydew', 'hotpink',
            'indianred', 'indigo', 'ivory', 'khaki', 'lavender', 'lavenderblush',
            'lawngreen', 'lemonchiffon', 'lightblue', 'lightcyan', 'lightgoldenrod',
            'lightgoldenrodyellow', 'lightgray', 'lightpink', 'lightsalmon',
            'lightseagreen', 'lightskyblue', 'lightslateblue', 'lightslategray',
            'lightyellow', 'limegreen', 'linen', 'magenta', 'maroon', 'mediumaquamarine',
            'mediumblue', 'mediumorchid', 'mediumpurple', 'mediumseagreen',
            'mediumslateblue', 'mediumspringgreen', 'mediumturquoise', 'mediumvioletred',
            'midnightblue', 'mintcream', 'mistyrose', 'moccasin', 'navajowhite', 'navy',
            'navyblue', 'oldlace', 'olivedrab', 'oralwhite', 'orange', 'orangered',
            'orchid', 'palegoldenrod', 'palegreen', 'paleturquoise', 'palevioletred',
            'papayawhip', 'peachpuff', 'peru', 'pink', 'plum', 'powderblue', 'purple',
            'red', 'rosybrown', 'royalblue', 'saddlebrown', 'salmon', 'salmon2', 'sandybrown',
            'seagreen', 'seashell', 'sienna', 'skyblue', 'slateblue', 'slategray', 'snow',
            'springgreen', 'steelblue', 'tan', 'thistle', 'tomato', 'turquoise', 'violet',
            'violetred', 'wheat', 'white', 'whitesmoke', 'yellow', 'yellowgreen'
            )
        ),
    'SYMBOLS' => array(
        '[', ']', '{', '}', '-', '+', '*', '/', '<', '>', '!', '~', '%', '&', '|', '='
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000066;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #993333;',
            4 => 'color: #b1b100;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #339933;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #af624d; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'METHODS' => array(
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            ),
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'REGEXPS' => array(),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => true,
        2 => true,
        3 => true
        )
);

?>