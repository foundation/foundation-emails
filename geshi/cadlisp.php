<?php
/*************************************************************************************
 * cadlisp.php
 * -----------
 * Author: Roberto Rossi (rsoftware@altervista.org)
 * Copyright: (c) 2004 Roberto Rossi (http://rsoftware.altervista.org), Nigel McNie (http://qbnz.com/blog)
 * Release Version: 1.0.8.11
 * Date Started: 2004/08/30
 *
 * AutoCAD/IntelliCAD Lisp language file for GeSHi.
 *
 * For AutoCAD V.12..2005 and IntelliCAD all versions.
 *
 * CHANGES
 * -------
 * 2004/11/27 (1.0.1)
 *  -  Added support for multiple object splitters
 * 2004/10/27 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/11/27)
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
    'LANG_NAME' => 'CAD Lisp',
    'COMMENT_SINGLE' => array(1 => ";"),
    'COMMENT_MULTI' => array(";|" => "|;"),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'abs','acad_colordlg','acad_helpdlg','acad_strlsort','action_tile',
            'add_list','alert','alloc','and','angle','angtof','angtos','append','apply',
            'arx','arxload','arxunload','ascii','assoc','atan','atof','atoi','atom',
            'atoms-family','autoarxload','autoload','Boole','boundp','caddr',
            'cadr','car','cdr','chr','client_data_tile','close','command','cond',
            'cons','cos','cvunit','defun','defun-q','defun-q-list-ref',
            'defun-q-list-set','dictadd','dictnext','dictremove','dictrename',
            'dictsearch','dimx_tile','dimy_tile','distance','distof','done_dialog',
            'end_image','end_list','entdel','entget','entlast','entmake',
            'entmakex','entmod','entnext','entsel','entupd','eq','equal','eval','exit',
            'exp','expand','expt','fill_image','findfile','fix','float','foreach','function',
            'gc','gcd','get_attr','get_tile','getangle','getcfg','getcname','getcorner',
            'getdist','getenv','getfiled','getint','getkword','getorient','getpoint',
            'getreal','getstring','getvar','graphscr','grclear','grdraw','grread','grtext',
            'grvecs','handent','help','if','initdia','initget','inters','itoa','lambda','last',
            'layoutlist','length','list','listp','load','load_dialog','log','logand','logior',
            'lsh','mapcar','max','mem','member','menucmd','menugroup','min','minusp','mode_tile',
            'namedobjdict','nentsel','nentselp','new_dialog','nil','not','nth','null',
            'numberp','open','or','osnap','polar','prin1','princ','print','progn','prompt',
            'quit','quote','read','read-char','read-line','redraw','regapp','rem','repeat',
            'reverse','rtos','set','set_tile','setcfg','setenv','setfunhelp','setq','setvar',
            'setview','sin','slide_image','snvalid','sqrt','ssadd','ssdel','ssget','ssgetfirst',
            'sslength','ssmemb','ssname','ssnamex','sssetfirst','start_dialog','start_image',
            'start_list','startapp','strcase','strcat','strlen','subst','substr','t','tablet',
            'tblnext','tblobjname','tblsearch','term_dialog','terpri','textbox','textpage',
            'textscr','trace','trans','type','unload_dialog','untrace','vector_image','ver',
            'vports','wcmatch','while','write-char','write-line','xdroom','xdsize','zerop',
            'vl-acad-defun','vl-acad-undefun','vl-arx-import','vlax-3D-point',
            'vlax-add-cmd','vlax-create-object','vlax-curve-getArea',
            'vlax-curve-getClosestPointTo','vlax-curve-getClosestPointToProjection',
            'vlax-curve-getDistAtParam','vlax-curve-getDistAtPoint',
            'vlax-curve-getEndParam','vlax-curve-getEndPoint',
            'vlax-curve-getFirstDeriv','vlax-curve-getParamAtDist',
            'vlax-curve-getParamAtPoint','vlax-curve-getPointAtDist',
            'vlax-curve-getPointAtParam','vlax-curve-getSecondDeriv',
            'vlax-curve-getStartParam','vlax-curve-getStartPoint',
            'vlax-curve-isClosed','vlax-curve-isPeriodic','vlax-curve-isPlanar',
            'vlax-dump-object','vlax-erased-p','vlax-for','vlax-get-acad-object',
            'vlax-get-object','vlax-get-or-create-object','vlax-get-property',
            'vlax-import-type-library','vlax-invoke-method','vlax-ldata-delete',
            'vlax-ldata-get','vlax-ldata-list','vlax-ldata-put','vlax-ldata-test',
            'vlax-make-safearray','vlax-make-variant','vlax-map-collection',
            'vlax-method-applicable-p','vlax-object-released-p','vlax-product-key',
            'vlax-property-available-p','vlax-put-property','vlax-read-enabled-p',
            'vlax-release-object','vlax-remove-cmd','vlax-safearray-fill',
            'vlax-safearray-get-dim','vlax-safearray-get-element',
            'vlax-safearray-get-l-bound','vlax-safearray-get-u-bound',
            'vlax-safearray-put-element','vlax-safearray-type','vlax-tmatrix',
            'vlax-typeinfo-available-p','vlax-variant-change-type',
            'vlax-variant-type','vlax-variant-value','vlax-write-enabled-p',
            'vl-bb-ref','vl-bb-set','vl-catch-all-apply','vl-catch-all-error-message',
            'vl-catch-all-error-p','vl-cmdf','vl-consp','vl-directory-files','vl-doc-export',
            'vl-doc-import','vl-doc-ref','vl-doc-set','vl-every','vl-exit-with-error',
            'vl-exit-with-value','vl-file-copy','vl-file-delete','vl-file-directory-p',
            'vl-filename-base','vl-filename-directory','vl-filename-extension',
            'vl-filename-mktemp','vl-file-rename','vl-file-size','vl-file-systime',
            'vl-get-resource','vlisp-compile','vl-list-exported-functions',
            'vl-list-length','vl-list-loaded-vlx','vl-load-all','vl-load-com',
            'vl-load-reactors','vl-member-if','vl-member-if-not','vl-position',
            'vl-prin1-to-string','vl-princ-to-string','vl-propagate','vlr-acdb-reactor',
            'vlr-add','vlr-added-p','vlr-beep-reaction','vlr-command-reactor',
            'vlr-current-reaction-name','vlr-data','vlr-data-set',
            'vlr-deepclone-reactor','vlr-docmanager-reactor','vlr-dwg-reactor',
            'vlr-dxf-reactor','vlr-editor-reactor','vl-registry-delete',
            'vl-registry-descendents','vl-registry-read','vl-registry-write',
            'vl-remove','vl-remove-if','vl-remove-if-not','vlr-insert-reactor',
            'vlr-linker-reactor','vlr-lisp-reactor','vlr-miscellaneous-reactor',
            'vlr-mouse-reactor','vlr-notification','vlr-object-reactor',
            'vlr-owner-add','vlr-owner-remove','vlr-owners','vlr-pers','vlr-pers-list',
            'vlr-pers-p','vlr-pers-release','vlr-reaction-names','vlr-reactions',
            'vlr-reaction-set','vlr-reactors','vlr-remove','vlr-remove-all',
            'vlr-set-notification','vlr-sysvar-reactor','vlr-toolbar-reactor',
            'vlr-trace-reaction','vlr-type','vlr-types','vlr-undo-reactor',
            'vlr-wblock-reactor','vlr-window-reactor','vlr-xref-reactor',
            'vl-some','vl-sort','vl-sort-i','vl-string-elt','vl-string-left-trim',
            'vl-string-mismatch','vl-string-position','vl-string-right-trim',
            'vl-string-search','vl-string-subst','vl-string-translate','vl-string-trim',
            'vl-symbol-name','vl-symbolp','vl-symbol-value','vl-unload-vlx','vl-vbaload',
            'vl-vbarun','vl-vlx-loaded-p'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']', '!', '%', '^', '&', '/','+','-','*','=','<','>'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
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
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
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
