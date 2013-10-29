<?php
/*************************************************************************************
 * whois.php
 * --------
 * Author: Benny Baumann (BenBE@geshi.org)
 * Copyright: (c) 2008 Benny Baumann (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2008/09/14
 *
 * Whois response (RPSL format) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/09/14 (1.0.0)
 *  -  First Release
 *
 * TODO
 * ----
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
    'LANG_NAME' => 'Whois (RPSL format)',
    'COMMENT_SINGLE' => array(1 => '% ', 2 => '%ERROR:'),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        //Description
        3 => '/(?:(?<=^remarks:)|(?<=^descr:))(.|\n\s)*$/mi',

        //Contact Details
        4 => '/(?<=^address:)(.|\n\s)*$/mi',
        5 => '/\+\d+(?:(?:\s\(\d+(\s\d+)*\))?(?:\s\d+)+|-\d+-\d+)/',
        6 => '/\b(?!-|\.)[\w\-\.]+(?!-|\.)@((?!-)[\w\-]+\.)+\w+\b/',

        //IP, Networks and AS information\links
        7 => '/\b(?<!\.|\-)(?:[\da-f:]+(?!\.)|\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3})(?:\/1?\d\d?)?(?<!\.|\-)\b/',
        8 => '/\bAS\d+\b/'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array( //Object Types
            'as-block','as-set','aut-num','domain','filter-set','inet-rtr',
            'inet6num','inetnum','irt','key-cert','limerick','mntner',
            'organisation','peering-set','person','poem','role','route-set',
            'route','route6','rtr-set'
            ),
        2 => array( //Field Types
            'abuse-mailbox','address','admin-c','aggr-bndry','aggr-mtd','alias',
            'as-block','as-name','as-set','aut-num','auth','author','certif',
            'changed','components','country','default','descr','dom-net',
            'domain','ds-rdata','e-mail','encryption','export','export-comps',
            'fax-no','filter','filter-set','fingerpr','form','holes','ifaddr',
            'import','inet-rtr','inet6num','inetnum','inject','interface','irt',
            'irt-nfy','key-cert','limerick','local-as','mbrs-by-ref',
            'member-of','members','method','mnt-by','mnt-domains','mnt-irt',
            'mnt-lower','mnt-nfy','mnt-ref','mnt-routes','mntner','mp-default',
            'mp-export','mp-filter','mp-import','mp-members','mp-peer',
            'mp-peering','netname','nic-hdl','notify','nserver','org',
            'org-name','org-type','organisation','origin','owner','peer',
            'peering','peering-set','person','phone','poem','ref-nfy','refer',
            'referral-by','remarks','rev-srv','role','route','route-set',
            'route6','rtr-set','signature','source','status','sub-dom','tech-c',
            'text','upd-to','zone-c'
            ),
        3 => array( //RPSL reserved
            'accept','action','and','announce','any','as-any','at','atomic',
            'except','from','inbound','into','networks','not','or','outbound',
            'peeras','refine','rs-any','to'
            )
        ),
    'SYMBOLS' => array(
        ':'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF; font-weight: bold;',
            2 => 'color: #000080; font-weight: bold;',
            3 => 'color: #990000; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #666666; font-style: italic;',
            3 => 'color: #404080;',
            4 => 'color: #408040;',
            5 => 'color: #408040;',
            6 => 'color: #408040;',
            7 => 'color: #804040;',
            8 => 'color: #804040;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            'HARD' => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => '',
            ),
        'NUMBERS' => array(
            0 => 'color: #000080;',
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #0000FF;'
            ),
        'REGEXPS' => array(
            0 => 'color: #000088;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => 'http://www.irr.net/docs/rpsl.html'
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        //Variables
        0 => "[\\$]{1,2}[a-zA-Z_][a-zA-Z0-9_]*"
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            1 => array(
                'DISALLOWED_BEFORE' => '(?<=\A |\A \n(?m:^)|\n\n(?m:^))'
                ),
            2 => array(
                'DISALLOWED_BEFORE' => '(?m:^)'
                )
            ),
        'ENABLE_FLAGS' => array(
            'BRACKETS' => GESHI_NEVER,
            'SYMBOLS' => GESHI_NEVER,
            'BRACKETS' => GESHI_NEVER,
            'STRINGS' => GESHI_NEVER,
            'ESCAPE_CHAR' => GESHI_NEVER,
            'NUMBERS' => GESHI_NEVER,
            'METHODS' => GESHI_NEVER,
            'SCRIPT' => GESHI_NEVER
            )
        ),
);

?>