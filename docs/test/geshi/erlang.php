<?php
/*************************************************************************************
 * erlang.php
 * --------
 * Author: Benny Baumann (BenBE@geshi.org)
 * Contributions:
 * - Uwe Dauernheim (uwe@dauernheim.net)
 * - Dan Forest-Barbier (dan@twisted.in)
 * Copyright: (c) 2008 Uwe Dauernheim (http://www.kreisquadratur.de/)
 * Release Version: 1.0.8.11
 * Date Started: 2008-09-27
 *
 * Erlang language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/05/02 (1.0.8.3)
 *  -  Now using 'PARSER_CONTROL' instead of huge rexgexps, better and cleaner
 *
 * 2009/04/26 (1.0.8.3)
 *  -  Only link to existing docs / Fixes
 *
 * 2008-09-28 (1.0.0.1)
 *   [!] Bug fixed with keyword module.
 *   [+] Added more function names
 *
 * 2008-09-27 (1.0.0)
 *   [ ] First Release
 *
 * TODO (updated 2008-09-27)
 * -------------------------
 *   [!] Stop ';' from being transformed to '<SEMI>'
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
    'LANG_NAME' => 'Erlang',
    'COMMENT_SINGLE' => array(1 => '%'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'HARDQUOTE' => array("'", "'"),
    'HARDESCAPE' => array("'", "\\"),
    'HARDCHAR' => "\\",
    'ESCAPE_CHAR' => '\\',
    'NUMBERS' => GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        //Control flow keywrods
        1 => array(
            'after', 'andalso', 'begin', 'case', 'catch', 'end', 'fun', 'if',
            'of', 'orelse', 'receive', 'try', 'when', 'query'
            ),
        //Binary operators
        2 => array(
            'and', 'band', 'bnot', 'bor', 'bsl', 'bsr', 'bxor', 'div', 'not',
            'or', 'rem', 'xor'
            ),
        3 => array(
            'abs', 'alive', 'apply', 'atom_to_list', 'binary_to_list',
            'binary_to_term', 'concat_binary', 'date', 'disconnect_node',
            'element', 'erase', 'exit', 'float', 'float_to_list', 'get',
            'get_keys', 'group_leader', 'halt', 'hd', 'integer_to_list',
            'is_alive', 'length', 'link', 'list_to_atom', 'list_to_binary',
            'list_to_float', 'list_to_integer', 'list_to_pid', 'list_to_tuple',
            'load_module', 'make_ref', 'monitor_node', 'node', 'nodes', 'now',
            'open_port', 'pid_to_list', 'process_flag', 'process_info',
            'process', 'put', 'register', 'registered', 'round', 'self',
            'setelement', 'size', 'spawn', 'spawn_link', 'split_binary',
            'statistics', 'term_to_binary', 'throw', 'time', 'tl', 'trunc',
            'tuple_to_list', 'unlink', 'unregister', 'whereis'
            ),
        // Built-In Functions
        4 => array(
            'atom', 'binary', 'constant', 'function', 'integer', 'is_atom',
            'is_binary', 'is_constant', 'is_function', 'is_integer', 'is_list',
            'is_number', 'is_pid', 'is_reference', 'is_record', 'list',
            'number', 'pid', 'ports', 'port_close', 'port_info', 'reference'
            ),
        // Erlang/OTP internal modules (scary one)
        5 => array(
            'alarm_handler', 'any', 'app', 'application', 'appmon', 'appup',
            'array', 'asn1ct', 'asn1rt', 'auth', 'base64', 'beam_lib', 'c',
            'calendar', 'code', 'common_test_app', 'compile', 'config',
            'corba', 'corba_object', 'cosEventApp', 'CosEventChannelAdmin',
            'CosEventChannelAdmin_ConsumerAdmin',
            'CosEventChannelAdmin_EventChannel',
            'CosEventChannelAdmin_ProxyPullConsumer',
            'CosEventChannelAdmin_ProxyPullSupplier',
            'CosEventChannelAdmin_ProxyPushConsumer',
            'CosEventChannelAdmin_ProxyPushSupplier',
            'CosEventChannelAdmin_SupplierAdmin', 'CosEventDomainAdmin',
            'CosEventDomainAdmin_EventDomain',
            'CosEventDomainAdmin_EventDomainFactory',
            'cosEventDomainApp', 'CosFileTransfer_Directory',
            'CosFileTransfer_File', 'CosFileTransfer_FileIterator',
            'CosFileTransfer_FileTransferSession',
            'CosFileTransfer_VirtualFileSystem',
            'cosFileTransferApp', 'CosNaming', 'CosNaming_BindingIterator',
            'CosNaming_NamingContext', 'CosNaming_NamingContextExt',
            'CosNotification', 'CosNotification_AdminPropertiesAdmin',
            'CosNotification_QoSAdmin', 'cosNotificationApp',
            'CosNotifyChannelAdmin_ConsumerAdmin',
            'CosNotifyChannelAdmin_EventChannel',
            'CosNotifyChannelAdmin_EventChannelFactory',
            'CosNotifyChannelAdmin_ProxyConsumer',
            'CosNotifyChannelAdmin_ProxyPullConsumer',
            'CosNotifyChannelAdmin_ProxyPullSupplier',
            'CosNotifyChannelAdmin_ProxyPushConsumer',
            'CosNotifyChannelAdmin_ProxyPushSupplier',
            'CosNotifyChannelAdmin_ProxySupplier',
            'CosNotifyChannelAdmin_SequenceProxyPullConsumer',
            'CosNotifyChannelAdmin_SequenceProxyPullSupplier',
            'CosNotifyChannelAdmin_SequenceProxyPushConsumer',
            'CosNotifyChannelAdmin_SequenceProxyPushSupplier',
            'CosNotifyChannelAdmin_StructuredProxyPullConsumer',
            'CosNotifyChannelAdmin_StructuredProxyPullSupplier',
            'CosNotifyChannelAdmin_StructuredProxyPushConsumer',
            'CosNotifyChannelAdmin_StructuredProxyPushSupplier',
            'CosNotifyChannelAdmin_SupplierAdmin',
            'CosNotifyComm_NotifyPublish', 'CosNotifyComm_NotifySubscribe',
            'CosNotifyFilter_Filter', 'CosNotifyFilter_FilterAdmin',
            'CosNotifyFilter_FilterFactory', 'CosNotifyFilter_MappingFilter',
            'cosProperty', 'CosPropertyService_PropertiesIterator',
            'CosPropertyService_PropertyNamesIterator',
            'CosPropertyService_PropertySet',
            'CosPropertyService_PropertySetDef',
            'CosPropertyService_PropertySetDefFactory',
            'CosPropertyService_PropertySetFactory', 'cosTime',
            'CosTime_TimeService', 'CosTime_TIO', 'CosTime_UTO',
            'CosTimerEvent_TimerEventHandler',
            'CosTimerEvent_TimerEventService', 'cosTransactions',
            'CosTransactions_Control', 'CosTransactions_Coordinator',
            'CosTransactions_RecoveryCoordinator', 'CosTransactions_Resource',
            'CosTransactions_SubtransactionAwareResource',
            'CosTransactions_Terminator', 'CosTransactions_TransactionFactory',
            'cover', 'cprof', 'cpu_sup', 'crashdump', 'crypto', 'crypto_app',
            'ct', 'ct_cover', 'ct_ftp', 'ct_master', 'ct_rpc', 'ct_snmp',
            'ct_ssh', 'ct_telnet', 'dbg', 'debugger', 'dets', 'dialyzer',
            'dict', 'digraph', 'digraph_utils', 'disk_log', 'disksup',
            'docb_gen', 'docb_transform', 'docb_xml_check', 'docbuilder_app',
            'driver_entry', 'edoc', 'edoc_doclet', 'edoc_extract',
            'edoc_layout', 'edoc_lib', 'edoc_run', 'egd', 'ei', 'ei_connect',
            'epmd', 'epp', 'epp_dodger', 'eprof', 'erl', 'erl_boot_server',
            'erl_call', 'erl_comment_scan', 'erl_connect', 'erl_ddll',
            'erl_driver', 'erl_error', 'erl_eterm', 'erl_eval',
            'erl_expand_records', 'erl_format', 'erl_global', 'erl_id_trans',
            'erl_internal', 'erl_lint', 'erl_malloc', 'erl_marshal',
            'erl_parse', 'erl_pp', 'erl_prettypr', 'erl_prim_loader',
            'erl_prim_loader_stub', 'erl_recomment', 'erl_scan',
            'erl_set_memory_block', 'erl_syntax', 'erl_syntax_lib', 'erl_tar',
            'erl_tidy', 'erlang', 'erlang_mode', 'erlang_stub', 'erlc',
            'erlsrv', 'error_handler', 'error_logger', 'erts_alloc',
            'erts_alloc_config', 'escript', 'et', 'et_collector',
            'et_selector', 'et_viewer', 'etop', 'ets', 'eunit', 'file',
            'file_sorter', 'filelib', 'filename', 'fixed', 'fprof', 'ftp',
            'gb_sets', 'gb_trees', 'gen_event', 'gen_fsm', 'gen_sctp',
            'gen_server', 'gen_tcp', 'gen_udp', 'gl', 'global', 'global_group',
            'glu', 'gs', 'heart', 'http', 'httpd', 'httpd_conf',
            'httpd_socket', 'httpd_util', 'i', 'ic', 'ic_c_protocol',
            'ic_clib', 'igor', 'inet', 'inets', 'init', 'init_stub',
            'instrument', 'int', 'interceptors', 'inviso', 'inviso_as_lib',
            'inviso_lfm', 'inviso_lfm_tpfreader', 'inviso_rt',
            'inviso_rt_meta', 'io', 'io_lib', 'kernel_app', 'lib', 'lists',
            'lname', 'lname_component', 'log_mf_h', 'make', 'math', 'megaco',
            'megaco_codec_meas', 'megaco_codec_transform',
            'megaco_edist_compress', 'megaco_encoder', 'megaco_flex_scanner',
            'megaco_tcp', 'megaco_transport', 'megaco_udp', 'megaco_user',
            'memsup', 'mnesia', 'mnesia_frag_hash', 'mnesia_registry',
            'mod_alias', 'mod_auth', 'mod_esi', 'mod_security',
            'Module_Interface', 'ms_transform', 'net_adm', 'net_kernel',
            'new_ssl', 'nteventlog', 'observer_app', 'odbc', 'orber',
            'orber_acl', 'orber_diagnostics', 'orber_ifr', 'orber_tc',
            'orddict', 'ordsets', 'os', 'os_mon', 'os_mon_mib', 'os_sup',
            'otp_mib', 'overload', 'packages', 'percept', 'percept_profile',
            'pg', 'pg2', 'pman', 'pool', 'prettypr', 'proc_lib', 'proplists',
            'public_key', 'qlc', 'queue', 'random', 'rb', 're', 'regexp',
            'registry', 'rel', 'release_handler', 'reltool', 'relup', 'rpc',
            'run_erl', 'run_test', 'runtime_tools_app', 'sasl_app', 'script',
            'seq_trace', 'sets', 'shell', 'shell_default', 'slave', 'snmp',
            'snmp_app', 'snmp_community_mib', 'snmp_framework_mib',
            'snmp_generic', 'snmp_index', 'snmp_notification_mib', 'snmp_pdus',
            'snmp_standard_mib', 'snmp_target_mib', 'snmp_user_based_sm_mib',
            'snmp_view_based_acm_mib', 'snmpa', 'snmpa_conf', 'snmpa_error',
            'snmpa_error_io', 'snmpa_error_logger', 'snmpa_error_report',
            'snmpa_local_db', 'snmpa_mpd', 'snmpa_network_interface',
            'snmpa_network_interface_filter',
            'snmpa_notification_delivery_info_receiver',
            'snmpa_notification_filter', 'snmpa_supervisor', 'snmpc', 'snmpm',
            'snmpm_conf', 'snmpm_mpd', 'snmpm_network_interface', 'snmpm_user',
            'sofs', 'ssh', 'ssh_channel', 'ssh_connection', 'ssh_sftp',
            'ssh_sftpd', 'ssl', 'ssl_app', 'ssl_pkix', 'start', 'start_erl',
            'start_webtool', 'stdlib_app', 'string', 'supervisor',
            'supervisor_bridge', 'sys', 'systools', 'tags', 'test_server',
            'test_server_app', 'test_server_ctrl', 'tftp', 'timer', 'toolbar',
            'ttb', 'tv', 'unicode', 'unix_telnet', 'user', 'webtool', 'werl',
            'win32reg', 'wrap_log_reader', 'wx', 'wx_misc', 'wx_object',
            'wxAcceleratorEntry', 'wxAcceleratorTable', 'wxArtProvider',
            'wxAuiDockArt', 'wxAuiManager', 'wxAuiNotebook', 'wxAuiPaneInfo',
            'wxAuiTabArt', 'wxBitmap', 'wxBitmapButton', 'wxBitmapDataObject',
            'wxBoxSizer', 'wxBrush', 'wxBufferedDC', 'wxBufferedPaintDC',
            'wxButton', 'wxCalendarCtrl', 'wxCalendarDateAttr',
            'wxCalendarEvent', 'wxCaret', 'wxCheckBox', 'wxCheckListBox',
            'wxChildFocusEvent', 'wxChoice', 'wxClientDC', 'wxClipboard',
            'wxCloseEvent', 'wxColourData', 'wxColourDialog',
            'wxColourPickerCtrl', 'wxColourPickerEvent', 'wxComboBox',
            'wxCommandEvent', 'wxContextMenuEvent', 'wxControl',
            'wxControlWithItems', 'wxCursor', 'wxDataObject', 'wxDateEvent',
            'wxDatePickerCtrl', 'wxDC', 'wxDialog', 'wxDirDialog',
            'wxDirPickerCtrl', 'wxDisplayChangedEvent', 'wxEraseEvent',
            'wxEvent', 'wxEvtHandler', 'wxFileDataObject', 'wxFileDialog',
            'wxFileDirPickerEvent', 'wxFilePickerCtrl', 'wxFindReplaceData',
            'wxFindReplaceDialog', 'wxFlexGridSizer', 'wxFocusEvent', 'wxFont',
            'wxFontData', 'wxFontDialog', 'wxFontPickerCtrl',
            'wxFontPickerEvent', 'wxFrame', 'wxGauge', 'wxGBSizerItem',
            'wxGenericDirCtrl', 'wxGLCanvas', 'wxGraphicsBrush',
            'wxGraphicsContext', 'wxGraphicsFont', 'wxGraphicsMatrix',
            'wxGraphicsObject', 'wxGraphicsPath', 'wxGraphicsPen',
            'wxGraphicsRenderer', 'wxGrid', 'wxGridBagSizer', 'wxGridCellAttr',
            'wxGridCellEditor', 'wxGridCellRenderer', 'wxGridEvent',
            'wxGridSizer', 'wxHelpEvent', 'wxHtmlEasyPrinting', 'wxIcon',
            'wxIconBundle', 'wxIconizeEvent', 'wxIdleEvent', 'wxImage',
            'wxImageList', 'wxJoystickEvent', 'wxKeyEvent',
            'wxLayoutAlgorithm', 'wxListBox', 'wxListCtrl', 'wxListEvent',
            'wxListItem', 'wxListView', 'wxMask', 'wxMaximizeEvent',
            'wxMDIChildFrame', 'wxMDIClientWindow', 'wxMDIParentFrame',
            'wxMemoryDC', 'wxMenu', 'wxMenuBar', 'wxMenuEvent', 'wxMenuItem',
            'wxMessageDialog', 'wxMiniFrame', 'wxMirrorDC',
            'wxMouseCaptureChangedEvent', 'wxMouseEvent', 'wxMoveEvent',
            'wxMultiChoiceDialog', 'wxNavigationKeyEvent', 'wxNcPaintEvent',
            'wxNotebook', 'wxNotebookEvent', 'wxNotifyEvent',
            'wxPageSetupDialog', 'wxPageSetupDialogData', 'wxPaintDC',
            'wxPaintEvent', 'wxPalette', 'wxPaletteChangedEvent', 'wxPanel',
            'wxPasswordEntryDialog', 'wxPen', 'wxPickerBase', 'wxPostScriptDC',
            'wxPreviewCanvas', 'wxPreviewControlBar', 'wxPreviewFrame',
            'wxPrintData', 'wxPrintDialog', 'wxPrintDialogData', 'wxPrinter',
            'wxPrintout', 'wxPrintPreview', 'wxProgressDialog',
            'wxQueryNewPaletteEvent', 'wxRadioBox', 'wxRadioButton',
            'wxRegion', 'wxSashEvent', 'wxSashLayoutWindow', 'wxSashWindow',
            'wxScreenDC', 'wxScrollBar', 'wxScrolledWindow', 'wxScrollEvent',
            'wxScrollWinEvent', 'wxSetCursorEvent', 'wxShowEvent',
            'wxSingleChoiceDialog', 'wxSizeEvent', 'wxSizer', 'wxSizerFlags',
            'wxSizerItem', 'wxSlider', 'wxSpinButton', 'wxSpinCtrl',
            'wxSpinEvent', 'wxSplashScreen', 'wxSplitterEvent',
            'wxSplitterWindow', 'wxStaticBitmap', 'wxStaticBox',
            'wxStaticBoxSizer', 'wxStaticLine', 'wxStaticText', 'wxStatusBar',
            'wxStdDialogButtonSizer', 'wxStyledTextCtrl', 'wxStyledTextEvent',
            'wxSysColourChangedEvent', 'wxTextAttr', 'wxTextCtrl',
            'wxTextDataObject', 'wxTextEntryDialog', 'wxToggleButton',
            'wxToolBar', 'wxToolTip', 'wxTopLevelWindow', 'wxTreeCtrl',
            'wxTreeEvent', 'wxUpdateUIEvent', 'wxWindow', 'wxWindowCreateEvent',
            'wxWindowDC', 'wxWindowDestroyEvent', 'wxXmlResource', 'xmerl',
            'xmerl_eventp', 'xmerl_scan', 'xmerl_xpath', 'xmerl_xs',
            'xmerl_xsd', 'xref', 'yecc', 'zip', 'zlib', 'zlib_stub'
            ),
        // Binary modifiers
        6 => array(
            'big', 'binary', 'float', 'integer', 'little', 'signed', 'unit', 'unsigned'
            )
        ),
    'SYMBOLS' => array(
        0 => array('(', ')', '[', ']', '{', '}'),
        1 => array('->', ',', ';', '.'),
        2 => array('<<', '>>'),
        3 => array('=', '||', '-', '+', '*', '/', '++', '--', '!', '<', '>', '>=',
                    '=<', '==', '/=', '=:=', '=/=')
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #186895;',
            2 => 'color: #014ea4;',
            3 => 'color: #fa6fff;',
            4 => 'color: #fa6fff;',
            5 => 'color: #ff4e18;',
            6 => 'color: #9d4f37;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            'HARD' => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #109ab8;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff7800;'
            ),
        'NUMBERS' => array(
            0 => 'color: #ff9600;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;',
            2 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #004866;',
            1 => 'color: #6bb810;',
            2 => 'color: #ee3800;',
            3 => 'color: #014ea4;'
            ),
        'REGEXPS' => array(
            0 => 'color: #6941fd;',
            1 => 'color: #d400ed;',
            2 => 'color: #5400b3;',
            3 => 'color: #ff3c00;',
            4 => 'color: #6941fd;',
            5 => 'color: #45b3e6;',
            6 => 'color: #ff9600;',
            7 => 'color: #d400ed;',
            8 => 'color: #ff9600;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => 'http://erlang.org/doc/man/{FNAME}.html',
        6 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '-&gt;',
        2 => ':'
        ),
    'REGEXPS' => array(
        //�Macro definitions
        0 => array(
            GESHI_SEARCH => '(-define\s*\()([a-zA-Z0-9_]+)(\(|,)',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => '\3'
            ),
        // Record definitions
        1 => array(
            GESHI_SEARCH => '(-record\s*\()([a-zA-Z0-9_]+)(,)',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => '\3'
            ),
        // Precompiler directives
        2 => array(
            GESHI_SEARCH => '(-)([a-z][a-zA-Z0-9_]*)(\()',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => '\3'
            ),
        // Functions
        3 => array(
            GESHI_SEARCH => '([a-z]\w*|\'\w*\')(\s*\()',
            GESHI_REPLACE => '\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => '\2'
            ),
        // Macros
        4 => array(
            GESHI_SEARCH => '(\?)([a-zA-Z0-9_]+)',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => ''
            ),
        // Variables - With hack to avoid interfering wish GeSHi internals
        5 => array(
            GESHI_SEARCH => '([([{,<+*-\/=\s!]|&lt;)(?!(?:PIPE|SEMI|DOT|NUM|REG3XP\d*)\W)([A-Z_]\w*)(?!\w)',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => ''
            ),
        // ASCII�codes
        6 => '(\$[a-zA-Z0-9_])',
        // Records
        7 => array(
            GESHI_SEARCH => '(#)([a-z][a-zA-Z0-9_]*)(\.|\{)',
            GESHI_REPLACE => '\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\1',
            GESHI_AFTER => '\3'
            ),
        // Numbers with a different radix
        8 => '(?<=>)(#[a-zA-Z0-9]*)'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array(),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            3 => array(
                'DISALLOWED_BEFORE' => '(?<![\w])',
                'DISALLOWED_AFTER' => ''//'(?=\s*\()'
            ),
            5 => array(
                'DISALLOWED_BEFORE' => '(?<=\'|)',
                'DISALLOWED_AFTER' => '(?=(\'|):)'
            ),
            6 => array(
                'DISALLOWED_BEFORE' => '(?<=\/|-)',
                'DISALLOWED_AFTER' => ''
            )
        )
    ),
);

?>