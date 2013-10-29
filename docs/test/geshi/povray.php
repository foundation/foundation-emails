<?php
/*************************************************************************************
 * povray.php
 * --------
 * Author: Carl Fürstenberg (azatoth@gmail.com)
 * Copyright: © 2007 Carl Fürstenberg
 * Release Version: 1.0.8.11
 * Date Started: 2008/07/11
 *
 * Povray language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/07/11 (1.0.8)
 *   -  initial import to GeSHi SVN
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
    'LANG_NAME' => 'POVRAY',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'yes', 'wrinkles', 'wood', 'width', 'waves', 'water_level', 'warp', 'vturbulence',
            'vstr', 'vrotate', 'vnormalize', 'vlength', 'vcross', 'vaxis_rotate', 'variance', 'v_steps',
            'uv_mapping', 'utf8', 'use_index', 'use_colour', 'use_color', 'use_alpha', 'up', 'undef',
            'ultra_wide_angle', 'u_steps', 'type', 'turbulence', 'turb_depth', 'ttf', 'true', 'triangle_wave',
            'translate', 'transform', 'trace', 'toroidal', 'tolerance', 'tiles', 'tile2', 'tightness',
            'tiff', 'threshold', 'thickness', 'tga', 'texture_map', 'target', 'sys', 'sum',
            'substr', 'sturm', 'strupr', 'strlwr', 'strength', 'str', 'statistics', 'sqr',
            'spotted', 'spotlight', 'split_union', 'spline', 'spiral2', 'spiral1', 'spherical', 'specular',
            'spacing', 'solid', 'smooth', 'slope', 'slice', 'sky', 'size', 'sine_wave',
            'shadowless', 'scattering', 'scallop_wave', 'scale', 'save_file', 'samples', 'roughness', 'rotate',
            'ripples', 'right', 'rgbt', 'rgbft', 'rgbf', 'rgb', 'repeat', 'render',
            'refraction', 'reflection_exponent', 'recursion_limit', 'reciprocal', 'ratio', 'ramp_wave', 'radius', 'radial',
            'quilted', 'quick_colour', 'quick_color', 'quaternion', 'quadratic_spline', 'pwr', 'projected_through', 'prod',
            'pretrace_start', 'pretrace_end', 'precompute', 'precision', 'ppm', 'pow', 'pot', 'poly_wave',
            'point_at', 'png', 'planar', 'pigment_pattern', 'pi', 'phong_size', 'phong', 'phase',
            'pgm', 'perspective', 'pattern', 'pass_through', 'parallel', 'panoramic', 'orthographic', 'orientation',
            'orient', 'open', 'onion', 'once', 'on', 'omnimax', 'omega', 'offset',
            'off', 'octaves', 'number_of_waves', 'noise_generator', 'no_shadow', 'no_reflection', 'no_image', 'no_bump_scale',
            'no', 'nearest_count', 'natural_spline', 'mortar', 'minimum_reuse', 'min_extent', 'metric', 'method',
            'metallic', 'media_interaction', 'media_attenuation', 'media', 'max_trace_level', 'max_trace', 'max_sample', 'max_iteration',
            'max_intersections', 'max_gradient', 'max_extent', 'matrix', 'material_map', 'marble', 'map_type', 'mandel',
            'major_radius', 'magnet', 'low_error_factor', 'look_at', 'location', 'load_file', 'linear_sweep', 'linear_spline',
            'leopard', 'lambda', 'julia', 'jpeg', 'jitter', 'irid_wavelength', 'ior', 'inverse',
            'intervals', 'interpolate', 'internal', 'inside_vector', 'inside', 'initial_frame', 'initial_clock', 'image_width',
            'image_pattern', 'image_height', 'iff', 'hypercomplex', 'hollow', 'hierarchy', 'hf_gray_16', 'hexagon',
            'gray_threshold', 'granite', 'gradient', 'global_lights', 'gif', 'gather', 'fresnel', 'frequency',
            'frame_number', 'form', 'fog_type', 'fog_offset', 'fog_alt', 'focal_point', 'flip', 'flatness',
            'fisheye', 'final_frame', 'final_clock', 'false', 'falloff_angle', 'falloff', 'fade_power', 'fade_distance',
            'fade_colour', 'fade_color', 'facets', 'extinction', 'exterior', 'exponent', 'expand_thresholds', 'evaluate',
            'error_bound', 'emission', 'eccentricity', 'double_illuminate', 'distance', 'dist_exp', 'dispersion_samples', 'dispersion',
            'direction', 'diffuse', 'df3', 'dents', 'density_map', 'density_file', 'density', 'cylindrical',
            'cutaway_textures', 'cubic_wave', 'cubic_spline', 'cube', 'crand', 'crackle', 'count', 'coords',
            'control1', 'control0', 'conserve_energy', 'conic_sweep', 'confidence', 'concat', 'composite', 'component',
            'colour_map', 'colour', 'color', 'collect', 'clock_on', 'clock_delta', 'clock', 'circular',
            'chr', 'checker', 'charset', 'cells', 'caustics', 'bumps', 'bump_size', 'brilliance',
            'brightness', 'brick_size', 'brick', 'bozo', 'boxed', 'blur_samples', 'black_hole', 'bezier_spline',
            'b_spline', 'average', 'autostop', 'assumed_gamma', 'ascii', 'array', 'area_light', 'arc_angle',
            'append', 'aperture', 'angle', 'ambient_light', 'ambient', 'always_sample', 'altitude', 'alpha',
            'all_intersections', 'all', 'agate_turb', 'agate', 'adc_bailout', 'adaptive', 'accuracy', 'absorption',
            'aa_threshold', 'aa_level', 'reflection'
            ),
        2 => array(
            'abs', 'acos', 'acosh', 'asc', 'asin', 'asinh', 'atan', 'atanh',
            'atan2', 'ceil', 'cos', 'cosh', 'defined', 'degrees', 'dimensions', 'dimension_size',
            'div', 'exp', 'file_exists', 'floor', 'int', 'ln', 'log', 'max',
            'min', 'mod', 'pov', 'radians', 'rand', 'seed', 'select', 'sin',
            'sinh', 'sqrt', 'strcmp', 'strlen', 'tan', 'tanh', 'val', 'vdot',
            'vlenght',
            ),
        3 => array (
            'x', 'y', 'z', 't', 'u', 'v', 'red', 'blue',
            'green', 'filter', 'transmit', 'gray', 'e',
            ),
        4 => array (
            'camera', 'background', 'fog', 'sky_sphere', 'rainbow', 'global_settings', 'radiosity', 'photon',
            'object', 'blob', 'sphere', 'cylinder', 'box', 'cone', 'height_field', 'julia_fractal',
            'lathe', 'prism', 'sphere_sweep', 'superellipsoid', 'sor', 'text', 'torus', 'bicubic_patch',
            'disc', 'mesh', 'triangle', 'smooth_triangle', 'mesh2', 'vertex_vectors', 'normal_vectors', 'uv_vectors',
            'texture_list', 'face_indices', 'normal_indices', 'uv_indices', 'texture', 'polygon', 'plane', 'poly',
            'cubic', 'quartic', 'quadric', 'isosurface', 'function', 'contained_by', 'parametric', 'pigment',
            'union', 'intersection', 'difference', 'merge', 'light_source', 'looks_like', 'light_group', 'clipped_by',
            'bounded_by', 'interior', 'material', 'interior_texture', 'normal', 'finish', 'color_map', 'pigment_map',
            'image_map', 'bump_map', 'slope_map', 'normal_map', 'irid', 'photons',
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '!',
        '@', '%', '&', '*', '|', '/', '<',
        '>', '+', '-', '.', '=', '<=', '>=',
        '!=',
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #a63123;',
            2 => 'color: #2312bc;',
            3 => 'color: #cc1122; font-weight: bold;',
            4 => 'color: #116688; font-weight: bold;',
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
//            2 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66aa;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;',
            2 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'REGEXPS' => array(
            0 => 'color: #6666cc; font-weight: bold;',
            1 => 'color: #66cc66; font-weight: bold;',
            2 => 'color: #66cc66; font-weight: bold;'
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        # normal hash lines
        0 => '\#(?!(include|declare|local|fopen|fclose|read|write|default|version|if|else|end|ifdef|ifndef|switch|case|range|break|while|debug|error|warning|macro) )[[:word:]]*',
        # syntax functions hash thingis
        1 => "\#(include|declare|local|fopen|fclose|read|write|default|version|if|else|end|ifdef|ifndef|switch|case|range|break|while|debug|error|warning|macro)",
        2 => array(
            GESHI_SEARCH  => "([a-zA-Z]+)(\n)(.*)(\n)(\\1;?)",
            GESHI_REPLACE => '\3',
            GESHI_BEFORE => '\1\2',
            GESHI_AFTER => '\4\5',
            GESHI_MODIFIERS => 'siU'
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => true,
        2 => true,
        3 => true
        ),
    'TAB_WIDTH' => 4
);
?>
