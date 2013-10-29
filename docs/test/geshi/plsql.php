<?php
/*************************************************************************************
 * plsql.php
 * -------
 * Author: Victor Engmark <victor.engmark@gmail.com>
 * Copyright: (c) 2006 Victor Engmark (http://l0b0.net/)
 * Release Version: 1.0.8.11
 * Date Started: 2006/10/26
 *
 * Oracle 9.2 PL/SQL language file for GeSHi.
 * Formatting is based on the default setup of TOAD 8.6.
 *
 * CHANGES
 * -------
 * 2006/10/27 (1.0.0)
 *    -    First Release
 *
 * TODO (updated 2006/10/27)
 * -------------------------
 * * Add < and > to brackets
 * * Remove symbols which are also comment delimiters / quote marks?
 *
 *************************************************************************************
 *
 *         This file is part of GeSHi.
 *
 *     GeSHi is free software; you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation; either version 2 of the License, or
 *     (at your option) any later version.
 *
 *     GeSHi is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.    See the
 *     GNU General Public License for more details.
 *
 *     You should have received a copy of the GNU General Public License
 *     along with GeSHi; if not, write to the Free Software
 *     Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA    02111-1307    USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'PL/SQL',
    'COMMENT_SINGLE' => array(1 =>'--'), //http://download-uk.oracle.com/docs/cd/B10501_01/appdev.920/a96624/02_funds.htm#2930
    'COMMENT_MULTI' => array('/*' => '*/'), //http://download-uk.oracle.com/docs/cd/B10501_01/appdev.920/a96624/02_funds.htm#2950
    'CASE_KEYWORDS' => GESHI_CAPS_UPPER,
    'QUOTEMARKS' => array("'", '"'), //http://download-uk.oracle.com/docs/cd/B10501_01/appdev.920/a96624/02_funds.htm
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        //PL/SQL reserved keywords (http://download-uk.oracle.com/docs/cd/B10501_01/appdev.920/a96624/f_words.htm#LNPLS019)
        1 => array('ZONE', 'YEAR', 'WRITE', 'WORK', 'WITH', 'WHILE', 'WHERE',
        'WHENEVER', 'WHEN', 'VIEW', 'VARCHAR2', 'VARCHAR', 'VALUES',
        'VALIDATE', 'USE', 'UPDATE', 'UNIQUE', 'UNION', 'TYPE', 'TRUE',
        'TRIGGER', 'TO', 'TIMEZONE_REGION', 'TIMEZONE_MINUTE', 'TIMEZONE_HOUR',
        'TIMEZONE_ABBR', 'TIMESTAMP', 'TIME', 'THEN', 'TABLE', 'SYNONYM',
        'SUCCESSFUL', 'SUBTYPE', 'START', 'SQLERRM', 'SQLCODE', 'SQL', 'SPACE',
        'SMALLINT', 'SHARE', 'SET', 'SEPARATE', 'SELECT', 'SECOND',
        'SAVEPOINT', 'ROWTYPE', 'ROWNUM', 'ROWID', 'ROW', 'ROLLBACK',
        'REVERSE', 'RETURN', 'RELEASE', 'RECORD', 'REAL', 'RAW', 'RANGE',
        'RAISE', 'PUBLIC', 'PROCEDURE', 'PRIVATE', 'PRIOR', 'PRAGMA',
        'POSITIVEN', 'POSITIVE', 'PLS_INTEGER', 'PCTFREE', 'PARTITION',
        'PACKAGE', 'OUT', 'OTHERS', 'ORGANIZATION', 'ORDER', 'OR', 'OPTION',
        'OPERATOR', 'OPEN', 'OPAQUE', 'ON', 'OF', 'OCIROWID', 'NUMBER_BASE',
        'NUMBER', 'NULL', 'NOWAIT', 'NOT', 'NOCOPY', 'NEXTVAL', 'NEW',
        'NATURALN', 'NATURAL', 'MONTH', 'MODE', 'MLSLABEL', 'MINUTE', 'MINUS',
        'LOOP', 'LONG', 'LOCK', 'LIMITED', 'LIKE', 'LEVEL', 'JAVA',
        'ISOLATION', 'IS', 'INTO', 'INTERVAL', 'INTERSECT', 'INTERFACE',
        'INTEGER', 'INSERT', 'INDICATOR', 'INDEX', 'IN', 'IMMEDIATE', 'IF',
        'HOUR', 'HEAP', 'HAVING', 'GROUP', 'GOTO', 'FUNCTION', 'FROM',
        'FORALL', 'FOR', 'FLOAT', 'FETCH', 'FALSE', 'EXTENDS', 'EXIT',
        'EXISTS', 'EXECUTE', 'EXCLUSIVE', 'EXCEPTION', 'END', 'ELSIF', 'ELSE',
        'DROP', 'DO', 'DISTINCT', 'DESC', 'DELETE', 'DEFAULT', 'DECLARE',
        'DECIMAL', 'DAY', 'DATE', 'CURSOR', 'CURRVAL', 'CURRENT', 'CREATE',
        'CONSTANT', 'CONNECT', 'COMPRESS', 'COMMIT', 'COMMENT', 'COLLECT',
        'CLUSTER', 'CLOSE', 'CHECK', 'CHAR_BASE', 'CHAR', 'CASE', 'BY', 'BULK',
        'BOOLEAN', 'BODY', 'BINARY_INTEGER', 'BETWEEN', 'BEGIN', 'AUTHID',
        'AT', 'ASC', 'AS', 'ARRAY', 'ANY', 'AND', 'ALTER', 'ALL'),
        //SQL functions (http://download-uk.oracle.com/docs/cd/B10501_01/server.920/a96540/toc.htm & http://download-uk.oracle.com/docs/cd/B10501_01/server.920/a96540/functions101a.htm#85925)
        2 => array('XMLTRANSFORM', 'XMLSEQUENCE', 'XMLFOREST', 'XMLELEMENT',
        'XMLCONCAT', 'XMLCOLATTVAL', 'XMLAGG', 'WIDTH_BUCKET', 'VSIZE',
        'VARIANCE', 'VAR_SAMP', 'VAR_POP', 'VALUE', 'USERENV', 'USER', 'UPPER',
        'UPDATEXML', 'UNISTR', 'UID', 'TZ_OFFSET', 'TRUNC', 'TRIM', 'TREAT',
        'TRANSLATE', 'TO_YMINTERVAL', 'TO_TIMESTAMP_TZ', 'TO_TIMESTAMP',
        'TO_SINGLE_BYTE', 'TO_NUMBER', 'TO_NCLOB', 'TO_NCHAR', 'TO_MULTI_BYTE',
        'TO_LOB', 'TO_DSINTERVAL', 'TO_DATE', 'TO_CLOB', 'TO_CHAR', 'TANH',
        'TAN', 'SYSTIMESTAMP', 'SYSDATE', 'SYS_XMLGEN', 'SYS_XMLAGG',
        'SYS_TYPEID', 'SYS_GUID', 'SYS_EXTRACT_UTC', 'SYS_DBURIGEN',
        'SYS_CONTEXT', 'SYS_CONNECT_BY_PATH', 'SUM', 'SUBSTR', 'STDDEV_SAMP',
        'STDDEV_POP', 'STDDEV', 'SQRT', 'SOUNDEX', 'SINH', 'SIN', 'SIGN',
        'SESSIONTIMEZONE', 'RTRIM', 'RPAD', 'ROWIDTONCHAR', 'ROWIDTOCHAR',
        'ROW_NUMBER', 'ROUND', 'REPLACE', 'REGR_SYY', 'REGR_SXY', 'REGR_SXX',
        'REGR_SLOPE', 'REGR_R2', 'REGR_INTERCEPT', 'REGR_COUNT', 'REGR_AVGY',
        'REGR_AVGX', 'REFTOHEX', 'REF', 'RAWTONHEX', 'RAWTOHEX',
        'RATIO_TO_REPORT', 'RANK', 'POWER', 'PERCENTILE_DISC',
        'PERCENTILE_CONT', 'PERCENT_RANK', 'PATH', 'NVL2', 'NVL',
        'NUMTOYMINTERVAL', 'NUMTODSINTERVAL', 'NULLIF', 'NTILE', 'NLSSORT',
        'NLS_UPPER', 'NLS_LOWER', 'NLS_INITCAP', 'NLS_CHARSET_NAME',
        'NLS_CHARSET_ID', 'NLS_CHARSET_DECL_LEN', 'NEXT_DAY', 'NEW_TIME',
        'NCHR', 'MONTHS_BETWEEN', 'MOD', 'MIN', 'MAX', 'MAKE_REF', 'LTRIM',
        'LPAD', 'LOWER', 'LOG', 'LOCALTIMESTAMP', 'LN', 'LENGTH', 'LEAST',
        'LEAD', 'LAST_VALUE', 'LAST_DAY', 'LAST', 'LAG', 'INSTR', 'INITCAP',
        'HEXTORAW', 'GROUPING_ID', 'GROUPING', 'GROUP_ID', 'GREATEST',
        'FROM_TZ', 'FLOOR', 'FIRST_VALUE', 'FIRST', 'EXTRACTVALUE', 'EXTRACT',
        'EXP', 'EXISTSNODE', 'EMPTY_CLOB', 'EMPTY_BLOB', 'DUMP', 'DEREF',
        'DEPTH', 'DENSE_RANK', 'DECOMPOSE', 'DECODE', 'DBTIMEZONE',
        'CURRENT_TIMESTAMP', 'CURRENT_DATE', 'CUME_DIST', 'COVAR_SAMP',
        'COVAR_POP', 'COUNT', 'COSH', 'COS', 'CORR', 'CONVERT', 'CONCAT',
        'COMPOSE', 'COALESCE', 'CHR', 'CHARTOROWID', 'CEIL', 'CAST', 'BITAND',
        'BIN_TO_NUM', 'BFILENAME', 'AVG', 'ATAN2', 'ATAN', 'ASIN', 'ASCIISTR',
        'ASCII', 'ADD_MONTHS', 'ACOS', 'ABS'),
        //PL/SQL packages (http://download-uk.oracle.com/docs/cd/B10501_01/appdev.920/a96612/intro2.htm#1025672)
        3 => array('UTL_URL', 'UTL_TCP', 'UTL_SMTP', 'UTL_REF', 'UTL_RAW',
        'UTL_PG', 'UTL_INADDR', 'UTL_HTTP', 'UTL_FILE', 'UTL_ENCODE',
        'UTL_COLL', 'SDO_UTIL', 'SDO_TUNE', 'SDO_MIGRATE', 'SDO_LRS',
        'SDO_GEOM', 'SDO_CS', 'DMBS_XMLQUERY', 'DMBS_FLASHBACK',
        'DMBS_DEFER_SYS', 'DEBUG_EXTPROC', 'DBMS_XSLPROCESSOR', 'DBMS_XPLAN',
        'DBMS_XMLSCHEMA', 'DBMS_XMLSAVE', 'DBMS_XMLPARSER', 'DBMS_XMLGEN',
        'DBMS_XMLDOM', 'DBMS_XDBT', 'DBMS_XDB_VERSION', 'DBMS_XDB', 'DBMS_WM',
        'DBMS_UTILITY', 'DBMS_TYPES', 'DBMS_TTS', 'DBMS_TRANSFORM',
        'DBMS_TRANSACTION', 'DBMS_TRACE', 'DBMS_STRM_A', 'DBMS_STRM',
        'DBMS_STORAGE_MAP', 'DBMS_STATS', 'DBMS_SQL', 'DBMS_SPACE_ADMIN',
        'DBMS_SPACE', 'DBMS_SHARED_POOL', 'DBMS_SESSION', 'DBMS_RULE_ADM',
        'DBMS_RULE', 'DBMS_ROWID', 'DBMS_RLS', 'DBMS_RESUMABLE',
        'DBMS_RESOURCE_MANAGER_PRIVS', 'DBMS_RESOURCE_MANAGER', 'DBMS_REPUTIL',
        'DBMS_REPCAT_RGT', 'DBMS_REPCAT_INSTATIATE', 'DBMS_REPCAT_ADMIN',
        'DBMS_REPCAT', 'DBMS_REPAIR', 'DBMS_REFRESH', 'DBMS_REDEFINITION',
        'DBMS_RECTIFIER_DIFF', 'DBMS_RANDOM', 'DBMS_PROPAGATION_ADM',
        'DBMS_PROFILER', 'DBMS_PIPE', 'DBMS_PCLXUTIL', 'DBMS_OUTPUT',
        'DBMS_OUTLN_EDIT', 'DBMS_OUTLN', 'DBMS_ORACLE_TRACE_USER',
        'DBMS_ORACLE_TRACE_AGENT', 'DBMS_OLAP', 'DBMS_OFFLINE_SNAPSHOT',
        'DBMS_OFFLINE_OG', 'DBMS_ODCI', 'DBMS_OBFUSCATION_TOOLKIT',
        'DBMS_MVIEW', 'DBMS_MGWMSG', 'DBMS_MGWADM', 'DBMS_METADATA',
        'DBMS_LOGSTDBY', 'DBMS_LOGMNR_D', 'DBMS_LOGMNR_CDC_SUBSCRIBE',
        'DBMS_LOGMNR_CDC_PUBLISH', 'DBMS_LOGMNR', 'DBMS_LOCK', 'DBMS_LOB',
        'DBMS_LIBCACHE', 'DBMS_LDAP', 'DBMS_JOB', 'DBMS_IOT',
        'DBMS_HS_PASSTHROUGH', 'DBMS_FGA', 'DBMS_DISTRIBUTED_TRUST_ADMIN',
        'DBMS_DESCRIBE', 'DBMS_DEFER_QUERY', 'DBMS_DEFER', 'DBMS_DEBUG',
        'DBMS_DDL', 'DBMS_CAPTURE_ADM', 'DBMS_AW', 'DBMS_AQELM', 'DBMS_AQADM',
        'DBMS_AQ', 'DBMS_APPLY_ADM', 'DBMS_APPLICATION_INFO', 'DBMS_ALERT',
        'CWM2_OLAP_AW_ACCESS'),
        //PL/SQL predefined exceptions (http://download-uk.oracle.com/docs/cd/B10501_01/appdev.920/a96624/07_errs.htm#784)
        4 => array('ZERO_DIVIDE', 'VALUE_ERROR', 'TOO_MANY_ROWS',
        'TIMEOUT_ON_RESOURCE', 'SYS_INVALID_ROWID', 'SUBSCRIPT_OUTSIDE_LIMIT',
        'SUBSCRIPT_BEYOND_COUNT', 'STORAGE_ERROR', 'SELF_IS_NULL',
        'ROWTYPE_MISMATCH', 'PROGRAM_ERROR', 'NOT_LOGGED_ON', 'NO_DATA_FOUND',
        'LOGIN_DENIED', 'INVALID_NUMBER', 'INVALID_CURSOR', 'DUP_VAL_ON_INDEX',
        'CURSOR_ALREADY_OPEN', 'COLLECTION_IS_NULL', 'CASE_NOT_FOUND',
        'ACCESS_INTO_NULL'),
        //Static data dictionary views (http://download-uk.oracle.com/docs/cd/B10501_01/server.920/a96536/ch2.htm)
        5 => array('USER_REPSITES', 'USER_REPSCHEMA',
        'USER_REPRESOLUTION_STATISTICS', 'USER_REPRESOLUTION_METHOD',
        'USER_REPRESOLUTION', 'USER_REPRESOL_STATS_CONTROL', 'USER_REPPROP',
        'USER_REPPRIORITY_GROUP', 'USER_REPPRIORITY',
        'USER_REPPARAMETER_COLUMN', 'USER_REPOBJECT', 'USER_REPKEY_COLUMNS',
        'USER_REPGROUPED_COLUMN', 'USER_REPGROUP_PRIVILEGES', 'USER_REPGROUP',
        'USER_REPGENOBJECTS', 'USER_REPGENERATED', 'USER_REPFLAVORS',
        'USER_REPFLAVOR_OBJECTS', 'USER_REPFLAVOR_COLUMNS', 'USER_REPDDL',
        'USER_REPCONFLICT', 'USER_REPCOLUMN_GROUP', 'USER_REPCOLUMN',
        'USER_REPCATLOG', 'USER_REPCAT_USER_PARM_VALUES',
        'USER_REPCAT_USER_AUTHORIZATIONS', 'USER_REPCAT_TEMPLATE_SITES',
        'USER_REPCAT_TEMPLATE_PARMS', 'USER_REPCAT_TEMPLATE_OBJECTS',
        'USER_REPCAT_REFRESH_TEMPLATES', 'USER_REPCAT', 'USER_REPAUDIT_COLUMN',
        'USER_REPAUDIT_ATTRIBUTE', 'DBA_REPSITES_NEW', 'DBA_REPSITES',
        'DBA_REPSCHEMA', 'DBA_REPRESOLUTION_STATISTICS',
        'DBA_REPRESOLUTION_METHOD', 'DBA_REPRESOLUTION',
        'DBA_REPRESOL_STATS_CONTROL', 'DBA_REPPROP', 'DBA_REPPRIORITY_GROUP',
        'DBA_REPPRIORITY', 'DBA_REPPARAMETER_COLUMN', 'DBA_REPOBJECT',
        'DBA_REPKEY_COLUMNS', 'DBA_REPGROUPED_COLUMN',
        'DBA_REPGROUP_PRIVILEGES', 'DBA_REPGROUP', 'DBA_REPGENOBJECTS',
        'DBA_REPGENERATED', 'DBA_REPFLAVORS', 'DBA_REPFLAVOR_OBJECTS',
        'DBA_REPFLAVOR_COLUMNS', 'DBA_REPEXTENSIONS', 'DBA_REPDDL',
        'DBA_REPCONFLICT', 'DBA_REPCOLUMN_GROUP', 'DBA_REPCOLUMN',
        'DBA_REPCATLOG', 'DBA_REPCAT_USER_PARM_VALUES',
        'DBA_REPCAT_USER_AUTHORIZATIONS', 'DBA_REPCAT_TEMPLATE_SITES',
        'DBA_REPCAT_TEMPLATE_PARMS', 'DBA_REPCAT_TEMPLATE_OBJECTS',
        'DBA_REPCAT_REFRESH_TEMPLATES', 'DBA_REPCAT_EXCEPTIONS', 'DBA_REPCAT',
        'DBA_REPAUDIT_COLUMN', 'DBA_REPAUDIT_ATTRIBUTE', 'ALL_REPSITES',
        'ALL_REPSCHEMA', 'ALL_REPRESOLUTION_STATISTICS',
        'ALL_REPRESOLUTION_METHOD', 'ALL_REPRESOLUTION',
        'ALL_REPRESOL_STATS_CONTROL', 'ALL_REPPROP', 'ALL_REPPRIORITY_GROUP',
        'ALL_REPPRIORITY', 'ALL_REPPARAMETER_COLUMN', 'ALL_REPOBJECT',
        'ALL_REPKEY_COLUMNS', 'ALL_REPGROUPED_COLUMN',
        'ALL_REPGROUP_PRIVILEGES', 'ALL_REPGROUP', 'ALL_REPGENOBJECTS',
        'ALL_REPGENERATED', 'ALL_REPFLAVORS', 'ALL_REPFLAVOR_OBJECTS',
        'ALL_REPFLAVOR_COLUMNS', 'ALL_REPDDL', 'ALL_REPCONFLICT',
        'ALL_REPCOLUMN_GROUP', 'ALL_REPCOLUMN', 'ALL_REPCATLOG',
        'ALL_REPCAT_USER_PARM_VALUES', 'ALL_REPCAT_USER_AUTHORIZATIONS',
        'ALL_REPCAT_TEMPLATE_SITES', 'ALL_REPCAT_TEMPLATE_PARMS',
        'ALL_REPCAT_TEMPLATE_OBJECTS', 'ALL_REPCAT_REFRESH_TEMPLATES',
        'ALL_REPCAT', 'ALL_REPAUDIT_COLUMN', 'ALL_REPAUDIT_ATTRIBUTE')
        ),
    'SYMBOLS' => array(
        //PL/SQL delimiters (http://download-uk.oracle.com/docs/cd/B10501_01/appdev.920/a96624/02_funds.htm#2732)
        '+', '%', "'", '.', '/', '(', ')', ':', ',', '*', '"', '=', '<', '>', '@', ';', '-', ':=', '=>', '||', '**', '<<', '>>', '/*', '*/', '..', '<>', '!=', '~=', '^=', '<=', '>='
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #00F;',
            2 => 'color: #000;',
            3 => 'color: #00F;',
            4 => 'color: #F00;',
            5 => 'color: #800;'
            ),
        'COMMENTS' => array(
            1 => 'color: #080; font-style: italic;',
            'MULTI' => 'color: #080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #00F;'
            ),
        'STRINGS' => array(
            0 => 'color: #F00;'
            ),
        'NUMBERS' => array(
            0 => 'color: #800;'
            ),
        'METHODS' => array(
            0 => 'color: #0F0;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #00F;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            0 => 'color: #0F0;'
            )
        ),
        'URLS' => array(
            1 => 'http://www.oracle.com/pls/db92/db92.drilldown?word={FNAMEU}',
            2 => 'http://www.oracle.com/pls/db92/db92.drilldown?word={FNAMEU}',
            3 => 'http://www.oracle.com/pls/db92/db92.drilldown?word={FNAMEU}',
            4 => 'http://www.oracle.com/pls/db92/db92.drilldown?word={FNAMEU}',
            5 => 'http://www.oracle.com/pls/db92/db92.drilldown?word={FNAMEU}'
            ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'REGEXPS' => array(),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array()
);

?>
