<?php
/*************************************************************************************
 * pf.php
 * --------
 * Author: David Berard (david@nfrance.com)
 * Copyright: (c) 2010 Benny Baumann (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2009/10/16
 * Based on bash.php
 *
 * OpenBSD PACKET FILTER language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/10/16 (1.0.0)
 *   -  First Release
 *
 * TODO
 * -------------------------
 * * Support ALTQ
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
    'LANG_NAME' => 'OpenBSD Packet Filter',
    'COMMENT_SINGLE' => array('#'),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        1 => "/\\$\\{[^\\n\\}]*?\\}/i",
        2 => '/<<-?\s*?(\'?)([a-zA-Z0-9]+)\1\\n.*\\n\\2(?![a-zA-Z0-9])/siU',
        3 => "/\\\\['\"]/siU"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'HARDQUOTE' => array("'", "'"),
    'HARDESCAPE' => array("\'"),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        1 => "#\\\\[nfrtv\\$\\\"\n]#i",
        2 => "#\\$[a-z_][a-z0-9_]*#i",
        3 => "/\\$\\{[^\\n\\}]*?\\}/i",
        4 => "/\\$\\([^\\n\\)]*?\\)/i",
        5 => "/`[^`]*`/"
        ),
    'KEYWORDS' => array(
        1 => array(
            'pass'
        ),
        2 => array(
            'block'
            ),
        3 => array(
            'quick','keep','state','antispoof','table','persist','file','scrub',
            'set','skip','flags','on'
            ),
        4 => array(
            'in','out','proto'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '!', '@', '%', '&', '*', '|', '/', '<', '>', ';;', '`','='
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #009900; font-weight: bold;',
            2 => 'color: #990000; font-weight: bold;',
            3 => 'color: #7a0874;',
            4 => 'color: #336699;'
            ),
        'COMMENTS' => array(
            0 => 'color: #666666; font-style: italic;',
            1 => 'color: #800000;',
            2 => 'color: #cc0000; font-style: italic;',
            3 => 'color: #000000; font-weight: bold;'
            ),
        'ESCAPE_CHAR' => array(
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #007800;',
            3 => 'color: #007800;',
            4 => 'color: #007800;',
            5 => 'color: #780078;',
            'HARD' => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #7a0874; font-weight: bold;'
            ),
        'STRINGS' => array(
            0 => 'color: #CC0000;',
            'HARD' => 'color: #CC0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #ff00cc;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000; font-weight: bold;'
            ),
        'REGEXPS' => array(
            0 => 'color: #007800;',
            1 => 'color: #007800;',
            2 => 'color: #007800;',
            4 => 'color: #007800;',
            5 => 'color: #660033;',
            6 => 'color: #000099; font-weight: bold;',
            7 => 'color: #0000ff;',
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        //Variables (will be handled by comment_regexps)
        0 => "\\$\\{[a-zA-Z_][a-zA-Z0-9_]*?\\}",
        //Variables without braces
        1 => "\\$[a-zA-Z_][a-zA-Z0-9_]*",
        //Variable assignment
        2 => "(?<![\.a-zA-Z_\-])([a-zA-Z_][a-zA-Z0-9_]*?)(?==)",
        //Shorthand shell variables
        4 => "\\$[*#\$\\-\\?!]",
        //Parameters of commands
        5 => "(?<=\s)--?[0-9a-zA-Z\-]+(?=[\s=]|$)",
        //IPs
        6 => "([0-9]{1,3}\.){3}[0-9]{1,3}",
        //Tables
        7 => "(&lt;(.*)&gt;)"
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
    ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'COMMENTS' => array(
            'DISALLOWED_BEFORE' => '$'
        ),
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "(?<![\.\-a-zA-Z0-9_\$\#])",
            'DISALLOWED_AFTER' =>  "(?![\.\-a-zA-Z0-9_%\\/])"
        )
    )
);

?>