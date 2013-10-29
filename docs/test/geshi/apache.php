<?php
/*************************************************************************************
 * apache.php
 * ----------
 * Author: Tux (tux@inmail.cz)
 * Copyright: (c) 2004 Tux (http://tux.a4.cz/), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/29/07
 *
 * Apache language file for GeSHi.
 * Words are from SciTe configuration file
 *
 * CHANGES
 * -------
 * 2008/17/06 (1.0.8)
 *  -  Added support for apache configuration sections (milian)
 *  -  Added missing php keywords (milian)
 *  -  Added some more keywords
 *  -  Disabled highlighting of brackets by default
 * 2004/11/27 (1.0.2)
 *  -  Added support for multiple object splitters
 * 2004/10/27 (1.0.1)
 *   -  Added support for URLs
 * 2004/08/05 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2004/07/29)
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
    'LANG_NAME' => 'Apache configuration',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        /*keywords*/
        1 => array(
            //core.c
            'AcceptFilter','AcceptPathInfo','AccessConfig','AccessFileName',
            'AddDefaultCharset','AddOutputFilterByType','AllowEncodedSlashes',
            'AllowOverride','AuthName','AuthType','ContentDigest',
            'CoreDumpDirectory','DefaultType','DocumentRoot','EnableMMAP',
            'EnableSendfile','ErrorDocument','ErrorLog','FileETag','ForceType',
            'HostnameLookups','Include','LimitInternalRecursion',
            'LimitRequestBody','LimitRequestFields','LimitRequestFieldsize',
            'LimitRequestLine','LimitXMLRequestBody','LogLevel','MaxMemFree',
            'MaxRequestsPerChild','NameVirtualHost','Options','PidFile','Port',
            'Protocol','Require','RLimitCPU','RLimitMEM','RLimitNPROC',
            'Satisfy','ScoreBoardFile','ServerAdmin','ServerAlias','ServerName',
            'ServerPath','ServerRoot','ServerSignature','ServerTokens',
            'SetHandler','SetInputFilter','SetOutputFilter','ThreadStackSize',
            'Timeout','TraceEnable','UseCanonicalName',
            'UseCanonicalPhysicalPort',

            //http_core.c
            'KeepAlive','KeepAliveTimeout','MaxKeepAliveRequests',

            //mod_actions.c
            'Action','Script',

            //mod_alias.c
            'Alias','AliasMatch','Redirect','RedirectMatch','RedirectPermanent',
            'RedirectTemp','ScriptAlias','ScriptAliasMatch',

            //mod_asis.c

            //mod_auth_basic.c
            'AuthBasicAuthoritative','AuthBasicProvider',

            //mod_auth_digest.c
            'AuthDigestAlgorithm','AuthDigestDomain','AuthDigestNcCheck',
            'AuthDigestNonceFormat','AuthDigestNonceLifetime',
            'AuthDigestProvider','AuthDigestQop','AuthDigestShmemSize',

            //mod_authn_alias.c

            //mod_authn_anon.c
            'Anonymous','Anonymous_LogEmail','Anonymous_MustGiveEmail',
            'Anonymous_NoUserId','Anonymous_VerifyEmail',

            //mod_authn_dbd.c
            'AuthDBDUserPWQuery','AuthDBDUserRealmQuery',

            //mod_authn_dbm.c
            'AuthDBMType','AuthDBMUserFile',

            //mod_authn_default.c
            'AuthDefaultAuthoritative',

            //mod_authn_file.c
            'AuthUserFile',

            //mod_authnz_ldap.c
            'AuthLDAPBindDN','AuthLDAPBindPassword','AuthLDAPCharsetConfig',
            'AuthLDAPCompareDNOnServer','AuthLDAPDereferenceAliases',
            'AuthLDAPGroupAttribute','AuthLDAPGroupAttributeIsDN',
            'AuthLDAPRemoteUserAttribute','AuthLDAPRemoteUserIsDN',
            'AuthLDAPURL','AuthzLDAPAuthoritative',

            //mod_authz_dbm.c
            'AuthDBMGroupFile','AuthzDBMAuthoritative','AuthzDBMType',

            //mod_authz_default.c
            'AuthzDefaultAuthoritative',

            //mod_authz_groupfile.c
            'AuthGroupFile','AuthzGroupFileAuthoritative',

            //mod_authz_host.c
            'Allow','Deny','Order',

            //mod_authz_owner.c
            'AuthzOwnerAuthoritative',

            //mod_authz_svn.c
            'AuthzForceUsernameCase','AuthzSVNAccessFile','AuthzSVNAnonymous',
            'AuthzSVNAuthoritative','AuthzSVNNoAuthWhenAnonymousAllowed',

            //mod_authz_user.c
            'AuthzUserAuthoritative',

            //mod_autoindex.c
            'AddAlt','AddAltByEncoding','AddAltByType','AddDescription',
            'AddIcon','AddIconByEncoding','AddIconByType','DefaultIcon',
            'FancyIndexing','HeaderName','IndexHeadInsert','IndexIgnore',
            'IndexOptions','IndexOrderDefault','IndexStyleSheet','ReadmeName',

            //mod_bt.c
            'Tracker','TrackerDetailURL','TrackerFlags','TrackerHashMaxAge',
            'TrackerHashMinAge','TrackerHashWatermark','TrackerHome',
            'TrackerReturnInterval','TrackerReturnMax',
            'TrackerReturnPeerFactor','TrackerReturnPeers','TrackerRootInclude',
            'TrackerStyleSheet',

            //mod_bw.c
            'BandWidth','BandWidthError','BandWidthModule','BandWidthPacket',
            'ForceBandWidthModule','LargeFileLimit','MaxConnection',
            'MinBandWidth',

            //mod_cache.c
            'CacheDefaultExpire','CacheDisable','CacheEnable',
            'CacheIgnoreCacheControl','CacheIgnoreHeaders',
            'CacheIgnoreNoLastMod','CacheIgnoreQueryString',
            'CacheLastModifiedFactor','CacheMaxExpire','CacheStoreNoStore',
            'CacheStorePrivate',

            //mod_cern_meta.c
            'MetaDir','MetaFiles','MetaSuffix',

            //mod_cgi.c
            'ScriptLog','ScriptLogBuffer','ScriptLogLength',

            //mod_charset_lite.c
            'CharsetDefault','CharsetOptions','CharsetSourceEnc',

            //mod_dav.c
            'DAV','DAVDepthInfinity','DAVMinTimeout',

            //mod_dav_fs.c
            'DAVLockDB',

            //mod_dav_lock.c
            'DAVGenericLockDB',

            //mod_dav_svn.c
            'SVNActivitiesDB','SVNAllowBulkUpdates','SVNAutoversioning',
            'SVNIndexXSLT','SVNListParentPath','SVNMasterURI','SVNParentPath',
            'SVNPath','SVNPathAuthz','SVNReposName','SVNSpecialURI',

            //mod_dbd.c
            'DBDExptime','DBDKeep','DBDMax','DBDMin','DBDParams','DBDPersist',
            'DBDPrepareSQL','DBDriver',

            //mod_deflate.c
            'DeflateBufferSize','DeflateCompressionLevel','DeflateFilterNote',
            'DeflateMemLevel','DeflateWindowSize',

            //mod_dir.c
            'DirectoryIndex','DirectorySlash',

            //mod_disk_cache.c
            'CacheDirLength','CacheDirLevels','CacheMaxFileSize',
            'CacheMinFileSize','CacheRoot',

            //mod_dumpio.c
            'DumpIOInput','DumpIOLogLevel','DumpIOOutput',

            //mod_env.c
            'PassEnv','SetEnv','UnsetEnv',

            //mod_expires.c
            'ExpiresActive','ExpiresByType','ExpiresDefault',

            //mod_ext_filter.c
            'ExtFilterDefine','ExtFilterOptions',

            //mod_file_cache.c
            'cachefile','mmapfile',

            //mod_filter.c
            'FilterChain','FilterDeclare','FilterProtocol','FilterProvider',
            'FilterTrace',

            //mod_gnutls.c
            'GnuTLSCache','GnuTLSCacheTimeout','GnuTLSCertificateFile',
            'GnuTLSKeyFile','GnuTLSPGPCertificateFile','GnuTLSPGPKeyFile',
            'GnuTLSClientVerify','GnuTLSClientCAFile','GnuTLSPGPKeyringFile',
            'GnuTLSEnable','GnuTLSDHFile','GnuTLSRSAFile','GnuTLSSRPPasswdFile',
            'GnuTLSSRPPasswdConfFile','GnuTLSPriorities',
            'GnuTLSExportCertificates',

            //mod_headers.c
            'Header','RequestHeader',

            //mod_imagemap.c
            'ImapBase','ImapDefault','ImapMenu',

            //mod_include.c
            'SSIAccessEnable','SSIEndTag','SSIErrorMsg','SSIStartTag',
            'SSITimeFormat','SSIUndefinedEcho','XBitHack',

            //mod_ident.c
            'IdentityCheck','IdentityCheckTimeout',

            //mod_info.c
            'AddModuleInfo',

            //mod_isapi.c
            'ISAPIAppendLogToErrors','ISAPIAppendLogToQuery','ISAPICacheFile',
            'ISAPIFakeAsync','ISAPILogNotSupported','ISAPIReadAheadBuffer',

            //mod_log_config.c
            'BufferedLogs','CookieLog','CustomLog','LogFormat','TransferLog',

            //mod_log_forensic.c
            'ForensicLog',

            //mod_log_rotate.c
            'RotateInterval','RotateLogs','RotateLogsLocalTime',

            //mod_logio.c

            //mod_mem_cache.c
            'MCacheMaxObjectCount','MCacheMaxObjectSize',
            'MCacheMaxStreamingBuffer','MCacheMinObjectSize',
            'MCacheRemovalAlgorithm','MCacheSize',

            //mod_mime.c
            'AddCharset','AddEncoding','AddHandler','AddInputFilter',
            'AddLanguage','AddOutputFilter','AddType','DefaultLanguage',
            'ModMimeUsePathInfo','MultiviewsMatch','RemoveCharset',
            'RemoveEncoding','RemoveHandler','RemoveInputFilter',
            'RemoveLanguage','RemoveOutputFilter','RemoveType','TypesConfig',

            //mod_mime_magic.c
            'MimeMagicFile',

            //mod_negotiation.c
            'CacheNegotiatedDocs','ForceLanguagePriority','LanguagePriority',

            //mod_php5.c
            'php_admin_flag','php_admin_value','php_flag','php_value',
            'PHPINIDir',

            //mod_proxy.c
            'AllowCONNECT','BalancerMember','NoProxy','ProxyBadHeader',
            'ProxyBlock','ProxyDomain','ProxyErrorOverride',
            'ProxyFtpDirCharset','ProxyIOBufferSize','ProxyMaxForwards',
            'ProxyPass','ProxyPassInterpolateEnv','ProxyPassMatch',
            'ProxyPassReverse','ProxyPassReverseCookieDomain',
            'ProxyPassReverseCookiePath','ProxyPreserveHost',
            'ProxyReceiveBufferSize','ProxyRemote','ProxyRemoteMatch',
            'ProxyRequests','ProxySet','ProxyStatus','ProxyTimeout','ProxyVia',

            //mod_proxy_ajp.c

            //mod_proxy_balancer.c

            //mod_proxy_connect.c

            //mod_proxy_ftp.c

            //mod_proxy_http.c

            //mod_rewrite.c
            'RewriteBase','RewriteCond','RewriteEngine','RewriteLock',
            'RewriteLog','RewriteLogLevel','RewriteMap','RewriteOptions',
            'RewriteRule',

            //mod_setenvif.c
            'BrowserMatch','BrowserMatchNoCase','SetEnvIf','SetEnvIfNoCase',

            //mod_so.c
            'LoadFile','LoadModule',

            //mod_speling.c
            'CheckCaseOnly','CheckSpelling',

            //mod_ssl.c
            'SSLCACertificateFile','SSLCACertificatePath','SSLCADNRequestFile',
            'SSLCADNRequestPath','SSLCARevocationFile','SSLCARevocationPath',
            'SSLCertificateChainFile','SSLCertificateFile',
            'SSLCertificateKeyFile','SSLCipherSuite','SSLCryptoDevice',
            'SSLEngine','SSLHonorCipherOrder','SSLMutex','SSLOptions',
            'SSLPassPhraseDialog','SSLProtocol','SSLProxyCACertificateFile',
            'SSLProxyCACertificatePath','SSLProxyCARevocationFile',
            'SSLProxyCARevocationPath','SSLProxyCipherSuite','SSLProxyEngine',
            'SSLProxyMachineCertificateFile','SSLProxyMachineCertificatePath',
            'SSLProxyProtocol','SSLProxyVerify','SSLProxyVerifyDepth',
            'SSLRandomSeed','SSLRenegBufferSize','SSLRequire','SSLRequireSSL',
            'SSLSessionCache','SSLSessionCacheTimeout','SSLUserName',
            'SSLVerifyClient','SSLVerifyDepth',

            //mod_status.c
            'ExtendedStatus','SeeRequestTail',

            //mod_substitute.c
            'Substitute',

            //mod_suexec.c
            'SuexecUserGroup',

            //mod_unique_id.c

            //mod_upload_progress
            'ReportUploads', 'TrackUploads', 'UploadProgressSharedMemorySize',

            //mod_userdir.c
            'UserDir',

            //mod_usertrack.c
            'CookieDomain','CookieExpires','CookieName','CookieStyle',
            'CookieTracking',

            //mod_version.c

            //mod_vhost_alias.c
            'VirtualDocumentRoot','VirtualDocumentRootIP',
            'VirtualScriptAlias','VirtualScriptAliasIP',

            //mod_view.c
            'ViewEnable',

            //mod_win32.c
            'ScriptInterpreterSource',

            //mpm_winnt.c
            'Listen','ListenBacklog','ReceiveBufferSize','SendBufferSize',
            'ThreadLimit','ThreadsPerChild','Win32DisableAcceptEx',

            //mpm_common.c
            'AcceptMutex','AddModule','ClearModuleList','EnableExceptionHook',
            'Group','LockFile','MaxClients','MaxSpareServers','MaxSpareThreads',
            'MinSpareServers','MinSpareThreads','ServerLimit','StartServers',
            'StartThreads','User',

            //util_ldap.c
            'LDAPCacheEntries','LDAPCacheTTL','LDAPConnectionTimeout',
            'LDAPOpCacheEntries','LDAPOpCacheTTL','LDAPSharedCacheFile',
            'LDAPSharedCacheSize','LDAPTrustedClientCert',
            'LDAPTrustedGlobalCert','LDAPTrustedMode','LDAPVerifyServerCert',

            //Unknown Mods ...
            'AgentLog','BindAddress','bs2000account','CacheForceCompletion',
            'CacheGCInterval','CacheSize','NoCache','qsc','RefererIgnore',
            'RefererLog','Resourceconfig','ServerType','SingleListen'
            ),
        /*keywords 2*/
        2 => array(
            'all','on','off','standalone','inetd','indexes',
            'force-response-1.0','downgrade-1.0','nokeepalive',
            'includes','followsymlinks','none',
            'x-compress','x-gzip'
        ),
        /*keywords 3*/
        3 => array(
            //core.c
            'Directory','DirectoryMatch','Files','FilesMatch','IfDefine',
            'IfModule','Limit','LimitExcept','Location','LocationMatch',
            'VirtualHost',

            //mod_authn_alias.c
            'AuthnProviderAlias',

            //mod_proxy.c
            'Proxy','ProxyMatch',

            //mod_version.c
            'IfVersion'
        )
    ),
    'SYMBOLS' => array(
        '+', '-'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #00007f;',
            2 => 'color: #0000ff;',
            3 => 'color: #000000; font-weight:bold;',
            ),
        'COMMENTS' => array(
            1 => 'color: #adadad; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #339933;'
            ),
        'STRINGS' => array(
            0 => 'color: #7f007f;'
            ),
        'NUMBERS' => array(
            0 => 'color: #ff0000;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #008000;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
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
    'PARSER_CONTROL' => array(
        'ENABLE_FLAGS' => array(
            'BRACKETS' => GESHI_NEVER,
            'SYMBOLS' => GESHI_NEVER
        ),
        'KEYWORDS' => array(
            3 => array(
                'DISALLOWED_BEFORE' => '(?<=&lt;|&lt;\/)',
                'DISALLOWED_AFTER' => '(?=\s|\/|&gt;)',
            )
        )
    )
);

?>