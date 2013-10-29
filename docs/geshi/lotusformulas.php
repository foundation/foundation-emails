<?php
/*************************************************************************************
 * lotusformulas.php
 * ------------------------
 * Author: Richard Civil (info@richardcivil.net)
 * Copyright: (c) 2008 Richard Civil (info@richardcivil.net), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2008/04/12
 *
 * @Formula/@Command language file for GeSHi.
 *
 * @Formula/@Command source: IBM Lotus Notes/Domino 8 Designer Help
 *
 * CHANGES
 * -------
 * 2008/04/12 (1.0.7.22)
 *  -  First Release
 *
 * TODO (updated 2008/04/12)
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

$language_data = array (
    'LANG_NAME' => 'Lotus Notes @Formulas',
    'COMMENT_SINGLE' => array(1 => "'"),
    'COMMENT_MULTI' => array('REM' => ';'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array (
            '[ZoomPreview]', '[WorkspaceStackReplicaIcons]',
            '[WorkspaceProperties]', '[WindowWorkspace]',
            '[WindowTile]', '[WindowRestore]', '[WindowNext]',
            '[WindowMinimizeAll]', '[WindowMinimize]', '[WindowMaximizeAll]',
            '[WindowMaximize]', '[WindowCascade]', '[ViewSwitchForm]',
            '[ViewShowUnread]', '[ViewShowServerNames]', '[ViewShowSearchBar]',
            '[ViewShowRuler]', '[ViewShowPageBreaks]', '[ViewShowOnlyUnread]',
            '[ViewShowOnlySelected]', '[ViewShowOnlySearchResults]',
            '[ViewShowOnlyCategories]', '[ViewShowObject]',
            '[ViewShowFieldHelp]', '[ViewRenamePerson]', '[ViewRefreshUnread]',
            '[ViewRefreshFields]', '[ViewNavigatorsNone]',
            '[ViewNavigatorsFolders]', '[ViewMoveName]', '[ViewHorizScrollbar]',
            '[ViewExpandWithChildren]', '[ViewExpandAll]', '[ViewExpand]',
            '[ViewCollapseAll]', '[ViewCollapse]', '[ViewChange]',
            '[ViewCertify]', '[ViewBesideFolders]', '[ViewBelowFolders]',
            '[ViewArrangeIcons]', '[V3EditPrevField]', '[V3EditNextField]',
            '[UserIDSwitch]', '[UserIDSetPassword]', '[UserIDMergeCopy]',
            '[UserIDInfo]', '[UserIDEncryptionKeys]', '[UserIDCreateSafeCopy]',
            '[UserIDClearPassword]', '[UserIDCertificates]',
            '[ToolsUserLogoff]', '[ToolsSpellCheck]', '[ToolsSmartIcons]',
            '[ToolsSetupUserSetup]', '[ToolsSetupPorts]', '[ToolsSetupMail]',
            '[ToolsSetupLocation]', '[ToolsScanUnreadSelected]',
            '[ToolsScanUnreadPreferred]', '[ToolsScanUnreadChoose]',
            '[ToolsRunMacro]', '[ToolsRunBackgroundMacros]', '[ToolsReplicate]',
            '[ToolsRefreshSelectedDocs]', '[ToolsRefreshAllDocs]',
            '[ToolsMarkSelectedUnread]', '[ToolsMarkSelectedRead]',
            '[ToolsMarkAllUnread]', '[ToolsMarkAllRead]', '[ToolsHangUp]',
            '[ToolsCategorize]', '[ToolsCall]', '[TextUnderline]',
            '[TextSpacingSingle]', '[TextSpacingOneAndaHalf]',
            '[TextSpacingDouble]', '[TextSetFontSize]', '[TextSetFontFace]',
            '[TextSetFontColor]', '[TextReduceFont]', '[TextPermanentPen]',
            '[TextParagraphStyles]', '[TextParagraph]', '[TextOutdent]',
            '[TextNumbers]', '[TextNormal]', '[TextItalic]', '[TextFont]',
            '[TextEnlargeFont]', '[TextCycleSpacing]', '[TextBullet]',
            '[TextBold]', '[TextAlignRight]', '[TextAlignNone]',
            '[TextAlignLeft]', '[TextAlignFull]', '[TextAlignCenter]',
            '[SwitchView]', '[SwitchForm]', '[StyleCycleKey]',
            '[SmartIconsNextSet]', '[SmartIconsFloating]', '[ShowProperties]',
            '[ShowHidePreviewPane]', '[ShowHideParentPreview]',
            '[ShowHideLinkPreview]', '[ShowHideIMContactList]',
            '[SetCurrentLocation]', '[SendInstantMessage]',
            '[SectionRemoveHeader]', '[SectionProperties]',
            '[SectionExpandAll]', '[SectionExpand]', '[SectionDefineEditors]',
            '[SectionCollapseAll]', '[SectionCollapse]', '[RunScheduledAgents]',
            '[RunAgent]', '[ReplicatorStop]', '[ReplicatorStart]',
            '[ReplicatorSendReceiveMail]', '[ReplicatorSendMail]',
            '[ReplicatorReplicateWithServer]', '[ReplicatorReplicateSelected]',
            '[ReplicatorReplicateNext]', '[ReplicatorReplicateHigh]',
            '[Replicator]', '[RenameDatabase]', '[RemoveFromFolder]',
            '[RemoteDebugLotusScript]', '[ReloadWindow]', '[RefreshWindow]',
            '[RefreshParentNote]', '[RefreshHideFormulas]', '[RefreshFrame]',
            '[PublishDatabase]', '[PictureProperties]', '[PasteBitmapAsObject]',
            '[PasteBitmapAsBackground]', '[OpenView]', '[OpenPage]',
            '[OpenNavigator]', '[OpenInNewWindow]', '[OpenHelpDocument]',
            '[OpenFrameset]', '[OpenDocument]', '[OpenCalendar]',
            '[ObjectProperties]', '[ObjectOpen]', '[ObjectDisplayAs]',
            '[NavPrevUnread]', '[NavPrevSelected]', '[NavPrevMain]',
            '[NavPrev]', '[NavNextUnread]', '[NavNextSelected]',
            '[NavNextMain]', '[NavNext]', '[NavigatorTest]',
            '[NavigatorProperties]', '[NavigateToBacklink]',
            '[NavigatePrevUnread]', '[NavigatePrevSelected]',
            '[NavigatePrevMain]', '[NavigatePrevHighlight]', '[NavigatePrev]',
            '[NavigateNextUnread]', '[NavigateNextSelected]',
            '[NavigateNextMain]', '[NavigateNextHighlight]', '[NavigateNext]',
            '[MoveToTrash]', '[MailSendPublicKey]', '[MailSendEncryptionKey]',
            '[MailSendCertificateRequest]', '[MailSend]', '[MailScanUnread]',
            '[MailRequestNewPublicKey]', '[MailRequestNewName]',
            '[MailRequestCrossCert]', '[MailOpen]', '[MailForwardAsAttachment]',
            '[MailForward]', '[MailComposeMemo]', '[MailAddress]',
            '[LayoutProperties]', '[LayoutElementSendToBack]',
            '[LayoutElementProperties]', '[LayoutElementBringToFront]',
            '[LayoutAddText]', '[LayoutAddGraphic]', '[InsertSubform]',
            '[HotspotProperties]', '[HotspotClear]', '[HelpUsingDatabase]',
            '[HelpAboutNotes]', '[HelpAboutDatabase]', '[GoUpLevel]',
            '[FormTestDocument]', '[FormActions]', '[FolderRename]',
            '[FolderProperties]', '[FolderMove]', '[FolderExpandWithChildren]',
            '[FolderExpandAll]', '[FolderExpand]', '[FolderDocuments]',
            '[FolderCustomize]', '[FolderCollapse]', '[Folder]',
            '[FindFreeTimeDialog]', '[FileSaveNewVersion]', '[FileSave]',
            '[FilePrintSetup]', '[FilePrint]', '[FilePageSetup]',
            '[FileOpenDBRepID]', '[FileOpenDatabase]', '[FileNewReplica]',
            '[FileNewDatabase]', '[FileImport]', '[FileFullTextUpdate]',
            '[FileFullTextInfo]', '[FileFullTextDelete]',
            '[FileFullTextCreate]', '[FileExport]', '[FileExit]',
            '[FileDatabaseUseServer]', '[FileDatabaseRemove]',
            '[FileDatabaseInfo]', '[FileDatabaseDelete]', '[FileDatabaseCopy]',
            '[FileDatabaseCompact]', '[FileDatabaseACL]', '[FileCloseWindow]',
            '[ExitNotes]', '[Execute]', '[ExchangeUnreadMarks]', '[EmptyTrash]',
            '[EditUp]', '[EditUntruncate]', '[EditUndo]', '[EditTop]',
            '[EditTableInsertRowColumn]', '[EditTableFormat]',
            '[EditTableDeleteRowColumn]', '[EditShowHideHiddenChars]',
            '[EditSelectByDate]', '[EditSelectAll]', '[EditRight]',
            '[EditRestoreDocument]', '[EditResizePicture]',
            '[EditQuoteSelection]', '[EditProfileDocument]', '[EditProfile]',
            '[EditPrevField]', '[EditPhoneNumbers]', '[EditPasteSpecial]',
            '[EditPaste]', '[EditOpenLink]', '[EditNextField]',
            '[EditMakeDocLink]', '[EditLocations]', '[EditLinks]', '[EditLeft]',
            '[EditInsertText]', '[EditInsertTable]', '[EditInsertPopup]',
            '[EditInsertPageBreak]', '[EditInsertObject]',
            '[EditInsertFileAttachment]', '[EditInsertButton]',
            '[EditIndentFirstLine]', '[EditIndent]', '[EditHorizScrollbar]',
            '[EditHeaderFooter]', '[EditGotoField]', '[EditFindNext]',
            '[EditFindInPreview]', '[EditFind]', '[EditEncryptionKeys]',
            '[EditDown]', '[EditDocument]', '[EditDetach]', '[EditDeselectAll]',
            '[EditCut]', '[EditCopy]', '[EditClear]', '[EditButton]',
            '[EditBottom]', '[DiscoverFolders]', '[Directories]',
            '[DialingRules]', '[DesignViewSelectFormula]', '[DesignViews]',
            '[DesignViewNewColumn]', '[DesignViewFormFormula]',
            '[DesignViewEditActions]', '[DesignViewColumnDef]',
            '[DesignViewAttributes]', '[DesignViewAppendColumn]',
            '[DesignSynopsis]', '[DesignSharedFields]', '[DesignReplace]',
            '[DesignRefresh]', '[DesignMacros]', '[DesignIcon]',
            '[DesignHelpUsingDocument]', '[DesignHelpAboutDocument]',
            '[DesignFormWindowTitle]', '[DesignFormUseField]',
            '[DesignFormShareField]', '[DesignForms]', '[DesignFormNewField]',
            '[DesignFormFieldDef]', '[DesignFormAttributes]',
            '[DesignDocumentInfo]', '[DebugLotusScript]',
            '[DatabaseReplSettings]', '[DatabaseDelete]', '[CreateView]',
            '[CreateTextbox]', '[CreateSubForm]', '[CreateSection]',
            '[CreateRectangularHotspot]', '[CreateRectangle]',
            '[CreatePolyline]', '[CreatePolygon]', '[CreateNavigator]',
            '[CreateLayoutRegion]', '[CreateForm]', '[CreateFolder]',
            '[CreateEllipse]', '[CreateControlledAccessSection]',
            '[CreateAgent]', '[CreateAction]', '[CopySelectedAsTable]',
            '[ComposeWithReference]', '[Compose]', '[CloseWindow]', '[Clear]',
            '[ChooseFolders]', '[CalendarGoTo]', '[CalendarFormat]',
            '[AttachmentView]', '[AttachmentProperties]', '[AttachmentLaunch]',
            '[AttachmentDetachAll]', '[AgentTestRun]', '[AgentSetServerName]',
            '[AgentRun]', '[AgentLog]', '[AgentEnableDisable]', '[AgentEdit]',
            '[AdminTraceConnection]', '[AdminStatisticsConfig]',
            '[AdminSendMailTrace]', '[AdminRemoteConsole]',
            '[AdminRegisterUser]', '[AdminRegisterServer]',
            '[AdminRegisterFromFile]', '[AdminOutgoingMail]',
            '[AdminOpenUsersView]', '[AdminOpenStatistics]',
            '[AdminOpenServersView]', '[AdminOpenServerLog]',
            '[AdminOpenGroupsView]', '[AdminOpenCertLog]', '[AdminOpenCatalog]',
            '[AdminOpenAddressBook]', '[AdminNewOrgUnit]',
            '[AdminNewOrganization]', '[Administration]',
            '[AdminIDFileSetPassword]', '[AdminIDFileExamine]',
            '[AdminIDFileClearPassword]', '[AdminDatabaseQuotas]',
            '[AdminDatabaseAnalysis]', '[AdminCrossCertifyKey]',
            '[AdminCrossCertifyIDFile]', '[AdminCreateGroup]', '[AdminCertify]',
            '[AddToIMContactList]', '[AddDatabaseRepID]', '[AddDatabase]',
            '[AddBookmark]'
            ),
        2 => array(
            'SELECT', 'FIELD', 'ENVIRONMENT', 'DEFAULT', '@Zone ', '@Yesterday',
            '@Yes', '@Year', '@Word', '@Wide', '@While', '@Weekday',
            '@WebDbName', '@ViewTitle', '@ViewShowThisUnread', '@Version',
            '@VerifyPassword', '@ValidateInternetAddress', '@V4UserAccess',
            '@V3UserName', '@V2If', '@UserRoles', '@UserPrivileges',
            '@UserNamesList', '@UserNameLanguage', '@UserName', '@UserAccess',
            '@UrlQueryString', '@URLOpen', '@URLHistory', '@URLGetHeader',
            '@URLEncode', '@URLDecode', '@UpperCase', '@UpdateFormulaContext',
            '@Unique', '@UndeleteDocument', '@Unavailable', '@True', '@Trim',
            '@Transform', '@ToTime', '@ToNumber', '@Tomorrow', '@Today',
            '@TimeZoneToText', '@TimeToTextInZone', '@TimeMerge', '@Time',
            '@ThisValue', '@ThisName', '@TextToTime', '@TextToNumber', '@Text',
            '@TemplateVersion', '@Tan', '@Sum', '@Success', '@Subset',
            '@StatusBar', '@Sqrt', '@Soundex', '@Sort', '@Sin', '@Sign',
            '@SetViewInfo', '@SetTargetFrame', '@SetProfileField',
            '@SetHTTPHeader', '@SetField', '@SetEnvironment', '@SetDocField',
            '@Set', '@ServerName', '@ServerAccess', '@Select', '@Second',
            '@Round', '@RightBack', '@Right', '@Return', '@Responses',
            '@ReplicaID', '@ReplaceSubstring', '@Replace', '@Repeat',
            '@RegQueryValue', '@RefreshECL', '@Random', '@ProperCase',
            '@Prompt', '@Power', '@PostedCommand', '@PolicyIsFieldLocked',
            '@Platform', '@PickList', '@Pi', '@PasswordQuality', '@Password',
            '@OrgDir', '@OptimizeMailAddress', '@OpenInNewWindow', '@Now',
            '@Nothing', '@NoteID', '@No', '@NewLine', '@Narrow', '@NameLookup',
            '@Name', '@Month', '@Modulo', '@Modified', '@Minute', '@Min',
            '@MiddleBack', '@Middle', '@Member', '@Max', '@Matches',
            '@MailSignPreference', '@MailSend', '@MailSavePreference',
            '@MailEncryptSentPreference', '@MailEncryptSavedPreference',
            '@MailDbName', '@LowerCase', '@Log', '@Locale', '@Ln', '@Like',
            '@Length', '@LeftBack', '@Left', '@LDAPServer', '@LaunchApp',
            '@LanguagePreference', '@Keywords', '@IsVirtualizedDirectory',
            '@IsValid', '@IsUsingJavaElement', '@IsUnavailable', '@IsTime',
            '@IsText', '@IsResponseDoc', '@IsNumber', '@IsNull', '@IsNotMember',
            '@IsNewDoc', '@IsModalHelp', '@IsMember', '@IsExpandable',
            '@IsError', '@IsEmbeddedInsideWCT', '@IsDocTruncated',
            '@IsDocBeingSaved', '@IsDocBeingRecalculated', '@IsDocBeingMailed',
            '@IsDocBeingLoaded', '@IsDocBeingEdited', '@IsDB2', '@IsCategory',
            '@IsAvailable', '@IsAppInstalled', '@IsAgentEnabled', '@Integer',
            '@InheritedDocumentUniqueID', '@Implode', '@IfError', '@If',
            '@Hour', '@HashPassword', '@HardDeleteDocument', '@GetViewInfo',
            '@GetProfileField', '@GetPortsList', '@GetIMContactListGroupNames',
            '@GetHTTPHeader', '@GetFocusTable', '@GetField', '@GetDocField',
            '@GetCurrentTimeZone', '@GetAddressBooks', '@FormLanguage', '@For',
            '@FontList', '@FloatEq', '@FileDir', '@False', '@Failure',
            '@Explode', '@Exp', '@Eval', '@Error', '@Environment', '@Ends',
            '@EnableAlarms', '@Elements', '@EditUserECL', '@EditECL',
            '@DoWhile', '@Domain', '@DocumentUniqueID', '@DocSiblings',
            '@DocParentNumber', '@DocOmmittedLength', '@DocNumber', '@DocMark',
            '@DocLock', '@DocLevel', '@DocLength', '@DocFields',
            '@DocDescendants', '@DocChildren', '@Do', '@DialogBox',
            '@DeleteField', '@DeleteDocument', '@DDETerminate', '@DDEPoke',
            '@DDEInitiate', '@DDEExecute', '@DbTitle', '@DbName', '@DbManager',
            '@DbLookup', '@DbExists', '@DbCommand', '@DbColumn', '@DB2Schema',
            '@Day', '@Date', '@Created', '@Count', '@Cos', '@Contains',
            '@ConfigFile', '@Compare', '@Command', '@ClientType',
            '@CheckFormulaSyntax', '@CheckAlarms', '@Char', '@Certificate',
            '@BusinessDays', '@BrowserInfo', '@Begins', '@Author',
            '@Attachments', '@AttachmentNames', '@AttachmentModifiedTimes',
            '@AttachmentLengths', '@ATan2', '@ATan', '@ASin', '@Ascii',
            '@AllDescendants', '@AllChildren', '@All', '@AdminECLIsLocked',
            '@Adjust', '@AddToFolder', '@ACos', '@Accessed', '@AbstractSimple',
            '@Abstract', '@Abs'
            )
        ),
    'SYMBOLS' => array(
        '(', ')'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #800000;',
            2 => 'color: #0000FF;'
            ),
        'COMMENTS' => array(
            1 => 'color: #008000;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #FF00FF;'
            ),
        'NUMBERS' => array(
            0 => 'color: #FF00FF;'
            ),
        'METHODS' => array(
            1 => 'color: #0000AA;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => ''
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
        ),
    'TAB_WIDTH' => 2
    );

?>
