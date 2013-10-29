<?php
/*************************************************************************************
 * python.php
 * ----------
 * Author: Roberto Rossi (rsoftware@altervista.org)
 * Copyright: (c) 2004 Roberto Rossi (http://rsoftware.altervista.org), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/08/30
 *
 * Python language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/12/18
 *  -  Added missing functions and keywords. Also added two new Python 3.0 types. SF#2441839
 * 2005/05/26
 *  -  Modifications by Tim (tim@skreak.com): added more keyword categories, tweaked colors
 * 2004/11/27 (1.0.1)
 *  -  Added support for multiple object splitters
 * 2004/08/30 (1.0.0)
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

//This
require(dirname(__FILE__).'/python.php');

$language_data['LANG_NAME'] = 'Python (console mode)';

$language_data['STRICT_MODE_APPLIES'] = GESHI_ALWAYS;
$language_data['SCRIPT_DELIMITERS'][-1] = '/^(>>>).*?$(?:\n\.\.\..*?$)*($)/m';
$language_data['HIGHLIGHT_STRICT_BLOCK'][-1] = true;

$language_data['STYLES']['SCRIPT'][-1] = 'color: #222222;';

if(!isset($language_data['COMMENT_REGEXP'])) {
    $language_data['COMMENT_REGEXP'] = array();
}

$language_data['COMMENT_REGEXP'][-1] = '/(?:^|\A\s)(?:>>>|\.\.\.)/m';
$language_data['STYLES']['COMMENTS'][-1] = 'color: #444444;';

?>