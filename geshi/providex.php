<?php
/******************************************************************************
 * providex.php
 * ----------
 * Author: Jeff Wilder (jeff@coastallogix.com)
 * Copyright:  (c) 2008 Coastal Logix (http://www.coastallogix.com)
 * Release Version: 1.0.8.11
 * Date Started: 2008/10/18
 *
 * ProvideX language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/10/21 (1.0.0)
 *  - First Release
 *
 * TODO
 * -------------------------
 * 1. Create a regexp for numeric global variables (ex: %VarName = 3)
 * 2. Add standard object control properties
 *
 ******************************************************************************
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
 *****************************************************************************/
$language_data = array (
    'LANG_NAME' => 'ProvideX',
    'COMMENT_SINGLE' => array(1 => '!'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        // Single-Line Comments using REM command
        2 => "/\bREM\b.*?$/i"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            // Directives
            '*break', '*continue', '*end', '*escape', '*next', '*proceed',
            '*retry', '*return', '*same', 'accept', 'add index', 'addr',
            'auto', 'begin', 'break', 'button', 'bye', 'call', 'case',
            'chart', 'check_box', 'class', 'clear', 'clip_board', 'close',
            'continue', 'control', 'create required', 'create table',
            'cwdir', 'data', 'day_format', 'def', 'default', 'defctl',
            'defprt', 'deftty', 'delete required', 'dictionary', 'dim', 'direct',
            'directory', 'disable', 'drop', 'drop_box', 'dump', 'edit',
            'else', 'enable', 'end switch', 'end', 'end_if', 'endtrace',
            'enter', 'erase', 'error_handler', 'escape', 'event', 'execute',
            'exit', 'exitto', 'extract', 'file', 'find', 'floating point',
            'for', 'function', 'get_file_box', 'gosub', 'goto', 'grid',
            'h_scrollbar', 'hide', 'if', 'index', 'indexed', 'input',
            'insert', 'invoke', 'iolist', 'keyed', 'let', 'like',
            'line_switch', 'list', 'list_box', 'load', 'local', 'lock',
            'long_form', 'menu_bar', 'merge', 'message_lib', 'mnemonic',
            'msgbox', 'multi_line', 'multi_media', 'next', 'object', 'obtain',
            'on', 'open', 'password', 'perform', 'pop', 'popup_menu',
            'precision', 'prefix', 'preinput', 'print', 'process', 'program',
            'property', 'purge', 'quit', 'radio_button', 'randomize',
            'read', 'record', 'redim', 'refile', 'release', 'rem', 'remove',
            'rename', 'renumber', 'repeat', 'reset', 'restore', 'retry',
            'return', 'round', 'run', 'save', 'select', 'serial', 'server',
            'set_focus', 'set_nbf', 'set_param', 'setctl', 'setday', 'setdev',
            'setdrive', 'seterr', 'setesc', 'setfid', 'setmouse', 'settime',
            'settrace', 'short_form', 'show', 'sort', 'start', 'static',
            'step', 'stop', 'switch', 'system_help', 'system_jrnl', 'table',
            'then', 'to', 'translate', 'tristate_box', 'unlock', 'until',
            'update', 'user_lex', 'v_scrollbar', 'vardrop_box', 'varlist_box',
            'via', 'video_palette', 'wait', 'wend', 'while', 'winprt_setup',
            'with', 'write'
            ),
        2 => array(
            // System Functions
            '@x', '@y', 'abs', 'acs', 'and', 'arg', 'asc', 'asn', 'ath',
            'atn', 'bin', 'bsz', 'chg', 'chr', 'cmp', 'cos', 'cpl',
            'crc', 'cse', 'ctl', 'cvs', 'dec', 'dir', 'dll', 'dsk',
            'dte', 'env', 'ept', 'err', 'evn', 'evs', 'exp', 'ffn',
            'fib', 'fid', 'fin', 'fpt', 'gap', 'gbl', 'gep', 'hsa',
            'hsh', 'hta', 'hwn', 'i3e', 'ind', 'int', 'iol', 'ior',
            'jul', 'jst', 'kec', 'kef', 'kel', 'ken', 'kep', 'key',
            'kgn', 'lcs', 'len', 'lno', 'log', 'lrc', 'lst', 'max',
            'mem', 'mid', 'min', 'mnm', 'mod', 'msg', 'msk', 'mxc',
            'mxl', 'new', 'not', 'nul', 'num', 'obj', 'opt', 'pad',
            'pck', 'pfx', 'pgm', 'pos', 'prc', 'prm', 'pth', 'pub',
            'rcd', 'rdx', 'rec', 'ref', 'rnd', 'rno', 'sep', 'sgn',
            'sin', 'sqr', 'srt', 'ssz', 'stk', 'stp', 'str', 'sub',
            'swp', 'sys', 'tan', 'tbl', 'tcb', 'tmr', 'trx', 'tsk',
            'txh', 'txw', 'ucp', 'ucs', 'upk', 'vin', 'vis', 'xeq',
            'xfa', 'xor', '_obj'
            ),
        3 => array(
            // System Variables
            // Vars that are duplicates of functions
            // 'ctl', 'err', 'pfx', 'prm', 'rnd', 'sep', 'sys',
            'bkg', 'chn', 'day', 'dlm', 'dsz', 'eom', 'ers', 'esc',
            'gfn', 'gid', 'hfn', 'hlp', 'hwd', 'lfa', 'lfo', 'lip',
            'lpg', 'lwd', 'mse', 'msl', 'nar', 'nid', 'pgn', 'psz',
            'quo', 'ret', 'sid', 'ssn', 'tim', 'tme', 'tms', 'tsm',
            'uid', 'unt', 'who'

            ),
        4 => array(
            // Nomads Variables
            '%Flmaint_Lib$', '%Flmaint_Msg$', '%Nomads_Activation_Ok',
            '%Nomads_Auto_Qry', '%Nomads_Disable_Debug',
            '%Nomads_Disable_Trace', '%Nomads_Fkey_Handler$',
            '%Nomads_Fkey_Tbl$', '%Nomads_Notest', '%Nomads_Onexit$',
            '%Nomads_Post_Display', '%Nomads_Pre_Display$',
            '%Nomads_Process$', '%Nomads_Trace_File$',
            '%Nomad_Actv_Folder_Colors$', '%Nomad_Automation_Enabled',
            '%Nomad_Auto_Close', '%Nomad_Center_Wdw', '%Nomad_Concurrent_Wdw',
            '%Nomad_Custom_Define', '%Nomad_Custom_Dir$',
            '%Nomad_Custom_Genmtc', '%Nomad_Custom_Skip_Definition',
            '%Nomad_Def_Sfx$', '%Nomad_Enter_Tab', '%Nomad_Esc_Sel',
            '%Nomad_Isjavx', '%Nomad_Iswindx', '%Nomad_Iswindx$',
            '%Nomad_Menu$', '%Nomad_Menu_Leftedge_Clr$',
            '%Nomad_Menu_Textbackground_Clr$', '%Nomad_Mln_Sep$',
            '%Nomad_Msgmnt$', '%Nomad_Noplusw', '%Nomad_No_Customize',
            '%Nomad_Object_Persistence', '%Nomad_Object_Resize',
            '%Nomad_Open_Load', '%Nomad_Override_Font$',
            '%Nomad_Palette_Loaded', '%Nomad_Panel_Info_Force',
            '%Nomad_Panel_Info_Prog$', '%Nomad_Pnl_Def_Colour$',
            '%Nomad_Pnl_Def_Font$', '%Nomad_Prg_Cache', '%Nomad_Qry_Attr$',
            '%Nomad_Qry_Btn$', '%Nomad_Qry_Clear_Start', '%Nomad_Qry_Tip$',
            '%Nomad_Qry_Wide', '%Nomad_Query_Clear_Status', '%Nomad_Query_Kno',
            '%Nomad_Query_No_Gray', '%Nomad_Query_Odb_Ignore',
            '%Nomad_Query_Retkno', '%Nomad_Query_Sbar_Max',
            '%Nomad_Relative_Wdw', '%Nomad_Save_Qry_Path', '%Nomad_Script_Fn',
            '%Nomad_Script_Log', '%Nomad_Script_Wdw',
            '%Nomad_Skip_Change_Logic', '%Nomad_Skip_Onselect_Logic',
            '%Nomad_Stk$', '%Nomad_Tab_Dir', '%Nomad_Timeout',
            '%Nomad_Turbo_Off', '%Nomad_Visual_Effect',
            '%Nomad_Visual_Override', '%Nomad_Win_Ver', '%Nomad_Xchar',
            '%Nomad_Xmax', '%Nomad_Ychar', '%Nomad_Ymax', '%Scr_Def_Attr$',
            '%Scr_Def_H_Fl$', '%Scr_Def_H_Id$', '%Scr_Lib', '%Scr_Lib$',
            '%Z__Usr_Sec$', 'Alternate_Panel$', 'Alternate_Panel_Type$',
            'Arg_1$', 'Arg_10$', 'Arg_11$', 'Arg_12$', 'Arg_13$', 'Arg_14$',
            'Arg_15$', 'Arg_16$', 'Arg_17$', 'Arg_18$', 'Arg_19$', 'Arg_2$',
            'Arg_20$', 'Arg_3$', 'Arg_4$', 'Arg_5$', 'Arg_6$', 'Arg_7$',
            'Arg_8$', 'Arg_9$', 'Change_Flg', 'Cmd_Str$', 'Default_Prog$',
            'Disp_Cmd$', 'Entire_Record$', 'Exit_Cmd$', 'Fldr_Default_Prog$',
            'Folder_Id$', 'Id', 'Id$', 'Ignore_Exit', 'Initialize_Flg',
            'Init_Text$', 'Init_Val$', 'Main_Scrn_K$', 'Mnu_Ln$',
            'Next_Folder', 'Next_Id', 'Next_Id$', 'No_Flush', 'Prime_Key$',
            'Prior_Val', 'Prior_Val$', 'Qry_Val$', 'Refresh_Flg',
            'Replacement_Folder$', 'Replacement_Lib$', 'Replacement_Scrn$',
            'Scrn_Id$', 'Scrn_K$', 'Scrn_Lib$', 'Tab_Table$', '_Eom$'
            ),
        5 => array(
            // Mnemonics
            "'!w'", "'*c'", "'*h'", "'*i'", "'*o'", "'*r'", "'*x'",
            "'+b'", "'+d'", "'+e'", "'+f'", "'+i'", "'+n'",
            "'+p'", "'+s'", "'+t'", "'+u'", "'+v'", "'+w'", "'+x'",
            "'+z'", "'-b'", "'-d'", "'-e'", "'-f'", "'-i'",
            "'-n'", "'-p'", "'-s'", "'-t'", "'-u'", "'-v'", "'-w'",
            "'-x'", "'-z'", "'2d'", "'3d'", "'4d'", "'@@'", "'ab'",
            "'arc'", "'at'", "'backgr'", "'bb'", "'be'", "'beep'",
            "'bg'", "'bi'", "'bj'", "'bk'", "'black'", "'blue'",
            "'bm'", "'bo'", "'box'", "'br'", "'bs'", "'bt'", "'bu'",
            "'bw'", "'bx'", "'caption'", "'ce'", "'cf'", "'ch'",
            "'ci'", "'circle'", "'cl'", "'colour'", "'cp'", "'cpi'",
            "'cr'", "'cs'", "'cursor'", "'cyan''_cyan'", "'dc'",
            "'default'", "'df'", "'dialogue'", "'dn'", "'do'",
            "'drop'", "'eb'", "'ee'", "'ef'", "'eg'", "'ei'", "'ej'",
            "'el'", "'em'", "'eo'", "'ep'", "'er'", "'es'", "'et'",
            "'eu'", "'ew'", "'ff'", "'fill'", "'fl'", "'font'",
            "'frame'", "'gd'", "'ge'", "'gf'", "'goto'", "'green'",
            "'gs'", "'hide'", "'ic'", "'image'", "'jc'",
            "'jd'", "'jl'", "'jn'", "'jr'", "'js'", "'l6'", "'l8'",
            "'lc'", "'ld'", "'lf'", "'li'", "'line'", "'lm'",
            "'lpi'", "'lt'", "'magenta'", "'maxsize'", "'me'",
            "'message'", "'minsize'", "'mn'", "'mode'",
            "'move'", "'mp'", "'ms'", "'ni'", "'offset'", "'option'",
            "'pe'", "'pen'", "'picture'", "'pie'", "'pm'", "'polygon'",
            "'pop'", "'ps'", "'push'", "'rb'", "'rc'", "'rectangle'",
            "'red'", "'rl'", "'rm'", "'rp'", "'rs'", "'rt'", "'sb'",
            "'scroll'", "'sd'", "'se'", "'sf'", "'show'", "'size'",
            "'sl'", "'sn'", "'sp'", "'sr'", "'swap'", "'sx'", "'text'",
            "'textwdw'", "'tr'", "'tw'", "'uc'", "'up'", "'vt'", "'wa'",
            "'wc'", "'wd'", "'wg'", "'white'", "'window'", "'wm'",
            "'wp'", "'wr'", "'wrap'", "'ws'", "'wx'", "'xp'", "'yellow'",
            "'zx'", "'_black'", "'_blue'", "'_colour'", "'_green'",
            "'_magenta'", "'_red'", "'_white'", "'_yellow'"
            ),
        ),
    'SYMBOLS' => array(
        0 => array('+', '-', '*', '/', '^', '|'),
        1 => array('++', '--', '+=', '-=', '*=', '/=', '^=', '|='),
        2 => array('&lt;', '&gt;', '='),
        3 => array('(', ')', '[', ']', '{', '}'),
        4 => array(',', '@', ';', '\\')
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: navy;', // Directives
            2 => 'color: blue;', // System Functions
            3 => 'color: blue;', // System Variables
            4 => 'color: #6A5ACD; font-style: italic;', // Nomads Global Variables
            5 => 'color: #BDB76B;', // Mnemonics
            ),
        'COMMENTS' => array(
            1 => 'color: #008080; font-style: italic;',
            2 => 'color: #008080;',
            'MULTI' => 'color: #008080; font-style: italic;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000066;'
            ),
        'STRINGS' => array(
            0 => 'color: green;'
            ),
        'NUMBERS' => array(
            0 => 'color: #00008B;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #008000;',
            1 => 'color: #000099;',
            2 => 'color: #000099;',
            3 => 'color: #0000C9;',
            4 => 'color: #000099;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            1 => 'color: #006400; font-weight: bold',
            2 => 'color: #6A5ACD;'
            )
        ),
    'URLS' => array(
        1 => 'http://www.allbasic.info./wiki/index.php/PX:Directive_{FNAME}',
        2 => 'http://www.allbasic.info./wiki/index.php/PX:System_function_{FNAME}',
        3 => 'http://www.allbasic.info./wiki/index.php/PX:System_variable_{FNAME}',
        4 => 'http://www.allbasic.info./wiki/index.php/PX:Nomads_{FNAME}',
        5 => 'http://www.allbasic.info./wiki/index.php/PX:Mnemonic_{FNAMEU}'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => "'"
        ),
    'REGEXPS' => array(
        1 => array(
            // Line Labels
            GESHI_SEARCH => '([[:space:]])([a-zA-Z_][a-zA-Z0-9_]+)(:)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '\\3'
            ),
        2 => array(
            // Global String Variables
            GESHI_SEARCH => '(\%)([a-zA-Z_][a-zA-Z0-9_]+)(\$)',
            GESHI_REPLACE => '\\1\\2\\3',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'ENABLE_FLAGS' => array(
            'NUMBERS' => GESHI_NEVER
            )
        ),
    'TAB_WIDTH' => 4
);

?>
