<?php
/*************************************************************************************
 * latex.php
 * -----
 * Author: efi, Matthias Pospiech (matthias@pospiech.eu)
 * Copyright: (c) 2006 efi, Matthias Pospiech (matthias@pospiech.eu), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2006/09/23
 *
 * LaTeX language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/08/18 (1.0.8.1)
 *  - Changes in color and some additional command recognition
 *  - No special Color for Brackets, it is only distracting
 *    if color should be reintroduced it should be less bright
 *  - Math color changed from green to violett, since green is now used for comments
 *  - Comments are now colored and the only green. The reason for coloring the comments
 *    is that often important information is in the comments und was merely unvisible before.
 *  - New Color for [Options]
 *  - color for labels not specialised anymore. It makes sence in large documents but less in
 *    small web examples.
 *  - \@keyword introduced
 *  - Fixed \& escaped ampersand
 * 2006/09/23 (1.0.0)
 *  -  First Release
 *
 * TODO
 * -------------------------
 * *
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
    'LANG_NAME' => 'LaTeX',
    'COMMENT_SINGLE' => array(
        1 => '%'
        ),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'addlinespace','and','address','appendix','author','backmatter',
            'bfseries','bibitem','bigskip','blindtext','caption','captionabove',
            'captionbelow','cdot','centering','chapter','cite','color',
            'colorbox','date','dedication','def','definecolor','documentclass',
            'edef','else','email','emph','eqref','extratitle','fbox','fi',
            'flushleft','flushright','footnote','frac','frontmatter',
            'graphicspath','hfil','hfill','hfilll','hline','hspace','huge','ifx','include',
            'includegraphics','infty','input','int','item','itemsep',
            'KOMAoption','KOMAoptions','label','LaTeX','left','let','limits',
            'listfiles','listoffigures','listoftables','lowertitleback',
            'mainmatter','makeatletter','makeatother','makebox','makeindex',
            'maketitle','mbox','mediumskip','newcommand','newenvironment',
            'newpage','nocite','nonumber','pagestyle','par','paragraph',
            'parbox','parident','parskip','partial','publishers','raggedleft',
            'raggedright','raisebox','ref','renewcommand','renewenvironment',
            'right','rule','section','setlength','sffamily','subject',
            'subparagraph','subsection','subsubsection','subtitle','sum',
            'table','tableofcontents','textbf','textcolor','textit',
            'textnormal','textsuperscript','texttt','textwidth','thanks','title',
            'titlehead','today','ttfamily','uppertitleback','urlstyle',
            'usepackage','vfil','vfill','vfilll','vspace'
            )
        ),
    'SYMBOLS' => array(
        "&", "\\", "{", "}", "[", "]"
        ),
    'CASE_SENSITIVE' => array(
        1 => true,
        GESHI_COMMENTS => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #800000;',
            ),
        'COMMENTS' => array(
            1 => 'color: #2C922C; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 =>  'color: #000000; font-weight: bold;'
            ),
        'BRACKETS' => array(
            ),
        'STRINGS' => array(
            0 =>  'color: #000000;'
            ),
        'NUMBERS' => array(
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 =>  'color: #E02020; '
            ),
        'REGEXPS' => array(
            1 => 'color: #8020E0; font-weight: normal;',  // Math inner
            2 => 'color: #C08020; font-weight: normal;', // [Option]
            3 => 'color: #8020E0; font-weight: normal;', // Maths
            4 => 'color: #800000; font-weight: normal;', // Structure: Labels
            5 => 'color: #00008B; font-weight: bold;',  // Structure (\section{->x<-})
            6 => 'color: #800000; font-weight: normal;', // Structure (\section)
            7 => 'color: #0000D0; font-weight: normal;', // Environment \end or \begin{->x<-} (brighter blue)
            8 => 'color: #C00000; font-weight: normal;', // Structure \end or \begin
            9 => 'color: #2020C0; font-weight: normal;', // {...}
            10 => 'color: #800000; font-weight: normal;', // \%, \& etc.
            11 => 'color: #E00000; font-weight: normal;', // \@keyword
            12 => 'color: #800000; font-weight: normal;', // \keyword
        ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => 'http://www.golatex.de/wiki/index.php?title=%5C{FNAME}',
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        // Math inner
        1 => array(
            GESHI_SEARCH => "(\\\\begin\\{(equation|displaymath|eqnarray|subeqnarray|math|multline|gather|align|alignat|flalign)\\})(.*)(\\\\end\\{\\2\\})",
            GESHI_REPLACE => '\3',
            GESHI_MODIFIERS => 'Us',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => '\4'
            ),
        // [options]
        2 => array(
            GESHI_SEARCH => "(?<=\[).*(?=\])",
            GESHI_REPLACE => '\0',
            GESHI_MODIFIERS => 'Us',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        // Math mode with $ ... $
        3 => array(
            GESHI_SEARCH => "\\$.+\\$",
            GESHI_REPLACE => '\0',
            GESHI_MODIFIERS => 'Us',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        // Structure: Label
        4 => "\\\\(?:label|pageref|ref|cite)(?=[^a-zA-Z])",
        // Structure: sections
        5 => array(
            GESHI_SEARCH => "(\\\\(?:part|chapter|(?:sub){0,2}section|(?:sub)?paragraph|addpart|addchap|addsec)\*?\\{)(.*)(?=\\})",
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'U',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        // Structure: sections
        6 => "\\\\(?:part|chapter|(?:sub){0,2}section|(?:sub)?paragraph|addpart|addchap|addsec)\*?(?=[^a-zA-Z])",
        // environment \begin{} and \end{} (i.e. the things inside the {})
        7 => array(
            GESHI_SEARCH => "(\\\\(?:begin|end)\\{)(.*)(?=\\})",
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => 'U',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        // Structure \begin and \end
        8 => "\\\\(?:end|begin)(?=[^a-zA-Z])",
        // {parameters}
        9 => array(
            GESHI_SEARCH => "(?<=\\{)(?!<\|!REG3XP5!>).*?(?=\\})",
            GESHI_REPLACE => '\0',
            GESHI_MODIFIERS => 'Us',
            GESHI_BEFORE => '',
            GESHI_AFTER => ''
            ),
        // \%, \& usw.
        10 => "\\\\(?:[_$%]|&amp;)",
        //  \@keywords
        11 => "(?<!<\|!REG3XP[8]!>)\\\\@[a-zA-Z]+\*?",
        // \keywords
        12 => "(?<!<\|!REG3XP[468]!>)\\\\[a-zA-Z]+\*?",

// ---------------------------------------------
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'COMMENTS' => array(
            'DISALLOWED_BEFORE' => '\\'
        ),
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "(?<=\\\\)",
            'DISALLOWED_AFTER' => "(?![A-Za-z0-9])"
        ),
        'ENABLE_FLAGS' => array(
            'NUMBERS' => GESHI_NEVER,
            'BRACKETS' => GESHI_NEVER
        )
    )
);

?>