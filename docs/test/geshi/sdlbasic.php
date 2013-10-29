<?php
/*************************************************************************************
 * sdlbasic.php
 * ------------
 * Author: Roberto Rossi
 * Copyright: (c) 2005 Roberto Rossi (http://rsoftware.altervista.org)
 * Release Version: 1.0.8.11
 * Date Started: 2005/08/19
 *
 * sdlBasic (http://sdlbasic.sf.net) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/08/19 (1.0.0)
 *  -  First Release
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
    'LANG_NAME' => 'sdlBasic',
    'COMMENT_SINGLE' => array(1 => "'", 2 => "rem", 3 => "!", 4 => "#"),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'const', 'option', 'explicit', 'qbasic', 'include', 'argc',
            'argv', 'command', 'command$', 'run', 'shell', 'os', 'declare',
            'sub', 'function', 'return', 'while', 'wend', 'exit', 'end',
            'continue', 'if', 'then', 'else', 'elseif',
            'select', 'case', 'for', 'each', 'step',
            'next', 'to', 'dim', 'shared', 'common', 'lbound', 'bound',
            'erase', 'asc', 'chr', 'chr$', 'insert', 'insert$', 'instr', 'lcase',
            'lcase$', 'left', 'left$', 'len', 'length', 'ltrim', 'ltrim$', 'mid',
            'mid$', 'replace', 'replace$', 'replacesubstr', 'replacesubstr$',
            'reverse', 'reverse$', 'right', 'right$', 'rinstr', 'rtrim', 'rtrim$',
            'space', 'space$', 'str', 'str$', 'strf', 'strf$', 'string', 'string$',
            'tally', 'trim', 'trim$', 'typeof', 'typeof$', 'ucase', 'ucase$', 'val',
            'abs', 'acos', 'andbit', 'asin', 'atan', 'bitwiseand', 'bitwiseor',
            'bitwisexor', 'cos', 'exp', 'fix', 'floor', 'frac', 'hex', 'hex$', 'int',
            'log', 'min', 'max', 'orbit', 'randomize', 'rnd', 'round', 'sgn', 'sin',
            'sqr', 'tan', 'xorbit', 'open', 'as', 'file', 'input', 'close', 'output',
            'append', 'eof', 'fileexists', 'filecopy', 'filemove', 'filerename',
            'freefile', 'kill', 'loc', 'lof', 'readbyte', 'rename', 'seek',
            'writebyte', 'chdir', 'dir', 'dir$', 'direxists', 'dirfirst', 'dirnext',
            'mkdir', 'rmdir', 'print', 'date', 'date$', 'time', 'time$', 'ticks',
            'data', 'read', 'reservebank', 'freebank', 'copybank', 'loadbank',
            'savebank', 'setbank', 'sizebank', 'poke', 'doke', 'loke', 'peek', 'deek',
            'leek', 'memcopy', 'setdisplay', 'setcaption', 'caption', 'displaywidth',
            'displayheight', 'displaybpp', 'screen', 'directscreen', 'screenopen',
            'screenclose', 'screenclone', 'screencopy', 'screenfade', 'screenfadein',
            'screencrossfade', 'screenalpha', 'screenlock', 'screenunlock',
            'screenrect', 'xscreenrect', 'yscreenrect', 'wscreenrect', 'hscreenrect',
            'flagscreenrect', 'screenwidth', 'screenheight', 'offset', 'xoffset',
            'yoffset', 'cls', 'screenswap', 'autoback', 'setautoback',
            'dualplayfield', 'waitvbl', 'fps', 'rgb', 'enablepalette', 'color',
            'palette', 'colorcycling', 'ink', 'point', 'dot', 'plot', 'line', 'box',
            'bar', 'circle', 'fillcircle', 'ellipse', 'fillellipse', 'paint',
            'loadimage', 'saveimage', 'loadsound', 'savesound', 'loadmusic',
            'hotspot', 'setcolorkey', 'imageexists', 'imagewidth', 'imageheight',
            'deleteimage', 'copyimage', 'setalpha', 'zoomimage', 'rotateimage',
            'rotozoomimage', 'blt', 'pastebob', 'pasteicon', 'grab', 'spriteclip',
            'sprite', 'deletesprite', 'xsprite', 'ysprite', 'spritewidth',
            'spriteheight', 'frsprite', 'livesprite', 'spritehit', 'autoupdatesprite',
            'updatesprite', 'setbob', 'bob', 'deletebob', 'xbob', 'ybob', 'bobwidth',
            'bobheight', 'frbob', 'livebob', 'bobhit', 'autoupdatebob', 'updatebob',
            'text', 'setfont', 'textrender', 'pen', 'paper', 'prints', 'locate',
            'atx', 'aty', 'curson', 'cursoff', 'inputs', 'zoneinputs',
            'isenabledsound', 'soundexists', 'deletesound', 'copysound',
            'musicexists', 'playsound', 'volumesound', 'stopsound', 'pausesound',
            'resumesound', 'vumetersound', 'positionsound', 'soundchannels',
            'playmusic', 'positionmusic', 'stopmusic', 'fademusic', 'pausemusic',
            'resumemusic', 'rewindmusic', 'volumemusic', 'speedmusic', 'numdrivescd',
            'namecd', 'getfreecd', 'opencd', 'indrivecd', 'trackscd', 'curtrackcd',
            'curframecd', 'playcd', 'playtrackscd',
            'pausecd', 'resumecd', 'stopcd', 'ejectcd', 'closecd', 'tracktypecd',
            'tracklengthcd', 'trackoffsetcd', 'key', 'inkey', 'waitkey', 'xmouse',
            'ymouse', 'xmousescreen', 'ymousescreen', 'bmouse', 'changemouse',
            'locatemouse', 'mouseshow', 'mousehide', 'mousezone', 'numjoysticks',
            'namejoystick', 'numaxesjoystick', 'numballsjoystick', 'numhatsjoystick',
            'numbuttonsjoystick', 'getaxisjoystick', 'gethatjoystick',
            'getbuttonjoystick', 'xgetballjoystick', 'ygetballjoystick', 'joy',
            'bjoy', 'wait', 'timer', 'isenabledsock', 'getfreesock', 'opensock',
            'acceptsock', 'isserverready', 'connectsock', 'connectionreadysock',
            'isclientready', 'losesock', 'peeksock', 'readsock', 'readbytesock',
            'readlinesock', 'writesock', 'writebytesock', 'writelinesock',
            'getremoteip', 'getremoteport', 'getlocalip'
            )
        ),
    'SYMBOLS' => array(
        '(', ')'
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
            1 => 'color: #808080;',
            2 => 'color: #808080;',
            3 => 'color: #808080;',
            4 => 'color: #808080;'
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
            0 => 'color: #66cc66;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
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
