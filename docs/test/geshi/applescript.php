<?php
/*************************************************************************************
 * applescript.php
 * --------
 * Author: Stephan Klimek (http://www.initware.org)
 * Copyright: Stephan Klimek (http://www.initware.org)
 * Release Version: 1.0.8.11
 * Date Started: 2005/07/20
 *
 * AppleScript language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/05/23 (1.0.7.22)
 *  -  Added description of extra language features (SF#1970248)
 *
 * TODO
 * -------------------------
 * URL settings to references
 *
 **************************************************************************************
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
    'LANG_NAME' => 'AppleScript',
    'COMMENT_SINGLE' => array(1 => '--'),
    'COMMENT_MULTI' => array( '(*' => '*)'),
    'COMMENT_REGEXP' => array(
        2 => '/(?<=[a-z])\'/i',
        3 => '/(?<![a-z])\'.*?\'/i',
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'application','close','count','delete','duplicate','exists','launch','make','move','open',
            'print','quit','reopen','run','save','saving', 'idle', 'path to', 'number', 'alias', 'list', 'text', 'string',
            'integer', 'it','me','version','pi','result','space','tab','anything','case','diacriticals','expansion',
            'hyphens','punctuation','bold','condensed','expanded','hidden','italic','outline','plain',
            'shadow','strikethrough','subscript','superscript','underline','ask','no','yes','false', 'id',
            'true','weekday','monday','mon','tuesday','tue','wednesday','wed','thursday','thu','friday',
            'fri','saturday','sat','sunday','sun','month','january','jan','february','feb','march',
            'mar','april','apr','may','june','jun','july','jul','august','aug','september', 'quote', 'do JavaScript',
            'sep','october','oct','november','nov','december','dec','minutes','hours', 'name', 'default answer',
            'days','weeks', 'folder', 'folders', 'file', 'files', 'window', 'eject', 'disk', 'reveal', 'sleep',
            'shut down', 'restart', 'display dialog', 'buttons', 'invisibles', 'item', 'items', 'delimiters', 'offset of',
            'AppleScript\'s', 'choose file', 'choose folder', 'choose from list', 'beep', 'contents', 'do shell script',
            'paragraph', 'paragraphs', 'missing value', 'quoted form', 'desktop', 'POSIX path', 'POSIX file',
            'activate', 'document', 'adding', 'receiving', 'content', 'new', 'properties', 'info for', 'bounds',
            'selection', 'extension', 'into', 'onto', 'by', 'between', 'against', 'set the clipboard to', 'the clipboard'
            ),
        2 => array(
            'each','some','every','whose','where','index','first','second','third','fourth',
            'fifth','sixth','seventh','eighth','ninth','tenth','last','front','back','st','nd',
            'rd','th','middle','named','through','thru','before','after','beginning','the', 'as',
            'div','mod','and','not','or','contains','equal','equals','isnt', 'less', 'greater'
            ),
        3 => array(
            'script','property','prop','end','to','set','global','local','on','of',
            'in','given','with','without','return','continue','tell','if','then','else','repeat',
            'times','while','until','from','exit','try','error','considering','ignoring','timeout',
            'transaction','my','get','put','is', 'copy'
            )
        ),
    'SYMBOLS' => array(
        ')','+','-','^','*','/','&','<','>=','<','<=','=','�'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0066ff;',
            2 => 'color: #ff0033;',
            3 => 'color: #ff0033; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            2 => '',
            3 => 'color: #ff0000;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000000; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #009900;'
            ),
        'NUMBERS' => array(
            0 => 'color: #000000;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;',
            2 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000;'
            ),
        'REGEXPS' => array(
            0 => 'color: #339933;',
            4 => 'color: #0066ff;',
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => ',+-=&lt;&gt;/?^&amp;*'
        ),
    'REGEXPS' => array(
        //Variables
        0 => '[\\$%@]+[a-zA-Z_][a-zA-Z0-9_]*',
        //File descriptors
        4 => '&lt;[a-zA-Z_][a-zA-Z0-9_]*&gt;',
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'SPACE_AS_WHITESPACE' => true
            )
        )
);

?>