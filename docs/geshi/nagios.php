<?php
/*************************************************************************************
 * nagios.php
 * --------
 * Author: Albéric de Pertat <alberic@depertat.net>
 * Copyright: (c) 2012 Albéric de Pertat (https://github.com/adepertat/geshi-nagios)
 * Release Version: 1.0.8.11
 * Date Started: 2012/01/19
 *
 * Nagios language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2012/01/19 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2012/01/19)
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

$language_data = array(
    'LANG_NAME' => 'Nagios',
    'COMMENT_SINGLE' => array(1 => ';', 2 => '#'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'HARDQUOTE' => array("'", "'"),
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\'',
    'KEYWORDS' => array(
        1 => array(
            'define'
            ),
        2 => array(
            'command', 'contact', 'contactgroup', 'host', 'hostdependency',
            'hostescalation', 'hostextinfo', 'hostgroup', 'service',
            'servicedependency', 'serviceescalation',
            'serviceextinfo', 'servicegroup', 'timeperiod'
            ),
        3 => array(
            'active_checks_enabled', 'passive_checks_enabled', 'alias',
            'display_name', 'host_name', 'address', 'hostgroups', 'parents',
            'hostgroup_members', 'members', 'service_description',
            'servicegroups', 'is_volatile', 'servicegroup_name',
            'servicegroup_members', 'contact_name', 'contactgroups', 'email',
            'pager', 'can_submit_commands', 'contactgroup_name',
            'contactgroup_members', 'host_notifications_enabled',
            'service_notifications_enabled', 'host_notification_period',
            'service_notification_period', 'host_notification_options',
            'service_notification_options', 'host_notification_commands',
            'service_notification_commands', 'check_command',
            'check_freshness', 'check_interval', 'check_period', 'contacts',
            'contact_groups', 'event_handler', 'event_handler_enabled',
            'flap_detection_enabled', 'flap_detection_options',
            'freshness_threshold', 'initial_state', 'low_flap_threshold',
            'high_flap_threshold', 'max_check_attempts',
            'notification_interval', 'first_notification_delay',
            'notification_period', 'notification_options',
            'notifications_enabled', 'stalking_options', 'notes', 'notes_url',
            'action_url', 'icon_image', 'icon_image_alt', 'vrml_image',
            'statusmap_image', '2d_coords', '3d_coords', 'obsess_over_host',
            'obsess_over_hostver_service', 'process_perf_data',
            'retain_status_information', 'retain_nonstatus_information',
            'retry_interval', 'register', 'use', 'name', 'timeperiod_name',
            'exclude', 'command_name', 'command_line', 'dependent_host_name',
            'dependent_hostgroup_name', 'dependent_service_description',
            'inherits_parent', 'execution_failure_criteria',
            'notification_failure_criteria', 'dependency_period',
            'first_notification', 'last_notification', 'escalation_period',
            'escalation_options'
            ),
        4 => array(
            'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday',
            'sunday', 'january', 'february', 'march', 'april', 'may', 'june',
            'july', 'august', 'september', 'october', 'november', 'december',
            'day'
            )
        ),
    'SYMBOLS' => array(
        0 => array(
            '{', '}', ',', '+'
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'font-weight:bold;color:#FFDCA8;',
            2 => 'font-weight:bold;color #FFA858;',
            3 => 'font-weight:bold;color:#00C0C0;',
            4 => 'font-weight:bold;color:#C0C0FF;'
            ),
        'SYMBOLS' => array(
            0 => 'font-weight:bold;color:#000000;'
            ),
        'NUMBERS' => array(
            0 => ''
            ),
        'COMMENTS' => array(
            0 => 'color: #AAAAAA; font-style: italic;',
            1 => 'color: #AAAAAA; font-style: italic;',
            2 => 'color: #AAAAAA; font-style: italic;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #660066;',
            'HARD' => 'color: #660066;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;'
            ),
        'REGEXPS' => array(
            0 => 'font-weight:bold;color:#808080;',
            1 => 'font-weight:bold;color:#000080;',
            2 => 'font-weight:bold;color:red;',
            3 => 'font-weight:bold;color:#808000;',
            4 => 'font-weight:bold;color:blue;',
            5 => 'font-weight:bold;color:#C0FFC0;',
            ),
        'SCRIPT' => array(
            0 => '',
            )
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        1 => '\\'
        ),
    'REGEXPS' => array(
        // Custom macros
        0 => array(
            GESHI_SEARCH => '(\$[a-zA-Z_]+\$)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => '',
            ),
        // Custom macro definitions
        1 => array(
            GESHI_SEARCH => '(\A|\s)(_[a-zA-Z_]+)',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '',
            ),
        // $USERxx$
        2 => array(
            GESHI_SEARCH => '(\$USER[0-9]+\$)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => '',
            ),
        // $ARGxx$
        3 => array(
            GESHI_SEARCH => '(\$ARG[1-9]\$)',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => '',
            ),
        // register 0
        4 => array(
            GESHI_SEARCH => '(\bregister[\\x20\\t]+[01])',
            GESHI_REPLACE => '\\1',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '',
            GESHI_AFTER => '',
            ),
        // use
        5 => array(
            GESHI_SEARCH => '(use[\\x20\\t]+[^\\x20\\t]+)([\\x20\\t]*[$;#])',
            GESHI_REPLACE => '\\2',
            GESHI_MODIFIERS => '',
            GESHI_BEFORE => '\\1',
            GESHI_AFTER => '',
            ),
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => false
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'ENABLE_FLAGS' => array(
            'NUMBERS' => GESHI_NEVER
            )
        )
);

?>
