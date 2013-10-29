<?php
/*************************************************************************************
 * octave.php
 * -----------
 * Author: Carnë Draug (carandraug+dev@gmail.com)
 *         Juan Pablo Carbajal (carbajal@ifi.uzh.ch)
 * Copyright: (c) 2012 Carnë Draug
 *            (c) 2012 Juan Pablo Carbajal
 * Release Version: 1.0.8.11
 * Date Started: 2012/05/22
 *
 * GNU Octave M-file language file for GeSHi.
 *
 * This file was heavily based on octave.lang from gtksourceview. If bugs are
 * found and/or fixed on this file, please send them to the gtksourceview
 * project or e-mail them to this file authors. Thanks in advance
 *
 * CHANGES
 * -------
 * 2012/05/22 (1.0.8.11)
 *   -  First Release
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
    'LANG_NAME' => 'GNU Octave',
    'COMMENT_SINGLE' => array(1 => '#', 2 => '%'),
    // we can't use COMMENT_MULTI since start and end of block comments need to
    // be alone on the line (optionally, with whitespace). See COMMENT_REGEXP
    'COMMENT_MULTI' => array(),
    // we can't use QUOTEMARKS, not even HARDQUOTE, see COMMENT_REGEXP
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'COMMENT_REGEXP' => array(
        // Single quote strings: we can't use QUOTEMARKS here since new
        // lines will break the string. Plus, single quote strings do not even
        // allow for continuation markers, only double quote strings allow it.
        // Also, to do not misdetect the transpose operator ' as the start of a
        // string we assert to not follow a variable name (letters, digits and
        // underscores) or a closing bracket (round, square or curly) or a dot
        // (to form the array transpose operator ".'" ).
        3 => "/(?<![0-9a-zA-Z_\)\]}\.])'.*?'/",
        // Double quote strings: we also can't use QUOTEMARKS here (see single
        // line quotes). However, with double quote strings both \ and ... can
        // be used to make multiline strings. Continuation markers can be
        // followed by whitespace
        4 => '/"(.|(\.\.\.|\\\)(\s)*?\n)*?(?<!\\\)"/',
        // Block comments: the ms modifiers treat strings as multiple lines (to
        // be able to use ^ and $ instead of newline and thus support block
        // comments on the first and last line of source) and make . also match
        // a newline
        5 => "/^\s*?[%#]{\s*?$.*?^\s*?[%#]}\s*?$/ms",
        // Packaging system: comes here so that pkg can also be used in the
        // function form. The list of pkg commands is optional to the match so
        // that at least pkg is highlighted if new commands are implemented
        6 => "/\bpkg(?!\s*\()\s+((un)?install|update|(un)?load|list|(global|local)_list|describe|prefix|(re)?build)?\b/",
        // Function handles
        7 => "/@([a-z_][a-z1-9_]*)?/i",
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC |
        GESHI_NUMBER_OCT_PREFIX |
        GESHI_NUMBER_HEX_PREFIX |
        GESHI_NUMBER_FLT_SCI_ZERO,
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'KEYWORDS' => array(
        // Data types
        1 => array(
            'cell', 'char', 'double', 'uint8', 'uint16', 'uint32', 'uint64',
            'int8','int16', 'int32', 'int64', 'logical', 'single', 'struct'
            ),
        // Storage type
        2 => array(
            'global', 'persistent', 'static'
            ),
        // Internal variable
        3 => array(
            'ans'
            ),
        // Reserved words
        4 => array(
            'break', 'case', 'catch', 'continue', 'do', 'else', 'elseif', 'end',
            'end_try_catch', 'end_unwind_protect', 'endfor', 'endfunction',
            'endif', 'endparfor', 'endswitch', 'endwhile', 'for', 'function',
            'if', 'otherwise', 'parfor', 'return',
            'switch', 'try', 'until', 'unwind_protect',
            'unwind_protect_cleanup', 'varargin', 'varargout', 'while'
            ),
        // Built in
        5 => array(
            'P_tmpdir', 'abs', 'acos', 'acosh',
            'add_input_event_hook', 'addlistener', 'addpath', 'addproperty',
            'all', 'allow_noninteger_range_as_index', 'and', 'angle', 'any',
            'arg', 'argnames', 'argv', 'asin', 'asinh', 'assignin', 'atan',
            'atan2', 'atanh', 'atexit', 'autoload', 'available_graphics_toolkits',
            'beep_on_error', 'bitand', 'bitmax', 'bitor', 'bitshift', 'bitxor',
            'builtin', 'canonicalize_file_name', 'cat', 'cbrt', 'cd', 'ceil',
            'cell2struct', 'cellstr', 'chdir', 'class', 'clc',
            'clear', 'columns', 'command_line_path', 'completion_append_char',
            'completion_matches', 'complex', 'confirm_recursive_rmdir', 'conj',
            'cos', 'cosh', 'cputime', 'crash_dumps_octave_core', 'ctranspose',
            'cumprod', 'cumsum', 'dbclear', 'dbcont', 'dbdown', 'dbnext',
            'dbquit', 'dbstack', 'dbstatus', 'dbstep', 'dbstop', 'dbtype', 'dbup',
            'dbwhere', 'debug_on_error', 'debug_on_interrupt', 'debug_on_warning',
            'default_save_options', 'dellistener', 'diag', 'diary', 'diff',
            'disp', 'do_braindead_shortcircuit_evaluation', 'do_string_escapes',
            'doc_cache_file', 'drawnow', 'dup2', 'echo',
            'echo_executing_commands', 'edit_history','eq', 'erf', 'erfc',
            'erfcx', 'erfinv', 'errno', 'errno_list', 'error', 'eval', 'evalin',
            'exec', 'exist', 'exit', 'exp', 'expm1', 'eye', 'fclear',
            'fclose', 'fcntl', 'fdisp', 'feof', 'ferror', 'feval', 'fflush',
            'fgetl', 'fgets', 'fieldnames', 'file_in_loadpath', 'file_in_path',
            'filemarker', 'filesep', 'find_dir_in_path', 'finite', 'fix',
            'fixed_point_format', 'floor', 'fmod', 'fnmatch', 'fopen', 'fork',
            'format', 'formula', 'fprintf', 'fputs', 'fread', 'freport',
            'frewind', 'fscanf', 'fseek', 'fskipl', 'ftell', 'full', 'func2str',
            'functions', 'fwrite', 'gamma', 'gammaln', 'ge', 'genpath', 'get',
            'get_help_text', 'get_help_text_from_file', 'getegid', 'getenv',
            'geteuid', 'getgid', 'gethostname', 'getpgrp', 'getpid', 'getppid',
            'getuid', 'glob', 'gt', 'history', 'history_control', 'history_file',
            'history_size', 'history_timestamp_format_string', 'home', 'horzcat',
            'hypot', 'ifelse', 'ignore_function_time_stamp', 'imag',
            'inferiorto', 'info_file', 'info_program', 'inline', 'input',
            'intmax', 'intmin', 'ipermute',
            'is_absolute_filename', 'is_dq_string', 'is_function_handle',
            'is_rooted_relative_filename', 'is_sq_string', 'isalnum', 'isalpha',
            'isargout', 'isascii', 'isbool', 'iscell', 'iscellstr', 'ischar',
            'iscntrl', 'iscomplex', 'isdebugmode', 'isdigit', 'isempty',
            'isfield', 'isfinite', 'isfloat', 'isglobal', 'isgraph', 'ishandle',
            'isieee', 'isindex', 'isinf', 'isinteger', 'iskeyword', 'islogical',
            'islower', 'ismatrix', 'ismethod', 'isna', 'isnan', 'isnull',
            'isnumeric', 'isobject', 'isprint', 'ispunct', 'isreal', 'issorted',
            'isspace', 'issparse', 'isstruct', 'isupper', 'isvarname', 'isxdigit',
            'kbhit', 'keyboard', 'kill', 'lasterr', 'lasterror', 'lastwarn',
            'ldivide', 'le', 'length', 'lgamma', 'link', 'linspace',
            'list_in_columns', 'load', 'loaded_graphics_toolkits', 'log', 'log10',
            'log1p', 'log2', 'lower', 'lstat', 'lt',
            'make_absolute_filename', 'makeinfo_program', 'max_recursion_depth',
            'merge', 'methods', 'mfilename', 'minus', 'mislocked',
            'missing_function_hook', 'mkdir', 'mkfifo', 'mkstemp', 'mldivide',
            'mlock', 'mod', 'more', 'mpower', 'mrdivide', 'mtimes', 'munlock',
            'nargin', 'nargout', 'native_float_format', 'ndims', 'ne',
            'nfields', 'nnz', 'norm', 'not', 'nth_element', 'numel', 'nzmax',
            'octave_config_info', 'octave_core_file_limit',
            'octave_core_file_name', 'octave_core_file_options',
            'octave_tmp_file_name', 'onCleanup', 'ones',
            'optimize_subsasgn_calls', 'or', 'output_max_field_width',
            'output_precision', 'page_output_immediately', 'page_screen_output',
            'path', 'pathsep', 'pause', 'pclose', 'permute', 'pipe', 'plus',
            'popen', 'popen2', 'power', 'print_empty_dimensions',
            'print_struct_array_contents', 'printf', 'prod',
            'program_invocation_name', 'program_name', 'putenv', 'puts', 'pwd',
            'quit', 'rats', 'rdivide', 're_read_readline_init_file',
            'read_readline_init_file', 'readdir', 'readlink', 'real', 'realmax',
            'realmin', 'register_graphics_toolkit', 'rehash', 'rem',
            'remove_input_event_hook', 'rename', 'repelems', 'reset', 'reshape',
            'resize', 'restoredefaultpath', 'rethrow', 'rmdir', 'rmfield',
            'rmpath', 'round', 'roundb', 'rows', 'run_history', 'save',
            'save_header_format_string', 'save_precision', 'saving_history',
            'scanf', 'set', 'setenv', 'sighup_dumps_octave_core', 'sign',
            'sigterm_dumps_octave_core', 'silent_functions', 'sin',
            'sinh', 'size', 'size_equal', 'sizemax', 'sizeof', 'sleep', 'sort',
            'source', 'spalloc', 'sparse', 'sparse_auto_mutate',
            'split_long_rows', 'sprintf', 'sqrt', 'squeeze', 'sscanf', 'stat',
            'stderr', 'stdin', 'stdout', 'str2func', 'strcmp', 'strcmpi',
            'string_fill_char', 'strncmp', 'strncmpi', 'struct2cell',
            'struct_levels_to_print', 'strvcat', 'subsasgn', 'subsref', 'sum',
            'sumsq', 'superiorto', 'suppress_verbose_help_message', 'symlink',
            'system', 'tan', 'tanh', 'terminal_size', 'tic', 'tilde_expand',
            'times', 'tmpfile', 'tmpnam', 'toascii', 'toc', 'tolower', 'toupper',
            'transpose', 'typeinfo',
            'umask', 'uminus', 'uname', 'undo_string_escapes', 'unlink',
            'uplus', 'upper', 'usage', 'usleep', 'vec', 'vectorize', 'vertcat',
            'waitfor', 'waitpid', 'warning', 'warranty', 'who', 'whos',
            'whos_line_format', 'yes_or_no', 'zeros'
            ),
        // Octave functions
        6 => array(
            'accumarray', 'accumdim', 'acosd', 'acot', 'acotd', 'acoth', 'acsc',
            'acscd', 'acsch', 'addpref', 'addtodate', 'allchild', 'amd',
            'ancestor', 'anova', 'arch_fit', 'arch_rnd', 'arch_test',
            'area', 'arma_rnd', 'asctime', 'asec', 'asecd', 'asech', 'asind',
            'assert', 'atand', 'autoreg_matrix', 'autumn',
            'axes', 'axis', 'balance', 'bar', 'barh', 'bartlett', 'bartlett_test',
            'base2dec', 'beep', 'bessel', 'besselj', 'beta', 'betacdf',
            'betainc', 'betainv', 'betaln', 'betapdf', 'betarnd', 'bicg',
            'bicgstab', 'bicubic', 'bin2dec', 'bincoeff', 'binocdf', 'binoinv',
            'binopdf', 'binornd', 'bitcmp', 'bitget', 'bitset', 'blackman',
            'blanks', 'blkdiag', 'bone', 'box', 'brighten', 'bsxfun',
            'bug_report', 'bunzip2', 'bzip2', 'calendar', 'cart2pol', 'cart2sph',
            'cast', 'cauchy_cdf', 'cauchy_inv', 'cauchy_pdf', 'cauchy_rnd',
            'caxis', 'ccolamd', 'cell2mat', 'celldisp', 'cellfun',
            'center', 'cgs', 'chi2cdf', 'chi2inv', 'chi2pdf', 'chi2rnd',
            'chisquare_test_homogeneity', 'chisquare_test_independence', 'chol',
            'chop', 'circshift', 'cla', 'clabel', 'clf', 'clock',
            'cloglog', 'close', 'closereq', 'colamd', 'colloc', 'colon',
            'colorbar', 'colormap', 'colperm', 'colstyle', 'comet', 'comet3',
            'comma', 'common_size', 'commutation_matrix', 'compan',
            'compare_versions', 'compass', 'computer', 'cond', 'condest',
            'contour', 'contour3', 'contourc', 'contourf', 'contrast', 'conv',
            'conv2', 'convhull', 'convhulln', 'cool', 'copper', 'copyfile',
            'cor_test', 'corr', 'cosd', 'cot', 'cotd', 'coth', 'cov',
            'cplxpair', 'cross', 'csc', 'cscd', 'csch', 'cstrcat',
            'csvread', 'csvwrite', 'ctime', 'cumtrapz', 'curl', 'cylinder',
            'daspect', 'daspk', 'dasrt', 'dassl', 'date', 'datenum', 'datestr',
            'datetick', 'datevec', 'dblquad', 'deal', 'deblank', 'debug',
            'dec2base', 'dec2bin', 'dec2hex', 'deconv', 'del2', 'delaunay',
            'delaunay3', 'delaunayn', 'delete', 'demo', 'det', 'detrend',
            'diffpara', 'diffuse', 'dir', 'discrete_cdf', 'discrete_inv',
            'discrete_pdf', 'discrete_rnd', 'display', 'divergence',
            'dlmread', 'dlmwrite', 'dmperm', 'doc', 'dos', 'dot', 'dsearch',
            'dsearchn', 'dump_prefs', 'duplication_matrix', 'durbinlevinson',
            'edit', 'eig', 'eigs', 'ellipsoid', 'empirical_cdf', 'empirical_inv',
            'empirical_pdf', 'empirical_rnd', 'eomday', 'errorbar',
            'etime', 'etreeplot', 'example', 'expcdf', 'expinv', 'expm', 'exppdf',
            'exprnd', 'ezcontour', 'ezcontourf', 'ezmesh', 'ezmeshc', 'ezplot',
            'ezplot3', 'ezpolar', 'ezsurf', 'ezsurfc', 'f_test_regression',
            'fact', 'factor', 'factorial', 'fail', 'fcdf', 'feather', 'fft',
            'fft2', 'fftconv', 'fftfilt', 'fftn', 'fftshift', 'fftw', 'figure',
            'fileattrib', 'fileparts', 'fileread', 'fill', 'filter', 'filter2',
            'find', 'findall', 'findobj', 'findstr', 'finv', 'flag', 'flipdim',
            'fliplr', 'flipud', 'fminbnd', 'fminunc', 'fpdf', 'fplot',
            'fractdiff', 'freqz', 'freqz_plot', 'frnd', 'fsolve',
            'fullfile', 'fzero', 'gamcdf', 'gaminv', 'gammainc',
            'gampdf', 'gamrnd', 'gca', 'gcbf', 'gcbo', 'gcd', 'gcf',
            'gen_doc_cache', 'genvarname', 'geocdf', 'geoinv', 'geopdf', 'geornd',
            'get_first_help_sentence', 'getappdata', 'getfield', 'getgrent',
            'getpref', 'getpwent', 'getrusage', 'ginput', 'givens', 'glpk',
            'gls', 'gmap40', 'gmres', 'gnuplot_binary', 'gplot',
            'gradient', 'graphics_toolkit', 'gray', 'gray2ind', 'grid',
            'griddata', 'griddata3', 'griddatan', 'gtext', 'guidata',
            'guihandles', 'gunzip', 'gzip', 'hadamard', 'hamming', 'hankel',
            'hanning', 'help', 'hess', 'hex2dec', 'hex2num', 'hggroup', 'hidden',
            'hilb', 'hist', 'histc', 'hold', 'hot', 'hotelling_test',
            'hotelling_test_2', 'housh', 'hsv', 'hsv2rgb', 'hurst', 'hygecdf',
            'hygeinv', 'hygepdf', 'hygernd', 'idivide', 'ifftshift', 'image',
            'imagesc', 'imfinfo', 'imread', 'imshow', 'imwrite', 'ind2gray',
            'ind2rgb', 'index', 'info', 'inpolygon', 'inputname', 'int2str',
            'interp1', 'interp1q', 'interp2', 'interp3', 'interpft', 'interpn',
            'intersect', 'inv', 'invhilb', 'iqr',
            'is_leap_year', 'is_valid_file_id',
            'isa', 'isappdata', 'iscolumn', 'isdefinite', 'isdeployed', 'isdir',
            'isequal', 'isequalwithequalnans', 'isfigure', 'ishermitian',
            'ishghandle', 'ishold', 'isletter', 'ismac', 'ismember', 'isocolors',
            'isonormals', 'isosurface', 'ispc', 'ispref', 'isprime', 'isprop',
            'isrow', 'isscalar', 'issquare', 'isstrprop', 'issymmetric',
            'isunix', 'isvector', 'jet', 'kendall', 'kolmogorov_smirnov_cdf',
            'kolmogorov_smirnov_test', 'kolmogorov_smirnov_test_2', 'kron',
            'kruskal_wallis_test', 'krylov', 'kurtosis', 'laplace_cdf',
            'laplace_inv', 'laplace_pdf', 'laplace_rnd', 'lcm', 'legend',
            'legendre', 'license', 'lin2mu', 'line', 'linkprop', 'list_primes',
            'loadaudio', 'loadobj', 'logistic_cdf', 'logistic_inv',
            'logistic_pdf', 'logistic_regression', 'logistic_rnd', 'logit',
            'loglog', 'loglogerr', 'logm', 'logncdf', 'logninv', 'lognpdf',
            'lognrnd', 'logspace', 'lookfor', 'lookup', 'ls', 'ls_command',
            'lsode', 'lsqnonneg', 'lu', 'luinc', 'magic', 'mahalanobis', 'manova',
            'mat2str', 'matlabroot', 'matrix_type', 'max', 'mcnemar_test',
            'md5sum', 'mean', 'meansq', 'median', 'menu', 'mesh', 'meshc',
            'meshgrid', 'meshz', 'mex', 'mexext', 'mgorth', 'mkoctfile', 'mkpp',
            'mode', 'moment', 'movefile', 'mpoles', 'mu2lin', 'namelengthmax',
            'nargchk', 'narginchk', 'nargoutchk', 'nbincdf', 'nbininv', 'nbinpdf',
            'nbinrnd', 'nchoosek', 'ndgrid', 'newplot', 'news', 'nextpow2',
            'nonzeros', 'normcdf', 'normest', 'norminv', 'normpdf', 'normrnd',
            'now', 'nproc', 'nthargout', 'nthroot', 'ntsc2rgb', 'null', 'num2str',
            'ocean', 'ols', 'onenormest', 'optimget', 'optimset', 'orderfields',
            'orient', 'orth', 'pack', 'paren', 'pareto', 'parseparams', 'pascal',
            'patch', 'pathdef', 'pbaspect', 'pcg', 'pchip', 'pcolor', 'pcr',
            'peaks', 'periodogram', 'perl', 'perms', 'pie', 'pie3',
            'pink', 'pinv', 'pkg', 'planerot', 'playaudio', 'plot', 'plot3',
            'plotmatrix', 'plotyy', 'poisscdf', 'poissinv', 'poisspdf',
            'poissrnd', 'pol2cart', 'polar', 'poly', 'polyaffine', 'polyarea',
            'polyder', 'polyfit', 'polygcd', 'polyint', 'polyout',
            'polyreduce', 'polyval', 'polyvalm', 'postpad', 'pow2', 'powerset',
            'ppder', 'ppint', 'ppjumps', 'ppplot', 'ppval', 'pqpnonneg',
            'prctile', 'prepad', 'primes', 'print', 'printAllBuiltins',
            'print_usage', 'prism', 'probit', 'profexplore', 'profile',
            'profshow', 'prop_test_2', 'python', 'qp', 'qqplot', 'qr', 'quad',
            'quadcc', 'quadgk', 'quadl', 'quadv', 'quantile', 'quiver', 'quiver3',
            'qz', 'qzhess', 'rainbow', 'rand', 'randi', 'range', 'rank', 'ranks',
            'rat', 'rcond', 'reallog', 'realpow', 'realsqrt', 'record',
            'rectangle', 'rectint', 'recycle', 'refresh', 'refreshdata', 'regexp',
            'regexptranslate', 'repmat', 'residue', 'rgb2hsv',
            'rgb2ind', 'rgb2ntsc', 'ribbon', 'rindex', 'rmappdata', 'rmpref',
            'roots', 'rose', 'rosser', 'rot90', 'rotdim', 'rref', 'run',
            'run_count', 'run_test', 'rundemos', 'runlength', 'runtests',
            'saveas', 'saveaudio', 'saveobj', 'savepath', 'scatter',
            'scatter3', 'schur', 'sec', 'secd', 'sech', 'semicolon', 'semilogx',
            'semilogxerr', 'semilogy', 'semilogyerr', 'setappdata', 'setaudio',
            'setdiff', 'setfield', 'setpref', 'setxor', 'shading',
            'shg', 'shift', 'shiftdim', 'sign_test', 'sinc', 'sind',
            'sinetone', 'sinewave', 'skewness', 'slice', 'sombrero', 'sortrows',
            'spaugment', 'spconvert', 'spdiags', 'spearman', 'spectral_adf',
            'spectral_xdf', 'specular', 'speed', 'spencer', 'speye', 'spfun',
            'sph2cart', 'sphere', 'spinmap', 'spline', 'spones', 'spparms',
            'sprand', 'sprandn', 'sprandsym', 'spring', 'spstats', 'spy', 'sqp',
            'sqrtm', 'stairs', 'statistics', 'std', 'stdnormal_cdf',
            'stdnormal_inv', 'stdnormal_pdf', 'stdnormal_rnd', 'stem', 'stem3',
            'stft', 'str2double', 'str2num', 'strcat', 'strchr',
            'strfind', 'strjust', 'strmatch', 'strread', 'strsplit', 'strtok',
            'strtrim', 'strtrunc', 'structfun', 'sub2ind',
            'subplot', 'subsindex', 'subspace', 'substr', 'substruct', 'summer',
            'surf', 'surface', 'surfc', 'surfl', 'surfnorm', 'svd', 'svds',
            'swapbytes', 'syl', 'symbfact', 'symrcm',
            'symvar', 'synthesis', 't_test', 't_test_2', 't_test_regression',
            'table', 'tand', 'tar', 'tcdf', 'tempdir', 'tempname', 'test', 'text',
            'textread', 'textscan', 'time', 'tinv', 'title', 'toeplitz', 'tpdf',
            'trace', 'trapz', 'treelayout', 'treeplot', 'tril', 'trimesh',
            'triplequad', 'triplot', 'trisurf', 'trnd', 'tsearch', 'tsearchn',
            'type', 'typecast', 'u_test', 'uicontextmenu', 'uicontrol',
            'uigetdir', 'uigetfile', 'uimenu', 'uipanel', 'uipushtool',
            'uiputfile', 'uiresume', 'uitoggletool', 'uitoolbar', 'uiwait',
            'unidcdf', 'unidinv', 'unidpdf', 'unidrnd', 'unifcdf', 'unifinv',
            'unifpdf', 'unifrnd', 'unimplemented', 'union', 'unique', 'unix',
            'unmkpp', 'unpack', 'untabify', 'untar', 'unwrap', 'unzip',
            'urlwrite', 'usejava', 'validatestring', 'vander', 'var',
            'var_test', 'vech', 'ver', 'version', 'view', 'voronoi', 'voronoin',
            'waitbar', 'waitforbuttonpress', 'warning_ids', 'wavread', 'wavwrite',
            'wblcdf', 'wblinv', 'wblpdf', 'wblrnd', 'weekday',
            'welch_test', 'what', 'which',
            'white', 'whitebg', 'wienrnd', 'wilcoxon_test', 'wilkinson', 'winter',
            'xlabel', 'xlim', 'xor', 'ylabel', 'ylim', 'yulewalker', 'z_test',
            'z_test_2', 'zip', 'zlabel', 'zlim', 'zscore', 'airy', 'arrayfun',
            'besselh', 'besseli', 'besselk', 'bessely', 'bitpack', 'bitunpack',
            'blkmm', 'cellindexmat', 'cellslices', 'chol2inv', 'choldelete',
            'cholinsert', 'cholinv', 'cholshift', 'cholupdate', 'convn',
            'csymamd', 'cummax', 'cummin', 'daspk_options', 'dasrt_options',
            'dassl_options', 'endgrent', 'endpwent', 'etree', 'getgrgid',
            'getgrnam', 'getpwnam', 'getpwuid', 'gmtime', 'gui_mode', 'ifft',
            'ifft2', 'ifftn', 'ind2sub', 'inverse', 'localtime', 'lsode_options',
            'luupdate', 'mat2cell', 'min', 'mktime', 'mouse_wheel_zoom',
            'num2cell', 'num2hex', 'qrdelete', 'qrinsert', 'qrshift', 'qrupdate',
            'quad_options', 'rande', 'randg', 'randn', 'randp', 'randperm',
            'regexpi', 'regexprep', 'rsf2csf', 'setgrent', 'setpwent', 'sprank',
            'strftime', 'strptime', 'strrep', 'svd_driver', 'symamd', 'triu',
            'urlread'
            ),
        // Private builtin
        7 => array(
            '__accumarray_max__', '__accumarray_min__', '__accumarray_sum__',
            '__accumdim_sum__', '__builtins__', '__calc_dimensions__',
            '__current_scope__', '__display_tokens__', '__dump_symtab_info__',
            '__end__', '__get__', '__go_axes__', '__go_axes_init__',
            '__go_delete__', '__go_execute_callback__', '__go_figure__',
            '__go_figure_handles__', '__go_handles__', '__go_hggroup__',
            '__go_image__', '__go_line__', '__go_patch__', '__go_surface__',
            '__go_text__', '__go_uicontextmenu__', '__go_uicontrol__',
            '__go_uimenu__', '__go_uipanel__', '__go_uipushtool__',
            '__go_uitoggletool__', '__go_uitoolbar__', '__gud_mode__',
            '__image_pixel_size__', '__is_handle_visible__', '__isa_parent__',
            '__keywords__', '__lexer_debug_flag__', '__list_functions__',
            '__operators__', '__parent_classes__', '__parser_debug_flag__',
            '__pathorig__', '__profiler_data__', '__profiler_enable__',
            '__profiler_reset__', '__request_drawnow__', '__sort_rows_idx__',
            '__token_count__', '__varval__', '__version_info__', '__which__'
        ),
        // Private Octave functions
        8 => array(
            '__all_opts__', '__contourc__', '__delaunayn__', '__dispatch__',
            '__dsearchn__', '__finish__', '__fltk_uigetfile__',
            '__glpk__', '__gnuplot_drawnow__', '__init_fltk__',
            '__init_gnuplot__', '__lin_interpn__', '__magick_read__',
            '__makeinfo__', '__pchip_deriv__', '__plt_get_axis_arg__', '__qp__',
            '__voronoi__', '__fltk_maxtime__', '__fltk_redraw__', '__ftp__',
            '__ftp_ascii__', '__ftp_binary__', '__ftp_close__', '__ftp_cwd__',
            '__ftp_delete__', '__ftp_dir__', '__ftp_mget__', '__ftp_mkdir__',
            '__ftp_mode__', '__ftp_mput__', '__ftp_pwd__', '__ftp_rename__',
            '__ftp_rmdir__', '__magick_finfo__', '__magick_format_list__',
            '__magick_write__'
            ),
        // Builtin Global Variables
        9 => array(
            'EDITOR', 'EXEC_PATH', 'F_DUPFD', 'F_GETFD', 'F_GETFL', 'F_SETFD',
            'F_SETFL', 'IMAGE_PATH', 'OCTAVE_HOME',
            'OCTAVE_VERSION', 'O_APPEND', 'O_ASYNC', 'O_CREAT', 'O_EXCL',
            'O_NONBLOCK', 'O_RDONLY', 'O_RDWR', 'O_SYNC', 'O_TRUNC', 'O_WRONLY',
            'PAGER', 'PAGER_FLAGS', 'PS1', 'PS2', 'PS4', 'SEEK_CUR', 'SEEK_END',
            'SEEK_SET', 'SIG', 'S_ISBLK', 'S_ISCHR', 'S_ISDIR', 'S_ISFIFO',
            'S_ISLNK', 'S_ISREG', 'S_ISSOCK', 'WCONTINUE', 'WCOREDUMP',
            'WEXITSTATUS', 'WIFCONTINUED', 'WIFEXITED', 'WIFSIGNALED',
            'WIFSTOPPED', 'WNOHANG', 'WSTOPSIG', 'WTERMSIG', 'WUNTRACED'
            ),
        // Constant functions
        10 => array (
            'e', 'eps', 'inf', 'Inf', 'nan', 'NaN', 'NA', 'pi', 'i', 'I', 'j',
            'J', 'true', 'false'
            ),
        ),
    'SYMBOLS' => array(
        // Comparison & logical
        0 => array(
            '!', '!=', '&', '&&','|', '||', '~', '~=',
            '<', '<=', '==', '>', '>='
            ),
        // Aritmethical
        1 => array(
            '*', '**', '+', '++', '-', '--', '/', "\\","'"
            ),
        // Elementwise arithmetical
        2 => array(
            '.*', '.**','./', '.^', '^',".\\",".'"
            ),
        // Arithmetical & assignation
        3 => array(
            '*=','+=','-=','/=','\=','**=','^=',
            '.*=','.+=','.-=','./=','.\=','.**=','.^=','='
            ),
        // Indexer
        4 => array(
            ':'
            ),
        // Delimiters
        5 => array(
            ',', '...', ';'
            ),
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => true,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true,
        7 => true,
        8 => true,
        9 => true,
        10 => true,
        ),
    'URLS' => array(
        1 => 'http://octave.sourceforge.net/octave/function/{FNAME}.html',
        2 => '',
        3 => '',
        4 => '',
        5 => 'http://octave.sourceforge.net/octave/function/{FNAME}.html',
        6 => 'http://octave.sourceforge.net/octave/function/{FNAME}.html',
        7 => '',
        8 => '',
        9 => 'http://octave.sourceforge.net/octave/function/{FNAME}.html',
        10 => 'http://octave.sourceforge.net/octave/function/{FNAME}.html',
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        ),
    'REGEXPS' => array(),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array(),
    'STYLES' => array(
        'COMMENTS' => array(
            1 => 'color: #0000FF; font-style: italic;', // single quote strings
            2 => 'color: #0000FF; font-style: italic;', // double quote strings
            3 => 'color: #FF00FF; font-style: italic;', // single quote strings
            4 => 'color: #FF00FF; font-style: italic;', // double quote strings
            5 => 'color: #0000FF; font-style: italic;', // block comments
            6 => 'color: #996600; font-weight:bold;',   // packaging system
            7 => 'color: #006600; font-weight:bold;',   // function handles
            'MULTI' => 'color: #0000FF; font-style: italic;',
            ),
        'KEYWORDS' => array(
            1 => 'color: #2E8B57; font-weight:bold;',   // Data types
            2 => 'color: #2E8B57;',                     // Storage type
            3 => 'color: #0000FF; font-weight:bold;',   // Internal variable
            4 => 'color: #990000; font-weight:bold;',   // Reserved words
            5 => 'color: #008A8C; font-weight:bold;',   // Built-in
            6 => 'color: #008A8C;',                     // Octave functions
            9 => 'color: #000000; font-weight:bold;',   // Builtin Global Variables
            10 => 'color: #008A8C; font-weight:bold;',  // Constant functions
            ),
        'ESCAPE_CHAR' => array(),
        'BRACKETS' => array(
            0 => 'color: #080;',
            ),
        'STRINGS' => array(
            // strings were specified on the COMMENT_REGEXP section
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #208080;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #208080;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color:#800080;',
            ),
        'METHODS' => array(),
        'SYMBOLS' => array(
            0 => 'color: #FF9696; font-weight:bold;',   // Comparison & logical
            1 => 'color: #CC0000; font-weight:bold;',   // Aritmethical
            2 => 'color: #993333; font-weight:bold;',   // Elementwise arithmetical
            3 => 'color: #FF0000; font-weight:bold;',   // Arithmetical & assignation
            4 => 'color: #33F;',                        // Indexer
            5 => 'color: #33F;',                        // Delimiters
            ),
        'REGEXPS' => array(),
        'SCRIPT' => array(),
        )
);

?>
