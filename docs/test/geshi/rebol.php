<?php
/*************************************************************************************
 * rebol.php
 * --------
 * Author: Lecanu Guillaume (Guillaume@LyA.fr)
 * Copyright: (c) 2004-2005 Lecanu Guillaume (Guillaume@LyA.fr)
 * Release Version: 1.0.8.11
 * Date Started: 2004/12/22
 *
 * Rebol language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/01/26 (1.0.8.3)
 *  -  Adapted language file to comply to GeSHi language file guidelines
 * 2004/11/25 (1.0.3)
 *  -  Added support for multiple object splitters
 *  -  Fixed &new problem
 * 2004/10/27 (1.0.2)
 *  -  Added URL support
 *  -  Added extra constants
 * 2004/08/05 (1.0.1)
 *  -  Added support for symbols
 * 2004/07/14 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/07/14)
 * -------------------------
 * * Make sure the last few function I may have missed
 *   (like eval()) are included for highlighting
 * * Split to several files - php4, php5 etc
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
    'LANG_NAME' => 'REBOL',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array('rebol [' => ']', 'comment [' => ']'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'binary!','block!','char!','date!','decimal!','email!','file!',
            'hash!','integer!','issue!','list!','logic!','money!','none!',
            'object!','paren!','pair!','path!','string!','tag!','time!',
            'tuple!','url!',
            ),
        2 => array(
            'all','any','attempt','break','catch','compose','disarm','dispatch',
            'do','do-events','does','either','else','exit','for','forall',
            'foreach','forever','forskip','func','function','halt','has','if',
            'launch','loop','next','quit','reduce','remove-each','repeat',
            'return','secure','switch','throw','try','until','wait','while',
            ),
        3 => array(
            'about','abs','absolute','add','alert','alias','alter','and',
            'any-block?','any-function?','any-string?','any-type?','any-word?',
            'append','arccosine','arcsine','arctangent','array','as-pair',
            'ask','at','back','binary?','bind','bitset?','block?','brightness?',
            'browse','build-tag','caret-to-offset','center-face','change',
            'change-dir','char?','charset','checksum','choose','clean-path',
            'clear','clear-fields','close','comment','complement','component?',
            'compress','confirm','connected?','construct','context','copy',
            'cosine','datatype?','date?','debase','decimal?','decode-cgi',
            'decompress','dehex','delete','detab','difference','dir?','dirize',
            'divide','dump-face','dump-obj','echo','email?','empty?','enbase',
            'entab','equal?','error?','even?','event?','exclude','exists?',
            'exp','extract','fifth','file?','find','first','flash','focus',
            'form','found?','fourth','free','function?','get','get-modes',
            'get-word?','greater-or-equal?','greater?','hash?','head','head?',
            'help','hide','hide-popup','image?','import-email','in',
            'in-window?','index?','info?','inform','input','input?','insert',
            'integer?','intersect','issue?','join','last','layout','length?',
            'lesser-or-equal?','lesser?','library?','license','link?',
            'list-dir','list?','lit-path?','lit-word?','load','load-image',
            'log-10','log-2','log-e','logic?','lowercase','make','make-dir',
            'make-face','max','maximum','maximum-of','min','minimum',
            'minimum-of','modified?','mold','money?','multiply','native?',
            'negate','negative?','none?','not','not-equal?','now','number?',
            'object?','odd?','offset-to-caret','offset?','op?','open','or',
            'pair?','paren?','parse','parse-xml','path?','pick','poke','port?',
            'positive?','power','prin','print','probe','protect',
            'protect-system','query','random','read','read-io','recycle',
            'refinement?','reform','rejoin','remainder','remold','remove',
            'rename',
            //'repeat',
            'repend','replace','request','request-color','request-date',
            'request-download','request-file','request-list','request-pass',
            'request-text','resend','reverse','routine?','same?','save',
            'script?','second','select','send','series?','set','set-modes',
            'set-net','set-path?','set-word?','show','show-popup','sign?',
            'sine','size-text','size?','skip','sort','source','span?',
            'split-path','square-root','strict-equal?','strict-not-equal?',
            'string?','struct?','stylize','subtract','suffix?','tag?','tail',
            'tail?','tangent','third','time?','to','to-binary','to-bitset',
            'to-block','to-char','to-date','to-decimal','to-email','to-file',
            'to-get-word','to-hash','to-hex','to-idate','to-image','to-integer',
            'to-issue','to-list','to-lit-path','to-lit-word','to-local-file',
            'to-logic','to-money','to-pair','to-paren','to-path',
            'to-rebol-file','to-refinement','to-set-path','to-set-word',
            'to-string','to-tag','to-time','to-tuple','to-url','to-word',
            'trace','trim','tuple?','type?','unfocus','union','unique',
            'unprotect','unset','unset?','unview','update','upgrade',
            'uppercase','url?','usage','use','value?','view','viewed?','what',
            'what-dir','within?','word?','write','write-io','xor','zero?',
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '!', '@', '%', '&', '*', '|', '/', '<', '>'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
//            2 => 'color: #808080; font-style: italic;',
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
            1 => 'color: #006600;',
            2 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'REGEXPS' => array(
            0 => 'color: #0000ff;'
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
//        2 => 'includes/dico_rebol.php?word={FNAME}',
//        3 => 'includes/dico_rebol.php?word={FNAME}'
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        0 => "[\\$]{1,2}[a-zA-Z_][a-zA-Z0-9_]*",
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>