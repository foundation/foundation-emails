<?php
/*************************************************************************************
 * mysql.php
 * ---------
 * Author: Marjolein Katsma (marjolein.is.back@gmail.com)
 * Copyright: (c) 2008 Marjolein Katsma (http://blog.marjoleinkatsma.com/)
 * Release Version: 1.0.8.11
 * Date Started: 2008-12-12
 *
 * MySQL language file for GeSHi.
 *
 * Based on original MySQL language file by Carl Fürstenberg (2004); brought
 * up-to-date for current MySQL versions, and with more classes for different
 * types of keywords; several minor errors were corrected as well.
 *
 * Some "classes" have two groups here: this is to allow for the fact that some
 * keywords in MySQL have a double function: many of those are either a function
 * (must be immediately followed by an opening bracket) or some other keyword:
 * so they can be distinguished by the presence (or not) of that opening bracket.
 * (An immediately following opening bracket is a default rule for functions in
 * MySQL, though this may be overridden; because it's only a default, we use a
 * regex lookahead only where necessary to distinguish homonyms, not generally
 * to match any function.)
 * Other keywords with double usage cannot be distinguished and are classified
 * in the "Mix" category.
 *
 *************************************************************************************
 *
 * This file is part of GeSHi.
 *
 * GeSHi is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * GeSHi is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with GeSHi; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'MySQL',
    //'COMMENT_SINGLE' => array(1 =>'--', 2 => '#'),    // '--' MUST be folowed by whitespace,not necessarily a space
    'COMMENT_SINGLE' => array(
        1 =>'-- ',
        2 => '#'
        ),
    'COMMENT_REGEXP' => array(
        1 => "/(?:--\s).*?$/",                          // double dash followed by any whitespace
        ),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,            // @@@ would be nice if this could be defined per group!
    'QUOTEMARKS' => array("'", '"', '`'),
    'ESCAPE_CHAR' => '\\',                              // by default only, can be specified
    'ESCAPE_REGEXP' => array(
        1 => "/[_%]/",                                  // search wildcards
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC |
        GESHI_NUMBER_OCT_PREFIX |
        GESHI_NUMBER_HEX_PREFIX |
        GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_SCI_SHORT |
        GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            // Mix: statement keywords and keywords that don't fit in any other
            // category, or have multiple usage/meanings
            'ACTION','ADD','AFTER','ALGORITHM','ALL','ALTER','ANALYZE','ANY',
            'ASC','AS','BDB','BEGIN','BERKELEYDB','BINARY','BTREE','CALL',
            'CASCADED','CASCADE','CHAIN','CHANGE','CHECK','COLUMNS','COLUMN',
            'COMMENT','COMMIT','COMMITTED','CONSTRAINT','CONTAINS SQL',
            'CONSISTENT','CONVERT','CREATE','CROSS','DATA','DATABASES',
            'DECLARE','DEFINER','DELAYED','DELETE','DESCRIBE','DESC',
            'DETERMINISTIC','DISABLE','DISCARD','DISTINCTROW','DISTINCT','DO',
            'DROP','DUMPFILE','DUPLICATE KEY','ENABLE','ENCLOSED BY','ENGINE',
            'ERRORS','ESCAPED BY','EXISTS','EXPLAIN','EXTENDED','FIELDS',
            'FIRST','FOR EACH ROW','FORCE','FOREIGN KEY','FROM','FULL',
            'FUNCTION','GLOBAL','GRANT','GROUP BY','HANDLER','HASH','HAVING',
            'HELP','HIGH_PRIORITY','IF NOT EXISTS','IGNORE','IMPORT','INDEX',
            'INFILE','INNER','INNODB','INOUT','INTO','INVOKER',
            'ISOLATION LEVEL','JOIN','KEYS','KEY','KILL','LANGUAGE SQL','LAST',
            'LIMIT','LINES','LOAD','LOCAL','LOCK','LOW_PRIORITY',
            'MASTER_SERVER_ID','MATCH','MERGE','MIDDLEINT','MODIFIES SQL DATA',
            'MODIFY','MRG_MYISAM','NATURAL','NEXT','NO SQL','NO','ON',
            'OPTIMIZE','OPTIONALLY','OPTION','ORDER BY','OUTER','OUTFILE','OUT',
            'PARTIAL','PARTITION','PREV','PRIMARY KEY','PRIVILEGES','PROCEDURE',
            'PURGE','QUICK','READS SQL DATA','READ','REFERENCES','RELEASE',
            'RENAME','REORGANIZE','REPEATABLE','REQUIRE','RESTRICT','RETURNS',
            'REVOKE','ROLLBACK','ROUTINE','RTREE','SAVEPOINT','SELECT',
            'SERIALIZABLE','SESSION','SET','SHARE MODE','SHOW','SIMPLE',
            'SNAPSHOT','SOME','SONAME','SQL SECURITY','SQL_BIG_RESULT',
            'SQL_BUFFER_RESULT','SQL_CACHE','SQL_CALC_FOUND_ROWS',
            'SQL_NO_CACHE','SQL_SMALL_RESULT','SSL','START','STARTING BY',
            'STATUS','STRAIGHT_JOIN','STRIPED','TABLESPACE','TABLES','TABLE',
            'TEMPORARY','TEMPTABLE','TERMINATED BY','TO','TRANSACTIONS',
            'TRANSACTION','TRIGGER','TYPES','TYPE','UNCOMMITTED','UNDEFINED',
            'UNION','UNLOCK_TABLES','UPDATE','USAGE','USE','USER_RESOURCES',
            'USING','VALUES','VALUE','VIEW','WARNINGS','WHERE','WITH ROLLUP',
            'WITH','WORK','WRITE',
            ),
        2 => array(     //No ( must follow
            // Mix: statement keywords distinguished from functions by the same name
            "CURRENT_USER", "DATABASE", "IN", "INSERT", "DEFAULT", "REPLACE", "SCHEMA", "TRUNCATE"
            ),
        3 => array(
            // Values (Constants)
            'FALSE','NULL','TRUE',
            ),
        4 => array(
            // Column Data Types
            'BIGINT','BIT','BLOB','BOOLEAN','BOOL','CHARACTER VARYING',
            'CHAR VARYING','DATETIME','DECIMAL','DEC','DOUBLE PRECISION',
            'DOUBLE','ENUM','FIXED','FLOAT','GEOMETRYCOLLECTION','GEOMETRY',
            'INTEGER','INT','LINESTRING','LONGBLOB','LONGTEXT','MEDIUMBLOB',
            'MEDIUMINT','MEDIUMTEXT','MULTIPOINT','MULTILINESTRING',
            'MULTIPOLYGON','NATIONAL CHARACTER','NATIONAL CHARACTER VARYING',
            'NATIONAL CHAR VARYING','NATIONAL VARCHAR','NCHAR VARCHAR','NCHAR',
            'NUMERIC','POINT','POLYGON','REAL','SERIAL',
            'SMALLINT','TEXT','TIMESTAMP','TINYBLOB','TINYINT',
            'TINYTEXT','VARBINARY','VARCHARACTER','VARCHAR',
            ),
        5 => array(     //No ( must follow
            // Column data types distinguished from functions by the same name
            "CHAR", "DATE", "TIME"
            ),
        6 => array(
            // Table, Column & Index Attributes
            'AUTO_INCREMENT','AVG_ROW_LENGTH','BOTH','CHECKSUM','CONNECTION',
            'DATA DIRECTORY','DEFAULT NULL','DELAY_KEY_WRITE','FULLTEXT',
            'INDEX DIRECTORY','INSERT_METHOD','LEADING','MAX_ROWS','MIN_ROWS',
            'NOT NULL','PACK_KEYS','ROW_FORMAT','SERIAL DEFAULT VALUE','SIGNED',
            'SPATIAL','TRAILING','UNIQUE','UNSIGNED','ZEROFILL'
            ),
        7 => array(     //No ( must follow
            // Column attribute distinguished from function by the same name
            "CHARSET"
            ),
        8 => array(
            // Date and Time Unit Specifiers
            'DAY_HOUR','DAY_MICROSECOND','DAY_MINUTE','DAY_SECOND',
            'HOUR_MICROSECOND','HOUR_MINUTE','HOUR_SECOND',
            'MINUTE_MICROSECOND','MINUTE_SECOND',
            'SECOND_MICROSECOND','YEAR_MONTH'
            ),
        9 => array(     //No ( must follow
            // Date-time unit specifiers distinguished from functions by the same name
            "DAY", "HOUR", "MICROSECOND", "MINUTE", "MONTH", "QUARTER", "SECOND", "WEEK", "YEAR"
            ),
        10 => array(
            // Operators (see also Symbols)
            'AND','BETWEEN','CHARACTER SET','COLLATE','DIV','IS NOT NULL',
            'IS NOT','IS NULL','IS','LIKE','NOT','OFFSET','OR','REGEXP','RLIKE',
            'SOUNDS LIKE','XOR'
            ),
        11 => array(     //No ( must follow
            // Operator distinghuished from function by the same name
            "INTERVAL"
            ),
        12 => array(
            // Control Flow (functions)
            'CASE','ELSE','END','IFNULL','IF','NULLIF','THEN','WHEN',
            ),
        13 => array(
            // String Functions
            'ASCII','BIN','BIT_LENGTH','CHAR_LENGTH','CHARACTER_LENGTH',
            'CONCAT_WS','CONCAT','ELT','EXPORT_SET','FIELD',
            'FIND_IN_SET','FORMAT','HEX','INSTR','LCASE','LEFT','LENGTH',
            'LOAD_FILE','LOCATE','LOWER','LPAD','LTRIM','MAKE_SET','MID',
            'OCTET_LENGTH','ORD','POSITION','QUOTE','REPEAT','REVERSE',
            'RIGHT','RPAD','RTRIM','SOUNDEX','SPACE','STRCMP','SUBSTRING_INDEX',
            'SUBSTRING','TRIM','UCASE','UNHEX','UPPER',
            ),
        14 => array(     //A ( must follow
            // String functions distinguished from other keywords by the same name
            "INSERT", "REPLACE", "CHAR"
            ),
        15 => array(
            // Numeric Functions
            'ABS','ACOS','ASIN','ATAN2','ATAN','CEILING','CEIL',
            'CONV','COS','COT','CRC32','DEGREES','EXP','FLOOR','LN','LOG10',
            'LOG2','LOG','MOD','OCT','PI','POWER','POW','RADIANS','RAND',
            'ROUND','SIGN','SIN','SQRT','TAN',
            ),
        16 => array(     //A ( must follow
            // Numeric function distinguished from other keyword by the same name
            "TRUNCATE"
            ),
        17 => array(
            // Date and Time Functions
            'ADDDATE','ADDTIME','CONVERT_TZ','CURDATE','CURRENT_DATE',
            'CURRENT_TIME','CURRENT_TIMESTAMP','CURTIME','DATE_ADD',
            'DATE_FORMAT','DATE_SUB','DATEDIFF','DAYNAME','DAYOFMONTH',
            'DAYOFWEEK','DAYOFYEAR','EXTRACT','FROM_DAYS','FROM_UNIXTIME',
            'GET_FORMAT','LAST_DAY','LOCALTIME','LOCALTIMESTAMP','MAKEDATE',
            'MAKETIME','MONTHNAME','NOW','PERIOD_ADD',
            'PERIOD_DIFF','SEC_TO_TIME','STR_TO_DATE','SUBDATE','SUBTIME',
            'SYSDATE','TIME_FORMAT','TIME_TO_SEC',
            'TIMESTAMPADD','TIMESTAMPDIFF','TO_DAYS',
            'UNIX_TIMESTAMP','UTC_DATE','UTC_TIME','UTC_TIMESTAMP','WEEKDAY',
            'WEEKOFYEAR','YEARWEEK',
            ),
        18 => array(     //A ( must follow
            // Date-time functions distinguished from other keywords by the same name
            "DATE", "DAY", "HOUR", "MICROSECOND", "MINUTE", "MONTH", "QUARTER",
            "SECOND", "TIME", "WEEK", "YEAR"
            ),
        19 => array(
            // Comparison Functions
            'COALESCE','GREATEST','ISNULL','LEAST',
            ),
        20 => array(     //A ( must follow
            // Comparison functions distinguished from other keywords by the same name
            "IN", "INTERVAL"
            ),
        21 => array(
            // Encryption and Compression Functions
            'AES_DECRYPT','AES_ENCRYPT','COMPRESS','DECODE','DES_DECRYPT',
            'DES_ENCRYPT','ENCODE','ENCRYPT','MD5','OLD_PASSWORD','PASSWORD',
            'SHA1','SHA','UNCOMPRESS','UNCOMPRESSED_LENGTH',
            ),
        22 => array(
            // GROUP BY (aggregate) Functions
            'AVG','BIT_AND','BIT_OR','BIT_XOR','COUNT','GROUP_CONCAT',
            'MAX','MIN','STDDEV_POP','STDDEV_SAMP','STDDEV','STD','SUM',
            'VAR_POP','VAR_SAMP','VARIANCE',
            ),
        23 => array(
            // Information Functions
            'BENCHMARK','COERCIBILITY','COLLATION','CONNECTION_ID',
            'FOUND_ROWS','LAST_INSERT_ID','ROW_COUNT',
            'SESSION_USER','SYSTEM_USER','USER','VERSION',
            ),
        24 => array(     //A ( must follow
            // Information functions distinguished from other keywords by the same name
            "CURRENT_USER", "DATABASE", "SCHEMA", "CHARSET"
            ),
        25 => array(
            // Miscellaneous Functions
            'ExtractValue','BIT_COUNT','GET_LOCK','INET_ATON','INET_NTOA',
            'IS_FREE_LOCK','IS_USED_LOCK','MASTER_POS_WAIT','NAME_CONST',
            'RELEASE_LOCK','SLEEP','UpdateXML','UUID',
            ),
        26 => array(     //A ( must follow
            // Miscellaneous function distinguished from other keyword by the same name
            "DEFAULT"
            ),
        27 => array(
            // Geometry Functions
            'Area','AsBinary','AsText','AsWKB','AsWKT','Boundary','Buffer',
            'Centroid','Contains','ConvexHull','Crosses',
            'Difference','Dimension','Disjoint','Distance',
            'EndPoint','Envelope','Equals','ExteriorRing',
            'GLength','GeomCollFromText','GeomCollFromWKB','GeomFromText',
            'GeomFromWKB','GeometryCollectionFromText',
            'GeometryCollectionFromWKB','GeometryFromText','GeometryFromWKB',
            'GeometryN','GeometryType',
            'InteriorRingN','Intersection','Intersects','IsClosed','IsEmpty',
            'IsRing','IsSimple',
            'LineFromText','LineFromWKB','LineStringFromText',
            'LineStringFromWKB',
            'MBRContains','MBRDisjoint','MBREqual','MBRIntersects',
            'MBROverlaps','MBRTouches','MBRWithin','MLineFromText',
            'MLineFromWKB','MPointFromText','MPointFromWKB','MPolyFromText',
            'MPolyFromWKB','MultiLineStringFromText','MultiLineStringFromWKB',
            'MultiPointFromText','MultiPointFromWKB','MultiPolygonFromText',
            'MultiPolygonFromWKB',
            'NumGeometries','NumInteriorRings','NumPoints',
            'Overlaps',
            'PointFromText','PointFromWKB','PointN','PointOnSurface',
            'PolyFromText','PolyFromWKB','PolygonFromText','PolygonFromWKB',
            'Related','SRID','StartPoint','SymDifference',
            'Touches',
            'Union',
            'Within',
            'X',
            'Y',
            ),
        ),
    'SYMBOLS' => array(
        1 => array(
            /* Operators */
            '=', ':=',                                      // assignment operators
            '||', '&&', '!',                                // locical operators
            '=', '<=>', '>=', '>', '<=', '<', '<>', '!=',   // comparison operators
            '|', '&', '^', '~', '<<', '>>',                 // bitwise operators
            '-', '+', '*', '/', '%',                        // numerical operators
            ),
        2 => array(
            /* Other syntactical symbols */
            '(', ')',
            ',', ';',
            ),
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        7 => false,
        8 => false,
        9 => false,
        10 => false,
        11 => false,
        12 => false,
        13 => false,
        13 => false,
        14 => false,
        15 => false,
        16 => false,
        17 => false,
        18 => false,
        19 => false,
        20 => false,
        21 => false,
        22 => false,
        23 => false,
        24 => false,
        25 => false,
        26 => false,
        27 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #990099; font-weight: bold;',      // mix
            2 => 'color: #990099; font-weight: bold;',      // mix
            3 => 'color: #9900FF; font-weight: bold;',      // constants
            4 => 'color: #999900; font-weight: bold;',      // column data types
            5 => 'color: #999900; font-weight: bold;',      // column data types
            6 => 'color: #FF9900; font-weight: bold;',      // attributes
            7 => 'color: #FF9900; font-weight: bold;',      // attributes
            8 => 'color: #9900FF; font-weight: bold;',      // date-time units
            9 => 'color: #9900FF; font-weight: bold;',      // date-time units

            10 => 'color: #CC0099; font-weight: bold;',      // operators
            11 => 'color: #CC0099; font-weight: bold;',      // operators

            12 => 'color: #009900;',     // control flow (functions)
            13 => 'color: #000099;',     // string functions
            14 => 'color: #000099;',     // string functions
            15 => 'color: #000099;',     // numeric functions
            16 => 'color: #000099;',     // numeric functions
            17 => 'color: #000099;',     // date-time functions
            18 => 'color: #000099;',     // date-time functions
            19 => 'color: #000099;',     // comparison functions
            20 => 'color: #000099;',     // comparison functions
            21 => 'color: #000099;',     // encryption functions
            22 => 'color: #000099;',     // aggregate functions
            23 => 'color: #000099;',     // information functions
            24 => 'color: #000099;',     // information functions
            25 => 'color: #000099;',     // miscellaneous functions
            26 => 'color: #000099;',     // miscellaneous functions
            27 => 'color: #00CC00;',     // geometry functions
            ),
        'COMMENTS' => array(
            'MULTI' => 'color: #808000; font-style: italic;',
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #004000; font-weight: bold;',
            1 => 'color: #008080; font-weight: bold;'       // search wildcards
            ),
        'BRACKETS' => array(
            0 => 'color: #FF00FF;'
            ),
        'STRINGS' => array(
            0 => 'color: #008000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #008080;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            1 => 'color: #CC0099;',         // operators
            2 => 'color: #000033;',         // syntax
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => 'http://search.oracle.com/search/search?group=MySQL&amp;q={FNAME}',
        2 => 'http://search.oracle.com/search/search?group=MySQL&amp;q={FNAME}',
        3 => 'http://search.oracle.com/search/search?group=MySQL&amp;q={FNAME}',
        4 => 'http://search.oracle.com/search/search?group=MySQL&amp;q={FNAME}',
        5 => 'http://search.oracle.com/search/search?group=MySQL&amp;q={FNAME}',
        6 => 'http://search.oracle.com/search/search?group=MySQL&amp;q={FNAME}',
        7 => 'http://search.oracle.com/search/search?group=MySQL&amp;q={FNAME}',
        8 => 'http://search.oracle.com/search/search?group=MySQL&amp;q={FNAME}',
        9 => 'http://search.oracle.com/search/search?group=MySQL&amp;q={FNAME}',

        10 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/non-typed-operators.html',
        11 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/non-typed-operators.html',

        12 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/control-flow-functions.html',
        13 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/string-functions.html',
        14 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/string-functions.html',
        15 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/numeric-functions.html',
        16 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/numeric-functions.html',
        17 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/date-and-time-functions.html',
        18 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/date-and-time-functions.html',
        19 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/comparison-operators.html',
        20 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/comparison-operators.html',
        21 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/encryption-functions.html',
        22 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/group-by-functions-and-modifiers.html',
        23 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/information-functions.html',
        24 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/information-functions.html',
        25 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/func-op-summary-ref.html',
        26 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/func-op-summary-ref.html',
        27 => 'http://dev.mysql.com/doc/refman/%35%2E%31/en/analysing-spatial-information.html',
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
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            2 => array(
                'DISALLOWED_AFTER' => '(?![\(\w])'
                ),
            5 => array(
                'DISALLOWED_AFTER' => '(?![\(\w])'
                ),
            7 => array(
                'DISALLOWED_AFTER' => '(?![\(\w])'
                ),
            9 => array(
                'DISALLOWED_AFTER' => '(?![\(\w])'
                ),
            11 => array(
                'DISALLOWED_AFTER' => '(?![\(\w])'
                ),

            14 => array(
                'DISALLOWED_AFTER' => '(?=\()'
                ),
            16 => array(
                'DISALLOWED_AFTER' => '(?=\()'
                ),
            18 => array(
                'DISALLOWED_AFTER' => '(?=\()'
                ),
            20 => array(
                'DISALLOWED_AFTER' => '(?=\()'
                ),
            24 => array(
                'DISALLOWED_AFTER' => '(?=\()'
                ),
            26 => array(
                'DISALLOWED_AFTER' => '(?=\()'
                )
            )
        )
);

?>