<?php
/*************************************************************************************
 * go.php
 * --------
 * Author: Markus Jarderot (mizardx at gmail dot com)
 * Copyright: (c) 2010 Markus Jarderot
 * Release Version: 1.0.8.11
 * Date Started: 2010/05/20
 *
 * Go language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2010/05/20 (1.0.8.9)
 *  -  First Release
 *
 * TODO (updated 2010/05/20)
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

$language_data = array(
    'LANG_NAME' => 'Go',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        # Raw strings (escapes and linebreaks ignored)
        2 => "#`[^`]*`#"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"', "'"),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        1 => "#\\\\[abfnrtv\\\\\'\"]#",
        2 => "#\\\\[0-7]{3}#",
        3 => "#\\\\x[0-9a-fA-F]{2}#",
        4 => "#\\\\u[0-9a-fA-F]{4}#",
        5 => "#\\\\U[0-9a-fA-F]{8}#"
        ),
    'NUMBERS' => array(
        # integer literals (possibly imaginary)
        0 => '\b([1-9][0-9]*i?|0[0-7]*|0[xX][0-9a-f]+|0[0-9]*i)\b',
        # real floating point literals
        1 => '\b((?:\d+\.\d*(?:[Ee][+-]?\d+\b)?|\.\d+(?:[Ee][+-]?\d+)?|\d+[Ee][+-]?\d+)?)\b',
        # imaginary floating point literals
        2 => '\b((?:\d+\.\d*(?:[Ee][+-]?\d+)?|\.\d+(?:[Ee][+-]?\d+)?|\d+[Ee][+-]?\d+)?i)\b'
        ),
    'KEYWORDS' => array(
        # statements
        1 => array(
            'break', 'case', 'const', 'continue', 'default', 'defer', 'else',
            'fallthrough', 'for', 'go', 'goto', 'if', 'import', 'package',
            'range', 'return', 'select', 'switch', 'type', 'var'
            ),
        # literals
        2 => array(
            'nil', 'true', 'false'
            ),
        # built-in functions
        3 => array(
            'close', 'closed', 'len', 'cap', 'new', 'make', 'copy', 'cmplx',
            'real', 'imag', 'panic', 'recover', 'print', 'println'
            ),
        # built-in types
        4 => array(
            'chan', 'func', 'interface', 'map', 'struct', 'bool', 'uint8',
            'uint16', 'uint32', 'uint64', 'int8', 'int16', 'int32', 'int64',
            'float32', 'float64', 'complex64', 'complex128', 'byte', 'uint',
            'int', 'float', 'complex', 'uintptr', 'string'
            ),
        # library types
        5 => array(
            'aes.Cipher', 'aes.KeySizeError', 'ascii85.CorruptInputError', 'asn1.BitString',
            'asn1.RawValue', 'asn1.StructuralError', 'asn1.SyntaxError', 'ast.ChanDir',
            'ast.Comment', 'ast.CommentGroup', 'ast.Decl', 'ast.Expr', 'ast.Field',
            'ast.FieldList', 'ast.File', 'ast.Filter', 'ast.MergeMode', 'ast.Node',
            'ast.ObjKind', 'ast.Object', 'ast.Package', 'ast.Scope', 'ast.Stmt',
            'ast.Visitor', 'av.Color', 'av.Image', 'av.Window', 'base64.CorruptInputError',
            'base64.Encoding', 'big.Int', 'big.Word', 'bignum.Integer', 'bignum.Rational',
            'binary.ByteOrder', 'block.Cipher', 'block.EAXTagError', 'blowfish.Cipher',
            'blowfish.KeySizeError', 'bufio.BufSizeError', 'bufio.Error', 'bufio.ReadWriter',
            'bufio.Reader', 'bufio.Writer', 'bytes.Buffer', 'datafmt.Environment',
            'datafmt.Format', 'datafmt.Formatter', 'datafmt.FormatterMap', 'datafmt.State',
            'doc.Filter', 'doc.FuncDoc', 'doc.PackageDoc', 'doc.TypeDoc', 'doc.ValueDoc',
            'draw.Color', 'draw.Context', 'draw.Image', 'draw.Mouse', 'draw.Op',
            'draw.Point', 'draw.Rectangle', 'dwarf.AddrType', 'dwarf.ArrayType',
            'dwarf.Attr', 'dwarf.BasicType', 'dwarf.BoolType', 'dwarf.CharType',
            'dwarf.CommonType', 'dwarf.ComplexType', 'dwarf.Data', 'dwarf.DecodeError',
            'dwarf.DotDotDotType', 'dwarf.Entry', 'dwarf.EnumType', 'dwarf.EnumValue',
            'dwarf.Field', 'dwarf.FloatType', 'dwarf.FuncType', 'dwarf.IntType',
            'dwarf.Offset', 'dwarf.PtrType', 'dwarf.QualType', 'dwarf.Reader',
            'dwarf.StructField', 'dwarf.StructType', 'dwarf.Tag', 'dwarf.Type',
            'dwarf.TypedefType', 'dwarf.UcharType', 'dwarf.UintType', 'dwarf.VoidType',
            'elf.Class', 'elf.Data', 'elf.Dyn32', 'elf.Dyn64', 'elf.DynFlag', 'elf.DynTag',
            'elf.File', 'elf.FileHeader', 'elf.FormatError', 'elf.Header32', 'elf.Header64',
            'elf.Machine', 'elf.NType', 'elf.OSABI', 'elf.Prog', 'elf.Prog32', 'elf.Prog64',
            'elf.ProgFlag', 'elf.ProgHeader', 'elf.ProgType', 'elf.R_386', 'elf.R_ALPHA',
            'elf.R_ARM', 'elf.R_PPC', 'elf.R_SPARC', 'elf.R_X86_64', 'elf.Rel32',
            'elf.Rel64', 'elf.Rela32', 'elf.Rela64', 'elf.Section', 'elf.Section32',
            'elf.Section64', 'elf.SectionFlag', 'elf.SectionHeader', 'elf.SectionIndex',
            'elf.SectionType', 'elf.Sym32', 'elf.Sym64', 'elf.SymBind', 'elf.SymType',
            'elf.SymVis', 'elf.Symbol', 'elf.Type', 'elf.Version', 'eval.ArrayType',
            'eval.ArrayValue', 'eval.BoolValue', 'eval.BoundedType', 'eval.ChanType',
            'eval.Code', 'eval.Constant', 'eval.Def', 'eval.DivByZeroError',
            'eval.FloatValue', 'eval.Frame', 'eval.Func', 'eval.FuncDecl', 'eval.FuncType',
            'eval.FuncValue', 'eval.IMethod', 'eval.IdealFloatValue', 'eval.IdealIntValue',
            'eval.IndexError', 'eval.IntValue', 'eval.Interface', 'eval.InterfaceType',
            'eval.InterfaceValue', 'eval.KeyError', 'eval.Map', 'eval.MapType',
            'eval.MapValue', 'eval.Method', 'eval.MultiType', 'eval.NamedType',
            'eval.NegativeCapacityError', 'eval.NegativeLengthError', 'eval.NilPointerError',
            'eval.PtrType', 'eval.PtrValue', 'eval.RedefinitionError', 'eval.Scope',
            'eval.Slice', 'eval.SliceError', 'eval.SliceType', 'eval.SliceValue',
            'eval.StringValue', 'eval.StructField', 'eval.StructType', 'eval.StructValue',
            'eval.Thread', 'eval.Type', 'eval.UintValue', 'eval.Value', 'eval.Variable',
            'eval.World', 'exec.Cmd', 'expvar.Int', 'expvar.IntFunc', 'expvar.KeyValue',
            'expvar.Map', 'expvar.String', 'expvar.StringFunc', 'expvar.Var', 'flag.Flag',
            'flag.Value', 'flate.CorruptInputError', 'flate.InternalError',
            'flate.ReadError', 'flate.Reader', 'flate.WriteError', 'flate.WrongValueError',
            'fmt.Formatter', 'fmt.GoStringer', 'fmt.State', 'fmt.Stringer',
            'git85.CorruptInputError', 'gob.Decoder', 'gob.Encoder', 'gosym.DecodingError',
            'gosym.Func', 'gosym.LineTable', 'gosym.Obj', 'gosym.Sym', 'gosym.Table',
            'gosym.UnknownFileError', 'gosym.UnknownLineError', 'gzip.Deflater',
            'gzip.Header', 'gzip.Inflater', 'hash.Hash', 'hash.Hash32', 'hash.Hash64',
            'heap.Interface', 'hex.InvalidHexCharError', 'hex.OddLengthInputError',
            'http.ClientConn', 'http.Conn', 'http.Handler', 'http.HandlerFunc',
            'http.ProtocolError', 'http.Request', 'http.Response', 'http.ServeMux',
            'http.ServerConn', 'http.URL', 'http.URLError', 'http.URLEscapeError',
            'image.Alpha', 'image.AlphaColor', 'image.Color', 'image.ColorImage',
            'image.ColorModel', 'image.ColorModelFunc', 'image.Image', 'image.NRGBA',
            'image.NRGBA64', 'image.NRGBA64Color', 'image.NRGBAColor', 'image.Paletted',
            'image.RGBA', 'image.RGBA64', 'image.RGBA64Color', 'image.RGBAColor',
            'io.Closer', 'io.Error', 'io.PipeReader', 'io.PipeWriter', 'io.ReadByter',
            'io.ReadCloser', 'io.ReadSeeker', 'io.ReadWriteCloser', 'io.ReadWriteSeeker',
            'io.ReadWriter', 'io.Reader', 'io.ReaderAt', 'io.ReaderFrom', 'io.SectionReader',
            'io.Seeker', 'io.WriteCloser', 'io.WriteSeeker', 'io.Writer', 'io.WriterAt',
            'io.WriterTo', 'iterable.Func', 'iterable.Group', 'iterable.Grouper',
            'iterable.Injector', 'iterable.Iterable', 'jpeg.FormatError', 'jpeg.Reader',
            'jpeg.UnsupportedError', 'json.Decoder', 'json.Encoder',
            'json.InvalidUnmarshalError', 'json.Marshaler', 'json.MarshalerError',
            'json.SyntaxError', 'json.UnmarshalTypeError', 'json.Unmarshaler',
            'json.UnsupportedTypeError', 'list.Element', 'list.List', 'log.Logger',
            'macho.Cpu', 'macho.File', 'macho.FileHeader', 'macho.FormatError', 'macho.Load',
            'macho.LoadCmd', 'macho.Regs386', 'macho.RegsAMD64', 'macho.Section',
            'macho.Section32', 'macho.Section64', 'macho.SectionHeader', 'macho.Segment',
            'macho.Segment32', 'macho.Segment64', 'macho.SegmentHeader', 'macho.Thread',
            'macho.Type', 'net.Addr', 'net.AddrError', 'net.Conn', 'net.DNSConfigError',
            'net.DNSError', 'net.Error', 'net.InvalidAddrError', 'net.InvalidConnError',
            'net.Listener', 'net.OpError', 'net.PacketConn', 'net.TCPAddr', 'net.TCPConn',
            'net.TCPListener', 'net.UDPAddr', 'net.UDPConn', 'net.UnixAddr', 'net.UnixConn',
            'net.UnixListener', 'net.UnknownNetworkError', 'net.UnknownSocketError',
            'netchan.Dir', 'netchan.Exporter', 'netchan.Importer', 'nntp.Article',
            'nntp.Conn', 'nntp.Error', 'nntp.Group', 'nntp.ProtocolError', 'ogle.Arch',
            'ogle.ArchAlignedMultiple', 'ogle.ArchLSB', 'ogle.Breakpoint', 'ogle.Event',
            'ogle.EventAction', 'ogle.EventHandler', 'ogle.EventHook', 'ogle.FormatError',
            'ogle.Frame', 'ogle.Goroutine', 'ogle.GoroutineCreate', 'ogle.GoroutineExit',
            'ogle.NoCurrentGoroutine', 'ogle.NotOnStack', 'ogle.Process',
            'ogle.ProcessNotStopped', 'ogle.ReadOnlyError', 'ogle.RemoteMismatchError',
            'ogle.UnknownArchitecture', 'ogle.UnknownGoroutine', 'ogle.UsageError',
            'os.Errno', 'os.Error', 'os.ErrorString', 'os.File', 'os.FileInfo',
            'os.LinkError', 'os.PathError', 'os.SyscallError', 'os.Waitmsg', 'patch.Diff',
            'patch.File', 'patch.GitBinaryLiteral', 'patch.Op', 'patch.Set',
            'patch.SyntaxError', 'patch.TextChunk', 'patch.Verb', 'path.Visitor',
            'pdp1.HaltError', 'pdp1.LoopError', 'pdp1.Trapper', 'pdp1.UnknownInstrError',
            'pdp1.Word', 'pem.Block', 'png.FormatError', 'png.IDATDecodingError',
            'png.UnsupportedError', 'printer.Config', 'printer.HTMLTag', 'printer.Styler',
            'proc.Breakpoint', 'proc.Cause', 'proc.Process', 'proc.ProcessExited',
            'proc.Regs', 'proc.Signal', 'proc.Stopped', 'proc.Thread', 'proc.ThreadCreate',
            'proc.ThreadExit', 'proc.Word', 'quick.CheckEqualError', 'quick.CheckError',
            'quick.Config', 'quick.Generator', 'quick.SetupError', 'rand.Rand',
            'rand.Source', 'rand.Zipf', 'rc4.Cipher', 'rc4.KeySizeError',
            'reflect.ArrayOrSliceType', 'reflect.ArrayOrSliceValue', 'reflect.ArrayType',
            'reflect.ArrayValue', 'reflect.BoolType', 'reflect.BoolValue', 'reflect.ChanDir',
            'reflect.ChanType', 'reflect.ChanValue', 'reflect.Complex128Type',
            'reflect.Complex128Value', 'reflect.Complex64Type', 'reflect.Complex64Value',
            'reflect.ComplexType', 'reflect.ComplexValue', 'reflect.Float32Type',
            'reflect.Float32Value', 'reflect.Float64Type', 'reflect.Float64Value',
            'reflect.FloatType', 'reflect.FloatValue', 'reflect.FuncType',
            'reflect.FuncValue', 'reflect.Int16Type', 'reflect.Int16Value',
            'reflect.Int32Type', 'reflect.Int32Value', 'reflect.Int64Type',
            'reflect.Int64Value', 'reflect.Int8Type', 'reflect.Int8Value', 'reflect.IntType',
            'reflect.IntValue', 'reflect.InterfaceType', 'reflect.InterfaceValue',
            'reflect.MapType', 'reflect.MapValue', 'reflect.Method', 'reflect.PtrType',
            'reflect.PtrValue', 'reflect.SliceHeader', 'reflect.SliceType',
            'reflect.SliceValue', 'reflect.StringHeader', 'reflect.StringType',
            'reflect.StringValue', 'reflect.StructField', 'reflect.StructType',
            'reflect.StructValue', 'reflect.Type', 'reflect.Uint16Type',
            'reflect.Uint16Value', 'reflect.Uint32Type', 'reflect.Uint32Value',
            'reflect.Uint64Type', 'reflect.Uint64Value', 'reflect.Uint8Type',
            'reflect.Uint8Value', 'reflect.UintType', 'reflect.UintValue',
            'reflect.UintptrType', 'reflect.UintptrValue', 'reflect.UnsafePointerType',
            'reflect.UnsafePointerValue', 'reflect.Value', 'regexp.Error', 'regexp.Regexp',
            'ring.Ring', 'rpc.Call', 'rpc.Client', 'rpc.ClientCodec', 'rpc.InvalidRequest',
            'rpc.Request', 'rpc.Response', 'rpc.ServerCodec', 'rsa.DecryptionError',
            'rsa.MessageTooLongError', 'rsa.PKCS1v15Hash', 'rsa.PrivateKey', 'rsa.PublicKey',
            'rsa.VerificationError', 'runtime.ArrayType', 'runtime.BoolType',
            'runtime.ChanDir', 'runtime.ChanType', 'runtime.Complex128Type',
            'runtime.Complex64Type', 'runtime.ComplexType', 'runtime.Error',
            'runtime.Float32Type', 'runtime.Float64Type', 'runtime.FloatType',
            'runtime.Func', 'runtime.FuncType', 'runtime.Int16Type', 'runtime.Int32Type',
            'runtime.Int64Type', 'runtime.Int8Type', 'runtime.IntType',
            'runtime.InterfaceType', 'runtime.Itable', 'runtime.MapType',
            'runtime.MemProfileRecord', 'runtime.MemStatsType', 'runtime.PtrType',
            'runtime.SliceType', 'runtime.StringType', 'runtime.StructType', 'runtime.Type',
            'runtime.TypeAssertionError', 'runtime.Uint16Type', 'runtime.Uint32Type',
            'runtime.Uint64Type', 'runtime.Uint8Type', 'runtime.UintType',
            'runtime.UintptrType', 'runtime.UnsafePointerType', 'scanner.Error',
            'scanner.ErrorHandler', 'scanner.ErrorVector', 'scanner.Position',
            'scanner.Scanner', 'script.Close', 'script.Closed', 'script.Event',
            'script.ReceivedUnexpected', 'script.Recv', 'script.RecvMatch', 'script.Send',
            'script.SetupError', 'signal.Signal', 'signal.UnixSignal', 'sort.Interface',
            'srpc.Client', 'srpc.Errno', 'srpc.Handler', 'srpc.RPC', 'strconv.NumError',
            'strings.Reader', 'sync.Mutex', 'sync.RWMutex',
            'syscall.ByHandleFileInformation', 'syscall.Cmsghdr', 'syscall.Dirent',
            'syscall.EpollEvent', 'syscall.Fbootstraptransfer_t', 'syscall.FdSet',
            'syscall.Filetime', 'syscall.Flock_t', 'syscall.Fstore_t', 'syscall.Iovec',
            'syscall.Kevent_t', 'syscall.Linger', 'syscall.Log2phys_t', 'syscall.Msghdr',
            'syscall.Overlapped', 'syscall.PtraceRegs', 'syscall.Radvisory_t',
            'syscall.RawSockaddr', 'syscall.RawSockaddrAny', 'syscall.RawSockaddrInet4',
            'syscall.RawSockaddrInet6', 'syscall.RawSockaddrUnix', 'syscall.Rlimit',
            'syscall.Rusage', 'syscall.Sockaddr', 'syscall.SockaddrInet4',
            'syscall.SockaddrInet6', 'syscall.SockaddrUnix', 'syscall.Stat_t',
            'syscall.Statfs_t', 'syscall.Sysinfo_t', 'syscall.Time_t', 'syscall.Timespec',
            'syscall.Timeval', 'syscall.Timex', 'syscall.Tms', 'syscall.Ustat_t',
            'syscall.Utimbuf', 'syscall.Utsname', 'syscall.WaitStatus',
            'syscall.Win32finddata', 'syslog.Priority', 'syslog.Writer', 'tabwriter.Writer',
            'tar.Header', 'tar.Reader', 'tar.Writer', 'template.Error',
            'template.FormatterMap', 'template.Template', 'testing.Benchmark',
            'testing.Regexp', 'testing.Test', 'time.ParseError', 'time.Ticker', 'time.Time',
            'tls.CASet', 'tls.Certificate', 'tls.Config', 'tls.Conn', 'tls.ConnectionState',
            'tls.Listener', 'token.Position', 'token.Token', 'unicode.CaseRange',
            'unicode.Range', 'unsafe.ArbitraryType', 'vector.LessInterface',
            'websocket.Conn', 'websocket.Draft75Handler', 'websocket.Handler',
            'websocket.ProtocolError', 'websocket.WebSocketAddr', 'x509.Certificate',
            'x509.ConstraintViolationError', 'x509.KeyUsage', 'x509.Name',
            'x509.PublicKeyAlgorithm', 'x509.SignatureAlgorithm',
            'x509.UnhandledCriticalExtension', 'x509.UnsupportedAlgorithmError', 'xml.Attr',
            'xml.EndElement', 'xml.Name', 'xml.Parser', 'xml.ProcInst', 'xml.StartElement',
            'xml.SyntaxError', 'xml.Token', 'xml.UnmarshalError', 'xtea.Cipher',
            'xtea.KeySizeError'
            )
        ),
    'SYMBOLS' => array(
        # delimiters
        1 => array(
            '(', ')', '{', '}', '[', ']', ',', ':', ';'
            ),
        # assignments
        2 => array(
            '<<=', '!=', '%=', '&=', '&^=', '*=', '+=', '-=', '/=', ':=', '>>=',
            '^=', '|=', '=', '++', '--'
            ),
        # operators
        3 => array(
            '<=', '<', '==', '>', '>=', '&&', '!', '||', '&', '&^', '|', '^',
            '>>', '<<', '*', '%', '+', '-', '.', '/', '<-'),
        # vararg
        4 => array(
            '...'
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            # statements
            1 => 'color: #b1b100; font-weight: bold;',
            # literals
            2 => 'color: #000000; font-weight: bold;',
            # built-in functions
            3 => 'color: #000066;',
            # built-in types
            4 => 'color: #993333;',
            # library types
            5 => 'color: #003399;'
            ),
        'COMMENTS' => array(
            # single-line comments
            1 => 'color: #666666; font-style: italic;',
            # raw strings
            2 => 'color: #0000ff;',
            # multi-line comments
            'MULTI' => 'color: #666666; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            # simple escape
            1 => 'color: #000099; font-weight: bold;',
            # octal escape
            2 => 'color: #000099;',
            # hex escape
            3 => 'color: #000099;',
            # unicode escape
            4 => 'color: #000099;',
            # long unicode escape
            5 => 'color: #000099;'
            ),
        'BRACKETS' => array(
            ),
        'STRINGS' => array(
            0 => 'color: #0000ff;',
            0 => 'color: #cc66cc;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            0 => 'color: #004000;'
            ),
        'SYMBOLS' => array(
            # delimiters
            1 => 'color: #339933;',
            # assignments
            2 => 'color: #339933;',
            # operators
            3 => 'color: #339933;',
            # vararg (highlighted as a keyword)
            4 => 'color: #000000; font-weight: bold;'
            ),
        'REGEXPS' => array(
            # If CSS classes are enabled, these would be highlighted as numbers (nu0)
            # integer literals (possibly imaginary)
            //0 => 'color: #cc66cc;',
            # real floating point literals
            //1 => 'color: #cc66cc;',
            # imaginary floating point literals
            //2 => 'color: #cc66cc;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => 'http://golang.org/search?q={FNAME}'
        ),
    'REGEXPS' => array(
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(1 => '.'),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(),
    'HIGHLIGHT_STRICT_BLOCK' => array(),
    'PARSER_CONTROL' => array(
        'ENABLE_FLAGS' => array(
            'BRACKETS' => GESHI_NEVER, # handled by symbols
            )
        )
);

?>