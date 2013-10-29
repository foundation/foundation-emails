<?php
/*************************************************************************************
 * objc.php
 * --------
 * Author: M. Uli Kusterer (witness.of.teachtext@gmx.net)
 * Contributors: Quinn Taylor (quinntaylor@mac.com)
 * Copyright: (c) 2008 Quinn Taylor, 2004 M. Uli Kusterer, Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.11
 * Date Started: 2004/06/04
 *
 * Objective-C language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/07/11 (1.0.8)
 *   -  Added support for @ before strings being highlighted
 * 2008/06/10 (1.0.7.22)
 *   -  Added keywords for Objective-C 2.0 (Leopard+).
 *   -  Changed colors to match Xcode 3 highlighting more closely.
 *   -  Updated API for AppKit and Foundation; added CoreData classes.
 *   -  Updated URLs for AppKit and Foundation; split classes and protocols.
 *   -  Sorted all keyword group in reverse-alpha order for correct matching.
 *   -  Changed all keyword groups to be case-sensitive.
 * 2004/11/27 (1.0.0)
 *   -  First Release
 *
 * TODO (updated 2004/11/27)
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
    'LANG_NAME' => 'Objective-C',
    'COMMENT_SINGLE' => array(
        //Compiler directives
        1 => '#',
        //Single line C-Comments
        2 => '//'
        ),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        //Multiline Continuation for single-line comment
        2 => '/\/\/(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //Pseudo-Highlighting of the @-sign before strings
        3 => "/@(?=\")/"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"', "'"),
    'ESCAPE_CHAR' => '\\',

    'KEYWORDS' => array(
        // Objective-C keywords
        1 => array(
            'while', 'switch', 'return', 'in', 'if', 'goto', 'foreach', 'for',
            'else', 'do', 'default', 'continue', 'case', '@try', '@throw',
            '@synthesize', '@synchronized', '@selector', '@public', '@protocol',
            '@protected', '@property', '@private', '@interface',
            '@implementation', '@finally', '@end', '@encode', '@defs', '@class',
            '@catch'
            ),
        // Macros and constants
        2 => array(
            'YES', 'USHRT_MAX', 'ULONG_MAX', 'UINT_MAX', 'UCHAR_MAX', 'true',
            'TMP_MAX', 'stdout', 'stdin', 'stderr', 'SIGTERM', 'SIGSEGV',
            'SIGINT', 'SIGILL', 'SIG_IGN', 'SIGFPE', 'SIG_ERR', 'SIG_DFL',
            'SIGABRT', 'SHRT_MIN', 'SHRT_MAX', 'SEEK_SET', 'SEEK_END',
            'SEEK_CUR', 'SCHAR_MIN', 'SCHAR_MAX', 'RAND_MAX', 'NULL',
            'NO', 'nil', 'Nil', 'L_tmpnam', 'LONG_MIN', 'LONG_MAX',
            'LDBL_MIN_EXP', 'LDBL_MIN', 'LDBL_MAX_EXP', 'LDBL_MAX',
            'LDBL_MANT_DIG', 'LDBL_EPSILON', 'LDBL_DIG', 'INT_MIN', 'INT_MAX',
            'HUGE_VAL', 'FOPEN_MAX', 'FLT_ROUNDS', 'FLT_RADIX', 'FLT_MIN_EXP',
            'FLT_MIN', 'FLT_MAX_EXP', 'FLT_MAX', 'FLT_MANT_DIG', 'FLT_EPSILON',
            'FLT_DIG', 'FILENAME_MAX', 'false', 'EXIT_SUCCESS', 'EXIT_FAILURE',
            'errno', 'ERANGE', 'EOF', 'enum', 'EDOM', 'DBL_MIN_EXP', 'DBL_MIN',
            'DBL_MAX_EXP', 'DBL_MAX', 'DBL_MANT_DIG', 'DBL_EPSILON', 'DBL_DIG',
            'CLOCKS_PER_SEC', 'CHAR_MIN', 'CHAR_MAX', 'CHAR_BIT', 'BUFSIZ',
            'break'
            ),
        // C standard library functions
        3 => array(
            'vsprintf', 'vprintf', 'vfprintf', 'va_start', 'va_end', 'va_arg',
            'ungetc', 'toupper', 'tolower', 'tmpname', 'tmpfile', 'time',
            'tanh', 'tan', 'system', 'strxfrm', 'strtoul', 'strtol', 'strtok',
            'strtod', 'strstr', 'strspn', 'strrchr', 'strpbrk', 'strncpy',
            'strncmp', 'strncat', 'strlen', 'strftime', 'strerror', 'strcspn',
            'strcpy', 'strcoll', 'strcmp', 'strchr', 'strcat', 'sscanf',
            'srand', 'sqrt', 'sprintf', 'snprintf', 'sizeof', 'sinh', 'sin',
            'setvbuf', 'setjmp', 'setbuf', 'scanf', 'rewind', 'rename',
            'remove', 'realloc', 'rand', 'qsort', 'puts', 'putchar', 'putc',
            'printf', 'pow', 'perror', 'offsetof', 'modf', 'mktime', 'memset',
            'memmove', 'memcpy', 'memcmp', 'memchr', 'malloc', 'longjmp',
            'log10', 'log', 'localtime', 'ldiv', 'ldexp', 'labs', 'isxdigit',
            'isupper', 'isspace', 'ispunct', 'isprint', 'islower',
            'isgraph', 'isdigit', 'iscntrl', 'isalpha', 'isalnum', 'gmtime',
            'gets', 'getenv', 'getchar', 'getc', 'fwrite', 'ftell', 'fsetpos',
            'fseek', 'fscanf', 'frexp', 'freopen', 'free', 'fread', 'fputs',
            'fputc', 'fprintf', 'fopen', 'fmod', 'floor', 'fgets', 'fgetpos',
            'fgetc', 'fflush', 'ferror', 'feof', 'fclose', 'fabs', 'exp',
            'exit', 'div', 'difftime', 'ctime', 'cosh', 'cos', 'clock',
            'clearerr', 'ceil', 'calloc', 'bsearch', 'atol', 'atoi', 'atof',
            'atexit', 'atan2', 'atan', 'assert', 'asin', 'asctime', 'acos',
            'abs', 'abort'
            ),
        // Data types (C, Objective-C, Cocoa)
        4 => array(
            'volatile', 'void', 'va_list', 'unsigned', 'union', 'typedef', 'tm',
            'time_t', 'struct', 'string', 'static', 'size_t',
            'signed', 'signal', 'short', 'SEL', 'register', 'raise',
            'ptrdiff_t', 'NSZone', 'NSRect', 'NSRange', 'NSPoint', 'long',
            'ldiv_t', 'jmp_buf', 'int', 'IMP', 'id', 'fpos_t', 'float', 'FILE',
            'extern', 'double', 'div_t', 'const', 'clock_t', 'Class', 'char',
            'BOOL', 'auto'
            ),
        // Foundation classes
        5 => array(
            'NSXMLParser', 'NSXMLNode', 'NSXMLElement', 'NSXMLDTDNode',
            'NSXMLDTD', 'NSXMLDocument', 'NSWhoseSpecifier',
            'NSValueTransformer', 'NSValue', 'NSUserDefaults', 'NSURLResponse',
            'NSURLRequest', 'NSURLProtocol', 'NSURLProtectionSpace',
            'NSURLHandle', 'NSURLDownload', 'NSURLCredentialStorage',
            'NSURLCredential', 'NSURLConnection', 'NSURLCache',
            'NSURLAuthenticationChallenge', 'NSURL', 'NSUniqueIDSpecifier',
            'NSUndoManager', 'NSUnarchiver', 'NSTimeZone', 'NSTimer',
            'NSThread', 'NSTask', 'NSString', 'NSStream', 'NSSpellServer',
            'NSSpecifierTest', 'NSSortDescriptor', 'NSSocketPortNameServer',
            'NSSocketPort', 'NSSetCommand', 'NSSet', 'NSSerializer',
            'NSScriptWhoseTest', 'NSScriptSuiteRegistry',
            'NSScriptObjectSpecifier', 'NSScriptExecutionContext',
            'NSScriptCommandDescription', 'NSScriptCommand',
            'NSScriptCoercionHandler', 'NSScriptClassDescription', 'NSScanner',
            'NSRunLoop', 'NSRelativeSpecifier', 'NSRecursiveLock',
            'NSRangeSpecifier', 'NSRandomSpecifier', 'NSQuitCommand', 'NSProxy',
            'NSProtocolChecker', 'NSPropertySpecifier',
            'NSPropertyListSerialization', 'NSProcessInfo', 'NSPredicate',
            'NSPositionalSpecifier', 'NSPortNameServer', 'NSPortMessage',
            'NSPortCoder', 'NSPort', 'NSPointerFunctions', 'NSPointerArray',
            'NSPipe', 'NSOutputStream', 'NSOperationQueue', 'NSOperation',
            'NSObject', 'NSNumberFormatter', 'NSNumber', 'NSNull',
            'NSNotificationQueue', 'NSNotificationCenter', 'NSNotification',
            'NSNetServiceBrowser', 'NSNetService', 'NSNameSpecifier',
            'NSMutableURLRequest', 'NSMutableString', 'NSMutableSet',
            'NSMutableIndexSet', 'NSMutableDictionary', 'NSMutableData',
            'NSMutableCharacterSet', 'NSMutableAttributedString',
            'NSMutableArray', 'NSMoveCommand', 'NSMiddleSpecifier',
            'NSMethodSignature', 'NSMetadataQueryResultGroup',
            'NSMetadataQueryAttributeValueTuple', 'NSMetadataQuery',
            'NSMetadataItem', 'NSMessagePortNameServer', 'NSMessagePort',
            'NSMapTable', 'NSMachPort', 'NSMachBootstrapServer',
            'NSLogicalTest', 'NSLock', 'NSLocale', 'NSKeyedUnarchiver',
            'NSKeyedArchiver', 'NSInvocationOperation', 'NSInvocation',
            'NSInputStream', 'NSIndexSpecifier', 'NSIndexSet', 'NSIndexPath',
            'NSHTTPURLResponse', 'NSHTTPCookieStorage', 'NSHTTPCookie',
            'NSHost', 'NSHashTable', 'NSGetCommand', 'NSGarbageCollector',
            'NSFormatter', 'NSFileManager', 'NSFileHandle', 'NSExpression',
            'NSExistsCommand', 'NSException', 'NSError', 'NSEnumerator',
            'NSDistributedNotificationCenter', 'NSDistributedLock',
            'NSDistantObjectRequest', 'NSDistantObject',
            'NSDirectoryEnumerator', 'NSDictionary', 'NSDeserializer',
            'NSDeleteCommand', 'NSDecimalNumberHandler', 'NSDecimalNumber',
            'NSDateFormatter', 'NSDateComponents', 'NSDate', 'NSData',
            'NSCreateCommand', 'NSCountedSet', 'NSCountCommand', 'NSConnection',
            'NSConditionLock', 'NSCondition', 'NSCompoundPredicate',
            'NSComparisonPredicate', 'NSCoder', 'NSCloseCommand',
            'NSCloneCommand', 'NSClassDescription', 'NSCharacterSet',
            'NSCalendarDate', 'NSCalendar', 'NSCachedURLResponse', 'NSBundle',
            'NSAutoreleasePool', 'NSAttributedString', 'NSAssertionHandler',
            'NSArray', 'NSArchiver', 'NSAppleScript', 'NSAppleEventManager',
            'NSAppleEventDescriptor', 'NSAffineTransform'
            ),
        // Foundation protocols
        6 => array(
            'NSURLProtocolClient', 'NSURLHandleClient', 'NSURLClient',
            'NSURLAuthenticationChallengeSender', 'NSScriptObjectSpecifiers',
            'NSScriptKeyValueCoding', 'NSScriptingComparisonMethods',
            'NSObjCTypeSerializationCallBack', 'NSMutableCopying',
            'NSLocking', 'NSKeyValueObserving', 'NSKeyValueCoding',
            'NSFastEnumeration', 'NSErrorRecoveryAttempting',
            'NSDecimalNumberBehaviors', 'NSCopying', 'NSComparisonMethods',
            'NSCoding'
            ),
        // AppKit classes
        7 => array(
            'NSWorkspace', 'NSWindowController', 'NSWindow', 'NSViewController',
            'NSViewAnimation', 'NSView', 'NSUserDefaultsController',
            'NSTypesetter', 'NSTreeNode', 'NSTreeController', 'NSTrackingArea',
            'NSToolbarItemGroup', 'NSToolbarItem', 'NSToolbar',
            'NSTokenFieldCell', 'NSTokenField', 'NSTextView',
            'NSTextTableBlock', 'NSTextTable', 'NSTextTab', 'NSTextStorage',
            'NSTextList', 'NSTextFieldCell', 'NSTextField', 'NSTextContainer',
            'NSTextBlock', 'NSTextAttachmentCell', 'NSTextAttachment', 'NSText',
            'NSTabViewItem', 'NSTabView', 'NSTableView', 'NSTableHeaderView',
            'NSTableHeaderCell', 'NSTableColumn', 'NSStepperCell', 'NSStepper',
            'NSStatusItem', 'NSStatusBar', 'NSSplitView', 'NSSpellChecker',
            'NSSpeechSynthesizer', 'NSSpeechRecognizer', 'NSSound',
            'NSSliderCell', 'NSSlider', 'NSSimpleHorizontalTypesetter',
            'NSShadow', 'NSSegmentedControl', 'NSSegmentedCell',
            'NSSecureTextFieldCell', 'NSSecureTextField', 'NSSearchFieldCell',
            'NSSearchField', 'NSScrollView', 'NSScroller', 'NSScreen',
            'NSSavePanel', 'NSRulerView', 'NSRulerMarker', 'NSRuleEditor',
            'NSResponder', 'NSQuickDrawView', 'NSProgressIndicator',
            'NSPrintPanel', 'NSPrintOperation', 'NSPrintInfo', 'NSPrinter',
            'NSPredicateEditorRowTemplate', 'NSPredicateEditor',
            'NSPopUpButtonCell', 'NSPopUpButton', 'NSPICTImageRep',
            'NSPersistentDocument', 'NSPDFImageRep', 'NSPathControl',
            'NSPathComponentCell', 'NSPathCell', 'NSPasteboard',
            'NSParagraphStyle', 'NSPanel', 'NSPageLayout', 'NSOutlineView',
            'NSOpenPanel', 'NSOpenGLView', 'NSOpenGLPixelFormat',
            'NSOpenGLPixelBuffer', 'NSOpenGLContext', 'NSObjectController',
            'NSNibOutletConnector', 'NSNibControlConnector', 'NSNibConnector',
            'NSNib', 'NSMutableParagraphStyle', 'NSMovieView', 'NSMovie',
            'NSMenuView', 'NSMenuItemCell', 'NSMenuItem', 'NSMenu', 'NSMatrix',
            'NSLevelIndicatorCell', 'NSLevelIndicator', 'NSLayoutManager',
            'NSInputServer', 'NSInputManager', 'NSImageView', 'NSImageRep',
            'NSImageCell', 'NSImage', 'NSHelpManager', 'NSGraphicsContext',
            'NSGradient', 'NSGlyphInfo', 'NSGlyphGenerator', 'NSFormCell',
            'NSForm', 'NSFontPanel', 'NSFontManager', 'NSFontDescriptor',
            'NSFont', 'NSFileWrapper', 'NSEvent', 'NSEPSImageRep', 'NSDrawer',
            'NSDocumentController', 'NSDocument', 'NSDockTile',
            'NSDictionaryController', 'NSDatePickerCell', 'NSDatePicker',
            'NSCustomImageRep', 'NSCursor', 'NSController', 'NSControl',
            'NSComboBoxCell', 'NSComboBox', 'NSColorWell', 'NSColorSpace',
            'NSColorPicker', 'NSColorPanel', 'NSColorList', 'NSColor',
            'NSCollectionViewItem', 'NSCollectionView', 'NSClipView',
            'NSCIImageRep', 'NSCell', 'NSCachedImageRep', 'NSButtonCell',
            'NSButton', 'NSBrowserCell', 'NSBrowser', 'NSBox',
            'NSBitmapImageRep', 'NSBezierPath', 'NSATSTypesetter',
            'NSArrayController', 'NSApplication', 'NSAnimationContext',
            'NSAnimation', 'NSAlert', 'NSActionCell'
            ),
        // AppKit protocols
        8 => array(
            'NSWindowScripting', 'NSValidatedUserInterfaceItem',
            'NSUserInterfaceValidations', 'NSToolTipOwner',
            'NSToolbarItemValidation', 'NSTextInput',
            'NSTableDataSource', 'NSServicesRequests',
            'NSPrintPanelAccessorizing', 'NSPlaceholders',
            'NSPathControlDelegate', 'NSPathCellDelegate',
            'NSOutlineViewDataSource', 'NSNibAwaking', 'NSMenuValidation',
            'NSKeyValueBindingCreation', 'NSInputServiceProvider',
            'NSInputServerMouseTracker', 'NSIgnoreMisspelledWords',
            'NSGlyphStorage', 'NSFontPanelValidation', 'NSEditorRegistration',
            'NSEditor', 'NSDraggingSource', 'NSDraggingInfo',
            'NSDraggingDestination', 'NSDictionaryControllerKeyValuePair',
            'NSComboBoxDataSource', 'NSComboBoxCellDataSource',
            'NSColorPickingDefault', 'NSColorPickingCustom', 'NSChangeSpelling',
            'NSAnimatablePropertyContainer', 'NSAccessibility'
            ),
        // CoreData classes
        9 => array(
            'NSRelationshipDescription', 'NSPropertyMapping',
            'NSPropertyDescription', 'NSPersistentStoreCoordinator',
            'NSPersistentStore', 'NSMigrationManager', 'NSMappingModel',
            'NSManagedObjectModel', 'NSManagedObjectID',
            'NSManagedObjectContext', 'NSManagedObject',
            'NSFetchRequestExpression', 'NSFetchRequest',
            'NSFetchedPropertyDescription', 'NSEntityMigrationPolicy',
            'NSEntityMapping', 'NSEntityDescription', 'NSAttributeDescription',
            'NSAtomicStoreCacheNode', 'NSAtomicStore'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']', '=', '+', '-', '*', '/', '!', '%', '^', '&', ':'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => true,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true,
        7 => true,
        8 => true,
        9 => true
        ),
    // Define the colors for the groups listed above
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #a61390;', // Objective-C keywords
            2 => 'color: #a61390;', // Macros and constants
            3 => 'color: #a61390;', // C standard library functions
            4 => 'color: #a61390;', // data types
            5 => 'color: #400080;', // Foundation classes
            6 => 'color: #2a6f76;', // Foundation protocols
            7 => 'color: #400080;', // AppKit classes
            8 => 'color: #2a6f76;', // AppKit protocols
            9 => 'color: #400080;' // CoreData classes
            ),
        'COMMENTS' => array(
            1 => 'color: #6e371a;', // Preprocessor directives
            2 => 'color: #11740a; font-style: italic;', // Normal C single-line comments
            3 => 'color: #bf1d1a;', // Q-sign in front of Strings
            'MULTI' => 'color: #11740a; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #2400d9;'
            ),
        'BRACKETS' => array(
            0 => 'color: #002200;'
            ),
        'STRINGS' => array(
            0 => 'color: #bf1d1a;'
            ),
        'NUMBERS' => array(
            0 => 'color: #2400d9;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #002200;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => 'http://www.opengroup.org/onlinepubs/009695399/functions/{FNAME}.html',
        4 => '',
        5 => 'http://developer.apple.com/documentation/Cocoa/Reference/Foundation/Classes/{FNAME}_Class/',
        6 => 'http://developer.apple.com/documentation/Cocoa/Reference/Foundation/Protocols/{FNAME}_Protocol/',
        7 => 'http://developer.apple.com/documentation/Cocoa/Reference/ApplicationKit/Classes/{FNAME}_Class/',
        8 => 'http://developer.apple.com/documentation/Cocoa/Reference/ApplicationKit/Protocols/{FNAME}_Protocol/',
        9 => 'http://developer.apple.com/documentation/Cocoa/Reference/CoreDataFramework/Classes/{FNAME}_Class/'
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
        )
);

?>
