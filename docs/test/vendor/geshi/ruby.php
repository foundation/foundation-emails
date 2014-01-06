<?php
/*************************************************************************************
 * ruby.php
 * --------
 * Author: Moises Deniz
 * Copyright: (c) 2007 Moises Deniz
 * Release Version: 1.0.8.11
 * Date Started: 2007/03/21
 *
 * Ruby language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/05/23 (1.0.7.22)
 *   -  Added description of extra language features (SF#1970248)
 * 2007/03/21 (1.0.7.19)
 *   -  Initial release
 *
 *************************************************************************************
 *
 *   This file is part of GeSHi.
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
    'LANG_NAME' => 'Ruby',
    'COMMENT_SINGLE' => array(1 => "#"),
    'COMMENT_MULTI' => array("=begin" => "=end"),
    'COMMENT_REGEXP' => array(
        //Heredoc
        4 => '/<<\s*?(\w+)\\n.*?\\n\\1(?![a-zA-Z0-9])/si',
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"', '`','\''),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
                'alias', 'and', 'begin', 'break', 'case', 'class',
                'def', 'defined', 'do', 'else', 'elsif', 'end',
                'ensure', 'for', 'if', 'in', 'module', 'while',
                'next', 'not', 'or', 'redo', 'rescue', 'yield',
                'retry', 'super', 'then', 'undef', 'unless',
                'until', 'when', 'include'
            ),
        2 => array(
                '__FILE__', '__LINE__', 'false', 'nil', 'self', 'true',
                'return'
            ),
        3 => array(
                'Array', 'Float', 'Integer', 'String', 'at_exit',
                'autoload', 'binding', 'caller', 'catch', 'chop', 'chop!',
                'chomp', 'chomp!', 'eval', 'exec', 'exit', 'exit!', 'fail',
                'fork', 'format', 'gets', 'global_variables', 'gsub', 'gsub!',
                'iterator?', 'lambda', 'load', 'local_variables', 'loop',
                'open', 'p', 'print', 'printf', 'proc', 'putc', 'puts',
                'raise', 'rand', 'readline', 'readlines', 'require', 'select',
                'sleep', 'split', 'sprintf', 'srand', 'sub', 'sub!', 'syscall',
                'system', 'trace_var', 'trap', 'untrace_var'
            ),
        4 => array(
                'Abbrev', 'ArgumentError', 'Base64', 'Benchmark',
                'Benchmark::Tms', 'Bignum', 'Binding', 'CGI', 'CGI::Cookie',
                'CGI::HtmlExtension', 'CGI::QueryExtension',
                'CGI::Session', 'CGI::Session::FileStore',
                'CGI::Session::MemoryStore', 'Class', 'Comparable', 'Complex',
                'ConditionVariable', 'Continuation', 'Data',
                'Date', 'DateTime', 'Delegator', 'Dir', 'EOFError', 'ERB',
                'ERB::Util', 'Enumerable', 'Enumerable::Enumerator', 'Errno',
                'Exception', 'FalseClass', 'File',
                'File::Constants', 'File::Stat', 'FileTest', 'FileUtils',
                'FileUtils::DryRun', 'FileUtils::NoWrite',
                'FileUtils::StreamUtils_', 'FileUtils::Verbose', 'Find',
                'Fixnum', 'FloatDomainError', 'Forwardable', 'GC', 'Generator',
                'Hash', 'IO', 'IOError', 'Iconv', 'Iconv::BrokenLibrary',
                'Iconv::Failure', 'Iconv::IllegalSequence',
                'Iconv::InvalidCharacter', 'Iconv::InvalidEncoding',
                'Iconv::OutOfRange', 'IndexError', 'Interrupt', 'Kernel',
                'LoadError', 'LocalJumpError', 'Logger', 'Logger::Application',
                'Logger::Error', 'Logger::Formatter', 'Logger::LogDevice',
                'Logger::LogDevice::LogDeviceMutex', 'Logger::Severity',
                'Logger::ShiftingError', 'Marshal', 'MatchData',
                'Math', 'Matrix', 'Method', 'Module', 'Mutex', 'NameError',
                'NameError::message', 'NilClass', 'NoMemoryError',
                'NoMethodError', 'NotImplementedError', 'Numeric', 'Object',
                'ObjectSpace', 'Observable', 'PStore', 'PStore::Error',
                'Pathname', 'Precision', 'Proc', 'Process', 'Process::GID',
                'Process::Status', 'Process::Sys', 'Process::UID', 'Queue',
                'Range', 'RangeError', 'Rational', 'Regexp', 'RegexpError',
                'RuntimeError', 'ScriptError', 'SecurityError', 'Set',
                'Shellwords', 'Signal', 'SignalException', 'SimpleDelegator',
                'SingleForwardable', 'Singleton', 'SingletonClassMethods',
                'SizedQueue', 'SortedSet', 'StandardError', 'StringIO',
                'StringScanner', 'StringScanner::Error', 'Struct', 'Symbol',
                'SyncEnumerator', 'SyntaxError', 'SystemCallError',
                'SystemExit', 'SystemStackError', 'Tempfile',
                'Test::Unit::TestCase', 'Test::Unit', 'Test', 'Thread',
                'ThreadError', 'ThreadGroup',
                'ThreadsWait', 'Time', 'TrueClass', 'TypeError', 'URI',
                'URI::BadURIError', 'URI::Error', 'URI::Escape', 'URI::FTP',
                'URI::Generic', 'URI::HTTP', 'URI::HTTPS',
                'URI::InvalidComponentError', 'URI::InvalidURIError',
                'URI::LDAP', 'URI::MailTo', 'URI::REGEXP',
                'URI::REGEXP::PATTERN', 'UnboundMethod', 'Vector', 'YAML',
                'ZeroDivisionError', 'Zlib',
                'Zlib::BufError', 'Zlib::DataError', 'Zlib::Deflate',
                'Zlib::Error', 'Zlib::GzipFile', 'Zlib::GzipFile::CRCError',
                'Zlib::GzipFile::Error', 'Zlib::GzipFile::LengthError',
                'Zlib::GzipFile::NoFooter', 'Zlib::GzipReader',
                'Zlib::GzipWriter', 'Zlib::Inflate', 'Zlib::MemError',
                'Zlib::NeedDict', 'Zlib::StreamEnd', 'Zlib::StreamError',
                'Zlib::VersionError',
                'Zlib::ZStream',
                'HTML::Selector', 'HashWithIndifferentAccess', 'Inflector',
                'Inflector::Inflections', 'Mime', 'Mime::Type',
                'OCI8AutoRecover', 'TimeZone', 'XmlSimple'
            ),
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '%', '&', '*', '|', '/', '<', '>',
        '+', '-', '=>', '<<'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color:#9966CC; font-weight:bold;',
            2 => 'color:#0000FF; font-weight:bold;',
            3 => 'color:#CC0066; font-weight:bold;',
            4 => 'color:#CC00FF; font-weight:bold;',
            ),
        'COMMENTS' => array(
            1 => 'color:#008000; font-style:italic;',
            4 => 'color: #cc0000; font-style: italic;',
            'MULTI' => 'color:#000080; font-style:italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color:#000099;'
            ),
        'BRACKETS' => array(
            0 => 'color:#006600; font-weight:bold;'
            ),
        'STRINGS' => array(
            0 => 'color:#996600;'
            ),
        'NUMBERS' => array(
            0 => 'color:#006666;'
            ),
        'METHODS' => array(
            1 => 'color:#9900CC;'
            ),
        'SYMBOLS' => array(
            0 => 'color:#006600; font-weight:bold;'
            ),
        'REGEXPS' => array(
            0 => 'color:#ff6633; font-weight:bold;',
            1 => 'color:#0066ff; font-weight:bold;',
            2 => 'color:#6666ff; font-weight:bold;',
            3 => 'color:#ff3333; font-weight:bold;'
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
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
        1 => '.'
        ),
    'REGEXPS' => array(
        0 => array(//Variables
            GESHI_SEARCH => "([[:space:]])(\\$[a-zA-Z_][a-zA-Z0-9_]*)",
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        1 => array(//Arrays
            GESHI_SEARCH => "([[:space:]])(@[a-zA-Z_][a-zA-Z0-9_]*)",
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        2 => "([A-Z][a-zA-Z0-9_]*::)+[A-Z][a-zA-Z0-9_]*",//Static OOP symbols
        3 => array(
            GESHI_SEARCH => "([[:space:]]|\[|\()(:[a-zA-Z_][a-zA-Z0-9_]*)",
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        0 => array(
            '<%' => '%>'
            )
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        ),
    'TAB_WIDTH' => 2
);

?>