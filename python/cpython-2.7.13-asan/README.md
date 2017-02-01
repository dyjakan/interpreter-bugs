```
(1 of 1) - Hash: 99c128ae27e3090d71f12e470db24677.8ac8ae35dfc761d987cfe1e79d41a0b2
---CRASH SUMMARY---
Filename: /lab/python/python-2.7/SIGSEGV.PC.4499b0.STACK.1aad17008a.CODE.1.ADDR.(nil).INSTR.mov____(%rsi,%rdx,8),%rcx.py
SHA1: 1797f5a5e33525f7ad9fbc38bef2f20e24898913
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 99c128ae27e3090d71f12e470db24677.8ac8ae35dfc761d987cfe1e79d41a0b2
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/python-2.7/SIGSEGV.PC.4499b0.STACK.1aad17008a.CODE.1.ADDR.(nil).INSTR.mov____(%rsi,%rdx,8),%rcx.py
Faulting Frame:
   list_slice @ 0x000000000049c9d4: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Disassembly:
   0x000000000049c9b8: nop DWORD PTR [rax+rax*1+0x0]
   0x000000000049c9c0: mov rcx,r8
   0x000000000049c9c3: shr rcx,0x3
   0x000000000049c9c7: cmp BYTE PTR [rcx+0x7fff8000],0x0
   0x000000000049c9ce: jne 0x49ca5d <list_slice+365>
=> 0x000000000049c9d4: mov rcx,QWORD PTR [r8]
   0x000000000049c9d7: mov r10,rcx
   0x000000000049c9da: shr r10,0x3
   0x000000000049c9de: cmp BYTE PTR [r10+0x7fff8000],0x0
   0x000000000049c9e6: jne 0x49ca55 <list_slice+357>
Stack Head (9 entries):
   list_slice                @ 0x000000000049c9d4: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   apply_slice               @ 0x000000000059ffd2: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x000000000059ffd2: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCodeEx         @ 0x00000000005b598f: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCode           @ 0x00000000005b5ff6: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   run_mod                   @ 0x00000000006387ad: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyRun_FileExFlags         @ 0x00000000006387ad: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyRun_SimpleFileExFlags   @ 0x000000000063bcb0: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   Py_Main                   @ 0x0000000000419351: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Registers:
rax=0x00007ffff7e52320 rbx=0x0000000000000001 rcx=0x0000000000000000 rdx=0x00000ffffefca467
rsi=0x0000600400009df0 rdi=0x0000600400009df0 rbp=0x00007fffffffdec0 rsp=0x00007fffffffdea0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff72ce700 r11=0x0000600400009df0
r12=0x00007ffff7e41908 r13=0x0000000000000000 r14=0x0000000000000000 r15=0x00007ffff7e41908
rip=0x000000000049c9d4 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: 7eb4bba08279feb8169e5bbd86e5e8c3.9427e269c69ff8cefbb8f9c054315e2d
---CRASH SUMMARY---
Filename: /lab/python/python-2.7/SIGSEGV.PC.4beab7.STACK.0.CODE.1.ADDR.0x7fffff7fefe8.INSTR.callq__0xfffffffffffffeb9.py
SHA1: 31c56cfa3a682c55261a055839ca231106903411
Classification: EXPLOITABLE
Hash: 7eb4bba08279feb8169e5bbd86e5e8c3.9427e269c69ff8cefbb8f9c054315e2d
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/python-2.7/SIGSEGV.PC.4beab7.STACK.0.CODE.1.ADDR.0x7fffff7fefe8.INSTR.callq__0xfffffffffffffeb9.py
Faulting Frame:
   symtable_visit_expr @ 0x0000000000646387: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Disassembly:
   0x000000000064636f: shr rax,0x3
   0x0000000000646373: cmp BYTE PTR [rax+0x7fff8000],0x0
   0x000000000064637a: jne 0x646b6f <symtable_visit_expr+4847>
   0x0000000000646380: mov rsi,QWORD PTR [r14+0x8]
   0x0000000000646384: mov rdi,rbx
=> 0x0000000000646387: call 0x645880 <symtable_visit_expr>
   0x000000000064638c: test eax,eax
   0x000000000064638e: je 0x645ca0 <symtable_visit_expr+1056>
   0x0000000000646394: lea rdi,[r14+0x10]
   0x0000000000646398: mov rax,rdi
Stack Head (1000 entries):
   symtable_visit_expr       @ 0x0000000000646387: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   symtable_visit_expr       @ 0x000000000064638c: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Registers:
rax=0x00000c0e4001d333 rbx=0x0000600e0000cea0 rcx=0x00000ffffffffae8 rdx=0x0000000000000003
rsi=0x00006072000e9958 rdi=0x0000600e0000cea0 rbp=0x00007fffff7ff050 rsp=0x00007fffff7ff000
 r8=0x00007ffff7e94ed0  r9=0x00007ffff7e4d838 r10=0x00000c01c00019d5 r11=0x00007ffff7e4d830
r12=0x00000c01c00019d7 r13=0x0000000000000000 r14=0x00006072000e9990 r15=0x0000600e0000cea0
rip=0x0000000000646387 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 2) - Hash: 89d9c1ed08e461c86bdb20ebe9fd8aaa.ea22fecae2d127ad8182feae5a654493
---CRASH SUMMARY---
Filename: /lab/python/python-2.7/SIGSEGV.PC.45abfb.STACK.e2a21de7c.CODE.1.ADDR.0x8.INSTR.mov____0x8(%rdi),%rax.py
SHA1: df872cbc9a380e4396a6de58e6c405bec41d28f1
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 89d9c1ed08e461c86bdb20ebe9fd8aaa.ea22fecae2d127ad8182feae5a654493
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/python-2.7/SIGSEGV.PC.45abfb.STACK.e2a21de7c.CODE.1.ADDR.0x8.INSTR.mov____0x8(%rdi),%rax.py
Faulting Frame:
   PyDict_GetItem @ 0x00000000004c6b3e: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Disassembly:
   0x00000000004c6b1c: mov DWORD PTR [rbx+0x10],0xf2f2f2f2
   0x00000000004c6b23: mov DWORD PTR [rbx+0x14],0xf4f4f400
   0x00000000004c6b2a: mov DWORD PTR [rbx+0x18],0xf3f3f3f3
   0x00000000004c6b31: cmp BYTE PTR [rax+0x7fff8000],0x0
   0x00000000004c6b38: jne 0x4c6d07 <PyDict_GetItem+599>
=> 0x00000000004c6b3e: mov rax,QWORD PTR [r13+0x8]
   0x00000000004c6b42: lea rdi,[rax+0xa8]
   0x00000000004c6b49: mov rdx,rdi
   0x00000000004c6b4c: shr rdx,0x3
   0x00000000004c6b50: cmp BYTE PTR [rdx+0x7fff8000],0x0
Stack Head (10 entries):
   PyDict_GetItem            @ 0x00000000004c6b3e: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   _PyType_Lookup            @ 0x000000000052dffa: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   type_getattro             @ 0x0000000000542280: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x000000000059e810: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCodeEx         @ 0x00000000005b598f: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCode           @ 0x00000000005b5ff6: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   run_mod                   @ 0x00000000006387ad: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyRun_FileExFlags         @ 0x00000000006387ad: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyRun_SimpleFileExFlags   @ 0x000000000063bcb0: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   Py_Main                   @ 0x0000000000419351: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Registers:
rax=0x0000000000000001 rbx=0x000010007fff7ba0 rcx=0x00007ffff7e4dc90 rdx=0x00007ffff7e4dc90
rsi=0x00007ffff7e4c1e0 rdi=0x0000000000000008 rbp=0x00007fffffffde10 rsp=0x00007fffffffdd00
 r8=0x00007ffff7e4c1e0  r9=0xbbaea70686041f3e r10=0x0000000000000007 r11=0x0000000000000000
r12=0x00000ffffffffba0 r13=0x0000000000000000 r14=0x0000000000000001 r15=0x00007ffff7e45480
rip=0x00000000004c6b3e efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: 0a288addb2869940278dc451f08d1b5f.334e0ac58b4e5014766c32f0438b7530
---CRASH SUMMARY---
Filename: /lab/python/python-2.7/SIGSEGV.PC.5018b0.STACK.16b0561885.CODE.1.ADDR.0x20.INSTR.mov____0x20(%rax),%rdx.py
SHA1: 1ba69f24114a92fc341a05075c3af069b811de4f
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 0a288addb2869940278dc451f08d1b5f.334e0ac58b4e5014766c32f0438b7530
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/python-2.7/SIGSEGV.PC.5018b0.STACK.16b0561885.CODE.1.ADDR.0x20.INSTR.mov____0x20(%rax),%rdx.py
Faulting Frame:
   update_refs @ 0x0000000000673ffc: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Disassembly:
   0x0000000000673fe4: mov rdx,rdi
   0x0000000000673fe7: shr rdx,0x3
   0x0000000000673feb: cmp BYTE PTR [rdx+0x7fff8000],0x0
   0x0000000000673ff2: jne 0x675d28 <collect+8280>
   0x0000000000673ff8: lea rdi,[rax+0x10]
=> 0x0000000000673ffc: mov rdx,QWORD PTR [rax+0x20]
   0x0000000000674000: mov rcx,rdi
   0x0000000000674003: shr rcx,0x3
   0x0000000000674007: cmp BYTE PTR [rcx+0x7fff8000],0x0
   0x000000000067400e: jne 0x675d2d <collect+8285>
Stack Head (6 entries):
   update_refs               @ 0x0000000000673ffc: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   collect                   @ 0x0000000000673ffc: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyGC_Collect              @ 0x00000000006762e8: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   Py_Finalize               @ 0x000000000063ab21: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   Py_Finalize               @ 0x000000000063ad86: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   Py_Main                   @ 0x0000000000418aa3: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Registers:
rax=0x0000000000000000 rbx=0x00000000801475f9 rcx=0x00000ffffefc8f07 rdx=0x0000000000000004
rsi=0x00000ffffefc4956 rdi=0x0000000000000010 rbp=0x00007fffffffe840 rsp=0x00007fffffffe6b0
 r8=0x000000000014f5f2  r9=0x00007ffff7f81038 r10=0x0000000000a7afc0 r11=0x0000000000a7afc0
r12=0x0000000000000003 r13=0x0000000000a7afc0 r14=0x00000ffffffffd1c r15=0x00007fffffffed59
rip=0x0000000000673ffc efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: 2b64dfa89d3029c8d2f3180aa9cf9ee4.44ce8ba61920414e38f39e5720276c8e
---CRASH SUMMARY---
Filename: /lab/python/python-2.7/SIGSEGV.PC.501a05.STACK.172a1a5650.CODE.1.ADDR.0x28.INSTR.mov____0x28(%r12),%rax.py
SHA1: e976ed6985aa14f982fd114fad01ea9f22bc4f7e
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 2b64dfa89d3029c8d2f3180aa9cf9ee4.44ce8ba61920414e38f39e5720276c8e
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/python-2.7/SIGSEGV.PC.501a05.STACK.172a1a5650.CODE.1.ADDR.0x28.INSTR.mov____0x28(%r12),%rax.py
Faulting Frame:
   move_finalizers @ 0x0000000000674495: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Disassembly:
   0x000000000067447b: lea rdi,[rbx+0x20]
   0x000000000067447f: shr r13,0x3
   0x0000000000674483: cmp BYTE PTR [r13+0x7fff8000],0x0
   0x000000000067448b: jne 0x675d32 <collect+8290>
   0x0000000000674491: lea rax,[rbx+0x28]
=> 0x0000000000674495: mov r12,QWORD PTR [rbx]
   0x0000000000674498: mov rdx,rax
   0x000000000067449b: shr rdx,0x3
   0x000000000067449f: cmp BYTE PTR [rdx+0x7fff8000],0x0
   0x00000000006744a6: jne 0x675d3a <collect+8298>
Stack Head (11 entries):
   move_finalizers           @ 0x0000000000674495: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   collect                   @ 0x0000000000674495: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   gc_collect                @ 0x0000000000675ef9: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   call_function             @ 0x00000000005b3488: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x00000000005b3488: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCodeEx         @ 0x00000000005b598f: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCode           @ 0x00000000005b5ff6: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   run_mod                   @ 0x00000000006387ad: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyRun_FileExFlags         @ 0x00000000006387ad: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyRun_SimpleFileExFlags   @ 0x000000000063bcb0: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   Py_Main                   @ 0x0000000000419351: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Registers:
rax=0x0000000000000028 rbx=0x0000000000000000 rcx=0x000010007fff7bb3 rdx=0x00007ffff7e505d8
rsi=0x00000ffffefca0bb rdi=0x0000000000000020 rbp=0x00007fffffffde40 rsp=0x00007fffffffdcb0
 r8=0x0000000000000007  r9=0x00007ffff7e4dc90 r10=0x0000000000000000 r11=0x00007ffff7e514e8
r12=0x0000000000000000 r13=0x0000000000000000 r14=0x00007fffffffdd50 r15=0x00007fffffffdd90
rip=0x0000000000674495 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 2) - Hash: ac8ea97b4b051a25c804ce96d0415f7f.4af583087c2037b2c5dd36bd8747ec9c
---CRASH SUMMARY---
Filename: /lab/python/python-2.7/SIGSEGV.PC.4b94a4.STACK.0.CODE.1.ADDR.0x7fffff7fefd8.INSTR.callq__0x000000000007833c.py
SHA1: e65f3c562fd65e0d60833e0aadbbd9e829b969e8
Classification: EXPLOITABLE
Hash: ac8ea97b4b051a25c804ce96d0415f7f.4af583087c2037b2c5dd36bd8747ec9c
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/python-2.7/SIGSEGV.PC.4b94a4.STACK.0.CODE.1.ADDR.0x7fffff7fefd8.INSTR.callq__0x000000000007833c.py
Faulting Frame:
   PyEval_EvalFrameEx @ 0x00000000005991ab: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Disassembly:
   0x000000000059919d: push r14
   0x000000000059919f: push r13
   0x00000000005991a1: push r12
   0x00000000005991a3: push rbx
   0x00000000005991a4: sub rsp,0x5d8
=> 0x00000000005991ab: mov QWORD PTR [rbp-0x3a0],rax
   0x00000000005991b2: shr QWORD PTR [rbp-0x3a0],0x3
   0x00000000005991ba: mov rax,QWORD PTR [rbp-0x3a0]
   0x00000000005991c1: mov QWORD PTR [rbp-0x318],rdi
   0x00000000005991c8: mov QWORD PTR [rbp-0x310],0x41b58ab3
Stack Head (1000 entries):
   PyEval_EvalFrameEx        @ 0x00000000005991ab: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   fast_function             @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   call_function             @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   fast_function             @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   call_function             @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   fast_function             @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   call_function             @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   fast_function             @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   call_function             @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   fast_function             @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   call_function             @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Registers:
rax=0x00007fffff7fee10 rbx=0x00007ffff3939c58 rcx=0x00007ffff3939c30 rdx=0x00007ffff7e47758
rsi=0x0000000000000000 rdi=0x00007ffff3939c58 rbp=0x00007fffff7ff120 rsp=0x00007fffff7feb20
 r8=0x0000000000a49230  r9=0x0000000000000001 r10=0x0000000000000007 r11=0x00000ffffefd3f18
r12=0x0000601e0000ef68 r13=0x0000601e0000ef50 r14=0x00007ffff7e47758 r15=0x00007ffff7e4c2fd
rip=0x00000000005991ab efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: dc0c51c2ae545db66914ebbf73001dc7.73737465d2aaea1d3aa0105d10e5c6ab
---CRASH SUMMARY---
Filename: /lab/python/python-2.7/SIGSEGV.PC.4b3723.STACK.14967d4463.CODE.1.ADDR.0x7ffff7ff0000.INSTR.mov____%rdx,0x0(%rbp).py
SHA1: e4f4af47e8fab3a2d9a3bbd4b57f5f730c3b2f29
Classification: PROBABLY_EXPLOITABLE
Hash: dc0c51c2ae545db66914ebbf73001dc7.73737465d2aaea1d3aa0105d10e5c6ab
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/python-2.7/SIGSEGV.PC.4b3723.STACK.14967d4463.CODE.1.ADDR.0x7ffff7ff0000.INSTR.mov____%rdx,0x0(%rbp).py
Faulting Frame:
   PyEval_EvalFrameEx @ 0x000000000059ccde: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Disassembly:
   0x000000000059ccc3: mov rax,rdx
   0x000000000059ccc6: shr rax,0x3
   0x000000000059ccca: cmp BYTE PTR [rax+0x7fff8000],0x0
   0x000000000059ccd1: jne 0x5ac8b2 <PyEval_EvalFrameEx+79650>
   0x000000000059ccd7: mov rax,QWORD PTR [rbp-0x320]
=> 0x000000000059ccde: add QWORD PTR [rdx],0x1
   0x000000000059cce2: lea rdi,[rax+0x8]
   0x000000000059cce6: shr rax,0x3
   0x000000000059ccea: cmp BYTE PTR [rax+0x7fff8000],0x0
   0x000000000059ccf1: jne 0x5ac8a6 <PyEval_EvalFrameEx+79638>
Stack Head (11 entries):
   PyEval_EvalFrameEx        @ 0x000000000059ccde: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCodeEx         @ 0x00000000005b598f: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCode           @ 0x00000000005a915a: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   exec_statement            @ 0x00000000005a915a: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x00000000005a915a: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCodeEx         @ 0x00000000005b598f: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCode           @ 0x00000000005b5ff6: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   run_mod                   @ 0x00000000006387ad: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyRun_FileExFlags         @ 0x00000000006387ad: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyRun_SimpleFileExFlags   @ 0x000000000063bcb0: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   Py_Main                   @ 0x0000000000419351: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Registers:
rax=0x00007ffff7e70508 rbx=0x00007ffff7e70390 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x00007ffff7e4c174 rbp=0x00007fffffffddb0 rsp=0x00007fffffffd7b0
 r8=0x000010007efcbf8e  r9=0x00007ffff7e9fc70 r10=0x0000000000000000 r11=0x0000601e0000ef50
r12=0x0000000000000000 r13=0x00007ffff7e4c174 r14=0x00007ffff7f54168 r15=0x00007ffff7e4c175
rip=0x000000000059ccde efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on destination operand
   Short description: DestAvNearNull (15/22)
   Explanation: The target crashed on an access violation at an address matching the destination operand of the instruction. This likely indicates a write access violation, which means the attacker may control write address and/or value. However, it there is a chance it could be a NULL dereference.
---END SUMMARY---
```
