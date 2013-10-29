<?php
/*************************************************************************************
 * newlisp.php
 * ----------
 * Author: cormullion (cormullion@mac.com) Sept 2009
 * Copyright: (c) 2009 Cormullion (http://unbalanced-parentheses.nfshost.com/)
 * Release Version: 1.0.8.11
 * Date Started: 2009/09/30
 *
 * newLISP language file for GeSHi.
 *
 * based on work by Lutz Mueller and Jeff Ober
 *
 * CHANGES
 * -------
 * 2009/09/30 (1.0.8.6)
 *  -  First Release
 *
 * TODO (updated 2009/09/30)
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
    'LANG_NAME' => 'newlisp',
    'COMMENT_SINGLE' => array(1 => ';', 2 => '#'),
    'COMMENT_MULTI' => array('[text]' => '[/text]', '{' => '}'), // also used for strings
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'NUMBERS' => GESHI_NUMBER_INT_BASIC |  GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_SCI_ZERO,
    'TAB_WIDTH' => 2,
    'KEYWORDS' => array(
        1 => array(
            'NaN?','abort','abs','acos','acosh','add','address','amb','and',
            'append','append-file','apply','args','array','array-list','array?',
            'asin','asinh','assoc','atan','atan2','atanh','atom?','base64-dec',
            'base64-enc','bayes-query','bayes-train','begin','beta','betai',
            'bind','binomial','bits','callback','case','catch','ceil',
            'change-dir','char','chop','clean','close','command-event','cond',
            'cons','constant','context','context?','copy','copy-file','cos',
            'cosh','count','cpymem','crc32','crit-chi2','crit-z','current-line',
            'curry','date','date-value','debug','dec','def-new','default',
            'define','define-macro','delete','delete-file','delete-url',
            'destroy','det','device','difference','directory','directory?',
            'div','do-until','do-while','doargs','dolist','dostring','dotimes',
            'dotree','dump','dup','empty?','encrypt','ends-with','env','erf',
            'error-event','estack','eval','eval-string','exec','exists','exit',
            'exp','expand','explode','factor','fft','file-info','file?',
            'filter','find','find-all','first','flat','float','float?','floor',
            'flt','for','for-all','fork','format','fv','gammai','gammaln','gcd',
            'get-char','get-float','get-int','get-long','get-string','get-url',
            'global','global?','if','if-not','ifft','import','inc','index',
            'inf?','int','integer','integer?','intersect','invert','irr','join',
            'lambda','lambda?','last','last-error','legal?','length','let',
            'letex','letn','list','list?','load','local','log','lookup',
            'lower-case','macro?','main-args','make-dir','map','mat','match',
            'max','member','min','mod','mul','multiply','name','net-accept',
            'net-close','net-connect','net-error','net-eval','net-interface',
            'net-listen','net-local','net-lookup','net-peek','net-peer',
            'net-ping','net-receive','net-receive-from','net-receive-udp',
            'net-select','net-send','net-send-to','net-send-udp','net-service',
            'net-sessions','new','nil','nil?','normal','not','now','nper','npv',
            'nth','null?','number?','open','or','pack','parse','parse-date',
            'peek','pipe','pmt','pop','pop-assoc','post-url','pow',
            'pretty-print','primitive?','print','println','prob-chi2','prob-z',
            'process','prompt-event','protected?','push','put-url','pv','quote',
            'quote?','rand','random','randomize','read-buffer','read-char',
            'read-expr','read-file','read-key','read-line','read-utf8',
            'real-path','receive','ref','ref-all','regex','regex-comp',
            'remove-dir','rename-file','replace','reset','rest','reverse',
            'rotate','round','save','search','seed','seek','select','semaphore',
            'send','sequence','series','set','set-locale','set-ref',
            'set-ref-all','setf','setq','sgn','share','signal','silent','sin',
            'sinh','sleep','slice','sort','source','spawn','sqrt','starts-with',
            'string','string?','sub','swap','sym','symbol?','symbols','sync',
            'sys-error','sys-info','tan','tanh','throw','throw-error','time',
            'time-of-day','timer','title-case','trace','trace-highlight',
            'transpose','trim','true','true?','unicode','unify','unique',
            'unless','unpack','until','upper-case','utf8','utf8len','uuid',
            'wait-pid','when','while','write-buffer','write-char','write-file',
            'write-line','xfer-event','xml-error','xml-parse','xml-type-tags',
            'zero?'
            )
        ),
    'SYMBOLS' => array(
        0 => array(
            '(', ')','\''
            ),
        1 => array(
            '!','!=','$','%','&','*','+','-','/',':',
            '<','<<','<=','=','>','>=','>>','^','|'
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000AA;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #00aa00; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #009900;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #009900;'
            ),
        'NUMBERS' => array(
            0 => 'color: #777700;'
            ),
        'METHODS' => array(
            0 => 'color: #000099;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #AA0000;',
            1 => 'color: #0000AA;'
            ),
        'REGEXPS' => array(
            0 => 'color: #00aa00;',
            1 => 'color: #00aa00;',
            2 => 'color: #00aa00;',
            3 => 'color: #00aa00;',
            4 => 'color: #00aa00;',
            5 => 'color: #AA0000;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => 'http://www.newlisp.org/downloads/newlisp_manual.html#{FNAME}'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(':'),
    'REGEXPS' => array(
        // tags in newlispdoc
        0 => "\s+@\S*?\s+",
        // dollar sign symbols
        1 => "[\\$]\w*",
        // curly-braced string literals
        2 => "{[^{}]*?}",
        // [text] multi-line strings
        3 => "(?s)\[text\].*\[\/text\](?-s)",
        // [code] multi-line blocks
        4 => "(?s)\[code\].*\[\/code\](?-s)",
        // variable references
        5 => "'[\w\-]+"
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'OOLANG' => array(
            'MATCH_AFTER' => '[a-zA-Z][a-zA-Z0-9_\-]*'
            ),
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => '(?<=[^\w\-])',
            )
        ),

);

?>