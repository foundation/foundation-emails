<?php
/**
 * GeSHi - Generic Syntax Highlighter
 *
 * The GeSHi class for Generic Syntax Highlighting. Please refer to the
 * documentation at http://qbnz.com/highlighter/documentation.php for more
 * information about how to use this class.
 *
 * For changes, release notes, TODOs etc, see the relevant files in the docs/
 * directory.
 *
 *   This file is part of GeSHi.
 *
 *  GeSHi is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  GeSHi is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with GeSHi; if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @package    geshi
 * @subpackage core
 * @author     Nigel McNie <nigel@geshi.org>, Benny Baumann <BenBE@omorphia.de>
 * @copyright  (C) 2004 - 2007 Nigel McNie, (C) 2007 - 2008 Benny Baumann
 * @license    http://gnu.org/copyleft/gpl.html GNU GPL
 *
 */

//
// GeSHi Constants
// You should use these constant names in your programs instead of
// their values - you never know when a value may change in a future
// version
//

/** The version of this GeSHi file */
define('GESHI_VERSION', '1.0.8.11');

// Define the root directory for the GeSHi code tree
if (!defined('GESHI_ROOT')) {
    /** The root directory for GeSHi */
    define('GESHI_ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);
}
/** The language file directory for GeSHi
    @access private */
define('GESHI_LANG_ROOT', GESHI_ROOT . 'geshi' . DIRECTORY_SEPARATOR);

// Define if GeSHi should be paranoid about security
if (!defined('GESHI_SECURITY_PARANOID')) {
    /** Tells GeSHi to be paranoid about security settings */
    define('GESHI_SECURITY_PARANOID', false);
}

// Line numbers - use with enable_line_numbers()
/** Use no line numbers when building the result */
define('GESHI_NO_LINE_NUMBERS', 0);
/** Use normal line numbers when building the result */
define('GESHI_NORMAL_LINE_NUMBERS', 1);
/** Use fancy line numbers when building the result */
define('GESHI_FANCY_LINE_NUMBERS', 2);

// Container HTML type
/** Use nothing to surround the source */
define('GESHI_HEADER_NONE', 0);
/** Use a "div" to surround the source */
define('GESHI_HEADER_DIV', 1);
/** Use a "pre" to surround the source */
define('GESHI_HEADER_PRE', 2);
/** Use a pre to wrap lines when line numbers are enabled or to wrap the whole code. */
define('GESHI_HEADER_PRE_VALID', 3);
/**
 * Use a "table" to surround the source:
 *
 *  <table>
 *    <thead><tr><td colspan="2">$header</td></tr></thead>
 *    <tbody><tr><td><pre>$linenumbers</pre></td><td><pre>$code></pre></td></tr></tbody>
 *    <tfooter><tr><td colspan="2">$footer</td></tr></tfoot>
 *  </table>
 *
 * this is essentially only a workaround for Firefox, see sf#1651996 or take a look at
 * https://bugzilla.mozilla.org/show_bug.cgi?id=365805
 * @note when linenumbers are disabled this is essentially the same as GESHI_HEADER_PRE
 */
define('GESHI_HEADER_PRE_TABLE', 4);

// Capatalisation constants
/** Lowercase keywords found */
define('GESHI_CAPS_NO_CHANGE', 0);
/** Uppercase keywords found */
define('GESHI_CAPS_UPPER', 1);
/** Leave keywords found as the case that they are */
define('GESHI_CAPS_LOWER', 2);

// Link style constants
/** Links in the source in the :link state */
define('GESHI_LINK', 0);
/** Links in the source in the :hover state */
define('GESHI_HOVER', 1);
/** Links in the source in the :active state */
define('GESHI_ACTIVE', 2);
/** Links in the source in the :visited state */
define('GESHI_VISITED', 3);

// Important string starter/finisher
// Note that if you change these, they should be as-is: i.e., don't
// write them as if they had been run through htmlentities()
/** The starter for important parts of the source */
define('GESHI_START_IMPORTANT', '<BEGIN GeSHi>');
/** The ender for important parts of the source */
define('GESHI_END_IMPORTANT', '<END GeSHi>');

/**#@+
 *  @access private
 */
// When strict mode applies for a language
/** Strict mode never applies (this is the most common) */
define('GESHI_NEVER', 0);
/** Strict mode *might* apply, and can be enabled or
    disabled by {@link GeSHi->enable_strict_mode()} */
define('GESHI_MAYBE', 1);
/** Strict mode always applies */
define('GESHI_ALWAYS', 2);

// Advanced regexp handling constants, used in language files
/** The key of the regex array defining what to search for */
define('GESHI_SEARCH', 0);
/** The key of the regex array defining what bracket group in a
    matched search to use as a replacement */
define('GESHI_REPLACE', 1);
/** The key of the regex array defining any modifiers to the regular expression */
define('GESHI_MODIFIERS', 2);
/** The key of the regex array defining what bracket group in a
    matched search to put before the replacement */
define('GESHI_BEFORE', 3);
/** The key of the regex array defining what bracket group in a
    matched search to put after the replacement */
define('GESHI_AFTER', 4);
/** The key of the regex array defining a custom keyword to use
    for this regexp's html tag class */
define('GESHI_CLASS', 5);

/** Used in language files to mark comments */
define('GESHI_COMMENTS', 0);

/** Used to work around missing PHP features **/
define('GESHI_PHP_PRE_433', !(version_compare(PHP_VERSION, '4.3.3') === 1));

/** make sure we can call stripos **/
if (!function_exists('stripos')) {
    // the offset param of preg_match is not supported below PHP 4.3.3
    if (GESHI_PHP_PRE_433) {
        /**
         * @ignore
         */
        function stripos($haystack, $needle, $offset = null) {
            if (!is_null($offset)) {
                $haystack = substr($haystack, $offset);
            }
            if (preg_match('/'. preg_quote($needle, '/') . '/', $haystack, $match, PREG_OFFSET_CAPTURE)) {
                return $match[0][1];
            }
            return false;
        }
    }
    else {
        /**
         * @ignore
         */
        function stripos($haystack, $needle, $offset = null) {
            if (preg_match('/'. preg_quote($needle, '/') . '/', $haystack, $match, PREG_OFFSET_CAPTURE, $offset)) {
                return $match[0][1];
            }
            return false;
        }
    }
}

/** some old PHP / PCRE subpatterns only support up to xxx subpatterns in
    regular expressions. Set this to false if your PCRE lib is up to date
    @see GeSHi->optimize_regexp_list()
    **/
define('GESHI_MAX_PCRE_SUBPATTERNS', 500);
/** it's also important not to generate too long regular expressions
    be generous here... but keep in mind, that when reaching this limit we
    still have to close open patterns. 12k should do just fine on a 16k limit.
    @see GeSHi->optimize_regexp_list()
    **/
define('GESHI_MAX_PCRE_LENGTH', 12288);

//Number format specification
/** Basic number format for integers */
define('GESHI_NUMBER_INT_BASIC', 1);        //Default integers \d+
/** Enhanced number format for integers like seen in C */
define('GESHI_NUMBER_INT_CSTYLE', 2);       //Default C-Style \d+[lL]?
/** Number format to highlight binary numbers with a suffix "b" */
define('GESHI_NUMBER_BIN_SUFFIX', 16);           //[01]+[bB]
/** Number format to highlight binary numbers with a prefix % */
define('GESHI_NUMBER_BIN_PREFIX_PERCENT', 32);   //%[01]+
/** Number format to highlight binary numbers with a prefix 0b (C) */
define('GESHI_NUMBER_BIN_PREFIX_0B', 64);        //0b[01]+
/** Number format to highlight octal numbers with a leading zero */
define('GESHI_NUMBER_OCT_PREFIX', 256);           //0[0-7]+
/** Number format to highlight octal numbers with a prefix 0o (logtalk) */
define('GESHI_NUMBER_OCT_PREFIX_0O', 512);           //0[0-7]+
/** Number format to highlight octal numbers with a leading @ (Used in HiSofts Devpac series). */
define('GESHI_NUMBER_OCT_PREFIX_AT', 1024);           //@[0-7]+
/** Number format to highlight octal numbers with a suffix of o */
define('GESHI_NUMBER_OCT_SUFFIX', 2048);           //[0-7]+[oO]
/** Number format to highlight hex numbers with a prefix 0x */
define('GESHI_NUMBER_HEX_PREFIX', 4096);           //0x[0-9a-fA-F]+
/** Number format to highlight hex numbers with a prefix $ */
define('GESHI_NUMBER_HEX_PREFIX_DOLLAR', 8192);           //$[0-9a-fA-F]+
/** Number format to highlight hex numbers with a suffix of h */
define('GESHI_NUMBER_HEX_SUFFIX', 16384);           //[0-9][0-9a-fA-F]*h
/** Number format to highlight floating-point numbers without support for scientific notation */
define('GESHI_NUMBER_FLT_NONSCI', 65536);          //\d+\.\d+
/** Number format to highlight floating-point numbers without support for scientific notation */
define('GESHI_NUMBER_FLT_NONSCI_F', 131072);       //\d+(\.\d+)?f
/** Number format to highlight floating-point numbers with support for scientific notation (E) and optional leading zero */
define('GESHI_NUMBER_FLT_SCI_SHORT', 262144);      //\.\d+e\d+
/** Number format to highlight floating-point numbers with support for scientific notation (E) and required leading digit */
define('GESHI_NUMBER_FLT_SCI_ZERO', 524288);       //\d+(\.\d+)?e\d+
//Custom formats are passed by RX array

// Error detection - use these to analyse faults
/** No sourcecode to highlight was specified
 * @deprecated
 */
define('GESHI_ERROR_NO_INPUT', 1);
/** The language specified does not exist */
define('GESHI_ERROR_NO_SUCH_LANG', 2);
/** GeSHi could not open a file for reading (generally a language file) */
define('GESHI_ERROR_FILE_NOT_READABLE', 3);
/** The header type passed to {@link GeSHi->set_header_type()} was invalid */
define('GESHI_ERROR_INVALID_HEADER_TYPE', 4);
/** The line number type passed to {@link GeSHi->enable_line_numbers()} was invalid */
define('GESHI_ERROR_INVALID_LINE_NUMBER_TYPE', 5);
/**#@-*/


/**
 * The GeSHi Class.
 *
 * Please refer to the documentation for GeSHi 1.0.X that is available
 * at http://qbnz.com/highlighter/documentation.php for more information
 * about how to use this class.
 *
 * @package   geshi
 * @author    Nigel McNie <nigel@geshi.org>, Benny Baumann <BenBE@omorphia.de>
 * @copyright (C) 2004 - 2007 Nigel McNie, (C) 2007 - 2008 Benny Baumann
 */
class GeSHi {
    /**#@+
     * @access private
     */
    /**
     * The source code to highlight
     * @var string
     */
    var $source = '';

    /**
     * The language to use when highlighting
     * @var string
     */
    var $language = '';

    /**
     * The data for the language used
     * @var array
     */
    var $language_data = array();

    /**
     * The path to the language files
     * @var string
     */
    var $language_path = GESHI_LANG_ROOT;

    /**
     * The error message associated with an error
     * @var string
     * @todo check err reporting works
     */
    var $error = false;

    /**
     * Possible error messages
     * @var array
     */
    var $error_messages = array(
        GESHI_ERROR_NO_SUCH_LANG => 'GeSHi could not find the language {LANGUAGE} (using path {PATH})',
        GESHI_ERROR_FILE_NOT_READABLE => 'The file specified for load_from_file was not readable',
        GESHI_ERROR_INVALID_HEADER_TYPE => 'The header type specified is invalid',
        GESHI_ERROR_INVALID_LINE_NUMBER_TYPE => 'The line number type specified is invalid'
    );

    /**
     * Whether highlighting is strict or not
     * @var boolean
     */
    var $strict_mode = false;

    /**
     * Whether to use CSS classes in output
     * @var boolean
     */
    var $use_classes = false;

    /**
     * The type of header to use. Can be one of the following
     * values:
     *
     * - GESHI_HEADER_PRE: Source is outputted in a "pre" HTML element.
     * - GESHI_HEADER_DIV: Source is outputted in a "div" HTML element.
     * - GESHI_HEADER_NONE: No header is outputted.
     *
     * @var int
     */
    var $header_type = GESHI_HEADER_PRE;

    /**
     * Array of permissions for which lexics should be highlighted
     * @var array
     */
    var $lexic_permissions = array(
        'KEYWORDS' =>    array(),
        'COMMENTS' =>    array('MULTI' => true),
        'REGEXPS' =>     array(),
        'ESCAPE_CHAR' => true,
        'BRACKETS' =>    true,
        'SYMBOLS' =>     false,
        'STRINGS' =>     true,
        'NUMBERS' =>     true,
        'METHODS' =>     true,
        'SCRIPT' =>      true
    );

    /**
     * The time it took to parse the code
     * @var double
     */
    var $time = 0;

    /**
     * The content of the header block
     * @var string
     */
    var $header_content = '';

    /**
     * The content of the footer block
     * @var string
     */
    var $footer_content = '';

    /**
     * The style of the header block
     * @var string
     */
    var $header_content_style = '';

    /**
     * The style of the footer block
     * @var string
     */
    var $footer_content_style = '';

    /**
     * Tells if a block around the highlighted source should be forced
     * if not using line numbering
     * @var boolean
     */
    var $force_code_block = false;

    /**
     * The styles for hyperlinks in the code
     * @var array
     */
    var $link_styles = array();

    /**
     * Whether important blocks should be recognised or not
     * @var boolean
     * @deprecated
     * @todo REMOVE THIS FUNCTIONALITY!
     */
    var $enable_important_blocks = false;

    /**
     * Styles for important parts of the code
     * @var string
     * @deprecated
     * @todo As above - rethink the whole idea of important blocks as it is buggy and
     * will be hard to implement in 1.2
     */
    var $important_styles = 'font-weight: bold; color: red;'; // Styles for important parts of the code

    /**
     * Whether CSS IDs should be added to the code
     * @var boolean
     */
    var $add_ids = false;

    /**
     * Lines that should be highlighted extra
     * @var array
     */
    var $highlight_extra_lines = array();

    /**
     * Styles of lines that should be highlighted extra
     * @var array
     */
    var $highlight_extra_lines_styles = array();

    /**
     * Styles of extra-highlighted lines
     * @var string
     */
    var $highlight_extra_lines_style = 'background-color: #ffc;';

    /**
     * The line ending
     * If null, nl2br() will be used on the result string.
     * Otherwise, all instances of \n will be replaced with $line_ending
     * @var string
     */
    var $line_ending = null;

    /**
     * Number at which line numbers should start at
     * @var int
     */
    var $line_numbers_start = 1;

    /**
     * The overall style for this code block
     * @var string
     */
    var $overall_style = 'font-family:monospace;';

    /**
     *  The style for the actual code
     * @var string
     */
    var $code_style = 'font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;';

    /**
     * The overall class for this code block
     * @var string
     */
    var $overall_class = '';

    /**
     * The overall ID for this code block
     * @var string
     */
    var $overall_id = '';

    /**
     * Line number styles
     * @var string
     */
    var $line_style1 = 'font-weight: normal; vertical-align:top;';

    /**
     * Line number styles for fancy lines
     * @var string
     */
    var $line_style2 = 'font-weight: bold; vertical-align:top;';

    /**
     * Style for line numbers when GESHI_HEADER_PRE_TABLE is chosen
     * @var string
     */
    var $table_linenumber_style = 'width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;';

    /**
     * Flag for how line numbers are displayed
     * @var boolean
     */
    var $line_numbers = GESHI_NO_LINE_NUMBERS;

    /**
     * Flag to decide if multi line spans are allowed. Set it to false to make sure
     * each tag is closed before and reopened after each linefeed.
     * @var boolean
     */
    var $allow_multiline_span = true;

    /**
     * The "nth" value for fancy line highlighting
     * @var int
     */
    var $line_nth_row = 0;

    /**
     * The size of tab stops
     * @var int
     */
    var $tab_width = 8;

    /**
     * Should we use language-defined tab stop widths?
     * @var int
     */
    var $use_language_tab_width = false;

    /**
     * Default target for keyword links
     * @var string
     */
    var $link_target = '';

    /**
     * The encoding to use for entity encoding
     * NOTE: Used with Escape Char Sequences to fix UTF-8 handling (cf. SF#2037598)
     * @var string
     */
    var $encoding = 'utf-8';

    /**
     * Should keywords be linked?
     * @var boolean
     */
    var $keyword_links = true;

    /**
     * Currently loaded language file
     * @var string
     * @since 1.0.7.22
     */
    var $loaded_language = '';

    /**
     * Wether the caches needed for parsing are built or not
     *
     * @var bool
     * @since 1.0.8
     */
    var $parse_cache_built = false;

    /**
     * Work around for Suhosin Patch with disabled /e modifier
     *
     * Note from suhosins author in config file:
     * <blockquote>
     *   The /e modifier inside <code>preg_replace()</code> allows code execution.
     *   Often it is the cause for remote code execution exploits. It is wise to
     *   deactivate this feature and test where in the application it is used.
     *   The developer using the /e modifier should be made aware that he should
     *   use <code>preg_replace_callback()</code> instead
     * </blockquote>
     *
     * @var array
     * @since 1.0.8
     */
    var $_kw_replace_group = 0;
    var $_rx_key = 0;

    /**
     * some "callback parameters" for handle_multiline_regexps
     *
     * @since 1.0.8
     * @access private
     * @var string
     */
    var $_hmr_before = '';
    var $_hmr_replace = '';
    var $_hmr_after = '';
    var $_hmr_key = 0;

    /**#@-*/

    /**
     * Creates a new GeSHi object, with source and language
     *
     * @param string The source code to highlight
     * @param string The language to highlight the source with
     * @param string The path to the language file directory. <b>This
     *               is deprecated!</b> I've backported the auto path
     *               detection from the 1.1.X dev branch, so now it
     *               should be automatically set correctly. If you have
     *               renamed the language directory however, you will
     *               still need to set the path using this parameter or
     *               {@link GeSHi->set_language_path()}
     * @since 1.0.0
     */
    function GeSHi($source = '', $language = '', $path = '') {
        if (!empty($source)) {
            $this->set_source($source);
        }
        if (!empty($language)) {
            $this->set_language($language);
        }
        $this->set_language_path($path);
    }

    /**
     * Returns the version of GeSHi
     *
     * @return string
     * @since 1 0.8.11
     */
    function get_version()
    {
        return GESHI_VERSION;
    }

    /**
     * Returns an error message associated with the last GeSHi operation,
     * or false if no error has occured
     *
     * @return string|false An error message if there has been an error, else false
     * @since  1.0.0
     */
    function error() {
        if ($this->error) {
            //Put some template variables for debugging here ...
            $debug_tpl_vars = array(
                '{LANGUAGE}' => $this->language,
                '{PATH}' => $this->language_path
            );
            $msg = str_replace(
                array_keys($debug_tpl_vars),
                array_values($debug_tpl_vars),
                $this->error_messages[$this->error]);

            return "<br /><strong>GeSHi Error:</strong> $msg (code {$this->error})<br />";
        }
        return false;
    }

    /**
     * Gets a human-readable language name (thanks to Simon Patterson
     * for the idea :))
     *
     * @return string The name for the current language
     * @since  1.0.2
     */
    function get_language_name() {
        if (GESHI_ERROR_NO_SUCH_LANG == $this->error) {
            return $this->language_data['LANG_NAME'] . ' (Unknown Language)';
        }
        return $this->language_data['LANG_NAME'];
    }

    /**
     * Sets the source code for this object
     *
     * @param string The source code to highlight
     * @since 1.0.0
     */
    function set_source($source) {
        $this->source = $source;
        $this->highlight_extra_lines = array();
    }

    /**
     * Sets the language for this object
     *
     * @note since 1.0.8 this function won't reset language-settings by default anymore!
     *       if you need this set $force_reset = true
     *
     * @param string The name of the language to use
     * @since 1.0.0
     */
    function set_language($language, $force_reset = false) {
        if ($force_reset) {
            $this->loaded_language = false;
        }

        //Clean up the language name to prevent malicious code injection
        $language = preg_replace('#[^a-zA-Z0-9\-_]#', '', $language);

        $language = strtolower($language);

        //Retreive the full filename
        $file_name = $this->language_path . $language . '.php';
        if ($file_name == $this->loaded_language) {
            // this language is already loaded!
            return;
        }

        $this->language = $language;

        $this->error = false;
        $this->strict_mode = GESHI_NEVER;

        //Check if we can read the desired file
        if (!is_readable($file_name)) {
            $this->error = GESHI_ERROR_NO_SUCH_LANG;
            return;
        }

        // Load the language for parsing
        $this->load_language($file_name);
    }

    /**
     * Sets the path to the directory containing the language files. Note
     * that this path is relative to the directory of the script that included
     * geshi.php, NOT geshi.php itself.
     *
     * @param string The path to the language directory
     * @since 1.0.0
     * @deprecated The path to the language files should now be automatically
     *             detected, so this method should no longer be needed. The
     *             1.1.X branch handles manual setting of the path differently
     *             so this method will disappear in 1.2.0.
     */
    function set_language_path($path) {
        if(strpos($path,':')) {
            //Security Fix to prevent external directories using fopen wrappers.
            if(DIRECTORY_SEPARATOR == "\\") {
                if(!preg_match('#^[a-zA-Z]:#', $path) || false !== strpos($path, ':', 2)) {
                    return;
                }
            } else {
                return;
            }
        }
        if(preg_match('#[^/a-zA-Z0-9_\.\-\\\s:]#', $path)) {
            //Security Fix to prevent external directories using fopen wrappers.
            return;
        }
        if(GESHI_SECURITY_PARANOID && false !== strpos($path, '/.')) {
            //Security Fix to prevent external directories using fopen wrappers.
            return;
        }
        if(GESHI_SECURITY_PARANOID && false !== strpos($path, '..')) {
            //Security Fix to prevent external directories using fopen wrappers.
            return;
        }
        if ($path) {
            $this->language_path = ('/' == $path[strlen($path) - 1]) ? $path : $path . '/';
            $this->set_language($this->language); // otherwise set_language_path has no effect
        }
    }

    /**
     * Get supported langs or an associative array lang=>full_name.
     * @param boolean $longnames
     * @return array
     */
    function get_supported_languages($full_names=false)
    {
        // return array
        $back = array();

        // we walk the lang root
        $dir = dir($this->language_path);

        // foreach entry
        while (false !== ($entry = $dir->read()))
        {
            $full_path = $this->language_path.$entry;

            // Skip all dirs
            if (is_dir($full_path)) {
                continue;
            }

            // we only want lang.php files
            if (!preg_match('/^([^.]+)\.php$/', $entry, $matches)) {
                continue;
            }

            // Raw lang name is here
            $langname = $matches[1];

            // We want the fullname too?
            if ($full_names === true)
            {
                if (false !== ($fullname = $this->get_language_fullname($langname)))
                {
                    $back[$langname] = $fullname; // we go associative
                }
            }
            else
            {
                // just store raw langname
                $back[] = $langname;
            }
        }

        $dir->close();

        return $back;
    }

    /**
     * Get full_name for a lang or false.
     * @param string $language short langname (html4strict for example)
     * @return mixed
     */
    function get_language_fullname($language)
    {
        //Clean up the language name to prevent malicious code injection
        $language = preg_replace('#[^a-zA-Z0-9\-_]#', '', $language);

        $language = strtolower($language);

        // get fullpath-filename for a langname
        $fullpath = $this->language_path.$language.'.php';

        // we need to get contents :S
        if (false === ($data = file_get_contents($fullpath))) {
            $this->error = sprintf('Geshi::get_lang_fullname() Unknown Language: %s', $language);
            return false;
        }

        // match the langname
        if (!preg_match('/\'LANG_NAME\'\s*=>\s*\'((?:[^\']|\\\')+?)\'/', $data, $matches)) {
            $this->error = sprintf('Geshi::get_lang_fullname(%s): Regex can not detect language', $language);
            return false;
        }

        // return fullname for langname
        return stripcslashes($matches[1]);
    }

    /**
     * Sets the type of header to be used.
     *
     * If GESHI_HEADER_DIV is used, the code is surrounded in a "div".This
     * means more source code but more control over tab width and line-wrapping.
     * GESHI_HEADER_PRE means that a "pre" is used - less source, but less
     * control. Default is GESHI_HEADER_PRE.
     *
     * From 1.0.7.2, you can use GESHI_HEADER_NONE to specify that no header code
     * should be outputted.
     *
     * @param int The type of header to be used
     * @since 1.0.0
     */
    function set_header_type($type) {
        //Check if we got a valid header type
        if (!in_array($type, array(GESHI_HEADER_NONE, GESHI_HEADER_DIV,
            GESHI_HEADER_PRE, GESHI_HEADER_PRE_VALID, GESHI_HEADER_PRE_TABLE))) {
            $this->error = GESHI_ERROR_INVALID_HEADER_TYPE;
            return;
        }

        //Set that new header type
        $this->header_type = $type;
    }

    /**
     * Sets the styles for the code that will be outputted
     * when this object is parsed. The style should be a
     * string of valid stylesheet declarations
     *
     * @param string  The overall style for the outputted code block
     * @param boolean Whether to merge the styles with the current styles or not
     * @since 1.0.0
     */
    function set_overall_style($style, $preserve_defaults = false) {
        if (!$preserve_defaults) {
            $this->overall_style = $style;
        } else {
            $this->overall_style .= $style;
        }
    }

    /**
     * Sets the overall classname for this block of code. This
     * class can then be used in a stylesheet to style this object's
     * output
     *
     * @param string The class name to use for this block of code
     * @since 1.0.0
     */
    function set_overall_class($class) {
        $this->overall_class = $class;
    }

    /**
     * Sets the overall id for this block of code. This id can then
     * be used in a stylesheet to style this object's output
     *
     * @param string The ID to use for this block of code
     * @since 1.0.0
     */
    function set_overall_id($id) {
        $this->overall_id = $id;
    }

    /**
     * Sets whether CSS classes should be used to highlight the source. Default
     * is off, calling this method with no arguments will turn it on
     *
     * @param boolean Whether to turn classes on or not
     * @since 1.0.0
     */
    function enable_classes($flag = true) {
        $this->use_classes = ($flag) ? true : false;
    }

    /**
     * Sets the style for the actual code. This should be a string
     * containing valid stylesheet declarations. If $preserve_defaults is
     * true, then styles are merged with the default styles, with the
     * user defined styles having priority
     *
     * Note: Use this method to override any style changes you made to
     * the line numbers if you are using line numbers, else the line of
     * code will have the same style as the line number! Consult the
     * GeSHi documentation for more information about this.
     *
     * @param string  The style to use for actual code
     * @param boolean Whether to merge the current styles with the new styles
     * @since 1.0.2
     */
    function set_code_style($style, $preserve_defaults = false) {
        if (!$preserve_defaults) {
            $this->code_style = $style;
        } else {
            $this->code_style .= $style;
        }
    }

    /**
     * Sets the styles for the line numbers.
     *
     * @param string The style for the line numbers that are "normal"
     * @param string|boolean If a string, this is the style of the line
     *        numbers that are "fancy", otherwise if boolean then this
     *        defines whether the normal styles should be merged with the
     *        new normal styles or not
     * @param boolean If set, is the flag for whether to merge the "fancy"
     *        styles with the current styles or not
     * @since 1.0.2
     */
    function set_line_style($style1, $style2 = '', $preserve_defaults = false) {
        //Check if we got 2 or three parameters
        if (is_bool($style2)) {
            $preserve_defaults = $style2;
            $style2 = '';
        }

        //Actually set the new styles
        if (!$preserve_defaults) {
            $this->line_style1 = $style1;
            $this->line_style2 = $style2;
        } else {
            $this->line_style1 .= $style1;
            $this->line_style2 .= $style2;
        }
    }

    /**
     * Sets whether line numbers should be displayed.
     *
     * Valid values for the first parameter are:
     *
     *  - GESHI_NO_LINE_NUMBERS: Line numbers will not be displayed
     *  - GESHI_NORMAL_LINE_NUMBERS: Line numbers will be displayed
     *  - GESHI_FANCY_LINE_NUMBERS: Fancy line numbers will be displayed
     *
     * For fancy line numbers, the second parameter is used to signal which lines
     * are to be fancy. For example, if the value of this parameter is 5 then every
     * 5th line will be fancy.
     *
     * @param int How line numbers should be displayed
     * @param int Defines which lines are fancy
     * @since 1.0.0
     */
    function enable_line_numbers($flag, $nth_row = 5) {
        if (GESHI_NO_LINE_NUMBERS != $flag && GESHI_NORMAL_LINE_NUMBERS != $flag
            && GESHI_FANCY_LINE_NUMBERS != $flag) {
            $this->error = GESHI_ERROR_INVALID_LINE_NUMBER_TYPE;
        }
        $this->line_numbers = $flag;
        $this->line_nth_row = $nth_row;
    }

    /**
     * Sets wether spans and other HTML markup generated by GeSHi can
     * span over multiple lines or not. Defaults to true to reduce overhead.
     * Set it to false if you want to manipulate the output or manually display
     * the code in an ordered list.
     *
     * @param boolean Wether multiline spans are allowed or not
     * @since 1.0.7.22
     */
    function enable_multiline_span($flag) {
        $this->allow_multiline_span = (bool) $flag;
    }

    /**
     * Get current setting for multiline spans, see GeSHi->enable_multiline_span().
     *
     * @see enable_multiline_span
     * @return bool
     */
    function get_multiline_span() {
        return $this->allow_multiline_span;
    }

    /**
     * Sets the style for a keyword group. If $preserve_defaults is
     * true, then styles are merged with the default styles, with the
     * user defined styles having priority
     *
     * @param int     The key of the keyword group to change the styles of
     * @param string  The style to make the keywords
     * @param boolean Whether to merge the new styles with the old or just
     *                to overwrite them
     * @since 1.0.0
     */
    function set_keyword_group_style($key, $style, $preserve_defaults = false) {
        //Set the style for this keyword group
        if (!$preserve_defaults) {
            $this->language_data['STYLES']['KEYWORDS'][$key] = $style;
        } else {
            $this->language_data['STYLES']['KEYWORDS'][$key] .= $style;
        }

        //Update the lexic permissions
        if (!isset($this->lexic_permissions['KEYWORDS'][$key])) {
            $this->lexic_permissions['KEYWORDS'][$key] = true;
        }
    }

    /**
     * Turns highlighting on/off for a keyword group
     *
     * @param int     The key of the keyword group to turn on or off
     * @param boolean Whether to turn highlighting for that group on or off
     * @since 1.0.0
     */
    function set_keyword_group_highlighting($key, $flag = true) {
        $this->lexic_permissions['KEYWORDS'][$key] = ($flag) ? true : false;
    }

    /**
     * Sets the styles for comment groups.  If $preserve_defaults is
     * true, then styles are merged with the default styles, with the
     * user defined styles having priority
     *
     * @param int     The key of the comment group to change the styles of
     * @param string  The style to make the comments
     * @param boolean Whether to merge the new styles with the old or just
     *                to overwrite them
     * @since 1.0.0
     */
    function set_comments_style($key, $style, $preserve_defaults = false) {
        if (!$preserve_defaults) {
            $this->language_data['STYLES']['COMMENTS'][$key] = $style;
        } else {
            $this->language_data['STYLES']['COMMENTS'][$key] .= $style;
        }
    }

    /**
     * Turns highlighting on/off for comment groups
     *
     * @param int     The key of the comment group to turn on or off
     * @param boolean Whether to turn highlighting for that group on or off
     * @since 1.0.0
     */
    function set_comments_highlighting($key, $flag = true) {
        $this->lexic_permissions['COMMENTS'][$key] = ($flag) ? true : false;
    }

    /**
     * Sets the styles for escaped characters. If $preserve_defaults is
     * true, then styles are merged with the default styles, with the
     * user defined styles having priority
     *
     * @param string  The style to make the escape characters
     * @param boolean Whether to merge the new styles with the old or just
     *                to overwrite them
     * @since 1.0.0
     */
    function set_escape_characters_style($style, $preserve_defaults = false, $group = 0) {
        if (!$preserve_defaults) {
            $this->language_data['STYLES']['ESCAPE_CHAR'][$group] = $style;
        } else {
            $this->language_data['STYLES']['ESCAPE_CHAR'][$group] .= $style;
        }
    }

    /**
     * Turns highlighting on/off for escaped characters
     *
     * @param boolean Whether to turn highlighting for escape characters on or off
     * @since 1.0.0
     */
    function set_escape_characters_highlighting($flag = true) {
        $this->lexic_permissions['ESCAPE_CHAR'] = ($flag) ? true : false;
    }

    /**
     * Sets the styles for brackets. If $preserve_defaults is
     * true, then styles are merged with the default styles, with the
     * user defined styles having priority
     *
     * This method is DEPRECATED: use set_symbols_style instead.
     * This method will be removed in 1.2.X
     *
     * @param string  The style to make the brackets
     * @param boolean Whether to merge the new styles with the old or just
     *                to overwrite them
     * @since 1.0.0
     * @deprecated In favour of set_symbols_style
     */
    function set_brackets_style($style, $preserve_defaults = false) {
        if (!$preserve_defaults) {
            $this->language_data['STYLES']['BRACKETS'][0] = $style;
        } else {
            $this->language_data['STYLES']['BRACKETS'][0] .= $style;
        }
    }

    /**
     * Turns highlighting on/off for brackets
     *
     * This method is DEPRECATED: use set_symbols_highlighting instead.
     * This method will be remove in 1.2.X
     *
     * @param boolean Whether to turn highlighting for brackets on or off
     * @since 1.0.0
     * @deprecated In favour of set_symbols_highlighting
     */
    function set_brackets_highlighting($flag) {
        $this->lexic_permissions['BRACKETS'] = ($flag) ? true : false;
    }

    /**
     * Sets the styles for symbols. If $preserve_defaults is
     * true, then styles are merged with the default styles, with the
     * user defined styles having priority
     *
     * @param string  The style to make the symbols
     * @param boolean Whether to merge the new styles with the old or just
     *                to overwrite them
     * @param int     Tells the group of symbols for which style should be set.
     * @since 1.0.1
     */
    function set_symbols_style($style, $preserve_defaults = false, $group = 0) {
        // Update the style of symbols
        if (!$preserve_defaults) {
            $this->language_data['STYLES']['SYMBOLS'][$group] = $style;
        } else {
            $this->language_data['STYLES']['SYMBOLS'][$group] .= $style;
        }

        // For backward compatibility
        if (0 == $group) {
            $this->set_brackets_style ($style, $preserve_defaults);
        }
    }

    /**
     * Turns highlighting on/off for symbols
     *
     * @param boolean Whether to turn highlighting for symbols on or off
     * @since 1.0.0
     */
    function set_symbols_highlighting($flag) {
        // Update lexic permissions for this symbol group
        $this->lexic_permissions['SYMBOLS'] = ($flag) ? true : false;

        // For backward compatibility
        $this->set_brackets_highlighting ($flag);
    }

    /**
     * Sets the styles for strings. If $preserve_defaults is
     * true, then styles are merged with the default styles, with the
     * user defined styles having priority
     *
     * @param string  The style to make the escape characters
     * @param boolean Whether to merge the new styles with the old or just
     *                to overwrite them
     * @param int     Tells the group of strings for which style should be set.
     * @since 1.0.0
     */
    function set_strings_style($style, $preserve_defaults = false, $group = 0) {
        if (!$preserve_defaults) {
            $this->language_data['STYLES']['STRINGS'][$group] = $style;
        } else {
            $this->language_data['STYLES']['STRINGS'][$group] .= $style;
        }
    }

    /**
     * Turns highlighting on/off for strings
     *
     * @param boolean Whether to turn highlighting for strings on or off
     * @since 1.0.0
     */
    function set_strings_highlighting($flag) {
        $this->lexic_permissions['STRINGS'] = ($flag) ? true : false;
    }

    /**
     * Sets the styles for strict code blocks. If $preserve_defaults is
     * true, then styles are merged with the default styles, with the
     * user defined styles having priority
     *
     * @param string  The style to make the script blocks
     * @param boolean Whether to merge the new styles with the old or just
     *                to overwrite them
     * @param int     Tells the group of script blocks for which style should be set.
     * @since 1.0.8.4
     */
    function set_script_style($style, $preserve_defaults = false, $group = 0) {
        // Update the style of symbols
        if (!$preserve_defaults) {
            $this->language_data['STYLES']['SCRIPT'][$group] = $style;
        } else {
            $this->language_data['STYLES']['SCRIPT'][$group] .= $style;
        }
    }

    /**
     * Sets the styles for numbers. If $preserve_defaults is
     * true, then styles are merged with the default styles, with the
     * user defined styles having priority
     *
     * @param string  The style to make the numbers
     * @param boolean Whether to merge the new styles with the old or just
     *                to overwrite them
     * @param int     Tells the group of numbers for which style should be set.
     * @since 1.0.0
     */
    function set_numbers_style($style, $preserve_defaults = false, $group = 0) {
        if (!$preserve_defaults) {
            $this->language_data['STYLES']['NUMBERS'][$group] = $style;
        } else {
            $this->language_data['STYLES']['NUMBERS'][$group] .= $style;
        }
    }

    /**
     * Turns highlighting on/off for numbers
     *
     * @param boolean Whether to turn highlighting for numbers on or off
     * @since 1.0.0
     */
    function set_numbers_highlighting($flag) {
        $this->lexic_permissions['NUMBERS'] = ($flag) ? true : false;
    }

    /**
     * Sets the styles for methods. $key is a number that references the
     * appropriate "object splitter" - see the language file for the language
     * you are highlighting to get this number. If $preserve_defaults is
     * true, then styles are merged with the default styles, with the
     * user defined styles having priority
     *
     * @param int     The key of the object splitter to change the styles of
     * @param string  The style to make the methods
     * @param boolean Whether to merge the new styles with the old or just
     *                to overwrite them
     * @since 1.0.0
     */
    function set_methods_style($key, $style, $preserve_defaults = false) {
        if (!$preserve_defaults) {
            $this->language_data['STYLES']['METHODS'][$key] = $style;
        } else {
            $this->language_data['STYLES']['METHODS'][$key] .= $style;
        }
    }

    /**
     * Turns highlighting on/off for methods
     *
     * @param boolean Whether to turn highlighting for methods on or off
     * @since 1.0.0
     */
    function set_methods_highlighting($flag) {
        $this->lexic_permissions['METHODS'] = ($flag) ? true : false;
    }

    /**
     * Sets the styles for regexps. If $preserve_defaults is
     * true, then styles are merged with the default styles, with the
     * user defined styles having priority
     *
     * @param string  The style to make the regular expression matches
     * @param boolean Whether to merge the new styles with the old or just
     *                to overwrite them
     * @since 1.0.0
     */
    function set_regexps_style($key, $style, $preserve_defaults = false) {
        if (!$preserve_defaults) {
            $this->language_data['STYLES']['REGEXPS'][$key] = $style;
        } else {
            $this->language_data['STYLES']['REGEXPS'][$key] .= $style;
        }
    }

    /**
     * Turns highlighting on/off for regexps
     *
     * @param int     The key of the regular expression group to turn on or off
     * @param boolean Whether to turn highlighting for the regular expression group on or off
     * @since 1.0.0
     */
    function set_regexps_highlighting($key, $flag) {
        $this->lexic_permissions['REGEXPS'][$key] = ($flag) ? true : false;
    }

    /**
     * Sets whether a set of keywords are checked for in a case sensitive manner
     *
     * @param int The key of the keyword group to change the case sensitivity of
     * @param boolean Whether to check in a case sensitive manner or not
     * @since 1.0.0
     */
    function set_case_sensitivity($key, $case) {
        $this->language_data['CASE_SENSITIVE'][$key] = ($case) ? true : false;
    }

    /**
     * Sets the case that keywords should use when found. Use the constants:
     *
     *  - GESHI_CAPS_NO_CHANGE: leave keywords as-is
     *  - GESHI_CAPS_UPPER: convert all keywords to uppercase where found
     *  - GESHI_CAPS_LOWER: convert all keywords to lowercase where found
     *
     * @param int A constant specifying what to do with matched keywords
     * @since 1.0.1
     */
    function set_case_keywords($case) {
        if (in_array($case, array(
            GESHI_CAPS_NO_CHANGE, GESHI_CAPS_UPPER, GESHI_CAPS_LOWER))) {
            $this->language_data['CASE_KEYWORDS'] = $case;
        }
    }

    /**
     * Sets how many spaces a tab is substituted for
     *
     * Widths below zero are ignored
     *
     * @param int The tab width
     * @since 1.0.0
     */
    function set_tab_width($width) {
        $this->tab_width = intval($width);

        //Check if it fit's the constraints:
        if ($this->tab_width < 1) {
            //Return it to the default
            $this->tab_width = 8;
        }
    }

    /**
     * Sets whether or not to use tab-stop width specifed by language
     *
     * @param boolean Whether to use language-specific tab-stop widths
     * @since 1.0.7.20
     */
    function set_use_language_tab_width($use) {
        $this->use_language_tab_width = (bool) $use;
    }

    /**
     * Returns the tab width to use, based on the current language and user
     * preference
     *
     * @return int Tab width
     * @since 1.0.7.20
     */
    function get_real_tab_width() {
        if (!$this->use_language_tab_width ||
            !isset($this->language_data['TAB_WIDTH'])) {
            return $this->tab_width;
        } else {
            return $this->language_data['TAB_WIDTH'];
        }
    }

    /**
     * Enables/disables strict highlighting. Default is off, calling this
     * method without parameters will turn it on. See documentation
     * for more details on strict mode and where to use it.
     *
     * @param boolean Whether to enable strict mode or not
     * @since 1.0.0
     */
    function enable_strict_mode($mode = true) {
        if (GESHI_MAYBE == $this->language_data['STRICT_MODE_APPLIES']) {
            $this->strict_mode = ($mode) ? GESHI_ALWAYS : GESHI_NEVER;
        }
    }

    /**
     * Disables all highlighting
     *
     * @since 1.0.0
     * @todo  Rewrite with array traversal
     * @deprecated In favour of enable_highlighting
     */
    function disable_highlighting() {
        $this->enable_highlighting(false);
    }

    /**
     * Enables all highlighting
     *
     * The optional flag parameter was added in version 1.0.7.21 and can be used
     * to enable (true) or disable (false) all highlighting.
     *
     * @since 1.0.0
     * @param boolean A flag specifying whether to enable or disable all highlighting
     * @todo  Rewrite with array traversal
     */
    function enable_highlighting($flag = true) {
        $flag = $flag ? true : false;
        foreach ($this->lexic_permissions as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $k => $v) {
                    $this->lexic_permissions[$key][$k] = $flag;
                }
            } else {
                $this->lexic_permissions[$key] = $flag;
            }
        }

        // Context blocks
        $this->enable_important_blocks = $flag;
    }

    /**
     * Given a file extension, this method returns either a valid geshi language
     * name, or the empty string if it couldn't be found
     *
     * @param string The extension to get a language name for
     * @param array  A lookup array to use instead of the default one
     * @since 1.0.5
     * @todo Re-think about how this method works (maybe make it private and/or make it
     *       a extension->lang lookup?)
     * @todo static?
     */
    function get_language_name_from_extension( $extension, $lookup = array() ) {
        $extension = strtolower($extension);

        if ( !is_array($lookup) || empty($lookup)) {
            $lookup = array(
                '6502acme' => array( 'a', 's', 'asm', 'inc' ),
                '6502tasm' => array( 'a', 's', 'asm', 'inc' ),
                '6502kickass' => array( 'a', 's', 'asm', 'inc' ),
                '68000devpac' => array( 'a', 's', 'asm', 'inc' ),
                'abap' => array('abap'),
                'actionscript' => array('as'),
                'ada' => array('a', 'ada', 'adb', 'ads'),
                'apache' => array('conf'),
                'asm' => array('ash', 'asm', 'inc'),
                'asp' => array('asp'),
                'bash' => array('sh'),
                'bf' => array('bf'),
                'c' => array('c', 'h'),
                'c_mac' => array('c', 'h'),
                'caddcl' => array(),
                'cadlisp' => array(),
                'cdfg' => array('cdfg'),
                'cobol' => array('cbl'),
                'cpp' => array('cpp', 'hpp', 'C', 'H', 'CPP', 'HPP'),
                'csharp' => array('cs'),
                'css' => array('css'),
                'd' => array('d'),
                'delphi' => array('dpk', 'dpr', 'pp', 'pas'),
                'diff' => array('diff', 'patch'),
                'dos' => array('bat', 'cmd'),
                'gdb' => array('kcrash', 'crash', 'bt'),
                'gettext' => array('po', 'pot'),
                'gml' => array('gml'),
                'gnuplot' => array('plt'),
                'groovy' => array('groovy'),
                'haskell' => array('hs'),
                'haxe' => array('hx'),
                'html4strict' => array('html', 'htm'),
                'ini' => array('ini', 'desktop'),
                'java' => array('java'),
                'javascript' => array('js'),
                'klonec' => array('kl1'),
                'klonecpp' => array('klx'),
                'latex' => array('tex'),
                'lisp' => array('lisp'),
                'lua' => array('lua'),
                'matlab' => array('m'),
                'mpasm' => array(),
                'mysql' => array('sql'),
                'nsis' => array(),
                'objc' => array(),
                'oobas' => array(),
                'oracle8' => array(),
                'oracle10' => array(),
                'pascal' => array('pas'),
                'perl' => array('pl', 'pm'),
                'php' => array('php', 'php5', 'phtml', 'phps'),
                'povray' => array('pov'),
                'providex' => array('pvc', 'pvx'),
                'prolog' => array('pl'),
                'python' => array('py'),
                'qbasic' => array('bi'),
                'reg' => array('reg'),
                'ruby' => array('rb'),
                'sas' => array('sas'),
                'scala' => array('scala'),
                'scheme' => array('scm'),
                'scilab' => array('sci'),
                'smalltalk' => array('st'),
                'smarty' => array(),
                'tcl' => array('tcl'),
                'text' => array('txt'),
                'vb' => array('bas'),
                'vbnet' => array(),
                'visualfoxpro' => array(),
                'whitespace' => array('ws'),
                'xml' => array('xml', 'svg', 'xrc'),
                'z80' => array('z80', 'asm', 'inc')
            );
        }

        foreach ($lookup as $lang => $extensions) {
            if (in_array($extension, $extensions)) {
                return $lang;
            }
        }

        return 'text';
    }

    /**
     * Given a file name, this method loads its contents in, and attempts
     * to set the language automatically. An optional lookup table can be
     * passed for looking up the language name. If not specified a default
     * table is used
     *
     * The language table is in the form
     * <pre>array(
     *   'lang_name' => array('extension', 'extension', ...),
     *   'lang_name' ...
     * );</pre>
     *
     * @param string The filename to load the source from
     * @param array  A lookup array to use instead of the default one
     * @todo Complete rethink of this and above method
     * @since 1.0.5
     */
    function load_from_file($file_name, $lookup = array()) {
        if (is_readable($file_name)) {
            $this->set_source(file_get_contents($file_name));
            $this->set_language($this->get_language_name_from_extension(substr(strrchr($file_name, '.'), 1), $lookup));
        } else {
            $this->error = GESHI_ERROR_FILE_NOT_READABLE;
        }
    }

    /**
     * Adds a keyword to a keyword group for highlighting
     *
     * @param int    The key of the keyword group to add the keyword to
     * @param string The word to add to the keyword group
     * @since 1.0.0
     */
    function add_keyword($key, $word) {
        if (!is_array($this->language_data['KEYWORDS'][$key])) {
            $this->language_data['KEYWORDS'][$key] = array();
        }
        if (!in_array($word, $this->language_data['KEYWORDS'][$key])) {
            $this->language_data['KEYWORDS'][$key][] = $word;

            //NEW in 1.0.8 don't recompile the whole optimized regexp, simply append it
            if ($this->parse_cache_built) {
                $subkey = count($this->language_data['CACHED_KEYWORD_LISTS'][$key]) - 1;
                $this->language_data['CACHED_KEYWORD_LISTS'][$key][$subkey] .= '|' . preg_quote($word, '/');
            }
        }
    }

    /**
     * Removes a keyword from a keyword group
     *
     * @param int    The key of the keyword group to remove the keyword from
     * @param string The word to remove from the keyword group
     * @param bool   Wether to automatically recompile the optimized regexp list or not.
     *               Note: if you set this to false and @see GeSHi->parse_code() was already called once,
     *               for the current language, you have to manually call @see GeSHi->optimize_keyword_group()
     *               or the removed keyword will stay in cache and still be highlighted! On the other hand
     *               it might be too expensive to recompile the regexp list for every removal if you want to
     *               remove a lot of keywords.
     * @since 1.0.0
     */
    function remove_keyword($key, $word, $recompile = true) {
        $key_to_remove = array_search($word, $this->language_data['KEYWORDS'][$key]);
        if ($key_to_remove !== false) {
            unset($this->language_data['KEYWORDS'][$key][$key_to_remove]);

            //NEW in 1.0.8, optionally recompile keyword group
            if ($recompile && $this->parse_cache_built) {
                $this->optimize_keyword_group($key);
            }
        }
    }

    /**
     * Creates a new keyword group
     *
     * @param int    The key of the keyword group to create
     * @param string The styles for the keyword group
     * @param boolean Whether the keyword group is case sensitive ornot
     * @param array  The words to use for the keyword group
     * @since 1.0.0
     */
    function add_keyword_group($key, $styles, $case_sensitive = true, $words = array()) {
        $words = (array) $words;
        if  (empty($words)) {
            // empty word lists mess up highlighting
            return false;
        }

        //Add the new keyword group internally
        $this->language_data['KEYWORDS'][$key] = $words;
        $this->lexic_permissions['KEYWORDS'][$key] = true;
        $this->language_data['CASE_SENSITIVE'][$key] = $case_sensitive;
        $this->language_data['STYLES']['KEYWORDS'][$key] = $styles;

        //NEW in 1.0.8, cache keyword regexp
        if ($this->parse_cache_built) {
            $this->optimize_keyword_group($key);
        }
    }

    /**
     * Removes a keyword group
     *
     * @param int    The key of the keyword group to remove
     * @since 1.0.0
     */
    function remove_keyword_group ($key) {
        //Remove the keyword group internally
        unset($this->language_data['KEYWORDS'][$key]);
        unset($this->lexic_permissions['KEYWORDS'][$key]);
        unset($this->language_data['CASE_SENSITIVE'][$key]);
        unset($this->language_data['STYLES']['KEYWORDS'][$key]);

        //NEW in 1.0.8
        unset($this->language_data['CACHED_KEYWORD_LISTS'][$key]);
    }

    /**
     * compile optimized regexp list for keyword group
     *
     * @param int   The key of the keyword group to compile & optimize
     * @since 1.0.8
     */
    function optimize_keyword_group($key) {
        $this->language_data['CACHED_KEYWORD_LISTS'][$key] =
            $this->optimize_regexp_list($this->language_data['KEYWORDS'][$key]);
        $space_as_whitespace = false;
        if(isset($this->language_data['PARSER_CONTROL'])) {
            if(isset($this->language_data['PARSER_CONTROL']['KEYWORDS'])) {
                if(isset($this->language_data['PARSER_CONTROL']['KEYWORDS']['SPACE_AS_WHITESPACE'])) {
                    $space_as_whitespace = $this->language_data['PARSER_CONTROL']['KEYWORDS']['SPACE_AS_WHITESPACE'];
                }
                if(isset($this->language_data['PARSER_CONTROL']['KEYWORDS'][$key]['SPACE_AS_WHITESPACE'])) {
                    if(isset($this->language_data['PARSER_CONTROL']['KEYWORDS'][$key]['SPACE_AS_WHITESPACE'])) {
                        $space_as_whitespace = $this->language_data['PARSER_CONTROL']['KEYWORDS'][$key]['SPACE_AS_WHITESPACE'];
                    }
                }
            }
        }
        if($space_as_whitespace) {
            foreach($this->language_data['CACHED_KEYWORD_LISTS'][$key] as $rxk => $rxv) {
                $this->language_data['CACHED_KEYWORD_LISTS'][$key][$rxk] =
                    str_replace(" ", "\\s+", $rxv);
            }
        }
    }

    /**
     * Sets the content of the header block
     *
     * @param string The content of the header block
     * @since 1.0.2
     */
    function set_header_content($content) {
        $this->header_content = $content;
    }

    /**
     * Sets the content of the footer block
     *
     * @param string The content of the footer block
     * @since 1.0.2
     */
    function set_footer_content($content) {
        $this->footer_content = $content;
    }

    /**
     * Sets the style for the header content
     *
     * @param string The style for the header content
     * @since 1.0.2
     */
    function set_header_content_style($style) {
        $this->header_content_style = $style;
    }

    /**
     * Sets the style for the footer content
     *
     * @param string The style for the footer content
     * @since 1.0.2
     */
    function set_footer_content_style($style) {
        $this->footer_content_style = $style;
    }

    /**
     * Sets whether to force a surrounding block around
     * the highlighted code or not
     *
     * @param boolean Tells whether to enable or disable this feature
     * @since 1.0.7.20
     */
    function enable_inner_code_block($flag) {
        $this->force_code_block = (bool)$flag;
    }

    /**
     * Sets the base URL to be used for keywords
     *
     * @param int The key of the keyword group to set the URL for
     * @param string The URL to set for the group. If {FNAME} is in
     *               the url somewhere, it is replaced by the keyword
     *               that the URL is being made for
     * @since 1.0.2
     */
    function set_url_for_keyword_group($group, $url) {
        $this->language_data['URLS'][$group] = $url;
    }

    /**
     * Sets styles for links in code
     *
     * @param int A constant that specifies what state the style is being
     *            set for - e.g. :hover or :visited
     * @param string The styles to use for that state
     * @since 1.0.2
     */
    function set_link_styles($type, $styles) {
        $this->link_styles[$type] = $styles;
    }

    /**
     * Sets the target for links in code
     *
     * @param string The target for links in the code, e.g. _blank
     * @since 1.0.3
     */
    function set_link_target($target) {
        if (!$target) {
            $this->link_target = '';
        } else {
            $this->link_target = ' target="' . $target . '"';
        }
    }

    /**
     * Sets styles for important parts of the code
     *
     * @param string The styles to use on important parts of the code
     * @since 1.0.2
     */
    function set_important_styles($styles) {
        $this->important_styles = $styles;
    }

    /**
     * Sets whether context-important blocks are highlighted
     *
     * @param boolean Tells whether to enable or disable highlighting of important blocks
     * @todo REMOVE THIS SHIZ FROM GESHI!
     * @deprecated
     * @since 1.0.2
     */
    function enable_important_blocks($flag) {
        $this->enable_important_blocks = ( $flag ) ? true : false;
    }

    /**
     * Whether CSS IDs should be added to each line
     *
     * @param boolean If true, IDs will be added to each line.
     * @since 1.0.2
     */
    function enable_ids($flag = true) {
        $this->add_ids = ($flag) ? true : false;
    }

    /**
     * Specifies which lines to highlight extra
     *
     * The extra style parameter was added in 1.0.7.21.
     *
     * @param mixed An array of line numbers to highlight, or just a line
     *              number on its own.
     * @param string A string specifying the style to use for this line.
     *              If null is specified, the default style is used.
     *              If false is specified, the line will be removed from
     *              special highlighting
     * @since 1.0.2
     * @todo  Some data replication here that could be cut down on
     */
    function highlight_lines_extra($lines, $style = null) {
        if (is_array($lines)) {
            //Split up the job using single lines at a time
            foreach ($lines as $line) {
                $this->highlight_lines_extra($line, $style);
            }
        } else {
            //Mark the line as being highlighted specially
            $lines = intval($lines);
            $this->highlight_extra_lines[$lines] = $lines;

            //Decide on which style to use
            if ($style === null) { //Check if we should use default style
                unset($this->highlight_extra_lines_styles[$lines]);
            } elseif ($style === false) { //Check if to remove this line
                unset($this->highlight_extra_lines[$lines]);
                unset($this->highlight_extra_lines_styles[$lines]);
            } else {
                $this->highlight_extra_lines_styles[$lines] = $style;
            }
        }
    }

    /**
     * Sets the style for extra-highlighted lines
     *
     * @param string The style for extra-highlighted lines
     * @since 1.0.2
     */
    function set_highlight_lines_extra_style($styles) {
        $this->highlight_extra_lines_style = $styles;
    }

    /**
     * Sets the line-ending
     *
     * @param string The new line-ending
     * @since 1.0.2
     */
    function set_line_ending($line_ending) {
        $this->line_ending = (string)$line_ending;
    }

    /**
     * Sets what number line numbers should start at. Should
     * be a positive integer, and will be converted to one.
     *
     * <b>Warning:</b> Using this method will add the "start"
     * attribute to the &lt;ol&gt; that is used for line numbering.
     * This is <b>not</b> valid XHTML strict, so if that's what you
     * care about then don't use this method. Firefox is getting
     * support for the CSS method of doing this in 1.1 and Opera
     * has support for the CSS method, but (of course) IE doesn't
     * so it's not worth doing it the CSS way yet.
     *
     * @param int The number to start line numbers at
     * @since 1.0.2
     */
    function start_line_numbers_at($number) {
        $this->line_numbers_start = abs(intval($number));
    }

    /**
     * Sets the encoding used for htmlspecialchars(), for international
     * support.
     *
     * NOTE: This is not needed for now because htmlspecialchars() is not
     * being used (it has a security hole in PHP4 that has not been patched).
     * Maybe in a future version it may make a return for speed reasons, but
     * I doubt it.
     *
     * @param string The encoding to use for the source
     * @since 1.0.3
     */
    function set_encoding($encoding) {
        if ($encoding) {
          $this->encoding = strtolower($encoding);
        }
    }

    /**
     * Turns linking of keywords on or off.
     *
     * @param boolean If true, links will be added to keywords
     * @since 1.0.2
     */
    function enable_keyword_links($enable = true) {
        $this->keyword_links = (bool) $enable;
    }

    /**
     * Setup caches needed for styling. This is automatically called in
     * parse_code() and get_stylesheet() when appropriate. This function helps
     * stylesheet generators as they rely on some style information being
     * preprocessed
     *
     * @since 1.0.8
     * @access private
     */
    function build_style_cache() {
        //Build the style cache needed to highlight numbers appropriate
        if($this->lexic_permissions['NUMBERS']) {
            //First check what way highlighting information for numbers are given
            if(!isset($this->language_data['NUMBERS'])) {
                $this->language_data['NUMBERS'] = 0;
            }

            if(is_array($this->language_data['NUMBERS'])) {
                $this->language_data['NUMBERS_CACHE'] = $this->language_data['NUMBERS'];
            } else {
                $this->language_data['NUMBERS_CACHE'] = array();
                if(!$this->language_data['NUMBERS']) {
                    $this->language_data['NUMBERS'] =
                        GESHI_NUMBER_INT_BASIC |
                        GESHI_NUMBER_FLT_NONSCI;
                }

                for($i = 0, $j = $this->language_data['NUMBERS']; $j > 0; ++$i, $j>>=1) {
                    //Rearrange style indices if required ...
                    if(isset($this->language_data['STYLES']['NUMBERS'][1<<$i])) {
                        $this->language_data['STYLES']['NUMBERS'][$i] =
                            $this->language_data['STYLES']['NUMBERS'][1<<$i];
                        unset($this->language_data['STYLES']['NUMBERS'][1<<$i]);
                    }

                    //Check if this bit is set for highlighting
                    if($j&1) {
                        //So this bit is set ...
                        //Check if it belongs to group 0 or the actual stylegroup
                        if(isset($this->language_data['STYLES']['NUMBERS'][$i])) {
                            $this->language_data['NUMBERS_CACHE'][$i] = 1 << $i;
                        } else {
                            if(!isset($this->language_data['NUMBERS_CACHE'][0])) {
                                $this->language_data['NUMBERS_CACHE'][0] = 0;
                            }
                            $this->language_data['NUMBERS_CACHE'][0] |= 1 << $i;
                        }
                    }
                }
            }
        }
    }

    /**
     * Setup caches needed for parsing. This is automatically called in parse_code() when appropriate.
     * This function makes stylesheet generators much faster as they do not need these caches.
     *
     * @since 1.0.8
     * @access private
     */
    function build_parse_cache() {
        // cache symbol regexp
        //As this is a costy operation, we avoid doing it for multiple groups ...
        //Instead we perform it for all symbols at once.
        //
        //For this to work, we need to reorganize the data arrays.
        if ($this->lexic_permissions['SYMBOLS'] && !empty($this->language_data['SYMBOLS'])) {
            $this->language_data['MULTIPLE_SYMBOL_GROUPS'] = count($this->language_data['STYLES']['SYMBOLS']) > 1;

            $this->language_data['SYMBOL_DATA'] = array();
            $symbol_preg_multi = array(); // multi char symbols
            $symbol_preg_single = array(); // single char symbols
            foreach ($this->language_data['SYMBOLS'] as $key => $symbols) {
                if (is_array($symbols)) {
                    foreach ($symbols as $sym) {
                        $sym = $this->hsc($sym);
                        if (!isset($this->language_data['SYMBOL_DATA'][$sym])) {
                            $this->language_data['SYMBOL_DATA'][$sym] = $key;
                            if (isset($sym[1])) { // multiple chars
                                $symbol_preg_multi[] = preg_quote($sym, '/');
                            } else { // single char
                                if ($sym == '-') {
                                    // don't trigger range out of order error
                                    $symbol_preg_single[] = '\-';
                                } else {
                                    $symbol_preg_single[] = preg_quote($sym, '/');
                                }
                            }
                        }
                    }
                } else {
                    $symbols = $this->hsc($symbols);
                    if (!isset($this->language_data['SYMBOL_DATA'][$symbols])) {
                        $this->language_data['SYMBOL_DATA'][$symbols] = 0;
                        if (isset($symbols[1])) { // multiple chars
                            $symbol_preg_multi[] = preg_quote($symbols, '/');
                        } elseif ($symbols == '-') {
                            // don't trigger range out of order error
                            $symbol_preg_single[] = '\-';
                        } else { // single char
                            $symbol_preg_single[] = preg_quote($symbols, '/');
                        }
                    }
                }
            }

            //Now we have an array with each possible symbol as the key and the style as the actual data.
            //This way we can set the correct style just the moment we highlight ...
            //
            //Now we need to rewrite our array to get a search string that
            $symbol_preg = array();
            if (!empty($symbol_preg_multi)) {
                rsort($symbol_preg_multi);
                $symbol_preg[] = implode('|', $symbol_preg_multi);
            }
            if (!empty($symbol_preg_single)) {
                rsort($symbol_preg_single);
                $symbol_preg[] = '[' . implode('', $symbol_preg_single) . ']';
            }
            $this->language_data['SYMBOL_SEARCH'] = implode("|", $symbol_preg);
        }

        // cache optimized regexp for keyword matching
        // remove old cache
        $this->language_data['CACHED_KEYWORD_LISTS'] = array();
        foreach (array_keys($this->language_data['KEYWORDS']) as $key) {
            if (!isset($this->lexic_permissions['KEYWORDS'][$key]) ||
                    $this->lexic_permissions['KEYWORDS'][$key]) {
                $this->optimize_keyword_group($key);
            }
        }

        // brackets
        if ($this->lexic_permissions['BRACKETS']) {
            $this->language_data['CACHE_BRACKET_MATCH'] = array('[', ']', '(', ')', '{', '}');
            if (!$this->use_classes && isset($this->language_data['STYLES']['BRACKETS'][0])) {
                $this->language_data['CACHE_BRACKET_REPLACE'] = array(
                    '<| style="' . $this->language_data['STYLES']['BRACKETS'][0] . '">&#91;|>',
                    '<| style="' . $this->language_data['STYLES']['BRACKETS'][0] . '">&#93;|>',
                    '<| style="' . $this->language_data['STYLES']['BRACKETS'][0] . '">&#40;|>',
                    '<| style="' . $this->language_data['STYLES']['BRACKETS'][0] . '">&#41;|>',
                    '<| style="' . $this->language_data['STYLES']['BRACKETS'][0] . '">&#123;|>',
                    '<| style="' . $this->language_data['STYLES']['BRACKETS'][0] . '">&#125;|>',
                );
            }
            else {
                $this->language_data['CACHE_BRACKET_REPLACE'] = array(
                    '<| class="br0">&#91;|>',
                    '<| class="br0">&#93;|>',
                    '<| class="br0">&#40;|>',
                    '<| class="br0">&#41;|>',
                    '<| class="br0">&#123;|>',
                    '<| class="br0">&#125;|>',
                );
            }
        }

        //Build the parse cache needed to highlight numbers appropriate
        if($this->lexic_permissions['NUMBERS']) {
            //Check if the style rearrangements have been processed ...
            //This also does some preprocessing to check which style groups are useable ...
            if(!isset($this->language_data['NUMBERS_CACHE'])) {
                $this->build_style_cache();
            }

            //Number format specification
            //All this formats are matched case-insensitively!
            static $numbers_format = array(
                GESHI_NUMBER_INT_BASIC =>
                    '(?:(?<![0-9a-z_\.%$@])|(?<=\.\.))(?<![\d\.]e[+\-])([1-9]\d*?|0)(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_INT_CSTYLE =>
                    '(?<![0-9a-z_\.%])(?<![\d\.]e[+\-])([1-9]\d*?|0)l(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_BIN_SUFFIX =>
                    '(?<![0-9a-z_\.])(?<![\d\.]e[+\-])[01]+?[bB](?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_BIN_PREFIX_PERCENT =>
                    '(?<![0-9a-z_\.%])(?<![\d\.]e[+\-])%[01]+?(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_BIN_PREFIX_0B =>
                    '(?<![0-9a-z_\.%])(?<![\d\.]e[+\-])0b[01]+?(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_OCT_PREFIX =>
                    '(?<![0-9a-z_\.])(?<![\d\.]e[+\-])0[0-7]+?(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_OCT_PREFIX_0O =>
                    '(?<![0-9a-z_\.%])(?<![\d\.]e[+\-])0o[0-7]+?(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_OCT_PREFIX_AT =>
                    '(?<![0-9a-z_\.%])(?<![\d\.]e[+\-])\@[0-7]+?(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_OCT_SUFFIX =>
                    '(?<![0-9a-z_\.])(?<![\d\.]e[+\-])[0-7]+?o(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_HEX_PREFIX =>
                    '(?<![0-9a-z_\.])(?<![\d\.]e[+\-])0x[0-9a-fA-F]+?(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_HEX_PREFIX_DOLLAR =>
                    '(?<![0-9a-z_\.])(?<![\d\.]e[+\-])\$[0-9a-fA-F]+?(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_HEX_SUFFIX =>
                    '(?<![0-9a-z_\.])(?<![\d\.]e[+\-])\d[0-9a-fA-F]*?[hH](?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_FLT_NONSCI =>
                    '(?<![0-9a-z_\.])(?<![\d\.]e[+\-])\d+?\.\d+?(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_FLT_NONSCI_F =>
                    '(?<![0-9a-z_\.])(?<![\d\.]e[+\-])(?:\d+?(?:\.\d*?)?|\.\d+?)f(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_FLT_SCI_SHORT =>
                    '(?<![0-9a-z_\.])(?<![\d\.]e[+\-])\.\d+?(?:e[+\-]?\d+?)?(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)',
                GESHI_NUMBER_FLT_SCI_ZERO =>
                    '(?<![0-9a-z_\.])(?<![\d\.]e[+\-])(?:\d+?(?:\.\d*?)?|\.\d+?)(?:e[+\-]?\d+?)?(?![0-9a-z]|\.(?:[eE][+\-]?)?\d)'
                );

            //At this step we have an associative array with flag groups for a
            //specific style or an string denoting a regexp given its index.
            $this->language_data['NUMBERS_RXCACHE'] = array();
            foreach($this->language_data['NUMBERS_CACHE'] as $key => $rxdata) {
                if(is_string($rxdata)) {
                    $regexp = $rxdata;
                } else {
                    //This is a bitfield of number flags to highlight:
                    //Build an array, implode them together and make this the actual RX
                    $rxuse = array();
                    for($i = 1; $i <= $rxdata; $i<<=1) {
                        if($rxdata & $i) {
                            $rxuse[] = $numbers_format[$i];
                        }
                    }
                    $regexp = implode("|", $rxuse);
                }

                $this->language_data['NUMBERS_RXCACHE'][$key] =
                    "/(?<!<\|\/)(?<!<\|!REG3XP)(?<!<\|\/NUM!)(?<!\d\/>)($regexp)(?!(?:<DOT>|(?>[^\<]))+>)(?![^<]*>)(?!\|>)(?!\/>)/i"; //
            }

            if(!isset($this->language_data['PARSER_CONTROL']['NUMBERS']['PRECHECK_RX'])) {
                $this->language_data['PARSER_CONTROL']['NUMBERS']['PRECHECK_RX'] = '#\d#';
            }
        }

        $this->parse_cache_built = true;
    }

    /**
     * Returns the code in $this->source, highlighted and surrounded by the
     * nessecary HTML.
     *
     * This should only be called ONCE, cos it's SLOW! If you want to highlight
     * the same source multiple times, you're better off doing a whole lot of
     * str_replaces to replace the &lt;span&gt;s
     *
     * @since 1.0.0
     */
    function parse_code () {
        // Start the timer
        $start_time = microtime();

        // Replace all newlines to a common form.
        $code = str_replace("\r\n", "\n", $this->source);
        $code = str_replace("\r", "\n", $code);

        // Firstly, if there is an error, we won't highlight
        if ($this->error) {
            //Escape the source for output
            $result = $this->hsc($this->source);

            //This fix is related to SF#1923020, but has to be applied regardless of
            //actually highlighting symbols.
            $result = str_replace(array('<SEMI>', '<PIPE>'), array(';', '|'), $result);

            // Timing is irrelevant
            $this->set_time($start_time, $start_time);
            $this->finalise($result);
            return $result;
        }

        // make sure the parse cache is up2date
        if (!$this->parse_cache_built) {
            $this->build_parse_cache();
        }

        // Initialise various stuff
        $length           = strlen($code);
        $COMMENT_MATCHED  = false;
        $stuff_to_parse   = '';
        $endresult        = '';

        // "Important" selections are handled like multiline comments
        // @todo GET RID OF THIS SHIZ
        if ($this->enable_important_blocks) {
            $this->language_data['COMMENT_MULTI'][GESHI_START_IMPORTANT] = GESHI_END_IMPORTANT;
        }

        if ($this->strict_mode) {
            // Break the source into bits. Each bit will be a portion of the code
            // within script delimiters - for example, HTML between < and >
            $k = 0;
            $parts = array();
            $matches = array();
            $next_match_pointer = null;
            // we use a copy to unset delimiters on demand (when they are not found)
            $delim_copy = $this->language_data['SCRIPT_DELIMITERS'];
            $i = 0;
            while ($i < $length) {
                $next_match_pos = $length + 1; // never true
                foreach ($delim_copy as $dk => $delimiters) {
                    if(is_array($delimiters)) {
                        foreach ($delimiters as $open => $close) {
                            // make sure the cache is setup properly
                            if (!isset($matches[$dk][$open])) {
                                $matches[$dk][$open] = array(
                                    'next_match' => -1,
                                    'dk' => $dk,

                                    'open' => $open, // needed for grouping of adjacent code blocks (see below)
                                    'open_strlen' => strlen($open),

                                    'close' => $close,
                                    'close_strlen' => strlen($close),
                                );
                            }
                            // Get the next little bit for this opening string
                            if ($matches[$dk][$open]['next_match'] < $i) {
                                // only find the next pos if it was not already cached
                                $open_pos = strpos($code, $open, $i);
                                if ($open_pos === false) {
                                    // no match for this delimiter ever
                                    unset($delim_copy[$dk][$open]);
                                    continue;
                                }
                                $matches[$dk][$open]['next_match'] = $open_pos;
                            }
                            if ($matches[$dk][$open]['next_match'] < $next_match_pos) {
                                //So we got a new match, update the close_pos
                                $matches[$dk][$open]['close_pos'] =
                                    strpos($code, $close, $matches[$dk][$open]['next_match']+1);

                                $next_match_pointer =& $matches[$dk][$open];
                                $next_match_pos = $matches[$dk][$open]['next_match'];
                            }
                        }
                    } else {
                        //So we should match an RegExp as Strict Block ...
                        /**
                         * The value in $delimiters is expected to be an RegExp
                         * containing exactly 2 matching groups:
                         *  - Group 1 is the opener
                         *  - Group 2 is the closer
                         */
                        if(!GESHI_PHP_PRE_433 && //Needs proper rewrite to work with PHP >=4.3.0; 4.3.3 is guaranteed to work.
                            preg_match($delimiters, $code, $matches_rx, PREG_OFFSET_CAPTURE, $i)) {
                            //We got a match ...
                            if(isset($matches_rx['start']) && isset($matches_rx['end']))
                            {
                                $matches[$dk] = array(
                                    'next_match' => $matches_rx['start'][1],
                                    'dk' => $dk,

                                    'close_strlen' => strlen($matches_rx['end'][0]),
                                    'close_pos' => $matches_rx['end'][1],
                                    );
                            } else {
                                $matches[$dk] = array(
                                    'next_match' => $matches_rx[1][1],
                                    'dk' => $dk,

                                    'close_strlen' => strlen($matches_rx[2][0]),
                                    'close_pos' => $matches_rx[2][1],
                                    );
                            }
                        } else {
                            // no match for this delimiter ever
                            unset($delim_copy[$dk]);
                            continue;
                        }

                        if ($matches[$dk]['next_match'] <= $next_match_pos) {
                            $next_match_pointer =& $matches[$dk];
                            $next_match_pos = $matches[$dk]['next_match'];
                        }
                    }
                }

                // non-highlightable text
                $parts[$k] = array(
                    1 => substr($code, $i, $next_match_pos - $i)
                );
                ++$k;

                if ($next_match_pos > $length) {
                    // out of bounds means no next match was found
                    break;
                }

                // highlightable code
                $parts[$k][0] = $next_match_pointer['dk'];

                //Only combine for non-rx script blocks
                if(is_array($delim_copy[$next_match_pointer['dk']])) {
                    // group adjacent script blocks, e.g. <foobar><asdf> should be one block, not three!
                    $i = $next_match_pos + $next_match_pointer['open_strlen'];
                    while (true) {
                        $close_pos = strpos($code, $next_match_pointer['close'], $i);
                        if ($close_pos == false) {
                            break;
                        }
                        $i = $close_pos + $next_match_pointer['close_strlen'];
                        if ($i == $length) {
                            break;
                        }
                        if ($code[$i] == $next_match_pointer['open'][0] && ($next_match_pointer['open_strlen'] == 1 ||
                            substr($code, $i, $next_match_pointer['open_strlen']) == $next_match_pointer['open'])) {
                            // merge adjacent but make sure we don't merge things like <tag><!-- comment -->
                            foreach ($matches as $submatches) {
                                foreach ($submatches as $match) {
                                    if ($match['next_match'] == $i) {
                                        // a different block already matches here!
                                        break 3;
                                    }
                                }
                            }
                        } else {
                            break;
                        }
                    }
                } else {
                    $close_pos = $next_match_pointer['close_pos'] + $next_match_pointer['close_strlen'];
                    $i = $close_pos;
                }

                if ($close_pos === false) {
                    // no closing delimiter found!
                    $parts[$k][1] = substr($code, $next_match_pos);
                    ++$k;
                    break;
                } else {
                    $parts[$k][1] = substr($code, $next_match_pos, $i - $next_match_pos);
                    ++$k;
                }
            }
            unset($delim_copy, $next_match_pointer, $next_match_pos, $matches);
            $num_parts = $k;

            if ($num_parts == 1 && $this->strict_mode == GESHI_MAYBE) {
                // when we have only one part, we don't have anything to highlight at all.
                // if we have a "maybe" strict language, this should be handled as highlightable code
                $parts = array(
                    0 => array(
                        0 => '',
                        1 => ''
                    ),
                    1 => array(
                        0 => null,
                        1 => $parts[0][1]
                    )
                );
                $num_parts = 2;
            }

        } else {
            // Not strict mode - simply dump the source into
            // the array at index 1 (the first highlightable block)
            $parts = array(
                0 => array(
                    0 => '',
                    1 => ''
                ),
                1 => array(
                    0 => null,
                    1 => $code
                )
            );
            $num_parts = 2;
        }

        //Unset variables we won't need any longer
        unset($code);

        //Preload some repeatedly used values regarding hardquotes ...
        $hq = isset($this->language_data['HARDQUOTE']) ? $this->language_data['HARDQUOTE'][0] : false;
        $hq_strlen = strlen($hq);

        //Preload if line numbers are to be generated afterwards
        //Added a check if line breaks should be forced even without line numbers, fixes SF#1727398
        $check_linenumbers = $this->line_numbers != GESHI_NO_LINE_NUMBERS ||
            !empty($this->highlight_extra_lines) || !$this->allow_multiline_span;

        //preload the escape char for faster checking ...
        $escaped_escape_char = $this->hsc($this->language_data['ESCAPE_CHAR']);

        // this is used for single-line comments
        $sc_disallowed_before = "";
        $sc_disallowed_after = "";

        if (isset($this->language_data['PARSER_CONTROL'])) {
            if (isset($this->language_data['PARSER_CONTROL']['COMMENTS'])) {
                if (isset($this->language_data['PARSER_CONTROL']['COMMENTS']['DISALLOWED_BEFORE'])) {
                    $sc_disallowed_before = $this->language_data['PARSER_CONTROL']['COMMENTS']['DISALLOWED_BEFORE'];
                }
                if (isset($this->language_data['PARSER_CONTROL']['COMMENTS']['DISALLOWED_AFTER'])) {
                    $sc_disallowed_after = $this->language_data['PARSER_CONTROL']['COMMENTS']['DISALLOWED_AFTER'];
                }
            }
        }

        //Fix for SF#1932083: Multichar Quotemarks unsupported
        $is_string_starter = array();
        if ($this->lexic_permissions['STRINGS']) {
            foreach ($this->language_data['QUOTEMARKS'] as $quotemark) {
                if (!isset($is_string_starter[$quotemark[0]])) {
                    $is_string_starter[$quotemark[0]] = (string)$quotemark;
                } elseif (is_string($is_string_starter[$quotemark[0]])) {
                    $is_string_starter[$quotemark[0]] = array(
                        $is_string_starter[$quotemark[0]],
                        $quotemark);
                } else {
                    $is_string_starter[$quotemark[0]][] = $quotemark;
                }
            }
        }

        // Now we go through each part. We know that even-indexed parts are
        // code that shouldn't be highlighted, and odd-indexed parts should
        // be highlighted
        for ($key = 0; $key < $num_parts; ++$key) {
            $STRICTATTRS = '';

            // If this block should be highlighted...
            if (!($key & 1)) {
                // Else not a block to highlight
                $endresult .= $this->hsc($parts[$key][1]);
                unset($parts[$key]);
                continue;
            }

            $result = '';
            $part = $parts[$key][1];

            $highlight_part = true;
            if ($this->strict_mode && !is_null($parts[$key][0])) {
                // get the class key for this block of code
                $script_key = $parts[$key][0];
                $highlight_part = $this->language_data['HIGHLIGHT_STRICT_BLOCK'][$script_key];
                if ($this->language_data['STYLES']['SCRIPT'][$script_key] != '' &&
                    $this->lexic_permissions['SCRIPT']) {
                    // Add a span element around the source to
                    // highlight the overall source block
                    if (!$this->use_classes &&
                        $this->language_data['STYLES']['SCRIPT'][$script_key] != '') {
                        $attributes = ' style="' . $this->language_data['STYLES']['SCRIPT'][$script_key] . '"';
                    } else {
                        $attributes = ' class="sc' . $script_key . '"';
                    }
                    $result .= "<span$attributes>";
                    $STRICTATTRS = $attributes;
                }
            }

            if ($highlight_part) {
                // Now, highlight the code in this block. This code
                // is really the engine of GeSHi (along with the method
                // parse_non_string_part).

                // cache comment regexps incrementally
                $next_comment_regexp_key = '';
                $next_comment_regexp_pos = -1;
                $next_comment_multi_pos = -1;
                $next_comment_single_pos = -1;
                $comment_regexp_cache_per_key = array();
                $comment_multi_cache_per_key = array();
                $comment_single_cache_per_key = array();
                $next_open_comment_multi = '';
                $next_comment_single_key = '';
                $escape_regexp_cache_per_key = array();
                $next_escape_regexp_key = '';
                $next_escape_regexp_pos = -1;

                $length = strlen($part);
                for ($i = 0; $i < $length; ++$i) {
                    // Get the next char
                    $char = $part[$i];
                    $char_len = 1;

                    // update regexp comment cache if needed
                    if (isset($this->language_data['COMMENT_REGEXP']) && $next_comment_regexp_pos < $i) {
                        $next_comment_regexp_pos = $length;
                        foreach ($this->language_data['COMMENT_REGEXP'] as $comment_key => $regexp) {
                            $match_i = false;
                            if (isset($comment_regexp_cache_per_key[$comment_key]) &&
                                ($comment_regexp_cache_per_key[$comment_key]['pos'] >= $i ||
                                 $comment_regexp_cache_per_key[$comment_key]['pos'] === false)) {
                                // we have already matched something
                                if ($comment_regexp_cache_per_key[$comment_key]['pos'] === false) {
                                    // this comment is never matched
                                    continue;
                                }
                                $match_i = $comment_regexp_cache_per_key[$comment_key]['pos'];
                            } elseif (
                                //This is to allow use of the offset parameter in preg_match and stay as compatible with older PHP versions as possible
                                (GESHI_PHP_PRE_433 && preg_match($regexp, substr($part, $i), $match, PREG_OFFSET_CAPTURE)) ||
                                (!GESHI_PHP_PRE_433 && preg_match($regexp, $part, $match, PREG_OFFSET_CAPTURE, $i))
                                ) {
                                $match_i = $match[0][1];
                                if (GESHI_PHP_PRE_433) {
                                    $match_i += $i;
                                }

                                $comment_regexp_cache_per_key[$comment_key] = array(
                                    'key' => $comment_key,
                                    'length' => strlen($match[0][0]),
                                    'pos' => $match_i
                                );
                            } else {
                                $comment_regexp_cache_per_key[$comment_key]['pos'] = false;
                                continue;
                            }

                            if ($match_i !== false && $match_i < $next_comment_regexp_pos) {
                                $next_comment_regexp_pos = $match_i;
                                $next_comment_regexp_key = $comment_key;
                                if ($match_i === $i) {
                                    break;
                                }
                            }
                        }
                    }

                    $string_started = false;

                    if (isset($is_string_starter[$char])) {
                        // Possibly the start of a new string ...

                        //Check which starter it was ...
                        //Fix for SF#1932083: Multichar Quotemarks unsupported
                        if (is_array($is_string_starter[$char])) {
                            $char_new = '';
                            foreach ($is_string_starter[$char] as $testchar) {
                                if ($testchar === substr($part, $i, strlen($testchar)) &&
                                    strlen($testchar) > strlen($char_new)) {
                                    $char_new = $testchar;
                                    $string_started = true;
                                }
                            }
                            if ($string_started) {
                                $char = $char_new;
                            }
                        } else {
                            $testchar = $is_string_starter[$char];
                            if ($testchar === substr($part, $i, strlen($testchar))) {
                                $char = $testchar;
                                $string_started = true;
                            }
                        }
                        $char_len = strlen($char);
                    }

                    if ($string_started && ($i != $next_comment_regexp_pos)) {
                        // Hand out the correct style information for this string
                        $string_key = array_search($char, $this->language_data['QUOTEMARKS']);
                        if (!isset($this->language_data['STYLES']['STRINGS'][$string_key]) ||
                            !isset($this->language_data['STYLES']['ESCAPE_CHAR'][$string_key])) {
                            $string_key = 0;
                        }

                        // parse the stuff before this
                        $result .= $this->parse_non_string_part($stuff_to_parse);
                        $stuff_to_parse = '';

                        if (!$this->use_classes) {
                            $string_attributes = ' style="' . $this->language_data['STYLES']['STRINGS'][$string_key] . '"';
                        } else {
                            $string_attributes = ' class="st'.$string_key.'"';
                        }

                        // now handle the string
                        $string = "<span$string_attributes>" . GeSHi::hsc($char);
                        $start = $i + $char_len;
                        $string_open = true;

                        if(empty($this->language_data['ESCAPE_REGEXP'])) {
                            $next_escape_regexp_pos = $length;
                        }

                        do {
                            //Get the regular ending pos ...
                            $close_pos = strpos($part, $char, $start);
                            if(false === $close_pos) {
                                $close_pos = $length;
                            }

                            if($this->lexic_permissions['ESCAPE_CHAR']) {
                                // update escape regexp cache if needed
                                if (isset($this->language_data['ESCAPE_REGEXP']) && $next_escape_regexp_pos < $start) {
                                    $next_escape_regexp_pos = $length;
                                    foreach ($this->language_data['ESCAPE_REGEXP'] as $escape_key => $regexp) {
                                        $match_i = false;
                                        if (isset($escape_regexp_cache_per_key[$escape_key]) &&
                                            ($escape_regexp_cache_per_key[$escape_key]['pos'] >= $start ||
                                             $escape_regexp_cache_per_key[$escape_key]['pos'] === false)) {
                                            // we have already matched something
                                            if ($escape_regexp_cache_per_key[$escape_key]['pos'] === false) {
                                                // this comment is never matched
                                                continue;
                                            }
                                            $match_i = $escape_regexp_cache_per_key[$escape_key]['pos'];
                                        } elseif (
                                            //This is to allow use of the offset parameter in preg_match and stay as compatible with older PHP versions as possible
                                            (GESHI_PHP_PRE_433 && preg_match($regexp, substr($part, $start), $match, PREG_OFFSET_CAPTURE)) ||
                                            (!GESHI_PHP_PRE_433 && preg_match($regexp, $part, $match, PREG_OFFSET_CAPTURE, $start))
                                            ) {
                                            $match_i = $match[0][1];
                                            if (GESHI_PHP_PRE_433) {
                                                $match_i += $start;
                                            }

                                            $escape_regexp_cache_per_key[$escape_key] = array(
                                                'key' => $escape_key,
                                                'length' => strlen($match[0][0]),
                                                'pos' => $match_i
                                            );
                                        } else {
                                            $escape_regexp_cache_per_key[$escape_key]['pos'] = false;
                                            continue;
                                        }

                                        if ($match_i !== false && $match_i < $next_escape_regexp_pos) {
                                            $next_escape_regexp_pos = $match_i;
                                            $next_escape_regexp_key = $escape_key;
                                            if ($match_i === $start) {
                                                break;
                                            }
                                        }
                                    }
                                }

                                //Find the next simple escape position
                                if('' != $this->language_data['ESCAPE_CHAR']) {
                                    $simple_escape = strpos($part, $this->language_data['ESCAPE_CHAR'], $start);
                                    if(false === $simple_escape) {
                                        $simple_escape = $length;
                                    }
                                } else {
                                    $simple_escape = $length;
                                }
                            } else {
                                $next_escape_regexp_pos = $length;
                                $simple_escape = $length;
                            }

                            if($simple_escape < $next_escape_regexp_pos &&
                                $simple_escape < $length &&
                                $simple_escape < $close_pos) {
                                //The nexxt escape sequence is a simple one ...
                                $es_pos = $simple_escape;

                                //Add the stuff not in the string yet ...
                                $string .= $this->hsc(substr($part, $start, $es_pos - $start));

                                //Get the style for this escaped char ...
                                if (!$this->use_classes) {
                                    $escape_char_attributes = ' style="' . $this->language_data['STYLES']['ESCAPE_CHAR'][0] . '"';
                                } else {
                                    $escape_char_attributes = ' class="es0"';
                                }

                                //Add the style for the escape char ...
                                $string .= "<span$escape_char_attributes>" .
                                    GeSHi::hsc($this->language_data['ESCAPE_CHAR']);

                                //Get the byte AFTER the ESCAPE_CHAR we just found
                                $es_char = $part[$es_pos + 1];
                                if ($es_char == "\n") {
                                    // don't put a newline around newlines
                                    $string .= "</span>\n";
                                    $start = $es_pos + 2;
                                } elseif (ord($es_char) >= 128) {
                                    //This is an non-ASCII char (UTF8 or single byte)
                                    //This code tries to work around SF#2037598 ...
                                    if(function_exists('mb_substr')) {
                                        $es_char_m = mb_substr(substr($part, $es_pos+1, 16), 0, 1, $this->encoding);
                                        $string .= $es_char_m . '</span>';
                                    } elseif (!GESHI_PHP_PRE_433 && 'utf-8' == $this->encoding) {
                                        if(preg_match("/[\xC2-\xDF][\x80-\xBF]".
                                            "|\xE0[\xA0-\xBF][\x80-\xBF]".
                                            "|[\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}".
                                            "|\xED[\x80-\x9F][\x80-\xBF]".
                                            "|\xF0[\x90-\xBF][\x80-\xBF]{2}".
                                            "|[\xF1-\xF3][\x80-\xBF]{3}".
                                            "|\xF4[\x80-\x8F][\x80-\xBF]{2}/s",
                                            $part, $es_char_m, null, $es_pos + 1)) {
                                            $es_char_m = $es_char_m[0];
                                        } else {
                                            $es_char_m = $es_char;
                                        }
                                        $string .= $this->hsc($es_char_m) . '</span>';
                                    } else {
                                        $es_char_m = $this->hsc($es_char);
                                    }
                                    $start = $es_pos + strlen($es_char_m) + 1;
                                } else {
                                    $string .= $this->hsc($es_char) . '</span>';
                                    $start = $es_pos + 2;
                                }
                            } elseif ($next_escape_regexp_pos < $length &&
                                $next_escape_regexp_pos < $close_pos) {
                                $es_pos = $next_escape_regexp_pos;
                                //Add the stuff not in the string yet ...
                                $string .= $this->hsc(substr($part, $start, $es_pos - $start));

                                //Get the key and length of this match ...
                                $escape = $escape_regexp_cache_per_key[$next_escape_regexp_key];
                                $escape_str = substr($part, $es_pos, $escape['length']);
                                $escape_key = $escape['key'];

                                //Get the style for this escaped char ...
                                if (!$this->use_classes) {
                                    $escape_char_attributes = ' style="' . $this->language_data['STYLES']['ESCAPE_CHAR'][$escape_key] . '"';
                                } else {
                                    $escape_char_attributes = ' class="es' . $escape_key . '"';
                                }

                                //Add the style for the escape char ...
                                $string .= "<span$escape_char_attributes>" .
                                    $this->hsc($escape_str) . '</span>';

                                $start = $es_pos + $escape['length'];
                            } else {
                                //Copy the remainder of the string ...
                                $string .= $this->hsc(substr($part, $start, $close_pos - $start + $char_len)) . '</span>';
                                $start = $close_pos + $char_len;
                                $string_open = false;
                            }
                        } while($string_open);

                        if ($check_linenumbers) {
                            // Are line numbers used? If, we should end the string before
                            // the newline and begin it again (so when <li>s are put in the source
                            // remains XHTML compliant)
                            // note to self: This opens up possibility of config files specifying
                            // that languages can/cannot have multiline strings???
                            $string = str_replace("\n", "</span>\n<span$string_attributes>", $string);
                        }

                        $result .= $string;
                        $string = '';
                        $i = $start - 1;
                        continue;
                    } elseif ($this->lexic_permissions['STRINGS'] && $hq && $hq[0] == $char &&
                        substr($part, $i, $hq_strlen) == $hq && ($i != $next_comment_regexp_pos)) {
                        // The start of a hard quoted string
                        if (!$this->use_classes) {
                            $string_attributes = ' style="' . $this->language_data['STYLES']['STRINGS']['HARD'] . '"';
                            $escape_char_attributes = ' style="' . $this->language_data['STYLES']['ESCAPE_CHAR']['HARD'] . '"';
                        } else {
                            $string_attributes = ' class="st_h"';
                            $escape_char_attributes = ' class="es_h"';
                        }
                        // parse the stuff before this
                        $result .= $this->parse_non_string_part($stuff_to_parse);
                        $stuff_to_parse = '';

                        // now handle the string
                        $string = '';

                        // look for closing quote
                        $start = $i + $hq_strlen;
                        while ($close_pos = strpos($part, $this->language_data['HARDQUOTE'][1], $start)) {
                            $start = $close_pos + 1;
                            if ($this->lexic_permissions['ESCAPE_CHAR'] && $part[$close_pos - 1] == $this->language_data['HARDCHAR'] &&
                                (($i + $hq_strlen) != ($close_pos))) { //Support empty string for HQ escapes if Starter = Escape
                                // make sure this quote is not escaped
                                foreach ($this->language_data['HARDESCAPE'] as $hardescape) {
                                    if (substr($part, $close_pos - 1, strlen($hardescape)) == $hardescape) {
                                        // check wether this quote is escaped or if it is something like '\\'
                                        $escape_char_pos = $close_pos - 1;
                                        while ($escape_char_pos > 0
                                                && $part[$escape_char_pos - 1] == $this->language_data['HARDCHAR']) {
                                            --$escape_char_pos;
                                        }
                                        if (($close_pos - $escape_char_pos) & 1) {
                                            // uneven number of escape chars => this quote is escaped
                                            continue 2;
                                        }
                                    }
                                }
                            }

                            // found closing quote
                            break;
                        }

                        //Found the closing delimiter?
                        if (!$close_pos) {
                            // span till the end of this $part when no closing delimiter is found
                            $close_pos = $length;
                        }

                        //Get the actual string
                        $string = substr($part, $i, $close_pos - $i + 1);
                        $i = $close_pos;

                        // handle escape chars and encode html chars
                        // (special because when we have escape chars within our string they may not be escaped)
                        if ($this->lexic_permissions['ESCAPE_CHAR'] && $this->language_data['ESCAPE_CHAR']) {
                            $start = 0;
                            $new_string = '';
                            while ($es_pos = strpos($string, $this->language_data['ESCAPE_CHAR'], $start)) {
                                // hmtl escape stuff before
                                $new_string .= $this->hsc(substr($string, $start, $es_pos - $start));
                                // check if this is a hard escape
                                foreach ($this->language_data['HARDESCAPE'] as $hardescape) {
                                    if (substr($string, $es_pos, strlen($hardescape)) == $hardescape) {
                                        // indeed, this is a hardescape
                                        $new_string .= "<span$escape_char_attributes>" .
                                            $this->hsc($hardescape) . '</span>';
                                        $start = $es_pos + strlen($hardescape);
                                        continue 2;
                                    }
                                }
                                // not a hard escape, but a normal escape
                                // they come in pairs of two
                                $c = 0;
                                while (isset($string[$es_pos + $c]) && isset($string[$es_pos + $c + 1])
                                    && $string[$es_pos + $c] == $this->language_data['ESCAPE_CHAR']
                                    && $string[$es_pos + $c + 1] == $this->language_data['ESCAPE_CHAR']) {
                                    $c += 2;
                                }
                                if ($c) {
                                    $new_string .= "<span$escape_char_attributes>" .
                                        str_repeat($escaped_escape_char, $c) .
                                        '</span>';
                                    $start = $es_pos + $c;
                                } else {
                                    // this is just a single lonely escape char...
                                    $new_string .= $escaped_escape_char;
                                    $start = $es_pos + 1;
                                }
                            }
                            $string = $new_string . $this->hsc(substr($string, $start));
                        } else {
                            $string = $this->hsc($string);
                        }

                        if ($check_linenumbers) {
                            // Are line numbers used? If, we should end the string before
                            // the newline and begin it again (so when <li>s are put in the source
                            // remains XHTML compliant)
                            // note to self: This opens up possibility of config files specifying
                            // that languages can/cannot have multiline strings???
                            $string = str_replace("\n", "</span>\n<span$string_attributes>", $string);
                        }

                        $result .= "<span$string_attributes>" . $string . '</span>';
                        $string = '';
                        continue;
                    } else {
                        //Have a look for regexp comments
                        if ($i == $next_comment_regexp_pos) {
                            $COMMENT_MATCHED = true;
                            $comment = $comment_regexp_cache_per_key[$next_comment_regexp_key];
                            $test_str = $this->hsc(substr($part, $i, $comment['length']));

                            //@todo If remove important do remove here
                            if ($this->lexic_permissions['COMMENTS']['MULTI']) {
                                if (!$this->use_classes) {
                                    $attributes = ' style="' . $this->language_data['STYLES']['COMMENTS'][$comment['key']] . '"';
                                } else {
                                    $attributes = ' class="co' . $comment['key'] . '"';
                                }

                                $test_str = "<span$attributes>" . $test_str . "</span>";

                                // Short-cut through all the multiline code
                                if ($check_linenumbers) {
                                    // strreplace to put close span and open span around multiline newlines
                                    $test_str = str_replace(
                                        "\n", "</span>\n<span$attributes>",
                                        str_replace("\n ", "\n&nbsp;", $test_str)
                                    );
                                }
                            }

                            $i += $comment['length'] - 1;

                            // parse the rest
                            $result .= $this->parse_non_string_part($stuff_to_parse);
                            $stuff_to_parse = '';
                        }

                        // If we haven't matched a regexp comment, try multi-line comments
                        if (!$COMMENT_MATCHED) {
                            // Is this a multiline comment?
                            if (!empty($this->language_data['COMMENT_MULTI']) && $next_comment_multi_pos < $i) {
                                $next_comment_multi_pos = $length;
                                foreach ($this->language_data['COMMENT_MULTI'] as $open => $close) {
                                    $match_i = false;
                                    if (isset($comment_multi_cache_per_key[$open]) &&
                                        ($comment_multi_cache_per_key[$open] >= $i ||
                                         $comment_multi_cache_per_key[$open] === false)) {
                                        // we have already matched something
                                        if ($comment_multi_cache_per_key[$open] === false) {
                                            // this comment is never matched
                                            continue;
                                        }
                                        $match_i = $comment_multi_cache_per_key[$open];
                                    } elseif (($match_i = stripos($part, $open, $i)) !== false) {
                                        $comment_multi_cache_per_key[$open] = $match_i;
                                    } else {
                                        $comment_multi_cache_per_key[$open] = false;
                                        continue;
                                    }
                                    if ($match_i !== false && $match_i < $next_comment_multi_pos) {
                                        $next_comment_multi_pos = $match_i;
                                        $next_open_comment_multi = $open;
                                        if ($match_i === $i) {
                                            break;
                                        }
                                    }
                                }
                            }
                            if ($i == $next_comment_multi_pos) {
                                $open = $next_open_comment_multi;
                                $close = $this->language_data['COMMENT_MULTI'][$open];
                                $open_strlen = strlen($open);
                                $close_strlen = strlen($close);
                                $COMMENT_MATCHED = true;
                                $test_str_match = $open;
                                //@todo If remove important do remove here
                                if ($this->lexic_permissions['COMMENTS']['MULTI'] ||
                                    $open == GESHI_START_IMPORTANT) {
                                    if ($open != GESHI_START_IMPORTANT) {
                                        if (!$this->use_classes) {
                                            $attributes = ' style="' . $this->language_data['STYLES']['COMMENTS']['MULTI'] . '"';
                                        } else {
                                            $attributes = ' class="coMULTI"';
                                        }
                                        $test_str = "<span$attributes>" . $this->hsc($open);
                                    } else {
                                        if (!$this->use_classes) {
                                            $attributes = ' style="' . $this->important_styles . '"';
                                        } else {
                                            $attributes = ' class="imp"';
                                        }

                                        // We don't include the start of the comment if it's an
                                        // "important" part
                                        $test_str = "<span$attributes>";
                                    }
                                } else {
                                    $test_str = $this->hsc($open);
                                }

                                $close_pos = strpos( $part, $close, $i + $open_strlen );

                                if ($close_pos === false) {
                                    $close_pos = $length;
                                }

                                // Short-cut through all the multiline code
                                $rest_of_comment = $this->hsc(substr($part, $i + $open_strlen, $close_pos - $i - $open_strlen + $close_strlen));
                                if (($this->lexic_permissions['COMMENTS']['MULTI'] ||
                                    $test_str_match == GESHI_START_IMPORTANT) &&
                                    $check_linenumbers) {

                                    // strreplace to put close span and open span around multiline newlines
                                    $test_str .= str_replace(
                                        "\n", "</span>\n<span$attributes>",
                                        str_replace("\n ", "\n&nbsp;", $rest_of_comment)
                                    );
                                } else {
                                    $test_str .= $rest_of_comment;
                                }

                                if ($this->lexic_permissions['COMMENTS']['MULTI'] ||
                                    $test_str_match == GESHI_START_IMPORTANT) {
                                    $test_str .= '</span>';
                                }

                                $i = $close_pos + $close_strlen - 1;

                                // parse the rest
                                $result .= $this->parse_non_string_part($stuff_to_parse);
                                $stuff_to_parse = '';
                            }
                        }

                        // If we haven't matched a multiline comment, try single-line comments
                        if (!$COMMENT_MATCHED) {
                            // cache potential single line comment occurances
                            if (!empty($this->language_data['COMMENT_SINGLE']) && $next_comment_single_pos < $i) {
                                $next_comment_single_pos = $length;
                                foreach ($this->language_data['COMMENT_SINGLE'] as $comment_key => $comment_mark) {
                                    $match_i = false;
                                    if (isset($comment_single_cache_per_key[$comment_key]) &&
                                        ($comment_single_cache_per_key[$comment_key] >= $i ||
                                         $comment_single_cache_per_key[$comment_key] === false)) {
                                        // we have already matched something
                                        if ($comment_single_cache_per_key[$comment_key] === false) {
                                            // this comment is never matched
                                            continue;
                                        }
                                        $match_i = $comment_single_cache_per_key[$comment_key];
                                    } elseif (
                                        // case sensitive comments
                                        ($this->language_data['CASE_SENSITIVE'][GESHI_COMMENTS] &&
                                        ($match_i = stripos($part, $comment_mark, $i)) !== false) ||
                                        // non case sensitive
                                        (!$this->language_data['CASE_SENSITIVE'][GESHI_COMMENTS] &&
                                          (($match_i = strpos($part, $comment_mark, $i)) !== false))) {
                                        $comment_single_cache_per_key[$comment_key] = $match_i;
                                    } else {
                                        $comment_single_cache_per_key[$comment_key] = false;
                                        continue;
                                    }
                                    if ($match_i !== false && $match_i < $next_comment_single_pos) {
                                        $next_comment_single_pos = $match_i;
                                        $next_comment_single_key = $comment_key;
                                        if ($match_i === $i) {
                                            break;
                                        }
                                    }
                                }
                            }
                            if ($next_comment_single_pos == $i) {
                                $comment_key = $next_comment_single_key;
                                $comment_mark = $this->language_data['COMMENT_SINGLE'][$comment_key];
                                $com_len = strlen($comment_mark);

                                // This check will find special variables like $# in bash
                                // or compiler directives of Delphi beginning {$
                                if ((empty($sc_disallowed_before) || ($i == 0) ||
                                    (false === strpos($sc_disallowed_before, $part[$i-1]))) &&
                                    (empty($sc_disallowed_after) || ($length <= $i + $com_len) ||
                                    (false === strpos($sc_disallowed_after, $part[$i + $com_len]))))
                                {
                                    // this is a valid comment
                                    $COMMENT_MATCHED = true;
                                    if ($this->lexic_permissions['COMMENTS'][$comment_key]) {
                                        if (!$this->use_classes) {
                                            $attributes = ' style="' . $this->language_data['STYLES']['COMMENTS'][$comment_key] . '"';
                                        } else {
                                            $attributes = ' class="co' . $comment_key . '"';
                                        }
                                        $test_str = "<span$attributes>" . $this->hsc($this->change_case($comment_mark));
                                    } else {
                                        $test_str = $this->hsc($comment_mark);
                                    }

                                    //Check if this comment is the last in the source
                                    $close_pos = strpos($part, "\n", $i);
                                    $oops = false;
                                    if ($close_pos === false) {
                                        $close_pos = $length;
                                        $oops = true;
                                    }
                                    $test_str .= $this->hsc(substr($part, $i + $com_len, $close_pos - $i - $com_len));
                                    if ($this->lexic_permissions['COMMENTS'][$comment_key]) {
                                        $test_str .= "</span>";
                                    }

                                    // Take into account that the comment might be the last in the source
                                    if (!$oops) {
                                      $test_str .= "\n";
                                    }

                                    $i = $close_pos;

                                    // parse the rest
                                    $result .= $this->parse_non_string_part($stuff_to_parse);
                                    $stuff_to_parse = '';
                                }
                            }
                        }
                    }

                    // Where are we adding this char?
                    if (!$COMMENT_MATCHED) {
                        $stuff_to_parse .= $char;
                    } else {
                        $result .= $test_str;
                        unset($test_str);
                        $COMMENT_MATCHED = false;
                    }
                }
                // Parse the last bit
                $result .= $this->parse_non_string_part($stuff_to_parse);
                $stuff_to_parse = '';
            } else {
                $result .= $this->hsc($part);
            }
            // Close the <span> that surrounds the block
            if ($STRICTATTRS != '') {
                $result = str_replace("\n", "</span>\n<span$STRICTATTRS>", $result);
                $result .= '</span>';
            }

            $endresult .= $result;
            unset($part, $parts[$key], $result);
        }

        //This fix is related to SF#1923020, but has to be applied regardless of
        //actually highlighting symbols.
        /** NOTE: memorypeak #3 */
        $endresult = str_replace(array('<SEMI>', '<PIPE>'), array(';', '|'), $endresult);

//        // Parse the last stuff (redundant?)
//        $result .= $this->parse_non_string_part($stuff_to_parse);

        // Lop off the very first and last spaces
//        $result = substr($result, 1, -1);

        // We're finished: stop timing
        $this->set_time($start_time, microtime());

        $this->finalise($endresult);
        return $endresult;
    }

    /**
     * Swaps out spaces and tabs for HTML indentation. Not needed if
     * the code is in a pre block...
     *
     * @param  string The source to indent (reference!)
     * @since  1.0.0
     * @access private
     */
    function indent(&$result) {
        /// Replace tabs with the correct number of spaces
        if (false !== strpos($result, "\t")) {
            $lines = explode("\n", $result);
            $result = null;//Save memory while we process the lines individually
            $tab_width = $this->get_real_tab_width();
            $tab_string = '&nbsp;' . str_repeat(' ', $tab_width);

            for ($key = 0, $n = count($lines); $key < $n; $key++) {
                $line = $lines[$key];
                if (false === strpos($line, "\t")) {
                    continue;
                }

                $pos = 0;
                $length = strlen($line);
                $lines[$key] = ''; // reduce memory

                $IN_TAG = false;
                for ($i = 0; $i < $length; ++$i) {
                    $char = $line[$i];
                    // Simple engine to work out whether we're in a tag.
                    // If we are we modify $pos. This is so we ignore HTML
                    // in the line and only workout the tab replacement
                    // via the actual content of the string
                    // This test could be improved to include strings in the
                    // html so that < or > would be allowed in user's styles
                    // (e.g. quotes: '<' '>'; or similar)
                    if ($IN_TAG) {
                        if ('>' == $char) {
                            $IN_TAG = false;
                        }
                        $lines[$key] .= $char;
                    } elseif ('<' == $char) {
                        $IN_TAG = true;
                        $lines[$key] .= '<';
                    } elseif ('&' == $char) {
                        $substr = substr($line, $i + 3, 5);
                        $posi = strpos($substr, ';');
                        if (false === $posi) {
                            ++$pos;
                        } else {
                            $pos -= $posi+2;
                        }
                        $lines[$key] .= $char;
                    } elseif ("\t" == $char) {
                        $str = '';
                        // OPTIMISE - move $strs out. Make an array:
                        // $tabs = array(
                        //  1 => '&nbsp;',
                        //  2 => '&nbsp; ',
                        //  3 => '&nbsp; &nbsp;' etc etc
                        // to use instead of building a string every time
                        $tab_end_width = $tab_width - ($pos % $tab_width); //Moved out of the look as it doesn't change within the loop
                        if (($pos & 1) || 1 == $tab_end_width) {
                            $str .= substr($tab_string, 6, $tab_end_width);
                        } else {
                            $str .= substr($tab_string, 0, $tab_end_width+5);
                        }
                        $lines[$key] .= $str;
                        $pos += $tab_end_width;

                        if (false === strpos($line, "\t", $i + 1)) {
                            $lines[$key] .= substr($line, $i + 1);
                            break;
                        }
                    } elseif (0 == $pos && ' ' == $char) {
                        $lines[$key] .= '&nbsp;';
                        ++$pos;
                    } else {
                        $lines[$key] .= $char;
                        ++$pos;
                    }
                }
            }
            $result = implode("\n", $lines);
            unset($lines);//We don't need the lines separated beyond this --- free them!
        }
        // Other whitespace
        // BenBE: Fix to reduce the number of replacements to be done
        $result = preg_replace('/^ /m', '&nbsp;', $result);
        $result = str_replace('  ', ' &nbsp;', $result);

        if ($this->line_numbers == GESHI_NO_LINE_NUMBERS && $this->header_type != GESHI_HEADER_PRE_TABLE) {
            if ($this->line_ending === null) {
                $result = nl2br($result);
            } else {
                $result = str_replace("\n", $this->line_ending, $result);
            }
        }
    }

    /**
     * Changes the case of a keyword for those languages where a change is asked for
     *
     * @param  string The keyword to change the case of
     * @return string The keyword with its case changed
     * @since  1.0.0
     * @access private
     */
    function change_case($instr) {
        switch ($this->language_data['CASE_KEYWORDS']) {
            case GESHI_CAPS_UPPER:
                return strtoupper($instr);
            case GESHI_CAPS_LOWER:
                return strtolower($instr);
            default:
                return $instr;
        }
    }

    /**
     * Handles replacements of keywords to include markup and links if requested
     *
     * @param  string The keyword to add the Markup to
     * @return The HTML for the match found
     * @since  1.0.8
     * @access private
     *
     * @todo   Get rid of ender in keyword links
     */
    function handle_keyword_replace($match) {
        $k = $this->_kw_replace_group;
        $keyword = $match[0];
        $keyword_match = $match[1];

        $before = '';
        $after = '';

        if ($this->keyword_links) {
            // Keyword links have been ebabled

            if (isset($this->language_data['URLS'][$k]) &&
                $this->language_data['URLS'][$k] != '') {
                // There is a base group for this keyword

                // Old system: strtolower
                //$keyword = ( $this->language_data['CASE_SENSITIVE'][$group] ) ? $keyword : strtolower($keyword);
                // New system: get keyword from language file to get correct case
                if (!$this->language_data['CASE_SENSITIVE'][$k] &&
                    strpos($this->language_data['URLS'][$k], '{FNAME}') !== false) {
                    foreach ($this->language_data['KEYWORDS'][$k] as $word) {
                        if (strcasecmp($word, $keyword_match) == 0) {
                            break;
                        }
                    }
                } else {
                    $word = $keyword_match;
                }

                $before = '<|UR1|"' .
                    str_replace(
                        array(
                            '{FNAME}',
                            '{FNAMEL}',
                            '{FNAMEU}',
                            '.'),
                        array(
                            str_replace('+', '%20', urlencode($this->hsc($word))),
                            str_replace('+', '%20', urlencode($this->hsc(strtolower($word)))),
                            str_replace('+', '%20', urlencode($this->hsc(strtoupper($word)))),
                            '<DOT>'),
                        $this->language_data['URLS'][$k]
                    ) . '">';
                $after = '</a>';
            }
        }

        return $before . '<|/'. $k .'/>' . $this->change_case($keyword) . '|>' . $after;
    }

    /**
     * handles regular expressions highlighting-definitions with callback functions
     *
     * @note this is a callback, don't use it directly
     *
     * @param array the matches array
     * @return The highlighted string
     * @since 1.0.8
     * @access private
     */
    function handle_regexps_callback($matches) {
        // before: "' style=\"' . call_user_func(\"$func\", '\\1') . '\"\\1|>'",
        return  ' style="' . call_user_func($this->language_data['STYLES']['REGEXPS'][$this->_rx_key], $matches[1]) . '"'. $matches[1] . '|>';
    }

    /**
     * handles newlines in REGEXPS matches. Set the _hmr_* vars before calling this
     *
     * @note this is a callback, don't use it directly
     *
     * @param array the matches array
     * @return string
     * @since 1.0.8
     * @access private
     */
    function handle_multiline_regexps($matches) {
        $before = $this->_hmr_before;
        $after = $this->_hmr_after;
        if ($this->_hmr_replace) {
            $replace = $this->_hmr_replace;
            $search = array();

            foreach (array_keys($matches) as $k) {
                $search[] = '\\' . $k;
            }

            $before = str_replace($search, $matches, $before);
            $after = str_replace($search, $matches, $after);
            $replace = str_replace($search, $matches, $replace);
        } else {
            $replace = $matches[0];
        }
        return $before
                    . '<|!REG3XP' . $this->_hmr_key .'!>'
                        . str_replace("\n", "|>\n<|!REG3XP" . $this->_hmr_key . '!>', $replace)
                    . '|>'
              . $after;
    }

    /**
     * Takes a string that has no strings or comments in it, and highlights
     * stuff like keywords, numbers and methods.
     *
     * @param string The string to parse for keyword, numbers etc.
     * @since 1.0.0
     * @access private
     * @todo BUGGY! Why? Why not build string and return?
     */
    function parse_non_string_part($stuff_to_parse) {
        $stuff_to_parse = ' ' . $this->hsc($stuff_to_parse);

        // Highlight keywords
        $disallowed_before = "(?<![a-zA-Z0-9\$_\|\#|^&";
        $disallowed_after = "(?![a-zA-Z0-9_\|%\\-&;";
        if ($this->lexic_permissions['STRINGS']) {
            $quotemarks = preg_quote(implode($this->language_data['QUOTEMARKS']), '/');
            $disallowed_before .= $quotemarks;
            $disallowed_after .= $quotemarks;
        }
        $disallowed_before .= "])";
        $disallowed_after .= "])";

        $parser_control_pergroup = false;
        if (isset($this->language_data['PARSER_CONTROL'])) {
            if (isset($this->language_data['PARSER_CONTROL']['KEYWORDS'])) {
                $x = 0; // check wether per-keyword-group parser_control is enabled
                if (isset($this->language_data['PARSER_CONTROL']['KEYWORDS']['DISALLOWED_BEFORE'])) {
                    $disallowed_before = $this->language_data['PARSER_CONTROL']['KEYWORDS']['DISALLOWED_BEFORE'];
                    ++$x;
                }
                if (isset($this->language_data['PARSER_CONTROL']['KEYWORDS']['DISALLOWED_AFTER'])) {
                    $disallowed_after = $this->language_data['PARSER_CONTROL']['KEYWORDS']['DISALLOWED_AFTER'];
                    ++$x;
                }
                $parser_control_pergroup = (count($this->language_data['PARSER_CONTROL']['KEYWORDS']) - $x) > 0;
            }
        }

        foreach (array_keys($this->language_data['KEYWORDS']) as $k) {
            if (!isset($this->lexic_permissions['KEYWORDS'][$k]) ||
                $this->lexic_permissions['KEYWORDS'][$k]) {

                $case_sensitive = $this->language_data['CASE_SENSITIVE'][$k];
                $modifiers = $case_sensitive ? '' : 'i';

                // NEW in 1.0.8 - per-keyword-group parser control
                $disallowed_before_local = $disallowed_before;
                $disallowed_after_local = $disallowed_after;
                if ($parser_control_pergroup && isset($this->language_data['PARSER_CONTROL']['KEYWORDS'][$k])) {
                    if (isset($this->language_data['PARSER_CONTROL']['KEYWORDS'][$k]['DISALLOWED_BEFORE'])) {
                        $disallowed_before_local =
                            $this->language_data['PARSER_CONTROL']['KEYWORDS'][$k]['DISALLOWED_BEFORE'];
                    }

                    if (isset($this->language_data['PARSER_CONTROL']['KEYWORDS'][$k]['DISALLOWED_AFTER'])) {
                        $disallowed_after_local =
                            $this->language_data['PARSER_CONTROL']['KEYWORDS'][$k]['DISALLOWED_AFTER'];
                    }
                }

                $this->_kw_replace_group = $k;

                //NEW in 1.0.8, the cached regexp list
                // since we don't want PHP / PCRE to crash due to too large patterns we split them into smaller chunks
                for ($set = 0, $set_length = count($this->language_data['CACHED_KEYWORD_LISTS'][$k]); $set <  $set_length; ++$set) {
                    $keywordset =& $this->language_data['CACHED_KEYWORD_LISTS'][$k][$set];
                    // Might make a more unique string for putting the number in soon
                    // Basically, we don't put the styles in yet because then the styles themselves will
                    // get highlighted if the language has a CSS keyword in it (like CSS, for example ;))
                    $stuff_to_parse = preg_replace_callback(
                        "/$disallowed_before_local({$keywordset})(?!\<DOT\>(?:htm|php|aspx?))$disallowed_after_local/$modifiers",
                        array($this, 'handle_keyword_replace'),
                        $stuff_to_parse
                        );
                }
            }
        }

        // Regular expressions
        foreach ($this->language_data['REGEXPS'] as $key => $regexp) {
            if ($this->lexic_permissions['REGEXPS'][$key]) {
                if (is_array($regexp)) {
                    if ($this->line_numbers != GESHI_NO_LINE_NUMBERS) {
                        // produce valid HTML when we match multiple lines
                        $this->_hmr_replace = $regexp[GESHI_REPLACE];
                        $this->_hmr_before = $regexp[GESHI_BEFORE];
                        $this->_hmr_key = $key;
                        $this->_hmr_after = $regexp[GESHI_AFTER];
                        $stuff_to_parse = preg_replace_callback(
                            "/" . $regexp[GESHI_SEARCH] . "/{$regexp[GESHI_MODIFIERS]}",
                            array($this, 'handle_multiline_regexps'),
                            $stuff_to_parse);
                        $this->_hmr_replace = false;
                        $this->_hmr_before = '';
                        $this->_hmr_after = '';
                    } else {
                        $stuff_to_parse = preg_replace(
                            '/' . $regexp[GESHI_SEARCH] . '/' . $regexp[GESHI_MODIFIERS],
                            $regexp[GESHI_BEFORE] . '<|!REG3XP'. $key .'!>' . $regexp[GESHI_REPLACE] . '|>' . $regexp[GESHI_AFTER],
                            $stuff_to_parse);
                    }
                } else {
                    if ($this->line_numbers != GESHI_NO_LINE_NUMBERS) {
                        // produce valid HTML when we match multiple lines
                        $this->_hmr_key = $key;
                        $stuff_to_parse = preg_replace_callback( "/(" . $regexp . ")/",
                                              array($this, 'handle_multiline_regexps'), $stuff_to_parse);
                        $this->_hmr_key = '';
                    } else {
                        $stuff_to_parse = preg_replace( "/(" . $regexp . ")/", "<|!REG3XP$key!>\\1|>", $stuff_to_parse);
                    }
                }
            }
        }

        // Highlight numbers. As of 1.0.8 we support different types of numbers
        $numbers_found = false;

        if ($this->lexic_permissions['NUMBERS'] && preg_match($this->language_data['PARSER_CONTROL']['NUMBERS']['PRECHECK_RX'], $stuff_to_parse )) {
            $numbers_found = true;

            //For each of the formats ...
            foreach($this->language_data['NUMBERS_RXCACHE'] as $id => $regexp) {
                //Check if it should be highlighted ...
                $stuff_to_parse = preg_replace($regexp, "<|/NUM!$id/>\\1|>", $stuff_to_parse);
            }
        }

        //
        // Now that's all done, replace /[number]/ with the correct styles
        //
        foreach (array_keys($this->language_data['KEYWORDS']) as $k) {
            if (!$this->use_classes) {
                $attributes = ' style="' .
                    (isset($this->language_data['STYLES']['KEYWORDS'][$k]) ?
                    $this->language_data['STYLES']['KEYWORDS'][$k] : "") . '"';
            } else {
                $attributes = ' class="kw' . $k . '"';
            }
            $stuff_to_parse = str_replace("<|/$k/>", "<|$attributes>", $stuff_to_parse);
        }

        if ($numbers_found) {
            // Put number styles in
            foreach($this->language_data['NUMBERS_RXCACHE'] as $id => $regexp) {
                //Commented out for now, as this needs some review ...
                //                if ($numbers_permissions & $id) {
                //Get the appropriate style ...
                //Checking for unset styles is done by the style cache builder ...
                if (!$this->use_classes) {
                    $attributes = ' style="' . $this->language_data['STYLES']['NUMBERS'][$id] . '"';
                } else {
                    $attributes = ' class="nu'.$id.'"';
                }

                //Set in the correct styles ...
                $stuff_to_parse = str_replace("/NUM!$id/", $attributes, $stuff_to_parse);
                //                }
            }
        }

        // Highlight methods and fields in objects
        if ($this->lexic_permissions['METHODS'] && $this->language_data['OOLANG']) {
            $oolang_spaces = "[\s]*";
            $oolang_before = "";
            $oolang_after = "[a-zA-Z][a-zA-Z0-9_]*";
            if (isset($this->language_data['PARSER_CONTROL'])) {
                if (isset($this->language_data['PARSER_CONTROL']['OOLANG'])) {
                    if (isset($this->language_data['PARSER_CONTROL']['OOLANG']['MATCH_BEFORE'])) {
                        $oolang_before = $this->language_data['PARSER_CONTROL']['OOLANG']['MATCH_BEFORE'];
                    }
                    if (isset($this->language_data['PARSER_CONTROL']['OOLANG']['MATCH_AFTER'])) {
                        $oolang_after = $this->language_data['PARSER_CONTROL']['OOLANG']['MATCH_AFTER'];
                    }
                    if (isset($this->language_data['PARSER_CONTROL']['OOLANG']['MATCH_SPACES'])) {
                        $oolang_spaces = $this->language_data['PARSER_CONTROL']['OOLANG']['MATCH_SPACES'];
                    }
                }
            }

            foreach ($this->language_data['OBJECT_SPLITTERS'] as $key => $splitter) {
                if (false !== strpos($stuff_to_parse, $splitter)) {
                    if (!$this->use_classes) {
                        $attributes = ' style="' . $this->language_data['STYLES']['METHODS'][$key] . '"';
                    } else {
                        $attributes = ' class="me' . $key . '"';
                    }
                    $stuff_to_parse = preg_replace("/($oolang_before)(" . preg_quote($this->language_data['OBJECT_SPLITTERS'][$key], '/') . ")($oolang_spaces)($oolang_after)/", "\\1\\2\\3<|$attributes>\\4|>", $stuff_to_parse);
                }
            }
        }

        //
        // Highlight brackets. Yes, I've tried adding a semi-colon to this list.
        // You try it, and see what happens ;)
        // TODO: Fix lexic permissions not converting entities if shouldn't
        // be highlighting regardless
        //
        if ($this->lexic_permissions['BRACKETS']) {
            $stuff_to_parse = str_replace( $this->language_data['CACHE_BRACKET_MATCH'],
                              $this->language_data['CACHE_BRACKET_REPLACE'], $stuff_to_parse );
        }


        //FIX for symbol highlighting ...
        if ($this->lexic_permissions['SYMBOLS'] && !empty($this->language_data['SYMBOLS'])) {
            //Get all matches and throw away those witin a block that is already highlighted... (i.e. matched by a regexp)
            $n_symbols = preg_match_all("/<\|(?:<DOT>|[^>])+>(?:(?!\|>).*?)\|>|<\/a>|(?:" . $this->language_data['SYMBOL_SEARCH'] . ")+(?![^<]+?>)/", $stuff_to_parse, $pot_symbols, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);
            $global_offset = 0;
            for ($s_id = 0; $s_id < $n_symbols; ++$s_id) {
                $symbol_match = $pot_symbols[$s_id][0][0];
                if (strpos($symbol_match, '<') !== false || strpos($symbol_match, '>') !== false) {
                    // already highlighted blocks _must_ include either < or >
                    // so if this conditional applies, we have to skip this match
                    // BenBE: UNLESS the block contains <SEMI> or <PIPE>
                    if(strpos($symbol_match, '<SEMI>') === false &&
                        strpos($symbol_match, '<PIPE>') === false) {
                        continue;
                    }
                }

                // if we reach this point, we have a valid match which needs to be highlighted

                $symbol_length = strlen($symbol_match);
                $symbol_offset = $pot_symbols[$s_id][0][1];
                unset($pot_symbols[$s_id]);
                $symbol_end = $symbol_length + $symbol_offset;
                $symbol_hl = "";

                // if we have multiple styles, we have to handle them properly
                if ($this->language_data['MULTIPLE_SYMBOL_GROUPS']) {
                    $old_sym = -1;
                    // Split the current stuff to replace into its atomic symbols ...
                    preg_match_all("/" . $this->language_data['SYMBOL_SEARCH'] . "/", $symbol_match, $sym_match_syms, PREG_PATTERN_ORDER);
                    foreach ($sym_match_syms[0] as $sym_ms) {
                        //Check if consequtive symbols belong to the same group to save output ...
                        if (isset($this->language_data['SYMBOL_DATA'][$sym_ms])
                            && ($this->language_data['SYMBOL_DATA'][$sym_ms] != $old_sym)) {
                            if (-1 != $old_sym) {
                                $symbol_hl .= "|>";
                            }
                            $old_sym = $this->language_data['SYMBOL_DATA'][$sym_ms];
                            if (!$this->use_classes) {
                                $symbol_hl .= '<| style="' . $this->language_data['STYLES']['SYMBOLS'][$old_sym] . '">';
                            } else {
                                $symbol_hl .= '<| class="sy' . $old_sym . '">';
                            }
                        }
                        $symbol_hl .= $sym_ms;
                    }
                    unset($sym_match_syms);

                    //Close remaining tags and insert the replacement at the right position ...
                    //Take caution if symbol_hl is empty to avoid doubled closing spans.
                    if (-1 != $old_sym) {
                        $symbol_hl .= "|>";
                    }
                } else {
                    if (!$this->use_classes) {
                        $symbol_hl = '<| style="' . $this->language_data['STYLES']['SYMBOLS'][0] . '">';
                    } else {
                        $symbol_hl = '<| class="sy0">';
                    }
                    $symbol_hl .= $symbol_match . '|>';
                }

                $stuff_to_parse = substr_replace($stuff_to_parse, $symbol_hl, $symbol_offset + $global_offset, $symbol_length);

                // since we replace old text with something of different size,
                // we'll have to keep track of the differences
                $global_offset += strlen($symbol_hl) - $symbol_length;
            }
        }
        //FIX for symbol highlighting ...

        // Add class/style for regexps
        foreach (array_keys($this->language_data['REGEXPS']) as $key) {
            if ($this->lexic_permissions['REGEXPS'][$key]) {
                if (is_callable($this->language_data['STYLES']['REGEXPS'][$key])) {
                    $this->_rx_key = $key;
                    $stuff_to_parse = preg_replace_callback("/!REG3XP$key!(.*)\|>/U",
                        array($this, 'handle_regexps_callback'),
                        $stuff_to_parse);
                } else {
                    if (!$this->use_classes) {
                        $attributes = ' style="' . $this->language_data['STYLES']['REGEXPS'][$key] . '"';
                    } else {
                        if (is_array($this->language_data['REGEXPS'][$key]) &&
                            array_key_exists(GESHI_CLASS, $this->language_data['REGEXPS'][$key])) {
                            $attributes = ' class="' .
                                $this->language_data['REGEXPS'][$key][GESHI_CLASS] . '"';
                        } else {
                           $attributes = ' class="re' . $key . '"';
                        }
                    }
                    $stuff_to_parse = str_replace("!REG3XP$key!", "$attributes", $stuff_to_parse);
                }
            }
        }

        // Replace <DOT> with . for urls
        $stuff_to_parse = str_replace('<DOT>', '.', $stuff_to_parse);
        // Replace <|UR1| with <a href= for urls also
        if (isset($this->link_styles[GESHI_LINK])) {
            if ($this->use_classes) {
                $stuff_to_parse = str_replace('<|UR1|', '<a' . $this->link_target . ' href=', $stuff_to_parse);
            } else {
                $stuff_to_parse = str_replace('<|UR1|', '<a' . $this->link_target . ' style="' . $this->link_styles[GESHI_LINK] . '" href=', $stuff_to_parse);
            }
        } else {
            $stuff_to_parse = str_replace('<|UR1|', '<a' . $this->link_target . ' href=', $stuff_to_parse);
        }

        //
        // NOW we add the span thingy ;)
        //

        $stuff_to_parse = str_replace('<|', '<span', $stuff_to_parse);
        $stuff_to_parse = str_replace ( '|>', '</span>', $stuff_to_parse );
        return substr($stuff_to_parse, 1);
    }

    /**
     * Sets the time taken to parse the code
     *
     * @param microtime The time when parsing started
     * @param microtime The time when parsing ended
     * @since 1.0.2
     * @access private
     */
    function set_time($start_time, $end_time) {
        $start = explode(' ', $start_time);
        $end = explode(' ', $end_time);
        $this->time = $end[0] + $end[1] - $start[0] - $start[1];
    }

    /**
     * Gets the time taken to parse the code
     *
     * @return double The time taken to parse the code
     * @since  1.0.2
     */
    function get_time() {
        return $this->time;
    }

    /**
     * Merges arrays recursively, overwriting values of the first array with values of later arrays
     *
     * @since 1.0.8
     * @access private
     */
    function merge_arrays() {
        $arrays = func_get_args();
        $narrays = count($arrays);

        // check arguments
        // comment out if more performance is necessary (in this case the foreach loop will trigger a warning if the argument is not an array)
        for ($i = 0; $i < $narrays; $i ++) {
            if (!is_array($arrays[$i])) {
                // also array_merge_recursive returns nothing in this case
                trigger_error('Argument #' . ($i+1) . ' is not an array - trying to merge array with scalar! Returning false!', E_USER_WARNING);
                return false;
            }
        }

        // the first array is in the output set in every case
        $ret = $arrays[0];

        // merege $ret with the remaining arrays
        for ($i = 1; $i < $narrays; $i ++) {
            foreach ($arrays[$i] as $key => $value) {
                if (is_array($value) && isset($ret[$key])) {
                    // if $ret[$key] is not an array you try to merge an scalar value with an array - the result is not defined (incompatible arrays)
                    // in this case the call will trigger an E_USER_WARNING and the $ret[$key] will be false.
                    $ret[$key] = $this->merge_arrays($ret[$key], $value);
                } else {
                    $ret[$key] = $value;
                }
            }
        }

        return $ret;
    }

    /**
     * Gets language information and stores it for later use
     *
     * @param string The filename of the language file you want to load
     * @since 1.0.0
     * @access private
     * @todo Needs to load keys for lexic permissions for keywords, regexps etc
     */
    function load_language($file_name) {
        if ($file_name == $this->loaded_language) {
            // this file is already loaded!
            return;
        }

        //Prepare some stuff before actually loading the language file
        $this->loaded_language = $file_name;
        $this->parse_cache_built = false;
        $this->enable_highlighting();
        $language_data = array();

        //Load the language file
        require $file_name;

        // Perhaps some checking might be added here later to check that
        // $language data is a valid thing but maybe not
        $this->language_data = $language_data;

        // Set strict mode if should be set
        $this->strict_mode = $this->language_data['STRICT_MODE_APPLIES'];

        // Set permissions for all lexics to true
        // so they'll be highlighted by default
        foreach (array_keys($this->language_data['KEYWORDS']) as $key) {
            if (!empty($this->language_data['KEYWORDS'][$key])) {
                $this->lexic_permissions['KEYWORDS'][$key] = true;
            } else {
                $this->lexic_permissions['KEYWORDS'][$key] = false;
            }
        }

        foreach (array_keys($this->language_data['COMMENT_SINGLE']) as $key) {
            $this->lexic_permissions['COMMENTS'][$key] = true;
        }
        foreach (array_keys($this->language_data['REGEXPS']) as $key) {
            $this->lexic_permissions['REGEXPS'][$key] = true;
        }

        // for BenBE and future code reviews:
        // we can use empty here since we only check for existance and emptiness of an array
        // if it is not an array at all but rather false or null this will work as intended as well
        // even if $this->language_data['PARSER_CONTROL'] is undefined this won't trigger a notice
        if (!empty($this->language_data['PARSER_CONTROL']['ENABLE_FLAGS'])) {
            foreach ($this->language_data['PARSER_CONTROL']['ENABLE_FLAGS'] as $flag => $value) {
                // it's either true or false and maybe is true as well
                $perm = $value !== GESHI_NEVER;
                if ($flag == 'ALL') {
                    $this->enable_highlighting($perm);
                    continue;
                }
                if (!isset($this->lexic_permissions[$flag])) {
                    // unknown lexic permission
                    continue;
                }
                if (is_array($this->lexic_permissions[$flag])) {
                    foreach ($this->lexic_permissions[$flag] as $key => $val) {
                        $this->lexic_permissions[$flag][$key] = $perm;
                    }
                } else {
                    $this->lexic_permissions[$flag] = $perm;
                }
            }
            unset($this->language_data['PARSER_CONTROL']['ENABLE_FLAGS']);
        }

        //Fix: Problem where hardescapes weren't handled if no ESCAPE_CHAR was given
        //You need to set one for HARDESCAPES only in this case.
        if(!isset($this->language_data['HARDCHAR'])) {
            $this->language_data['HARDCHAR'] = $this->language_data['ESCAPE_CHAR'];
        }

        //NEW in 1.0.8: Allow styles to be loaded from a separate file to override defaults
        $style_filename = substr($file_name, 0, -4) . '.style.php';
        if (is_readable($style_filename)) {
            //Clear any style_data that could have been set before ...
            if (isset($style_data)) {
                unset($style_data);
            }

            //Read the Style Information from the style file
            include $style_filename;

            //Apply the new styles to our current language styles
            if (isset($style_data) && is_array($style_data)) {
                $this->language_data['STYLES'] =
                    $this->merge_arrays($this->language_data['STYLES'], $style_data);
            }
        }
    }

    /**
     * Takes the parsed code and various options, and creates the HTML
     * surrounding it to make it look nice.
     *
     * @param  string The code already parsed (reference!)
     * @since  1.0.0
     * @access private
     */
    function finalise(&$parsed_code) {
        // Remove end parts of important declarations
        // This is BUGGY!! My fault for bad code: fix coming in 1.2
        // @todo Remove this crap
        if ($this->enable_important_blocks &&
            (strpos($parsed_code, $this->hsc(GESHI_START_IMPORTANT)) === false)) {
            $parsed_code = str_replace($this->hsc(GESHI_END_IMPORTANT), '', $parsed_code);
        }

        // Add HTML whitespace stuff if we're using the <div> header
        if ($this->header_type != GESHI_HEADER_PRE && $this->header_type != GESHI_HEADER_PRE_VALID) {
            $this->indent($parsed_code);
        }

        // purge some unnecessary stuff
        /** NOTE: memorypeak #1 */
        $parsed_code = preg_replace('#<span[^>]+>(\s*)</span>#', '\\1', $parsed_code);

        // If we are using IDs for line numbers, there needs to be an overall
        // ID set to prevent collisions.
        if ($this->add_ids && !$this->overall_id) {
            $this->overall_id = 'geshi-' . substr(md5(microtime()), 0, 4);
        }

        // Get code into lines
        /** NOTE: memorypeak #2 */
        $code = explode("\n", $parsed_code);
        $parsed_code = $this->header();

        // If we're using line numbers, we insert <li>s and appropriate
        // markup to style them (otherwise we don't need to do anything)
        if ($this->line_numbers != GESHI_NO_LINE_NUMBERS && $this->header_type != GESHI_HEADER_PRE_TABLE) {
            // If we're using the <pre> header, we shouldn't add newlines because
            // the <pre> will line-break them (and the <li>s already do this for us)
            $ls = ($this->header_type != GESHI_HEADER_PRE && $this->header_type != GESHI_HEADER_PRE_VALID) ? "\n" : '';

            // Set vars to defaults for following loop
            $i = 0;

            // Foreach line...
            for ($i = 0, $n = count($code); $i < $n;) {
                //Reset the attributes for a new line ...
                $attrs = array();

                // Make lines have at least one space in them if they're empty
                // BenBE: Checking emptiness using trim instead of relying on blanks
                if ('' == trim($code[$i])) {
                    $code[$i] = '&nbsp;';
                }

                // If this is a "special line"...
                if ($this->line_numbers == GESHI_FANCY_LINE_NUMBERS &&
                    $i % $this->line_nth_row == ($this->line_nth_row - 1)) {
                    // Set the attributes to style the line
                    if ($this->use_classes) {
                        //$attr = ' class="li2"';
                        $attrs['class'][] = 'li2';
                        $def_attr = ' class="de2"';
                    } else {
                        //$attr = ' style="' . $this->line_style2 . '"';
                        $attrs['style'][] = $this->line_style2;
                        // This style "covers up" the special styles set for special lines
                        // so that styles applied to special lines don't apply to the actual
                        // code on that line
                        $def_attr = ' style="' . $this->code_style . '"';
                    }
                } else {
                    if ($this->use_classes) {
                        //$attr = ' class="li1"';
                        $attrs['class'][] = 'li1';
                        $def_attr = ' class="de1"';
                    } else {
                        //$attr = ' style="' . $this->line_style1 . '"';
                        $attrs['style'][] = $this->line_style1;
                        $def_attr = ' style="' . $this->code_style . '"';
                    }
                }

                //Check which type of tag to insert for this line
                if ($this->header_type == GESHI_HEADER_PRE_VALID) {
                    $start = "<pre$def_attr>";
                    $end = '</pre>';
                } else {
                    // Span or div?
                    $start = "<div$def_attr>";
                    $end = '</div>';
                }

                ++$i;

                // Are we supposed to use ids? If so, add them
                if ($this->add_ids) {
                    $attrs['id'][] = "$this->overall_id-$i";
                }

                //Is this some line with extra styles???
                if (in_array($i, $this->highlight_extra_lines)) {
                    if ($this->use_classes) {
                        if (isset($this->highlight_extra_lines_styles[$i])) {
                            $attrs['class'][] = "lx$i";
                        } else {
                            $attrs['class'][] = "ln-xtra";
                        }
                    } else {
                        array_push($attrs['style'], $this->get_line_style($i));
                    }
                }

                // Add in the line surrounded by appropriate list HTML
                $attr_string = '';
                foreach ($attrs as $key => $attr) {
                    $attr_string .= ' ' . $key . '="' . implode(' ', $attr) . '"';
                }

                $parsed_code .= "<li$attr_string>$start{$code[$i-1]}$end</li>$ls";
                unset($code[$i - 1]);
            }
        } else {
            $n = count($code);
            if ($this->use_classes) {
                $attributes = ' class="de1"';
            } else {
                $attributes = ' style="'. $this->code_style .'"';
            }
            if ($this->header_type == GESHI_HEADER_PRE_VALID) {
                $parsed_code .= '<pre'. $attributes .'>';
            } elseif ($this->header_type == GESHI_HEADER_PRE_TABLE) {
                if ($this->line_numbers != GESHI_NO_LINE_NUMBERS) {
                    if ($this->use_classes) {
                        $attrs = ' class="ln"';
                    } else {
                        $attrs = ' style="'. $this->table_linenumber_style .'"';
                    }
                    $parsed_code .= '<td'.$attrs.'><pre'.$attributes.'>';
                    // get linenumbers
                    // we don't merge it with the for below, since it should be better for
                    // memory consumption this way
                    // @todo: but... actually it would still be somewhat nice to merge the two loops
                    //        the mem peaks are at different positions
                    for ($i = 0; $i < $n; ++$i) {
                        $close = 0;
                        // fancy lines
                        if ($this->line_numbers == GESHI_FANCY_LINE_NUMBERS &&
                            $i % $this->line_nth_row == ($this->line_nth_row - 1)) {
                            // Set the attributes to style the line
                            if ($this->use_classes) {
                                $parsed_code .= '<span class="xtra li2"><span class="de2">';
                            } else {
                                // This style "covers up" the special styles set for special lines
                                // so that styles applied to special lines don't apply to the actual
                                // code on that line
                                $parsed_code .= '<span style="display:block;' . $this->line_style2 . '">'
                                                  .'<span style="' . $this->code_style .'">';
                            }
                            $close += 2;
                        }
                        //Is this some line with extra styles???
                        if (in_array($i + 1, $this->highlight_extra_lines)) {
                            if ($this->use_classes) {
                                if (isset($this->highlight_extra_lines_styles[$i])) {
                                    $parsed_code .= "<span class=\"xtra lx$i\">";
                                } else {
                                    $parsed_code .= "<span class=\"xtra ln-xtra\">";
                                }
                            } else {
                                $parsed_code .= "<span style=\"display:block;" . $this->get_line_style($i) . "\">";
                            }
                            ++$close;
                        }
                        $parsed_code .= $this->line_numbers_start + $i;
                        if ($close) {
                            $parsed_code .= str_repeat('</span>', $close);
                        } elseif ($i != $n) {
                            $parsed_code .= "\n";
                        }
                    }
                    $parsed_code .= '</pre></td><td'.$attributes.'>';
                }
                $parsed_code .= '<pre'. $attributes .'>';
            }
            // No line numbers, but still need to handle highlighting lines extra.
            // Have to use divs so the full width of the code is highlighted
            $close = 0;
            for ($i = 0; $i < $n; ++$i) {
                // Make lines have at least one space in them if they're empty
                // BenBE: Checking emptiness using trim instead of relying on blanks
                if ('' == trim($code[$i])) {
                    $code[$i] = '&nbsp;';
                }
                // fancy lines
                if ($this->line_numbers == GESHI_FANCY_LINE_NUMBERS &&
                    $i % $this->line_nth_row == ($this->line_nth_row - 1)) {
                    // Set the attributes to style the line
                    if ($this->use_classes) {
                        $parsed_code .= '<span class="xtra li2"><span class="de2">';
                    } else {
                        // This style "covers up" the special styles set for special lines
                        // so that styles applied to special lines don't apply to the actual
                        // code on that line
                        $parsed_code .= '<span style="display:block;' . $this->line_style2 . '">'
                                          .'<span style="' . $this->code_style .'">';
                    }
                    $close += 2;
                }
                //Is this some line with extra styles???
                if (in_array($i + 1, $this->highlight_extra_lines)) {
                    if ($this->use_classes) {
                        if (isset($this->highlight_extra_lines_styles[$i])) {
                            $parsed_code .= "<span class=\"xtra lx$i\">";
                        } else {
                            $parsed_code .= "<span class=\"xtra ln-xtra\">";
                        }
                    } else {
                        $parsed_code .= "<span style=\"display:block;" . $this->get_line_style($i) . "\">";
                    }
                    ++$close;
                }

                $parsed_code .= $code[$i];

                if ($close) {
                  $parsed_code .= str_repeat('</span>', $close);
                  $close = 0;
                }
                elseif ($i + 1 < $n) {
                    $parsed_code .= "\n";
                }
                unset($code[$i]);
            }

            if ($this->header_type == GESHI_HEADER_PRE_VALID || $this->header_type == GESHI_HEADER_PRE_TABLE) {
                $parsed_code .= '</pre>';
            }
            if ($this->header_type == GESHI_HEADER_PRE_TABLE && $this->line_numbers != GESHI_NO_LINE_NUMBERS) {
                $parsed_code .= '</td>';
            }
        }

        $parsed_code .= $this->footer();
    }

    /**
     * Creates the header for the code block (with correct attributes)
     *
     * @return string The header for the code block
     * @since  1.0.0
     * @access private
     */
    function header() {
        // Get attributes needed
        /**
         * @todo   Document behaviour change - class is outputted regardless of whether
         *         we're using classes or not. Same with style
         */
        $attributes = ' class="' . $this->_genCSSName($this->language);
        if ($this->overall_class != '') {
            $attributes .= " ".$this->_genCSSName($this->overall_class);
        }
        $attributes .= '"';

        if ($this->overall_id != '') {
            $attributes .= " id=\"{$this->overall_id}\"";
        }
        if ($this->overall_style != '' && !$this->use_classes) {
            $attributes .= ' style="' . $this->overall_style . '"';
        }

        $ol_attributes = '';

        if ($this->line_numbers_start != 1) {
            $ol_attributes .= ' start="' . $this->line_numbers_start . '"';
        }

        // Get the header HTML
        $header = $this->header_content;
        if ($header) {
            if ($this->header_type == GESHI_HEADER_PRE || $this->header_type == GESHI_HEADER_PRE_VALID) {
                $header = str_replace("\n", '', $header);
            }
            $header = $this->replace_keywords($header);

            if ($this->use_classes) {
                $attr = ' class="head"';
            } else {
                $attr = " style=\"{$this->header_content_style}\"";
            }
            if ($this->header_type == GESHI_HEADER_PRE_TABLE && $this->line_numbers != GESHI_NO_LINE_NUMBERS) {
                $header = "<thead><tr><td colspan=\"2\" $attr>$header</td></tr></thead>";
            } else {
                $header = "<div$attr>$header</div>";
            }
        }

        if (GESHI_HEADER_NONE == $this->header_type) {
            if ($this->line_numbers != GESHI_NO_LINE_NUMBERS) {
                return "$header<ol$attributes$ol_attributes>";
            }
            return $header . ($this->force_code_block ? '<div>' : '');
        }

        // Work out what to return and do it
        if ($this->line_numbers != GESHI_NO_LINE_NUMBERS) {
            if ($this->header_type == GESHI_HEADER_PRE) {
                return "<pre$attributes>$header<ol$ol_attributes>";
            } elseif ($this->header_type == GESHI_HEADER_DIV ||
                $this->header_type == GESHI_HEADER_PRE_VALID) {
                return "<div$attributes>$header<ol$ol_attributes>";
            } elseif ($this->header_type == GESHI_HEADER_PRE_TABLE) {
                return "<table$attributes>$header<tbody><tr class=\"li1\">";
            }
        } else {
            if ($this->header_type == GESHI_HEADER_PRE) {
                return "<pre$attributes>$header"  .
                    ($this->force_code_block ? '<div>' : '');
            } else {
                return "<div$attributes>$header" .
                    ($this->force_code_block ? '<div>' : '');
            }
        }
    }

    /**
     * Returns the footer for the code block.
     *
     * @return string The footer for the code block
     * @since  1.0.0
     * @access private
     */
    function footer() {
        $footer = $this->footer_content;
        if ($footer) {
            if ($this->header_type == GESHI_HEADER_PRE) {
                $footer = str_replace("\n", '', $footer);;
            }
            $footer = $this->replace_keywords($footer);

            if ($this->use_classes) {
                $attr = ' class="foot"';
            } else {
                $attr = " style=\"{$this->footer_content_style}\"";
            }
            if ($this->header_type == GESHI_HEADER_PRE_TABLE && $this->line_numbers != GESHI_NO_LINE_NUMBERS) {
                $footer = "<tfoot><tr><td colspan=\"2\">$footer</td></tr></tfoot>";
            } else {
                $footer = "<div$attr>$footer</div>";
            }
        }

        if (GESHI_HEADER_NONE == $this->header_type) {
            return ($this->line_numbers != GESHI_NO_LINE_NUMBERS) ? '</ol>' . $footer : $footer;
        }

        if ($this->header_type == GESHI_HEADER_DIV || $this->header_type == GESHI_HEADER_PRE_VALID) {
            if ($this->line_numbers != GESHI_NO_LINE_NUMBERS) {
                return "</ol>$footer</div>";
            }
            return ($this->force_code_block ? '</div>' : '') .
                "$footer</div>";
        }
        elseif ($this->header_type == GESHI_HEADER_PRE_TABLE) {
            if ($this->line_numbers != GESHI_NO_LINE_NUMBERS) {
                return "</tr></tbody>$footer</table>";
            }
            return ($this->force_code_block ? '</div>' : '') .
                "$footer</div>";
        }
        else {
            if ($this->line_numbers != GESHI_NO_LINE_NUMBERS) {
                return "</ol>$footer</pre>";
            }
            return ($this->force_code_block ? '</div>' : '') .
                "$footer</pre>";
        }
    }

    /**
     * Replaces certain keywords in the header and footer with
     * certain configuration values
     *
     * @param  string The header or footer content to do replacement on
     * @return string The header or footer with replaced keywords
     * @since  1.0.2
     * @access private
     */
    function replace_keywords($instr) {
        $keywords = $replacements = array();

        $keywords[] = '<TIME>';
        $keywords[] = '{TIME}';
        $replacements[] = $replacements[] = number_format($time = $this->get_time(), 3);

        $keywords[] = '<LANGUAGE>';
        $keywords[] = '{LANGUAGE}';
        $replacements[] = $replacements[] = $this->language_data['LANG_NAME'];

        $keywords[] = '<VERSION>';
        $keywords[] = '{VERSION}';
        $replacements[] = $replacements[] = GESHI_VERSION;

        $keywords[] = '<SPEED>';
        $keywords[] = '{SPEED}';
        if ($time <= 0) {
            $speed = 'N/A';
        } else {
            $speed = strlen($this->source) / $time;
            if ($speed >= 1024) {
                $speed = sprintf("%.2f KB/s", $speed / 1024.0);
            } else {
                $speed = sprintf("%.0f B/s", $speed);
            }
        }
        $replacements[] = $replacements[] = $speed;

        return str_replace($keywords, $replacements, $instr);
    }

    /**
     * Secure replacement for PHP built-in function htmlspecialchars().
     *
     * See ticket #427 (http://wush.net/trac/wikka/ticket/427) for the rationale
     * for this replacement function.
     *
     * The INTERFACE for this function is almost the same as that for
     * htmlspecialchars(), with the same default for quote style; however, there
     * is no 'charset' parameter. The reason for this is as follows:
     *
     * The PHP docs say:
     *      "The third argument charset defines character set used in conversion."
     *
     * I suspect PHP's htmlspecialchars() is working at the byte-value level and
     * thus _needs_ to know (or asssume) a character set because the special
     * characters to be replaced could exist at different code points in
     * different character sets. (If indeed htmlspecialchars() works at
     * byte-value level that goes some  way towards explaining why the
     * vulnerability would exist in this function, too, and not only in
     * htmlentities() which certainly is working at byte-value level.)
     *
     * This replacement function however works at character level and should
     * therefore be "immune" to character set differences - so no charset
     * parameter is needed or provided. If a third parameter is passed, it will
     * be silently ignored.
     *
     * In the OUTPUT there is a minor difference in that we use '&#39;' instead
     * of PHP's '&#039;' for a single quote: this provides compatibility with
     *      get_html_translation_table(HTML_SPECIALCHARS, ENT_QUOTES)
     * (see comment by mikiwoz at yahoo dot co dot uk on
     * http://php.net/htmlspecialchars); it also matches the entity definition
     * for XML 1.0
     * (http://www.w3.org/TR/xhtml1/dtds.html#a_dtd_Special_characters).
     * Like PHP we use a numeric character reference instead of '&apos;' for the
     * single quote. For the other special characters we use the named entity
     * references, as PHP is doing.
     *
     * @author      {@link http://wikkawiki.org/JavaWoman Marjolein Katsma}
     *
     * @license     http://www.gnu.org/copyleft/lgpl.html
     *              GNU Lesser General Public License
     * @copyright   Copyright 2007, {@link http://wikkawiki.org/CreditsPage
     *              Wikka Development Team}
     *
     * @access      private
     * @param       string  $string string to be converted
     * @param       integer $quote_style
     *                      - ENT_COMPAT:   escapes &, <, > and double quote (default)
     *                      - ENT_NOQUOTES: escapes only &, < and >
     *                      - ENT_QUOTES:   escapes &, <, >, double and single quotes
     * @return      string  converted string
     * @since       1.0.7.18
     */
    function hsc($string, $quote_style = ENT_COMPAT) {
        // init
        static $aTransSpecchar = array(
            '&' => '&amp;',
            '"' => '&quot;',
            '<' => '&lt;',
            '>' => '&gt;',

            //This fix is related to SF#1923020, but has to be applied
            //regardless of actually highlighting symbols.

            //Circumvent a bug with symbol highlighting
            //This is required as ; would produce undesirable side-effects if it
            //was not to be processed as an entity.
            ';' => '<SEMI>', // Force ; to be processed as entity
            '|' => '<PIPE>' // Force | to be processed as entity
            );                      // ENT_COMPAT set

        switch ($quote_style) {
            case ENT_NOQUOTES: // don't convert double quotes
                unset($aTransSpecchar['"']);
                break;
            case ENT_QUOTES: // convert single quotes as well
                $aTransSpecchar["'"] = '&#39;'; // (apos) htmlspecialchars() uses '&#039;'
                break;
        }

        // return translated string
        return strtr($string, $aTransSpecchar);
    }

    function _genCSSName($name){
        return (is_numeric($name[0]) ? '_' : '') . $name;
    }

    /**
     * Returns a stylesheet for the highlighted code. If $economy mode
     * is true, we only return the stylesheet declarations that matter for
     * this code block instead of the whole thing
     *
     * @param  boolean Whether to use economy mode or not
     * @return string A stylesheet built on the data for the current language
     * @since  1.0.0
     */
    function get_stylesheet($economy_mode = true) {
        // If there's an error, chances are that the language file
        // won't have populated the language data file, so we can't
        // risk getting a stylesheet...
        if ($this->error) {
            return '';
        }

        //Check if the style rearrangements have been processed ...
        //This also does some preprocessing to check which style groups are useable ...
        if(!isset($this->language_data['NUMBERS_CACHE'])) {
            $this->build_style_cache();
        }

        // First, work out what the selector should be. If there's an ID,
        // that should be used, the same for a class. Otherwise, a selector
        // of '' means that these styles will be applied anywhere
        if ($this->overall_id) {
            $selector = '#' . $this->_genCSSName($this->overall_id);
        } else {
            $selector = '.' . $this->_genCSSName($this->language);
            if ($this->overall_class) {
                $selector .= '.' . $this->_genCSSName($this->overall_class);
            }
        }
        $selector .= ' ';

        // Header of the stylesheet
        if (!$economy_mode) {
            $stylesheet = "/**\n".
                " * GeSHi Dynamically Generated Stylesheet\n".
                " * --------------------------------------\n".
                " * Dynamically generated stylesheet for {$this->language}\n".
                " * CSS class: {$this->overall_class}, CSS id: {$this->overall_id}\n".
                " * GeSHi (C) 2004 - 2007 Nigel McNie, 2007 - 2008 Benny Baumann\n" .
                " * (http://qbnz.com/highlighter/ and http://geshi.org/)\n".
                " * --------------------------------------\n".
                " */\n";
        } else {
            $stylesheet = "/**\n".
                " * GeSHi (C) 2004 - 2007 Nigel McNie, 2007 - 2008 Benny Baumann\n" .
                " * (http://qbnz.com/highlighter/ and http://geshi.org/)\n".
                " */\n";
        }

        // Set the <ol> to have no effect at all if there are line numbers
        // (<ol>s have margins that should be destroyed so all layout is
        // controlled by the set_overall_style method, which works on the
        // <pre> or <div> container). Additionally, set default styles for lines
        if (!$economy_mode || $this->line_numbers != GESHI_NO_LINE_NUMBERS) {
            //$stylesheet .= "$selector, {$selector}ol, {$selector}ol li {margin: 0;}\n";
            $stylesheet .= "$selector.de1, $selector.de2 {{$this->code_style}}\n";
        }

        // Add overall styles
        // note: neglect economy_mode, empty styles are meaningless
        if ($this->overall_style != '') {
            $stylesheet .= "$selector {{$this->overall_style}}\n";
        }

        // Add styles for links
        // note: economy mode does not make _any_ sense here
        //       either the style is empty and thus no selector is needed
        //       or the appropriate key is given.
        foreach ($this->link_styles as $key => $style) {
            if ($style != '') {
                switch ($key) {
                    case GESHI_LINK:
                        $stylesheet .= "{$selector}a:link {{$style}}\n";
                        break;
                    case GESHI_HOVER:
                        $stylesheet .= "{$selector}a:hover {{$style}}\n";
                        break;
                    case GESHI_ACTIVE:
                        $stylesheet .= "{$selector}a:active {{$style}}\n";
                        break;
                    case GESHI_VISITED:
                        $stylesheet .= "{$selector}a:visited {{$style}}\n";
                        break;
                }
            }
        }

        // Header and footer
        // note: neglect economy_mode, empty styles are meaningless
        if ($this->header_content_style != '') {
            $stylesheet .= "$selector.head {{$this->header_content_style}}\n";
        }
        if ($this->footer_content_style != '') {
            $stylesheet .= "$selector.foot {{$this->footer_content_style}}\n";
        }

        // Styles for important stuff
        // note: neglect economy_mode, empty styles are meaningless
        if ($this->important_styles != '') {
            $stylesheet .= "$selector.imp {{$this->important_styles}}\n";
        }

        // Simple line number styles
        if ((!$economy_mode || $this->line_numbers != GESHI_NO_LINE_NUMBERS) && $this->line_style1 != '') {
            $stylesheet .= "{$selector}li, {$selector}.li1 {{$this->line_style1}}\n";
        }
        if ((!$economy_mode || $this->line_numbers != GESHI_NO_LINE_NUMBERS) && $this->table_linenumber_style != '') {
            $stylesheet .= "{$selector}.ln {{$this->table_linenumber_style}}\n";
        }
        // If there is a style set for fancy line numbers, echo it out
        if ((!$economy_mode || $this->line_numbers == GESHI_FANCY_LINE_NUMBERS) && $this->line_style2 != '') {
            $stylesheet .= "{$selector}.li2 {{$this->line_style2}}\n";
        }

        // note: empty styles are meaningless
        foreach ($this->language_data['STYLES']['KEYWORDS'] as $group => $styles) {
            if ($styles != '' && (!$economy_mode ||
                (isset($this->lexic_permissions['KEYWORDS'][$group]) &&
                $this->lexic_permissions['KEYWORDS'][$group]))) {
                $stylesheet .= "$selector.kw$group {{$styles}}\n";
            }
        }
        foreach ($this->language_data['STYLES']['COMMENTS'] as $group => $styles) {
            if ($styles != '' && (!$economy_mode ||
                (isset($this->lexic_permissions['COMMENTS'][$group]) &&
                $this->lexic_permissions['COMMENTS'][$group]) ||
                (!empty($this->language_data['COMMENT_REGEXP']) &&
                !empty($this->language_data['COMMENT_REGEXP'][$group])))) {
                $stylesheet .= "$selector.co$group {{$styles}}\n";
            }
        }
        foreach ($this->language_data['STYLES']['ESCAPE_CHAR'] as $group => $styles) {
            if ($styles != '' && (!$economy_mode || $this->lexic_permissions['ESCAPE_CHAR'])) {
                // NEW: since 1.0.8 we have to handle hardescapes
                if ($group === 'HARD') {
                    $group = '_h';
                }
                $stylesheet .= "$selector.es$group {{$styles}}\n";
            }
        }
        foreach ($this->language_data['STYLES']['BRACKETS'] as $group => $styles) {
            if ($styles != '' && (!$economy_mode || $this->lexic_permissions['BRACKETS'])) {
                $stylesheet .= "$selector.br$group {{$styles}}\n";
            }
        }
        foreach ($this->language_data['STYLES']['SYMBOLS'] as $group => $styles) {
            if ($styles != '' && (!$economy_mode || $this->lexic_permissions['SYMBOLS'])) {
                $stylesheet .= "$selector.sy$group {{$styles}}\n";
            }
        }
        foreach ($this->language_data['STYLES']['STRINGS'] as $group => $styles) {
            if ($styles != '' && (!$economy_mode || $this->lexic_permissions['STRINGS'])) {
                // NEW: since 1.0.8 we have to handle hardquotes
                if ($group === 'HARD') {
                    $group = '_h';
                }
                $stylesheet .= "$selector.st$group {{$styles}}\n";
            }
        }
        foreach ($this->language_data['STYLES']['NUMBERS'] as $group => $styles) {
            if ($styles != '' && (!$economy_mode || $this->lexic_permissions['NUMBERS'])) {
                $stylesheet .= "$selector.nu$group {{$styles}}\n";
            }
        }
        foreach ($this->language_data['STYLES']['METHODS'] as $group => $styles) {
            if ($styles != '' && (!$economy_mode || $this->lexic_permissions['METHODS'])) {
                $stylesheet .= "$selector.me$group {{$styles}}\n";
            }
        }
        // note: neglect economy_mode, empty styles are meaningless
        foreach ($this->language_data['STYLES']['SCRIPT'] as $group => $styles) {
            if ($styles != '') {
                $stylesheet .= "$selector.sc$group {{$styles}}\n";
            }
        }
        foreach ($this->language_data['STYLES']['REGEXPS'] as $group => $styles) {
            if ($styles != '' && (!$economy_mode ||
                (isset($this->lexic_permissions['REGEXPS'][$group]) &&
                $this->lexic_permissions['REGEXPS'][$group]))) {
                if (is_array($this->language_data['REGEXPS'][$group]) &&
                    array_key_exists(GESHI_CLASS, $this->language_data['REGEXPS'][$group])) {
                    $stylesheet .= "$selector.";
                    $stylesheet .= $this->language_data['REGEXPS'][$group][GESHI_CLASS];
                    $stylesheet .= " {{$styles}}\n";
                } else {
                    $stylesheet .= "$selector.re$group {{$styles}}\n";
                }
            }
        }
        // Styles for lines being highlighted extra
        if (!$economy_mode || (count($this->highlight_extra_lines)!=count($this->highlight_extra_lines_styles))) {
            $stylesheet .= "{$selector}.ln-xtra, {$selector}li.ln-xtra, {$selector}div.ln-xtra {{$this->highlight_extra_lines_style}}\n";
        }
        $stylesheet .= "{$selector}span.xtra { display:block; }\n";
        foreach ($this->highlight_extra_lines_styles as $lineid => $linestyle) {
            $stylesheet .= "{$selector}.lx$lineid, {$selector}li.lx$lineid, {$selector}div.lx$lineid {{$linestyle}}\n";
        }

        return $stylesheet;
    }

    /**
     * Get's the style that is used for the specified line
     *
     * @param int The line number information is requested for
     * @access private
     * @since 1.0.7.21
     */
    function get_line_style($line) {
        //$style = null;
        $style = null;
        if (isset($this->highlight_extra_lines_styles[$line])) {
            $style = $this->highlight_extra_lines_styles[$line];
        } else { // if no "extra" style assigned
            $style = $this->highlight_extra_lines_style;
        }

        return $style;
    }

    /**
    * this functions creates an optimized regular expression list
    * of an array of strings.
    *
    * Example:
    * <code>$list = array('faa', 'foo', 'foobar');
    *          => string 'f(aa|oo(bar)?)'</code>
    *
    * @param $list array of (unquoted) strings
    * @param $regexp_delimiter your regular expression delimiter, @see preg_quote()
    * @return string for regular expression
    * @author Milian Wolff <mail@milianw.de>
    * @since 1.0.8
    * @access private
    */
    function optimize_regexp_list($list, $regexp_delimiter = '/') {
        $regex_chars = array('.', '\\', '+', '-', '*', '?', '[', '^', ']', '$',
            '(', ')', '{', '}', '=', '!', '<', '>', '|', ':', $regexp_delimiter);
        sort($list);
        $regexp_list = array('');
        $num_subpatterns = 0;
        $list_key = 0;

        // the tokens which we will use to generate the regexp list
        $tokens = array();
        $prev_keys = array();
        // go through all entries of the list and generate the token list
        $cur_len = 0;
        for ($i = 0, $i_max = count($list); $i < $i_max; ++$i) {
            if ($cur_len > GESHI_MAX_PCRE_LENGTH) {
                // seems like the length of this pcre is growing exorbitantly
                $regexp_list[++$list_key] = $this->_optimize_regexp_list_tokens_to_string($tokens);
                $num_subpatterns = substr_count($regexp_list[$list_key], '(?:');
                $tokens = array();
                $cur_len = 0;
            }
            $level = 0;
            $entry = preg_quote((string) $list[$i], $regexp_delimiter);
            $pointer = &$tokens;
            // properly assign the new entry to the correct position in the token array
            // possibly generate smaller common denominator keys
            while (true) {
                // get the common denominator
                if (isset($prev_keys[$level])) {
                    if ($prev_keys[$level] == $entry) {
                        // this is a duplicate entry, skip it
                        continue 2;
                    }
                    $char = 0;
                    while (isset($entry[$char]) && isset($prev_keys[$level][$char])
                            && $entry[$char] == $prev_keys[$level][$char]) {
                        ++$char;
                    }
                    if ($char > 0) {
                        // this entry has at least some chars in common with the current key
                        if ($char == strlen($prev_keys[$level])) {
                            // current key is totally matched, i.e. this entry has just some bits appended
                            $pointer = &$pointer[$prev_keys[$level]];
                        } else {
                            // only part of the keys match
                            $new_key_part1 = substr($prev_keys[$level], 0, $char);
                            $new_key_part2 = substr($prev_keys[$level], $char);

                            if (in_array($new_key_part1[0], $regex_chars)
                                || in_array($new_key_part2[0], $regex_chars)) {
                                // this is bad, a regex char as first character
                                $pointer[$entry] = array('' => true);
                                array_splice($prev_keys, $level, count($prev_keys), $entry);
                                $cur_len += strlen($entry);
                                continue;
                            } else {
                                // relocate previous tokens
                                $pointer[$new_key_part1] = array($new_key_part2 => $pointer[$prev_keys[$level]]);
                                unset($pointer[$prev_keys[$level]]);
                                $pointer = &$pointer[$new_key_part1];
                                // recreate key index
                                array_splice($prev_keys, $level, count($prev_keys), array($new_key_part1, $new_key_part2));
                                $cur_len += strlen($new_key_part2);
                            }
                        }
                        ++$level;
                        $entry = substr($entry, $char);
                        continue;
                    }
                    // else: fall trough, i.e. no common denominator was found
                }
                if ($level == 0 && !empty($tokens)) {
                    // we can dump current tokens into the string and throw them away afterwards
                    $new_entry = $this->_optimize_regexp_list_tokens_to_string($tokens);
                    $new_subpatterns = substr_count($new_entry, '(?:');
                    if (GESHI_MAX_PCRE_SUBPATTERNS && $num_subpatterns + $new_subpatterns > GESHI_MAX_PCRE_SUBPATTERNS) {
                        $regexp_list[++$list_key] = $new_entry;
                        $num_subpatterns = $new_subpatterns;
                    } else {
                        if (!empty($regexp_list[$list_key])) {
                            $new_entry = '|' . $new_entry;
                        }
                        $regexp_list[$list_key] .= $new_entry;
                        $num_subpatterns += $new_subpatterns;
                    }
                    $tokens = array();
                    $cur_len = 0;
                }
                // no further common denominator found
                $pointer[$entry] = array('' => true);
                array_splice($prev_keys, $level, count($prev_keys), $entry);

                $cur_len += strlen($entry);
                break;
            }
            unset($list[$i]);
        }
        // make sure the last tokens get converted as well
        $new_entry = $this->_optimize_regexp_list_tokens_to_string($tokens);
        if (GESHI_MAX_PCRE_SUBPATTERNS && $num_subpatterns + substr_count($new_entry, '(?:') > GESHI_MAX_PCRE_SUBPATTERNS) {
            if ( !empty($regexp_list[$list_key]) ) {
              ++$list_key;
            }
            $regexp_list[$list_key] = $new_entry;
        } else {
            if (!empty($regexp_list[$list_key])) {
                $new_entry = '|' . $new_entry;
            }
            $regexp_list[$list_key] .= $new_entry;
        }
        return $regexp_list;
    }
    /**
    * this function creates the appropriate regexp string of an token array
    * you should not call this function directly, @see $this->optimize_regexp_list().
    *
    * @param &$tokens array of tokens
    * @param $recursed bool to know wether we recursed or not
    * @return string
    * @author Milian Wolff <mail@milianw.de>
    * @since 1.0.8
    * @access private
    */
    function _optimize_regexp_list_tokens_to_string(&$tokens, $recursed = false) {
        $list = '';
        foreach ($tokens as $token => $sub_tokens) {
            $list .= $token;
            $close_entry = isset($sub_tokens['']);
            unset($sub_tokens['']);
            if (!empty($sub_tokens)) {
                $list .= '(?:' . $this->_optimize_regexp_list_tokens_to_string($sub_tokens, true) . ')';
                if ($close_entry) {
                    // make sub_tokens optional
                    $list .= '?';
                }
            }
            $list .= '|';
        }
        if (!$recursed) {
            // do some optimizations
            // common trailing strings
            // BUGGY!
            //$list = preg_replace_callback('#(?<=^|\:|\|)\w+?(\w+)(?:\|.+\1)+(?=\|)#', create_function(
            //    '$matches', 'return "(?:" . preg_replace("#" . preg_quote($matches[1], "#") . "(?=\||$)#", "", $matches[0]) . ")" . $matches[1];'), $list);
            // (?:p)? => p?
            $list = preg_replace('#\(\?\:(.)\)\?#', '\1?', $list);
            // (?:a|b|c|d|...)? => [abcd...]?
            // TODO: a|bb|c => [ac]|bb
            static $callback_2;
            if (!isset($callback_2)) {
                $callback_2 = create_function('$matches', 'return "[" . str_replace("|", "", $matches[1]) . "]";');
            }
            $list = preg_replace_callback('#\(\?\:((?:.\|)+.)\)#', $callback_2, $list);
        }
        // return $list without trailing pipe
        return substr($list, 0, -1);
    }
} // End Class GeSHi


if (!function_exists('geshi_highlight')) {
    /**
     * Easy way to highlight stuff. Behaves just like highlight_string
     *
     * @param string The code to highlight
     * @param string The language to highlight the code in
     * @param string The path to the language files. You can leave this blank if you need
     *               as from version 1.0.7 the path should be automatically detected
     * @param boolean Whether to return the result or to echo
     * @return string The code highlighted (if $return is true)
     * @since 1.0.2
     */
    function geshi_highlight($string, $language, $path = null, $return = false) {
        $geshi = new GeSHi($string, $language, $path);
        $geshi->set_header_type(GESHI_HEADER_NONE);

        if ($return) {
            return '<code class="geshi">' . $geshi->parse_code() . '</code>';
        }

        echo '<code class="geshi">' . $geshi->parse_code() . '</code>';

        if ($geshi->error()) {
            return false;
        }
        return true;
    }
}

?>