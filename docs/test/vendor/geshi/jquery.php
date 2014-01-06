<?php
/*************************************************************************************
 * jquery.php
 * --------------
 * Author: Rob Loach (http://www.robloach.net)
 * Copyright: (c) 2009 Rob Loach (http://www.robloach.net)
 * Release Version: 1.0.8.11
 * Date Started: 2009/07/20
 *
 * jQuery 1.3 language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/07/20 (1.0.8.5)
 *  -  First Release
 *
 * TODO (updated 2009/07/20)
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
    'LANG_NAME' => 'jQuery',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    //Regular Expressions
    'COMMENT_REGEXP' => array(2 => "/(?<=[\\s^])s\\/(?:\\\\.|(?!\n)[^\\/\\\\])+\\/(?:\\\\.|(?!\n)[^\\/\\\\])+\\/[gimsu]*(?=[\\s$\\.\\;])|(?<=[\\s^(=])m?\\/(?:\\\\.|(?!\n)[^\\/\\\\])+\\/[gimsu]*(?=[\\s$\\.\\,\\;\\)])/iU"),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'as', 'break', 'case', 'catch', 'continue', 'decodeURI', 'delete', 'do',
            'else', 'encodeURI', 'eval', 'finally', 'for', 'if', 'in', 'is', 'item',
            'instanceof', 'return', 'switch', 'this', 'throw', 'try', 'typeof', 'void',
            'while', 'write', 'with'
            ),
        2 => array(
            'class', 'const', 'default', 'debugger', 'export', 'extends', 'false',
            'function', 'import', 'namespace', 'new', 'null', 'package', 'private',
            'protected', 'public', 'super', 'true', 'use', 'var'
            ),
        3 => array(
            // common functions for Window object
            'alert', 'back', 'close', 'confirm', 'forward', 'home',
            'name', 'navigate', 'onblur', 'onerror', 'onfocus', 'onload', 'onmove',
            'onresize', 'onunload', 'open', 'print', 'prompt', 'status',
            //'blur', 'focus', 'scroll', // Duplicate with kw9
            //'stop', //Duplicate with kw10
            ),
        4 => array(
            // jQuery Core Functions
            'jQuery', 'each', 'size', 'length', 'selector', 'context', 'eq',
            'index', 'data', 'removeData', 'queue', 'dequeue', 'noConflict'
            //'get', //Duplicate with kw11
            ),
        5 => array(
            // jQuery Attribute Functions
            'attr', 'removeAttr', 'addClass', 'hasClass', 'removeClass', 'toggleClass',
            'html', 'text', 'val',
            ),
        6 => array(
            // jQuery Traversing Functions
            'filter', 'not', 'slice', 'add', 'children', 'closest',
            'contents', 'find', 'next', 'nextAll', 'parent', 'parents',
            'prev', 'prevAll', 'siblings', 'andSelf', 'end',
            //'is',  //Dup with kw1
            //'offsetParent', //Duplicate with kw8
            //'map', //Duplicate with kw12
            ),
        7 => array(
            // jQuery Manipulation Functions
            'append', 'appendTo', 'prepend', 'prependTo', 'after', 'before', 'insertAfter',
            'insertBefore', 'wrap', 'wrapAll', 'wrapInner', 'replaceWith', 'replaceAll',
            'empty', 'remove', 'clone',
            ),
        8 => array(
            // jQuery CSS Functions
            'css', 'offset', 'offsetParent', 'position', 'scrollTop', 'scrollLeft',
            'height', 'width', 'innerHeight', 'innerWidth', 'outerHeight', 'outerWidth',
            ),
        9 => array(
            // jQuery Events Functions
            'ready', 'bind', 'one', 'trigger', 'triggerHandler', 'unbind', 'live',
            'die', 'hover', 'blur', 'change', 'click', 'dblclick', 'error',
            'focus', 'keydown', 'keypress', 'keyup', 'mousedown', 'mouseenter',
            'mouseleave', 'mousemove', 'mouseout', 'mouseover', 'mouseup', 'resize',
            'scroll', 'select', 'submit', 'unload',
            //'toggle', //Duplicate with kw10
            //'load', //Duplicate with kw11
            ),
        10 => array(
            // jQuery Effects Functions
            'show', 'hide', 'toggle', 'slideDown', 'slideUp', 'slideToggle', 'fadeIn',
            'fadeOut', 'fadeTo', 'animate', 'stop',
            ),
        11 => array(
            // jQuery Ajax Functions
            'ajax', 'load', 'get', 'getJSON', 'getScript', 'post', 'ajaxComplete',
            'ajaxError', 'ajaxSend', 'ajaxStart', 'ajaxStop', 'ajaxSuccess', 'ajaxSetup',
            'serialize', 'serializeArray',
            ),
        12 => array(
            // jQuery Utility Functions
            'support', 'browser', 'version', 'boxModal', 'extend', 'grep', 'makeArray',
            'map', 'inArray', 'merge', 'unique', 'isArray', 'isFunction', 'trim',
            'param',
            ),
        ),
    'SYMBOLS' => array(
        0 => array(
            '(', ')', '[', ']', '{', '}',
            '+', '-', '*', '/', '%',
            '!', '@', '&', '|', '^',
            '<', '>', '=',
            ',', ';', '?', ':'
            ),
        1 => array(
            '$'
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        7 => false,
        8 => false,
        9 => false,
        10 => false,
        11 => false,
        12 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000066; font-weight: bold;',
            2 => 'color: #003366; font-weight: bold;',
            3 => 'color: #000066;',
            4 => 'color: #000066;',
            5 => 'color: #000066;',
            6 => 'color: #000066;',
            7 => 'color: #000066;',
            8 => 'color: #000066;',
            9 => 'color: #000066;',
            10 => 'color: #000066;',
            11 => 'color: #000066;',
            12 => 'color: #000066;'
            ),
        'COMMENTS' => array(
            1 => 'color: #006600; font-style: italic;',
            2 => 'color: #009966; font-style: italic;',
            'MULTI' => 'color: #006600; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #3366CC;'
            ),
        'NUMBERS' => array(
            0 => 'color: #CC0000;'
            ),
        'METHODS' => array(
            1 => 'color: #660066;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;',
            1 => 'color: #000066;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => 'http://docs.jquery.com/Core/{FNAME}',
        5 => 'http://docs.jquery.com/Attributes/{FNAME}',
        6 => 'http://docs.jquery.com/Traversing/{FNAME}',
        7 => 'http://docs.jquery.com/Manipulation/{FNAME}',
        8 => 'http://docs.jquery.com/CSS/{FNAME}',
        9 => 'http://docs.jquery.com/Events/{FNAME}',
        10 => 'http://docs.jquery.com/Effects/{FNAME}',
        11 => 'http://docs.jquery.com/Ajax/{FNAME}',
        12 => 'http://docs.jquery.com/Utilities/{FNAME}'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        0 => array(
            '<script type="text/javascript">' => '</script>'
            ),
        1 => array(
            '<script language="javascript">' => '</script>'
            )
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => true
        )
);

?>