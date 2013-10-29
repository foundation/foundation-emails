<?php
/*************************************************************************************
 * c_loadrunner.php
 * ---------------------------------
 * Author: Stuart Moncrieff (stuart at myloadtest dot com)
 * Copyright: (c) 2010 Stuart Moncrieff (http://www.myloadtest.com/loadrunner-syntax-highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2010-07-25
 *
 * C (for LoadRunner) language file for GeSHi.
 *
 * Based on LoadRunner 9.52.
 *
 * CHANGES
 * -------
 * 2010-08-01 (1.0.8.9)
 *  -  Added highlighting support for LoadRunner {parameters}.
 * 2010-07-25 (1.0.8.8)
 *  -  First Release. Syntax highlighting support for lr_, web_, and sapgui_ functions only.
 *
 * TODO (updated 2010-07-25)
 * -------------------------
 *  - Add support for other vuser types: MMS, FTP, etc.
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

$language_data = array (
    // The First Indices
    'LANG_NAME' => 'C (LoadRunner)',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    // Escape characters within strings (like \\) are not highlighted differently in LoadRunner, so
    // I am using GeSHi escape characters (or regular expressions) to highlight LoadRunner {parameters}.
    // LoadRunner {parameters} must begin with a letter and contain only alphanumeric characters and '_'
    'ESCAPE_REGEXP' => array(
        0 => "#\{[a-zA-Z]{1}[a-zA-Z_]{0,}\}#",
    ),

    // Keywords
    'KEYWORDS' => array(
        // Keywords from http://en.wikipedia.org/wiki/C_syntax
        1 => array(
            'auto', 'break', 'case', 'char', 'const', 'continue', 'default',
            'do', 'double', 'else', 'enum', 'extern', 'float', 'for', 'goto',
            'if', 'inline', 'int', 'long', 'register', 'restrict', 'return',
            'short', 'signed', 'sizeof', 'static', 'struct', 'switch',
            'typedef', 'union', 'unsigned', 'void', 'volatile', 'while',
            '_Bool', '_Complex', '_Imaginary'
            ),
        // C preprocessor directives from http://en.wikipedia.org/wiki/C_preprocessor
        2 => array(
            '#define', '#if', '#ifdef', '#ifndef', '#include', '#else', '#elif', '#endif', '#pragma', '#undef'
            ),
        // Functions from lrun.h
        3 => array(
            'lr_start_transaction', 'lr_start_sub_transaction', 'lr_start_transaction_instance', 'lr_end_transaction',
            'lr_end_sub_transaction', 'lr_end_transaction_instance', 'lr_stop_transaction', 'lr_stop_transaction_instance',
            'lr_resume_transaction', 'lr_resume_transaction_instance', 'lr_wasted_time', 'lr_set_transaction', 'lr_user_data_point',
            'lr_user_data_point_instance', 'lr_user_data_point_ex', 'lr_user_data_point_instance_ex', 'lr_get_transaction_duration',
            'lr_get_trans_instance_duration', 'lr_get_transaction_think_time', 'lr_get_trans_instance_think_time',
            'lr_get_transaction_wasted_time', 'lr_get_trans_instance_wasted_time', 'lr_get_transaction_status',
            'lr_get_trans_instance_status', 'lr_set_transaction_status', 'lr_set_transaction_status_by_name',
            'lr_set_transaction_instance_status', 'lr_start_timer', 'lr_end_timer', 'lr_rendezvous', 'lr_rendezvous_ex',
            'lr_get_vuser_ip', 'lr_whoami', 'lr_get_host_name', 'lr_get_master_host_name', 'lr_get_attrib_long',
            'lr_get_attrib_string', 'lr_get_attrib_double', 'lr_paramarr_idx', 'lr_paramarr_random', 'lr_paramarr_len',
            'lr_param_unique', 'lr_param_sprintf', 'lr_load_dll', 'lr_continue_on_error', 'lr_decrypt', 'lr_abort', 'lr_exit',
            'lr_peek_events', 'lr_think_time', 'lr_debug_message', 'lr_log_message', 'lr_message', 'lr_error_message',
            'lr_output_message', 'lr_vuser_status_message', 'lr_fail_trans_with_error', 'lr_next_row', 'lr_advance_param',
            'lr_eval_string', 'lr_eval_string_ext', 'lr_eval_string_ext_free', 'lr_param_increment', 'lr_save_var',
            'lr_save_string', 'lr_save_int', 'lr_save_datetime', 'lr_save_searched_string', 'lr_set_debug_message',
            'lr_get_debug_message', 'lr_enable_ip_spoofing', 'lr_disable_ip_spoofing', 'lr_convert_string_encoding'
            ),
        // Constants from lrun.h
        4 => array(
            'DP_FLAGS_NO_LOG', 'DP_FLAGS_STANDARD_LOG', 'DP_FLAGS_EXTENDED_LOG', 'merc_timer_handle_t', 'LR_EXIT_VUSER',
            'LR_EXIT_ACTION_AND_CONTINUE', 'LR_EXIT_ITERATION_AND_CONTINUE', 'LR_EXIT_VUSER_AFTER_ITERATION',
            'LR_EXIT_VUSER_AFTER_ACTION', 'LR_EXIT_MAIN_ITERATION_AND_CONTINUE', 'LR_MSG_CLASS_DISABLE_LOG',
            'LR_MSG_CLASS_STANDARD_LOG', 'LR_MSG_CLASS_RETURNED_DATA', 'LR_MSG_CLASS_PARAMETERS', 'LR_MSG_CLASS_ADVANCED_TRACE',
            'LR_MSG_CLASS_EXTENDED_LOG', 'LR_MSG_CLASS_SENT_DATA', 'LR_MSG_CLASS_JIT_LOG_ON_ERROR', 'LR_SWITCH_OFF', 'LR_SWITCH_ON',
            'LR_SWITCH_DEFAULT', 'ONE_DAY', 'ONE_HOUR', 'ONE_MIN', 'DATE_NOW', 'TIME_NOW', 'LR_MSG_CLASS_BRIEF_LOG',
            'LR_MSG_CLASS_RESULT_DATA', 'LR_MSG_CLASS_FULL_TRACE', 'LR_MSG_CLASS_AUTO_LOG', 'LR_MSG_OFF', 'LR_MSG_ON',
            'LR_MSG_DEFAULT'
            ),
        // Functions from web_api.h
        5 => array(
            'web_reg_add_cookie', 'web_report_data_point', 'web_text_link', 'web_element', 'web_image_link', 'web_static_image',
            'web_image_submit', 'web_button', 'web_edit_field', 'web_radio_group', 'web_check_box', 'web_list', 'web_text_area',
            'web_map_area', 'web_eval_java_script', 'web_reg_dialog', 'web_reg_cross_step_download', 'web_browser',
            'web_set_rts_key', 'web_save_param_length', 'web_save_timestamp_param', 'web_load_cache', 'web_dump_cache',
            'web_add_cookie_ex'
            ),
        // Constants from web_api.h
        6 => array(
            'DESCRIPTION', 'ACTION', 'VERIFICATION', 'LR_NOT_FOUND', 'HTTP_INFO_TOTAL_REQUEST_STAT',
            'HTTP_INFO_TOTAL_RESPONSE_STAT', 'LRW_OPT_STOP_VUSER_ON_ERROR', 'LRW_OPT_DISPLAY_IMAGE_BODY'
            ),
        // Functions from as_web.h
        7 => array(
            'web_add_filter', 'web_add_auto_filter', 'web_add_auto_header', 'web_add_header', 'web_add_cookie',
            'web_cleanup_auto_headers', 'web_cleanup_cookies', 'web_concurrent_end', 'web_concurrent_start', 'web_create_html_param',
            'web_create_html_param_ex', 'web_custom_request', 'web_disable_keep_alive', 'web_enable_keep_alive', 'web_find',
            'web_get_int_property', 'web_image', 'web_image_check', 'web_link', 'web_global_verification', 'web_reg_find',
            'web_reg_save_param', 'web_convert_param', 'web_remove_auto_filter', 'web_remove_auto_header', 'web_revert_auto_header',
            'web_remove_cookie', 'web_save_header', 'web_set_certificate', 'web_set_certificate_ex', 'web_set_connections_limit',
            'web_set_max_html_param_len', 'web_set_max_retries', 'web_set_proxy', 'web_set_proxy_bypass', 'web_set_secure_proxy',
            'web_set_sockets_option', 'web_set_option', 'web_set_timeout', 'web_set_user', 'web_sjis_to_euc_param',
            'web_submit_data', 'web_submit_form', 'web_url', 'web_set_proxy_bypass_local', 'web_cache_cleanup',
            'web_create_html_query', 'web_create_radio_button_param', 'web_switch_net_layer'
            ),
        // Constants from as_web.h
        8 => array(
            'ENDFORM', 'LAST', 'ENDITEM', 'EXTRARES', 'ITEMDATA', 'STARTHIDDENS', 'ENDHIDDENS', 'CONNECT', 'RECEIVE', 'RESOLVE',
            'STEP', 'REQUEST', 'RESPONSE', 'STARTQUERY', 'ENDQUERY', 'INPROPS', 'OUTPROPS', 'ENDPROPS', 'RAW_BODY_START',
            'RAW_BODY_END', 'HTTP_INFO_RETURN_CODE', 'HTTP_INFO_DOWNLOAD_SIZE', 'HTTP_INFO_DOWNLOAD_TIME',
            'LRW_NET_SOCKET_OPT_LOAD_VERIFY_FILE', 'LRW_NET_SOCKET_OPT_DEFAULT_VERIFY_PATH', 'LRW_NET_SOCKET_OPT_SSL_VERSION',
            'LRW_NET_SOCKET_OPT_SSL_CIPHER_LIST', 'LRW_NET_SOCKET_OPT_SO_REUSE_ADDRESS', 'LRW_NET_SOCKET_OPT_USER_IP_ADDRESS',
            'LRW_NET_SOCKET_OPT_IP_ADDRESS_BY_INDEX', 'LRW_NET_SOCKET_OPT_HELP', 'LRW_NET_SOCKET_OPT_PRINT_USER_IP_ADDRESS_LIST',
            'LRW_OPT_HTML_CHAR_REF_BACKWARD_COMPATIBILITY', 'LRW_OPT_VALUE_YES', 'LRW_OPT_VALUE_NO'
            ),
        // Functions from as_sapgui.h
        9 => array(
            'sapgui_open_connection', 'sapgui_open_connection_ex', 'sapgui_logon', 'sapgui_create_session',
            'sapgui_create_new_session', 'sapgui_call_method', 'sapgui_call_method_ex', 'sapgui_set_property',
            'sapgui_get_property', 'sapgui_set_collection_property', 'sapgui_active_object_from_parent_method',
            'sapgui_active_object_from_parent_property', 'sapgui_call_method_of_active_object',
            'sapgui_call_method_of_active_object_ex', 'sapgui_set_property_of_active_object', 'sapgui_get_property_of_active_object',
            'sapgui_select_active_connection', 'sapgui_select_active_session', 'sapgui_select_active_window ',
            'sapgui_status_bar_get_text', 'sapgui_status_bar_get_param', 'sapgui_status_bar_get_type', 'sapgui_get_status_bar_text',
            'sapgui_get_active_window_title', 'sapgui_is_object_available', 'sapgui_is_tab_selected', 'sapgui_is_object_changeable',
            'sapgui_set_ok_code', 'sapgui_send_vkey', 'sapgui_resize_window', 'sapgui_window_resize', 'sapgui_window_maximize',
            'sapgui_window_close', 'sapgui_window_restore', 'sapgui_window_scroll_to_row', 'sapgui_press_button',
            'sapgui_select_radio_button', 'sapgui_set_password', 'sapgui_set_text', 'sapgui_select_menu', 'sapgui_select_tab',
            'sapgui_set_checkbox', 'sapgui_set_focus', 'sapgui_select_combobox_entry', 'sapgui_get_ok_code',
            'sapgui_is_radio_button_selected', 'sapgui_get_text', 'sapgui_is_checkbox_selected', 'sapgui_table_set_focus',
            'sapgui_table_press_button', 'sapgui_table_select_radio_button', 'sapgui_table_set_password', 'sapgui_table_set_text',
            'sapgui_table_set_checkbox', 'sapgui_table_select_combobox_entry', 'sapgui_table_set_row_selected',
            'sapgui_table_set_column_selected', 'sapgui_table_set_column_width', 'sapgui_table_reorder', 'sapgui_table_fill_data',
            'sapgui_table_get_text', 'sapgui_table_is_radio_button_selected', 'sapgui_table_is_checkbox_selected',
            'sapgui_table_is_row_selected', 'sapgui_table_is_column_selected', 'sapgui_table_get_column_width',
            'sapgui_grid_clear_selection', 'sapgui_grid_select_all', 'sapgui_grid_selection_changed',
            'sapgui_grid_press_column_header', 'sapgui_grid_select_cell', 'sapgui_grid_select_rows', 'sapgui_grid_select_column',
            'sapgui_grid_deselect_column', 'sapgui_grid_select_columns', 'sapgui_grid_select_cells', 'sapgui_grid_select_cell_row',
            'sapgui_grid_select_cell_column', 'sapgui_grid_set_column_order', 'sapgui_grid_set_column_width',
            'sapgui_grid_scroll_to_row', 'sapgui_grid_double_click', 'sapgui_grid_click', 'sapgui_grid_press_button',
            'sapgui_grid_press_total_row', 'sapgui_grid_set_cell_data', 'sapgui_grid_set_checkbox',
            'sapgui_grid_double_click_current_cell', 'sapgui_grid_click_current_cell', 'sapgui_grid_press_button_current_cell',
            'sapgui_grid_press_total_row_current_cell', 'sapgui_grid_press_F1', 'sapgui_grid_press_F4', 'sapgui_grid_press_ENTER',
            'sapgui_grid_press_toolbar_button', 'sapgui_grid_press_toolbar_context_button', 'sapgui_grid_open_context_menu',
            'sapgui_grid_select_context_menu', 'sapgui_grid_select_toolbar_menu', 'sapgui_grid_fill_data',
            'sapgui_grid_get_current_cell_row', 'sapgui_grid_get_current_cell_column', 'sapgui_grid_get_rows_count',
            'sapgui_grid_get_columns_count', 'sapgui_grid_get_cell_data', 'sapgui_grid_is_checkbox_selected',
            'sapgui_tree_scroll_to_node', 'sapgui_tree_set_hierarchy_header_width', 'sapgui_tree_set_selected_node',
            'sapgui_tree_double_click_node', 'sapgui_tree_press_key', 'sapgui_tree_press_button', 'sapgui_tree_set_checkbox',
            'sapgui_tree_double_click_item', 'sapgui_tree_click_link', 'sapgui_tree_open_default_context_menu',
            'sapgui_tree_open_node_context_menu', 'sapgui_tree_open_header_context_menu', 'sapgui_tree_open_item_context_menu',
            'sapgui_tree_select_context_menu', 'sapgui_tree_select_item', 'sapgui_tree_select_node', 'sapgui_tree_unselect_node',
            'sapgui_tree_unselect_all', 'sapgui_tree_select_column', 'sapgui_tree_unselect_column', 'sapgui_tree_set_column_order',
            'sapgui_tree_collapse_node', 'sapgui_tree_expand_node', 'sapgui_tree_scroll_to_item', 'sapgui_tree_set_column_width',
            'sapgui_tree_press_header', 'sapgui_tree_is_checkbox_selected', 'sapgui_tree_get_node_text', 'sapgui_tree_get_item_text',
            'sapgui_calendar_scroll_to_date', 'sapgui_calendar_focus_date', 'sapgui_calendar_select_interval',
            'sapgui_apogrid_select_all', 'sapgui_apogrid_clear_selection', 'sapgui_apogrid_select_cell',
            'sapgui_apogrid_deselect_cell', 'sapgui_apogrid_select_row', 'sapgui_apogrid_deselect_row',
            'sapgui_apogrid_select_column', 'sapgui_apogrid_deselect_column', 'sapgui_apogrid_scroll_to_row',
            'sapgui_apogrid_scroll_to_column', 'sapgui_apogrid_double_click', 'sapgui_apogrid_set_cell_data',
            'sapgui_apogrid_get_cell_data', 'sapgui_apogrid_is_cell_changeable', 'sapgui_apogrid_get_cell_format',
            'sapgui_apogrid_get_cell_tooltip', 'sapgui_apogrid_press_ENTER', 'sapgui_apogrid_open_cell_context_menu',
            'sapgui_apogrid_select_context_menu_item', 'sapgui_text_edit_scroll_to_line', 'sapgui_text_edit_set_selection_indexes',
            'sapgui_text_edit_set_unprotected_text_part', 'sapgui_text_edit_get_first_visible_line',
            'sapgui_text_edit_get_selection_index_start', 'sapgui_text_edit_get_selection_index_end',
            'sapgui_text_edit_get_number_of_unprotected_text_parts', 'sapgui_text_edit_double_click',
            'sapgui_text_edit_single_file_dropped', 'sapgui_text_edit_multiple_files_dropped', 'sapgui_text_edit_press_F1',
            'sapgui_text_edit_press_F4', 'sapgui_text_edit_open_context_menu', 'sapgui_text_edit_select_context_menu',
            'sapgui_text_edit_modified_status_changed', 'sapgui_htmlviewer_send_event', 'sapgui_htmlviewer_dom_get_property',
            'sapgui_toolbar_press_button', 'sapgui_toolbar_press_context_button', 'sapgui_toolbar_select_menu_item',
            'sapgui_toolbar_select_menu_item_by_text', 'sapgui_toolbar_select_context_menu_item',
            'sapgui_toolbar_select_context_menu_item_by_text'
            ),
        // Constants from as_sapgui.h
        10 => array(
            'BEGIN_OPTIONAL', 'END_OPTIONAL', 'al-keys', 'ENTER', 'HELP', 'F2', 'BACK', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9',
            'F10', 'F11', 'ESC', 'SHIFT_F1', 'SHIFT_F2', 'SHIFT_F3', 'SHIFT_F4', 'SHIFT_F5', 'SHIFT_F6', 'SHIFT_F7', 'SHIFT_F8',
            'SHIFT_F9', 'SHIFT_F10', 'SHIFT_F11', 'SHIFT_F12', 'CTRL_F1', 'CTRL_F2', 'CTRL_F3', 'CTRL_F4', 'CTRL_F5', 'CTRL_F6',
            'CTRL_F7', 'CTRL_F8', 'CTRL_F9', 'CTRL_F10', 'CTRL_F11', 'CTRL_F12', 'CTRL_SHIFT_F1', 'CTRL_SHIFT_F2', 'CTRL_SHIFT_F3',
            'CTRL_SHIFT_F4', 'CTRL_SHIFT_F5', 'CTRL_SHIFT_F6', 'CTRL_SHIFT_F7', 'CTRL_SHIFT_F8', 'CTRL_SHIFT_F9', 'CTRL_SHIFT_F10',
            'CTRL_SHIFT_F11', 'CTRL_SHIFT_F12', 'CANCEL', 'CTRL_F', 'CTRL_PAGE_UP', 'PAGE_UP', 'PAGE_DOWN', 'CTRL_PAGE_DOWN',
            'CTRL_G', 'CTRL_P'
            ),
        ),

    // Symbols and Case Sensitivity
    // Symbols from: http://en.wikipedia.org/wiki/C_syntax
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']',
        '+', '-', '*', '/', '%',
        '=', '<', '>', '!', '^', '&', '|', '?', ':', ';', ','
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true, // Standard C reserved keywords
        2 => true, // C preprocessor directives
        3 => true, // Functions from lrun.h
        4 => true, // Constants from lrun.h
        5 => true, // Functions from web_api.h
        6 => true, // Constants from web_api.h
        7 => true, // Functions from as_web.h
        8 => true, // Constants from as_web.h
        9 => true, // Functions from as_sapgui.h
        10 => true, // Constants from as_sapgui.h
        ),

    // Styles
    'STYLES' => array(
        'KEYWORDS' => array(
            // Functions are brown, constants and reserved words are blue
            1 => 'color: #0000ff;', // Standard C reserved keywords
            2 => 'color: #0000ff;', // C preprocessor directives
            3 => 'color: #8a0000;', // Functions from lrun.h
            4 => 'color: #0000ff;', // Constants from lrun.h
            5 => 'color: #8a0000;', // Functions from web_api.h
            6 => 'color: #0000ff;', // Constants from web_api.h
            7 => 'color: #8a0000;', // Functions from as_web.h
            8 => 'color: #0000ff;', // Constants from as_web.h
            9 => 'color: #8a0000;', // Functions from as_sapgui.h
            10 => 'color: #0000ff;', // Constants from as_sapgui.h
            ),
        'COMMENTS' => array(
            // Comments are grey
            1 => 'color: #9b9b9b;',
            'MULTI' => 'color: #9b9b9b;'
            ),
        'ESCAPE_CHAR' => array(
            // GeSHi cannot define a separate style for ESCAPE_REGEXP. The style for ESCAPE_CHAR also applies to ESCAPE_REGEXP.
            // This is used for LoadRunner {parameters}
            // {parameters} are pink
            0 => 'color: #c000c0;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            // Strings are green
            0 => 'color: #008080;'
            ),
        'NUMBERS' => array(
            // Numbers are green
            0 => 'color: #008080;',
            GESHI_NUMBER_BIN_PREFIX_0B => 'color: #008080;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #008080;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #008080;',
            GESHI_NUMBER_FLT_SCI_SHORT => 'color:#008080;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color:#008080;',
            GESHI_NUMBER_FLT_NONSCI_F => 'color:#008080;',
            GESHI_NUMBER_FLT_NONSCI => 'color:#008080;'
            ),
        'METHODS' => array(
            1 => 'color: #000000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),

    // URLs for Functions
    'URLS' => array(
        1 => '', // Standard C reserved keywords
        2 => '', // C preprocessor directives
        3 => '', // Functions from lrun.h
        4 => '', // Constants from lrun.h
        5 => '', // Functions from web_api.h
        6 => '', // Constants from web_api.h
        7 => '', // Functions from as_web.h
        8 => '', // Constants from as_web.h
        9 => '', // Functions from as_sapgui.h
        10 => '', // Constants from as_sapgui.h
        ),

    // Object Orientation
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),

    // Regular Expressions
    // Note that REGEXPS are not applied within strings.
    'REGEXPS' => array(
        ),

    // Contextual Highlighting and Strict Mode
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),

    // Tabs
    // Note that if you are using <pre> tags for your code, then the browser chooses how many spaces your tabs will translate to.
    'TAB_WIDTH' => 4
);

?>