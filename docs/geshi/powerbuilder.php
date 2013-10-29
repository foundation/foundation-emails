<?php
/*************************************************************************************
 * powerbuilder.php
 * ------
 * Author: Doug Porter (powerbuilder.geshi@gmail.com)
 * Copyright: (c) 2009 Doug Porter
 * Release Version: 1.0.8.11
 * Date Started: 2009/07/13
 *
 * PowerBuilder (PowerScript) language file for GeSHi.
 *
 * Based on the TextPad Syntax file for PowerBuilder
 * built by Rafi Avital
 *
 * CHANGES
 * -------
 * 2009/07/13 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2009/07/13)
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
    'LANG_NAME' => 'PowerBuilder',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '~',
    'KEYWORDS' => array(
        1 => array(
            'alias', 'and', 'autoinstantiate', 'call',
            'case', 'catch', 'choose', 'close', 'commit', 'connect',
            'constant', 'continue', 'create', 'cursor', 'declare',
            'delete', 'describe', 'descriptor', 'destroy', 'disconnect',
            'do', 'dynamic', 'else', 'elseif', 'end', 'enumerated',
            'event', 'execute', 'exit', 'external', 'false', 'fetch',
            'first', 'for', 'forward', 'from', 'function', 'global',
            'goto', 'halt', 'if', 'immediate', 'indirect', 'insert',
            'into', 'intrinsic', 'is', 'last', 'library', 'loop', 'next',
            'not', 'of', 'on', 'open', 'or', 'parent', 'post', 'prepare',
            'prior', 'private', 'privateread', 'privatewrite', 'procedure',
            'protected', 'protectedread', 'protectedwrite', 'prototypes',
            'public', 'readonly', 'ref', 'return', 'rollback', 'rpcfunc',
            'select', 'selectblob', 'shared', 'static', 'step', 'subroutine',
            'super', 'system', 'systemread', 'systemwrite', 'then', 'this',
            'to', 'trigger', 'true', 'try', 'type', 'until', 'update', 'updateblob',
            'using', 'variables', 'where', 'while', 'with', 'within'
            ),
        2 => array (
            'blob', 'boolean', 'char', 'character', 'date', 'datetime',
            'dec', 'decimal',
            'double', 'int', 'integer', 'long', 'real', 'string', 'time',
            'uint', 'ulong', 'unsignedint', 'unsignedinteger', 'unsignedlong'
            ),
        3 => array (
            'abortretryignore!', 'actbegin!', 'acterror!', 'actesql!',
            'actgarbagecollect!', 'activate!', 'activatemanually!',
            'activateondoubleclick!',
            'activateongetfocus!', 'actline!', 'actobjectcreate!', 'actobjectdestroy!',
            'actprofile!', 'actroutine!', 'acttrace!', 'actual!',
            'actuser!', 'adoresultset!', 'adtdate!', 'adtdatetime!',
            'adtdefault!', 'adtdouble!', 'adttext!', 'adttime!',
            'aix!', 'alignatbottom!', 'alignatleft!', 'alignatright!',
            'alignattop!', 'all!', 'allowpartialchanges!', 'alpha!',
            'ansi!', 'any!', 'anycase!', 'anyfont!',
            'append!', 'application!', 'arabiccharset!', 'area3d!',
            'areagraph!', 'arraybounds!', 'arrow!', 'ascending!',
            'asstatement!', 'atbottom!', 'atleft!', 'atright!',
            'attop!', 'autosize!', 'background!', 'balticcharset!',
            'bar3dgraph!', 'bar3dobjgraph!', 'bargraph!', 'barstack3dobjgraph!',
            'barstackgraph!', 'bdiagonal!', 'beam!', 'begin!',
            'begindrag!', 'beginlabeledit!', 'beginrightdrag!', 'behind!',
            'blob!', 'bold!', 'boolean!', 'bottom!',
            'boundedarray!', 'box!', 'byreferenceargument!', 'byvalueargument!',
            'cancel!', 'cascade!', 'cascaded!', 'category!',
            'center!', 'character!', 'charsetansi!', 'charsetansiarabic!',
            'charsetansihebrew!', 'charsetdbcsjapanese!', 'charsetunicode!', 'checkbox!',
            'child!', 'childtreeitem!', 'chinesebig5!', 'classdefinition!',
            'classdefinitionobject!', 'classorstructuretype!', 'clicked!', 'clip!',
            'clipboard!', 'clipformatbitmap!', 'clipformatdib!', 'clipformatdif!',
            'clipformatenhmetafile!', 'clipformathdrop!', 'clipformatlocale!',
            'clipformatmetafilepict!',
            'clipformatoemtext!', 'clipformatpalette!', 'clipformatpendata!', 'clipformatriff!',
            'clipformatsylk!', 'clipformattext!', 'clipformattiff!', 'clipformatunicodetext!',
            'clipformatwave!', 'clock!', 'close!', 'closequery!',
            'col3dgraph!', 'col3dobjgraph!', 'colgraph!',
            'colstack3dobjgraph!', 'colstackgraph!', 'columnclick!', 'commandbutton!',
            'connection!', 'connectioninfo!', 'connectobject!', 'connectprivilege!',
            'connectwithadminprivilege!', 'constructor!', 'containsany!', 'containsembeddedonly!',
            'containslinkedonly!', 'contextinformation!', 'contextkeyword!', 'continuous!',
            'corbaobject!', 'corbaunion!', 'cplusplus!', 'cross!',
            'csv!', 'cumulative!', 'cumulativepercent!', 'currenttreeitem!',
            'customvisual!', 'dash!', 'dashdot!', 'dashdotdot!',
            'data!', 'datachange!', 'datamodified!', 'datastore!',
            'datawindow!', 'datawindowchild!', 'date!', 'datemask!',
            'datetime!', 'datetimemask!', 'dbase2!', 'dbase3!',
            'dberror!', 'deactivate!', 'decimal!', 'decimalmask!',
            'decorative!', 'default!', 'defaultcharset!', 'delete!',
            'deleteallitems!', 'deleteitem!', 'descending!', 'desktop!',
            'destructor!', 'detail!', 'diamond!', 'dif!',
            'dirall!', 'dirapplication!', 'dirdatawindow!', 'directionall!',
            'directiondown!', 'directionleft!', 'directionright!', 'directionup!',
            'dirfunction!', 'dirmenu!', 'dirpipeline!', 'dirproject!',
            'dirquery!', 'dirstructure!', 'diruserobject!', 'dirwindow!',
            'displayasactivexdocument!', 'displayascontent!', 'displayasicon!', 'dot!',
            'double!', 'doubleclicked!', 'dragdrop!', 'dragenter!',
            'dragleave!', 'dragobject!', 'dragwithin!', 'drawobject!',
            'dropdownlistbox!', 'dropdownpicturelistbox!', 'drophighlighttreeitem!', 'dwobject!',
            'dynamicdescriptionarea!', 'dynamicstagingarea!', 'easteuropecharset!', 'editchanged!',
            'editmask!', 'editmenu!', 'end!', 'endlabeledit!',
            'enterprise!', 'enterpriseonlyfeature!', 'enumeratedtype!', 'enumerationdefinition!',
            'enumerationitemdefinition!', 'environment!', 'error!', 'errorlogging!',
            'eventnotexisterror!', 'eventwrongprototypeerror!', 'excel!', 'excel5!',
            'exceptionfail!', 'exceptionignore!', 'exceptionretry!',
            'exceptionsubstitutereturnvalue!',
            'exclamation!', 'exclude!', 'exportapplication!', 'exportdatawindow!',
            'exportfunction!', 'exportmenu!', 'exportpipeline!', 'exportproject!',
            'exportquery!', 'exportstructure!', 'exportuserobject!', 'exportwindow!',
            'externalvisual!', 'extobject!', 'failonanyconflict!', 'fdiagonal!',
            'featurenotsupportederror!', 'filealreadyopenerror!', 'filecloseerror!',
            'fileexists!',
            'fileinvalidformaterror!', 'filemenu!', 'filenotopenerror!', 'filenotseterror!',
            'filereaderror!', 'filetyperichtext!', 'filetypetext!', 'filewriteerror!',
            'filter!', 'first!', 'firstvisibletreeitem!', 'fixed!',
            'floating!', 'focusrect!', 'footer!', 'foreground!',
            'frombeginning!', 'fromcurrent!', 'fromend!', 'functionobject!',
            'gb231charset!', 'getfocus!', 'graph!', 'graphicobject!',
            'graxis!', 'grdispattr!', 'greekcharset!', 'groupbox!',
            'hand!', 'hangeul!', 'header!', 'hebrewcharset!',
            'helpmenu!', 'hide!', 'horizontal!', 'hotlinkalarm!',
            'hourglass!', 'hppa!', 'hprogressbar!', 'hpux!',
            'hscrollbar!', 'hticksonboth!', 'hticksonbottom!', 'hticksonneither!',
            'hticksontop!', 'htmltable!', 'htrackbar!', 'i286!',
            'i386!', 'i486!', 'icon!', 'icons!',
            'idle!', 'importdatawindow!', 'indent!', 'index!',
            'inet!', 'information!', 'inplace!', 'inputfieldselected!',
            'insertitem!', 'inside!', 'integer!', 'internetresult!',
            'italic!', 'itemchanged!', 'itemchanging!', 'itemcollapsed!',
            'itemcollapsing!', 'itemerror!', 'itemexpanded!', 'itemexpanding!',
            'itemfocuschanged!', 'itempopulate!', 'jaguarorb!', 'johabcharset!',
            'justify!', 'key!', 'key0!', 'key1!',
            'key2!', 'key3!', 'key4!', 'key5!',
            'key6!', 'key7!', 'key8!', 'key9!',
            'keya!', 'keyadd!', 'keyalt!', 'keyapps!',
            'keyb!', 'keyback!', 'keybackquote!', 'keybackslash!',
            'keyc!', 'keycapslock!', 'keycomma!', 'keycontrol!',
            'keyd!', 'keydash!', 'keydecimal!', 'keydelete!',
            'keydivide!', 'keydownarrow!', 'keye!', 'keyend!',
            'keyenter!', 'keyequal!', 'keyescape!', 'keyf!',
            'keyf1!', 'keyf10!', 'keyf11!', 'keyf12!',
            'keyf2!', 'keyf3!', 'keyf4!', 'keyf5!',
            'keyf6!', 'keyf7!', 'keyf8!', 'keyf9!',
            'keyg!', 'keyh!', 'keyhome!', 'keyi!',
            'keyinsert!', 'keyj!', 'keyk!', 'keyl!',
            'keyleftarrow!', 'keyleftbracket!', 'keyleftbutton!', 'keyleftwindows!',
            'keym!', 'keymiddlebutton!', 'keymultiply!', 'keyn!',
            'keynull!', 'keynumlock!', 'keynumpad0!', 'keynumpad1!',
            'keynumpad2!', 'keynumpad3!', 'keynumpad4!', 'keynumpad5!',
            'keynumpad6!', 'keynumpad7!', 'keynumpad8!', 'keynumpad9!',
            'keyo!', 'keyp!', 'keypagedown!', 'keypageup!',
            'keypause!', 'keyperiod!', 'keyprintscreen!', 'keyq!',
            'keyquote!', 'keyr!', 'keyrightarrow!', 'keyrightbracket!',
            'keyrightbutton!', 'keyrightwindows!', 'keys!', 'keyscrolllock!',
            'keysemicolon!', 'keyshift!', 'keyslash!', 'keyspacebar!',
            'keysubtract!', 'keyt!', 'keytab!', 'keyu!',
            'keyuparrow!', 'keyv!', 'keyw!', 'keyword!',
            'keyx!', 'keyy!', 'keyz!', 'languageafrikaans!',
            'languagealbanian!', 'languagearabicalgeria!', 'languagearabicbahrain!',
            'languagearabicegypt!',
            'languagearabiciraq!', 'languagearabicjordan!', 'languagearabickuwait!',
            'languagearabiclebanon!',
            'languagearabiclibya!', 'languagearabicmorocco!', 'languagearabicoman!',
            'languagearabicqatar!',
            'languagearabicsaudiarabia!', 'languagearabicsyria!', 'languagearabictunisia!',
            'languagearabicuae!',
            'languagearabicyemen!', 'languagebasque!', 'languagebulgarian!', 'languagebyelorussian!',
            'languagecatalan!', 'languagechinese!', 'languagechinesehongkong!', 'languagechinesesimplified!',
            'languagechinesesingapore!', 'languagechinesetraditional!', 'languagecroatian!', 'languageczech!',
            'languagedanish!', 'languagedutch!', 'languagedutchbelgian!', 'languagedutchneutral!',
            'languageenglish!', 'languageenglishaustralian!', 'languageenglishcanadian!',
            'languageenglishirish!',
            'languageenglishnewzealand!', 'languageenglishsouthafrica!', 'languageenglishuk!',
            'languageenglishus!',
            'languageestonian!', 'languagefaeroese!', 'languagefarsi!', 'languagefinnish!',
            'languagefrench!', 'languagefrenchbelgian!', 'languagefrenchcanadian!', 'languagefrenchluxembourg!',
            'languagefrenchneutral!', 'languagefrenchswiss!', 'languagegerman!', 'languagegermanaustrian!',
            'languagegermanliechtenstein!', 'languagegermanluxembourg!', 'languagegermanneutral!',
            'languagegermanswiss!',
            'languagegreek!', 'languagehebrew!', 'languagehindi!', 'languagehungarian!',
            'languageicelandic!', 'languageindonesian!', 'languageitalian!', 'languageitalianneutral!',
            'languageitalianswiss!', 'languagejapanese!', 'languagekorean!', 'languagekoreanjohab!',
            'languagelatvian!', 'languagelithuanian!', 'languagemacedonian!', 'languagemaltese!',
            'languageneutral!', 'languagenorwegian!', 'languagenorwegianbokmal!', 'languagenorwegiannynorsk!',
            'languagepolish!', 'languageportuguese!', 'languageportuguese_brazilian!',
            'languageportugueseneutral!',
            'languagerhaetoromanic!', 'languageromanian!', 'languageromanianmoldavia!', 'languagerussian!',
            'languagerussianmoldavia!', 'languagesami!', 'languageserbian!', 'languageslovak!',
            'languageslovenian!', 'languagesorbian!', 'languagesortnative!', 'languagesortunicode!',
            'languagespanish!', 'languagespanishcastilian!', 'languagespanishmexican!', 'languagespanishmodern!',
            'languagesutu!', 'languageswedish!', 'languagesystemdefault!', 'languagethai!',
            'languagetsonga!', 'languagetswana!', 'languageturkish!', 'languageukrainian!',
            'languageurdu!', 'languageuserdefault!', 'languagevenda!', 'languagexhosa!',
            'languagezulu!', 'last!', 'layer!', 'layered!',
            'Left!', 'leftmargin!', 'line!', 'line3d!',
            'linear!', 'linecolor!', 'linedown!', 'linegraph!',
            'lineleft!', 'linemode!', 'lineright!', 'lineup!',
            'linkupdateautomatic!', 'linkupdatemanual!', 'listbox!', 'listview!',
            'listviewitem!', 'listviewlargeicon!', 'listviewlist!', 'listviewreport!',
            'listviewsmallicon!', 'lockread!', 'lockreadwrite!', 'lockwrite!',
            'log10!', 'loge!', 'long!', 'losefocus!',
            'lower!', 'lowered!', 'm68000!', 'm68020!',
            'm68030!', 'm68040!', 'maccharset!', 'macintosh!',
            'mailattach!', 'mailbcc!', 'mailbodyasfile!', 'mailcc!',
            'maildownload!', 'mailentiremessage!', 'mailenvelopeonly!', 'mailfiledescription!',
            'mailmessage!', 'mailnewsession!', 'mailnewsessionwithdownload!', 'mailole!',
            'mailolestatic!', 'mailoriginator!', 'mailrecipient!', 'mailreturnaccessdenied!',
            'mailreturnattachmentnotfound!', 'mailreturnattachmentopenfailure!',
            'mailreturnattachmentwritefailure!', 'mailreturndiskfull!',
            'mailreturnfailure!', 'mailreturninsufficientmemory!', 'mailreturninvalidmessage!',
            'mailreturnloginfailure!',
            'mailreturnmessageinuse!', 'mailreturnnomessages!', 'mailreturnsuccess!', 'mailreturntexttoolarge!',
            'mailreturntoomanyfiles!', 'mailreturntoomanyrecipients!', 'mailreturntoomanysessions!',
            'mailreturnunknownrecipient!',
            'mailreturnuserabort!', 'mailsession!', 'mailsuppressattachments!', 'mailto!',
            'main!', 'maximized!', 'mdi!', 'mdiclient!',
            'mdihelp!', 'menu!', 'menucascade!', 'menuitemtypeabout!',
            'menuitemtypeexit!', 'menuitemtypehelp!', 'menuitemtypenormal!', 'merge!',
            'message!', 'minimized!', 'mips!', 'modelexistserror!',
            'modelnotexistserror!', 'modern!', 'modified!', 'mousedown!',
            'mousemove!', 'mouseup!', 'moved!', 'multiline!',
            'multilineedit!', 'mutexcreateerror!', 'new!', 'newmodified!',
            'next!', 'nexttreeitem!', 'nextvisibletreeitem!', 'noborder!',
            'noconnectprivilege!', 'nolegend!', 'none!', 'nonvisualobject!',
            'normal!', 'nosymbol!', 'notic!', 'notmodified!',
            'notopmost!', 'notype!', 'numericmask!', 'objhandle!',
            'oem!', 'off!', 'offsite!', 'ok!',
            'okcancel!', 'olecontrol!', 'olecustomcontrol!', 'oleobject!',
            'olestorage!', 'olestream!', 'oletxnobject!', 'omcontrol!',
            'omcustomcontrol!', 'omembeddedcontrol!', 'omobject!', 'omstorage!',
            'omstream!', 'open!', 'orb!', 'original!',
            'osf1!', 'other!', 'outside!', 'oval!',
            'pagedown!', 'pageleft!', 'pageright!', 'pageup!',
            'parenttreeitem!', 'pbtocppobject!', 'pentium!', 'percentage!',
            'picture!', 'picturebutton!', 'picturehyperlink!', 'picturelistbox!',
            'pictureselected!', 'pie3d!', 'piegraph!', 'pipeend!',
            'pipeline!', 'pipemeter!', 'pipestart!', 'popup!',
            'powerobject!', 'powerpc!', 'powerrs!', 'ppc601!',
            'ppc603!', 'ppc604!', 'previewdelete!', 'previewfunctionreselectrow!',
            'previewfunctionretrieve!', 'previewfunctionupdate!', 'previewinsert!', 'previewselect!',
            'previewupdate!', 'previoustreeitem!', 'previousvisibletreeitem!', 'primary!',
            'printend!', 'printfooter!', 'printheader!', 'printpage!',
            'printstart!', 'prior!', 'private!', 'process!',
            'profilecall!', 'profileclass!', 'profileline!', 'profileroutine!',
            'profiling!', 'protected!', 'psreport!', 'public!',
            'question!', 'radiobutton!', 'raised!', 'rbuttondown!',
            'rbuttonup!', 'read!', 'readonlyargument!', 'real!',
            'rectangle!', 'regbinary!', 'regexpandstring!', 'reglink!',
            'regmultistring!', 'regstring!', 'regulong!', 'regulongbigendian!',
            'remoteexec!', 'remotehotlinkstart!', 'remotehotlinkstop!', 'remoteobject!',
            'remoterequest!', 'remotesend!', 'rename!', 'replace!',
            'resize!', 'resizeborder!', 'response!', 'resultset!',
            'resultsets!', 'retrieveend!', 'retrieverow!', 'retrievestart!',
            'retrycancel!', 'richtextedit!', 'Right!', 'rightclicked!',
            'rightdoubleclicked!', 'rightmargin!', 'rnddays!', 'rnddefault!',
            'rndhours!', 'rndmicroseconds!', 'rndminutes!', 'rndmonths!',
            'rndnumber!', 'rndseconds!', 'rndyears!', 'roman!',
            'roottreeitem!', 'roundrectangle!', 'routineesql!', 'routineevent!',
            'routinefunction!', 'routinegarbagecollection!', 'routineobjectcreation!',
            'routineobjectdestruction!',
            'routineroot!', 'rowfocuschanged!', 'russiancharset!', 'save!',
            'scalartype!', 'scattergraph!', 'script!', 'scriptdefinition!',
            'scriptevent!', 'scriptfunction!', 'scrollhorizontal!', 'scrollvertical!',
            'selected!', 'selectionchanged!', 'selectionchanging!', 'series!',
            'service!', 'shade!', 'shadowbox!', 'shared!',
            'sharedobjectcreateinstanceerror!', 'sharedobjectcreatepbsessionerror!',
            'sharedobjectexistserror!', 'sharedobjectnotexistserror!',
            'shiftjis!', 'show!', 'simpletype!', 'simpletypedefinition!',
            'singlelineedit!', 'size!', 'sizenesw!', 'sizens!',
            'sizenwse!', 'sizewe!', 'sol2!', 'solid!',
            'sort!', 'sourcepblerror!', 'spacing1!', 'spacing15!',
            'spacing2!', 'sparc!', 'sqlinsert!', 'sqlpreview!',
            'square!', 'sslcallback!', 'sslserviceprovider!', 'statichyperlink!',
            'statictext!', 'stgdenynone!', 'stgdenyread!', 'stgdenywrite!',
            'stgexclusive!', 'stgread!', 'stgreadwrite!', 'stgwrite!',
            'stopsign!', 'straddle!', 'streammode!', 'stretch!',
            'strikeout!', 'string!', 'stringmask!', 'structure!',
            'stylebox!', 'stylelowered!', 'styleraised!', 'styleshadowbox!',
            'subscript!', 'success!', 'superscript!', 'swiss!',
            'sylk!', 'symbol!', 'symbolhollowbox!', 'symbolhollowcircle!',
            'symbolhollowdiamond!', 'symbolhollowdownarrow!', 'symbolhollowuparrow!', 'symbolplus!',
            'symbolsolidbox!', 'symbolsolidcircle!', 'symbolsoliddiamond!', 'symbolsoliddownarrow!',
            'symbolsoliduparrow!', 'symbolstar!', 'symbolx!', 'system!',
            'systemerror!', 'systemfunctions!', 'systemkey!', 'tab!',
            'tabsonbottom!', 'tabsonbottomandtop!', 'tabsonleft!', 'tabsonleftandright!',
            'tabsonright!', 'tabsonrightandleft!', 'tabsontop!', 'tabsontopandbottom!',
            'text!', 'thaicharset!', 'thread!', 'tile!',
            'tilehorizontal!', 'time!', 'timemask!', 'timer!',
            'timernone!', 'timing!', 'tobottom!', 'toolbarmoved!',
            'top!', 'topic!', 'topmost!', 'totop!',
            'traceactivitynode!', 'traceatomic!', 'tracebeginend!', 'traceerror!',
            'traceesql!', 'tracefile!', 'tracegarbagecollect!', 'tracegeneralerror!',
            'tracein!', 'traceline!', 'tracenomorenodes!', 'tracenotstartederror!',
            'traceobject!', 'traceout!', 'traceroutine!', 'tracestartederror!',
            'tracetree!', 'tracetreeerror!', 'tracetreeesql!', 'tracetreegarbagecollect!',
            'tracetreeline!', 'tracetreenode!', 'tracetreeobject!', 'tracetreeroutine!',
            'tracetreeuser!', 'traceuser!', 'transaction!', 'transactionserver!',
            'transparent!', 'transport!', 'treeview!', 'treeviewitem!',
            'turkishcharset!', 'typeboolean!', 'typecategory!', 'typecategoryaxis!',
            'typecategorylabel!', 'typedata!', 'typedate!', 'typedatetime!',
            'typedecimal!', 'typedefinition!', 'typedouble!', 'typegraph!',
            'typeinteger!', 'typelegend!', 'typelong!', 'typereal!',
            'typeseries!', 'typeseriesaxis!', 'typeserieslabel!', 'typestring!',
            'typetime!', 'typetitle!', 'typeuint!', 'typeulong!',
            'typeunknown!', 'typevalueaxis!', 'typevaluelabel!', 'ultrasparc!',
            'unboundedarray!', 'underline!', 'underlined!', 'unsignedinteger!',
            'unsignedlong!', 'unsorted!', 'uparrow!', 'updateend!',
            'updatestart!', 'upper!', 'userdefinedsort!', 'userobject!',
            'variable!', 'variableargument!', 'variablecardinalitydefinition!', 'variabledefinition!',
            'variableglobal!', 'variableinstance!', 'variablelocal!', 'variableshared!',
            'varlistargument!', 'vbxvisual!', 'vcenter!', 'vertical!',
            'vietnamesecharset!', 'viewchange!', 'vprogressbar!', 'vscrollbar!',
            'vticksonboth!', 'vticksonleft!', 'vticksonneither!', 'vticksonright!',
            'vtrackbar!', 'window!', 'windowmenu!', 'windowobject!',
            'windows!', 'windowsnt!', 'wk1!', 'wks!',
            'wmf!', 'write!', 'xpixelstounits!', 'xunitstopixels!',
            'xvalue!', 'yesno!', 'yesnocancel!', 'ypixelstounits!',
            'yunitstopixels!',
            'yvalue!',
            'zoom!'
            )
        ),
    'SYMBOLS' => array(
            0 => array('(', ')', '[', ']', '{', '}'),
            1 => array('|'),
            2 => array('+', '-', '*', '/'),
            3 => array('=', '&lt;', '>', '^')
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #008000; font-weight: bold;',
            2 => 'color: #990099; font-weight: bold;',
            3 => 'color: #330099; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #0000ff; font-weight: bold;',
            'MULTI' => 'color: #0000ff; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #800000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #330099; font-weight: bold;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000;',
            1 => 'color: #ffff00; background-color:#993300; font-weight: bold',
            2 => 'color: #000000;',
            3 => 'color: #000000;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #800000; font-weight: bold;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
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