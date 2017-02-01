```
(1 of 2) - Hash: ac8ea97b4b051a25c804ce96d0415f7f.4af583087c2037b2c5dd36bd8747ec9c
---CRASH SUMMARY---
Filename: /lab/python/cpython-2.7.13-asan/c3e4f9ce35a61936e5ea581acbc8f7f2d5a82bbb12862c43612440eb6b6dda37.py
SHA1: e65f3c562fd65e0d60833e0aadbbd9e829b969e8
Classification: EXPLOITABLE
Hash: ac8ea97b4b051a25c804ce96d0415f7f.4af583087c2037b2c5dd36bd8747ec9c
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/cpython-2.7.13-asan/c3e4f9ce35a61936e5ea581acbc8f7f2d5a82bbb12862c43612440eb6b6dda37.py
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
(1 of 1) - Hash: 2a67bf198c07923ec7da43b35c82fde1.179fef22c9b94aae1eda9b374b60b397
---CRASH SUMMARY---
Filename: /lab/python/cpython-2.7.13-asan/f3290e217fbb989a3843f8659f6af3d704f81a01174d5c8e6e7a4e0acfed2401.py
SHA1: 4c7bb541ec99b227bd7ed97658e3139821d09630
Classification: UNKNOWN
Hash: 2a67bf198c07923ec7da43b35c82fde1.179fef22c9b94aae1eda9b374b60b397
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/cpython-2.7.13-asan/f3290e217fbb989a3843f8659f6af3d704f81a01174d5c8e6e7a4e0acfed2401.py
Faulting Frame:
   file_write @ 0x0000000000473cce: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Disassembly:
   0x00007ffff4246709: mov eax,0x1
   0x00007ffff424670e: syscall
=> 0x00007ffff4246710: cmp rax,0xfffffffffffff001
   0x00007ffff4246716: jae 0x7ffff4246749 <write+73>
   0x00007ffff4246718: ret
Stack Head (80 entries):
   __write_nocancel          @ 0x00007ffff4246710: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   _IO_new_file_write        @ 0x00007ffff41d3f03: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   new_do_write              @ 0x00007ffff41d469f: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   _IO_new_file_xsputn       @ 0x00007ffff41d469f: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI__IO_fwrite           @ 0x00007ffff41c9d9d: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   file_write                @ 0x0000000000473cce: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   call_function             @ 0x00000000005b3488: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x00000000005b3488: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCodeEx         @ 0x00000000005b598f: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   fast_function             @ 0x00000000005b432e: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   call_function             @ 0x00000000005b432e: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x00000000005b432e: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   fast_function             @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   call_function             @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x00000000005b4472: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCodeEx         @ 0x00000000005b598f: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Registers:
rax=0xffffffffffffffe0 rbx=0x0000000000100000 rcx=0xffffffffffffffff rdx=0x0000000000100000
rsi=0x00007fffefea7824 rdi=0x0000000000000004 rbp=0x00007fffefea7824 rsp=0x00007fffffff7818
 r8=0x00006036000eb360  r9=0x00007fffefea7824 r10=0x00007ffff4e6033b r11=0x0000000000000246
r12=0x00006036000eb280 r13=0x0000000000100000 r14=0x0000000000100000 r15=0x000010007fff6f22
rip=0x00007ffff4246710 efl=0x0000000000000246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Uncategorized signal
   Short description: UncategorizedSignal (22/22)
   Explanation: The target is stopped on a signal. This may be an exploitable condition, but this command was unable to categorize it.
---END SUMMARY---
(1 of 1) - Hash: 7eb4bba08279feb8169e5bbd86e5e8c3.9427e269c69ff8cefbb8f9c054315e2d
---CRASH SUMMARY---
Filename: /lab/python/cpython-2.7.13-asan/af140808454be9f16c02759bda7b83e9ab2f10084eea8fe651bd97e6d9411001.py
SHA1: 31c56cfa3a682c55261a055839ca231106903411
Classification: EXPLOITABLE
Hash: 7eb4bba08279feb8169e5bbd86e5e8c3.9427e269c69ff8cefbb8f9c054315e2d
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/cpython-2.7.13-asan/af140808454be9f16c02759bda7b83e9ab2f10084eea8fe651bd97e6d9411001.py
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
(1 of 1) - Hash: 4dd35d5cc1c6089e2e24085afd19891c.610a1f9bb1b787bb76f5a35771dfe479
---CRASH SUMMARY---
Filename: /lab/python/cpython-2.7.13-asan/ba74a2ffd077ff29ca7c84d5132be64ce3e9782f5f7dff0ec21b6e47a2100294.py
SHA1: 86160257a046bd3437109f2eea3c92c48c1ca1ef
Classification: PROBABLY_EXPLOITABLE
Hash: 4dd35d5cc1c6089e2e24085afd19891c.610a1f9bb1b787bb76f5a35771dfe479
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/cpython-2.7.13-asan/ba74a2ffd077ff29ca7c84d5132be64ce3e9782f5f7dff0ec21b6e47a2100294.py
Faulting Frame:
   tupleitem @ 0x0000000000515838: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Disassembly:
   0x0000000000515820: mov rdi,QWORD PTR [rax+0x18]
   0x0000000000515824: mov rdx,rdi
   0x0000000000515827: shr rdx,0x3
   0x000000000051582b: cmp BYTE PTR [rdx+0x7fff8000],0x0
   0x0000000000515832: jne 0x515aea <tuplesubscript+1098>
=> 0x0000000000515838: add QWORD PTR [rdi],0x1
   0x000000000051583c: mov rax,QWORD PTR [rax+0x18]
   0x0000000000515840: jmp 0x515991 <tuplesubscript+753>
   0x0000000000515845: nop DWORD PTR [rax]
   0x0000000000515848: cmp rax,0xa4c220
Stack Head (19 entries):
   tupleitem                 @ 0x0000000000515838: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   tuplesubscript            @ 0x0000000000515838: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x000000000059d0a6: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   gen_send_ex               @ 0x00000000006eef8e: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   gen_iternext              @ 0x00000000006eef8e: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyIter_Next               @ 0x0000000000446100: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PySequence_Tuple          @ 0x0000000000446100: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   tuple_new                 @ 0x00000000005150fd: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   type_call                 @ 0x0000000000522fca: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyObject_Call             @ 0x0000000000440c69: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   do_call                   @ 0x000000000059fa86: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   call_function             @ 0x000000000059fa86: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x000000000059fa86: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCodeEx         @ 0x00000000005b598f: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCode           @ 0x00000000005b5ff6: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   run_mod                   @ 0x00000000006387ad: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Registers:
rax=0x00007ffff7fa9f38 rbx=0x000010007fff7a96 rcx=0x0000000000000001 rdx=0x0000000000000000
rsi=0x0000000000a33fa0 rdi=0x0000000000000000 rbp=0x00007fffffffd600 rsp=0x00007fffffffd4b0
 r8=0x00007ffff451b9e0  r9=0x0000605a00009c80 r10=0x000060420001f2b8 r11=0x0000000000000000
r12=0x00000ffffffffa96 r13=0x0000000000000001 r14=0x00007ffff7e91948 r15=0x00007ffff7fa9f30
rip=0x0000000000515838 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on destination operand
   Short description: DestAvNearNull (15/22)
   Explanation: The target crashed on an access violation at an address matching the destination operand of the instruction. This likely indicates a write access violation, which means the attacker may control write address and/or value. However, it there is a chance it could be a NULL dereference.
---END SUMMARY---
(1 of 2) - Hash: dc0c51c2ae545db66914ebbf73001dc7.73737465d2aaea1d3aa0105d10e5c6ab
---CRASH SUMMARY---
Filename: /lab/python/cpython-2.7.13-asan/8e5c14d7e88c28a61eef1738648cbd1cadcb3a0ef5843415a4cb218c2b157cee.py
SHA1: 4622be1a747c0b7ee81208eb91200beabd130353
Classification: PROBABLY_EXPLOITABLE
Hash: dc0c51c2ae545db66914ebbf73001dc7.73737465d2aaea1d3aa0105d10e5c6ab
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/cpython-2.7.13-asan/8e5c14d7e88c28a61eef1738648cbd1cadcb3a0ef5843415a4cb218c2b157cee.py
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
rsi=0x0000000000000000 rdi=0x00007ffff7e4c174 rbp=0x00007fffffffddc0 rsp=0x00007fffffffd7c0
 r8=0x000010007efcbf8e  r9=0x00007ffff7e9fc70 r10=0x0000000000000000 r11=0x0000601e0000ef50
r12=0x0000000000000000 r13=0x00007ffff7e4c174 r14=0x00007ffff7f54168 r15=0x00007ffff7e4c175
rip=0x000000000059ccde efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on destination operand
   Short description: DestAvNearNull (15/22)
   Explanation: The target crashed on an access violation at an address matching the destination operand of the instruction. This likely indicates a write access violation, which means the attacker may control write address and/or value. However, it there is a chance it could be a NULL dereference.
---END SUMMARY---
(1 of 1) - Hash: 0a288addb2869940278dc451f08d1b5f.334e0ac58b4e5014766c32f0438b7530
---CRASH SUMMARY---
Filename: /lab/python/cpython-2.7.13-asan/8b5966e7ba059c5527cd4e1797045ed8fb1ab78c31aeab2f6715b638bb7b9afb.py
SHA1: 1ba69f24114a92fc341a05075c3af069b811de4f
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 0a288addb2869940278dc451f08d1b5f.334e0ac58b4e5014766c32f0438b7530
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/cpython-2.7.13-asan/8b5966e7ba059c5527cd4e1797045ed8fb1ab78c31aeab2f6715b638bb7b9afb.py
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
r12=0x0000000000000003 r13=0x0000000000a7afc0 r14=0x00000ffffffffd1c r15=0x00007fffffffed60
rip=0x0000000000673ffc efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: 9823ac225b1e9ec16c3c00824711472c.0d92e322f3de0a9e62e6d7ae3a851a39
---CRASH SUMMARY---
Filename: /lab/python/cpython-2.7.13-asan/bf4745b11c5aedc83cef823f035d844eb02f29cdd8a47a62a104f5d9c530a1f6.py
SHA1: 595d684e7bfece699a4cbe28d28dd97ea9e77d4b
Classification: UNKNOWN
Hash: 9823ac225b1e9ec16c3c00824711472c.0d92e322f3de0a9e62e6d7ae3a851a39
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/cpython-2.7.13-asan/bf4745b11c5aedc83cef823f035d844eb02f29cdd8a47a62a104f5d9c530a1f6.py
Faulting Frame:
   has_finalizer @ 0x00000000006744ca: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Disassembly:
   0x00000000006744b0: cmp rax,0xa2e2c0
   0x00000000006744b6: je 0x675240 <collect+5488>
   0x00000000006744bc: lea rdx,[rax+0xa8]
   0x00000000006744c3: mov rsi,rdx
   0x00000000006744c6: shr rsi,0x3
=> 0x00000000006744ca: cmp BYTE PTR [rsi+0x7fff8000],0x0
   0x00000000006744d1: jne 0x675c4c <collect+8060>
   0x00000000006744d7: test BYTE PTR [rax+0xa9],0x2
   0x00000000006744de: je 0x674460 <collect+1936>
   0x00000000006744e0: lea rdi,[rax+0x178]
Stack Head (12 entries):
   has_finalizer             @ 0x00000000006744ca: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   move_finalizers           @ 0x00000000006744ca: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   collect                   @ 0x00000000006744ca: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
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
rax=0x682065636e617473 rbx=0x00007ffff7e50540 rcx=0x000010007fff7bb3 rdx=0x682065636e61751b
rsi=0x0d040cac6dcc2ea3 rdi=0x00007ffff7e50560 rbp=0x00007fffffffde40 rsp=0x00007fffffffdcb0
 r8=0x0000000000000007  r9=0x00007ffff7e4dc90 r10=0x0000000000000000 r11=0x00007ffff7e4dda8
r12=0x00007ffff7e50588 r13=0x00000ffffefca0a8 r14=0x00007fffffffdd50 r15=0x00007fffffffdd90
rip=0x00000000006744ca efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 2) - Hash: 89d9c1ed08e461c86bdb20ebe9fd8aaa.ea22fecae2d127ad8182feae5a654493
---CRASH SUMMARY---
Filename: /lab/python/cpython-2.7.13-asan/00e10336f19c1e455be9feb015ea8745b3cf8cdce896120ac90b9065f3a42e89.py
SHA1: df872cbc9a380e4396a6de58e6c405bec41d28f1
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 89d9c1ed08e461c86bdb20ebe9fd8aaa.ea22fecae2d127ad8182feae5a654493
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/cpython-2.7.13-asan/00e10336f19c1e455be9feb015ea8745b3cf8cdce896120ac90b9065f3a42e89.py
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
(1 of 2) - Hash: 2b64dfa89d3029c8d2f3180aa9cf9ee4.44ce8ba61920414e38f39e5720276c8e
---CRASH SUMMARY---
Filename: /lab/python/cpython-2.7.13-asan/f99bde75de5d554a488665d5bb05f1f5f369929f90930fc9fa4fe0ea6bdf471b.py
SHA1: 1c57a4a69fd49609ab1c6c842a266d032ed655e2
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 2b64dfa89d3029c8d2f3180aa9cf9ee4.44ce8ba61920414e38f39e5720276c8e
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/cpython-2.7.13-asan/f99bde75de5d554a488665d5bb05f1f5f369929f90930fc9fa4fe0ea6bdf471b.py
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
rax=0x0000000000000028 rbx=0x0000000000000000 rcx=0x000010007fff7bb3 rdx=0x00007ffff7e48b00
rsi=0x00000ffffefc9160 rdi=0x0000000000000020 rbp=0x00007fffffffde40 rsp=0x00007fffffffdcb0
 r8=0x0000000000000007  r9=0x00007ffff7e4dc90 r10=0x0000000000000000 r11=0x00007ffff7e514e8
r12=0x0000000000000000 r13=0x0000000000000000 r14=0x00007fffffffdd50 r15=0x00007fffffffdd90
rip=0x0000000000674495 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: 99c128ae27e3090d71f12e470db24677.8ac8ae35dfc761d987cfe1e79d41a0b2
---CRASH SUMMARY---
Filename: /lab/python/cpython-2.7.13-asan/18b2b2dbd33591259082c6f9f6237e690efd5bb25a168d181c9263e23764567d.py
SHA1: 1797f5a5e33525f7ad9fbc38bef2f20e24898913
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 99c128ae27e3090d71f12e470db24677.8ac8ae35dfc761d987cfe1e79d41a0b2
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/cpython-2.7.13-asan/18b2b2dbd33591259082c6f9f6237e690efd5bb25a168d181c9263e23764567d.py
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
rax=0x00007ffff7e52368 rbx=0x0000000000000001 rcx=0x0000000000000000 rdx=0x00000ffffefca470
rsi=0x0000600400009df0 rdi=0x0000600400009df0 rbp=0x00007fffffffdec0 rsp=0x00007fffffffdea0
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff72ce700 r11=0x0000600400009df0
r12=0x00007ffff7e41950 r13=0x0000000000000000 r14=0x0000000000000000 r15=0x00007ffff7e41950
rip=0x000000000049c9d4 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: 1fe1385b6ea5494db28edcf47fa0f13f.1d29cdecef7a6cb0321c4ffdeaf23a27
---CRASH SUMMARY---
Filename: /lab/python/cpython-2.7.13-asan/74542c78278d0949d16954f2087fe462b145a8430b54db1cb98a802b116979d6.py
SHA1: e0028808228d8e2f64748d78faba719f8fdceb5a
Classification: UNKNOWN
Hash: 1fe1385b6ea5494db28edcf47fa0f13f.1d29cdecef7a6cb0321c4ffdeaf23a27
Command: /home/vagrant/builds/python-2.7.13-asan/bin/python /lab/python/cpython-2.7.13-asan/74542c78278d0949d16954f2087fe462b145a8430b54db1cb98a802b116979d6.py
Faulting Frame:
   Py_FatalError @ 0x0000000000639f35: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Disassembly:
   0x00007ffff4191c27: movsxd rdx,edi
   0x00007ffff4191c2a: movsxd rsi,esi
   0x00007ffff4191c2d: movsxd rdi,ecx
   0x00007ffff4191c30: mov eax,0xea
   0x00007ffff4191c35: syscall
=> 0x00007ffff4191c37: cmp rax,0xfffffffffffff000
   0x00007ffff4191c3d: ja 0x7ffff4191c5d <__GI_raise+93>
   0x00007ffff4191c3f: repz ret
   0x00007ffff4191c41: nop DWORD PTR [rax+0x0]
   0x00007ffff4191c48: test ecx,ecx
Stack Head (20 entries):
   __GI_raise                @ 0x00007ffff4191c37: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   __GI_abort                @ 0x00007ffff4195028: in /lib/x86_64-linux-gnu/libc-2.19.so (BL)
   Py_FatalError             @ 0x0000000000639f35: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   string_dealloc            @ 0x00000000004eccae: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyErr_Restore             @ 0x00000000005e3734: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyErr_Clear               @ 0x00000000005e3734: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyDict_GetItem            @ 0x00000000004c6ccd: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   _PyInstance_Lookup        @ 0x0000000000464b5d: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   has_finalizer             @ 0x0000000000675253: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   move_finalizers           @ 0x0000000000675253: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   collect                   @ 0x0000000000675253: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   gc_collect                @ 0x0000000000675ef9: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   call_function             @ 0x00000000005b3488: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalFrameEx        @ 0x00000000005b3488: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCodeEx         @ 0x00000000005b598f: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
   PyEval_EvalCode           @ 0x00000000005b5ff6: in /home/vagrant/builds/python-2.7.13-asan/bin/python2.7
Registers:
rax=0x0000000000000000 rbx=0x00007ffff7e50468 rcx=0xffffffffffffffff rdx=0x0000000000000006
rsi=0x0000000000002b4f rdi=0x0000000000002b4f rbp=0x00007fffffffdab0 rsp=0x00007fffffffd978
 r8=0x00007ffff7fe6740  r9=0x74732064656e7265 r10=0x0000000000000008 r11=0x0000000000000202
r12=0x00007ffff7e50468 r13=0x0000000000000000 r14=0x00007ffff7f80450 r15=0x3682d0f246257b48
rip=0x00007ffff4191c37 efl=0x0000000000000202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Abort signal
   Short description: AbortSignal (20/22)
   Explanation: The target is stopped on a SIGABRT. SIGABRTs are often generated by libc and compiled check-code to indicate potentially exploitable conditions. Unfortunately this command does not yet further analyze these crashes.
---END SUMMARY---
```
