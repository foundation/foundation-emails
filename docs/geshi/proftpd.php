<?php
/*************************************************************************************
 * proftpd.php
 * ----------
 * Author: Benny Baumann (BenBE@geshi.org)
 * Copyright: (c) 2010 Benny Baumann (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2011/01/25
 *
 * ProFTPd language file for GeSHi.
 * Words are scraped from their documentation
 *
 * CHANGES
 * -------
 * 2004/08/05 (1.0.8.10)
 *   -  First Release
 *
 * TODO (updated 2011/01/25)
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
    'LANG_NAME' => 'ProFTPd configuration',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        /*keywords*/
        1 => array(
            //mod_auth
            'AccessDenyMsg', 'AccessGrantMsg', 'AnonRejectePasswords',
            'AnonRequirePassword', 'AuthAliasOnly', 'AuthUsingAlias',
            'CreateHome', 'DefaultChdir', 'DefaultRoot', 'GroupPassword',
            'LoginPasswordPrompt', 'MaxClients', 'MaxClientsPerClass',
            'MaxClientsPerHost', 'MaxClientsPerUser', 'MaxConnectionsPerHost',
            'MaxHostsPerUser', 'MaxLoginAttempts', 'RequireValidShell',
            'RootLogin', 'RootRevoke', 'TimeoutLogin', 'TimeoutSession',
            'UseFtpUsers', 'UserAlias', 'UserDirRoot', 'UserPassword',

            //mod_auth_file
            'AuthGroupFile', 'AuthUserFile',

            //mod_auth_pam
            'AuthPAM', 'AuthPAMConfig',

            //mod_auth_unix
            'PersistentPasswd',

            //mod_ban
            'BanControlsACLs', 'BanEngine', 'BanLog', 'BanMessage', 'BanOnEvent',
            'BanTable',

            //mod_cap
            'CapabilitiesEngine', 'CapabilitiesSet',

            //mod_core
            'Allow', 'AllowAll', 'AllowClass', 'AllowFilter',
            'AllowForeignAddress', 'AllowGroup', 'AllowOverride',
            'AllowRetrieveRestart', 'AllowStoreRestart', 'AllowUser',
            'AnonymousGroup', 'AuthOrder', 'Bind', 'CDPath', 'Class', 'Classes',
            'CommandBufferSize', 'DebugLevel', 'DefaultAddress',
            'DefaultServer', 'DefaultTransferMode', 'DeferWelcome', 'Define',
            'Deny', 'DenyAll', 'DenyClass', 'DenyFilter', 'DenyGroup',
            'DenyUser', 'DisplayChdir', 'DisplayConnect', 'DisplayFirstChdir',
            'DisplayGoAway', 'DisplayLogin', 'DisplayQuit', 'From', 'Group',
            'GroupOwner', 'HideFiles', 'HideGroup', 'HideNoAccess', 'HideUser',
            'IdentLookups', 'IgnoreHidden', 'Include', 'MasqueradeAddress',
            'MaxConnectionRate', 'MaxInstances', 'MultilineRFC2228', 'Order',
            'PassivePorts', 'PathAllowFilter', 'PathDenyFilter', 'PidFile',
            'Port', 'RLimitCPU', 'RLimitMemory', 'RLimitOpenFiles', 'Satisfy',
            'ScoreboardFile', 'ServerAdmin', 'ServerIdent', 'ServerName',
            'ServerType', 'SetEnv', 'SocketBindTight', 'SocketOptions',
            'SyslogFacility', 'SyslogLevel', 'tcpBackLog', 'tcpNoDelay',
            'TimeoutIdle', 'TimeoutLinger', 'TimesGMT', 'TransferLog', 'Umask',
            'UnsetEnv', 'UseIPv6', 'User', 'UseReverseDNS', 'UserOwner',
            'UseUTF8', 'WtmpLog',

            //mod_ctrls_admin
            'AdminControlsACLs', 'AdminControlsEngine',

            //mod_delay
            'DelayEngine', 'DelayTable',

            //mod_dynmasq
            'DynMasqRefresh',

            //mod_exec
            'ExecBeforeCommand', 'ExecEngine', 'ExecEnviron', 'ExecLog',
            'ExecOnCommand', 'ExecOnConnect', 'ExecOnError', 'ExecOnEvent',
            'ExecOnExit', 'ExecOnRestart', 'ExecOptions', 'ExecTimeout',

            //mod_ldap
            'LDAPAliasDereference', 'LDAPAttr', 'LDAPAuthBinds',
            'LDAPDefaultAuthScheme', 'LDAPDefaultGID', 'LDAPDefaultUID',
            'LDAPDNInfo', 'LDAPDoAuth', 'LDAPDoGIDLookups',
            'LDAPDoQuotaLookups', 'LDAPDoUIDLookups',
            'LDAPForceGeneratedHomedir', 'LDAPForceHomedirOnDemand',
            'LDAPGenerateHomedir', 'LDAPGenerateHomedirPrefix',
            'LDAPGenerateHomedirPrefixNoUsername', 'LDAPHomedirOnDemand',
            'LDAPHomedirOnDemandPrefix', 'LDAPHomedirOnDemandPrefixNoUsername',
            'LDAPHomedirOnDemandSuffix', 'LDAPNegativeCache',
            'LDAPProtocolVersion', 'LDAPQueryTimeout', 'LDAPSearchScope',
            'LDAPServer',

            //mod_load
            'MaxLoad',

            //mod_log
            'AllowLogSymlinks', 'ExtendedLog', 'LogFormat', 'ServerLog',
            'SystemLog',

            //mod_ls'
            'DirFakeGroup', 'DirFakeMode', 'DirFakeUser', 'ListOptions',
            'ShowSymlinks', 'UseGlobbing',

            //mod_quotatab
            'QuotaDirectoryTally', 'QuotaDisplayUnits', 'QuotaEngine',
            'QuotaExcludeFilter', 'QuotaLimitTable', 'QuotaLock', 'QuotaLog',
            'QuotaOptions', 'QuotaShowQuotas', 'QuotaTallyTable',

            //mod_quotatab_file

            //mod_quotatab_ldap

            //mod_quotatab_sql

            //mod_radius
            'RadiusAcctServer', 'RadiusAuthServer', 'RadiusEngine',
            'RadiusGroupInfo', 'RadiusLog', 'RadiusNASIdentifier',
            'RadiusQuotaInfo', 'RadiusRealm', 'RadiusUserInfo', 'RadiusVendor',

            //mod_ratio
            'AnonRatio', 'ByteRatioErrMsg', 'CwdRatioMsg', 'FileRatioErrMsg',
            'GroupRatio', 'HostRatio', 'LeechRatioMsg', 'RatioFile', 'Ratios',
            'RatioTempFile', 'SaveRatios', 'UserRatio',

            //mod_readme
            'DisplayReadme',

            //mod_rewrite
            'RewriteCondition', 'RewriteEngine', 'RewriteLock', 'RewriteLog',
            'RewriteMap', 'RewriteRule',

            //mod_sftp
            'SFTPAcceptEnv', 'SFTPAuthMethods', 'SFTPAuthorizedHostKeys',
            'SFTPAuthorizedUserKeys', 'SFTPCiphers', 'SFTPClientMatch',
            'SFTPCompression', 'SFTPCryptoDevice', 'SFTPDHParamFile',
            'SFTPDigests', 'SFTPDisplayBanner', 'SFTPEngine', 'SFTPExtensions',
            'SFTPHostKey', 'SFTPKeyBlacklist', 'SFTPKeyExchanges', 'SFTPLog',
            'SFTPMaxChannels', 'SFTPOptions', 'SFTPPassPhraseProvider',
            'SFTPRekey', 'SFTPTrafficPolicy',

            //mod_sftp_pam
            'SFTPPAMEngine', 'SFTPPAMOptions', 'SFTPPAMServiceName',

            //mod_sftp_sql

            //mod_shaper
            'ShaperAll', 'ShaperControlsACLs', 'ShaperEngine', 'ShaperLog',
            'ShaperSession', 'ShaperTable',

            //mod_sql
            'SQLAuthenticate', 'SQLAuthTypes', 'SQLBackend', 'SQLConnectInfo',
            'SQLDefaultGID', 'SQLDefaultHomedir', 'SQLDefaultUID', 'SQLEngine',
            'SQLGroupInfo', 'SQLGroupWhereClause', 'SQLHomedirOnDemand',
            'SQLLog', 'SQLLogFile', 'SQLMinID', 'SQLMinUserGID',
            'SQLMinUserUID', 'SQLNamedQuery', 'SQLNegativeCache', 'SQLOptions',
            'SQLRatios', 'SQLRatioStats', 'SQLShowInfo', 'SQLUserInfo',
            'SQLUserWhereClause',

            //mod_sql_passwd
            'SQLPasswordEncoding', 'SQLPasswordEngine', 'SQLPasswordSaltFile',
            'SQLPasswordUserSalt',

            //mod_tls
            'TLSCACertificateFile', 'TLSCACertificatePath',
            'TLSCARevocationFile', 'TLSCARevocationPath',
            'TLSCertificateChainFile', 'TLSCipherSuite', 'TLSControlsACLs',
            'TLSCryptoDevice', 'TLSDHParamFile', 'TLSDSACertificateFile',
            'TLSDSACertificateKeyFile', 'TLSEngine', 'TLSLog', 'TLSOptions',
            'TLSPKCS12File', 'TLSPassPhraseProvider', 'TLSProtocol',
            'TLSRandomSeed', 'TLSRenegotiate', 'TLSRequired',
            'TLSRSACertificateFile', 'TLSRSACertificateKeyFile',
            'TLSSessionCache', 'TLSTimeoutHandshake', 'TLSVerifyClient',
            'TLSVerifyDepth', 'TLSVerifyOrder',

            //mod_tls_shmcache

            //mod_unique_id
            'UniqueIDEngine',

            //mod_wrap
            'TCPAccessFiles', 'TCPAccessSyslogLevels', 'TCPGroupAccessFiles',
            'TCPServiceName', 'TCPUserAccessFiles',

            //mod_wrap2
            'WrapAllowMsg', 'WrapDenyMsg', 'WrapEngine', 'WrapGroupTables',
            'WrapLog', 'WrapServiceName', 'WrapTables', 'WrapUserTables',

            //mod_wrap2_file

            //mod_wrap2_sql

            //mod_xfer
            'AllowOverwrite', 'DeleteAbortedStores', 'DisplayFileTransfer',
            'HiddenStor', 'HiddenStores', 'MaxRetrieveFileSize',
            'MaxStoreFileSize', 'StoreUniquePrefix', 'TimeoutNoTransfer',
            'TimeoutStalled', 'TransferRate', 'UseSendfile',

            //unknown
            'ScoreboardPath', 'ScoreboardScrub'
            ),
        /*keywords 3*/
        3 => array(
            //mod_core
            'Anonymous',
            'Class',
            'Directory',
            'IfDefine',
            'IfModule',
            'Limit',
            'VirtualHost',

            //mod_ifsession
            'IfClass', 'IfGroup', 'IfUser',

            //mod_version
            'IfVersion'
            ),
        /*permissions*/
        4 => array(
            //mod_core
            'ALL',
            'CDUP',
            'CMD',
            'CWD',
            'DELE',
            'DIRS',
            'LOGIN',
            'MKD',
            'READ',
            'RETR',
            'RMD',
            'RNFR',
            'RNTO',
            'STOR',
            'WRITE',
            'XCWD',
            'XMKD',
            'XRMD',

            //mod_copy
            'SITE_CPFR', 'SITE_CPTO',

            //mod_quotatab
            'SITE_QUOTA',

            //mod_site
            'SITE_HELP', 'SITE_CHMOD', 'SITE_CHGRP',

            //mod_site_misc
            'SITE_MKDIR', 'SITE_RMDIR', 'SITE_SYMLINK', 'SITE_UTIME',
            ),
        /*keywords 2*/
        2 => array(
            'all','on','off','yes','no',
            'standalone', 'inetd',
            'default', 'auth', 'write',
            'internet', 'local', 'limit', 'ip',
            'from'
            ),
        ),
    'SYMBOLS' => array(
        '+', '-'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #00007f;',
            2 => 'color: #0000ff;',
            3 => 'color: #000000; font-weight:bold;',
            4 => 'color: #000080; font-weight:bold;',
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
        1 => 'http://www.google.com/search?hl=en&amp;q={FNAMEL}+site:www.proftpd.org+inurl:docs&amp;btnI=I%27m%20Feeling%20Lucky',
        2 => '',
        3 => 'http://www.google.com/search?hl=en&amp;q={FNAMEL}+site:www.proftpd.org+inurl:docs&amp;btnI=I%27m%20Feeling%20Lucky',
        4 => ''
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
            2 => array(
                'DISALLOWED_BEFORE' => '(?<=\s)(?<!=)',
                'DISALLOWED_AFTER' => '(?!\+)(?!\w)',
            ),
            3 => array(
                'DISALLOWED_BEFORE' => '(?<=&lt;|&lt;\/)',
                'DISALLOWED_AFTER' => '(?=\s|\/|&gt;)',
            ),
            4 => array(
                'DISALLOWED_BEFORE' => '(?<=\s)(?<!=)',
                'DISALLOWED_AFTER' => '(?!\+)(?=\/|(?:\s+\w+)*\s*&gt;)',
            )
        )
    )
);

?>