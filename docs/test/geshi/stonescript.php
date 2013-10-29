<?php
/*************************************************************************************
 * stonescript.php
 * --------
 * Author: Archimmersion ( based on ruby.php by Moises Deniz )
 * Copyright: (c) 2011 Archimmersion ( http://www.archimmersion.com )
 * Release Version: 1.0.8.11
 * Date Started: 2011/03/30
 *
 * StoneScript language file for GeSHi.
 *
 * StonesCript is a Lua based script language for the ShiVa3D game engine ( http://www.stonetrip.com )
 *
 * More information can be found at http://www.stonetrip.com/developer/doc/api/introduction
 *
 * CHANGES
 * -------
 * 2011/04/18 (1.0.8.11)
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
    'LANG_NAME' => 'StoneScript',
    'COMMENT_SINGLE' => array(1 => "--"),
    'COMMENT_MULTI' => array("--[[" => "]]"),
    'COMMENT_REGEXP' => array(
        4 => '/<<\s*?(\w+)\\n.*?\\n\\1(?![a-zA-Z0-9])/si',
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"', '`','\''),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        // Blue - General Keywords
        1 => array(
                'and', 'begin', 'break', 'do', 'else', 'elseif', 'end',
                'for', 'if', 'in', 'while', 'next', 'not', 'or', 'redo',
                'then', 'unless', 'until', 'when', 'false', 'nil', 'self',
                'true', 'local', 'this', 'return',
            ),
        // Dark Blue - Main API names
        2 => array(
                'animation', 'application', 'cache', 'camera', 'debug',
                'dynamics', 'group', 'hashtable', 'hud', 'input', 'light',
                'log', 'math', 'mesh', 'microphone', 'music', 'navigation',
                'network', 'object', 'pixelmap', 'projector', 'scene',
                'sensor', 'server', 'session', 'sfx', 'shape', 'sound',
                'string', 'system', 'table', 'user', 'video', 'xml',
                // Plugin API names
                'plasma', 'watersim',
                'winDirectories',
                'ActionSheet', 'Alert', 'Mail', 'Picker', 'StatusBar',
            ),
        // Constants
        // Can be commented out if performance is crucial -> then these keywords will appear in a slightly lighter color
        3 => array(
                //Animation
                'kPlaybackModeLoop', 'kPlaybackModeLoopMirrored', 'kPlaybackModeLoopReversed',
                'kPlaybackModeOnce', 'kPlaybackModeOnceReversed',
                //Application - Environment
                'kStatusLoading', 'kStatusReady', 'kStatusSaving', // 'kStatusNone'
                //Application - Options
                'kOptionAudioMasterVolume', 'kOptionAutomaticVirtualKeyboard', 'kOptionDynamicShadowsBufferCount',
                'kOptionDynamicShadowsBufferSize', 'kOptionDynamicShadowsConstantSampling', 'kOptionDynamicShadowsPCFSampleCount',
                'kOptionDynamicShadowsQuality', 'kOptionDynamicShadowsScreenSpaceBlur', 'kOptionFullscreen',
                'kOptionFullscreenHeight', 'kOptionFullscreenWidth', 'kOptionHardwareOcclusion',
                'kOptionMaxEventBouncesPerFrame', 'kOptionNetworkStreams', 'kOptionNetworkStreamsUseBrowser',
                'kOptionPrioritizeEventBounces', 'kOptionRenderingEnabled', 'kOptionShadersQuality',
                'kOptionSwapInterval', 'kOptionTerrainsQuality', 'kOptionTexturesAnisotropyLevel',
                'kOptionTexturesMipmapBias', 'kOptionTexturesQuality', 'kOptionViewportRotation',
                //Application - Resource Types
                'kResourceTypeAnimBank', 'kResourceTypeFont', 'kResourceTypeHUD',
                'kResourceTypeMaterial', 'kResourceTypeMesh', 'kResourceTypeParticle',
                'kResourceTypePixelMap', 'kResourceTypeSoundBank', 'kResourceTypeTexture',
                'kResourceTypeTextureClip', 'kResourceTypeTrail',
                //Cache
                'kPropertyHeight', 'kPropertySize', 'kPropertyWidth',
                //Dynamics
                'kAxisX', 'kAxisY', 'kAxisZ',
                'kTypeBox', 'kTypeCapsule', 'kTypeSphere',
                //HUD
                'kAddressingModeClamp', 'kAddressingModeRepeat', 'kAlignCenter', 'kAlignJustify','kAlignLeft', 'kAlignRight',
                'kAlignTop', 'kBlendModeAdd', 'kBlendModeDefault', 'kBlendModeModulate', 'kCaseFixed', 'kCaseVariable',
                'kCommandTypeCallAction', 'kCommandTypeCopyCheckStateToRegister', 'kCommandTypeCopyEditTextToRegister',
                'kCommandTypeCopyListItemTextToRegister', 'kCommandTypeCopyListLastSelectedItemToRegister',
                'kCommandTypeCopyProgressValueToRegister', 'kCommandTypeCopySliderValueToRegister', 'kCommandTypeCopyTagToRegister',
                'kCommandTypeEnterModalMode', 'kCommandTypeInterpolateBackgroundColor', 'kCommandTypeInterpolateBorderColor',
                'kCommandTypeInterpolateForegroundColor', 'kCommandTypeInterpolateHeight', 'kCommandTypeInterpolateOpacity',
                'kCommandTypeInterpolatePosition', 'kCommandTypeInterpolateProgressValue', 'kCommandTypeInterpolateRotation',
                'kCommandTypeInterpolateSize', 'kCommandTypeInterpolateWidth', 'kCommandTypeLeaveModalMode',
                'kCommandTypeMatchScreenSpaceBottomLeftCorner', 'kCommandTypeMatchScreenSpaceBottomRightCorner',
                'kCommandTypeMatchScreenSpaceCenter', 'kCommandTypeMatchScreenSpaceHeight', 'kCommandTypeMatchScreenSpaceTopLeftCorner',
                'kCommandTypeMatchScreenSpaceTopRightCorner', 'kCommandTypeMatchScreenSpaceWidth', 'kCommandTypePauseMovie',
                'kCommandTypePauseSound', 'kCommandTypePauseTimer', 'kCommandTypePlayMovie', 'kCommandTypePlaySound',
                'kCommandTypePlaySoundLoop', 'kCommandTypeResumeSound', 'kCommandTypeSendEventToUser', 'kCommandTypeSetActive',
                'kCommandTypeSetBackgroundColor', 'kCommandTypeSetBackgroundImage', 'kCommandTypeSetBackgroundImageUVOffset',
                'kCommandTypeSetBackgroundImageUVScale', 'kCommandTypeSetBorderColor', 'kCommandTypeSetButtonText',
                'kCommandTypeSetCheckState', 'kCommandTypeSetCheckText', 'kCommandTypeSetCursorPosition', 'kCommandTypeSetCursorVisible',
                'kCommandTypeSetEditText', 'kCommandTypeSetFocus', 'kCommandTypeSetForegroundColor', 'kCommandTypeSetHeight',
                'kCommandTypeSetLabelText', 'kCommandTypeSetOpacity', 'kCommandTypeSetPosition', 'kCommandTypeSetRotation',
                'kCommandTypeSetSize', 'kCommandTypeSetVisible', 'kCommandTypeSetWidth', 'kCommandTypeSleep', 'kCommandTypeStartTimer',
                'kCommandTypeStopAction', 'kCommandTypeStopMovie', 'kCommandTypeStopSound', 'kCommandTypeStopTimer',
                'kComponentTypeButton', 'kComponentTypeCheck', 'kComponentTypeContainer', 'kComponentTypeEdit', 'kComponentTypeLabel',
                'kComponentTypeList', 'kComponentTypeMovie', 'kComponentTypePicture', 'kComponentTypePixelMap', 'kComponentTypeProgress',
                'kComponentTypeRenderMap', 'kComponentTypeSlider', 'kCursorShapeCross', 'kCursorShapeDefault', 'kCursorShapeHandPointing',
                'kCursorShapeIBeam', 'kCursorShapeNone', 'kCursorShapeWaiting', 'kDirectionLeftToRight', 'kDirectionRightToLeft',
                'kEncodingASCII', 'kEncodingUTF8', 'kEventTypeGainFocus', 'kEventTypeLooseFocus', 'kEventTypeMouseEnter',
                'kEventTypeMouseLeave', 'kFillModeSolid', 'kInterpolatorTypeLinear', 'kInterpolatorTypePower2', 'kInterpolatorTypePower3',
                'kInterpolatorTypePower4', 'kInterpolatorTypeRoot2', 'kInterpolatorTypeRoot3', 'kInterpolatorTypeRoot4',
                'kInterpolatorTypeSpring1', 'kInterpolatorTypeSpring2', 'kInterpolatorTypeSpring3', 'kInterpolatorTypeSpring4',
                'kInterpolatorTypeSpring5', 'kInterpolatorTypeSpring6',
                'kOriginBottom', 'kOriginBottomLeft', 'kOriginBottomRight', 'kOriginCenter', 'kOriginLeft', 'kOriginRight',
                'kOriginTop', 'kOriginTopLeft', 'kOriginTopRight', 'kProgressTypeBottomToTop', 'kProgressTypeLeftToRight',
                'kProgressTypeRightToLeft', 'kProgressTypeTopToBottom', 'kRuntimeValueCallArgument0', 'kRuntimeValueCallArgument1',
                'kRuntimeValueCallArgument2', 'kRuntimeValueCallArgument3', 'kRuntimeValueCurrentUser', 'kRuntimeValueCurrentUserMainCamera',
                'kRuntimeValueRegister0', 'kRuntimeValueRegister1', 'kRuntimeValueRegister2', 'kRuntimeValueRegister3',
                'kShapeTypeEllipsoid', 'kShapeTypeRectangle', 'kShapeTypeRoundRectangle', 'kSliderTypeBottomToTop',
                'kSliderTypeLeftToRight', 'kSliderTypeRightToLeft', 'kSliderTypeTopToBottom', 'kWaveTypeConstant',
                'kWaveTypeSawtooth', 'kWaveTypeSawtoothInv', 'kWaveTypeSinus', 'kWaveTypeSinusNoise', 'kWaveTypeSquare', 'kWaveTypeTriangle',
                //Input
                'kJoypadTypeIPhone', 'kJoypadTypeNone', 'kJoypadTypePhone', 'kJoypadTypeStandard', 'kJoypadTypeWiimote',
                'kKey0', 'kKey1', 'kKey2', 'kKey3', 'kKey4', 'kKey5', 'kKey6', 'kKey7', 'kKey8', 'kKey9', 'kKeyA', 'kKeyB',
                'kKeyBackspace', 'kKeyC', 'kKeyD', 'kKeyDelete', 'kKeyDown', 'kKeyE', 'kKeyEnd', 'kKeyEscape', 'kKeyF',
                'kKeyF1', 'kKeyF10', 'kKeyF11', 'kKeyF12', 'kKeyF2', 'kKeyF3', 'kKeyF4', 'kKeyF5', 'kKeyF6', 'kKeyF7',
                'kKeyF8', 'kKeyF9', 'kKeyG', 'kKeyH', 'kKeyHome', 'kKeyI', 'kKeyInsert', 'kKeyJ', 'kKeyK', 'kKeyL',
                'kKeyLAlt', 'kKeyLControl', 'kKeyLeft', 'kKeyLShift', 'kKeyM', 'kKeyN', 'kKeyO', 'kKeyP', 'kKeyPageDown',
                'kKeyPageUp', 'kKeyQ', 'kKeyR', 'kKeyRAlt', 'kKeyRControl', 'kKeyReturn', 'kKeyRight', 'kKeyRShift',
                'kKeyS', 'kKeySpace', 'kKeyT', 'kKeyTab', 'kKeyU', 'kKeyUp', 'kKeyV', 'kKeyW', 'kKeyX', 'kKeyY',
                'kKeyZ', 'kJoypadButtonPSPCircle', 'kJoypadButtonPSPCross', 'kJoypadButtonPSPDown', 'kJoypadButtonPSPL',
                'kJoypadButtonPSPLeft', 'kJoypadButtonPSPR', 'kJoypadButtonPSPRight', 'kJoypadButtonPSPSelect',
                'kJoypadButtonPSPSquare', 'kJoypadButtonPSPStart', 'kJoypadButtonPSPTriangle', 'kJoypadButtonPSPUp',
                'kJoypadTypePSP', 'kJoypadButtonWiimoteA', 'kJoypadButtonWiimoteB', 'kJoypadButtonWiimoteC',
                'kJoypadButtonWiimoteDown', 'kJoypadButtonWiimoteHome', 'kJoypadButtonWiimoteLeft',
                'kJoypadButtonWiimoteMinus', 'kJoypadButtonWiimoteOne', 'kJoypadButtonWiimotePlus',
                'kJoypadButtonWiimoteRight', 'kJoypadButtonWiimoteTwo', 'kJoypadButtonWiimoteUp', 'kJoypadButtonWiimoteZ',
                //Light
                'kTypeDirectional', 'kTypePoint',
                //Math
                'kEpsilon', 'kInfinity', 'kPi',
                //Mesh
                'kLockModeRead', 'kLockModeWrite', 'kLockReadWrite',
                //Network
                'kBluetoothServerPort', 'kDefaultServerPort', 'kStatusAuthenticated', 'kStatusSearchFinished', // 'kStatusNone', 'kStatusPending',
                //Object
                'kControllerTypeAI', 'kControllerTypeAnimation', 'kControllerTypeAny', 'kControllerTypeDynamics',
                'kControllerTypeNavigation', 'kControllerTypeSound', 'kGlobalSpace', 'kLocalSpace', 'kParentSpace',
                'kTransformOptionInheritsParentRotation', 'kTransformOptionInheritsParentScale', 'kTransformOptionInheritsParentTranslation',
                'kTransformOptionTranslationAffectedByParentRotation', 'kTransformOptionTranslationAffectedByParentScale', 'kTypeCamera',
                'kTypeCollider', 'kTypeDummy', 'kTypeGroup', 'kTypeLight', 'kTypeOccluder', 'kTypeProjector', 'kTypeReflector',
                'kTypeSensor', 'kTypeSfx', 'kTypeShape',
                //Pixelmap
                'kBlendModeDecal', 'kBlendModeReplace', 'kFillModeBrush', 'kFillModeNone', 'kPenModeBrush', // 'kFillModeSolid',
                'kPenModeNone', 'kPenModeSolid',
                //Projector
                'kMapTypeMovie', 'kMapTypePixelMap', 'kMapTypeRenderMap', 'kMapTypeTexture', 'kMapTypeTextureClip',
                //Scene
                'kFilteringModeBilinear', 'kFilteringModeNearest', 'kFilteringModeTrilinear', // 'kAddressingModeClamp', 'kAddressingModeRepeat',
                'kSkyBoxFaceBack', 'kSkyBoxFaceBottom', 'kSkyBoxFaceFront', 'kSkyBoxFaceLeft', 'kSkyBoxFaceRight', 'kSkyBoxFaceTop',
                //Sensor
                'kShapeTypeBox', 'kShapeTypeSphere',
                //Server
                'kStatusConnected', 'kStatusNone', 'kStatusPending',
                //Session - duplicate keywords
                //'kStatusConnected', 'kStatusNone', 'kStatusPending',
                //Shape
                'kMapTypeUnknown', 'kCurveTypeBezier', 'kCurveTypeBSpline', 'kCurveTypeCatmullRom', 'kCurveTypePolyLine',
                // 'kMapTypeMovie', 'kMapTypePixelMap', 'kMapTypeRenderMap', 'kMapTypeTexture',  'kMapTypeTextureClip',

                //System
                'kOSType3DS', 'kOSTypeBada', 'kOSTypeBrew', 'kOSTypePalm', 'kOSTypePS3',
                'kClientTypeEditor', 'kClientTypeEmbedded', 'kClientTypeStandalone',
                'kGPUCapabilityBloomFilterSupport', 'kGPUCapabilityContrastFilterSupport', 'kGPUCapabilityDepthBlurFilterSupport',
                'kGPUCapabilityDistortionFilterSupport', 'kGPUCapabilityDynamicShadowsSupport', 'kGPUCapabilityHardwareOcclusionSupport',
                'kGPUCapabilityHardwareRenderingSupport', 'kGPUCapabilityMonochromeFilterSupport', 'kGPUCapabilityMotionBlurFilterSupport',
                'kGPUCapabilityPixelShaderSupport', 'kGPUCapabilityVelocityBlurFilterSupport', 'kGPUCapabilityVertexShaderSupport',
                'kLanguageAlbanian', 'kLanguageArabic', 'kLanguageBulgarian', 'kLanguageCatalan', 'kLanguageCzech', 'kLanguageDanish',
                'kLanguageDutch', 'kLanguageEnglish', 'kLanguageFinnish', 'kLanguageFrench', 'kLanguageGerman', 'kLanguageGreek',
                'kLanguageHebrew', 'kLanguageHungarian', 'kLanguageIcelandic', 'kLanguageItalian', 'kLanguageJapanese', 'kLanguageKorean',
                'kLanguageNorwegian', 'kLanguagePolish', 'kLanguagePortuguese', 'kLanguageRomanian', 'kLanguageRussian',
                'kLanguageSerboCroatian', 'kLanguageSlovak', 'kLanguageSpanish', 'kLanguageSwedish', 'kLanguageThai',
                'kLanguageTurkish', 'kLanguageUnknown', 'kLanguageUrdu', 'kOSTypeAndroid', 'kOSTypeAngstrom', 'kOSTypeIPhone',
                'kOSTypeLinux', 'kOSTypeMac', 'kOSTypePSP', 'kOSTypeSymbian', 'kOSTypeWii', 'kOSTypeWindows', 'kOSTypeWindowsCE',
            ),
        // Not used yet
        4 => array(
                'dummycommand',
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
            1 => 'color:#0000FF; font-weight:bold;',
            2 => 'color:#000088; font-weight:bold;',
            3 => 'color:#C088C0; font-weight:bold;',
            4 => 'color:#00FEFE; font-weight:bold;',
            ),
        'COMMENTS' => array(
            1 => 'color:#008000; font-style:italic;',
            4 => 'color: #cc0000; font-style: italic;',
            'MULTI' => 'color:#008000; font-style:italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color:#000099;'
            ),
        'BRACKETS' => array(
            0 => 'color:#000000; font-weight:bold;'
            ),
        'STRINGS' => array(
            0 => 'color:#888800;'
            ),
        'NUMBERS' => array(
            0 => 'color:#AA0000;'
            ),
        // names after "."
        'METHODS' => array(
            1 => 'color:#FF00FF; font-weight:bold;'
            ),
        'SYMBOLS' => array(
            0 => 'color:#000000; font-weight:bold;'
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