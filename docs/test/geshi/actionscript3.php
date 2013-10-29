<?php
/*************************************************************************************
 * actionscript3.php
 * ----------------
 * Author: Jordi Boggiano (j.boggiano@seld.be)
 * Copyright: (c) 2007 Jordi Boggiano (http://www.seld.be/), Benny Baumann (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2007/11/26
 *
 * ActionScript3 language file for GeSHi.
 *
 * All keywords scraped from the Flex 2.0.1 Documentation
 *
 * The default style is based on FlexBuilder2 coloring, with the addition of class, package, method and
 * constant names that are highlighted to help identifying problem when used on public pastebins.
 *
 * For styling, keywords data from 0 to 1 (accessible through .kw1, etc.) are described here :
 *
 *   1 : operators
 *   2 : 'var' keyword
 *   3 : 'function' keyword
 *   4 : 'class' and 'package' keywords
 *   5 : all flash.* class names plus Top Level classes, mx are excluded
 *   6 : all flash.* package names, mx are excluded
 *   7 : valid flash method names and properties (there is no type checks sadly, for example String().x will be highlighted as 'x' is valid, but obviously strings don't have a x property)
 *   8 : valid flash constant names (again, no type check)
 *
 *
 * CHANGES
 * -------
 * 2007/12/06 (1.0.7.22)
 *  -  Added the 'this' keyword (oops)
 *
 * TODO (updated 2007/11/30)
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
    'LANG_NAME' => 'ActionScript 3',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        //Regular expressions
        2 => "/(?<=[\\s^])(s|tr|y)\\/(?!\s)(?:\\\\.|(?!\n)[^\\/\\\\])+(?<!\s)\\/(?!\s)(?:\\\\.|(?!\n)[^\\/\\\\])*(?<!\s)\\/[msixpogcde]*(?=[\\s$\\.\\;])|(?<=[\\s^(=])(m|q[qrwx]?)?\\/(?!\s)(?:\\\\.|(?!\n)[^\\/\\\\])+(?<!\s)\\/[msixpogc]*(?=[\\s$\\.\\,\\;\\)])/iU",
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'with', 'while', 'void', 'undefined', 'typeof', 'try', 'true',
            'throw', 'this', 'switch', 'super', 'set', 'return', 'public', 'protected',
            'private', 'null', 'new', 'is', 'internal', 'instanceof', 'in',
            'import', 'if', 'get', 'for', 'false', 'else', 'each', 'do',
            'delete', 'default', 'continue', 'catch', 'case', 'break', 'as',
            'extends', 'override'
            ),
        2 => array(
            'var'
            ),
        3 => array(
            'function'
            ),
        4 => array(
            'class', 'package'
            ),
        6 => array(
            'flash.xml', 'flash.utils', 'flash.ui', 'flash.text',
            'flash.system', 'flash.profiler', 'flash.printing', 'flash.net',
            'flash.media', 'flash.geom', 'flash.filters', 'flash.external',
            'flash.events', 'flash.errors', 'flash.display',
            'flash.accessibility'
            ),
        7 => array(
            'zoom', 'year', 'y', 'xmlDecl', 'x', 'writeUnsignedInt',
            'writeUTFBytes', 'writeUTF', 'writeShort', 'writeObject',
            'writeMultiByte', 'writeInt', 'writeFloat', 'writeExternal',
            'writeDynamicProperty', 'writeDynamicProperties', 'writeDouble',
            'writeBytes', 'writeByte', 'writeBoolean', 'wordWrap',
            'willTrigger', 'width', 'volume', 'visible', 'videoWidth',
            'videoHeight', 'version', 'valueOf', 'value', 'usingTLS',
            'useRichTextClipboard', 'useHandCursor', 'useEchoSuppression',
            'useCodePage', 'url', 'uri', 'uploadCompleteData', 'upload',
            'updateProperties', 'updateAfterEvent', 'upState', 'unshift',
            'unlock', 'unload', 'union', 'unescapeMultiByte', 'unescape',
            'underline', 'uncompress', 'type', 'ty', 'tx', 'transparent',
            'translate', 'transformPoint', 'transform', 'trackAsMenu', 'track',
            'trace', 'totalMemory', 'totalFrames', 'topLeft', 'top',
            'togglePause', 'toXMLString', 'toUpperCase', 'toUTCString',
            'toTimeString', 'toString', 'toPrecision', 'toLowerCase',
            'toLocaleUpperCase', 'toLocaleTimeString', 'toLocaleString',
            'toLocaleLowerCase', 'toLocaleDateString', 'toFixed',
            'toExponential', 'toDateString', 'timezoneOffset', 'timerComplete',
            'timer', 'time', 'threshold', 'thickness', 'textWidth',
            'textSnapshot', 'textInput', 'textHeight', 'textColor', 'text',
            'test', 'target', 'tan', 'tabStops', 'tabIndexChange', 'tabIndex',
            'tabEnabledChange', 'tabEnabled', 'tabChildrenChange',
            'tabChildren', 'sync', 'swfVersion', 'swapChildrenAt',
            'swapChildren', 'subtract', 'substring', 'substr', 'styleSheet',
            'styleNames', 'strength', 'stopPropagation',
            'stopImmediatePropagation', 'stopDrag', 'stopAll', 'stop', 'status',
            'startDrag', 'start', 'stageY', 'stageX', 'stageWidth',
            'stageHeight', 'stageFocusRect', 'stage', 'sqrt', 'split', 'splice',
            'source', 'soundTransform', 'soundComplete', 'sortOn', 'sort',
            'songName', 'some', 'socketData', 'smoothing', 'slice', 'size',
            'sin', 'silent', 'silenceTimeout', 'silenceLevel', 'showSettings',
            'showRedrawRegions', 'showDefaultContextMenu', 'show', 'shortcut',
            'shiftKey', 'shift', 'sharpness', 'sharedEvents', 'shadowColor',
            'shadowAlpha', 'settings', 'setUseEchoSuppression', 'setUTCSeconds',
            'setUTCMonth', 'setUTCMinutes', 'setUTCMilliseconds', 'setUTCHours',
            'setUTCFullYear', 'setUTCDate', 'setTimeout', 'setTime',
            'setTextFormat', 'setStyle', 'setSilenceLevel', 'setSettings',
            'setSelection', 'setSelected', 'setSelectColor', 'setSeconds',
            'setQuality', 'setPropertyIsEnumerable', 'setProperty', 'setPixels',
            'setPixel32', 'setPixel', 'setNamespace', 'setName',
            'setMotionLevel', 'setMonth', 'setMode', 'setMinutes',
            'setMilliseconds', 'setLoopback', 'setLoopBack', 'setLocalName',
            'setKeyFrameInterval', 'setInterval', 'setHours', 'setFullYear',
            'setEmpty', 'setDirty', 'setDate', 'setCompositionString',
            'setClipboard', 'setChildren', 'setChildIndex',
            'setAdvancedAntiAliasingTable', 'serverString', 'separatorBefore',
            'sendToURL', 'send', 'selectionEndIndex', 'selectionBeginIndex',
            'selectable', 'select', 'seek', 'securityError', 'securityDomain',
            'secondsUTC', 'seconds', 'search', 'scrollV', 'scrollRect',
            'scrollH', 'scroll', 'screenResolutionY', 'screenResolutionX',
            'screenDPI', 'screenColor', 'scenes', 'scaleY', 'scaleX',
            'scaleMode', 'scale9Grid', 'scale', 'save', 'sandboxType',
            'sameDomain', 'running', 'round', 'rotation', 'rotate', 'root',
            'rollOver', 'rollOut', 'rightToRight', 'rightToLeft', 'rightPeak',
            'rightMargin', 'right', 'rewind', 'reverse', 'resume', 'restrict',
            'resize', 'reset', 'requestHeaders', 'replaceText',
            'replaceSelectedText', 'replace', 'repeatCount', 'render',
            'removedFromStage', 'removed', 'removeNode', 'removeNamespace',
            'removeEventListener', 'removeChildAt', 'removeChild',
            'relatedObject', 'registerFont', 'registerClassAlias', 'redOffset',
            'redMultiplier', 'rect', 'receiveVideo', 'receiveAudio',
            'readUnsignedShort', 'readUnsignedInt', 'readUnsignedByte',
            'readUTFBytes', 'readUTF', 'readShort', 'readObject',
            'readMultiByte', 'readInt', 'readFloat', 'readExternal',
            'readDouble', 'readBytes', 'readByte', 'readBoolean', 'ratios',
            'rate', 'random', 'quality', 'push', 'publish', 'proxyType',
            'prototype', 'propertyIsEnumerable', 'progress',
            'processingInstructions', 'printAsBitmap', 'print',
            'previousSibling', 'preventDefault', 'prevScene', 'prevFrame',
            'prettyPrinting', 'prettyIndent', 'preserveAlpha', 'prependChild',
            'prefix', 'pow', 'position', 'pop', 'polar', 'playerType', 'play',
            'pixelSnapping', 'pixelDissolve', 'pixelBounds', 'pixelAspectRatio',
            'perlinNoise', 'pause', 'parseXML', 'parseInt', 'parseFloat',
            'parseCSS', 'parse', 'parentNode', 'parentDomain',
            'parentAllowsChild', 'parent', 'parameters', 'paperWidth',
            'paperHeight', 'pan', 'paletteMap', 'pageWidth', 'pageHeight',
            'overState', 'outsideCutoff', 'os', 'orientation', 'open',
            'opaqueBackground', 'onPlayStatus', 'onMetaData', 'onCuePoint',
            'offsetPoint', 'offset', 'objectID', 'objectEncoding', 'numLock',
            'numLines', 'numFrames', 'numChildren', 'normalize', 'noise',
            'nodeValue', 'nodeType', 'nodeName', 'nodeKind', 'noAutoLabeling',
            'nextValue', 'nextSibling', 'nextScene', 'nextNameIndex',
            'nextName', 'nextFrame', 'netStatus', 'navigateToURL',
            'namespaceURI', 'namespaceDeclarations', 'namespace', 'names',
            'name', 'muted', 'multiline', 'moveTo', 'mouseY', 'mouseX',
            'mouseWheelEnabled', 'mouseWheel', 'mouseUp', 'mouseTarget',
            'mouseOver', 'mouseOut', 'mouseMove', 'mouseLeave',
            'mouseFocusChange', 'mouseEnabled', 'mouseDown', 'mouseChildren',
            'motionTimeout', 'motionLevel', 'monthUTC', 'month',
            'modificationDate', 'mode', 'minutesUTC', 'minutes', 'min',
            'millisecondsUTC', 'milliseconds', 'method', 'message', 'merge',
            'menuSelect', 'menuItemSelect', 'maxScrollV', 'maxScrollH',
            'maxLevel', 'maxChars', 'max', 'matrixY', 'matrixX', 'matrix',
            'match', 'mask', 'mapPoint', 'mapBitmap', 'map', 'manufacturer',
            'macType', 'loopback', 'loop', 'log', 'lock', 'localeCompare',
            'localY', 'localX', 'localToGlobal', 'localName',
            'localFileReadDisable', 'loaderURL', 'loaderInfo', 'loader',
            'loadPolicyFile', 'loadBytes', 'load', 'liveDelay', 'link',
            'lineTo', 'lineStyle', 'lineGradientStyle', 'level',
            'letterSpacing', 'length', 'leftToRight', 'leftToLeft', 'leftPeak',
            'leftMargin', 'left', 'leading', 'lastIndexOf', 'lastIndex',
            'lastChild', 'language', 'labels', 'knockout', 'keyUp',
            'keyLocation', 'keyFrameInterval', 'keyFocusChange', 'keyDown',
            'keyCode', 'kerning', 'join', 'italic', 'isXMLName',
            'isPrototypeOf', 'isNaN', 'isFocusInaccessible', 'isFinite',
            'isEmpty', 'isDefaultPrevented', 'isDebugger', 'isBuffering',
            'isAttribute', 'isAccessible', 'ioError', 'invert', 'invalidate',
            'intersects', 'intersection', 'interpolate', 'insideCutoff',
            'insertChildBefore', 'insertChildAfter', 'insertBefore', 'inner',
            'init', 'info', 'inflatePoint', 'inflate', 'indexOf', 'index',
            'indent', 'inScopeNamespaces', 'imeComposition', 'ime',
            'ignoreWhitespace', 'ignoreWhite', 'ignoreProcessingInstructions',
            'ignoreComments', 'ignoreCase', 'identity', 'idMap', 'id3',
            'httpStatus', 'htmlText', 'hoursUTC', 'hours', 'hitTestTextNearPos',
            'hitTestState', 'hitTestPoint', 'hitTestObject', 'hitTest',
            'hitArea', 'highlightColor', 'highlightAlpha', 'hideObject',
            'hideBuiltInItems', 'hide', 'height', 'hasVideoEncoder', 'hasTLS',
            'hasStreamingVideo', 'hasStreamingAudio', 'hasSimpleContent',
            'hasScreenPlayback', 'hasScreenBroadcast', 'hasProperty',
            'hasPrinting', 'hasOwnProperty', 'hasMP3', 'hasIME', 'hasGlyphs',
            'hasEventListener', 'hasEmbeddedVideo', 'hasDefinition',
            'hasComplexContent', 'hasChildNodes', 'hasAudioEncoder', 'hasAudio',
            'hasAccessibility', 'gridFitType', 'greenOffset', 'greenMultiplier',
            'graphics', 'gotoAndStop', 'gotoAndPlay', 'globalToLocal', 'global',
            'getUTCSeconds', 'getUTCMonth', 'getUTCMinutes',
            'getUTCMilliseconds', 'getUTCHours', 'getUTCFullYear', 'getUTCDay',
            'getUTCDate', 'getTimezoneOffset', 'getTimer', 'getTime',
            'getTextRunInfo', 'getTextFormat', 'getText', 'getStyle',
            'getStackTrace', 'getSelectedText', 'getSelected', 'getSeconds',
            'getRemote', 'getRect', 'getQualifiedSuperclassName',
            'getQualifiedClassName', 'getProperty', 'getPrefixForNamespace',
            'getPixels', 'getPixel32', 'getPixel', 'getParagraphLength',
            'getObjectsUnderPoint', 'getNamespaceForPrefix', 'getMonth',
            'getMinutes', 'getMilliseconds', 'getMicrophone', 'getLocal',
            'getLineText', 'getLineOffset', 'getLineMetrics', 'getLineLength',
            'getLineIndexOfChar', 'getLineIndexAtPoint', 'getImageReference',
            'getHours', 'getFullYear', 'getFirstCharInParagraph',
            'getDescendants', 'getDefinitionByName', 'getDefinition', 'getDay',
            'getDate', 'getColorBoundsRect', 'getClassByAlias', 'getChildIndex',
            'getChildByName', 'getChildAt', 'getCharIndexAtPoint',
            'getCharBoundaries', 'getCamera', 'getBounds', 'genre',
            'generateFilterRect', 'gain', 'fullYearUTC', 'fullYear',
            'fullScreen', 'fscommand', 'fromCharCode', 'framesLoaded',
            'frameRate', 'frame', 'fps', 'forwardAndBack', 'formatToString',
            'forceSimple', 'forEach', 'fontType', 'fontStyle', 'fontSize',
            'fontName', 'font', 'focusRect', 'focusOut', 'focusIn', 'focus',
            'flush', 'floor', 'floodFill', 'firstChild', 'findText', 'filters',
            'filter', 'fillRect', 'fileList', 'extension', 'extended', 'exp',
            'exec', 'exactSettings', 'every', 'eventPhase', 'escapeMultiByte',
            'escape', 'errorID', 'error', 'equals', 'enumerateFonts',
            'enterFrame', 'endian', 'endFill', 'encodeURIComponent',
            'encodeURI', 'enabled', 'embedFonts', 'elements',
            'dynamicPropertyWriter', 'dropTarget', 'drawRoundRect', 'drawRect',
            'drawEllipse', 'drawCircle', 'draw', 'download', 'downState',
            'doubleClickEnabled', 'doubleClick', 'dotall', 'domain',
            'docTypeDecl', 'doConversion', 'divisor', 'distance', 'dispose',
            'displayState', 'displayMode', 'displayAsPassword', 'dispatchEvent',
            'description', 'describeType', 'descent', 'descendants',
            'deltaTransformPoint', 'delta', 'deleteProperty', 'delay',
            'defaultTextFormat', 'defaultSettings', 'defaultObjectEncoding',
            'decodeURIComponent', 'decodeURI', 'decode', 'deblocking',
            'deactivate', 'dayUTC', 'day', 'dateUTC', 'date', 'dataFormat',
            'data', 'd', 'customItems', 'curveTo', 'currentTarget',
            'currentScene', 'currentLabels', 'currentLabel', 'currentFrame',
            'currentFPS', 'currentDomain', 'currentCount', 'ctrlKey', 'creator',
            'creationDate', 'createTextNode', 'createGradientBox',
            'createElement', 'createBox', 'cos', 'copyPixels', 'copyChannel',
            'copy', 'conversionMode', 'contextMenuOwner', 'contextMenu',
            'contentType', 'contentLoaderInfo', 'content', 'containsRect',
            'containsPoint', 'contains', 'constructor', 'connectedProxyType',
            'connected', 'connect', 'condenseWhite', 'concatenatedMatrix',
            'concatenatedColorTransform', 'concat', 'computeSpectrum',
            'compress', 'componentY', 'componentX', 'complete', 'compare',
            'comments', 'comment', 'colors', 'colorTransform', 'color', 'code',
            'close', 'cloneNode', 'clone', 'client', 'click', 'clearTimeout',
            'clearInterval', 'clear', 'clamp', 'children', 'childNodes',
            'childIndex', 'childAllowsParent', 'child', 'checkPolicyFile',
            'charCount', 'charCodeAt', 'charCode', 'charAt', 'changeList',
            'change', 'ceil', 'caretIndex', 'caption', 'capsLock', 'cancelable',
            'cancel', 'callee', 'callProperty', 'call', 'cacheAsBitmap', 'c',
            'bytesTotal', 'bytesLoaded', 'bytesAvailable', 'buttonMode',
            'buttonDown', 'bullet', 'builtInItems', 'bufferTime',
            'bufferLength', 'bubbles', 'browse', 'bottomScrollV', 'bottomRight',
            'bottom', 'borderColor', 'border', 'bold', 'blurY', 'blurX',
            'blueOffset', 'blueMultiplier', 'blockIndent', 'blendMode',
            'bitmapData', 'bias', 'beginGradientFill', 'beginFill',
            'beginBitmapFill', 'bandwidth', 'backgroundColor', 'background',
            'b', 'available', 'avHardwareDisable', 'autoSize', 'attributes',
            'attribute', 'attachNetStream', 'attachCamera', 'attachAudio',
            'atan2', 'atan', 'asyncError', 'asin', 'ascent', 'artist',
            'areSoundsInaccessible', 'areInaccessibleObjectsUnderPoint',
            'applyFilter', 'apply', 'applicationDomain', 'appendText',
            'appendChild', 'antiAliasType', 'angle', 'alwaysShowSelection',
            'altKey', 'alphas', 'alphaOffset', 'alphaMultiplier', 'alpha',
            'allowInsecureDomain', 'allowDomain', 'align', 'album',
            'addedToStage', 'added', 'addPage', 'addNamespace', 'addHeader',
            'addEventListener', 'addChildAt', 'addChild', 'addCallback', 'add',
            'activityLevel', 'activity', 'active', 'activating', 'activate',
            'actionScriptVersion', 'acos', 'accessibilityProperties', 'abs'
            ),
        8 => array(
            'WRAP', 'VERTICAL', 'VARIABLES',
            'UTC', 'UPLOAD_COMPLETE_DATA', 'UP', 'UNLOAD', 'UNKNOWN',
            'UNIQUESORT', 'TOP_RIGHT', 'TOP_LEFT', 'TOP', 'TIMER_COMPLETE',
            'TIMER', 'TEXT_NODE', 'TEXT_INPUT', 'TEXT', 'TAB_INDEX_CHANGE',
            'TAB_ENABLED_CHANGE', 'TAB_CHILDREN_CHANGE', 'TAB', 'SYNC',
            'SUBTRACT', 'SUBPIXEL', 'STATUS', 'STANDARD', 'SQUARE', 'SQRT2',
            'SQRT1_2', 'SPACE', 'SOUND_COMPLETE', 'SOCKET_DATA', 'SHOW_ALL',
            'SHIFT', 'SETTINGS_MANAGER', 'SELECT', 'SECURITY_ERROR', 'SCROLL',
            'SCREEN', 'ROUND', 'ROLL_OVER', 'ROLL_OUT', 'RIGHT', 'RGB',
            'RETURNINDEXEDARRAY', 'RESIZE', 'REPEAT', 'RENDER',
            'REMOVED_FROM_STAGE', 'REMOVED', 'REMOTE', 'REGULAR', 'REFLECT',
            'RED', 'RADIAL', 'PROGRESS', 'PRIVACY', 'POST', 'POSITIVE_INFINITY',
            'PORTRAIT', 'PIXEL', 'PI', 'PENDING', 'PAGE_UP', 'PAGE_DOWN', 'PAD',
            'OVERLAY', 'OUTER', 'OPEN', 'NaN', 'NUM_PAD', 'NUMPAD_SUBTRACT',
            'NUMPAD_MULTIPLY', 'NUMPAD_ENTER', 'NUMPAD_DIVIDE',
            'NUMPAD_DECIMAL', 'NUMPAD_ADD', 'NUMPAD_9', 'NUMPAD_8', 'NUMPAD_7',
            'NUMPAD_6', 'NUMPAD_5', 'NUMPAD_4', 'NUMPAD_3', 'NUMPAD_2',
            'NUMPAD_1', 'NUMPAD_0', 'NUMERIC', 'NO_SCALE', 'NO_BORDER',
            'NORMAL', 'NONE', 'NEVER', 'NET_STATUS', 'NEGATIVE_INFINITY',
            'MULTIPLY', 'MOUSE_WHEEL', 'MOUSE_UP', 'MOUSE_OVER', 'MOUSE_OUT',
            'MOUSE_MOVE', 'MOUSE_LEAVE', 'MOUSE_FOCUS_CHANGE', 'MOUSE_DOWN',
            'MITER', 'MIN_VALUE', 'MICROPHONE', 'MENU_SELECT',
            'MENU_ITEM_SELECT', 'MEDIUM', 'MAX_VALUE', 'LOW', 'LOG2E', 'LOG10E',
            'LOCAL_WITH_NETWORK', 'LOCAL_WITH_FILE', 'LOCAL_TRUSTED',
            'LOCAL_STORAGE', 'LN2', 'LN10', 'LITTLE_ENDIAN', 'LINK',
            'LINEAR_RGB', 'LINEAR', 'LIGHT_COLOR', 'LIGHTEN', 'LEFT', 'LCD',
            'LAYER', 'LANDSCAPE', 'KOREAN', 'KEY_UP', 'KEY_FOCUS_CHANGE',
            'KEY_DOWN', 'JUSTIFY', 'JAPANESE_KATAKANA_HALF',
            'JAPANESE_KATAKANA_FULL', 'JAPANESE_HIRAGANA', 'Infinity', 'ITALIC',
            'IO_ERROR', 'INVERT', 'INSERT', 'INPUT', 'INNER', 'INIT',
            'IME_COMPOSITION', 'IGNORE', 'ID3', 'HTTP_STATUS', 'HORIZONTAL',
            'HOME', 'HIGH', 'HARDLIGHT', 'GREEN', 'GET', 'FULLSCREEN', 'FULL',
            'FOCUS_OUT', 'FOCUS_IN', 'FLUSHED', 'FLASH9', 'FLASH8', 'FLASH7',
            'FLASH6', 'FLASH5', 'FLASH4', 'FLASH3', 'FLASH2', 'FLASH1', 'F9',
            'F8', 'F7', 'F6', 'F5', 'F4', 'F3', 'F2', 'F15', 'F14', 'F13',
            'F12', 'F11', 'F10', 'F1', 'EXACT_FIT', 'ESCAPE', 'ERROR', 'ERASE',
            'ENTER_FRAME', 'ENTER', 'END', 'EMBEDDED', 'ELEMENT_NODE', 'E',
            'DYNAMIC', 'DOWN', 'DOUBLE_CLICK', 'DIFFERENCE', 'DEVICE',
            'DESCENDING', 'DELETE', 'DEFAULT', 'DEACTIVATE', 'DATA',
            'DARK_COLOR', 'DARKEN', 'CRT', 'CONTROL', 'CONNECT', 'COMPLETE',
            'COLOR', 'CLOSE', 'CLICK', 'CLAMP', 'CHINESE', 'CHANGE', 'CENTER',
            'CASEINSENSITIVE', 'CAPTURING_PHASE', 'CAPS_LOCK', 'CANCEL',
            'CAMERA', 'BUBBLING_PHASE', 'BOTTOM_RIGHT', 'BOTTOM_LEFT', 'BOTTOM',
            'BOLD_ITALIC', 'BOLD', 'BLUE', 'BINARY', 'BIG_ENDIAN', 'BEVEL',
            'BEST', 'BACKSPACE', 'AUTO', 'AT_TARGET', 'ASYNC_ERROR', 'AMF3',
            'AMF0', 'ALWAYS', 'ALPHANUMERIC_HALF', 'ALPHANUMERIC_FULL', 'ALPHA',
            'ADVANCED', 'ADDED_TO_STAGE', 'ADDED', 'ADD', 'ACTIVITY',
            'ACTIONSCRIPT3', 'ACTIONSCRIPT2'
            ),
        //FIX: Must be last in order to avoid conflicts with keywords present
        //in other keyword groups, that might get highlighted as part of the URL.
        //I know this is not a proper work-around, but should do just fine.
        5 => array(
            'uint', 'int', 'arguments', 'XMLSocket', 'XMLNodeType', 'XMLNode',
            'XMLList', 'XMLDocument', 'XML', 'Video', 'VerifyError',
            'URLVariables', 'URLStream', 'URLRequestMethod', 'URLRequestHeader',
            'URLRequest', 'URLLoaderDataFormat', 'URLLoader', 'URIError',
            'TypeError', 'Transform', 'TimerEvent', 'Timer', 'TextSnapshot',
            'TextRenderer', 'TextLineMetrics', 'TextFormatAlign', 'TextFormat',
            'TextFieldType', 'TextFieldAutoSize', 'TextField', 'TextEvent',
            'TextDisplayMode', 'TextColorType', 'System', 'SyntaxError',
            'SyncEvent', 'StyleSheet', 'String', 'StatusEvent', 'StaticText',
            'StageScaleMode', 'StageQuality', 'StageAlign', 'Stage',
            'StackOverflowError', 'Sprite', 'SpreadMethod', 'SoundTransform',
            'SoundMixer', 'SoundLoaderContext', 'SoundChannel', 'Sound',
            'Socket', 'SimpleButton', 'SharedObjectFlushStatus', 'SharedObject',
            'Shape', 'SecurityPanel', 'SecurityErrorEvent', 'SecurityError',
            'SecurityDomain', 'Security', 'ScriptTimeoutError', 'Scene',
            'SWFVersion', 'Responder', 'RegExp', 'ReferenceError', 'Rectangle',
            'RangeError', 'QName', 'Proxy', 'ProgressEvent',
            'PrintJobOrientation', 'PrintJobOptions', 'PrintJob', 'Point',
            'PixelSnapping', 'ObjectEncoding', 'Object', 'Number', 'NetStream',
            'NetStatusEvent', 'NetConnection', 'Namespace', 'MovieClip',
            'MouseEvent', 'Mouse', 'MorphShape', 'Microphone', 'MemoryError',
            'Matrix', 'Math', 'LocalConnection', 'LoaderInfo', 'LoaderContext',
            'Loader', 'LineScaleMode', 'KeyboardEvent', 'Keyboard',
            'KeyLocation', 'JointStyle', 'InvalidSWFError',
            'InterpolationMethod', 'InteractiveObject', 'IllegalOperationError',
            'IOErrorEvent', 'IOError', 'IMEEvent', 'IMEConversionMode', 'IME',
            'IExternalizable', 'IEventDispatcher', 'IDynamicPropertyWriter',
            'IDynamicPropertyOutput', 'IDataOutput', 'IDataInput', 'ID3Info',
            'IBitmapDrawable', 'HTTPStatusEvent', 'GridFitType', 'Graphics',
            'GradientType', 'GradientGlowFilter', 'GradientBevelFilter',
            'GlowFilter', 'Function', 'FrameLabel', 'FontType', 'FontStyle',
            'Font', 'FocusEvent', 'FileReferenceList', 'FileReference',
            'FileFilter', 'ExternalInterface', 'EventPhase', 'EventDispatcher',
            'Event', 'EvalError', 'ErrorEvent', 'Error', 'Endian', 'EOFError',
            'DropShadowFilter', 'DisplayObjectContainer', 'DisplayObject',
            'DisplacementMapFilterMode', 'DisplacementMapFilter', 'Dictionary',
            'DefinitionError', 'Date', 'DataEvent', 'ConvolutionFilter',
            'ContextMenuItem', 'ContextMenuEvent', 'ContextMenuBuiltInItems',
            'ContextMenu', 'ColorTransform', 'ColorMatrixFilter', 'Class',
            'CapsStyle', 'Capabilities', 'Camera', 'CSMSettings', 'ByteArray',
            'Boolean', 'BlurFilter', 'BlendMode', 'BitmapFilterType',
            'BitmapFilterQuality', 'BitmapFilter', 'BitmapDataChannel',
            'BitmapData', 'Bitmap', 'BevelFilter', 'AsyncErrorEvent', 'Array',
            'ArgumentError', 'ApplicationDomain', 'AntiAliasType',
            'ActivityEvent', 'ActionScriptVersion', 'AccessibilityProperties',
            'Accessibility', 'AVM1Movie'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '{', '}', '!', '%', '&', '*', '|', '/', '<', '>', '^', '-', '+', '~', '?', ':', ';', '.', ','
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true,
        7 => true,
        8 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0033ff; font-weight: bold;',
            2 => 'color: #6699cc; font-weight: bold;',
            3 => 'color: #339966; font-weight: bold;',
            4 => 'color: #9900cc; font-weight: bold;',
            5 => 'color: #004993;',
            6 => 'color: #004993;',
            7 => 'color: #004993;',
            8 => 'color: #004993;'
            ),
        'COMMENTS' => array(
            1 => 'color: #009900; font-style: italic;',
            2 => 'color: #009966; font-style: italic;',
            'MULTI' => 'color: #3f5fbf;'
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #990000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #000000; font-weight:bold;'
            ),
        'METHODS' => array(
            0 => 'color: #000000;',
            ),
        'SYMBOLS' => array(
            0 => 'color: #000066; font-weight: bold;'
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
        4 => '',
        5 => 'http://www.google.com/search?q={FNAMEL}%20inurl:http://livedocs.adobe.com/flex/201/langref/%20inurl:{FNAMEL}.html',
        6 => '',
        7 => '',
        8 => ''
        ),
    'OOLANG' => false,//Save some time as OO identifiers aren't used
    'OBJECT_SPLITTERS' => array(
        // commented out because it's not very relevant for AS, as all properties, methods and constants are dot-accessed.
        // I believe it's preferable to have package highlighting for example, which is not possible with this enabled.
        // 0 => '.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array()
);

?>