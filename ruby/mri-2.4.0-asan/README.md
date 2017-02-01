```
(1 of 1) - Hash: fc4b95b59953570db4cc9aedad91b48f.55ea2af9e0fecc322391e2ea5410d515
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/dbdd0f2931cf657e1f4b94c6c27a6d3ac19f01b95de88097e1801a06bc5cbdcf.rb
SHA1: 4ff65910ed806a50bdb4e236c8792d707406a20a
Classification: EXPLOITABLE
Hash: fc4b95b59953570db4cc9aedad91b48f.55ea2af9e0fecc322391e2ea5410d515
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/dbdd0f2931cf657e1f4b94c6c27a6d3ac19f01b95de88097e1801a06bc5cbdcf.rb
Faulting Frame:
   iseq_compile_each @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555934070: mov rbp,rsp
   0x0000555555934073: push r13
   0x0000555555934075: push r12
   0x0000555555934077: push rbx
   0x0000555555934078: sub rsp,0x7f8
=> 0x000055555593407f: mov QWORD PTR [rbp-0x7e8],rdi
   0x0000555555934086: mov QWORD PTR [rbp-0x7f0],rsi
   0x000055555593408d: mov QWORD PTR [rbp-0x7f8],rdx
   0x0000555555934094: mov DWORD PTR [rbp-0x7fc],ecx
   0x000055555593409a: lea rax,[rbp-0x2e0]
Stack Head (1000 entries):
   iseq_compile_each         @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00006092005e1d50 rbx=0x000010007fef7f64 rcx=0x0000000000000000 rdx=0x00006092001098a0
rsi=0x00007fffff7ffd00 rdi=0x00006092005e1d50 rbp=0x00007fffff7ff5e0 rsp=0x00007fffff7fedd0
 r8=0x00007fffff800e90  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000000000000001 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: e48c7369a487ecae0dbc013055d09c67.184e821682173fd124bcee3038e59633
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/ce0ad6e14b2a4b8d4f0e9429f1f518184b08be86264a1e03fd1a13cdf357cced.rb
SHA1: e19493cc04a01bf83119a7be9cd80e4f61240f0f
Classification: EXPLOITABLE
Hash: e48c7369a487ecae0dbc013055d09c67.184e821682173fd124bcee3038e59633
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/ce0ad6e14b2a4b8d4f0e9429f1f518184b08be86264a1e03fd1a13cdf357cced.rb
Faulting Frame:
   write @ 0x00007ffff4c3c34d: in /lib/x86_64-linux-gnu/libpthread-2.19.so
Disassembly:
   0x00007ffff4c3c339: sub rsp,0x8
   0x00007ffff4c3c33d: call 0x7ffff4c3be10 <__pthread_enable_asynccancel>
   0x00007ffff4c3c342: mov QWORD PTR [rsp],rax
   0x00007ffff4c3c346: mov eax,0x1
   0x00007ffff4c3c34b: syscall
=> 0x00007ffff4c3c34d: mov rdi,QWORD PTR [rsp]
   0x00007ffff4c3c351: mov rdx,rax
   0x00007ffff4c3c354: call 0x7ffff4c3be70 <__pthread_disable_asynccancel>
   0x00007ffff4c3c359: mov rax,rdx
   0x00007ffff4c3c35c: add rsp,0x8
Stack Head (49 entries):
   write                     @ 0x00007ffff4c3c34d: in /lib/x86_64-linux-gnu/libpthread-2.19.so
   write                     @ 0x00007ffff4e570c8: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   internal_write_func       @ 0x00005555556252bb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_thread_io_blocking_reg @ 0x0000555555820e4a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_write_internal         @ 0x000055555562565f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   io_binwrite_string        @ 0x0000555555626be8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   io_binwrite               @ 0x0000555555627137: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   io_fwrite                 @ 0x0000555555627cfb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   io_write                  @ 0x0000555555627f18: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   io_write_m                @ 0x0000555555627f9e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_1              @ 0x00005555558850e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_cfunc_with_frame @ 0x00005555558aba86: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_cfunc            @ 0x00005555558abc3d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac036: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0xffffffffffffffe0 rbx=0x00007ffff1074b90 rcx=0xffffffffffffffff rdx=0x0000000000000003
rsi=0x00006092000dc978 rdi=0x0000000000000008 rbp=0x00007ffff10748f0 rsp=0x00007ffff10748b0
 r8=0x0000000000000000  r9=0x0000000000000002 r10=0x0000000022220000 r11=0x0000000000000293
r12=0x00006092000dc978 r13=0x0000000000000000 r14=0x0000602e00016338 r15=0x00007ffff1482770
rip=0x00007ffff4c3c34d efl=0x0000000000000293  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 43a9f01eaad4a3ef062b7797cfd66b0a.1ef3640ef331d89c796a1ad5063d7f12
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/98a7dd8e86f202703cff30096c4654ca64c13faae7365542015445bc7adfca17.rb
SHA1: 2369e64626a2156633929d7a6c7d149ffb60044b
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 43a9f01eaad4a3ef062b7797cfd66b0a.1ef3640ef331d89c796a1ad5063d7f12
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/98a7dd8e86f202703cff30096c4654ca64c13faae7365542015445bc7adfca17.rb
Faulting Frame:
   onig_node_free @ 0x000055555577c14a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555577c13a: test dl,dl
   0x000055555577c13c: je 0x55555577c146 <onig_node_free+79>
   0x000055555577c13e: mov rdi,rax
   0x000055555577c141: call 0x5555555d4760 <__asan_report_load4@plt>
   0x000055555577c146: mov rax,QWORD PTR [rbp-0x18]
=> 0x000055555577c14a: mov eax,DWORD PTR [rax]
   0x000055555577c14c: cmp eax,0x9
   0x000055555577c14f: ja 0x55555577c415 <onig_node_free+798>
   0x000055555577c155: mov eax,eax
   0x000055555577c157: lea rdx,[rax*4+0x0]
Stack Head (1000 entries):
   onig_node_free            @ 0x000055555577c14a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a30bf: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a404b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_enclose             @ 0x000055555579c579: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a1d8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a404b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_enclose             @ 0x0000555555799d25: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a1d8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a4143: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_enclose             @ 0x000055555579c579: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a1d8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a404b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000000000000058 rbx=0x000010007ff63748 rcx=0x0000000000000003 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x0000000000000058 rbp=0x00007fffffb5b9a0 rsp=0x00007fffffb5b980
 r8=0x00000000fffffff0  r9=0x00007fffffffba90 r10=0x00007ffff72ce700 r11=0x0000600c001c9160
r12=0x00007ffff30a33a9 r13=0x0000609200192420 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555577c14a efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: c408db942c61c325240d0b10e7f1d97d.dbe3ebddb2a20b0a9e63d4564d83bbf0
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/e2b1f0d13a0e0f6ad61a7f851b97d3882148b54005974c7ed4e6a59e4cde7ed0.rb
SHA1: 1fc584a9ae0afb1a0cd3f52279a17b6b55a68933
Classification: EXPLOITABLE
Hash: c408db942c61c325240d0b10e7f1d97d.dbe3ebddb2a20b0a9e63d4564d83bbf0
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/e2b1f0d13a0e0f6ad61a7f851b97d3882148b54005974c7ed4e6a59e4cde7ed0.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield                  @ 0x00005555558afb92: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_each               @ 0x00005555558dc7b4: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_0              @ 0x0000555555885093: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589426c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff800200 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7fff70 rsp=0x00007fffff7fec80
 r8=0x00007ffff3e5b4e1  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e5b510
r12=0x00007ffff3eb2640 r13=0x00007fffffffeb20 r14=0x000060400001f308 r15=0x00007ffff3eb2640
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: 3a170fe8b4974e53cd755781921c37d6.1f30c4f2b71c0b640f099a28f6d2c68e
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/de3cadef31e51ca4d6a2f1e8871e52ed7ac94449f8d4049f52c597340ac8509c.rb
SHA1: 328acd616edd2694fceb79ce90d6028ba11606e4
Classification: EXPLOITABLE
Hash: 3a170fe8b4974e53cd755781921c37d6.1f30c4f2b71c0b640f099a28f6d2c68e
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/de3cadef31e51ca4d6a2f1e8871e52ed7ac94449f8d4049f52c597340ac8509c.rb
Faulting Frame:
   rb_ivar_set @ 0x000055555586f16f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555586f161: push rbp
   0x000055555586f162: mov rbp,rsp
   0x000055555586f165: push r12
   0x000055555586f167: push rbx
   0x000055555586f168: sub rsp,0xb0
=> 0x000055555586f16f: mov QWORD PTR [rbp-0xa8],rdi
   0x000055555586f176: mov QWORD PTR [rbp-0xb0],rsi
   0x000055555586f17d: mov QWORD PTR [rbp-0xb8],rdx
   0x000055555586f184: lea rax,[rbp-0x70]
   0x000055555586f188: mov QWORD PTR [rax],0x41b58ab3
Stack Head (1000 entries):
   rb_ivar_set               @ 0x000055555586f16f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_setivar                @ 0x000055555587c502: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_setinstancevariable    @ 0x000055555587cd8d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555588f1e6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_call_init          @ 0x00005555555dea17: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dac9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00006092002a6aa0 rbx=0x000010007fef7e12 rcx=0x000000000000cdb3 rdx=0x0000609200308318
rsi=0x000000000000cdb3 rdi=0x00006092002a6aa0 rbp=0x00007fffff7ff030 rsp=0x00007fffff7fef70
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x0000000000000000 r11=0x00007ffff3e2f2b8
r12=0x0000609200575b28 r13=0x00007fffffffeb20 r14=0x000060200001c788 r15=0x00007ffff3ee9810
rip=0x000055555586f16f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: 9870eab46f43df124a371380a689676c.dccdb96bbb9782b99b25a57bfe85f595
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/c58b706db4f2da44223473af3f8ccfe30d75e640fe8e5bf438c50ca22128637e.rb
SHA1: 1dfafea76579c01202b1a65972feaef1463a7f68
Classification: EXPLOITABLE
Hash: 9870eab46f43df124a371380a689676c.dccdb96bbb9782b99b25a57bfe85f595
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/c58b706db4f2da44223473af3f8ccfe30d75e640fe8e5bf438c50ca22128637e.rb
Faulting Frame:
   vm_setivar @ 0x000055555587be02: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555587bde9: mov rbp,rsp
   0x000055555587bdec: push rbx
   0x000055555587bded: sub rsp,0xb8
   0x000055555587bdf4: mov QWORD PTR [rbp-0x98],rdi
   0x000055555587bdfb: mov QWORD PTR [rbp-0xa0],rsi
=> 0x000055555587be02: mov QWORD PTR [rbp-0xa8],rdx
   0x000055555587be09: mov QWORD PTR [rbp-0xb0],rcx
   0x000055555587be10: mov QWORD PTR [rbp-0xb8],r8
   0x000055555587be17: mov DWORD PTR [rbp-0xbc],r9d
   0x000055555587be1e: lea rax,[rbp-0x70]
Stack Head (1000 entries):
   vm_setivar                @ 0x000055555587be02: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_setinstancevariable    @ 0x000055555587cd8d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555588f1e6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_call_init          @ 0x00005555555dea17: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dac9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000609200353098 rbx=0x000010007fef7f7c rcx=0x0000600e000aafd0 rdx=0x000060920037fdf0
rsi=0x000000000000d4e3 rdi=0x0000609200353098 rbp=0x00007fffff7ff0a0 rsp=0x00007fffff7fefe0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x0000000000000000 r11=0x00007ffff3e2e3e0
r12=0x00006092004067b0 r13=0x00007fffffffeb20 r14=0x0000602e00013f68 r15=0x00007ffff3eeae00
rip=0x000055555587be02 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 1e14c1ddd94ec0a98eae50042fa29c99.ddc2e6ee3e257d5a05c422caab35511d
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/46685b39708e145708c5f9d9dd9230f11a8b28f89ad6527e9a9c1acb461d2406.rb
SHA1: f3bbcd1e3db6d47d7045c3f96ddadbd9e5364af7
Classification: EXPLOITABLE
Hash: 1e14c1ddd94ec0a98eae50042fa29c99.ddc2e6ee3e257d5a05c422caab35511d
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/46685b39708e145708c5f9d9dd9230f11a8b28f89ad6527e9a9c1acb461d2406.rb
Faulting Frame:
   vm_call_cfunc_with_frame @ 0x000055555588699e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588697b: sub rsp,0x118
   0x0000555555886982: mov QWORD PTR [rbp-0xd8],rdi
   0x0000555555886989: mov QWORD PTR [rbp-0xe0],rsi
   0x0000555555886990: mov QWORD PTR [rbp-0xe8],rdx
   0x0000555555886997: mov QWORD PTR [rbp-0xf0],rcx
=> 0x000055555588699e: mov QWORD PTR [rbp-0xf8],r8
   0x00005555558869a5: lea rax,[rbp-0x90]
   0x00005555558869ac: mov QWORD PTR [rax],0x41b58ab3
   0x00005555558869b3: lea rdx,[rip+0x1af986] # 0x555555a36340
   0x00005555558869ba: mov QWORD PTR [rax+0x8],rdx
Stack Head (1000 entries):
   vm_call_cfunc_with_frame  @ 0x000055555588699e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield                  @ 0x00005555558afb92: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_collect            @ 0x00005555558e04bb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_0              @ 0x0000555555885093: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589426c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x000010007fef7f88 rcx=0x0000600c000c0b00 rdx=0x00007fffff7ffd60
rsi=0x00007ffff3ee97e0 rdi=0x000060420001ef80 rbp=0x00007fffff7ff0f0 rsp=0x00007fffff7fefd0
 r8=0x0000601c0003b220  r9=0x00006092003e8a80 r10=0x0000000000000000 r11=0x00007ffff3e2f300
r12=0x00006092003e8288 r13=0x00007fffffffeb20 r14=0x0000602a00015e00 r15=0x00007ffff3ee97e0
rip=0x000055555588699e efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 7) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.98d6d51212a6ab862b95254c39770077
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/84a3c84c6fd0b28d41be4e8c5ecd6fa6f7663e5dff93abdbea9eecea48636f98.rb
SHA1: 86b1805abb0103db4c7833e54a1235f668b94234
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.98d6d51212a6ab862b95254c39770077
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/84a3c84c6fd0b28d41be4e8c5ecd6fa6f7663e5dff93abdbea9eecea48636f98.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_alloc                 @ 0x00005555558d4fee: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_new                   @ 0x00005555558d511c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_capa           @ 0x00005555558d52ba: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_from_values    @ 0x00005555558d56f6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555890d2c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_opt_call          @ 0x0000555555888f16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff778 rdx=0x0000000000000008
rsi=0x00007fffff7ff778 rdi=0x0000609200393498 rbp=0x00007fffff7ff740 rsp=0x00007fffff7fef00
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000022220021 r11=0x00007ffff3e29998
r12=0x00007fffff7ff778 r13=0x0000609200393498 r14=0x000060a400012b98 r15=0x00007ffff3eff8c0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.64c9df121d8ee8de14afcb7572d2e544
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/f52f71755ad5f5059852d67678c0f067b808e983c14ecb9bbebcde32da4ccd55.rb
SHA1: 0bf134e048e9da220fd37941b319ea8c03c34294
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.64c9df121d8ee8de14afcb7572d2e544
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/f52f71755ad5f5059852d67678c0f067b808e983c14ecb9bbebcde32da4ccd55.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_alloc                 @ 0x00005555558d4fee: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_new                   @ 0x00005555558d511c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_capa           @ 0x00005555558d52ba: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new                @ 0x00005555558d52ca: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   args_rest_array           @ 0x000055555587f818: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   args_setup_rest_parameter @ 0x0000555555880a97: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_parameters_complex  @ 0x00005555558829b2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_callee_setup_block_arg @ 0x000055555588cda8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield_setup_args       @ 0x000055555588cf4a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7a8d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff1f8 rdx=0x0000000000000008
rsi=0x00007fffff7ff1f8 rdi=0x0000609200302d30 rbp=0x00007fffff7ff1c0 rsp=0x00007fffff7fe980
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x00007ffff4e60600 r11=0x000000000000001e
r12=0x00007fffff7ff1f8 r13=0x0000609200302d30 r14=0x0000603c0001c920 r15=0x00007ffff3eff9e0
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 514b30693726fdcdfe0d401a5c7e494a.57da60b1f11c07fa99a058f1d3108459
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/8d541cab13894ee8b6d6dfc0cb4f5375592feffcfc4a335d3bc84a39d8ccb180.rb
SHA1: 4fa1aa765a71852dba26db0670a89a7b4ae4a57d
Classification: EXPLOITABLE
Hash: 514b30693726fdcdfe0d401a5c7e494a.57da60b1f11c07fa99a058f1d3108459
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/8d541cab13894ee8b6d6dfc0cb4f5375592feffcfc4a335d3bc84a39d8ccb180.rb
Faulting Frame:
   list_table_index @ 0x000055555581142d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555581141e: mov edx,DWORD PTR [rbp-0xc]
   0x0000555555811421: mov ecx,DWORD PTR [rbp-0x1c]
   0x0000555555811424: mov rax,QWORD PTR [rbp-0x8]
   0x0000555555811428: mov esi,ecx
   0x000055555581142a: mov rdi,rax
=> 0x000055555581142d: call 0x5555558112cd <list_ids_bsearch>
   0x0000555555811432: leave
   0x0000555555811433: ret
Stack Head (1000 entries):
   list_table_index          @ 0x000055555581142d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   list_id_table_lookup      @ 0x0000555555811468: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   mix_id_table_lookup       @ 0x0000555555813a79: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_method_entry_make      @ 0x00005555558a559e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_add_method             @ 0x00005555558a5d9b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_add_method_iseq        @ 0x00005555558a5ea3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_define_method          @ 0x00005555558bfd51: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   m_core_define_method      @ 0x00005555558bfea5: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_2              @ 0x0000555555885167: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall_default  @ 0x00005555558ad9be: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00006010000c44a0 rbx=0x000010007fef7e22 rcx=0x0000000000000b64 rdx=0x0000000000000005
rsi=0x0000000000000b64 rdi=0x00006010000c44a0 rbp=0x00007fffff7ff020 rsp=0x00007fffff7ff000
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x0000602c0001b820 r15=0x00007ffff3eff260
rip=0x000055555581142d efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: e72798fb212ee1d374758dc217a7d25d.475fb140a764458ee10e6efef5951642
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/9e4d3f7d1eb4eaae0d1dd05e2cd416d1d2a2e4a48fddc42f31d10df1eb712480.rb
SHA1: 59602222dc99e3e111ba385c3c294977ea7157a5
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.475fb140a764458ee10e6efef5951642
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/9e4d3f7d1eb4eaae0d1dd05e2cd416d1d2a2e4a48fddc42f31d10df1eb712480.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_call_init          @ 0x00005555555dea17: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dac9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff8003a0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff800110 rsp=0x00007fffff7fee20
 r8=0x0000000000000000  r9=0x00006092003a0d98 r10=0x0000000000000000 r11=0x00007ffff3e2f250
r12=0x00006092003a0780 r13=0x00007fffffffeb20 r14=0x0000602a00016508 r15=0x00007ffff3ee9870
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: e72798fb212ee1d374758dc217a7d25d.dfcfde3fcf6c5874d5e43c677315460c
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/e37f50c1529aed9bed4f1d0becb8c4958f67ecea0396c5b723e4a46d0a7c2f2f.rb
SHA1: 673ac0d5be9d7d6da71038a8500fa342ab4fd780
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.dfcfde3fcf6c5874d5e43c677315460c
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/e37f50c1529aed9bed4f1d0becb8c4958f67ecea0396c5b723e4a46d0a7c2f2f.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   method_added              @ 0x00005555558a5d36: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_alias                  @ 0x00005555558a9c83: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   m_core_set_method_alias   @ 0x00005555558c01a0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_3              @ 0x0000555555885213: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff8001f0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7fff60 rsp=0x00007fffff7fec70
 r8=0x0000000000000000  r9=0x00006092001a1768 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x0000602800012ba8 r15=0x00007ffff3f00730
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: dda2135bc931c7e2b4323b1ec274dc0b.2f002bc28402c1f6807e416173f87a44
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/3f859197850bc2b51ae9f62c5fc5b17b38295dd0334377ce1972efa3b47234fd.rb
SHA1: 300caddfc37f8f4879fe245143bba6b7b3976ea4
Classification: EXPLOITABLE
Hash: dda2135bc931c7e2b4323b1ec274dc0b.2f002bc28402c1f6807e416173f87a44
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/3f859197850bc2b51ae9f62c5fc5b17b38295dd0334377ce1972efa3b47234fd.rb
Faulting Frame:
   objspace_xmalloc0 @ 0x000055555560f58b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x00007ffff4e603f8: push r12
   0x00007ffff4e603fa: mov r12,rdi
   0x00007ffff4e603fd: push rbx
   0x00007ffff4e603fe: lea rbx,[rbp-0x830]
   0x00007ffff4e60405: sub rsp,0x810
=> 0x00007ffff4e6040c: call 0x7ffff4e5d520
   0x00007ffff4e60411: movzx r14d,BYTE PTR [rax+0x59]
   0x00007ffff4e60416: call 0x7ffff4e67940
   0x00007ffff4e6041b: mov r13,rax
   0x00007ffff4e6041e: call 0x7ffff4e5d520
Stack Head (1000 entries):
   malloc                    @ 0x00007ffff4e6040c: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0 (BL)
   objspace_xmalloc0         @ 0x000055555560f58b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   objspace_xmalloc          @ 0x000055555560f662: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ruby_xmalloc              @ 0x000055555560f999: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   strio_alloc               @ 0x00007ffff3265dff: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/stringio.so
   strio_initialize          @ 0x00007ffff3266546: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/stringio.so
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_cfunc_with_frame @ 0x00005555558aba86: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_cfunc            @ 0x00005555558abc3d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac036: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_call_init          @ 0x00005555555dea17: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dac9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000000000000028 rbx=0x00007fffff7fedf0 rcx=0x0000000000000000 rdx=0x0000000000000028
rsi=0x0000000000000028 rdi=0x0000000000000028 rbp=0x00007fffff7ff620 rsp=0x00007fffff7fedf0
 r8=0x0000555555885039  r9=0x0000609200246268 r10=0x0000000000000001 r11=0x000000000000001e
r12=0x0000000000000028 r13=0x00007fffffffeb20 r14=0x000060300001dcd0 r15=0x00007ffff3ef15b0
rip=0x00007ffff4e6040c efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.5a13a88f68a4999db4725ad5df540df8
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/756dfcc13e5d551254daa04ea7b04d56d1810ff39bed292742fced0174edf947.rb
SHA1: e52282b23fdf0a4561dc8764e190c56024638467
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.5a13a88f68a4999db4725ad5df540df8
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/756dfcc13e5d551254daa04ea7b04d56d1810ff39bed292742fced0174edf947.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_alloc                 @ 0x00005555558d4fee: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_new                   @ 0x00005555558d511c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_capa           @ 0x00005555558d52ba: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_from_values    @ 0x00005555558d56f6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   args_copy                 @ 0x000055555587f5a7: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   args_setup_rest_parameter @ 0x0000555555880a8b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_parameters_complex  @ 0x00005555558829b2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_callee_setup_block_arg @ 0x000055555588cda8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield_setup_args       @ 0x000055555588cf4a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7a8d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff338 rdx=0x0000000000000008
rsi=0x00007fffff7ff338 rdi=0x0000609200334218 rbp=0x00007fffff7ff300 rsp=0x00007fffff7feac0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x00007ffff4e60600 r11=0x000000000000001e
r12=0x00007fffff7ff338 r13=0x0000609200334218 r14=0x0000602e000178a0 r15=0x00007ffff3effa70
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: beb32a52d2f421a6868c27645fbf658f.c2ef50d4564575a0258b4a9cf597cebc
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/6aa44735cc532ce602aedc4d0c3db3f685343dc9701079647c06f502c2a47563.rb
SHA1: 5a1b5468b4433fcca7c82a5b5b88cc7d33d1928e
Classification: EXPLOITABLE
Hash: beb32a52d2f421a6868c27645fbf658f.c2ef50d4564575a0258b4a9cf597cebc
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/6aa44735cc532ce602aedc4d0c3db3f685343dc9701079647c06f502c2a47563.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_allocate_instanc @ 0x000055555569da87: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_alloc              @ 0x000055555569da05: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dab0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   check_match               @ 0x000055555587e841: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555893204: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff828 rdx=0x0000000000000008
rsi=0x00007fffff7ff828 rdi=0x00006092001f1248 rbp=0x00007fffff7ff7f0 rsp=0x00007fffff7fefb0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007fffff7ff828 r13=0x00006092001f1248 r14=0x000060220005b1a8 r15=0x00007ffff3eee430
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: d5bf268666e14004f7b3759c4fc16032.732503e0b5ebea9b3889d21a1c3f8130
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/219203b219a9df1cb6b31cd666a177b93c450d55ec8db2957a81c26edfe6d700.rb
SHA1: 123faab61175be00089c99fe45da4407d23754d0
Classification: EXPLOITABLE
Hash: d5bf268666e14004f7b3759c4fc16032.732503e0b5ebea9b3889d21a1c3f8130
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/219203b219a9df1cb6b31cd666a177b93c450d55ec8db2957a81c26edfe6d700.rb
Faulting Frame:
   compile_array_ @ 0x000055555592d4c0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555592d4b4: push rbp
   0x000055555592d4b5: mov rbp,rsp
   0x000055555592d4b8: push rbx
   0x000055555592d4b9: sub rsp,0x128
=> 0x000055555592d4c0: mov QWORD PTR [rbp-0x108],rdi
   0x000055555592d4c7: mov QWORD PTR [rbp-0x110],rsi
   0x000055555592d4ce: mov QWORD PTR [rbp-0x118],rdx
   0x000055555592d4d5: mov DWORD PTR [rbp-0x11c],ecx
   0x000055555592d4db: mov QWORD PTR [rbp-0x128],r8
Stack Head (1000 entries):
   compile_array_            @ 0x000055555592d4c0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array             @ 0x000055555592e2db: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555941cef: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array             @ 0x000055555592e2db: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555941cef: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array             @ 0x000055555592e2db: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555941cef: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00006092003acdf0 rbx=0x000010007fef7eba rcx=0x0000000000000000 rdx=0x000060920000fbc0
rsi=0x00007fffff7ff9a0 rdi=0x00006092003acdf0 rbp=0x00007fffff7ff090 rsp=0x00007fffff7fef60
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000000000000003 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555592d4c0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 096e99de4a162fb77775f77ac404bdb1.78821256cb45ae2431d36811f0703a03
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/7a5aaf21c17220cbb1c82a93ea6ec3a59c14b656943af44ff3b99ae15898ef11.rb
SHA1: 6a198e323959dab3c2a23f36d00cdcdaa9e603b3
Classification: UNKNOWN
Hash: 096e99de4a162fb77775f77ac404bdb1.78821256cb45ae2431d36811f0703a03
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/7a5aaf21c17220cbb1c82a93ea6ec3a59c14b656943af44ff3b99ae15898ef11.rb
Faulting Frame:
   die @ 0x00005555559919a6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x00007ffff415bc27: movsxd rdx,edi
   0x00007ffff415bc2a: movsxd rsi,esi
   0x00007ffff415bc2d: movsxd rdi,ecx
   0x00007ffff415bc30: mov eax,0xea
   0x00007ffff415bc35: syscall
=> 0x00007ffff415bc37: cmp rax,0xfffffffffffff000
   0x00007ffff415bc3d: ja 0x7ffff415bc5d <__GI_raise+93>
   0x00007ffff415bc3f: repz ret
   0x00007ffff415bc41: nop DWORD PTR [rax+0x0]
   0x00007ffff415bc48: test ecx,ecx
Stack Head (21 entries):
   __GI_raise                @ 0x00007ffff415bc37: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI_abort                @ 0x00007ffff415f028: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   die                       @ 0x00005555559919a6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_bug                    @ 0x0000555555991b16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   backtrace_collect         @ 0x00005555558c46c3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   backtrace_to_location_ary @ 0x00005555558c4bdd: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_backtrace_to_ary       @ 0x00005555558c5d64: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_f_caller_locations     @ 0x00005555558c6002: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_method_each_type  @ 0x000055555588a104: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_method            @ 0x000055555588b2d4: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_general           @ 0x000055555588b578: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000000000000000 rbx=0x000010007fff7988 rcx=0xffffffffffffffff rdx=0x0000000000000006
rsi=0x000000000000258c rdi=0x000000000000258c rbp=0x00007fffffffc9b0 rsp=0x00007fffffffc878
 r8=0x00007ffff44e59d0  r9=0x0000555555a5b9e0 r10=0x0000000000000008 r11=0x0000000000000202
r12=0x0000601800046540 r13=0x00007ffff3e0e848 r14=0x0000607600010590 r15=0x00007ffff3f0e770
rip=0x00007ffff415bc37 efl=0x0000000000000202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Abort signal
   Short description: AbortSignal (20/22)
   Explanation: The target is stopped on a SIGABRT. SIGABRTs are often generated by libc and compiled check-code to indicate potentially exploitable conditions. Unfortunately this command does not yet further analyze these crashes.
---END SUMMARY---
(1 of 2) - Hash: 84df9aa15e5eb9311b3210b33d512c68.215c03bfcd34b4cb68995ee285f83b81
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/1eb314f2b9a92c64c03a85b5f9cd9e33cd7feadbab439e5c6bea4e4d5401a11d.rb
SHA1: 7066bb6d7f7b1c10063022e8fd82d02a6867dc53
Classification: EXPLOITABLE
Hash: 84df9aa15e5eb9311b3210b33d512c68.215c03bfcd34b4cb68995ee285f83b81
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/1eb314f2b9a92c64c03a85b5f9cd9e33cd7feadbab439e5c6bea4e4d5401a11d.rb
Faulting Frame:
   mix_id_table_lookup @ 0x0000555555813a14: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555813a0c: push rbp
   0x0000555555813a0d: mov rbp,rsp
   0x0000555555813a10: sub rsp,0x20
=> 0x0000555555813a14: mov QWORD PTR [rbp-0x8],rdi
   0x0000555555813a18: mov QWORD PTR [rbp-0x10],rsi
   0x0000555555813a1c: mov QWORD PTR [rbp-0x18],rdx
   0x0000555555813a20: mov rax,QWORD PTR [rbp-0x8]
   0x0000555555813a24: mov rdx,rax
Stack Head (1000 entries):
   mix_id_table_lookup       @ 0x0000555555813a14: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   prepare_callable_method_e @ 0x00005555558a6a24: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_callable_method_entry  @ 0x00005555558a6b28: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_search_method          @ 0x000055555587e01f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a42: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield                  @ 0x00005555558afb92: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_collect            @ 0x00005555558e04bb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_0              @ 0x0000555555885093: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000600600014dd0 rbx=0x000010007fef7e10 rcx=0x0000000000000af1 rdx=0x00007fffff7ff018
rsi=0x0000000000000af1 rdi=0x0000600600014dd0 rbp=0x00007fffff7ff000 rsp=0x00007fffff7fefe0
 r8=0x0000000000000000  r9=0x00006092003ae588 r10=0x0000000000000000 r11=0x00007ffff3e2f500
r12=0x00006092003ade30 r13=0x00007fffffffeb20 r14=0x0000602a00016480 r15=0x00007ffff3ee9660
rip=0x0000555555813a14 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 25594fcc7b289c02694a38ea8cc085db.63225f1878e14146d1082d5f94a97e24
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/c8582b16e467cc34bd6e9495cf1a26cd7c7dd8032cd64b5d226d95a7ba6bad53.rb
SHA1: a9ea6579af7c89e2bd93ed752cafe3c93091e10d
Classification: UNKNOWN
Hash: 25594fcc7b289c02694a38ea8cc085db.63225f1878e14146d1082d5f94a97e24
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/c8582b16e467cc34bd6e9495cf1a26cd7c7dd8032cd64b5d226d95a7ba6bad53.rb
Faulting Frame:
   rb_class_of @ 0x0000555555877704: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x00005555558776ee: mov rax,QWORD PTR [rbp-0x8]
   0x00005555558776f2: lea rdx,[rax+0x8]
   0x00005555558776f6: mov rcx,rdx
   0x00005555558776f9: shr rcx,0x3
   0x00005555558776fd: add rcx,0x7fff8000
=> 0x0000555555877704: movzx ecx,BYTE PTR [rcx]
   0x0000555555877707: test cl,cl
   0x0000555555877709: je 0x555555877713 <rb_class_of+209>
   0x000055555587770b: mov rdi,rdx
   0x000055555587770e: call 0x5555555d46b0 <__asan_report_load8@plt>
Stack Head (211 entries):
   rb_class_of               @ 0x0000555555877704: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_search_method          @ 0x000055555587df15: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a42: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield                  @ 0x00005555558afb92: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_collect            @ 0x00005555558e04bb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_0              @ 0x0000555555885093: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589426c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000000010001ef80 rbx=0x000010007fff476c rcx=0x000000009fffbdf1 rdx=0x000000010001ef88
rsi=0x0000601c0003aa40 rdi=0x000000010001ef80 rbp=0x00007ffffffe3010 rsp=0x00007ffffffe3000
 r8=0x0000000000000000  r9=0x0000609200429c38 r10=0x0000000000000000 r11=0x00007ffff3e0f1a0
r12=0x00006092004294e0 r13=0x00007fffffffeb20 r14=0x0000602a00015c60 r15=0x00007ffff3f0dd20
rip=0x0000555555877704 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation on source operand
   Short description: SourceAv (19/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation.
---END SUMMARY---
(1 of 1) - Hash: 473216830acb73526fee3beebb52be41.6c6e7593c25e595e6cedf1f4b5b12bc6
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/ad88eb68a19154c31a5e25edd3c2afe3a623d95ca5e6146568946b63d8d06a2b.rb
SHA1: 6d04b1e30f317ce33a79d08162aee2ef28274c43
Classification: EXPLOITABLE
Hash: 473216830acb73526fee3beebb52be41.6c6e7593c25e595e6cedf1f4b5b12bc6
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/ad88eb68a19154c31a5e25edd3c2afe3a623d95ca5e6146568946b63d8d06a2b.rb
Faulting Frame:
   make_readconv @ 0x000055555562a71a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555562a70b: movzx ecx,BYTE PTR [rcx]
   0x000055555562a70e: test cl,cl
   0x000055555562a710: je 0x55555562a71a <make_readconv+375>
   0x000055555562a712: mov rdi,rdx
   0x000055555562a715: call 0x5555555d46b0 <__asan_report_load8@plt>
=> 0x000055555562a71a: mov rax,QWORD PTR [rax+0x8]
   0x000055555562a71e: mov QWORD PTR [rbp-0x20],rax
   0x000055555562a722: jmp 0x55555562a737 <make_readconv+404>
   0x000055555562a724: lea rax,[rip+0x391c15] # 0x5555559bc340
   0x000055555562a72b: mov QWORD PTR [rbp-0x20],rax
Stack Head (29 entries):
   make_readconv             @ 0x000055555562a71a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   read_all                  @ 0x000055555562c1a9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   io_read                   @ 0x000055555562dc06: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_method_each_type  @ 0x000055555588a104: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_method            @ 0x000055555588b171: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_general           @ 0x000055555588b578: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000000000000000 rbx=0x000010007e34b47e rcx=0x0000000000000000 rdx=0x0000000000000008
rsi=0x0000000000000000 rdi=0x00006022001b9ee0 rbp=0x00007ffff1a9a390 rsp=0x00007ffff1a9a350
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x00007ffff4e6064b r11=0x0000000000000246
r12=0x0000000000000008 r13=0x000060260004d820 r14=0x0000602600018380 r15=0x00007ffff1ea7770
rip=0x000055555562a71a efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 17) - Hash: c408db942c61c325240d0b10e7f1d97d.c2d5e615d3d86fbc2e9fed7ba297e501
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/4a234193986680aca47c6fb62a2929ccc47e85f8f8432c764f53e387f6c8c83a.rb
SHA1: 8e0c3f2df082a4719fe083ece919edb9efb0c64c
Classification: EXPLOITABLE
Hash: c408db942c61c325240d0b10e7f1d97d.c2d5e615d3d86fbc2e9fed7ba297e501
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/4a234193986680aca47c6fb62a2929ccc47e85f8f8432c764f53e387f6c8c83a.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield                  @ 0x00005555558afb92: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_collect            @ 0x00005555558e04bb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_0              @ 0x0000555555885093: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589426c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff8001e0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7fff50 rsp=0x00007fffff7fec60
 r8=0x00007ffff3e2f2e9  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e2f318
r12=0x000060920022b490 r13=0x00007fffffffeb20 r14=0x000060200001cdc8 r15=0x00007ffff3ee9870
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: df6c7c51d3333cd3033e955609f5fd57.31ff6faa809d701b95b22b210ab5958b
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/730c192454413c696448e541c5e5a8b1a13e7321cd2be87edc58c726804193e4.rb
SHA1: 6f9b146a525c44e4de9b1805ab16b4f04ea30d4b
Classification: EXPLOITABLE
Hash: df6c7c51d3333cd3033e955609f5fd57.31ff6faa809d701b95b22b210ab5958b
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/730c192454413c696448e541c5e5a8b1a13e7321cd2be87edc58c726804193e4.rb
Faulting Frame:
   vm_exec_core @ 0x00005555558940cd: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x00005555558940b3: lea rdx,[rbp-0x710]
   0x00005555558940ba: mov rax,QWORD PTR [rbp-0x12b8]
   0x00005555558940c1: mov r9d,0x0
   0x00005555558940c7: mov r8,rdi
   0x00005555558940ca: mov rdi,rax
=> 0x00005555558940cd: call 0x5555558838fd <vm_caller_setup_arg_block>
   0x00005555558940d2: mov rax,r15
   0x00005555558940d5: lea rdx,[rax+0x8]
   0x00005555558940d9: mov rcx,rdx
   0x00005555558940dc: shr rcx,0x3
Stack Head (1000 entries):
   vm_exec_core              @ 0x00005555558940cd: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   int_dotimes               @ 0x0000555555698342: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_0              @ 0x0000555555885093: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_method_each_type  @ 0x000055555588a104: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_method            @ 0x000055555588b171: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_general           @ 0x000055555588b578: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589426c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000604200036980 rbx=0x000010007da7fb5e rcx=0x0000600600063f10 rdx=0x00007fffed43dbd0
rsi=0x00007fffecf2efc0 rdi=0x0000604200036980 rbp=0x00007fffed43e2e0 rsp=0x00007fffed43cff0
 r8=0x00006092002a5420  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007fffece348b0
r12=0x0000000000000001 r13=0x000060260004fbe0 r14=0x000060200001cd98 r15=0x00007fffecf2efc0
rip=0x00005555558940cd efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 3) - Hash: 6ae9614403ba0f17eb440a87d54afba9.e41a3fd5289fefc6a00093028f6f1101
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/58261e11f11b1973a4e673c2d047d179e0763d052ff1c19def6191fcf4b273de.rb
SHA1: 01dda53bb40ddceb6cfaf89ff60af4a6e9356577
Classification: EXPLOITABLE
Hash: 6ae9614403ba0f17eb440a87d54afba9.e41a3fd5289fefc6a00093028f6f1101
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/58261e11f11b1973a4e673c2d047d179e0763d052ff1c19def6191fcf4b273de.rb
Faulting Frame:
   iseq_compile_each @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555934070: mov rbp,rsp
   0x0000555555934073: push r13
   0x0000555555934075: push r12
   0x0000555555934077: push rbx
   0x0000555555934078: sub rsp,0x7f8
=> 0x000055555593407f: mov QWORD PTR [rbp-0x7e8],rdi
   0x0000555555934086: mov QWORD PTR [rbp-0x7f0],rsi
   0x000055555593408d: mov QWORD PTR [rbp-0x7f8],rdx
   0x0000555555934094: mov DWORD PTR [rbp-0x7fc],ecx
   0x000055555593409a: lea rax,[rbp-0x2e0]
Stack Head (1000 entries):
   iseq_compile_each         @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00006092002f8468 rbx=0x000010007fef7e9a rcx=0x0000000000000000 rdx=0x0000609200118f30
rsi=0x00007fffff7ff530 rdi=0x00006092002f8468 rbp=0x00007fffff7ff440 rsp=0x00007fffff7fec30
 r8=0x00007fffff7ffcb0  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: c408db942c61c325240d0b10e7f1d97d.23b7df004942fe21e03591523808def7
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/3d596696cedc6699b4b0af1b649edcd8732c9affe1c6984288499ee95a357627.rb
SHA1: 85c20eb4f45922960e4fa98f14bcdffc4dddd4fa
Classification: EXPLOITABLE
Hash: c408db942c61c325240d0b10e7f1d97d.23b7df004942fe21e03591523808def7
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/3d596696cedc6699b4b0af1b649edcd8732c9affe1c6984288499ee95a357627.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield                  @ 0x00005555558afb92: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_each               @ 0x00005555558dc7b4: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_0              @ 0x0000555555885093: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589426c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff7ff800 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff570 rsp=0x00007fffff7fe280
 r8=0x00007ffff3e55689  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e556b8
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x0000602a00015ce0 r15=0x00007ffff3ec5240
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: e72798fb212ee1d374758dc217a7d25d.0f54254048c1e5c96b555bc6886ab1bc
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/e3acdff4fc340b5337854a0011421bf8c75cc139066330732a3a0d9afd148235.rb
SHA1: 677c027d1ab1d1cbe2b61ac426dfcd4cf9d59b9f
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.0f54254048c1e5c96b555bc6886ab1bc
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/e3acdff4fc340b5337854a0011421bf8c75cc139066330732a3a0d9afd148235.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_call_init          @ 0x00005555555dea17: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dac9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff7ff7a0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff510 rsp=0x00007fffff7fe220
 r8=0x0000000000000000  r9=0x00006092003d9c88 r10=0x0000000000000000 r11=0x00007ffff3e2e4c8
r12=0x00006092003d9cd8 r13=0x00007fffffffeb20 r14=0x0000602600015b98 r15=0x00007ffff3eeb2b0
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 7467b1a380bf243b820e0876f0f7e925.66b850e27e413b64f92cf1c6f5cda8da
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/3c2f3676c5762707940114c60f7f5df8ad5ebf829e7d6bbdf9dafc828d3aa0fa.rb
SHA1: b85420309b9f5cdcceb903206bb46b98a9d513c0
Classification: EXPLOITABLE
Hash: 7467b1a380bf243b820e0876f0f7e925.66b850e27e413b64f92cf1c6f5cda8da
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/3c2f3676c5762707940114c60f7f5df8ad5ebf829e7d6bbdf9dafc828d3aa0fa.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_opt_call          @ 0x0000555555888f16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_opt_call          @ 0x0000555555888f16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff7ff7c0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff530 rsp=0x00007fffff7fe240
 r8=0x00006010001379f1  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e2e400
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x0000603800006468 r15=0x00007ffff3effa70
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: beb32a52d2f421a6868c27645fbf658f.1afce52acab1ba272568084913c079e2
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/a67321123252540c25198879199a9531627ac32f9d2839c319e4af6e2a7e5cb1.rb
SHA1: 277cf83b9dbf6b52a23ae9adae826b57e94bacb2
Classification: EXPLOITABLE
Hash: beb32a52d2f421a6868c27645fbf658f.1afce52acab1ba272568084913c079e2
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/a67321123252540c25198879199a9531627ac32f9d2839c319e4af6e2a7e5cb1.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_allocate_instanc @ 0x000055555569da87: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_alloc              @ 0x000055555569da05: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dab0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_method_each_type  @ 0x000055555588a104: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_method            @ 0x000055555588b171: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_general           @ 0x000055555588b578: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff0a8 rdx=0x0000000000000008
rsi=0x00007fffff7ff0a8 rdi=0x0000609200184198 rbp=0x00007fffff7ff070 rsp=0x00007fffff7fe830
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000000 r11=0x00007ffff3e2e830
r12=0x00007fffff7ff0a8 r13=0x0000609200184198 r14=0x0000602600015618 r15=0x00007ffff3eea9b0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 3) - Hash: 913c114bbb9fee9cb8d9d27dba4a55fa.49976739cd7282c9a1f35c22aeedb33f
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/8a4566cff914fa8dfecf076292d457ec59a0e7338e010a2b3dbb8f21ec4bc8fe.rb
SHA1: fa47ad931cceeb0711bb036e76c99a039d885c22
Classification: EXPLOITABLE
Hash: 913c114bbb9fee9cb8d9d27dba4a55fa.49976739cd7282c9a1f35c22aeedb33f
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/8a4566cff914fa8dfecf076292d457ec59a0e7338e010a2b3dbb8f21ec4bc8fe.rb
Faulting Frame:
   iseq_compile_each @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555934070: mov rbp,rsp
   0x0000555555934073: push r13
   0x0000555555934075: push r12
   0x0000555555934077: push rbx
   0x0000555555934078: sub rsp,0x7f8
=> 0x000055555593407f: mov QWORD PTR [rbp-0x7e8],rdi
   0x0000555555934086: mov QWORD PTR [rbp-0x7f0],rsi
   0x000055555593408d: mov QWORD PTR [rbp-0x7f8],rdx
   0x0000555555934094: mov DWORD PTR [rbp-0x7fc],ecx
   0x000055555593409a: lea rax,[rbp-0x2e0]
Stack Head (1000 entries):
   iseq_compile_each         @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array             @ 0x000055555592e2db: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555941cef: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array             @ 0x000055555592e2db: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555941cef: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array             @ 0x000055555592e2db: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555941cef: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array             @ 0x000055555592e2db: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555941cef: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array             @ 0x000055555592e2db: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555941cef: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060920047b970 rbx=0x000010007fef7e80 rcx=0x0000000000000000 rdx=0x0000609200071168
rsi=0x00007fffff7ff460 rdi=0x000060920047b970 rbp=0x00007fffff7ff370 rsp=0x00007fffff7feb60
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000000000000001 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 6884e98b748ab7ed239141bc4215272d.5ea13a0ef730c37fdc7960cff6db6b22
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/49e4c3e3427620c02e646ed385b74a471a05bbb8dabfd180946be50aca306b27.rb
SHA1: f58d7779a51befbfe02930fe7fb85b91d858a8fc
Classification: EXPLOITABLE
Hash: 6884e98b748ab7ed239141bc4215272d.5ea13a0ef730c37fdc7960cff6db6b22
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/49e4c3e3427620c02e646ed385b74a471a05bbb8dabfd180946be50aca306b27.rb
Faulting Frame:
   rb_intern3 @ 0x000055555580f30c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555580f2f3: mov rbp,rsp
   0x000055555580f2f6: push rbx
   0x000055555580f2f7: sub rsp,0xb8
   0x000055555580f2fe: mov QWORD PTR [rbp-0xa8],rdi
   0x000055555580f305: mov QWORD PTR [rbp-0xb0],rsi
=> 0x000055555580f30c: mov QWORD PTR [rbp-0xb8],rdx
   0x000055555580f313: lea rax,[rbp-0x90]
   0x000055555580f31a: mov QWORD PTR [rax],0x41b58ab3
   0x000055555580f321: lea rdx,[rip+0x2165a0] # 0x555555a258c8
   0x000055555580f328: mov QWORD PTR [rax+0x8],rdx
Stack Head (1000 entries):
   rb_intern3                @ 0x000055555580f30c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_intern2                @ 0x000055555580f5f1: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_intern                 @ 0x000055555580f68a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   convert_type              @ 0x000055555569f759: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_convert_type           @ 0x000055555569f93d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   numeric_to_float          @ 0x00005555556a13e4: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_num_to_dbl             @ 0x00005555556a16d5: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   math_exp                  @ 0x00005555556781d0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_1              @ 0x00005555558850e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall_default  @ 0x00005555558ad9be: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00005555559de020 rbx=0x00005555559de020 rcx=0x0000000000000004 rdx=0x0000601a0000cdd0
rsi=0x0000000000000004 rdi=0x00005555559de020 rbp=0x00007fffff7ff0b0 rsp=0x00007fffff7feff0
 r8=0x0000555555885000  r9=0x0000609200064a58 r10=0x0000000000000000 r11=0x0000000000000000
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x0000602e00017a30 r15=0x00007ffff3ef1f10
rip=0x000055555580f30c efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: e72798fb212ee1d374758dc217a7d25d.a54e17d8ef038ea472af878fecc9826b
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/dd3b6a46e2901a96791183a19ca4b3cbabed62928d5faf7d1ab0a9dfa5743306.rb
SHA1: ef82ebb83552ab8c031ada3ee1a43b4e7c19f643
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.a54e17d8ef038ea472af878fecc9826b
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/dd3b6a46e2901a96791183a19ca4b3cbabed62928d5faf7d1ab0a9dfa5743306.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcall                @ 0x00005555558af262: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ripper_dispatch1          @ 0x00007ffff2efc71c: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/ripper.so
   ripper_scan_event_val     @ 0x00007ffff2ee1808: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/ripper.so
   ripper_dispatch_scan_even @ 0x00007ffff2ee19f2: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/ripper.so
   yylex                     @ 0x00007ffff2ef9518: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/ripper.so
   ripper_yyparse            @ 0x00007ffff2ec9450: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/ripper.so
   ripper_parse0             @ 0x00007ffff2efd75b: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/ripper.so
   rb_ensure                 @ 0x00005555555dca77: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ripper_parse              @ 0x00007ffff2efd956: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/ripper.so
   call_cfunc_0              @ 0x0000555555885093: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff7ffe30 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ffba0 rsp=0x00007fffff7fe8b0
 r8=0x0000000000000000  r9=0x0000609200232178 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x000060300001c160 r15=0x00007ffff3ed8e00
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: cd8703ade1e444a19c95a698c799bb45.c439b7298d4857ad6d9aa86e15ad0644
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/70902ba0027c7b75dafad4cc3e212d3cc0aec5a8abbca0c94b6362399a129636.rb
SHA1: 69973b9d6faa5a025e3c89a6065bde7423f8c98a
Classification: EXPLOITABLE
Hash: cd8703ade1e444a19c95a698c799bb45.c439b7298d4857ad6d9aa86e15ad0644
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/70902ba0027c7b75dafad4cc3e212d3cc0aec5a8abbca0c94b6362399a129636.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_alloc                 @ 0x00005555557cf2d8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_duplicate             @ 0x00005555557d5770: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_str_resurrect          @ 0x00005555557d5b70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555890312: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_opt_call          @ 0x0000555555888f16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589426c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff7a8 rdx=0x0000000000000008
rsi=0x00007fffff7ff7a8 rdi=0x0000609200078f88 rbp=0x00007fffff7ff770 rsp=0x00007fffff7fef30
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000022220021 r11=0x00007ffff3e24bb0
r12=0x00007fffff7ff7a8 r13=0x0000609200078f88 r14=0x0000602200057eb8 r15=0x00007ffff3eff8c0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: f0adedb53895570b6ae0411c96d7fe5f.54467955103d466e3ce04ae4cf3d5884
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/eee3890f02a4eeedf8edf215cb638bd5277fb6fbd3212270a96d5551f5d734b9.rb
SHA1: 6e3711d425ac98a14e40a54867caead0e70d29e7
Classification: UNKNOWN
Hash: f0adedb53895570b6ae0411c96d7fe5f.54467955103d466e3ce04ae4cf3d5884
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/eee3890f02a4eeedf8edf215cb638bd5277fb6fbd3212270a96d5551f5d734b9.rb
Faulting Frame:
   onig_node_free @ 0x000055555577c121: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555577c10a: jmp 0x55555577c421 <onig_node_free+810>
   0x000055555577c10f: mov rax,QWORD PTR [rbp-0x18]
   0x000055555577c113: mov rdx,rax
   0x000055555577c116: shr rdx,0x3
   0x000055555577c11a: add rdx,0x7fff8000
=> 0x000055555577c121: movzx edx,BYTE PTR [rdx]
   0x000055555577c124: test dl,dl
   0x000055555577c126: setne sil
   0x000055555577c12a: mov rcx,rax
   0x000055555577c12d: and ecx,0x7
Stack Head (1000 entries):
   onig_node_free            @ 0x000055555577c121: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a30bf: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a404b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_enclose             @ 0x000055555579c579: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a1d8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a4143: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_enclose             @ 0x000055555579c579: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a1d8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a4143: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_enclose             @ 0x000055555579c579: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a1d8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a4143: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000003f00000000 rbx=0x000010007ff63748 rcx=0x0000000000000000 rdx=0x000000085fff8000
rsi=0x0000000000000000 rdi=0x0000003f00000000 rbp=0x00007fffffb5b9a0 rsp=0x00007fffffb5b980
 r8=0x00000000fffffff0  r9=0x00007fffffffba90 r10=0x00007ffff72ce700 r11=0x0000600c0030d7c0
r12=0x0000609200125258 r13=0x0000609200192420 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555577c121 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation on source operand
   Short description: SourceAv (19/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation.
---END SUMMARY---
(1 of 5) - Hash: 17946158b881e4b871d966dbd24a2d01.99e095c480df238f0365b9f01c241b95
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/f66101f7c0af154d2cc2de2be079f540cf23a420c632318a48051d7bebb4d02e.rb
SHA1: 11953c40a1d3684c12577594449a9d02ba77fb8e
Classification: EXPLOITABLE
Hash: 17946158b881e4b871d966dbd24a2d01.99e095c480df238f0365b9f01c241b95
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/f66101f7c0af154d2cc2de2be079f540cf23a420c632318a48051d7bebb4d02e.rb
Faulting Frame:
   iseq_compile_each @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555934070: mov rbp,rsp
   0x0000555555934073: push r13
   0x0000555555934075: push r12
   0x0000555555934077: push rbx
   0x0000555555934078: sub rsp,0x7f8
=> 0x000055555593407f: mov QWORD PTR [rbp-0x7e8],rdi
   0x0000555555934086: mov QWORD PTR [rbp-0x7f0],rsi
   0x000055555593408d: mov QWORD PTR [rbp-0x7f8],rdx
   0x0000555555934094: mov DWORD PTR [rbp-0x7fc],ecx
   0x000055555593409a: lea rax,[rbp-0x2e0]
Stack Head (1000 entries):
   iseq_compile_each         @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060920055db18 rbx=0x000010007fef7f52 rcx=0x0000000000000000 rdx=0x0000609200389760
rsi=0x00007fffff7ffc70 rdi=0x000060920055db18 rbp=0x00007fffff7ff550 rsp=0x00007fffff7fed40
 r8=0x00007fffffff9c60  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: 8a0721995dd6ea9733d82a522f6dee71.7c96a405c004e82d9891ebd822f650b7
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/45b1bcaab9cbc81c436c7dcc91308ac4ce2cd337bc4a84a06af5101429b30cd6.rb
SHA1: 48667edb70027bb745b3a85b51568825a3f82e4d
Classification: EXPLOITABLE
Hash: 8a0721995dd6ea9733d82a522f6dee71.7c96a405c004e82d9891ebd822f650b7
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/45b1bcaab9cbc81c436c7dcc91308ac4ce2cd337bc4a84a06af5101429b30cd6.rb
Faulting Frame:
   compile_array_ @ 0x000055555592d4c0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555592d4b4: push rbp
   0x000055555592d4b5: mov rbp,rsp
   0x000055555592d4b8: push rbx
   0x000055555592d4b9: sub rsp,0x128
=> 0x000055555592d4c0: mov QWORD PTR [rbp-0x108],rdi
   0x000055555592d4c7: mov QWORD PTR [rbp-0x110],rsi
   0x000055555592d4ce: mov QWORD PTR [rbp-0x118],rdx
   0x000055555592d4d5: mov DWORD PTR [rbp-0x11c],ecx
   0x000055555592d4db: mov QWORD PTR [rbp-0x128],r8
Stack Head (1000 entries):
   compile_array_            @ 0x000055555592d4c0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00006092003f7288 rbx=0x000010007fef7ec8 rcx=0x0000000000000000 rdx=0x0000609200255b78
rsi=0x00007fffff7ffa10 rdi=0x00006092003f7288 rbp=0x00007fffff7ff100 rsp=0x00007fffff7fefd0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x000000000000000f r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555592d4c0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 4b2a8eb2dd894291f8460f21e2d0e475.040a742d0a410aa1877263843871cce4
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/8f9774145af528daf9a49c88bc5ef9ce99ae7751c3f7b2459edfc1218ed48cbb.rb
SHA1: 1b68b983e3caf7571e4a6cf3ec7ebc7b2ea56b55
Classification: EXPLOITABLE
Hash: 4b2a8eb2dd894291f8460f21e2d0e475.040a742d0a410aa1877263843871cce4
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/8f9774145af528daf9a49c88bc5ef9ce99ae7751c3f7b2459edfc1218ed48cbb.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   struct_alloc              @ 0x000055555580ac0f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_struct_alloc_noinit    @ 0x0000555555809def: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_alloc              @ 0x000055555569da05: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dab0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff2f8 rdx=0x0000000000000008
rsi=0x00007fffff7ff2f8 rdi=0x00006092000f5740 rbp=0x00007fffff7ff2c0 rsp=0x00007fffff7fea80
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000001 r11=0x000000000000001e
r12=0x00007fffff7ff2f8 r13=0x00006092000f5740 r14=0x0000602e00018300 r15=0x00007ffff3ef1880
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: e2aac241b0e84a0441ba37562437481a.e23bee3b2ed27f28e0c6d700727f3a45
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/700a33813780b4ebd355198f8e43c5b486bd1eb803b0b706cea2e8c6e7873ea9.rb
SHA1: 9df1a08ed165277a782d1ec511fb05ad9c3ee2b4
Classification: UNKNOWN
Hash: e2aac241b0e84a0441ba37562437481a.e23bee3b2ed27f28e0c6d700727f3a45
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/700a33813780b4ebd355198f8e43c5b486bd1eb803b0b706cea2e8c6e7873ea9.rb
Faulting Frame:
   onig_node_free @ 0x000055555577c121: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555577c10a: jmp 0x55555577c421 <onig_node_free+810>
   0x000055555577c10f: mov rax,QWORD PTR [rbp-0x18]
   0x000055555577c113: mov rdx,rax
   0x000055555577c116: shr rdx,0x3
   0x000055555577c11a: add rdx,0x7fff8000
=> 0x000055555577c121: movzx edx,BYTE PTR [rdx]
   0x000055555577c124: test dl,dl
   0x000055555577c126: setne sil
   0x000055555577c12a: mov rcx,rax
   0x000055555577c12d: and ecx,0x7
Stack Head (1000 entries):
   onig_node_free            @ 0x000055555577c121: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a30bf: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a404b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_enclose             @ 0x0000555555799d25: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a1d8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a4143: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_enclose             @ 0x0000555555799d25: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a1d8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a4143: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_enclose             @ 0x0000555555799d25: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a1d8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a4143: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000003e00000000 rbx=0x000010007ff63748 rcx=0x0000000000000000 rdx=0x000000083fff8000
rsi=0x0000000000000000 rdi=0x0000003e00000000 rbp=0x00007fffffb5b9a0 rsp=0x00007fffffb5b980
 r8=0x00000000fffffff0  r9=0x00007fffffffba90 r10=0x00007ffff72ce700 r11=0x0000600c00143300
r12=0x00007ffff3127800 r13=0x0000609200176bd0 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555577c121 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation on source operand
   Short description: SourceAv (19/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation.
---END SUMMARY---
(1 of 1) - Hash: aff4775a6f379a38c52143f65ba688ce.0412eca8998026418d0024769668de10
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/ba1dd7d8bbafb5827792b315a1a99d975085c09a881d3f9c2e5fa91e3283462a.rb
SHA1: 260c7ea3b37fafb21563362a8b5a6c468e89f65d
Classification: EXPLOITABLE
Hash: aff4775a6f379a38c52143f65ba688ce.0412eca8998026418d0024769668de10
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/ba1dd7d8bbafb5827792b315a1a99d975085c09a881d3f9c2e5fa91e3283462a.rb
Faulting Frame:
   iseq_compile_each @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555934070: mov rbp,rsp
   0x0000555555934073: push r13
   0x0000555555934075: push r12
   0x0000555555934077: push rbx
   0x0000555555934078: sub rsp,0x7f8
=> 0x000055555593407f: mov QWORD PTR [rbp-0x7e8],rdi
   0x0000555555934086: mov QWORD PTR [rbp-0x7f0],rsi
   0x000055555593408d: mov QWORD PTR [rbp-0x7f8],rdx
   0x0000555555934094: mov DWORD PTR [rbp-0x7fc],ecx
   0x000055555593409a: lea rax,[rbp-0x2e0]
Stack Head (1000 entries):
   iseq_compile_each         @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555946704: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555946704: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555946704: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555946704: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060920082cc18 rbx=0x000010007fef7eec rcx=0x0000000000000000 rdx=0x0000609200645d78
rsi=0x00007fffff7ff940 rdi=0x000060920082cc18 rbp=0x00007fffff7ff220 rsp=0x00007fffff7fea10
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: 0b21eae224e5177e9d126b5b32ab1a74.704fa3e9018ebb4b08bfa63092417e2d
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/b1279a8d7738ed3e3bede936903eca8c0fe586fe527c8e4b71450f1f736cc39e.rb
SHA1: 620c9e77bf1404abc4d493d82d6bdf52a9cd0ec9
Classification: EXPLOITABLE
Hash: 0b21eae224e5177e9d126b5b32ab1a74.704fa3e9018ebb4b08bfa63092417e2d
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/b1279a8d7738ed3e3bede936903eca8c0fe586fe527c8e4b71450f1f736cc39e.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   str_replace_shared_withou @ 0x00005555557d1a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_replace_shared        @ 0x00005555557d1fa5: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_replace               @ 0x00005555557d5586: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_str_replace            @ 0x00005555557edc7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_1              @ 0x00005555558850e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_cfunc_with_frame @ 0x00005555558aba86: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_cfunc            @ 0x00005555558abc3d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac036: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcall                @ 0x00005555558af262: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_init_dup_clone     @ 0x000055555569b936: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_1              @ 0x00005555558850e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_cfunc_with_frame @ 0x00005555558aba86: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00006092002e7768 rdx=0x0000000000000008
rsi=0x00006092002e7768 rdi=0x0000609200352cc0 rbp=0x00007fffff7ff600 rsp=0x00007fffff7fedc0
 r8=0x0000000000000000  r9=0x0000000000000007 r10=0x0000000000000000 r11=0x00007ffff3e51d50
r12=0x00006092002e7768 r13=0x0000609200352cc0 r14=0x000060440001f000 r15=0x00007ffff3ed28f0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: cd8703ade1e444a19c95a698c799bb45.c76d9c73074b6c1d9cc05ec02345b4a6
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/867276f401ca9647e9615a809130a67433f6f288f83795470f6568b5af4c43d0.rb
SHA1: 58e282046ffaccfacde43accef7eaa1eb04a7aef
Classification: EXPLOITABLE
Hash: cd8703ade1e444a19c95a698c799bb45.c76d9c73074b6c1d9cc05ec02345b4a6
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/867276f401ca9647e9615a809130a67433f6f288f83795470f6568b5af4c43d0.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_alloc                 @ 0x00005555557cf2d8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_duplicate             @ 0x00005555557d5770: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_str_resurrect          @ 0x00005555557d5b70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555890312: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_proc_call              @ 0x00005555556f14d3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   generator_each            @ 0x000055555598bbb0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff0a8 rdx=0x0000000000000008
rsi=0x00007fffff7ff0a8 rdi=0x000060920032ee08 rbp=0x00007fffff7ff070 rsp=0x00007fffff7fe830
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000022220021 r11=0x00007ffff3e27738
r12=0x00007fffff7ff0a8 r13=0x000060920032ee08 r14=0x0000602a000184e8 r15=0x00007ffff3ee3ed0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 4) - Hash: e72798fb212ee1d374758dc217a7d25d.d328a262cfcba6a31299a7499a1904e7
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/ff00f44e487f0ef828e5fafdfb6de2f7b469e7cf89158dbdd203a62177024305.rb
SHA1: 04eb3f617525207cb6a1794eca78975ed3362331
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.d328a262cfcba6a31299a7499a1904e7
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/ff00f44e487f0ef828e5fafdfb6de2f7b469e7cf89158dbdd203a62177024305.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_call_init          @ 0x00005555555dea17: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dac9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff7ffe90 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ffc00 rsp=0x00007fffff7fe910
 r8=0x0000000000000000  r9=0x00006092003fcc10 r10=0x0000000000000000 r11=0x00007ffff3e2f2b0
r12=0x00006092003fcc60 r13=0x00007fffffffeb20 r14=0x0000602600015b98 r15=0x00007ffff3ee9870
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: e72798fb212ee1d374758dc217a7d25d.6aa1561ef7b75dece09358356976a94b
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/6e2036ea31f1896001523cd3fc1c31591721f16acd9bb93360612565a136ae9f.rb
SHA1: b89afb5823053579e87c5976093d54ec7e2d192c
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.6aa1561ef7b75dece09358356976a94b
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/6e2036ea31f1896001523cd3fc1c31591721f16acd9bb93360612565a136ae9f.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcall                @ 0x00005555558af262: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   numeric_numerator         @ 0x0000555555720419: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_0              @ 0x0000555555885093: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_cfunc_with_frame @ 0x00005555558aba86: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_cfunc            @ 0x00005555558abc3d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac036: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcall                @ 0x00005555558af262: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff800220 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7fff90 rsp=0x00007fffff7feca0
 r8=0x0000000000000000  r9=0x0000609200303ae8 r10=0x0000000000000000 r11=0x0000000000000000
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x0000604600018fc0 r15=0x00007ffff3f0e1d0
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 4a883d9697309a2a9b8bfbb2dd2b751e.bfadab31b493ca79a51085ea8c23b90d
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/b01c3784b4d5a389347c064d41ce9d3947296f0100f55c9d050c561f82352a1e.rb
SHA1: 291411deeb6b5d000607da82e8f649817e97e14e
Classification: EXPLOITABLE
Hash: 4a883d9697309a2a9b8bfbb2dd2b751e.bfadab31b493ca79a51085ea8c23b90d
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/b01c3784b4d5a389347c064d41ce9d3947296f0100f55c9d050c561f82352a1e.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   nurat_s_new_internal      @ 0x000055555571b846: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   nurat_s_canonicalize_inte @ 0x000055555571bc8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   f_rational_new_no_reduce2 @ 0x000055555571be06: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_rational_plus          @ 0x000055555571c49f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_1              @ 0x00005555558850e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589828f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall_default  @ 0x00005555558ad9be: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff068 rdx=0x0000000000000008
rsi=0x00007fffff7ff068 rdi=0x0000609200119f28 rbp=0x00007fffff7ff030 rsp=0x00007fffff7fe7f0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000001 r11=0x0000000000000000
r12=0x00007fffff7ff068 r13=0x0000609200119f28 r14=0x000060360035eb08 r15=0x00007ffff3ef1f10
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 40b33fddf9b0f343173970a76add8306.e39181a42edb3a240b6998fb9ec20b23
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/2f45f5358d8c6d194fac777f60ea57e80b9874437d2185870db563309fb6e5b1.rb
SHA1: 29df9230eca0ba8ecc1715dccb1364dc94d98fb7
Classification: EXPLOITABLE
Hash: 40b33fddf9b0f343173970a76add8306.e39181a42edb3a240b6998fb9ec20b23
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/2f45f5358d8c6d194fac777f60ea57e80b9874437d2185870db563309fb6e5b1.rb
Faulting Frame:
   rsock_getaddrinfo @ 0x00007ffff2ebafef: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/socket.so
Disassembly:
   0x00007ffff2ebafe3: push rbp
   0x00007ffff2ebafe4: mov rbp,rsp
   0x00007ffff2ebafe7: push rbx
   0x00007ffff2ebafe8: sub rsp,0x568
=> 0x00007ffff2ebafef: mov QWORD PTR [rbp-0x558],rdi
   0x00007ffff2ebaff6: mov QWORD PTR [rbp-0x560],rsi
   0x00007ffff2ebaffd: mov QWORD PTR [rbp-0x568],rdx
   0x00007ffff2ebb004: mov DWORD PTR [rbp-0x56c],ecx
   0x00007ffff2ebb00a: lea rax,[rbp-0x530]
Stack Head (1000 entries):
   rsock_getaddrinfo         @ 0x00007ffff2ebafef: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/socket.so
   rsock_addrinfo            @ 0x00007ffff2ebb6a0: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/socket.so
   udp_connect               @ 0x00007ffff2ea7101: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/socket.so
   call_cfunc_2              @ 0x0000555555885167: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_bmethod            @ 0x00005555558b778c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ae8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_bmethod         @ 0x00005555558b83df: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_bmethod_body      @ 0x0000555555887cb3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac29f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall_default  @ 0x00005555558ad9be: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000609200325710 rbx=0x000010007fef7e4a rcx=0x0000000000000001 rdx=0x00007fffff7ff270
rsi=0x0000000000000003 rdi=0x0000609200325710 rbp=0x00007fffff7ff220 rsp=0x00007fffff7fecb0
 r8=0x000010007fef7e54  r9=0x0000000000000000 r10=0x0000000099990061 r11=0x0000000000000246
r12=0x0000600800162cf1 r13=0x00007ffff3e0ed10 r14=0x000060220005abe0 r15=0x00007ffff3ef9860
rip=0x00007ffff2ebafef efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.e070ddbadc1d82571c37412fd9ee22d4
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/9b554b09157991c096bdb7affbf166761262edc933d36f5c8a1b5434ce4404e1.rb
SHA1: fb0efbb1e4d378a0d44608edf5c68f58b02f81d8
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.e070ddbadc1d82571c37412fd9ee22d4
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/9b554b09157991c096bdb7affbf166761262edc933d36f5c8a1b5434ce4404e1.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_alloc                 @ 0x00005555558d4fee: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_new                   @ 0x00005555558d511c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_capa           @ 0x00005555558d52ba: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_from_values    @ 0x00005555558d56f6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_resurrect          @ 0x00005555558dcb7c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555890eda: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff808 rdx=0x0000000000000008
rsi=0x00007fffff7ff808 rdi=0x000060920038a9d8 rbp=0x00007fffff7ff7d0 rsp=0x00007fffff7fef90
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000022220021 r11=0x00007ffff3e271b0
r12=0x00007fffff7ff808 r13=0x000060920038a9d8 r14=0x000060300001cb98 r15=0x00007ffff3eff950
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.d53de2ba6b9f9e6e39b00269f3552edb
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/31f299cedefc6df1ca4ea882278415aed6e70c49f3fd68728948cb4bbabc32d8.rb
SHA1: 2a3486a8c8b73a84088b772462764e8341ecba0e
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.d53de2ba6b9f9e6e39b00269f3552edb
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/31f299cedefc6df1ca4ea882278415aed6e70c49f3fd68728948cb4bbabc32d8.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_alloc                 @ 0x00005555558d4fee: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_new                   @ 0x00005555558d511c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_capa           @ 0x00005555558d52ba: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_from_values    @ 0x00005555558d56f6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   args_copy                 @ 0x000055555587f5a7: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   args_setup_rest_parameter @ 0x0000555555880a8b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_parameters_complex  @ 0x00005555558829b2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_callee_setup_arg       @ 0x000055555588439b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_iseq_setup        @ 0x00005555558845e1: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589426c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff6a8 rdx=0x0000000000000008
rsi=0x00007fffff7ff6a8 rdi=0x0000609200811970 rbp=0x00007fffff7ff670 rsp=0x00007fffff7fee30
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x00007ffff3e4e2e8 r11=0x00007ffff3e4e211
r12=0x00007fffff7ff6a8 r13=0x0000609200811970 r14=0x0000606a00009d90 r15=0x00007ffff3ec30e0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 43a9f01eaad4a3ef062b7797cfd66b0a.93194330db95797fbf82863c8c39105a
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/86f26a642ae2d8c2e8e9d2029767206378e1c5577832e4f898df1b3f281b0173.rb
SHA1: 094f0e6b7b1c634f2d07e144c56d813123bb9c3f
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 43a9f01eaad4a3ef062b7797cfd66b0a.93194330db95797fbf82863c8c39105a
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/86f26a642ae2d8c2e8e9d2029767206378e1c5577832e4f898df1b3f281b0173.rb
Faulting Frame:
   onig_node_free @ 0x000055555577c14a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555577c13a: test dl,dl
   0x000055555577c13c: je 0x55555577c146 <onig_node_free+79>
   0x000055555577c13e: mov rdi,rax
   0x000055555577c141: call 0x5555555d4760 <__asan_report_load4@plt>
   0x000055555577c146: mov rax,QWORD PTR [rbp-0x18]
=> 0x000055555577c14a: mov eax,DWORD PTR [rax]
   0x000055555577c14c: cmp eax,0x9
   0x000055555577c14f: ja 0x55555577c415 <onig_node_free+798>
   0x000055555577c155: mov eax,eax
   0x000055555577c157: lea rdx,[rax*4+0x0]
Stack Head (1000 entries):
   onig_node_free            @ 0x000055555577c14a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a30bf: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a404b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_enclose             @ 0x000055555579c579: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a1d8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a4143: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_enclose             @ 0x0000555555799d25: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a1d8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a4143: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_enclose             @ 0x000055555579c579: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_exp                 @ 0x00005555557a1d8c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_branch              @ 0x00005555557a4143: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   parse_subexp              @ 0x00005555557a440c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000000000000058 rbx=0x000010007ff63748 rcx=0x0000000000000003 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x0000000000000058 rbp=0x00007fffffb5b9a0 rsp=0x00007fffffb5b980
 r8=0x00000000fffffff0  r9=0x00007fffffffba90 r10=0x00007ffff72ce700 r11=0x00007ffff42ac550
r12=0x00007ffff312974e r13=0x0000609200192420 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555577c14a efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: 262805f51ec7e8d8d3a9835d03f56656.d205b479fb090211ec613ad64a9e0510
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/416954aa6b852b16964652572178b1544a87dea78c2023ddeb6205b21192dcb1.rb
SHA1: e3c87f79f816fc7bc7433b6df41f266c5b1d435a
Classification: EXPLOITABLE
Hash: 262805f51ec7e8d8d3a9835d03f56656.d205b479fb090211ec613ad64a9e0510
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/416954aa6b852b16964652572178b1544a87dea78c2023ddeb6205b21192dcb1.rb
Faulting Frame:
   setup_parameters_complex @ 0x0000555555881686: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588167a: push rbp
   0x000055555588167b: mov rbp,rsp
   0x000055555588167e: push rbx
   0x000055555588167f: sub rsp,0x178
=> 0x0000555555881686: mov QWORD PTR [rbp-0x158],rdi
   0x000055555588168d: mov QWORD PTR [rbp-0x160],rsi
   0x0000555555881694: mov QWORD PTR [rbp-0x168],rdx
   0x000055555588169b: mov QWORD PTR [rbp-0x170],rcx
   0x00005555558816a2: mov QWORD PTR [rbp-0x178],r8
Stack Head (1000 entries):
   setup_parameters_complex  @ 0x0000555555881686: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_callee_setup_arg       @ 0x000055555588439b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_iseq_setup        @ 0x00005555558845e1: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558abfa7: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall_default  @ 0x00005555558ad9be: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall          @ 0x00005555558ad8cc: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   check_respond_to_missing  @ 0x000055555588de05: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_defined                @ 0x000055555588e087: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555892edd: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall_default  @ 0x00005555558ad9be: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall          @ 0x00005555558ad8cc: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   check_respond_to_missing  @ 0x000055555588de05: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007ffff3e1dd68 rcx=0x00007fffff7ff220 rdx=0x00007fffff7ff260
rsi=0x000060920016da58 rdi=0x000060420001ef80 rbp=0x00007fffff7ff040 rsp=0x00007fffff7feec0
 r8=0x00007ffff3e1dd68  r9=0x0000000000000000 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x0000601800025950 r15=0x00007ffff3eff260
rip=0x0000555555881686 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: dcc18e92f28d620b300220bbe521bc31.ba93b1f45584713048423c204514b846
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/935baa729afa5f51e1a4fb40b363316f809d17c9efbb49d6ae12dada5bc96bd1.rb
SHA1: 3d8971cf176e3c93957a340c822df0b220f4615c
Classification: EXPLOITABLE
Hash: dcc18e92f28d620b300220bbe521bc31.ba93b1f45584713048423c204514b846
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/935baa729afa5f51e1a4fb40b363316f809d17c9efbb49d6ae12dada5bc96bd1.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_data_typed_object_wrap @ 0x00005555555f7952: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_data_typed_object_zall @ 0x00005555555f797e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_proc_alloc             @ 0x00005555556f00f8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_proc_create_from_captu @ 0x00005555558b6262: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_make_proc_lambda    @ 0x00005555558b692b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_make_proc           @ 0x00005555558b680e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_block_handler_escape   @ 0x00005555558b57db: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_make_env_each          @ 0x00005555558b5a3c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_make_env_object        @ 0x00005555558b5df2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_make_proc_lambda    @ 0x00005555558b6888: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_make_proc           @ 0x00005555558b680e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_block_handler_escape   @ 0x00005555558b57db: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_make_env_each          @ 0x00005555558b5a3c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007ffff218a6b8 rdx=0x0000000000000008
rsi=0x00007ffff218a6b8 rdi=0x0000609200054200 rbp=0x00007ffff218a680 rsp=0x00007ffff2189e40
 r8=0x0000000000000000  r9=0x0000000000000020 r10=0x00007ffff4e60601 r11=0x000000000000001e
r12=0x00007ffff218a6b8 r13=0x0000609200054200 r14=0x0000600e00070340 r15=0x00007ffff268f200
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: e0fc5f71c06629a9a4493d14f2cf38a2.031ebcf0f0edba4c6f062a16a4ffec31
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/6d2adfa5057e23ab5fc4764b6b545e82f3c54ff0d0c69060962533fc0a26da13.rb
SHA1: 2d1893bd492b1555fee415e70d72dae0d5a47f19
Classification: EXPLOITABLE
Hash: e0fc5f71c06629a9a4493d14f2cf38a2.031ebcf0f0edba4c6f062a16a4ffec31
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/6d2adfa5057e23ab5fc4764b6b545e82f3c54ff0d0c69060962533fc0a26da13.rb
Faulting Frame:
   iseq_compile_each @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555934070: mov rbp,rsp
   0x0000555555934073: push r13
   0x0000555555934075: push r12
   0x0000555555934077: push rbx
   0x0000555555934078: sub rsp,0x7f8
=> 0x000055555593407f: mov QWORD PTR [rbp-0x7e8],rdi
   0x0000555555934086: mov QWORD PTR [rbp-0x7f0],rsi
   0x000055555593408d: mov QWORD PTR [rbp-0x7f8],rdx
   0x0000555555934094: mov DWORD PTR [rbp-0x7fc],ecx
   0x000055555593409a: lea rax,[rbp-0x2e0]
Stack Head (1000 entries):
   iseq_compile_each         @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00006092001fda18 rbx=0x000010007fef7f02 rcx=0x0000000000000000 rdx=0x00006092002b3cf0
rsi=0x00007fffff7ff9f0 rdi=0x00006092001fda18 rbp=0x00007fffff7ff2d0 rsp=0x00007fffff7feac0
 r8=0x0000000000000001  r9=0x0000000000000003 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000601a00041fb0 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.07cb187b711b254455635706791c4650
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/9c0e4efba19a81238ed98440a45edf3118bd75b923b4d933d49e4460f3cf6137.rb
SHA1: b837623c73a081aaac712f40d8f146940df8c9f0
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.07cb187b711b254455635706791c4650
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/9c0e4efba19a81238ed98440a45edf3118bd75b923b4d933d49e4460f3cf6137.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_alloc                 @ 0x00005555558d4fee: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_new                   @ 0x00005555558d511c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_capa           @ 0x00005555558d52ba: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_from_values    @ 0x00005555558d56f6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555890d2c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcall                @ 0x00005555558af262: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ripper_dispatch1          @ 0x00007ffff2efc71c: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/ripper.so
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff0c8 rdx=0x0000000000000008
rsi=0x00007fffff7ff0c8 rdi=0x00006092004627e8 rbp=0x00007fffff7ff090 rsp=0x00007fffff7fe850
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007fffff7ff0c8 r13=0x00006092004627e8 r14=0x00006020000196d0 r15=0x00007ffff3ee1770
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 3) - Hash: e72798fb212ee1d374758dc217a7d25d.559468a919c238e3f6c597896920184c
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/1110a091bc3b791f65907f4c3b9e4431865cbb35dfc8c639ca8ca4dafdd30c98.rb
SHA1: 4c4f2723900c21cb95838f7c405fc37417b2eaa2
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.559468a919c238e3f6c597896920184c
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/1110a091bc3b791f65907f4c3b9e4431865cbb35dfc8c639ca8ca4dafdd30c98.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_call_init          @ 0x00005555555dea17: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dac9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff7ff8c0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff630 rsp=0x00007fffff7fe340
 r8=0x0000000000000000  r9=0x000060920029f6b0 r10=0x0000000000000001 r11=0x000000000000001e
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x000060300001dcd0 r15=0x00007ffff3ef15b0
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.3bc5bc3245f4fa17649f9fd577a87d55
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/8d8c4bc1caf4bd50bab70f6d9749dd2a97d0fa3bcb690a614d16cce12dd1b871.rb
SHA1: ea69f678419d0ca701d5bc7a637439a356a520e8
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.3bc5bc3245f4fa17649f9fd577a87d55
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/8d8c4bc1caf4bd50bab70f6d9749dd2a97d0fa3bcb690a614d16cce12dd1b871.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_alloc                 @ 0x00005555558d4fee: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_new                   @ 0x00005555558d511c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_capa           @ 0x00005555558d52ba: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_from_values    @ 0x00005555558d56f6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_resurrect          @ 0x00005555558dcb7c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555890eda: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall_default  @ 0x00005555558ad9be: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall          @ 0x00005555558ad8cc: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   convert_type              @ 0x000055555569f777: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff6d8 rdx=0x0000000000000008
rsi=0x00007fffff7ff6d8 rdi=0x0000609200230c40 rbp=0x00007fffff7ff6a0 rsp=0x00007fffff7fee60
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007fffff7ff6d8 r13=0x0000609200230c40 r14=0x0000602600019778 r15=0x00007ffff3ef2750
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 7d0cc6c5703c07bf6871f7f1c36f8929.ab49e19b6c8b38841d0077913e1df756
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/e0da32f845d5c980f4b2d407772935ae1c7ac0ad38e17fbc7e49376f42b4f9ec.rb
SHA1: 1689211f0983af1518291df86099b6fdd627b47b
Classification: EXPLOITABLE
Hash: 7d0cc6c5703c07bf6871f7f1c36f8929.ab49e19b6c8b38841d0077913e1df756
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/e0da32f845d5c980f4b2d407772935ae1c7ac0ad38e17fbc7e49376f42b4f9ec.rb
Faulting Frame:
   rb_callable_method_entry @ 0x00005555558a6b05: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x00005555558a6aed: lea rdx,[rbp-0x50]
   0x00005555558a6af1: mov rcx,QWORD PTR [rbp-0x90]
   0x00005555558a6af8: mov rax,QWORD PTR [rbp-0x88]
   0x00005555558a6aff: mov rsi,rcx
   0x00005555558a6b02: mov rdi,rax
=> 0x00005555558a6b05: call 0x5555558a668f <method_entry_get>
   0x00005555558a6b0a: mov QWORD PTR [rbp-0x78],rax
   0x00005555558a6b0e: mov rax,QWORD PTR [rbp-0x50]
   0x00005555558a6b12: mov rdx,QWORD PTR [rbp-0x78]
   0x00005555558a6b16: mov rcx,QWORD PTR [rbp-0x90]
Stack Head (1000 entries):
   rb_callable_method_entry  @ 0x00005555558a6b05: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_search_method          @ 0x000055555587e01f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555894218: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield                  @ 0x00005555558afb92: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   find_all_i                @ 0x0000555555979719: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield_with_cfunc       @ 0x000055555588c1da: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7c11: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060920008aeb0 rbx=0x000010007e419004 rcx=0x0000000000001511 rdx=0x00007ffff2108040
rsi=0x0000000000001511 rdi=0x000060920008aeb0 rbp=0x00007ffff2108090 rsp=0x00007ffff2108000
 r8=0x000060920013cd00  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff25133f8
r12=0x0000000000000001 r13=0x0000000000000000 r14=0x00006016000301e8 r15=0x00007ffff260b6a0
rip=0x00005555558a6b05 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: cd8703ade1e444a19c95a698c799bb45.fe0057d9ee2df55dc85a87abf6f7a1d7
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/0a61f245ae5a3709c368f1bd817ba5c3dd67b7839b6ce72a3f94401f9e562684.rb
SHA1: ee188926e34b7ae52557c6aa3ded6532c5972f7b
Classification: EXPLOITABLE
Hash: cd8703ade1e444a19c95a698c799bb45.fe0057d9ee2df55dc85a87abf6f7a1d7
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/0a61f245ae5a3709c368f1bd817ba5c3dd67b7839b6ce72a3f94401f9e562684.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_alloc                 @ 0x00005555557cf2d8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_duplicate             @ 0x00005555557d5770: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_str_resurrect          @ 0x00005555557d5b70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555890312: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_opt_call          @ 0x0000555555888f16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff858 rdx=0x0000000000000008
rsi=0x00007fffff7ff858 rdi=0x000060920030ba98 rbp=0x00007fffff7ff820 rsp=0x00007fffff7fefe0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000022220021 r11=0x00007ffff3e271a8
r12=0x00007fffff7ff858 r13=0x000060920030ba98 r14=0x0000602800012af8 r15=0x00007ffff3eff950
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 5fa6ad533b9cea1767652cd0917cc067.73077be9b83c937e3090a2deb87baece
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/28f7821886d852c0b4ed9e0757ec671c2a99c90a63afb3ce2519b2f6bc9b9ba1.rb
SHA1: 7727f254b86465171599b344cba60d1b36caa564
Classification: UNKNOWN
Hash: 5fa6ad533b9cea1767652cd0917cc067.73077be9b83c937e3090a2deb87baece
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/28f7821886d852c0b4ed9e0757ec671c2a99c90a63afb3ce2519b2f6bc9b9ba1.rb
Faulting Frame:
   memcmp @ 0x00007ffff4e5a622: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
   0x00007ffff4e5a616: push r14
   0x00007ffff4e5a618: mov r14,rdi
   0x00007ffff4e5a61b: push r13
   0x00007ffff4e5a61d: mov r13,rsi
   0x00007ffff4e5a620: push r12
=> 0x00007ffff4e5a622: push rbx
   0x00007ffff4e5a623: sub rsp,0x18
   0x00007ffff4e5a627: lea rax,[rip+0x473916] # 0x7ffff52cdf44
   0x00007ffff4e5a62e: mov eax,DWORD PTR [rax]
   0x00007ffff4e5a630: test eax,eax
Stack Head (1000 entries):
   memcmp                    @ 0x00007ffff4e5a622: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   fstring_cmp               @ 0x00005555557cde5c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   find_table_bin_ind        @ 0x00005555557c81b0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   st_update                 @ 0x00005555557ca3a7: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   register_fstring          @ 0x00005555557cd328: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_fstring                @ 0x00005555557cd229: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559438d8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000000000000004 rbx=0x0000000000000001 rcx=0x000060920028d498 rdx=0x0000000000000004
rsi=0x00006092001bf2f0 rdi=0x000060920028d498 rbp=0x00007fffff7ff020 rsp=0x00007fffff7ff000
 r8=0x0000000000000003  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00006092001bf2f0 r14=0x000060920028d498 r15=0x0000000000000000
rip=0x00007ffff4e5a622 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 2) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.179d5e194c055bcb147e4471cf98806f
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/950bd48479ab350b59cc2479d915e9b2e7f9018179df039a89284e74fa28894b.rb
SHA1: 5b6e32f1a3e22fc079ab5592a7674125e7ac3b42
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.179d5e194c055bcb147e4471cf98806f
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/950bd48479ab350b59cc2479d915e9b2e7f9018179df039a89284e74fa28894b.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_alloc                 @ 0x00005555558d4fee: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   ary_new                   @ 0x00005555558d511c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_capa           @ 0x00005555558d52ba: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ary_new_from_values    @ 0x00005555558d56f6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   args_copy                 @ 0x000055555587f5a7: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   args_setup_rest_parameter @ 0x0000555555880a8b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_parameters_complex  @ 0x00005555558829b2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_callee_setup_block_arg @ 0x000055555588cda8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield_setup_args       @ 0x000055555588cf4a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7a8d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff4f8 rdx=0x0000000000000008
rsi=0x00007fffff7ff4f8 rdi=0x00006092003e95f0 rbp=0x00007fffff7ff4c0 rsp=0x00007fffff7fec80
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x00007ffff4e60600 r11=0x000000000000001e
r12=0x00007fffff7ff4f8 r13=0x00006092003e95f0 r14=0x0000603c0001c930 r15=0x00007ffff3effb00
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: e72798fb212ee1d374758dc217a7d25d.363eccd3ae567d604879aa7c309c4bdb
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/daced237dffb63af5fcadf995b0f7d7f385137ea62c3e55d39da4a7b52908ee0.rb
SHA1: cc7130d7b95f57a84d436ddef1bb218f9d4cb088
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.363eccd3ae567d604879aa7c309c4bdb
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/daced237dffb63af5fcadf995b0f7d7f385137ea62c3e55d39da4a7b52908ee0.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_call_init          @ 0x00005555555dea17: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dac9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff8004c0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff800230 rsp=0x00007fffff7fef40
 r8=0x0000000000000000  r9=0x0000609200038750 r10=0x0000000000000000 r11=0x00007ffff3e2e3d8
r12=0x00006092000283f0 r13=0x00007fffffffeb20 r14=0x0000602a00016028 r15=0x00007ffff3eeae60
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: c408db942c61c325240d0b10e7f1d97d.61b87a4a3b925e74a08a3c26aa39e2b8
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/a5fe3d5261c9c6ba9a314001f4af643516afd4c73eaa2124e1240b058ec3dc2c.rb
SHA1: ec5141de3718518e8ad6df11c167096518b4ea92
Classification: EXPLOITABLE
Hash: c408db942c61c325240d0b10e7f1d97d.61b87a4a3b925e74a08a3c26aa39e2b8
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/a5fe3d5261c9c6ba9a314001f4af643516afd4c73eaa2124e1240b058ec3dc2c.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield                  @ 0x00005555558afb92: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   find_i                    @ 0x0000555555979123: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield_with_cfunc       @ 0x000055555588c1da: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7c11: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield                  @ 0x00005555558afb92: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff8004e0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff800250 rsp=0x00007fffff7fef60
 r8=0x00007ffff3e35e31  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e35e90
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x0000602a00018918 r15=0x00007ffff3ed8e30
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: e6e873b9eb693c7747c6927d35f94804.959d3d49144c8e35be41291f48e5fe81
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/046e6f1431b83d19db86e7651b2cddd755c68dcba75616c1179f15fc133125ff.rb
SHA1: 16808731ea1eeee5aafcb271663efe726348d9f9
Classification: EXPLOITABLE
Hash: e6e873b9eb693c7747c6927d35f94804.959d3d49144c8e35be41291f48e5fe81
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/046e6f1431b83d19db86e7651b2cddd755c68dcba75616c1179f15fc133125ff.rb
Faulting Frame:
   new_insn_body @ 0x0000555555922c1f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555922c13: push rbp
   0x0000555555922c14: mov rbp,rsp
   0x0000555555922c17: push rbx
   0x0000555555922c18: sub rsp,0x158
=> 0x0000555555922c1f: mov QWORD PTR [rbp-0x148],rdi
   0x0000555555922c26: mov DWORD PTR [rbp-0x14c],esi
   0x0000555555922c2c: mov DWORD PTR [rbp-0x150],edx
   0x0000555555922c32: mov QWORD PTR [rbp-0xa0],r8
   0x0000555555922c39: mov QWORD PTR [rbp-0x98],r9
Stack Head (1000 entries):
   new_insn_body             @ 0x0000555555922c1f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x000055555594019e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000000000000000 rbx=0x000010007fef7eb2 rcx=0x0000000000000000 rdx=0x000000000000000e
rsi=0x000000000000015d rdi=0x00006092003113c8 rbp=0x00007fffff7ff050 rsp=0x00007fffff7feef0
 r8=0x00007fffff801120  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000000000000001 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x0000555555922c1f efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 0dc18a7fae5a073273eaef367254a50a.92eb55dfaac4450c1c7c315538c8776e
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/386e6be1ca3a6f855e156650b368847e091c8c701c1133023ec4e213b5875486.rb
SHA1: 11b04588a99eb22968e58ee77ae83cbb457e9b42
Classification: EXPLOITABLE
Hash: 0dc18a7fae5a073273eaef367254a50a.92eb55dfaac4450c1c7c315538c8776e
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/386e6be1ca3a6f855e156650b368847e091c8c701c1133023ec4e213b5875486.rb
Faulting Frame:
   iseq_compile_each @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555934070: mov rbp,rsp
   0x0000555555934073: push r13
   0x0000555555934075: push r12
   0x0000555555934077: push rbx
   0x0000555555934078: sub rsp,0x7f8
=> 0x000055555593407f: mov QWORD PTR [rbp-0x7e8],rdi
   0x0000555555934086: mov QWORD PTR [rbp-0x7f0],rsi
   0x000055555593408d: mov QWORD PTR [rbp-0x7f8],rdx
   0x0000555555934094: mov DWORD PTR [rbp-0x7fc],ecx
   0x000055555593409a: lea rax,[rbp-0x2e0]
Stack Head (1000 entries):
   iseq_compile_each         @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00006092002b1c98 rbx=0x000010007fef7e6c rcx=0x0000000000000000 rdx=0x0000609200137098
rsi=0x00007fffff7ff3c0 rdi=0x00006092002b1c98 rbp=0x00007fffff7ff2d0 rsp=0x00007fffff7feac0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000601a00040f70 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 95ab5d50364fc18184d6471d8dd3c0d0.cea64d51c185421a3ebd3c9620b65277
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/404d75a83b2749be674d59e99d329de9fa7d5ba77b9f1d3c6cb7e6a6de6c6046.rb
SHA1: fa972e988e540dd5737919292116e36a974f9abb
Classification: EXPLOITABLE
Hash: 95ab5d50364fc18184d6471d8dd3c0d0.cea64d51c185421a3ebd3c9620b65277
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/404d75a83b2749be674d59e99d329de9fa7d5ba77b9f1d3c6cb7e6a6de6c6046.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   clear_opt_map_info        @ 0x00005555557508cb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   clear_node_opt_info       @ 0x00005555557513a3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751d50: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555754640: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555754640: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555754640: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555754640: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555754640: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555754640: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000120 rcx=0x0000000000000007 rdx=0x0000000000000120
rsi=0x0000555555a10740 rdi=0x00007fffff8002b8 rbp=0x00007fffff7ff5c0 rsp=0x00007fffff7fed80
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff72ce700 r11=0x0000600c003bf4e0
r12=0x0000555555a10740 r13=0x00007fffff8002b8 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 567354eeb78ef1eff9d1986b8422f222.a791025f7354862c1ad4bb6e39348662
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/f7b197427c2dfc9b61e663616b7382ae4cf254b7d84adefee659b94e46d18423.rb
SHA1: 63caec858cb705ceafd9a9ea856556c5dc58679b
Classification: EXPLOITABLE
Hash: 567354eeb78ef1eff9d1986b8422f222.a791025f7354862c1ad4bb6e39348662
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/f7b197427c2dfc9b61e663616b7382ae4cf254b7d84adefee659b94e46d18423.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   vm_call_opt_call          @ 0x0000555555888ea9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_method_each_type  @ 0x000055555588a807: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_method            @ 0x000055555588b171: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_general           @ 0x000055555588b578: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589e21d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield                  @ 0x00005555558afb92: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   find_all_i                @ 0x0000555555979719: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield_with_cfunc       @ 0x000055555588c1da: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007ffff2108090 rdx=0x0000000000000008
rsi=0x00007ffff2513158 rdi=0x00007ffff2108090 rbp=0x00007ffff2108080 rsp=0x00007ffff2107840
 r8=0x0000000000000000  r9=0x0000000000000007 r10=0x0000000022220000 r11=0x00007ffff2513138
r12=0x00007ffff2513158 r13=0x00007ffff2108090 r14=0x0000602c0004f630 r15=0x00007ffff260c120
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: beb32a52d2f421a6868c27645fbf658f.de9ccc857e309debfab59860cdcc6ad8
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/8ee011efbd1c7f17ed395f5b8837eec0e8e339c2c493c3d5d35e8dfafeb1edde.rb
SHA1: 522b345b5afe83a31416ecedf26adc615e915fbb
Classification: EXPLOITABLE
Hash: beb32a52d2f421a6868c27645fbf658f.de9ccc857e309debfab59860cdcc6ad8
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/8ee011efbd1c7f17ed395f5b8837eec0e8e339c2c493c3d5d35e8dfafeb1edde.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_allocate_instanc @ 0x000055555569da87: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_alloc              @ 0x000055555569da05: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dab0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_method_each_type  @ 0x000055555588a104: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_method            @ 0x000055555588b171: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_general           @ 0x000055555588b578: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff708 rdx=0x0000000000000008
rsi=0x00007fffff7ff708 rdi=0x00006092004c3bb0 rbp=0x00007fffff7ff6d0 rsp=0x00007fffff7fee90
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000000 r11=0x00007ffff3e2ddc8
r12=0x00007fffff7ff708 r13=0x00006092004c3bb0 r14=0x0000602600029bf8 r15=0x00007ffff3eeba90
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 2) - Hash: 7467b1a380bf243b820e0876f0f7e925.812f1011c00fc22d5ce04cc406036a71
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/21c69577ec1288ee0e1af43cc41f9c1d75934420ea487cc665492e84d85045ae.rb
SHA1: bec975675b7a799c3f62b8e85093ef0c40496ae4
Classification: EXPLOITABLE
Hash: 7467b1a380bf243b820e0876f0f7e925.812f1011c00fc22d5ce04cc406036a71
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/21c69577ec1288ee0e1af43cc41f9c1d75934420ea487cc665492e84d85045ae.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_proc_call_with_block   @ 0x00005555556f15d7: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   curry                     @ 0x00005555556f8760: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield_with_cfunc       @ 0x000055555588c1da: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e6f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_opt_call          @ 0x0000555555888f16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589e21d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff8001f0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7fff60 rsp=0x00007fffff7fec70
 r8=0x0000600e00166411  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e23ac8
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x000060200001fc98 r15=0x00007ffff3ef5090
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 829fd42ffd22ec2af34d969d3b3eb0b8.a07fda4a7a7fc7c33ccd5967a2f9781b
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/e1f9edb3adf3f10c32681a4ae199b62e3052c2f3106bd101b8a1da2122eda0cf.rb
SHA1: b6cb9d722602b08fcd99977aba0637d06c2337c0
Classification: EXPLOITABLE
Hash: 829fd42ffd22ec2af34d969d3b3eb0b8.a07fda4a7a7fc7c33ccd5967a2f9781b
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/e1f9edb3adf3f10c32681a4ae199b62e3052c2f3106bd101b8a1da2122eda0cf.rb
Faulting Frame:
   vm_setivar @ 0x000055555587be10: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555587bded: sub rsp,0xb8
   0x000055555587bdf4: mov QWORD PTR [rbp-0x98],rdi
   0x000055555587bdfb: mov QWORD PTR [rbp-0xa0],rsi
   0x000055555587be02: mov QWORD PTR [rbp-0xa8],rdx
   0x000055555587be09: mov QWORD PTR [rbp-0xb0],rcx
=> 0x000055555587be10: mov QWORD PTR [rbp-0xb8],r8
   0x000055555587be17: mov DWORD PTR [rbp-0xbc],r9d
   0x000055555587be1e: lea rax,[rbp-0x70]
   0x000055555587be22: mov QWORD PTR [rax],0x41b58ab3
   0x000055555587be29: lea rdx,[rip+0x1b9fd0] # 0x555555a35e00
Stack Head (1000 entries):
   vm_setivar                @ 0x000055555587be10: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_setinstancevariable    @ 0x000055555587cd8d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555588f1e6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_call_init          @ 0x00005555555dea17: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dac9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000609200636d50 rbx=0x000010007fef7f7e rcx=0x00006008000a12d0 rdx=0x00006092006199f8
rsi=0x000000000000cff3 rdi=0x0000609200636d50 rbp=0x00007fffff7ff0b0 rsp=0x00007fffff7feff0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x0000000000000000 r11=0x00007ffff3e2f2c8
r12=0x00006092003e10a0 r13=0x00007fffffffeb20 r14=0x000060200001c588 r15=0x00007ffff3ee9810
rip=0x000055555587be10 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 80) - Hash: 0dc18a7fae5a073273eaef367254a50a.f48ee6469731748bd60b2c0cb7f97b82
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/e17d9b6a6015156cbd598eb25bf07e6961cbb3543462479e3ef2cdcfcc59d630.rb
SHA1: 6ba009c78f246b2f36621f3f3bfd7d444352df31
Classification: EXPLOITABLE
Hash: 0dc18a7fae5a073273eaef367254a50a.f48ee6469731748bd60b2c0cb7f97b82
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/e17d9b6a6015156cbd598eb25bf07e6961cbb3543462479e3ef2cdcfcc59d630.rb
Faulting Frame:
   iseq_compile_each @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555934070: mov rbp,rsp
   0x0000555555934073: push r13
   0x0000555555934075: push r12
   0x0000555555934077: push rbx
   0x0000555555934078: sub rsp,0x7f8
=> 0x000055555593407f: mov QWORD PTR [rbp-0x7e8],rdi
   0x0000555555934086: mov QWORD PTR [rbp-0x7f0],rsi
   0x000055555593408d: mov QWORD PTR [rbp-0x7f8],rdx
   0x0000555555934094: mov DWORD PTR [rbp-0x7fc],ecx
   0x000055555593409a: lea rax,[rbp-0x2e0]
Stack Head (1000 entries):
   iseq_compile_each         @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060920005fd28 rbx=0x000010007fef7e40 rcx=0x0000000000000000 rdx=0x0000609200158180
rsi=0x00007fffff7ff260 rdi=0x000060920005fd28 rbp=0x00007fffff7ff170 rsp=0x00007fffff7fe960
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 5) - Hash: e75ce86d7cebeafb1148469609231657.1456c6b30a9d57e3e6e12fd74b5ecf89
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/0001b0c07d3974d23a2342c7a23c7534500f18a81037e641a33696610d00d05f.rb
SHA1: 8e1ee05309ec55b0130dfc9f67df5dbd4c3efebd
Classification: EXPLOITABLE
Hash: e75ce86d7cebeafb1148469609231657.1456c6b30a9d57e3e6e12fd74b5ecf89
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/0001b0c07d3974d23a2342c7a23c7534500f18a81037e641a33696610d00d05f.rb
Faulting Frame:
   new_insn_body @ 0x0000555555922c1f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555922c13: push rbp
   0x0000555555922c14: mov rbp,rsp
   0x0000555555922c17: push rbx
   0x0000555555922c18: sub rsp,0x158
=> 0x0000555555922c1f: mov QWORD PTR [rbp-0x148],rdi
   0x0000555555922c26: mov DWORD PTR [rbp-0x14c],esi
   0x0000555555922c2c: mov DWORD PTR [rbp-0x150],edx
   0x0000555555922c32: mov QWORD PTR [rbp-0xa0],r8
   0x0000555555922c39: mov QWORD PTR [rbp-0x98],r9
Stack Head (1000 entries):
   new_insn_body             @ 0x0000555555922c1f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x000055555594019e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000000000000000 rbx=0x000010007fef7ece rcx=0x0000000000000000 rdx=0x000000000000000e
rsi=0x0000000000000028 rdi=0x0000609200204a20 rbp=0x00007fffff7ff130 rsp=0x00007fffff7fefd0
 r8=0x00007fffff8009e0  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000601a00042080 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x0000555555922c1f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 8a0721995dd6ea9733d82a522f6dee71.b1eb3896c7cf1adeb185306beb0a2066
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/0f1edb8212f9b24df23be9f4fe7b10bf2e2162277e9ba122a00deb0eb2b8d965.rb
SHA1: 7998bda31215e7498bc565a5a26d5b80cafd8212
Classification: EXPLOITABLE
Hash: 8a0721995dd6ea9733d82a522f6dee71.b1eb3896c7cf1adeb185306beb0a2066
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/0f1edb8212f9b24df23be9f4fe7b10bf2e2162277e9ba122a00deb0eb2b8d965.rb
Faulting Frame:
   compile_array_ @ 0x000055555592d4c0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555592d4b4: push rbp
   0x000055555592d4b5: mov rbp,rsp
   0x000055555592d4b8: push rbx
   0x000055555592d4b9: sub rsp,0x128
=> 0x000055555592d4c0: mov QWORD PTR [rbp-0x108],rdi
   0x000055555592d4c7: mov QWORD PTR [rbp-0x110],rsi
   0x000055555592d4ce: mov QWORD PTR [rbp-0x118],rdx
   0x000055555592d4d5: mov DWORD PTR [rbp-0x11c],ecx
   0x000055555592d4db: mov QWORD PTR [rbp-0x128],r8
Stack Head (1000 entries):
   compile_array_            @ 0x000055555592d4c0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000609200634ed8 rbx=0x000010007fef7ec4 rcx=0x0000000000000000 rdx=0x000060920035bc20
rsi=0x00007fffff7ff9f0 rdi=0x0000609200634ed8 rbp=0x00007fffff7ff0e0 rsp=0x00007fffff7fefb0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000601a000423c0 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555592d4c0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 4) - Hash: 0f9b7c6ee4f19c011f7e0d2b508853a1.4fba4ad43d19fb8a1b46220523aaf0ca
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/36f908910b2f7b2c126843f95f9deb7f280c75d5e534d2c2fa73018129aaba24.rb
SHA1: 9b934be011b69c9178d32491b417ea7923c10ee2
Classification: EXPLOITABLE
Hash: 0f9b7c6ee4f19c011f7e0d2b508853a1.4fba4ad43d19fb8a1b46220523aaf0ca
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/36f908910b2f7b2c126843f95f9deb7f280c75d5e534d2c2fa73018129aaba24.rb
Faulting Frame:
   any_hash @ 0x000055555561632e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555616326: push rbp
   0x0000555555616327: mov rbp,rsp
   0x000055555561632a: sub rsp,0x30
=> 0x000055555561632e: mov QWORD PTR [rbp-0x18],rdi
   0x0000555555616332: mov QWORD PTR [rbp-0x20],rsi
   0x0000555555616336: mov rax,QWORD PTR [rbp-0x18]
   0x000055555561633a: and eax,0x7
   0x000055555561633d: test rax,rax
Stack Head (1000 entries):
   any_hash                  @ 0x000055555561632e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_any_hash               @ 0x000055555561654e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   do_hash                   @ 0x00005555557c65f0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   st_lookup                 @ 0x00005555557c87b1: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_hash_aref              @ 0x0000555555618253: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_1              @ 0x00005555558850e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589e21d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000609201297389 rbx=0x000010007fef7e18 rcx=0x0000000000000000 rdx=0x000055555561652f
rsi=0x000055555561650a rdi=0x0000609201297389 rbp=0x00007fffff7ff010 rsp=0x00007fffff7fefe0
 r8=0x0000555555885095  r9=0x0000609200bfb380 r10=0x0000000000000000 r11=0x00007ffff3e2f308
r12=0x0000609200d200f8 r13=0x00007fffffffeb20 r14=0x0000602a00015e28 r15=0x00007ffff3ee97e0
rip=0x000055555561632e efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: c408db942c61c325240d0b10e7f1d97d.700546c5938d6b858fb5fa19bc710c67
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/02fede6663bad53629a487a367b37ea96c47f0811c9415434e26ffa1a44e8584.rb
SHA1: 2db5f56a1a9f11be9c2e4128971dfb2db65fbe50
Classification: EXPLOITABLE
Hash: c408db942c61c325240d0b10e7f1d97d.700546c5938d6b858fb5fa19bc710c67
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/02fede6663bad53629a487a367b37ea96c47f0811c9415434e26ffa1a44e8584.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_1                @ 0x00005555558afb60: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   int_dotimes               @ 0x0000555555698342: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_0              @ 0x0000555555885093: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589426c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff7ffd30 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ffaa0 rsp=0x00007fffff7fe7b0
 r8=0x00007ffff3e34239  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e34260
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x0000602a00018bd0 r15=0x00007ffff3ee15f0
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 6e39c612ae5e7def990fc35c5b609c34.28769bfb151f3a60513206d38e94f10c
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/aad8704972b46b5d4bc50b140cada49f755ba00e51fac6c2a76f166f2a505108.rb
SHA1: 4447f20af813e972547974f5093271299dbe4ff8
Classification: EXPLOITABLE
Hash: 6e39c612ae5e7def990fc35c5b609c34.28769bfb151f3a60513206d38e94f10c
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/aad8704972b46b5d4bc50b140cada49f755ba00e51fac6c2a76f166f2a505108.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_call                @ 0x00005555558acaeb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_method_data          @ 0x00005555556f5930: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_method_call_with_block @ 0x00005555556f5dd2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   bmcall                    @ 0x00005555556f7875: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield_with_cfunc       @ 0x000055555588c1da: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e6f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_bmethod         @ 0x00005555558b83df: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b8475: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_opt_call          @ 0x0000555555888f16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff7ff950 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff6c0 rsp=0x00007fffff7fe3d0
 r8=0x0000000000000000  r9=0x0000609200478310 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x0000602c0001b6c0 r15=0x00007ffff3ef1c10
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 7467b1a380bf243b820e0876f0f7e925.01009785b399a61019adcba09422d04b
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/9258534fcf02bde2264c474f568e38a3073639595fd1867cc4d625f9e50dee56.rb
SHA1: 456a89d832d563b6d851932d41519b755a326629
Classification: EXPLOITABLE
Hash: 7467b1a380bf243b820e0876f0f7e925.01009785b399a61019adcba09422d04b
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/9258534fcf02bde2264c474f568e38a3073639595fd1867cc4d625f9e50dee56.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_opt_call          @ 0x0000555555888f16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_opt_call          @ 0x0000555555888f16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff7ff640 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff3b0 rsp=0x00007fffff7fe0c0
 r8=0x00006008001edbf1  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e1d5d8
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x000060260001a458 r15=0x00007ffff3eff9e0
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 4) - Hash: beb32a52d2f421a6868c27645fbf658f.0feb01e854a46dc7725b96aa9f565e1b
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/287ad9cabee0ac67fd7099cbc852bf97d8530a0d4054abc0b625e810a426a02d.rb
SHA1: 6a85397d30f9b3704603ea703ab21673c1320ce0
Classification: EXPLOITABLE
Hash: beb32a52d2f421a6868c27645fbf658f.0feb01e854a46dc7725b96aa9f565e1b
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/287ad9cabee0ac67fd7099cbc852bf97d8530a0d4054abc0b625e810a426a02d.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_allocate_instanc @ 0x000055555569da87: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_alloc              @ 0x000055555569da05: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dab0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff618 rdx=0x0000000000000008
rsi=0x00007fffff7ff618 rdi=0x00006092003920e8 rbp=0x00007fffff7ff5e0 rsp=0x00007fffff7feda0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000000 r11=0x00007ffff3e2f488
r12=0x00007fffff7ff618 r13=0x00006092003920e8 r14=0x0000602a00016368 r15=0x00007ffff3ee96c0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 5b28293995be1cb3cb1eb19169b4ac92.b963094e335136a90eae36015143c128
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/ebad4fcca0fbecd9fe9bf67698ebc5b84f5608113a85e8161c9c31069b2e146b.rb
SHA1: 3877e6d14aee3646f363e838c4a740741771e354
Classification: EXPLOITABLE
Hash: 5b28293995be1cb3cb1eb19169b4ac92.b963094e335136a90eae36015143c128
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/ebad4fcca0fbecd9fe9bf67698ebc5b84f5608113a85e8161c9c31069b2e146b.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_bmethod            @ 0x00005555558b778c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ae8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_bmethod         @ 0x00005555558b83df: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_bmethod_body      @ 0x0000555555887cb3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac29f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall_default  @ 0x00005555558ad9be: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall          @ 0x00005555558ad8cc: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   convert_type              @ 0x000055555569f777: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_convert_type     @ 0x000055555569f9c2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_string_type      @ 0x00005555557dace6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   constant_arg              @ 0x00007ffff2e9bd87: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/socket.so
   rsock_optname_arg         @ 0x00007ffff2e9c04a: in /home/vagrant/builds/ruby-2.4.0-asan/lib/ruby/2.4.0/x86_64-linux/socket.so
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff800010 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ffd80 rsp=0x00007fffff7fea90
 r8=0x0000600c001b2c89  r9=0x0000609200393a08 r10=0x0000000099990061 r11=0x00007ffff3e230e8
r12=0x0000600c001b2c89 r13=0x00007ffff3e0ed18 r14=0x000060220005b1d0 r15=0x00007ffff3ef5e40
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: b64d84042e679fe86453e36607444046.8838f08c407a56ef4f1c0e007e847f4e
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/7ad65c50d38902d1fb9e341e42b472dedbae8c7c78690aa2d33cf3f1b4b03340.rb
SHA1: 7bd802db06a414525fd616306c114bb39cdc8083
Classification: EXPLOITABLE
Hash: b64d84042e679fe86453e36607444046.8838f08c407a56ef4f1c0e007e847f4e
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/7ad65c50d38902d1fb9e341e42b472dedbae8c7c78690aa2d33cf3f1b4b03340.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   clear_opt_map_info        @ 0x00005555557508cb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   clear_node_opt_info       @ 0x00005555557513a3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751d50: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555753a82: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555754640: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555753a82: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555754640: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555753a82: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555754640: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555753a82: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555754640: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000120 rcx=0x0000000000000007 rdx=0x0000000000000120
rsi=0x0000555555a10740 rdi=0x00007fffff7ffe08 rbp=0x00007fffff7ff5c0 rsp=0x00007fffff7fed80
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff72ce700 r11=0x0000600c00840c20
r12=0x0000555555a10740 r13=0x00007fffff7ffe08 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 77a744ac0b056d416df542bd4c3259b6.61dd1262476febd70a19892729cf74e1
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/c723836a1d4c1000707dbff6c128bbd99aaa7887c52aac20b0ca6a29ffd86597.rb
SHA1: 3dfcd7889bc2c1916a689bce03816319e460fedb
Classification: EXPLOITABLE
Hash: 77a744ac0b056d416df542bd4c3259b6.61dd1262476febd70a19892729cf74e1
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/c723836a1d4c1000707dbff6c128bbd99aaa7887c52aac20b0ca6a29ffd86597.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   clear_opt_map_info        @ 0x00005555557508cb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   clear_node_opt_info       @ 0x00005555557513a3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751d50: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555753a82: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555753a82: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555753a82: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555753a82: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555753a82: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751e59: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555753a82: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000120 rcx=0x0000000000000007 rdx=0x0000000000000120
rsi=0x0000555555a10740 rdi=0x00007fffff7ffe08 rbp=0x00007fffff7ff5c0 rsp=0x00007fffff7fed80
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff72ce700 r11=0x0000600c00491360
r12=0x0000555555a10740 r13=0x00007fffff7ffe08 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 2) - Hash: 7467b1a380bf243b820e0876f0f7e925.ae538c547ddec8675826d718fe6ff116
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/b57272b6820d9179409898b1760a063d084b97ceeda8e8904fea25e035cc28bd.rb
SHA1: f704eafe03e3ca57d3b912fddd09a7bfc6d8ed72
Classification: EXPLOITABLE
Hash: 7467b1a380bf243b820e0876f0f7e925.ae538c547ddec8675826d718fe6ff116
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/b57272b6820d9179409898b1760a063d084b97ceeda8e8904fea25e035cc28bd.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_opt_call          @ 0x0000555555888f16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589e21d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_opt_call          @ 0x0000555555888f16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff7ff6d0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff440 rsp=0x00007fffff7fe150
 r8=0x0000600c001ad649  r9=0x0000000000000000 r10=0x0000000099990021 r11=0x00007ffff3e1afe8
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffeb20 r14=0x0000601c00037298 r15=0x00007ffff3eff920
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 5) - Hash: 5b28293995be1cb3cb1eb19169b4ac92.8b9f2ccf4aa9136283e8fde2580ae37d
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/ffcf7db20eb11ce1d9a320a3c6ce22ac2b6eca329e22cf9b521d77eb7ec2cd09.rb
SHA1: 90ee5d401b887ea7fcad4f4d0755bacac53bf641
Classification: EXPLOITABLE
Hash: 5b28293995be1cb3cb1eb19169b4ac92.8b9f2ccf4aa9136283e8fde2580ae37d
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/ffcf7db20eb11ce1d9a320a3c6ce22ac2b6eca329e22cf9b521d77eb7ec2cd09.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_bmethod            @ 0x00005555558b778c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ae8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_bmethod         @ 0x00005555558b83df: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_bmethod_body      @ 0x0000555555887cb3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_bmethod           @ 0x0000555555887fba: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_bmethod            @ 0x00005555558b778c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ae8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_bmethod         @ 0x00005555558b83df: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_bmethod_body      @ 0x0000555555887cb3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_bmethod           @ 0x0000555555887fba: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff800530 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff8002a0 rsp=0x00007fffff7fefb0
 r8=0x000060080017b229  r9=0x00006092001e9158 r10=0x0000000099990061 r11=0x00007ffff3e19280
r12=0x000060080017b229 r13=0x00007fffffffeb20 r14=0x000060200001fae0 r15=0x00007ffff3efeb10
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: e14cc6f3dd4d235cf97ad3ff7350e51b.787c21a6aa8dcf226e2e3cf014d59b2b
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/4df44d49ba5d46f82b3e836a64af9a3662b4decbe0efe41bd69bc93b9d988d2e.rb
SHA1: 13c75da4e72da5bd88ed277d6be7d77a499d549e
Classification: EXPLOITABLE
Hash: e14cc6f3dd4d235cf97ad3ff7350e51b.787c21a6aa8dcf226e2e3cf014d59b2b
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/4df44d49ba5d46f82b3e836a64af9a3662b4decbe0efe41bd69bc93b9d988d2e.rb
Faulting Frame:
   iseq_compile_each @ 0x000055555594005f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555940045: mov rdx,QWORD PTR [rax+0x10]
   0x0000555555940049: lea rsi,[rbp-0x100]
   0x0000555555940050: mov rax,QWORD PTR [rbp-0x7e8]
   0x0000555555940057: mov ecx,0x0
   0x000055555594005c: mov rdi,rax
=> 0x000055555594005f: call 0x55555593406f <iseq_compile_each>
   0x0000555555940064: cmp DWORD PTR [rbp-0x7e0],0x26
   0x000055555594006b: jne 0x555555940166 <iseq_compile_each+49399>
   0x0000555555940071: mov eax,DWORD PTR [rbp-0x7dc]
   0x0000555555940077: movsxd rdx,eax
Stack Head (1000 entries):
   iseq_compile_each         @ 0x000055555594005f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00006092001e9c70 rbx=0x000010007fef7ea6 rcx=0x0000000000000000 rdx=0x00006092002a49a8
rsi=0x00007fffff7ff710 rdi=0x00006092001e9c70 rbp=0x00007fffff7ff810 rsp=0x00007fffff7ff000
 r8=0x00007fffff800080  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555594005f efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 2) - Hash: aef0b32d651f76dc41935a95624d90bd.15d054814ed753ff40a6f019d76cf4a0
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/a462ff8960c6ec34d2e372080b23c6b0bf5a22cdcfd26bb1ec904c971b2ea7f2.rb
SHA1: 187fd06a04d3b879be9a99bd5f788d2bd1c24703
Classification: EXPLOITABLE
Hash: aef0b32d651f76dc41935a95624d90bd.15d054814ed753ff40a6f019d76cf4a0
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/a462ff8960c6ec34d2e372080b23c6b0bf5a22cdcfd26bb1ec904c971b2ea7f2.rb
Faulting Frame:
   iseq_compile_each @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555934070: mov rbp,rsp
   0x0000555555934073: push r13
   0x0000555555934075: push r12
   0x0000555555934077: push rbx
   0x0000555555934078: sub rsp,0x7f8
=> 0x000055555593407f: mov QWORD PTR [rbp-0x7e8],rdi
   0x0000555555934086: mov QWORD PTR [rbp-0x7f0],rsi
   0x000055555593408d: mov QWORD PTR [rbp-0x7f8],rdx
   0x0000555555934094: mov DWORD PTR [rbp-0x7fc],ecx
   0x000055555593409a: lea rax,[rbp-0x2e0]
Stack Head (1000 entries):
   iseq_compile_each         @ 0x000055555593407f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   setup_args                @ 0x0000555555933369: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940249: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x0000555555940064: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060920020d760 rbx=0x000010007fef7f4e rcx=0x0000000000000000 rdx=0x0000609200029700
rsi=0x00007fffff7ffc50 rdi=0x000060920020d760 rbp=0x00007fffff7ff530 rsp=0x00007fffff7fed20
 r8=0x00007fffff8005c0  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000000000000001 r13=0x00007fffffffeb20 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 7) - Hash: c408db942c61c325240d0b10e7f1d97d.47043d175bcc240f0e33e92eb85de41c
---CRASH SUMMARY---
Filename: /lab/ruby/mri-2.4.0-asan/9ed1c7f740e5d185e749f951b7cba6c782a54870fc81f060672bb5611be13c22.rb
SHA1: 8bb6a1d429e456ef3b677905ccd1b3c430635836
Classification: EXPLOITABLE
Hash: c408db942c61c325240d0b10e7f1d97d.47043d175bcc240f0e33e92eb85de41c
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /lab/ruby/mri-2.4.0-asan/9ed1c7f740e5d185e749f951b7cba6c782a54870fc81f060672bb5611be13c22.rb
Faulting Frame:
   vm_exec_core @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x000055555588e3d2: push r14
   0x000055555588e3d4: push r13
   0x000055555588e3d6: push r12
   0x000055555588e3d8: push rbx
   0x000055555588e3d9: sub rsp,0x12c8
=> 0x000055555588e3e0: mov QWORD PTR [rbp-0x12b8],rdi
   0x000055555588e3e7: mov QWORD PTR [rbp-0x12c0],rsi
   0x000055555588e3ee: lea rax,[rbp-0x7f0]
   0x000055555588e3f5: mov QWORD PTR [rax],0x41b58ab3
   0x000055555588e3fc: lea rdx,[rip+0x1a85e5] # 0x555555a369e8
Stack Head (1000 entries):
   vm_exec_core              @ 0x000055555588e3e0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_splat @ 0x00005555558b7bac: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_yield                  @ 0x00005555558b7d7d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_0                @ 0x00005555558afb41: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_yield_values2          @ 0x00005555558afe5c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   each_pair_i_fast          @ 0x000055555561a7e8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   hash_foreach_iter         @ 0x00005555556169f9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   st_general_foreach        @ 0x00005555557ca938: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   st_foreach_check          @ 0x00005555557cad45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   hash_foreach_call         @ 0x0000555555616e18: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_ensure                 @ 0x00005555555dca77: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_hash_foreach           @ 0x0000555555616fb9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_hash_each_pair         @ 0x000055555561a868: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff7ff7a0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff510 rsp=0x00007fffff7fe220
 r8=0x00007ffff3e2e4f1  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e2e528
r12=0x000060920059ad10 r13=0x00007fffffffeb20 r14=0x00006022000771a0 r15=0x00007ffff3eeb2b0
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
```
