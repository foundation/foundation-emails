<?php
/*************************************************************************************
 * mirc.php
 * -----
 * Author: Alberto 'Birckin' de Areba (Birckin@hotmail.com)
 * Copyright: (c) 2006 Alberto de Areba
 * Release Version: 1.0.8.11
 * Date Started: 2006/05/29
 *
 * mIRC Scripting language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/05/23 (1.0.7.22)
 *   -  Added description of extra language features (SF#1970248)
 * 2006/05/29 (1.0.0)
 *   -  First Release
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
    'LANG_NAME' => 'mIRC Scripting',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'alias', 'menu', 'dialog',
            ),
        2 => array(
            'if', 'elseif', 'else', 'while', 'return', 'goto', 'var'
            ),
        3 => array(
            'action','ajinvite','amsg','ame','anick','aop','auser',
            'avoice','auto','autojoin','away','background','ban','beep',
            'channel','clear','clearall','clipboard','close','closemsg','color',
            'copy','creq','ctcp','ctcpreply','ctcps','dcc','dde','ddeserver',
            'debug','describe','disable','disconnect','dlevel','dll','dns',
            'dqwindow','ebeeps','echo','editbox','emailaddr','enable','events',
            'exit','filter','findtext','finger','flash','flood','flush',
            'flushini','font','fsend','fserve','fullname','ghide','gload',
            'gmove','gopts','gplay','gpoint','gqreq','groups','gshow','gsize',
            'gstop','gtalk','gunload','guser','help','hop','ignore','invite',
            'join','kick','linesep','links','list','load','loadbuf','localinfo',
            'log','me','mdi','mkdir','mnick','mode','msg','names','nick','noop',
            'notice','notify','omsg','onotice','part','partall','pdcc',
            'perform','ping','play','pop','protect','pvoice','qmsg','qme',
            'query','queryrn','quit','raw','remini','remote','remove','rename',
            'enwin','resetidle','rlevel','rmdir','run','ruser','save','savebuf',
            'saveini','say','server','showmirc','sline','sound','speak','splay',
            'sreq','strip','time',
            //'timer[N/name]', //Handled as a regular expression below ...
            'timers','timestamp','titlebar','tnick','tokenize','topic','ulist',
            'unload','updatenl','url','uwho','window','winhelp','write',
            'writeini','who','whois','whowas'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']', '/'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #994444;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #990000; font-weight: bold;',
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            ),
        'BRACKETS' => array(
            0 => 'color: #FF0000;',
            ),
        'STRINGS' => array(
            ),
        'NUMBERS' => array(
            0 => '',
            ),
        'METHODS' => array(
            0 => 'color: #008000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #FF0000;',
            ),
        'REGEXPS' => array(
            0 => 'color: #000099;',
            1 => 'color: #990000;',
            2 => 'color: #000099;',
            3 => 'color: #888800;',
            4 => 'color: #888800;',
            5 => 'color: #000099;',
            6 => 'color: #990000; font-weight: bold;',
            7 => 'color: #990000; font-weight: bold;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => 'http://www.mirc.com/{FNAMEL}'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array('.'),
    'REGEXPS' => array(
        //Variable names
        0 => '\$[a-zA-Z0-9]+',
        //Variable names
        1 => '(%|&amp;)[\w\x80-\xFE]+',
        //Client to Client Protocol handling
        2 => '(on|ctcp) (!|@|&amp;)?(\d|\*):[a-zA-Z]+:',
        /*4 => array(
            GESHI_SEARCH => '((on|ctcp) (!|@|&)?(\d|\*):(Action|Active|Agent|AppActive|Ban|Chat|Close|Connect|Ctcp|CtcpReply|DccServer|DeHelp|DeOp|DeVoice|Dialog|Dns|Error|Exit|FileRcvd|FileSent|GetFail|Help|Hotlink|Input|Invite|Join|KeyDown|KeyUp|Kick|Load|Logon|MidiEnd|Mode|Mp3End|Nick|NoSound|Notice|Notify|Op|Open|Part|Ping|Pong|PlayEnd|Quit|Raw|RawMode|SendFail|Serv|ServerMode|ServerOp|Signal|Snotice|Start|Text|Topic|UnBan|Unload|Unotify|User|Mode|Voice|Wallops|WaveEnd):)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'i',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),*/
        //Channel names
        3 => '(#|@)[a-zA-Z0-9]+',
        4 => '-[a-z\d]+',
        //Raw protocol handling
        5 => 'raw (\d|\*):',
        //Timer handling
        6 => '(?<!>|:|\/)\/timer(?!s\b)[0-9a-zA-Z_]+',
        // /...
        7 => '(?<!>|:|\/|\w)\/[a-zA-Z][a-zA-Z0-9]*(?!>)'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'ENABLE_FLAGS' => array(
            'NUMBERS' => GESHI_NEVER
            ),
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => '(?<![\w\$\|\#;<^&])'
        )
    )
);

?>