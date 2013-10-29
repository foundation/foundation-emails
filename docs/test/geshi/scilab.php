<?php
/*************************************************************************************
 * scilab.php
 * --------
 * Author: Christophe David (geshi@christophedavid.org)
 * Copyright: (c) 2008 Christophe David (geshi@christophedavid.org)
 * Release Version: 1.0.8.11
 * Date Started: 2008/08/04
 *
 * SciLab language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/08/25 (1.0.8.1)
 *   - Corrected with the help of Benny Baumann (BenBE@geshi.org)
 * 2008/08/04 (0.0.0.1)
 *   - First beta Release - known problem with ' used to transpose matrices considered as start of strings
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
    'LANG_NAME' => 'SciLab',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(
        2 => "/(?<=\)|\]|\w)'/"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'HARDQUOTE' => array("'", "'"),
    'HARDESCAPE' => array(),
    'KEYWORDS' => array(
        1 => array(
            'if', 'else', 'elseif', 'end', 'select', 'case', 'for', 'while', 'break'
            ),
        2 => array(
            'STDIN', 'STDOUT', 'STDERR',
            '%i', '%pi', '%e', '%eps', '%nan', '%inf', '%s', '%t', '%f',
            'usual', 'polynomial', 'boolean', 'character', 'function', 'rational', 'state-space',
            'sparse', 'boolean sparse', 'list', 'tlist', 'library', 'endfunction'
            ),
        3 => array(
            '%asn', '%helps', '%k', '%sn', 'abcd', 'abinv', 'abort', 'about', 'About_M2SCI_tools',
            'abs', 'acos', 'acosh', 'acoshm', 'acosm', 'AdCommunications', 'add_demo', 'add_edge',
            'add_help_chapter', 'add_node', 'add_palette', 'addcolor', 'addf', 'addinter', 'addmenu',
            'adj_lists', 'adj2sp', 'aff2ab', 'alufunctions', 'amell', 'analpf', 'analyze', 'and',
            'ans', 'apropos', 'arc_graph', 'arc_number', 'arc_properties', 'argn', 'arhnk', 'arl2',
            'arma', 'arma2p', 'armac', 'armax', 'armax1', 'arsimul', 'artest', 'articul', 'ascii',
            'asciimat', 'asin', 'asinh', 'asinhm', 'asinm', 'assignation', 'atan', 'atanh', 'atanhm',
            'atanm', 'augment', 'auread', 'auwrite', 'axes_properties', 'axis_properties', 'backslash',
            'balanc', 'balreal', 'bandwr', 'banner','bar', 'barh', 'barhomogenize', 'basename', 'bdiag',
            'beep', 'besselh', 'besseli', 'besselj', 'besselk', 'bessely', 'best_match', 'beta','bezout',
            'bifish', 'bilin', 'binomial', 'black', 'bloc2exp', 'bloc2ss', 'bode', 'bool2s',
            'boucle', 'brackets', 'browsevar', 'bsplin3val', 'bstap', 'buttmag', 'buttondialog',
            'bvode', 'bvodeS', 'c_link', 'cainv', 'calendar', 'calerf', 'calfrq', 'call', 'canon', 'casc',
            'cat', 'catch', 'ccontrg', 'cd', 'cdfbet', 'cdfbin', 'cdfchi', 'cdfchn', 'cdff', 'cdffnc',
            'cdfgam', 'cdfnbn', 'cdfnor', 'cdfpoi', 'cdft', 'ceil', 'cell', 'cell2mat', 'cellstr', 'center',
            'cepstrum', 'chain_struct', 'chaintest', 'champ', 'champ_properties', 'champ1', 'char', 'chart',
            'chartooem', 'chdir', 'cheb1mag', 'cheb2mag', 'check_graph', 'chepol', 'chfact', 'chol', 'chsolve',
            'circuit', 'classmarkov', 'clc', 'clean', 'clear', 'clear_pixmap', 'clearfun', 'clearglobal','clf',
            'clipboard', 'close', 'cls2dls', 'cmb_lin', 'cmndred', 'cmoment', 'code2str', 'coeff', 'coff', 'coffg',
            'colcomp', 'colcompr', 'colinout', 'colon', 'color', 'color_list', 'colorbar', 'colordef', 'colormap',
            'colregul', 'comma', 'comments', 'comp', 'companion', 'comparison', 'Compound_properties', 'con_nodes',
            'cond', 'config', 'configure_msvc', 'conj', 'connex', 'console', 'cont_frm', 'cont_mat', 'Contents',
            'continue', 'contour', 'contour2d', 'contour2di', 'contourf', 'contr', 'contract_edge', 'contrss',
            'convex_hull', 'convol', 'convstr', 'copfac', 'copy', 'corr', 'correl', 'cos', 'cosh', 'coshm',
            'cosm', 'cotg', 'coth', 'cothm', 'covar', 'create_palette', 'cshep2d', 'csim', 'cspect', 'Cste',
            'ctr_gram', 'cumprod', 'cumsum', 'cycle_basis', 'czt', 'dasrt', 'dassl', 'datafit', 'date', 'datenum',
            'datevec', 'dbphi', 'dcf', 'ddp', 'debug', 'dec2hex', 'deff', 'definedfields', 'degree', 'delbpt',
            'delete', 'delete_arcs', 'delete_nodes', 'delip', 'delmenu', 'demoplay', 'denom', 'derivat', 'derivative',
            'des2ss', 'des2tf', 'det', 'determ', 'detr', 'detrend', 'dft', 'dhinf', 'dhnorm', 'diag', 'diary',
            'diff', 'diophant', 'dir', 'dirname', 'disp', 'dispbpt', 'dispfiles', 'dlgamma', 'dnaupd', 'do', 'dot',
            'double', 'dragrect', 'draw', 'drawaxis', 'drawlater', 'drawnow', 'driver', 'dsaupd', 'dscr',
            'dsearch', 'dsimul', 'dt_ility', 'dtsi', 'edge_number', 'edit', 'edit_curv', 'edit_error',
            'edit_graph', 'edit_graph_menus', 'editvar', 'eigenmarkov', 'ell1mag',
            'empty', 'emptystr', 'eqfir', 'eqiir', 'equal', 'Equal', 'equil', 'equil1',
            'ereduc', 'erf', 'erfc', 'erfcx', 'errbar', 'errcatch', 'errclear', 'error', 'error_table', 'etime',
            'eval', 'eval_cshep2d', 'eval3d', 'eval3dp', 'evans', 'evstr', 'excel2sci', 'exec', 'execstr', 'exists',
            'exit', 'exp', 'expm', 'external', 'extraction', 'eye', 'fac3d', 'factorial', 'factors', 'faurre', 'fchamp',
            'fcontour', 'fcontour2d', 'fec', 'fec_properties', 'feedback', 'feval', 'ffilt', 'fft', 'fft2', 'fftshift',
            'fgrayplot', 'figure', 'figure_properties', 'figure_style', 'file', 'fileinfo', 'fileparts', 'filter', 'find',
            'find_freq', 'find_path', 'findABCD', 'findAC', 'findBD', 'findBDK', 'findm', 'findmsvccompiler', 'findobj',
            'findR', 'findx0BD', 'firstnonsingleton', 'fit_dat', 'fix', 'floor', 'flts', 'foo', 'format',
            'formatman', 'fort', 'fourplan', 'fplot2d', 'fplot3d', 'fplot3d1', 'fprintf', 'fprintfMat', 'frep2tf',
            'freq', 'freson', 'frexp', 'frfit', 'frmag', 'fscanf', 'fscanfMat', 'fsfirlin', 'fsolve', 'fspecg',
            'fstabst', 'fstair', 'ftest', 'ftuneq', 'full', 'fullfile', 'fullrf', 'fullrfk', 'fun2string', 'Funcall',
            'funcprot', 'functions', 'funptr', 'fusee', 'G_make', 'g_margin', 'gainplot', 'gamitg',
            'gamma', 'gammaln', 'gca', 'gcare', 'gcd', 'gce', 'gcf', 'gda', 'gdf', 'gen_net', 'genfac3d', 'genlib',
            'genmarkov', 'geom3d', 'geomean', 'get', 'get_contents_infer', 'get_function_path', 'getcolor', 'getcwd',
            'getd', 'getdate', 'getenv', 'getf', 'getfield', 'getfont', 'gethistory', 'getio', 'getlinestyle',
            'getlongpathname', 'getmark', 'getmemory', 'getos', 'getpid', 'getscilabkeywords', 'getshell',
            'getshortpathname', 'getsymbol', 'getvalue', 'getversion', 'gfare', 'gfrancis', 'girth', 'givens',
            'glever', 'glist', 'global', 'GlobalProperty', 'glue', 'gmres', 'gpeche', 'gr_menu', 'graduate', 'grand',
            'graph_2_mat', 'graph_center', 'graph_complement', 'graph_diameter', 'graph_power', 'graph_simp', 'graph_sum',
            'graph_union', 'graphic', 'Graphics', 'graphics_entities', 'graph-list', 'graycolormap', 'grayplot',
            'grayplot_properties', 'graypolarplot', 'great', 'grep', 'group', 'gschur', 'gsort', 'gspec', 'gstacksize',
            'gtild', 'h_cl', 'h_inf', 'h_inf_st', 'h_norm', 'h2norm', 'halt', 'hamilton', 'hank', 'hankelsv', 'harmean',
            'hat', 'havewindow', 'head_comments', 'help', 'help_skeleton', 'hermit', 'hess', 'hex2dec', 'hilb', 'hinf',
            'hist3d', 'histplot', 'horner', 'host', 'hotcolormap', 'householder', 'hrmt', 'hsv2rgb', 'hsvcolormap',
            'htrianr', 'hypermat', 'hypermatrices', 'iconvert', 'ieee', 'ifft', 'iir', 'iirgroup', 'iirlp',
            'ilib_build', 'ilib_compile', 'ilib_for_link', 'ilib_gen_gateway', 'ilib_gen_loader', 'ilib_gen_Make',
            'im_inv', 'imag', 'impl', 'imrep2ss', 'imult', 'ind2sub', 'Infer', 'inistate', 'input', 'insertion', 'int',
            'int16', 'int2d', 'int32', 'int3d', 'int8', 'intc', 'intdec', 'integrate', 'interp', 'interp1', 'interp2d',
            'interp3d', 'interpln', 'intersci', 'intersect', 'intg', 'intl', 'intppty', 'intsplin', 'inttrap', 'inttype',
            'inv', 'inv_coeff', 'invr', 'invsyslin', 'iqr', 'is_connex', 'iscellstr', 'isdef', 'isdir', 'isempty',
            'isequal', 'isequalbitwise', 'iserror', 'isglobal', 'isinf', 'isnan', 'isoview', 'isreal', 'javasci',
            'jetcolormap', 'jmat', 'justify', 'kalm', 'karmarkar', 'kernel', 'keyboard', 'knapsack', 'kpure', 'krac2',
            'kron', 'kroneck', 'label_properties', 'labostat', 'LANGUAGE', 'lasterror', 'lattn', 'lattp', 'lcf', 'lcm',
            'lcmdiag', 'ldiv', 'ldivf', 'leastsq', 'left', 'legend', 'legend_properties', 'legendre', 'legends', 'length',
            'leqr', 'less', 'lev', 'levin', 'lex_sort', 'lft', 'lgfft', 'lib', 'lin', 'lin2mu', 'lindquist',
            'line_graph', 'linear_interpn', 'lines', 'LineSpec', 'linf', 'linfn', 'link', 'linmeq', 'linpro', 'linsolve',
            'linspace', 'listfiles', 'listvarinfile', 'lmisolver', 'lmitool', 'load', 'load_graph', 'loadhistory',
            'loadmatfile', 'loadplots', 'loadwave', 'locate', 'log', 'log10', 'log1p', 'log2', 'logm', 'logspace',
            'lotest', 'lqe', 'lqg', 'lqg_ltr', 'lqg2stan', 'lqr', 'ls', 'lsq', 'lsq_splin', 'lsqrsolve', 'lsslist',
            'lstcat', 'lstsize', 'ltitr', 'lu', 'ludel', 'lufact', 'luget', 'lusolve', 'lyap', 'm_circle', 'm2scideclare',
            'macglov', 'macr2lst', 'macr2tree', 'macro', 'macrovar', 'mad', 'make_graph', 'make_index', 'makecell', 'man',
            'manedit', 'mapsound', 'markp2ss', 'mat_2_graph', 'matfile2sci', 'Matlab-Scilab_character_strings', 'Matplot',
            'Matplot_properties', 'Matplot1', 'matrices', 'matrix', 'max', 'max_cap_path', 'max_clique', 'max_flow',
            'maxi', 'mcisendstring', 'mclearerr', 'mclose', 'mdelete', 'mean', 'meanf', 'median', 'menus', 'meof',
            'merror', 'mese', 'mesh', 'mesh2d', 'meshgrid', 'mfft', 'mfile2sci', 'mfprintf', 'mfscanf', 'mget', 'mgeti',
            'mgetl', 'mgetstr', 'milk_drop', 'min', 'min_lcost_cflow', 'min_lcost_flow1', 'min_lcost_flow2',
            'min_qcost_flow', 'min_weight_tree', 'mine', 'mini', 'minreal', 'minss', 'minus', 'mkdir', 'mlist', 'mode',
            'modulo', 'moment', 'mopen', 'move', 'mprintf', 'mps2linpro', 'mput', 'mputl', 'mputstr', 'mrfit', 'mscanf',
            'msd', 'mseek', 'msprintf', 'msscanf', 'mstr2sci', 'mtell', 'mtlb_0', 'mtlb_a', 'mtlb_all', 'mtlb_any',
            'mtlb_axis', 'mtlb_beta', 'mtlb_box', 'mtlb_close', 'mtlb_colordef', 'mtlb_conv', 'mtlb_cumprod', 'mtlb_cumsum',
            'mtlb_dec2hex', 'mtlb_delete', 'mtlb_diag', 'mtlb_diff', 'mtlb_dir', 'mtlb_double', 'mtlb_e', 'mtlb_echo',
            'mtlb_eig', 'mtlb_eval', 'mtlb_exist', 'mtlb_eye', 'mtlb_false', 'mtlb_fft', 'mtlb_fftshift', 'mtlb_find',
            'mtlb_findstr', 'mtlb_fliplr', 'mtlb_fopen', 'mtlb_format', 'mtlb_fprintf', 'mtlb_fread', 'mtlb_fscanf',
            'mtlb_full', 'mtlb_fwrite', 'mtlb_grid', 'mtlb_hold', 'mtlb_i', 'mtlb_ifft', 'mtlb_imp', 'mtlb_int16',
            'mtlb_int32', 'mtlb_int8', 'mtlb_is', 'mtlb_isa', 'mtlb_isfield', 'mtlb_isletter', 'mtlb_isspace', 'mtlb_l',
            'mtlb_legendre', 'mtlb_linspace', 'mtlb_load', 'mtlb_logic', 'mtlb_logical', 'mtlb_lower', 'mtlb_max',
            'mtlb_min', 'mtlb_mode', 'mtlb_more', 'mtlb_num2str', 'mtlb_ones', 'mtlb_plot', 'mtlb_prod', 'mtlb_rand',
            'mtlb_randn', 'mtlb_rcond', 'mtlb_realmax', 'mtlb_realmin', 'mtlb_repmat', 'mtlb_s', 'mtlb_save',
            'mtlb_setstr', 'mtlb_size', 'mtlb_sort', 'mtlb_sparse', 'mtlb_strcmp', 'mtlb_strcmpi', 'mtlb_strfind',
            'mtlb_strrep', 'mtlb_sum', 'mtlb_t', 'mtlb_toeplitz', 'mtlb_tril', 'mtlb_triu', 'mtlb_true', 'mtlb_uint16',
            'mtlb_uint32', 'mtlb_uint8', 'mtlb_upper', 'mtlb_zeros', 'mu2lin', 'mucomp', 'mulf', 'mvvacov', 'name2rgb',
            'names', 'nancumsum', 'nand2mean', 'nanmax', 'nanmean', 'nanmeanf', 'nanmedian', 'nanmin', 'nanstdev',
            'nansum', 'narsimul', 'NDcost', 'ndgrid', 'ndims', 'nearfloat', 'nehari', 'neighbors', 'netclose', 'netwindow',
            'netwindows', 'new', 'newaxes', 'newest', 'newfun', 'nextpow2', 'nf3d', 'nfreq', 'nlev', 'nnz', 'node_number',
            'nodes_2_path', 'nodes_degrees', 'noisegen', 'norm', 'not', 'null', 'number_properties', 'numdiff', 'numer',
            'nyquist', 'object_editor', 'obs_gram', 'obscont', 'obscont1', 'observer', 'obsv_mat', 'obsvss', 'ode',
            'ode_discrete', 'ode_optional_output', 'ode_root', 'odedc', 'odeoptions', 'oemtochar', 'old_style',
            'oldbesseli', 'oldbesselj', 'oldbesselk', 'oldbessely', 'oldload', 'oldplot', 'oldsave', 'ones',
            'Operation', 'optim', 'or', 'orth', 'overloading', 'p_margin', 'param3d', 'param3d_properties',
            'param3d1', 'paramfplot2d', 'parents', 'parrot', 'part', 'path_2_nodes', 'pathconvert', 'pause', 'pbig',
            'pca', 'pcg', 'pdiv', 'pen2ea', 'pencan', 'penlaur', 'percent', 'perctl', 'perfect_match', 'perl',
            'perms', 'permute', 'pertrans', 'pfss', 'phasemag', 'phc', 'pie', 'pinv', 'pipe_network', 'playsnd', 'plot',
            'plot_graph', 'plot2d', 'plot2d_old_version', 'plot2d1', 'plot2d2', 'plot2d3', 'plot2d4', 'plot3d',
            'plot3d_old_version', 'plot3d1', 'plot3d2', 'plot3d3', 'plotframe', 'plotprofile', 'plus', 'plzr',
            'pmodulo', 'pol2des', 'pol2str', 'pol2tex', 'polar', 'polarplot', 'polfact', 'poly', 'polyline_properties',
            'portr3d', 'portrait', 'power', 'ppol', 'prbs_a', 'predecessors', 'predef', 'print', 'printf',
            'printf_conversion', 'printing', 'printsetupbox', 'prod', 'profile', 'progressionbar', 'proj', 'projsl',
            'projspec', 'psmall', 'pspect', 'pvm', 'pvm_addhosts', 'pvm_barrier', 'pvm_bcast', 'pvm_bufinfo', 'pvm_config',
            'pvm_delhosts', 'pvm_error', 'pvm_exit', 'pvm_f772sci', 'pvm_get_timer', 'pvm_getinst', 'pvm_gettid',
            'pvm_gsize', 'pvm_halt', 'pvm_joingroup', 'pvm_kill', 'pvm_lvgroup', 'pvm_mytid', 'pvm_parent', 'pvm_probe',
            'pvm_recv', 'pvm_reduce', 'pvm_sci2f77', 'pvm_send', 'pvm_set_timer', 'pvm_spawn', 'pvm_spawn_independent',
            'pvm_start', 'pvm_tasks', 'pvm_tidtohost', 'pvmd3', 'pwd', 'qassign', 'qld', 'qmr', 'qr', 'quapro', 'quart',
            'quaskro', 'quit', 'quote', 'rand', 'randpencil', 'range', 'rank', 'rankqr', 'rat',  'rcond',
            'rdivf', 'read', 'read4b', 'readb', 'readc_', 'readmps', 'readxls', 'real', 'realtime', 'realtimeinit',
            'rectangle_properties', 'recur', 'reglin', 'regress', 'remez', 'remezb', 'repfreq', 'replot', 'resethistory',
            'residu', 'resume', 'return', 'rgb2name', 'ric_desc', 'ricc', 'riccati', 'rlist', 'rmdir', 'roots', 'rotate',
            'round', 'routh_t', 'rowcomp', 'rowcompr', 'rowinout', 'rowregul', 'rowshuff', 'rpem', 'rref', 'rtitr',
            'rubberbox', 'salesman', 'sample', 'samplef', 'samwr', 'save', 'save_format', 'save_graph', 'savehistory',
            'savematfile', 'savewave', 'sca', 'scaling', 'scanf', 'scanf_conversion', 'scf', 'schur', 'sci_files',
            'sci2exp', 'sci2for', 'sci2map', 'sciargs', 'SciComplex', 'SciComplexArray', 'SciDouble', 'SciDoubleArray',
            'scilab', 'Scilab', 'ScilabEval', 'scilink', 'scipad', 'SciString', 'SciStringArray', 'sd2sci', 'sda', 'sdf',
            'secto3d', 'segs_properties', 'semi', 'semicolon', 'semidef', 'sensi', 'set', 'set_posfig_dim',
            'setbpt', 'setdiff', 'setenv', 'seteventhandler', 'setfield', 'sethomedirectory', 'setlanguage', 'setmenu',
            'sfact', 'Sfgrayplot', 'Sgrayplot', 'sgrid', 'shortest_path', 'show_arcs', 'show_graph', 'show_nodes',
            'show_pixmap', 'showprofile', 'sident', 'sign', 'Signal', 'signm', 'simp', 'simp_mode', 'sin', 'sinc',
            'sincd', 'sinh', 'sinhm', 'sinm', 'size', 'slash', 'sleep', 'sm2des', 'sm2ss', 'smooth', 'solve',
            'sorder', 'sort', 'sound', 'soundsec', 'sp2adj', 'spaninter', 'spanplus', 'spantwo', 'spchol',
            'spcompack', 'spec', 'specfact', 'speye', 'spget', 'splin', 'splin2d', 'splin3d', 'split_edge', 'spones',
            'sprand', 'sprintf', 'spzeros', 'sqroot', 'sqrt', 'sqrtm', 'square', 'squarewave', 'srfaur', 'srkf', 'ss2des',
            'ss2ss', 'ss2tf', 'sscanf', 'sskf', 'ssprint', 'ssrand', 'st_deviation', 'st_ility', 'stabil', 'stacksize',
            'star', 'startup', 'stdev', 'stdevf', 'str2code', 'strange', 'strcat', 'strindex', 'string', 'stringbox',
            'strings', 'stripblanks', 'strong_con_nodes', 'strong_connex', 'strsplit', 'strsubst', 'struct', 'sub2ind',
            'subf', 'subgraph', 'subplot', 'successors', 'sum', 'supernode', 'surf', 'surface_properties', 'sva',
            'svd', 'svplot', 'sylm', 'sylv', 'symbols', 'sysconv', 'sysdiag', 'sysfact', 'syslin', 'syssize', 'system',
            'systems', 'systmat', 'tabul', 'tan', 'tangent', 'tanh', 'tanhm', 'tanm', 'TCL_CreateSlave', 'TCL_DeleteInterp',
            'TCL_EvalFile', 'TCL_EvalStr', 'TCL_ExistInterp', 'TCL_ExistVar', 'TCL_GetVar', 'TCL_GetVersion', 'TCL_SetVar',
            'TCL_UnsetVar', 'TCL_UpVar', 'tdinit', 'testmatrix', 'texprint', 'text_properties', 'tf2des', 'tf2ss', 'then',
            'thrownan', 'tic', 'tilda', 'time_id', 'timer', 'title', 'titlepage', 'TK_EvalFile', 'TK_EvalStr', 'tk_getdir',
            'tk_getfile', 'TK_GetVar', 'tk_savefile', 'TK_SetVar',  'toc', 'toeplitz', 'tohome', 'tokenpos',
            'tokens', 'toolbar', 'toprint', 'trace', 'trans', 'trans_closure', 'translatepaths', 'tree2code', 'trfmod',
            'trianfml', 'tril', 'trimmean', 'trisolve', 'triu', 'try', 'trzeros', 'twinkle', 'type', 'Type', 'typename',
            'typeof', 'ui_observer', 'uicontrol', 'uimenu', 'uint16', 'uint32', 'uint8', 'ulink', 'unglue', 'union',
            'unique', 'unix', 'unix_g', 'unix_s', 'unix_w', 'unix_x', 'unobs', 'unsetmenu', 'unzoom', 'user', 'varargin',
            'varargout', 'Variable', 'variance', 'variancef', 'varn', 'vectorfind', 'waitbar', 'warning', 'wavread',
            'wavwrite', 'wcenter', 'wfir', 'what', 'where', 'whereami', 'whereis', 'who', 'who_user', 'whos',
            'wiener', 'wigner', 'winclose', 'window', 'winlist', 'winopen', 'winqueryreg', 'winsid', 'with_atlas',
            'with_gtk', 'with_javasci', 'with_pvm', 'with_texmacs', 'with_tk', 'writb', 'write', 'write4b', 'x_choices',
            'x_choose', 'x_dialog', 'x_matrix', 'x_mdialog', 'x_message', 'x_message_modeless', 'xarc', 'xarcs', 'xarrows',
            'xaxis', 'xbasc', 'xbasimp', 'xbasr', 'xchange', 'xclea', 'xclear', 'xclick', 'xclip', 'xdel', 'xend',
            'xfarc', 'xfarcs', 'xfpoly', 'xfpolys', 'xfrect', 'xget', 'xgetech', 'xgetfile', 'xgetmouse', 'xgraduate',
            'xgrid', 'xinfo', 'xinit', 'xlfont', 'xload', 'xls_open', 'xls_read', 'xmltohtml', 'xname', 'xnumb', 'xpause',
            'xpoly', 'xpolys', 'xrect', 'xrects', 'xrpoly', 'xs2bmp', 'xs2emf', 'xs2eps', 'xs2fig', 'xs2gif', 'xs2ppm',
            'xs2ps', 'xsave', 'xsegs', 'xselect', 'xset', 'xsetech', 'xsetm', 'xstring', 'xstringb', 'xstringl', 'xtape',
            'xtitle', 'yulewalk', 'zeropen', 'zeros', 'zgrid', 'zoom_rect', 'zpbutt', 'zpch1', 'zpch2', 'zpell'
            )
        ),
    'SYMBOLS' => array(
        '<', '>', '=',
        '!', '@', '~', '&', '|',
        '+','-', '*', '/', '%',
        ',', ';', '?', ':', "'"
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => true,
        1 => true,
        2 => true,
        3 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => '',
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
            0 => 'color: #ff0000;',
            'HARD' => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;',
            2 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            0 => 'color: #0000ff;',
            4 => 'color: #009999;',
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => 'http://www.scilab.org/product/dic-mat-sci/M2SCI_doc.htm',
        2 => 'http://www.scilab.org/product/dic-mat-sci/M2SCI_doc.htm',
        3 => 'http://www.scilab.org/product/dic-mat-sci/M2SCI_doc.htm'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '-&gt;',
        2 => '::'
        ),
    'REGEXPS' => array(
        //Variable
        0 => '[\\$%@]+[a-zA-Z_][a-zA-Z0-9_]*',
        //File Descriptor
        4 => '&lt;[a-zA-Z_][a-zA-Z0-9_]*&gt;',
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>