<?php
/*************************************************************************************
 * asymptote.php
 * -------------
 * Author: Manuel Yguel (manuel.yguel.robotics@gmail.com)
 * Copyright: (c) 2012 Manuel Yguel (http://manuelyguel.eu)
 * Release Version: 1.0.8.11
 * Date Started: 2012/05/24
 *
 * asymptote language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2012/05/24 (1.0.0.0)
 *  -  First Release
 *
 * TODO (updated 2012/05/24)
 * -------------------------
 * * Split to several files - php4, php5 etc
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
 * ************************************************************************************/

$language_data = array(
    'LANG_NAME' => 'asymptote',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        //Multiline-continued single-line comments
        1 => '/\/\/(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //Multiline-continued preprocessor define
        2 => '/#(?:\\\\\\\\|\\\\\\n|.)*$/m'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[\\\\abfnrtv\'\"?\n]#i",
        //Hexadecimal Char Specs
        2 => "#\\\\x[\da-fA-F]{2}#",
        //Hexadecimal Char Specs
        3 => "#\\\\u[\da-fA-F]{4}#",
        //Hexadecimal Char Specs
        4 => "#\\\\U[\da-fA-F]{8}#",
        //Octal Char Specs
        5 => "#\\\\[0-7]{1,3}#"
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            'and','controls','tension','atleast','curl','if','else','while','for','do','return','break','continue','struct','typedef','new','access','import','unravel','from','include','quote','static','public','private','restricted','this','explicit','true','false','null','cycle','newframe','operator'
            ),
        2 => array(
            'Braid','FitResult','Label','Legend','Segment','Solution','TreeNode','abscissa','arc','arrowhead','binarytree','binarytreeNode','block','bool','bool3','bounds','bqe','circle','conic','coord','coordsys','cputime','ellipse','file','filltype','frame','grid3','guide','horner','hsv','hyperbola','indexedTransform','int','inversion','key','light','line','linefit','marginT','marker','mass','object','pair','parabola','path','path3','pen','picture','point','position','projection','real','revolution','scaleT','scientific','segment','side','slice','solution','splitface','string','surface','tensionSpecifier','ticklocate','ticksgridT','tickvalues','transform','transformation','tree','triangle','trilinear','triple','vector','vertex','void'),
        3 => array(
            'AND','Arc','ArcArrow','ArcArrows','Arrow','Arrows','Automatic','AvantGarde','BBox','BWRainbow','BWRainbow2','Bar','Bars','BeginArcArrow','BeginArrow','BeginBar','BeginDotMargin','BeginMargin','BeginPenMargin','Blank','Bookman','Bottom','BottomTop','Bounds','Break','Broken','BrokenLog','CLZ','CTZ','Ceil','Circle','CircleBarIntervalMarker','Cos','Courier','CrossIntervalMarker','DOSendl','DOSnewl','DefaultFormat','DefaultLogFormat','Degrees','Dir','DotMargin','DotMargins','Dotted','Draw','Drawline','Embed','EndArcArrow','EndArrow','EndBar','EndDotMargin','EndMargin','EndPenMargin','Fill','FillDraw','Floor','Format','Full','Gaussian','Gaussrand','Gaussrandpair',
            'Gradient','Grayscale','Helvetica','Hermite','HookHead','InOutTicks','InTicks','Jn','Label','Landscape','Left','LeftRight','LeftTicks','Legend','Linear','Link','Log','LogFormat','Margin','Margins','Mark','MidArcArrow','MidArrow','NOT','NewCenturySchoolBook','NoBox','NoMargin','NoModifier','NoTicks','NoTicks3','NoZero','NoZeroFormat','None','OR','OmitFormat','OmitTick','OmitTickInterval','OmitTickIntervals','OutTicks','Ox','Oy','Palatino','PaletteTicks','Pen','PenMargin','PenMargins','Pentype','Portrait','RadialShade','RadialShadeDraw','Rainbow','Range','Relative','Right','RightTicks','Rotate','Round','SQR','Scale','ScaleX','ScaleY','ScaleZ','Seascape','Segment','Shift','Sin','Slant','Spline','StickIntervalMarker','Straight','Symbol','Tan','TeXify','Ticks','Ticks3','TildeIntervalMarker','TimesRoman','Top','TrueMargin','UnFill','UpsideDown','Wheel','X','XEquals','XOR','XY','XYEquals','XYZero','XYgrid','XZEquals','XZZero','XZero','XZgrid','Y','YEquals','YXgrid','YZ','YZEquals','YZZero','YZero','YZgrid','Yn','Z','ZX','ZXgrid','ZYgrid','ZapfChancery','ZapfDingbats','_begingroup3','_cputime','_draw','_eval','_image','_labelpath','_projection','_strokepath','_texpath','aCos','aSin','aTan','abort','abs','accel','acos','acosh','acot','acsc','activatequote','add',
            'addArrow','addMargins','addSaveFunction','addpenarc','addpenline','adjust','alias','align','all','altitude','angabscissa','angle','angpoint','animate','annotate','anticomplementary','antipedal','apply','approximate','arc','arcarrowsize','arccircle','arcdir','arcfromcenter','arcfromfocus','arclength','arcnodesnumber','arcpoint','arcsubtended','arcsubtendedcenter','arctime','arctopath','array','arrow','arrow2','arrowbase','arrowbasepoints','arrowsize','asec','asin','asinh','ask','assert','asy','asycode','asydir','asyfigure','asyfilecode','asyinclude','asywrite','atan','atan2','atanh','atbreakpoint','atexit','attach','attract','atupdate','autoformat','autoscale','autoscale3','axes','axes3','axialshade','axis','axiscoverage','azimuth','babel','background','bangles','bar','barmarksize','barsize','basealign','baseline','bbox','beep','begin','beginclip','begingroup','beginpoint','between','bevel','bezier','bezierP','bezierPP','bezierPPP','bezulate','bibliography','bibliographystyle','binarytree','binarytreeNode','binomial','binput','bins','bisector','bisectorpoint','bispline','blend','blockconnector','boutput','box','bqe','breakpoint','breakpoints','brick','buildRestoreDefaults','buildRestoreThunk','buildcycle','bulletcolor','byte','calculateScaling','canonical','canonicalcartesiansystem','cartesiansystem','case1','case2','case3','case4','cbrt','cd','ceil','center','centerToFocus',
            'centroid','cevian','change2','changecoordsys','checkSegment','checkconditionlength','checker','checkincreasing','checklengths','checkposition','checktriangle','choose','circle','circlebarframe','circlemarkradius','circlenodesnumber','circumcenter','circumcircle','clamped','clear','clip','clipdraw','close','cmyk','code','colatitude','collect','collinear','color','colorless','colors','colorspace','comma','compassmark','complement','complementary','concat','concurrent','cone','conic','conicnodesnumber','conictype','conj','connect','connected','connectedindex','containmentTree','contains','contour','contour3','contouredges','controlSpecifier','convert','coordinates','coordsys','copy','copyPairOrTriple','cos','cosh','cot','countIntersections','cputime','crop','cropcode','cross',
            'crossframe','crosshatch','crossmarksize','csc','cubicroots','curabscissa','curlSpecifier','curpoint','currentarrow','currentexitfunction','currentmomarrow','currentpolarconicroutine','curve','cut','cutafter','cutbefore','cyclic','cylinder','deactivatequote','debugger','deconstruct','defaultdir','defaultformat','defaultpen','defined','degenerate','degrees','delete','deletepreamble','determinant','diagonal','diamond','diffdiv','dir','dirSpecifier','dirtime','display','distance',
            'divisors','do_overpaint','dot','dotframe','dotsize','downcase','draw','drawAll','drawDoubleLine','drawFermion','drawGhost','drawGluon','drawMomArrow','drawPRCcylinder','drawPRCdisk','drawPRCsphere','drawPRCtube','drawPhoton','drawScalar','drawVertex','drawVertexBox','drawVertexBoxO','drawVertexBoxX','drawVertexO','drawVertexOX','drawVertexTriangle','drawVertexTriangleO','drawVertexX','drawarrow','drawarrow2','drawline','drawpixel','drawtick','duplicate','elle','ellipse','ellipsenodesnumber','embed','embed3','empty','enclose','end','endScript','endclip','endgroup','endgroup3','endl','endpoint','endpoints','eof','eol','equation','equations','erase','erasestep','erf','erfc','error','errorbar','errorbars','eval','excenter','excircle','exit','exitXasyMode','exitfunction','exp','expfactors','expi','expm1','exradius','extend','extension','extouch','fabs','factorial','fermat','fft','fhorner','figure','file','filecode','fill','filldraw','filloutside','fillrule','filltype','find','finite','finiteDifferenceJacobian','firstcut','firstframe','fit','fit2','fixedscaling','floor','flush','fmdefaults','fmod','focusToCenter','font','fontcommand','fontsize','foot','format','frac','frequency','fromCenter','fromFocus','fspline','functionshade','gamma','generate_random_backtrace','generateticks','gergonne','getc','getint','getpair','getreal','getstring','gettriple','gluon','gouraudshade','graph','graphic','gray','grestore','grid','grid3','gsave','halfbox','hatch','hdiffdiv','hermite','hex','histogram','history','hline','hprojection',
            'hsv','hyperbola','hyperbolanodesnumber','hyperlink','hypot','identity','image','incenter','incentral','incircle','increasing','incrementposition','indexedTransform','indexedfigure','initXasyMode','initdefaults','input','inradius','insert','inside','integrate','interactive','interior','interp','interpolate','intersect','intersection','intersectionpoint','intersectionpoints','intersections','intouch','inverse','inversion','invisible','is3D','isCCW','isDuplicate','isogonal','isogonalconjugate','isotomic','isotomicconjugate','isparabola','italic','item','jobname','key','kurtosis','kurtosisexcess','label','labelaxis','labelmargin','labelpath','labels','labeltick','labelx','labelx3','labely','labely3','labelz','labelz3','lastcut','latex','latitude','latticeshade','layer','layout','ldexp','leastsquares','legend','legenditem','length','lexorder','lift','light','limits','line','linear','linecap','lineinversion','linejoin','linemargin','lineskip','linetype','linewidth','link','list','lm_enorm','lm_evaluate_default','lm_lmdif','lm_lmpar','lm_minimize','lm_print_default','lm_print_quiet','lm_qrfac','lm_qrsolv','locale','locate',
            'locatefile','location','log','log10','log1p','logaxiscoverage','longitude','lookup','makeNode','makedraw','makepen','map','margin','markangle','markangleradius','markanglespace','markarc','marker','markinterval','marknodes','markrightangle','markuniform','mass','masscenter','massformat','math','max','max3','maxAfterTransform','maxbezier','maxbound','maxcoords','maxlength','maxratio','maxtimes','mean','medial','median','midpoint','min','min3','minAfterTransform','minbezier','minbound','minipage','minratio','mintimes','miterlimit','mktemp','momArrowPath','momarrowsize','monotonic','multifigure','nativeformat','natural','needshipout','newl','newpage','newslide','newton','newtree','nextframe','nextnormal','nextpage','nib','nodabscissa','none','norm','normalvideo','notaknot','nowarn','numberpage','nurb','object','offset','onpath','opacity','opposite','orientation','origin','orthic','orthocentercenter','outformat','outline','outname','outprefix','output','overloadedMessage','overwrite','pack','pad','pairs','palette','parabola','parabolanodesnumber','parallel','parallelogram','partialsum','path','path3','pattern','pause','pdf','pedal','periodic','perp','perpendicular','perpendicularmark','phantom','phi1','phi2','phi3','photon','piecewisestraight','point','polar','polarconicroutine','polargraph','polygon','postcontrol','postscript','pow10','ppoint','prc','prc0','precision','precontrol','prepend','printBytecode','print_random_addresses','project','projection','purge','pwhermite','quadrant','quadraticroots','quantize','quarticroots','quotient','radialshade','radians','radicalcenter','radicalline','radius','rand','randompath','rd','readline','realmult','realquarticroots','rectangle','rectangular','rectify','reflect','relabscissa','relative','relativedistance','reldir','relpoint','reltime','remainder','remark','removeDuplicates','rename','replace','report','resetdefaultpen','restore','restoredefaults','reverse','reversevideo','rf','rfind','rgb','rgba','rgbint','rms',
            'rotate','rotateO','rotation','round','roundbox','roundedpath','roundrectangle','same','samecoordsys','sameside','sample','save','savedefaults','saveline','scale','scale3','scaleO','scaleT','scaleless','scientific','search','searchindex','searchtree','sec','secondaryX','secondaryY','seconds','section','sector','seek','seekeof','segment','sequence','setcontour','setpens','sgn','sgnd','sharpangle','sharpdegrees','shift','shiftless','shipout','shipout3','show','side','simeq','simpson','sin','sinh','size','size3','skewness','skip','slant','sleep','slope','slopefield','solve','solveBVP','sort','sourceline','sphere','split','sqrt','square','srand','standardizecoordsys','startScript','stdev','step','stickframe','stickmarksize','stickmarkspace','stop','straight','straightness','string','stripdirectory','stripextension','stripfile','stripsuffix','strokepath','subdivide','subitem','subpath','substr','sum','surface','symmedial','symmedian','system',
            'tab','tableau','tan','tangent','tangential','tangents','tanh','tell','tensionSpecifier','tensorshade','tex','texcolor','texify','texpath','texpreamble','texreset','texshipout','texsize','textpath','thick','thin','tick','tickMax','tickMax3','tickMin','tickMin3','ticklabelshift','ticklocate','tildeframe','tildemarksize','tile','tiling','time','times','title','titlepage','topbox','transform','transformation','transpose','trembleFuzz','triangle','triangleAbc','triangleabc','triangulate','tricoef','tridiagonal','trilinear','trim','truepoint','tube','uncycle','unfill','uniform','unique','unit','unitrand','unitsize','unityroot','unstraighten','upcase','updatefunction','uperiodic','upscale','uptodate','usepackage','usersetting','usetypescript','usleep','value','variance','variancebiased','vbox','vector','vectorfield','verbatim','view','vline','vperiodic','vprojection','warn','warning','windingnumber','write','xaxis','xaxis3','xaxis3At','xaxisAt','xequals','xinput','xlimits','xoutput','xpart','xscale','xscaleO','xtick','xtick3','xtrans','yaxis','yaxis3','yaxis3At','yaxisAt','yequals','ylimits','ypart','yscale','yscaleO','ytick','ytick3','ytrans','zaxis3','zaxis3At','zero','zero3','zlimits','zpart','ztick','ztick3','ztrans'
            ),
        4 => array(
            'AliceBlue','Align','Allow','AntiqueWhite','Apricot','Aqua','Aquamarine','Aspect','Azure','BeginPoint','Beige','Bisque','Bittersweet','Black','BlanchedAlmond','Blue','BlueGreen','BlueViolet','Both','Break','BrickRed','Brown','BurlyWood','BurntOrange','CCW','CW','CadetBlue','CarnationPink','Center','Centered','Cerulean','Chartreuse','Chocolate','Coeff','Coral','CornflowerBlue','Cornsilk','Crimson','Crop','Cyan','Dandelion','DarkBlue','DarkCyan','DarkGoldenrod','DarkGray','DarkGreen','DarkKhaki','DarkMagenta','DarkOliveGreen','DarkOrange','DarkOrchid','DarkRed','DarkSalmon','DarkSeaGreen','DarkSlateBlue','DarkSlateGray','DarkTurquoise','DarkViolet','DeepPink','DeepSkyBlue','DefaultHead','DimGray','DodgerBlue','Dotted','Down','Draw','E','ENE','EPS','ESE','E_Euler','E_PC','E_RK2','E_RK3BS','Emerald','EndPoint','Euler','Fill','FillDraw','FireBrick','FloralWhite','ForestGreen','Fuchsia','Gainsboro','GhostWhite','Gold','Goldenrod','Gray','Green','GreenYellow','Honeydew','HookHead','Horizontal','HotPink','I','IgnoreAspect','IndianRed','Indigo','Ivory','JOIN_IN','JOIN_OUT','JungleGreen','Khaki','LM_DWARF','LM_MACHEP','LM_SQRT_DWARF','LM_SQRT_GIANT','LM_USERTOL','Label','Lavender','LavenderBlush','LawnGreen','Left','LeftJustified','LeftSide','LemonChiffon','LightBlue','LightCoral','LightCyan','LightGoldenrodYellow',
            'LightGreen','LightGrey','LightPink','LightSalmon','LightSeaGreen','LightSkyBlue','LightSlateGray','LightSteelBlue','LightYellow','Lime','LimeGreen','Linear','Linen','Log','Logarithmic','Magenta','Mahogany','Mark','MarkFill','Maroon','Max','MediumAquamarine','MediumBlue','MediumOrchid','MediumPurple','MediumSeaGreen','MediumSlateBlue','MediumSpringGreen','MediumTurquoise','MediumVioletRed','Melon','MidPoint','MidnightBlue','Min','MintCream','MistyRose','Moccasin','Move','MoveQuiet','Mulberry','N','NE','NNE','NNW','NW','NavajoWhite','Navy','NavyBlue','NoAlign','NoCrop','NoFill','NoSide','OldLace','Olive','OliveDrab','OliveGreen','Orange','OrangeRed','Orchid','Ox','Oy','PC','PaleGoldenrod','PaleGreen','PaleTurquoise','PaleVioletRed','PapayaWhip','Peach','PeachPuff','Periwinkle','Peru','PineGreen','Pink','Plum','PowderBlue','ProcessBlue','Purple','RK2','RK3','RK3BS','RK4','RK5','RK5DP','RK5F','RawSienna','Red','RedOrange','RedViolet','Rhodamine','Right','RightJustified','RightSide','RosyBrown','RoyalBlue','RoyalPurple','RubineRed','S','SE','SSE','SSW','SW','SaddleBrown','Salmon','SandyBrown','SeaGreen','Seashell','Sepia','Sienna','Silver','SimpleHead','SkyBlue','SlateBlue','SlateGray','Snow','SpringGreen','SteelBlue','Suppress','SuppressQuiet','Tan','TeXHead','Teal','TealBlue','Thistle','Ticksize','Tomato',
            'Turquoise','UnFill','Up','VERSION','Value','Vertical','Violet','VioletRed','W','WNW','WSW','Wheat','White','WhiteSmoke','WildStrawberry','XYAlign','YAlign','Yellow','YellowGreen','YellowOrange','addpenarc','addpenline','align','allowstepping','angularsystem','animationdelay','appendsuffix','arcarrowangle','arcarrowfactor','arrow2sizelimit','arrowangle','arrowbarb','arrowdir','arrowfactor','arrowhookfactor','arrowlength','arrowsizelimit','arrowtexfactor','authorpen','axis','axiscoverage','axislabelfactor','background','backgroundcolor','backgroundpen','barfactor','barmarksizefactor','basealign','baselinetemplate','beveljoin','bigvertexpen','bigvertexsize','black','blue','bm','bottom','bp','brown','bullet','byfoci','byvertices','camerafactor','chartreuse','circlemarkradiusfactor','circlenodesnumberfactor','circleprecision','circlescale','cm','codefile','codepen','codeskip','colorPen','coloredNodes','coloredSegments',
            'conditionlength','conicnodesfactor','count','cputimeformat','crossmarksizefactor','currentcoordsys','currentlight','currentpatterns','currentpen','currentpicture','currentposition','currentprojection','curvilinearsystem','cuttings','cyan','darkblue','darkbrown','darkcyan','darkgray','darkgreen','darkgrey','darkmagenta','darkolive','darkred','dashdotted','dashed','datepen','dateskip','debuggerlines','debugging','deepblue','deepcyan','deepgray','deepgreen','deepgrey','deepmagenta','deepred','default','defaultControl','defaultS','defaultbackpen','defaultcoordsys','defaultexcursion','defaultfilename','defaultformat','defaultmassformat','defaultpen','diagnostics','differentlengths','dot','dotfactor','dotframe','dotted','doublelinepen','doublelinespacing','down','duplicateFuzz','edge','ellipsenodesnumberfactor','eps','epsgeo','epsilon','evenodd','expansionfactor','extendcap','exterior','fermionpen','figureborder','figuremattpen','file3','firstnode','firststep','foregroundcolor','fuchsia','fuzz','gapfactor','ghostpen','gluonamplitude','gluonpen','gluonratio','gray','green','grey','hatchepsilon','havepagenumber','heavyblue','heavycyan','heavygray','heavygreen','heavygrey','heavymagenta','heavyred','hline','hwratio','hyperbola','hyperbolanodesnumberfactor','identity4','ignore','inXasyMode','inch','inches','includegraphicscommand','inf','infinity','institutionpen','intMax','intMin','interior','invert','invisible','itempen','itemskip','itemstep','labelmargin','landscape','lastnode','left','legendhskip','legendlinelength',
            'legendmargin','legendmarkersize','legendmaxrelativewidth','legendvskip','lightblue','lightcyan','lightgray','lightgreen','lightgrey','lightmagenta','lightolive','lightred','lightyellow','line','linemargin','lm_infmsg','lm_shortmsg','longdashdotted','longdashed','magenta','magneticRadius','mantissaBits','markangleradius','markangleradiusfactor','markanglespace','markanglespacefactor','mediumblue','mediumcyan','mediumgray','mediumgreen','mediumgrey','mediummagenta','mediumred','mediumyellow','middle','minDistDefault','minblockheight','minblockwidth','mincirclediameter','minipagemargin','minipagewidth','minvertexangle','miterjoin','mm','momarrowfactor','momarrowlength','momarrowmargin','momarrowoffset','momarrowpen','monoPen','morepoints','nCircle','newbulletcolor','ngraph','nil','nmesh','nobasealign','nodeMarginDefault','nodesystem','nomarker','nopoint','noprimary','nullpath','nullpen','numarray','ocgindex','oldbulletcolor','olive','orange','origin','overpaint','page','pageheight','pagemargin','pagenumberalign','pagenumberpen','pagenumberposition','pagewidth','paleblue','palecyan','palegray','palegreen','palegrey',
            'palemagenta','palered','paleyellow','parabolanodesnumberfactor','perpfactor','phi','photonamplitude','photonpen','photonratio','pi','pink','plain','plain_bounds','plain_scaling','plus','preamblenodes','pt','purple','r3','r4a','r4b','randMax','realDigits','realEpsilon','realMax','realMin','red','relativesystem','reverse','right','roundcap','roundjoin','royalblue','salmon','saveFunctions','scalarpen','sequencereal','settings','shipped','signedtrailingzero','solid','springgreen','sqrtEpsilon','squarecap','squarepen','startposition','stdin','stdout','stepfactor','stepfraction','steppagenumberpen','stepping','stickframe','stickmarksizefactor','stickmarkspacefactor','swap','textpen','ticksize','tildeframe','tildemarksizefactor','tinv','titlealign','titlepagepen','titlepageposition','titlepen','titleskip','top','trailingzero','treeLevelStep','treeMinNodeWidth','treeNodeStep','trembleAngle','trembleFrequency','trembleRandom','undefined','unitcircle','unitsquare','up','urlpen','urlskip','version','vertexpen','vertexsize','viewportmargin','viewportsize','vline','white','wye','xformStack','yellow','ylabelwidth','zerotickfuzz','zerowinding'
            )
        ),
    'SYMBOLS' => array(
        0 => array(
            '(', ')', '{', '}', '[', ']'
            ),
        1 => array('<', '>','='),
        2 => array('+', '-', '*', '/', '%'),
        3 => array('!', '^', '&', '|'),
        4 => array('?', ':', ';'),
        5 => array('..')
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #990000;',
            4 => 'color: #009900; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666;',
            2 => 'color: #339900;',
            'MULTI' => 'color: #ff0000; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #660099; font-weight: bold;',
            3 => 'color: #660099; font-weight: bold;',
            4 => 'color: #660099; font-weight: bold;',
            5 => 'color: #006699; font-weight: bold;',
            'HARD' => '',
            ),
        'BRACKETS' => array(
            0 => 'color: #008000;'
            ),
        'STRINGS' => array(
            0 => 'color: #FF0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000dd;',
            GESHI_NUMBER_BIN_PREFIX_0B => 'color: #208080;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #208080;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #208080;',
            GESHI_NUMBER_FLT_SCI_SHORT => 'color:#800080;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI_F => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI => 'color:#800080;'
            ),
        'METHODS' => array(
            1 => 'color: #007788;',
            2 => 'color: #007788;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #008000;',
            1 => 'color: #000080;',
            2 => 'color: #000040;',
            3 => 'color: #000040;',
            4 => 'color: #008080;',
            5 => 'color: #009080;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "(?<![a-zA-Z0-9\$_\|\#])",
            'DISALLOWED_AFTER' => "(?![a-zA-Z0-9_\|%\\-])"
            )
        )
);

?>
