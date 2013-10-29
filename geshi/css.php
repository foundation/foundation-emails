<?php
/*************************************************************************************
 * css.php
 * -------
 * Author: Nigel McNie (nigel@geshi.org)
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2004/06/18
 *
 * CSS language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/05/23 (1.0.7.22)
 *  -  Added description of extra language features (SF#1970248)
 * 2004/11/27 (1.0.3)
 *  -  Added support for multiple object splitters
 * 2004/10/27 (1.0.2)
 *   -  Changed regexps to catch "-" symbols
 *   -  Added support for URLs
 * 2004/08/05 (1.0.1)
 *   -  Added support for symbols
 * 2004/07/14 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2004/11/27)
 * -------------------------
 * * Improve or drop regexps for class/id/psuedoclass highlighting
 * * Re-look at keywords - possibly to make several CSS language
 *   files, all with different versions of CSS in them
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
    'LANG_NAME' => 'CSS',
    'COMMENT_SINGLE' => array(1 => '@'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        2 => "/(?<=\\()\\s*(?:(?:[a-z0-9]+?:\\/\\/)?[a-z0-9_\\-\\.\\/:]+?)?[a-z]+?\\.[a-z]+?(\\?[^\)]+?)?\\s*?(?=\\))/i"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"', "'"),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        //1 => "#\\\\[nfrtv\$\"\n\\\\]#i",
        //Hexadecimal Char Specs
        2 => "#\\\\[\da-fA-F]{1,6}\s?#i",
        //Unicode Char Specs
        //3 => "#\\\\u[\da-fA-F]{1,8}#i",
        ),
    'KEYWORDS' => array(
        1 => array(
            'aqua', 'azimuth', 'background-attachment', 'background-color',
            'background-image', 'background-position', 'background-repeat',
            'background', 'black', 'blue', 'border-bottom-color',
            'border-radius', 'border-top-left-radius', 'border-top-right-radius',
            'border-bottom-right-radius', 'border-bottom-left-radius',
            'border-bottom-style', 'border-bottom-width', 'border-left-color',
            'border-left-style', 'border-left-width', 'border-right',
            'border-right-color', 'border-right-style', 'border-right-width',
            'border-top-color', 'border-top-style',
            'border-top-width','border-bottom', 'border-collapse',
            'border-left', 'border-width', 'border-color', 'border-spacing',
            'border-style', 'border-top', 'border', 'caption-side', 'clear',
            'clip', 'color', 'content', 'counter-increment', 'counter-reset',
            'cue-after', 'cue-before', 'cue', 'cursor', 'direction', 'display',
            'elevation', 'empty-cells', 'float', 'font-family', 'font-size',
            'font-size-adjust', 'font-stretch', 'font-style', 'font-variant',
            'font-weight', 'font', 'line-height', 'letter-spacing',
            'list-style', 'list-style-image', 'list-style-position',
            'list-style-type', 'margin-bottom', 'margin-left', 'margin-right',
            'margin-top', 'margin', 'marker-offset', 'marks', 'max-height',
            'max-width', 'min-height', 'min-width', 'orphans', 'outline',
            'outline-color', 'outline-style', 'outline-width', 'overflow',
            'padding-bottom', 'padding-left', 'padding-right', 'padding-top',
            'padding', 'page', 'page-break-after', 'page-break-before',
            'page-break-inside', 'pause-after', 'pause-before', 'pause',
            'pitch', 'pitch-range', 'play-during', 'position', 'quotes',
            'richness', 'right', 'size', 'speak-header', 'speak-numeral',
            'speak-punctuation', 'speak', 'speech-rate', 'stress',
            'table-layout', 'text-align', 'text-decoration', 'text-indent',
            'text-shadow', 'text-transform', 'top', 'unicode-bidi',
            'vertical-align', 'visibility', 'voice-family', 'volume',
            'white-space', 'widows', 'width', 'word-spacing', 'z-index',
            'bottom', 'left', 'height'
            ),
        2 => array(
            'above', 'absolute', 'always', 'armenian', 'aural', 'auto',
            'avoid', 'baseline', 'behind', 'below', 'bidi-override', 'blink',
            'block', 'bold', 'bolder', 'both', 'capitalize', 'center-left',
            'center-right', 'center', 'circle', 'cjk-ideographic',
            'close-quote', 'collapse', 'condensed', 'continuous', 'crop',
            'crosshair', 'cross', 'cursive', 'dashed', 'decimal-leading-zero',
            'decimal', 'default', 'digits', 'disc', 'dotted', 'double',
            'e-resize', 'embed', 'extra-condensed', 'extra-expanded',
            'expanded', 'fantasy', 'far-left', 'far-right', 'faster', 'fast',
            'fixed', 'fuchsia', 'georgian', 'gray', 'green', 'groove',
            'hebrew', 'help', 'hidden', 'hide', 'higher', 'high',
            'hiragana-iroha', 'hiragana', 'icon', 'inherit', 'inline-table',
            'inline', 'inset', 'inside', 'invert', 'italic', 'justify',
            'katakana-iroha', 'katakana', 'landscape', 'larger', 'large',
            'left-side', 'leftwards', 'level', 'lighter', 'lime',
            'line-through', 'list-item', 'loud', 'lower-alpha', 'lower-greek',
            'lower-roman', 'lowercase', 'ltr', 'lower', 'low', 'maroon',
            'medium', 'message-box', 'middle', 'mix', 'monospace', 'n-resize',
            'narrower', 'navy', 'ne-resize', 'no-close-quote',
            'no-open-quote', 'no-repeat', 'none', 'normal', 'nowrap',
            'nw-resize', 'oblique', 'olive', 'once', 'open-quote', 'outset',
            'outside', 'overline', 'pointer', 'portrait', 'purple', 'px',
            'red', 'relative', 'repeat-x', 'repeat-y', 'repeat', 'rgb',
            'ridge', 'right-side', 'rightwards', 's-resize', 'sans-serif',
            'scroll', 'se-resize', 'semi-condensed', 'semi-expanded',
            'separate', 'serif', 'show', 'silent', 'silver', 'slow', 'slower',
            'small-caps', 'small-caption', 'smaller', 'soft', 'solid',
            'spell-out', 'square', 'static', 'status-bar', 'super',
            'sw-resize', 'table-caption', 'table-cell', 'table-column',
            'table-column-group', 'table-footer-group', 'table-header-group',
            'table-row', 'table-row-group', 'teal', 'text', 'text-bottom',
            'text-top', 'thick', 'thin', 'transparent', 'ultra-condensed',
            'ultra-expanded', 'underline', 'upper-alpha', 'upper-latin',
            'upper-roman', 'uppercase', 'url', 'visible', 'w-resize', 'wait',
            'white', 'wider', 'x-fast', 'x-high', 'x-large', 'x-loud',
            'x-low', 'x-small', 'x-soft', 'xx-large', 'xx-small', 'yellow',
            'yes'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', ':', ';',
        '>', '+', '*', ',', '^', '='
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000000; font-weight: bold;',
            2 => 'color: #993333;'
            ),
        'COMMENTS' => array(
            1 => 'color: #a1a100;',
            2 => 'color: #ff0000; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            //1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #000099; font-weight: bold;'
            //3 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #00AA00;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #00AA00;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            0 => 'color: #cc00cc;',
            1 => 'color: #6666ff;',
            2 => 'color: #3333ff;',
            3 => 'color: #933;'
            )
        ),
    'URLS' => array(
        1 => '',
        2 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        //DOM Node ID
        0 => '\#[a-zA-Z0-9\-_]+(?:\\\\:[a-zA-Z0-9\-_]+)*',
        //CSS classname
        1 => '\.(?!\d)[a-zA-Z0-9\-_]+(?:\\\\:[a-zA-Z0-9\-_]+)*\b(?=[\{\.#\s,:].|<\|)',
        //CSS Pseudo classes
        //note: & is needed for &gt; (i.e. > )
        2 => '(?<!\\\\):(?!\d)[a-zA-Z0-9\-]+\b(?:\s*(?=[\{\.#a-zA-Z,:+*&](.|\n)|<\|))',
        //Measurements
        3 => '[+\-]?(\d+|(\d*\.\d+))(em|ex|pt|px|cm|in|%)',
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'DISALLOWED_AFTER' => '(?![\-a-zA-Z0-9_\|%\\-&\.])',
            'DISALLOWED_BEFORE' => '(?<![\-a-zA-Z0-9_\|%\\~&\.])'
        )
    )
);

?>