<?php
/*************************************************************************************
 * sql.php
 * -------
 * Author: Nigel McNie (nigel@geshi.org)
 * Contributors:
 *  - Jürgen Thomas (Juergen.Thomas@vs-polis.de)
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/06/04
 *
 * SQL language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2010/07/19 (1.0.8.9)
 *  -  Added many more keywords
 * 2008/05/23 (1.0.7.22)
 *  -  Added additional symbols for highlighting
 * 2004/11/27 (1.0.3)
 *  -  Added support for multiple object splitters
 * 2004/10/27 (1.0.2)
 *  -  Added "`" string delimiter
 *  -  Added "#" single comment starter
 * 2004/08/05 (1.0.1)
 *  -  Added support for symbols
 *  -  Added many more keywords (mostly MYSQL keywords)
 * 2004/07/14 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/11/27)
 * -------------------------
 * * Add all keywords
 * * Split this to several sql files - mysql-sql, ansi-sql etc
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
    'LANG_NAME' => 'SQL',
    'COMMENT_SINGLE' => array(1 =>'--'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => 1,
    'QUOTEMARKS' => array("'", '"', '`'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'ADD', 'ALL', 'ALTER', 'AND', 'AS', 'ASC', 'AUTO_INCREMENT',
            'BEFORE', 'BEGIN', 'BETWEEN', 'BIGINT', 'BINARY', 'BLOB', 'BOOLEAN', 'BOTH', 'BY',
            'CALL', 'CASE', 'CAST', 'CEIL', 'CEILING', 'CHANGE', 'CHAR', 'CHAR_LENGTH', 'CHARACTER',
            'CHARACTER_LENGTH', 'CHECK', 'CLOB', 'COALESCE', 'COLLATE', 'COLUMN', 'COLUMNS',
            'CONNECT', 'CONSTRAINT', 'CONVERT', 'COUNT', 'CREATE', 'CROSS', 'CURRENT',
            'CURRENT_DATE', 'CURRENT_TIME', 'CURRENT_TIMESTAMP', 'CURRENT_USER',
            'DATA', 'DATABASE', 'DATABASES', 'DATE', 'DAY', 'DEC', 'DECIMAL', 'DECLARE',
            'DEFAULT', 'DELAYED', 'DELETE', 'DESC', 'DESCRIBE', 'DISTINCT', 'DOUBLE',
            'DOMAIN', 'DROP',
            'ELSE', 'ENCLOSED', 'END', 'ESCAPED', 'EXCEPT', 'EXEC', 'EXECUTE', 'EXISTS', 'EXP',
            'EXPLAIN', 'EXTRACT',
            'FALSE', 'FIELD', 'FIELDS', 'FILTER', 'FIRST', 'FLOAT', 'FLOOR', 'FLUSH', 'FOR',
            'FOREIGN', 'FROM', 'FULL', 'FUNCTION',
            'GET', 'GROUP', 'GROUPING', 'GO', 'GOTO', 'GRANT', 'GRANTED',
            'HAVING', 'HOUR',
            'IDENTIFIED', 'IDENTITY', 'IF', 'IGNORE', 'IN', 'INCREMENT', 'INDEX', 'INFILE', 'INNER',
            'INOUT', 'INPUT', 'INSERT', 'INT', 'INTEGER', 'INTERSECT', 'INTERSECTION', 'INTERVAL',
            'INTO', 'IS',
            'JOIN',
            'KEY', 'KEYS', 'KILL',
            'LANGUAGE', 'LARGE', 'LAST', 'LEADING', 'LEFT', 'LENGTH', 'LIKE', 'LIMIT', 'LINES', 'LOAD',
            'LOCAL', 'LOCK', 'LOW_PRIORITY', 'LOWER',
            'MATCH', 'MAX', 'MERGE', 'MIN', 'MINUTE', 'MOD', 'MODIFIES', 'MODIFY', 'MONTH',
            'NATIONAL', 'NATURAL', 'NCHAR', 'NEW', 'NEXT', 'NEXTVAL', 'NONE', 'NOT',
            'NULL', 'NULLABLE', 'NULLIF', 'NULLS', 'NUMBER', 'NUMERIC',
            'OF', 'OLD', 'ON', 'ONLY', 'OPEN', 'OPTIMIZE', 'OPTION',
            'OPTIONALLY', 'OR', 'ORDER', 'OUT', 'OUTER', 'OUTFILE', 'OVER',
            'POSITION', 'POWER', 'PRECISION', 'PREPARE', 'PRIMARY', 'PROCEDURAL', 'PROCEDURE',
            'READ', 'REAL', 'REF', 'REFERENCES', 'REFERENCING', 'REGEXP', 'RENAME', 'REPLACE',
            'RESULT', 'RETURN', 'RETURNS', 'REVOKE', 'RIGHT', 'RLIKE', 'ROLLBACK', 'ROW',
            'ROW_NUMBER', 'ROWS', 'RESTRICT', 'ROLE', 'ROUTINE', 'ROW_COUNT',
            'SAVEPOINT', 'SEARCH', 'SECOND', 'SECTION', 'SELECT', 'SELF', 'SEQUENCE',
            'SESSION', 'SET', 'SETVAL', 'SHOW', 'SIMILAR', 'SIZE', 'SMALLINT', 'SOME',
            'SONAME', 'SOURCE', 'SPACE', 'SQL', 'SQRT', 'START', 'STATUS',
            'STRAIGHT_JOIN', 'STRUCTURE', 'STYLE', 'SUBSTRING', 'SUM',
            'TABLE', 'TABLE_NAME', 'TABLES', 'TERMINATED', 'TEMPORARY', 'THEN', 'TIME',
            'TIMESTAMP', 'TO', 'TRAILING', 'TRANSACTION', 'TRIGGER', 'TRIM', 'TRUE', 'TRUNCATE',
            'TRUSTED', 'TYPE',
            'UNDER', 'UNION', 'UNIQUE', 'UNKNOWN', 'UNLOCK', 'UNSIGNED',
            'UPDATE', 'UPPER', 'USE', 'USER', 'USING',
            'VALUE', 'VALUES', 'VARCHAR', 'VARIABLES', 'VARYING', 'VIEW',
            'WHEN', 'WHERE', 'WITH', 'WITHIN', 'WITHOUT', 'WORK', 'WRITE',
            'XOR',
            'YEAR',
            'ZEROFILL'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '=', '<', '>', '|', ',', '.', '+', '-', '*', '/'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #993333; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            //2 => 'color: #808080; font-style: italic;',
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
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
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