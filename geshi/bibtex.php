<?php
/********************************************************************************
 * bibtex.php
 * -----
 * Author: Quinn Taylor (quinntaylor@mac.com)
 * Copyright: (c) 2009 Quinn Taylor (quinntaylor@mac.com), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2009/04/29
 *
 * BibTeX language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/04/29 (1.0.8.4)
 *  -  First Release
 *
 * TODO
 * -------------------------
 *  - Add regex for matching and replacing URLs with corresponding hyperlinks
 *  - Add regex for matching more LaTeX commands that may be embedded in BibTeX
 *    (Someone who understands regex better than I should borrow from latex.php)
 ********************************************************************************
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
 *
*******************************************************************************/

// http://en.wikipedia.org/wiki/BibTeX
// http://www.fb10.uni-bremen.de/anglistik/langpro/bibliographies/jacobsen-bibtex.html

$language_data = array (
    'LANG_NAME' => 'BibTeX',
    'OOLANG' => false,
    'COMMENT_SINGLE' => array(
        1 => '%%'
        ),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        0 => array(
            '@comment','@preamble','@string'
            ),
        // Standard entry types
        1 => array(
            '@article','@book','@booklet','@conference','@inbook',
            '@incollection','@inproceedings','@manual','@mastersthesis',
            '@misc','@phdthesis','@proceedings','@techreport','@unpublished'
            ),
        // Custom entry types
        2 => array(
            '@collection','@patent','@webpage'
            ),
        // Standard entry field names
        3 => array(
            'address','annote','author','booktitle','chapter','crossref',
            'edition','editor','howpublished','institution','journal','key',
            'month','note','number','organization','pages','publisher','school',
            'series','title','type','volume','year'
            ),
        // Custom entry field names
        4 => array(
            'abstract','affiliation','chaptername','cited-by','cites',
            'contents','copyright','date-added','date-modified','doi','eprint',
            'isbn','issn','keywords','language','lccn','lib-congress',
            'location','price','rating','read','size','source','url'
            )
        ),
    'URLS' => array(
        0 => '',
        1 => '',
        2 => '',
        3 => '',
        4 => ''
        ),
    'SYMBOLS' => array(
        '{', '}', '#', '=', ','
        ),
    'CASE_SENSITIVE' => array(
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        GESHI_COMMENTS => false,
        ),
    // Define the colors for the groups listed above
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #C02020;', // Standard entry types
            2 => 'color: #C02020;', // Custom entry types
            3 => 'color: #C08020;', // Standard entry field names
            4 => 'color: #C08020;'  // Custom entry field names
            ),
        'COMMENTS' => array(
            1 => 'color: #2C922C; font-style: italic;'
            ),
        'STRINGS' => array(
            0 => 'color: #2020C0;'
            ),
        'SYMBOLS' => array(
            0 =>  'color: #E02020;'
            ),
        'REGEXPS' => array(
            1 => 'color: #2020C0;', // {...}
            2 => 'color: #C08020;',  // BibDesk fields
            3 => 'color: #800000;'   // LaTeX commands
            ),
        'ESCAPE_CHAR' => array(
            0 =>  'color: #000000; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 =>  'color: #E02020;'
            ),
        'NUMBERS' => array(
            ),
        'METHODS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'REGEXPS' => array(
        // {parameters}
        1 => array(
            GESHI_SEARCH => "(?<=\\{)(?:\\{(?R)\\}|[^\\{\\}])*(?=\\})",
            GESHI_REPLACE => '\0',
            GESHI_MODIFIERS => 's',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        2 => array(
            GESHI_SEARCH => "\bBdsk-(File|Url)-\d+",
            GESHI_REPLACE => '\0',
            GESHI_MODIFIERS => 'Us',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        3 => array(
            GESHI_SEARCH => "\\\\[A-Za-z0-9]*+",
            GESHI_REPLACE => '\0',
            GESHI_MODIFIERS => 'Us',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'OBJECT_SPLITTERS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'PARSER_CONTROL' => array(
        'ENABLE_FLAGS' => array(
            'NUMBERS' => GESHI_NEVER
            ),
        'KEYWORDS' => array(
            3 => array(
                'DISALLOWED_AFTER' => '(?=\s*=)'
                ),
            4 => array(
                'DISALLOWED_AFTER' => '(?=\s*=)'
                ),
            )
        )
);

?>