<?php
/*************************************************************************************
 * gnuplot.php
 * ----------
 * Author: Milian Wolff (mail@milianw.de)
 * Copyright: (c) 2008 Milian Wolff (http://milianw.de)
 * Release Version: 1.0.8.11
 * Date Started: 2008/07/07
 *
 * Gnuplot script language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/07/07 (1.0.8)
 *  -  Initial import
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
    'LANG_NAME' => 'Gnuplot',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('`', '"', "'"),
    'ESCAPE_CHAR' => '\\',
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC |
        GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_SCI_SHORT |
        GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        // copy output of help command, indent properly and use this replace regexp:
        // ([a-z0-9_\-]+)(( )+|$)          =>     '\1',\3

        // commands as found in `help commands`
        1 => array(
            'bind', 'call', 'cd', 'clear',
            'exit', 'fit', 'help', 'history',
            'if', 'load', 'lower', 'pause',
            'plot', 'print', 'pwd', 'quit',
            'raise', 'replot', 'reread', 'reset',
            'save', 'set', 'shell', 'show',
            'splot', 'system', 'test', 'unset',
            'update'
            ),
        2 => array(
            // set commands as returned by `help set`
            'angles', 'arrow', 'autoscale', 'bars',
            'bmargin', 'border', 'boxwidth', 'cbdata',
            'cbdtics', 'cblabel', 'cbmtics', 'cbrange',
            'cbtics', 'clabel', 'clip', 'cntrparam',
            'colorbox', 'contour', 'datafile', 'date_specifiers',
            'decimalsign', 'dgrid3d', 'dummy', 'encoding',
            'fontpath', 'format', 'grid',
            'hidden3d', 'historysize', 'isosamples', 'key',
            'label', 'lmargin', 'loadpath', 'locale',
            'log', 'logscale', 'macros', 'mapping',
            'margin', 'missing', 'mouse', 'multiplot',
            'mx2tics', 'mxtics', 'my2tics', 'mytics',
            'mztics', 'object', 'offsets', 'origin',
            'output', 'palette', 'parametric', 'pm3d',
            'pointsize', 'polar', 'rmargin',
            'rrange', 'samples', 'size', 'style',
            'surface', 'table', 'term', 'terminal',
            'termoption', 'tics', 'ticscale', 'ticslevel',
            'time_specifiers', 'timefmt', 'timestamp', 'title',
            'trange', 'urange', 'view',
            'vrange', 'x2data', 'x2dtics', 'x2label',
            'x2mtics', 'x2range', 'x2tics', 'x2zeroaxis',
            'xdata', 'xdtics', 'xlabel', 'xmtics',
            'xrange', 'xtics', 'xyplane', 'xzeroaxis',
            'y2data', 'y2dtics', 'y2label', 'y2mtics',
            'y2range', 'y2tics', 'y2zeroaxis', 'ydata',
            'ydtics', 'ylabel', 'ymtics', 'yrange',
            'ytics', 'yzeroaxis', 'zdata', 'zdtics',
            'zero', 'zeroaxis', 'zlabel', 'zmtics',
            'zrange', 'ztics', 'zzeroaxis',
            // same but with leading no
            'noangles', 'noarrow', 'noautoscale', 'nobars',
            'nobmargin', 'noborder', 'noboxwidth', 'nocbdata',
            'nocbdtics', 'nocblabel', 'nocbmtics', 'nocbrange',
            'nocbtics', 'noclabel', 'noclip', 'nocntrparam',
            'nocolorbox', 'nocontour', 'nodatafile', 'nodate_specifiers',
            'nodecimalsign', 'nodgrid3d', 'nodummy', 'noencoding',
            'nofit', 'nofontpath', 'noformat', 'nogrid',
            'nohidden3d', 'nohistorysize', 'noisosamples', 'nokey',
            'nolabel', 'nolmargin', 'noloadpath', 'nolocale',
            'nolog', 'nologscale', 'nomacros', 'nomapping',
            'nomargin', 'nomissing', 'nomouse', 'nomultiplot',
            'nomx2tics', 'nomxtics', 'nomy2tics', 'nomytics',
            'nomztics', 'noobject', 'nooffsets', 'noorigin',
            'nooutput', 'nopalette', 'noparametric', 'nopm3d',
            'nopointsize', 'nopolar', 'noprint', 'normargin',
            'norrange', 'nosamples', 'nosize', 'nostyle',
            'nosurface', 'notable', 'noterm', 'noterminal',
            'notermoption', 'notics', 'noticscale', 'noticslevel',
            'notime_specifiers', 'notimefmt', 'notimestamp', 'notitle',
            'notmargin', 'notrange', 'nourange', 'noview',
            'novrange', 'nox2data', 'nox2dtics', 'nox2label',
            'nox2mtics', 'nox2range', 'nox2tics', 'nox2zeroaxis',
            'noxdata', 'noxdtics', 'noxlabel', 'noxmtics',
            'noxrange', 'noxtics', 'noxyplane', 'noxzeroaxis',
            'noy2data', 'noy2dtics', 'noy2label', 'noy2mtics',
            'noy2range', 'noy2tics', 'noy2zeroaxis', 'noydata',
            'noydtics', 'noylabel', 'noymtics', 'noyrange',
            'noytics', 'noyzeroaxis', 'nozdata', 'nozdtics',
            'nozero', 'nozeroaxis', 'nozlabel', 'nozmtics',
            'nozrange', 'noztics', 'nozzeroaxis',
            ),
        3 => array(
            // predefined variables
            'pi', 'NaN', 'GNUTERM',
            'GPVAL_X_MIN', 'GPVAL_X_MAX', 'GPVAL_Y_MIN', 'GPVAL_Y_MAX',
            'GPVAL_TERM', 'GPVAL_TERMOPTIONS', 'GPVAL_OUTPUT',
            'GPVAL_VERSION', 'GPVAL_PATcHLEVEL', 'GPVAL_COMPILE_OPTIONS',
            'MOUSE_KEY', 'MOUSE_X', 'MOUSE_X2', 'MOUSE_Y', 'MOUSE_Y2',
            'MOUSE_BUTTON', 'MOUSE_SHIFT', 'MOUSE_ALT', 'MOUSE_CTRL'
            ),
        4 => array(
            // predefined functions `help functions`
            'abs', 'acos', 'acosh', 'arg',
            'asin', 'asinh', 'atan', 'atan2',
            'atanh', 'besj0', 'besj1', 'besy0',
            'besy1', 'ceil', 'column', 'cos',
            'cosh', 'defined', 'erf', 'erfc',
            'exists', 'exp', 'floor', 'gamma',
            'gprintf', 'ibeta', 'igamma', 'imag',
            'int', 'inverf', 'invnorm', 'lambertw',
            'lgamma', 'log10', 'norm',
            'rand', 'random', 'real', 'sgn',
            'sin', 'sinh', 'sprintf', 'sqrt',
            'stringcolumn', 'strlen', 'strstrt', 'substr',
            'tan', 'tanh', 'timecolumn',
            'tm_hour', 'tm_mday', 'tm_min', 'tm_mon',
            'tm_sec', 'tm_wday', 'tm_yday', 'tm_year',
            'valid', 'word', 'words',
            ),
        5 => array(
            // mixed arguments
            // there is no sane way to get these ones easily...
            'autofreq', 'x', 'y', 'z',
            'lt', 'linetype', 'lw', 'linewidth', 'ls', 'linestyle',
            'out', 'rotate by', 'screen',
            'enhanced', 'via',
            // `help set key`
            'on', 'off', 'default', 'inside', 'outside', 'tmargin',
            'at', 'left', 'right', 'center', 'top', 'bottom', 'vertical', 'horizontal', 'Left', 'Right',
            'noreverse', 'reverse', 'noinvert', 'invert', 'samplen', 'spacing', 'width', 'height',
            'noautotitle', 'autotitle', 'noenhanced', 'nobox', 'box',

            // help set terminal postscript
            'landscape', 'portrait', 'eps', 'defaultplex', 'simplex', 'duplex',
            'fontfile', 'add', 'delete', 'nofontfiles', 'level1', 'leveldefault',
            'color', 'colour', 'monochrome', 'solid', 'dashed', 'dashlength', 'dl',
            'rounded', 'butt', 'palfuncparam', 'blacktext', 'colortext', 'colourtext',
            'font',

            // help set terminal png
            'notransparent', 'transparent', 'nointerlace', 'interlace',
            'notruecolor', 'truecolor', 'tiny', 'small', 'medium', 'large', 'giant',
            'nocrop', 'crop',

            // `help plot`
            'acsplines', 'bezier', 'binary', 'csplines',
            'every',
            'example', 'frequency', 'index', 'matrix',
            'ranges', 'sbezier', 'smooth',
            'special-filenames', 'thru',
            'unique', 'using', 'with',

            // `help plotting styles`
            'boxerrorbars', 'boxes', 'boxxyerrorbars', 'candlesticks',
            'dots', 'errorbars', 'errorlines', 'filledcurves',
            'financebars', 'fsteps', 'histeps', 'histograms',
            'image', 'impulses', 'labels', 'lines',
            'linespoints', 'points', 'rgbimage', 'steps',
            'vectors', 'xerrorbars', 'xerrorlines', 'xyerrorbars',
            'xyerrorlines', 'yerrorbars', 'yerrorlines',


            // terminals `help terminals`
            'aed512', 'aed767', 'aifm', 'bitgraph',
            'cgm', 'corel', 'dumb', 'dxf',
            'eepic', 'emf', 'emtex', 'epslatex',
            'epson-180dpi', 'epson-60dpi', 'epson-lx800', 'fig',
            'gif', 'gpic', 'hp2623a', 'hp2648',
            'hp500c', 'hpdj', 'hpgl', 'hpljii',
            'hppj', 'imagen', 'jpeg', 'kc-tek40xx',
            'km-tek40xx', 'latex', 'mf', 'mif',
            'mp', 'nec-cp6', 'okidata', 'pbm',
            'pcl5', 'png', 'pop', 'postscript',
            'pslatex', 'pstex', 'pstricks', 'push',
            'qms', 'regis', 'selanar', 'starc',
            'svg', 'tandy-60dpi', 'tek40xx', 'tek410x',
            'texdraw', 'tgif', 'tkcanvas', 'tpic',
            'vttek', 'x11', 'xlib',
            )
        ),
    'REGEXPS' => array(
        //Variable assignment
        0 => "(?<![?;>\w])([a-zA-Z_][a-zA-Z0-9_]*)\s*=",
        //Numbers with unit
        1 => "(?<=^|\s)([0-9]*\.?[0-9]+\s*cm)"
        ),
    'SYMBOLS' => array(
        '-', '+', '~', '!', '$',
        '*', '/', '%', '=', '<', '>', '&',
        '^', '|', '.', 'eq', 'ne', '?:', ':', '`', ','
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #990000;',
            3 => 'color: #550000;',
            4 => 'color: #7a0874;',
            5 => 'color: #448888;'
            ),
        'COMMENTS' => array(
            1 => 'color: #adadad; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight:bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000099; font-weight:bold;'
            ),
        'STRINGS' => array(
            0 => 'color: #0000ff;',
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000; font-weight: bold;'
            ),
        'REGEXPS' => array(
            0 => 'color: #007800;',
            1 => 'color: #cc66cc;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => 'http://www.google.com/search?q=%22set+{FNAME}%22+site%3Ahttp%3A%2F%2Fwww.gnuplot.info%2Fdocs%2F&amp;btnI=lucky',
        3 => '',
        4 => '',
        5 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            4 => array(
                'DISALLOWED_AFTER' =>  "(?![\.\-a-zA-Z0-9_%])"
            )
        )
    ),
    'TAB_WIDTH' => 4
);

?>