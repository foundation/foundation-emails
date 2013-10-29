<?php
/*************************************************************************************
 * blitzbasic.php
 * --------------
 * Author: P�draig O`Connel (info@moonsword.info)
 * Copyright: (c) 2005 P�draig O`Connel (http://moonsword.info)
 * Release Version: 1.0.8.11
 * Date Started: 16.10.2005
 *
 * BlitzBasic language file for GeSHi.
 *
 * It is a simple Basic dialect. Released for Games and Network Connections.
 * In this Language File are all functions included (2D BB and 3D BB)
 *
 *
 * CHANGES
 * -------
 * 2005/12/28 (1.0.1)
 *   -  Remove unnecessary style index for regexps
 * 2005/10/22 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2005/10/22)
 * -------------------------
 * * Sort out the Basic commands for splitting up.
 * * To set up the right colors.
 *      (the colors are ok, but not the correct ones)
 * * Split to BlitzBasic 2D and BlitzBasic 3D.
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
    'LANG_NAME' => 'BlitzBasic',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'If','EndIf','ElseIf','Else','While','Wend','Return','Next','Include','End Type','End Select','End If','End Function','End','Select',
            'Type','Forever','For','Or','And','AppTitle','Case','Goto','Gosub','Step','Stop','Int','Last','False','Then','To','True','Until','Float',
            'String','Before','Not'
            ),
        2 => array(
            // All Functions - 2D BB and 3D BB
            'Xor','WriteString','WriteShort','WritePixelFast','WritePixel','WriteLine','WriteInt','WriteFloat','WriteFile','WriteBytes',
            'WriteByte','Write','WaitTimer','WaitMouse','WaitKey','WaitJoy','VWait','Viewport',
            'Upper','UpdateGamma','UnlockBuffer','UDPTimeouts','UDPStreamPort','UDPStreamIP','UDPMsgPort','UDPMsgIP',
            'Trim','TotalVidMem','TileImage','TileBlock','TFormImage','TFormFilter','Text',
            'TCPTimeouts','TCPStreamPort','TCPStreamIP','Tan','SystemProperty','StringWidth','StringHeight','Str','StopNetGame',
            'StopChannel','StartNetGame','Sqr','SoundVolume','SoundPitch','SoundPan','Sin','Shr',
            'ShowPointer','Shl','Sgn','SetGfxDriver','SetGamma','SetFont','SetEnv','SetBuffer','SendUDPMsg','SendNetMsg',
            'SeekFile','SeedRnd','ScanLine','ScaleImage','SaveImage','SaveBuffer','Sar','RuntimeError','RSet',
            'RotateImage','RndSeed','Rnd','Right','ResumeChannel','Restore','ResizeImage','ResizeBank','Replace',
            'Repeat','RecvUDPMsg','RecvNetMsg','RectsOverlap','Rect','ReadString','ReadShort','ReadPixelFast','ReadPixel','ReadLine',
            'ReadInt','ReadFloat','ReadFile','ReadDir','ReadBytes','ReadByte','ReadAvail','Read','Rand','Print',
            'PokeShort','PokeInt','PokeFloat','PokeByte','Plot','PlaySound','PlayMusic','PlayCDTrack','Pi','PeekShort',
            'PeekInt','PeekFloat','PeekByte','PauseChannel','Oval','Origin','OpenTCPStream','OpenMovie','OpenFile',
            'Null','NextFile','New','NetPlayerName','NetPlayerLocal','NetMsgType','NetMsgTo','NetMsgFrom',
            'NetMsgData','MovieWidth','MoviePlaying','MovieHeight','MoveMouse','MouseZSpeed','MouseZ','MouseYSpeed','MouseY','MouseXSpeed',
            'MouseX','MouseHit','MouseDown','Mod','Millisecs','MidHandle','Mid','MaskImage','LSet','Lower',
            'LoopSound','Log10','Log','LockBuffer','Locate','Local','LoadSound','LoadImage','LoadFont','LoadBuffer',
            'LoadAnimImage','Line','Len','Left','KeyHit','KeyDown','JoyZDir','JoyZ','JoyYDir',
            'JoyYaw','JoyY','JoyXDir','JoyX','JoyVDir','JoyV','JoyUDir','JoyU','JoyType','JoyRoll',
            'JoyPitch','JoyHit','JoyHat','JoyDown','JoinNetGame','Instr','Insert','Input',
            'ImageYHandle','ImageXHandle','ImageWidth','ImagesOverlap','ImagesCollide','ImageRectOverlap','ImageRectCollide','ImageHeight','ImageBuffer',
            'HostNetGame','HostIP','HidePointer','Hex','HandleImage','GraphicsWidth','GraphicsHeight','GraphicsDepth','GraphicsBuffer','Graphics',
            'GrabImage','Global','GFXModeWidth','GFXModeHeight','GfxModeExists','GFXModeDepth','GfxDriverName','GetMouse',
            'GetKey','GetJoy','GetEnv','GetColor','GammaRed','GammaGreen','GammaBlue','Function','FrontBuffer','FreeTimer',
            'FreeSound','FreeImage','FreeFont','FreeBank','FontWidth','FontHeight','FlushMouse','FlushKeys',
            'FlushJoy','Floor','Flip','First','FileType','FileSize','FilePos','Field',
            'Exp','Exit','ExecFile','Eof','EndGraphics','Each','DrawMovie','DrawImageRect','DrawImage','DrawBlockRect','DrawBlock',
            'DottedIP','Dim','DeleteNetPlayer','DeleteFile','DeleteDir','Delete','Delay','Default','DebugLog','Data',
            'CurrentTime','CurrentDir','CurrentDate','CreateUDPStream','CreateTimer','CreateTCPServer','CreateNetPlayer','CreateImage','CreateDir','CreateBank',
            'CountHostIPs','CountGFXModes','CountGfxDrivers','Cos','CopyStream','CopyRect','CopyPixelFast','CopyPixel','CopyImage','CopyFile',
            'CopyBank','Const','CommandLine','ColorRed','ColorGreen','ColorBlue','Color','ClsColor','Cls','CloseUDPStream',
            'CloseTCPStream','CloseTCPServer','CloseMovie','CloseFile','CloseDir','Chr','ChannelVolume','ChannelPlaying','ChannelPitch','ChannelPan',
            'ChangeDir','Ceil','CallDLL','Bin','BankSize','BackBuffer','AvailVidMem','AutoMidHandle',
            'ATan2','ATan','ASin','Asc','After','ACos','AcceptTCPStream','Abs',
            // 3D Commands
            'Wireframe','Windowed3D','WBuffer','VertexZ','VertexY',
            'VertexX','VertexW','VertexV','VertexU','VertexTexCoords','VertexRed','VertexNZ','VertexNY','VertexNX','VertexNormal',
            'VertexGreen','VertexCoords','VertexColor','VertexBlue','VertexAlpha','VectorYaw','VectorPitch','UpdateWorld','UpdateNormals','TurnEntity',
            'TrisRendered','TriangleVertex','TranslateEntity','TFormVector','TFormPoint','TFormNormal','TFormedZ','TFormedY','TFormedX','TextureWidth',
            'TextureName','TextureHeight','TextureFilter','TextureCoords','TextureBuffer','TextureBlend','TerrainZ','TerrainY','TerrainX','TerrainSize',
            'TerrainShading','TerrainHeight','TerrainDetail','SpriteViewMode','ShowEntity','SetCubeFace','SetAnimTime','SetAnimKey','ScaleTexture','ScaleSprite',
            'ScaleMesh','ScaleEntity','RotateTexture','RotateSprite','RotateMesh','RotateEntity','ResetEntity','RenderWorld','ProjectedZ','ProjectedY',
            'ProjectedX','PositionTexture','PositionMesh','PositionEntity','PointEntity','PickedZ','PickedY','PickedX','PickedTriangle','PickedTime',
            'PickedSurface','PickedNZ','PickedNY','PickedNX','PickedEntity','PaintSurface','PaintMesh','PaintEntity','NameEntity','MoveEntity',
            'ModifyTerrain','MeshWidth','MeshHeight','MeshesIntersect','MeshDepth','MD2AnimTime','MD2AnimLength','MD2Animating','LoadTexture','LoadTerrain',
            'LoadSprite','LoadMesh','LoadMD2','LoaderMatrix','LoadBSP','LoadBrush','LoadAnimTexture','LoadAnimSeq','LoadAnimMesh','Load3DSound',
            'LinePick','LightRange','LightMesh','LightConeAngles','LightColor','HWMultiTex','HideEntity','HandleSprite','Graphics3D','GfxMode3DExists',
            'GfxMode3D','GfxDriverCaps3D','GfxDriver3D','GetSurfaceBrush','GetSurface','GetParent','GetMatElement','GetEntityType','GetEntityBrush','GetChild',
            'GetBrushTexture','FreeTexture','FreeEntity','FreeBrush','FlipMesh','FitMesh','FindSurface','FindChild','ExtractAnimSeq','EntityZ',
            'EntityYaw','EntityY','EntityX','EntityVisible','EntityType','EntityTexture','EntityShininess','EntityRoll','EntityRadius','EntityPitch',
            'EntityPickMode','EntityPick','EntityParent','EntityOrder','EntityName','EntityInView','EntityFX','EntityDistance','EntityColor','EntityCollided',
            'EntityBox','EntityBlend','EntityAutoFade','EntityAlpha','EmitSound','Dither','DeltaYaw','DeltaPitch','CreateTexture','CreateTerrain',
            'CreateSurface','CreateSprite','CreateSphere','CreatePlane','CreatePivot','CreateMirror','CreateMesh','CreateListener','CreateLight','CreateCylinder',
            'CreateCube','CreateCone','CreateCamera','CreateBrush','CountVertices','CountTriangles','CountSurfaces','CountGfxModes3D','CountCollisions','CountChildren',
            'CopyMesh','CopyEntity','CollisionZ','CollisionY','CollisionX','CollisionTriangle','CollisionTime','CollisionSurface','Collisions','CollisionNZ',
            'CollisionNY','CollisionNX','CollisionEntity','ClearWorld','ClearTextureFilters','ClearSurface','ClearCollisions','CaptureWorld','CameraZoom','CameraViewport',
            'CameraRange','CameraProjMode','CameraProject','CameraPick','CameraFogRange','CameraFogMode','CameraFogColor','CameraClsMode','CameraClsColor','BSPLighting',
            'BSPAmbientLight','BrushTexture','BrushShininess','BrushFX','BrushColor','BrushBlend','BrushAlpha','AntiAlias','AnimTime','AnimSeq',
            'AnimLength','Animating','AnimateMD2','Animate','AmbientLight','AlignToVector','AddVertex','AddTriangle','AddMesh','AddAnimSeq',
            )
        ),
    'SYMBOLS' => array(
        '(',')'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000066; font-weight: bold;',
            2 => 'color: #0000ff;'
            ),
        'COMMENTS' => array(
            1 => 'color: #D9D100; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000066;'
            ),
        'STRINGS' => array(
            0 => 'color: #009900;'
            ),
        'NUMBERS' => array(
            0 => 'color: #CC0000;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #000066;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            )
        ),
    'URLS' => array(
        1 => '',
        2 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        1 => '\\'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => false,
        1 => false
        )
);

?>
