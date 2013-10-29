<?php
/*************************************************************************************
 * asm.php
 * -------
 * Author: Tux (tux@inmail.cz)
 * Copyright: (c) 2004 Tux (http://tux.a4.cz/),
 *                2004-2009 Nigel McNie (http://qbnz.com/highlighter),
 *                2009-2011 Benny Baumann (http://qbnz.com/highlighter),
 *                2011 Dennis Yurichev (dennis@conus.info),
 *                2011 Marat Dukhan (mdukhan3.at.gatech.dot.edu)
 * Release Version: 1.0.8.11
 * Date Started: 2004/07/27
 *
 * x86 Assembler language file for GeSHi.
 * Based on the following documents:
 *   - "Intel64 and IA-32 Architectures Programmer's Reference Manual
 *       Volume 2 (2A & 2B): Instructions Set Reference, A-Z",
 *       Order Number 25383-039US, May 2011
 *   - "Intel Advanced Vector Extensions Programming Reference",
 *       Order Number 319433-011, June 2011
 *   - "AMD64 Architecture Programmer's Manual Volume 3:
 *       General-Purpose and System Instructions", Publication No. 24594,
 *       Revision 3.15, November 2009
 *   - "AMD64 Architecture Programmer's Manual Volume 4:
 *       128-Bit and 256-Bit Media Instructions", Publication No. 26568,
 *       Revision 3.12, May 2011
 *   - "AMD64 Architecture Programmer's Manual Volume 5:
 *       64-Bit Media and x87 Floating-Point Instructions",
 *       Publication No. 26569, Revision 3.11, December 2009
 *   - "AMD64 Technology Lightweight Profiling Specification",
 *       Publication No. 43724, Revision 3.08, August 2010
 *   - "Application Note 108: Cyrix Extended MMX Instruction Set"
 *   - "VIA Padlock Programming Guide", 3rd May 2005
 *   - http://en.wikipedia.org/wiki/X86_instruction_listings
 *   - NASM 2.10rc8 Online Documenation at
 *       http://www.nasm.us/xdoc/2.10rc8/html/nasmdoc0.html
 * Color scheme is taken from SciTE. Previous versions of this file
 * also used words from SciTE configuration file (based on NASM syntax)
 *
 * CHANGES
 * -------
 * 2011/10/07
 *   -  Rearranged instructions and registers into groups
 *   -  Updated to support the following extensions
 *          - CMOV, BMI1, BMI2, TBM, FSGSBASE
 *          - LZCNT, TZCNT, POPCNT, MOVBE, CRC32
 *          - MMX, MMX+, EMMX
 *          - 3dnow!, 3dnow!+, 3dnow! Geode, 3dnow! Prefetch
 *          - SSE, SSE2, SSE3, SSSE3, SSE4A, SSE4.1, SSE4.2
 *          - AVX, AVX2, XOP, FMA3, FMA4, CVT16
 *          - VMX, SVM
 *          - AES, PCLMULQDQ, Padlock, RDRAND
 *   -  Updated NASM macros and directives
 * 2010/07/01 (1.0.8.11)
 *   -  Added MMX/SSE/new x86-64 registers, MMX/SSE (up to 4.2) instructions
 * 2008/05/23 (1.0.7.22)
 *   -  Added description of extra language features (SF#1970248)
 * 2004/11/27 (1.0.2)
 *   -  Added support for multiple object splitters
 * 2004/10/27 (1.0.1)
 *   -  Added support for URLs
 *   -  Added binary and hexadecimal regexps
 * 2004/08/05 (1.0.0)
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
    'LANG_NAME' => 'ASM',
    'COMMENT_SINGLE' => array(1 => ';'),
    'COMMENT_MULTI' => array(),
    //Line address prefix suppression
    'COMMENT_REGEXP' => array(2 => "/^(?:[0-9a-f]{0,4}:)?[0-9a-f]{4}(?:[0-9a-f]{4})?/mi"),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        /* General-Purpose */
        1 => array(
            /* BCD instructions */
            'aaa','aad','aam','aas','daa','das',
            /* Control flow instructions */
            'ja','jae','jb','jbe','jc','je','jg','jge','jl','jle','jmp','jna',
            'jnae','jnb','jnbe','jnc','jne','jng','jnge','jnl','jnle','jno','jnp','jns','jnz',
            'jo','jp','jpe','jpo','js','jz','jcxz','jecxz','jrcxz','loop','loope','loopne',
            'call','ret','enter','leave','syscall','sysenter','int','into',
            /* Predicate instructions */
            'seta','setae','setb','setbe','setc','sete','setg','setge','setl','setle','setna',
            'setnae','setnb','setnbe','setnc','setne','setng','setnge','setnl','setnle','setno',
            'setnp','setns','setnz','seto','setp','setpe','setpo','sets','setz','salc',
            /* Conditional move instructions */
            'cmovo','cmovno','cmovb','cmovc','cmovnae','cmovae','cmovnb','cmovnc','cmove','cmovz',
            'cmovne','cmovnz','cmovbe','cmovna','cmova','cmovnbe','cmovs','cmovns','cmovp','cmovpe',
            'cmovnp','cmovpo','cmovl','cmovnge','cmovge','cmovnl','cmovle','cmovng','cmovg','cmovnle',
            /* ALU instructions */
            'add','sub','adc','sbb','neg','cmp','inc','dec','and','or','xor','not','test',
            'shl','shr','sal','sar','shld','shrd','rol','ror','rcl','rcr',
            'cbw','cwd','cwde','cdq','cdqe','cqo','bsf','bsr','bt','btc','btr','bts',
            'idiv','imul','div','mul','bswap','nop',
            /* Memory instructions */
            'lea','mov','movsx','movsxd','movzx','xlatb','bound','xchg','xadd','cmpxchg','cmpxchg8b','cmpxchg16b',
            /* Stack instructions */
            'push','pop','pusha','popa','pushad','popad','pushf','popf','pushfd','popfd','pushfq','popfq',
            /* EFLAGS manipulations instructions */
            'clc','cld','stc','std','cmc','lahf','sahf',
            /* Prefix instructions */
            'lock','rep','repe','repz','repne','repnz',
            /* String instructions */
            'cmps','cmpsb','cmpsw',/*'cmpsd',*/ 'cmpsq', /*CMPSD conflicts with the SSE2 instructions of the same name*/
            'movs','movsb','movsw',/*'movsd',*/ 'movsq', /*MOVSD conflicts with the SSE2 instructions of the same name*/
            'scas','scasb','scasw','scasd','scasq',
            'stos','stosb','stosw','stosd','stosq',
            'lods','lodsb','lodsw','lodsd','lodsq',
            /* Information instructions */
            'cpuid','rdtsc','rdtscp','rdpmc','xgetbv',
            'sgdt','sidt','sldt','smsw','str','lar',
            /* LWP instructions */
            'llwpcb','slwpcb','lwpval','lwpins',
            /* Instructions from miscellaneous extensions */
            'crc32','popcnt','lzcnt','tzcnt','movbe','pclmulqdq','rdrand',
            /* FSGSBASE instructions */
            'rdfsbase','rdgsbase','wrfsbase','wrgsbase',
            /* BMI1 instructions */
            'andn','bextr','blsi','blsmk','blsr',
            /* BMI2 instructions */
            'bzhi','mulx','pdep','pext','rorx','sarx','shlx','shrx',
            /* TBM instructions */
            'blcfill','blci','blcic','blcmsk','blcs','blsfill','blsic','t1mskc','tzmsk',
            /* Legacy instructions */
            'arpl','ud2','lds','les','lfs','lgs','lss','lsl','verr','verw',
            /* Privileged instructions */
            'cli','sti','clts','hlt','rsm','in','insb','insw','insd',
            'out','outsb','outsw','outsd','clflush','invd','invlpg','invpcid','wbinvd',
            'iret','iretd','iretq','sysexit','sysret','lidt','lgdt','lldt','lmsw','ltr',
            'monitor','mwait','rdmsr','wrmsr','swapgs',
            'fxsave','fxsave64','fxrstor','fxrstor64',
            'xsave','xsaveopt','xrstor','xsetbv','getsec',
            /* VMX instructions */
            'invept','invvpid','vmcall','vmclear','vmlaunch','vmresume',
            'vmptrld','vmptrst','vmread','vmwrite','vmxoff','vmxon',
            /* SVM (AMD-V) instructions */
            'invlpga','skinit','clgi','stgi','vmload','vmsave','vmmcall','vmrun'
            ),
        /*FPU*/
        2 => array(
            'f2xm1','fabs','fadd','faddp','fbld','fbstp','fchs','fclex','fcom','fcomp','fcompp','fdecstp',
            'fdisi','fdiv','fdivp','fdivr','fdivrp','feni','ffree','fiadd','ficom','ficomp','fidiv',
            'fidivr','fild','fimul','fincstp','finit','fist','fistp','fisub','fisubr','fld','fld1',
            'fldcw','fldenv','fldenvw','fldl2e','fldl2t','fldlg2','fldln2','fldpi','fldz','fmul',
            'fmulp','fnclex','fndisi','fneni','fninit','fnop','fnsave','fnsavew','fnstcw','fnstenv',
            'fnstenvw','fnstsw','fpatan','fprem','fptan','frndint','frstor','frstorw','fsave',
            'fsavew','fscale','fsqrt','fst','fstcw','fstenv','fstenvw','fstp','fstsw','fsub','fsubp',
            'fsubr','fsubrp','ftst','fwait','fxam','fxch','fxtract','fyl2x','fyl2xp1',
            'fsetpm','fcos','fldenvd','fnsaved','fnstenvd','fprem1','frstord','fsaved','fsin','fsincos',
            'fstenvd','fucom','fucomp','fucompp','ffreep',
            /* FCMOV instructions */
            'fcomi','fcomip','fucomi','fucomip',
            'fcmovb','fcmove','fcmovbe','fcmovu','fcmovnb','fcmovne','fcmovnbe','fcmovnu',
            /* SSE3 instructions */
            'fisttp'
            ),
        /*SIMD*/
        3 => array(
            /* MMX instructions */
            'movd','movq',
            'paddb','paddw','paddd','paddsb','paddsw','paddusb','paddusw',
            'psubb','psubw','psubd','psubsb','psubsw','psubusb','psubusw',
            'pand','pandn','por','pxor',
            'pcmpeqb','pcmpeqd','pcmpeqw','pcmpgtb','pcmpgtd','pcmpgtw',
            'pmaddwd','pmulhw','pmullw',
            'psllw','pslld','psllq','psrlw','psrld','psrlq','psraw','psrad',
            'packuswb','packsswb','packssdw',
            'punpcklbw','punpcklwd','punpckldq','punpckhbw','punpckhwd','punpckhdq',
            'emms',
            /* MMX+ instructions */
            'pavgb','pavgw',
            'pextrw','pinsrw','pmovmskb',
            'pmaxsw','pmaxub','pminsw','pminub',
            'pmulhuw','psadbw','pshufw',
            'prefetchnta','prefetcht0','prefetcht1','prefetcht2',
            'maskmovq','movntq','sfence',
            /* EMMX instructions (only available on Cyrix MediaGXm) */
            'paddsiw','psubsiw',
            /*'pmulhrw',*/'pmachriw','pmulhriw', /* PMULHRW conflicts with the 3dnow! instruction of the same name */
            'pmagw','pdistib','paveb',
            'pmvzb','pmvnzb','pmvlzb','pmvgezb',
            /* 3dnow! instructions! */
            'pfacc','pfadd','pfsub','pfsubr','pfmul',
            'pfcmpeq','pfcmpge','pfcmpgt',
            'pfmax','pfmin',
            'pfrcp','pfrcpit1','pfrcpit2','pfrsqit1','pfrsqrt',
            'pi2fd','pf2id',
            'pavgusb','pmulhrw',
            'femms',
            /* 3dnow!+ instructions */
            'pfnacc','pfpnacc','pi2fw','pf2iw','pswapd',
            /* 3dnow! Geode instructions */
            'pfrsqrtv','pfrcpv',
            /* 3dnow! Prefetch instructions */
            'prefetch','prefetchw',
            /* SSE instructions */
            'addss','addps','subss','subps',
            'mulss','mulps','divss','divps','sqrtss','sqrtps',
            'rcpss','rcpps','rsqrtss','rsqrtps',
            'maxss','maxps','minss','minps',
            'cmpss','comiss','ucomiss','cmpps',
            'cmpeqss','cmpltss','cmpless','cmpunordss','cmpneqss','cmpnltss','cmpnless','cmpordss',
            'cmpeqps','cmpltps','cmpleps','cmpunordps','cmpneqps','cmpnltps','cmpnleps','cmpordps',
            'andnps','andps','orps','xorps',
            'cvtsi2ss','cvtss2si','cvttss2si',
            'cvtpi2ps','cvtps2pi','cvttps2pi',
            'movss','movlps','movhps','movlhps','movhlps','movaps','movups','movntps','movmskps',
            'shufps','unpckhps','unpcklps',
            'ldmxcsr','stmxcsr',
            /* SSE2 instructions */
            'addpd','addsd','subpd','subsd',
            'mulsd','mulpd','divsd','divpd','sqrtsd','sqrtpd',
            'maxsd','maxpd','minsd','minpd',
            'cmpsd','comisd','ucomisd','cmppd',
            'cmpeqsd','cmpltsd','cmplesd','cmpunordsd','cmpneqsd','cmpnltsd','cmpnlesd','cmpordsd',
            'cmpeqpd','cmpltpd','cmplepd','cmpunordpd','cmpneqpd','cmpnltpd','cmpnlepd','cmpordpd',
            'andnpd','andpd','orpd','xorpd',
            'cvtsd2ss','cvtpd2ps','cvtss2sd','cvtps2pd',
            'cvtdq2ps','cvtps2dq','cvttps2dq',
            'cvtdq2pd','cvtpd2dq','cvttpd2dq',
            'cvtsi2sd','cvtsd2si','cvttsd2si',
            'cvtpi2pd','cvtpd2pi','cvttpd2pi',
            'movsd','movlpd','movhpd','movapd','movupd','movntpd','movmskpd',
            'shufpd','unpckhpd','unpcklpd',
            'movnti','movdqa','movdqu','movntdq','maskmovdqu',
            'movdq2q','movq2dq',
            'paddq','psubq','pmuludq',
            'pslldq','psrldq',
            'punpcklqdq','punpckhqdq',
            'pshufhw','pshuflw','pshufd',
            'lfence','mfence',
            /* SSE3 instructions */
            'addsubps','addsubpd',
            'haddps','haddpd','hsubps','hsubpd',
            'movsldup','movshdup','movddup',
            'lddqu',
            /* SSSE3 instructions */
            'psignb','psignw','psignd',
            'pabsb','pabsw','pabsd',
            'palignr','pshufb',
            'pmulhrsw','pmaddubsw',
            'phaddw','phaddd','phaddsw',
            'phsubw','phsubd','phsubsw',
            /* SSE4A instructions */
            'extrq','insertq','movntsd','movntss',
            /* SSE4.1 instructions */
            'mpsadbw','phminposuw',
            'pmuldq','pmulld',
            'dpps','dppd',
            'blendps','blendpd','blendvps','blendvpd','pblendvb','pblendw',
            'pmaxsb','pmaxuw','pmaxsd','pmaxud','pminsb','pminuw','pminsd','pminud',
            'roundps','roundss','roundpd','roundsd',
            'insertps','pinsrb','pinsrd','pinsrq',
            'extractps','pextrb','pextrd','pextrq',
            'pmovsxbw','pmovsxbd','pmovsxbq','pmovsxwd','pmovsxwq','pmovsxdq',
            'pmovzxbw','pmovzxbd','pmovzxbq','pmovzxwd','pmovzxwq','pmovzxdq',
            'ptest',
            'pcmpeqq',
            'packusdw',
            'movntdqa',
            /* SSE4.2 instructions */
            'pcmpgtq',
            'pcmpestri','pcmpestrm','pcmpistri','pcmpistrm',
            /* AES instructions */
            'aesenc','aesenclast','aesdec','aesdeclast','aeskeygenassist','aesimc',
            /* VIA Padlock instructions */
            'xcryptcbc','xcryptcfb','xcryptctr','xcryptecb','xcryptofb',
            'xsha1','xsha256','montmul','xstore',
            /* AVX instructions */
            'vaddss','vaddps','vaddsd','vaddpd','vsubss','vsubps','vsubsd','vsubpd',
            'vaddsubps','vaddsubpd',
            'vhaddps','vhaddpd','vhsubps','vhsubpd',
            'vmulss','vmulps','vmulsd','vmulpd',
            'vmaxss','vmaxps','vmaxsd','vmaxpd','vminss','vminps','vminsd','vminpd',
            'vandps','vandpd','vandnps','vandnpd','vorps','vorpd','vxorps','vxorpd',
            'vblendps','vblendpd','vblendvps','vblendvpd',
            'vcmpss','vcomiss','vucomiss','vcmpsd','vcomisd','vucomisd','vcmpps','vcmppd',
            'vcmpeqss','vcmpltss','vcmpless','vcmpunordss','vcmpneqss','vcmpnltss','vcmpnless','vcmpordss',
            'vcmpeq_uqss','vcmpngess','vcmpngtss','vcmpfalsess','vcmpneq_oqss','vcmpgess','vcmpgtss','vcmptruess',
            'vcmpeq_osss','vcmplt_oqss','vcmple_oqss','vcmpunord_sss','vcmpneq_usss','vcmpnlt_uqss','vcmpnle_uqss','vcmpord_sss',
            'vcmpeq_usss','vcmpnge_uqss','vcmpngt_uqss','vcmpfalse_osss','vcmpneq_osss','vcmpge_oqss','vcmpgt_oqss','vcmptrue_usss',
            'vcmpeqps','vcmpltps','vcmpleps','vcmpunordps','vcmpneqps','vcmpnltps','vcmpnleps','vcmpordps',
            'vcmpeq_uqps','vcmpngeps','vcmpngtps','vcmpfalseps','vcmpneq_oqps','vcmpgeps','vcmpgtps','vcmptrueps',
            'vcmpeq_osps','vcmplt_oqps','vcmple_oqps','vcmpunord_sps','vcmpneq_usps','vcmpnlt_uqps','vcmpnle_uqps','vcmpord_sps',
            'vcmpeq_usps','vcmpnge_uqps','vcmpngt_uqps','vcmpfalse_osps','vcmpneq_osps','vcmpge_oqps','vcmpgt_oqps','vcmptrue_usps',
            'vcmpeqsd','vcmpltsd','vcmplesd','vcmpunordsd','vcmpneqsd','vcmpnltsd','vcmpnlesd','vcmpordsd',
            'vcmpeq_uqsd','vcmpngesd','vcmpngtsd','vcmpfalsesd','vcmpneq_oqsd','vcmpgesd','vcmpgtsd','vcmptruesd',
            'vcmpeq_ossd','vcmplt_oqsd','vcmple_oqsd','vcmpunord_ssd','vcmpneq_ussd','vcmpnlt_uqsd','vcmpnle_uqsd','vcmpord_ssd',
            'vcmpeq_ussd','vcmpnge_uqsd','vcmpngt_uqsd','vcmpfalse_ossd','vcmpneq_ossd','vcmpge_oqsd','vcmpgt_oqsd','vcmptrue_ussd',
            'vcmpeqpd','vcmpltpd','vcmplepd','vcmpunordpd','vcmpneqpd','vcmpnltpd','vcmpnlepd','vcmpordpd',
            'vcmpeq_uqpd','vcmpngepd','vcmpngtpd','vcmpfalsepd','vcmpneq_oqpd','vcmpgepd','vcmpgtpd','vcmptruepd',
            'vcmpeq_ospd','vcmplt_oqpd','vcmple_oqpd','vcmpunord_spd','vcmpneq_uspd','vcmpnlt_uqpd','vcmpnle_uqpd','vcmpord_spd',
            'vcmpeq_uspd','vcmpnge_uqpd','vcmpngt_uqpd','vcmpfalse_ospd','vcmpneq_ospd','vcmpge_oqpd','vcmpgt_oqpd','vcmptrue_uspd',
            'vcvtsd2ss','vcvtpd2ps','vcvtss2sd','vcvtps2pd',
            'vcvtsi2ss','vcvtss2si','vcvttss2si',
            'vcvtpi2ps','vcvtps2pi','vcvttps2pi',
            'vcvtdq2ps','vcvtps2dq','vcvttps2dq',
            'vcvtdq2pd','vcvtpd2dq','vcvttpd2dq',
            'vcvtsi2sd','vcvtsd2si','vcvttsd2si',
            'vcvtpi2pd','vcvtpd2pi','vcvttpd2pi',
            'vdivss','vdivps','vdivsd','vdivpd','vsqrtss','vsqrtps','vsqrtsd','vsqrtpd',
            'vdpps','vdppd',
            'vmaskmovps','vmaskmovpd',
            'vmovss','vmovsd','vmovaps','vmovapd','vmovups','vmovupd','vmovntps','vmovntpd',
            'vmovhlps','vmovlhps','vmovlps','vmovlpd','vmovhps','vmovhpd',
            'vmovsldup','vmovshdup','vmovddup',
            'vmovmskps','vmovmskpd',
            'vroundss','vroundps','vroundsd','vroundpd',
            'vrcpss','vrcpps','vrsqrtss','vrsqrtps',
            'vunpcklps','vunpckhps','vunpcklpd','vunpckhpd',
            'vbroadcastss','vbroadcastsd','vbroadcastf128',
            'vextractps','vinsertps','vextractf128','vinsertf128',
            'vshufps','vshufpd','vpermilps','vpermilpd','vperm2f128',
            'vtestps','vtestpd',
            'vpaddb','vpaddusb','vpaddsb','vpaddw','vpaddusw','vpaddsw','vpaddd','vpaddq',
            'vpsubb','vpsubusb','vpsubsb','vpsubw','vpsubusw','vpsubsw','vpsubd','vpsubq',
            'vphaddw','vphaddsw','vphaddd','vphsubw','vphsubsw','vphsubd',
            'vpsllw','vpslld','vpsllq','vpsrlw','vpsrld','vpsrlq','vpsraw','vpsrad',
            'vpand','vpandn','vpor','vpxor',
            'vpblendwb','vpblendw',
            'vpsignb','vpsignw','vpsignd',
            'vpavgb','vpavgw',
            'vpabsb','vpabsw','vpabsd',
            'vmovd','vmovq','vmovdqa','vmovdqu','vlddqu','vmovntdq','vmovntdqa','vmaskmovdqu',
            'vpmovsxbw','vpmovsxbd','vpmovsxbq','vpmovsxwd','vpmovsxwq','vpmovsxdq',
            'vpmovzxbw','vpmovzxbd','vpmovzxbq','vpmovzxwd','vpmovzxwq','vpmovzxdq',
            'vpackuswb','vpacksswb','vpackusdw','vpackssdw',
            'vpcmpeqb','vpcmpeqw','vpcmpeqd','vpcmpeqq','vpcmpgtb','vpcmpgtw','vpcmpgtd','vpcmpgtq',
            'vpmaddubsw','vpmaddwd',
            'vpmullw','vpmulhuw','vpmulhw','vpmulhrsw','vpmulld','vpmuludq','vpmuldq',
            'vpmaxub','vpmaxsb','vpmaxuw','vpmaxsw','vpmaxud','vpmaxsd',
            'vpminub','vpminsb','vpminuw','vpminsw','vpminud','vpminsd',
            'vpmovmskb','vptest',
            'vpunpcklbw','vpunpcklwd','vpunpckldq','vpunpcklqdq',
            'vpunpckhbw','vpunpckhwd','vpunpckhdq','vpunpckhqdq',
            'vpslldq','vpsrldq','vpalignr',
            'vpshufb','vpshuflw','vpshufhw','vpshufd',
            'vpextrb','vpextrw','vpextrd','vpextrq','vpinsrb','vpinsrw','vpinsrd','vpinsrq',
            'vpsadbw','vmpsadbw','vphminposuw',
            'vpcmpestri','vpcmpestrm','vpcmpistri','vpcmpistrm',
            'vpclmulqdq','vaesenc','vaesenclast','vaesdec','vaesdeclast','vaeskeygenassist','vaesimc',
            'vldmxcsr','vstmxcsr','vzeroall','vzeroupper',
            /* AVX2 instructions */
            'vbroadcasti128','vpbroadcastb','vpbroadcastw','vpbroadcastd','vpbroadcastq',
            'vpblendd',
            'vpermd','vpermq','vperm2i128',
            'vextracti128','vinserti128',
            'vpmaskmovd','vpmaskmovq',
            'vpsllvd','vpsllvq','vpsravd','vpsrlvd',
            'vpgatherdd','vpgatherqd','vgatherdq','vgatherqq',
            'vpermps','vpermpd',
            'vgatherdpd','vgatherqpd','vgatherdps','vgatherqps',
            /* XOP instructions */
            'vfrczss','vfrczps','vfrczsd','vfrczpd',
            'vpermil2ps','vperlil2pd',
            'vpcomub','vpcomb','vpcomuw','vpcomw','vpcomud','vpcomd','vpcomuq','vpcomq',
            'vphaddubw','vphaddbw','vphaddubd','vphaddbd','vphaddubq','vphaddbq',
            'vphadduwd','vphaddwd','vphadduwq','vphaddwq','vphaddudq','vphadddq',
            'vphsubbw','vphsubwd','vphsubdq',
            'vpmacsdd','vpmacssdd','vpmacsdql','vpmacssdql','vpmacsdqh','vpmacssdqh',
            'vpmacsww','vpmacssww','vpmacswd','vpmacsswd',
            'vpmadcswd','vpmadcsswd',
            'vpcmov','vpperm',
            'vprotb','vprotw','vprotd','vprotq',
            'vpshab','vpshaw','vpshad','vpshaq',
            'vpshlb','vpshlw','vpshld','vpshlq',
            /* CVT16 instructions */
            'vcvtph2ps','vcvtps2ph',
            /* FMA4 instructions */
            'vfmaddss','vfmaddps','vfmaddsd','vfmaddpd',
            'vfmsubss','vfmsubps','vfmsubsd','vfmsubpd',
            'vnfmaddss','vnfmaddps','vnfmaddsd','vnfmaddpd',
            'vnfmsubss','vnfmsubps','vnfmsubsd','vnfmsubpd',
            'vfmaddsubps','vfmaddsubpd','vfmsubaddps','vfmsubaddpd',
            /* FMA3 instructions */
            'vfmadd132ss','vfmadd213ss','vfmadd231ss',
            'vfmadd132ps','vfmadd213ps','vfmadd231ps',
            'vfmadd132sd','vfmadd213sd','vfmadd231sd',
            'vfmadd132pd','vfmadd213pd','vfmadd231pd',
            'vfmaddsub132ps','vfmaddsub213ps','vfmaddsub231ps',
            'vfmaddsub132pd','vfmaddsub213pd','vfmaddsub231pd',
            'vfmsubadd132ps','vfmsubadd213ps','vfmsubadd231ps',
            'vfmsubadd132pd','vfmsubadd213pd','vfmsubadd231pd',
            'vfmsub132ss','vfmsub213ss','vfmsub231ss',
            'vfmsub132ps','vfmsub213ps','vfmsub231ps',
            'vfmsub132sd','vfmsub213sd','vfmsub231sd',
            'vfmsub132pd','vfmsub213pd','vfmsub231pd',
            'vfnmadd132ss','vfnmadd213ss','vfnmadd231ss',
            'vfnmadd132ps','vfnmadd213ps','vfnmadd231ps',
            'vfnmadd132sd','vfnmadd213sd','vfnmadd231sd',
            'vfnmadd132pd','vfnmadd213pd','vfnmadd231pd',
            'vfnmsub132ss','vfnmsub213ss','vfnmsub231ss',
            'vfnmsub132ps','vfnmsub213ps','vfnmsub231ps',
            'vfnmsub132sd','vfnmsub213sd','vfnmsub231sd',
            'vfnmsub132pd','vfnmsub213pd','vfnmsub231pd'
            ),
        /*registers*/
        4 => array(
            /* General-Purpose Registers */
            'al','ah','bl','bh','cl','ch','dl','dh','sil','dil','bpl','spl',
            'r8b','r9b','r10b','r11b','r12b','r13b','r14b','r15b',
            'ax','bx','cx','dx','si','di','bp','sp',
            'r8w','r9w','r10w','r11w','r12w','r13w','r14w','r15w',
            'eax','ebx','ecx','edx','esi','edi','ebp','esp',
            'r8d','r9d','r10d','r11d','r12d','r13d','r14d','r15d',
            'rax','rcx','rdx','rbx','rsp','rbp','rsi','rdi',
            'r8','r9','r10','r11','r12','r13','r14','r15',
            /* Debug Registers */
            'dr0','dr1','dr2','dr3','dr6','dr7',
            /* Control Registers */
            'cr0','cr2','cr3','cr4','cr8',
            /* Test Registers (Supported on Intel 486 only) */
            'tr3','tr4','tr5','tr6','tr7',
            /* Segment Registers */
            'cs','ds','es','fs','gs','ss',
            /* FPU Registers */
            'st','st0','st1','st2','st3','st4','st5','st6','st7',
            /* MMX Registers */
            'mm0','mm1','mm2','mm3','mm4','mm5','mm6','mm7',
            /* SSE Registers */
            'xmm0','xmm1','xmm2','xmm3','xmm4','xmm5','xmm6','xmm7',
            'xmm8','xmm9','xmm10','xmm11','xmm12','xmm13','xmm14','xmm15',
            /* AVX Registers */
            'ymm0','ymm1','ymm2','ymm3','ymm4','ymm5','ymm6','ymm7',
            'ymm8','ymm9','ymm10','ymm11','ymm12','ymm13','ymm14','ymm15'
            ),
        /*Directive*/
        5 => array(
            'db','dw','dd','dq','dt','do','dy',
            'resb','resw','resd','resq','rest','reso','resy','incbin','equ','times','safeseh',
            '__utf16__','__utf32__',
            'default','cpu','float','start','imagebase','osabi',
            '..start','..imagebase','..gotpc','..gotoff','..gottpoff','..got','..plt','..sym','..tlsie',
            'section','segment','__sect__','group','absolute',
            '.bss','.comment','.data','.lbss','.ldata','.lrodata','.rdata','.rodata','.tbss','.tdata','.text',
            'alloc','bss','code','exec','data','noalloc','nobits','noexec','nowrite','progbits','rdata','tls','write',
            'private','public','common','stack','overlay','class',
            'extern','global','import','export',
            '%define','%idefine','%xdefine','%ixdefine','%assign','%undef',
            '%defstr','%idefstr','%deftok','%ideftok',
            '%strcat','%strlen','%substr',
            '%macro','%imacro','%rmacro','%exitmacro','%endmacro','%unmacro',
            '%if','%ifn','%elif','%elifn','%else','%endif',
            '%ifdef','%ifndef','%elifdef','%elifndef',
            '%ifmacro','%ifnmacro','%elifmacro','%elifnmacro',
            '%ifctx','%ifnctx','%elifctx','%elifnctx',
            '%ifidn','%ifnidn','%elifidn','%elifnidn',
            '%ifidni','%ifnidni','%elifidni','%elifnidni',
            '%ifid','%ifnid','%elifid','%elifnid',
            '%ifnum','%ifnnum','%elifnum','%elifnnum',
            '%ifstr','%ifnstr','%elifstr','%elifnstr',
            '%iftoken','%ifntoken','%eliftoken','%elifntoken',
            '%ifempty','%ifnempty','%elifempty','%elifnempty',
            '%ifenv','%ifnenv','%elifenv','%elifnenv',
            '%rep','%exitrep','%endrep',
            '%while','%exitwhile','%endwhile',
            '%include','%pathsearch','%depend','%use',
            '%push','%pop','%repl','%arg','%local','%stacksize','flat','flat64','large','small',
            '%error','%warning','%fatal',
            '%00','.nolist','%rotate','%line','%!','%final','%clear',
            'struc','endstruc','istruc','at','iend',
            'align','alignb','sectalign',
            'bits','use16','use32','use64',
            '__nasm_major__','__nasm_minor__','__nasm_subminor__','___nasm_patchlevel__',
            '__nasm_version_id__','__nasm_ver__',
            '__file__','__line__','__pass__','__bits__','__output_format__',
            '__date__','__time__','__date_num__','__time_num__','__posix_time__',
            '__utc_date__','__utc_time__','__utc_date_num__','__utc_time_num__',
            '__float_daz__','__float_round__','__float__',
            /* Keywords from standard packages */
            '__use_altreg__',
            '__use_smartalign__','smartalign','__alignmode__',
            '__use_fp__','__infinity__','__nan__','__qnan__','__snan__',
            '__float8__','__float16__','__float32__','__float64__','__float80m__','__float80e__','__float128l__','__float128h__'
            ),
        /*Operands*/
        6 => array(
            'a16','a32','a64','o16','o32','o64','strict',
            'byte','word','dword','qword','tword','oword','yword','nosplit',
            '%0','%1','%2','%3','%4','%5','%6','%7','%8','%9',
            'abs','rel',
            'seg','wrt'
            )
        ),
    'SYMBOLS' => array(
        1 => array(
                '[', ']', '(', ')',
                '+', '-', '*', '/', '%',
                '.', ',', ';', ':'
            ),
        2 => array(
                '$','$$','%+','%?','%??'
            )
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #00007f; font-weight: bold;',
            2 => 'color: #0000ff;',
            3 => 'color: #b00040;',
            4 => 'color: #46aa03; font-weight: bold;',
            5 => 'color: #0000ff; font-weight: bold;',
            6 => 'color: #0000ff; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #adadad; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900; font-weight: bold;'
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
            1 => 'color: #339933;',
            2 => 'color: #0000ff; font-weight: bold;'
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
        5 => '',
        6 => ''
        ),
    'NUMBERS' =>
        GESHI_NUMBER_BIN_PREFIX_PERCENT |
        GESHI_NUMBER_BIN_SUFFIX |
        GESHI_NUMBER_HEX_PREFIX |
        GESHI_NUMBER_HEX_SUFFIX |
        GESHI_NUMBER_OCT_SUFFIX |
        GESHI_NUMBER_INT_BASIC |
        GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F |
        GESHI_NUMBER_FLT_SCI_ZERO,
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
    'TAB_WIDTH' => 8,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "(?<![a-zA-Z0-9\$_\|\#>|^])",
            'DISALLOWED_AFTER' => "(?![a-zA-Z0-9_<\|%])"
        )
    )
);

?>