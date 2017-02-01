```
(1 of 1) - Hash: 5f1bf07eced421f2516c3e474898139c.c1a64190fb37b378eaa47ac55c5c6433
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.1f9da4b16.CODE.1.ADDR.0x7fffff7fee88.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: f58d7779a51befbfe02930fe7fb85b91d858a8fc
Classification: EXPLOITABLE
Hash: 5f1bf07eced421f2516c3e474898139c.c1a64190fb37b378eaa47ac55c5c6433
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.1f9da4b16.CODE.1.ADDR.0x7fffff7fee88.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
   rb_check_funcall_default  @ 0x00005555558ad9be: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall          @ 0x00005555558ad8cc: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   convert_type              @ 0x000055555569f777: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_convert_type           @ 0x000055555569f93d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   numeric_to_float          @ 0x00005555556a13e4: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_num_to_dbl             @ 0x00005555556a16d5: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   math_exp                  @ 0x00005555556781d0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_1              @ 0x00005555558850e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff8003a0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff800110 rsp=0x00007fffff7fee20
 r8=0x0000000000000000  r9=0x000060920028d3c0 r10=0x0000000000000000 r11=0x0000000000000000
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffe560 r14=0x0000602e00017a30 r15=0x00007ffff3ef1f70
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 14) - Hash: 8a0721995dd6ea9733d82a522f6dee71.7c96a405c004e82d9891ebd822f650b7
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555558182de.STACK.3f3300d.CODE.128.ADDR.(nil).INSTR.mov____%rdi,-0x8c8(%rbp).rb
SHA1: a8eede12196a36b555be37b6a7d2407b66747009
Classification: EXPLOITABLE
Hash: 8a0721995dd6ea9733d82a522f6dee71.7c96a405c004e82d9891ebd822f650b7
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555558182de.STACK.3f3300d.CODE.128.ADDR.(nil).INSTR.mov____%rdi,-0x8c8(%rbp).rb
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
rax=0x00006092001f0660 rbx=0x000010007fef7ec4 rcx=0x0000000000000000 rdx=0x000060920028c128
rsi=0x00007fffff7ff9f0 rdi=0x00006092001f0660 rbp=0x00007fffff7ff0e0 rsp=0x00007fffff7fefb0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffe570 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555592d4c0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 4) - Hash: 5b28293995be1cb3cb1eb19169b4ac92.8b9f2ccf4aa9136283e8fde2580ae37d
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555588e3e0.STACK.1c051398e.CODE.1.ADDR.0x7fffff7fe5a8.INSTR.mov____%rdi,-0x12b8(%rbp).rb
SHA1: 16a899c7215310f9bd5b7f783eb4dd858018990b
Classification: EXPLOITABLE
Hash: 5b28293995be1cb3cb1eb19169b4ac92.8b9f2ccf4aa9136283e8fde2580ae37d
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555588e3e0.STACK.1c051398e.CODE.1.ADDR.0x7fffff7fe5a8.INSTR.mov____%rdi,-0x12b8(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff7fff70 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ffce0 rsp=0x00007fffff7fe9f0
 r8=0x000060080017b3e9  r9=0x00006092001250f0 r10=0x0000000099990061 r11=0x00007ffff3e191c8
r12=0x000060080017b3e9 r13=0x00007fffffffe560 r14=0x000060200001f9e0 r15=0x00007ffff3efebd0
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 7467b1a380bf243b820e0876f0f7e925.a643212ab4284375647815a29daf3460
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.7ffff4e6040c.STACK.17ec0dd906.CODE.1.ADDR.0x7fffff7fee18.INSTR.callq__0xffffffffffffd114.rb
SHA1: 58e282046ffaccfacde43accef7eaa1eb04a7aef
Classification: EXPLOITABLE
Hash: 7467b1a380bf243b820e0876f0f7e925.a643212ab4284375647815a29daf3460
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.7ffff4e6040c.STACK.17ec0dd906.CODE.1.ADDR.0x7fffff7fee18.INSTR.callq__0xffffffffffffd114.rb
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
   rb_proc_call              @ 0x00005555556f14d3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   generator_each            @ 0x000055555598bbb0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_cfunc_with_frame @ 0x00005555558aba86: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_cfunc            @ 0x00005555558abc3d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0_body             @ 0x00005555558ac036: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff800200 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7fff70 rsp=0x00007fffff7fec80
 r8=0x00006008001756a9  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e27738
r12=0x0000000000000bc1 r13=0x000060920032f008 r14=0x0000602a00018588 r15=0x00007ffff3ee4050
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: 913c114bbb9fee9cb8d9d27dba4a55fa.49976739cd7282c9a1f35c22aeedb33f
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555593407f.STACK.23d82ff80.CODE.1.ADDR.0x7fffff7fe868.INSTR.mov____%rdi,-0x7e8(%rbp).rb
SHA1: 6bd3b853d61df007a2071323791d3304c9fd04d3
Classification: EXPLOITABLE
Hash: 913c114bbb9fee9cb8d9d27dba4a55fa.49976739cd7282c9a1f35c22aeedb33f
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555593407f.STACK.23d82ff80.CODE.1.ADDR.0x7fffff7fe868.INSTR.mov____%rdi,-0x7e8(%rbp).rb
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
rax=0x0000609200470048 rbx=0x000010007fef7eae rcx=0x0000000000000000 rdx=0x0000609200340290
rsi=0x00007fffff7ff5d0 rdi=0x0000609200470048 rbp=0x00007fffff7ff4e0 rsp=0x00007fffff7fecd0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.5e7d42fed6d7fbc1f6c865b51346c397
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.15b43ccf.CODE.1.ADDR.0x7fffff7fe568.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: 85c20eb4f45922960e4fa98f14bcdffc4dddd4fa
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.5e7d42fed6d7fbc1f6c865b51346c397
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.15b43ccf.CODE.1.ADDR.0x7fffff7fe568.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_call_init          @ 0x00005555555dea17: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff4a8 rdx=0x0000000000000008
rsi=0x00007fffff7ff4a8 rdi=0x0000609200604920 rbp=0x00007fffff7ff470 rsp=0x00007fffff7fec30
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000003 r11=0x00007ffff3e555b8
r12=0x00007fffff7ff4a8 r13=0x0000609200604920 r14=0x0000602a00015c30 r15=0x00007ffff3ec5240
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 6) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.98d6d51212a6ab862b95254c39770077
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.c1c6784a.CODE.1.ADDR.0x7fffff7fe2b8.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: babd6397a68534848032390d979c38396e86b11d
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.98d6d51212a6ab862b95254c39770077
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.c1c6784a.CODE.1.ADDR.0x7fffff7fe2b8.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff1b8 rdx=0x0000000000000008
rsi=0x00007fffff7ff1b8 rdi=0x00006092003f7498 rbp=0x00007fffff7ff180 rsp=0x00007fffff7fe940
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000022220021 r11=0x00007ffff3e272a0
r12=0x00007fffff7ff1b8 r13=0x00006092003f7498 r14=0x00006036003dae18 r15=0x00007ffff3eff8c0
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: f72d9a2491da4f69f1d5fa3a4b101e65.840d74317b797524f1911b3478eab631
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555576d36f.STACK.166f352afe.CODE.1.ADDR.0x7fffff7fefd8.INSTR.callq__0x00000000000b2ea8.rb
SHA1: 620c9e77bf1404abc4d493d82d6bdf52a9cd0ec9
Classification: EXPLOITABLE
Hash: f72d9a2491da4f69f1d5fa3a4b101e65.840d74317b797524f1911b3478eab631
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555576d36f.STACK.166f352afe.CODE.1.ADDR.0x7fffff7fefd8.INSTR.callq__0x00000000000b2ea8.rb
Faulting Frame:
   rb_enc_get_index @ 0x00005555559750bb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x00005555559750a9: je 0x5555559750c8 <rb_enc_get_index+231>
   0x00005555559750ab: cmp eax,0xc
   0x00005555559750ae: je 0x55555597516c <rb_enc_get_index+395>
   0x00005555559750b4: mov rax,QWORD PTR [rbp-0x18]
   0x00005555559750b8: mov rdi,rax
=> 0x00005555559750bb: call 0x555555974f6d <enc_get_index_str>
   0x00005555559750c0: mov DWORD PTR [rbp-0xc],eax
   0x00005555559750c3: jmp 0x5555559751e8 <rb_enc_get_index+519>
   0x00005555559750c8: mov rax,QWORD PTR [rip+0x40a551] # 0x555555d7f620 <rb_intern_id_cache.11207>
   0x00005555559750cf: test rax,rax
Stack Head (1000 entries):
   rb_enc_get_index          @ 0x00005555559750bb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_enc_get                @ 0x0000555555975762: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_replace_shared_withou @ 0x00005555557d174b: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
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
Registers:
rax=0x00006092002e7758 rbx=0x000010007fef7e3e rcx=0x0000000000000000 rdx=0x00006092002e7758
rsi=0x00006092002e7758 rdi=0x00006092002e7758 rbp=0x00007fffff7ff020 rsp=0x00007fffff7ff000
 r8=0x0000555555885095  r9=0x00006092000bbb78 r10=0x0000000000000002 r11=0x00007ffff3e51d50
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffe560 r14=0x000060440001f000 r15=0x00007ffff3ed28f0
rip=0x00005555559750bb efl=0x0000000000010297  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: beb32a52d2f421a6868c27645fbf658f.3de3913d8f44824a8a1c15036c5c49be
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555587823a.STACK.5d0aca2a.CODE.1.ADDR.0x7fffff7feff8.INSTR.mov____%rdi,-0x8(%rbp).rb
SHA1: 677c027d1ab1d1cbe2b61ac426dfcd4cf9d59b9f
Classification: EXPLOITABLE
Hash: beb32a52d2f421a6868c27645fbf658f.3de3913d8f44824a8a1c15036c5c49be
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555587823a.STACK.5d0aca2a.CODE.1.ADDR.0x7fffff7feff8.INSTR.mov____%rdi,-0x8(%rbp).rb
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
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff398 rdx=0x0000000000000008
rsi=0x00007fffff7ff398 rdi=0x00006092002b09e0 rbp=0x00007fffff7ff360 rsp=0x00007fffff7feb20
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000000 r11=0x00007ffff3e2e4c8
r12=0x00007fffff7ff398 r13=0x00006092002b09e0 r14=0x0000602600015b98 r15=0x00007ffff3eeb2b0
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 2) - Hash: c408db942c61c325240d0b10e7f1d97d.61b87a4a3b925e74a08a3c26aa39e2b8
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555588cf61.STACK.16dd6beec.CODE.1.ADDR.0x7fffff7fef48.INSTR.mov____%rdi,-0x278(%rbp).rb
SHA1: ec5141de3718518e8ad6df11c167096518b4ea92
Classification: EXPLOITABLE
Hash: c408db942c61c325240d0b10e7f1d97d.61b87a4a3b925e74a08a3c26aa39e2b8
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555588cf61.STACK.16dd6beec.CODE.1.ADDR.0x7fffff7fef48.INSTR.mov____%rdi,-0x278(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff7fff20 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ffc90 rsp=0x00007fffff7fe9a0
 r8=0x00007ffff3e35e31  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e35e90
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffe560 r14=0x0000602a00018918 r15=0x00007ffff3ed8e30
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: fc4b95b59953570db4cc9aedad91b48f.55ea2af9e0fecc322391e2ea5410d515
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556410f9.STACK.2fa4dddac.CODE.1.ADDR.0x7fffff7fedf0.INSTR.mov____%ecx,-0x2a0(%rbp).rb
SHA1: 4ff65910ed806a50bdb4e236c8792d707406a20a
Classification: EXPLOITABLE
Hash: fc4b95b59953570db4cc9aedad91b48f.55ea2af9e0fecc322391e2ea5410d515
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556410f9.STACK.2fa4dddac.CODE.1.ADDR.0x7fffff7fedf0.INSTR.mov____%ecx,-0x2a0(%rbp).rb
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
rax=0x00006092005e1d50 rbx=0x000010007fef7eac rcx=0x0000000000000000 rdx=0x00006092001098a0
rsi=0x00007fffff7ff740 rdi=0x00006092005e1d50 rbp=0x00007fffff7ff020 rsp=0x00007fffff7fe810
 r8=0x00007fffff8008d0  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000000000000001 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.e070ddbadc1d82571c37412fd9ee22d4
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555588e3e0.STACK.1c5a46ec9.CODE.1.ADDR.0x7fffff7fefe8.INSTR.mov____%rdi,-0x12b8(%rbp).rb
SHA1: fb0efbb1e4d378a0d44608edf5c68f58b02f81d8
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.e070ddbadc1d82571c37412fd9ee22d4
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555588e3e0.STACK.1c5a46ec9.CODE.1.ADDR.0x7fffff7fefe8.INSTR.mov____%rdi,-0x12b8(%rbp).rb
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
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff248 rdx=0x0000000000000008
rsi=0x00007fffff7ff248 rdi=0x000060920038a9d8 rbp=0x00007fffff7ff210 rsp=0x00007fffff7fe9d0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000022220021 r11=0x00007ffff3e271b0
r12=0x00007fffff7ff248 r13=0x000060920038a9d8 r14=0x000060300001cb98 r15=0x00007ffff3eff950
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: aef0b32d651f76dc41935a95624d90bd.15d054814ed753ff40a6f019d76cf4a0
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556410f9.STACK.16f7691957.CODE.1.ADDR.0x7fffff7fef70.INSTR.mov____%ecx,-0x2a0(%rbp).rb
SHA1: 20c7e9ea5f0993020ff55091b5d2dc16e3a7563c
Classification: EXPLOITABLE
Hash: aef0b32d651f76dc41935a95624d90bd.15d054814ed753ff40a6f019d76cf4a0
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556410f9.STACK.16f7691957.CODE.1.ADDR.0x7fffff7fef70.INSTR.mov____%ecx,-0x2a0(%rbp).rb
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
rax=0x00006092003d3ef0 rbx=0x000010007fef7eac rcx=0x0000000000000000 rdx=0x0000609200342838
rsi=0x00007fffff7ff740 rdi=0x00006092003d3ef0 rbp=0x00007fffff7ff020 rsp=0x00007fffff7fe810
 r8=0x00007fffff8000b0  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000000000000001 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 43a9f01eaad4a3ef062b7797cfd66b0a.93194330db95797fbf82863c8c39105a
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555555ed3ff.STACK.0.CODE.1.ADDR.0x7fffff7fee78.INSTR.mov____%rax,-0x378(%rbp).rb
SHA1: 094f0e6b7b1c634f2d07e144c56d813123bb9c3f
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 43a9f01eaad4a3ef062b7797cfd66b0a.93194330db95797fbf82863c8c39105a
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555555ed3ff.STACK.0.CODE.1.ADDR.0x7fffff7fee78.INSTR.mov____%rax,-0x378(%rbp).rb
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
rax=0x0000000000000058 rbx=0x000010007ff63692 rcx=0x0000000000000003 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x0000000000000058 rbp=0x00007fffffb5b3f0 rsp=0x00007fffffb5b3d0
 r8=0x00000000fffffff0  r9=0x00007fffffffb4e0 r10=0x00007ffff72ce700 r11=0x00007ffff42ac550
r12=0x00007ffff312974e r13=0x0000609200192420 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555577c14a efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: e72798fb212ee1d374758dc217a7d25d.ab5089e1aab4db8d01bb89ec54f84217
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.555555860239.STACK.f6e527f9.CODE.1.ADDR.0x7fffff7fedf8.INSTR.mov____%rdi,-0x1288(%rbp).rb
SHA1: b837623c73a081aaac712f40d8f146940df8c9f0
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.ab5089e1aab4db8d01bb89ec54f84217
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.555555860239.STACK.f6e527f9.CODE.1.ADDR.0x7fffff7fedf8.INSTR.mov____%rdi,-0x1288(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff800240 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7fffb0 rsp=0x00007fffff7fecc0
 r8=0x0000000000000000  r9=0x0000609200231570 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffe560 r14=0x000060300001c160 r15=0x00007ffff3ee17d0
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: e72798fb212ee1d374758dc217a7d25d.6aa1561ef7b75dece09358356976a94b
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.555555860239.STACK.4f916880.CODE.1.ADDR.0x7fffff7fee28.INSTR.mov____%rdi,-0x1288(%rbp).rb
SHA1: b89afb5823053579e87c5976093d54ec7e2d192c
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.6aa1561ef7b75dece09358356976a94b
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.555555860239.STACK.4f916880.CODE.1.ADDR.0x7fffff7fee28.INSTR.mov____%rdi,-0x1288(%rbp).rb
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
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffe560 r14=0x0000604600018fc0 r15=0x00007ffff3f0e1d0
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 28) - Hash: c408db942c61c325240d0b10e7f1d97d.c2d5e615d3d86fbc2e9fed7ba297e501
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c00b6.STACK.169839cc9f.CODE.1.ADDR.0x7fffff7feff8.INSTR.mov____%rsi,-0x20(%rbp).rb
SHA1: 689a661cd017bd47070cabd483472c6c513e69c0
Classification: EXPLOITABLE
Hash: c408db942c61c325240d0b10e7f1d97d.c2d5e615d3d86fbc2e9fed7ba297e501
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c00b6.STACK.169839cc9f.CODE.1.ADDR.0x7fffff7feff8.INSTR.mov____%rsi,-0x20(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff7ffdc0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ffb30 rsp=0x00007fffff7fe840
 r8=0x00007ffff3e2f2e9  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e2f318
r12=0x000060920043e8e0 r13=0x00007fffffffe560 r14=0x000060200001c9c8 r15=0x00007ffff3ee9870
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 5) - Hash: aef0b32d651f76dc41935a95624d90bd.0ca070cc9dd8cd18a40bb370e95e4b36
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555593407f.STACK.86edc3d7.CODE.1.ADDR.0x7fffff7fef38.INSTR.mov____%rdi,-0x7e8(%rbp).rb
SHA1: 46f09f18af83dbe325752781315ea186eddcfd7c
Classification: EXPLOITABLE
Hash: aef0b32d651f76dc41935a95624d90bd.0ca070cc9dd8cd18a40bb370e95e4b36
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555593407f.STACK.86edc3d7.CODE.1.ADDR.0x7fffff7fef38.INSTR.mov____%rdi,-0x7e8(%rbp).rb
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
Registers:
rax=0x000060920024f6b0 rbx=0x000010007fef7f1a rcx=0x0000000000000000 rdx=0x0000609200158428
rsi=0x00007fffff7ffab0 rdi=0x000060920024f6b0 rbp=0x00007fffff7ff390 rsp=0x00007fffff7feb80
 r8=0x00007fffff800420  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: 6f5a256db5277175a2db01f681eb27e0.b19af1a3d5b27c1f84714a20df8f3a5a
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556d1c94.STACK.17045f8e20.CODE.1.ADDR.0x7fffff7feed8.INSTR.mov____%rsi,0x18(%rsp).rb
SHA1: fac11b403bcab2d54902d11bdaa299e515b2495e
Classification: EXPLOITABLE
Hash: 6f5a256db5277175a2db01f681eb27e0.b19af1a3d5b27c1f84714a20df8f3a5a
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556d1c94.STACK.17045f8e20.CODE.1.ADDR.0x7fffff7feed8.INSTR.mov____%rsi,0x18(%rsp).rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   vm_call_opt_call          @ 0x0000555555888ea9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589e21d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
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
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff530 rdx=0x0000000000000008
rsi=0x00007ffff3e1afe0 rdi=0x00007fffff7ff530 rbp=0x00007fffff7ff520 rsp=0x00007fffff7fece0
 r8=0x0000000000000000  r9=0x0000000000000007 r10=0x0000000099990000 r11=0x00007ffff3e1afc0
r12=0x00007ffff3e1afe0 r13=0x00007fffff7ff530 r14=0x0000601c00037298 r15=0x00007ffff3eff920
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: beb32a52d2f421a6868c27645fbf658f.458f5b70dd5311097ba743d628ab7ffb
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.15ba2f39a8.CODE.1.ADDR.0x7fffff7fe838.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: 6c25fff25527e2131fcb9f00a545fc372b7b8b03
Classification: EXPLOITABLE
Hash: beb32a52d2f421a6868c27645fbf658f.458f5b70dd5311097ba743d628ab7ffb
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.15ba2f39a8.CODE.1.ADDR.0x7fffff7fe838.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
   invoke_bmethod            @ 0x00005555558b778c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ae8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_bmethod         @ 0x00005555558b83df: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff718 rdx=0x0000000000000008
rsi=0x00007fffff7ff718 rdi=0x0000609200457cf8 rbp=0x00007fffff7ff6e0 rsp=0x00007fffff7feea0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000099990061 r11=0x00007ffff3e1ba98
r12=0x00007fffff7ff718 r13=0x0000609200457cf8 r14=0x000060240000d1a0 r15=0x00007ffff3efebd0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 3) - Hash: df6c7c51d3333cd3033e955609f5fd57.31ff6faa809d701b95b22b210ab5958b
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.555555859357.STACK.10a5a9f9e.CODE.2.ADDR.0x7fffefb29fb8.INSTR.mov____%rdi,-0xd8(%rbp).rb
SHA1: 6f9b146a525c44e4de9b1805ab16b4f04ea30d4b
Classification: EXPLOITABLE
Hash: df6c7c51d3333cd3033e955609f5fd57.31ff6faa809d701b95b22b210ab5958b
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.555555859357.STACK.10a5a9f9e.CODE.2.ADDR.0x7fffefb29fb8.INSTR.mov____%rdi,-0xd8(%rbp).rb
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
rax=0x0000604200036980 rbx=0x000010007da7fb5e rcx=0x0000600600063f40 rdx=0x00007fffed43dbd0
rsi=0x00007fffecf2efc0 rdi=0x0000604200036980 rbp=0x00007fffed43e2e0 rsp=0x00007fffed43cff0
 r8=0x00006092002a5420  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007fffece348b0
r12=0x0000000000000001 r13=0x000060260004fbe0 r14=0x000060200001cc98 r15=0x00007fffecf2efc0
rip=0x00005555558940cd efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 913c114bbb9fee9cb8d9d27dba4a55fa.e76040766f9486beec47e6648bc4fb57
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556410f9.STACK.154bdc90b3.CODE.1.ADDR.0x7fffff7fefa0.INSTR.mov____%ecx,-0x2a0(%rbp).rb
SHA1: 123faab61175be00089c99fe45da4407d23754d0
Classification: EXPLOITABLE
Hash: 913c114bbb9fee9cb8d9d27dba4a55fa.e76040766f9486beec47e6648bc4fb57
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556410f9.STACK.154bdc90b3.CODE.1.ADDR.0x7fffff7fefa0.INSTR.mov____%ecx,-0x2a0(%rbp).rb
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
Registers:
rax=0x00006092003acdf0 rbx=0x000010007fef7e70 rcx=0x0000000000000000 rdx=0x000060920000fbc0
rsi=0x00007fffff7ff3e0 rdi=0x00006092003acdf0 rbp=0x00007fffff7ff2f0 rsp=0x00007fffff7feae0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000000000000003 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: beb32a52d2f421a6868c27645fbf658f.c2ef50d4564575a0258b4a9cf597cebc
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.1551522747.CODE.1.ADDR.0x7fffff7fef68.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: 5a1b5468b4433fcca7c82a5b5b88cc7d33d1928e
Classification: EXPLOITABLE
Hash: beb32a52d2f421a6868c27645fbf658f.c2ef50d4564575a0258b4a9cf597cebc
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.1551522747.CODE.1.ADDR.0x7fffff7fef68.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff268 rdx=0x0000000000000008
rsi=0x00007fffff7ff268 rdi=0x00006092001f1248 rbp=0x00007fffff7ff230 rsp=0x00007fffff7fe9f0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007fffff7ff268 r13=0x00006092001f1248 r14=0x000060220005b1a8 r15=0x00007ffff3eee430
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 473216830acb73526fee3beebb52be41.6c6e7593c25e595e6cedf1f4b5b12bc6
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555555ab342.STACK.16c89ce7f9.CODE.1.ADDR.0x8.INSTR.mov____0x8(%rax),%r13.rb
SHA1: 6d04b1e30f317ce33a79d08162aee2ef28274c43
Classification: EXPLOITABLE
Hash: 473216830acb73526fee3beebb52be41.6c6e7593c25e595e6cedf1f4b5b12bc6
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555555ab342.STACK.16c89ce7f9.CODE.1.ADDR.0x8.INSTR.mov____0x8(%rax),%r13.rb
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
rax=0x0000000000000000 rbx=0x000010007e20707e rcx=0x0000000000000000 rdx=0x0000000000000008
rsi=0x0000000000000000 rdi=0x00006022001b9dc0 rbp=0x00007ffff1078390 rsp=0x00007ffff1078350
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x00007ffff4e6064b r11=0x0000000000000246
r12=0x0000000000000008 r13=0x000060260004bf60 r14=0x0000602600018380 r15=0x00007fffefb91770
rip=0x000055555562a71a efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: d9bd850e912c9090f649aee9d176ffb6.4b8e63e4e448793ef3f5e045ad09896a
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.15b43ccf.CODE.1.ADDR.0x7fffff7feaa8.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: 6a85397d30f9b3704603ea703ab21673c1320ce0
Classification: UNKNOWN
Hash: d9bd850e912c9090f649aee9d176ffb6.4b8e63e4e448793ef3f5e045ad09896a
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.15b43ccf.CODE.1.ADDR.0x7fffff7feaa8.INSTR.mov____%rdi,-0xe68(%rbp).rb
Faulting Frame:
   None @ 0x00007ffff4e59312: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e59312: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
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
rax=0x00007ffff52cdf40 rbx=0x000010007fef7e28 rcx=0x00007fffff7ff058 rdx=0x0000000000000008
rsi=0x00007fffff7ff058 rdi=0x00006092003906f8 rbp=0x00007fffff7ff020 rsp=0x00007fffff7ff000
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000000 r11=0x00007ffff3e2f488
r12=0x00007fffff7ff058 r13=0x00006092003906f8 r14=0x0000602a00016368 r15=0x00007ffff3ee96c0
rip=0x00007ffff4e59312 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 1) - Hash: 567354eeb78ef1eff9d1986b8422f222.a791025f7354862c1ad4bb6e39348662
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c0ff1.STACK.28b0273b8.CODE.2.ADDR.0x7ffff5f7fff8.INSTR.mov____%rdi,-0x18(%rbp).rb
SHA1: 63caec858cb705ceafd9a9ea856556c5dc58679b
Classification: EXPLOITABLE
Hash: 567354eeb78ef1eff9d1986b8422f222.a791025f7354862c1ad4bb6e39348662
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c0ff1.STACK.28b0273b8.CODE.2.ADDR.0x7ffff5f7fff8.INSTR.mov____%rdi,-0x18(%rbp).rb
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
(1 of 1) - Hash: 77a744ac0b056d416df542bd4c3259b6.ac314f11260ab8b428006fba5cb66cdb
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.7ffff4e5931d.STACK.2e3baeac8.CODE.1.ADDR.0x7fffff7fec88.INSTR.callq__0x0000000000004203.rb
SHA1: 7bd802db06a414525fd616306c114bb39cdc8083
Classification: EXPLOITABLE
Hash: 77a744ac0b056d416df542bd4c3259b6.ac314f11260ab8b428006fba5cb66cdb
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.7ffff4e5931d.STACK.2e3baeac8.CODE.1.ADDR.0x7fffff7fec88.INSTR.callq__0x0000000000004203.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   clear_opt_map_info        @ 0x00005555557508cb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   clear_node_opt_info       @ 0x00005555557513a3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751d50: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
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
   optimize_node_left        @ 0x0000555555753a82: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000120 rcx=0x0000000000000007 rdx=0x0000000000000120
rsi=0x0000555555a10740 rdi=0x00007fffff7ffcf8 rbp=0x00007fffff7ff4b0 rsp=0x00007fffff7fec70
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff72ce700 r11=0x0000600c00840c20
r12=0x0000555555a10740 r13=0x00007fffff7ffcf8 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: beb32a52d2f421a6868c27645fbf658f.de9ccc857e309debfab59860cdcc6ad8
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.15b43ccf.CODE.1.ADDR.0x7fffff7fe898.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: 522b345b5afe83a31416ecedf26adc615e915fbb
Classification: EXPLOITABLE
Hash: beb32a52d2f421a6868c27645fbf658f.de9ccc857e309debfab59860cdcc6ad8
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.15b43ccf.CODE.1.ADDR.0x7fffff7fe898.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff148 rdx=0x0000000000000008
rsi=0x00007fffff7ff148 rdi=0x00006092004c3408 rbp=0x00007fffff7ff110 rsp=0x00007fffff7fe8d0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000000 r11=0x00007ffff3e2ddc8
r12=0x00007fffff7ff148 r13=0x00006092004c3408 r14=0x0000602600029bf8 r15=0x00007ffff3eeba90
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 2) - Hash: 7467b1a380bf243b820e0876f0f7e925.812f1011c00fc22d5ce04cc406036a71
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555588e3e0.STACK.1d44eb04c.CODE.1.ADDR.0x7fffff7fe258.INSTR.mov____%rdi,-0x12b8(%rbp).rb
SHA1: bec975675b7a799c3f62b8e85093ef0c40496ae4
Classification: EXPLOITABLE
Hash: 7467b1a380bf243b820e0876f0f7e925.812f1011c00fc22d5ce04cc406036a71
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555588e3e0.STACK.1d44eb04c.CODE.1.ADDR.0x7fffff7fe258.INSTR.mov____%rdi,-0x12b8(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff7ffc30 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff9a0 rsp=0x00007fffff7fe6b0
 r8=0x0000600e00166481  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e23ac8
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffe560 r14=0x000060200001fb98 r15=0x00007ffff3ef5090
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: aef0b32d651f76dc41935a95624d90bd.deac0f9a0f522108222fcc1442ee76f1
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555558182de.STACK.23db4b1ad.CODE.1.ADDR.0x7fffff7feeb8.INSTR.mov____%rdi,-0x8c8(%rbp).rb
SHA1: 7727f254b86465171599b344cba60d1b36caa564
Classification: EXPLOITABLE
Hash: aef0b32d651f76dc41935a95624d90bd.deac0f9a0f522108222fcc1442ee76f1
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555558182de.STACK.23db4b1ad.CODE.1.ADDR.0x7fffff7feeb8.INSTR.mov____%rdi,-0x8c8(%rbp).rb
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
Registers:
rax=0x00006092001bf420 rbx=0x000010007fef7f50 rcx=0x0000000000000000 rdx=0x000060920028d460
rsi=0x00007fffff7ffc60 rdi=0x00006092001bf420 rbp=0x00007fffff7ff540 rsp=0x00007fffff7fed30
 r8=0x00007fffff8005d0  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 43a9f01eaad4a3ef062b7797cfd66b0a.1ef3640ef331d89c796a1ad5063d7f12
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555555ed3ff.STACK.100f025dd.CODE.1.ADDR.0x7fffff7fee78.INSTR.mov____%rax,-0x378(%rbp).rb
SHA1: 2369e64626a2156633929d7a6c7d149ffb60044b
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 43a9f01eaad4a3ef062b7797cfd66b0a.1ef3640ef331d89c796a1ad5063d7f12
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555555ed3ff.STACK.100f025dd.CODE.1.ADDR.0x7fffff7fee78.INSTR.mov____%rax,-0x378(%rbp).rb
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
rax=0x0000000000000058 rbx=0x000010007ff63690 rcx=0x0000000000000003 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x0000000000000058 rbp=0x00007fffffb5b3e0 rsp=0x00007fffffb5b3c0
 r8=0x00000000fffffff0  r9=0x00007fffffffb4d0 r10=0x00007ffff72ce700 r11=0x0000600c001c9160
r12=0x00007ffff30a33a9 r13=0x0000609200192420 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555577c14a efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: fa791f8a266b5fb68c716fbad0850c34.fea00266d065bb863e2e5955165f7b60
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555558182de.STACK.338014e24.CODE.1.ADDR.0x7fffff7feef8.INSTR.mov____%rdi,-0x8c8(%rbp).rb
SHA1: 187fd06a04d3b879be9a99bd5f788d2bd1c24703
Classification: EXPLOITABLE
Hash: fa791f8a266b5fb68c716fbad0850c34.fea00266d065bb863e2e5955165f7b60
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555558182de.STACK.338014e24.CODE.1.ADDR.0x7fffff7feef8.INSTR.mov____%rdi,-0x8c8(%rbp).rb
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
Registers:
rax=0x000060920020d760 rbx=0x000010007fef7f04 rcx=0x0000000000000000 rdx=0x0000609200029548
rsi=0x00007fffff7ff880 rdi=0x000060920020d760 rbp=0x00007fffff7ff790 rsp=0x00007fffff7fef80
 r8=0x00007fffff800000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000000000000001 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: b64d84042e679fe86453e36607444046.37d2c742897edb2f39e96432db9b4885
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.7ffff4e5931d.STACK.150969b145.CODE.1.ADDR.0x7fffff7fed98.INSTR.callq__0x0000000000004203.rb
SHA1: 3dfcd7889bc2c1916a689bce03816319e460fedb
Classification: EXPLOITABLE
Hash: b64d84042e679fe86453e36607444046.37d2c742897edb2f39e96432db9b4885
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.7ffff4e5931d.STACK.150969b145.CODE.1.ADDR.0x7fffff7fed98.INSTR.callq__0x0000000000004203.rb
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
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000120 rcx=0x0000000000000007 rdx=0x0000000000000120
rsi=0x0000555555a10740 rdi=0x00007fffff7ffcf8 rbp=0x00007fffff7ff4b0 rsp=0x00007fffff7fec70
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff72ce700 r11=0x0000600c00491360
r12=0x0000555555a10740 r13=0x00007fffff7ffcf8 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: c408db942c61c325240d0b10e7f1d97d.dbe3ebddb2a20b0a9e63d4564d83bbf0
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.15b43ccf.CODE.1.ADDR.0x7fffff7fe508.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: 1fc584a9ae0afb1a0cd3f52279a17b6b55a68933
Classification: EXPLOITABLE
Hash: c408db942c61c325240d0b10e7f1d97d.dbe3ebddb2a20b0a9e63d4564d83bbf0
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.15b43ccf.CODE.1.ADDR.0x7fffff7fe508.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff7ffc40 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff9b0 rsp=0x00007fffff7fe6c0
 r8=0x00007ffff3e5b4e1  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e5b510
r12=0x00007ffff3eb2640 r13=0x00007fffffffe560 r14=0x000060400001f308 r15=0x00007ffff3eb2640
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 67) - Hash: 0dc18a7fae5a073273eaef367254a50a.f48ee6469731748bd60b2c0cb7f97b82
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555593407f.STACK.7d6c9420.CODE.1.ADDR.0x7fffff7fed88.INSTR.mov____%rdi,-0x7e8(%rbp).rb
SHA1: 9fbbf63c078db59bb407b578ad315afde22c9d9b
Classification: EXPLOITABLE
Hash: 0dc18a7fae5a073273eaef367254a50a.f48ee6469731748bd60b2c0cb7f97b82
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555593407f.STACK.7d6c9420.CODE.1.ADDR.0x7fffff7fed88.INSTR.mov____%rdi,-0x7e8(%rbp).rb
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
rax=0x000060920013d100 rbx=0x000010007fef7e22 rcx=0x0000000000000000 rdx=0x0000609200193f00
rsi=0x00007fffff7ff170 rdi=0x000060920013d100 rbp=0x00007fffff7ff080 rsp=0x00007fffff7fe870
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 5) - Hash: 17946158b881e4b871d966dbd24a2d01.99e095c480df238f0365b9f01c241b95
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555571ed3c.STACK.0.CODE.1.ADDR.0x7fffff7feb18.INSTR.mov____%rdi,-0x5a8(%rbp).rb
SHA1: 374bcd86aff2866b23ab2fc220e1766d50b6a806
Classification: EXPLOITABLE
Hash: 17946158b881e4b871d966dbd24a2d01.99e095c480df238f0365b9f01c241b95
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555571ed3c.STACK.0.CODE.1.ADDR.0x7fffff7feb18.INSTR.mov____%rdi,-0x5a8(%rbp).rb
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
rax=0x000060920002beb0 rbx=0x000010007fef7f66 rcx=0x0000000000000000 rdx=0x0000609200153e00
rsi=0x00007fffff7ffd10 rdi=0x000060920002beb0 rbp=0x00007fffff7ff5f0 rsp=0x00007fffff7fede0
 r8=0x00006036002f6f00  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffe570 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: e72798fb212ee1d374758dc217a7d25d.dfcfde3fcf6c5874d5e43c677315460c
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.3d8de3a20.CODE.1.ADDR.0x7fffff7fef08.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: 673ac0d5be9d7d6da71038a8500fa342ab4fd780
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.dfcfde3fcf6c5874d5e43c677315460c
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.3d8de3a20.CODE.1.ADDR.0x7fffff7fef08.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff7ffc30 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff9a0 rsp=0x00007fffff7fe6b0
 r8=0x0000000000000000  r9=0x00006092001a1768 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffe560 r14=0x0000602800012ba8 r15=0x00007ffff3f00730
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: cd8703ade1e444a19c95a698c799bb45.6b6fc67749314852a60de176b1dca672
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556d111c.STACK.148d5331e0.CODE.1.ADDR.0x7fffff7fefc8.INSTR.callq__0xffffffffffffa3e4.rb
SHA1: 4c4f2723900c21cb95838f7c405fc37417b2eaa2
Classification: EXPLOITABLE
Hash: cd8703ade1e444a19c95a698c799bb45.6b6fc67749314852a60de176b1dca672
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556d111c.STACK.148d5331e0.CODE.1.ADDR.0x7fffff7fefc8.INSTR.callq__0xffffffffffffa3e4.rb
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
   vm_call0_body             @ 0x00005555558ac012: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call0                  @ 0x00005555558ab61c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call0                  @ 0x00005555558acf70: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_call                   @ 0x00005555558ae2b9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_call_init          @ 0x00005555555dea17: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_class_new_instance     @ 0x000055555569dac9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff668 rdx=0x0000000000000008
rsi=0x00007fffff7ff668 rdi=0x000060920030b840 rbp=0x00007fffff7ff630 rsp=0x00007fffff7fedf0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000001 r11=0x000000000000001e
r12=0x00007fffff7ff668 r13=0x000060920030b840 r14=0x000060300001dc50 r15=0x00007ffff3ef15b0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: b296dd4ac61904e02db2a9055048f4b4.a440cf2c2d945012fdabe05fa6b142cb
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.3a960aa59.CODE.1.ADDR.0x7fffff7fecc8.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: 1b68b983e3caf7571e4a6cf3ec7ebc7b2ea56b55
Classification: EXPLOITABLE
Hash: b296dd4ac61904e02db2a9055048f4b4.a440cf2c2d945012fdabe05fa6b142cb
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.3a960aa59.CODE.1.ADDR.0x7fffff7fecc8.INSTR.mov____%rdi,-0xe68(%rbp).rb
Faulting Frame:
   vm_call_cfunc_with_frame @ 0x0000555555886982: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555886976: push rbp
   0x0000555555886977: mov rbp,rsp
   0x000055555588697a: push rbx
   0x000055555588697b: sub rsp,0x118
=> 0x0000555555886982: mov QWORD PTR [rbp-0xd8],rdi
   0x0000555555886989: mov QWORD PTR [rbp-0xe0],rsi
   0x0000555555886990: mov QWORD PTR [rbp-0xe8],rdx
   0x0000555555886997: mov QWORD PTR [rbp-0xf0],rcx
   0x000055555588699e: mov QWORD PTR [rbp-0xf8],r8
Stack Head (1000 entries):
   vm_call_cfunc_with_frame  @ 0x0000555555886982: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
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
rax=0x000060420001ef80 rbx=0x000010007fef7f74 rcx=0x000060080006d510 rdx=0x00007fffff7ffcc0
rsi=0x00007ffff3ef1880 rdi=0x000060420001ef80 rbp=0x00007fffff7ff050 rsp=0x00007fffff7fef30
 r8=0x00006018000271c0  r9=0x0000609200193690 r10=0x0000000000000001 r11=0x000000000000001e
r12=0x0000603400004180 r13=0x00007ffff3e0e840 r14=0x0000602e00018300 r15=0x00007ffff3ef1880
rip=0x0000555555886982 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.8826143742a10be0dea929bf9f9e8569
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556d1bc1.STACK.157904df96.CODE.1.ADDR.0x7fffff7feff8.INSTR.callq__0xffffffffffff716f.rb
SHA1: 0bf134e048e9da220fd37941b319ea8c03c34294
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.8826143742a10be0dea929bf9f9e8569
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556d1bc1.STACK.157904df96.CODE.1.ADDR.0x7fffff7feff8.INSTR.callq__0xffffffffffff716f.rb
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
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff378 rdx=0x0000000000000008
rsi=0x00007fffff7ff378 rdi=0x0000609200302e48 rbp=0x00007fffff7ff340 rsp=0x00007fffff7feb00
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000022220021 r11=0x00007ffff3e29788
r12=0x00007fffff7ff378 r13=0x0000609200302e48 r14=0x0000603c0001c870 r15=0x00007ffff3eff9e0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 17946158b881e4b871d966dbd24a2d01.0af0549717951be4457721488995caaf
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555593407f.STACK.86edc3d7.CODE.1.ADDR.0x7fffff7fe868.INSTR.mov____%rdi,-0x7e8(%rbp).rb
SHA1: 13c75da4e72da5bd88ed277d6be7d77a499d549e
Classification: EXPLOITABLE
Hash: 17946158b881e4b871d966dbd24a2d01.0af0549717951be4457721488995caaf
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555593407f.STACK.86edc3d7.CODE.1.ADDR.0x7fffff7fe868.INSTR.mov____%rdi,-0x7e8(%rbp).rb
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
Registers:
rax=0x00006092001e9c70 rbx=0x000010007fef7f44 rcx=0x0000000000000000 rdx=0x000060920015b1f0
rsi=0x00007fffff7ffc00 rdi=0x00006092001e9c70 rbp=0x00007fffff7ff4e0 rsp=0x00007fffff7fecd0
 r8=0x00007fffff8025f0  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 3046ee424a61e2efc99938a75aa77492.dd3610ab8e70bb6afc5b570663fce1e4
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555558182de.STACK.154b45ee17.CODE.1.ADDR.0x7fffff7fe798.INSTR.mov____%rdi,-0x8c8(%rbp).rb
SHA1: 41a3f1426e73a72f54f976790ee2f72c9ae49a0d
Classification: EXPLOITABLE
Hash: 3046ee424a61e2efc99938a75aa77492.dd3610ab8e70bb6afc5b570663fce1e4
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555558182de.STACK.154b45ee17.CODE.1.ADDR.0x7fffff7fe798.INSTR.mov____%rdi,-0x8c8(%rbp).rb
Faulting Frame:
   compile_data_alloc_insn @ 0x0000555555921f18: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x0000555555921f04: sub rsp,0x10
   0x0000555555921f08: mov QWORD PTR [rbp-0x8],rdi
   0x0000555555921f0c: mov rax,QWORD PTR [rbp-0x8]
   0x0000555555921f10: mov esi,0x30
   0x0000555555921f15: mov rdi,rax
=> 0x0000555555921f18: call 0x555555921be1 <compile_data_alloc>
   0x0000555555921f1d: leave
   0x0000555555921f1e: ret
Stack Head (1000 entries):
   compile_data_alloc_insn   @ 0x0000555555921f18: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   new_insn_core             @ 0x0000555555922a4f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   new_insn_body             @ 0x0000555555922ea1: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   iseq_compile_each         @ 0x000055555594019e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
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
rax=0x00006092002303c8 rbx=0x000010007fef7e14 rcx=0x0000000000000000 rdx=0x000000000000000e
rsi=0x0000000000000030 rdi=0x00006092002303c8 rbp=0x00007fffff7ff010 rsp=0x00007fffff7ff000
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000601a0003fa50 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x0000555555921f18 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 2) - Hash: e72798fb212ee1d374758dc217a7d25d.a54e17d8ef038ea472af878fecc9826b
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.15aa45b819.CODE.1.ADDR.0x7fffff7fe1e8.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: ef82ebb83552ab8c031ada3ee1a43b4e7c19f643
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.a54e17d8ef038ea472af878fecc9826b
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.15aa45b819.CODE.1.ADDR.0x7fffff7fe1e8.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff7ff870 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff5e0 rsp=0x00007fffff7fe2f0
 r8=0x0000000000000000  r9=0x0000609200232178 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffe560 r14=0x000060300001c160 r15=0x00007ffff3ed8e00
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 4) - Hash: e72798fb212ee1d374758dc217a7d25d.363eccd3ae567d604879aa7c309c4bdb
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.555555860239.STACK.2b4797248.CODE.1.ADDR.0x7fffff7fec48.INSTR.mov____%rdi,-0x1288(%rbp).rb
SHA1: 1dfafea76579c01202b1a65972feaef1463a7f68
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.363eccd3ae567d604879aa7c309c4bdb
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.555555860239.STACK.2b4797248.CODE.1.ADDR.0x7fffff7fec48.INSTR.mov____%rdi,-0x1288(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff8000a0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ffe10 rsp=0x00007fffff7feb20
 r8=0x0000000000000000  r9=0x0000609200406c88 r10=0x0000000000000000 r11=0x00007ffff3e2e3e0
r12=0x00006092004067b0 r13=0x00007fffffffe560 r14=0x0000602a000159a8 r15=0x00007ffff3eeae60
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 6d570659eed53a148dff3c293b390171.d9387c50a58b866cc00d98cf2508f7d4
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.555555811e38.STACK.105b5ff89.CODE.1.ADDR.0x7fffff7feff8.INSTR.mov____%rdi,-0xc8(%rbp).rb
SHA1: 01dda53bb40ddceb6cfaf89ff60af4a6e9356577
Classification: EXPLOITABLE
Hash: 6d570659eed53a148dff3c293b390171.d9387c50a58b866cc00d98cf2508f7d4
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.555555811e38.STACK.105b5ff89.CODE.1.ADDR.0x7fffff7feff8.INSTR.mov____%rdi,-0xc8(%rbp).rb
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
Registers:
rax=0x0000000000000000 rbx=0x000010007fef7eca rcx=0x0000000000000000 rdx=0x000000000000000e
rsi=0x00000000000000b3 rdi=0x00006092002f8468 rbp=0x00007fffff7ff110 rsp=0x00007fffff7fefb0
 r8=0x00007fffff8001a0  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x0000555555922c1f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: cd8703ade1e444a19c95a698c799bb45.c439b7298d4857ad6d9aa86e15ad0644
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.7ffff4e5931d.STACK.1c4d94cc.CODE.1.ADDR.0x7fffff7fed38.INSTR.callq__0x0000000000004203.rb
SHA1: 69973b9d6faa5a025e3c89a6065bde7423f8c98a
Classification: EXPLOITABLE
Hash: cd8703ade1e444a19c95a698c799bb45.c439b7298d4857ad6d9aa86e15ad0644
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.7ffff4e5931d.STACK.1c4d94cc.CODE.1.ADDR.0x7fffff7fed38.INSTR.callq__0x0000000000004203.rb
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
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff1e8 rdx=0x0000000000000008
rsi=0x00007fffff7ff1e8 rdi=0x0000609200078f88 rbp=0x00007fffff7ff1b0 rsp=0x00007fffff7fe970
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000022220021 r11=0x00007ffff3e24bb0
r12=0x00007fffff7ff1e8 r13=0x0000609200078f88 r14=0x0000602200057eb8 r15=0x00007ffff3eff8c0
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: cdc8fa27a3d399980de6a31e38d0d023.4aa7e10c66a0e4d22d40221590f7f5f1
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556a422a.STACK.1f54ce669.CODE.1.ADDR.0x7fffff7fee08.INSTR.mov____%rdx,0x18(%rsp).rb
SHA1: 260c7ea3b37fafb21563362a8b5a6c468e89f65d
Classification: EXPLOITABLE
Hash: cdc8fa27a3d399980de6a31e38d0d023.4aa7e10c66a0e4d22d40221590f7f5f1
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556a422a.STACK.1f54ce669.CODE.1.ADDR.0x7fffff7fee08.INSTR.mov____%rdx,0x18(%rsp).rb
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
   iseq_compile_each         @ 0x00005555559419e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060920082cc18 rbx=0x000010007fef7f38 rcx=0x0000000000000000 rdx=0x0000609200645d00
rsi=0x00007fffff7ffd90 rdi=0x000060920082cc18 rbp=0x00007fffff7ff480 rsp=0x00007fffff7fec70
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: e72798fb212ee1d374758dc217a7d25d.559468a919c238e3f6c597896920184c
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.555555860239.STACK.3c74b2ef3.CODE.1.ADDR.0x7fffff7fed58.INSTR.mov____%rdi,-0x1288(%rbp).rb
SHA1: e552894698f755fcc4274d5439fded970075601b
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.559468a919c238e3f6c597896920184c
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.555555860239.STACK.3c74b2ef3.CODE.1.ADDR.0x7fffff7fed58.INSTR.mov____%rdi,-0x1288(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff7ff7e0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff550 rsp=0x00007fffff7fe260
 r8=0x0000000000000000  r9=0x0000609200257158 r10=0x0000000000000001 r11=0x000000000000001e
r12=0x00007ffff3e0ed80 r13=0x00007fffffffe560 r14=0x0000602200053ed0 r15=0x00007ffff3ef15b0
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: e2aac241b0e84a0441ba37562437481a.e23bee3b2ed27f28e0c6d700727f3a45
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555555ed3ff.STACK.105e0e982.CODE.1.ADDR.0x7fffff7fee78.INSTR.mov____%rax,-0x378(%rbp).rb
SHA1: 9df1a08ed165277a782d1ec511fb05ad9c3ee2b4
Classification: UNKNOWN
Hash: e2aac241b0e84a0441ba37562437481a.e23bee3b2ed27f28e0c6d700727f3a45
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555555ed3ff.STACK.105e0e982.CODE.1.ADDR.0x7fffff7fee78.INSTR.mov____%rax,-0x378(%rbp).rb
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
rax=0x0000003e00000000 rbx=0x000010007ff63690 rcx=0x0000000000000000 rdx=0x000000083fff8000
rsi=0x0000000000000000 rdi=0x0000003e00000000 rbp=0x00007fffffb5b3e0 rsp=0x00007fffffb5b3c0
 r8=0x00000000fffffff0  r9=0x00007fffffffb4d0 r10=0x00007ffff72ce700 r11=0x0000600c00143300
r12=0x00007ffff3127800 r13=0x0000609200176bd0 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555577c121 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation on source operand
   Short description: SourceAv (19/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation.
---END SUMMARY---
(1 of 1) - Hash: 5f1bf07eced421f2516c3e474898139c.b698b1b85d25d38de448025cdb319c1b
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c4cc1.STACK.15f6226ce7.CODE.1.ADDR.0x7fffff7fefd8.INSTR.callq__*0x18(%r12).rb
SHA1: 291411deeb6b5d000607da82e8f649817e97e14e
Classification: EXPLOITABLE
Hash: 5f1bf07eced421f2516c3e474898139c.b698b1b85d25d38de448025cdb319c1b
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c4cc1.STACK.15f6226ce7.CODE.1.ADDR.0x7fffff7fefd8.INSTR.callq__*0x18(%r12).rb
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
   rb_check_funcall_default  @ 0x00005555558ad9be: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_check_funcall          @ 0x00005555558ad8cc: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   convert_type              @ 0x000055555569f777: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_convert_type           @ 0x000055555569f93d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   numeric_to_float          @ 0x00005555556a13e4: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_num_to_dbl             @ 0x00005555556a16d5: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   math_cos                  @ 0x0000555555677c97: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_1              @ 0x00005555558850e9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc             @ 0x000055555588709c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff800370 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff8000e0 rsp=0x00007fffff7fedf0
 r8=0x0000000000000000  r9=0x000060920024cf00 r10=0x0000000000000000 r11=0x0000000000000000
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffe570 r14=0x000060360035ec38 r15=0x00007ffff3ef1f70
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 8) - Hash: e72798fb212ee1d374758dc217a7d25d.d328a262cfcba6a31299a7499a1904e7
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.266560696.CODE.1.ADDR.0x7fffff7fe498.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: 328acd616edd2694fceb79ce90d6028ba11606e4
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.d328a262cfcba6a31299a7499a1904e7
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.266560696.CODE.1.ADDR.0x7fffff7fe498.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff800100 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ffe70 rsp=0x00007fffff7feb80
 r8=0x0000000000000000  r9=0x0000609200575ad8 r10=0x0000000000000000 r11=0x00007ffff3e2f2b8
r12=0x0000609200575b28 r13=0x00007fffffffe560 r14=0x0000602600011af8 r15=0x00007ffff3ee9870
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 0dc18a7fae5a073273eaef367254a50a.ba7402f00713dae81f1dcf2239dc9cdc
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555559419e4.STACK.7d6c9420.CODE.1.ADDR.0x7fffff7feff8.INSTR.callq__0xfffffffffffebad0.rb
SHA1: 7998bda31215e7498bc565a5a26d5b80cafd8212
Classification: EXPLOITABLE
Hash: 0dc18a7fae5a073273eaef367254a50a.ba7402f00713dae81f1dcf2239dc9cdc
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555559419e4.STACK.7d6c9420.CODE.1.ADDR.0x7fffff7feff8.INSTR.callq__0xfffffffffffebad0.rb
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
rax=0x0000609200634ed8 rbx=0x000010007fef7e7a rcx=0x0000000000000000 rdx=0x000060920035bc20
rsi=0x00007fffff7ff430 rdi=0x0000609200634ed8 rbp=0x00007fffff7ff340 rsp=0x00007fffff7feb30
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000601a000423c0 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 4) - Hash: dcc18e92f28d620b300220bbe521bc31.ba93b1f45584713048423c204514b846
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556dda51.STACK.1608ad54a6.CODE.2.ADDR.0x7ffff5f7ffe8.INSTR.mov____%rdi,-0x68(%rbp).rb
SHA1: f35b84ab845b2eb7e826cbaa783f40a2e6397299
Classification: EXPLOITABLE
Hash: dcc18e92f28d620b300220bbe521bc31.ba93b1f45584713048423c204514b846
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556dda51.STACK.1608ad54a6.CODE.2.ADDR.0x7ffff5f7ffe8.INSTR.mov____%rdi,-0x68(%rbp).rb
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
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007ffff21186b8 rdx=0x0000000000000008
rsi=0x00007ffff21186b8 rdi=0x0000609200340b58 rbp=0x00007ffff2118680 rsp=0x00007ffff2117e40
 r8=0x0000000000000000  r9=0x0000000000000020 r10=0x00007ffff4e60600 r11=0x000000000000001e
r12=0x00007ffff21186b8 r13=0x0000609200340b58 r14=0x0000600e00070340 r15=0x00007ffff261d200
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 25594fcc7b289c02694a38ea8cc085db.63225f1878e14146d1082d5f94a97e24
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.555555673830.STACK.28ee23750.CODE.1.ADDR.0x1.INSTR.movslq_(%rdi),%r10.rb
SHA1: a9ea6579af7c89e2bd93ed752cafe3c93091e10d
Classification: UNKNOWN
Hash: 25594fcc7b289c02694a38ea8cc085db.63225f1878e14146d1082d5f94a97e24
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.555555673830.STACK.28ee23750.CODE.1.ADDR.0x1.INSTR.movslq_(%rdi),%r10.rb
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
rax=0x000000010001ef80 rbx=0x000010007fff46b6 rcx=0x000000009fffbdf1 rdx=0x000000010001ef88
rsi=0x0000601c0003a960 rdi=0x000000010001ef80 rbp=0x00007ffffffe2a60 rsp=0x00007ffffffe2a50
 r8=0x0000000000000000  r9=0x0000609200429c38 r10=0x0000000000000000 r11=0x00007ffff3e0f1a0
r12=0x00006092004294e0 r13=0x00007fffffffe570 r14=0x0000602a00015c60 r15=0x00007ffff3f0dd20
rip=0x0000555555877704 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation on source operand
   Short description: SourceAv (19/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation.
---END SUMMARY---
(1 of 1) - Hash: 6e39c612ae5e7def990fc35c5b609c34.28769bfb151f3a60513206d38e94f10c
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556d506b.STACK.748e0997.CODE.1.ADDR.0x7fffff7fefc8.INSTR.callq__0xffffffffffff36d5.rb
SHA1: 4447f20af813e972547974f5093271299dbe4ff8
Classification: EXPLOITABLE
Hash: 6e39c612ae5e7def990fc35c5b609c34.28769bfb151f3a60513206d38e94f10c
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556d506b.STACK.748e0997.CODE.1.ADDR.0x7fffff7fefc8.INSTR.callq__0xffffffffffff36d5.rb
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
rax=0x000060420001ef80 rbx=0x00007fffff7ff390 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff100 rsp=0x00007fffff7fde10
 r8=0x0000000000000000  r9=0x0000609200478310 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffe560 r14=0x0000602c0001b6c0 r15=0x00007ffff3ef1c10
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.3bc5bc3245f4fa17649f9fd577a87d55
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555588e3e0.STACK.2c718dd39.CODE.1.ADDR.0x7fffff7feea8.INSTR.mov____%rdi,-0x12b8(%rbp).rb
SHA1: ea69f678419d0ca701d5bc7a637439a356a520e8
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.3bc5bc3245f4fa17649f9fd577a87d55
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555588e3e0.STACK.2c718dd39.CODE.1.ADDR.0x7fffff7feea8.INSTR.mov____%rdi,-0x12b8(%rbp).rb
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
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff118 rdx=0x0000000000000008
rsi=0x00007fffff7ff118 rdi=0x0000609200230c40 rbp=0x00007fffff7ff0e0 rsp=0x00007fffff7fe8a0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007fffff7ff118 r13=0x0000609200230c40 r14=0x0000602600019778 r15=0x00007ffff3ef2750
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: c408db942c61c325240d0b10e7f1d97d.923ff8a09c3829fc9cc79f32858556a1
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.141cc8ed88.CODE.1.ADDR.0x7fffff7fe4e8.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: 277cf83b9dbf6b52a23ae9adae826b57e94bacb2
Classification: EXPLOITABLE
Hash: c408db942c61c325240d0b10e7f1d97d.923ff8a09c3829fc9cc79f32858556a1
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.141cc8ed88.CODE.1.ADDR.0x7fffff7fe4e8.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff8003b0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff800120 rsp=0x00007fffff7fee30
 r8=0x00007ffff3e2e801  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e2e830
r12=0x00007ffff3eea9e0 r13=0x00007fffffffe560 r14=0x000060200001c0b8 r15=0x00007ffff3eeaa10
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: c408db942c61c325240d0b10e7f1d97d.47043d175bcc240f0e33e92eb85de41c
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555588e3e0.STACK.142fec3603.CODE.1.ADDR.0x7fffff7fe038.INSTR.mov____%rdi,-0x12b8(%rbp).rb
SHA1: 54e64d527c21bcc3d3b2d053f3536b13c94cb19f
Classification: EXPLOITABLE
Hash: c408db942c61c325240d0b10e7f1d97d.47043d175bcc240f0e33e92eb85de41c
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555588e3e0.STACK.142fec3603.CODE.1.ADDR.0x7fffff7fe038.INSTR.mov____%rdi,-0x12b8(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff7ffa10 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff780 rsp=0x00007fffff7fe490
 r8=0x00007ffff3e2e4f1  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e2e528
r12=0x000060920052fe20 r13=0x00007fffffffe560 r14=0x000060220008c320 r15=0x00007ffff3eeb2b0
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: cd8703ade1e444a19c95a698c799bb45.1535e49ba288b55508d179d83f29071c
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.555555812fd0.STACK.179765c6a8.CODE.1.ADDR.0x7fffff7feff8.INSTR.callq__0xffffffffffffdd5a.rb
SHA1: 2a3486a8c8b73a84088b772462764e8341ecba0e
Classification: EXPLOITABLE
Hash: cd8703ade1e444a19c95a698c799bb45.1535e49ba288b55508d179d83f29071c
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.555555812fd0.STACK.179765c6a8.CODE.1.ADDR.0x7fffff7feff8.INSTR.callq__0xffffffffffffdd5a.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   newobj_init               @ 0x00005555555f6fe6: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   newobj_of                 @ 0x00005555555f7548: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_wb_protected_newobj_of @ 0x00005555555f760e: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_alloc                 @ 0x00005555557cf2d8: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_new0                  @ 0x00005555557cf3df: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_new                   @ 0x00005555557cfad4: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   str_new_frozen            @ 0x00005555557d2539: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_str_new_frozen         @ 0x00005555557d2256: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_get_path_check_convert @ 0x00005555555e0547: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_get_path_check         @ 0x00005555555e0583: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_get_path               @ 0x00005555555e05c5: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_file_expand_path       @ 0x00005555555e8d3f: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_file_s_expand_path     @ 0x00005555555e8e6a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   call_cfunc_m1             @ 0x0000555555885068: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_cfunc_with_frame  @ 0x0000555555886df9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff438 rdx=0x0000000000000008
rsi=0x00007fffff7ff438 rdi=0x0000609200812140 rbp=0x00007fffff7ff400 rsp=0x00007fffff7febc0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000022220021 r11=0x00007ffff3e4e348
r12=0x00007fffff7ff438 r13=0x0000609200812140 r14=0x000060400001fd80 r15=0x00007ffff3ec30b0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 2) - Hash: e72798fb212ee1d374758dc217a7d25d.475fb140a764458ee10e6efef5951642
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.266560696.CODE.1.ADDR.0x7fffff7fe258.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: 59602222dc99e3e111ba385c3c294977ea7157a5
Classification: EXPLOITABLE
Hash: e72798fb212ee1d374758dc217a7d25d.475fb140a764458ee10e6efef5951642
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.266560696.CODE.1.ADDR.0x7fffff7fe258.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff7ffde0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ffb50 rsp=0x00007fffff7fe860
 r8=0x0000000000000000  r9=0x00006092003a0d98 r10=0x0000000000000000 r11=0x00007ffff3e2f250
r12=0x00006092003a0780 r13=0x00007fffffffe560 r14=0x0000602a00016508 r15=0x00007ffff3ee9870
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 51ee77a2b57805523555be182f3de900.b952dbe3ae18ba93753a3329d51b91cb
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555558182de.STACK.3f3300d.CODE.1.ADDR.0x7fffff7fe778.INSTR.mov____%rdi,-0x8c8(%rbp).rb
SHA1: f536d9a6d8d2eccbeae7dd3befa2d682e7319f91
Classification: EXPLOITABLE
Hash: 51ee77a2b57805523555be182f3de900.b952dbe3ae18ba93753a3329d51b91cb
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555558182de.STACK.3f3300d.CODE.1.ADDR.0x7fffff7fe778.INSTR.mov____%rdi,-0x8c8(%rbp).rb
Faulting Frame:
   iseq_compile_each @ 0x00005555559419e4: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x00005555559419cc: mov rax,QWORD PTR [rbp-0x7e8]
   0x00005555559419d3: mov r9d,ecx
   0x00005555559419d6: mov r8d,0x0
   0x00005555559419dc: mov ecx,0x0
   0x00005555559419e1: mov rdi,rax
=> 0x00005555559419e4: call 0x55555592d4b4 <compile_array_>
   0x00005555559419e9: jmp 0x555555948a86 <iseq_compile_each+84503>
   0x00005555559419ee: cmp DWORD PTR [rbp-0x7fc],0x0
   0x00005555559419f5: jne 0x555555941a3b <iseq_compile_each+55756>
   0x00005555559419f7: mov esi,DWORD PTR [rbp-0x7dc]
Stack Head (1000 entries):
   iseq_compile_each         @ 0x00005555559419e4: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
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
rax=0x000060920016e368 rbx=0x000010007fef7ea4 rcx=0x0000000000000000 rdx=0x00006092001f0d40
rsi=0x00007fffff7ff8f0 rdi=0x000060920016e368 rbp=0x00007fffff7ff800 rsp=0x00007fffff7feff0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x00005555555d5880 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x00005555559419e4 efl=0x0000000000010207  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: f0adedb53895570b6ae0411c96d7fe5f.54467955103d466e3ce04ae4cf3d5884
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.555555634cce.STACK.1847ed070.CODE.1.ADDR.0x7fffff7fef50.INSTR.mov____%rdi,0x30(%rsp).rb
SHA1: 6e3711d425ac98a14e40a54867caead0e70d29e7
Classification: UNKNOWN
Hash: f0adedb53895570b6ae0411c96d7fe5f.54467955103d466e3ce04ae4cf3d5884
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.555555634cce.STACK.1847ed070.CODE.1.ADDR.0x7fffff7fef50.INSTR.mov____%rdi,0x30(%rsp).rb
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
rax=0x0000003f00000000 rbx=0x000010007ff63690 rcx=0x0000000000000000 rdx=0x000000085fff8000
rsi=0x0000000000000000 rdi=0x0000003f00000000 rbp=0x00007fffffb5b3e0 rsp=0x00007fffffb5b3c0
 r8=0x00000000fffffff0  r9=0x00007fffffffb4d0 r10=0x00007ffff72ce700 r11=0x0000600c0030d7c0
r12=0x0000609200125258 r13=0x0000609200192420 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555577c121 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation on source operand
   Short description: SourceAv (19/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation.
---END SUMMARY---
(1 of 2) - Hash: 5f1bf07eced421f2516c3e474898139c.e6a9a05e950543c3eae179f435377752
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.7ffff4e6063c.STACK.561a1fc0.CODE.1.ADDR.0x7fffff7feb48.INSTR.callq__0xffffffffffffcee4.rb
SHA1: 4fa1aa765a71852dba26db0670a89a7b4ae4a57d
Classification: EXPLOITABLE
Hash: 5f1bf07eced421f2516c3e474898139c.e6a9a05e950543c3eae179f435377752
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.7ffff4e6063c.STACK.561a1fc0.CODE.1.ADDR.0x7fffff7feb48.INSTR.callq__0xffffffffffffcee4.rb
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
   vm_defined                @ 0x000055555588e087: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff8004b0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff800220 rsp=0x00007fffff7fef30
 r8=0x0000000000000000  r9=0x000060920025d3f0 r10=0x0000000000000000 r11=0x000000000000001e
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffe560 r14=0x0000602c0001b8c8 r15=0x00007ffff3eff290
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 77a744ac0b056d416df542bd4c3259b6.03b61d701f9a3b5808f5adb6ec4fca0e
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.7ffff4e5931d.STACK.14150a4778.CODE.1.ADDR.0x7fffff7fedb8.INSTR.callq__0x0000000000004203.rb
SHA1: fa972e988e540dd5737919292116e36a974f9abb
Classification: EXPLOITABLE
Hash: 77a744ac0b056d416df542bd4c3259b6.03b61d701f9a3b5808f5adb6ec4fca0e
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.7ffff4e5931d.STACK.14150a4778.CODE.1.ADDR.0x7fffff7fedb8.INSTR.callq__0x0000000000004203.rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   clear_opt_map_info        @ 0x00005555557508cb: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   clear_node_opt_info       @ 0x00005555557513a3: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   optimize_node_left        @ 0x0000555555751d50: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
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
   optimize_node_left        @ 0x0000555555754640: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000120 rcx=0x0000000000000007 rdx=0x0000000000000120
rsi=0x0000555555a10740 rdi=0x00007fffff7ffcf8 rbp=0x00007fffff7ff4b0 rsp=0x00007fffff7fec70
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff72ce700 r11=0x0000600c003bf4e0
r12=0x0000555555a10740 r13=0x00007fffff7ffcf8 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: c408db942c61c325240d0b10e7f1d97d.700546c5938d6b858fb5fa19bc710c67
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.11bc90920.CODE.1.ADDR.0x7fffff7fe4e8.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: 2db5f56a1a9f11be9c2e4128971dfb2db65fbe50
Classification: EXPLOITABLE
Hash: c408db942c61c325240d0b10e7f1d97d.700546c5938d6b858fb5fa19bc710c67
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.11bc90920.CODE.1.ADDR.0x7fffff7fe4e8.INSTR.mov____%rdi,-0xe68(%rbp).rb
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
rax=0x000060420001ef80 rbx=0x00007fffff7ff770 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff7ff4e0 rsp=0x00007fffff7fe1f0
 r8=0x00007ffff3e34239  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e34260
r12=0x00007ffff3f0e2c0 r13=0x00007fffffffe560 r14=0x0000602a00018bd0 r15=0x00007ffff3ee15f0
rip=0x000055555588e3e0 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 4) - Hash: a3c6b3e55cf07620e9bda9d0a093fee9.db54a1c9430eccc37e6446bec4fffa98
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.166a94122a.CODE.1.ADDR.0x7fffff7feaf8.INSTR.mov____%rdi,-0xe68(%rbp).rb
SHA1: f05fea0a37392bb2602c5489d52c85114e0ec5f9
Classification: EXPLOITABLE
Hash: a3c6b3e55cf07620e9bda9d0a093fee9.db54a1c9430eccc37e6446bec4fffa98
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556c9e19.STACK.166a94122a.CODE.1.ADDR.0x7fffff7feaf8.INSTR.mov____%rdi,-0xe68(%rbp).rb
Faulting Frame:
   vm_exec @ 0x00005555558bb091: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Disassembly:
   0x00005555558bb083: push r14
   0x00005555558bb085: push r13
   0x00005555558bb087: push r12
   0x00005555558bb089: push rbx
   0x00005555558bb08a: sub rsp,0x288
=> 0x00005555558bb091: mov QWORD PTR [rbp-0x278],rdi
   0x00005555558bb098: lea rax,[rbp-0x1f0]
   0x00005555558bb09f: mov QWORD PTR [rax],0x41b58ab3
   0x00005555558bb0a6: lea rdx,[rip+0x17f8db] # 0x555555a3a988
   0x00005555558bb0ad: mov QWORD PTR [rax+0x8],rdx
Stack Head (1000 entries):
   vm_exec                   @ 0x00005555558bb091: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
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
   call_cfunc_0              @ 0x0000555555885093: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007ffff3e2e4f1 rcx=0x00007ffff3e2e540 rdx=0x0000000000000000
rsi=0x0000609200485948 rdi=0x000060420001ef80 rbp=0x00007fffff7ff210 rsp=0x00007fffff7fef60
 r8=0x00007ffff3e2e4f1  r9=0x0000000000000000 r10=0x0000000022220021 r11=0x00007ffff3e2e528
r12=0x00006092003bd7b8 r13=0x00007fffffffe560 r14=0x0000602200074fe0 r15=0x00007ffff3eeb2b0
rip=0x00005555558bb091 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 0dc18a7fae5a073273eaef367254a50a.f4073b639889c421d3886ce890200978
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555571ed3c.STACK.154b5133ce.CODE.1.ADDR.0x7fffff7fecb8.INSTR.mov____%rdi,-0x5a8(%rbp).rb
SHA1: 11b04588a99eb22968e58ee77ae83cbb457e9b42
Classification: EXPLOITABLE
Hash: 0dc18a7fae5a073273eaef367254a50a.f4073b639889c421d3886ce890200978
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555571ed3c.STACK.154b5133ce.CODE.1.ADDR.0x7fffff7fecb8.INSTR.mov____%rdi,-0x5a8(%rbp).rb
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
rax=0x00006092002b1c98 rbx=0x000010007fef7ee0 rcx=0x0000000000000000 rdx=0x0000609200137070
rsi=0x00007fffff7ff760 rdi=0x00006092002b1c98 rbp=0x00007fffff7ff670 rsp=0x00007fffff7fee60
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000601a00040f70 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: a9de5301b4bca5e457c0013bc7881c4d.1dbd1c332e64ed3fed94d7126d1dcf4f
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555556d1c94.STACK.14cca10602.CODE.1.ADDR.0x7fffff7feed8.INSTR.mov____%rsi,0x18(%rsp).rb
SHA1: b85420309b9f5cdcceb903206bb46b98a9d513c0
Classification: EXPLOITABLE
Hash: a9de5301b4bca5e457c0013bc7881c4d.1dbd1c332e64ed3fed94d7126d1dcf4f
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555556d1c94.STACK.14cca10602.CODE.1.ADDR.0x7fffff7feed8.INSTR.mov____%rsi,0x18(%rsp).rb
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   vm_call_opt_call          @ 0x0000555555888ea9: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x0000555555895a96: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_vm_invoke_proc         @ 0x00005555558b849c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_call_opt_call          @ 0x0000555555888f16: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec_core              @ 0x000055555589426c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_exec                   @ 0x00005555558bb299: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block              @ 0x00005555558b73a2: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_iseq_block_from_c  @ 0x00005555558b7ac0: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   invoke_block_from_c_unspl @ 0x00005555558b7e45: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   vm_invoke_proc            @ 0x00005555558b827a: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff620 rdx=0x0000000000000008
rsi=0x00007ffff3e2e400 rdi=0x00007fffff7ff620 rbp=0x00007fffff7ff610 rsp=0x00007fffff7fedd0
 r8=0x0000000000000000  r9=0x0000000000000007 r10=0x0000000022220000 r11=0x00007ffff3e2e3e0
r12=0x00007ffff3e2e400 r13=0x00007fffff7ff620 r14=0x0000603800006468 r15=0x00007ffff3effa70
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: cd8703ade1e444a19c95a698c799bb45.fe0057d9ee2df55dc85a87abf6f7a1d7
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.7ffff712d29c.STACK.15d2558bf1.CODE.1.ADDR.0x7fffff7fef98.INSTR.mov____%rsi,0x8(%rsp).rb
SHA1: ee188926e34b7ae52557c6aa3ded6532c5972f7b
Classification: EXPLOITABLE
Hash: cd8703ade1e444a19c95a698c799bb45.fe0057d9ee2df55dc85a87abf6f7a1d7
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.7ffff712d29c.STACK.15d2558bf1.CODE.1.ADDR.0x7fffff7fef98.INSTR.mov____%rsi,0x8(%rsp).rb
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
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff298 rdx=0x0000000000000008
rsi=0x00007fffff7ff298 rdi=0x000060920030ba98 rbp=0x00007fffff7ff260 rsp=0x00007fffff7fea20
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000022220021 r11=0x00007ffff3e271a8
r12=0x00007fffff7ff298 r13=0x000060920030ba98 r14=0x0000602800012af8 r15=0x00007ffff3eff950
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 7d0cc6c5703c07bf6871f7f1c36f8929.ab49e19b6c8b38841d0077913e1df756
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.5555558a6b05.STACK.1dfa49ada.CODE.2.ADDR.0x7ffff1fc6ff8.INSTR.callq__0xfffffffffffffb8a.rb
SHA1: 1689211f0983af1518291df86099b6fdd627b47b
Classification: EXPLOITABLE
Hash: 7d0cc6c5703c07bf6871f7f1c36f8929.ab49e19b6c8b38841d0077913e1df756
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.5555558a6b05.STACK.1dfa49ada.CODE.2.ADDR.0x7ffff1fc6ff8.INSTR.callq__0xfffffffffffffb8a.rb
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
r12=0x0000000000000001 r13=0x0000000000000000 r14=0x0000601600030298 r15=0x00007ffff260b6a0
rip=0x00005555558a6b05 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: f4ce7bbf05724c8748651d2ca68c45bb.280b1b76d18e6a5af81983f46e163d7a
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.555555860239.STACK.3c74b2ef3.CODE.1.ADDR.0x7fffff7fed68.INSTR.mov____%rdi,-0x1288(%rbp).rb
SHA1: d844f5056140c564fb68f2e152cc593a22a26c26
Classification: EXPLOITABLE
Hash: f4ce7bbf05724c8748651d2ca68c45bb.280b1b76d18e6a5af81983f46e163d7a
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.555555860239.STACK.3c74b2ef3.CODE.1.ADDR.0x7fffff7fed68.INSTR.mov____%rdi,-0x1288(%rbp).rb
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
   rb_funcallv               @ 0x00005555558af2aa: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_obj_call_init          @ 0x00005555555dea17: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007fffff7ff648 rdx=0x0000000000000008
rsi=0x00007fffff7ff648 rdi=0x0000609200153598 rbp=0x00007fffff7ff610 rsp=0x00007fffff7fedd0
 r8=0x0000000000000000  r9=0x0000000000000001 r10=0x0000000000000001 r11=0x000000000000001e
r12=0x00007fffff7ff648 r13=0x0000609200153598 r14=0x00006044000073b0 r15=0x00007ffff3ef15b0
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 5b28293995be1cb3cb1eb19169b4ac92.bb4bf40f3c09346023c1f2b04a964596
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.7ffff2ce5d5c.STACK.7977850a.CODE.1.ADDR.0x7fffff7fede8.INSTR.mov____%rdi,-0x558(%rbp).rb
SHA1: 29df9230eca0ba8ecc1715dccb1364dc94d98fb7
Classification: EXPLOITABLE
Hash: 5b28293995be1cb3cb1eb19169b4ac92.bb4bf40f3c09346023c1f2b04a964596
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.7ffff2ce5d5c.STACK.7977850a.CODE.1.ADDR.0x7fffff7fede8.INSTR.mov____%rdi,-0x558(%rbp).rb
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
   rb_convert_type           @ 0x000055555569f93d: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_str_to_str             @ 0x00005555557d3e52: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_string_value           @ 0x00005555557da202: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
   rb_string_value_cstr      @ 0x00005555557da93c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x000060420001ef80 rbx=0x00007fffff800500 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000060420001ef80 rbp=0x00007fffff800270 rsp=0x00007fffff7fef80
 r8=0x0000600800162cf1  r9=0x000060920032ffa8 r10=0x0000000099990061 r11=0x00007ffff3e1e4c8
r12=0x0000600800162cf1 r13=0x00007ffff3e0ed10 r14=0x000060220005abe0 r15=0x00007ffff3ef98c0
rip=0x000055555588e3e0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: c69d8d5a26c04a366851caf6f06b4264.0e8753d08e10aa7661f271fec33269cf
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.555555811e38.STACK.105b5ff89.CODE.1.ADDR.0x7fffff7fefb8.INSTR.mov____%rdi,-0xc8(%rbp).rb
SHA1: 6ab849594b8b538046b7304d1daf986cd54e36b4
Classification: EXPLOITABLE
Hash: c69d8d5a26c04a366851caf6f06b4264.0e8753d08e10aa7661f271fec33269cf
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.555555811e38.STACK.105b5ff89.CODE.1.ADDR.0x7fffff7fefb8.INSTR.mov____%rdi,-0xc8(%rbp).rb
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
   compile_array_            @ 0x000055555592d90c: in /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby
Registers:
rax=0x0000609200455b58 rbx=0x000010007fef7e22 rcx=0x0000000000000002 rdx=0x00006092001e9860
rsi=0x00007fffff7ff960 rdi=0x0000609200455b58 rbp=0x00007fffff7ff0b0 rsp=0x00007fffff7fef80
 r8=0x00007fffff7ff7e0  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000601a000411e0 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555592d4c0 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: a0d7a7f8d9f2721adaf060365ea5c618.cc135bf2de98ef697a5eefb3426fce29
---CRASH SUMMARY---
Filename: /home/vagrant/crash/SIGSEGV.PC.55555593407f.STACK.7d6c9420.CODE.1.ADDR.0x7fffff7fe8c8.INSTR.mov____%rdi,-0x7e8(%rbp).rb
SHA1: 2d1893bd492b1555fee415e70d72dae0d5a47f19
Classification: EXPLOITABLE
Hash: a0d7a7f8d9f2721adaf060365ea5c618.cc135bf2de98ef697a5eefb3426fce29
Command: /home/vagrant/builds/ruby-2.4.0-asan/bin/ruby /home/vagrant/crash/SIGSEGV.PC.55555593407f.STACK.7d6c9420.CODE.1.ADDR.0x7fffff7fe8c8.INSTR.mov____%rdi,-0x7e8(%rbp).rb
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
Registers:
rax=0x00006092001fda18 rbx=0x000010007fef7eb8 rcx=0x0000000000000000 rdx=0x00006092002b3de0
rsi=0x00007fffff7ff620 rdi=0x00006092001fda18 rbp=0x00007fffff7ff530 rsp=0x00007fffff7fed20
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff4e6064b r11=0x000000000000001e
r12=0x0000601a00041fb0 r13=0x00007fffffffe560 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000055555593407f efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
```
