<?php
/*************************************************************************************
 * dcs.php
 * ---------------------------------
 * Author: Stelio Passaris (GeSHi@stelio.net)
 * Copyright: (c) 2009 Stelio Passaris (http://stelio.net/stiki/GeSHi)
 * Release Version: 1.0.8.11
 * Date Started: 2009/01/20
 *
 * DCS language file for GeSHi.
 *
 * DCS (Data Conversion System) is part of Sungard iWorks' Prophet suite and is used
 * to convert external data files into a format that Prophet and Glean can read.
 * See http://www.prophet-web.com/Products/DCS for product information.
 * This language file is current for DCS version 7.3.2.
 *
 * Note that the DCS IDE does not handle escape characters correctly. The IDE thinks
 * that a backslash '\' is an escape character, but in practice the backslash does
 * not escape the string delimiter character '"' when the program runs. A '\\' is
 * escaped to '\' when the program runs, but '\"' is treated as '\' at the end of a
 * string. Therefore in this language file, we do not recognise the backslash as an
 * escape character. For the purposes of GeSHi, there is no character escaping.
 *
 * CHANGES
 * -------
 * 2009/02/21 (1.0.8.3)
 *  -  First Release
 *
 * TODO (updated 2009/02/21)
 * -------------------------
 * * Add handling for embedded C code. Note that the DCS IDE does not highlight C code
 *   correctly, but that doesn't mean that we can't! This will be included for a
 *   stable release of GeSHi of version 1.1.x (or later) that allows for highlighting
 *   embedded code using that code's appropriate language file.
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
 *************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'DCS',
    'COMMENT_SINGLE' => array(
        1 => ';'
        ),
    'COMMENT_MULTI' => array(
        ),
    'COMMENT_REGEXP' => array(
        // Highlight embedded C code in a separate color:
        2 => '/\bINSERT_C_CODE\b.*?\bEND_C_CODE\b/ims'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_UPPER,
    'QUOTEMARKS' => array(
        '"'
        ),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => '',
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            'abs', 'ascii_value', 'bit_value', 'blank_date', 'calc_unit_values', 'cm',
            'complete_months', 'complete_years', 'correct', 'create_input_file', 'cy',
            'date_convert', 'day', 'del_output_separator',
            'delete_existing_output_files', 'div', 'ex', 'exact_years', 'exp',
            'extract_date', 'failed_validation', 'file_number', 'first_record',
            'fract', 'fund_fac_a', 'fund_fac_b', 'fund_fac_c', 'fund_fac_d',
            'fund_fac_e', 'fund_fac_f', 'fund_fac_g', 'fund_fac_h', 'fund_fac_i',
            'fund_fac_j', 'fund_fac_k', 'fund_fac_l', 'fund_fac_m', 'fund_fac_n',
            'fund_fac_o', 'fund_fac_p', 'fund_fac_q', 'fund_fac_r', 'fund_fac_s',
            'fund_fac_t', 'fund_fac_u', 'fund_fac_v', 'fund_fac_w', 'fund_fac_x',
            'fund_fac_y', 'fund_fac_z', 'group', 'group_record',
            'input_file_date_time', 'input_file_extension', 'input_file_location',
            'input_file_name', 'int', 'invalid', 'last_record', 'leap_year', 'len',
            'ln', 'log', 'main_format_name', 'max', 'max_num_subrecords', 'message',
            'min', 'mod', 'month', 'months_add', 'months_sub', 'nearest_months',
            'nearest_years', 'next_record', 'nm', 'no_of_current_records',
            'no_of_records', 'numval', 'ny', 'output', 'output_array_as_constants',
            'output_file_path', 'output_record', 'pmdf_output', 'previous', 'rand',
            're_start', 'read_generic_table', 'read_generic_table_text',
            'read_input_footer', 'read_input_footer_text', 'read_input_header',
            'read_input_header_text', 'record_count', 'record_suppressed', 'round',
            'round_down', 'round_near', 'round_up', 'run_dcs_program', 'run_parameter',
            'run_parameter_text', 'set_main_record', 'set_num_subrecords',
            'sort_array', 'sort_current_records', 'sort_input', 'strval', 'substr',
            'summarise', 'summarise_record', 'summarise_units',
            'summarise_units_record', 'suppress_record', 'table_correct',
            'table_validate', 'terminate', 'time', 'today', 'trim', 'ubound', 'year',
            'years_add', 'years_sub'
            ),
        2 => array(
            'and', 'as', 'begin', 'boolean', 'byref', 'byval', 'call', 'case', 'date',
            'default', 'do', 'else', 'elseif', 'end_c_code', 'endfor', 'endfunction',
            'endif', 'endproc', 'endswitch', 'endwhile', 'eq',
            'explicit_declarations', 'false', 'for', 'from', 'function', 'ge', 'gt',
            'if', 'insert_c_code', 'integer', 'le', 'loop', 'lt', 'ne', 'not',
            'number', 'or', 'private', 'proc', 'public', 'quitloop', 'return',
            'short', 'step', 'switch', 'text', 'then', 'to', 'true', 'while'
            ),
        3 => array(
            // These keywords are not highlighted by the DCS IDE but we may as well
            // keep track of them anyway:
            'mp_file', 'odbc_file'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']',
        '=', '<', '>',
        '+', '-', '*', '/', '^',
        ':', ','
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: red;',
            2 => 'color: blue;',
            3 => 'color: black;'
            ),
        'COMMENTS' => array(
            1 => 'color: black; background-color: silver;',
            // Colors for highlighting embedded C code:
            2 => 'color: maroon; background-color: pink;'
            ),
        'ESCAPE_CHAR' => array(
            ),
        'BRACKETS' => array(
            0 => 'color: black;'
            ),
        'STRINGS' => array(
            0 => 'color: green;'
            ),
        'NUMBERS' => array(
            0 => 'color: green;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: black;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            ),
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);

?>