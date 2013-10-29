<?php
/*************************************************************************************
 * bascomavr.php
 * ---------------------------------
 * Author: aquaticus.info
 * Copyright: (c) 2008 aquaticus.info
 * Release Version: 1.0.8.11
 * Date Started: 2008/01/09
 *
 * BASCOM AVR language file for GeSHi.
 *
 * You can find the BASCOM AVR Website at (www.mcselec.com/bascom-avr.htm)
 *
 * CHANGES
 * -------
 * 2008/01/09 (1.0.8.10)
 *  -  First Release
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
    'LANG_NAME' => 'BASCOM AVR',
    'COMMENT_SINGLE' => array(1 => "'"),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            // Navy Blue Bold Keywords
            '1WRESET' , '1WREAD' , '1WWRITE' , '1WSEARCHFIRST' , '1WSEARCHNEXT' ,'1WVERIFY' , '1WIRECOUNT',
            'CONFIG' , 'ACI' , 'ADC' , 'BCCARD' , 'CLOCK' , 'COM1' ,
            'COM2' , 'PS2EMU' , 'ATEMU' , 'I2CSLAVE' ,
            'INPUT', 'OUTPUT', 'GRAPHLCD' , 'KEYBOARD' , 'TIMER0' , 'TIMER1' ,
            'LCDBUS' , 'LCDMODE' , '1WIRE' , 'LCD' , 'SERIALOUT' ,
            'SERIALIN' , 'SPI' , 'LCDPIN' , 'SDA' , 'SCL' ,
            'WATCHDOG' , 'PORT' , 'COUNTER0', 'COUNTER1' , 'TCPIP' , 'TWISLAVE' ,
            'X10' , 'XRAM' , 'USB',
            'BCD' , 'GRAY2BIN' , 'BIN2GRAY' , 'BIN' , 'MAKEBCD' , 'MAKEDEC' , 'MAKEINT' , 'FORMAT' , 'FUSING' , 'BINVAL' ,
            'CRC8' , 'CRC16' , 'CRC16UNI' , 'CRC32' , 'HIGH' , 'HIGHW' , 'LOW',
            'DATE' , 'TIME'  , 'DATE$' , 'TIME$' , 'DAYOFWEEK' , 'DAYOFYEAR' , 'SECOFDAY' , 'SECELAPSED' , 'SYSDAY' , 'SYSSEC' , 'SYSSECELAPSED',
            'WAIT'  , 'WAITMS' , 'WAITUS' , 'DELAY',
            'BSAVE' , 'BLOAD' , 'GET' , 'VER' , 'DISKFREE' , 'DIR' , 'DriveReset' , 'DriveInit' , 'LINE' , 'INITFILESYSTEM' ,
            'EOF' , 'WRITE' , 'FLUSH' , 'FREEFILE' , 'FILEATTR' , 'FILEDATE' , 'FILETIME' , 'FILEDATETIME' , 'FILELEN' , 'SEEK' ,
            'KILL' , 'DriveGetIdentity' , 'DriveWriteSector' , 'DriveReadSector' , 'LOC' , 'LOF' , 'PUT' , 'OPEN' , 'CLOSE',
            'GLCDCMD' , 'GLCDDATA' , 'SETFONT' , 'PSET' , 'SHOWPIC' , 'SHOWPICE' , 'CIRCLE' , 'BOX',
            'I2CINIT' , 'I2CRECEIVE' , 'I2CSEND' , 'I2CSTART','I2CSTOP','I2CRBYTE','I2CWBYTE',
            'ALIAS' , 'BITWAIT' , 'TOGGLE' , 'RESET' , 'SET' , 'SHIFTIN' , 'SHIFTOUT' , 'DEBOUNCE' , 'PULSEIN' , 'PULSEOUT',
            'IDLE' , 'POWERDOWN' , 'POWERSAVE' , 'ON', 'INTERRUPT' , 'ENABLE' , 'DISABLE' , 'START' , 'VERSION' , 'CLOCKDIVISION' , 'CRYSTAL' , 'STOP',
            'ADR' , 'ADR2' , 'WRITEEEPROM' , 'CPEEK' , 'CPEEKH' , 'PEEK' , 'POKE' , 'OUT' , 'READEEPROM' , 'DATA' , 'INP' , 'READ' , 'RESTORE' , 'LOOKDOWN' , 'LOOKUP' , 'LOOKUPSTR' , 'LOAD' , 'LOADADR' , 'LOADLABEL' , 'LOADWORDADR' , 'MEMCOPY',
            'RC5SEND' , 'RC6SEND' , 'GETRC5' , 'SONYSEND',
            'BAUD' , 'BAUD1', 'BUFSPACE' , 'CLEAR', 'ECHO' , 'WAITKEY' , 'ISCHARWAITING' , 'INKEY' , 'INPUTBIN' , 'INPUTHEX' , 'PRINT', 'PRINT1','PRINT0', 'PRINTBIN' , 'SERIN' , 'SEROUT' , 'SPC' , 'MAKEMODBUS',
            'SPIIN' , 'SPIINIT' , 'SPIMOVE' , 'SPIOUT', 'SINGLE',
            'ASC' , 'UCASE' , 'LCASE' , 'TRIM' , 'SPLIT' , 'LTRIM' , 'INSTR' , 'SPACE' , 'RTRIM' , 'LEFT' , 'LEN' , 'MID' , 'RIGHT' , 'VAL' , 'STR' , 'CHR' , 'CHECKSUM' , 'HEX' , 'HEXVAL',
            'BASE64DEC' , 'BASE64ENC' , 'IP2STR' , 'UDPREAD' , 'UDPWRITE' , 'UDPWRITESTR' , 'TCPWRITE' , 'TCPWRITESTR' , 'TCPREAD' , 'GETDSTIP' , 'GETDSTPORT' , 'SOCKETSTAT' , 'SOCKETCONNECT' , 'SOCKETLISTEN' , 'GETSOCKET' , 'CLOSESOCKET' ,
            'SETTCP' , 'GETTCPREGS' , 'SETTCPREGS' , 'SETIPPROTOCOL' , 'TCPCHECKSUM',
            'HOME' , 'CURSOR' , 'UPPERLINE' , 'THIRDLINE' , 'INITLCD' , 'LOWERLINE' , 'LCDAT' , 'FOURTHLINE' , 'DISPLAY' , 'LCDCONTRAST' , 'LOCATE' , 'SHIFTCURSOR' , 'DEFLCDCHAR' , 'SHIFTLCD' , 'CLS',
            'ACOS' , 'ASIN' , 'ATN' , 'ATN2' , 'EXP' , 'RAD2DEG' , 'FRAC' , 'TAN' , 'TANH' , 'COS' , 'COSH' , 'LOG' , 'LOG10' , 'ROUND' , 'ABS' , 'INT' , 'MAX' , 'MIN' , 'SQR' , 'SGN' , 'POWER' , 'SIN' , 'SINH' , 'FIX' , 'INCR' , 'DECR' , 'DEG2RAD',
            'DBG' , 'DEBUG', 'DTMFOUT' , 'ENCODER' , 'GETADC' , 'GETKBD' , 'GETATKBD' , 'GETRC' , 'VALUE' , 'POPALL' , 'PS2MOUSEXY' , 'PUSHALL' ,
            'RETURN'  , 'RND' , 'ROTATE' , 'SENDSCAN' , 'SENDSCANKBD' , 'SHIFT' , 'SOUND' , 'STCHECK' , 'SWAP' , 'VARPTR' , 'X10DETECT' , 'X10SEND' , 'READMAGCARD' , 'REM' , 'BITS' , 'BYVAL' , 'CALL' , 'READHITAG',
            'Buffered', 'Size', 'Dummy', 'Parity', 'None', 'Stopbits', 'Databits', 'Clockpol', 'Synchrone', 'Prescaler', 'Reference', 'int0', 'int1', 'Interrupts',
            'Auto', 'avcc', 'ack', 'nack', 'Pin', 'Db4', 'Db3', 'Db2', 'Db1', 'Db7', 'Db6', 'Db5', 'Db0',  'e', 'rs', 'twi',
            ),
        2 => array(
            // Red Lowercase Keywords
            '$ASM' , '$BAUD' , '$BAUD1' , '$BGF' , '$BOOT' , '$CRYSTAL' , '$DATA' , '$DBG' , '$DEFAULT' , '$EEPLEAVE' , '$EEPROM' ,
            '$EEPROMHEX' , '$EXTERNAL' , '$HWSTACK' , '$INC' , '$INCLUDE' , '$INITMICRO' , '$LCD' , '$LCDRS' , '$LCDPUTCTRL' ,
            '$LCDPUTDATA' , '$LCDVFO' , '$LIB' , '$LOADER' , '$LOADERSIZE' , '$MAP' , '$NOCOMPILE' , '$NOINIT' , '$NORAMCLEAR' ,
            '$PROG' , '$PROGRAMMER' , '$REGFILE' , '$RESOURCE' , '$ROMSTART', '$SERIALINPUT', '$SERIALINPUT1' , '$SERIALINPUT2LCD' ,
            '$SERIALOUTPUT' , '$SERIALOUTPUT1' , '$SIM' , '$SWSTACK' , '$TIMEOUT' , '$TINY' , '$WAITSTATE' , '$XRAMSIZE' , '$XRAMSTART', '$XA',
            '#IF' , '#ELSE' , '#ENDIF', '$framesize'
            ),
        3 => array(
            // Blue Lowercase Keywords
            'IF', 'THEN', 'ELSE', 'END', 'WHILE', 'WEND', 'DO', 'LOOP', 'SELECT', 'CASE', 'FOR', 'NEXT',
            'GOSUB' , 'GOTO' , 'LOCAL' , 'SUB' , 'DEFBIT', 'DEFBYTE', 'DEFINT', 'DEFWORD', 'DEFLNG', 'DEFSNG', 'DEFDBL',
            'CONST', 'DECLARE', 'FUNCTION', 'DIM', 'EXIT', 'LONG', 'INTEGER', 'BYTE', 'AS', 'STRING', 'WORD'
            ),
        4 => array(
            //light blue
            'PINA.0', 'PINA.1', 'PINA.2', 'PINA.3', 'PINA.4', 'PINA.5', 'PINA.6', 'PINA.7',
            'PINB.0', 'PINB.1', 'PINB.2', 'PINB.3', 'PINB.4', 'PINB.5', 'PINB.6', 'PINB.7',
            'PINC.0', 'PINC.1', 'PINC.2', 'PINC.3', 'PINC.4', 'PINC.5', 'PINC.6', 'PINC.7',
            'PIND.0', 'PIND.1', 'PIND.2', 'PIND.3', 'PIND.4', 'PIND.5', 'PIND.6', 'PIND.7',
            'PINE.0', 'PINE.1', 'PINE.2', 'PINE.3', 'PINE.4', 'PINE.5', 'PINE.6', 'PINE.7',
            'PINF.0', 'PINF.1', 'PINF.2', 'PINF.3', 'PINF.4', 'PINF.5', 'PINF.6', 'PINF.7',

            'PORTA.0', 'PORTA.1', 'PORTA.2', 'PORTA.3', 'PORTA.4', 'PORTA.5', 'PORTA.6', 'PORTA.7',
            'PORTB.0', 'PORTB.1', 'PORTB.2', 'PORTB.3', 'PORTB.4', 'PORTB.5', 'PORTB.6', 'PORTB.7',
            'PORTC.0', 'PORTC.1', 'PORTC.2', 'PORTC.3', 'PORTC.4', 'PORTC.5', 'PORTC.6', 'PORTC.7',
            'PORTD.0', 'PORTD.1', 'PORTD.2', 'PORTD.3', 'PORTD.4', 'PORTD.5', 'PORTD.6', 'PORTD.7',
            'PORTE.0', 'PORTE.1', 'PORTE.2', 'PORTE.3', 'PORTE.4', 'PORTE.5', 'PORTE.6', 'PORTE.7',
            'PORTF.0', 'PORTF.1', 'PORTF.2', 'PORTF.3', 'PORTF.4', 'PORTF.5', 'PORTF.6', 'PORTF.7',

            'DDRA.0', 'DDRA.1', 'DDRA.2', 'DDRA.3', 'DDRA.4', 'DDRA.5', 'DDRA.6', 'DDRA.7',
            'DDRB.0', 'DDRB.1', 'DDRB.2', 'DDRB.3', 'DDRB.4', 'DDRB.5', 'DDRB.6', 'DDRB.7',
            'DDRC.0', 'DDRC.1', 'DDRC.2', 'DDRC.3', 'DDRC.4', 'DDRC.5', 'DDRC.6', 'DDRC.7',
            'DDRD.0', 'DDRD.1', 'DDRD.2', 'DDRD.3', 'DDRD.4', 'DDRD.5', 'DDRD.6', 'DDRD.7',
            'DDRE.0', 'DDRE.1', 'DDRE.2', 'DDRE.3', 'DDRE.4', 'DDRE.5', 'DDRE.6', 'DDRE.7',
            'DDRF.0', 'DDRF.1', 'DDRF.2', 'DDRF.3', 'DDRF.4', 'DDRF.5', 'DDRF.6', 'DDRF.7',

            'DDRA','DDRB','DDRC','DDRD','DDRE','DDRF',
            'PORTA','PORTB','PORTC','PORTD','PORTE','PORTF',
            'PINA','PINB','PINC','PIND','PINE','PINF',
            )
        ),
    'SYMBOLS' => array(
        '=', '<', '>', '>=', '<=', '+', '-', '*', '/', '%', '(', ')', '{', '}', '[', ']',  ';', ':', '$', '&H'
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
            1 => 'color: #000080; font-weight: bold;',
            2 => 'color: #FF0000;',
            3 => 'color: #0000FF;',
            4 => 'color: #0080FF;',
            ),
        'COMMENTS' => array(
            1 => 'color: #657CC4; font-style: italic;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000080;'
            ),
        'STRINGS' => array(
            0 => 'color: #008000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #000080; font-weight: bold;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #0000FF;'
            ),
        'ESCAPE_CHAR' => array(
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
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
    'TAB_WIDTH' => 4
);

?>