<?php
/*************************************************************************************
 * oobas.php
 * ---------
 * Author: Roberto Rossi (rsoftware@altervista.org)
 * Copyright: (c) 2004 Roberto Rossi (http://rsoftware.altervista.org), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/08/30
 *
 * OpenOffice.org Basic language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/05/23 (1.0.7.22)
 *  -  Added description of extra language features (SF#1970248)
 * 2004/11/27 (1.0.1)
 *  -  Added support for multiple object splitters
 * 2004/10/27 (1.0.0)
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
    'LANG_NAME' => 'OpenOffice.org Basic',
    'COMMENT_SINGLE' => array(1 => "'"),
    'COMMENT_MULTI' => array(),
    //Single-Line comments using REM keyword
    'COMMENT_REGEXP' => array(2 => '/\bREM.*?$/i'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'dim','private','public','global','as','if','redim','true','set','byval',
            'false','bool','double','integer','long','object','single','variant',
            'msgbox','print','inputbox','green','blue','red','qbcolor',
            'rgb','open','close','reset','freefile','get','input','line',
            'put','write','loc','seek','eof','lof','chdir','chdrive',
            'curdir','dir','fileattr','filecopy','filedatetime','fileexists',
            'filelen','getattr','kill','mkdir','name','rmdir','setattr',
            'dateserial','datevalue','day','month','weekday','year','cdatetoiso',
            'cdatefromiso','hour','minute','second','timeserial','timevalue',
            'date','now','time','timer','erl','err','error','on','goto','resume',
            'and','eqv','imp','not','or','xor','mod','atn','cos','sin','tan','log',
            'exp','rnd','randomize','sqr','fix','int','abs','sgn','hex','oct',
            'it','then','else','select','case','iif','do','loop','for','next','to',
            'while','wend','gosub','return','call','choose','declare',
            'end','exit','freelibrary','function','rem','stop','sub','switch','with',
            'cbool','cdate','cdbl','cint','clng','const','csng','cstr','defbool',
            'defdate','defdbl','defint','deflng','asc','chr','str','val','cbyte',
            'space','string','format','lcase','left','lset','ltrim','mid','right',
            'rset','rtrim','trim','ucase','split','join','converttourl','convertfromurl',
            'instr','len','strcomp','beep','shell','wait','getsystemticks','environ',
            'getsolarversion','getguitype','twipsperpixelx','twipsperpixely',
            'createunostruct','createunoservice','getprocessservicemanager',
            'createunodialog','createunolistener','createunovalue','thiscomponent',
            'globalscope'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '='
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
            2 => 'color: #808080;'
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
            1 => 'color: #006600;'
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
