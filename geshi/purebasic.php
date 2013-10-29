<?php
/*************************************************************************************
 * purebasic.php
 * -------
 * Author: GuShH
 * Copyright: (c) 2009 Gustavo Julio Fiorenza
 * Release Version: 1.0.8.11
 * Date Started: 13/06/2009
 *
 * PureBasic language file for GeSHi.
 *
 * CHANGES
 * -------
 * 13/06/2009 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2009/06/13)
 * -------------------------
 * Add the remaining ASM mnemonics and the 4.3x functions/etc.
 * Better coloring (perhaps match the default scheme of PB?)
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
    'LANG_NAME' => 'PureBasic',
    'COMMENT_SINGLE' => array( 1 => ";"  ),
    'COMMENT_MULTI' => array( ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            // Keywords
            'And', 'As', 'Break', 'CallDebugger', 'Case', 'CompilerCase', 'CompilerDefault', 'CompilerElse', 'CompilerEndIf', 'CompilerEndSelect',
            'CompilerError', 'CompilerIf', 'CompilerSelect', 'Continue', 'Data', 'DataSection', 'EndDataSection', 'Debug', 'DebugLevel', 'Declare',
            'DeclareCDLL', 'DeclareDLL', 'Default', 'Define', 'Dim', 'DisableASM', 'DisableDebugger', 'DisableExplicit', 'Else', 'ElseIf', 'EnableASM',
            'EnableDebugger', 'EnableExplicit', 'End', 'EndEnumeration', 'EndIf', 'EndImport', 'EndInterface', 'EndMacro', 'EndProcedure',
            'EndSelect', 'EndStructure', 'EndStructureUnion', 'EndWith', 'Enumeration', 'Extends', 'FakeReturn', 'For', 'Next', 'ForEach',
            'ForEver', 'Global', 'Gosub', 'Goto', 'If', 'Import', 'ImportC', 'IncludeBinary', 'IncludeFile', 'IncludePath', 'Interface', 'Macro',
            'NewList', 'Not', 'Or', 'Procedure', 'ProcedureC', 'ProcedureCDLL', 'ProcedureDLL', 'ProcedureReturn', 'Protected', 'Prototype',
            'PrototypeC', 'Read', 'ReDim', 'Repeat', 'Until', 'Restore', 'Return', 'Select', 'Shared', 'Static', 'Step', 'Structure', 'StructureUnion',
            'Swap', 'To', 'Wend', 'While', 'With', 'XIncludeFile', 'XOr'
            ),
        2 => array(
            // All Functions
            'Abs', 'ACos', 'Add3DArchive', 'AddBillboard', 'AddDate', 'AddElement', 'AddGadgetColumn', 'AddGadgetItem',
            'AddKeyboardShortcut', 'AddMaterialLayer', 'AddPackFile', 'AddPackMemory', 'AddStatusBarField', 'AddSysTrayIcon',
            'AllocateMemory', 'AmbientColor', 'AnimateEntity', 'Asc', 'ASin', 'ATan', 'AudioCDLength', 'AudioCDName', 'AudioCDStatus',
            'AudioCDTrackLength', 'AudioCDTracks', 'AudioCDTrackSeconds', 'AvailableProgramOutput', 'AvailableScreenMemory',
            'BackColor', 'Base64Decoder', 'Base64Encoder', 'BillboardGroupLocate', 'BillboardGroupMaterial', 'BillboardGroupX',
            'BillboardGroupY', 'BillboardGroupZ', 'BillboardHeight', 'BillboardLocate', 'BillboardWidth', 'BillboardX', 'BillboardY', 'BillboardZ',
            'Bin', 'BinQ', 'Blue', 'Box', 'ButtonGadget', 'ButtonImageGadget', 'CalendarGadget', 'CallCFunction', 'CallCFunctionFast',
            'CallFunction', 'CallFunctionFast', 'CameraBackColor', 'CameraFOV', 'CameraLocate', 'CameraLookAt', 'CameraProjection',
            'CameraRange', 'CameraRenderMode', 'CameraX', 'CameraY', 'CameraZ', 'CatchImage', 'CatchSound', 'CatchSprite',
            'CatchXML', 'ChangeAlphaIntensity', 'ChangeCurrentElement', 'ChangeGamma', 'ChangeListIconGadgetDisplay',
            'ChangeSysTrayIcon', 'CheckBoxGadget', 'CheckEntityCollision', 'CheckFilename', 'ChildXMLNode', 'Chr', 'Circle',
            'ClearBillboards', 'ClearClipboard', 'ClearConsole', 'ClearError', 'ClearGadgetItemList', 'ClearList', 'ClearScreen', 'ClipSprite',
            'CloseConsole', 'CloseDatabase', 'CloseFile', 'CloseGadgetList', 'CloseHelp', 'CloseLibrary', 'CloseNetworkConnection',
            'CloseNetworkServer', 'ClosePack', 'ClosePreferences', 'CloseProgram', 'CloseScreen', 'CloseSubMenu', 'CloseWindow',
            'ColorRequester', 'ComboBoxGadget', 'CompareMemory', 'CompareMemoryString', 'ConnectionID', 'ConsoleColor',
            'ConsoleCursor', 'ConsoleError', 'ConsoleLocate', 'ConsoleTitle', 'ContainerGadget', 'CopyDirectory', 'CopyEntity',
            'CopyFile', 'CopyImage', 'CopyLight', 'CopyMaterial', 'CopyMemory', 'CopyMemoryString', 'CopyMesh', 'CopySprite',
            'CopyTexture', 'CopyXMLNode', 'Cos', 'CountBillboards', 'CountGadgetItems', 'CountLibraryFunctions', 'CountList',
            'CountMaterialLayers', 'CountProgramParameters', 'CountRenderedTriangles', 'CountString', 'CRC32Fingerprint',
            'CreateBillboardGroup', 'CreateCamera', 'CreateDirectory', 'CreateEntity', 'CreateFile', 'CreateGadgetList',
            'CreateImage', 'CreateLight', 'CreateMaterial', 'CreateMenu', 'CreateMesh', 'CreateMutex', 'CreateNetworkServer',
            'CreatePack', 'CreatePalette', 'CreateParticleEmitter', 'CreatePopupMenu', 'CreatePreferences', 'CreateSprite',
            'CreateSprite3D', 'CreateStatusBar', 'CreateTerrain', 'CreateTexture', 'CreateThread', 'CreateToolBar', 'CreateXML',
            'CreateXMLNode', 'DatabaseColumnName', 'DatabaseColumns', 'DatabaseColumnType', 'DatabaseDriverDescription',
            'DatabaseDriverName', 'DatabaseError', 'DatabaseQuery', 'DatabaseUpdate', 'Date', 'DateGadget', 'Day', 'DayOfWeek',
            'DayOfYear', 'DefaultPrinter', 'Defined', 'Delay', 'DeleteDirectory', 'DeleteElement', 'DeleteFile', 'DeleteXMLNode',
            'DESFingerprint', 'DesktopDepth', 'DesktopFrequency', 'DesktopHeight', 'DesktopMouseX', 'DesktopMouseY', 'DesktopName',
            'DesktopWidth', 'DirectoryEntryAttributes', 'DirectoryEntryDate', 'DirectoryEntryName', 'DirectoryEntrySize',
            'DirectoryEntryType', 'DisableGadget', 'DisableMaterialLighting', 'DisableMenuItem', 'DisableToolBarButton', 'DisableWindow',
            'DisASMCommand', 'DisplayAlphaSprite', 'DisplayPalette', 'DisplayPopupMenu', 'DisplayRGBFilter', 'DisplayShadowSprite',
            'DisplaySolidSprite', 'DisplaySprite', 'DisplaySprite3D', 'DisplayTranslucentSprite', 'DisplayTransparentSprite', 'DragFiles',
            'DragImage', 'DragOSFormats', 'DragPrivate', 'DragText', 'DrawAlphaImage', 'DrawImage', 'DrawingBuffer',
            'DrawingBufferPitch', 'DrawingBufferPixelFormat', 'DrawingFont', 'DrawingMode', 'DrawText', 'EditorGadget',
            'egrid_AddColumn', 'egrid_AddRows', 'egrid_AppendCells', 'egrid_ClearRows', 'egrid_CopyCells',
            'egrid_CreateCellCallback', 'egrid_CreateGrid', 'egrid_DeleteCells', 'egrid_FastDeleteCells', 'egrid_FreeGrid',
            'egrid_GetCellSelection', 'egrid_GetCellText', 'egrid_GetColumnOrderArray', 'egrid_HasSelectedCellChanged', 'egrid_Height',
            'egrid_HideEdit', 'egrid_HideGrid', 'egrid_MakeCellVisible', 'egrid_NumberOfColumns', 'egrid_NumberOfRows',
            'egrid_PasteCells', 'egrid_Register', 'egrid_RemoveCellCallback', 'egrid_RemoveColumn', 'egrid_RemoveRow', 'egrid_Resize',
            'egrid_SelectCell', 'egrid_SelectedColumn', 'egrid_SelectedRow', 'egrid_SetCellSelection', 'egrid_SetCellText',
            'egrid_SetColumnOrderArray', 'egrid_SetHeaderFont', 'egrid_SetHeaderHeight', 'egrid_SetOption', 'egrid_Width', 'egrid_x',
            'egrid_y', 'EjectAudioCD', 'ElapsedMilliseconds', 'Ellipse', 'EnableGadgetDrop', 'EnableGraphicalConsole',
            'EnableWindowDrop', 'EnableWorldCollisions', 'EnableWorldPhysics', 'Engine3DFrameRate', 'EntityAngleX',
            'EntityAnimationLength', 'EntityLocate', 'EntityMaterial', 'EntityMesh', 'EntityPhysicBody', 'EntityRenderMode',
            'EntityX', 'EntityY', 'EntityZ', 'EnvironmentVariableName', 'EnvironmentVariableValue', 'Eof', 'EventClient',
            'EventDropAction', 'EventDropBuffer', 'EventDropFiles', 'EventDropImage', 'EventDropPrivate', 'EventDropSize',
            'EventDropText', 'EventDropType', 'EventDropX', 'EventDropY', 'EventGadget', 'EventlParam', 'EventMenu', 'EventServer',
            'EventType', 'EventWindow', 'EventwParam', 'ExamineDatabaseDrivers', 'ExamineDesktops', 'ExamineDirectory',
            'ExamineEnvironmentVariables', 'ExamineIPAddresses', 'ExamineJoystick', 'ExamineKeyboard', 'ExamineLibraryFunctions',
            'ExamineMouse', 'ExaminePreferenceGroups', 'ExaminePreferenceKeys', 'ExamineScreenModes', 'ExamineWorldCollisions',
            'ExamineXMLAttributes', 'ExplorerComboGadget', 'ExplorerListGadget', 'ExplorerTreeGadget', 'ExportXML',
            'ExportXMLSize', 'FileBuffersSize', 'FileID', 'FileSeek', 'FileSize', 'FillArea', 'FindString', 'FinishDirectory',
            'FirstDatabaseRow', 'FirstElement', 'FirstWorldCollisionEntity', 'FlipBuffers', 'FlushFileBuffers', 'Fog', 'FontID',
            'FontRequester', 'FormatDate', 'FormatXML', 'Frame3DGadget', 'FreeBillboardGroup', 'FreeCamera', 'FreeEntity',
            'FreeFont', 'FreeGadget', 'FreeImage', 'FreeLight', 'FreeMaterial', 'FreeMemory', 'FreeMenu', 'FreeMesh',
            'FreeModule', 'FreeMovie', 'FreeMutex', 'FreePalette', 'FreeParticleEmitter', 'FreeSound', 'FreeSprite',
            'FreeSprite3D', 'FreeStatusBar', 'FreeTexture', 'FreeToolBar', 'FreeXML', 'FrontColor', 'GadgetHeight', 'GadgetID',
            'GadgetItemID', 'GadgetToolTip', 'GadgetType', 'GadgetWidth', 'GadgetX', 'GadgetY', 'GetActiveGadget',
            'GetActiveWindow', 'GetClientIP', 'GetClientPort', 'GetClipboardImage', 'GetClipboardText', 'GetCurrentDirectory',
            'GetCurrentEIP', 'GetDatabaseDouble', 'GetDatabaseFloat', 'GetDatabaseLong', 'GetDatabaseQuad', 'GetDatabaseString',
            'GetDisASMString', 'GetEntityAnimationTime', 'GetEntityFriction', 'GetEntityMass', 'GetEnvironmentVariable',
            'GetErrorAddress', 'GetErrorCounter', 'GetErrorDescription', 'GetErrorDLL', 'GetErrorLineNR', 'GetErrorModuleName',
            'GetErrorNumber', 'GetErrorRegister', 'GetExtensionPart', 'GetFileAttributes', 'GetFileDate', 'GetFilePart', 'GetFunction',
            'GetFunctionEntry', 'GetGadgetAttribute', 'GetGadgetColor', 'GetGadgetData', 'GetGadgetFont',
            'GetGadgetItemAttribute', 'GetGadgetItemColor', 'GetGadgetItemData', 'GetGadgetItemState', 'GetGadgetItemText',
            'GetGadgetState', 'GetGadgetText', 'GetHomeDirectory', 'GetMenuItemState', 'GetMenuItemText', 'GetMenuTitleText',
            'GetModulePosition', 'GetModuleRow', 'GetPaletteColor', 'GetPathPart', 'GetTemporaryDirectory',
            'GetToolBarButtonState', 'GetWindowColor', 'GetWindowState', 'GetWindowTitle', 'GetXMLAttribute', 'GetXMLEncoding',
            'GetXMLNodeName', 'GetXMLNodeOffset', 'GetXMLNodeText', 'GetXMLStandalone', 'GoToEIP', 'GrabImage', 'GrabSprite',
            'Green', 'Hex', 'HexQ', 'HideBillboardGroup', 'HideEntity', 'HideGadget', 'HideLight', 'HideMenu', 'HideParticleEmitter',
            'HideWindow', 'Hostname', 'Hour', 'HyperLinkGadget', 'ImageDepth', 'ImageGadget', 'ImageHeight', 'ImageID',
            'ImageOutput', 'ImageWidth', 'InitAudioCD', 'InitEngine3D', 'InitJoystick', 'InitKeyboard', 'InitMouse', 'InitMovie',
            'InitNetwork', 'InitPalette', 'InitScintilla', 'InitSound', 'InitSprite', 'InitSprite3D', 'Inkey', 'Input', 'InputRequester',
            'InsertElement', 'Int', 'IntQ', 'IPAddressField', 'IPAddressGadget', 'IPString', 'IsBillboardGroup', 'IsCamera', 'IsDatabase',
            'IsDirectory', 'IsEntity', 'IsFile', 'IsFont', 'IsGadget', 'IsImage', 'IsLibrary', 'IsLight', 'IsMaterial', 'IsMenu', 'IsMesh',
            'IsModule', 'IsMovie', 'IsPalette', 'IsParticleEmitter', 'IsProgram', 'IsScreenActive', 'IsSound', 'IsSprite', 'IsSprite3D',
            'IsStatusBar', 'IsSysTrayIcon', 'IsTexture', 'IsThread', 'IsToolBar', 'IsWindow', 'IsXML', 'JoystickAxisX', 'JoystickAxisY',
            'JoystickButton', 'KeyboardInkey', 'KeyboardMode', 'KeyboardPushed', 'KeyboardReleased', 'KillProgram', 'KillThread',
            'LastElement', 'LCase', 'Left', 'Len', 'LibraryFunctionAddress', 'LibraryFunctionName', 'LibraryID', 'LightColor',
            'LightLocate', 'LightSpecularColor', 'Line', 'LineXY', 'ListIconGadget', 'ListIndex', 'ListViewGadget', 'LoadFont',
            'LoadImage', 'LoadMesh', 'LoadModule', 'LoadMovie', 'LoadPalette', 'LoadSound', 'LoadSprite', 'LoadTexture',
            'LoadWorld', 'LoadXML', 'Loc', 'LockMutex', 'Lof', 'Log', 'Log10', 'LSet', 'LTrim', 'MainXMLNode', 'MakeIPAddress',
            'MaterialAmbientColor', 'MaterialBlendingMode', 'MaterialDiffuseColor', 'MaterialFilteringMode', 'MaterialID',
            'MaterialShadingMode', 'MaterialSpecularColor', 'MD5FileFingerprint', 'MD5Fingerprint', 'MDIGadget', 'MemorySize',
            'MemoryStringLength', 'MenuBar', 'MenuHeight', 'MenuID', 'MenuItem', 'MenuTitle', 'MeshID', 'MessageRequester',
            'Mid', 'Minute', 'ModuleVolume', 'Month', 'MouseButton', 'MouseDeltaX', 'MouseDeltaY', 'MouseLocate', 'MouseWheel',
            'MouseX', 'MouseY', 'MoveBillboard', 'MoveBillboardGroup', 'MoveCamera', 'MoveEntity', 'MoveLight', 'MoveMemory',
            'MoveParticleEmitter', 'MoveXMLNode', 'MovieAudio', 'MovieHeight', 'MovieInfo', 'MovieLength', 'MovieSeek',
            'MovieStatus', 'MovieWidth', 'NetworkClientEvent', 'NetworkServerEvent', 'NewPrinterPage', 'NextDatabaseDriver',
            'NextDatabaseRow', 'NextDirectoryEntry', 'NextElement', 'NextEnvironmentVariable', 'NextIPAddress',
            'NextLibraryFunction', 'NextPackFile', 'NextPreferenceGroup', 'NextPreferenceKey', 'NextScreenMode',
            'NextSelectedFileName', 'NextWorldCollision', 'NextXMLAttribute', 'NextXMLNode', 'OffsetOf', 'OnErrorExit',
            'OnErrorGosub', 'OnErrorGoto', 'OnErrorResume', 'OpenComPort', 'OpenConsole', 'OpenDatabase',
            'OpenDatabaseRequester', 'OpenFile', 'OpenFileRequester', 'OpenGadgetList', 'OpenHelp', 'OpenLibrary',
            'OpenNetworkConnection', 'OpenPack', 'OpenPreferences', 'OpenScreen', 'OpenSubMenu', 'OpenWindow',
            'OpenWindowedScreen', 'OptionGadget', 'OSVersion', 'PackerCallback', 'PackFileSize', 'PackMemory', 'PanelGadget',
            'ParentXMLNode', 'Parse3DScripts', 'ParseDate', 'ParticleColorFader', 'ParticleColorRange', 'ParticleEmissionRate',
            'ParticleEmitterDirection', 'ParticleEmitterLocate', 'ParticleEmitterX', 'ParticleEmitterY', 'ParticleEmitterZ',
            'ParticleMaterial', 'ParticleSize', 'ParticleTimeToLive', 'ParticleVelocity', 'PathRequester', 'PauseAudioCD',
            'PauseMovie', 'PauseThread', 'PeekB', 'PeekC', 'PeekD', 'PeekF', 'PeekL', 'PeekQ', 'PeekS', 'PeekW', 'PlayAudioCD',
            'PlayModule', 'PlayMovie', 'PlaySound', 'Plot', 'Point', 'PokeB', 'PokeC', 'PokeD', 'PokeF', 'PokeL', 'PokeQ', 'PokeS',
            'PokeW', 'Pow', 'PreferenceComment', 'PreferenceGroup', 'PreferenceGroupName', 'PreferenceKeyName',
            'PreferenceKeyValue', 'PreviousDatabaseRow', 'PreviousElement', 'PreviousXMLNode', 'Print', 'PrinterOutput',
            'PrinterPageHeight', 'PrinterPageWidth', 'PrintN', 'PrintRequester', 'ProgramExitCode', 'ProgramFilename',
            'ProgramID', 'ProgramParameter', 'ProgramRunning', 'ProgressBarGadget', 'Random', 'RandomSeed', 'RawKey',
            'ReadByte', 'ReadCharacter', 'ReadConsoleData', 'ReadData', 'ReadDouble', 'ReadFile', 'ReadFloat', 'ReadLong',
            'ReadPreferenceDouble', 'ReadPreferenceFloat', 'ReadPreferenceLong', 'ReadPreferenceQuad',
            'ReadPreferenceString', 'ReadProgramData', 'ReadProgramError', 'ReadProgramString', 'ReadQuad', 'ReadString',
            'ReadStringFormat', 'ReadWord', 'ReAllocateMemory', 'ReceiveNetworkData', 'ReceiveNetworkFile', 'Red',
            'Reg_DeleteEmptyKey', 'Reg_DeleteKey', 'Reg_DeleteValue', 'Reg_GetErrorMsg', 'Reg_GetErrorNr',
            'Reg_GetValueTyp', 'Reg_ListSubKey', 'Reg_ListSubValue', 'Reg_ReadBinary', 'Reg_ReadExpandString',
            'Reg_ReadLong', 'Reg_ReadMultiLineString', 'Reg_ReadQuad', 'Reg_ReadString', 'Reg_WriteBinary',
            'Reg_WriteExpandString', 'Reg_WriteLong', 'Reg_WriteMultiLineString', 'Reg_WriteQuad', 'Reg_WriteString',
            'ReleaseMouse', 'RemoveBillboard', 'RemoveEnvironmentVariable', 'RemoveGadgetColumn', 'RemoveGadgetItem',
            'RemoveKeyboardShortcut', 'RemoveMaterialLayer', 'RemovePreferenceGroup', 'RemovePreferenceKey',
            'RemoveString', 'RemoveSysTrayIcon', 'RemoveXMLAttribute', 'RenameFile', 'RenderMovieFrame', 'RenderWorld',
            'ReplaceString', 'ResetList', 'ResizeBillboard', 'ResizeEntity', 'ResizeGadget', 'ResizeImage', 'ResizeMovie',
            'ResizeParticleEmitter', 'ResizeWindow', 'ResolveXMLAttributeName', 'ResolveXMLNodeName', 'ResumeAudioCD',
            'ResumeMovie', 'ResumeThread', 'RGB', 'Right', 'RootXMLNode', 'RotateBillboardGroup', 'RotateCamera',
            'RotateEntity', 'RotateMaterial', 'RotateSprite3D', 'Round', 'RSet', 'RTrim', 'RunProgram', 'SaveFileRequester',
            'SaveImage', 'SaveSprite', 'SaveXML', 'ScaleEntity', 'ScaleMaterial', 'ScintillaGadget', 'ScintillaSendMessage',
            'ScreenID', 'ScreenModeDepth', 'ScreenModeHeight', 'ScreenModeRefreshRate', 'ScreenModeWidth',
            'ScreenOutput', 'ScrollAreaGadget', 'ScrollBarGadget', 'ScrollMaterial', 'Second', 'SecondWorldCollisionEntity',
            'SelectedFilePattern', 'SelectedFontColor', 'SelectedFontName', 'SelectedFontSize', 'SelectedFontStyle',
            'SelectElement', 'SendNetworkData', 'SendNetworkFile', 'SendNetworkString', 'SetActiveGadget',
            'SetActiveWindow', 'SetClipboardImage', 'SetClipboardText', 'SetCurrentDirectory', 'SetDragCallback',
            'SetDropCallback', 'SetEntityAnimationTime', 'SetEntityFriction', 'SetEntityMass', 'SetEnvironmentVariable',
            'SetErrorNumber', 'SetFileAttributes', 'SetFileDate', 'SetFrameRate', 'SetGadgetAttribute', 'SetGadgetColor',
            'SetGadgetData', 'SetGadgetFont', 'SetGadgetItemAttribute', 'SetGadgetItemColor', 'SetGadgetItemData',
            'SetGadgetItemState', 'SetGadgetItemText', 'SetGadgetState', 'SetGadgetText', 'SetMenuItemState',
            'SetMenuItemText', 'SetMenuTitleText', 'SetMeshData', 'SetModulePosition', 'SetPaletteColor', 'SetRefreshRate',
            'SetToolBarButtonState', 'SetWindowCallback', 'SetWindowColor', 'SetWindowState', 'SetWindowTitle',
            'SetXMLAttribute', 'SetXMLEncoding', 'SetXMLNodeName', 'SetXMLNodeOffset', 'SetXMLNodeText',
            'SetXMLStandalone', 'Sin', 'SizeOf', 'SkyBox', 'SkyDome', 'SmartWindowRefresh', 'SortArray', 'SortList',
            'SortStructuredArray', 'SortStructuredList', 'SoundFrequency', 'SoundPan', 'SoundVolume', 'Space',
            'SpinGadget', 'SplitterGadget', 'Sprite3DBlendingMode', 'Sprite3DQuality', 'SpriteCollision', 'SpriteDepth',
            'SpriteHeight', 'SpriteID', 'SpriteOutput', 'SpritePixelCollision', 'SpriteWidth', 'Sqr', 'Start3D', 'StartDrawing',
            'StartPrinting', 'StartSpecialFX', 'StatusBarHeight', 'StatusBarIcon', 'StatusBarID', 'StatusBarText',
            'StickyWindow', 'Stop3D', 'StopAudioCD', 'StopDrawing', 'StopModule', 'StopMovie', 'StopPrinting',
            'StopSound', 'StopSpecialFX', 'Str', 'StrD', 'StrF', 'StringByteLength', 'StringField', 'StringGadget', 'StrQ',
            'StrU', 'Subsystem', 'SwapElements', 'SysTrayIconToolTip', 'Tan', 'TerrainHeight', 'TextGadget', 'TextHeight',
            'TextureHeight', 'TextureID', 'TextureOutput', 'TextureWidth', 'TextWidth', 'ThreadID', 'ThreadPriority',
            'ToolBarHeight', 'ToolBarID', 'ToolBarImageButton', 'ToolBarSeparator', 'ToolBarStandardButton',
            'ToolBarToolTip', 'TrackBarGadget', 'TransformSprite3D', 'TransparentSpriteColor', 'TreeGadget', 'Trim',
            'TruncateFile', 'TryLockMutex', 'UCase', 'UnlockMutex', 'UnpackMemory', 'UseAudioCD', 'UseBuffer',
            'UseGadgetList', 'UseJPEGImageDecoder', 'UseJPEGImageEncoder', 'UseODBCDatabase', 'UseOGGSoundDecoder',
            'UsePNGImageDecoder', 'UsePNGImageEncoder', 'UseTGAImageDecoder', 'UseTIFFImageDecoder', 'Val', 'ValD',
            'ValF', 'ValQ', 'WaitProgram', 'WaitThread', 'WaitWindowEvent', 'WebGadget', 'WebGadgetPath', 'WindowEvent',
            'WindowHeight', 'WindowID', 'WindowMouseX', 'WindowMouseY', 'WindowOutput', 'WindowWidth', 'WindowX',
            'WindowY', 'WorldGravity', 'WorldShadows', 'WriteByte', 'WriteCharacter', 'WriteConsoleData', 'WriteData',
            'WriteDouble', 'WriteFloat', 'WriteLong', 'WritePreferenceDouble', 'WritePreferenceFloat', 'WritePreferenceLong',
            'WritePreferenceQuad', 'WritePreferenceString', 'WriteProgramData', 'WriteProgramString', 'WriteProgramStringN',
            'WriteQuad', 'WriteString', 'WriteStringFormat', 'WriteStringN', 'WriteWord', 'XMLAttributeName', 'XMLAttributeValue',
            'XMLChildCount', 'XMLError', 'XMLErrorLine', 'XMLErrorPosition', 'XMLNodeFromID', 'XMLNodeFromPath', 'XMLNodePath',
            'XMLNodeType', 'XMLStatus', 'Year', 'ZoomSprite3D'
            ),
        3 => array(
            // some ASM instructions
            'AAA', 'AAD', 'AAM', 'AAS', 'ADC', 'ADD', 'AND', 'ARPL', 'BOUND', 'BSF', 'BSR', 'BSWAP', 'BT', 'BTC', 'BTR',
            'BTS', 'CALL', 'CBW', 'CDQ', 'CLC', 'CLD', 'CLI', 'CLTS', 'CMC', 'CMP', 'CMPS', 'CMPXCHG', 'CWD', 'CWDE',
            'DAA', 'DAS', 'DB', 'DD', 'DEC', 'DIV', 'DW', 'ENTER', 'ESC', 'F2XM1', 'FABS', 'FADD', 'FCHS', 'FCLEX',
            'FCOM', 'FDIV', 'FDIVR', 'FFREE', 'FINCSTP', 'FINIT', 'FLD', 'FLD1', 'FLDCW', 'FMUL', 'FNOP', 'FPATAN',
            'FPREM', 'FRNDINT', 'FSAVE', 'FSCALE', 'FSETPM', 'FSIN', 'FSQRT', 'FST', 'FSTENV', 'FSTSW', 'FSUB',
            'FSUBR', 'FTST', 'FUCOM', 'FWAIT', 'FXAM', 'FXCH', 'FXTRACT', 'FYL2X', 'FYL2XP1', 'HLT', 'IDIV', 'IMUL',
            'IN', 'INC', 'INS', 'INT', 'INTO', 'INVLPG', 'IRET', 'IRETD', 'JA', 'JAE', 'JB', 'JBE', 'JC', 'JCXZ', 'JE', 'JECXZ',
            'JG', 'JGE', 'JL', 'JLE', 'JMP', 'JNA', 'JNAE', 'JNB', 'JNBE', 'JNC', 'JNE', 'JNG', 'JNGE', 'JNL', 'JNLE', 'JNO', 'JNP',
            'JNS', 'JNZ', 'JO', 'JP', 'JPE', 'JPO', 'JS', 'JZ', 'LAHF', 'LAR', 'LDS', 'LEA', 'LEAVE', 'LES', 'LFS', 'LGDT', 'LGS',
            'LIDT', 'LLDT', 'LMSW', 'LOCK', 'LODS', 'LOOP', 'LOOPE', 'LOOPNE', 'LOOPNZ', 'LOOPZ', 'LSL', 'LSS', 'LTR',
            'MOV', 'MOVS', 'MOVSX', 'MOVZX', 'MUL', 'NEG', 'NOP', 'NOT', 'OR', 'OUT', 'OUTS', 'POP', 'POPA', 'POPAD',
            'POPF', 'POPFD', 'PUSH', 'PUSHA', 'PUSHAD', 'PUSHF', 'PUSHFD', 'RCL', 'RCR', 'REP', 'REPE', 'REPNE',
            'REPNZ', 'REPZ', 'RET', 'RETF', 'ROL', 'ROR', 'SAHF', 'SAL', 'SAR', 'SBB', 'SCAS', 'SETAE', 'SETB', 'SETBE',
            'SETC', 'SETE', 'SETG', 'SETGE', 'SETL', 'SETLE', 'SETNA', 'SETNAE', 'SETNB', 'SETNC', 'SETNE', 'SETNG',
            'SETNGE', 'SETNL', 'SETNLE', 'SETNO', 'SETNP', 'SETNS', 'SETNZ', 'SETO', 'SETP', 'SETPE', 'SETPO',
            'SETS', 'SETZ', 'SGDT', 'SHL', 'SHLD', 'SHR', 'SHRD', 'SIDT', 'SLDT', 'SMSW', 'STC', 'STD', 'STI',
            'STOS', 'STR', 'SUB', 'TEST', 'VERR', 'VERW', 'WAIT', 'WBINVD', 'XCHG', 'XLAT', 'XLATB', 'XOR'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '+', '-', '*', '/', '\\', '>', '<', '=', '<=', '>=', '&', '|', '!', '~', '<>', '>>', '<<', '%'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000066; font-weight: bold;',
            2 => 'color: #0000ff;',
            3 => 'color: #000fff;'
            ),
        'COMMENTS' => array(
            1 => 'color: #ff0000; font-style: italic;',
            'MULTI' => 'color: #ff0000; font-style: italic;'
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
        2 => '',
        3 => ''
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