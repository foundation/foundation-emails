<?php
/*************************************************************************************
 * yaml.php
 * --------
 * Author: Josh Ventura (JoshV10@gmail.com)
 * Copyright: (c) 2010 Josh Ventura
 * Release Version: 1.0.8.11
 * Date Started: 2010/12/14
 *
 * YAML language file for GeSHi.
 *
 * YAML gets hairy sometimes. If anything needs fixed, drop me an email and
 *      I'll probably spit up on it. This is, in general, not a long format.
 *
 * CHANGES
 * ---------
 * 2010/12/14
 *  - Started project in rage over GML support but not YAML support. WTFH?
 * 2010/12/15
 *  - Submitted to Ben.
 *
 * TODO (not updated since release)
 * ----------------------------------
 *  -  Field testing and necessary corrections: this grammar file is usable, but not
 *     completely accurate. There are, in fact, multiple cases in which it will mess
 *     up, and some of it may need moved around. It is the most temperamental parser
 *     I have ever associated my name with. Points of interest follow:
 *   *  Improvised support for | and >: since PHP offers no variable-width lookbehind,
 *      these blocks will still be highlighted even when commented out. As it happens,
 *      any line ending with | or > could result in the unintentional highlighting of
 *      all remaining lines in the file, just because I couldn't check for this regex
 *      as a lookbehind:  '/:(\s+)(!!(\w+)(\s+))?/'
 *      If there is a workaround for that, it needs implemented.
 *   *  I may be missing some operators. I deliberately omitted inline array notation
 *      as, in general, it's ugly and tends to conflict with plain-text. Ensuring all
 *      highlighted list delimiters are not plain text would be as simple as checking
 *      that they follow a colon directly. Alas, without variable-length lookbehinds,
 *      if there is a way to do so in GeSHi I am unaware of it.
 *   *  I kind of whored the comment regexp array. It seemed like a safe bet, so it's
 *      where I crammed everything. Some of it may need moved elsewhere for neatness.
 *   *  The !!typename highlight needs not to interfere with ": |" and ": >": Pairing
 *      key: !!type | value is perfectly legal, but again due to lookbehind issues, I
 *      can't add a case for that. Also, it is likely that multiple spaces can be put
 *      between the colon and pipe symbol, which would also break it.
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify it
 *   under the terms of the GNU General Public License as published by
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
    'LANG_NAME' => 'YAML',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array(),
    //Keys
    'COMMENT_REGEXP' => array( // ENTRY ZERO  SHOULD CHECK FOR (\n(\s*)([^#%]+?):(\s+)(!!(\w+)(\s+))?) AS A LOOKBEHIND, BUT IT CAN'T.
        0 => '/(?<=\s[\|>]\n)(\s+)(.*)((?=[\n$])(([\n^](\1(.*)|(?=[\n$])))*)|$)/', // Pipe blocks and > blocks.
        1 => '/#(.*)/', // Blue # comments
        2 => '/%(.*)/', // Red % comments
        3 => '/(^|\n)([^#%^\n]+?)(?=: )/',  // Key-value names
        4 => '/(^|\n)([^#%^\n]+?)(?=:\n)/',// Key-group names
        5 => '/(?<=^---)(\s*)!(\S+)/',    // Comments after ---
        6 => '/(?<=: )(\s*)\&(\S+)/',    // References
        7 => '/(?<=: )(\s*)\*(\S+)/',   // Dereferences
        8 => '/!!(\w+)/',              // Types
        //9 => '/(?<=\n)(\s*)-(?!-)/',       // List items: This needs to search within comments 3 and 4, but I don't know how.
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'all','any','none', "yes", "no"
            ),
        ),
    'SYMBOLS' => array(
        1 => array('---', '...'),
        2 => array(': ', ">\n", "|\n", '<<:', ":\n") // It'd be nice if I could specify that the colon must
        //                                              follow comment 3 or 4 to be considered, and the > and |
        //                                              must follow such a colon.
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'font-weight: bold;'
            ),
        'COMMENTS' => array(
            0 => 'color: #303050;background-color: #F5F5F5',
            1 => 'color: blue;',
            2 => 'font-weight: bold; color: red;',
            3 => 'color: green;',
            4 => 'color: #007F45;',
            5 => 'color: #7f7fFF;',
            6 => 'color: #FF7000;',
            7 => 'color: #FF45C0;',
            8 => 'font-weight: bold; color: #005F5F;',
            //9 => 'font-weight: bold; color: #000000;',
            ),
        'ESCAPE_CHAR' => array(
            ),
        'BRACKETS' => array(
            ),
        'STRINGS' => array(
            0 => 'color: #CF00CF;'
            ),
        'NUMBERS' => array(
            // 0 => 'color: #33f;' // Don't highlight numbers, really...
            ),
        'METHODS' => array(
            1 => '',
            2 => ''
            ),
        'SYMBOLS' => array(
            1 => 'color: cyan;',
            2 => 'font-weight: bold; color: brown;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            0 => ''
            )
        ),
    'URLS' => array(1 => ''),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array( ),
    'REGEXPS' => array( ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array( ),
    'HIGHLIGHT_STRICT_BLOCK' => array( )
);

?>