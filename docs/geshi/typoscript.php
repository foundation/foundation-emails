<?php
/*************************************************************************************
 * typoscript.php
 * --------
 * Author: Jan-Philipp Halle (typo3@jphalle.de)
 * Copyright: (c) 2005 Jan-Philipp Halle (http://www.jphalle.de/)
 * Release Version: 1.0.8.11
 * Date Started: 2005/07/29
 *
 * TypoScript language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/07/11 (1.0.8)
 * - Michiel Roos <geshi@typofree.org> Complete rewrite
 * 2005/07/29 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/07/14)
 * -------------------------
 * <things-to-do>
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
    'LANG_NAME' => 'TypoScript',
    'COMMENT_SINGLE' => array(1  => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(2 => '/(?<!(#|\'|"))(?:#(?!(?:[a-fA-F0-9]{6}|[a-fA-F0-9]{3}))[^\n#]+|#{2}[^\n#]+|#{7,999}[^\n]+)/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        // Conditions: http://documentation.typo3.org/documentation/tsref/conditions/
        1 => array(
            'browser', 'compatVersion', 'dayofmonth', 'dayofweek', 'device',
            'globalString', 'globalVars', 'hostname', 'hour',
            'ip', 'language', 'loginUser', 'loginuser', 'minute',
            'month', 'PIDinRootline', 'PIDupinRootline',
            'system', 'treelevel', 'useragent', 'userFunc',
            'usergroup', 'version'
            ),

        // Functions: http://documentation.typo3.org/documentation/tsref/functions/
        2 => array(
            'addParams', 'encapsLines', 'filelink', 'HTMLparser',
            'HTMLparser_tags', 'if', 'imageLinkWrap',
            'imgResource', 'makelinks', 'numRows', 'parseFunc',
            'select', 'split', 'stdWrap', 'tableStyle', 'tags',
            'textStyle', 'typolink'
            ),

        // Toplevel objects: http://documentation.typo3.org/documentation/tsref/tlo-objects/
        3 => array(
            'CARRAY', 'CONFIG', 'CONSTANTS', 'FE_DATA', 'FE_TABLE', 'FRAME',
            'FRAMESET', 'META', 'PAGE', 'plugin'
            ),

        // Content Objects (cObject) : http://documentation.typo3.org/documentation/tsref/cobjects/
        4 => array(
            'CASE', 'CLEARGIF', 'COA', 'COA_INT', 'COBJ_ARRAY', 'COLUMNS',
            'CONTENT', 'CTABLE', 'EDITPANEL', 'FILE', 'FORM',
            'HMENU', 'HRULER', 'HTML', 'IMAGE', 'IMGTEXT',
            'IMG_RESOURCE', 'LOAD_REGISTER', 'MULTIMEDIA',
            'OTABLE', 'PHP_SCRIPT', 'PHP_SCRIPT_EXT',
            'PHP_SCRIPT_INT', 'RECORDS', 'RESTORE_REGISTER',
            'SEARCHRESULT', 'TEMPLATE', 'TEXT', 'USER',
            'USER_INT'
            ),

        // GIFBUILDER toplevel link: http://documentation.typo3.org/documentation/tsref/gifbuilder/
        5 => array(
            'GIFBUILDER',
            ),

        // GIFBUILDER: http://documentation.typo3.org/documentation/tsref/gifbuilder/
        // skipped fields: IMAGE, TEXT
        // NOTE! the IMAGE and TEXT field already are linked in group 4, they
        // cannot be linked twice . . . . unfortunately
        6 => array(
            'ADJUST', 'BOX', 'CROP', 'EFFECT', 'EMBOSS',
            'IMGMAP', 'OUTLINE', 'SCALE', 'SHADOW',
            'WORKAREA'
            ),

        // MENU Objects: http://documentation.typo3.org/documentation/tsref/menu/
        7 => array(
            'GMENU', 'GMENU_FOLDOUT', 'GMENU_LAYERS', 'IMGMENU',
            'IMGMENUITEM', 'JSMENU', 'JSMENUITEM', 'TMENU',
            'TMENUITEM', 'TMENU_LAYERS'
            ),

        // MENU common properties: http://documentation.typo3.org/documentation/tsref/menu/common-properties/
        8 => array(
            'alternativeSortingField', 'begin', 'debugItemConf',
            'imgNameNotRandom', 'imgNamePrefix',
            'itemArrayProcFunc', 'JSWindow', 'maxItems',
            'minItems', 'overrideId', 'sectionIndex',
            'showAccessRestrictedPages', 'submenuObjSuffixes'
            ),

        // MENU item states: http://documentation.typo3.org/documentation/tsref/menu/item-states/
        9 => array(
            'ACT', 'ACTIFSUB', 'ACTIFSUBRO', 'ACTRO', 'CUR', 'CURIFSUB',
            'CURIFSUBRO', 'CURRO', 'IFSUB', 'IFSUBRO', 'NO',
            'SPC', 'USERDEF1', 'USERDEF1RO', 'USERDEF2',
            'USERDEF2RO', 'USR', 'USRRO'
            ),
        ),

    // Does not include '-' because of stuff like htmlTag_langKey = en-GB and
    // lib.nav-sub
    'SYMBOLS' => array(
        0 => array(
            '|',
            '+', '*', '/', '%',
            '!', '&&', '^',
            '<', '>', '=',
            '?', ':',
            '.'
            ),
        1 => array(
            '(', ')', '{', '}', '[', ']'
            )
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
        9 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #ed7d14;',
            2 => 'font-weight: bold;',
            3 => 'color: #990000; font-weight: bold;',
            4 => 'color: #990000; font-weight: bold;',
            5 => 'color: #990000; font-weight: bold;',
            6 => 'color: #990000; font-weight: bold;',
            7 => 'color: #990000; font-weight: bold;',
            8 => 'font-weight: bold;',
            9 => 'color: #990000; font-weight: bold;',
            ),
        'COMMENTS' => array(
            1 => 'color: #aaa; font-style: italic;',
            2 => 'color: #aaa; font-style: italic;',
            'MULTI' => 'color: #aaa; font-style: italic;'
            ),
        'STRINGS' => array(
            0 => 'color: #ac14aa;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc0000;'
            ),
        'METHODS' => array(
            1 => 'color: #0000e0; font-weight: bold;',
            2 => 'color: #0000e0; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933; font-weight: bold;',
                // Set this to the same value as brackets above
            1 => 'color: #009900; font-weight: bold;'
            ),
        'REGEXPS' => array(
            0 => 'color: #009900;',
            1 => 'color: #009900; font-weight: bold;',
            2 => 'color: #3366CC;',
            3 => 'color: #000066; font-weight: bold;',
            4 => 'color: #ed7d14;',
            5 => 'color: #000066; font-weight: bold;',
            6 => 'color: #009900;',
            7 => 'color: #3366CC;'
            ),
        'ESCAPE_CHAR' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => 'http://documentation.typo3.org/documentation/tsref/conditions/{FNAME}/',
        2 => 'http://documentation.typo3.org/documentation/tsref/functions/{FNAME}/',
        3 => 'http://documentation.typo3.org/documentation/tsref/tlo-objects/{FNAME}/',
        4 => 'http://documentation.typo3.org/documentation/tsref/cobjects/{FNAME}/',
        5 => 'http://documentation.typo3.org/documentation/tsref/gifbuilder/',
        6 => 'http://documentation.typo3.org/documentation/tsref/gifbuilder/{FNAME}/',
        7 => 'http://documentation.typo3.org/documentation/tsref/menu/{FNAME}/',
        8 => 'http://documentation.typo3.org/documentation/tsref/menu/common-properties/',
        9 => 'http://documentation.typo3.org/documentation/tsref/menu/item-states/'
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
            // xhtml tag
        2 => array(
            GESHI_SEARCH => '(&lt;)([a-zA-Z\\/][^\\/\\|]*?)(&gt;)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 's',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            ),

            // Constant
        0 => array(
            GESHI_SEARCH => '(\{)(\$[a-zA-Z_\.]+[a-zA-Z0-9_\.]*)(\})',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            ),

            // Constant dollar sign
        1 => array(
            GESHI_SEARCH => '(\$)([a-zA-Z_\.]+[a-zA-Z0-9_\.]*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => '\\2'
            ),

            // extension keys / tables: (static|user|ttx|tx|tt|fe)_something[_something]
        3 => array(
            GESHI_SEARCH => '(plugin\.|[^\.]\b)((?:static|user|ttx|tx|tt|fe)(?:_[0-9A-Za-z_]+?)\b)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),

            // conditions and controls
        4 => array(
            GESHI_SEARCH => '(\[)(globalVar|global|end)\b',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'i',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),

            // lowlevel setup and constant objects
        5 => array(
            GESHI_SEARCH => '([^\.\$-\{]\b)(cObj|field|config|content|file|frameset|includeLibs|lib|page|plugin|register|resources|sitemap|sitetitle|styles|temp|tt_content|tt_news|types|xmlnews)\b',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),

            // markers
        6 => array(
            GESHI_SEARCH => '(###[^#]+###)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),

            // hex color codes
        7 => array(
            GESHI_SEARCH => '(#[a-fA-F0-9]{6}\b|#[a-fA-F0-9]{3}\b)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
);

?>
