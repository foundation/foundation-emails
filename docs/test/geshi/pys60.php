<?php
/**************************************************************************************
 * pys60.php
 * ----------
 * Author: Sohan Basak (ronnie.basak96 @gmail.com)
 * Copyright: (c) 2012 Sohan Basak (http://tothepower.tk),  Roberto Rossi (http://rsoftware.altervista.org), Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2012/05/03
 *
 * Python for S60 language file for GeSHi.
 *
 * CHANGES
 * -------
 * No Changes Till Date
 *
 * The python.php file is extended to pys60.php with required modifications
 *
 * NOTES
 *
 * -I have kept the ":" in Reserved chars, so that it gets highlighted differently than brackets and/or symbols
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
    'LANG_NAME' => 'Python for S60',
    'COMMENT_SINGLE' => array(1 => '#'),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"', "'", '"""',"'''",'""','""'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(

        /*
         ** Set 1: reserved words
         ** http://python.org/doc/current/ref/keywords.html
         */
        1 => array(
            'and', 'del', 'for', 'is', 'raise', 'assert', 'elif', 'from', 'lambda', 'return', 'break',
            'else', 'global', 'not', 'try', 'class', 'except', 'if', 'or', 'while', 'continue', 'exec',
            'import', 'pass', 'yield', 'def', 'finally', 'in', 'print', "<<", ">>", "as"
            ),

        /*
         ** Set 2: builtins
         ** http://python.org/doc/current/lib/built-in-funcs.html
         */
        2 => array(
            '__import__', 'abs', 'basestring', 'bool', 'callable', 'chr', 'classmethod', 'cmp',
            'compile', 'complex', 'delattr', 'dict', 'dir', 'divmod', 'enumerate', 'eval', 'execfile',
            'file', 'filter', 'float', 'frozenset', 'getattr', 'globals', 'hasattr', 'hash', 'help',
            'hex', 'id', 'input', 'int', 'isinstance', 'issubclass', 'iter', 'len', 'list', 'locals',
            'long', 'map', 'max', 'min', 'object', 'oct', 'open', 'ord', 'pow', 'property', 'range',
            'raw_input', 'reduce', 'reload', 'repr', 'reversed', 'round', 'set', 'setattr', 'slice',
            'sorted', 'staticmethod', 'str', 'sum', 'super', 'tuple', 'type', 'unichr', 'unicode',
            'vars', 'xrange', 'zip',
            // Built-in constants: http://python.org/doc/current/lib/node35.html
            'False', 'True', 'None', 'NotImplemented', 'Ellipsis',
            // Built-in Exceptions: http://python.org/doc/current/lib/module-exceptions.html
            'Exception', 'StandardError', 'ArithmeticError', 'LookupError', 'EnvironmentError',
            'AssertionError', 'AttributeError', 'EOFError', 'FloatingPointError', 'IOError',
            'ImportError', 'IndexError', 'KeyError', 'KeyboardInterrupt', 'MemoryError', 'NameError',
            'NotImplementedError', 'OSError', 'OverflowError', 'ReferenceError', 'RuntimeError',
            'StopIteration', 'SyntaxError', 'SystemError', 'SystemExit', 'TypeError',
            'UnboundlocalError', 'UnicodeError', 'UnicodeEncodeError', 'UnicodeDecodeError',
            'UnicodeTranslateError', 'ValueError', 'WindowsError', 'ZeroDivisionError', 'Warning',
            'UserWarning', 'DeprecationWarning', 'PendingDeprecationWarning', 'SyntaxWarning',
            'RuntimeWarning', 'FutureWarning',
            //Symbian Errors
            "SymbianError", "KernelError",
            // self: this is a common python convention (but not a reserved word)
            'self'
            ),

        /*
         ** Set 3: standard library
         ** http://python.org/doc/current/lib/modindex.html
         */
        3 => array(
            '__builtin__', '__future__', '__main__', '_winreg', 'aifc', 'AL', 'al', 'anydbm',
            'array', 'asynchat', 'asyncore', 'atexit', 'audioop', 'base64', 'BaseHTTPServer',
            'Bastion', 'binascii', 'binhex', 'bisect', 'bsddb', 'bz2', 'calendar', 'cd', 'cgi',
            'CGIHTTPServer', 'cgitb', 'chunk', 'cmath', 'cmd', 'code', 'codecs', 'codeop',
            'collections', 'colorsys', 'commands', 'compileall', 'compiler',
            'ConfigParser', 'Cookie', 'cookielib', 'copy', 'copy_reg', 'cPickle', 'crypt',
            'cStringIO', 'csv', 'curses', 'datetime', 'dbhash', 'dbm', 'decimal', 'DEVICE',
            'difflib', 'dircache', 'dis', 'distutils', 'dl', 'doctest', 'DocXMLRPCServer', 'dumbdbm',
            'dummy_thread', 'dummy_threading', 'email', 'encodings', 'errno', 'exceptions', 'fcntl',
            'filecmp', 'fileinput', 'FL', 'fl', 'flp', 'fm', 'fnmatch', 'formatter', 'fpectl',
            'fpformat', 'ftplib', 'gc', 'gdbm', 'getopt', 'getpass', 'gettext', 'GL', 'gl', 'glob',
            'gopherlib', 'grp', 'gzip', 'heapq', 'hmac', 'hotshot', 'htmlentitydefs', 'htmllib',
            'HTMLParser', 'httplib', 'imageop', 'imaplib', 'imgfile', 'imghdr', 'imp', 'inspect',
            'itertools', 'jpeg', 'keyword', 'linecache', 'locale', 'logging', 'mailbox', 'mailcap',
            'marshal', 'math', 'md5', 'mhlib', 'mimetools', 'mimetypes', 'MimeWriter', 'mimify',
            'mmap', 'msvcrt', 'multifile', 'mutex', 'netrc', 'new', 'nis', 'nntplib', 'operator',
            'optparse', 'os', 'ossaudiodev', 'parser', 'pdb', 'pickle', 'pickletools', 'pipes',
            'pkgutil', 'platform', 'popen2', 'poplib', 'posix', 'posixfile', 'pprint', 'profile',
            'pstats', 'pty', 'pwd', 'py_compile', 'pyclbr', 'pydoc', 'Queue', 'quopri', 'random',
            're', 'readline', 'resource', 'rexec', 'rgbimg', 'rlcompleter',
            'robotparser', 'sched', 'ScrolledText', 'select', 'sets', 'sgmllib', 'sha', 'shelve',
            'shlex', 'shutil', 'signal', 'SimpleHTTPServer', 'SimpleXMLRPCServer', 'site', 'smtpd',
            'smtplib', 'sndhdr', 'socket', 'SocketServer', 'stat', 'statcache', 'statvfs', 'string',
            'StringIO', 'stringprep', 'struct', 'subprocess', 'sunau', 'SUNAUDIODEV', 'sunaudiodev',
            'symbol', 'sys', 'syslog', 'tabnanny', 'tarfile', 'telnetlib', 'tempfile', 'termios',
            'test', 'textwrap', 'thread', 'threading', 'time', 'timeit', 'Tix', 'Tkinter', 'token',
            'tokenize', 'traceback', 'tty', 'turtle', 'types', 'unicodedata', 'unittest', 'urllib2',
            'urllib', 'urlparse', 'user', 'UserDict', 'UserList', 'UserString', 'uu', 'warnings',
            'wave', 'weakref', 'webbrowser', 'whichdb', 'whrandom', 'winsound', 'xdrlib', 'xml',
            'xmllib', 'xmlrpclib', 'zipfile', 'zipimport', 'zlib', "os.path", "sys.path",

            //PythonS60 Standard Library
            //http://pys60.garage.maemo.org/doc/s60/
            //These are the standard modules in the archive

            "appuifw", "globalui","e32", "telephone", "aosocket", "btsocket",
            "sysinfo","camera","graphics","keycapture","key_codes","topwindow", "gles",
            "glcanvas","sensor", "audio","messaging", "inbox","location","positioning",
            "contacts", "e32calendar", "e32db","e32dbm","logs","scriptext",
            "series60_console",

            //These are external but very often usable modules

            "appuifw2","ArchetypeUI","elementtree","lightblue",
            "activaprofile","Adjustor","akntextutils","aosocketnativenew",
            "appreciation","applicationmanager","appswitch","atextit","bt_teror","btconsole",
            "btswitch","cElementTree","cenrep","cerealizer","cl_gui","clipboard",
            "clipboard_CHN","debugger","decompile2",
            "dir_iter","download","easydb","ECenrep","Edit_find","efeature","elocation","envy",
            "EProfile","erestart","error","esyagent","Execwap","exprofile","fastcamera",
            "feature","fgimage","filebrowser","firmware","fold","fonts","fraction","FTP",
            "ftplibnew","fy_manager","fy_menu","gles_utils","gps_location","hack",
            "HTML2TXT","iapconnect","icon_image","image_decoder",
            "ini","interactive_console","inting","key_modifiers","key_tricks","keypress",
            "landmarks","lite_fm","locationacq","locationrequestor",
            "logo","markupbase","mbm","mbm2","minidb","miniinfo","MISC",
            "misty","Msg","ntpath","odict","Paintbox","pathinfo","pexif","pickcolor",
            "powlite_fm","powlite_fm2","powlite_fm3","powlite_fme","prgbar","prodb",
            "profileengine","progressbar","progressbartw","progressnotes",
            "ProgressBarTW2","proshivka","py_upload","pyConnection","PyFileMan",
            "pykeylock","PyPyc","pyqq","pys60crypto","pys60usb","rfc822",
            "RUSOS","scmk","scrollpage","SISFIELDS","SISFIELD","sisfile",
            "SISINFO","sisreader","Sistools","smidi","smsreject","speechy","sre_compile",
            "sre_constants","sre_parse","sre","sysagent","syslang","TextMan",
            "textrenderer","TextWrap","topwind","tsocket","uikludge","uikludges","uitricks",
            "walkfile","wallpaper","wfm_lite",
            "wif_keys","wif","window","wlanmgmt","wlantools","wt_color","wt_requesters",
            "zhkey",

            //These are recent additions
            "miffile"
            ),

        /*
         ** Set 4: special methods
         ** http://python.org/doc/current/ref/specialnames.html
         */
        4 => array(
            ///*
            //// Iterator types: http://python.org/doc/current/lib/typeiter.html
            //'__iter__', 'next',
            //// String types: http://python.org/doc/current/lib/string-methods.html
            //'capitalize', 'center', 'count', 'decode', 'encode', 'endswith', 'expandtabs',
            //'find', 'index', 'isalnum', 'isalpha', 'isdigit', 'islower', 'isspace', 'istitle',
            //'isupper', 'join', 'ljust', 'lower', 'lstrip', 'replace', 'rfind', 'rindex', 'rjust',
            //'rsplit', 'rstrip', 'split', 'splitlines', 'startswith', 'strip', 'swapcase', 'title',
            //'translate', 'upper', 'zfill',
            // */

            // Basic customization: http://python.org/doc/current/ref/customization.html
            '__new__', '__init__', '__del__', '__repr__', '__str__',
            '__lt__', '__le__', '__eq__', '__ne__', '__gt__', '__ge__', '__cmp__', '__rcmp__',
            '__hash__', '__nonzero__', '__unicode__', '__dict__',
            // Attribute access: http://python.org/doc/current/ref/attribute-access.html
            '__setattr__', '__delattr__', '__getattr__', '__getattribute__', '__get__', '__set__',
            '__delete__', '__slots__',
            // Class creation, callable objects
            '__metaclass__', '__call__',
            // Container types: http://python.org/doc/current/ref/sequence-types.html
            '__len__', '__getitem__', '__setitem__', '__delitem__', '__iter__', '__contains__',
            '__getslice__', '__setslice__', '__delslice__',
            // Numeric types: http://python.org/doc/current/ref/numeric-types.html
            '__abs__','__add__','__and__','__coerce__','__div__','__divmod__','__float__',
            '__hex__','__iadd__','__isub__','__imod__','__idiv__','__ipow__','__iand__',
            '__ior__','__ixor__', '__ilshift__','__irshift__','__invert__','__int__',
            '__long__','__lshift__',
            '__mod__','__mul__','__neg__','__oct__','__or__','__pos__','__pow__',
            '__radd__','__rdiv__','__rdivmod__','__rmod__','__rpow__','__rlshift__','__rrshift__',
            '__rshift__','__rsub__','__rmul__','__rand__','__rxor__','__ror__',
            '__sub__','__xor__'
            )

        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '*', '&', '%', '!', ';', '<', '>', '?', '`'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => true,
        1 => true,
        2 => true,
        3 => true,
        4 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #006000;font-weight:bold;',   // Reserved
            2 => 'color: #800950;font-size:105%',                  // Built-ins + self
            3 => 'color: #003399;font-size:106%',                  // Standard lib
            4 => 'color: #0000cd;'                  // Special methods
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style:italic;font-size:92%',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #930; font-weight: bold;font-size:105%'
            ),
        'BRACKETS' => array(
            0 => 'color: maroon;font-size:102%;padding:2px'
            ),
        'STRINGS' => array(
            0 => 'color: #666;'
            ),
        'NUMBERS' => array(
            0 => 'color: #2356F8;'
            ),
        'METHODS' => array(
            1 => 'color: navy;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66ccFF;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
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
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
