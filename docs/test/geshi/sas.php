<?php
/*************************************************************************************
 * sas.php
 * -------
 * Author: Galen Johnson (solitaryr@gmail.com)
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2005/12/27
 *
 * SAS language file for GeSHi. Based on the sas vim file.
 *
 * CHANGES
 * -------
 * 2008/05/23 (1.0.7.22)
 *   -  Added description of extra language features (SF#1970248)
 *   -  Cleaned up code style
 * 2005/12/27 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2005/12/27)
 * -------------------------
 * * Check highlighting stuff works
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
    'LANG_NAME' => 'SAS',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array('/*' => '*/', '*' => ';'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            '_ALL_','_CHARACTER_','_INFILE_','_N_','_NULL_','_NUMERIC_',
            '_WEBOUT_'
            ),
        2 => array(
            '%BQUOTE','%CMPRES','%COMPSTOR','%DATATYP','%DISPLAY','%DO','%ELSE',
            '%END','%EVAL','%GLOBAL','%GOTO','%IF','%INDEX','%INPUT','%KEYDEF',
            '%LABEL','%LEFT','%LENGTH','%LET','%LOCAL','%LOWCASE','%MACRO',
            '%MEND','%NRBQUOTE','%NRQUOTE','%NRSTR','%PUT','%QCMPRES','%QLEFT',
            '%QLOWCASE','%QSCAN','%QSUBSTR','%QSYSFUNC','%QTRIM','%QUOTE',
            '%QUPCASE','%SCAN','%STR','%SUBSTR','%SUPERQ','%SYSCALL',
            '%SYSEVALF','%SYSEXEC','%SYSFUNC','%SYSGET','%SYSLPUT','%SYSPROD',
            '%SYSRC','%SYSRPUT','%THEN','%TO','%TRIM','%UNQUOTE','%UNTIL',
            '%UPCASE','%VERIFY','%WHILE','%WINDOW'
            ),
        3 => array(
            'ABS','ADDR','AIRY','ARCOS','ARSIN','ATAN','ATTRC','ATTRN','BAND',
            'BETAINV','BLSHIFT','BNOT','BOR','BRSHIFT','BXOR','BYTE','CDF',
            'CEIL','CEXIST','CINV','CLOSE','CNONCT','COLLATE','COMPBL',
            'COMPOUND','COMPRESS','COSH','COS','CSS','CUROBS','CV','DACCDBSL',
            'DACCDB','DACCSL','DACCSYD','DACCTAB','DAIRY','DATETIME','DATEJUL',
            'DATEPART','DATE','DAY','DCLOSE','DEPDBSL','DEPDB','DEPSL','DEPSYD',
            'DEPTAB','DEQUOTE','DHMS','DIF','DIGAMMA','DIM','DINFO','DNUM',
            'DOPEN','DOPTNAME','DOPTNUM','DREAD','DROPNOTE','DSNAME','ERFC',
            'ERF','EXIST','EXP','FAPPEND','FCLOSE','FCOL','FDELETE','FETCHOBS',
            'FETCH','FEXIST','FGET','FILEEXIST','FILENAME','FILEREF','FINFO',
            'FINV','FIPNAMEL','FIPNAME','FIPSTATE','FLOOR','FNONCT','FNOTE',
            'FOPEN','FOPTNAME','FOPTNUM','FPOINT','FPOS','FPUT','FREAD',
            'FREWIND','FRLEN','FSEP','FUZZ','FWRITE','GAMINV','GAMMA',
            'GETOPTION','GETVARC','GETVARN','HBOUND','HMS','HOSTHELP','HOUR',
            'IBESSEL','INDEXW','INDEXC','INDEX','INPUTN','INPUTC','INPUT',
            'INTRR','INTCK','INTNX','INT','IRR','JBESSEL','JULDATE','KURTOSIS',
            'LAG','LBOUND','LEFT','LENGTH','LGAMMA','LIBNAME','LIBREF','LOG10',
            'LOG2','LOGPDF','LOGPMF','LOGSDF','LOG','LOWCASE','MAX','MDY',
            'MEAN','MINUTE','MIN','MOD','MONTH','MOPEN','MORT','NETPV','NMISS',
            'NORMAL','NPV','N','OPEN','ORDINAL','PATHNAME','PDF','PEEKC','PEEK',
            'PMF','POINT','POISSON','POKE','PROBBETA','PROBBNML','PROBCHI',
            'PROBF','PROBGAM','PROBHYPR','PROBIT','PROBNEGB','PROBNORM','PROBT',
            'PUTN','PUTC','PUT','QTR','QUOTE','RANBIN','RANCAU','RANEXP',
            'RANGAM','RANGE','RANK','RANNOR','RANPOI','RANTBL','RANTRI',
            'RANUNI','REPEAT','RESOLVE','REVERSE','REWIND','RIGHT','ROUND',
            'SAVING','SCAN','SDF','SECOND','SIGN','SINH','SIN','SKEWNESS',
            'SOUNDEX','SPEDIS','SQRT','STDERR','STD','STFIPS','STNAME',
            'STNAMEL','SUBSTR','SUM','SYMGET','SYSGET','SYSMSG','SYSPROD',
            'SYSRC','SYSTEM','TANH','TAN','TIMEPART','TIME','TINV','TNONCT',
            'TODAY','TRANSLATE','TRANWRD','TRIGAMMA','TRIMN','TRIM','TRUNC',
            'UNIFORM','UPCASE','USS','VARFMT','VARINFMT','VARLABEL','VARLEN',
            'VARNAME','VARNUM','VARRAYX','VARRAY','VARTYPE','VAR','VERIFY',
            'VFORMATX','VFORMATDX','VFORMATD','VFORMATNX','VFORMATN',
            'VFORMATWX','VFORMATW','VFORMAT','VINARRAYX','VINARRAY',
            'VINFORMATX','VINFORMATDX','VINFORMATD','VINFORMATNX','VINFORMATN',
            'VINFORMATWX','VINFORMATW','VINFORMAT','VLABELX','VLABEL',
            'VLENGTHX','VLENGTH','VNAMEX','VNAME','VTYPEX','VTYPE','WEEKDAY',
            'YEAR','YYQ','ZIPFIPS','ZIPNAME','ZIPNAMEL','ZIPSTATE'
            ),
        4 => array(
            'ABORT','ADD','ALTER','AND','ARRAY','AS','ATTRIB','BY','CALL',
            'CARDS4','CASCADE','CATNAME','CHECK','CONTINUE','CREATE',
            'DATALINES4','DELETE','DESCRIBE','DISPLAY','DISTINCT','DM','DROP',
            'ENDSAS','FILE','FOOTNOTE','FOREIGN','FORMAT','FROM',
            'GOTO','GROUP','HAVING','IN','INFILE','INFORMAT',
            'INSERT','INTO','KEEP','KEY','LABEL','LEAVE',
            'LIKE','LINK','LIST','LOSTCARD','MERGE','MESSAGE','MISSING',
            'MODIFY','MSGTYPE','NOT','NULL','ON','OPTIONS','OR','ORDER',
            'OUTPUT','PAGE','PRIMARY','REDIRECT','REFERENCES','REMOVE',
            'RENAME','REPLACE','RESET','RESTRICT','RETAIN','RETURN','SELECT',
            'SET','SKIP','STARTSAS','STOP','SYSTASK','TABLE','TITLE','UNIQUE',
            'UPDATE','VALIDATE','VIEW','WAITSAS','WHERE','WINDOW','X'
            ),
        5 => array(
            'DO','ELSE','END','IF','THEN','UNTIL','WHILE'
            ),
        6 => array(
            'RUN','QUIT','DATA'
            ),
        7 => array(
            'ERROR'
            ),
        8 => array(
            'WARNING'
            ),
        9 => array(
            'NOTE'
            )
        ),
    'SYMBOLS' => array(
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
        9 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff;',
            2 => 'color: #0000ff;',
            3 => 'color: #0000ff;',
            4 => 'color: #0000ff;',
            5 => 'color: #0000ff;',
            6 => 'color: #000080; font-weight: bold;',
            7 => 'color: #ff0000;',
            8 => 'color: #00ff00;',
            9 => 'color: #0000ff;'
            ),
        'COMMENTS' => array(
//            1 => 'color: #006400; font-style: italic;',
            'MULTI' => 'color: #006400; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #a020f0;'
            ),
        'NUMBERS' => array(
            0 => 'color: #2e8b57; font-weight: bold;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => ''
            ),
        'REGEXPS' => array(
            0 => 'color: #0000ff; font-weight: bold;',
            1 => 'color: #000080; font-weight: bold;',
            2 => 'color: #006400; font-style: italic;',
            3 => 'color: #006400; font-style: italic;',
            4 => 'color: #006400; font-style: italic;',
            5 => 'color: #ff0000; font-weight: bold;',
            6 => 'color: #00ff00; font-style: italic;',
            7 => 'color: #0000ff; font-style: normal;',
            8 => 'color: #b218b2; font-weight: bold;',
            9 => 'color: #b218b2; font-weight: bold;'
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => '',
        9 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        0 => "&amp;[a-zA-Z_][a-zA-Z0-9_]*",
        1 => array(//Procedures
            GESHI_SEARCH => '(^\\s*)(PROC \\w+)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'im',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        2 => array(
            GESHI_SEARCH => '(^\\s*)(\\*.*;)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'im',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        3 => array(
            GESHI_SEARCH => '(.*;\\s*)(\\*.*;)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'im',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        4 => array(
            GESHI_SEARCH => '(^\\s*)(%\\*.*;)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'im',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        5 => array(//Error messages
            GESHI_SEARCH => '(^ERROR.*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'im',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        6 => array(//Warning messages
            GESHI_SEARCH => '(^WARNING.*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'im',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        7 => array(//Notice messages
            GESHI_SEARCH => '(^NOTE.*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => 'im',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        8 => array(
            GESHI_SEARCH => '(^\\s*)(CARDS.*)(^\\s*;\\s*$)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'sim',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            ),
        9 => array(
            GESHI_SEARCH => '(^\\s*)(DATALINES.*)(^\\s*;\\s*$)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'sim',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>