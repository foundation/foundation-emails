<?php
/*************************************************************************************
 * avisynth.php
 * --------
 * Author: Ryan Jones (sciguyryan@gmail.com)
 * Copyright: (c) 2008 Ryan Jones
 * Release Version: 1.0.8.11
 * Date Started: 2008/10/08
 *
 * AviSynth language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/10/08 (1.0.8.1)
 *  -  First Release
 *
 * TODO (updated 2008/10/08)
 * -------------------------
 * * There are also some special words that can't currently be specified directly in GeSHi as they may
 *      also be used as variables which would really mess things up.
 * * Also there is an issue with the escape character as this language uses a muti-character escape system. Escape char should be """ but has been left
 *      as empty due to this restiction.
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
    'LANG_NAME' => 'AviSynth',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/', '[*' => '*]'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        //  Reserved words.
        1 => array(
            'try', 'cache', 'function', 'global', 'return'
            ),
        // Constants / special variables.
        2 => array(
            'true', 'yes', 'false', 'no', '__END__'
            ),
        // Internal Filters.
        3 => array(
            'AviSource', 'AviFileSource', 'AddBorders', 'AlignedSplice', 'AssumeFPS', 'AssumeScaledFPS',
            'AssumeFrameBased', 'AssumeFieldBased', 'AssumeBFF', 'AssumeTFF', 'Amplify', 'AmplifydB',
            'AssumeSampleRate', 'AudioDub', 'AudioDubEx', 'Animate', 'ApplyRange',
            'BicubicResize', 'BilinearResize', 'BlackmanResize', 'Blur', 'Bob', 'BlankClip', 'Blackness',
            'ColorYUV', 'ConvertBackToYUY2', 'ConvertToRGB', 'ConvertToRGB24', 'ConvertToRGB32',
            'ConvertToYUY2', 'ConvertToY8', 'ConvertToYV411', 'ConvertToYV12', 'ConvertToYV16', 'ConvertToYV24',
            'ColorKeyMask', 'Crop', 'CropBottom', 'ChangeFPS', 'ConvertFPS', 'ComplementParity', 'ConvertAudioTo8bit',
            'ConvertAudioTo16bit', 'ConvertAudioTo24bit', 'ConvertAudioTo32bit', 'ConvertAudioToFloat', 'ConvertToMono',
            'ConditionalFilter', 'ConditionalReader', 'ColorBars', 'Compare',
            'DirectShowSource', 'DeleteFrame', 'Dissolve', 'DuplicateFrame', 'DoubleWeave', 'DelayAudio',
            'EnsureVBRMP3Sync',
            'FixLuminance', 'FlipHorizontal', 'FlipVertical', 'FixBrokenChromaUpsampling', 'FadeIn0', 'FadeIn',
            'FadeIn2', 'FadeOut0', 'FadeOut', 'FadeOut2', 'FadeIO0', 'FadeIO', 'FadeIO2', 'FreezeFrame', 'FrameEvaluate',
            'GreyScale', 'GaussResize', 'GeneralConvolution', 'GetChannel', 'GetLeftChannel', 'GetRightChannel',
            'HorizontalReduceBy2', 'Histogram',
            'ImageReader', 'ImageSource', 'ImageWriter', 'Invert', 'Interleave', 'Info',
            'KillAudio', 'KillVideo',
            'Levels', 'Limiter', 'Layer', 'Letterbox', 'LanczosResize', 'Lanczos4Resize', 'Loop',
            'MergeARGB', 'MergeRGB', 'MergeChroma', 'MergeLuma', 'Merge', 'Mask', 'MaskHS', 'MergeChannels', 'MixAudio',
            'MonoToStereo', 'MessageClip',
            'Normalize',
            'OpenDMLSource', 'Overlay',
            'PointResize', 'PeculiarBlend', 'Pulldown',
            'RGBAdjust', 'ResetMask', 'Reverse', 'ResampleAudio', 'ReduceBy2',
            'SegmentedAviSource', 'SegmentedDirectShowSource', 'SoundOut', 'ShowAlpha', 'ShowRed', 'ShowGreen',
            'ShowBlue', 'SwapUV', 'Subtract', 'SincResize', 'Spline16Resize', 'Spline36Resize', 'Spline64Resize',
            'SelectEven', 'SelectOdd', 'SelectEvery', 'SelectRangeEvery', 'Sharpen', 'SpatialSoften', 'SeparateFields',
            'ShowFiveVersions', 'ShowFrameNumber', 'ShowSMPTE', 'ShowTime', 'StackHorizontal', 'StackVertical', 'Subtitle',
            'SwapFields', 'SuperEQ', 'SSRC', 'ScriptClip',
            'Tweak', 'TurnLeft', 'TurnRight', 'Turn180', 'TemporalSoften', 'TimeStretch', 'TCPServer', 'TCPSource', 'Trim',
            'Tone',
            'UToY', 'UToY8', 'UnalignedSplice',
            'VToY', 'VToY8', 'VerticalReduceBy2', 'Version',
            'WavSource', 'Weave', 'WriteFile', 'WriteFileIf', 'WriteFileStart', 'WriteFileEnd',
            'YToUV'
            ),
        // Internal functions.
        4 => array(
            'Abs', 'Apply', 'Assert', 'AverageLuma', 'AverageChromaU', 'AverageChromaV',
            'Ceil', 'Cos', 'Chr', 'ChromaUDifference', 'ChromaVDifference',
            'Defined', 'Default',
            'Exp', 'Exist', 'Eval',
            'Floor', 'Frac', 'Float', 'Findstr', 'GetMTMode',
            'HexValue',
            'Int', 'IsBool', 'IsClip', 'IsFloat', 'IsInt', 'IsString', 'Import',
            'LoadPlugin', 'Log', 'LCase', 'LeftStr', 'LumaDifference', 'LoadVirtualDubPlugin', 'LoadVFAPIPlugin',
            'LoadCPlugin', 'Load_Stdcall_Plugin',
            'Max', 'MulDiv', 'MidStr',
            'NOP',
            'OPT_AllowFloatAudio', 'OPT_UseWaveExtensible',
            'Pi', 'Pow',
            'Round', 'Rand', 'RevStr', 'RightStr', 'RGBDifference', 'RGBDifferenceFromPrevious', 'RGBDifferenceToNext',
            'Sin', 'Sqrt', 'Sign', 'Spline', 'StrLen', 'String', 'Select', 'SetMemoryMax', 'SetWorkingDir', 'SetMTMode',
            'SetPlanarLegacyAlignment',
            'Time',
            'UCase', 'UDifferenceFromPrevious', 'UDifferenceToNext', 'UPlaneMax', 'UPlaneMin', 'UPlaneMedian',
            'UPlaneMinMaxDifference',
            'Value', 'VersionNumber', 'VersionString', 'VDifferenceFromPrevious', 'VDifferenceToNext', 'VPlaneMax',
            'VPlaneMin', 'VPlaneMedian', 'VPlaneMinMaxDifference',
            'YDifferenceFromPrevious', 'YDifferenceToNext', 'YPlaneMax', 'YPlaneMin', 'YPlaneMedian',
            'YPlaneMinMaxDifference'
            )
        ),
    'SYMBOLS' => array(
        '+', '++', '-', '--', '/', '*', '%',
        '=', '==', '<', '<=', '>', '>=', '<>', '!=',
        '!', '?', ':',
        '|', '||', '&&',
        '\\',
        '(', ')', '{', '}',
        '.', ','
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
            3 => 'color:#CC3300; font-weight:bold;',
            4 => 'color:#660000; font-weight:bold;'
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
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => 'http://avisynth.org/mediawiki/{FNAME}',
        4 => ''
        ),
    'REGEXPS' => array(
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);
?>
