<?php
/*************************************************************************************
 * rails.php
 * ---------
 * Author: Moises Deniz
 * Copyright: (c) 2005 Moises Deniz
 * Release Version: 1.0.8.11
 * Date Started: 2007/03/21
 *
 * Ruby (with Ruby on Rails Framework) language file for GeSHi.
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
    'LANG_NAME' => 'Rails',
    'COMMENT_SINGLE' => array(1 => "#"),
    'COMMENT_MULTI' => array("=begin" => "=end"),
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
            'until', 'when', 'BEGIN', 'END', 'include'
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
            'ActionController::AbstractRequest',
            'ActionController::Assertions::DomAssertions',
            'ActionController::Assertions::ModelAssertions',
            'ActionController::Assertions::ResponseAssertions',
            'ActionController::Assertions::RoutingAssertions',
            'ActionController::Assertions::SelectorAssertions',
            'ActionController::Assertions::TagAssertions',
            'ActionController::Base',
            'ActionController::Benchmarking::ClassMethods',
            'ActionController::Caching',
            'ActionController::Caching::Actions',
            'ActionController::Caching::Actions::ActionCachePath',
            'ActionController::Caching::Fragments',
            'ActionController::Caching::Pages',
            'ActionController::Caching::Pages::ClassMethods',
            'ActionController::Caching::Sweeping',
            'ActionController::Components',
            'ActionController::Components::ClassMethods',
            'ActionController::Components::InstanceMethods',
            'ActionController::Cookies',
            'ActionController::Filters::ClassMethods',
            'ActionController::Flash',
            'ActionController::Flash::FlashHash',
            'ActionController::Helpers::ClassMethods',
            'ActionController::Integration::Session',
            'ActionController::IntegrationTest',
            'ActionController::Layout::ClassMethods',
            'ActionController::Macros',
            'ActionController::Macros::AutoComplete::ClassMethods',
            'ActionController::Macros::InPlaceEditing::ClassMethods',
            'ActionController::MimeResponds::InstanceMethods',
            'ActionController::Pagination',
            'ActionController::Pagination::ClassMethods',
            'ActionController::Pagination::Paginator',
            'ActionController::Pagination::Paginator::Page',
            'ActionController::Pagination::Paginator::Window',
            'ActionController::Rescue', 'ActionController::Resources',
            'ActionController::Routing',
            'ActionController::Scaffolding::ClassMethods',
            'ActionController::SessionManagement::ClassMethods',
            'ActionController::Streaming', 'ActionController::TestProcess',
            'ActionController::TestUploadedFile',
            'ActionController::UrlWriter',
            'ActionController::Verification::ClassMethods',
            'ActionMailer::Base', 'ActionView::Base',
            'ActionView::Helpers::ActiveRecordHelper',
            'ActionView::Helpers::AssetTagHelper',
            'ActionView::Helpers::BenchmarkHelper',
            'ActionView::Helpers::CacheHelper',
            'ActionView::Helpers::CaptureHelper',
            'ActionView::Helpers::DateHelper',
            'ActionView::Helpers::DebugHelper',
            'ActionView::Helpers::FormHelper',
            'ActionView::Helpers::FormOptionsHelper',
            'ActionView::Helpers::FormTagHelper',
            'ActionView::Helpers::JavaScriptHelper',
            'ActionView::Helpers::JavaScriptMacrosHelper',
            'ActionView::Helpers::NumberHelper',
            'ActionView::Helpers::PaginationHelper',
            'ActionView::Helpers::PrototypeHelper',
            'ActionView::Helpers::PrototypeHelper::JavaScriptGenerator::GeneratorMethods',
            'ActionView::Helpers::ScriptaculousHelper',
            'ActionView::Helpers::TagHelper',
            'ActionView::Helpers::TextHelper',
            'ActionView::Helpers::UrlHelper', 'ActionView::Partials',
            'ActionWebService::API::Method', 'ActionWebService::Base',
            'ActionWebService::Client::Soap',
            'ActionWebService::Client::XmlRpc',
            'ActionWebService::Container::ActionController::ClassMethods',
            'ActionWebService::Container::Delegated::ClassMethods',
            'ActionWebService::Container::Direct::ClassMethods',
            'ActionWebService::Invocation::ClassMethods',
            'ActionWebService::Scaffolding::ClassMethods',
            'ActionWebService::SignatureTypes', 'ActionWebService::Struct',
            'ActiveRecord::Acts::List::ClassMethods',
            'ActiveRecord::Acts::List::InstanceMethods',
            'ActiveRecord::Acts::NestedSet::ClassMethods',
            'ActiveRecord::Acts::NestedSet::InstanceMethods',
            'ActiveRecord::Acts::Tree::ClassMethods',
            'ActiveRecord::Acts::Tree::InstanceMethods',
            'ActiveRecord::Aggregations::ClassMethods',
            'ActiveRecord::Associations::ClassMethods',
            'ActiveRecord::AttributeMethods::ClassMethods',
            'ActiveRecord::Base',
            'ActiveRecord::Calculations::ClassMethods',
            'ActiveRecord::Callbacks',
            'ActiveRecord::ConnectionAdapters::AbstractAdapter',
            'ActiveRecord::ConnectionAdapters::Column',
            'ActiveRecord::ConnectionAdapters::DB2Adapter',
            'ActiveRecord::ConnectionAdapters::DatabaseStatements',
            'ActiveRecord::ConnectionAdapters::FirebirdAdapter',
            'ActiveRecord::ConnectionAdapters::FrontBaseAdapter',
            'ActiveRecord::ConnectionAdapters::MysqlAdapter',
            'ActiveRecord::ConnectionAdapters::OpenBaseAdapter',
            'ActiveRecord::ConnectionAdapters::OracleAdapter',
            'ActiveRecord::ConnectionAdapters::PostgreSQLAdapter',
            'ActiveRecord::ConnectionAdapters::Quoting',
            'ActiveRecord::ConnectionAdapters::SQLServerAdapter',
            'ActiveRecord::ConnectionAdapters::SQLiteAdapter',
            'ActiveRecord::ConnectionAdapters::SchemaStatements',
            'ActiveRecord::ConnectionAdapters::SybaseAdapter::ColumnWithIdentity',
            'ActiveRecord::ConnectionAdapters::SybaseAdapterContext',
            'ActiveRecord::ConnectionAdapters::TableDefinition',
            'ActiveRecord::Errors', 'ActiveRecord::Locking',
            'ActiveRecord::Locking::Optimistic',
            'ActiveRecord::Locking::Optimistic::ClassMethods',
            'ActiveRecord::Locking::Pessimistic',
            'ActiveRecord::Migration', 'ActiveRecord::Observer',
            'ActiveRecord::Observing::ClassMethods',
            'ActiveRecord::Reflection::ClassMethods',
            'ActiveRecord::Reflection::MacroReflection',
            'ActiveRecord::Schema', 'ActiveRecord::Timestamp',
            'ActiveRecord::Transactions::ClassMethods',
            'ActiveRecord::Validations',
            'ActiveRecord::Validations::ClassMethods',
            'ActiveRecord::XmlSerialization',
            'ActiveSupport::CachingTools::HashCaching',
            'ActiveSupport::CoreExtensions::Array::Conversions',
            'ActiveSupport::CoreExtensions::Array::Grouping',
            'ActiveSupport::CoreExtensions::Date::Conversions',
            'ActiveSupport::CoreExtensions::Hash::Conversions',
            'ActiveSupport::CoreExtensions::Hash::Conversions::ClassMethods',
            'ActiveSupport::CoreExtensions::Hash::Diff',
            'ActiveSupport::CoreExtensions::Hash::Keys',
            'ActiveSupport::CoreExtensions::Hash::ReverseMerge',
            'ActiveSupport::CoreExtensions::Integer::EvenOdd',
            'ActiveSupport::CoreExtensions::Integer::Inflections',
            'ActiveSupport::CoreExtensions::Numeric::Bytes',
            'ActiveSupport::CoreExtensions::Numeric::Time',
            'ActiveSupport::CoreExtensions::Pathname::CleanWithin',
            'ActiveSupport::CoreExtensions::Range::Conversions',
            'ActiveSupport::CoreExtensions::String::Access',
            'ActiveSupport::CoreExtensions::String::Conversions',
            'ActiveSupport::CoreExtensions::String::Inflections',
            'ActiveSupport::CoreExtensions::String::Iterators',
            'ActiveSupport::CoreExtensions::String::StartsEndsWith',
            'ActiveSupport::CoreExtensions::String::Unicode',
            'ActiveSupport::CoreExtensions::Time::Calculations',
            'ActiveSupport::CoreExtensions::Time::Calculations::ClassMethods',
            'ActiveSupport::CoreExtensions::Time::Conversions',
            'ActiveSupport::Multibyte::Chars',
            'ActiveSupport::Multibyte::Handlers::UTF8Handler',
            'Breakpoint', 'Builder::BlankSlate', 'Builder::XmlMarkup',
            'Fixtures',
            'HTML::Selector', 'HashWithIndifferentAccess', 'Inflector',
            'Inflector::Inflections', 'Mime', 'Mime::Type',
            'OCI8AutoRecover', 'TimeZone', 'XmlSimple'
            ),
        5 => array(
            'image_tag', 'link_to', 'link_to_remote', 'javascript_include_tag',
            'assert_equal', 'assert_not_equal', 'before_filter',
            'after_filter', 'render', 'redirect_to', 'hide_action',
            'render_to_string', 'url_for', 'controller_name',
            'controller_class_name', 'controller_path', 'session',
            'render_component', 'render_component_as_string', 'cookie',
            'layout', 'flash', 'auto_complete_for', 'in_place_editor_for',
            'respond_to', 'paginate', 'current_page', 'each', 'first',
            'first_page', 'last_page', 'last', 'length', 'new', 'page_count',
            'previous', 'scaffold', 'send_data',
            'send_file', 'deliver', 'receive', 'error_messages_for',
            'error_message_on', 'form', 'input', 'stylesheet_link_tag',
            'stylesheet_path', 'content_for', 'select_date', 'ago',
            'month', 'day', 'check_box', 'fields_for', 'file_field',
            'form_for', 'hidden_field', 'text_area', 'password_field',
            'collection_select', 'options_for_select',
            'options_from_collection_for_select', 'file_field_tag',
            'form_for_tag', 'hidden_field_tag', 'text_area_tag',
            'password_field_tag', 'link_to_function', 'javascript_tag',
            'human_size', 'number_to_currency', 'pagination_links',
            'form_remote_tag', 'form_remote_for',
            'submit_to_remote', 'remote_function', 'observe_form',
            'observe_field', 'remote_form_for', 'options_for_ajax', 'alert',
            'call', 'assign', 'show', 'hide', 'insert_html', 'sortable',
            'toggle', 'visual_effect', 'replace', 'replace_html', 'remove',
            'save', 'save!', 'draggable', 'drop_receiving', 'literal',
            'draggable_element', 'drop_receiving_element', 'sortable_element',
            'content_tag', 'tag', 'link_to_image', 'link_to_if',
            'link_to_unless', 'mail_to', 'link_image_to', 'button_to',
            'current_page?', 'act_as_list', 'act_as_nested', 'act_as_tree',
            'has_many', 'has_one', 'belongs_to', 'has_many_and_belogns_to',
            'delete', 'destroy', 'destroy_all', 'clone', 'deep_clone', 'copy',
            'update', 'table_name', 'primary_key', 'sum', 'maximun', 'minimum',
            'count', 'size', 'after_save', 'after_create', 'before_save',
            'before_create', 'add_to_base', 'errors', 'add', 'validate',
            'validates_presence_of', 'validates_numericality_of',
            'validates_uniqueness_of', 'validates_length_of',
            'validates_format_of', 'validates_size_of', 'to_a', 'to_s',
            'to_xml', 'to_i'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '%', '&', '*', '|', '/', '<', '>',
        '+', '-', '=>', '<<'
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
            1 => 'color:#9966CC; font-weight:bold;',
            2 => 'color:#0000FF; font-weight:bold;',
            3 => 'color:#CC0066; font-weight:bold;',
            4 => 'color:#CC00FF; font-weight:bold;',
            5 => 'color:#5A0A0A; font-weight:bold;'
            ),
        'COMMENTS' => array(
            1 => 'color:#008000; font-style:italic;',
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
        4 => '',
        5 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        0 => array(
            GESHI_SEARCH => "([[:space:]])(\\$[a-zA-Z_][a-zA-Z0-9_]*)",
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        1 => array(
            GESHI_SEARCH => "([[:space:]])(@[a-zA-Z_][a-zA-Z0-9_]*)",
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => ''
            ),
        2 => "([A-Z][a-zA-Z0-9_]*::)+[A-Z][a-zA-Z0-9_]*", //Static OOP References
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
        )
);

?>
