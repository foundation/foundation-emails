<?php
/*************************************************************************************
 * mxml.php
 * -------
 * Author: David Spurr
 * Copyright: (c) 2007 David Spurr (http://www.defusion.org.uk/)
 * Release Version: 1.0.8.11
 * Date Started: 2007/10/04
 *
 * MXML language file for GeSHi. Based on the XML file by Nigel McNie
 *
 * CHANGES
 * -------
 * 2007/10/04 (1.0.7.22)
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
    'LANG_NAME' => 'MXML',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array('<!--' => '-->'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        ),
    'SYMBOLS' => array(
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            ),
        'COMMENTS' => array(
            'MULTI' => 'color: #808080; font-style: italic;'
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
            0 => 'color: #00bbdd;',
            1 => 'color: #ddbb00;',
            2 => 'color: #339933;',
            3 => 'color: #000000;'
            ),
        'REGEXPS' => array(
            0 => 'font-weight: bold; color: black;',
            1 => 'color: #7400FF;',
            2 => 'color: #7400FF;'
            )
        ),
    'URLS' => array(
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        // xml declaration
        0 => array(
            GESHI_SEARCH => '(&lt;[\/?|(\?xml)]?[a-z0-9_\-:]*(\?&gt;))',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'i',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        // opening tags
        1 => array(
            GESHI_SEARCH => '(&lt;\/?[a-z]+:[a-z]+)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'i',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        // closing tags
        2 => array(
            GESHI_SEARCH => '(\/?&gt;)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'i',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_ALWAYS,
    'SCRIPT_DELIMITERS' => array(
        0 => array(
            '<!DOCTYPE' => '>'
            ),
        1 => array(
            '&' => ';'
            ),
        2 => array(
            //'<![CDATA[' => ']]>'
            '<mx:Script>' => '</mx:Script>'
            ),
        3 => array(
            '<' => '>'
            )
    ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => false,
        1 => false,
        2 => false,
        3 => true
        ),
    'TAB_WIDTH' => 4
);

?>
