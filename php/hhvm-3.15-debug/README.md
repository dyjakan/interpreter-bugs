```
(1 of 1) - Hash: f59dad42e4f30769ec3123e069db1593.316dcd4296c68cdce3c51c1ea8a385da
---CRASH SUMMARY---
Filename: /home/ad/crash/ecee77db29e8ba7cd5d5b15eee2579ddffe4a3432d2d1c5ab527a62d65fb51d9.php
SHA1: b2beabf4772eb9ece3c7ff5c28efdbfa257472e3
Classification: EXPLOITABLE
Hash: f59dad42e4f30769ec3123e069db1593.316dcd4296c68cdce3c51c1ea8a385da
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/ecee77db29e8ba7cd5d5b15eee2579ddffe4a3432d2d1c5ab527a62d65fb51d9.php
Faulting Frame:
   constructValHelper @ 0x0000000005349884: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000005349870: mov rax,QWORD PTR [rbp-0x38]
   0x0000000005349874: mov QWORD PTR [rbp-0x28],rax
   0x0000000005349878: mov rax,QWORD PTR [rbp-0x40]
   0x000000000534987c: mov QWORD PTR [rbp-0x20],rax
   0x0000000005349880: mov rax,QWORD PTR [rbp-0x20]
=> 0x0000000005349884: mov rdx,QWORD PTR [rax]
   0x0000000005349887: mov rax,QWORD PTR [rax+0x8]
   0x000000000534988b: mov rdi,rdx
   0x000000000534988e: mov rsi,rax
   0x0000000005349891: call 0x53f235d <HPHP::tvIsPlausible(HPHP::TypedValue)>
Stack Head (13 entries):
   constructValHelper        @ 0x0000000005349884: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Variant::Variant    @ 0x0000000005349884: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::WddxPacket::add_var @ 0x000000000692ec75: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::find_var_recursive  @ 0x0000000006930294: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::serialize_vars_help @ 0x00000000069305a8: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_wddx_serialize_va @ 0x0000000006930863: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d80007a: in [heap]
   None                      @ 0x00007fffe19bffb0: in
   None                      @ 0x0000000011800068: in [heap]
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x00007fffe19bff20 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x00007fffffffc870 rbp=0x00007fffffffc800 rsp=0x00007fffffffc7c0
 r8=0x0000000000000000  r9=0x3e7463757274733c r10=0x0000000000000000 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe19bffb0 r14=0x00007fffe25f5000 r15=0x0000000000000001
rip=0x0000000005349884 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: d35cc044be33bb7f96e76a2ec1006e7d.d871cdc26111c9fe14e81d0f9723a2eb
---CRASH SUMMARY---
Filename: /home/ad/crash/7603367e82ec78e010f742ee5b404096f65244f28856a312bf6fb41eff1bb21f.php
SHA1: 0828201165818a0ceb76c4a07c592977c9936388
Classification: EXPLOITABLE
Hash: d35cc044be33bb7f96e76a2ec1006e7d.d871cdc26111c9fe14e81d0f9723a2eb
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/7603367e82ec78e010f742ee5b404096f65244f28856a312bf6fb41eff1bb21f.php
Faulting Frame:
   std::_Rb_tree<std::string, std::pair<std::string const, std::string>, std::_Select1st<std::pair<std::string const, std::string> >, std::less<std::string>, std::allocator<std::pair<std::string const, std::string> > >::size @ 0x0000000004c16192: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000004c16186: push rbp
   0x0000000004c16187: mov rbp,rsp
   0x0000000004c1618a: mov QWORD PTR [rbp-0x8],rdi
   0x0000000004c1618e: mov rax,QWORD PTR [rbp-0x8]
=> 0x0000000004c16192: mov rax,QWORD PTR [rax+0x28]
   0x0000000004c16196: pop rbp
   0x0000000004c16197: ret
Stack Head (7 entries):
   std::_Rb_tree<std::string @ 0x0000000004c16192: in std::_Select1st<std::pair<std::string const, std::string> >, std::less<std::string>, std::allocator<std::pair<std::string const, std::string> > >::size at 0x4c16192 in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DOMNode::nodep      @ 0x0000000006762cf6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::save_html_or_xml    @ 0x0000000006a3c23f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::c_DOMDocument_ni_sa @ 0x0000000006a3c15d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d800ac5: in [heap]
   None                      @ 0x00007fffe19bff20: in
   None                      @ 0x0000000000000000: in ?
Registers:
rax=0x0000000065646f6e rbx=0x00007fffe68f0020 rcx=0x00007fffffffc990 rdx=0x00007fffffffc960
rsi=0x00007fffe68f0018 rdi=0x0000000065646f6e rbp=0x00007fffffffc860 rsp=0x00007fffffffc860
 r8=0x0000000000000000  r9=0x00007fffe80ad290 r10=0x0000000000000000 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe19bff30 r14=0x00007fffe1d034c0 r15=0x0000000000000001
rip=0x0000000004c16192 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 46b77f2bbdacc32a683b94d5f0be629a.daa4d35dda399a7a4ff0447759414f69
---CRASH SUMMARY---
Filename: /home/ad/crash/72c0ba429f7638ad079a792e585fec994ba9c9d611867bde2c1d928405ebf61d.php
SHA1: e0848f86b82e9743e300b9276ffa0a60274656d3
Classification: EXPLOITABLE
Hash: 46b77f2bbdacc32a683b94d5f0be629a.daa4d35dda399a7a4ff0447759414f69
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/72c0ba429f7638ad079a792e585fec994ba9c9d611867bde2c1d928405ebf61d.php
Faulting Frame:
   icu_52::Calendar::getTimeInMillis(UErrorCode&) const @ 0x00007ffff6971d40: in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
Disassembly:
   0x00007ffff6971d33: add rsp,0x18
   0x00007ffff6971d37: pop rbx
   0x00007ffff6971d38: pop rbp
   0x00007ffff6971d39: ret
   0x00007ffff6971d3a: nop WORD PTR [rax+rax*1+0x0]
=> 0x00007ffff6971d40: cmp BYTE PTR [rdi+0x8],0x0
   0x00007ffff6971d44: mov rbp,rdi
   0x00007ffff6971d47: je 0x7ffff6971d60 <_ZNK6icu_528Calendar15getTimeInMillisER10UErrorCode+64>
   0x00007ffff6971d49: movsd xmm0,QWORD PTR [rbp+0xe0]
   0x00007ffff6971d51: add rsp,0x18
Stack Head (11 entries):
   icu_52::Calendar::getTime @ 0x00007ffff6971d40: in in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::Calendar::equals( @ 0x00007ffff6971e2f: in at 0x7ffff6971e2f in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   HPHP::Intl::intlcal_compa @ 0x0000000006a56b90: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Intl::c_IntlCalenda @ 0x0000000006a56f43: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c00ccb: in [heap]
   None                      @ 0x00007fffe19bff60: in
   None                      @ 0x00007ffff7fbf3c0: in
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000001 rbx=0x00007fffffffc97c rcx=0x00007fffe18b3e00 rdx=0x0000000000000000
rsi=0x00007fffffffc97c rdi=0x0000000000000038 rbp=0x00007fffffffc97c rsp=0x00007fffffffc8f0
 r8=0x0000000000000000  r9=0x00007fffe80ad290 r10=0x00007fffffffc710 r11=0x00007ffff6971e00
r12=0x00007fffe18b3e00 r13=0x00007fffe19bff60 r14=0xfeeefeee000f000f r15=0x0000000000000001
rip=0x00007ffff6971d40 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 29edd469aa5c532b085731d227087bc0.29edd469aa5c532b085731d227087bc0
---CRASH SUMMARY---
Filename: /home/ad/crash/07750c543ef623ae151c7bfc7ffef2ee7cd5097a11b614a7c12183be04a9d5b9.php
SHA1: 2880a6c5e5cc969b33ac6eb3da38ce995848064e
Classification: EXPLOITABLE
Hash: 29edd469aa5c532b085731d227087bc0.29edd469aa5c532b085731d227087bc0
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/07750c543ef623ae151c7bfc7ffef2ee7cd5097a11b614a7c12183be04a9d5b9.php
Faulting Frame:
   None @ 0x000000000d80009d: in [heap]
Disassembly:
Stack Head (3 entries):
   None                      @ 0x000000000d80009d: in [heap]
   None                      @ 0x00007fffe19bffa0: in
   None                      @ 0x0000000000000000: in ?
Registers:
rax=0x00007fffe19bff80 rbx=0x0000000000000000 rcx=0x00007fffe19bff80 rdx=0x0000000000000017
rsi=0x000000000000001d rdi=0x00007fffe193e758 rbp=0x00007fffe19bff80 rsp=0x00007fffffffc9d0
 r8=0x0000000000000000  r9=0x00007fffe80ad290 r10=0x00007fffffffb3e0 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe7226b20 r14=0x00007fffe25f5000 r15=0x0000000000000001
rip=0x000000000d80009d efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 36e2139cac5947519526e308002cd9cd.5af318df22542f86cda5360e5fbc6f49
---CRASH SUMMARY---
Filename: /home/ad/crash/96e48220c3b8d095a0ab73df52c02f7232d850bab161983789124cee88075e4f.php
SHA1: 0a47d535f7603d40644dc75bda6fb6161f278f54
Classification: EXPLOITABLE
Hash: 36e2139cac5947519526e308002cd9cd.5af318df22542f86cda5360e5fbc6f49
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/96e48220c3b8d095a0ab73df52c02f7232d850bab161983789124cee88075e4f.php
Faulting Frame:
   HPHP::StringData::data @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000004bf72ba: push rbp
   0x0000000004bf72bb: mov rbp,rsp
   0x0000000004bf72be: mov QWORD PTR [rbp-0x8],rdi
   0x0000000004bf72c2: mov rax,QWORD PTR [rbp-0x8]
=> 0x0000000004bf72c6: mov rax,QWORD PTR [rax]
   0x0000000004bf72c9: pop rbp
   0x0000000004bf72ca: ret
Stack Head (19 entries):
   HPHP::StringData::data    @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Func::shared        @ 0x0000000004c92d9c: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Func::numLocals     @ 0x0000000005372bbe: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Generator::~Generat @ 0x00000000067ba80f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Native::nativeDataI @ 0x00000000067bd29e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Native::nativeDataI @ 0x0000000005889fc2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ObjectData::release @ 0x00000000052fffd2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ObjectData::release @ 0x000000000530031e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c003a6: in [heap]
   None                      @ 0x00007fffe19bff60: in
   None                      @ 0x0000000000000037: in ?
   None                      @ 0x0000000009c0047f: in [heap]
   None                      @ 0x0000000009c00b6b: in [heap]
   None                      @ 0x00007fffe19bff60: in
   None                      @ 0x00007ffff7fbf3c0: in
   None                      @ 0x0000000009c0004f: in [heap]
Registers:
rax=0x0000000000000058 rbx=0x00007fffe19bff50 rcx=0x00007fffe7335ca0 rdx=0x0000000000000001
rsi=0x0000000000000800 rdi=0x0000000000000058 rbp=0x00007fffffffc6e0 rsp=0x00007fffffffc6e0
 r8=0x00007ffff7fbf3c0  r9=0x6f746172656e6547 r10=0x0000000000000000 r11=0x0000000000000246
r12=0x00007fffe25f5000 r13=0x00007fffe19bff60 r14=0x00007fffe25f5001 r15=0x0000000000000002
rip=0x0000000004bf72c6 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: 5bbaea5ee84063d0d6a7589392f5be10.534bd4bbe78b2357dcc7b6c654b51956
---CRASH SUMMARY---
Filename: /home/ad/crash/ca9b2396f8c9c2de4602745eeed131fc69e3d930b24eff29e51d07c137639b5f.php
SHA1: 2bca02d5f6aeb2d91a5aed05986430e069982873
Classification: UNKNOWN
Hash: 5bbaea5ee84063d0d6a7589392f5be10.534bd4bbe78b2357dcc7b6c654b51956
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/ca9b2396f8c9c2de4602745eeed131fc69e3d930b24eff29e51d07c137639b5f.php
Faulting Frame:
   HPHP::PlainFile::writeImpl @ 0x000000000536b38e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff054bc27: movsxd rdx,edi
   0x00007ffff054bc2a: movsxd rsi,esi
   0x00007ffff054bc2d: movsxd rdi,ecx
   0x00007ffff054bc30: mov eax,0xea
   0x00007ffff054bc35: syscall
=> 0x00007ffff054bc37: cmp rax,0xfffffffffffff000
   0x00007ffff054bc3d: ja 0x7ffff054bc5d <__GI_raise+93>
   0x00007ffff054bc3f: repz ret
   0x00007ffff054bc41: nop DWORD PTR [rax+0x0]
   0x00007ffff054bc48: test ecx,ecx
Stack Head (18 entries):
   __GI_raise                @ 0x00007ffff054bc37: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI_abort                @ 0x00007ffff054f028: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __assert_fail_base        @ 0x00007ffff0544bf6: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI___assert_fail        @ 0x00007ffff0544ca2: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::PlainFile::writeImp @ 0x000000000536b38e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::XMLWriterData::writ @ 0x00000000067e6623: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   xmlOutputBufferFlush      @ 0x00007ffff4a65369: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   xmlOutputBufferClose      @ 0x00007ffff4a65418: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   xmlFreeTextWriter         @ 0x00007ffff4b043ff: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   HPHP::XMLWriterData::swee @ 0x00000000067e458f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Native::callSweep<H @ 0x00000000067ed9e3: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MemoryManager::swee @ 0x000000000543b013: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::hphp_memory_cleanup @ 0x00000000051a76b7: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::hphp_session_exit   @ 0x00000000051a7867: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::execute_command_lin @ 0x000000000519d223: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::execute_program_imp @ 0x00000000051a31a7: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x00007ffff7ff2000 rcx=0x00007ffff054bc37 rdx=0x0000000000000006
rsi=0x0000000000000e55 rdi=0x0000000000000e55 rbp=0x00007ffff06953b8 rsp=0x00007fffffffce68
 r8=0xfefefefefefefeff  r9=0xfefefefefefefeff r10=0x0000000000000008 r11=0x0000000000000206
r12=0x00000000079d2636 r13=0x00000000079d38a0 r14=0x0000000000000001 r15=0x0000000000000001
rip=0x00007ffff054bc37 efl=0x0000000000000206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Abort signal
   Short description: AbortSignal (20/22)
   Explanation: The target is stopped on a SIGABRT. SIGABRTs are often generated by libc and compiled check-code to indicate potentially exploitable conditions. Unfortunately this command does not yet further analyze these crashes.
---END SUMMARY---
(1 of 2) - Hash: 54c31a2d134ce2038dacc79afe1c4e9e.17923863f189c82d9e280e38f4a9c628
---CRASH SUMMARY---
Filename: /home/ad/crash/17b95980e2bbbeeef73e044672732e8646ac60ae87b1cd7a2492341d98de4f87.php
SHA1: acaab2718206894de09603a524f9ef403a7829e5
Classification: UNKNOWN
Hash: 54c31a2d134ce2038dacc79afe1c4e9e.17923863f189c82d9e280e38f4a9c628
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/17b95980e2bbbeeef73e044672732e8646ac60ae87b1cd7a2492341d98de4f87.php
Faulting Frame:
   HPHP::PlainFile::writeImpl @ 0x000000000536b38e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff054bc27: movsxd rdx,edi
   0x00007ffff054bc2a: movsxd rsi,esi
   0x00007ffff054bc2d: movsxd rdi,ecx
   0x00007ffff054bc30: mov eax,0xea
   0x00007ffff054bc35: syscall
=> 0x00007ffff054bc37: cmp rax,0xfffffffffffff000
   0x00007ffff054bc3d: ja 0x7ffff054bc5d <__GI_raise+93>
   0x00007ffff054bc3f: repz ret
   0x00007ffff054bc41: nop DWORD PTR [rax+0x0]
   0x00007ffff054bc48: test ecx,ecx
Stack Head (18 entries):
   __GI_raise                @ 0x00007ffff054bc37: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI_abort                @ 0x00007ffff054f028: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __assert_fail_base        @ 0x00007ffff0544bf6: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI___assert_fail        @ 0x00007ffff0544ca2: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::PlainFile::writeImp @ 0x000000000536b38e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::XMLWriterData::writ @ 0x00000000067e6623: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   xmlOutputBufferFlush      @ 0x00007ffff4a653b1: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   xmlOutputBufferClose      @ 0x00007ffff4a65418: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   xmlFreeTextWriter         @ 0x00007ffff4b043ff: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   HPHP::XMLWriterData::swee @ 0x00000000067e458f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Native::callSweep<H @ 0x00000000067ed9e3: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MemoryManager::swee @ 0x000000000543b013: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::hphp_memory_cleanup @ 0x00000000051a76b7: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::hphp_session_exit   @ 0x00000000051a7867: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::execute_command_lin @ 0x000000000519d223: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::execute_program_imp @ 0x00000000051a31a7: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x00007ffff7ff2000 rcx=0x00007ffff054bc37 rdx=0x0000000000000006
rsi=0x0000000000000b63 rdi=0x0000000000000b63 rbp=0x00007ffff06953b8 rsp=0x00007fffffffce68
 r8=0xfefefefefefefeff  r9=0xfefefefefefefeff r10=0x0000000000000008 r11=0x0000000000000206
r12=0x00000000079d2636 r13=0x00000000079d38a0 r14=0x0000000000000001 r15=0x0000000000000001
rip=0x00007ffff054bc37 efl=0x0000000000000206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Abort signal
   Short description: AbortSignal (20/22)
   Explanation: The target is stopped on a SIGABRT. SIGABRTs are often generated by libc and compiled check-code to indicate potentially exploitable conditions. Unfortunately this command does not yet further analyze these crashes.
---END SUMMARY---
(1 of 1) - Hash: 940e7f5818dd6c61adac14dcc7dc6a08.b7be0c61bd314809f636e1bd1eda7f28
---CRASH SUMMARY---
Filename: /home/ad/crash/23189f828722b8443c7d7af664d67aae51e63249e7b7f450a4fcd7893b449dc5.php
SHA1: bf9c5dca5cb939e1132a2ac35925fd2cd428f172
Classification: EXPLOITABLE
Hash: 940e7f5818dd6c61adac14dcc7dc6a08.b7be0c61bd314809f636e1bd1eda7f28
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/23189f828722b8443c7d7af664d67aae51e63249e7b7f450a4fcd7893b449dc5.php
Faulting Frame:
   HPHP::PlainDirectory::read @ 0x000000000539768d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff05d1f80: cmp DWORD PTR [rip+0x3070ed],0x0 # 0x7ffff08d9074 <__libc_multiple_threads>
   0x00007ffff05d1f87: je 0x7ffff05d1f96 <__readdir_r+70>
   0x00007ffff05d1f89: lock cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d1f8e: jne 0x7ffff05d20c0 <_L_lock_43>
   0x00007ffff05d1f94: jmp 0x7ffff05d1fa0 <__readdir_r+80>
=> 0x00007ffff05d1f96: cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d1f9a: jne 0x7ffff05d20c0 <_L_lock_43>
   0x00007ffff05d1fa0: mov rcx,QWORD PTR [rbx+0x18]
   0x00007ffff05d1fa4: mov r14,QWORD PTR [rbx+0x10]
   0x00007ffff05d1fa8: lea rbp,[rbx+0x30]
Stack Head (8 entries):
   __readdir_r               @ 0x00007ffff05d1f96: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::PlainDirectory::rea @ 0x000000000539768d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_readdir           @ 0x000000000694f665: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c00c58: in [heap]
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x0000000000000000 rcx=0x00007fffffffc850 rdx=0x00007fffffffc848
rsi=0x0000000000000001 rdi=0x0000000000000000 rbp=0x00007fffffffc980 rsp=0x00007fffffffc7c0
 r8=0x00007fffe68f0010  r9=0x0000000007961c80 r10=0x00007fffffffc730 r11=0x0000000000000206
r12=0x00007fffe25f5000 r13=0x0000000000000000 r14=0x00007fffffffc911 r15=0x0000000000000001
rip=0x00007ffff05d1f96 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: a8b41c23d2719512536b24553b0b253b.ad2e551a04a439e378a291fe589d5708
---CRASH SUMMARY---
Filename: /home/ad/crash/2e212e0fdef154db26a29ea567d62ded9593a9399147cf07b87f1f048783ff48.php
SHA1: d028ef64abf56d4393ba7593ac540e130aa68941
Classification: EXPLOITABLE
Hash: a8b41c23d2719512536b24553b0b253b.ad2e551a04a439e378a291fe589d5708
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/2e212e0fdef154db26a29ea567d62ded9593a9399147cf07b87f1f048783ff48.php
Faulting Frame:
   None @ 0x00007ffff7bc28af: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
Disassembly:
Stack Head (14 entries):
   None                      @ 0x00007ffff7bc28af: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
   HPHP::BigHeap::allocBig   @ 0x000000000543e04d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MemoryManager::mall @ 0x000000000543e96f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   objMalloc                 @ 0x00000000053fcb21: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   reqAllocArray             @ 0x00000000053fcb21: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MixedArray::MakeRes @ 0x00000000053fcb21: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MixedArray::MakeRes @ 0x000000000519327b: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MixedArray::MakeRes @ 0x00000000053fcdc7: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ArrayUtil::Pad      @ 0x000000000542f55d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::__lambda178::operat @ 0x00000000069e0bc2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_array_pad         @ 0x00000000069e0cfa: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d800e61: in [heap]
   None                      @ 0x00007fffe19bfee0: in
   None                      @ 0x0000000000000000: in ?
Registers:
rax=0x0000000000000000 rbx=0x0000000000000000 rcx=0x00000000ffffffff rdx=0x0000000000000001
rsi=0x00007fffffffc5f0 rdi=0x00007ffff7dd9440 rbp=0x00007fffffffc680 rsp=0x00007fffffffc5f0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007fffffffc400 r11=0x00007ffff7baec90
r12=0x00007fffffffc8e0 r13=0x0000000009b6c890 r14=0x0000000000000000 r15=0x0000000000000001
rip=0x00007ffff7bc28af efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 5b983201c8edc7c34522cab0de447074.5b983201c8edc7c34522cab0de447074
---CRASH SUMMARY---
Filename: /home/ad/crash/f2ad3c67d9e03fd7cf16288a5e546847d8e56c5ad12be248d33d64321afc56ec.php
SHA1: bb56702917f5d182e42f659345a28f2829a48d6b
Classification: EXPLOITABLE
Hash: 5b983201c8edc7c34522cab0de447074.5b983201c8edc7c34522cab0de447074
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/f2ad3c67d9e03fd7cf16288a5e546847d8e56c5ad12be248d33d64321afc56ec.php
Faulting Frame:
   None @ 0x000000000d8000b4: in [heap]
Disassembly:
Stack Head (3 entries):
   None                      @ 0x000000000d8000b4: in [heap]
   None                      @ 0x00007fffe19bffa0: in
   None                      @ 0x0000000000000000: in ?
Registers:
rax=0x00007fffe19bff80 rbx=0x00007fffe19bff80 rcx=0x00007fffe19bff80 rdx=0x0000000000000006
rsi=0x000000000000001d rdi=0x0000000000000000 rbp=0x00007fffe19bff80 rsp=0x00007fffffffc9d0
 r8=0x0000000000000000  r9=0x00007fffe80ad290 r10=0x0000000000000000 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe1d773a0 r14=0x00007fffe25f5000 r15=0x0000000000000001
rip=0x000000000d8000b4 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 2b901801b4b4170103cd8de068ed52f4.3bf9877767931b46794f4eb4c69d71c2
---CRASH SUMMARY---
Filename: /home/ad/crash/51dba738e12dc94378456fcb68ecc50eb05a93cd1138f4390b4817ab6a0e163c.php
SHA1: 597e322b04b86d5a91f1f6741bb8fed2992bcd38
Classification: EXPLOITABLE
Hash: 2b901801b4b4170103cd8de068ed52f4.3bf9877767931b46794f4eb4c69d71c2
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/51dba738e12dc94378456fcb68ecc50eb05a93cd1138f4390b4817ab6a0e163c.php
Faulting Frame:
   HPHP::StringData::data @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000004bf72ba: push rbp
   0x0000000004bf72bb: mov rbp,rsp
   0x0000000004bf72be: mov QWORD PTR [rbp-0x8],rdi
   0x0000000004bf72c2: mov rax,QWORD PTR [rbp-0x8]
=> 0x0000000004bf72c6: mov rax,QWORD PTR [rax]
   0x0000000004bf72c9: pop rbp
   0x0000000004bf72ca: ret
Stack Head (9 entries):
   HPHP::StringData::data    @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateInterval::getYe @ 0x00000000051e9a38: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateTime::rfcFormat @ 0x00000000053aa59d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateTime::toString  @ 0x00000000053a9eb9: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateTimeData::forma @ 0x0000000006b7e74a: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::c_DateTime_ni_forma @ 0x0000000006b7f359: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c00d4b: in [heap]
   None                      @ 0x00007fffe19bff30: in
   None                      @ 0x0000000000000000: in ?
Registers:
rax=0x0000000000000020 rbx=0x00007fffe68eff60 rcx=0x00007fffe68f0018 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x0000000000000020 rbp=0x00007fffffffc7e0 rsp=0x00007fffffffc7e0
 r8=0x0000000000000000  r9=0x00007ffff0665940 r10=0x0000000000000001 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe19bff30 r14=0x00007fffe68eff60 r15=0x0000000000000001
rip=0x0000000004bf72c6 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: f3bb9da0bd357cb512b75c65bff9bccf.bcee80d6ed866bd6dd055bf75e047737
---CRASH SUMMARY---
Filename: /home/ad/crash/4b4d6ced107d42de909d6a7fa3de47356b4b6fccf80721d8877e95337178462a.php
SHA1: 4db67f4742935962712d924387b8d4e8cd8d8f0c
Classification: UNKNOWN
Hash: f3bb9da0bd357cb512b75c65bff9bccf.bcee80d6ed866bd6dd055bf75e047737
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/4b4d6ced107d42de909d6a7fa3de47356b4b6fccf80721d8877e95337178462a.php
Faulting Frame:
   HPHP::FuncEmitter::lookupVarId @ 0x0000000004c935f2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff054bc27: movsxd rdx,edi
   0x00007ffff054bc2a: movsxd rsi,esi
   0x00007ffff054bc2d: movsxd rdi,ecx
   0x00007ffff054bc30: mov eax,0xea
   0x00007ffff054bc35: syscall
=> 0x00007ffff054bc37: cmp rax,0xfffffffffffff000
   0x00007ffff054bc3d: ja 0x7ffff054bc5d <__GI_raise+93>
   0x00007ffff054bc3f: repz ret
   0x00007ffff054bc41: nop DWORD PTR [rax+0x0]
   0x00007ffff054bc48: test ecx,ecx
Stack Head (34 entries):
   __GI_raise                @ 0x00007ffff054bc37: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI_abort                @ 0x00007ffff054f028: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __assert_fail_base        @ 0x00007ffff0544bf6: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI___assert_fail        @ 0x00007ffff0544ca2: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::FuncEmitter::lookup @ 0x0000000004c935f2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Compiler::EmitterVi @ 0x0000000004ce036d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Compiler::EmitterVi @ 0x0000000004cd4224: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Compiler::EmitterVi @ 0x0000000004cd24a2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Compiler::EmitterVi @ 0x0000000004cd36a5: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Compiler::EmitterVi @ 0x0000000004cd24a2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Compiler::EmitterVi @ 0x0000000004cd36a5: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Compiler::EmitterVi @ 0x0000000004cd24a2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Compiler::EmitterVi @ 0x0000000004cd36a5: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Compiler::EmitterVi @ 0x0000000004cd24a2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Compiler::EmitterVi @ 0x0000000004cd36a5: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Compiler::EmitterVi @ 0x0000000004cd09b9: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x00007ffff7ff3000 rcx=0x00007ffff054bc37 rdx=0x0000000000000006
rsi=0x0000000000000c3f rdi=0x0000000000000c3f rbp=0x00007ffff06953b8 rsp=0x00007fffffff6778
 r8=0xfefefefefefefeff  r9=0xfefefeff092d6364 r10=0x0000000000000008 r11=0x0000000000000206
r12=0x00000000076e0752 r13=0x00000000076f0220 r14=0x0000000000000001 r15=0x0000000000000001
rip=0x00007ffff054bc37 efl=0x0000000000000206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Abort signal
   Short description: AbortSignal (20/22)
   Explanation: The target is stopped on a SIGABRT. SIGABRTs are often generated by libc and compiled check-code to indicate potentially exploitable conditions. Unfortunately this command does not yet further analyze these crashes.
---END SUMMARY---
(1 of 4) - Hash: 4996369e7b9b27d481369d7a69483258.b0991c20910e1cf7130cdaf9ca3652b1
---CRASH SUMMARY---
Filename: /home/ad/crash/3b12f14aa911ef219db2470effe5d1a175775a480d2bfced347d3da94e25f867.php
SHA1: 83b7193f52d23f6c206ee416c33e2101c65eb863
Classification: UNKNOWN
Hash: 4996369e7b9b27d481369d7a69483258.b0991c20910e1cf7130cdaf9ca3652b1
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/3b12f14aa911ef219db2470effe5d1a175775a480d2bfced347d3da94e25f867.php
Faulting Frame:
   HPHP::PtrMap::prepare @ 0x000000000535a729: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff054bc27: movsxd rdx,edi
   0x00007ffff054bc2a: movsxd rsi,esi
   0x00007ffff054bc2d: movsxd rdi,ecx
   0x00007ffff054bc30: mov eax,0xea
   0x00007ffff054bc35: syscall
=> 0x00007ffff054bc37: cmp rax,0xfffffffffffff000
   0x00007ffff054bc3d: ja 0x7ffff054bc5d <__GI_raise+93>
   0x00007ffff054bc3f: repz ret
   0x00007ffff054bc41: nop DWORD PTR [rax+0x0]
   0x00007ffff054bc48: test ecx,ecx
Stack Head (13 entries):
   __GI_raise                @ 0x00007ffff054bc37: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI_abort                @ 0x00007ffff054f028: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __assert_fail_base        @ 0x00007ffff0544bf6: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI___assert_fail        @ 0x00007ffff0544ca2: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::PtrMap::prepare     @ 0x000000000535a729: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MemoryManager::chec @ 0x000000000543ba38: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MemoryManager::swee @ 0x000000000543b1c0: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::hphp_memory_cleanup @ 0x00000000051a76b7: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::hphp_session_exit   @ 0x00000000051a7867: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::execute_command_lin @ 0x000000000519d223: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::execute_program_imp @ 0x00000000051a31a7: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::execute_program     @ 0x000000000519f652: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   main                      @ 0x0000000004c0bfde: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x00007ffff7ff3000 rcx=0x00007ffff054bc37 rdx=0x0000000000000006
rsi=0x0000000000000bf8 rdi=0x0000000000000bf8 rbp=0x00007ffff06953b8 rsp=0x00007fffffffcca8
 r8=0xfefefefefefefeff  r9=0xfeff7efee0ccff09 r10=0x0000000000000008 r11=0x0000000000000202
r12=0x00000000079cac5b r13=0x00000000079cc490 r14=0x0000000000000001 r15=0x0000000000000001
rip=0x00007ffff054bc37 efl=0x0000000000000202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Abort signal
   Short description: AbortSignal (20/22)
   Explanation: The target is stopped on a SIGABRT. SIGABRTs are often generated by libc and compiled check-code to indicate potentially exploitable conditions. Unfortunately this command does not yet further analyze these crashes.
---END SUMMARY---
(1 of 1) - Hash: 499d2c4afc3186c6ebd38aee35c6bb10.f943fff1f5eb47db2e6daf1aa7fe55fa
---CRASH SUMMARY---
Filename: /home/ad/crash/74c1657cb9ccf41a20c550c7b5256696a816180ab3ff37fb8b2b733cfa67bd4a.php
SHA1: 6851f73e41bc44ec56af0d4df325480d3b09b3c1
Classification: EXPLOITABLE
Hash: 499d2c4afc3186c6ebd38aee35c6bb10.f943fff1f5eb47db2e6daf1aa7fe55fa
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/74c1657cb9ccf41a20c550c7b5256696a816180ab3ff37fb8b2b733cfa67bd4a.php
Faulting Frame:
   HPHP::StringData::hash @ 0x0000000004c3f33e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000004c3f32e: push rbp
   0x0000000004c3f32f: mov rbp,rsp
   0x0000000004c3f332: sub rsp,0x20
   0x0000000004c3f336: mov QWORD PTR [rbp-0x18],rdi
   0x0000000004c3f33a: mov rax,QWORD PTR [rbp-0x18]
=> 0x0000000004c3f33e: mov eax,DWORD PTR [rax+0x14]
   0x0000000004c3f341: and eax,0x7fffffff
   0x0000000004c3f346: mov DWORD PTR [rbp-0x4],eax
   0x0000000004c3f349: cmp DWORD PTR [rbp-0x4],0x0
   0x0000000004c3f34d: jne 0x4c3f35d <HPHP::StringData::hash() const+47>
Stack Head (12 entries):
   HPHP::StringData::hash    @ 0x0000000004c3f33e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::string_data_hash::o @ 0x0000000004c3f406: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   folly::AtomicHashArray<ch @ 0x000000000517fac7: in HPHP::HotCache::Hasher, HPHP::HotCache::EqualityTester, HPHP::HotCache::HotMapAllocator, folly::AtomicHashArrayLinearProbeFcn, HPHP::HotCache::KeyConverter>::keyToAnchorIdx<HPHP::StringData const*, HPHP::HotCache::Hasher> at 0x517fac7 in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   folly::AtomicHashArray<HP @ 0x00000000058c78b4: in HPHP::ahm_string_data_isame, HPHP::LowAllocator<char>, folly::AtomicHashArrayLinearProbeFcn, folly::detail::AHAIdentity>::findInternal<HPHP::StringData const*, HPHP::string_data_hash, HPHP::ahm_string_data_isame> at 0x58c78b4 in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   folly::AtomicHashMap<HPHP @ 0x00000000058c6dc0: in HPHP::ahm_string_data_isame, HPHP::LowAllocator<char>, folly::AtomicHashArrayLinearProbeFcn, folly::detail::AHAIdentity>::findInternal<HPHP::StringData const*, HPHP::string_data_hash, HPHP::ahm_string_data_isame> at 0x58c6dc0 in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   folly::AtomicHashMap<HPHP @ 0x00000000058c636b: in HPHP::ahm_string_data_isame, HPHP::LowAllocator<char>, folly::AtomicHashArrayLinearProbeFcn, folly::detail::AHAIdentity>::find<HPHP::StringData const*, HPHP::string_data_hash, HPHP::ahm_string_data_isame> at 0x58c636b in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::NamedEntity::get    @ 0x00000000058c53c0: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Unit::lookupClass   @ 0x000000000514bf2c: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::c_SoapServer_ni_get @ 0x0000000006bfa4a6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d80036f: in [heap]
   None                      @ 0x00007fffe19bff40: in
   None                      @ 0x0000000000000000: in ?
Registers:
rax=0x0000000000000000 rbx=0x00007fffe6900ea0 rcx=0xfffffffffffffffd rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x0000000000000000 rbp=0x00007fffffffc650 rsp=0x00007fffffffc630
 r8=0x0000000000000000  r9=0x00007fffe80ad290 r10=0x0000000000000001 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe19bff40 r14=0x00007fffe25f5000 r15=0x0000000000000001
rip=0x0000000004c3f33e efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: 1d94b049e7028c370bfcfb3158438f08.5ddb990d13a9a803176282d857f44d8f
---CRASH SUMMARY---
Filename: /home/ad/crash/8824000cc3ac1790473c5986238ec36d2d3c48d26eeebd292242bc3bf4672994.php
SHA1: 1efe234a3b3497c24775a002697321555d901ad4
Classification: EXPLOITABLE
Hash: 1d94b049e7028c370bfcfb3158438f08.5ddb990d13a9a803176282d857f44d8f
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/8824000cc3ac1790473c5986238ec36d2d3c48d26eeebd292242bc3bf4672994.php
Faulting Frame:
   HPHP::MixedArray::mask @ 0x0000000005158c6d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000005158c5c: sub rsp,0x10
   0x0000000005158c60: mov QWORD PTR [rbp-0x8],rdi
   0x0000000005158c64: mov rax,QWORD PTR [rbp-0x8]
   0x0000000005158c68: mov eax,DWORD PTR [rax+0x10]
   0x0000000005158c6b: mov edi,eax
=> 0x0000000005158c6d: call 0x5158b08 <HPHP::MixedArray::Mask(unsigned int)>
   0x0000000005158c72: leave
   0x0000000005158c73: ret
Stack Head (1000 entries):
   HPHP::MixedArray::mask    @ 0x0000000005158c6d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   findForInsertImpl<HPHP::M @ 0x0000000005400e57: in at 0x5400e57 in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MixedArray::findFor @ 0x0000000005400e57: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MixedArray::insert  @ 0x00000000054013ef: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MixedArray::addLval @ 0x00000000052b55bf: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MixedArray::LvalStr @ 0x0000000005404985: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ArrayData::lval     @ 0x00000000051b953c: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ArrayData::lval     @ 0x00000000051b9215: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Array::lvalAtImpl<H @ 0x0000000005358ba6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Array::lvalAt       @ 0x000000000535161e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::php_array_merge_rec @ 0x00000000069dcf9f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::php_array_merge_rec @ 0x00000000069dd03b: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::php_array_merge_rec @ 0x00000000069dd03b: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::php_array_merge_rec @ 0x00000000069dd03b: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::php_array_merge_rec @ 0x00000000069dd03b: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::php_array_merge_rec @ 0x00000000069dd03b: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000001 rbx=0x000000000e5e336b rcx=0x00007fffe1d24ca0 rdx=0x0000000000000000
rsi=0x0000000000000001 rdi=0x0000000000000001 rbp=0x00007fffff7ff010 rsp=0x00007fffff7ff000
 r8=0x00007fffe1a8c440  r9=0x0000000000000007 r10=0x0080000000000000 r11=0x00007fffe1a59000
r12=0x0000000000000000 r13=0x00007fffe18b1480 r14=0x0000000004c43a34 r15=0x00007fffe68f1f80
rip=0x0000000005158c6d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 36e2139cac5947519526e308002cd9cd.fb9182007939b7e467dcb2904917dbe8
---CRASH SUMMARY---
Filename: /home/ad/crash/7c440e502011257116e32c7cd4709dc71853fc07f6909b4a2cdbe4bb90933e3d.php
SHA1: 9558c4bccb022e595c158f78a90a1b094df41761
Classification: EXPLOITABLE
Hash: 36e2139cac5947519526e308002cd9cd.fb9182007939b7e467dcb2904917dbe8
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/7c440e502011257116e32c7cd4709dc71853fc07f6909b4a2cdbe4bb90933e3d.php
Faulting Frame:
   HPHP::StringData::data @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000004bf72ba: push rbp
   0x0000000004bf72bb: mov rbp,rsp
   0x0000000004bf72be: mov QWORD PTR [rbp-0x8],rdi
   0x0000000004bf72c2: mov rax,QWORD PTR [rbp-0x8]
=> 0x0000000004bf72c6: mov rax,QWORD PTR [rax]
   0x0000000004bf72c9: pop rbp
   0x0000000004bf72ca: ret
Stack Head (18 entries):
   HPHP::StringData::data    @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Func::shared        @ 0x0000000004c92d9c: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Func::numLocals     @ 0x0000000005372bbe: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Generator::~Generat @ 0x00000000067ba80f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Native::nativeDataI @ 0x00000000067bd29e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Native::nativeDataI @ 0x0000000005889fc2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ObjectData::release @ 0x00000000052fffd2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ObjectData::release @ 0x000000000530031e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   decRefAndRelease          @ 0x0000000004d06778: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   decRefPtr                 @ 0x0000000004d06778: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::req::ptr<HPHP::Obje @ 0x0000000004d06778: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Object::~Object     @ 0x0000000004c91f42: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ExecutionContext::c @ 0x000000000537f600: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ExecutionContext::c @ 0x000000000537f569: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_hphp_create_objec @ 0x000000000677090f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d800fe6: in [heap]
Registers:
rax=0x0000000000000058 rbx=0x00007fffe23eed00 rcx=0x00007fffe7335ca0 rdx=0x0000000000000001
rsi=0x0000000000000800 rdi=0x0000000000000058 rbp=0x00007fffffffc5c0 rsp=0x00007fffffffc5c0
 r8=0x00007fffffffc8f8  r9=0x00007fffffffc6f0 r10=0x00007fffffffc600 r11=0x000000000537f5d1
r12=0x00007fffe25f5000 r13=0x00007fffe7006940 r14=0x00007fffe7006922 r15=0x0000000000000001
rip=0x0000000004bf72c6 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 9a2a1779893281e8e7a06733e62d0930.d60fa2f503af133495f1d880ad205602
---CRASH SUMMARY---
Filename: /home/ad/crash/35b2a0001d0f91c948e187ebc6c77acf0f7a19130fe38d719019e87e678381dd.php
SHA1: 4dbd8540718de776ff36695ae6ff0ac5ee5c1af2
Classification: EXPLOITABLE
Hash: 9a2a1779893281e8e7a06733e62d0930.d60fa2f503af133495f1d880ad205602
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/35b2a0001d0f91c948e187ebc6c77acf0f7a19130fe38d719019e87e678381dd.php
Faulting Frame:
   HPHP::PlainDirectory::read @ 0x000000000539768d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff05d1f80: cmp DWORD PTR [rip+0x3070ed],0x0 # 0x7ffff08d9074 <__libc_multiple_threads>
   0x00007ffff05d1f87: je 0x7ffff05d1f96 <__readdir_r+70>
   0x00007ffff05d1f89: lock cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d1f8e: jne 0x7ffff05d20c0 <_L_lock_43>
   0x00007ffff05d1f94: jmp 0x7ffff05d1fa0 <__readdir_r+80>
=> 0x00007ffff05d1f96: cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d1f9a: jne 0x7ffff05d20c0 <_L_lock_43>
   0x00007ffff05d1fa0: mov rcx,QWORD PTR [rbx+0x18]
   0x00007ffff05d1fa4: mov r14,QWORD PTR [rbx+0x10]
   0x00007ffff05d1fa8: lea rbp,[rbx+0x30]
Stack Head (8 entries):
   __readdir_r               @ 0x00007ffff05d1f96: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::PlainDirectory::rea @ 0x000000000539768d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_readdir           @ 0x000000000694f665: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c00d4c: in [heap]
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x0000000000000000 rcx=0x00007fffffffc850 rdx=0x00007fffffffc848
rsi=0x0000000000000001 rdi=0x0000000000000000 rbp=0x00007fffffffc980 rsp=0x00007fffffffc7c0
 r8=0x00007fffe68eff50  r9=0x0000000007961c80 r10=0x00007fffffffc730 r11=0x0000000000000206
r12=0x00007fffe25f5000 r13=0x00007fffe68e8320 r14=0x00007fffe25f5022 r15=0x0000000000000001
rip=0x00007ffff05d1f96 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 7668e812bd0080410e8b8fe5676c295e.b376842e76c6aa468021ffd7950e0f87
---CRASH SUMMARY---
Filename: /home/ad/crash/a7ada3873072b77eec9bbc9c8dae1ab225232dfe7da24efa396e09a2ec51a6b5.php
SHA1: 290181a56b52bb24227f8da154ea5a3059ee139b
Classification: EXPLOITABLE
Hash: 7668e812bd0080410e8b8fe5676c295e.b376842e76c6aa468021ffd7950e0f87
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/a7ada3873072b77eec9bbc9c8dae1ab225232dfe7da24efa396e09a2ec51a6b5.php
Faulting Frame:
   HPHP::FixedStringMap<unsigned int, false, unsigned int>::find @ 0x0000000005155b1b: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000005155b0a: push rbx
   0x0000000005155b0b: sub rsp,0x28
   0x0000000005155b0f: mov QWORD PTR [rbp-0x28],rdi
   0x0000000005155b13: mov QWORD PTR [rbp-0x30],rsi
   0x0000000005155b17: mov rax,QWORD PTR [rbp-0x28]
=> 0x0000000005155b1b: mov rbx,QWORD PTR [rax+0x8]
   0x0000000005155b1f: mov rax,QWORD PTR [rbp-0x30]
   0x0000000005155b23: mov rdi,rax
   0x0000000005155b26: call 0x4c3f32e <HPHP::StringData::hash() const>
   0x0000000005155b2b: mov edx,eax
Stack Head (18 entries):
   HPHP::FixedStringMap<unsi @ 0x0000000005155b1b: in int>::find at 0x5155b1b in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Class::lookupMethod @ 0x000000000514ba7a: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Class::TMIOps::find @ 0x00000000058f8dd9: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::TraitMethodImportDa @ 0x000000000590af7c: in HPHP::string_data_hash, HPHP::string_data_isame>::applyPrecRule<HPHP::Class*> at 0x590af7c in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Class::applyTraitRu @ 0x0000000005906ea3: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Class::importTraitM @ 0x00000000059074d6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Class::setMethods   @ 0x00000000058ff5cc: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Class::Class(HPHP:: @ 0x00000000058fe9cf: in std::allocator<HPHP::AtomicSharedPtrImpl<HPHP::Class, true> > >&&, unsigned int, unsigned int) at 0x58fe9cf in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Class::newClass     @ 0x00000000058f98d5: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Unit::defClass      @ 0x0000000005931030: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::iopDefCls           @ 0x000000000572bb1f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::iopWrapper          @ 0x00000000057334be: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::interpOneDefCls     @ 0x0000000005775433: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c00504: in [heap]
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
Registers:
rax=0x00000000000000d8 rbx=0x00007fffe7008360 rcx=0x0000000000000000 rdx=0x00000000000000d8
rsi=0x00007fffe1d24ce0 rdi=0x00000000000000d8 rbp=0x00007fffffffc2a0 rsp=0x00007fffffffc270
 r8=0x0000000000000002  r9=0x0000000000000000 r10=0x00007fffffffbf50 r11=0x00007ffff0651cc0
r12=0x00007fffe1d11e40 r13=0x00007fffffffc770 r14=0x00007fffe25f5000 r15=0x0000000000000001
rip=0x0000000005155b1b efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: 4b8c084b73c552a40abd4b55a6e134b9.7830aada79329f25bd44d50e84552b81
---CRASH SUMMARY---
Filename: /home/ad/crash/cf293ee688a39df5754b5b233bdb9191528a3afa84e0ea4371b130df326b1cf1.php
SHA1: aad53cbd761c070c45c2700e01e361025288d614
Classification: EXPLOITABLE
Hash: 4b8c084b73c552a40abd4b55a6e134b9.7830aada79329f25bd44d50e84552b81
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/cf293ee688a39df5754b5b233bdb9191528a3afa84e0ea4371b130df326b1cf1.php
Faulting Frame:
   None @ 0x00007ffff7bb0ff2: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff7bb0ff2: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
   None                      @ 0x00007ffff7bb1912: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
   None                      @ 0x00007ffff7bb1989: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
   None                      @ 0x00007ffff7bb1e2d: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
   None                      @ 0x00007ffff7bb1f70: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
   None                      @ 0x00007ffff7bb2e53: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
   None                      @ 0x00007ffff7bb3076: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
   None                      @ 0x00007ffff7bcc0ef: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
   malloc                    @ 0x00007ffff7babf1f: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1 (BL)
   operator                  @ 0x00007ffff0e54dad: in 0x7ffff0e54dad in /usr/lib/x86_64-linux-gnu/libstdc++.so.6.0.19
   __gnu_cxx::new_allocator< @ 0x0000000004c021fd: in >::allocate at 0x4c021fd in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   std::_Hashtable<void*,    @ 0x0000000005436607: in std::equal_to<void*>, HPHP::pointer_hash<void>, std::__detail::_Mod_range_hashing, std::__detail::_Default_ranged_hash, std::__detail::_Prime_rehash_policy, std::__detail::_Hashtable_traits<true, true, true> >::_M_allocate_node<void*>(void*&&) at 0x5436607 in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   std::_Hashtable<void*,    @ 0x0000000005436450: in std::equal_to<void*>, HPHP::pointer_hash<void>, std::__detail::_Mod_range_hashing, std::__detail::_Default_ranged_hash, std::__detail::_Prime_rehash_policy, std::__detail::_Hashtable_traits<true, true, true> >::_M_insert<void*>(void*&&, std::integral_constant<bool, true>) at 0x5436450 in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   std::__detail::_Insert<vo @ 0x0000000005435fd4: in std::equal_to<void*>, HPHP::pointer_hash<void>, std::__detail::_Mod_range_hashing, std::__detail::_Default_ranged_hash, std::__detail::_Prime_rehash_policy, std::__detail::_Hashtable_traits<true, true, true>, true, true>::insert(void*&&) at 0x5435fd4 in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   std::unordered_set<void*, @ 0x0000000005435c38: in >::insert(void*&&) at 0x5435c38 in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::php_array_merge_rec @ 0x00000000069dcebe: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x00007fffe1800000 rbx=0x00007fffe1800000 rcx=0x0000000000000002 rdx=0x00000000000000e1
rsi=0x00007fffe1800000 rdi=0x00007fffe8400150 rbp=0x00007fffe84000c0 rsp=0x00007fffff7fec08
 r8=0x0000000000000001  r9=0x0000000000000001 r10=0x0000000000001000 r11=0x00007fffe8400158
r12=0x00000000000000e1 r13=0x00007fffe1800000 r14=0x0000000000000001 r15=0x0000000000000008
rip=0x00007ffff7bb0ff2 efl=0x0000000000010293  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: a6836acf0acedb456f900d7a07eb6923.9299720027e230ff66c1f10c5859e21e
---CRASH SUMMARY---
Filename: /home/ad/crash/cec8ac704bdf8366455c17e3f93706c90ada2137edf9ff63c41c2236821e5b13.php
SHA1: 4a9a3c7a8570c211e85656c50083fb853f97133e
Classification: EXPLOITABLE
Hash: a6836acf0acedb456f900d7a07eb6923.9299720027e230ff66c1f10c5859e21e
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/cec8ac704bdf8366455c17e3f93706c90ada2137edf9ff63c41c2236821e5b13.php
Faulting Frame:
   None @ 0x00007ffff7bc28af: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
Disassembly:
Stack Head (16 entries):
   None                      @ 0x00007ffff7bc28af: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
   HPHP::BigHeap::allocBig   @ 0x000000000543e04d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MemoryManager::mall @ 0x000000000543e96f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   objMalloc                 @ 0x00000000052aeece: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::PackedArray::MakeRe @ 0x00000000052aeece: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   MakeReserveImpl           @ 0x00000000052af1e8: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::PackedArray::MakeRe @ 0x00000000052af1e8: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MixedArray::MakeRes @ 0x00000000053fcd58: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ArrayUtil::Pad      @ 0x000000000542f55d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::__lambda178::operat @ 0x00000000069e0bc2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_array_pad         @ 0x00000000069e0cfa: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c0192f: in [heap]
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x0000000000000000 rcx=0x00000000ffffffff rdx=0x0000000000000001
rsi=0x00007fffffffc5e0 rdi=0x00007ffff7dd9440 rbp=0x00007fffffffc670 rsp=0x00007fffffffc5e0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007fffffffc3f0 r11=0x00007ffff7baec90
r12=0x00007fffffffc910 r13=0x00007fffe19bfee0 r14=0x00007fffe6900e00 r15=0x0000000000000001
rip=0x00007ffff7bc28af efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 2b901801b4b4170103cd8de068ed52f4.aea5d19fbd401675078647d985435b02
---CRASH SUMMARY---
Filename: /home/ad/crash/dbb1d3d8a44ad927eb158b57f5af66687e9fc39aee06a533683fd5afa0bbdfc9.php
SHA1: a0b879041af4a9a8498db41b37ad59a32aaf3e37
Classification: EXPLOITABLE
Hash: 2b901801b4b4170103cd8de068ed52f4.aea5d19fbd401675078647d985435b02
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/dbb1d3d8a44ad927eb158b57f5af66687e9fc39aee06a533683fd5afa0bbdfc9.php
Faulting Frame:
   HPHP::StringData::data @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000004bf72ba: push rbp
   0x0000000004bf72bb: mov rbp,rsp
   0x0000000004bf72be: mov QWORD PTR [rbp-0x8],rdi
   0x0000000004bf72c2: mov rax,QWORD PTR [rbp-0x8]
=> 0x0000000004bf72c6: mov rax,QWORD PTR [rax]
   0x0000000004bf72c9: pop rbp
   0x0000000004bf72ca: ret
Stack Head (9 entries):
   HPHP::StringData::data    @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateInterval::getYe @ 0x00000000051e9a38: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateTime::rfcFormat @ 0x00000000053aa59d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateTime::toString  @ 0x00000000053a9eb9: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateTimeData::forma @ 0x0000000006b7e74a: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::c_DateTime_ni_forma @ 0x0000000006b7f359: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d801075: in [heap]
   None                      @ 0x00007fffe19bfef0: in
   None                      @ 0x0000000000000000: in ?
Registers:
rax=0x0000000000000020 rbx=0x00007fffe68f0020 rcx=0x00007fffe68eff58 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x0000000000000020 rbp=0x00007fffffffc8c0 rsp=0x00007fffffffc8c0
 r8=0x0000000000000000  r9=0x00007fffe80ad290 r10=0x0000000000000000 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe19bfef0 r14=0x00007fffe25f5000 r15=0x0000000000000001
rip=0x0000000004bf72c6 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: 704ace276b0080179857c7328529a86d.37f436b9dd82f61a8a2450e855fc6e0d
---CRASH SUMMARY---
Filename: /home/ad/crash/f5c3aa0623c2b1de5b5809db055331d65ab873a35f6c4f0aa3d52e0861a614d6.php
SHA1: bdd00e4b813bbfb0fac5d048ee8e855cb681582c
Classification: EXPLOITABLE
Hash: 704ace276b0080179857c7328529a86d.37f436b9dd82f61a8a2450e855fc6e0d
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/f5c3aa0623c2b1de5b5809db055331d65ab873a35f6c4f0aa3d52e0861a614d6.php
Faulting Frame:
   HPHP::__lambda104::operator() @ 0x00000000053f205e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff054bc27: movsxd rdx,edi
   0x00007ffff054bc2a: movsxd rsi,esi
   0x00007ffff054bc2d: movsxd rdi,ecx
   0x00007ffff054bc30: mov eax,0xea
   0x00007ffff054bc35: syscall
=> 0x00007ffff054bc37: cmp rax,0xfffffffffffff000
   0x00007ffff054bc3d: ja 0x7ffff054bc5d <__GI_raise+93>
   0x00007ffff054bc3f: repz ret
   0x00007ffff054bc41: nop DWORD PTR [rax+0x0]
   0x00007ffff054bc48: test ecx,ecx
Stack Head (19 entries):
   __GI_raise                @ 0x00007ffff054bc37: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI_abort                @ 0x00007ffff054f028: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __assert_fail_base        @ 0x00007ffff0544bf6: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI___assert_fail        @ 0x00007ffff0544ca2: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::__lambda104::operat @ 0x00000000053f205e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::__lambda105::operat @ 0x00000000053f2230: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::cellIsPlausible     @ 0x00000000053f2356: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::tvIsPlausible       @ 0x00000000053f2420: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::jit::typeFromTV     @ 0x000000000611f42a: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::jit::populateLiveCo @ 0x0000000005e2bc4f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::jit::(anonymous     @ 0x0000000005e2d506: in in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::jit::MCGenerator::t @ 0x0000000005e2daad: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::jit::MCGenerator::r @ 0x0000000005e2aa3f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::jit::MCGenerator::c @ 0x0000000005e2c155: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::jit::MCGenerator::g @ 0x0000000005e2b584: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::jit::MCGenerator::b @ 0x0000000005e30582: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x00007ffff7ff3000 rcx=0x00007ffff054bc37 rdx=0x0000000000000006
rsi=0x0000000000000f22 rdi=0x0000000000000f22 rbp=0x00007ffff06953b8 rsp=0x00007fffffffbb68
 r8=0xfefefefefefefeff  r9=0xfefeff08fefefeff r10=0x0000000000000008 r11=0x0000000000000206
r12=0x00000000079fe598 r13=0x0000000007a02a60 r14=0x0000000000000000 r15=0x0000000000000001
rip=0x00007ffff054bc37 efl=0x0000000000000206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 36e2139cac5947519526e308002cd9cd.249654a44745e1b39b9448dc810b0344
---CRASH SUMMARY---
Filename: /home/ad/crash/12e5771677e2d3dff0932ae48bb6d33485d5ae2fc869fdd22716ce2d17c017be.php
SHA1: 1ca2a1bbe49554342c4cdecd3b0869d362e6b7b2
Classification: EXPLOITABLE
Hash: 36e2139cac5947519526e308002cd9cd.249654a44745e1b39b9448dc810b0344
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/12e5771677e2d3dff0932ae48bb6d33485d5ae2fc869fdd22716ce2d17c017be.php
Faulting Frame:
   HPHP::StringData::data @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000004bf72ba: push rbp
   0x0000000004bf72bb: mov rbp,rsp
   0x0000000004bf72be: mov QWORD PTR [rbp-0x8],rdi
   0x0000000004bf72c2: mov rax,QWORD PTR [rbp-0x8]
=> 0x0000000004bf72c6: mov rax,QWORD PTR [rax]
   0x0000000004bf72c9: pop rbp
   0x0000000004bf72ca: ret
Stack Head (19 entries):
   HPHP::StringData::data    @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Func::shared        @ 0x0000000004c92d9c: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Func::numLocals     @ 0x0000000005372bbe: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Generator::~Generat @ 0x00000000067ba80f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Native::nativeDataI @ 0x00000000067bd29e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Native::nativeDataI @ 0x0000000005889fc2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ObjectData::release @ 0x00000000052fffd2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ObjectData::release @ 0x000000000530031e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c003a6: in [heap]
   None                      @ 0x00007fffe19bff60: in
   None                      @ 0x0000000000000037: in ?
   None                      @ 0x0000000009c0047f: in [heap]
   None                      @ 0x0000000009c00bab: in [heap]
   None                      @ 0x00007fffe19bff60: in
   None                      @ 0x00007ffff7fbf3c0: in
   None                      @ 0x0000000009c0004f: in [heap]
Registers:
rax=0x0000000000000058 rbx=0x00007fffe19bff50 rcx=0x00007fffe7335ca0 rdx=0x0000000000000001
rsi=0x0000000000000800 rdi=0x0000000000000058 rbp=0x00007fffffffc6e0 rsp=0x00007fffffffc6e0
 r8=0x00007ffff7fbf3c0  r9=0x6f746172656e6547 r10=0x0000000000000000 r11=0x0000000000000246
r12=0x00007fffe25f5000 r13=0x00007fffe19bff60 r14=0x00007fffe25f5001 r15=0x0000000000000002
rip=0x0000000004bf72c6 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: 21382a0f9958c8e393106b20e715f041.19c35cf9c438d1c678baeb7543afe6e6
---CRASH SUMMARY---
Filename: /home/ad/crash/f67cb866d904d5ffb65bc35ea0437a4f1cd9108e7a6e28f38bb8f6ec46478b23.php
SHA1: aa1892684d5be6614655dc11e54536e2de8d21e8
Classification: UNKNOWN
Hash: 21382a0f9958c8e393106b20e715f041.19c35cf9c438d1c678baeb7543afe6e6
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/f67cb866d904d5ffb65bc35ea0437a4f1cd9108e7a6e28f38bb8f6ec46478b23.php
Faulting Frame:
   HPHP::Verifier::FuncChecker::checkImmBA @ 0x000000000596054e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff054bc27: movsxd rdx,edi
   0x00007ffff054bc2a: movsxd rsi,esi
   0x00007ffff054bc2d: movsxd rdi,ecx
   0x00007ffff054bc30: mov eax,0xea
   0x00007ffff054bc35: syscall
=> 0x00007ffff054bc37: cmp rax,0xfffffffffffff000
   0x00007ffff054bc3d: ja 0x7ffff054bc5d <__GI_raise+93>
   0x00007ffff054bc3f: repz ret
   0x00007ffff054bc41: nop DWORD PTR [rax+0x0]
   0x00007ffff054bc48: test ecx,ecx
Stack Head (32 entries):
   __GI_raise                @ 0x00007ffff054bc37: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI_abort                @ 0x00007ffff054f028: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __assert_fail_base        @ 0x00007ffff0544bf6: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI___assert_fail        @ 0x00007ffff0544ca2: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::Verifier::FuncCheck @ 0x000000000596054e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Verifier::FuncCheck @ 0x0000000005960d0e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Verifier::FuncCheck @ 0x000000000595f694: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Verifier::FuncCheck @ 0x000000000595f0cc: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Verifier::checkFunc @ 0x000000000595ebf0: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Verifier::UnitCheck @ 0x00000000059598a7: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Unit::forEachFunc<H @ 0x000000000595a1de: in in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Verifier::UnitCheck @ 0x000000000595993c: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Verifier::UnitCheck @ 0x0000000005958ec0: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Verifier::checkUnit @ 0x0000000005958e45: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::UnitEmitter::create @ 0x00000000056e0bdd: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::UnitRepoProxy::load @ 0x00000000056e240b: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x00007ffff7ff3000 rcx=0x00007ffff054bc37 rdx=0x0000000000000006
rsi=0x0000000000000f30 rdi=0x0000000000000f30 rbp=0x00007ffff06953b8 rsp=0x00007fffffffbfc8
 r8=0xfefefefefefefeff  r9=0xff092d63646b6860 r10=0x0000000000000008 r11=0x0000000000000206
r12=0x0000000007b44ac0 r13=0x0000000007b477c0 r14=0x0000000000000001 r15=0x0000000000000001
rip=0x00007ffff054bc37 efl=0x0000000000000206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Abort signal
   Short description: AbortSignal (20/22)
   Explanation: The target is stopped on a SIGABRT. SIGABRTs are often generated by libc and compiled check-code to indicate potentially exploitable conditions. Unfortunately this command does not yet further analyze these crashes.
---END SUMMARY---
(1 of 1) - Hash: 52549181cc0d40dbbd3b475dcdc5a6dc.e1c0fe2fce7b987b2d1c1190784b4b46
---CRASH SUMMARY---
Filename: /home/ad/crash/722e14bb298c4cc3bfe21ddec206bd7c512cb0ac8c7c866d662ff1cb61f68fe6.php
SHA1: 294359787c72093500dcbc07d882770fe6ecdf04
Classification: EXPLOITABLE
Hash: 52549181cc0d40dbbd3b475dcdc5a6dc.e1c0fe2fce7b987b2d1c1190784b4b46
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/722e14bb298c4cc3bfe21ddec206bd7c512cb0ac8c7c866d662ff1cb61f68fe6.php
Faulting Frame:
   HPHP::PlainDirectory::read @ 0x000000000539768d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff05d1f80: cmp DWORD PTR [rip+0x3070ed],0x0 # 0x7ffff08d9074 <__libc_multiple_threads>
   0x00007ffff05d1f87: je 0x7ffff05d1f96 <__readdir_r+70>
   0x00007ffff05d1f89: lock cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d1f8e: jne 0x7ffff05d20c0 <_L_lock_43>
   0x00007ffff05d1f94: jmp 0x7ffff05d1fa0 <__readdir_r+80>
=> 0x00007ffff05d1f96: cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d1f9a: jne 0x7ffff05d20c0 <_L_lock_43>
   0x00007ffff05d1fa0: mov rcx,QWORD PTR [rbx+0x18]
   0x00007ffff05d1fa4: mov r14,QWORD PTR [rbx+0x10]
   0x00007ffff05d1fa8: lea rbp,[rbx+0x30]
Stack Head (12 entries):
   __readdir_r               @ 0x00007ffff05d1f96: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::PlainDirectory::rea @ 0x000000000539768d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_readdir           @ 0x000000000694f665: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c01234: in [heap]
   None                      @ 0x00007fffe68eff40: in
   None                      @ 0x0000000009c01055: in [heap]
   None                      @ 0x00007fffe19bff40: in
   None                      @ 0x00007fffe68efe90: in
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x0000000000000000 rcx=0x00007fffffffc830 rdx=0x00007fffffffc828
rsi=0x0000000000000001 rdi=0x0000000000000000 rbp=0x00007fffffffc960 rsp=0x00007fffffffc7a0
 r8=0x00007fffe68efe90  r9=0x0000000007961c80 r10=0x00007fffe8006000 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe1d0d2e0 r14=0x00007fffe68eff40 r15=0x0000000000000001
rip=0x00007ffff05d1f96 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: 8036e436c531652259e8bc4a85380a3c.89f69187b857121608d9ebfa8857bfbd
---CRASH SUMMARY---
Filename: /home/ad/crash/0bdb17b53f3eb794acdb3a4d3f019222340ceacf48f4128bf2800dc507cb5d0c.php
SHA1: 21c046aadeaa6d217c593f0bec2edff76a00fd32
Classification: EXPLOITABLE
Hash: 8036e436c531652259e8bc4a85380a3c.89f69187b857121608d9ebfa8857bfbd
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/0bdb17b53f3eb794acdb3a4d3f019222340ceacf48f4128bf2800dc507cb5d0c.php
Faulting Frame:
   HPHP::StringData::data @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000004bf72ba: push rbp
   0x0000000004bf72bb: mov rbp,rsp
   0x0000000004bf72be: mov QWORD PTR [rbp-0x8],rdi
   0x0000000004bf72c2: mov rax,QWORD PTR [rbp-0x8]
=> 0x0000000004bf72c6: mov rax,QWORD PTR [rax]
   0x0000000004bf72c9: pop rbp
   0x0000000004bf72ca: ret
Stack Head (9 entries):
   HPHP::StringData::data    @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateInterval::getDa @ 0x00000000051e9a7c: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateTime::rfcFormat @ 0x00000000053aa2c8: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateTime::toString  @ 0x00000000053a9eb9: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateTimeData::forma @ 0x0000000006b7e74a: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::c_DateTime_ni_forma @ 0x0000000006b7f359: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d8001b5: in [heap]
   None                      @ 0x00007fffe19bff40: in
   None                      @ 0x0000000000000000: in ?
Registers:
rax=0x0000000000000020 rbx=0x00007fffe68f0020 rcx=0x00007fffe68eff58 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x0000000000000020 rbp=0x00007fffffffc7e0 rsp=0x00007fffffffc7e0
 r8=0x0000000000000000  r9=0x00007fffe80ad290 r10=0x0000000000000001 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe19bff40 r14=0x00007fffe25f5000 r15=0x0000000000000001
rip=0x0000000004bf72c6 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 7654a6a75502f3e5ebe292f26a19ee46.1c0327e19ac2c38c83266680a3e73d1e
---CRASH SUMMARY---
Filename: /home/ad/crash/a2c83e498eb6ba0016565fbdfd0ac0538db997ab896f71b07d494566384f325a.php
SHA1: 2ea701437855e228e280b8fcbce745a301eedee2
Classification: EXPLOITABLE
Hash: 7654a6a75502f3e5ebe292f26a19ee46.1c0327e19ac2c38c83266680a3e73d1e
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/a2c83e498eb6ba0016565fbdfd0ac0538db997ab896f71b07d494566384f325a.php
Faulting Frame:
   HPHP::PlainDirectory::read @ 0x000000000539768d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff05d1f80: cmp DWORD PTR [rip+0x3070ed],0x0 # 0x7ffff08d9074 <__libc_multiple_threads>
   0x00007ffff05d1f87: je 0x7ffff05d1f96 <__readdir_r+70>
   0x00007ffff05d1f89: lock cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d1f8e: jne 0x7ffff05d20c0 <_L_lock_43>
   0x00007ffff05d1f94: jmp 0x7ffff05d1fa0 <__readdir_r+80>
=> 0x00007ffff05d1f96: cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d1f9a: jne 0x7ffff05d20c0 <_L_lock_43>
   0x00007ffff05d1fa0: mov rcx,QWORD PTR [rbx+0x18]
   0x00007ffff05d1fa4: mov r14,QWORD PTR [rbx+0x10]
   0x00007ffff05d1fa8: lea rbp,[rbx+0x30]
Stack Head (6 entries):
   __readdir_r               @ 0x00007ffff05d1f96: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::PlainDirectory::rea @ 0x000000000539768d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_readdir           @ 0x000000000694f665: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d800924: in [heap]
   None                      @ 0x00007fffe19bff00: in
   None                      @ 0x0000000000000000: in ?
Registers:
rax=0x0000000000000000 rbx=0x0000000000000000 rcx=0x00007fffffffc830 rdx=0x00007fffffffc828
rsi=0x0000000000000001 rdi=0x0000000000000000 rbp=0x00007fffffffc960 rsp=0x00007fffffffc7a0
 r8=0x00007fffe68efe90  r9=0x0000000007961c80 r10=0x00007fffffffc5c0 r11=0x00007ffff05d1f50
r12=0x00007fffe25f5000 r13=0x00007fffe68efe80 r14=0x00007fffe68f0000 r15=0x0000000000000140
rip=0x00007ffff05d1f96 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: f59dad42e4f30769ec3123e069db1593.7a0340aa22587d67ceae55c41a8a159c
---CRASH SUMMARY---
Filename: /home/ad/crash/9c5c3b86b6e091bcc9f238e1e50ebd9fa23b0607a766fcee0736b9a9d812c43a.php
SHA1: 2a172328d4d2f1127c06934baa9ba8d8beffe592
Classification: EXPLOITABLE
Hash: f59dad42e4f30769ec3123e069db1593.7a0340aa22587d67ceae55c41a8a159c
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/9c5c3b86b6e091bcc9f238e1e50ebd9fa23b0607a766fcee0736b9a9d812c43a.php
Faulting Frame:
   constructValHelper @ 0x0000000005349884: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000005349870: mov rax,QWORD PTR [rbp-0x38]
   0x0000000005349874: mov QWORD PTR [rbp-0x28],rax
   0x0000000005349878: mov rax,QWORD PTR [rbp-0x40]
   0x000000000534987c: mov QWORD PTR [rbp-0x20],rax
   0x0000000005349880: mov rax,QWORD PTR [rbp-0x20]
=> 0x0000000005349884: mov rdx,QWORD PTR [rax]
   0x0000000005349887: mov rax,QWORD PTR [rax+0x8]
   0x000000000534988b: mov rdi,rdx
   0x000000000534988e: mov rsi,rax
   0x0000000005349891: call 0x53f235d <HPHP::tvIsPlausible(HPHP::TypedValue)>
Stack Head (13 entries):
   constructValHelper        @ 0x0000000005349884: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Variant::Variant    @ 0x0000000005349884: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::WddxPacket::add_var @ 0x000000000692ec75: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::find_var_recursive  @ 0x0000000006930294: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::serialize_vars_help @ 0x00000000069305a8: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_wddx_serialize_va @ 0x0000000006930863: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c0090b: in [heap]
   None                      @ 0x00007fffe19bff30: in
   None                      @ 0x0000000000000010: in ?
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x00007fffe19bff40 rcx=0x0000000000000010 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x00007fffffffc870 rbp=0x00007fffffffc800 rsp=0x00007fffffffc7c0
 r8=0xdfdfdfdfdfdfdfdf  r9=0x3e7463757274733c r10=0x0000000000000001 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe19bff30 r14=0x00007fffe68f1f80 r15=0x0000000000000001
rip=0x0000000005349884 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: f59dad42e4f30769ec3123e069db1593.b5898b96c04ef784d8ebd56a54908c0c
---CRASH SUMMARY---
Filename: /home/ad/crash/3f80b4265dbb57ab3ef06e04815723cb4a334b3a2c249566cc44ca6863bee5cb.php
SHA1: b2f3f4cbd351e96dfe5efe7f205687b3c6ba10a1
Classification: EXPLOITABLE
Hash: f59dad42e4f30769ec3123e069db1593.b5898b96c04ef784d8ebd56a54908c0c
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/3f80b4265dbb57ab3ef06e04815723cb4a334b3a2c249566cc44ca6863bee5cb.php
Faulting Frame:
   constructValHelper @ 0x0000000005349884: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000005349870: mov rax,QWORD PTR [rbp-0x38]
   0x0000000005349874: mov QWORD PTR [rbp-0x28],rax
   0x0000000005349878: mov rax,QWORD PTR [rbp-0x40]
   0x000000000534987c: mov QWORD PTR [rbp-0x20],rax
   0x0000000005349880: mov rax,QWORD PTR [rbp-0x20]
=> 0x0000000005349884: mov rdx,QWORD PTR [rax]
   0x0000000005349887: mov rax,QWORD PTR [rax+0x8]
   0x000000000534988b: mov rdi,rdx
   0x000000000534988e: mov rsi,rax
   0x0000000005349891: call 0x53f235d <HPHP::tvIsPlausible(HPHP::TypedValue)>
Stack Head (13 entries):
   constructValHelper        @ 0x0000000005349884: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Variant::Variant    @ 0x0000000005349884: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::WddxPacket::add_var @ 0x000000000692ec75: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::find_var_recursive  @ 0x0000000006930294: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::serialize_vars_help @ 0x00000000069305a8: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_wddx_serialize_va @ 0x0000000006930863: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d80007a: in [heap]
   None                      @ 0x00007fffe19bffc0: in
   None                      @ 0x0000000011800068: in [heap]
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x00007fffe19bff30 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x00007fffffffc870 rbp=0x00007fffffffc800 rsp=0x00007fffffffc7c0
 r8=0x0000000000000000  r9=0x3e7463757274733c r10=0x0000000000000000 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe19bffc0 r14=0x00007fffe25f5000 r15=0x0000000000000001
rip=0x0000000005349884 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 499d2c4afc3186c6ebd38aee35c6bb10.c0400d89c61871fcac929df8bacc9b93
---CRASH SUMMARY---
Filename: /home/ad/crash/64c4b6ce0a858a7de48ba9b720fbb68b541f2660f3f174b211b434a241220527.php
SHA1: 9a4a4cd0883cbcd8ea7922bf525faca8c2fafc13
Classification: EXPLOITABLE
Hash: 499d2c4afc3186c6ebd38aee35c6bb10.c0400d89c61871fcac929df8bacc9b93
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/64c4b6ce0a858a7de48ba9b720fbb68b541f2660f3f174b211b434a241220527.php
Faulting Frame:
   HPHP::StringData::hash @ 0x0000000004c3f33e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000004c3f32e: push rbp
   0x0000000004c3f32f: mov rbp,rsp
   0x0000000004c3f332: sub rsp,0x20
   0x0000000004c3f336: mov QWORD PTR [rbp-0x18],rdi
   0x0000000004c3f33a: mov rax,QWORD PTR [rbp-0x18]
=> 0x0000000004c3f33e: mov eax,DWORD PTR [rax+0x14]
   0x0000000004c3f341: and eax,0x7fffffff
   0x0000000004c3f346: mov DWORD PTR [rbp-0x4],eax
   0x0000000004c3f349: cmp DWORD PTR [rbp-0x4],0x0
   0x0000000004c3f34d: jne 0x4c3f35d <HPHP::StringData::hash() const+47>
Stack Head (12 entries):
   HPHP::StringData::hash    @ 0x0000000004c3f33e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::string_data_hash::o @ 0x0000000004c3f406: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   folly::AtomicHashArray<ch @ 0x000000000517fac7: in HPHP::HotCache::Hasher, HPHP::HotCache::EqualityTester, HPHP::HotCache::HotMapAllocator, folly::AtomicHashArrayLinearProbeFcn, HPHP::HotCache::KeyConverter>::keyToAnchorIdx<HPHP::StringData const*, HPHP::HotCache::Hasher> at 0x517fac7 in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   folly::AtomicHashArray<HP @ 0x00000000058c78b4: in HPHP::ahm_string_data_isame, HPHP::LowAllocator<char>, folly::AtomicHashArrayLinearProbeFcn, folly::detail::AHAIdentity>::findInternal<HPHP::StringData const*, HPHP::string_data_hash, HPHP::ahm_string_data_isame> at 0x58c78b4 in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   folly::AtomicHashMap<HPHP @ 0x00000000058c6dc0: in HPHP::ahm_string_data_isame, HPHP::LowAllocator<char>, folly::AtomicHashArrayLinearProbeFcn, folly::detail::AHAIdentity>::findInternal<HPHP::StringData const*, HPHP::string_data_hash, HPHP::ahm_string_data_isame> at 0x58c6dc0 in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   folly::AtomicHashMap<HPHP @ 0x00000000058c636b: in HPHP::ahm_string_data_isame, HPHP::LowAllocator<char>, folly::AtomicHashArrayLinearProbeFcn, folly::detail::AHAIdentity>::find<HPHP::StringData const*, HPHP::string_data_hash, HPHP::ahm_string_data_isame> at 0x58c636b in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::NamedEntity::get    @ 0x00000000058c53c0: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Unit::lookupClass   @ 0x000000000514bf2c: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::c_SoapServer_ni_get @ 0x0000000006bfa4a6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d80032f: in [heap]
   None                      @ 0x00007fffe19bff80: in
   None                      @ 0x0000000000000000: in ?
Registers:
rax=0x0000000000000000 rbx=0x00007fffe6900ea0 rcx=0xfffffffffffffffd rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x0000000000000000 rbp=0x00007fffffffc650 rsp=0x00007fffffffc630
 r8=0x0000000000000000  r9=0x00007fffe80ad290 r10=0x0000000000000001 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe19bff80 r14=0x00007fffe25f5000 r15=0x0000000000000001
rip=0x0000000004c3f33e efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 22cdc5dad4b41d5c9d9c97a5c882539f.5d91e02164909bb79be812f7a420bf0c
---CRASH SUMMARY---
Filename: /home/ad/crash/b7822f794e57e106cc8e6069b12cd5723eb3d88c785df78fa8d05f5f34fb9529.php
SHA1: 5fa4188326c3f7e5260bf0fe66b58f95e6e241ec
Classification: EXPLOITABLE
Hash: 22cdc5dad4b41d5c9d9c97a5c882539f.5d91e02164909bb79be812f7a420bf0c
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/b7822f794e57e106cc8e6069b12cd5723eb3d88c785df78fa8d05f5f34fb9529.php
Faulting Frame:
   __gmp_default_allocate @ 0x00007ffff35fd2a5: in /usr/lib/x86_64-linux-gnu/libgmp.so.10.1.3
Disassembly:
   0x00007ffff054bc27: movsxd rdx,edi
   0x00007ffff054bc2a: movsxd rsi,esi
   0x00007ffff054bc2d: movsxd rdi,ecx
   0x00007ffff054bc30: mov eax,0xea
   0x00007ffff054bc35: syscall
=> 0x00007ffff054bc37: cmp rax,0xfffffffffffff000
   0x00007ffff054bc3d: ja 0x7ffff054bc5d <__GI_raise+93>
   0x00007ffff054bc3f: repz ret
   0x00007ffff054bc41: nop DWORD PTR [rax+0x0]
   0x00007ffff054bc48: test ecx,ecx
Stack Head (12 entries):
   __GI_raise                @ 0x00007ffff054bc37: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI_abort                @ 0x00007ffff054f028: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __gmp_default_allocate    @ 0x00007ffff35fd2a5: in /usr/lib/x86_64-linux-gnu/libgmp.so.10.1.3
   __gmp_tmp_reentrant_alloc @ 0x00007ffff35fdb89: in /usr/lib/x86_64-linux-gnu/libgmp.so.10.1.3
   __gmpz_oddfac_1           @ 0x00007ffff360a2eb: in /usr/lib/x86_64-linux-gnu/libgmp.so.10.1.3
   __gmpz_fac_ui             @ 0x00007ffff3609baf: in /usr/lib/x86_64-linux-gnu/libgmp.so.10.1.3
   HPHP::f_gmp_fact          @ 0x00000000067102ce: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c014a4: in [heap]
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x04386cef90568030 rcx=0x00007ffff054bc37 rdx=0x0000000000000006
rsi=0x0000000000000e10 rdi=0x0000000000000e10 rbp=0x04386cef90568030 rsp=0x00007fffffffc018
 r8=0x00007ffff7fbf3c0  r9=0x20657461636f6c6c r10=0x0000000000000008 r11=0x0000000000000202
r12=0x00007fffffffc990 r13=0x00007fffe68eccb0 r14=0x00007fffe25f5022 r15=0x0000000000000001
rip=0x00007ffff054bc37 efl=0x0000000000000202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 5) - Hash: 040b2c02e5303c96cf755174affa5b7f.9858ae355070cec002c7eec3c424c58c
---CRASH SUMMARY---
Filename: /home/ad/crash/71efff3911908fd660512323f37aa426ce33078a93cc6197eea94e0a4409767f.php
SHA1: 4ffc0a316dc574910e57cc7130c51f121d16d753
Classification: EXPLOITABLE
Hash: 040b2c02e5303c96cf755174affa5b7f.9858ae355070cec002c7eec3c424c58c
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/71efff3911908fd660512323f37aa426ce33078a93cc6197eea94e0a4409767f.php
Faulting Frame:
   icu_52::DateFormat::DateFormat() @ 0x00007ffff694a194: in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
Disassembly:
   0x00007ffff694a190: push rbx
   0x00007ffff694a191: mov rbx,rdi
=> 0x00007ffff694a194: call 0x7ffff69284f0 <_ZN6icu_526FormatC2Ev>
   0x00007ffff694a199: lea rax,[rip+0x33b6c0] # 0x7ffff6c85860 <_ZTVN6icu_5210DateFormatE>
   0x00007ffff694a1a0: mov QWORD PTR [rbx+0x148],0x0
   0x00007ffff694a1ab: mov QWORD PTR [rbx+0x150],0x0
   0x00007ffff694a1b6: mov DWORD PTR [rbx+0x158],0x0
Stack Head (1000 entries):
   icu_52::DateFormat::DateF @ 0x00007ffff694a194: in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::RelativeDateForma @ 0x00007ffff69539f8: in UErrorCode&) at 0x7ffff69539f8 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::DateFormat::creat @ 0x00007ffff694a818: in at 0x7ffff694a818 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::RelativeDateForma @ 0x00007ffff6953ad3: in UErrorCode&) at 0x7ffff6953ad3 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::DateFormat::creat @ 0x00007ffff694a818: in at 0x7ffff694a818 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::RelativeDateForma @ 0x00007ffff6953ad3: in UErrorCode&) at 0x7ffff6953ad3 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::DateFormat::creat @ 0x00007ffff694a818: in at 0x7ffff694a818 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::RelativeDateForma @ 0x00007ffff6953ad3: in UErrorCode&) at 0x7ffff6953ad3 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::DateFormat::creat @ 0x00007ffff694a818: in at 0x7ffff694a818 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::RelativeDateForma @ 0x00007ffff6953ad3: in UErrorCode&) at 0x7ffff6953ad3 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::DateFormat::creat @ 0x00007ffff694a818: in at 0x7ffff694a818 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::RelativeDateForma @ 0x00007ffff6953ad3: in UErrorCode&) at 0x7ffff6953ad3 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::DateFormat::creat @ 0x00007ffff694a818: in at 0x7ffff694a818 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::RelativeDateForma @ 0x00007ffff6953ad3: in UErrorCode&) at 0x7ffff6953ad3 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::DateFormat::creat @ 0x00007ffff694a818: in at 0x7ffff694a818 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
   icu_52::RelativeDateForma @ 0x00007ffff6953ad3: in UErrorCode&) at 0x7ffff6953ad3 in /usr/lib/x86_64-linux-gnu/libicui18n.so.52.1
Registers:
rax=0x00007fffddbc5200 rbx=0x00007fffddbc5200 rcx=0x00007fffffffc4c0 rdx=0x00000000ff676980
rsi=0x00000000ffffffff rdi=0x00007fffddbc5200 rbp=0x00000000ff676980 rsp=0x00007fffff7ff000
 r8=0x00007fffff7ff07c  r9=0xfefefefefeff6d64 r10=0x00007fffddbc5062 r11=0x00007ffff068d360
r12=0x00007fffff7ff07c r13=0x00007fffffffc4c0 r14=0x00007fffddbc53c8 r15=0x00000000ffffffff
rip=0x00007ffff694a194 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 36e2139cac5947519526e308002cd9cd.11a6b9b3750d5109aed10c1545226d14
---CRASH SUMMARY---
Filename: /home/ad/crash/0e5f23e0e70a6e10f075a890d6b29cfe80857361b0623f19db59a5d6d3292d58.php
SHA1: bda9dce7909c27495a83f8707ef573ce483b35cc
Classification: EXPLOITABLE
Hash: 36e2139cac5947519526e308002cd9cd.11a6b9b3750d5109aed10c1545226d14
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/0e5f23e0e70a6e10f075a890d6b29cfe80857361b0623f19db59a5d6d3292d58.php
Faulting Frame:
   HPHP::StringData::data @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000004bf72ba: push rbp
   0x0000000004bf72bb: mov rbp,rsp
   0x0000000004bf72be: mov QWORD PTR [rbp-0x8],rdi
   0x0000000004bf72c2: mov rax,QWORD PTR [rbp-0x8]
=> 0x0000000004bf72c6: mov rax,QWORD PTR [rax]
   0x0000000004bf72c9: pop rbp
   0x0000000004bf72ca: ret
Stack Head (18 entries):
   HPHP::StringData::data    @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Func::shared        @ 0x0000000004c92d9c: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Func::numLocals     @ 0x0000000005372bbe: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Generator::~Generat @ 0x00000000067ba80f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Native::nativeDataI @ 0x00000000067bd29e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Native::nativeDataI @ 0x0000000005889fc2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ObjectData::release @ 0x00000000052fffd2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ObjectData::release @ 0x000000000530031e: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   decRefAndRelease          @ 0x0000000004d06778: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   decRefPtr                 @ 0x0000000004d06778: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::req::ptr<HPHP::Obje @ 0x0000000004d06778: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::Object::~Object     @ 0x0000000004c91f42: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ExecutionContext::c @ 0x000000000537f600: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ExecutionContext::c @ 0x000000000537f569: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_hphp_create_objec @ 0x000000000677090f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d800fe6: in [heap]
Registers:
rax=0x0000000000000058 rbx=0x00007fffe23eea80 rcx=0x00007fffe7335ca0 rdx=0x0000000000000001
rsi=0x0000000000000800 rdi=0x0000000000000058 rbp=0x00007fffffffc5c0 rsp=0x00007fffffffc5c0
 r8=0x00007fffffffc8f8  r9=0x00007fffffffc6f0 r10=0x00007fffffffc600 r11=0x000000000537f5d1
r12=0x00007fffe25f5000 r13=0x00007fffe7006940 r14=0x00007fffe7006922 r15=0x0000000000000001
rip=0x0000000004bf72c6 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: cf009b14bb2e95f0ddf33d49d7b881ad.f2223e1cc5978d85376f251567dadb5c
---CRASH SUMMARY---
Filename: /home/ad/crash/be5843fb4b51ada6df1bd3acc9478b2bb6d17590c3d50007fd10435f08710411.php
SHA1: a64e816decd1ca4d87270b305dd6f5ff8cee26c1
Classification: EXPLOITABLE
Hash: cf009b14bb2e95f0ddf33d49d7b881ad.f2223e1cc5978d85376f251567dadb5c
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/be5843fb4b51ada6df1bd3acc9478b2bb6d17590c3d50007fd10435f08710411.php
Faulting Frame:
   icu_52::RuleBasedBreakIterator::handleNext(icu_52::RBBIStateTable const*) @ 0x00007ffff65f8e78: in /usr/lib/x86_64-linux-gnu/libicuuc.so.52.1
Disassembly:
   0x00007ffff65f8e6b: lea r12,[rsi+0x10]
   0x00007ffff65f8e6f: push rbp
   0x00007ffff65f8e70: mov rbp,rsi
   0x00007ffff65f8e73: push rbx
   0x00007ffff65f8e74: sub rsp,0x28
=> 0x00007ffff65f8e78: mov eax,DWORD PTR [rsi+0x8]
   0x00007ffff65f8e7b: mov r13d,DWORD PTR [rsi+0x4]
   0x00007ffff65f8e7f: mov BYTE PTR [rdi+0x174],0x1
   0x00007ffff65f8e86: mov DWORD PTR [rdi+0x170],0x0
   0x00007ffff65f8e90: mov rdi,QWORD PTR [rdi+0x148]
Stack Head (6 entries):
   icu_52::RuleBasedBreakIte @ 0x00007ffff65f8e78: in in /usr/lib/x86_64-linux-gnu/libicuuc.so.52.1
   icu_52::RuleBasedBreakIte @ 0x00007ffff65fae6f: in /usr/lib/x86_64-linux-gnu/libicuuc.so.52.1
   HPHP::Intl::c_IntlBreakIt @ 0x0000000006a54727: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d800817: in [heap]
   None                      @ 0x00007fffe19bff50: in
   None                      @ 0x0000000000000000: in ?
Registers:
rax=0x0000000000000000 rbx=0x00007fffe2159f00 rcx=0x00007fffe19bff60 rdx=0x00007fffe18998c0
rsi=0x0000000000000090 rdi=0x00007fffe2159f00 rbp=0x0000000000000090 rsp=0x00007fffffffc900
 r8=0x0000000000000000  r9=0x00007fffe80ad290 r10=0x0000000000000000 r11=0x00007ffff069c790
r12=0x00000000000000a0 r13=0x00007fffe19bff50 r14=0x00007fffe2159f00 r15=0x0000000000000001
rip=0x00007ffff65f8e78 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: a6836acf0acedb456f900d7a07eb6923.d1467479eebfa394ef4ee9abb45ea730
---CRASH SUMMARY---
Filename: /home/ad/crash/550f7df46b15419ca2ae4537c1a75d4e24aa75124760da23d5984d0a2e1526a7.php
SHA1: a288da6af4d27f7801f76d08eb5a0f922d6be51e
Classification: EXPLOITABLE
Hash: a6836acf0acedb456f900d7a07eb6923.d1467479eebfa394ef4ee9abb45ea730
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/550f7df46b15419ca2ae4537c1a75d4e24aa75124760da23d5984d0a2e1526a7.php
Faulting Frame:
   None @ 0x00007ffff7bc28af: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
Disassembly:
Stack Head (16 entries):
   None                      @ 0x00007ffff7bc28af: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
   HPHP::BigHeap::allocBig   @ 0x000000000543e04d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MemoryManager::mall @ 0x000000000543e96f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   objMalloc                 @ 0x00000000052aeece: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::PackedArray::MakeRe @ 0x00000000052aeece: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   MakeReserveImpl           @ 0x00000000052af1e8: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::PackedArray::MakeRe @ 0x00000000052af1e8: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MixedArray::MakeRes @ 0x00000000053fcd58: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ArrayUtil::Pad      @ 0x000000000542f55d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::__lambda178::operat @ 0x00000000069e0bc2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_array_pad         @ 0x00000000069e0cfa: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c01936: in [heap]
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x0000000000000000 rcx=0x00000000ffffffff rdx=0x0000000000000001
rsi=0x00007fffffffc5e0 rdi=0x00007ffff7dd9440 rbp=0x00007fffffffc670 rsp=0x00007fffffffc5e0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007fffffffc3f0 r11=0x00007ffff7baec90
r12=0x00007fffffffc910 r13=0x00007fffe19bfee0 r14=0x00007fffe68fc740 r15=0x0000000000000001
rip=0x00007ffff7bc28af efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 1e66438e47881151b4a8c2884671e822.7d7ab77208adb49f4e1eaa1c1637c37b
---CRASH SUMMARY---
Filename: /home/ad/crash/0f0fd18dea4c074f6ce93f0cae13fee0edbee38f164bba69c86e0926ee446274.php
SHA1: 8b2e0393fbbdb60e01a59cbf97dbc42fce61f26e
Classification: EXPLOITABLE
Hash: 1e66438e47881151b4a8c2884671e822.7d7ab77208adb49f4e1eaa1c1637c37b
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/0f0fd18dea4c074f6ce93f0cae13fee0edbee38f164bba69c86e0926ee446274.php
Faulting Frame:
   HPHP::PlainDirectory::read @ 0x000000000539768d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff05d1f80: cmp DWORD PTR [rip+0x3070ed],0x0 # 0x7ffff08d9074 <__libc_multiple_threads>
   0x00007ffff05d1f87: je 0x7ffff05d1f96 <__readdir_r+70>
   0x00007ffff05d1f89: lock cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d1f8e: jne 0x7ffff05d20c0 <_L_lock_43>
   0x00007ffff05d1f94: jmp 0x7ffff05d1fa0 <__readdir_r+80>
=> 0x00007ffff05d1f96: cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d1f9a: jne 0x7ffff05d20c0 <_L_lock_43>
   0x00007ffff05d1fa0: mov rcx,QWORD PTR [rbx+0x18]
   0x00007ffff05d1fa4: mov r14,QWORD PTR [rbx+0x10]
   0x00007ffff05d1fa8: lea rbp,[rbx+0x30]
Stack Head (12 entries):
   __readdir_r               @ 0x00007ffff05d1f96: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::PlainDirectory::rea @ 0x000000000539768d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_readdir           @ 0x000000000694f665: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c012a6: in [heap]
   None                      @ 0x00007fffe68eff40: in
   None                      @ 0x0000000009c010c7: in [heap]
   None                      @ 0x00007fffe19bff40: in
   None                      @ 0x00007fffe68f0010: in
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x0000000000000000 rcx=0x00007fffffffc830 rdx=0x00007fffffffc828
rsi=0x0000000000000001 rdi=0x0000000000000000 rbp=0x00007fffffffc960 rsp=0x00007fffffffc7a0
 r8=0x00007fffe68f0010  r9=0x0000000007961c80 r10=0x00007fffe8006000 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe1d0d2e0 r14=0x00007fffe68eff40 r15=0x0000000000000001
rip=0x00007ffff05d1f96 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 7403d01f21f5d11910254195c1aa0019.f26abfbd7e1c2d8281a8671aca6d736c
---CRASH SUMMARY---
Filename: /home/ad/crash/da25b9210111411779975403bc77b213686a07eaccd813685d09000f8e52a551.php
SHA1: ddb968d5ec340ee3bd883a0f7136f107181220c9
Classification: EXPLOITABLE
Hash: 7403d01f21f5d11910254195c1aa0019.f26abfbd7e1c2d8281a8671aca6d736c
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/da25b9210111411779975403bc77b213686a07eaccd813685d09000f8e52a551.php
Faulting Frame:
   HPHP::PlainDirectory::rewind @ 0x000000000539774a: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff05d210b: cmp DWORD PTR [rip+0x306f62],0x0 # 0x7ffff08d9074 <__libc_multiple_threads>
   0x00007ffff05d2112: je 0x7ffff05d211d <__GI_rewinddir+29>
   0x00007ffff05d2114: lock cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d2119: jne 0x7ffff05d2165 <_L_lock_15>
   0x00007ffff05d211b: jmp 0x7ffff05d2123 <__GI_rewinddir+35>
=> 0x00007ffff05d211d: cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d2121: jne 0x7ffff05d2165 <_L_lock_15>
   0x00007ffff05d2123: mov edi,DWORD PTR [rbx]
   0x00007ffff05d2125: xor edx,edx
   0x00007ffff05d2127: xor esi,esi
Stack Head (6 entries):
   __GI_rewinddir            @ 0x00007ffff05d211d: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::PlainDirectory::rew @ 0x000000000539774a: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_rewinddir         @ 0x000000000694f748: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c00b4b: in [heap]
   None                      @ 0x00007fffe19bff60: in
   None                      @ 0x0000000000000000: in ?
Registers:
rax=0x0000000000000000 rbx=0x0000000000000000 rcx=0x00007fffffffc90f rdx=0x000000000539772e
rsi=0x0000000000000001 rdi=0x0000000000000000 rbp=0x00007fffffffc970 rsp=0x00007fffffffc950
 r8=0x00007fffe68eff50  r9=0x0000000007961c80 r10=0x00007fffffffc720 r11=0x00007ffff05d2100
r12=0x00007fffe25f5000 r13=0x00007fffe19bff60 r14=0x00007fffe25f5000 r15=0x0000000000000001
rip=0x00007ffff05d211d efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 7b6234b5a7524f51390985ab19a03ca5.9368acf66bc2907ec5c4184daad6bc29
---CRASH SUMMARY---
Filename: /home/ad/crash/4021c1be832aa6e8febd10894cccd27ace5fb9914d839c3effd3b229e9c63b0d.php
SHA1: 2e28c838766a199cadc628178ad9ffcb4f22508a
Classification: EXPLOITABLE
Hash: 7b6234b5a7524f51390985ab19a03ca5.9368acf66bc2907ec5c4184daad6bc29
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/4021c1be832aa6e8febd10894cccd27ace5fb9914d839c3effd3b229e9c63b0d.php
Faulting Frame:
   HPHP::StringData::data @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x0000000004bf72ba: push rbp
   0x0000000004bf72bb: mov rbp,rsp
   0x0000000004bf72be: mov QWORD PTR [rbp-0x8],rdi
   0x0000000004bf72c2: mov rax,QWORD PTR [rbp-0x8]
=> 0x0000000004bf72c6: mov rax,QWORD PTR [rax]
   0x0000000004bf72c9: pop rbp
   0x0000000004bf72ca: ret
Stack Head (9 entries):
   HPHP::StringData::data    @ 0x0000000004bf72c6: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateTime::zoneType  @ 0x0000000006b7e650: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::DateTimeData::getDe @ 0x0000000006b81990: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::c_DateTime_ni___deb @ 0x0000000006b81951: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x000000000d800e3e: in [heap]
   None                      @ 0x0000000009c00000: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffb8d0: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000020 rbx=0x00007fffe68f0020 rcx=0x00007fffe19bff30 rdx=0x00007fffffffb7f0
rsi=0x00007fffe68f0018 rdi=0x0000000000000020 rbp=0x00007fffffffb780 rsp=0x00007fffffffb780
 r8=0x0000000000000000  r9=0x00007fffe80ad290 r10=0x0000000000000001 r11=0x00007ffff069c790
r12=0x00007fffe25f5000 r13=0x00007fffe19bff30 r14=0x00007fffe25f5000 r15=0x00007fffe25f5040
rip=0x0000000004bf72c6 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: a6836acf0acedb456f900d7a07eb6923.dd2352c7d29f83418312747c96106e66
---CRASH SUMMARY---
Filename: /home/ad/crash/bf687996621dbe437e7b8f7011c75736d510a5d13e73d3111a3fcd4bab9c3943.php
SHA1: 2fcab9396478928bbba02940a9ad261f54407f81
Classification: EXPLOITABLE
Hash: a6836acf0acedb456f900d7a07eb6923.dd2352c7d29f83418312747c96106e66
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/bf687996621dbe437e7b8f7011c75736d510a5d13e73d3111a3fcd4bab9c3943.php
Faulting Frame:
   None @ 0x00007ffff7bc28af: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
Disassembly:
Stack Head (16 entries):
   None                      @ 0x00007ffff7bc28af: in /usr/lib/x86_64-linux-gnu/libjemalloc.so.1
   HPHP::BigHeap::allocBig   @ 0x000000000543e04d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MemoryManager::mall @ 0x000000000543e96f: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   objMalloc                 @ 0x00000000052aeece: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::PackedArray::MakeRe @ 0x00000000052aeece: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   MakeReserveImpl           @ 0x00000000052af1e8: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::PackedArray::MakeRe @ 0x00000000052af1e8: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::MixedArray::MakeRes @ 0x00000000053fcd58: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::ArrayUtil::Pad      @ 0x000000000542f55d: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::__lambda178::operat @ 0x00000000069e0bc2: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_array_pad         @ 0x00000000069e0cfa: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c01a18: in [heap]
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x0000000000000000 rcx=0x00000000ffffffff rdx=0x0000000000000001
rsi=0x00007fffffffc5e0 rdi=0x00007ffff7dd9440 rbp=0x00007fffffffc670 rsp=0x00007fffffffc5e0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007fffffffc3f0 r11=0x00007ffff7baec90
r12=0x00007fffffffc910 r13=0x00007fffe19bfee0 r14=0x00007fffe6900e00 r15=0x00007fffe68eccb0
rip=0x00007ffff7bc28af efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: eb4f7548e74d7ba264c15777c72cdfc0.16a2212319f090a68e9f2aae039cff57
---CRASH SUMMARY---
Filename: /home/ad/crash/9f28628a7d1b24d9c458f6ef5b47f7dffed1d61a53360f9fb3b66815cdaeabaa.php
SHA1: 1a1f13d14dc02712516f2036ac800f15982a3ec7
Classification: EXPLOITABLE
Hash: eb4f7548e74d7ba264c15777c72cdfc0.16a2212319f090a68e9f2aae039cff57
Command: /home/ad/builds/hhvm-3.15-debug/bin/hhvm /home/ad/crash/9f28628a7d1b24d9c458f6ef5b47f7dffed1d61a53360f9fb3b66815cdaeabaa.php
Faulting Frame:
   HPHP::PlainDirectory::rewind @ 0x000000000539774a: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Disassembly:
   0x00007ffff05d210b: cmp DWORD PTR [rip+0x306f62],0x0 # 0x7ffff08d9074 <__libc_multiple_threads>
   0x00007ffff05d2112: je 0x7ffff05d211d <__GI_rewinddir+29>
   0x00007ffff05d2114: lock cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d2119: jne 0x7ffff05d2165 <_L_lock_15>
   0x00007ffff05d211b: jmp 0x7ffff05d2123 <__GI_rewinddir+35>
=> 0x00007ffff05d211d: cmpxchg DWORD PTR [rbx+0x4],esi
   0x00007ffff05d2121: jne 0x7ffff05d2165 <_L_lock_15>
   0x00007ffff05d2123: mov edi,DWORD PTR [rbx]
   0x00007ffff05d2125: xor edx,edx
   0x00007ffff05d2127: xor esi,esi
Stack Head (10 entries):
   __GI_rewinddir            @ 0x00007ffff05d211d: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   HPHP::PlainDirectory::rew @ 0x000000000539774a: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   HPHP::f_rewinddir         @ 0x000000000694f748: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
   None                      @ 0x0000000009c00bfe: in [heap]
   None                      @ 0x00007fffe19bff60: in
   None                      @ 0x04007f002e040018: in ?
   None                      @ 0x0000000009c0004f: in [heap]
   None                      @ 0x00007fffe25f5008: in
   None                      @ 0x00007fffffffca50: in [stack]
   HPHP::jit::enterTCImpl    @ 0x0000000005e78933: in /home/ad/builds/hhvm-3.15-debug/bin/hhvm
Registers:
rax=0x0000000000000000 rbx=0x0000000000000000 rcx=0x00007fffffffc90f rdx=0x000000000539772e
rsi=0x0000000000000001 rdi=0x0000000000000000 rbp=0x00007fffffffc970 rsp=0x00007fffffffc950
 r8=0x00007fffe68eff50  r9=0x0000000007961c80 r10=0x00007fffffffc720 r11=0x00007ffff05d2100
r12=0x00007fffe25f5000 r13=0x00007fffe19bff60 r14=0x00007fffe68e8320 r15=0x0000000000000022
rip=0x00007ffff05d211d efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
```
