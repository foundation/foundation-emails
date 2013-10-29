<?php
/*************************************************************************************
 * parigp.php
 * --------
 * Author: Charles R Greathouse IV (charles@crg4.com)
 * Copyright: 2011 Charles R Greathouse IV (http://math.crg4.com/)
 * Release Version: 1.0.8.11
 * Date Started: 2011/05/11
 *
 * PARI/GP language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2011/07/09 (1.0.8.11)
 *  -  First Release
 *
 * TODO (updated 2011/07/09)
 * -------------------------
 *
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
    'LANG_NAME' => 'PARI/GP',
    'COMMENT_SINGLE' => array(1 => '\\\\'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'NUMBERS' => array(
        # Integers
        1 => GESHI_NUMBER_INT_BASIC,
        # Reals
        2 => GESHI_NUMBER_FLT_SCI_ZERO
        ),
    'KEYWORDS' => array(
        1 => array(
            'addprimes','bestappr','bezout','bezoutres','bigomega','binomial',
            'chinese','content','contfrac','contfracpnqn','core','coredisc',
            'dirdiv','direuler','dirmul','divisors','eulerphi','factor',
            'factorback','factorcantor','factorff','factorial','factorint',
            'factormod','ffgen','ffinit','fflog','fforder','ffprimroot',
            'fibonacci','gcd','hilbert','isfundamental','ispower','isprime',
            'ispseudoprime','issquare','issquarefree','kronecker','lcm',
            'moebius','nextprime','numbpart','numdiv','omega','partitions',
            'polrootsff','precprime','prime','primepi','primes','qfbclassno',
            'qfbcompraw','qfbhclassno','qfbnucomp','qfbnupow','qfbpowraw',
            'qfbprimeform','qfbred','qfbsolve','quadclassunit','quaddisc',
            'quadgen','quadhilbert','quadpoly','quadray','quadregulator',
            'quadunit','removeprimes','sigma','sqrtint','stirling',
            'sumdedekind','zncoppersmith','znlog','znorder','znprimroot',
            'znstar','Col','List','Mat','Mod','Pol','Polrev','Qfb','Ser','Set',
            'Str','Strchr','Strexpand','Strtex','Vec','Vecrev','Vecsmall',
            'binary','bitand','bitneg','bitnegimply','bitor','bittest','bitxor',
            'ceil','centerlift','component','conj','conjvec','denominator',
            'floor','frac','imag','length','lift','norm','norml2','numerator',
            'numtoperm','padicprec','permtonum','precision','random','real',
            'round','simplify','sizebyte','sizedigit','truncate','valuation',
            'variable','ellL1','elladd','ellak','ellan','ellanalyticrank',
            'ellap','ellbil','ellchangecurve','ellchangepoint','ellconvertname',
            'elldivpol','elleisnum','elleta','ellgenerators','ellglobalred',
            'ellgroup','ellheight','ellheightmatrix','ellidentify','ellinit',
            'ellisoncurve','ellj','elllocalred','elllog','elllseries',
            'ellminimalmodel','ellmodulareqn','ellorder','ellordinate',
            'ellpointtoz','ellpow','ellrootno','ellsearch','ellsigma','ellsub',
            'elltaniyama','elltatepairing','elltors','ellweilpairing','ellwp',
            'ellzeta','ellztopoint','bnfcertify','bnfcompress',
            'bnfdecodemodule','bnfinit','bnfisintnorm','bnfisnorm',
            'bnfisprincipal','bnfissunit','bnfisunit','bnfnarrow','bnfsignunit',
            'bnfsunit','bnrL1','bnrclassno','bnrclassnolist','bnrconductor',
            'bnrconductorofchar','bnrdisc','bnrdisclist','bnrinit',
            'bnrisconductor','bnrisprincipal','bnrrootnumber','bnrstark',
            'dirzetak','factornf','galoisexport','galoisfixedfield',
            'galoisgetpol','galoisidentify','galoisinit','galoisisabelian',
            'galoisisnormal','galoispermtopol','galoissubcyclo',
            'galoissubfields','galoissubgroups','idealadd','idealaddtoone',
            'idealappr','idealchinese','idealcoprime','idealdiv','idealfactor',
            'idealfactorback','idealfrobenius','idealhnf','idealintersect',
            'idealinv','ideallist','ideallistarch','ideallog','idealmin',
            'idealmul','idealnorm','idealpow','idealprimedec','idealramgroups',
            'idealred','idealstar','idealtwoelt','idealval','matalgtobasis',
            'matbasistoalg','modreverse','newtonpoly','nfalgtobasis','nfbasis',
            'nfbasistoalg','nfdetint','nfdisc','nfeltadd','nfeltdiv',
            'nfeltdiveuc','nfeltdivmodpr','nfeltdivrem','nfeltmod','nfeltmul',
            'nfeltmulmodpr','nfeltnorm','nfeltpow','nfeltpowmodpr',
            'nfeltreduce','nfeltreducemodpr','nfelttrace','nfeltval','nffactor',
            'nffactorback','nffactormod','nfgaloisapply','nfgaloisconj',
            'nfhilbert','nfhnf','nfhnfmod','nfinit','nfisideal','nfisincl',
            'nfisisom','nfkermodpr','nfmodprinit','nfnewprec','nfroots',
            'nfrootsof1','nfsnf','nfsolvemodpr','nfsubfields','polcompositum',
            'polgalois','polred','polredabs','polredord','poltschirnhaus',
            'rnfalgtobasis','rnfbasis','rnfbasistoalg','rnfcharpoly',
            'rnfconductor','rnfdedekind','rnfdet','rnfdisc','rnfeltabstorel',
            'rnfeltdown','rnfeltreltoabs','rnfeltup','rnfequation',
            'rnfhnfbasis','rnfidealabstorel','rnfidealdown','rnfidealhnf',
            'rnfidealmul','rnfidealnormabs','rnfidealnormrel',
            'rnfidealreltoabs','rnfidealtwoelt','rnfidealup','rnfinit',
            'rnfisabelian','rnfisfree','rnfisnorm','rnfisnorminit','rnfkummer',
            'rnflllgram','rnfnormgroup','rnfpolred','rnfpolredabs',
            'rnfpseudobasis','rnfsteinitz','subgrouplist','zetak','zetakinit',
            'plot','plotbox','plotclip','plotcolor','plotcopy','plotcursor',
            'plotdraw','ploth','plothraw','plothsizes','plotinit','plotkill',
            'plotlines','plotlinetype','plotmove','plotpoints','plotpointsize',
            'plotpointtype','plotrbox','plotrecth','plotrecthraw','plotrline',
            'plotrmove','plotrpoint','plotscale','plotstring','psdraw',
            'psploth','psplothraw','O','deriv','diffop','eval','factorpadic',
            'intformal','padicappr','padicfields','polchebyshev','polcoeff',
            'polcyclo','poldegree','poldisc','poldiscreduced','polhensellift',
            'polhermite','polinterpolate','polisirreducible','pollead',
            'pollegendre','polrecip','polresultant','polroots','polrootsmod',
            'polrootspadic','polsturm','polsubcyclo','polsylvestermatrix',
            'polsym','poltchebi','polzagier','serconvol','serlaplace',
            'serreverse','subst','substpol','substvec','taylor','thue',
            'thueinit','break','for','fordiv','forell','forprime','forstep',
            'forsubgroup','forvec','if','next','return','until','while',
            'Strprintf','addhelp','alarm','alias','allocatemem','apply',
            'default','error','extern','externstr','getheap','getrand',
            'getstack','gettime','global','input','install','kill','print1',
            'print','printf','printtex','quit','read','readvec','select',
            'setrand','system','trap','type','version','warning','whatnow',
            'write1','write','writebin','writetex','divrem','lex','max','min',
            'shift','shiftmul','sign','vecmax','vecmin','derivnum','intcirc',
            'intfouriercos','intfourierexp','intfouriersin','intfuncinit',
            'intlaplaceinv','intmellininv','intmellininvshort','intnum',
            'intnuminit','intnuminitgen','intnumromb','intnumstep','prod',
            'prodeuler','prodinf','solve','sum','sumalt','sumdiv','suminf',
            'sumnum','sumnumalt','sumnuminit','sumpos','Euler','I','Pi','abs',
            'acos','acosh','agm','arg','asin','asinh','atan','atanh','bernfrac',
            'bernreal','bernvec','besselh1','besselh2','besseli','besselj',
            'besseljh','besselk','besseln','cos','cosh','cotan','dilog','eint1',
            'erfc','eta','exp','gamma','gammah','hyperu','incgam','incgamc',
            'lngamma','log','polylog','psi','sin','sinh','sqr','sqrt','sqrtn',
            'tan','tanh','teichmuller','theta','thetanullk','weber','zeta',
            'algdep','charpoly','concat','lindep','listcreate','listinsert',
            'listkill','listpop','listput','listsort','matadjoint',
            'matcompanion','matdet','matdetint','matdiagonal','mateigen',
            'matfrobenius','mathess','mathilbert','mathnf','mathnfmod',
            'mathnfmodid','matid','matimage','matimagecompl','matindexrank',
            'matintersect','matinverseimage','matisdiagonal','matker',
            'matkerint','matmuldiagonal','matmultodiagonal','matpascal',
            'matrank','matrix','matrixqz','matsize','matsnf','matsolve',
            'matsolvemod','matsupplement','mattranspose','minpoly','qfgaussred',
            'qfjacobi','qflll','qflllgram','qfminim','qfperfection','qfrep',
            'qfsign','setintersect','setisset','setminus','setsearch','cmp',
            'setunion','trace','vecextract','vecsort','vector','vectorsmall',
            'vectorv','ellheegner'
            ),

        2 => array(
            'void','bool','negbool','small','int',/*'real',*/'mp','var','lg','pol',
            'vecsmall','vec','list','str','genstr','gen','typ'
            ),

        3 => array(
            'TeXstyle','breakloop','colors','compatible','datadir','debug',
            'debugfiles','debugmem','echo','factor_add_primes','factor_proven',
            'format','graphcolormap','graphcolors','help','histfile','histsize',
            'lines','linewrap',/*'log',*/'logfile','new_galois_format','output',
            'parisize','path','prettyprinter','primelimit','prompt_cont',
            'prompt','psfile','readline','realprecision','recover','secure',
            'seriesprecision',/*'simplify',*/'strictmatch','timer'
            ),

        4 => array(
            'alarmer','archer','errpile','gdiver','impl','syntaxer','invmoder',
            'overflower','talker','typeer','user'
            )
        ),
    'SYMBOLS' => array(
        1 => array(
            '(',')','{','}','[',']','+','-','*','/','%','=','<','>','!','^','&','|','?',';',':',',','\\','\''
            )
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
            1 => 'color: #0000ff;',
            2 => 'color: #e07022;',
            3 => 'color: #00d2d2;',
            4 => 'color: #00d2d2;'
            ),
        'COMMENTS' => array(
            1 => 'color: #008000;',
            'MULTI' => 'color: #008000;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #111111; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #002222;'
            ),
        'STRINGS' => array(
            0 => 'color: #800080;'
            ),
        'NUMBERS' => array(
            0 => 'color: #666666;',
            1 => 'color: #666666;',
            2 => 'color: #666666;'
            ),
        'METHODS' => array(
            0 => 'color: #004000;'
            ),
        'SYMBOLS' => array(
            1 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            0 => 'color: #e07022',    # Should be the same as keyword group 2
            1 => 'color: #555555'
            ),
        'SCRIPT' => array()
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        0 => array( # types marked on variables
            GESHI_SEARCH => '(?<!\\\\ )"(t_(?:INT|REAL|INTMOD|FRAC|FFELT|COMPLEX|PADIC|QUAD|POLMOD|POL|SER|RFRAC|QFR|QFI|VEC|COL|MAT|LIST|STR|VECSMALL|CLOSURE))"',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '"',
            GESHI_AFTER => '"'
            ),
        1 => array( # literal variables
            GESHI_SEARCH => '(?<!\\\\)(\'[a-zA-Z][a-zA-Z0-9_]*)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        2 => array(
            '[a-zA-Z][a-zA-Z0-9_]*:' => ''
            ),
        3 => array(
            'default(' => ''
            ),
        4 => array(
            'trap(' => ''
            ),
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array()
);

?>
