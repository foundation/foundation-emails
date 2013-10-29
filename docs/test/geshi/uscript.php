<?php
/*************************************************************************************
 * uscript.php
 * ---------------------------------
 * Author: pospi (pospi@spadgos.com)
 * Copyright: (c) 2007 pospi (http://pospi.spadgos.com)
 * Release Version: 1.0.8.11
 * Date Started: 2007/05/21
 *
 * UnrealScript language file for GeSHi.
 *
 * Comments:
 * * Main purpose at this time is for Unreal Engine 2 / 2.5
 * * Mostly taken from UltraEdit unrealScript wordfile.
 *
 * CHANGES
 * -------
 * 2007/05/21 (1.0.8.10)
 *  -  First Release
 *
 * TODO (updated 2007/05/21)
 * -------------------------
 * * Update to feature any UE3 classes / keywords when UT3 comes out
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
    'LANG_NAME' => 'Unreal Script',
    'COMMENT_SINGLE' => array(
            1 => '//',
            2 => '#'
            ),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(        //declaration keywords
            'simulated', 'state', 'class', 'function', 'event', 'var', 'local',
            'ignores', 'globalconfig', 'config', 'abstract', 'nativereplication', 'native',
            'auto', 'coerce', 'const', 'default',
            'defaultproperties',
            'enum', 'extends', 'expands', 'final', 'guid', 'latent', 'localized',
            'new', 'noexport', 'operator', 'preoperator', 'optional', 'out',
            'private', 'public', 'protected', 'reliable', 'replication',
            'singular', 'static', 'struct', 'transient', 'unreliable',
            'hidedropdown', 'cacheexempt', 'exec', 'delegate', 'import', 'placeable', 'exportstructs'
            ),
        2 => array(        //control flow keywords
            'for', 'while', 'do', 'if', 'else', 'switch', 'case', 'return', 'break', 'continue',
            'begin', 'loop', 'assert',
            'foreach', 'AllActors', 'DynamicActors', 'ChildActors', 'BasedActors', 'TouchingActors',
            'TraceActors', 'RadiusActors', 'VisibleActors', 'CollidingActors', 'VisibleCollidingActors'
            ),
        3 => array(        //global (object) functions
            'log', 'warn', 'rot', 'vect', 'Rand', 'Min', 'Max', 'Clamp', 'Abs', 'Sin', 'ASin',
            'Cos', 'ACos', 'Tan', 'ATan', 'Exp', 'Loge', 'Sqrt', 'Square', 'FRand', 'FMin', 'FMax', 'FClamp',
            'Lerp', 'Smerp', 'Ceil', 'Round', 'VSize', 'Normal', 'Invert', 'VRand', 'MirrorVectorByNormal',
            'GetAxes', 'GetUnAxes', 'RotRand', 'OrthoRotation', 'Normalize', 'ClockwiseFrom',
            'Len', 'InStr', 'Mid', 'Left', 'Right', 'Caps', 'Chr', 'Asc', 'Locs',
            'Divide', 'Split', 'StrCmp', 'Repl', 'Eval',
            'InterpCurveEval', 'InterpCurveGetOutputRange', 'InterpCurveGetInputDomain',
            'QuatProduct', 'QuatInvert', 'QuatRotateVector', 'QuatFindBetween', 'QuatFromAxisAndAngle',
            'QuatFromRotator', 'QuatToRotator', 'QuatSlerp',
            'Localize', 'GotoState', 'IsInState', 'GetStateName',
            'ClassIsChildOf', 'IsA', 'Enable', 'Disable',
            'GetPropertyText', 'SetPropertyText', 'GetEnum', 'DynamicLoadObject', 'FindObject',
            'SaveConfig', 'ClearConfig', 'StaticSaveConfig', 'ResetConfig', 'StaticClearConfig',
            'GetPerObjectNames', 'RandRange', 'StopWatch', 'IsOnConsole', 'IsSoaking',
            'PlatformIsMacOS', 'PlatformIsUnix', 'PlatformIsWindows', 'PlatformIs64Bit',
            'BeginState', 'EndState', 'Created', 'AllObjects', 'GetReferencers', 'GetItemName',
            'ReplaceText', 'EatStr'
            ),
        4 => array(        //common almost-global (actor) functions
            'ClientMessage', 'ConsoleCommand', 'CopyObjectToClipboard', 'TextToSpeech',
            'Error', 'Sleep', 'SetCollision', 'SetCollisionSize', 'SetDrawScale', 'SetDrawScale3D',
            'SetStaticMesh', 'SetDrawType', 'Move', 'SetLocation', 'SetRotation',
            'SetRelativeLocation', 'SetRelativeRotation', 'MoveSmooth', 'AutonomousPhysics',
            'SetBase', 'SetOwner', 'IsJoinedTo', 'GetMeshName', 'PlayAnim', 'LoopAnim', 'TweenAnim',
            'IsAnimating', 'FinishAnim', 'HasAnim', 'StopAnimating', 'FreezeFrameAt', 'SetAnimFrame',
            'IsTweening', 'AnimStopLooping', 'AnimEnd', 'LinkSkelAnim', 'LinkMesh', 'BoneRefresh',
            'GetBoneCoords', 'GetBoneRotation', 'GetRootLocation', 'GetRootRotation', 'AttachToBone',
            'DetachFromBone', 'SetBoneScale', 'UpdateURL', 'GetURLOption', 'SetPhysics', 'KAddImpulse',
            'KImpact', 'KApplyForce', 'Clock', 'UnClock', 'Destroyed', 'GainedChild', 'LostChild',
            'Tick', 'PostNetReceive', 'ClientTrigger', 'Trigger', 'UnTrigger', 'BeginEvent', 'EndEvent',
            'Timer', 'HitWall', 'Falling', 'Landed', 'ZoneChange', 'PhysicsVolumeChange', 'Touch',
            'PostTouch', 'UnTouch', 'Bump', 'BaseChange', 'Attach', 'Detach', 'SpecialHandling',
            'EncroachingOn', 'EncroachedBy', 'RanInto', 'FinishedInterpolation', 'EndedRotation',
            'UsedBy', 'FellOutOfWorld', 'KilledBy', 'TakeDamage', 'HealDamage', 'Trace', 'FastTrace',
            'TraceThisActor', 'spawn', 'Destroy', 'TornOff', 'SetTimer', 'PlaySound', 'PlayOwnedSound',
            'GetSoundDuration', 'MakeNoise', 'BeginPlay', 'GetAllInt', 'RenderOverlays', 'RenderTexture',
            'PreBeginPlay', 'PostBeginPlay', 'PostNetBeginPlay', 'HurtRadius', 'Reset', 'Crash'
            ),
        5 => array(        //data types
            'none', 'null',
            'float', 'int', 'bool', 'byte', 'char', 'double', 'iterator', 'name', 'string',    //primitive
            'plane', 'rotator', 'vector', 'spline',    'coords', 'Quat', 'Range', 'RangeVector', //structs
            'Scale', 'Color', 'Box', 'IntBox', 'FloatBox', 'BoundingVolume', 'Matrix', 'InterpCurvePoint',
            'InterpCurve', 'CompressedPosition', 'TMultiMap', 'PointRegion',
            'KRigidBodyState', 'KSimParams', 'AnimRep', 'FireProperties',
            'lodmesh', 'skeletalmesh', 'mesh', 'StaticMesh', 'MeshInstance',    //3d resources
            'sound',    //sound resources
            'material', 'texture', 'combiner', 'modifier', 'ColorModifier', 'FinalBlend',    //2d resources
            'MaterialSequence', 'MaterialSwitch', 'OpacityModifier', 'TexModifier', 'TexEnvMap',
            'TexCoordSource', 'TexMatrix', 'TexOscillator', 'TexPanner', 'TexRotator', 'TexScaler',
            'RenderedMaterial', 'BitmapMaterial', 'ScriptedTexture', 'ShadowBitmapMaterial', 'Cubemap',
            'FractalTexture', 'FireTexture', 'IceTexture', 'WaterTexture', 'FluidTexture', 'WaveTexture',
            'WetTexture', 'ConstantMaterial', 'ConstantColor', 'FadeColor', 'ParticleMaterial',
            'ProjectorMaterial', 'Shader', 'TerrainMaterial', 'VertexColor'
            ),
        6 => array(        //misc keywords
            'false', 'true', 'self', 'super', 'MaxInt', 'Pi'
            ),
        7 => array(        //common actor enums & variables
            'DT_None', 'DT_Sprite', 'DT_Mesh', 'DT_Brush', 'DT_RopeSprite',
            'DT_VerticalSprite', 'DT_TerraForm', 'DT_SpriteAnimOnce', 'DT_StaticMesh', 'DT_DrawType',
            'DT_Particle', 'DT_AntiPortal', 'DT_FluidSurface',
            'PHYS_None', 'PHYS_Walking', 'PHYS_Falling', 'PHYS_Swimming', 'PHYS_Flying',
            'PHYS_Rotating', 'PHYS_Projectile', 'PHYS_Interpolating', 'PHYS_MovingBrush', 'PHYS_Spider',
            'PHYS_Trailer', 'PHYS_Ladder', 'PHYS_RootMotion', 'PHYS_Karma', 'PHYS_KarmaRagDoll',
            'PHYS_Hovering', 'PHYS_CinMotion',
            'ROLE_None', 'ROLE_DumbProxy', 'ROLE_SimulatedProxy',
            'ROLE_AutonomousProxy', 'ROLE_Authority',
            'STY_None', 'STY_Normal', 'STY_Masked', 'STY_Translucent', 'STY_Modulated', 'STY_Alpha',
            'STY_Additive', 'STY_Subtractive', 'STY_Particle', 'STY_AlphaZ',
            'OCCLUSION_None', 'OCCLUSION_BSP', 'OCCLUSION_Default', 'OCCLUSION_StaticMeshes',
            'SLOT_None', 'SLOT_Misc', 'SLOT_Pain', 'SLOT_Interact', 'SLOT_Ambient', 'SLOT_Talk',
            'SLOT_Interface', 'MTRAN_None', 'MTRAN_Instant', 'MTRAN_Segue', 'MTRAN_Fade',
            'MTRAN_FastFade', 'MTRAN_SlowFade',

            'DrawType', 'Physics', 'Owner', 'Base', 'Level', 'Game', 'Instigator', 'RemoteRole', 'Role',
            'LifeSpan', 'Tag', 'Event', 'Location', 'Rotation', 'Velocity', 'Acceleration',
            'RelativeLocation', 'RelativeRotation', 'DrawScale', 'DrawScale3D', 'Skins', 'Style',
            'SoundVolume', 'SoundPitch', 'SoundRadius', 'TransientSoundVolume', 'TransientSoundRadius',
            'CollisionRadius', 'CollisionHeight', 'Mass', 'Buoyancy', 'RotationRate', 'DesiredRotation'
            ),
        8 => array(        //common non-actor uscript classes
            'Object',
            'CacheManager', 'CameraEffect', 'Canvas', 'CheatManager', 'Commandlet', 'DecoText', 'GUI',
            'InteractionMaster', 'Interactions', 'Interaction', 'KarmaParamsCollision', 'KarmaParamsRBFull',
            'KarmaParamsSkel', 'KarmaParams', 'LevelSummary', 'Locale', 'Manifest', 'MaterialFactory',
            'MeshObject', 'ObjectPool', 'Pallete',
            'ParticleEmitter', 'MeshEmitter', 'BeamEmitter', 'SpriteEmitter', 'SparkEmitter', 'TrailEmitter',
            'Player', 'PlayerInput', 'PlayInfo', 'ReachSpec', 'Resource', 'LatentScriptedAction', 'ScriptedAction',
            'speciesType', 'StreamBase', 'Stream', 'EditorEngine', 'Engine', 'Time', 'WeaponFire',
            'WebApplication', 'WebRequest', 'WebResponse', 'WebSkin', 'xPawnGibGroup', 'xPawnSoundGroup',
            'xUtil'
            ),
        9 => array(        //common actor-based uscript classes
            'Actor',
            'Controller', 'AIController', 'ScriptedController', 'Bot', 'xBot',
            'PlayerController', 'UnrealPlayer', 'xPlayer',
            'DamageType', 'WeaponDamageType', 'Effects', 'Emitter', 'NetworkEmitter',
            'Gib', 'HUD', 'HudBase', 'Info', 'FluidSurfaceInfo', 'Combo',
            'GameInfo', 'UnrealMPGameInfo', 'DeathMatch', 'TeamGame', 'CTFGame',
            'xCTFGame', 'xBombingRun', 'xDoubleDom', 'xTeamGame',
            'ASGameInfo', 'Invasion', 'ONSOnslaughtGame', 'xDeathmatch',
            'Mutator', 'Inventory', 'Ammunition', 'KeyInventory', 'Powerups', 'Armor', 'Weapon',
            'InventoryAttachment', 'WeaponAttachment',
            'KActor', 'KConstraint', 'KBSJoint', 'KCarWheelJoint', 'KConeLimit', 'KHinge', 'KTire',
            'KVehicleFactory', 'Keypoint', 'AIScript', 'ScriptedSequence', 'ScriptedTrigger',
            'AmbientSound', 'Light', 'SpotLight', 'SunLight', 'TriggerLight',
            'MeshEffect', 'NavigationPoint', 'GameObjective', 'DestroyableObjective',
            'PathNode', 'FlyingPathNode', 'RoadPathNode', 'InventorySpot', 'PlayerStart',
            'Pawn', 'Vehicle', 'UnrealPawn', 'xPawn', 'Monster', 'ASVehicle', 'KVehicle', 'KCar',
            'ONSWeaponPawn', 'SVehicle', 'ONSVehicle', 'ONSChopperCraft', 'ONSHoverCraft',
            'ONSPlaneCraft', 'ONSTreadCraft', 'ONSWheeledCraft',
            'Pickup', 'Ammo', 'UTAmmoPickup', 'ArmorPickup', 'KeyPickup', 'TournamentPickup',
            'Projectile', 'Projector', 'DynamicProjector', 'ShadowProjector', 'xScorch',
            'xEmitter', 'xPickupBase', 'xProcMesh', 'xWeatherEffect', 'PhysicsVolume', 'Volume'
            ),
        10 => array(    //symbol-like operators
            'dot','cross'
            )
        ),
    'SYMBOLS' => array(
        '+','-','=','/','*','-','%','>','<','&','^','!','|','`','(',')','[',']','{','}',
        '<<','>>','$','@'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        7 => false,
        8 => false,
        9 => false,
        10 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF;',
            2 => 'color: #0000FF;',
            3 => 'color: #0066AA;',
            4 => 'color: #0088FF;',
            5 => 'color: #E000E0;',
            6 => 'color: #900000;',
            7 => 'color: #888800;',
            8 => 'color: #AA6600;',
            9 => 'color: #FF8800;',
            10 => 'color: #0000FF;'
            ),
        'COMMENTS' => array(
            1 => 'color: #008080; font-style: italic;',
            2 => 'color: #000000; font-weight: bold;',
            'MULTI' => 'color: #008080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #999999;'
            ),
        'NUMBERS' => array(
            0 => 'color: #FF0000;'
            ),
        'METHODS' => array(
            0 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #669966;'
            ),
        'REGEXPS' => array(
            0 => 'color: #E000E0;',
            1 => 'color: #E000E0;'
            ),
        'SCRIPT' => array(
            0 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => 'http://wiki.beyondunreal.com/wiki?search={FNAME}',
        9 => 'http://wiki.beyondunreal.com/wiki?search={FNAME}',
        10 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array('.'),
    'REGEXPS' => array(            //handle template-style variable definitions
        0 => array(
            GESHI_SEARCH => '(class\s*)<(\s*(\w+)\s*)>',
            GESHI_REPLACE => "\${1}",
            GESHI_MODIFIERS => 'i',
            GESHI_BEFORE => '',
            GESHI_AFTER => "< \${3} >"
            ),
        1 => array(
            GESHI_SEARCH => '(array\s*)<(\s*(\w+)\s*)>',
            GESHI_REPLACE => "\${1}",
            GESHI_MODIFIERS => 'i',
            GESHI_BEFORE => '',
            GESHI_AFTER => "< \${3} >"
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            10 => array(
                'DISALLOWED_BEFORE' => '(?<!<)(?=DOT>)'
                )
            )
        )
);

?>
