<?php
/*************************************************************************************
 * postgresql.php
 * -----------
 * Author: Christophe Chauvet (christophe_at_kryskool_dot_org)
 * Contributors: Leif Biberg Kristensen <leif_at_solumslekt_dot_org> 2010-05-03
 * Copyright: (c) 2007 Christophe Chauvet (http://kryskool.org/), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2007/07/20
 *
 * PostgreSQL language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2007/07/20 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2007/07/20)
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
    'LANG_NAME' => 'PostgreSQL',
    'COMMENT_SINGLE' => array(1 => '--'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"', '`'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        //Put PostgreSQL reserved keywords here.  I like mine uppercase.
        1 => array(
            'ABORT','ABSOLUTE','ACCESS','ACTION','ADD','ADMIN','AFTER',
            'AGGREGATE','ALL','ALSO','ALTER','ALWAYS','ANALYSE','ANALYZE','AND',
            'ANY','AS','ASC,','ASSERTION','ASSIGNMENT','ASYMMETRIC','AT',
            'AUTHORIZATION','BACKWARD','BEFORE','BEGIN','BETWEEN','BOTH','BY',
            'CACHE','CALLED','CASCADE','CASCADED','CASE','CAST','CATALOG',
            'CHAIN','CHARACTERISTICS','CHECK','CHECKPOINT','CLASS','CLOSE',
            'CLUSTER','COALESCE','COLLATE','COLUMN','COMMENT','COMMIT',
            'COMMITTED','CONCURRENTLY','CONFIGURATION','CONNECTION',
            'CONSTRAINT','CONSTRAINTS','CONTENT','CONTINUE','CONVERSION','COPY',
            'COST','CREATE','CREATEDB','CREATEROLE','CREATEUSER','CROSS','CSV',
            'CURRENT','CURRENT_CATALOG','CURRENT_DATE','CURRENT_ROLE',
            'CURRENT_SCHEMA','CURRENT_TIME','CURRENT_TIMESTAMP','CURRENT_USER',
            'CURSOR','CYCLE','DATA','DATABASE','DAY','DEALLOCATE','DEC',
            'DECLARE','DEFAULT','DEFAULTS','DEFERRABLE','DEFERRED','DEFINER',
            'DELETE','DELIMITER','DELIMITERS','DESC','DICTIONARY','DISABLE',
            'DISCARD','DISTINCT','DO','DOCUMENT','DOMAIN','DOUBLE','DROP',
            'EACH','ELSE','ENABLE','ENCODING','ENCRYPTED','END','ESCAPE',
            'EXCEPT','EXCLUDING','EXCLUSIVE','EXECUTE','EXISTS','EXPLAIN',
            'EXTERNAL','EXTRACT','FALSE','FAMILY','FETCH','FIRST','FOLLOWING',
            'FOR','FORCE','FOREIGN','FORWARD','FREEZE','FROM','FULL','FUNCTION',
            'GLOBAL','GRANT','GRANTED','GREATEST','GROUP','HANDLER','HAVING',
            'HEADER','HOLD','HOUR','IDENTITY','IF','ILIKE','IMMEDIATE',
            'IMMUTABLE','IMPLICIT','IN','INCLUDING','INCREMENT','INDEX',
            'INDEXES','INHERIT','INHERITS','INITIALLY','INNER','INOUT','INPUT',
            'INSENSITIVE','INSERT','INSTEAD','INTERSECT','INTO','INVOKER','IS',
            'ISNULL','ISOLATION','JOIN','KEY','LANCOMPILER','LANGUAGE','LARGE',
            'LAST','LC_COLLATE','LC_CTYPE','LEADING','LEAST','LEFT','LEVEL',
            'LIKE','LIMIT','LISTEN','LOAD','LOCAL','LOCALTIME','LOCALTIMESTAMP',
            'LOCATION','LOCK','LOGIN','LOOP','MAPPING','MATCH','MAXVALUE',
            'MINUTE','MINVALUE','MODE','MONTH','MOVE','NAME','NAMES','NATIONAL',
            'NATURAL','NEW','NEXT','NO','NOCREATEDB','NOCREATEROLE',
            'NOCREATEUSER','NOINHERIT','NOLOGIN','NONE','NOSUPERUSER','NOT',
            'NOTHING','NOTIFY','NOTNULL','NOWAIT','NULL','NULLIF','NULLS',
            'NUMERIC','OBJECT','OF','OFF','OFFSET','OIDS','OLD','ON','ONLY',
            'OPERATOR','OPTION','OPTIONS','OR','ORDER','OUT','OUTER','OVER',
            'OVERLAPS','OVERLAY','OWNED','OWNER','PARSER','PARTIAL','PARTITION',
            'PASSWORD','PLACING','PLANS','POSITION','PRECEDING','PRECISION',
            'PREPARE','PREPARED','PRESERVE','PRIMARY','PRIOR','PRIVILEGES',
            'PROCEDURAL','PROCEDURE','QUOTE','RANGE','READ','REASSIGN',
            'RECHECK','RECURSIVE','REFERENCES','REINDEX','RELATIVE','RELEASE',
            'RENAME','REPEATABLE','REPLACE','REPLICA','RESET','RESTART',
            'RESTRICT','RETURN','RETURNING','RETURNS','REVOKE','RIGHT','ROLE',
            'ROLLBACK','ROW','ROWS','RULE','SAVEPOINT','SCHEMA','SCROLL',
            'SEARCH','SECOND',
            'SECURITY','SELECT','SEQUENCE','SERIALIZABLE','SERVER','SESSION',
            'SESSION_USER','SET','SETOF','SHARE','SHOW','SIMILAR','SIMPLE',
            'SOME','STABLE','STANDALONE','START','STATEMENT','STATISTICS',
            'STDIN','STDOUT','STORAGE','STRICT','STRIP','SUPERUSER',
            'SYMMETRIC','SYSID','SYSTEM','TABLE','TABLESPACE','TEMP','TEMPLATE',
            'TEMPORARY','THEN','TO','TRAILING','TRANSACTION','TREAT','TRIGGER',
            'TRUE','TRUNCATE','TRUSTED','TYPE','UNBOUNDED','UNCOMMITTED',
            'UNENCRYPTED','UNION','UNIQUE','UNKNOWN','UNLISTEN','UNTIL',
            'UPDATE','USER','USING','VACUUM','VALID','VALIDATOR','VALUE',
            'VALUES','VARIADIC','VERBOSE','VERSION','VIEW','VOLATILE','WHEN',
            'WHERE','WHILE','WHITESPACE','WINDOW','WITH','WITHOUT','WORK','WRAPPER',
            'WRITE','XMLATTRIBUTES','XMLCONCAT','XMLELEMENT','XMLFOREST',
            'XMLPARSE','XMLPI','XMLROOT','XMLSERIALIZE','YEAR','YES','ZONE'
            ),

        //Put functions here
        3 => array(
            // mathematical functions
            'ABS','CBRT','CEIL','CEILING','DEGREES','DIV','EXP','FLOOR','LN',
            'LOG','MOD','PI','POWER','RADIANS','RANDOM','ROUND','SETSEED',
            'SIGN','SQRT','TRUNC','WIDTH_BUCKET',
            // trigonometric functions
            'ACOS','ASIN','ATAN','ATAN2','COS','COT','SIN','TAN',
            // string functions
            'BIT_LENGTH','CHAR_LENGTH','CHARACTER_LENGTH','LOWER',
            'OCTET_LENGTH','POSITION','SUBSTRING','TRIM','UPPER',
            // other string functions
            'ASCII','BTRIM','CHR','CONVERT','CONVERT_FROM','CONVERT_TO',
            'DECODE','ENCODE','INITCAP','LENGTH','LPAD','LTRIM','MD5',
            'PG_CLIENT_ENCODING','QUOTE_IDENT','QUOTE_LITERAL','QUOTE_NULLABLE',
            'REGEXP_MATCHES','REGEXP_REPLACE','REGEXP_SPLIT_TO_ARRAY',
            'REGEXP_SPLIT_TO_TABLE','REPEAT','RPAD','RTRIM','SPLIT_PART',
            'STRPOS','SUBSTR','TO_ASCII','TO_HEX','TRANSLATE',
            // binary string functions
            'GET_BIT','GET_BYTE','SET_BIT','SET_BYTE',
            // data type formatting functions
            'TO_CHAR','TO_DATE','TO_NUMBER','TO_TIMESTAMP',
            // date/time functions
            'AGE','CLOCK_TIMESTAMP','DATE_PART','DATE_TRUNC','EXTRACT',
            'ISFINITE','JUSTIFY_DAYS','JUSTIFY_HOURS','JUSTIFY_INTERVAL','NOW',
            'STATEMENT_TIMESTAMP','TIMEOFDAY','TRANSACTION_TIMESTAMP',
            // enum support functions
            'ENUM_FIRST','ENUM_LAST','ENUM_RANGE',
            // geometric functions
            'AREA','CENTER','DIAMETER','HEIGHT','ISCLOSED','ISOPEN','NPOINTS',
            'PCLOSE','POPEN','RADIUS','WIDTH',
            'BOX','CIRCLE','LSEG','PATH','POINT','POLYGON',
            // cidr and inet functions
            'ABBREV','BROADCAST','FAMILY','HOST','HOSTMASK','MASKLEN','NETMASK',
            'NETWORK','SET_MASKLEN',
            // text search functions
            'TO_TSVECTOR','SETWEIGHT','STRIP','TO_TSQUERY','PLAINTO_TSQUERY',
            'NUMNODE','QUERYTREE','TS_RANK','TS_RANK_CD','TS_HEADLINE',
            'TS_REWRITE','GET_CURRENT_TS_CONFIG','TSVECTOR_UPDATE_TRIGGER',
            'TSVECTOR_UPDATE_TRIGGER_COLUMN',
            'TS_DEBUG','TS_LEXISE','TS_PARSE','TS_TOKEN_TYPE','TS_STAT',
            // XML functions
            'XMLCOMMENT','XMLCONCAT','XMLELEMENT','XMLFOREST','XMLPI','XMLROOT',
            'XMLAGG','XPATH','TABLE_TO_XMLSCHEMA','QUERY_TO_XMLSCHEMA',
            'CURSOR_TO_XMLSCHEMA','TABLE_TO_XML_AND_XMLSCHEMA',
            'QUERY_TO_XML_AND_XMLSCHEMA','SCHEMA_TO_XML','SCHEMA_TO_XMLSCHEMA',
            'SCHEMA_TO_XML_AND_XMLSCHEMA','DATABASE_TO_XML',
            'DATABASE_TO_XMLSCHEMA','DATABASE_TO_XML_AND_XMLSCHEMA',
            // sequence manipulating functions
            'CURRVAL','LASTVAL','NEXTVAL','SETVAL',
            // conditional expressions
            'COALESCE','NULLIF','GREATEST','LEAST',
            // array functions
            'ARRAY_APPEND','ARRAY_CAT','ARRAY_NDIMS','ARRAY_DIMS','ARRAY_FILL',
            'ARRAY_LENGTH','ARRAY_LOWER','ARRAY_PREPEND','ARRAY_TO_STRING',
            'ARRAY_UPPER','STRING_TO_ARRAY','UNNEST',
            // aggregate functions
            'ARRAY_AGG','AVG','BIT_AND','BIT_OR','BOOL_AND','BOOL_OR','COUNT',
            'EVERY','MAX','MIN','STRING_AGG','SUM',
            // statistic aggregate functions
            'CORR','COVAR_POP','COVAR_SAMP','REGR_AVGX','REGR_AVGY',
            'REGR_COUNT','REGR_INTERCEPT','REGR_R2','REGR_SLOPE','REGR_SXX',
            'REGR_SXY','REGR_SYY','STDDEV','STDDEV_POP','STDDEV_SAMP',
            'VARIANCE','VAR_POP','VAR_SAMP',
            // window functions
            'ROW_NUMBER','RANK','DENSE_RANK','PERCENT_RANK','CUME_DIST','NTILE',
            'LAG','LEAD','FIRST_VALUE','LAST_VALUE','NTH_VALUE',
            // set returning functions
            'GENERATE_SERIES','GENERATE_SUBSCRIPTS'
            // system information functions not currently included
            ),

        //Put your postgresql var
        4 => array(
            'client_encoding',
            'standard_conforming_strings'
            ),

        //Put your data types here
        5 => array(
            'ARRAY','ABSTIME','BIGINT','BIGSERIAL','BINARY','BIT','BIT VARYING',
            'BOOLEAN','BOX','BYTEA','CHAR','CHARACTER','CHARACTER VARYING',
            'CIDR','CIRCLE','DATE','DECIMAL','DOUBLE PRECISION','ENUM','FLOAT',
            'INET','INT','INTEGER','INTERVAL','NCHAR','REAL','SMALLINT','TEXT',
            'TIME','TIMESTAMP','VARCHAR','XML',
            ),

        //        //Put your package names here
        //        6 => array(
        //            ),

        ),
    'SYMBOLS' => array(
        '(', ')', '=', '<', '>', '|'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        3 => false,
        4 => false,
        5 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            // regular keywords
            1 => 'color: #000000; font-weight: bold; text-transform: uppercase;',
            // inbuilt functions
            3 => 'color: #333399; font-weight: bold; text-transform: uppercase;',
            // postgresql var(?)
            4 => 'color: #993333; font-weight: bold; text-transform: uppercase;',
            // data types
            5 => 'color: #993333; font-weight: bold; text-transform: uppercase;',
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
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
            1 => 'color: #ff0000;'
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
        1 => '',
        3 => '',
        4 => 'http://paste.postgresql.fr/wiki/desc.php?def={FNAME}',
        5 => '',
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
        ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            1 => array(
                'DISALLOWED_AFTER' => '(?![\(\w])'
                ),

            3 => array(
                'DISALLOWED_AFTER' => '(?=\()'
                ),

            4 => array(
                'DISALLOWED_AFTER' => '(?![\(\w])'
                ),

            5 => array(
                'DISALLOWED_AFTER' => '(?![\(\w])'
                ),
            )
        )

);

?>