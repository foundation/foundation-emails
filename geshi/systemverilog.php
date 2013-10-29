<?php
/************************************************************************************
 * systemverilog.php
 * -------
 * Author: Sean O'Boyle
 * Copyright: (C) 2008 IntelligentDV
 * Release Version: 1.0.8.11
 * Date Started: 2008/06/25
 *
 * SystemVerilog IEEE 1800-2009(draft8) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/06/25 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2008/06/25)
 * -------------------------
 *
 *************************************************************************************
 *
 *   This file is part of GeSHi.
 *
 *  GeSHi is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 ************************************************************************
 * Title:        SystemVerilog Language Keywords File for GeSHi
 * Description:  This file contains the SV keywords defined in the
 *               IEEE1800-2009 Draft Standard in the format expected by
 *               GeSHi.
 *
 * Original Author: Sean O'Boyle
 * Contact:         seanoboyle@intelligentdv.com
 * Company:         Intelligent Design Verification
 * Company URL:     http://intelligentdv.com
 *
 * Download the most recent version here:
 *                  http://intelligentdv.com/downloads
 *
 * File Bugs Here:  http://bugs.intelligentdv.com
 *        Project:  SyntaxFiles
 *
 * File: systemverilog.php
 * $LastChangedBy: benbe $
 * $LastChangedDate: 2012-08-18 01:56:20 +0200 (Sa, 18. Aug 2012) $
 * $LastChangedRevision: 2542 $
 *
 ************************************************************************/

$language_data = array (
    'LANG_NAME' => 'SystemVerilog',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(1 => '/\/\/(?:\\\\\\\\|\\\\\\n|.)*$/m'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        // system tasks
        1 => array(
            'acos','acosh','asin','asinh','assertfailoff','assertfailon',
            'assertkill','assertnonvacuouson','assertoff','asserton',
            'assertpassoff','assertpasson','assertvacuousoff','async$and$array',
            'async$and$plane','async$nand$array','async$nand$plane',
            'async$nor$array','async$nor$plane','async$or$array',
            'async$or$plane','atan','atan2','atanh','bits','bitstoreal',
            'bitstoshortreal','cast','ceil','changed','changed_gclk',
            'changing_gclk','clog2','cos','cosh','countones','coverage_control',
            'coverage_get','coverage_get_max','coverage_merge','coverage_save',
            'dimensions','display','displayb','displayh','displayo',
            'dist_chi_square','dist_erlang','dist_exponential','dist_normal',
            'dist_poisson','dist_t','dist_uniform','dumpall','dumpfile',
            'dumpflush','dumplimit','dumpoff','dumpon','dumpports',
            'dumpportsall','dumpportsflush','dumpportslimit','dumpportsoff',
            'dumpportson','dumpvars','error','exit','exp','falling_gclk',
            'fclose','fdisplay','fdisplayb','fdisplayh','fdisplayo','fell',
            'fell_gclk','feof','ferror','fflush','fgetc','fgets','finish',
            'floor','fmonitor','fmonitorb','fmonitorh','fmonitoro','fopen',
            'fread','fscanf','fseek','fstrobe','fstrobeb','fstrobeh','fstrobeo',
            'ftell','future_gclk','fwrite','fwriteb','fwriteh','fwriteo',
            'get_coverage','high','hypot','increment','info','isunbounded',
            'isunknown','itor','left','ln','load_coverage_db','log10','low',
            'monitor','monitorb','monitorh','monitoro','monitoroff','monitoron',
            'onehot','onehot0','past','past_gclk','pow','printtimescale',
            'q_add','q_exam','q_full','q_initialize','q_remove','random',
            'readmemb','readmemh','realtime','realtobits','rewind','right',
            'rising_gclk','rose','rose_gclk','rtoi','sampled',
            'set_coverage_db_name','sformat','sformatf','shortrealtobits',
            'signed','sin','sinh','size','sqrt','sscanf','stable','stable_gclk',
            'steady_gclk','stime','stop','strobe','strobeb','strobeh','strobeo',
            'swrite','swriteb','swriteh','swriteo','sync$and$array',
            'sync$and$plane','sync$nand$array','sync$nand$plane',
            'sync$nor$array','sync$nor$plane','sync$or$array','sync$or$plane',
            'system','tan','tanh','test$plusargs','time','timeformat',
            'typename','ungetc','unpacked_dimensions','unsigned',
            'value$plusargs','warning','write','writeb','writeh','writememb',
            'writememh','writeo',
            ),
        // compiler directives
        2 => array(
            '`__FILE__', '`__LINE__', '`begin_keywords', '`case', '`celldefine',
            '`endcelldefine', '`default_nettype', '`define', '`default', '`else',
            '`elsif', '`end_keywords', '`endfor', '`endif',
            '`endprotect', '`endswitch', '`endwhile', '`for', '`format',
            '`if', '`ifdef', '`ifndef', '`include', '`let',
            '`line', '`nounconnected_drive', '`pragma', '`protect', '`resetall',
            '`switch', '`timescale', '`unconnected_drive', '`undef', '`undefineall',
            '`while'
            ),
        // keywords
        3 => array(
            'assert', 'assume', 'cover', 'expect', 'disable',
            'iff', 'binsof', 'intersect', 'first_match', 'throughout',
            'within', 'coverpoint', 'cross', 'wildcard', 'bins',
            'ignore_bins', 'illegal_bins', 'genvar', 'if', 'else',
            'unique', 'priority', 'matches', 'default', 'forever',
            'repeat', 'while', 'for', 'do', 'foreach',
            'break', 'continue', 'return', 'pulsestyle_onevent', 'pulsestyle_ondetect',
            'noshowcancelled', 'showcancelled', 'ifnone', 'posedge', 'negedge',
            'edge', 'wait', 'wait_order', 'timeunit', 'timeprecision',
            's', 'ms', 'us', 'ns',
            'ps', 'fs', 'step', 'new', 'extends',
            'this', 'super', 'protected', 'local', 'rand',
            'randc', 'bind', 'constraint', 'solve', 'before',
            'dist', 'inside', 'with', 'virtual', 'extern',
            'pure', 'forkjoin', 'design', 'instance', 'cell',
            'liblist', 'use', 'library', 'incdir', 'include',
            'modport', 'sync_accept_on', 'reject_on', 'accept_on',
            'sync_reject_on', 'restrict', 'let', 'until', 'until_with',
            'unique0', 'eventually', 's_until', 's_always', 's_eventually',
            's_nexttime', 's_until_with', 'global', 'untyped', 'implies',
            'weak', 'strong', 'nexttime'
            ),
        // block keywords
        4 => array(
            'begin', 'end', 'package', 'endpackage', 'macromodule',
            'module', 'endmodule', 'generate', 'endgenerate', 'program',
            'endprogram', 'class', 'endclass', 'function', 'endfunction',
            'case', 'casex', 'casez', 'randcase', 'endcase',
            'interface', 'endinterface', 'clocking', 'endclocking', 'task',
            'endtask', 'primitive', 'endprimitive', 'fork', 'join',
            'join_any', 'join_none', 'covergroup', 'endgroup', 'checker',
            'endchecker', 'property', 'endproperty', 'randsequence', 'sequence',
            'endsequence', 'specify', 'endspecify', 'config', 'endconfig',
            'table', 'endtable', 'initial', 'final', 'always',
            'always_comb', 'always_ff', 'always_latch', 'alias', 'assign',
            'force', 'release'
            ),

        // types
        5 => array(
            'parameter', 'localparam', 'specparam', 'input', 'output',
            'inout', 'ref', 'byte', 'shortint', 'int',
            'integer', 'longint', 'time', 'bit', 'logic',
            'reg', 'supply0', 'supply1', 'tri', 'triand',
            'trior', 'trireg', 'tri0', 'tri1', 'wire',
            'uwire', 'wand', 'wor', 'signed', 'unsigned',
            'shortreal', 'real', 'realtime', 'type', 'void',
            'struct', 'union', 'tagged', 'const', 'var',
            'automatic', 'static', 'packed', 'vectored', 'scalared',
            'typedef', 'enum', 'string', 'chandle', 'event',
            'null', 'pullup', 'pulldown', 'cmos', 'rcmos',
            'nmos', 'pmos', 'rnmos', 'rpmos', 'and',
            'nand', 'or', 'nor', 'xor', 'xnor',
            'not', 'buf', 'tran', 'rtran', 'tranif0',
            'tranif1', 'rtranif0', 'rtranif1', 'bufif0', 'bufif1',
            'notif0', 'notif1', 'strong0', 'strong1', 'pull0',
            'pull1', 'weak0', 'weak1', 'highz0', 'highz1',
            'small', 'medium', 'large'
            ),

        // DPI
        6 => array(
            'DPI', 'DPI-C', 'import', 'export', 'context'
            ),

        // stdlib
        7 => array(
            'randomize', 'mailbox', 'semaphore', 'put', 'get',
            'try_put', 'try_get', 'peek', 'try_peek', 'process',
            'state', 'self', 'status', 'kill', 'await',
            'suspend', 'resume', 'size', 'delete', 'insert',
            'num', 'first', 'last', 'next', 'prev',
            'pop_front', 'pop_back', 'push_front', 'push_back', 'find',
            'find_index', 'find_first', 'find_last', 'find_last_index', 'min',
            'max', 'unique_index', 'reverse', 'sort', 'rsort',
            'shuffle', 'sum', 'product', 'List', 'List_Iterator',
            'neq', 'eq', 'data', 'empty', 'front',
            'back', 'start', 'finish', 'insert_range', 'erase',
            'erase_range', 'set', 'swap', 'clear', 'purge'
            ),

        // key_deprecated
        8 => array(
            'defparam', 'deassign', 'TODO'
        ),

        ),
    'SYMBOLS' => array(
            '(', ')', '{', '}', '[', ']', '=', '+', '-', '*', '/', '!', '%',
            '^', '&', '|', '~',
            '?', ':',
            '#', '<<', '<<<',
            '>', '<', '>=', '<=',
            '@', ';', ','
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true,
        7 => true,
        8 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #996666; font-weight: bold;',
            2 => 'color: #336600; font-weight: bold;',
            3 => 'color: #996600; font-weight: bold;',
            4 => 'color: #000033; font-weight: bold;',
            5 => 'color: #330033; font-weight: bold;',
            6 => 'color: #996600; font-weight: bold;',
            7 => 'color: #CC9900; font-weight: bold;',
            8 => 'color: #990000; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #00008B; font-style: italic;',
            'MULTI' => 'color: #00008B; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #9F79EE'
            ),
        'BRACKETS' => array(
            0 => 'color: #9F79EE;'
            ),
        'STRINGS' => array(
            0 => 'color: #FF00FF;'
            ),
        'NUMBERS' => array(
            0 => 'color: #ff0055;'
            ),
        'METHODS' => array(
            1 => 'color: #202020;',
            2 => 'color: #202020;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #5D478B;'
            ),
        'REGEXPS' => array(
            0 => 'color: #ff0055;',
            1 => 'color: #ff0055;',
            2 => 'color: #ff0055;',
            3 => 'color: #ff0055;'
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
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        1 => ''
        ),
    'REGEXPS' => array(
        // integer
        0 => "\d'[bdh][0-9_a-fA-FxXzZ]+",
        // realtime
        1 => "\d*\.\d+[munpf]?s",
        // time s, ms, us, ns, ps, of fs
        2 => "\d+[munpf]?s",
        // real
        3 => "\d*\.\d+"
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        0 => ''
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true
        ),
    'TAB_WIDTH' => 3,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            1 => array(
                'DISALLOWED_BEFORE' => '(?<=$)'
                )
            )
        )
);

?>