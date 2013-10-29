<?php
/*************************************************************************************
 * xorg_conf.php
 * ----------
 * Author: Milian Wolff (mail@milianw.de)
 * Copyright: (c) 2008 Milian Wolff (http://milianw.de)
 * Release Version: 1.0.8.11
 * Date Started: 2008/06/18
 *
 * xorg.conf language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/06/18 (1.0.8)
 *  -  Initial import
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
    'LANG_NAME' => 'Xorg configuration',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        // sections
        1 => array(
            'Section', 'EndSection', 'SubSection', 'EndSubSection'
            ),
        2 => array(
            // see http://www.x.org/archive/X11R6.9.0/doc/html/xorg.conf.5.html
            'BiosBase', 'Black', 'Boardname', 'BusID', 'ChipID', 'ChipRev',
            'Chipset', 'ClockChip', 'Clocks', 'DacSpeed',
            'DefaultDepth', 'DefaultFbBpp', 'Depth', 'Device',
            'DisplaySize', 'Driver', 'FbBpp', 'Gamma',
            'HorizSync', 'IOBase', 'Identifier', 'InputDevice',
            'Load', 'MemBase', 'Mode', 'Modeline', 'Modelname',
            'Modes', 'Monitor', 'Option', 'Ramdac', 'RgbPath',
            'Screen', 'TextClockFreq', 'UseModes', 'VendorName',
            'VertRefresh', 'VideoAdaptor', 'VideoRam',
            'ViewPort', 'Virtual', 'Visual', 'Weight', 'White'
            ),
        3 => array(
            // some sub-keywords
            // screen position
            'Above', 'Absolute', 'Below', 'LeftOf', 'Relative', 'RightOf',
            // modes
            'DotClock', 'Flags', 'HSkew', 'HTimings', 'VScan', 'VTimings'
            ),
        ),
    'REGEXPS' => array(
        ),
    'SYMBOLS' => array(
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #990000;',
            3 => 'color: #550000;'
            ),
        'COMMENTS' => array(
            1 => 'color: #adadad; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            ),
        'BRACKETS' => array(
            ),
        'STRINGS' => array(
            0 => 'color: #0000ff;',
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);

?>
