<?php
/*************************************************************************************
 * basic4gl.php
 * ---------------------------------
 * Author: Matthew Webb (bmatthew1@blueyonder.co.uk)
 * Copyright: (c) 2004 Matthew Webb (http://matthew-4gl.wikispaces.com)
 * Release Version: 1.0.8.11
 * Date Started: 2007/09/15
 *
 * Basic4GL language file for GeSHi.
 *
 * You can find the Basic4GL Website at (http://www.basic4gl.net/)
 *
 * CHANGES
 * -------
 * 2007/09/17 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2007/09/17)
 * -------------------------
 * Make sure all the OpenGL and Basic4GL commands have been added and are complete.
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
    'LANG_NAME' => 'Basic4GL',
    'COMMENT_SINGLE' => array(1 => "'"),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(

            // Navy Blue Bold Keywords

            'true','rnd_max','m_pi','m_e','false','VK_ZOOM','VK_UP','VK_TAB','VK_SUBTRACT','VK_SPACE','VK_SNAPSHOT',
            'VK_SHIFT','VK_SEPARATOR','VK_SELECT','VK_SCROLL','VK_RWIN','VK_RSHIFT','VK_RMENU','VK_RIGHT','VK_RETURN',
            'VK_RCONTROL','VK_RBUTTON','VK_PROCESSKEY','VK_PRIOR','VK_PRINT','VK_PLAY','VK_PAUSE','VK_NUMPAD9','VK_NUMPAD8',
            'VK_NUMPAD7','VK_NUMPAD6','VK_NUMPAD5','VK_NUMPAD4','VK_NUMPAD3','VK_NUMPAD2','VK_NUMPAD1','VK_NUMPAD0',
            'VK_NUMLOCK','VK_NONCONVERT','VK_NEXT','VK_MULTIPLY','VK_MODECHANGE','VK_MENU','VK_MBUTTON','VK_LWIN',
            'VK_LSHIFT','VK_LMENU','VK_LEFT','VK_LCONTROL','VK_LBUTTON','VK_KANJI','VK_KANA','VK_JUNJA','VK_INSERT',
            'VK_HOME','VK_HELP','VK_HANJA','VK_HANGUL','VK_HANGEUL','VK_FINAL','VK_F9','VK_F8','VK_F7','VK_F6','VK_F5',
            'VK_F4','VK_F3','VK_F24','VK_F23','VK_F22','VK_F21','VK_F20','VK_F2','VK_F19','VK_F18','VK_F17','VK_F16',
            'VK_F15','VK_F14','VK_F13','VK_F12','VK_F11','VK_F10','VK_F1','VK_EXSEL','VK_EXECUTE','VK_ESCAPE','VK_EREOF',
            'VK_END','VK_DOWN','VK_DIVIDE','VK_DELETE','VK_DECIMAL','VK_CRSEL','VK_CONVERT','VK_CONTROL','VK_CLEAR',
            'VK_CAPITAL','VK_CANCEL','VK_BACK','VK_ATTN','VK_APPS','VK_ADD','VK_ACCEPT','TEXT_SIMPLE','TEXT_OVERLAID',
            'TEXT_BUFFERED','SPR_TILEMAP','SPR_SPRITE','SPR_INVALID','MOUSE_RBUTTON','MOUSE_MBUTTON','MOUSE_LBUTTON',
            'GL_ZOOM_Y','GL_ZOOM_X','GL_ZERO','GL_XOR','GL_WIN_swap_hint','GL_WIN_draw_range_elements','GL_VIEWPORT_BIT',
            'GL_VIEWPORT','GL_VERTEX_ARRAY_TYPE_EXT','GL_VERTEX_ARRAY_TYPE','GL_VERTEX_ARRAY_STRIDE_EXT','GL_VERTEX_ARRAY_STRIDE',
            'GL_VERTEX_ARRAY_SIZE_EXT','GL_VERTEX_ARRAY_SIZE','GL_VERTEX_ARRAY_POINTER_EXT','GL_VERTEX_ARRAY_POINTER',
            'GL_VERTEX_ARRAY_EXT','GL_VERTEX_ARRAY_COUNT_EXT','GL_VERTEX_ARRAY','GL_VERSION_1_1','GL_VERSION','GL_VENDOR',
            'GL_V3F','GL_V2F','GL_UNSIGNED_SHORT','GL_UNSIGNED_INT','GL_UNSIGNED_BYTE','GL_UNPACK_SWAP_BYTES','GL_UNPACK_SKIP_ROWS',
            'GL_UNPACK_SKIP_PIXELS','GL_UNPACK_ROW_LENGTH','GL_UNPACK_LSB_FIRST','GL_UNPACK_ALIGNMENT','GL_TRUE','GL_TRIANGLE_STRIP',
            'GL_TRIANGLE_FAN','GL_TRIANGLES','GL_TRANSFORM_BIT','GL_TEXTURE_WRAP_T','GL_TEXTURE_WRAP_S','GL_TEXTURE_WIDTH',
            'GL_TEXTURE_STACK_DEPTH','GL_TEXTURE_RESIDENT','GL_TEXTURE_RED_SIZE','GL_TEXTURE_PRIORITY','GL_TEXTURE_MIN_FILTER',
            'GL_TEXTURE_MATRIX','GL_TEXTURE_MAG_FILTER','GL_TEXTURE_LUMINANCE_SIZE','GL_TEXTURE_INTERNAL_FORMAT','GL_TEXTURE_INTENSITY_SIZE',
            'GL_TEXTURE_HEIGHT','GL_TEXTURE_GREEN_SIZE','GL_TEXTURE_GEN_T','GL_TEXTURE_GEN_S','GL_TEXTURE_GEN_R','GL_TEXTURE_GEN_Q',
            'GL_TEXTURE_GEN_MODE','GL_TEXTURE_ENV_MODE','GL_TEXTURE_ENV_COLOR','GL_TEXTURE_ENV','GL_TEXTURE_COORD_ARRAY_TYPE_EXT',
            'GL_TEXTURE_COORD_ARRAY_TYPE','GL_TEXTURE_COORD_ARRAY_STRIDE_EXT','GL_TEXTURE_COORD_ARRAY_STRIDE','GL_TEXTURE_COORD_ARRAY_SIZE_EXT',
            'GL_TEXTURE_COORD_ARRAY_SIZE','GL_TEXTURE_COORD_ARRAY_POINTER_EXT','GL_TEXTURE_COORD_ARRAY_POINTER','GL_TEXTURE_COORD_ARRAY_EXT',
            'GL_TEXTURE_COORD_ARRAY_COUNT_EXT','GL_TEXTURE_COORD_ARRAY','GL_TEXTURE_COMPONENTS','GL_TEXTURE_BORDER_COLOR','GL_TEXTURE_BORDER',
            'GL_TEXTURE_BLUE_SIZE','GL_TEXTURE_BIT','GL_TEXTURE_BINDING_2D','GL_TEXTURE_BINDING_1D','GL_TEXTURE_ALPHA_SIZE',
            'GL_TEXTURE_2D','GL_TEXTURE_1D','GL_TEXTURE9_ARB','GL_TEXTURE9','GL_TEXTURE8_ARB','GL_TEXTURE8','GL_TEXTURE7_ARB',
            'GL_TEXTURE7','GL_TEXTURE6_ARB','GL_TEXTURE6','GL_TEXTURE5_ARB','GL_TEXTURE5','GL_TEXTURE4_ARB','GL_TEXTURE4',
            'GL_TEXTURE3_ARB','GL_TEXTURE31_ARB','GL_TEXTURE31','GL_TEXTURE30_ARB','GL_TEXTURE30','GL_TEXTURE3','GL_TEXTURE2_ARB',
            'GL_TEXTURE29_ARB','GL_TEXTURE29','GL_TEXTURE28_ARB','GL_TEXTURE28','GL_TEXTURE27_ARB','GL_TEXTURE27','GL_TEXTURE26_ARB',
            'GL_TEXTURE26','GL_TEXTURE25_ARB','GL_TEXTURE25','GL_TEXTURE24_ARB','GL_TEXTURE24','GL_TEXTURE23_ARB','GL_TEXTURE23',
            'GL_TEXTURE22_ARB','GL_TEXTURE22','GL_TEXTURE21_ARB','GL_TEXTURE21','GL_TEXTURE20_ARB','GL_TEXTURE20','GL_TEXTURE2',
            'GL_TEXTURE1_ARB','GL_TEXTURE19_ARB','GL_TEXTURE19','GL_TEXTURE18_ARB','GL_TEXTURE18','GL_TEXTURE17_ARB',
            'GL_TEXTURE17','GL_TEXTURE16_ARB','GL_TEXTURE16','GL_TEXTURE15_ARB','GL_TEXTURE15','GL_TEXTURE14_ARB','GL_TEXTURE14',
            'GL_TEXTURE13_ARB','GL_TEXTURE13','GL_TEXTURE12_ARB','GL_TEXTURE12','GL_TEXTURE11_ARB','GL_TEXTURE11','GL_TEXTURE10_ARB',
            'GL_TEXTURE10','GL_TEXTURE1','GL_TEXTURE0_ARB','GL_TEXTURE0','GL_TEXTURE','GL_T4F_V4F','GL_T4F_C4F_N3F_V4F','GL_T2F_V3F',
            'GL_T2F_N3F_V3F','GL_T2F_C4UB_V3F','GL_T2F_C4F_N3F_V3F','GL_T2F_C3F_V3F','GL_T','GL_SUBPIXEL_BITS','GL_STEREO',
            'GL_STENCIL_WRITEMASK','GL_STENCIL_VALUE_MASK','GL_STENCIL_TEST','GL_STENCIL_REF','GL_STENCIL_PASS_DEPTH_PASS',
            'GL_STENCIL_PASS_DEPTH_FAIL','GL_STENCIL_INDEX','GL_STENCIL_FUNC','GL_STENCIL_FAIL','GL_STENCIL_CLEAR_VALUE',
            'GL_STENCIL_BUFFER_BIT','GL_STENCIL_BITS','GL_STENCIL','GL_STACK_UNDERFLOW','GL_STACK_OVERFLOW','GL_SRC_COLOR',
            'GL_SRC_ALPHA_SATURATE','GL_SRC_ALPHA','GL_SPOT_EXPONENT','GL_SPOT_DIRECTION','GL_SPOT_CUTOFF','GL_SPHERE_MAP',
            'GL_SPECULAR','GL_SOURCE2_RGB_EXT','GL_SOURCE2_RGB','GL_SOURCE2_ALPHA_EXT','GL_SOURCE2_ALPHA','GL_SOURCE1_RGB_EXT',
            'GL_SOURCE1_RGB','GL_SOURCE1_ALPHA_EXT','GL_SOURCE1_ALPHA','GL_SOURCE0_RGB_EXT','GL_SOURCE0_RGB','GL_SOURCE0_ALPHA_EXT',
            'GL_SOURCE0_ALPHA','GL_SMOOTH','GL_SHORT','GL_SHININESS','GL_SHADE_MODEL','GL_SET','GL_SELECTION_BUFFER_SIZE',
            'GL_SELECTION_BUFFER_POINTER','GL_SELECT','GL_SCISSOR_TEST','GL_SCISSOR_BOX','GL_SCISSOR_BIT','GL_S','GL_RIGHT',
            'GL_RGB_SCALE_EXT','GL_RGB_SCALE','GL_RGBA_MODE','GL_RGBA8','GL_RGBA4','GL_RGBA2','GL_RGBA16','GL_RGBA12','GL_RGBA',
            'GL_RGB8','GL_RGB5_A1','GL_RGB5','GL_RGB4','GL_RGB16','GL_RGB12','GL_RGB10_A2','GL_RGB10','GL_RGB','GL_RETURN',
            'GL_REPLACE','GL_REPEAT','GL_RENDER_MODE','GL_RENDERER','GL_RENDER','GL_RED_SCALE','GL_RED_BITS','GL_RED_BIAS',
            'GL_RED','GL_READ_BUFFER','GL_R3_G3_B2','GL_R','GL_QUAD_STRIP','GL_QUADS','GL_QUADRATIC_ATTENUATION','GL_Q',
            'GL_PROXY_TEXTURE_2D','GL_PROXY_TEXTURE_1D','GL_PROJECTION_STACK_DEPTH','GL_PROJECTION_MATRIX','GL_PROJECTION',
            'GL_PRIMARY_COLOR_EXT','GL_PRIMARY_COLOR','GL_PREVIOUS_EXT','GL_PREVIOUS','GL_POSITION','GL_POLYGON_TOKEN',
            'GL_POLYGON_STIPPLE_BIT','GL_POLYGON_STIPPLE','GL_POLYGON_SMOOTH_HINT','GL_POLYGON_SMOOTH','GL_POLYGON_OFFSET_UNITS',
            'GL_POLYGON_OFFSET_POINT','GL_POLYGON_OFFSET_LINE','GL_POLYGON_OFFSET_FILL','GL_POLYGON_OFFSET_FACTOR','GL_POLYGON_MODE',
            'GL_POLYGON_BIT','GL_POLYGON','GL_POINT_TOKEN','GL_POINT_SMOOTH_HINT','GL_POINT_SMOOTH','GL_POINT_SIZE_RANGE',
            'GL_POINT_SIZE_GRANULARITY','GL_POINT_SIZE','GL_POINT_BIT','GL_POINTS','GL_POINT','GL_PIXEL_MODE_BIT',
            'GL_PIXEL_MAP_S_TO_S_SIZE','GL_PIXEL_MAP_S_TO_S','GL_PIXEL_MAP_R_TO_R_SIZE','GL_PIXEL_MAP_R_TO_R','GL_PIXEL_MAP_I_TO_R_SIZE',
            'GL_PIXEL_MAP_I_TO_R','GL_PIXEL_MAP_I_TO_I_SIZE','GL_PIXEL_MAP_I_TO_I','GL_PIXEL_MAP_I_TO_G_SIZE','GL_PIXEL_MAP_I_TO_G',
            'GL_PIXEL_MAP_I_TO_B_SIZE','GL_PIXEL_MAP_I_TO_B','GL_PIXEL_MAP_I_TO_A_SIZE','GL_PIXEL_MAP_I_TO_A','GL_PIXEL_MAP_G_TO_G_SIZE',
            'GL_PIXEL_MAP_G_TO_G','GL_PIXEL_MAP_B_TO_B_SIZE','GL_PIXEL_MAP_B_TO_B','GL_PIXEL_MAP_A_TO_A_SIZE','GL_PIXEL_MAP_A_TO_A',
            'GL_PHONG_WIN','GL_PHONG_HINT_WIN','GL_PERSPECTIVE_CORRECTION_HINT','GL_PASS_THROUGH_TOKEN','GL_PACK_SWAP_BYTES',
            'GL_PACK_SKIP_ROWS','GL_PACK_SKIP_PIXELS','GL_PACK_ROW_LENGTH','GL_PACK_LSB_FIRST','GL_PACK_ALIGNMENT','GL_OUT_OF_MEMORY',
            'GL_OR_REVERSE','GL_OR_INVERTED','GL_ORDER','GL_OR','GL_OPERAND2_RGB_EXT','GL_OPERAND2_RGB','GL_OPERAND2_ALPHA_EXT',
            'GL_OPERAND2_ALPHA','GL_OPERAND1_RGB_EXT','GL_OPERAND1_RGB','GL_OPERAND1_ALPHA_EXT','GL_OPERAND1_ALPHA','GL_OPERAND0_RGB_EXT',
            'GL_OPERAND0_RGB','GL_OPERAND0_ALPHA_EXT','GL_OPERAND0_ALPHA','GL_ONE_MINUS_SRC_COLOR','GL_ONE_MINUS_SRC_ALPHA',
            'GL_ONE_MINUS_DST_COLOR','GL_ONE_MINUS_DST_ALPHA','GL_ONE','GL_OBJECT_PLANE','GL_OBJECT_LINEAR','GL_NO_ERROR',
            'GL_NOTEQUAL','GL_NORMAL_ARRAY_TYPE_EXT','GL_NORMAL_ARRAY_TYPE','GL_NORMAL_ARRAY_STRIDE_EXT','GL_NORMAL_ARRAY_STRIDE',
            'GL_NORMAL_ARRAY_POINTER_EXT','GL_NORMAL_ARRAY_POINTER','GL_NORMAL_ARRAY_EXT','GL_NORMAL_ARRAY_COUNT_EXT',
            'GL_NORMAL_ARRAY','GL_NORMALIZE','GL_NOR','GL_NOOP','GL_NONE','GL_NICEST','GL_NEVER','GL_NEAREST_MIPMAP_NEAREST','GL_NEAREST_MIPMAP_LINEAR',
            'GL_NEAREST','GL_NAND','GL_NAME_STACK_DEPTH','GL_N3F_V3F','GL_MULT','GL_MODULATE','GL_MODELVIEW_STACK_DEPTH','GL_MODELVIEW_MATRIX',
            'GL_MODELVIEW','GL_MAX_VIEWPORT_DIMS','GL_MAX_TEXTURE_UNITS_ARB','GL_MAX_TEXTURE_UNITS','GL_MAX_TEXTURE_STACK_DEPTH',
            'GL_MAX_TEXTURE_SIZE','GL_MAX_PROJECTION_STACK_DEPTH','GL_MAX_PIXEL_MAP_TABLE','GL_MAX_NAME_STACK_DEPTH','GL_MAX_MODELVIEW_STACK_DEPTH',
            'GL_MAX_LIST_NESTING','GL_MAX_LIGHTS','GL_MAX_EVAL_ORDER','GL_MAX_ELEMENTS_VERTICES_WIN','GL_MAX_ELEMENTS_INDICES_WIN',
            'GL_MAX_CLIP_PLANES','GL_MAX_CLIENT_ATTRIB_STACK_DEPTH','GL_MAX_ATTRIB_STACK_DEPTH','GL_MATRIX_MODE','GL_MAP_STENCIL',
            'GL_MAP_COLOR','GL_MAP2_VERTEX_4','GL_MAP2_VERTEX_3','GL_MAP2_TEXTURE_COORD_4','GL_MAP2_TEXTURE_COORD_3','GL_MAP2_TEXTURE_COORD_2',
            'GL_MAP2_TEXTURE_COORD_1','GL_MAP2_NORMAL','GL_MAP2_INDEX','GL_MAP2_GRID_SEGMENTS','GL_MAP2_GRID_DOMAIN','GL_MAP2_COLOR_4',
            'GL_MAP1_VERTEX_4','GL_MAP1_VERTEX_3','GL_MAP1_TEXTURE_COORD_4','GL_MAP1_TEXTURE_COORD_3','GL_MAP1_TEXTURE_COORD_2',
            'GL_MAP1_TEXTURE_COORD_1','GL_MAP1_NORMAL','GL_MAP1_INDEX','GL_MAP1_GRID_SEGMENTS','GL_MAP1_GRID_DOMAIN',
            'GL_MAP1_COLOR_4','GL_LUMINANCE_ALPHA','GL_LUMINANCE8_ALPHA8','GL_LUMINANCE8','GL_LUMINANCE6_ALPHA2','GL_LUMINANCE4_ALPHA4',
            'GL_LUMINANCE4','GL_LUMINANCE16_ALPHA16','GL_LUMINANCE16','GL_LUMINANCE12_ALPHA4','GL_LUMINANCE12_ALPHA12','GL_LUMINANCE12',
            'GL_LUMINANCE','GL_LOGIC_OP_MODE','GL_LOGIC_OP','GL_LOAD','GL_LIST_MODE','GL_LIST_INDEX','GL_LIST_BIT',
            'GL_LIST_BASE','GL_LINE_WIDTH_RANGE','GL_LINE_WIDTH_GRANULARITY','GL_LINE_WIDTH','GL_LINE_TOKEN','GL_LINE_STRIP','GL_LINE_STIPPLE_REPEAT',
            'GL_LINE_STIPPLE_PATTERN','GL_LINE_STIPPLE','GL_LINE_SMOOTH_HINT','GL_LINE_SMOOTH','GL_LINE_RESET_TOKEN','GL_LINE_LOOP',
            'GL_LINE_BIT','GL_LINES','GL_LINEAR_MIPMAP_NEAREST','GL_LINEAR_MIPMAP_LINEAR','GL_LINEAR_ATTENUATION','GL_LINEAR',
            'GL_LINE','GL_LIGHT_MODEL_TWO_SIDE','GL_LIGHT_MODEL_LOCAL_VIEWER','GL_LIGHT_MODEL_AMBIENT','GL_LIGHTING_BIT',
            'GL_LIGHTING','GL_LIGHT7','GL_LIGHT6','GL_LIGHT5','GL_LIGHT4','GL_LIGHT3','GL_LIGHT2','GL_LIGHT1','GL_LIGHT0',
            'GL_LESS','GL_LEQUAL','GL_LEFT','GL_KEEP','GL_INVERT','GL_INVALID_VALUE','GL_INVALID_OPERATION','GL_INVALID_ENUM','GL_INTERPOLATE_EXT',
            'GL_INTERPOLATE','GL_INTENSITY8','GL_INTENSITY4','GL_INTENSITY16','GL_INTENSITY12','GL_INTENSITY','GL_INT',
            'GL_INDEX_WRITEMASK','GL_INDEX_SHIFT','GL_INDEX_OFFSET','GL_INDEX_MODE','GL_INDEX_LOGIC_OP','GL_INDEX_CLEAR_VALUE','GL_INDEX_BITS',
            'GL_INDEX_ARRAY_TYPE_EXT','GL_INDEX_ARRAY_TYPE','GL_INDEX_ARRAY_STRIDE_EXT','GL_INDEX_ARRAY_STRIDE','GL_INDEX_ARRAY_POINTER_EXT',
            'GL_INDEX_ARRAY_POINTER','GL_INDEX_ARRAY_EXT','GL_INDEX_ARRAY_COUNT_EXT','GL_INDEX_ARRAY','GL_INCR','GL_HINT_BIT',
            'GL_GREEN_SCALE','GL_GREEN_BITS','GL_GREEN_BIAS','GL_GREEN','GL_GREATER','GL_GEQUAL','GL_FRONT_RIGHT','GL_FRONT_LEFT',
            'GL_FRONT_FACE','GL_FRONT_AND_BACK','GL_FRONT','GL_FOG_START','GL_FOG_SPECULAR_TEXTURE_WIN','GL_FOG_MODE','GL_FOG_INDEX',
            'GL_FOG_HINT','GL_FOG_END','GL_FOG_DENSITY','GL_FOG_COLOR','GL_FOG_BIT','GL_FOG','GL_FLOAT','GL_FLAT','GL_FILL',
            'GL_FEEDBACK_BUFFER_TYPE','GL_FEEDBACK_BUFFER_SIZE','GL_FEEDBACK_BUFFER_POINTER','GL_FEEDBACK','GL_FASTEST','GL_FALSE',
            'GL_EYE_PLANE','GL_EYE_LINEAR','GL_EXT_vertex_array','GL_EXT_paletted_texture','GL_EXT_bgra','GL_EXTENSIONS','GL_EXP2',
            'GL_EXP','GL_EVAL_BIT','GL_EQUIV','GL_EQUAL','GL_ENABLE_BIT','GL_EMISSION','GL_EDGE_FLAG_ARRAY_STRIDE_EXT','GL_EDGE_FLAG_ARRAY_STRIDE',
            'GL_EDGE_FLAG_ARRAY_POINTER_EXT','GL_EDGE_FLAG_ARRAY_POINTER','GL_EDGE_FLAG_ARRAY_EXT','GL_EDGE_FLAG_ARRAY_COUNT_EXT','GL_EDGE_FLAG_ARRAY',
            'GL_EDGE_FLAG','GL_DST_COLOR','GL_DST_ALPHA','GL_DRAW_PIXEL_TOKEN','GL_DRAW_BUFFER','GL_DOUBLE_EXT','GL_DOUBLEBUFFER',
            'GL_DOUBLE','GL_DONT_CARE','GL_DOMAIN','GL_DITHER','GL_DIFFUSE','GL_DEPTH_WRITEMASK','GL_DEPTH_TEST','GL_DEPTH_SCALE',
            'GL_DEPTH_RANGE','GL_DEPTH_FUNC','GL_DEPTH_COMPONENT','GL_DEPTH_CLEAR_VALUE','GL_DEPTH_BUFFER_BIT','GL_DEPTH_BITS',
            'GL_DEPTH_BIAS','GL_DEPTH','GL_DECR','GL_DECAL','GL_CW','GL_CURRENT_TEXTURE_COORDS','GL_CURRENT_RASTER_TEXTURE_COORDS','GL_CURRENT_RASTER_POSITION_VALID',
            'GL_CURRENT_RASTER_POSITION','GL_CURRENT_RASTER_INDEX','GL_CURRENT_RASTER_DISTANCE','GL_CURRENT_RASTER_COLOR','GL_CURRENT_NORMAL',
            'GL_CURRENT_INDEX','GL_CURRENT_COLOR','GL_CURRENT_BIT','GL_CULL_FACE_MODE','GL_CULL_FACE','GL_COPY_PIXEL_TOKEN',
            'GL_COPY_INVERTED','GL_COPY','GL_CONSTANT_EXT','GL_CONSTANT_ATTENUATION','GL_CONSTANT','GL_COMPILE_AND_EXECUTE','GL_COMPILE','GL_COMBINE_RGB_EXT',
            'GL_COMBINE_RGB','GL_COMBINE_EXT','GL_COMBINE_ALPHA_EXT','GL_COMBINE_ALPHA','GL_COMBINE','GL_COLOR_WRITEMASK',
            'GL_COLOR_TABLE_WIDTH_EXT','GL_COLOR_TABLE_RED_SIZE_EXT','GL_COLOR_TABLE_LUMINANCE_SIZE_EXT','GL_COLOR_TABLE_INTENSITY_SIZE_EXT',
            'GL_COLOR_TABLE_GREEN_SIZE_EXT','GL_COLOR_TABLE_FORMAT_EXT','GL_COLOR_TABLE_BLUE_SIZE_EXT','GL_COLOR_TABLE_ALPHA_SIZE_EXT',
            'GL_COLOR_MATERIAL_PARAMETER','GL_COLOR_MATERIAL_FACE','GL_COLOR_MATERIAL','GL_COLOR_LOGIC_OP','GL_COLOR_INDEXES',
            'GL_COLOR_INDEX8_EXT','GL_COLOR_INDEX4_EXT','GL_COLOR_INDEX2_EXT','GL_COLOR_INDEX1_EXT','GL_COLOR_INDEX16_EXT',
            'GL_COLOR_INDEX12_EXT','GL_COLOR_INDEX','GL_COLOR_CLEAR_VALUE','GL_COLOR_BUFFER_BIT','GL_COLOR_ARRAY_TYPE_EXT',
            'GL_COLOR_ARRAY_TYPE','GL_COLOR_ARRAY_STRIDE_EXT','GL_COLOR_ARRAY_STRIDE','GL_COLOR_ARRAY_SIZE_EXT','GL_COLOR_ARRAY_SIZE',
            'GL_COLOR_ARRAY_POINTER_EXT','GL_COLOR_ARRAY_POINTER','GL_COLOR_ARRAY_EXT','GL_COLOR_ARRAY_COUNT_EXT','GL_COLOR_ARRAY',
            'GL_COLOR','GL_COEFF','GL_CLIP_PLANE5','GL_CLIP_PLANE4','GL_CLIP_PLANE3','GL_CLIP_PLANE2','GL_CLIP_PLANE1','GL_CLIP_PLANE0',
            'GL_CLIENT_VERTEX_ARRAY_BIT','GL_CLIENT_PIXEL_STORE_BIT','GL_CLIENT_ATTRIB_STACK_DEPTH','GL_CLIENT_ALL_ATTRIB_BITS',
            'GL_CLIENT_ACTIVE_TEXTURE_ARB','GL_CLIENT_ACTIVE_TEXTURE','GL_CLEAR','GL_CLAMP','GL_CCW','GL_C4UB_V3F','GL_C4UB_V2F',
            'GL_C4F_N3F_V3F','GL_C3F_V3F','GL_BYTE','GL_BLUE_SCALE','GL_BLUE_BITS','GL_BLUE_BIAS','GL_BLUE','GL_BLEND_SRC','GL_BLEND_DST',
            'GL_BLEND','GL_BITMAP_TOKEN','GL_BITMAP','GL_BGR_EXT','GL_BGRA_EXT','GL_BACK_RIGHT','GL_BACK_LEFT','GL_BACK',
            'GL_AUX_BUFFERS','GL_AUX3','GL_AUX2','GL_AUX1','GL_AUX0','GL_AUTO_NORMAL','GL_ATTRIB_STACK_DEPTH','GL_AND_REVERSE',
            'GL_AND_INVERTED','GL_AND','GL_AMBIENT_AND_DIFFUSE','GL_AMBIENT','GL_ALWAYS','GL_ALPHA_TEST_REF','GL_ALPHA_TEST_FUNC',
            'GL_ALPHA_TEST','GL_ALPHA_SCALE','GL_ALPHA_BITS','GL_ALPHA_BIAS','GL_ALPHA8','GL_ALPHA4','GL_ALPHA16','GL_ALPHA12',
            'GL_ALPHA','GL_ALL_ATTRIB_BITS','GL_ADD_SIGNED_EXT','GL_ADD_SIGNED','GL_ADD','GL_ACTIVE_TEXTURE_ARB','GL_ACTIVE_TEXTURE',
            'GL_ACCUM_RED_BITS','GL_ACCUM_GREEN_BITS','GL_ACCUM_CLEAR_VALUE','GL_ACCUM_BUFFER_BIT','GL_ACCUM_BLUE_BITS','GL_ACCUM_ALPHA_BITS',
            'GL_ACCUM','GL_4_BYTES','GL_4D_COLOR_TEXTURE','GL_3_BYTES','GL_3D_COLOR_TEXTURE','GL_3D_COLOR','GL_3D','GL_2_BYTES',
            'GL_2D','GLU_V_STEP','GLU_VERTEX','GLU_VERSION_1_2','GLU_VERSION_1_1','GLU_VERSION','GLU_U_STEP','GLU_UNKNOWN','GLU_TRUE',
            'GLU_TESS_WINDING_RULE','GLU_TESS_WINDING_POSITIVE','GLU_TESS_WINDING_ODD','GLU_TESS_WINDING_NONZERO','GLU_TESS_WINDING_NEGATIVE',
            'GLU_TESS_WINDING_ABS_GEQ_TWO','GLU_TESS_VERTEX_DATA','GLU_TESS_VERTEX','GLU_TESS_TOLERANCE','GLU_TESS_NEED_COMBINE_CALLBACK','GLU_TESS_MISSING_END_POLYGON',
            'GLU_TESS_MISSING_END_CONTOUR','GLU_TESS_MISSING_BEGIN_POLYGON','GLU_TESS_MISSING_BEGIN_CONTOUR','GLU_TESS_ERROR_DATA',
            'GLU_TESS_ERROR8','GLU_TESS_ERROR7','GLU_TESS_ERROR6','GLU_TESS_ERROR5','GLU_TESS_ERROR4','GLU_TESS_ERROR3','GLU_TESS_ERROR2',
            'GLU_TESS_ERROR1','GLU_TESS_ERROR','GLU_TESS_END_DATA','GLU_TESS_END','GLU_TESS_EDGE_FLAG_DATA','GLU_TESS_EDGE_FLAG',
            'GLU_TESS_COORD_TOO_LARGE','GLU_TESS_COMBINE_DATA','GLU_TESS_COMBINE','GLU_TESS_BOUNDARY_ONLY','GLU_TESS_BEGIN_DATA',
            'GLU_TESS_BEGIN','GLU_SMOOTH','GLU_SILHOUETTE','GLU_SAMPLING_TOLERANCE','GLU_SAMPLING_METHOD','GLU_POINT','GLU_PATH_LENGTH',
            'GLU_PARAMETRIC_TOLERANCE','GLU_PARAMETRIC_ERROR','GLU_OUT_OF_MEMORY','GLU_OUTSIDE','GLU_OUTLINE_POLYGON','GLU_OUTLINE_PATCH',
            'GLU_NURBS_ERROR9','GLU_NURBS_ERROR8','GLU_NURBS_ERROR7','GLU_NURBS_ERROR6','GLU_NURBS_ERROR5','GLU_NURBS_ERROR4',
            'GLU_NURBS_ERROR37','GLU_NURBS_ERROR36','GLU_NURBS_ERROR35','GLU_NURBS_ERROR34','GLU_NURBS_ERROR33','GLU_NURBS_ERROR32',
            'GLU_NURBS_ERROR31','GLU_NURBS_ERROR30','GLU_NURBS_ERROR3','GLU_NURBS_ERROR29','GLU_NURBS_ERROR28','GLU_NURBS_ERROR27','GLU_NURBS_ERROR26',
            'GLU_NURBS_ERROR25','GLU_NURBS_ERROR24','GLU_NURBS_ERROR23','GLU_NURBS_ERROR22','GLU_NURBS_ERROR21','GLU_NURBS_ERROR20',
            'GLU_NURBS_ERROR2','GLU_NURBS_ERROR19','GLU_NURBS_ERROR18','GLU_NURBS_ERROR17','GLU_NURBS_ERROR16','GLU_NURBS_ERROR15','GLU_NURBS_ERROR14',
            'GLU_NURBS_ERROR13','GLU_NURBS_ERROR12','GLU_NURBS_ERROR11','GLU_NURBS_ERROR10','GLU_NURBS_ERROR1','GLU_NONE',
            'GLU_MAP1_TRIM_3','GLU_MAP1_TRIM_2','GLU_LINE','GLU_INVALID_VALUE','GLU_INVALID_ENUM','GLU_INTERIOR','GLU_INSIDE','GLU_INCOMPATIBLE_GL_VERSION',
            'GLU_FLAT','GLU_FILL','GLU_FALSE','GLU_EXTERIOR','GLU_EXTENSIONS','GLU_ERROR','GLU_END','GLU_EDGE_FLAG','GLU_DOMAIN_DISTANCE',
            'GLU_DISPLAY_MODE','GLU_CW','GLU_CULLING','GLU_CCW','GLU_BEGIN','GLU_AUTO_LOAD_MATRIX','CHANNEL_UNORDERED','CHANNEL_ORDERED',
            'CHANNEL_MAX'
            ),
        2 => array(

            // Red Lowercase Keywords

            'WriteWord','WriteString','WriteReal','WriteLine','WriteInt','WriteFloat','WriteDouble','WriteChar','WriteByte',
            'windowwidth','windowheight','waittimer','Vec4','Vec3','Vec2','val','UpdateJoystick','ucase$','Transpose','tickcount',
            'textscroll','textrows','textmode','textcols','tanh','tand','tan','synctimercatchup','synctimer','swapbuffers',
            'str$','stopsoundvoice','stopsounds','stopmusic','sqrt','sqr','sprzorder','spryvel','sprytiles','sprysize','spryrepeat',
            'spryflip','sprycentre','spry','sprxvel','sprxtiles','sprxsize','sprxrepeat','sprxflip','sprxcentre','sprx',
            'sprvisible','sprvel','sprtype','sprtop','sprspin','sprsolid','sprsetzorder','sprsetyvel','sprsetysize','sprsetyrepeat',
            'sprsetyflip','sprsetycentre','sprsety','sprsetxvel','sprsetxsize','sprsetxrepeat','sprsetxflip','sprsetxcentre',
            'sprsetx','sprsetvisible','sprsetvel','sprsettiles','sprsettextures','sprsettexture','sprsetspin','sprsetsolid',
            'sprsetsize','sprsetscale','sprsetpos','sprsetparallax','sprsetframe','sprsetcolor','sprsetanimspeed','sprsetanimloop',
            'sprsetangle','sprsetalpha','sprscale','sprright','sprpos','sprparallax','sprleft','spriteareawidth','spriteareaheight',
            'sprframe','sprcolor','sprcameraz','sprcameray','sprcamerax','sprcamerasetz','sprcamerasety','sprcamerasetx',
            'sprcamerasetpos','sprcamerasetfov','sprcamerasetangle','sprcamerapos','sprcamerafov','sprcameraangle',
            'sprbottom','spranimspeed','spranimloop','spranimdone','sprangle','spralpha','spraddtextures','spraddtexture',
            'sounderror','sleep','sind','sin','showcursor','sgn','settextscroll','setmusicvolume','SendMessage','Seek',
            'scankeydown','RTInvert','rnd','right$','resizetext','resizespritearea','RejectConnection','ReceiveMessage','ReadWord',
            'ReadText','ReadReal','ReadLine','ReadInt','ReadFloat','ReadDouble','ReadChar','ReadByte','randomize','printr',
            'print','pow','playsound','playmusic','performancecounter','Orthonormalize','OpenFileWrite','OpenFileRead','Normalize',
            'newtilemap','newsprite','NewServer','NewConnection','musicplaying','mouse_yd','mouse_y','mouse_xd','mouse_x',
            'mouse_wheel','mouse_button','mid$','MessageSmoothed','MessageReliable','MessagePending','MessageChannel','maxtextureunits',
            'MatrixZero','MatrixTranslate','MatrixScale','MatrixRotateZ','MatrixRotateY','MatrixRotateX','MatrixRotate','MatrixIdentity',
            'MatrixCrossProduct','MatrixBasis','log','locate','loadtexture','loadsound','loadmipmaptexture','loadmipmapimagestrip',
            'loadimagestrip','loadimage','Length','len','left$','lcase$','keydown','Joy_Y','Joy_X','Joy_Up','Joy_Right','Joy_Left',
            'Joy_Keys','Joy_Down','Joy_Button','Joy_3','Joy_2','Joy_1','Joy_0','int','inscankey','input$','inkey$','inittimer',
            'imagewidth','imagestripframes','imageheight','imageformat','imagedatatype','hidecursor','glViewport','glVertex4sv',
            'glVertex4s','glVertex4iv','glVertex4i','glVertex4fv','glVertex4f','glVertex4dv','glVertex4d','glVertex3sv','glVertex3s',
            'glVertex3iv','glVertex3i','glVertex3fv','glVertex3f','glVertex3dv','glVertex3d','glVertex2sv','glVertex2s','glVertex2iv',
            'glVertex2i','glVertex2fv','glVertex2f','glVertex2dv','glVertex2d','gluPerspective','gluOrtho2D','gluLookAt',
            'glubuild2dmipmaps','glTranslatef','glTranslated','gltexsubimage2d','glTexParameteriv','glTexParameteri',
            'glTexParameterfv','glTexParameterf','glteximage2d','glTexGeniv','glTexGeni','glTexGenfv','glTexGenf','glTexGendv',
            'glTexGend','glTexEnviv','glTexEnvi','glTexEnvfv','glTexEnvf','glTexCoord4sv','glTexCoord4s','glTexCoord4iv','glTexCoord4i',
            'glTexCoord4fv','glTexCoord4f','glTexCoord4dv','glTexCoord4d','glTexCoord3sv','glTexCoord3s','glTexCoord3iv','glTexCoord3i',
            'glTexCoord3fv','glTexCoord3f','glTexCoord3dv','glTexCoord3d','glTexCoord2sv','glTexCoord2s','glTexCoord2iv','glTexCoord2i',
            'glTexCoord2fv','glTexCoord2f','glTexCoord2dv','glTexCoord2d','glTexCoord1sv','glTexCoord1s','glTexCoord1iv','glTexCoord1i','glTexCoord1fv',
            'glTexCoord1f','glTexCoord1dv','glTexCoord1d','glStencilOp','glStencilMask','glStencilFunc','glShadeModel','glSelectBuffer',
            'glScissor','glScalef','glScaled','glRotatef','glRotated','glRenderMode','glRectsv','glRects','glRectiv','glRecti',
            'glRectfv','glRectf','glRectdv','glRectd','glReadBuffer','glRasterPos4sv','glRasterPos4s','glRasterPos4iv',
            'glRasterPos4i','glRasterPos4fv','glRasterPos4f','glRasterPos4dv','glRasterPos4d','glRasterPos3sv','glRasterPos3s',
            'glRasterPos3iv','glRasterPos3i','glRasterPos3fv','glRasterPos3f','glRasterPos3dv','glRasterPos3d','glRasterPos2sv',
            'glRasterPos2s','glRasterPos2iv','glRasterPos2i','glRasterPos2fv','glRasterPos2f','glRasterPos2dv','glRasterPos2d',
            'glPushName','glPushMatrix','glPushClientAttrib','glPushAttrib','glPrioritizeTextures','glPopName','glPopMatrix',
            'glPopClientAttrib','glPopAttrib','glpolygonstipple','glPolygonOffset','glPolygonMode','glPointSize','glPixelZoom',
            'glPixelTransferi','glPixelTransferf','glPixelStorei','glPixelStoref','glPassThrough','glOrtho','glNormal3sv','glNormal3s',
            'glNormal3iv','glNormal3i','glNormal3fv','glNormal3f','glNormal3dv','glNormal3d','glNormal3bv','glNormal3b','glNewList',
            'glMultMatrixf','glMultMatrixd','glmultitexcoord2f','glmultitexcoord2d','glMatrixMode','glMaterialiv','glMateriali',
            'glMaterialfv','glMaterialf','glMapGrid2f','glMapGrid2d','glMapGrid1f','glMapGrid1d','glLogicOp','glLoadName','glLoadMatrixf',
            'glLoadMatrixd','glLoadIdentity','glListBase','glLineWidth','glLineStipple','glLightModeliv','glLightModeli','glLightModelfv',
            'glLightModelf','glLightiv','glLighti','glLightfv','glLightf','glIsTexture','glIsList','glIsEnabled','glInitNames',
            'glIndexubv','glIndexub','glIndexsv','glIndexs','glIndexMask','glIndexiv','glIndexi','glIndexfv','glIndexf','glIndexdv',
            'glIndexd','glHint','glGetTexParameteriv','glGetTexParameterfv','glGetTexLevelParameteriv','glGetTexLevelParameterfv',
            'glGetTexGeniv','glGetTexGenfv','glGetTexGendv','glGetTexEnviv','glGetTexEnvfv','glgetstring','glgetpolygonstipple','glGetPixelMapuiv',
            'glGetMaterialiv','glGetMaterialfv','glGetLightiv','glGetLightfv','glGetIntegerv','glGetFloatv',
            'glGetError','glGetDoublev','glGetClipPlane','glGetBooleanv','glgentextures','glgentexture',
            'glgenlists','glFrustum','glFrontFace','glFogiv','glFogi','glFogfv','glFogf','glFlush','glFinish','glFeedbackBuffer',
            'glEvalPoint2','glEvalPoint1','glEvalMesh2','glEvalMesh1','glEvalCoord2fv','glEvalCoord2f','glEvalCoord2dv','glEvalCoord2d',
            'glEvalCoord1fv','glEvalCoord1f','glEvalCoord1dv','glEvalCoord1d','glEndList','glEnd','glEnableClientState','glEnable',
            'glEdgeFlagv','glEdgeFlag','glDrawBuffer','glDrawArrays','glDisableClientState','glDisable','glDepthRange','glDepthMask',
            'glDepthFunc','gldeletetextures','gldeletetexture','gldeletelists','glCullFace','glCopyTexSubImage2D','glCopyTexSubImage1D',
            'glCopyTexImage2D','glCopyTexImage1D','glColorMaterial','glColorMask','glColor4usv','glColor4us','glColor4uiv','glColor4ui',
            'glColor4ubv','glColor4ub','glColor4sv','glColor4s','glColor4iv','glColor4i','glColor4fv','glColor4f','glColor4dv',
            'glColor4d','glColor4bv','glColor4b','glColor3usv','glColor3us','glColor3uiv','glColor3ui','glColor3ubv','glColor3ub',
            'glColor3sv','glColor3s','glColor3iv','glColor3i','glColor3fv','glColor3f','glColor3dv','glColor3d','glColor3bv',
            'glColor3b','glClipPlane','glClearStencil','glClearIndex','glClearDepth','glClearColor','glClearAccum','glClear',
            'glcalllists','glCallList','glBlendFunc','glBindTexture','glBegin','glArrayElement','glAreTexturesResident',
            'glAlphaFunc','glactivetexture','glAccum','font','FindNextFile','FindFirstFile','FindClose','FileError',
            'extensionsupported','exp','execute','EndOfFile','drawtext','divbyzero','Determinant','deletesprite','deletesound',
            'DeleteServer','deleteimage','DeleteConnection','defaultfont','CrossProduct','cosd','cos','copysprite','ConnectionPending',
            'ConnectionHandShaking','ConnectionConnected','ConnectionAddress','compilererrorline','compilererrorcol','compilererror',
            'compilefile','compile','color','cls','CloseFile','clearregion','clearline','clearkeys','chr$','charat$','bindsprite',
            'beep','atnd','atn2d','atn2','atn','atand','asc','argcount','arg','animatesprites','AcceptConnection','abs'
            ),
        3 => array(

            // Blue Lowercase Keywords

            'xor','while','wend','until','type','traditional_print','traditional','to','then','struc','string','step','single',
            'run','return','reset','read','or','null','not','next','lor','loop','language','land','integer','input','if',
            'goto','gosub','for','endstruc','endif','end','elseif','else','double','do','dim','data','const','basic4gl','as',
            'and','alloc'
            )

        ),
    'SYMBOLS' => array(
        '=', '<', '>', '>=', '<=', '+', '-', '*', '/', '%', '(', ')', '{', '}', '[', ']', '&', ';', ':', '$'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000080; font-weight: bold;',
            2 => 'color: #FF0000;',
            3 => 'color: #0000FF;'
            ),
        'COMMENTS' => array(
            1 => 'color: #657CC4; font-style: italic;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000080;'
            ),
        'STRINGS' => array(
            0 => 'color: #008000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #000080; font-weight: bold;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #0000FF;'
            ),
        'ESCAPE_CHAR' => array(
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
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
