<?php
/*************************************************************************************
 * html5.php
 * ---------------
 * Author: Nigel McNie (nigel@geshi.org)
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2004/07/10
 *
 * HTML 5 language file for GeSHi.
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
    'LANG_NAME' => 'HTML5',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        2 => array(
            'a', 'abbr', 'address', 'article', 'area', 'aside', 'audio',

            'base', 'bdo', 'blockquote', 'body', 'br', 'button', 'b',

            'caption', 'cite', 'code', 'colgroup', 'col', 'canvas', 'command', 'datalist', 'details',

            'dd', 'del', 'dfn', 'div', 'dl', 'dt',

            'em', 'embed',

            'fieldset', 'form', 'figcaption', 'figure', 'footer',

            'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html', 'header', 'hgroup',

            'iframe', 'ilayer', 'img', 'input', 'ins', 'isindex', 'i',

            'kbd', 'keygen',

            'label', 'legend', 'link', 'li',

            'map', 'meta', 'mark', 'meter',

            'noscript', 'nav',

            'object', 'ol', 'optgroup', 'option', 'output',

            'param', 'pre', 'p', 'progress',

            'q',

            'rp', 'rt', 'ruby',

            'samp', 'script', 'select', 'small', 'span', 'strong', 'style', 'sub', 'sup', 's', 'section', 'source', 'summary',

            'table', 'tbody', 'td', 'textarea', 'text', 'tfoot', 'thead', 'th', 'title', 'tr', 'time',

            'ul',

            'var', 'video',

            'wbr',
            ),
        3 => array(
            'abbr', 'accept-charset', 'accept', 'accesskey', 'action', 'align', 'alink', 'alt', 'archive', 'axis', 'autocomplete', 'autofocus',
            'background', 'bgcolor', 'border',
            'cellpadding', 'cellspacing', 'char', 'charoff', 'charset', 'checked', 'cite', 'class', 'classid', 'clear', 'code', 'codebase', 'codetype', 'color', 'cols', 'colspan', 'compact', 'content', 'coords', 'contenteditable', 'contextmenu',
            'data', 'datetime', 'declare', 'defer', 'dir', 'disabled', 'draggable', 'dropzone',
            'enctype',
            'face', 'for', 'frame', 'frameborder', 'form', 'formaction', 'formenctype', 'formmethod', 'formnovalidate', 'formtarget',
            'headers', 'height', 'href', 'hreflang', 'hspace', 'http-equiv', 'hidden',
            'id', 'ismap',
            'label', 'lang', 'language', 'link', 'longdesc',
            'marginheight', 'marginwidth', 'maxlength', 'media', 'method', 'multiple', 'min', 'max',
            'name', 'nohref', 'noresize', 'noshade', 'nowrap', 'novalidate',
            'object', 'onblur', 'onchange', 'onclick', 'ondblclick', 'onfocus', 'onkeydown', 'onkeypress', 'onkeyup', 'onload', 'onmousedown', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onselect', 'onsubmit', 'onunload', 'onafterprint', 'onbeforeprint', 'onbeforeonload', 'onerror', 'onhaschange', 'onmessage', 'onoffline', 'ononline', 'onpagehide', 'onpageshow', 'onpopstate', 'onredo', 'onresize', 'onstorage', 'onundo', 'oncontextmenu', 'onformchange', 'onforminput', 'oninput', 'oninvalid', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onmousewheel', 'onscroll', 'oncanplay', 'oncanplaythrough', 'ondurationchange', 'onemptied', 'onended', 'onloadeddata', 'onloadedmetadata', 'onloadstart', 'onpause', 'onplay', 'onplaying', 'onprogress', 'onratechange', 'onreadystatechange', 'onseeked', 'onseeking', 'onstalled', 'onsuspend', 'ontimeupdate', 'onvolumechange', 'onwaiting',
            'profile', 'prompt', 'pattern', 'placeholder',
            'readonly', 'rel', 'rev', 'rowspan', 'rows', 'rules', 'required',
            'scheme', 'scope', 'scrolling', 'selected', 'shape', 'size', 'span', 'src', 'standby', 'start', 'style', 'summary', 'spellcheck', 'step',
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
            2 => 'color: #6ab825;',
            3 => 'color: #bbbbbb;'
            ),
        'COMMENTS' => array(
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #ed9d13;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ed9d13;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #6ab825;'
            ),
        'SCRIPT' => array(
            -2 => 'color: #404040;', // CDATA
            -1 => 'color: #999999;', // comments
            0 => 'color: #cd2828;',
            1 => 'color: #ddbb00;',
            2 => 'color: #6ab825;'
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
            '<!--' => '-->',
            '/*' => '*/'
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