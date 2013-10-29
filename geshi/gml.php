<?php
/*************************************************************************************
 * gml.php
 * --------
 * Author: Jos� Jorge Enr�quez (jenriquez@users.sourceforge.net)
 * Copyright: (c) 2005 Jos� Jorge Enr�quez Rodr�guez (http://www.zonamakers.com)
 * Release Version: 1.0.8.11
 * Date Started: 2005/06/21
 *
 * GML language file for GeSHi.
 *
 * GML (Game Maker Language) is a script language that is built-in into Game Maker,
 * a game creation program, more info about Game Maker can be found at
 * http://www.gamemaker.nl/
 * All GML keywords were extracted from the Game Maker HTML Help file using a PHP
 * script (one section at a time). I love PHP for saving me that bunch of work :P!.
 * I think all GML functions have been indexed here, but I'm not sure about it, so
 * please let me know of any issue you may find.
 *
 * CHANGES
 * -------
 * 2005/11/11
 *  -  Changed 'CASE_KEYWORDS' fom 'GESHI_CAPS_LOWER' to 'GESHI_CAPS_NO_CHANGE',
 *     so that MCI_command appears correctly (the only GML function using capitals).
 *  -  Changed 'CASE_SENSITIVE' options, 'GESHI_COMMENTS' from true to false and all
 *     of the others from false to true.
 *  -  Deleted repeated entries.
 *  -  div and mod are language keywords, moved (from symbols) to the appropiate section (1).
 *  -  Moved self, other, all, noone and global identifiers to language keywords section 1.
 *  -  Edited this file lines to a maximum width of 100 characters (as stated in
 *     the GeSHi docs). Well, not strictly to 100 but around it.
 *  -  Corrected some minor issues (the vk_f1...vk_f12 keys and similar).
 *  -  Deleted the KEYWORDS=>5 and KEYWORDS=>6 sections (actually, they were empty).
 *     I was planning of using those for the GML functions available only in the
 *     registered version of the program, but not anymore.
 *
 * 2005/06/26 (1.0.3)
 *  -  First Release.
 *
 * TODO (updated 2005/11/11)
 * -------------------------
 *  -  Test it for a while and make the appropiate corrections.
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
    'LANG_NAME' => 'GML',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'"),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        // language keywords
        1 => array(
            'break', 'continue', 'do', 'until', 'if', 'else',
            'exit', 'for', 'repeat', 'return', 'switch',
            'case', 'default', 'var', 'while', 'with', 'div', 'mod',
            // GML Language overview
            'self', 'other', 'all', 'noone', 'global',
            ),
        // modifiers and built-in variables
        2 => array(
            // Game play
            'x','y','xprevious','yprevious','xstart','ystart','hspeed','vspeed','direction','speed',
            'friction','gravity','gravity_direction',
            'path_index','path_position','path_positionprevious','path_speed','path_orientation',
            'path_endaction',
            'object_index','id','mask_index','solid','persistent','instance_count','instance_id',
            'room_speed','fps','current_time','current_year','current_month','current_day','current_weekday',
            'current_hour','current_minute','current_second','alarm','timeline_index','timeline_position',
            'timeline_speed',
            'room','room_first','room_last','room_width','room_height','room_caption','room_persistent',
            'score','lives','health','show_score','show_lives','show_health','caption_score','caption_lives',
            'caption_health',
            'event_type','event_number','event_object','event_action',
            'error_occurred','error_last',
            // User interaction
            'keyboard_lastkey','keyboard_key','keyboard_lastchar','keyboard_string',
            'mouse_x','mouse_y','mouse_button','mouse_lastbutton',
            // Game Graphics
            'sprite_index','sprite_width','sprite_height','sprite_xoffset','sprite_yoffset',
            'image_number','image_index','image_speed','image_xscale','image_yscale','image_angle',
            'image_alpha','image_blend','bbox_left','bbox_right','bbox_top','bbox_bottom',
            'background_color','background_showcolor','background_visible','background_foreground',
            'background_index','background_x','background_y','background_width','background_height',
            'background_htiled','background_vtiled','background_xscale','background_yscale',
            'background_hspeed','background_vspeed','background_blend','background_alpha',
            'background','left, top, width, height','depth','visible','xscale','yscale','blend','alpha',
            'view_enabled','view_current','view_visible','view_yview','view_wview','view_hview','view_xport',
            'view_yport','view_wport','view_hport','view_angle','view_hborder','view_vborder','view_hspeed',
            'view_vspeed','view_object',
            'transition_kind',
            // Files, registry and executing programs
            'game_id','working_directory','temp_directory',
            'secure_mode',
            // Creating particles
            'xmin', 'xmax', 'ymin', 'ymax','shape','distribution','particle type','number',
            'force','dist','kind','additive', 'parttype1', 'parttype2'
            ),
        // functions
        3 => array(
            // Computing things
            'random','choose','abs','sign','round','floor','ceil','frac','sqrt','sqr','power','exp','ln',
            'log2','log10','logn','sin','cos','tan','arcsin','arccos','arctan','arctan2','degtorad',
            'radtodeg','min','max','mean','median','point_distance','point_direction','lengthdir_x',
            'lengthdir_y','is_real','is_string',
            'chr','ord','real','string','string_format','string_length','string_pos','string_copy',
            'string_char_at','string_delete','string_insert','string_replace','string_replace_all',
            'string_count','string_lower','string_upper','string_repeat','string_letters','string_digits',
            'string_lettersdigits','clipboard_has_text','clipboard_get_text','clipboard_set_text',
            'date_current_datetime','date_current_date','date_current_time','date_create_datetime',
            'date_create_date','date_create_time','date_valid_datetime','date_valid_date','date_valid_time',
            'date_inc_year','date_inc_month','date_inc_week','date_inc_day','date_inc_hour',
            'date_inc_minute','date_inc_second','date_get_year','date_get_month','date_get_week',
            'date_get_day','date_get_hour', 'date_get_minute','date_get_second','date_get_weekday',
            'date_get_day_of_year','date_get_hour_of_year','date_get_minute_of_year',
            'date_get_second_of_year','date_year_span','date_month_span','date_week_span','date_day_span',
            'date_hour_span','date_minute_span','date_second_span','date_compare_datetime',
            'date_compare_date','date_compare_time','date_date_of','date_time_of','date_datetime_string',
            'date_date_string','date_time_string','date_days_in_month','date_days_in_year','date_leap_year',
            'date_is_today',
            // Game play
            'motion_set','motion_add','place_free','place_empty','place_meeting','place_snapped',
            'move_random','move_snap','move_wrap','move_towards_point','move_bounce_solid','move_bounce_all',
            'move_contact_solid','move_contact_all','move_outside_solid','move_outside_all',
            'distance_to_point','distance_to_object','position_empty','position_meeting',
            'path_start','path_end',
            'mp_linear_step','mp_linear_step_object','mp_potential_step','mp_potential_step_object',
            'mp_potential_settings','mp_linear_path','mp_linear_path_object', 'mp_potential_path',
            'mp_potential_path_object','mp_grid_create','mp_grid_destroy','mp_grid_clear_all',
            'mp_grid_clear_cell','mp_grid_clear_rectangle','mp_grid_add_cell','mp_grid_add_rectangle',
            'mp_grid_add_instances','mp_grid_path','mp_grid_draw',
            'collision_point','collision_rectangle','collision_circle','collision_ellipse','collision_line',
            'instance_find','instance_exists','instance_number','instance_position','instance_nearest',
            'instance_furthest','instance_place','instance_create','instance_copy','instance_destroy',
            'instance_change','position_destroy','position_change',
            'instance_deactivate_all','instance_deactivate_object','instance_deactivate_region',
            'instance_activate_all','instance_activate_object','instance_activate_region',
            'sleep',
            'room_goto','room_goto_previous','room_goto_next','room_restart','room_previous','room_next',
            'game_end','game_restart','game_save','game_load',
            'event_perform', 'event_perform_object','event_user','event_inherited',
            'show_debug_message','variable_global_exists','variable_local_exists','variable_global_get',
            'variable_global_array_get','variable_global_array2_get','variable_local_get',
            'variable_local_array_get','variable_local_array2_get','variable_global_set',
            'variable_global_array_set','variable_global_array2_set','variable_local_set',
            'variable_local_array_set','variable_local_array2_set','set_program_priority',
            // User interaction
            'keyboard_set_map','keyboard_get_map','keyboard_unset_map','keyboard_check',
            'keyboard_check_pressed','keyboard_check_released','keyboard_check_direct',
            'keyboard_get_numlock','keyboard_set_numlock','keyboard_key_press','keyboard_key_release',
            'keyboard_clear','io_clear','io_handle','keyboard_wait',
            'mouse_check_button','mouse_check_button_pressed','mouse_check_button_released','mouse_clear',
            'mouse_wait',
            'joystick_exists','joystick_name','joystick_axes','joystick_buttons','joystick_has_pov',
            'joystick_direction','joystick_check_button','joystick_xpos','joystick_ypos','joystick_zpos',
            'joystick_rpos','joystick_upos','joystick_vpos','joystick_pov',
            // Game Graphics
            'draw_sprite','draw_sprite_stretched','draw_sprite_tiled','draw_sprite_part','draw_background',
            'draw_background_stretched','draw_background_tiled','draw_background_part','draw_sprite_ext',
            'draw_sprite_stretched_ext','draw_sprite_tiled_ext','draw_sprite_part_ext','draw_sprite_general',
            'draw_background_ext','draw_background_stretched_ext','draw_background_tiled_ext',
            'draw_background_part_ext','draw_background_general',
            'draw_clear','draw_clear_alpha','draw_point','draw_line','draw_rectangle','draw_roundrect',
            'draw_triangle','draw_circle','draw_ellipse','draw_arrow','draw_button','draw_path',
            'draw_healthbar','draw_set_color','draw_set_alpha','draw_get_color','draw_get_alpha',
            'make_color_rgb','make_color_hsv','color_get_red','color_get_green','color_get_blue',
            'color_get_hue','color_get_saturation','color_get_value','merge_color','draw_getpixel',
            'screen_save','screen_save_part',
            'draw_set_font','draw_set_halign','draw_set_valign','draw_text','draw_text_ext','string_width',
            'string_height','string_width_ext','string_height_ext','draw_text_transformed',
            'draw_text_ext_transformed','draw_text_color','draw_text_ext_color',
            'draw_text_transformed_color','draw_text_ext_transformed_color',
            'draw_point_color','draw_line_color','draw_rectangle_color','draw_roundrect_color',
            'draw_triangle_color','draw_circle_color','draw_ellipse_color','draw_primitive_begin',
            'draw_vertex','draw_vertex_color','draw_primitive_end','sprite_get_texture',
            'background_get_texture','texture_preload','texture_set_priority',
            'texture_get_width','texture_get_height','draw_primitive_begin_texture','draw_vertex_texture',
            'draw_vertex_texture_color','texture_set_interpolation',
            'texture_set_blending','texture_set_repeat','draw_set_blend_mode','draw_set_blend_mode_ext',
            'surface_create','surface_free','surface_exists','surface_get_width','surface_get_height',
            'surface_get_texture','surface_set_target','surface_reset_target','surface_getpixel',
            'surface_save','surface_save_part','draw_surface','draw_surface_stretched','draw_surface_tiled',
            'draw_surface_part','draw_surface_ext','draw_surface_stretched_ext','draw_surface_tiled_ext',
            'draw_surface_part_ext','draw_surface_general','surface_copy','surface_copy_part',
            'tile_add','tile_delete','tile_exists','tile_get_x','tile_get_y','tile_get_left','tile_get_top',
            'tile_get_width','tile_get_height','tile_get_depth','tile_get_visible','tile_get_xscale',
            'tile_get_yscale','tile_get_background','tile_get_blend','tile_get_alpha','tile_set_position',
            'tile_set_region','tile_set_background','tile_set_visible','tile_set_depth','tile_set_scale',
            'tile_set_blend','tile_set_alpha','tile_layer_hide','tile_layer_show','tile_layer_delete',
            'tile_layer_shift','tile_layer_find','tile_layer_delete_at','tile_layer_depth',
            'display_get_width','display_get_height','display_get_colordepth','display_get_frequency',
            'display_set_size','display_set_colordepth','display_set_frequency','display_set_all',
            'display_test_all','display_reset','display_mouse_get_x','display_mouse_get_y','display_mouse_set',
            'window_set_visible','window_get_visible','window_set_fullscreen','window_get_fullscreen',
            'window_set_showborder','window_get_showborder','window_set_showicons','window_get_showicons',
            'window_set_stayontop','window_get_stayontop','window_set_sizeable','window_get_sizeable',
            'window_set_caption','window_get_caption','window_set_cursor', 'window_get_cursor',
            'window_set_color','window_get_color','window_set_region_scale','window_get_region_scale',
            'window_set_position','window_set_size','window_set_rectangle','window_center','window_default',
            'window_get_x','window_get_y','window_get_width','window_get_height','window_mouse_get_x',
            'window_mouse_get_y','window_mouse_set',
            'window_set_region_size','window_get_region_width','window_get_region_height',
            'window_view_mouse_get_x','window_view_mouse_get_y','window_view_mouse_set',
            'window_views_mouse_get_x','window_views_mouse_get_y','window_views_mouse_set',
            'screen_redraw','screen_refresh','set_automatic_draw','set_synchronization','screen_wait_vsync',
            // Sound and music)
            'sound_play','sound_loop','sound_stop','sound_stop_all','sound_isplaying','sound_volume',
            'sound_global_volume','sound_fade','sound_pan','sound_background_tempo','sound_set_search_directory',
            'sound_effect_set','sound_effect_chorus','sound_effect_echo',    'sound_effect_flanger',
            'sound_effect_gargle','sound_effect_reverb','sound_effect_compressor','sound_effect_equalizer',
            'sound_3d_set_sound_position','sound_3d_set_sound_velocity','sound_3d_set_sound_distance',
            'sound_3d_set_sound_cone',
            'cd_init','cd_present','cd_number','cd_playing','cd_paused','cd_track','cd_length',
            'cd_track_length','cd_position','cd_track_position','cd_play','cd_stop','cd_pause','cd_resume',
            'cd_set_position','cd_set_track_position','cd_open_door','cd_close_door','MCI_command',
            // Splash screens, highscores, and other pop-ups
            'show_text','show_image','show_video','show_info','load_info',
            'show_message','show_message_ext','show_question','get_integer','get_string',
            'message_background','message_alpha','message_button','message_text_font','message_button_font',
            'message_input_font','message_mouse_color','message_input_color','message_caption',
            'message_position','message_size','show_menu','show_menu_pos','get_color','get_open_filename',
            'get_save_filename','get_directory','get_directory_alt','show_error',
            'highscore_show','highscore_set_background','highscore_set_border','highscore_set_font',
            'highscore_set_colors','highscore_set_strings','highscore_show_ext','highscore_clear',
            'highscore_add','highscore_add_current','highscore_value','highscore_name','draw_highscore',
            // Resources
            'sprite_exists','sprite_get_name','sprite_get_number','sprite_get_width','sprite_get_height',
            'sprite_get_transparent','sprite_get_smooth','sprite_get_preload','sprite_get_xoffset',
            'sprite_get_yoffset','sprite_get_bbox_left','sprite_get_bbox_right','sprite_get_bbox_top',
            'sprite_get_bbox_bottom','sprite_get_bbox_mode','sprite_get_precise',
            'sound_exists','sound_get_name','sound_get_kind','sound_get_preload','sound_discard',
            'sound_restore',
            'background_exists','background_get_name','background_get_width','background_get_height',
            'background_get_transparent','background_get_smooth','background_get_preload',
            'font_exists','font_get_name','font_get_fontname','font_get_bold','font_get_italic',
            'font_get_first','font_get_last',
            'path_exists','path_get_name','path_get_length','path_get_kind','path_get_closed',
            'path_get_precision','path_get_number','path_get_point_x','path_get_point_y',
            'path_get_point_speed','path_get_x','path_get_y','path_get_speed',
            'script_exists','script_get_name','script_get_text',
            'timeline_exists','timeline_get_name',
            'object_exists','object_get_name','object_get_sprite','object_get_solid','object_get_visible',
            'object_get_depth','object_get_persistent','object_get_mask','object_get_parent',
            'object_is_ancestor',
            'room_exists','room_get_name',
            // Changing resources
            'sprite_set_offset','sprite_set_bbox_mode','sprite_set_bbox','sprite_set_precise',
            'sprite_duplicate','sprite_assign','sprite_merge','sprite_add','sprite_replace',
            'sprite_create_from_screen','sprite_add_from_screen','sprite_create_from_surface',
            'sprite_add_from_surface','sprite_delete','sprite_set_alpha_from_sprite',
            'sound_add','sound_replace','sound_delete',
            'background_duplicate','background_assign','background_add','background_replace',
            'background_create_color','background_create_gradient','background_create_from_screen',
            'background_create_from_surface','background_delete','background_set_alpha_from_background',
            'font_add','font_add_sprite','font_replace_sprite','font_delete',
            'path_set_kind','path_set_closed','path_set_precision','path_add','path_delete','path_duplicate',
            'path_assign','path_append','path_add_point','path_insert_point','path_change_point',
            'path_delete_point','path_clear_points','path_reverse','path_mirror','path_flip','path_rotate',
            'path_scale','path_shift',
            'execute_string','execute_file','script_execute',
            'timeline_add','timeline_delete','timeline_moment_add','timeline_moment_clear',
            'object_set_sprite','object_set_solid','object_set_visible','object_set_depth',
            'object_set_persistent','object_set_mask','object_set_parent','object_add','object_delete',
            'object_event_add','object_event_clear',
            'room_set_width','room_set_height','room_set_caption','room_set_persistent','room_set_code',
            'room_set_background_color','room_set_background','room_set_view','room_set_view_enabled',
            'room_add','room_duplicate','room_assign','room_instance_add','room_instance_clear',
            'room_tile_add','room_tile_add_ext','room_tile_clear',
            // Files, registry and executing programs
            'file_text_open_read','file_text_open_write','file_text_open_append','file_text_close',
            'file_text_write_string','file_text_write_real','file_text_writeln','file_text_read_string',
            'file_text_read_real','file_text_readln','file_text_eof','file_exists','file_delete',
            'file_rename','file_copy','directory_exists','directory_create','file_find_first',
            'file_find_next','file_find_close','file_attributes', 'filename_name','filename_path',
            'filename_dir','filename_drive','filename_ext','filename_change_ext','file_bin_open',
            'file_bin_rewrite','file_bin_close','file_bin_size','file_bin_position','file_bin_seek',
            'file_bin_write_byte','file_bin_read_byte','parameter_count','parameter_string',
            'environment_get_variable',
            'registry_write_string','registry_write_real','registry_read_string','registry_read_real',
            'registry_exists','registry_write_string_ext','registry_write_real_ext',
            'registry_read_string_ext','registry_read_real_ext','registry_exists_ext','registry_set_root',
            'ini_open','ini_close','ini_read_string','ini_read_real','ini_write_string','ini_write_real',
            'ini_key_exists','ini_section_exists','ini_key_delete','ini_section_delete',
            'execute_program','execute_shell',
            // Data structures
            'ds_stack_create','ds_stack_destroy','ds_stack_clear','ds_stack_size','ds_stack_empty',
            'ds_stack_push','ds_stack_pop','ds_stack_top',
            'ds_queue_create','ds_queue_destroy','ds_queue_clear','ds_queue_size','ds_queue_empty',
            'ds_queue_enqueue','ds_queue_dequeue','ds_queue_head','ds_queue_tail',
            'ds_list_create','ds_list_destroy','ds_list_clear','ds_list_size','ds_list_empty','ds_list_add',
            'ds_list_insert','ds_list_replace','ds_list_delete','ds_list_find_index','ds_list_find_value',
            'ds_list_sort',
            'ds_map_create','ds_map_destroy','ds_map_clear','ds_map_size','ds_map_empty','ds_map_add',
            'ds_map_replace','ds_map_delete','ds_map_exists','ds_map_find_value','ds_map_find_previous',
            'ds_map_find_next','ds_map_find_first','ds_map_find_last',
            'ds_priority_create','ds_priority_destroy','ds_priority_clear','ds_priority_size',
            'ds_priority_empty','ds_priority_add','ds_priority_change_priority','ds_priority_find_priority',
            'ds_priority_delete_value','ds_priority_delete_min','ds_priority_find_min',
            'ds_priority_delete_max','ds_priority_find_max',
            'ds_grid_create','ds_grid_destroy','ds_grid_resize','ds_grid_width','ds_grid_height',
            'ds_grid_clear','ds_grid_set','ds_grid_add','ds_grid_multiply','ds_grid_set_region',
            'ds_grid_add_region','ds_grid_multiply_region','ds_grid_set_disk','ds_grid_add_disk',
            'ds_grid_multiply_disk','ds_grid_get','ds_grid_get_sum','ds_grid_get_max','ds_grid_get_min',
            'ds_grid_get_mean','ds_grid_get_disk_sum','ds_grid_get_disk_min','ds_grid_get_disk_max',
            'ds_grid_get_disk_mean','ds_grid_value_exists','ds_grid_value_x','ds_grid_value_y',
            'ds_grid_value_disk_exists','ds_grid_value_disk_x','ds_grid_value_disk_y',
            // Creating particles
            'effect_create_below','effect_create_above','effect_clear',
            'part_type_create','part_type_destroy','part_type_exists','part_type_clear','part_type_shape',
            'part_type_sprite','part_type_size','part_type_scale',
            'part_type_orientation','part_type_color1','part_type_color2','part_type_color3',
            'part_type_color_mix','part_type_color_rgb','part_type_color_hsv',
            'part_type_alpha1','part_type_alpha2','part_type_alpha3','part_type_blend','part_type_life',
            'part_type_step','part_type_death','part_type_speed','part_type_direction','part_type_gravity',
            'part_system_create','part_system_destroy','part_system_exists','part_system_clear',
            'part_system_draw_order','part_system_depth','part_system_position',
            'part_system_automatic_update','part_system_automatic_draw','part_system_update',
            'part_system_drawit','part_particles_create','part_particles_create_color',
            'part_particles_clear','part_particles_count',
            'part_emitter_create','part_emitter_destroy','part_emitter_destroy_all','part_emitter_exists',
            'part_emitter_clear','part_emitter_region','part_emitter_burst','part_emitter_stream',
            'part_attractor_create','part_attractor_destroy','part_attractor_destroy_all',
            'part_attractor_exists','part_attractor_clear','part_attractor_position','part_attractor_force',
            'part_destroyer_create','part_destroyer_destroy','part_destroyer_destroy_all',
            'part_destroyer_exists','part_destroyer_clear','part_destroyer_region',
            'part_deflector_create','part_deflector_destroy','part_deflector_destroy_all',
            'part_deflector_exists','part_deflector_clear','part_deflector_region','part_deflector_kind',
            'part_deflector_friction',
            'part_changer_create','part_changer_destroy','part_changer_destroy_all','part_changer_exists',
            'part_changer_clear','part_changer_region','part_changer_types','part_changer_kind',
            // Multiplayer games
            'mplay_init_ipx','mplay_init_tcpip','mplay_init_modem','mplay_init_serial',
            'mplay_connect_status','mplay_end','mplay_ipaddress',
            'mplay_session_create','mplay_session_find','mplay_session_name','mplay_session_join',
            'mplay_session_mode','mplay_session_status','mplay_session_end',
            'mplay_player_find','mplay_player_name','mplay_player_id',
            'mplay_data_write','mplay_data_read','mplay_data_mode',
            'mplay_message_send','mplay_message_send_guaranteed','mplay_message_receive','mplay_message_id',
            'mplay_message_value','mplay_message_player','mplay_message_name','mplay_message_count',
            'mplay_message_clear',
            // Using DLL's
            'external_define','external_call','external_free','window_handle',
            // 3D Graphics
            'd3d_start','d3d_end','d3d_set_hidden','d3d_set_perspective',
            'd3d_set_depth',
            'd3d_primitive_begin','d3d_vertex','d3d_vertex_color','d3d_primitive_end',
            'd3d_primitive_begin_texture','d3d_vertex_texture','d3d_vertex_texture_color','d3d_set_culling',
            'd3d_draw_block','d3d_draw_cylinder','d3d_draw_cone','d3d_draw_ellipsoid','d3d_draw_wall',
            'd3d_draw_floor',
            'd3d_set_projection','d3d_set_projection_ext','d3d_set_projection_ortho',
            'd3d_set_projection_perspective',
            'd3d_transform_set_identity','d3d_transform_set_translation','d3d_transform_set_scaling',
            'd3d_transform_set_rotation_x','d3d_transform_set_rotation_y','d3d_transform_set_rotation_z',
            'd3d_transform_set_rotation_axis','d3d_transform_add_translation','d3d_transform_add_scaling',
            'd3d_transform_add_rotation_x','d3d_transform_add_rotation_y','d3d_transform_add_rotation_z',
            'd3d_transform_add_rotation_axis','d3d_transform_stack_clear','d3d_transform_stack_empty',
            'd3d_transform_stack_push','d3d_transform_stack_pop','d3d_transform_stack_top',
            'd3d_transform_stack_discard',
            'd3d_set_fog',
            'd3d_set_lighting','d3d_set_shading','d3d_light_define_direction','d3d_light_define_point',
            'd3d_light_enable','d3d_vertex_normal','d3d_vertex_normal_color','d3d_vertex_normal_texture',
            'd3d_vertex_normal_texture_color',
            'd3d_model_create','d3d_model_destroy','d3d_model_clear','d3d_model_save','d3d_model_load',
            'd3d_model_draw','d3d_model_primitive_begin','d3d_model_vertex','d3d_model_vertex_color',
            'd3d_model_vertex_texture','d3d_model_vertex_texture_color','d3d_model_vertex_normal',
            'd3d_model_vertex_normal_color','d3d_model_vertex_normal_texture',
            'd3d_model_vertex_normal_texture_color','d3d_model_primitive_end','d3d_model_block',
            'd3d_model_cylinder','d3d_model_cone','d3d_model_ellipsoid','d3d_model_wall','d3d_model_floor'
            ),
        // constants
        4 => array(
            'true', 'false', 'pi',
            'ev_destroy','ev_step','ev_alarm','ev_keyboard','ev_mouse','ev_collision','ev_other','ev_draw',
            'ev_keypress','ev_keyrelease','ev_left_button','ev_right_button','ev_middle_button',
            'ev_no_button','ev_left_press','ev_right_press','ev_middle_press','ev_left_release',
            'ev_right_release','ev_middle_release','ev_mouse_enter','ev_mouse_leave','ev_mouse_wheel_up',
            'ev_mouse_wheel_down','ev_global_left_button','ev_global_right_button','ev_global_middle_button',
            'ev_global_left_press','ev_global_right_press','ev_global_middle_press','ev_global_left_release',
            'ev_global_right_release','ev_global_middle_release','ev_joystick1_left','ev_joystick1_right',
            'ev_joystick1_up','ev_joystick1_down','ev_joystick1_button1','ev_joystick1_button2',
            'ev_joystick1_button3','ev_joystick1_button4','ev_joystick1_button5','ev_joystick1_button6',
            'ev_joystick1_button7','ev_joystick1_button8','ev_joystick2_left','ev_joystick2_right',
            'ev_joystick2_up','ev_joystick2_down','ev_joystick2_button1','ev_joystick2_button2',
            'ev_joystick2_button3','ev_joystick2_button4','ev_joystick2_button5','ev_joystick2_button6',
            'ev_joystick2_button7','ev_joystick2_button8',
            'ev_outside','ev_boundary','ev_game_start','ev_game_end','ev_room_start','ev_room_end',
            'ev_no_more_lives','ev_no_more_health','ev_animation_end','ev_end_of_path','ev_user0','ev_user1',
            'ev_user2','ev_user3','ev_user4','ev_user5','ev_user6','ev_user7','ev_user8','ev_user9',
            'ev_user10','ev_user11','ev_user12','ev_user13','ev_user14','ev_user15','ev_step_normal',
            'ev_step_begin','ev_step_end',
            'vk_nokey','vk_anykey','vk_left','vk_right','vk_up','vk_down','vk_enter','vk_escape','vk_space',
            'vk_shift','vk_control','vk_alt','vk_backspace','vk_tab','vk_home','vk_end','vk_delete',
            'vk_insert','vk_pageup','vk_pagedown','vk_pause','vk_printscreen',
            'vk_f1','vk_f2','vk_f3','vk_f4','vk_f5','vk_f6','vk_f7','vk_f8','vk_f9','vk_f10','vk_f11','vk_f12',
            'vk_numpad0','vk_numpad1','vk_numpad2','vk_numpad3','vk_numpad4','vk_numpad5','vk_numpad6',
            'vk_numpad7','vk_numpad8','vk_numpad9', 'vk_multiply','vk_divide','vk_add','vk_subtract',
            'vk_decimal','vk_lshift','vk_lcontrol','vk_lalt','vk_rshift','vk_rcontrol','vk_ralt',
            'c_aqua','c_black','c_blue','c_dkgray','c_fuchsia','c_gray','c_green','c_lime','c_ltgray',
            'c_maroon','c_navy','c_olive','c_purple','c_red','c_silver','c_teal','c_white','c_yellow',
            'fa_left', 'fa_center','fa_right','fa_top','fa_middle','fa_bottom',
            'pr_pointlist','pr_linelist','pr_linestrip','pr_trianglelist','pr_trianglestrip',
            'pr_trianglefan',
            'cr_none','cr_arrow','cr_cross','cr_beam','cr_size_nesw','cr_size_ns','cr_size_nwse',
            'cr_size_we','cr_uparrow','cr_hourglass','cr_drag','cr_nodrop','cr_hsplit','cr_vsplit',
            'cr_multidrag','cr_sqlwait','cr_no','cr_appstart','cr_help','cr_handpoint','cr_size_all',
            'se_chorus','se_echo','se_flanger','se_gargle','se_reverb','se_compressor','se_equalizer',
            'fa_readonly','fa_hidden','fa_sysfile','fa_volumeid','fa_directory','fa_archive',
            'pt_shape_pixel','pt_shape_disk','pt_shape_square','pt_shape_line','pt_shape_star',
            'pt_shape_circle','pt_shape_ring','pt_shape_sphere','pt_shape_flare','pt_shape_spark',
            'pt_shape_explosion','pt_shape_cloud','pt_shape_smoke','pt_shape_snow',
            'ps_shape_rectangle','ps_shape_ellipse ','ps_shape_diamond','ps_shape_line',
            'ps_distr_linear','ps_distr_gaussian','ps_force_constant','ps_force_linear','ps_force_quadratic',
            'ps_deflect_horizontal', 'ps_deflect_vertical',
            'ps_change_motion','ps_change_shape','ps_change_all'
            ),
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']',
        '&&', '||', '^^', '&', '|', '^',
        '<', '<=', '==', '!=', '>', '>=', '=',
        '<<', '>>',
        '+=', '-=', '*=', '/=',
        '+', '-', '*', '/',
        '!', '~', ',', ';'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'font-weight: bold; color: #000000;',
            2 => 'font-weight: bold; color: #000000;',
            3 => 'color: navy;',
            4 => 'color: #663300;',
            ),
        'COMMENTS' => array(
            1 => 'font-style: italic; color: green;',
            'MULTI' => 'font-style: italic; color: green;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;' //'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #202020;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66; font-weight: bold;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
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
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
