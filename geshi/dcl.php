<?php
/*************************************************************************************
 * dcl.php
 * --------
 * Author: Petr Hendl (petr@hendl.cz)
 * Copyright: (c) 2011 Petr Hendl http://hendl.cz/geshi/
 * Release Version: 1.0.8.11
 * Date Started: 2011/02/17
 *
 * DCL language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2011-02-17 (1.0.8.11)
 *   - First Release
 *
 * TODO
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
    'LANG_NAME' => 'DCL',
    'COMMENT_SINGLE' => array('$!', '!'),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        2 => '/(?<=\$)\s*sql\s+.*?(?:quit|exit);?\s*?$/sim' // do not highlight inline sql
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'HARDESCAPE' => array(),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        1 => "/''[a-zA-Z\\-_]+'/"
        ),
    'KEYWORDS' => array(
        1 => array( // commands
            'ACCOUNTING', 'ALLOCATE', 'ANALYZE', 'APPEND', 'ASSIGN', 'ATTACH', 'BACKUP',
            'CALL', 'CANCEL', 'CHECKSUM', 'CLOSE', 'CONNECT', 'CONTINUE', 'CONVERT',
            'COPY', 'CREATE', 'DEALLOCATE', 'DEASSIGN', 'DEBUG', 'DECK',
            'DECRYPT', 'DEFINE', 'DELETE', 'DEPOSIT', 'DIFFERENCES', 'DIRECTORY',
            'DISABLE',  'AUTOSTART', 'DISCONNECT', 'DISMOUNT', 'DUMP', 'EDIT', 'ENABLE',
            'ENCRYPT', 'ENDSUBROUTINE', 'EOD', 'EOJ', 'EXAMINE', 'EXCHANGE',
            'EXIT', 'FONT', 'GOSUB', 'GOTO', 'HELP', 'IF', 'THEN', 'ELSE', 'ENDIF', 'INITIALIZE', 'INQUIRE',
            'INSTALL', 'JAVA', 'JOB', 'LIBRARY', 'LICENSE', 'LINK', 'LOGIN', 'LOGOUT',
            'MACRO', 'MAIL', 'MERGE', 'MESSAGE', 'MONITOR', 'MOUNT', 'NCS', 'ON', 'OPEN',
            'PASSWORD', 'PATCH', 'PHONE', 'PIPE', 'PPPD', 'PRINT', 'PRODUCT', 'PURGE',
            'READ', 'RECALL', 'RENAME', 'REPLY', 'REQUEST', 'RETURN', 'RMU', 'RUN', 'RUNOFF',
            'SEARCH', 'SET', 'SET AUDIT', 'SET BOOTBLOCK', 'SET BROADCAST',
            'SET CACHE', 'SET CARD_READER', 'SET CLUSTER', 'SET COMMAND', 'SET CONTROL',
            'SET CPU', 'SET DAY', 'SET DEFAULT', 'SET DEVICE', 'SET DIRECTORY',
            'SET DISPLAY', 'SET ENTRY', 'SET FILE', 'SET HOST', 'SET IMAGE', 'SET KEY',
            'SET LOGINS', 'SET MAGTAPE', 'SET MESSAGE', 'SET NETWORK', 'SET ON', 'SET OUTPUT_RATE',
            'SET PASSWORD', 'SET PREFERRED_PATH', 'SET PREFIX', 'SET PRINTER', 'SET PROCESS',
            'SET PROMPT', 'SET PROTECTION', 'SET QUEUE', 'SET RESTART_VALUE',
            'SET RIGHTS_LIST', 'SET RMS_DEFAULT', 'SET ROOT', 'SET SECURITY',
            'SET SERVER ACME_SERVER', 'SET SERVER REGISTRY_SERVER', 'SET SERVER SECURITY_SERVER',
            'SET SHADOW', 'SET SYMBOL', 'SET TERMINAL', 'SET TIME', 'SET VERIFY',
            'SET VOLUME', 'SET WORKING_SET', 'SHOW', 'SHOW AUDIT',
            'SHOW BROADCAST', 'SHOW CLUSTER', 'SHOW CPU', 'SHOW DEFAULT', 'SHOW DEVICES',
            'SHOW DISPLAY', 'SHOW ENTRY', 'SHOW ERROR', 'SHOW FASTPATH', 'SHOW IMAGE',
            'SHOW INTRUSION', 'SHOW KEY', 'SHOW LICENSE', 'SHOW LOGICAL', 'SHOW MEMORY',
            'SHOW NETWORK', 'SHOW PRINTER', 'SHOW PROCESS', 'SHOW PROTECTION', 'SHOW QUEUE',
            'SHOW QUOTA', 'SHOW RMS_DEFAULT', 'SHOW ROOT', 'SHOW SECURITY',
            'SHOW SERVER ACME_SERVER', 'SHOW SERVER REGISTRY_SERVER', 'SHOW SHADOW',
            'SHOW STATUS', 'SHOW SYMBOL', 'SHOW SYSTEM', 'SHOW TERMINAL', 'SHOW TIME',
            'SHOW TRANSLATION', 'SHOW USERS', 'SHOW WORKING_SET', 'SHOW ZONE', 'SORT',
            'SPAWN', 'START', 'STOP', 'SUBMIT', 'SUBROUTINE', 'SYNCHRONIZE', 'TYPE',
            'UNLOCK', 'VIEW', 'WAIT', 'WRITE', 'XAUTH'
            ),
        2 => array( // lexical functions
            'F$CONTEXT', 'F$CSID', 'F$CUNITS', 'F$CVSI', 'F$CVTIME', 'F$CVUI',
            'F$DELTA_TIME', 'F$DEVICE', 'F$DIRECTORY', 'F$EDIT', 'F$ELEMENT',
            'F$ENVIRONMENT', 'F$EXTRACT', 'F$FAO', 'F$FID_TO_NAME', 'F$FILE_ATTRIBUTES',
            'F$GETDVI', 'F$GETENV', 'F$GETJPI', 'F$GETQUI', 'F$GETSYI', 'F$IDENTIFIER',
            'F$INTEGER', 'F$LENGTH', 'F$LICENSE', 'F$LOCATE', 'F$MATCH_WILD', 'F$MESSAGE',
            'F$MODE', 'F$MULTIPATH', 'F$PARSE', 'F$PID', 'F$PRIVILEGE', 'F$PROCESS',
            'F$SEARCH', 'F$SETPRV', 'F$STRING', 'F$TIME', 'F$TRNLNM', 'F$TYPE', 'F$UNIQUE',
            'F$USER', 'F$VERIFY'
            ),
        3 => array( // special variables etc
            'sql$database', 'P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7', 'P8', 'P9',
            '$status', '$severity', 'sys$login', 'sys$system',
            'sys$input', 'sys$output', 'sys$pipe'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '@', '&', '|', '<', '>', '-',
        '.eqs.', '.eq.', '.lt.', '.lts.', '.gt.', '.gts.', '.ne.', '.nes.',
        '.le.', '.ge.', '.ges.', '.les.',
        '.EQS.', '.EQ.', '.LT.', '.LTS.', '.GT.', '.GTS.', '.NE.', '.NES.',
        '.LE.', '.GE.', '.GES.', '.LES.',
        '.and.', '.or.', '.not.',
        '.AND.', '.OR.', '.NOT.',
        '==', ':==', '=', ':='
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #0066FF;',
            3 => 'color: #993300;'
            ),
        'COMMENTS' => array(
            0 => 'color: #666666; font-style: italic;',
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #9999FF; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #006666;',
            1 => 'color: #0099FF;',
            2 => 'color: red;',
            3 => 'color: #007800;',
            4 => 'color: #007800;',
            5 => 'color: #780078;'
            ),
        'BRACKETS' => array(
            0 => 'color: #7a0874; font-weight: bold;'
            ),
        'STRINGS' => array(
            0 => 'color: #009900;'
            ),
        'NUMBERS' => array(
            0 => 'color: #000000;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000; font-weight: bold;'
            ),
        'REGEXPS' => array(
            0 => 'color: #0099FF;',                     // variables
            1 => 'color: #0000FF;',                     // qualifiers
            2 => 'color: #FF6600; font-weight: bold;'   // labels
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
    'REGEXPS' => array(
        // variables
        0 => "'[a-zA-Z_\\-$]+'",
        // qualifiers and parameters
        1 => "(?:\/[a-zA-Z_\/]+)[\s=]",
        // labels
        2 => '(?<=\$)\s*[a-zA-Z\-_]+:'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'COMMENTS' => array(
        ),
        'KEYWORDS' => array(
        )
    )
);

?>