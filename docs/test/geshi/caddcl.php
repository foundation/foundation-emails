<?php
/*************************************************************************************
 * caddcl.php
 * ----------
 * Author: Roberto Rossi (rsoftware@altervista.org)
 * Copyright: (c) 2004 Roberto Rossi (http://rsoftware.altervista.org), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/08/30
 *
 * CAD DCL (Dialog Control Language) language file for GeSHi.
 *
 * DCL for AutoCAD 12 or later and IntelliCAD all versions.
 *
 * CHANGES
 * -------
 * 2004/11/27 (1.0.1)
 *  -  Added support for multiple object splitters
 * 2004/1!/27 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/11/27)
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
    'LANG_NAME' => 'CAD DCL',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'boxed_column','boxed_radio_column','boxed_radio_row','boxed_row',
            'column','concatenation','button','dialog','edit_box','image','image_button',
            'errtile','list_box','ok_cancel','ok_cancel_help','ok_cancel_help_errtile',
            'ok_cancel_help_info','ok_only','paragraph','popup_list','radio_button',
            'radio_column','radio_row','row','slider','spacer','spacer_0','spacer_1','text',
            'text_part','toggle',
            'action','alignment','allow_accept','aspect_ratio','big_increment',
            'children_alignment','children_fixed_height',
            'children_fixed_width','color',
            'edit_limit','edit_width','fixed_height','fixed_width',
            'height','initial_focus','is_cancel','is_default',
            'is_enabled','is_tab_stop','is-bold','key','label','layout','list',
            'max_value','min_value','mnemonic','multiple_select','password_char',
            'small_increment','tabs','tab_truncate','value','width',
            'false','true','left','right','centered','top','bottom',
            'dialog_line','dialog_foreground','dialog_background',
            'graphics_background','black','red','yellow','green','cyan',
            'blue','magenta','whitegraphics_foreground',
            'horizontal','vertical'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']', '=', '+', '-', '*', '/', '!', '%', '^', '&', ':'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
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
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
