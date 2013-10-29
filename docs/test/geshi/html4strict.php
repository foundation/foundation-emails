<?php
/*************************************************************************************
 * html4strict.php
 * ---------------
 * Author: Nigel McNie (nigel@geshi.org)
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2004/07/10
 *
 * HTML 4.01 strict language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/12/28 (1.0.4)
 *   -  Removed escape character for strings
 * 2004/11/27 (1.0.3)
 *   -  Added support for multiple object splitters
 * 2004/10/27 (1.0.2)
 *   -  Added support for URLs
 * 2004/08/05 (1.0.1)
 *   -  Added INS and DEL
 *   -  Removed the background colour from tags' styles
 * 2004/07/14 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2004/11/27)
 * -------------------------
 * * Check that only HTML4 strict attributes are highlighted
 * * Eliminate empty tags that aren't allowed in HTML4 strict
 * * Split to several files - html4trans, xhtml1 etc
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
    'LANG_NAME' => 'HTML',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        2 => array(
            'a', 'abbr', 'acronym', 'address', 'applet', 'area',
            'base', 'basefont', 'bdo', 'big', 'blockquote', 'body', 'br', 'button', 'b',
            'caption', 'center', 'cite', 'code', 'colgroup', 'col',
            'dd', 'del', 'dfn', 'dir', 'div', 'dl', 'dt',
            'em',
            'fieldset', 'font', 'form', 'frame', 'frameset',
            'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html',
            'iframe', 'ilayer', 'img', 'input', 'ins', 'isindex', 'i',
            'kbd',
            'label', 'legend', 'link', 'li',
            'map', 'meta',
            'noframes', 'noscript',
            'object', 'ol', 'optgroup', 'option',
            'param', 'pre', 'p',
            'q',
            'samp', 'script', 'select', 'small', 'span', 'strike', 'strong', 'style', 'sub', 'sup', 's',
            'table', 'tbody', 'td', 'textarea', 'text', 'tfoot', 'thead', 'th', 'title', 'tr', 'tt',
            'ul', 'u',
            'var',
            ),
        3 => array(
            'abbr', 'accept-charset', 'accept', 'accesskey', 'action', 'align', 'alink', 'alt', 'archive', 'axis',
            'background', 'bgcolor', 'border',
            'cellpadding', 'cellspacing', 'char', 'charoff', 'charset', 'checked', 'cite', 'class', 'classid', 'clear', 'code', 'codebase', 'codetype', 'color', 'cols', 'colspan', 'compact', 'content', 'coords',
            'data', 'datetime', 'declare', 'defer', 'dir', 'disabled',
            'enctype',
            'face', 'for', 'frame', 'frameborder',
            'headers', 'height', 'href', 'hreflang', 'hspace', 'http-equiv',
            'id', 'ismap',
            'label', 'lang', 'language', 'link', 'longdesc',
            'marginheight', 'marginwidth', 'maxlength', 'media', 'method', 'multiple',
            'name', 'nohref', 'noresize', 'noshade', 'nowrap',
            'object', 'onblur', 'onchange', 'onclick', 'ondblclick', 'onfocus', 'onkeydown', 'onkeypress', 'onkeyup', 'onload', 'onmousedown', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onreset', 'onselect', 'onsubmit', 'onunload',
            'profile', 'prompt',
            'readonly', 'rel', 'rev', 'rowspan', 'rows', 'rules',
            'scheme', 'scope', 'scrolling', 'selected', 'shape', 'size', 'span', 'src', 'standby', 'start', 'style', 'summary',
            'tabindex', 'target', 'text', 'title', 'type',
            'usemap',
            'valign', 'value', 'valuetype', 'version', 'vlink', 'vspace',
            'width'
            )
        ),
    'SYMBOLS' => array(
        '/', '='
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;'
            ),
        'COMMENTS' => array(
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
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
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'SCRIPT' => array(
            -2 => 'color: #404040;', // CDATA
            -1 => 'color: #808080; font-style: italic;', // comments
            0 => 'color: #00bbdd;',
            1 => 'color: #ddbb00;',
            2 => 'color: #009900;'
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        2 => 'http://december.com/html/4/element/{FNAMEL}.html',
        3 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_ALWAYS,
    'SCRIPT_DELIMITERS' => array(
        -2 => array(
            '<![CDATA[' => ']]>'
            ),
        -1 => array(
            '<!--' => '-->'
            ),
        0 => array(
            '<!DOCTYPE' => '>'
            ),
        1 => array(
            '&' => ';'
            ),
        2 => array(
            '<' => '>'
            )
    ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        -2 => false,
        -1 => false,
        0 => false,
        1 => false,
        2 => true
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            2 => array(
                'DISALLOWED_BEFORE' => '(?<=&lt;|&lt;\/)',
                'DISALLOWED_AFTER' => '(?=\s|\/|&gt;)',
            )
        )
    )
);

?>