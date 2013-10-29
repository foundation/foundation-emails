<?php
/*************************************************************************************
 * matlab.php
 * -----------
 * Author: Florian Knorn (floz@gmx.de)
 * Copyright: (c) 2004 Florian Knorn (http://www.florian-knorn.com)
 * Release Version: 1.0.8.11
 * Date Started: 2005/02/09
 *
 * Matlab M-file language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2006-03-25 (1.0.7.22)
 *   - support for the transpose operator
 *   - many keywords added
 *   - links to the matlab documentation at mathworks
 *      by: Olivier Verdier (olivier.verdier@free.fr)
 * 2005/05/07 (1.0.0)
 *   -  First Release
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

$language_data = array (
    'LANG_NAME' => 'Matlab M',
    'COMMENT_SINGLE' => array(1 => '%'),
    'COMMENT_MULTI' => array(),
    //Matlab Strings
    'COMMENT_REGEXP' => array(
        2 => "/(?<![\\w\\)\\]\\}\\.])('[^\\n']*?')/"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'break', 'case', 'catch', 'continue', 'elseif', 'else', 'end', 'for',
            'function', 'global', 'if', 'otherwise', 'persistent', 'return',
            'switch', 'try', 'while'
            ),
        2 => array(
            'all','any','exist','is','logical','mislocked',

            'abs','acos','acosh','acot','acoth','acsc','acsch','airy','angle',
            'ans','area','asec','asech','asin','asinh','atan','atan2','atanh',
            'auread','autumn','auwrite','axes','axis','balance','bar','bar3',
            'bar3h','barh','besselh','besseli','besselj','besselk','Bessely',
            'beta','betainc','betaln','bicg','bicgstab','bin2dec','bitand',
            'bitcmp','bitget','bitmax','bitor','bitset','bitshift','bitxor',
            'blkdiag','bone','box','brighten','builtin','bwcontr','calendar',
            'camdolly','camlight','camlookat','camorbit','campan','campos',
            'camproj','camroll','camtarget','camup','camva','camzoom','capture',
            'cart2pol','cart2sph','cat','caxis','cdf2rdf','ceil','cell',
            'cell2struct','celldisp','cellfun','cellplot','cellstr','cgs',
            'char','chol','cholinc','cholupdate','cla','clabel','class','clc',
            'clf','clg','clock','close','colmmd','colorbar','colorcube',
            'colordef','colormap','colperm','comet','comet3','compan','compass',
            'complex','computer','cond','condeig','condest','coneplot','conj',
            'contour','contourc','contourf','contourslice','contrast','conv',
            'conv2','convhull','cool','copper','copyobj','corrcoef','cos',
            'cosh','cot','coth','cov','cplxpair','cputime','cross','csc','csch',
            'cumprod','cumsum','cumtrapz','cylinder','daspect','date','datenum',
            'datestr','datetick','datevec','dbclear','dbcont','dbdown',
            'dblquad','dbmex','dbquit','dbstack','dbstatus','dbstep','dbstop',
            'dbtype','dbup','deblank','dec2bin','dec2hex','deconv','del2',
            'delaunay','det','diag','dialog','diff','diffuse','dlmread',
            'dlmwrite','dmperm','double','dragrect','drawnow','dsearch','eig',
            'eigs','ellipj','ellipke','eomday','eps','erf','erfc','erfcx',
            'erfiny','error','errorbar','errordlg','etime','eval','evalc',
            'evalin','exp','expint','expm','eye','ezcontour','ezcontourf',
            'ezmesh','ezmeshc','ezplot','ezplot3','ezpolar','ezsurf','ezsurfc',
            'factor','factorial','fclose','feather','feof','ferror','feval',
            'fft','fft2','fftshift','fgetl','fgets','fieldnames','figure',
            'fill','fill3','filter','filter2','find','findfigs','findobj',
            'findstr','fix','flag','flipdim','fliplr','flipud','floor','flops',
            'fmin','fmins','fopen','fplot','fprintf','fread','frewind','fscanf',
            'fseek','ftell','full','funm','fwrite','fzero','gallery','gamma',
            'gammainc','gammaln','gca','gcbo','gcd','gcf','gco','get',
            'getfield','ginput','gmres','gradient','gray','graymon','grid',
            'griddata','gsvd','gtext','hadamard','hankel','hdf','helpdlg',
            'hess','hex2dec','hex2num','hidden','hilb','hist','hold','hot',
            'hsv','hsv2rgb','i','ifft','ifft2','ifftn','ifftshift','imag',
            'image','imfinfo','imread','imwrite','ind2sub','Inf','inferiorto',
            'inline','inpolygon','input','inputdlg','inputname','int16',
            'int2str','int32','int8','interp1','interp2','interp3','interpft',
            'interpn','intersect','inv','invhilb','ipermute','isa','ishandle',
            'ismember','isocaps','isonormals','isosurface','j','jet','keyboard',
            'lcm','legend','legendre','light','lighting','lightingangle',
            'lin2mu','line','lines','linspace','listdlg','loadobj','log',
            'log10','log2','loglog','logm','logspace','lower','lscov','lu',
            'luinc','magic','mat2str','material','max','mean','median','menu',
            'menuedit','mesh','meshc','meshgrid','min','mod','msgbox','mu2lin',
            'NaN','nargchk','nargin','nargout','nchoosek','ndgrid','ndims',
            'newplot','nextpow2','nnls','nnz','nonzeros','norm','normest','now',
            'null','num2cell','num2str','nzmax','ode113,','ode15s,','ode23s,',
            'ode23t,','ode23tb','ode45,','odefile','odeget','odeset','ones',
            'orient','orth','pagedlg','pareto','pascal','patch','pause',
            'pbaspect','pcg','pcolor','peaks','perms','permute','pi','pie',
            'pie3','pinv','plot','plot3','plotmatrix','plotyy','pol2cart',
            'polar','poly','polyarea','polyder','polyeig','polyfit','polyval',
            'polyvalm','pow2','primes','print','printdlg','printopt','prism',
            'prod','propedit','qmr','qr','qrdelete','qrinsert','qrupdate',
            'quad','questdlg','quiver','quiver3','qz','rand','randn','randperm',
            'rank','rat','rats','rbbox','rcond','real','realmax','realmin',
            'rectangle','reducepatch','reducevolume','refresh','rem','repmat',
            'reset','reshape','residue','rgb2hsv','rgbplot','ribbon','rmfield',
            'roots','rose','rot90','rotate','rotate3d','round','rref',
            'rrefmovie','rsf2csf','saveobj','scatter','scatter3','schur',
            'script','sec','sech','selectmoveresize','semilogx','semilogy',
            'set','setdiff','setfield','setxor','shading','shg','shiftdim',
            'shrinkfaces','sign','sin','single','sinh','slice','smooth3','sort',
            'sortrows','sound','soundsc','spalloc','sparse','spconvert',
            'spdiags','specular','speye','spfun','sph2cart','sphere','spinmap',
            'spline','spones','spparms','sprand','sprandn','sprandsym','spring',
            'sprintf','sqrt','sqrtm','squeeze','sscanf','stairs','std','stem',
            'stem3','str2double','str2num','strcat','strcmp','strcmpi',
            'stream2','stream3','streamline','strings','strjust','strmatch',
            'strncmp','strrep','strtok','struct','struct2cell','strvcat',
            'sub2ind','subplot','subspace','subvolume','sum','summer',
            'superiorto','surf','surf2patch','surface','surfc','surfl',
            'surfnorm','svd','svds','symmmd','symrcm','symvar','tan','tanh',
            'texlabel','text Create','textread','textwrap','tic','title','toc',
            'toeplitz','trace','trapz','tril','trimesh','trisurf','triu',
            'tsearch','uicontext Create','uicontextmenu','uicontrol',
            'uigetfile','uimenu','uint32','uint8','uiputfile','uiresume',
            'uisetcolor','uisetfont','uiwait Used','union','unique','unwrap',
            'upper','var','varargin','varargout','vectorize','view','viewmtx',
            'voronoi','waitbar','waitforbuttonpress','warndlg','warning',
            'waterfall','wavread','wavwrite','weekday','whitebg','wilkinson',
            'winter','wk1read','wk1write','xlabel','xlim','ylabel','ylim',
            'zeros','zlabel','zlim','zoom',
            //'[Keywords 6]',
            'addpath','cd','clear','copyfile','delete','diary','dir','disp',
            'doc','docopt','echo','edit','fileparts','format','fullfile','help',
            'helpdesk','helpwin','home','inmem','lasterr','lastwarn','length',
            'load','lookfor','ls','matlabrc','matlabroot','mkdir','mlock',
            'more','munlock','open','openvar','pack','partialpath','path',
            'pathtool','profile','profreport','pwd','quit','rmpath','save',
            'saveas','size','tempdir','tempname','type','ver','version','web',
            'what','whatsnew','which','who','whos','workspace'
            )
        ),
    'SYMBOLS' => array(
        '...'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        //3 => false,
        //4 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF;',
            2 => 'color: #0000FF;'
            ),
        'COMMENTS' => array(
            1 => 'color: #228B22;',
            2 => 'color:#A020F0;'
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => 'color: #080;'
            ),
        'STRINGS' => array(
            //0 => 'color: #A020F0;'
            ),
        'NUMBERS' => array(
            0 => 'color: #33f;'
            ),
        'METHODS' => array(
            1 => '',
            2 => ''
            ),
        'SYMBOLS' => array(
            0 => 'color: #080;'
            ),
        'REGEXPS' => array(
            0 => 'color: #33f;'
            ),
        'SCRIPT' => array(
            0 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => 'http://www.mathworks.com/access/helpdesk/help/techdoc/ref/{FNAMEL}.html'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::'
        ),
    'REGEXPS' => array(
        //Complex numbers
        0 => '(?<![\\w\\/])[+-]?[\\d]*([\\d]\\.|\\.[\\d])?[\\d]*[ij](?![\\w]|\<DOT>html)'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>