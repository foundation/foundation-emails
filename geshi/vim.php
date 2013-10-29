<?php
/*************************************************************************************
 * vim.php
 * ----------------
 * Author: Swaroop C H (swaroop@swaroopch.com)
 * Contributors:
 *  - Laurent Peuch (psycojoker@gmail.com)
 * Copyright: (c) 2008 Swaroop C H (http://www.swaroopch.com)
 * Release Version: 1.0.8.11
 * Date Started: 2008/10/19
 *
 * Vim scripting language file for GeSHi.
 *
 * Reference: http://qbnz.com/highlighter/geshi-doc.html#language-files
 * All keywords scraped from `:help expression-commands`.
 * All method names scraped from `:help function-list`.
 *
 * CHANGES
 * -------
 * 2008/10/19 (1.0.8.2)
 * - Started.
 * 2009/07/05
 * - Fill out list of zillion commands (maybe somes still miss).
 * - fix a part of the regex, now works for comment that have white space before the "
 *
 * TODO (updated 2009/07/05)
 * -------------------------
 * - Make this damn string with "" work correctly. I've just remove it for my wiki.
 * - Make the comment regex able to find comment after some code.
 *   (i.e: let rocks " unworking comment)
 * - Make <F1> <F2> ... <Esc> <CR> ... works event if they aren't surround by space.
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

$language_data = array(
    'LANG_NAME' => 'Vim Script',
    'COMMENT_SINGLE' => array(),
    'COMMENT_REGEXP' => array(
        1 => "/\s*\"[^\"]*?$/m",
        //Regular expressions (Ported from perl.php)
//        2 => "/(?<=[\\s^])(s|tr|y)\\/(?:\\\\.|(?!\n)[^\\/\\\\])+\\/(?:\\\\.|(?!\n)[^\\/\\\\])*\\/[msixpogcde]*(?=[\\s$\\.\\;])|(?<=[\\s^(=])(m|q[qrwx]?)?\\/(?:\\\\.|(?!\n)[^\\/\\\\])+\\/[msixpogc]*(?=[\\s$\\.\\,\\;\\)])/iU",
        ),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'au', 'augroup', 'autocmd', 'brea', 'break', 'bufadd',
            'bufcreate', 'bufdelete', 'bufenter', 'buffilepost',
            'buffilepre', 'bufleave', 'bufnew', 'bufnewfile',
            'bufread', 'bufreadcmd', 'bufreadpost', 'bufreadpre',
            'bufunload', 'bufwinenter', 'bufwinleave', 'bufwipeout',
            'bufwrite', 'bufwritecmd', 'bufwritepost', 'bufwritepre',
            'call', 'cat', 'catc', 'catch', 'cmd-event', 'cmdwinenter',
            'cmdwinleave', 'colorscheme', 'con', 'confirm', 'cont', 'conti',
            'contin', 'continu', 'continue', 'cursorhold', 'cursorholdi',
            'cursormoved', 'cursormovedi', 'ec', 'echo', 'echoe',
            'echoer', 'echoerr', 'echoh', 'echohl', 'echom', 'echoms',
            'echomsg', 'echon', 'el', 'els', 'else', 'elsei', 'elseif',
            'en', 'encodingchanged', 'end', 'endfo', 'endfor', 'endi',
            'endif', 'endt', 'endtr', 'endtry', 'endw', 'endwh', 'endwhi',
            'endwhil', 'endwhile', 'exe', 'exec', 'execu', 'execut',
            'execute', 'fileappendcmd', 'fileappendpost', 'fileappendpre',
            'filechangedro', 'filechangedshell', 'filechangedshellpost',
            'filereadcmd', 'filereadpost', 'filereadpre',
            'filetype', 'filewritecmd', 'filewritepost', 'filewritepre',
            'filterreadpost', 'filterreadpre', 'filterwritepost',
            'filterwritepre', 'fina', 'final', 'finall', 'finally',
            'finish', 'focusgained', 'focuslost', 'for', 'fun', 'func',
            'funct', 'functi', 'functio', 'function', 'funcundefined',
            'guienter', 'guifailed', 'hi', 'highlight', 'if', 'in',
            'insertchange', 'insertenter', 'insertleave', 'let', 'lockv',
            'lockva', 'lockvar', 'map', 'match', 'menupopup', 'nnoremap',
            'quickfixcmdpost', 'quickfixcmdpre', 'remotereply', 'retu',
            'retur', 'return', 'sessionloadpost', 'set', 'setlocal',
            'shellcmdpost', 'shellfilterpost', 'sourcecmd', 'sourcepre',
            'spellfilemissing', 'stdinreadpost', 'stdinreadpre',
            'swapexists', 'syntax', 'tabenter', 'tableave', 'termchanged',
            'termresponse', 'th', 'thr', 'thro', 'throw', 'tr', 'try', 'unl',
            'unle', 'unlet', 'unlo', 'unloc', 'unlock', 'unlockv',
            'unlockva', 'unlockvar', 'user', 'usergettingbored',
            'vimenter', 'vimleave', 'vimleavepre', 'vimresized', 'wh',
            'whi', 'whil', 'while', 'winenter', 'winleave'
            ),
        2 => array(
            '&lt;CR&gt;', '&lt;Esc&gt;', '&lt;F1&gt;', '&lt;F10&gt;',
            '&lt;F11&gt;', '&lt;F12&gt;', '&lt;F2&gt;', '&lt;F3&gt;',
            '&lt;F4&gt;', '&lt;F5&gt;', '&lt;F6&gt;', '&lt;F7&gt;',
            '&lt;F8&gt;', '&lt;F9&gt;', '&lt;cr&gt;', '&lt;silent&gt;',
            '-nargs', 'acd', 'ai', 'akm', 'al', 'aleph',
            'allowrevins', 'altkeymap', 'ambiwidth', 'ambw',
            'anti', 'antialias', 'ar', 'arab', 'arabic',
            'arabicshape', 'ari', 'arshape', 'autochdir',
            'autoindent', 'autoread', 'autowrite', 'autowriteall',
            'aw', 'awa', 'background', 'backspace', 'backup',
            'backupcopy', 'backupdir', 'backupext',
            'backupskip', 'balloondelay', 'ballooneval', 'balloonexpr',
            'bdir', 'bdlay', 'beval', 'bex', 'bexpr', 'bg',
            'bh', 'bin', 'binary', 'biosk', 'bioskey',
            'bk', 'bkc', 'bl', 'bomb', 'breakat', 'brk',
            'bs', 'bsdir', 'bsk', 'bt', 'bufhidden',
            'buftype', 'casemap', 'cb',
            'ccv', 'cd', 'cdpath', 'cedit', 'cf', 'cfu', 'ch',
            'charconvert', 'ci', 'cin', 'cink',
            'cinkeys', 'cino', 'cinoptions', 'cinw', 'cinwords',
            'clipboard', 'cmdheight', 'cmdwinheight',
            'cmp', 'cms', 'co', 'columns', 'com',
            'comc', 'comcl', 'comcle', 'comclea', 'comclear', 'comm',
            'comma', 'comman', 'command', 'comments', 'commentstring',
            'compatible', 'completefunc', 'completeopt',
            'consk', 'conskey', 'copyindent',
            'cot', 'cp', 'cpo', 'cpoptions', 'cpt',
            'cscopepathcomp', 'cscopeprg', 'cscopequickfix', 'cscopetag',
            'cscopetagorder', 'cscopeverbose',
            'cspc', 'csprg', 'csqf', 'cst', 'csto', 'csverb', 'cuc',
            'cul', 'cursorcolumn', 'cursorline', 'cwh', 'debug',
            'deco', 'def', 'define', 'delc', 'delco', 'delcom',
            'delcombine', 'delcomm', 'delcomman', 'delcommand', 'dex',
            'dg', 'dict', 'dictionary', 'diff', 'diffexpr',
            'diffopt', 'digraph', 'dip', 'dir', 'directory', 'display',
            'dlcomma', 'dy', 'ea', 'ead', 'eadirection',
            'eb', 'ed', 'edcompatible', 'ef', 'efm',
            'ei', 'ek', 'enc', 'encoding', 'endfun', 'endofline',
            'eol', 'ep', 'equalalways', 'equalprg', 'errorbells',
            'errorfile', 'errorformat', 'esckeys', 'et',
            'eventignore', 'ex', 'expandtab', 'exrc', 'fcl',
            'fcs', 'fdc', 'fde', 'fdi', 'fdl', 'fdls', 'fdm',
            'fdn', 'fdo', 'fdt', 'fen', 'fenc', 'fencs', 'fex',
            'ff', 'ffs', 'fileencoding', 'fileencodings', 'fileformat',
            'fileformats', /*'filetype',*/ 'fillchars', 'fk',
            'fkmap', 'flp', 'fml', 'fmr', 'fo', 'foldclose',
            'foldcolumn', 'foldenable', 'foldexpr', 'foldignore',
            'foldlevelstart', 'foldmarker', 'foldmethod', 'foldminlines',
            'foldnestmax', 'foldopen', 'formatexpr', 'formatlistpat',
            'formatoptions', 'formatprg', 'fp', 'fs', 'fsync', 'ft',
            'gcr', 'gd', 'gdefault', 'gfm', 'gfn', 'gfs', 'gfw',
            'ghr', 'go', 'gp', 'grepformat', 'grepprg', 'gtl',
            'gtt', 'guicursor', 'guifont', 'guifontset',
            'guifontwide', 'guiheadroom', 'guioptions', 'guipty',
            'guitablabel', 'guitabtooltip', 'helpfile',
            'helpheight', 'helplang', 'hf', 'hh', 'hid', 'hidden',
            'history', 'hk', 'hkmap', 'hkmapp', 'hkp', 'hl',
            'hlg', 'hls', 'hlsearch', 'ic', 'icon', 'iconstring',
            'ignorecase', 'im', 'imactivatekey', 'imak', 'imc',
            'imcmdline', 'imd', 'imdisable', 'imi', 'iminsert', 'ims',
            'imsearch', 'inc', 'include', 'includeexpr',
            'incsearch', 'inde', 'indentexpr', 'indentkeys',
            'indk', 'inex', 'inf', 'infercase', 'insertmode', 'is', 'isf',
            'isfname', 'isi', 'isident', 'isk', 'iskeyword',
            'isp', 'isprint', 'joinspaces', 'js', 'key',
            'keymap', 'keymodel', 'keywordprg', 'km', 'kmp', 'kp',
            'langmap', 'langmenu', 'laststatus', 'lazyredraw', 'lbr',
            'lcs', 'linebreak', 'lines', 'linespace', 'lisp',
            'lispwords', 'list', 'listchars', 'lm', 'lmap',
            'loadplugins', 'lpl', 'ls', 'lsp', 'lw', 'lz', 'ma',
            'macatsui', 'magic', 'makeef', 'makeprg', 'mat',
            'matchpairs', 'matchtime', 'maxcombine', 'maxfuncdepth',
            'maxmapdepth', 'maxmem', 'maxmempattern',
            'maxmemtot', 'mco', 'mef', 'menuitems', 'mfd', 'mh',
            'mis', 'mkspellmem', 'ml', 'mls', 'mm', 'mmd', 'mmp',
            'mmt', 'mod', 'modeline', 'modelines', 'modifiable',
            'modified', 'more', 'mouse', 'mousef', 'mousefocus',
            'mousehide', 'mousem', 'mousemodel', 'mouses',
            'mouseshape', 'mouset', 'mousetime', 'mp', 'mps', 'msm',
            'mzq', 'mzquantum', 'nf', 'noacd', 'noai', 'noakm',
            'noallowrevins', 'noaltkeymap', 'noanti', 'noantialias',
            'noar', 'noarab', 'noarabic', 'noarabicshape', 'noari',
            'noarshape', 'noautochdir', 'noautoindent', 'noautoread',
            'noautowrite', 'noautowriteall', 'noaw', 'noawa', 'nobackup',
            'noballooneval', 'nobeval', 'nobin', 'nobinary', 'nobiosk',
            'nobioskey', 'nobk', 'nobl', 'nobomb', 'nobuflisted', 'nocf',
            'noci', 'nocin', 'nocindent', 'nocompatible', 'noconfirm',
            'noconsk', 'noconskey', 'nocopyindent', 'nocp', 'nocscopetag',
            'nocscopeverbose', 'nocst', 'nocsverb', 'nocuc', 'nocul',
            'nocursorcolumn', 'nocursorline', 'nodeco', 'nodelcombine',
            'nodg', 'nodiff', 'nodigraph', 'nodisable', 'noea', 'noeb',
            'noed', 'noedcompatible', 'noek', 'noendofline', 'noeol',
            'noequalalways', 'noerrorbells', 'noesckeys', 'noet',
            'noex', 'noexpandtab', 'noexrc', 'nofen', 'nofk', 'nofkmap',
            'nofoldenable', 'nogd', 'nogdefault', 'noguipty', 'nohid',
            'nohidden', 'nohk', 'nohkmap', 'nohkmapp', 'nohkp', 'nohls',
            'nohlsearch', 'noic', 'noicon', 'noignorecase', 'noim',
            'noimc', 'noimcmdline', 'noimd', 'noincsearch', 'noinf',
            'noinfercase', 'noinsertmode', 'nois', 'nojoinspaces',
            'nojs', 'nolazyredraw', 'nolbr', 'nolinebreak', 'nolisp',
            'nolist', 'noloadplugins', 'nolpl', 'nolz', 'noma',
            'nomacatsui', 'nomagic', 'nomh', 'noml', 'nomod',
            'nomodeline', 'nomodifiable', 'nomodified', 'nomore',
            'nomousef', 'nomousefocus', 'nomousehide', 'nonu',
            'nonumber', 'noodev', 'noopendevice', 'nopaste', 'nopi',
            'nopreserveindent', 'nopreviewwindow', 'noprompt', 'nopvw',
            'noreadonly', 'noremap', 'norestorescreen', 'norevins',
            'nori', 'norightleft', 'norightleftcmd', 'norl', 'norlc',
            'noro', 'nors', 'noru', 'noruler', 'nosb', 'nosc', 'noscb',
            'noscrollbind', 'noscs', 'nosecure', 'nosft', 'noshellslash',
            'noshelltemp', 'noshiftround', 'noshortname', 'noshowcmd',
            'noshowfulltag', 'noshowmatch', 'noshowmode', 'nosi', 'nosm',
            'nosmartcase', 'nosmartindent', 'nosmarttab', 'nosmd',
            'nosn', 'nosol', 'nospell', 'nosplitbelow', 'nosplitright',
            'nospr', 'nosr', 'nossl', 'nosta', 'nostartofline',
            'nostmp', 'noswapfile', 'noswf', 'nota', 'notagbsearch',
            'notagrelative', 'notagstack', 'notbi', 'notbidi', 'notbs',
            'notermbidi', 'noterse', 'notextauto', 'notextmode',
            'notf', 'notgst', 'notildeop', 'notimeout', 'notitle',
            'noto', 'notop', 'notr', 'nottimeout', 'nottybuiltin',
            'nottyfast', 'notx', 'novb', 'novisualbell', 'nowa',
            'nowarn', 'nowb', 'noweirdinvert', 'nowfh', 'nowfw',
            'nowildmenu', 'nowinfixheight', 'nowinfixwidth', 'nowiv',
            'nowmnu', 'nowrap', 'nowrapscan', 'nowrite', 'nowriteany',
            'nowritebackup', 'nows', 'nrformats', 'nu', 'number',
            'numberwidth', 'nuw', 'odev', 'oft', 'ofu',
            'omnifunc', 'opendevice', 'operatorfunc', 'opfunc',
            'osfiletype', 'pa', 'para', 'paragraphs',
            'paste', 'pastetoggle', 'patchexpr',
            'patchmode', 'path', 'pdev', 'penc', 'pex', 'pexpr',
            'pfn', 'ph', 'pheader', 'pi', 'pm', 'pmbcs',
            'pmbfn', 'popt', 'preserveindent', 'previewheight',
            'previewwindow', 'printdevice', 'printencoding', 'printexpr',
            'printfont', 'printheader', 'printmbcharset',
            'printmbfont', 'printoptions', 'prompt', 'pt', 'pumheight',
            'pvh', 'pvw', 'qe', 'quoteescape', 'rdt',
            'readonly', 'redrawtime', 'remap', 'report',
            'restorescreen', 'revins', 'ri', 'rightleft', 'rightleftcmd',
            'rl', 'rlc', 'ro', 'rs', 'rtp', 'ru',
            'ruf', 'ruler', 'rulerformat', 'runtimepath', 'sb', 'sbo',
            'sbr', 'sc', 'scb', 'scr', 'scroll', 'scrollbind',
            'scrolljump', 'scrolloff', 'scrollopt',
            'scs', 'sect', 'sections', 'secure', 'sel',
            'selection', 'selectmode', 'sessionoptions', 'sft',
            'sh', 'shcf', 'shell', 'shellcmdflag', 'shellpipe',
            'shellquote', 'shellredir', 'shellslash',
            'shelltemp', 'shelltype', 'shellxquote', 'shiftround',
            'shiftwidth', 'shm', 'shortmess', 'shortname',
            'showbreak', 'showcmd', 'showfulltag', 'showmatch',
            'showmode', 'showtabline', 'shq', 'si', 'sidescroll',
            'sidescrolloff', 'siso', 'sj', 'slm', 'sm', 'smartcase',
            'smartindent', 'smarttab', 'smc', 'smd', 'sn',
            'so', 'softtabstop', 'sol', 'sp', 'spc', 'spell',
            'spellcapcheck', 'spellfile', 'spelllang',
            'spf', 'spl', 'splitbelow', 'splitright', 'spr',
            'sps', 'sr', 'srr', 'ss', 'ssl', 'ssop', 'st', 'sta',
            'stal', 'startofline', 'statusline', 'stl', 'stmp',
            'sts', 'su', 'sua', 'suffixes', 'suffixesadd', 'sw',
            'swapfile', 'swapsync', 'swb', 'swf', 'switchbuf',
            'sws', 'sxq', 'syn', 'synmaxcol', 'ta',
            'tabline', 'tabpagemax', 'tabstop', 'tag',
            'tagbsearch', 'taglength', 'tagrelative', 'tags', 'tagstack',
            'tal', 'tb', 'tbi', 'tbidi', 'tbis', 'tbs',
            'tenc', 'term', 'termbidi', 'termencoding', 'terse',
            'textauto', 'textmode', 'textwidth', 'tf', 'tgst',
            'thesaurus', 'tildeop', 'timeout', 'timeoutlen',
            'title', 'titlelen', 'titleold', 'titlestring',
            'tl', 'tm', 'to', 'toolbar', 'toolbariconsize', 'top',
            'tpm', 'ts', 'tsl', 'tsr', 'ttimeout',
            'ttimeoutlen', 'ttm', 'tty', 'ttybuiltin', 'ttyfast', 'ttym',
            'ttymouse', 'ttyscroll', 'ttytype', 'tw', 'tx', 'uc',
            'ul', 'undolevels', 'updatecount', 'updatetime', 'ut',
            'vb', 'vbs', 'vdir', 've', 'verbose', 'verbosefile',
            'vfile', 'vi', 'viewdir', 'viewoptions', 'viminfo',
            'virtualedit', 'visualbell', 'vop', 'wa', 'wak',
            'warn', 'wb', 'wc', 'wcm', 'wd', 'weirdinvert', 'wfh',
            'wfw', /*'wh',*/ 'whichwrap', 'wi', 'wig', 'wildchar',
            'wildcharm', 'wildignore', 'wildmenu',
            'wildmode', 'wildoptions', 'wim', 'winaltkeys', 'window',
            'winfixheight', 'winfixwidth', 'winheight',
            'winminheight', 'winminwidth', 'winwidth', 'wiv',
            'wiw', 'wm', 'wmh', 'wmnu', 'wmw', 'wop', 'wrap',
            'wrapmargin', 'wrapscan', 'write', 'writeany',
            'writebackup', 'writedelay', 'ws', 'ww'
            ),
        3 => array(
            'BufAdd', 'BufCreate', 'BufDelete', 'BufEnter', 'BufFilePost',
            'BufFilePre', 'BufHidden', 'BufLeave', 'BufNew', 'BufNewFile',
            'BufRead', 'BufReadCmd', 'BufReadPost', 'BufReadPre',
            'BufUnload', 'BufWinEnter', 'BufWinLeave', 'BufWipeout',
            'BufWrite', 'BufWriteCmd', 'BufWritePost', 'BufWritePre',
            'Cmd-event', 'CmdwinEnter', 'CmdwinLeave', 'ColorScheme',
            'CursorHold', 'CursorHoldI', 'CursorMoved', 'CursorMovedI',
            'EncodingChanged', 'FileAppendCmd', 'FileAppendPost',
            'FileAppendPre', 'FileChangedRO', 'FileChangedShell',
            'FileChangedShellPost', 'FileEncoding', 'FileReadCmd',
            'FileReadPost', 'FileReadPre', 'FileType',
            'FileWriteCmd', 'FileWritePost', 'FileWritePre',
            'FilterReadPost', 'FilterReadPre', 'FilterWritePost',
            'FilterWritePre', 'FocusGained', 'FocusLost', 'FuncUndefined',
            'GUIEnter', 'GUIFailed', 'InsertChange', 'InsertEnter',
            'InsertLeave', 'MenuPopup', 'QuickFixCmdPost',
            'QuickFixCmdPre', 'RemoteReply', 'SessionLoadPost',
            'ShellCmdPost', 'ShellFilterPost', 'SourceCmd',
            'SourcePre', 'SpellFileMissing', 'StdinReadPost',
            'StdinReadPre', 'SwapExists', 'Syntax', 'TabEnter',
            'TabLeave', 'TermChanged', 'TermResponse', 'User',
            'UserGettingBored', 'VimEnter', 'VimLeave', 'VimLeavePre',
            'VimResized', 'WinEnter', 'WinLeave', 'abs', 'add', 'append',
            'argc', 'argidx', 'argv', 'atan', 'browse', 'browsedir',
            'bufexists', 'buflisted', 'bufloaded', 'bufname', 'bufnr',
            'bufwinnr', 'byte2line', 'byteidx', 'ceil', 'changenr',
            'char2nr', 'cindent', 'clearmatches', 'col', 'complete',
            'complete_add', 'complete_check', 'copy',
            'cos', 'count', 'cscope_connection', 'cursor', 'deepcopy',
            'delete', 'did_filetype', 'diff_filler', 'diff_hlID',
            'empty', 'escape', 'eval', 'eventhandler', 'executable',
            'exists', 'expand', 'extend', 'feedkeys', 'filereadable',
            'filewritable', 'filter', 'finddir', 'findfile', 'float2nr',
            'floor', 'fnameescape', 'fnamemodify', 'foldclosed',
            'foldclosedend', 'foldlevel', 'foldtext', 'foldtextresult',
            'foreground', 'garbagecollect', 'get', 'getbufline',
            'getbufvar', 'getchar', 'getcharmod', 'getcmdline',
            'getcmdpos', 'getcmdtype', 'getcwd', 'getfontname',
            'getfperm', 'getfsize', 'getftime', 'getftype', 'getline',
            'getloclist', 'getmatches', 'getpid', 'getpos', 'getqflist',
            'getreg', 'getregtype', 'gettabwinvar', 'getwinposx',
            'getwinposy', 'getwinvar', 'glob', 'globpath', 'has',
            'has_key', 'haslocaldir', 'hasmapto', 'histadd', 'histdel',
            'histget', 'histnr', 'hlID', 'hlexists', 'hostname', 'iconv',
            'indent', 'index', 'input', 'inputdialog', 'inputlist',
            'inputrestore', 'inputsave', 'inputsecret', 'insert',
            'isdirectory', 'islocked', 'items', 'join', 'keys', 'len',
            'libcall', 'libcallnr', 'line', 'line2byte', 'lispindent',
            'localtime', 'log10', 'maparg', 'mapcheck', 'matchadd',
            'matcharg', 'matchdelete', 'matchend', 'matchlist',
            'matchstr', 'max', 'min', 'mkdir', 'mode', 'nextnonblank',
            'nr2char', 'off', 'on', 'pathshorten', 'plugin', 'pow',
            'prevnonblank', 'printf', 'pumvisible', 'range', 'readfile',
            'reltime', 'reltimestr', 'remote_expr', 'remote_foreground',
            'remote_peek', 'remote_read', 'remote_send', 'remove',
            'rename', 'repeat', 'resolve', 'reverse', 'round', 'search',
            'searchdecl', 'searchpair', 'searchpairpos', 'searchpos',
            'server2client', 'serverlist', 'setbufvar', 'setcmdpos',
            'setline', 'setloclist', 'setmatches', 'setpos', 'setqflist',
            'setreg', 'settabwinvar', 'setwinvar', 'shellescape',
            'simplify', 'sin', 'sort', 'soundfold', 'spellbadword',
            'spellsuggest', 'split', 'sqrt', 'str2float', 'str2nr',
            'strftime', 'stridx', 'string', 'strlen', 'strpart',
            'strridx', 'strtrans', 'submatch', 'substitute',
            'synID', 'synIDattr', 'synIDtrans', 'synstack', 'system',
            'tabpagebuflist', 'tabpagenr', 'tabpagewinnr', 'tagfiles',
            'taglist', 'tempname', 'tolower', 'toupper', 'trunc',
            'type', 'values', 'virtcol', 'visualmode', 'winbufnr',
            'wincol', 'winline', 'winnr', 'winrestcmd',
            'winrestview', 'winsaveview', 'writefile'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '!', '%', '&', '*', '|', '/', '<', '>',
        '^', '-', '+', '~', '?', ':', '$', '@', '.'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true
        ),
    'STYLES' => array(
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'COMMENTS' => array(
            1 => 'color: #adadad; font-style: italic;',
//            2 => 'color: #009966; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'KEYWORDS' => array(
            1 => 'color: #804040;',
            2 => 'color: #668080;',
            3 => 'color: #25BB4D;'
            ),
        'METHODS' => array(
            0 => 'color: #000000;',
            ),
        'NUMBERS' => array(
            0 => 'color: #000000; font-weight:bold;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            ),
        'STRINGS' => array(
            0 => 'color: #C5A22D;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000;'
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => false, //Save some time as OO identifiers aren't used
    'OBJECT_SPLITTERS' => array(),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array()
);

?>
