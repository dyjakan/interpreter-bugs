```
(1 of 1) - Hash: a1f198aa97cf598b870722a1a635ca11.00c4ac1433c577945e8518a78c2a3100
---CRASH SUMMARY---
Filename: /lab/php7/cbdacea2a1762929e60d371dbcc4be0cddd411ff4c3ba07ba343dd6ec8d766d5.php
SHA1: a0705a6742227ea633a87cffe896b989acbb7301
Classification: PROBABLY_EXPLOITABLE
Hash: a1f198aa97cf598b870722a1a635ca11.00c4ac1433c577945e8518a78c2a3100
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/cbdacea2a1762929e60d371dbcc4be0cddd411ff4c3ba07ba343dd6ec8d766d5.php
Faulting Frame:
   zend_generator_resume @ 0x0000000000e03511: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000e034f6: mov rsi,rdi
   0x0000000000e034f9: shr rsi,0x3
   0x0000000000e034fd: cmp BYTE PTR [rsi+0x7fff8000],0x0
   0x0000000000e03504: jne 0xe04191 <zend_generator_resume+3825>
   0x0000000000e0350a: mov rcx,QWORD PTR [rbp-0x88]
=> 0x0000000000e03511: mov QWORD PTR [rax+0x30],rcx
   0x0000000000e03515: mov rax,QWORD PTR [rbp-0x80]
   0x0000000000e03519: cmp BYTE PTR [rax],0x0
   0x0000000000e0351c: jne 0xe04185 <zend_generator_resume+3813>
   0x0000000000e03522: mov QWORD PTR [r12+0x128],r10
Stack Head (8 entries):
   zend_generator_resume     @ 0x0000000000e03511: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ffa2f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x00007ffff3475d80 rcx=0x00007ffff3475278 rdx=0x00000ffffe68ebd9
rsi=0x0000000000000006 rdi=0x0000000000000030 rbp=0x00007fffffffaa80 rsp=0x00007fffffffa980
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff3414300 r11=0x000010007e6882a3
r12=0x00007ffff3475180 r13=0x00007ffff3475ec8 r14=0x0000000001b2cea0 r15=0x00000ffffe68ebb8
rip=0x0000000000e03511 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on destination operand
   Short description: DestAvNearNull (15/22)
   Explanation: The target crashed on an access violation at an address matching the destination operand of the instruction. This likely indicates a write access violation, which means the attacker may control write address and/or value. However, it there is a chance it could be a NULL dereference.
---END SUMMARY---
(1 of 1) - Hash: 1382ca739a51542f411b4f8bcd10b562.1691ca7500dccc7e0b1bfb4092b42711
---CRASH SUMMARY---
Filename: /lab/php7/63390170900d76f836f5948b8e23da474617256a206d3fe4d868089a8651e45c.php
SHA1: c0007141b1e6ac4a0b423a734f6603aae19e51fa
Classification: EXPLOITABLE
Hash: 1382ca739a51542f411b4f8bcd10b562.1691ca7500dccc7e0b1bfb4092b42711
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/63390170900d76f836f5948b8e23da474617256a206d3fe4d868089a8651e45c.php
Faulting Frame:
   zend_string_release @ 0x0000000000c47787: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x00007ffff4e60318: push r12
   0x00007ffff4e6031a: mov r12,rdi
   0x00007ffff4e6031d: push rbx
   0x00007ffff4e6031e: lea rbx,[rbp-0x830]
   0x00007ffff4e60325: sub rsp,0x810
=> 0x00007ffff4e6032c: call 0x7ffff4e5d520
   0x00007ffff4e60331: movzx r14d,BYTE PTR [rax+0x59]
   0x00007ffff4e60336: call 0x7ffff4e67940
   0x00007ffff4e6033b: mov r13,rax
   0x00007ffff4e6033e: call 0x7ffff4e5d520
Stack Head (1000 entries):
   free                      @ 0x00007ffff4e6032c: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0 (BL)
   zend_string_release       @ 0x0000000000c47787: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_output_handler_dtor   @ 0x0000000000c47787: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_output_handler_free   @ 0x0000000000c478c9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_output_stack_pop      @ 0x0000000000c5545a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_output_discard        @ 0x0000000000c5545a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_ob_end_clean          @ 0x0000000000c58cb1: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_free_compiled_variables @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_leave_helper_SPEC    @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000001 rbx=0x00007fffff7fef70 rcx=0x0000000000000003 rdx=0x0000000000000000
rsi=0x0000000000000001 rdi=0x000060080008a850 rbp=0x00007fffff7ff7a0 rsp=0x00007fffff7fef70
 r8=0x00007ffff3403058  r9=0x0000000000000003 r10=0x00000ffffe68060b r11=0x00007fffff7ffa17
r12=0x000060080008a850 r13=0x00007ffff3403050 r14=0x00007fffff7ff9d0 r15=0x0000000001b2cce0
rip=0x00007ffff4e6032c efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: fab37fd722693dab2f694b497eea04ff.aad64118d9ad70d81521ac559be45238
---CRASH SUMMARY---
Filename: /lab/php7/8dd7b76416cc3768048630836783cd69ad24dc9d225ef8360b872af5e69da59f.php
SHA1: 25d823348c1e35b8d84d990ca4900bece9209477
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: fab37fd722693dab2f694b497eea04ff.aad64118d9ad70d81521ac559be45238
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/8dd7b76416cc3768048630836783cd69ad24dc9d225ef8360b872af5e69da59f.php
Faulting Frame:
   None @ 0x00007ffff43feb3a: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
Disassembly:
Stack Head (46 entries):
   None                      @ 0x00007ffff43feb3a: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   None                      @ 0x00007ffff4407c5f: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   None                      @ 0x00007ffff440d723: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   xmlParseChunk             @ 0x00007ffff440f13e: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   php_XML_Parse             @ 0x0000000000c015bd: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_xml_parse             @ 0x0000000000bf6bb6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   xml_call_handler          @ 0x0000000000bf8064: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _xml_startElementHandler  @ 0x0000000000bfdc09: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _start_element_handler_ns @ 0x0000000000c00187: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   None                      @ 0x00007ffff440757c: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   None                      @ 0x00007ffff440d982: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   xmlParseChunk             @ 0x00007ffff440f13e: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   php_XML_Parse             @ 0x0000000000c015bd: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000061 rbx=0x0000603c0000fc80 rcx=0x00006016000096d0 rdx=0x0000607200006d85
rsi=0x0000000000000000 rdi=0x0000603c0000fc80 rbp=0x0000000000000000 rsp=0x00007fffffff8040
 r8=0x00000000000000f0  r9=0x0000000000000000 r10=0x00006016000096d0 r11=0x0000000000000006
r12=0x0000000000000000 r13=0x00000000000000f0 r14=0x12ffffff00000002 r15=0x0000000000000000
rip=0x00007ffff43feb3a efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: 010af2c3f89081c83f1a44af118573c6.f7adee5fd8389c23b3c4a8560d18a556
---CRASH SUMMARY---
Filename: /lab/php7/e66875583aaa9baf233d25dd4e1e1a9a8f623a71698d0b092697abaf4f185c93.php
SHA1: 4c98e56fac0df57051e4792f1c7bae5e99942405
Classification: EXPLOITABLE
Hash: 010af2c3f89081c83f1a44af118573c6.f7adee5fd8389c23b3c4a8560d18a556
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/e66875583aaa9baf233d25dd4e1e1a9a8f623a71698d0b092697abaf4f185c93.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000e74468: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_ROPE_END_SPEC_TMP_CO @ 0x0000000000e74468: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_get_current_ @ 0x0000000000dd3d33: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_iterator_to_array_app @ 0x0000000000a0eb51: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_iterator_apply        @ 0x0000000000a27c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_iterator_to_array     @ 0x0000000000a27ecc: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ff8c70: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_get_current_ @ 0x0000000000dd3d33: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_iterator_to_array_app @ 0x0000000000a0eb51: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000003 rcx=0x00007ffff31e25c0 rdx=0x0000000000000003
rsi=0x00007ffff3463a58 rdi=0x00007ffff2e28bb0 rbp=0x00007fffff7ff450 rsp=0x00007fffff7fec10
 r8=0x0000000000000000  r9=0x0000000000000002 r10=0x0000000000000002 r11=0x00000ffffe68c752
r12=0x00007ffff3463a58 r13=0x00007ffff2e28bb0 r14=0x00007ffff31e2530 r15=0x00007ffff346c580
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 62328ee337bcdbea9f6d36d0102dbc09.0ae2662e4c544b3e530470a18581e0ec
---CRASH SUMMARY---
Filename: /lab/php7/8afccb111d9a53aebc634040305f5428cf034f36d4fc84a8ec94bae4fcbe3791.php
SHA1: 79e65d91a536f62415cc323ced72ae72016c088d
Classification: UNKNOWN
Hash: 62328ee337bcdbea9f6d36d0102dbc09.0ae2662e4c544b3e530470a18581e0ec
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/8afccb111d9a53aebc634040305f5428cf034f36d4fc84a8ec94bae4fcbe3791.php
Faulting Frame:
   zend_call_method @ 0x0000000000dd293f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000dd292e: mov rbp,rsp
   0x0000000000dd2931: push r15
   0x0000000000dd2933: mov r15,rdi
   0x0000000000dd2936: push r14
   0x0000000000dd2938: lea r14,[rbp-0x190]
=> 0x0000000000dd293f: push r13
   0x0000000000dd2941: shr r14,0x3
   0x0000000000dd2945: push r12
   0x0000000000dd2947: push rbx
   0x0000000000dd2948: lea rbx,[r14+0x7fff8000]
Stack Head (1000 entries):
   zend_call_method          @ 0x0000000000dd293f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zend_hash_del_el_ex      @ 0x0000000000da2ff8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_hash_index_del       @ 0x0000000000da2ff8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_UNSET_DIM_SPEC_VAR_T @ 0x0000000000eeca74: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_free_compiled_variables @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_leave_helper_SPEC    @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x000000000169e6c0 rbx=0x0000000001b2cea0 rcx=0x00000000016aca00 rdx=0x00007fffff7ff070
rsi=0x00007ffff3404018 rdi=0x00007fffff7ff0b0 rbp=0x00007fffff7ff010 rsp=0x00007fffff7ff000
 r8=0x000000000000000a  r9=0x0000000000000000 r10=0x00007ffff3404018 r11=0x00007fffff7ff070
r12=0x000010007fef7e0a r13=0x00000fffffeffe0a r14=0x00007fffff7fee80 r15=0x00007fffff7ff0b0
rip=0x0000000000dd293f efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 1) - Hash: 491a47e64dd5d79a82e9216081d76417.0ce94253d6ef97e7f88afb3fbcb8b711
---CRASH SUMMARY---
Filename: /lab/php7/245e445c534b0f91fc4619e9c8a18f362112c14b98c2f2a9c84bfd223f8bc06a.php
SHA1: 34df0f75a0512948d1e56c125629ed3d70fe860e
Classification: UNKNOWN
Hash: 491a47e64dd5d79a82e9216081d76417.0ce94253d6ef97e7f88afb3fbcb8b711
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/245e445c534b0f91fc4619e9c8a18f362112c14b98c2f2a9c84bfd223f8bc06a.php
Faulting Frame:
   zend_array_destroy @ 0x0000000000da40ff: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000da40f1: mov rbp,rsp
   0x0000000000da40f4: push r15
   0x0000000000da40f6: push r14
   0x0000000000da40f8: mov r14,rdi
   0x0000000000da40fb: lea rdi,[rdi+0x6]
=> 0x0000000000da40ff: push r13
   0x0000000000da4101: mov rax,rdi
   0x0000000000da4104: shr rax,0x3
   0x0000000000da4108: push r12
   0x0000000000da410a: push rbx
Stack Head (1000 entries):
   zend_array_destroy        @ 0x0000000000da40ff: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b54e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_zval_ptr_dtor           @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_array_destroy        @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b54e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_zval_ptr_dtor           @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_array_destroy        @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b54e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_zval_ptr_dtor           @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_array_destroy        @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b54e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_zval_ptr_dtor           @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_array_destroy        @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b54e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_zval_ptr_dtor           @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_array_destroy        @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0xffffffffff6cdec0 rbx=0x00007fffee4f3ba0 rcx=0x0000000000000003 rdx=0x0000000000d5b540
rsi=0x0000000000d27040 rdi=0x00007fffee4f1ee6 rbp=0x00007fffff7ff010 rsp=0x00007fffff7ff000
 r8=0x00000ffffefe6305  r9=0x00007ffff7f31828 r10=0x0000000000365c17 r11=0x0000000000365c15
r12=0x0000000000000007 r13=0x00007fffee4f1f28 r14=0x00007fffee4f1ee0 r15=0x00007fffee4f3bc0
rip=0x0000000000da40ff efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 2) - Hash: 52960f977763d02236f44615344a489a.706d504271ed88f8cf0b4cf271d1df35
---CRASH SUMMARY---
Filename: /lab/php7/c254a01ce6a42d62448302c87cb5da15b43d4c42d6d975011e3bd4e3af0e2f31.php
SHA1: 80cb94fecf48d37f07afd14f49e2891029cf6335
Classification: EXPLOITABLE
Hash: 52960f977763d02236f44615344a489a.706d504271ed88f8cf0b4cf271d1df35
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/c254a01ce6a42d62448302c87cb5da15b43d4c42d6d975011e3bd4e3af0e2f31.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000d7c401: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable_ex       @ 0x0000000000d7c401: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable          @ 0x0000000000d7d6b7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_preg_replace_callback @ 0x000000000058d4b6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_do_repl_func         @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace_impl     @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace          @ 0x000000000058aa10: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_replace_in_subject    @ 0x000000000058ac35: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_replace_impl         @ 0x000000000058b97f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_preg_replace_callback @ 0x000000000058d51f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000003 rcx=0x00007ffff33e14f0 rdx=0x0000000000000003
rsi=0x00007ffff34633b8 rdi=0x00007ffff33e14f0 rbp=0x00007fffff7ff6f0 rsp=0x00007fffff7feeb0
 r8=0x00007ffff33e14f2  r9=0x0000000000000000 r10=0x0000000000000002 r11=0x00007ffff33e3528
r12=0x00007ffff34633b8 r13=0x00007ffff33e14f0 r14=0x0000000000000000 r15=0x00000ffffe67c6a5
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 5) - Hash: 4d3842e9328403a78014dc51cfc94345.cd7f00d2caff75598ae3eb443262ef90
---CRASH SUMMARY---
Filename: /lab/php7/2359a4958e0f4e27db60f3ddcf8e953fff58f81318270bcb40057b974df8a0b2.php
SHA1: 680be7e672d09a2b1c245fd33598a6e2b6d969bb
Classification: UNKNOWN
Hash: 4d3842e9328403a78014dc51cfc94345.cd7f00d2caff75598ae3eb443262ef90
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/2359a4958e0f4e27db60f3ddcf8e953fff58f81318270bcb40057b974df8a0b2.php
Faulting Frame:
   zend_parse_va_args @ 0x0000000000d80736: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d8072b: push r15
   0x0000000000d8072d: mov r15d,ecx
   0x0000000000d80730: push r14
   0x0000000000d80732: push r13
   0x0000000000d80734: push r12
=> 0x0000000000d80736: push rbx
   0x0000000000d80737: mov rbx,rdx
   0x0000000000d8073a: sub rsp,0x78
   0x0000000000d8073e: movzx eax,BYTE PTR [rax+0x7fff8000]
   0x0000000000d80745: mov QWORD PTR [rbp-0x38],rsi
Stack Head (1000 entries):
   zend_parse_va_args        @ 0x0000000000d80736: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_parameters     @ 0x0000000000d8111e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_array_walk_recursive  @ 0x0000000000a9a185: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_array_walk            @ 0x0000000000a8daa5: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_array_walk_recursive  @ 0x0000000000a9a1a6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_array_walk            @ 0x0000000000a8daa5: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_array_walk_recursive  @ 0x0000000000a9a1a6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00000000002a7784 rbx=0x00000fffffeffe06 rcx=0x0000000000000000 rdx=0x00007fffff7ff050
rsi=0x000000000153bc20 rdi=0x0000000000000002 rbp=0x00007fffff7ff020 rsp=0x00007fffff7ff000
 r8=0x0000000001b2a7f8  r9=0x00007fffff7ff240 r10=0x0000000000000002 r11=0x00007ffff32e6260
r12=0x00000fffffeffe3c r13=0x0000000000365500 r14=0x00000000003654ff r15=0x0000000000000000
rip=0x0000000000d80736 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 1) - Hash: 1534d2771bf68b1550060abaad9bc3ca.a8d883dbad2f5747c611266deb2642f1
---CRASH SUMMARY---
Filename: /lab/php7/2c8a53e5758c20ab5b8570943547d93082ac0d8e021a38f0f7ccb8d95903ec76.php
SHA1: 4636a5351497374b6547031c76775fb1a86f9b57
Classification: EXPLOITABLE
Hash: 1534d2771bf68b1550060abaad9bc3ca.a8d883dbad2f5747c611266deb2642f1
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/2c8a53e5758c20ab5b8570943547d93082ac0d8e021a38f0f7ccb8d95903ec76.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000bc85ec: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_string_init          @ 0x0000000000bc85ec: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_var_unserialize_inter @ 0x0000000000bc85ec: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_var_unserialize       @ 0x0000000000bca6a7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_unserialize           @ 0x0000000000b915de: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_var_unserialize_inter @ 0x0000000000bc91ec: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_var_unserialize       @ 0x0000000000bca6a7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_unserialize           @ 0x0000000000b915de: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000003 rcx=0x0000000000000002 rdx=0x0000000000000003
rsi=0x00007ffff340142d rdi=0x00007fffebd71cd8 rbp=0x00007fffff7ff7d0 rsp=0x00007fffff7fef90
 r8=0x0000000001678060  r9=0x00007ffff340142d r10=0x00007fffff7ffb00 r11=0x00007ffff3401436
r12=0x00007ffff340142d r13=0x00007fffebd71cd8 r14=0x00007fffff7ffac0 r15=0x00000fffffefff58
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: b56f534b8a1c6b1cd11d987acef1201b.b935e4b45bc9ec021d9289295ab8c229
---CRASH SUMMARY---
Filename: /lab/php7/64742d2ffb81e028a4d7bd58993fc2c41abcd48046afaf3e99cf8c1be81079c3.php
SHA1: 875dc5315839b661f0732969635c45079540de44
Classification: EXPLOITABLE
Hash: b56f534b8a1c6b1cd11d987acef1201b.b935e4b45bc9ec021d9289295ab8c229
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/64742d2ffb81e028a4d7bd58993fc2c41abcd48046afaf3e99cf8c1be81079c3.php
Faulting Frame:
   zend_compile_expr @ 0x0000000000d00ec3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d00eaf: push r12
   0x0000000000d00eb1: lea r12,[r15+0x7fff8000]
   0x0000000000d00eb8: push rbx
   0x0000000000d00eb9: mov rbx,rsi
   0x0000000000d00ebc: sub rsp,0x178
=> 0x0000000000d00ec3: mov QWORD PTR [rbp-0xc8],rax
   0x0000000000d00eca: mov rax,rsi
   0x0000000000d00ecd: shr rax,0x3
   0x0000000000d00ed1: mov QWORD PTR [rbp-0xd0],0x41b58ab3
   0x0000000000d00edc: mov DWORD PTR [r15+0x7fff8000],0xf1f1f1f1
Stack Head (1000 entries):
   zend_compile_expr         @ 0x0000000000d00ec3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000001678cf8 rbx=0x00007ffff2e0d540 rcx=0x0000000000000008 rdx=0x0000000000000000
rsi=0x00007ffff2e0d540 rdi=0x00007fffff7ff0a0 rbp=0x00007fffff7ff040 rsp=0x00007fffff7feea0
 r8=0x0000000000000007  r9=0x0000000000000008 r10=0x0000000000000003 r11=0x00007ffff34013e8
r12=0x000010007fef7dee r13=0x00007fffff7ff0a0 r14=0x00007fffff7ff0a0 r15=0x00000fffffeffdee
rip=0x0000000000d00ec3 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 8074408209f0f82f898c665ddb075e0c.6dff10588017ec68ee16e19ec178c329
---CRASH SUMMARY---
Filename: /lab/php7/1ece698035f19f2aea7a2a0c0b2f2008bbf7d5d197b1b3cca8b808eddf24b98d.php
SHA1: 977ae3d31116b68302680e739004f63aa5515fc1
Classification: EXPLOITABLE
Hash: 8074408209f0f82f898c665ddb075e0c.6dff10588017ec68ee16e19ec178c329
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/1ece698035f19f2aea7a2a0c0b2f2008bbf7d5d197b1b3cca8b808eddf24b98d.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   xbuf_format_converter     @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   vspprintf                 @ 0x0000000000c20bc0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_printf                @ 0x0000000000c0ed82: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_var_dump              @ 0x0000000000b88ea8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_var_dump              @ 0x0000000000b89bd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_do_repl_func         @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace_impl     @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace          @ 0x000000000058aa10: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_replace_in_subject    @ 0x000000000058ac35: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_replace_impl         @ 0x000000000058b97f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000000 rcx=0x000000000160c060 rdx=0x0000000000000000
rsi=0x000000000160c060 rdi=0x00007ffff3403000 rbp=0x00007fffff7ff190 rsp=0x00007fffff7fe950
 r8=0x00000000003a9aa0  r9=0x0000000000000000 r10=0x00007ffff3403000 r11=0x0000000000000000
r12=0x000000000160c060 r13=0x00007ffff3403000 r14=0x0000000000000000 r15=0x00007fffff7ff8a0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 4d49baf76bcb0c0c608a71b545f48a46.821e5c38d5f239bf36c8085f3c8172fa
---CRASH SUMMARY---
Filename: /lab/php7/5596a3780e2e07d921061f67bc83c3e2ff41a1c94d909eada85a00153f00dce0.php
SHA1: 95fe301cfb2b8ec1d8c4e22865cf11b4aa52070e
Classification: EXPLOITABLE
Hash: 4d49baf76bcb0c0c608a71b545f48a46.821e5c38d5f239bf36c8085f3c8172fa
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/5596a3780e2e07d921061f67bc83c3e2ff41a1c94d909eada85a00153f00dce0.php
Faulting Frame:
   zend_objects_destroy_object @ 0x0000000000e3168b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000e3166d: jle 0xe31ad1 <zend_objects_destroy_object+1457>
   0x0000000000e31673: lea rbx,[rip+0xcfb826] # 0x1b2cea0 <executor_globals>
   0x0000000000e3167a: mov DWORD PTR [rbp-0x68],0xc08
   0x0000000000e31681: lea rax,[rbx+0x350]
   0x0000000000e31688: mov r11,rax
=> 0x0000000000e3168b: mov QWORD PTR [rbp-0xe8],rax
   0x0000000000e31692: shr r11,0x3
   0x0000000000e31696: cmp BYTE PTR [r11+0x7fff8000],0x0
   0x0000000000e3169e: jne 0xe31bfd <zend_objects_destroy_object+1757>
   0x0000000000e316a4: mov r10,QWORD PTR [rbx+0x350]
Stack Head (1000 entries):
   zend_objects_destroy_obje @ 0x0000000000e3168b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_assign_to_variable   @ 0x0000000000e799a9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_ASSIGN_SPEC_CV_VAR_R @ 0x0000000000e799a9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_assign_to_variable   @ 0x0000000000e799a9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_ASSIGN_SPEC_CV_VAR_R @ 0x0000000000e799a9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000001b2d1f0 rbx=0x0000000001b2cea0 rcx=0x0000000000000003 rdx=0x00000ffffe6241d3
rsi=0x0000000000000000 rdi=0x00007fffff7ff078 rbp=0x00007fffff7ff0e0 rsp=0x00007fffff7fefe0
 r8=0x00007ffff3120e88  r9=0x00007ffff3120e98 r10=0x0000000000000007 r11=0x0000000001b2d1f0
r12=0x000010007fef7e02 r13=0x00000fffffeffe02 r14=0x00007fffff7ff070 r15=0x00007ffff3466140
rip=0x0000000000e3168b efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: f52a394eec2e0ed1d0111e5895470d0b.45ba4a906107eeedde02de85bbd62da3
---CRASH SUMMARY---
Filename: /lab/php7/2b9b53b8d1909a45a837df83185bcdcb9aadaabcb522b756fe3b32b54086f68c.php
SHA1: 68a15929c4b001f9dba09671f4cde85bc254a6dd
Classification: EXPLOITABLE
Hash: f52a394eec2e0ed1d0111e5895470d0b.45ba4a906107eeedde02de85bbd62da3
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/2b9b53b8d1909a45a837df83185bcdcb9aadaabcb522b756fe3b32b54086f68c.php
Faulting Frame:
   php_pcre_exec @ 0x0000000000519933: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000519921: movsxd r12,ecx
   0x0000000000519924: push rbx
   0x0000000000519925: mov ebx,r8d
   0x0000000000519928: sub rsp,0x3f8
   0x000000000051992f: mov rax,QWORD PTR [rbp+0x10]
=> 0x0000000000519933: mov QWORD PTR [rbp-0x1e8],rsi
   0x000000000051993a: mov QWORD PTR [rbp-0x1e0],rdx
   0x0000000000519941: mov DWORD PTR [rbp-0x1d8],r9d
   0x0000000000519948: mov QWORD PTR [rbp-0x1d0],0x41b58ab3
   0x0000000000519953: mov QWORD PTR [rbp-0x1f0],rax
Stack Head (1000 entries):
   php_pcre_exec             @ 0x0000000000519933: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace_impl     @ 0x000000000058808c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace          @ 0x000000000058aa10: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_replace_in_subject    @ 0x000000000058ac35: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_replace_impl         @ 0x000000000058bce0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_preg_replace_callback @ 0x000000000058d51f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_do_repl_func         @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace_impl     @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace          @ 0x000000000058aa10: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_replace_in_subject    @ 0x000000000058ac35: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_replace_impl         @ 0x000000000058bce0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_preg_replace_callback @ 0x000000000058d51f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007fffff7ff140 rbx=0x0000000000000000 rcx=0x0000000000000008 rdx=0x00007ffff34014c8
rsi=0x0000601600009620 rdi=0x0000600e000098d0 rbp=0x00007fffff7ff120 rsp=0x00007fffff7fed00
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x0000000000000004 r11=0x00000fffffeffdea
r12=0x0000000000000008 r13=0x0000000000000000 r14=0x0000600e000098d0 r15=0x000010007fef7dea
rip=0x0000000000519933 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: 8074408209f0f82f898c665ddb075e0c.dd3d59166fcfc7bc701ef3dbfdec36d2
---CRASH SUMMARY---
Filename: /lab/php7/7f2eaf69eda22dd27f68b410731c29d64330ea7d25d2bfffbedf9baeac8d09f6.php
SHA1: 27c5d587fae215812e03abaecdcf76fcd6faf03e
Classification: EXPLOITABLE
Hash: 8074408209f0f82f898c665ddb075e0c.dd3d59166fcfc7bc701ef3dbfdec36d2
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/7f2eaf69eda22dd27f68b410731c29d64330ea7d25d2bfffbedf9baeac8d09f6.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   xbuf_format_converter     @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   vspprintf                 @ 0x0000000000c20bc0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_printf                @ 0x0000000000c0ed82: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_error_cb              @ 0x000000000042cb0d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_error                @ 0x0000000000430dca: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_ASSIGN_OBJ_SPEC_CV_C @ 0x0000000000ec823a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_zval_ptr_dtor           @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_array_destroy        @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000000 rcx=0x0000000001646340 rdx=0x0000000000000000
rsi=0x0000000001646340 rdi=0x00007ffff3403050 rbp=0x00007fffff7ff3e0 rsp=0x00007fffff7feba0
 r8=0x000000000037e6b0  r9=0x0000000000000000 r10=0x00007ffff3403050 r11=0x0000000000000000
r12=0x0000000001646340 r13=0x00007ffff3403050 r14=0x0000000000000000 r15=0x00007fffff7ffaf0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 9) - Hash: 62c32258a611f4381585f09fe2393a7c.17f50e1ba3672ea3bd0347c6d31ec384
---CRASH SUMMARY---
Filename: /lab/php7/a66bd80108900ee773cf8c11abd624fb54146a04a62d5e90b4cccef50d3c40a7.php
SHA1: f55f39e9c9ef9dcc8c63e8cbd7a19bdf3c843e1d
Classification: EXPLOITABLE
Hash: 62c32258a611f4381585f09fe2393a7c.17f50e1ba3672ea3bd0347c6d31ec384
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/a66bd80108900ee773cf8c11abd624fb54146a04a62d5e90b4cccef50d3c40a7.php
Faulting Frame:
   zend_compile_expr @ 0x0000000000d0130c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d012fa: cmp ax,0x208
   0x0000000000d012fe: xchg ax,ax
   0x0000000000d01300: jne 0xd013f0 <zend_compile_expr+1376>
   0x0000000000d01306: mov rsi,rbx
   0x0000000000d01309: mov rdi,r14
=> 0x0000000000d0130c: call 0xd06f70 <zend_compile_binary_op>
   0x0000000000d01311: jmp 0xd01228 <zend_compile_expr+920>
   0x0000000000d01316: nop WORD PTR cs:[rax+rax*1+0x0]
   0x0000000000d01320: mov rsi,rbx
   0x0000000000d01323: mov rdi,r14
Stack Head (1000 entries):
   zend_compile_expr         @ 0x0000000000d0130c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000208 rbx=0x00007ffff3359170 rcx=0x0000000000000008 rdx=0x0000000000000000
rsi=0x00007ffff3359170 rdi=0x00007fffff7ff1c0 rbp=0x00007fffff7ff160 rsp=0x00007fffff7fefc0
 r8=0x00000000ffffffff  r9=0x0000000000000008 r10=0x0000000000000003 r11=0x0000000000365bd3
r12=0x000010007fef7e12 r13=0x0000000001b2d4c0 r14=0x00007fffff7ff1c0 r15=0x00000fffffeffe12
rip=0x0000000000d0130c efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: f2e712a0c584e2be5dfa60df83aed7eb.0eafe07a88d7096a6f147ee965a031b7
---CRASH SUMMARY---
Filename: /lab/php7/ddaf3bfd881eadbf34f8dec05023396b176de3adaa06358167678fa41720db33.php
SHA1: cf54f6217a3daddfa1b95733de78bc7e476bffab
Classification: EXPLOITABLE
Hash: f2e712a0c584e2be5dfa60df83aed7eb.0eafe07a88d7096a6f147ee965a031b7
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/ddaf3bfd881eadbf34f8dec05023396b176de3adaa06358167678fa41720db33.php
Faulting Frame:
   php_error_cb @ 0x000000000042c19e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x000000000042c18b: push r12
   0x000000000042c18d: push rbx
   0x000000000042c18e: mov ebx,edi
   0x000000000042c190: sub rsp,0x178
   0x000000000042c197: lea r13,[rip+0x1700542] # 0x1b2c6e0 <core_globals>
=> 0x000000000042c19e: mov QWORD PTR [rbp-0x150],0x41b58ab3
   0x000000000042c1a9: mov QWORD PTR [rbp-0x148],rsi
   0x000000000042c1b0: mov DWORD PTR [rbp-0x154],edx
   0x000000000042c1b6: mov DWORD PTR [rax+0x7fff8000],0xf1f1f1f1
   0x000000000042c1c0: mov DWORD PTR [r15+0x4],0xf4f4f400
Stack Head (1000 entries):
   php_error_cb              @ 0x000000000042c19e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_error                @ 0x0000000000430dca: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_get_string_func     @ 0x0000000000d43dcb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_get_string          @ 0x000000000058ab1c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_replace_in_subject    @ 0x000000000058ab1c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_replace_impl         @ 0x000000000058bce0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_preg_replace_callback @ 0x000000000058d51f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_do_repl_func         @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace_impl     @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace          @ 0x000000000058aa10: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_replace_in_subject    @ 0x000000000058ac35: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_replace_impl         @ 0x000000000058bce0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00000fffffeffdf2 rbx=0x0000000000000008 rcx=0x000000000168cca0 rdx=0x000000000000000e
rsi=0x00000000016421f8 rdi=0x0000000000000008 rbp=0x00007fffff7ff0e0 rsp=0x00007fffff7fef40
 r8=0x00007fffff7ff270  r9=0x00007fffff7ff7a0 r10=0x000000000000000e r11=0x0000000000000000
r12=0x0000000000000008 r13=0x0000000001b2c6e0 r14=0x00007ffff345d408 r15=0x000010007fef7df2
rip=0x000000000042c19e efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: c87978d24784a9f0bb077b42b085a0c4.0e3e98120e7ac0acb5b5f403eea2b494
---CRASH SUMMARY---
Filename: /lab/php7/6def4b8b6ec34fb0e7dc95be1e418bb7a20853a2372b81fb2d7648b5140a50eb.php
SHA1: 2dbb4a377493f17af6d7766584d1fb2592faa4a1
Classification: EXPLOITABLE
Hash: c87978d24784a9f0bb077b42b085a0c4.0e3e98120e7ac0acb5b5f403eea2b494
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/6def4b8b6ec34fb0e7dc95be1e418bb7a20853a2372b81fb2d7648b5140a50eb.php
Faulting Frame:
   zif_define @ 0x0000000000dc486f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000dc485a: mov rdx,QWORD PTR [rbp-0x198]
   0x0000000000dc4861: je 0xdc487a <zif_define+3002>
   0x0000000000dc4863: xor eax,eax
   0x0000000000dc4865: cmp BYTE PTR [rbp-0x170],0x0
   0x0000000000dc486c: sete al
=> 0x0000000000dc486f: mov DWORD PTR [rbp-0x198],eax
   0x0000000000dc4875: jmp 0xdc3e3e <zif_define+382>
   0x0000000000dc487a: mov esi,0x1
   0x0000000000dc487f: mov edi,0x3
   0x0000000000dc4884: call 0x432b2d <zend_wrong_parameter_type_error>
Stack Head (1000 entries):
   zif_define                @ 0x0000000000dc486f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_cast_object_tost @ 0x0000000000e34dce: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_define                @ 0x0000000000dc45f4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_cast_object_tost @ 0x0000000000e34dce: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_define                @ 0x0000000000dc45f4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000001 rbx=0x00007ffff3539fc0 rcx=0x0000000000000002 rdx=0x00007ffff353a010
rsi=0x00007ffff353a010 rdi=0x00007ffff353a018 rbp=0x00007fffff7ff190 rsp=0x00007fffff7fefa0
 r8=0x0000000000000003  r9=0x00000ffffe6a73e9 r10=0x0000000000000000 r11=0x0000000000000000
r12=0x000010007fef7e00 r13=0x00007ffff353a020 r14=0x00000fffffeffe00 r15=0x00007fffff7ff1f0
rip=0x0000000000dc486f efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 8074408209f0f82f898c665ddb075e0c.61a6bc505000ba99b6f8b81f318af275
---CRASH SUMMARY---
Filename: /lab/php7/cb5205676ed9b40ba71ea8c63e690f5c15c05518c0fba96492b3b8c1e84f63e3.php
SHA1: 0ee86373129ec52bfc9c183dad88904b3129015f
Classification: EXPLOITABLE
Hash: 8074408209f0f82f898c665ddb075e0c.61a6bc505000ba99b6f8b81f318af275
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/cb5205676ed9b40ba71ea8c63e690f5c15c05518c0fba96492b3b8c1e84f63e3.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   xbuf_format_converter     @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   vspprintf                 @ 0x0000000000c20bc0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_printf                @ 0x0000000000c0ed82: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_var_dump              @ 0x0000000000b88dc7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_var_dump              @ 0x0000000000b89bd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   reflection_method_invoke  @ 0x00000000009a0bb0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ffa2f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   reflection_method_invoke  @ 0x00000000009a0bb0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ffa2f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000000 rcx=0x000000000160c060 rdx=0x0000000000000000
rsi=0x000000000160c060 rdi=0x00007ffff3403000 rbp=0x00007fffff7ff610 rsp=0x00007fffff7fedd0
 r8=0x00000000003c8d48  r9=0x0000000000000000 r10=0x00007ffff3403000 r11=0x0000000000000000
r12=0x000000000160c060 r13=0x00007ffff3403000 r14=0x0000000000000000 r15=0x00007fffff7ffd20
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 8b1932fcb8c61dec196cae0df64d826c.1c7835a6569b991e8bdcd3cd85a2ddf8
---CRASH SUMMARY---
Filename: /lab/php7/373425cfbf395c18cba6a4209a485ab391fe792751f04a3624051f96e0c77ea5.php
SHA1: 5544b60986500bdbcbe9a465b81767d1f72a5112
Classification: EXPLOITABLE
Hash: 8b1932fcb8c61dec196cae0df64d826c.1c7835a6569b991e8bdcd3cd85a2ddf8
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/373425cfbf395c18cba6a4209a485ab391fe792751f04a3624051f96e0c77ea5.php
Faulting Frame:
   zend_call_function @ 0x0000000000d2a93e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d2a92f: mov r14,rdi
   0x0000000000d2a932: push r13
   0x0000000000d2a934: push r12
   0x0000000000d2a936: push rbx
   0x0000000000d2a937: sub rsp,0x2c8
=> 0x0000000000d2a93e: mov QWORD PTR [rbp-0x1c8],rax
   0x0000000000d2a945: lea rax,[rip+0x95896c] # 0x16832b8
   0x0000000000d2a94c: shr QWORD PTR [rbp-0x1c8],0x3
   0x0000000000d2a954: mov QWORD PTR [rbp-0x1b0],0x41b58ab3
   0x0000000000d2a95f: mov QWORD PTR [rbp-0x1a8],rax
Stack Head (1000 entries):
   zend_call_function        @ 0x0000000000d2a93e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_clone_member @ 0x0000000000e3269c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_clone_obj    @ 0x0000000000e32e55: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_CLONE_SPEC_CV_HANDLE @ 0x0000000000f9cad3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_clone_member @ 0x0000000000e3269c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_clone_obj    @ 0x0000000000e32e55: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_CLONE_SPEC_CV_HANDLE @ 0x0000000000f9cad3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_clone_member @ 0x0000000000e3269c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_clone_obj    @ 0x0000000000e32e55: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007fffff7feee0 rbx=0x000010007fef7e1a rcx=0x00007fffff7ff170 rdx=0x00000fffffeffe32
rsi=0x00007fffff7ff170 rdi=0x00007fffff7ff1d0 rbp=0x00007fffff7ff090 rsp=0x00007fffff7feda0
 r8=0x0000000000000007  r9=0x0000000000000000 r10=0x00007ffff34042e0 r11=0x00007ffff34043d8
r12=0x00007fffff7ff1d0 r13=0x00007fffff7ff130 r14=0x00007fffff7ff1d0 r15=0x00007fffff7ff350
rip=0x0000000000d2a93e efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 6a26b6a78613d440fd75a185be479a9d.4d9168d7c24328dbc480aab7a31d0b9a
---CRASH SUMMARY---
Filename: /lab/php7/8f94cea6b214c4ff7a880ac95e1256e06f91a70a33c8075cc0e19d6cf0b8a06f.php
SHA1: 3c85069336649ce4704d0624a40796d048c4cbe3
Classification: PROBABLY_EXPLOITABLE
Hash: 6a26b6a78613d440fd75a185be479a9d.4d9168d7c24328dbc480aab7a31d0b9a
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/8f94cea6b214c4ff7a880ac95e1256e06f91a70a33c8075cc0e19d6cf0b8a06f.php
Faulting Frame:
   spl_array_it_get_current_data @ 0x0000000000a2e7b6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000a2e7a0: shr rax,0x3
   0x0000000000a2e7a4: and ecx,0x7
   0x0000000000a2e7a7: movzx eax,BYTE PTR [rax+0x7fff8000]
   0x0000000000a2e7ae: cmp al,cl
   0x0000000000a2e7b0: jle 0xa2ea1e <spl_array_it_get_current_data+1022>
=> 0x0000000000a2e7b6: cmp BYTE PTR [rdx+0x8],0xf
   0x0000000000a2e7ba: mov rax,rdx
   0x0000000000a2e7bd: je 0xa2e920 <spl_array_it_get_current_data+768>
   0x0000000000a2e7c3: add rsp,0x28
   0x0000000000a2e7c7: pop rbx
Stack Head (9 entries):
   spl_array_it_get_current_ @ 0x0000000000a2e7b6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_spl_RecursiveIterator @ 0x0000000000a065db: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ff8c70: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x00007ffff34810d0 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000001b2d298 rdi=0x0000000000000008 rbp=0x00007fffffffaad0 rsp=0x00007fffffffaa80
 r8=0x0000000000000003  r9=0x00000ffffe682858 r10=0x0000000000000000 r11=0x00007ffff34142a8
r12=0x00007ffff3481080 r13=0x00007ffff3481090 r14=0x0000000000000003 r15=0x00000ffffe690212
rip=0x0000000000a2e7b6 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on destination operand
   Short description: DestAvNearNull (15/22)
   Explanation: The target crashed on an access violation at an address matching the destination operand of the instruction. This likely indicates a write access violation, which means the attacker may control write address and/or value. However, it there is a chance it could be a NULL dereference.
---END SUMMARY---
(1 of 1) - Hash: ef2f9d01c8a04b4a728f3279b4bf2f61.6855838de326732df2cbcf233c13e94b
---CRASH SUMMARY---
Filename: /lab/php7/ab53d0fbb1957fd9d97a25f905b39ddbd8021b9ffdb8732669d1ebaff9fc66a4.php
SHA1: 6fbd65b407985c4f9a740f5a6b81a58e7cd3594c
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: ef2f9d01c8a04b4a728f3279b4bf2f61.6855838de326732df2cbcf233c13e94b
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/ab53d0fbb1957fd9d97a25f905b39ddbd8021b9ffdb8732669d1ebaff9fc66a4.php
Faulting Frame:
   zend_compile_const @ 0x0000000000cf8770: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000cf875b: and ecx,0x7
   0x0000000000cf875e: movzx edx,BYTE PTR [rdx+0x7fff8000]
   0x0000000000cf8765: add ecx,0x1
   0x0000000000cf8768: cmp cl,dl
   0x0000000000cf876a: jge 0xcf8ba8 <zend_compile_const+2120>
=> 0x0000000000cf8770: movzx edx,WORD PTR [rax]
   0x0000000000cf8773: cmp dx,0x84
   0x0000000000cf8778: je 0xcf8708 <zend_compile_const+936>
   0x0000000000cf877a: cmp dx,0x119
   0x0000000000cf877f: jne 0xcf852d <zend_compile_const+461>
Stack Head (18 entries):
   zend_compile_const        @ 0x0000000000cf8770: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d0139b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_echo         @ 0x0000000000d06aff: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_stmt         @ 0x0000000000d17ad8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_top_stmt     @ 0x0000000000d2168b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_top_stmt     @ 0x0000000000d2173c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_top_stmt     @ 0x0000000000d2173c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_namespace    @ 0x0000000000d21c41: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_stmt         @ 0x0000000000d17a08: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_top_stmt     @ 0x0000000000d2168b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_top_stmt     @ 0x0000000000d2173c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile              @ 0x0000000000c8ee77: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   compile_file              @ 0x0000000000c93b0e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   phar_compile_file         @ 0x000000000094e336: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e04: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x00000ffffffff416 rcx=0x0000000000000001 rdx=0x0000000000000000
rsi=0x000000000167f6e0 rdi=0x00007ffff3474038 rbp=0x00007fffffffa140 rsp=0x00007fffffffa080
 r8=0x0000000000000000  r9=0x00007ffff3474078 r10=0x00007ffff34571f8 r11=0x00000ffffe68e80f
r12=0x0000000001b2d4c0 r13=0x00007fffffffa320 r14=0x000010007fff7416 r15=0x00007ffff34571f8
rip=0x0000000000cf8770 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 2) - Hash: e0535185014e63996752fe0cc826bc2c.acba4f7b9f957e94330247da7affa197
---CRASH SUMMARY---
Filename: /lab/php7/78498d5763276830ca9c8f781dd7c3378798d69790fde84cf7c3d264c7330253.php
SHA1: 0073787dabde434cdf8f6eeb7133b399d84dd150
Classification: EXPLOITABLE
Hash: e0535185014e63996752fe0cc826bc2c.acba4f7b9f957e94330247da7affa197
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/78498d5763276830ca9c8f781dd7c3378798d69790fde84cf7c3d264c7330253.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x000000000100145b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_GENERATOR_CREATE_SPE @ 0x000000000100145b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_resume     @ 0x0000000000e03596: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_SEND_UNPACK_SPEC_HAN @ 0x0000000000ff016a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_resume     @ 0x0000000000e03596: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_SEND_UNPACK_SPEC_HAN @ 0x0000000000ff016a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_resume     @ 0x0000000000e03596: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_SEND_UNPACK_SPEC_HAN @ 0x0000000000ff016a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_resume     @ 0x0000000000e03596: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_SEND_UNPACK_SPEC_HAN @ 0x0000000000ff016a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x00000000000000c0 rcx=0x00007ffff2bf9c00 rdx=0x00000000000000c0
rsi=0x00007ffff2ba3bf0 rdi=0x00007ffff2bf9c00 rbp=0x00007fffff7ff6d0 rsp=0x00007fffff7fee90
 r8=0x0000000000000007  r9=0x0000000000000000 r10=0x0000000000000000 r11=0x00000fffffeffebe
r12=0x00007ffff2ba3bf0 r13=0x00007ffff2bf9c00 r14=0x00007ffff2ba3bf0 r15=0x00007ffff3466020
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 72ebd918884b6bc0585c9dfbd9f96b0f.9b152564288e14ec2180006d440b1137
---CRASH SUMMARY---
Filename: /lab/php7/53657650fac4ecc18120877acd49c4b28db69e3210a04db93da8ca69a4dd1913.php
SHA1: 42c58581c3e0c83d8782081cf9f28086df36c9f2
Classification: EXPLOITABLE
Hash: 72ebd918884b6bc0585c9dfbd9f96b0f.9b152564288e14ec2180006d440b1137
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/53657650fac4ecc18120877acd49c4b28db69e3210a04db93da8ca69a4dd1913.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000b4b290: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_implode               @ 0x0000000000b4b290: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_implode               @ 0x0000000000b4bd47: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_forward_static_call   @ 0x0000000000ac277e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_forward_static_call   @ 0x0000000000ac277e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_forward_static_call   @ 0x0000000000ac277e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000004 rcx=0x0000000000000000 rdx=0x0000000000000004
rsi=0x000060060000ec38 rdi=0x00007ffff346410d rbp=0x00007fffff7ff790 rsp=0x00007fffff7fef50
 r8=0x0000000001678060  r9=0x0000000000000000 r10=0x0000000000000003 r11=0x00007ffff306eb00
r12=0x000060060000ec38 r13=0x00007ffff346410d r14=0x00007ffff3463868 r15=0x00007ffff34634a0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 0a4365a5a9f14886f9c664bb92741f34.c01b09abd6b05d1c611a53a809f98318
---CRASH SUMMARY---
Filename: /lab/php7/c307b825001b675d3ecf1bf7a100e4b238c74680f58811aa2edf2f781a2d9b98.php
SHA1: 71f18f20b59c99c0975cd2944a8217de0fbefa69
Classification: EXPLOITABLE
Hash: 0a4365a5a9f14886f9c664bb92741f34.c01b09abd6b05d1c611a53a809f98318
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/c307b825001b675d3ecf1bf7a100e4b238c74680f58811aa2edf2f781a2d9b98.php
Faulting Frame:
   gc_mark_grey @ 0x0000000000df12fe: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000df12e3: push rbx
   0x0000000000df12e4: lea rbx,[rip+0x8b1a0d] # 0x16a2cf8
   0x0000000000df12eb: shr r12,0x3
   0x0000000000df12ef: lea r14,[r12+0x7fff8000]
   0x0000000000df12f7: sub rsp,0x138
=> 0x0000000000df12fe: mov QWORD PTR [rbp-0x108],rbx
   0x0000000000df1305: lea rbx,[rip+0xd3bb94] # 0x1b2cea0 <executor_globals>
   0x0000000000df130c: mov QWORD PTR [rbp-0x110],0x41b58ab3
   0x0000000000df1317: mov DWORD PTR [r12+0x7fff8000],0xf1f1f1f1
   0x0000000000df1323: mov DWORD PTR [r14+0x4],0xf4f4f404
Stack Head (1000 entries):
   gc_mark_grey              @ 0x0000000000df12fe: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   gc_mark_grey              @ 0x0000000000df18f3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x00000000016a2cf8 rcx=0x0000000000000000 rdx=0x0000000000000003
rsi=0x0000000000000003 rdi=0x00007ffff325d658 rbp=0x00007fffff7ff0e0 rsp=0x00007fffff7fef80
 r8=0x0000000000000000  r9=0x000000000035d97f r10=0x0000000000e36510 r11=0x00007fffffffc9b0
r12=0x00000fffffeffdfa r13=0x00007ffff325bc60 r14=0x000010007fef7dfa r15=0x00007ffff325bc80
rip=0x0000000000df12fe efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 5c98308aa257457075163c60309d6dda.1c07a44fa33efd73cb6fa22b3e95f06b
---CRASH SUMMARY---
Filename: /lab/php7/ea154594837156a6c874736a4a6fcbf18eae63f11ec2697877e231c561a2310c.php
SHA1: 4c97e2a62ba8a6e54b0dbc4be3c9c781ecda1ede
Classification: EXPLOITABLE
Hash: 5c98308aa257457075163c60309d6dda.1c07a44fa33efd73cb6fa22b3e95f06b
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/ea154594837156a6c874736a4a6fcbf18eae63f11ec2697877e231c561a2310c.php
Faulting Frame:
   zend_parse_parameters @ 0x0000000000d81060: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d81051: mov rbp,rsp
   0x0000000000d81054: push r12
   0x0000000000d81056: push rbx
   0x0000000000d81057: sub rsp,0x110
   0x0000000000d8105e: test al,al
=> 0x0000000000d81060: mov QWORD PTR [rbp-0xb0],rdx
   0x0000000000d81067: mov QWORD PTR [rbp-0xa8],rcx
   0x0000000000d8106e: mov QWORD PTR [rbp-0xa0],r8
   0x0000000000d81075: mov QWORD PTR [rbp-0x98],r9
   0x0000000000d8107c: je 0xd810a1 <zend_parse_parameters+81>
Stack Head (1000 entries):
   zend_parse_parameters     @ 0x0000000000d81060: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_var_dump              @ 0x0000000000b89ba7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_get_debug_info   @ 0x0000000000e33294: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_var_dump              @ 0x0000000000b8936d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_var_dump              @ 0x0000000000b89bd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_get_debug_info   @ 0x0000000000e33294: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_var_dump              @ 0x0000000000b8936d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_var_dump              @ 0x0000000000b89bd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x0000000001b2cea0 rcx=0x00007fffff7ff090 rdx=0x00007fffff7ff0d0
rsi=0x000000000160c6a0 rdi=0x0000000000000001 rbp=0x00007fffff7ff060 rsp=0x00007fffff7fef40
 r8=0x0000000000000003  r9=0x00000ffffe6a62c1 r10=0x0000000000000000 r11=0x0000000000000000
r12=0x00007ffff3531680 r13=0x000010007fef7e0e r14=0x00000fffffeffe0e r15=0x00007ffff3471380
rip=0x0000000000d81060 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: c4c0430d40c61f4c10dab78ac609f350.a2b571f00e8dd88ebeab0b5f91132b20
---CRASH SUMMARY---
Filename: /lab/php7/3ba28acd3d1ab91483f09b01aa70130ca9a8177e9cf49001de067e7e7e58a128.php
SHA1: 3aaee846fa919033f5da0eeb45b1d0fd325a16e5
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: c4c0430d40c61f4c10dab78ac609f350.a2b571f00e8dd88ebeab0b5f91132b20
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/3ba28acd3d1ab91483f09b01aa70130ca9a8177e9cf49001de067e7e7e58a128.php
Faulting Frame:
   instanceof_interface @ 0x0000000000d39d7d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d39d67: je 0xd39da0 <instanceof_interface+176>
   0x0000000000d39d69: mov rax,rbx
   0x0000000000d39d6c: shr rax,0x3
   0x0000000000d39d70: cmp BYTE PTR [rax+0x7fff8000],0x0
   0x0000000000d39d77: jne 0xd39dff <instanceof_interface+271>
=> 0x0000000000d39d7d: mov rdi,QWORD PTR [rbx]
   0x0000000000d39d80: mov rsi,r12
   0x0000000000d39d83: call 0xd39cf0 <instanceof_interface>
   0x0000000000d39d88: test al,al
   0x0000000000d39d8a: je 0xd39d60 <instanceof_interface+112>
Stack Head (9 entries):
   instanceof_interface      @ 0x0000000000d39d7d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_recursive_it_it_const @ 0x0000000000a183e2: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ffa2f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x0000000000000003 rcx=0x0000000000000007 rdx=0x00000ffffffff448
rsi=0x0000603400004400 rdi=0x00007fffffffa240 rbp=0x00007fffffffa780 rsp=0x00007fffffffa760
 r8=0x0000000000000003  r9=0x00007fffffffa990 r10=0x00007ffff3404018 r11=0x00007fffffffa690
r12=0x0000603400004400 r13=0x000000079a3a1683 r14=0x00007fffffffa080 r15=0x00007ffff34142b0
rip=0x0000000000d39d7d efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 6) - Hash: 14fb54d69e0333d285c85a9b21e9262f.ae2be9bf9e0e62d973b81fac4aa60b0f
---CRASH SUMMARY---
Filename: /lab/php7/fddeae14f6d0053ea21f51ade7c40bda078ce92415aac23c7ae880883b34daaf.php
SHA1: bc021e425f9bb20024ddb50ca935ee90747aed6d
Classification: EXPLOITABLE
Hash: 14fb54d69e0333d285c85a9b21e9262f.ae2be9bf9e0e62d973b81fac4aa60b0f
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/fddeae14f6d0053ea21f51ade7c40bda078ce92415aac23c7ae880883b34daaf.php
Faulting Frame:
   zend_is_callable_ex @ 0x0000000000d7aee0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d7aecb: mov r8,rbx
   0x0000000000d7aece: mov rcx,rbx
   0x0000000000d7aed1: shr r8,0x3
   0x0000000000d7aed5: and ecx,0x7
   0x0000000000d7aed8: movzx eax,BYTE PTR [r8+0x7fff8000]
=> 0x0000000000d7aee0: mov QWORD PTR [rbp-0x120],rcx
   0x0000000000d7aee7: cmp al,cl
   0x0000000000d7aee9: jle 0xd7cd39 <zend_is_callable_ex+7993>
   0x0000000000d7aeef: lea rax,[rbx+0x10]
   0x0000000000d7aef3: mov BYTE PTR [rbx],0x0
Stack Head (1000 entries):
   zend_is_callable_ex       @ 0x0000000000d7aee0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_fcall_info_init      @ 0x0000000000d7dc55: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_arg_impl       @ 0x0000000000d7ed18: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_arg            @ 0x0000000000d7ed18: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_va_args        @ 0x0000000000d808f9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_parameters     @ 0x0000000000d8111e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_usort                 @ 0x0000000000a8f4b5: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_array_user_compare    @ 0x0000000000a8ca43: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_sort_3               @ 0x0000000000dce989: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_insert_sort          @ 0x0000000000dce989: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_hash_sort_ex         @ 0x0000000000db44a2: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_usort                 @ 0x0000000000a8f69e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x0000000001b2a858 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x00007ffff32bda20 rbp=0x00007fffff7ff110 rsp=0x00007fffff7fefc0
 r8=0x000000000036550b  r9=0x00007fffff7ff230 r10=0x000010007e64fb45 r11=0x0000000000000000
r12=0x000010007fef7e04 r13=0x00000fffffeffe04 r14=0x0000000000000000 r15=0x00007ffff32bda20
rip=0x0000000000d7aee0 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: c8398446c7f35a58807a1cbb98ab610c.39f7580494c733ae844745ee0223c4a7
---CRASH SUMMARY---
Filename: /lab/php7/3d768d09dc0294a8a47c0eafa5d3d26b4cc60ad9fef5fb02e12e5d0215ccf4be.php
SHA1: 66aabc51e6d7e49c2cedb50e50e857e6b9dfe78e
Classification: UNKNOWN
Hash: c8398446c7f35a58807a1cbb98ab610c.39f7580494c733ae844745ee0223c4a7
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/3d768d09dc0294a8a47c0eafa5d3d26b4cc60ad9fef5fb02e12e5d0215ccf4be.php
Faulting Frame:
   zend_hash_find @ 0x0000000000db1df7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000db1dea: push r14
   0x0000000000db1dec: mov r14,r15
   0x0000000000db1def: shr r14,0x3
   0x0000000000db1df3: push r13
   0x0000000000db1df5: push r12
=> 0x0000000000db1df7: push rbx
   0x0000000000db1df8: mov rbx,rsi
   0x0000000000db1dfb: sub rsp,0x28
   0x0000000000db1dff: cmp BYTE PTR [r14+0x7fff8000],0x0
   0x0000000000db1e07: jne 0xdb20fe <zend_hash_find+798>
Stack Head (1000 entries):
   zend_hash_find            @ 0x0000000000db1df7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_hash_find_ptr        @ 0x0000000000d6512f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable_check_fu @ 0x0000000000d6512f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable_ex       @ 0x0000000000d7bd1e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_fcall_info_init      @ 0x0000000000d7dc55: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_arg_func       @ 0x0000000000ab8149: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_array_map             @ 0x0000000000ab8149: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_array_map             @ 0x0000000000ab8b1f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_array_map             @ 0x0000000000ab8b1f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000001b2cea0 rbx=0x00007fffff7ff460 rcx=0x0000000000000000 rdx=0x00007fffff7ff460
rsi=0x00007ffff34013e8 rdi=0x0000600c0000bf00 rbp=0x00007fffff7ff020 rsp=0x00007fffff7ff000
 r8=0x00007fffff7ff3a0  r9=0x0000000000000000 r10=0x00007ffff32aba78 r11=0x00007ffff32ab920
r12=0x00007ffff34013e8 r13=0x00007ffff32aba70 r14=0x00000ffffe68027e r15=0x00007ffff34013f0
rip=0x0000000000db1df7 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 1) - Hash: 8074408209f0f82f898c665ddb075e0c.c82aec36b41c7ae5646f87d766cd5f22
---CRASH SUMMARY---
Filename: /lab/php7/83e6605443020f613acaacaa8035e0518b2c941484eb2a6f6f5c393f1c9a034e.php
SHA1: 212d20383bc584f902d0dabe1d898799c460ed07
Classification: EXPLOITABLE
Hash: 8074408209f0f82f898c665ddb075e0c.c82aec36b41c7ae5646f87d766cd5f22
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/83e6605443020f613acaacaa8035e0518b2c941484eb2a6f6f5c393f1c9a034e.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   xbuf_format_converter     @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   vspprintf                 @ 0x0000000000c20bc0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_printf                @ 0x0000000000c0ed82: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_var_dump              @ 0x0000000000b88cfb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_var_dump              @ 0x0000000000b89bd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_array_reduce          @ 0x0000000000ab7066: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_array_reduce          @ 0x0000000000ab7066: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000000 rcx=0x000000000160c060 rdx=0x0000000000000000
rsi=0x000000000160c060 rdi=0x00007ffff3403000 rbp=0x00007fffff7ff2b0 rsp=0x00007fffff7fea70
 r8=0x0000000000296d88  r9=0x0000000000000000 r10=0x00007ffff3403000 r11=0x0000000000000000
r12=0x000000000160c060 r13=0x00007ffff3403000 r14=0x0000000000000000 r15=0x00007fffff7ff9c0
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 7125ba376407becdc96f3f6f4e55ff5b.88674ff213948020d6beb98fdb417f3d
---CRASH SUMMARY---
Filename: /lab/php7/a2e0cc8619f5378225fabe503cb9620127a6d39045e097609b42403eef7fbca9.php
SHA1: 3c1eec1a5f7b9f5ac05fb1a50d61d3718769127a
Classification: EXPLOITABLE
Hash: 7125ba376407becdc96f3f6f4e55ff5b.88674ff213948020d6beb98fdb417f3d
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/a2e0cc8619f5378225fabe503cb9620127a6d39045e097609b42403eef7fbca9.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   xbuf_format_converter     @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   vspprintf                 @ 0x0000000000c20bc0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_error_cb              @ 0x000000000042c22f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_error                @ 0x0000000000430dca: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zval_undefined_cv         @ 0x000000000043bc38: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _get_zval_cv_lookup_BP_VA @ 0x0000000000f12dc3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_SEND_VAR_EX_SPEC_CV_ @ 0x0000000000f12dc3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_free_compiled_variables @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000001 rcx=0x00007ffff3463518 rdx=0x0000000000000001
rsi=0x00007ffff3463518 rdi=0x00007ffff3403014 rbp=0x00007fffff7ff6f0 rsp=0x00007fffff7feeb0
 r8=0x00007ffff3403014  r9=0x0000000000000015 r10=0x0000000000000000 r11=0x0000000000000000
r12=0x00007ffff3463518 r13=0x00007ffff3403014 r14=0x0000000000000000 r15=0x00007fffff7ffe00
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 8074408209f0f82f898c665ddb075e0c.000ca50a8010226923c0b211f936fd85
---CRASH SUMMARY---
Filename: /lab/php7/d2f8dd307f0f590660c698f7eee010d87976b1404518319580cac83fe2eded29.php
SHA1: d6a1c97e9f5ccbbaf1155b6caa3d0fc5552933d1
Classification: EXPLOITABLE
Hash: 8074408209f0f82f898c665ddb075e0c.000ca50a8010226923c0b211f936fd85
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/d2f8dd307f0f590660c698f7eee010d87976b1404518319580cac83fe2eded29.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   xbuf_format_converter     @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   vspprintf                 @ 0x0000000000c20bc0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_printf                @ 0x0000000000c0ed82: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_error_cb              @ 0x000000000042cb0d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_error                @ 0x0000000000430dca: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_fetch_dimension_addr @ 0x000000000043be63: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_fetch_dimension_addr @ 0x000000000043be63: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_FETCH_DIM_R_SPEC_TMP @ 0x0000000000f5d5de: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000000 rcx=0x0000000001646340 rdx=0x0000000000000000
rsi=0x0000000001646340 rdi=0x00007ffff3403050 rbp=0x00007fffff7ff730 rsp=0x00007fffff7feef0
 r8=0x00000000001ab490  r9=0x0000000000000000 r10=0x00007ffff3403050 r11=0x0000000000000000
r12=0x0000000001646340 r13=0x00007ffff3403050 r14=0x0000000000000000 r15=0x00007fffff7ffe40
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 65f06b6a3de9fbd7471f581662ecaa21.36c0f6fee11175c091a0484135a058b3
---CRASH SUMMARY---
Filename: /lab/php7/7077c5f240326b77362bc3c8201ad29e7791e415a156b81e9bfa4b3ce4f17e35.php
SHA1: 0fc833b8634ff441c6f0f943dc6b5657739d3a73
Classification: EXPLOITABLE
Hash: 65f06b6a3de9fbd7471f581662ecaa21.36c0f6fee11175c091a0484135a058b3
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/7077c5f240326b77362bc3c8201ad29e7791e415a156b81e9bfa4b3ce4f17e35.php
Faulting Frame:
   zend_call_function @ 0x0000000000d2a93e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d2a92f: mov r14,rdi
   0x0000000000d2a932: push r13
   0x0000000000d2a934: push r12
   0x0000000000d2a936: push rbx
   0x0000000000d2a937: sub rsp,0x2c8
=> 0x0000000000d2a93e: mov QWORD PTR [rbp-0x1c8],rax
   0x0000000000d2a945: lea rax,[rip+0x95896c] # 0x16832b8
   0x0000000000d2a94c: shr QWORD PTR [rbp-0x1c8],0x3
   0x0000000000d2a954: mov QWORD PTR [rbp-0x1b0],0x41b58ab3
   0x0000000000d2a95f: mov QWORD PTR [rbp-0x1a8],rax
Stack Head (1000 entries):
   zend_call_function        @ 0x0000000000d2a93e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_clone_member @ 0x0000000000e3269c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_clone_obj    @ 0x0000000000e32e55: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_CLONE_SPEC_TMPVAR_HA @ 0x0000000000eeac8c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_clone_member @ 0x0000000000e3269c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_clone_obj    @ 0x0000000000e32e55: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_CLONE_SPEC_TMPVAR_HA @ 0x0000000000eeac8c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_clone_member @ 0x0000000000e3269c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_clone_obj    @ 0x0000000000e32e55: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007fffff7feee0 rbx=0x000010007fef7e1a rcx=0x00007fffff7ff170 rdx=0x00000fffffeffe32
rsi=0x00007fffff7ff170 rdi=0x00007fffff7ff1d0 rbp=0x00007fffff7ff090 rsp=0x00007fffff7feda0
 r8=0x0000000000000007  r9=0x0000000000000000 r10=0x00007ffff3404018 r11=0x00007ffff3404110
r12=0x00007fffff7ff1d0 r13=0x00007fffff7ff130 r14=0x00007fffff7ff1d0 r15=0x00007fffff7ff350
rip=0x0000000000d2a93e efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 5027da6a740e0ca5457a2b787ff8489e.8128c091498687e17bcf31545ddb44d3
---CRASH SUMMARY---
Filename: /lab/php7/1af0039a371a7a33cbac5dec06287a73dc87e0af2b59223f85fb27629757b366.php
SHA1: d5b433e0c30ec4517cc1e26d05f427a9901a5919
Classification: UNKNOWN
Hash: 5027da6a740e0ca5457a2b787ff8489e.8128c091498687e17bcf31545ddb44d3
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/1af0039a371a7a33cbac5dec06287a73dc87e0af2b59223f85fb27629757b366.php
Faulting Frame:
   _function_string @ 0x00000000009ac0fb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x00000000009ac0eb: test rax,rax
   0x00000000009ac0ee: je 0x9ac121 <_function_string+705>
   0x00000000009ac0f0: lea rdi,[rax+0x8]
   0x00000000009ac0f4: mov rdx,rdi
   0x00000000009ac0f7: shr rdx,0x3
=> 0x00000000009ac0fb: cmp BYTE PTR [rdx+0x7fff8000],0x0
   0x00000000009ac102: jne 0x9acef3 <_function_string+4243>
   0x00000000009ac108: mov rdx,QWORD PTR [rax+0x8]
   0x00000000009ac10c: lea rsi,[rip+0xb5896d] # 0x1504a80
   0x00000000009ac113: mov rdi,r12
Stack Head (13 entries):
   _function_string          @ 0x00000000009ac0fb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_reflection_method___t @ 0x00000000009af7b4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bcbf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_cast_object_tost @ 0x0000000000e34dce: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_get_string_func     @ 0x0000000000d43f94: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_ECHO_SPEC_CV_HANDLER @ 0x0000000000f666ee: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0xffffffff00000c08 rbx=0x00007ffff347c1c0 rcx=0x00000ffffe680600 rdx=0x1fffffffe0000182
rsi=0x00000ffffe680014 rdi=0xffffffff00000c10 rbp=0x00007fffffffa340 rsp=0x00007fffffffa250
 r8=0x00000ffffe68f83a  r9=0x00007ffff347c1d0 r10=0x0000000000000003 r11=0x00007fffffffa7d0
r12=0x00007fffffffa380 r13=0x00000ffffe68f838 r14=0x00000ffffe68f838 r15=0x000060340000d780
rip=0x00000000009ac0fb efl=0x0000000000010a06  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 1) - Hash: 92475749498675b462d6d52aa90a5070.926ed0c3a671b776f5b72a16fd141d56
---CRASH SUMMARY---
Filename: /lab/php7/993d46ff9500463031c246462d003d18bd5a0399a4bd39930f2060bbd72f22d5.php
SHA1: dbe88efdcaa041b4f0c13bffb13b97cb62f09b88
Classification: EXPLOITABLE
Hash: 92475749498675b462d6d52aa90a5070.926ed0c3a671b776f5b72a16fd141d56
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/993d46ff9500463031c246462d003d18bd5a0399a4bd39930f2060bbd72f22d5.php
Faulting Frame:
   zend_call_function @ 0x0000000000d2a93e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d2a92f: mov r14,rdi
   0x0000000000d2a932: push r13
   0x0000000000d2a934: push r12
   0x0000000000d2a936: push rbx
   0x0000000000d2a937: sub rsp,0x2c8
=> 0x0000000000d2a93e: mov QWORD PTR [rbp-0x1c8],rax
   0x0000000000d2a945: lea rax,[rip+0x95896c] # 0x16832b8
   0x0000000000d2a94c: shr QWORD PTR [rbp-0x1c8],0x3
   0x0000000000d2a954: mov QWORD PTR [rbp-0x1b0],0x41b58ab3
   0x0000000000d2a95f: mov QWORD PTR [rbp-0x1a8],rax
Stack Head (1000 entries):
   zend_call_function        @ 0x0000000000d2a93e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_rewind       @ 0x0000000000dd4137: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_dual_it_rewind        @ 0x0000000000a263f4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_append_it_next_iterat @ 0x0000000000a263f4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_spl_AppendIterator_re @ 0x0000000000a2750a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bcbf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_rewind       @ 0x0000000000dd4137: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_dual_it_rewind        @ 0x0000000000a263f4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_append_it_next_iterat @ 0x0000000000a263f4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_spl_AppendIterator_re @ 0x0000000000a2750a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bcbf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_rewind       @ 0x0000000000dd4137: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_dual_it_rewind        @ 0x0000000000a263f4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007fffff7fef00 rbx=0x000010007fef7e1e rcx=0x00007fffff7ff190 rdx=0x00000fffffeffe36
rsi=0x00007fffff7ff190 rdi=0x00007fffff7ff1f0 rbp=0x00007fffff7ff0b0 rsp=0x00007fffff7fedc0
 r8=0x0000000000000006  r9=0x0000000000000000 r10=0x0000603400001e80 r11=0x0000603400002000
r12=0x00007fffff7ff1f0 r13=0x00007fffff7ff150 r14=0x00007fffff7ff1f0 r15=0x00007ffff345d508
rip=0x0000000000d2a93e efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: e0535185014e63996752fe0cc826bc2c.62ddad2b0c356fa2e2d6d564bd356ea3
---CRASH SUMMARY---
Filename: /lab/php7/f61d90c4c34b02b2538ad9b2a899f93f765c721cba1f3d15d9b5c55b543343a8.php
SHA1: b7b7f82110d89b6e4eaa043bda9543263bd217ba
Classification: EXPLOITABLE
Hash: e0535185014e63996752fe0cc826bc2c.62ddad2b0c356fa2e2d6d564bd356ea3
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/f61d90c4c34b02b2538ad9b2a899f93f765c721cba1f3d15d9b5c55b543343a8.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x000000000100145b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_GENERATOR_CREATE_SPE @ 0x000000000100145b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_resume     @ 0x0000000000e03596: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_ensure_ini @ 0x00000000004352f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_ensure_ini @ 0x0000000000e05df9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_Generator_valid       @ 0x0000000000e05df9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ffa2f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_resume     @ 0x0000000000e03596: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_ensure_ini @ 0x00000000004352f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_ensure_ini @ 0x0000000000e05df9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_Generator_valid       @ 0x0000000000e05df9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ffa2f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x00000000000000d0 rcx=0x00007ffff2ddc700 rdx=0x00000000000000d0
rsi=0x00007ffff2d17390 rdi=0x00007ffff2ddc700 rbp=0x00007fffff7ff760 rsp=0x00007fffff7fef20
 r8=0x0000000000000007  r9=0x0000000000000000 r10=0x00007ffff2d17340 r11=0x00000ffffe5a2e6b
r12=0x00007ffff2d17390 r13=0x00007ffff2ddc700 r14=0x00007ffff2d17390 r15=0x00007ffff3483000
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 31c000bccf9e97016495201819827ff1.8d09769177441f24dc5b46f3d57a67a0
---CRASH SUMMARY---
Filename: /lab/php7/cf7195b852b0b285213bca9e68405dcc9eb47340997ecb6aabd9e1fd5d9123a2.php
SHA1: 20d78b41ef2ba4747275e9113cee82a79e441ded
Classification: PROBABLY_EXPLOITABLE
Hash: 31c000bccf9e97016495201819827ff1.8d09769177441f24dc5b46f3d57a67a0
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/cf7195b852b0b285213bca9e68405dcc9eb47340997ecb6aabd9e1fd5d9123a2.php
Faulting Frame:
   _zval_get_string_func @ 0x0000000000d441cf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d441b8: mov rax,QWORD PTR [rax+0x48]
   0x0000000000d441bc: test rax,rax
   0x0000000000d441bf: je 0xd442a3 <_zval_get_string_func+2195>
   0x0000000000d441c5: mov rdi,r12
   0x0000000000d441c8: lea rsi,[rbp-0xd0]
=> 0x0000000000d441cf: call rax
   0x0000000000d441d1: lea rdi,[rax+0x8]
   0x0000000000d441d5: mov r15,rax
   0x0000000000d441d8: mov rax,rdi
   0x0000000000d441db: mov rdx,rdi
Stack Head (17 entries):
   _zval_get_string_func     @ 0x0000000000d441cf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_get_string          @ 0x00000000009aba46: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _parameter_string         @ 0x00000000009aba46: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _function_parameter_strin @ 0x00000000009ac420: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _function_string          @ 0x00000000009ac420: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_reflection_method___t @ 0x00000000009af7b4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bcbf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_cast_object_tost @ 0x0000000000e34dce: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_get_string_func     @ 0x0000000000d43f94: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_ECHO_SPEC_TMPVAR_HAN @ 0x0000000000e94643: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x656d726f66206c6c rbx=0x00000ffffffff418 rcx=0x0000000000000000 rdx=0x00000000002d19d1
rsi=0x00007fffffffa0e0 rdi=0x00007fffffffa1f0 rbp=0x00007fffffffa1b0 rsp=0x00007fffffffa0c0
 r8=0x00007fffffffa1f9  r9=0x00007fffffffa1fa r10=0x00000ffffffff43e r11=0x00000ffffffff37a
r12=0x00007fffffffa1f0 r13=0x000010007fff7418 r14=0x000010007fff743a r15=0x00007fffffffa1f0
rip=0x0000000000d441cf efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL during branch instruction
   Short description: BranchAvNearNull (13/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted. However, there is a chance it could be a NULL dereference.
---END SUMMARY---
(1 of 2) - Hash: f363f6a937f689b40f442efc7fa11603.ae1d0d651b088e7c400acc6217cf7673
---CRASH SUMMARY---
Filename: /lab/php7/aee95cadc555e18b211f30ebb9a641d71bde2e36005ed50be17da46810ceb891.php
SHA1: e41b8d75b48522672d1883ee33e7c763b78becf1
Classification: EXPLOITABLE
Hash: f363f6a937f689b40f442efc7fa11603.ae1d0d651b088e7c400acc6217cf7673
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/aee95cadc555e18b211f30ebb9a641d71bde2e36005ed50be17da46810ceb891.php
Faulting Frame:
   zend_call_method @ 0x0000000000dd2959: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000dd2945: push r12
   0x0000000000dd2947: push rbx
   0x0000000000dd2948: lea rbx,[r14+0x7fff8000]
   0x0000000000dd294f: sub rsp,0x198
   0x0000000000dd2956: mov edx,DWORD PTR [rbp+0x10]
=> 0x0000000000dd2959: mov QWORD PTR [rbp-0x198],rcx
   0x0000000000dd2960: mov QWORD PTR [rbp-0x190],0x41b58ab3
   0x0000000000dd296b: mov QWORD PTR [rbp-0x188],rax
   0x0000000000dd2972: mov DWORD PTR [r14+0x7fff8000],0xf1f1f1f1
   0x0000000000dd297d: mov DWORD PTR [rbx+0x4],0xf4f40000
Stack Head (1000 entries):
   zend_call_method          @ 0x0000000000dd2959: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_free_compiled_variables @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_leave_helper_SPEC    @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_free_compiled_variables @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_leave_helper_SPEC    @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x000000000169e6c0 rbx=0x000010007fef7df6 rcx=0x00000000016aca00 rdx=0x0000000000000000
rsi=0x00007ffff3404018 rdi=0x00007fffff7ff1e0 rbp=0x00007fffff7ff140 rsp=0x00007fffff7fef80
 r8=0x000000000000000a  r9=0x0000000000000000 r10=0x00007ffff3404018 r11=0x00007fffff7ff1a0
r12=0x000010007fef7e30 r13=0x00000fffffeffe30 r14=0x00000fffffeffdf6 r15=0x00007fffff7ff1e0
rip=0x0000000000dd2959 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: fd30fb14fdb8435f9d84b7a3f8d6946f.8eb7d3f07314365ab38e89721c16c4b0
---CRASH SUMMARY---
Filename: /lab/php7/6ae1a83707ecb6cda6b7eb3d7b55946c4a15e253d4140d6b7c40d3510e73cb89.php
SHA1: cc1f5cf5a4377819cedb34491ef668aea1e0e72a
Classification: PROBABLY_EXPLOITABLE
Hash: fd30fb14fdb8435f9d84b7a3f8d6946f.8eb7d3f07314365ab38e89721c16c4b0
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/6ae1a83707ecb6cda6b7eb3d7b55946c4a15e253d4140d6b7c40d3510e73cb89.php
Faulting Frame:
   zend_generator_resume @ 0x0000000000e03688: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000e03670: lea rdi,[rax+0x30]
   0x0000000000e03674: mov rsi,rdi
   0x0000000000e03677: shr rsi,0x3
   0x0000000000e0367b: cmp BYTE PTR [rsi+0x7fff8000],0x0
   0x0000000000e03682: jne 0xe044e6 <zend_generator_resume+4678>
=> 0x0000000000e03688: mov QWORD PTR [rax+0x30],r10
   0x0000000000e0368c: jmp 0xe0352a <zend_generator_resume+650>
   0x0000000000e03691: cmp al,r9b
   0x0000000000e03694: jg 0xe03434 <zend_generator_resume+404>
   0x0000000000e0369a: mov rdi,r13
Stack Head (8 entries):
   zend_generator_resume     @ 0x0000000000e03688: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ffa2f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x00007ffff3474300 rcx=0x0000000000000000 rdx=0x00000ffffe68e889
rsi=0x0000000000000006 rdi=0x0000000000000030 rbp=0x00007fffffffaa80 rsp=0x00007fffffffa980
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x00007ffff3414200 r11=0x000000000000017d
r12=0x00007ffff3474300 r13=0x00007ffff3474448 r14=0x0000000001b2cea0 r15=0x00000ffffe68e868
rip=0x0000000000e03688 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on destination operand
   Short description: DestAvNearNull (15/22)
   Explanation: The target crashed on an access violation at an address matching the destination operand of the instruction. This likely indicates a write access violation, which means the attacker may control write address and/or value. However, it there is a chance it could be a NULL dereference.
---END SUMMARY---
(1 of 1) - Hash: 94ed975eaf8824c51845a96d1c936a67.2452cda58aabf04b0c49375543e83bb6
---CRASH SUMMARY---
Filename: /lab/php7/f6749dfead70fcd4206b281c05266ed04c4e55a696b2baf27d78bdf79a867b37.php
SHA1: 0c15595912333090fbd08af641b8994296aced9c
Classification: UNKNOWN
Hash: 94ed975eaf8824c51845a96d1c936a67.2452cda58aabf04b0c49375543e83bb6
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/f6749dfead70fcd4206b281c05266ed04c4e55a696b2baf27d78bdf79a867b37.php
Faulting Frame:
   zend_mm_alloc_small @ 0x0000000000cd82de: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000cd82ce: mov rax,QWORD PTR [rdx+0x50]
   0x0000000000cd82d2: test rax,rax
   0x0000000000cd82d5: je 0xcd8300 <_emalloc_56+224>
   0x0000000000cd82d7: mov rcx,rax
   0x0000000000cd82da: shr rcx,0x3
=> 0x0000000000cd82de: cmp BYTE PTR [rcx+0x7fff8000],0x0
   0x0000000000cd82e5: jne 0xcd8345 <_emalloc_56+293>
   0x0000000000cd82e7: mov rcx,QWORD PTR [rax]
   0x0000000000cd82ea: mov QWORD PTR [rdx+0x50],rcx
   0x0000000000cd82ee: pop rbp
Stack Head (16 entries):
   zend_mm_alloc_small       @ 0x0000000000cd82de: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _emalloc_56               @ 0x0000000000cd82de: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _array_init               @ 0x0000000000d68e42: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_fetch_debug_backtrac @ 0x0000000000dc8d27: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_default_exception_ne @ 0x0000000000ddf661: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _object_and_properties_in @ 0x0000000000d6afe1: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _object_init_ex           @ 0x0000000000d6b23c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_throw_exception      @ 0x00000000004349ad: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_throw_error          @ 0x00000000004320ec: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_INIT_METHOD_CALL_SPE @ 0x0000000000fd9889: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x007ffff34572d800 rbx=0x00007fffffffa770 rcx=0x000ffffe68ae5b00 rdx=0x00007ffff3400040
rsi=0x0000000000000000 rdi=0x00007ffff3400090 rbp=0x00007fffffffa450 rsp=0x00007fffffffa450
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x0000000000000003 r11=0x000060160000a920
r12=0x0000000000000000 r13=0x0000000000000000 r14=0x000060340000e680 r15=0x00007fffffffa770
rip=0x0000000000cd82de efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 1) - Hash: 8074408209f0f82f898c665ddb075e0c.4cd77637dd6cec042d3ae66cf112df4d
---CRASH SUMMARY---
Filename: /lab/php7/1e9fab4cbc44421841adfcdbbd8120b74576849fff99ab9ddb686c7b97d387b2.php
SHA1: 070f99f0e0d923bb82803d089256548e6b4a8f29
Classification: EXPLOITABLE
Hash: 8074408209f0f82f898c665ddb075e0c.4cd77637dd6cec042d3ae66cf112df4d
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/1e9fab4cbc44421841adfcdbbd8120b74576849fff99ab9ddb686c7b97d387b2.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   xbuf_format_converter     @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   vspprintf                 @ 0x0000000000c20bc0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_printf                @ 0x0000000000c0ed82: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_var_dump              @ 0x0000000000b88cfb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_var_dump              @ 0x0000000000b89bd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_zval_ptr_dtor           @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_array_destroy        @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000000 rcx=0x000000000160c060 rdx=0x0000000000000000
rsi=0x000000000160c060 rdi=0x00007ffff3403000 rbp=0x00007fffff7ff800 rsp=0x00007fffff7fefc0
 r8=0x00000000002b4010  r9=0x0000000000000000 r10=0x00007ffff3403000 r11=0x0000000000000000
r12=0x000000000160c060 r13=0x00007ffff3403000 r14=0x0000000000000000 r15=0x00007fffff7fff10
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 94a4690e5436fe2ddf276fd6fd924141.22f1828be9baec36e0c17e007bc6d366
---CRASH SUMMARY---
Filename: /lab/php7/ad10461e1042aec63d2a43edd94f5d0f1520e8fbf88cbc3e7031ccb53b343a05.php
SHA1: c5d0b577f15b0d84489dbd2234b42db54c10af73
Classification: UNKNOWN
Hash: 94a4690e5436fe2ddf276fd6fd924141.22f1828be9baec36e0c17e007bc6d366
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/ad10461e1042aec63d2a43edd94f5d0f1520e8fbf88cbc3e7031ccb53b343a05.php
Faulting Frame:
   zend_mm_alloc_small @ 0x0000000000cdc9d6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000cdc9c2: mov rax,QWORD PTR [rdx+0x20]
   0x0000000000cdc9c6: test rax,rax
   0x0000000000cdc9c9: je 0xcdcad9 <_emalloc+553>
   0x0000000000cdc9cf: mov rcx,rax
   0x0000000000cdc9d2: shr rcx,0x3
=> 0x0000000000cdc9d6: cmp BYTE PTR [rcx+0x7fff8000],0x0
   0x0000000000cdc9dd: jne 0xcdcb01 <_emalloc+593>
   0x0000000000cdc9e3: mov rcx,QWORD PTR [rax]
   0x0000000000cdc9e6: mov QWORD PTR [rdx+0x20],rcx
   0x0000000000cdc9ea: pop rbx
Stack Head (13 entries):
   zend_mm_alloc_small       @ 0x0000000000cdc9d6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_mm_alloc_heap        @ 0x0000000000cdc9d6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _emalloc                  @ 0x0000000000cdc9d6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_new          @ 0x0000000000e31c89: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _object_and_properties_in @ 0x0000000000d6b040: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _object_init_ex           @ 0x0000000000d6b23c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_NEW_SPEC_CONST_HANDL @ 0x0000000000fedeb8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x007ffff34572d800 rbx=0x00007ffff3400040 rcx=0x000ffffe68ae5b00 rdx=0x00007ffff3400070
rsi=0x00000ffffe68000b rdi=0x0000000000000006 rbp=0x00007fffffffaab0 rsp=0x00007fffffffaaa0
 r8=0x0000000001678060  r9=0x0000000000000000 r10=0x00007fffffffaa80 r11=0x0000000000000246
r12=0x00007ffff3404928 r13=0x00007ffff3414240 r14=0x00007ffff3414030 r15=0x00007ffff3487580
rip=0x0000000000cdc9d6 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 1) - Hash: e2bdf70c8a5a2394ed578fa8db7708de.fd46f9de80d9b1970de3fb0d2ef27c36
---CRASH SUMMARY---
Filename: /lab/php7/46490e766cb16f06f6102340b98c730631625d99e1c1efb20978c7a42c148159.php
SHA1: c24e19e2cf6b3792737850371ad8ff28feb0c667
Classification: EXPLOITABLE
Hash: e2bdf70c8a5a2394ed578fa8db7708de.fd46f9de80d9b1970de3fb0d2ef27c36
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/46490e766cb16f06f6102340b98c730631625d99e1c1efb20978c7a42c148159.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000fc5a9b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_verify_internal_arg_ @ 0x0000000000fc5a9b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_check_internal_type  @ 0x0000000000ff3bb3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_verify_internal_arg_ @ 0x0000000000ff3bb3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_verify_internal_arg_ @ 0x0000000000440bec: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ffa354: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_dual_it_dtor          @ 0x0000000000a17d0a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_free_compiled_variables @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_leave_helper_SPEC    @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x000000000000000b rcx=0x00007fffff7ff1c2 rdx=0x000000000000000b
rsi=0x0000000001520f40 rdi=0x00007fffff7ff1b8 rbp=0x00007fffff7ff190 rsp=0x00007fffff7fe950
 r8=0x0000000000000002  r9=0x0000000000000002 r10=0x000010007fef7e62 r11=0x00000ffffe6bcf8f
r12=0x0000000001520f40 r13=0x00007fffff7ff1b8 r14=0x00007ffff35e7ba0 r15=0x00007ffff345e940
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 8074408209f0f82f898c665ddb075e0c.8ac76cdbddc30e39184426dc103208f6
---CRASH SUMMARY---
Filename: /lab/php7/69f3b01289a149dca72223dbf121228d6963952bc337d38d19b35951d1a9f23e.php
SHA1: 9cb3ab58eab6195f0fdd4e897c57513609ca3e33
Classification: EXPLOITABLE
Hash: 8074408209f0f82f898c665ddb075e0c.8ac76cdbddc30e39184426dc103208f6
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/69f3b01289a149dca72223dbf121228d6963952bc337d38d19b35951d1a9f23e.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   xbuf_format_converter     @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   vspprintf                 @ 0x0000000000c20bc0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_printf                @ 0x0000000000c0ed82: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_var_dump              @ 0x0000000000b88c33: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_var_dump              @ 0x0000000000b89bd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_zval_ptr_dtor           @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_array_destroy        @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000000 rcx=0x000000000160c060 rdx=0x0000000000000000
rsi=0x000000000160c060 rdi=0x00007ffff3403000 rbp=0x00007fffff7ff5d0 rsp=0x00007fffff7fed90
 r8=0x00000000003fc5d0  r9=0x0000000000000000 r10=0x00007ffff3403000 r11=0x0000000000000000
r12=0x000000000160c060 r13=0x00007ffff3403000 r14=0x0000000000000000 r15=0x00007fffff7ffce0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: fb7878e85f8e638a6bd41732fff8fecf.38ceac780a411a922fec3f1b3b0cc6f9
---CRASH SUMMARY---
Filename: /lab/php7/93d8323afb65d53bf5a78118c7b2621b48f528c6e6d106c4f029f8bf9f7b2854.php
SHA1: 636451505f02714a185421777632f749d510935b
Classification: EXPLOITABLE
Hash: fb7878e85f8e638a6bd41732fff8fecf.38ceac780a411a922fec3f1b3b0cc6f9
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/93d8323afb65d53bf5a78118c7b2621b48f528c6e6d106c4f029f8bf9f7b2854.php
Faulting Frame:
   zend_call_function @ 0x0000000000d2a93e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d2a92f: mov r14,rdi
   0x0000000000d2a932: push r13
   0x0000000000d2a934: push r12
   0x0000000000d2a936: push rbx
   0x0000000000d2a937: sub rsp,0x2c8
=> 0x0000000000d2a93e: mov QWORD PTR [rbp-0x1c8],rax
   0x0000000000d2a945: lea rax,[rip+0x95896c] # 0x16832b8
   0x0000000000d2a94c: shr QWORD PTR [rbp-0x1c8],0x3
   0x0000000000d2a954: mov QWORD PTR [rbp-0x1b0],0x41b58ab3
   0x0000000000d2a95f: mov QWORD PTR [rbp-0x1a8],rax
Stack Head (1000 entries):
   zend_call_function        @ 0x0000000000d2a93e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_new_iterator @ 0x0000000000dd4816: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_get_new_iter @ 0x0000000000dd488e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_FE_RESET_R_SPEC_VAR_ @ 0x0000000000ee4a90: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_new_iterator @ 0x0000000000dd4816: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_get_new_iter @ 0x0000000000dd488e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_FE_RESET_R_SPEC_VAR_ @ 0x0000000000ee4a90: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_new_iterator @ 0x0000000000dd4816: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_get_new_iter @ 0x0000000000dd488e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007fffff7fefd0 rbx=0x000010007fef7e38 rcx=0x00007fffff7ff260 rdx=0x00000fffffeffe50
rsi=0x00007fffff7ff260 rdi=0x00007fffff7ff2c0 rbp=0x00007fffff7ff180 rsp=0x00007fffff7fee90
 r8=0x000000000000000b  r9=0x00007fffff7ff3c0 r10=0x00007ffff3404018 r11=0x00007ffff3404170
r12=0x00007fffff7ff2c0 r13=0x00007fffff7ff220 r14=0x00007fffff7ff2c0 r15=0x00007ffff32d8280
rip=0x0000000000d2a93e efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: af06cfd2ba7f790e5896388c923da08e.03afa617b7841b12f97903ee7a978c2f
---CRASH SUMMARY---
Filename: /lab/php7/23fa53442875267363adcc80d4f837c4da7eab877988364ff393131f4514478a.php
SHA1: 2b845746e3fc457f0949f724f73a6371f3b7cbae
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: af06cfd2ba7f790e5896388c923da08e.03afa617b7841b12f97903ee7a978c2f
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/23fa53442875267363adcc80d4f837c4da7eab877988364ff393131f4514478a.php
Faulting Frame:
   zim_simplexml_element_getDocNamespaces @ 0x00000000009f46e4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x00000000009f46d0: mov rdi,QWORD PTR [rax-0x58]
   0x00000000009f46d4: mov rax,rdi
   0x00000000009f46d7: shr rax,0x3
   0x00000000009f46db: cmp BYTE PTR [rax+0x7fff8000],0x0
   0x00000000009f46e2: jne 0x9f475e <zim_simplexml_element_getDocNamespaces+590>
=> 0x00000000009f46e4: mov rdi,QWORD PTR [rdi]
   0x00000000009f46e7: call 0x423a90 <xmlDocGetRootElement@plt>
   0x00000000009f46ec: test rax,rax
   0x00000000009f46ef: mov r15,rax
   0x00000000009f46f2: jne 0x9f4667 <zim_simplexml_element_getDocNamespaces+343>
Stack Head (8 entries):
   zim_simplexml_element_get @ 0x00000000009f46e4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ff8c70: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x000010007fff7544 rcx=0x0000000000000000 rdx=0x00000ffffe68ca15
rsi=0x0000000000000007 rdi=0x0000000000000000 rbp=0x00007fffffffaaf0 rsp=0x00007fffffffaa20
 r8=0x0000000000000002  r9=0x000000008035da10 r10=0x0000000000000000 r11=0x0000000000000000
r12=0x00000ffffffff544 r13=0x00007ffff34650a0 r14=0x00007ffff34140d0 r15=0x00007ffff3482120
rip=0x00000000009f46e4 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: ebc0dd22183ebf656d1b2b9f56160909.8c9f36729b713cb6e93d51faf0977297
---CRASH SUMMARY---
Filename: /lab/php7/5079ba938f338728de25d7127f02b04a68a0d4416bc6d57060003bcc1ae8a3d0.php
SHA1: d635f1c2a7c4b3d4ba658d93adc884185ca8e202
Classification: PROBABLY_EXPLOITABLE
Hash: ebc0dd22183ebf656d1b2b9f56160909.8c9f36729b713cb6e93d51faf0977297
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/5079ba938f338728de25d7127f02b04a68a0d4416bc6d57060003bcc1ae8a3d0.php
Faulting Frame:
   spl_array_it_get_current_data @ 0x0000000000a2e7b6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000a2e7a0: shr rax,0x3
   0x0000000000a2e7a4: and ecx,0x7
   0x0000000000a2e7a7: movzx eax,BYTE PTR [rax+0x7fff8000]
   0x0000000000a2e7ae: cmp al,cl
   0x0000000000a2e7b0: jle 0xa2ea1e <spl_array_it_get_current_data+1022>
=> 0x0000000000a2e7b6: cmp BYTE PTR [rdx+0x8],0xf
   0x0000000000a2e7ba: mov rax,rdx
   0x0000000000a2e7bd: je 0xa2e920 <spl_array_it_get_current_data+768>
   0x0000000000a2e7c3: add rsp,0x28
   0x0000000000a2e7c7: pop rbx
Stack Head (12 entries):
   spl_array_it_get_current_ @ 0x0000000000a2e7b6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_spl_RecursiveIterator @ 0x0000000000a065db: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bcbf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_get_current_ @ 0x0000000000dd3c51: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_FE_FETCH_R_SPEC_VAR_ @ 0x0000000000edf7c7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x00007ffff3481150 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000001b2d298 rdi=0x0000000000000008 rbp=0x00007fffffffa4a0 rsp=0x00007fffffffa450
 r8=0x0000000000000007  r9=0x0000000000000000 r10=0x0000000000000000 r11=0x00007fffffffa8a0
r12=0x00007ffff3481100 r13=0x00007ffff3481110 r14=0x0000000000000003 r15=0x00000ffffe690222
rip=0x0000000000a2e7b6 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on destination operand
   Short description: DestAvNearNull (15/22)
   Explanation: The target crashed on an access violation at an address matching the destination operand of the instruction. This likely indicates a write access violation, which means the attacker may control write address and/or value. However, it there is a chance it could be a NULL dereference.
---END SUMMARY---
(1 of 1) - Hash: 9d89e74e707c2f498ce43446eaecab53.492ea441cc5d869bfc998e125cb8425b
---CRASH SUMMARY---
Filename: /lab/php7/2ecb3e94b53c5d1292e621f45de8d615b035769bd3319f54172dd8c92d1b7974.php
SHA1: 2c5a6ab6c9dccd6733210f592c7709eee852d0f2
Classification: EXPLOITABLE
Hash: 9d89e74e707c2f498ce43446eaecab53.492ea441cc5d869bfc998e125cb8425b
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/2ecb3e94b53c5d1292e621f45de8d615b035769bd3319f54172dd8c92d1b7974.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000d663ce: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable_check_fu @ 0x0000000000d663ce: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable_ex       @ 0x0000000000d7bd1e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_fcall_info_init      @ 0x0000000000d7dc55: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_arg_func       @ 0x0000000000ac170b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_call_user_func        @ 0x0000000000ac170b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_BY_NAME_SPE @ 0x0000000000ff7151: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_call_user_func        @ 0x0000000000ac17a9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_BY_NAME_SPE @ 0x0000000000ff7151: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_call_user_func        @ 0x0000000000ac17a9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_BY_NAME_SPE @ 0x0000000000ff7151: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x000000000000000e rcx=0x0000000000000000 rdx=0x000000000000000e
rsi=0x00007ffff3401518 rdi=0x00007fffff7ff848 rbp=0x00007fffff7ff820 rsp=0x00007fffff7fefe0
 r8=0x00007fffff7ff840  r9=0x0000000000000000 r10=0x000000000000000d r11=0x00007fffff7ff855
r12=0x00007ffff3401518 r13=0x00007fffff7ff848 r14=0x00000fffffefff72 r15=0x00000ffffe6aa10e
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 74d99402d1f6be2e1f2778a7285ce95b.078eefe411476f584c1d63a048b7d139
---CRASH SUMMARY---
Filename: /lab/php7/b74b6b1a49218475c39418d6763f29e5f36a74c87b580c0e70ac33b736eaebad.php
SHA1: cff0662953ac6db448a4a33496e0eb8cbcac85ed
Classification: EXPLOITABLE
Hash: 74d99402d1f6be2e1f2778a7285ce95b.078eefe411476f584c1d63a048b7d139
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/b74b6b1a49218475c39418d6763f29e5f36a74c87b580c0e70ac33b736eaebad.php
Faulting Frame:
   zend_parse_arg @ 0x0000000000d7de76: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d7de4e: mov QWORD PTR [rbp-0xf8],rax
   0x0000000000d7de55: shr QWORD PTR [rbp-0xf8],0x3
   0x0000000000d7de5d: mov rdx,QWORD PTR [rbp-0xf8]
   0x0000000000d7de64: lea rax,[rip+0x914475] # 0x16922e0
   0x0000000000d7de6b: mov QWORD PTR [rbp-0xd0],0x41b58ab3
=> 0x0000000000d7de76: mov DWORD PTR [rbp-0x12c],edi
   0x0000000000d7de7c: mov QWORD PTR [rbp-0xf0],rsi
   0x0000000000d7de83: mov QWORD PTR [rbp-0xc8],rax
   0x0000000000d7de8a: mov rax,rdx
   0x0000000000d7de8d: mov QWORD PTR [rbp-0x110],rcx
Stack Head (1000 entries):
   zend_parse_arg            @ 0x0000000000d7de76: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_va_args        @ 0x0000000000d808f9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_parameters     @ 0x0000000000d8111e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_assert                @ 0x0000000000b942a9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_assert                @ 0x0000000000b94efa: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_assert                @ 0x0000000000b94efa: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00000000016922e0 rbx=0x000000008035da10 rcx=0x00007fffff7ff178 rdx=0x00000fffffeffe06
rsi=0x00007ffff32a3bd0 rdi=0x0000000000000001 rbp=0x00007fffff7ff100 rsp=0x00007fffff7fefb0
 r8=0x0000000000000000  r9=0x000000008035da10 r10=0x0000000000000000 r11=0x0000000000000001
r12=0x00007fffff7ff1e0 r13=0x0000000000000001 r14=0x00007fffff7ff1e0 r15=0x0000000000000001
rip=0x0000000000d7de76 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 94ed975eaf8824c51845a96d1c936a67.4332e504b63c7e0fe33ce62ee1c19afc
---CRASH SUMMARY---
Filename: /lab/php7/8e94b0234eeb879c4ffc093cfbe5862be980e8654ad38d7069fee5450e907cd6.php
SHA1: d30b968b6e1a575cf856b18292beee7ab0fcc052
Classification: UNKNOWN
Hash: 94ed975eaf8824c51845a96d1c936a67.4332e504b63c7e0fe33ce62ee1c19afc
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/8e94b0234eeb879c4ffc093cfbe5862be980e8654ad38d7069fee5450e907cd6.php
Faulting Frame:
   zend_mm_alloc_small @ 0x0000000000cd82de: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000cd82ce: mov rax,QWORD PTR [rdx+0x50]
   0x0000000000cd82d2: test rax,rax
   0x0000000000cd82d5: je 0xcd8300 <_emalloc_56+224>
   0x0000000000cd82d7: mov rcx,rax
   0x0000000000cd82da: shr rcx,0x3
=> 0x0000000000cd82de: cmp BYTE PTR [rcx+0x7fff8000],0x0
   0x0000000000cd82e5: jne 0xcd8345 <_emalloc_56+293>
   0x0000000000cd82e7: mov rcx,QWORD PTR [rax]
   0x0000000000cd82ea: mov QWORD PTR [rdx+0x50],rcx
   0x0000000000cd82ee: pop rbp
Stack Head (16 entries):
   zend_mm_alloc_small       @ 0x0000000000cd82de: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _emalloc_56               @ 0x0000000000cd82de: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _array_init               @ 0x0000000000d68e42: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_fetch_debug_backtrac @ 0x0000000000dc8d27: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_default_exception_ne @ 0x0000000000ddf661: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _object_and_properties_in @ 0x0000000000d6afe1: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _object_init_ex           @ 0x0000000000d6b23c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_throw_exception      @ 0x00000000004349ad: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_throw_error          @ 0x00000000004320ec: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_UNSET_OBJ_SPEC_UNUSE @ 0x0000000000e58465: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x007ffff345734800 rbx=0x00007fffffffa830 rcx=0x000ffffe68ae6900 rdx=0x00007ffff3400040
rsi=0x0000000000000000 rdi=0x00007ffff3400090 rbp=0x00007fffffffa510 rsp=0x00007fffffffa510
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x0000000000000003 r11=0x000060160000a920
r12=0x0000000000000000 r13=0x0000000000000000 r14=0x000060340000e680 r15=0x00007fffffffa830
rip=0x0000000000cd82de efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 2) - Hash: e98d55a015feae2dddb2719c55f2435c.c92ff1ac3a6a6c29c6e0811ad03eae46
---CRASH SUMMARY---
Filename: /lab/php7/146a56659c40ad278fea56484e27146d70d88a98d193dbab5634ac0766a9e657.php
SHA1: c37798398a197bab59a1c5a1153bf8c2bfe7afda
Classification: PROBABLY_EXPLOITABLE
Hash: e98d55a015feae2dddb2719c55f2435c.c92ff1ac3a6a6c29c6e0811ad03eae46
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/146a56659c40ad278fea56484e27146d70d88a98d193dbab5634ac0766a9e657.php
Faulting Frame:
   spl_array_it_get_current_data @ 0x0000000000a2e7b6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000a2e7a0: shr rax,0x3
   0x0000000000a2e7a4: and ecx,0x7
   0x0000000000a2e7a7: movzx eax,BYTE PTR [rax+0x7fff8000]
   0x0000000000a2e7ae: cmp al,cl
   0x0000000000a2e7b0: jle 0xa2ea1e <spl_array_it_get_current_data+1022>
=> 0x0000000000a2e7b6: cmp BYTE PTR [rdx+0x8],0xf
   0x0000000000a2e7ba: mov rax,rdx
   0x0000000000a2e7bd: je 0xa2e920 <spl_array_it_get_current_data+768>
   0x0000000000a2e7c3: add rsp,0x28
   0x0000000000a2e7c7: pop rbx
Stack Head (9 entries):
   spl_array_it_get_current_ @ 0x0000000000a2e7b6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_spl_NoRewindIterator_ @ 0x0000000000a08d68: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ff8c70: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x00007ffff3481050 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000001b2d298 rdi=0x0000000000000008 rbp=0x00007fffffffaad0 rsp=0x00007fffffffaa80
 r8=0x0000000000000003  r9=0x00000ffffe68283e r10=0x0000000000000000 r11=0x00007ffff34141d8
r12=0x00007ffff3481000 r13=0x00007ffff3481010 r14=0x0000000000000003 r15=0x00000ffffe690202
rip=0x0000000000a2e7b6 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on destination operand
   Short description: DestAvNearNull (15/22)
   Explanation: The target crashed on an access violation at an address matching the destination operand of the instruction. This likely indicates a write access violation, which means the attacker may control write address and/or value. However, it there is a chance it could be a NULL dereference.
---END SUMMARY---
(1 of 1) - Hash: 7970d479964820e0d763036a7aa34824.5a2b0c5edc7c6d92f8e13def22f70acb
---CRASH SUMMARY---
Filename: /lab/php7/5ed7b8f4fbe8a1ced3aa58f68deb0c3908cfd7115000341fb94ae98397dd2434.php
SHA1: b83d62f7a903ce380c5b450235f6f56cb8813630
Classification: EXPLOITABLE
Hash: 7970d479964820e0d763036a7aa34824.5a2b0c5edc7c6d92f8e13def22f70acb
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/5ed7b8f4fbe8a1ced3aa58f68deb0c3908cfd7115000341fb94ae98397dd2434.php
Faulting Frame:
   zend_objects_destroy_object @ 0x0000000000e3168b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000e3166d: jle 0xe31ad1 <zend_objects_destroy_object+1457>
   0x0000000000e31673: lea rbx,[rip+0xcfb826] # 0x1b2cea0 <executor_globals>
   0x0000000000e3167a: mov DWORD PTR [rbp-0x68],0xc08
   0x0000000000e31681: lea rax,[rbx+0x350]
   0x0000000000e31688: mov r11,rax
=> 0x0000000000e3168b: mov QWORD PTR [rbp-0xe8],rax
   0x0000000000e31692: shr r11,0x3
   0x0000000000e31696: cmp BYTE PTR [r11+0x7fff8000],0x0
   0x0000000000e3169e: jne 0xe31bfd <zend_objects_destroy_object+1757>
   0x0000000000e316a4: mov r10,QWORD PTR [rbx+0x350]
Stack Head (1000 entries):
   zend_objects_destroy_obje @ 0x0000000000e3168b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_free_compiled_variables @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_leave_helper_SPEC    @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_free_compiled_variables @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_leave_helper_SPEC    @ 0x0000000000ffd7df: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000001b2d1f0 rbx=0x0000000001b2cea0 rcx=0x0000000000000003 rdx=0x00000ffffe6a4e52
rsi=0x0000000000000000 rdi=0x00007fffff7ff078 rbp=0x00007fffff7ff0e0 rsp=0x00007fffff7fefe0
 r8=0x00007ffff3527280  r9=0x00007ffff3527290 r10=0x0000000000000007 r11=0x0000000001b2d1f0
r12=0x000010007fef7e02 r13=0x00000fffffeffe02 r14=0x00007fffff7ff070 r15=0x00007ffff345e8a0
rip=0x0000000000e3168b efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 60fb8c472b2ad0b4fec74fc49b878bb6.db6edbc6c70e9a4002da88b44b161a3a
---CRASH SUMMARY---
Filename: /lab/php7/6772d19d0612ef1edbc8c6b18d62aed543f6e29ec476e5fcc6f887fb9347ea1c.php
SHA1: 944816c1980bb81fd63f6430a9a2d956b52813db
Classification: EXPLOITABLE
Hash: 60fb8c472b2ad0b4fec74fc49b878bb6.db6edbc6c70e9a4002da88b44b161a3a
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/6772d19d0612ef1edbc8c6b18d62aed543f6e29ec476e5fcc6f887fb9347ea1c.php
Faulting Frame:
   zend_call_function @ 0x0000000000d2bfce: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d2bfb3: mov rsi,r12
   0x0000000000d2bfb6: mov QWORD PTR [rbp-0x1d8],r10
   0x0000000000d2bfbd: mov QWORD PTR [rbp-0x1d0],rax
   0x0000000000d2bfc4: mov QWORD PTR [rbp-0x1c0],r11
   0x0000000000d2bfcb: mov rdi,r14
=> 0x0000000000d2bfce: call 0x1001d40 <zend_init_execute_data>
   0x0000000000d2bfd3: lea rdx,[rip+0xe01f26] # 0x1b2df00 <zend_execute_ex>
   0x0000000000d2bfda: mov rdi,r14
   0x0000000000d2bfdd: call QWORD PTR [rdx]
   0x0000000000d2bfdf: mov rax,QWORD PTR [rbp-0x1d0]
Stack Head (1000 entries):
   zend_call_function        @ 0x0000000000d2bfce: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_zval_ptr_dtor           @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_array_destroy        @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b54e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_free_compiled_variables @ 0x0000000000ffc0c3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_leave_helper_SPEC    @ 0x0000000000ffc0c3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000365a40 rbx=0x0000000000000000 rcx=0x0000000000000000 rdx=0x00007fffff7ff350
rsi=0x00007ffff34043b0 rdi=0x00007ffff3306c40 rbp=0x00007fffff7ff2f0 rsp=0x00007fffff7ff000
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x0000000001b2cea0 r11=0x00007fffff7ff3d0
r12=0x00007ffff34043b0 r13=0x0000000000000000 r14=0x00007ffff3306c40 r15=0x000010007fef7e28
rip=0x0000000000d2bfce efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: f914ca8a8077ade7d64290c080d4b766.14ff44c8132a023279cd15e62800f580
---CRASH SUMMARY---
Filename: /lab/php7/5dc6103631ccff0371620ee4c05d91e1c7b5b78c34cb93fe7a844da356719f2e.php
SHA1: 443e5d22ad3736e8c01dec1f49ef0be110769feb
Classification: EXPLOITABLE
Hash: f914ca8a8077ade7d64290c080d4b766.14ff44c8132a023279cd15e62800f580
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/5dc6103631ccff0371620ee4c05d91e1c7b5b78c34cb93fe7a844da356719f2e.php
Faulting Frame:
   zend_compile_binary_op @ 0x0000000000d06f99: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d06f7f: lea r12,[rbp-0xd0]
   0x0000000000d06f86: push rbx
   0x0000000000d06f87: lea rbx,[rip+0x9720f2] # 0x1679080
   0x0000000000d06f8e: shr r12,0x3
   0x0000000000d06f92: sub rsp,0xd8
=> 0x0000000000d06f99: mov QWORD PTR [rbp-0xd8],rdi
   0x0000000000d06fa0: lea rdi,[rsi+0x8]
   0x0000000000d06fa4: mov QWORD PTR [rbp-0xc8],rbx
   0x0000000000d06fab: lea rbx,[r12+0x7fff8000]
   0x0000000000d06fb3: mov QWORD PTR [rbp-0xd0],0x41b58ab3
Stack Head (1000 entries):
   zend_compile_binary_op    @ 0x0000000000d06f99: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff33ee730 rbx=0x0000000001679080 rcx=0x0000000000000001 rdx=0x0000000000000000
rsi=0x00007ffff33ee730 rdi=0x00007fffff7ff2b0 rbp=0x00007fffff7ff0a0 rsp=0x00007fffff7fefa0
 r8=0x00000000ffffffff  r9=0x0000000000000001 r10=0x0000000000000003 r11=0x0000000000365bd3
r12=0x00000fffffeffdfa r13=0x0000000001b2d4c0 r14=0x00007fffff7ff2b0 r15=0x00000fffffeffe30
rip=0x0000000000d06f99 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 0eec2c2e5005588102eada16a1ebf2bb.8b97086d17554ec812377c787b36c2cc
---CRASH SUMMARY---
Filename: /lab/php7/19258f40798e136763c296ab65613ca7b253f2194ec68c651a3863262de80af0.php
SHA1: 3caae37758f8c4225399e362d63f1a48cbb9989b
Classification: UNKNOWN
Hash: 0eec2c2e5005588102eada16a1ebf2bb.8b97086d17554ec812377c787b36c2cc
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/19258f40798e136763c296ab65613ca7b253f2194ec68c651a3863262de80af0.php
Faulting Frame:
   strlen @ 0x00007ffff4e5a244: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
   0x00007ffff4e5a240: push rbp
   0x00007ffff4e5a241: mov rbp,rsp
=> 0x00007ffff4e5a244: push r13
   0x00007ffff4e5a246: push r12
   0x00007ffff4e5a248: push rbx
   0x00007ffff4e5a249: mov rbx,rdi
   0x00007ffff4e5a24c: sub rsp,0x18
Stack Head (1000 entries):
   strlen                    @ 0x00007ffff4e5a244: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   php_resolve_path          @ 0x0000000000c21ea9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   phar_find_in_include_path @ 0x0000000000908975: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _php_stream_open_wrapper_ @ 0x0000000000c63daa: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_stream_open_for_zend_ @ 0x0000000000c101c3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_stream_fixup         @ 0x0000000000dd0734: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   open_file_for_scanning    @ 0x0000000000c92f35: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   compile_file              @ 0x0000000000c93aff: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   phar_compile_file         @ 0x000000000094e336: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   compile_filename          @ 0x0000000000c93e1c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_include_or_eval      @ 0x0000000000eee57b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_INCLUDE_OR_EVAL_SPEC @ 0x0000000000feb83f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_userstreamop_read     @ 0x0000000000c74d33: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x000010007fef7e1a rcx=0x00000000003658ea rdx=0x0000600e0000c828
rsi=0x0000000000000010 rdi=0x00007ffff34640a8 rbp=0x00007fffff7ff000 rsp=0x00007fffff7ff000
 r8=0x000000000000ffc0  r9=0x00000ffffff003ea r10=0x00007ffff3464090 r11=0x0000000000000000
r12=0x00007ffff34640a8 r13=0x00007fffff8014a0 r14=0x00000fffffeffe1a r15=0x0000600e0000c828
rip=0x00007ffff4e5a244 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 2) - Hash: 5901c6a396d469b50e708b105e1e5b89.e6c480dd953ffd9a588dc90bd7f05032
---CRASH SUMMARY---
Filename: /lab/php7/5d6f28b2635cb17606bcdb34db13bee9b6d3f0a12d05938cf34ea0af90d2dad0.php
SHA1: 3dcd670c980454170bbd332fe80bdd5d9b81b573
Classification: EXPLOITABLE
Hash: 5901c6a396d469b50e708b105e1e5b89.e6c480dd953ffd9a588dc90bd7f05032
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/5d6f28b2635cb17606bcdb34db13bee9b6d3f0a12d05938cf34ea0af90d2dad0.php
Faulting Frame:
   zend_vm_stack_push_call_frame_ex @ 0x0000000000d2af61: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d2af44: mov QWORD PTR [rbp-0x240],rsi
   0x0000000000d2af4b: jne 0xd2c56a <zend_call_function+7242>
   0x0000000000d2af51: mov edi,eax
   0x0000000000d2af53: lea rax,[r10+0x1d0]
   0x0000000000d2af5a: mov rcx,QWORD PTR [r10+0x1c8]
=> 0x0000000000d2af61: mov QWORD PTR [rbp-0x278],rax
   0x0000000000d2af68: shr rax,0x3
   0x0000000000d2af6c: cmp BYTE PTR [rax+0x7fff8000],0x0
   0x0000000000d2af73: mov QWORD PTR [rbp-0x280],rax
   0x0000000000d2af7a: jne 0xd2c58f <zend_call_function+7279>
Stack Head (1000 entries):
   zend_vm_stack_push_call_f @ 0x0000000000d2af61: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_vm_stack_push_call_f @ 0x0000000000d2af61: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2af61: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_cast_object_tost @ 0x0000000000e34dce: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_get_string_func     @ 0x0000000000d43f94: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_get_string          @ 0x0000000000f01a30: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_CAST_SPEC_VAR_HANDLE @ 0x0000000000f01a30: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_cast_object_tost @ 0x0000000000e34dce: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_get_string_func     @ 0x0000000000d43f94: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_get_string          @ 0x0000000000f01a30: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_CAST_SPEC_VAR_HANDLE @ 0x0000000000f01a30: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000001b2d070 rbx=0x00000fffffeffe7c rcx=0x00007ffff3543760 rdx=0x00007ffff34d3000
rsi=0x0000000000365a0d rdi=0x00000000000000d0 rbp=0x00007fffff7ff270 rsp=0x00007fffff7fef80
 r8=0x0000000000000001  r9=0x0000000000000003 r10=0x0000000001b2cea0 r11=0x00007fffff7ff350
r12=0x00007ffff3404230 r13=0x0000000000000000 r14=0x00007fffff7ff3b0 r15=0x000010007fef7e18
rip=0x0000000000d2af61 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 3) - Hash: a993cbfcdd2529d75b8234d0d4455732.d0a5c82c3ff5553a781ab71adf5b2bbc
---CRASH SUMMARY---
Filename: /lab/php7/71bd174683e798415b2be72226e6942371b35e79edf3b6c4f82d2862d94b6245.php
SHA1: 83c3603b9c0afc420ff951eb2a29cd8c8215a8e4
Classification: EXPLOITABLE
Hash: a993cbfcdd2529d75b8234d0d4455732.d0a5c82c3ff5553a781ab71adf5b2bbc
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/71bd174683e798415b2be72226e6942371b35e79edf3b6c4f82d2862d94b6245.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000d6ddb0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_string_init          @ 0x0000000000d6ddb0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   add_next_index_stringl    @ 0x0000000000d6ddb0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_do_repl_func         @ 0x000000000058989f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace_impl     @ 0x000000000058989f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace          @ 0x000000000058aa10: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_replace_in_subject    @ 0x000000000058ac35: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_replace_impl         @ 0x000000000058bce0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_preg_replace_callback @ 0x000000000058d51f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_do_repl_func         @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace_impl     @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000043 rcx=0x0000000000000000 rdx=0x0000000000000043
rsi=0x00007ffff327ed98 rdi=0x00007ffff327edf8 rbp=0x00007fffff7ff7b0 rsp=0x00007fffff7fef70
 r8=0x0000000000000002  r9=0x0000000000000000 r10=0x00000c0380001bed r11=0x00000fffffeffed2
r12=0x00007ffff327ed98 r13=0x00007ffff327edf8 r14=0x000010007fef7efa r15=0x00007fffff7ffb40
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 8074408209f0f82f898c665ddb075e0c.03d4fcda1125113f010e5f70d5294c96
---CRASH SUMMARY---
Filename: /lab/php7/956c6a9ab3a1b90a62ef9d95e9929e5126f7f54ff560cd75ffd3ea6db09bf6f3.php
SHA1: ad925b0ebd9c7ba88ba09b14100f53198cc9d168
Classification: EXPLOITABLE
Hash: 8074408209f0f82f898c665ddb075e0c.03d4fcda1125113f010e5f70d5294c96
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/956c6a9ab3a1b90a62ef9d95e9929e5126f7f54ff560cd75ffd3ea6db09bf6f3.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   xbuf_format_converter     @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   vspprintf                 @ 0x0000000000c20bc0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_printf                @ 0x0000000000c0ed82: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_var_dump              @ 0x0000000000b88cfb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_var_dump              @ 0x0000000000b89bd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_zval_ptr_dtor           @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_array_destroy        @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000000 rcx=0x000000000160c060 rdx=0x0000000000000000
rsi=0x000000000160c060 rdi=0x00007ffff3403000 rbp=0x00007fffff7ff5d0 rsp=0x00007fffff7fed90
 r8=0x000000000043c710  r9=0x0000000000000000 r10=0x00007ffff3403000 r11=0x0000000000000000
r12=0x000000000160c060 r13=0x00007ffff3403000 r14=0x0000000000000000 r15=0x00007fffff7ffce0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: b565807a4f2d4b028559584628812299.765c9c8382cee3da8ecbc8107fd7133b
---CRASH SUMMARY---
Filename: /lab/php7/ef1783853bcfef70f9e2de301653f29153678a48883bc6dcd7c3c7403c495dd5.php
SHA1: 1da50f0dc8f9fd5d25193346f3770b66d2b9ba65
Classification: EXPLOITABLE
Hash: b565807a4f2d4b028559584628812299.765c9c8382cee3da8ecbc8107fd7133b
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/ef1783853bcfef70f9e2de301653f29153678a48883bc6dcd7c3c7403c495dd5.php
Faulting Frame:
   spl_fixedarray_it_valid @ 0x0000000000a6a7a6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000a6a792: and r8d,0x7
   0x0000000000a6a796: movzx esi,BYTE PTR [rsi+0x7fff8000]
   0x0000000000a6a79d: add r8d,0x3
   0x0000000000a6a7a1: cmp r8b,sil
   0x0000000000a6a7a4: jge 0xa6a807 <spl_fixedarray_it_valid+167>
=> 0x0000000000a6a7a6: test BYTE PTR [rax-0xc],0x2
   0x0000000000a6a7aa: jne 0xa6a7f8 <spl_fixedarray_it_valid+152>
   0x0000000000a6a7ac: lea rdi,[rdx+0x38]
   0x0000000000a6a7b0: mov rcx,rdi
   0x0000000000a6a7b3: mov rsi,rdi
Stack Head (8 entries):
   spl_fixedarray_it_valid   @ 0x0000000000a6a7a6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_FE_RESET_R_SPEC_CV_H @ 0x0000000000f9ac4f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007fff00000000 rbx=0x0000000001b2cea0 rcx=0x00007ffefffffff4 rdx=0x00007ffeffffffb8
rsi=0x0000000000000000 rdi=0x00007ffff345d460 rbp=0x00007fffffffaaf0 rsp=0x00007fffffffaaf0
 r8=0x0000000000000007  r9=0x00000ffffe68ba95 r10=0x000060340002e200 r11=0x00007fffffffa9c0
r12=0x00007ffff345d4b0 r13=0x00007ffff345d460 r14=0x00007ffff3414030 r15=0x00007ffff346c700
rip=0x0000000000a6a7a6 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation on destination operand
   Short description: DestAv (8/22)
   Explanation: The target crashed on an access violation at an address matching the destination operand of the instruction. This likely indicates a write access violation, which means the attacker may control the write address and/or value.
---END SUMMARY---
(1 of 2) - Hash: c6ec751051e7c191417cfb78b096b194.f83a70be6be22111f3d2ca11c10f23e9
---CRASH SUMMARY---
Filename: /lab/php7/5a361408d071cec3c4ac8f8c953d66a6cbcbc6eac6210d16b0a1bce4cbb46398.php
SHA1: a269c806a9c44897f2af42a9e05eae475cd65527
Classification: EXPLOITABLE
Hash: c6ec751051e7c191417cfb78b096b194.f83a70be6be22111f3d2ca11c10f23e9
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/5a361408d071cec3c4ac8f8c953d66a6cbcbc6eac6210d16b0a1bce4cbb46398.php
Faulting Frame:
   zend_call_method @ 0x0000000000dd2959: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000dd2945: push r12
   0x0000000000dd2947: push rbx
   0x0000000000dd2948: lea rbx,[r14+0x7fff8000]
   0x0000000000dd294f: sub rsp,0x198
   0x0000000000dd2956: mov edx,DWORD PTR [rbp+0x10]
=> 0x0000000000dd2959: mov QWORD PTR [rbp-0x198],rcx
   0x0000000000dd2960: mov QWORD PTR [rbp-0x190],0x41b58ab3
   0x0000000000dd296b: mov QWORD PTR [rbp-0x188],rax
   0x0000000000dd2972: mov DWORD PTR [r14+0x7fff8000],0xf1f1f1f1
   0x0000000000dd297d: mov DWORD PTR [rbx+0x4],0xf4f40000
Stack Head (1000 entries):
   zend_call_method          @ 0x0000000000dd2959: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_assign_to_variable   @ 0x0000000000e799a9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_ASSIGN_SPEC_CV_VAR_R @ 0x0000000000e799a9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e31a8e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_assign_to_variable   @ 0x0000000000e799a9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_ASSIGN_SPEC_CV_VAR_R @ 0x0000000000e799a9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x000000000169e6c0 rbx=0x000010007fef7df6 rcx=0x00000000016aca00 rdx=0x0000000000000000
rsi=0x00007ffff34042e0 rdi=0x00007fffff7ff1e0 rbp=0x00007fffff7ff140 rsp=0x00007fffff7fef80
 r8=0x000000000000000a  r9=0x0000000000000000 r10=0x00007ffff34042e0 r11=0x00007fffff7ff1a0
r12=0x000010007fef7e30 r13=0x00000fffffeffe30 r14=0x00000fffffeffdf6 r15=0x00007fffff7ff1e0
rip=0x0000000000dd2959 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 4) - Hash: 3b3dc8ad38354acb7bd6efa3bcf28b72.ff393deaf98c7d6594ca6248864f022c
---CRASH SUMMARY---
Filename: /lab/php7/72615df65cda332846a45db82e45cde62ab55f20ffc435d691bb2190da75d973.php
SHA1: a0ee021d86d82023e048085bc5d7f23e6914b645
Classification: EXPLOITABLE
Hash: 3b3dc8ad38354acb7bd6efa3bcf28b72.ff393deaf98c7d6594ca6248864f022c
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/72615df65cda332846a45db82e45cde62ab55f20ffc435d691bb2190da75d973.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000d7baa6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable_ex       @ 0x0000000000d7baa6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2aceb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_serializa @ 0x00000000008c9dc9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008c9dc9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_serializa @ 0x00000000008ca185: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008ca185: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_serializa @ 0x00000000008ca185: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008ca185: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_serializa @ 0x00000000008ca185: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008ca185: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_serializa @ 0x00000000008ca185: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008ca185: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_serializa @ 0x00000000008ca185: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000008 rcx=0x00007ffff34643d8 rdx=0x0000000000000008
rsi=0x00007ffff3401a68 rdi=0x00007ffff34643d8 rbp=0x00007fffff7ff7f0 rsp=0x00007fffff7fefb0
 r8=0x00007ffff34643df  r9=0x00007fffff7ffb00 r10=0x0000000000000007 r11=0x0000000000000000
r12=0x00007ffff3401a68 r13=0x00007ffff34643d8 r14=0x00007fffff7ffac0 r15=0x00007fffff7ffc88
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 2) - Hash: 7780803ed73f38ba2d914bcf567ba93a.b16b8197548ad431be22a3aab485c84b
---CRASH SUMMARY---
Filename: /lab/php7/8b36ec808f1bfd5568a25981ae9bb67cb956c3fa69d9f640675c6824d7a8034d.php
SHA1: e719373499c91803517dcfb86d286b886b1c003f
Classification: EXPLOITABLE
Hash: 7780803ed73f38ba2d914bcf567ba93a.b16b8197548ad431be22a3aab485c84b
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/8b36ec808f1bfd5568a25981ae9bb67cb956c3fa69d9f640675c6824d7a8034d.php
Faulting Frame:
   _zend_hash_index_add_or_update_i @ 0x0000000000d9d31a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d9d303: mov rdx,rdi
   0x0000000000d9d306: shr rdx,0x3
   0x0000000000d9d30a: cmp BYTE PTR [rdx+0x7fff8000],0x0
   0x0000000000d9d311: jne 0xd9d4fd <_zend_hash_next_index_insert+2173>
   0x0000000000d9d317: mov rdx,r13
=> 0x0000000000d9d31a: mov QWORD PTR [r14+0x18],0x0
   0x0000000000d9d322: shr rdx,0x3
   0x0000000000d9d326: cmp BYTE PTR [rdx+0x7fff8000],0x0
   0x0000000000d9d32d: jne 0xd9d4f5 <_zend_hash_next_index_insert+2165>
   0x0000000000d9d333: lea rdi,[r13+0x8]
Stack Head (14 entries):
   _zend_hash_index_add_or_u @ 0x0000000000d9d31a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zend_hash_next_index_ins @ 0x0000000000d9d31a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_hash_next_index_inse @ 0x0000000000ac3d97: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_register_shutdown_fun @ 0x0000000000ac3d97: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   user_shutdown_function_ca @ 0x0000000000ac34c4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_hash_apply           @ 0x0000000000da767c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_call_shutdown_functio @ 0x0000000000acc486: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_request_shutdown      @ 0x0000000000c11e05: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x0000000001006839: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000002000fe0 rbx=0x00007ffff34571f8 rcx=0x0000000000100080 rdx=0x00007fffffffc660
rsi=0x7ffffffffffffffe rdi=0x00007ffff0a01000 rbp=0x00007fffffffc5e0 rsp=0x00007fffffffc560
 r8=0x00007ffff3457220  r9=0x0000000000000002 r10=0x00007ffff3457200 r11=0x00007ffff34141f0
r12=0x000000000010007f r13=0x00007fffffffc660 r14=0x00007ffff0a00fe8 r15=0x00007ffff3457210
rip=0x0000000000d9d31a efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation on destination operand
   Short description: DestAv (8/22)
   Explanation: The target crashed on an access violation at an address matching the destination operand of the instruction. This likely indicates a write access violation, which means the attacker may control the write address and/or value.
---END SUMMARY---
(1 of 1) - Hash: 38efe81bded39acf19172375c6d2f87b.5200bca0df765cea79b093a94f42ebc8
---CRASH SUMMARY---
Filename: /lab/php7/4f564092271007ee61ced69fc3df3561e61ae9acddf28c2b623063071819019a.php
SHA1: a16b20ecf9706d2ae34e0a27ef8e25b39735853b
Classification: EXPLOITABLE
Hash: 38efe81bded39acf19172375c6d2f87b.5200bca0df765cea79b093a94f42ebc8
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/4f564092271007ee61ced69fc3df3561e61ae9acddf28c2b623063071819019a.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000e09ff8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   tsrm_realpath_r           @ 0x0000000000e09ff8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   virtual_file_ex           @ 0x0000000000e0d46a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   expand_filepath_with_mode @ 0x0000000000c2455a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   expand_filepath_ex        @ 0x0000000000c24a40: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   expand_filepath           @ 0x0000000000c24a4e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _php_stream_fopen         @ 0x0000000000c7005d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _php_stream_open_wrapper_ @ 0x0000000000c63945: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_libxml_streams_IO_ope @ 0x00000000004b8a30: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_libxml_streams_IO_ope @ 0x00000000004b8d49: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_libxml_output_buffer_ @ 0x00000000004b8d49: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   xmlSaveFormatFileEnc      @ 0x00007ffff44cf3f7: in /usr/lib/x86_64-linux-gnu/libxml2.so.2.9.1
   zif_dom_document_save     @ 0x00000000008017d6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ff8c70: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x000000000000003b rcx=0x0000000000000000 rdx=0x000000000000003b
rsi=0x000060180000bcb8 rdi=0x00007fffff7ff530 rbp=0x00007fffff7ff220 rsp=0x00007fffff7fe9e0
 r8=0x0000000000000002  r9=0x0000000000000002 r10=0x0000000000000001 r11=0x00007ffff4180d90
r12=0x000060180000bcb8 r13=0x00007fffff7ff530 r14=0x000000000000003a r15=0x00007fffff7ff530
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 3) - Hash: a993cbfcdd2529d75b8234d0d4455732.295d656033431748f269b0ed595aad4d
---CRASH SUMMARY---
Filename: /lab/php7/b2344e06803478731bacb08b9c611f45f41e5e0f304a27e4cd50a2fe87a1bd90.php
SHA1: 7e4e98f5e5a0d91aebb611273ad1f896caaa8c65
Classification: EXPLOITABLE
Hash: a993cbfcdd2529d75b8234d0d4455732.295d656033431748f269b0ed595aad4d
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/b2344e06803478731bacb08b9c611f45f41e5e0f304a27e4cd50a2fe87a1bd90.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000d6ddb0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_string_init          @ 0x0000000000d6ddb0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   add_next_index_stringl    @ 0x0000000000d6ddb0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_do_repl_func         @ 0x000000000058989f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace_impl     @ 0x000000000058989f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace          @ 0x000000000058aa10: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_replace_in_subject    @ 0x000000000058ac35: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_replace_impl         @ 0x000000000058b97f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_preg_replace_callback @ 0x000000000058d51f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_do_repl_func         @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace_impl     @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000043 rcx=0x0000000000000000 rdx=0x0000000000000043
rsi=0x00007ffff3307ad7 rdi=0x00007ffff3300df8 rbp=0x00007fffff7ff7b0 rsp=0x00007fffff7fef70
 r8=0x0000000000000002  r9=0x0000000000000000 r10=0x00000c0380001bed r11=0x00000fffffeffed2
r12=0x00007ffff3307ad7 r13=0x00007ffff3300df8 r14=0x000010007fef7efa r15=0x00007fffff7ffb40
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 3) - Hash: b04e96c11ce42f0d43fcbbfd37ec4bee.9396e85af97d3eab8827e145e0f7c5c3
---CRASH SUMMARY---
Filename: /lab/php7/a52985f03586af74c78b99ffca1466a8b51520dfea91f364801e6d08da13185d.php
SHA1: 0ea90734a2cdbad2fa9a75cc6c53917d55ffc78e
Classification: EXPLOITABLE
Hash: b04e96c11ce42f0d43fcbbfd37ec4bee.9396e85af97d3eab8827e145e0f7c5c3
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/a52985f03586af74c78b99ffca1466a8b51520dfea91f364801e6d08da13185d.php
Faulting Frame:
   zend_parse_parameters @ 0x0000000000d810bc: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d810a1: lea rax,[rip+0x9112c8] # 0x1692370
   0x0000000000d810a8: lea rbx,[rbp-0x120]
   0x0000000000d810af: lea rdx,[rbp-0x100]
   0x0000000000d810b6: xor ecx,ecx
   0x0000000000d810b8: shr rbx,0x3
=> 0x0000000000d810bc: mov QWORD PTR [rbp-0x118],rax
   0x0000000000d810c3: lea rax,[rbp+0x10]
   0x0000000000d810c7: mov QWORD PTR [rbp-0x120],0x41b58ab3
   0x0000000000d810d2: mov DWORD PTR [rbx+0x7fff8000],0xf1f1f1f1
   0x0000000000d810dc: mov DWORD PTR [rbx+0x7fff8004],0xf4000000
Stack Head (1000 entries):
   zend_parse_parameters     @ 0x0000000000d810bc: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_forward_static_call   @ 0x0000000000ac2678: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_forward_static_call   @ 0x0000000000ac277e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_forward_static_call   @ 0x0000000000ac277e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_forward_static_call   @ 0x0000000000ac277e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000001692370 rbx=0x00000fffffeffdfa rcx=0x0000000000000000 rdx=0x00007fffff7feff0
rsi=0x000000000153d960 rdi=0x0000000000000001 rbp=0x00007fffff7ff0f0 rsp=0x00007fffff7fefd0
 r8=0x00007fffff7ff200  r9=0x00007fffff7ff214 r10=0x00007fffff7ff260 r11=0x00007ffff35654e0
r12=0x00000fffffeffe24 r13=0x00007fffff7ff180 r14=0x00007ffff3565480 r15=0x00007fffff7ff1e0
rip=0x0000000000d810bc efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: e0e94559e8657742c677c0aab96255fb.57b4eff28ec14f73f37b5433afcac255
---CRASH SUMMARY---
Filename: /lab/php7/0908f6d1755fccee2bf3265bd88a4adcaa423ab20cf7ccbfa49aecfb61db1204.php
SHA1: a641299f30d216206974c879c83386aa3d25cb82
Classification: EXPLOITABLE
Hash: e0e94559e8657742c677c0aab96255fb.57b4eff28ec14f73f37b5433afcac255
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/0908f6d1755fccee2bf3265bd88a4adcaa423ab20cf7ccbfa49aecfb61db1204.php
Faulting Frame:
   php_json_encode_array @ 0x00000000008ca9b1: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x00000000008ca9a2: push r13
   0x00000000008ca9a4: push r12
   0x00000000008ca9a6: mov r12,rdi
   0x00000000008ca9a9: push rbx
   0x00000000008ca9aa: sub rsp,0x198
=> 0x00000000008ca9b1: mov QWORD PTR [rbp-0xf8],rax
   0x00000000008ca9b8: shr QWORD PTR [rbp-0xf8],0x3
   0x00000000008ca9c0: mov rcx,QWORD PTR [rbp-0xf8]
   0x00000000008ca9c7: lea rax,[rip+0xbe5f42] # 0x14b0910
   0x00000000008ca9ce: mov DWORD PTR [rbp-0xc8],edx
Stack Head (1000 entries):
   php_json_encode_array     @ 0x00000000008ca9b1: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008c8f87: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_array     @ 0x00000000008cafd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008c8f87: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_array     @ 0x00000000008cafd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008c8f87: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_array     @ 0x00000000008cafd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008c8f87: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_array     @ 0x00000000008cafd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008c8f87: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_array     @ 0x00000000008cafd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008c8f87: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_array     @ 0x00000000008cafd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008c8f87: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_array     @ 0x00000000008cafd8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_json_encode_zval      @ 0x00000000008c8f87: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007fffff7fefd0 rbx=0x000010007fef7e18 rcx=0x00007fffffffa9e0 rdx=0x0000000000000000
rsi=0x00007ffff2ca4748 rdi=0x00007fffffffaa20 rbp=0x00007fffff7ff080 rsp=0x00007fffff7feec0
 r8=0x0000000000000000  r9=0x00007ffff2800118 r10=0x0000000000000000 r11=0x0000000000000000
r12=0x00007fffffffaa20 r13=0x00007ffff2ca4748 r14=0x00007fffffffa9e0 r15=0x00007fffffffa9e0
rip=0x00000000008ca9b1 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: e0535185014e63996752fe0cc826bc2c.538b11e6a53b48747245a60e4079ea4e
---CRASH SUMMARY---
Filename: /lab/php7/65826ee5410b79dccdf7bbcc33178bc48e4541fe190710cfb8fbeb47854d2c5f.php
SHA1: f1dfe8ee1f31fe0c203e72a26e3828c7c9c1177d
Classification: EXPLOITABLE
Hash: e0535185014e63996752fe0cc826bc2c.538b11e6a53b48747245a60e4079ea4e
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/65826ee5410b79dccdf7bbcc33178bc48e4541fe190710cfb8fbeb47854d2c5f.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x000000000100145b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_GENERATOR_CREATE_SPE @ 0x000000000100145b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_resume     @ 0x0000000000e03596: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_ensure_ini @ 0x00000000004352f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_ensure_ini @ 0x0000000000e060b1: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_Generator_current     @ 0x0000000000e060b1: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ff8c70: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_resume     @ 0x0000000000e03596: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_ensure_ini @ 0x00000000004352f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_generator_ensure_ini @ 0x0000000000e060b1: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_Generator_current     @ 0x0000000000e060b1: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ff8c70: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x00000000000000b0 rcx=0x00007ffff2942780 rdx=0x00000000000000b0
rsi=0x00007ffff285b7e0 rdi=0x00007ffff2942780 rbp=0x00007fffff7ff6b0 rsp=0x00007fffff7fee70
 r8=0x0000000000000007  r9=0x0000000000000000 r10=0x00007ffff285b730 r11=0x00007ffff285b748
r12=0x00007ffff285b7e0 r13=0x00007ffff2942780 r14=0x00007ffff285b7e0 r15=0x00007ffff3483000
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 0c2498625ae47f8efb83721774b853ae.406b9ca9648641f296f1eb4faafd3b94
---CRASH SUMMARY---
Filename: /lab/php7/2d32742a6d567b911b32731dbc3c534bbd09ff41d2db9597d6f872950d059a78.php
SHA1: dbac1a3d55126c9b5d3a4017a55dff26b52eb1c2
Classification: EXPLOITABLE
Hash: 0c2498625ae47f8efb83721774b853ae.406b9ca9648641f296f1eb4faafd3b94
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/2d32742a6d567b911b32731dbc3c534bbd09ff41d2db9597d6f872950d059a78.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000ddf907: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_string_init          @ 0x0000000000ddf907: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_default_exception_ne @ 0x0000000000ddf907: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _object_and_properties_in @ 0x0000000000d6afe1: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _object_init_ex           @ 0x0000000000d6b23c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_NEW_SPEC_CONST_HANDL @ 0x0000000000fedeb8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_destroy_obje @ 0x0000000000e3174c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_del    @ 0x0000000000e42761: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_dtor_func           @ 0x0000000000d5b55e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   i_zval_ptr_dtor           @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_array_destroy        @ 0x0000000000da4567: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_object_std_dtor      @ 0x0000000000e31171: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x000000000000004e rcx=0x00007ffff345d540 rdx=0x000000000000004e
rsi=0x00007ffff345d408 rdi=0x00007ffff345d558 rbp=0x00007fffff7ff730 rsp=0x00007fffff7feef0
 r8=0x000000000000004e  r9=0x0000000000000005 r10=0x0000000000000005 r11=0x00007ffff31e7db0
r12=0x00007ffff345d408 r13=0x00007ffff345d558 r14=0x00007ffff345d408 r15=0x00007fffff7ff820
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 7125ba376407becdc96f3f6f4e55ff5b.5f018c2ad024eee1423830888618d9dd
---CRASH SUMMARY---
Filename: /lab/php7/aea007bc2c5be26141d3b4792c63d78007db0e4976d68c530cd3a8f50c63e20f.php
SHA1: 5c90952f07d66e8dc62c01c52e5d247ff46465de
Classification: EXPLOITABLE
Hash: 7125ba376407becdc96f3f6f4e55ff5b.5f018c2ad024eee1423830888618d9dd
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/aea007bc2c5be26141d3b4792c63d78007db0e4976d68c530cd3a8f50c63e20f.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   xbuf_format_converter     @ 0x0000000000c1c681: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   vspprintf                 @ 0x0000000000c20bc0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_error_cb              @ 0x000000000042c22f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_error                @ 0x0000000000430dca: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_FETCH_CONSTANT_SPEC_ @ 0x0000000000ee8d8a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_do_repl_func         @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace_impl     @ 0x000000000058993b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_pcre_replace          @ 0x000000000058aa10: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_replace_in_subject    @ 0x000000000058ac35: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   preg_replace_impl         @ 0x000000000058bce0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_preg_replace_callback @ 0x000000000058d51f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000007 rcx=0x00007ffff3463418 rdx=0x0000000000000007
rsi=0x00007ffff3463418 rdi=0x00007ffff337ed8a rbp=0x00007fffff7ff410 rsp=0x00007fffff7febd0
 r8=0x00007ffff337ed90  r9=0x0000000000000021 r10=0x0000000000000000 r11=0x0000000000000006
r12=0x00007ffff3463418 r13=0x00007ffff337ed8a r14=0x0000000000000000 r15=0x00007fffff7ffb20
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 7fdf338e03af388ba997364ea62d3e95.260b7f361edfc5dd87e448ffc8c7dd1e
---CRASH SUMMARY---
Filename: /lab/php7/c3dbac5fc679047f322bbe2c950f48635bc39d4e7e4fbfda1f97d0847294a49c.php
SHA1: c6d7bd0aac3a32a9b8f70c553ddf80cd413226da
Classification: UNKNOWN
Hash: 7fdf338e03af388ba997364ea62d3e95.260b7f361edfc5dd87e448ffc8c7dd1e
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/c3dbac5fc679047f322bbe2c950f48635bc39d4e7e4fbfda1f97d0847294a49c.php
Faulting Frame:
   zend_objects_store_put @ 0x0000000000e41c7f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000e41c74: push r15
   0x0000000000e41c76: push r14
   0x0000000000e41c78: push r13
   0x0000000000e41c7a: push r12
   0x0000000000e41c7c: mov r12,rdi
=> 0x0000000000e41c7f: push rbx
   0x0000000000e41c80: sub rsp,0x18
   0x0000000000e41c84: lea rbx,[rip+0xceb215] # 0x1b2cea0 <executor_globals>
   0x0000000000e41c8b: lea rdi,[rbx+0x348]
   0x0000000000e41c92: mov rax,rdi
Stack Head (1000 entries):
   zend_objects_store_put    @ 0x0000000000e41c7f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_object_std_init      @ 0x0000000000e30f90: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_new          @ 0x0000000000e31c97: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _object_and_properties_in @ 0x0000000000d6b040: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _object_init_ex           @ 0x0000000000d6b23c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_NEW_SPEC_CONST_HANDL @ 0x0000000000fedeb8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_new_iterator @ 0x0000000000dd4816: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_get_new_iter @ 0x0000000000dd488e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_get_new_iter @ 0x0000000000dd4968: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_get_new_iter @ 0x0000000000dd4968: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_get_new_iter @ 0x0000000000dd4968: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_get_new_iter @ 0x0000000000dd4968: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_user_it_get_new_iter @ 0x0000000000dd4968: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00000ffffe65a0f4 rbx=0x00007ffff32d0780 rcx=0x00007ffff32d07a8 rdx=0x0000000000000007
rsi=0x00007ffff34042e0 rdi=0x00007ffff32d0780 rbp=0x00007fffff7ff020 rsp=0x00007fffff7ff000
 r8=0x0000000001678060  r9=0x0000000000000000 r10=0x0000000000000000 r11=0x0000000000000007
r12=0x00007ffff32d0780 r13=0x00007ffff34141e0 r14=0x00007ffff3414190 r15=0x00007ffff3481380
rip=0x0000000000e41c7f efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 1) - Hash: 035fd0cbc4226ac6684f68ff10491442.751828fd8e04a99673d3473b227c929f
---CRASH SUMMARY---
Filename: /lab/php7/fc906022cad8ce20305b7cfe4b71b75af465e47b6523e2d66cd7a300e92985c1.php
SHA1: ecab738a360ce989fa8f0ec929c228ea3ae03d2e
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 035fd0cbc4226ac6684f68ff10491442.751828fd8e04a99673d3473b227c929f
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/fc906022cad8ce20305b7cfe4b71b75af465e47b6523e2d66cd7a300e92985c1.php
Faulting Frame:
   phar_path_check @ 0x000000000097b4fc: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x000000000097b4e6: shr rax,0x3
   0x000000000097b4ea: and ecx,0x7
   0x000000000097b4ed: movzx eax,BYTE PTR [rax+0x7fff8000]
   0x000000000097b4f4: cmp al,cl
   0x000000000097b4f6: jle 0x97bb85 <phar_path_check+2725>
=> 0x000000000097b4fc: movzx eax,BYTE PTR [r9]
   0x000000000097b500: jmp 0x97b2b0 <phar_path_check+464>
   0x000000000097b505: nop DWORD PTR [rax]
   0x000000000097b508: lea r9,[rcx+0x1]
   0x000000000097b50c: mov rax,r9
Stack Head (17 entries):
   phar_path_check           @ 0x000000000097b4fc: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   phar_get_entry_info_dir   @ 0x0000000000909421: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   phar_get_entry_info       @ 0x000000000090c21f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   phar_get_entry_data       @ 0x000000000090c21f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   phar_get_or_create_entry_ @ 0x000000000090d22a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   phar_add_file             @ 0x0000000000967c2a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_Phar_offsetSet        @ 0x0000000000968381: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bcbf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_write_dimension  @ 0x0000000000e34b32: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_ASSIGN_DIM_SPEC_CV_T @ 0x0000000000f3c254: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x0000000000000062 rcx=0x0000000000000001 rdx=0x00007fffffff9d80
rsi=0x00007fffffff9d54 rdi=0x00007fffffff9d58 rbp=0x00007fffffff9d00 rsp=0x00007fffffff9ce0
 r8=0x00007ffff345f238  r9=0x0000000000000001 r10=0x00007ffff345f198 r11=0x00000000000000fb
r12=0x0000000000000000 r13=0x0000000000000007 r14=0x0000000000000000 r15=0x0000000000000000
rip=0x000000000097b4fc efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: a1e9309ae47cd8efefa34876572acef5.d9c46dd696ef79e5798016b887d951f9
---CRASH SUMMARY---
Filename: /lab/php7/aba50137b4844093137fce43d00f1ecead0be449db248bdedd2c9bb8b3018678.php
SHA1: 1be10f56b7825a129a41446e060dddf70f08d02f
Classification: EXPLOITABLE
Hash: a1e9309ae47cd8efefa34876572acef5.d9c46dd696ef79e5798016b887d951f9
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/aba50137b4844093137fce43d00f1ecead0be449db248bdedd2c9bb8b3018678.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000d41ff3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_string_init          @ 0x0000000000d41ff3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_long_to_str          @ 0x0000000000d41ff3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_get_string_func     @ 0x0000000000d4412d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_make_printable_zval  @ 0x0000000000d60007: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   concat_function           @ 0x0000000000d3e4e7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_CONCAT_SPEC_CONST_TM @ 0x0000000000ef9ac8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_recursive_it_move_for @ 0x0000000000a04834: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ffa2f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000001 rcx=0x0000000000000000 rdx=0x0000000000000001
rsi=0x00007fffff7ff673 rdi=0x00007ffff347c0f8 rbp=0x00007fffff7ff630 rsp=0x00007fffff7fedf0
 r8=0x0000000000000003  r9=0x0000000000000000 r10=0x00000ffffe5e20a1 r11=0x00007ffff2f10508
r12=0x00007fffff7ff673 r13=0x00007ffff347c0f8 r14=0x00007fffff7ff673 r15=0x00007fffff7ff8a0
rip=0x00007ffff4e5931d efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 0566409a9a9ca54aed0090456fc2a872.d026aafc391f03848a227a8fe98d3e57
---CRASH SUMMARY---
Filename: /lab/php7/0ab77e1f9e4af2e20525febdf45e4e65ebca8a985d503394e622eaa9537ba31a.php
SHA1: 2a735194be05bec57268fb9d06ab11000497bedc
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 0566409a9a9ca54aed0090456fc2a872.d026aafc391f03848a227a8fe98d3e57
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/0ab77e1f9e4af2e20525febdf45e4e65ebca8a985d503394e622eaa9537ba31a.php
Faulting Frame:
   zend_compile_const @ 0x0000000000cf8770: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000cf875b: and ecx,0x7
   0x0000000000cf875e: movzx edx,BYTE PTR [rdx+0x7fff8000]
   0x0000000000cf8765: add ecx,0x1
   0x0000000000cf8768: cmp cl,dl
   0x0000000000cf876a: jge 0xcf8ba8 <zend_compile_const+2120>
=> 0x0000000000cf8770: movzx edx,WORD PTR [rax]
   0x0000000000cf8773: cmp dx,0x84
   0x0000000000cf8778: je 0xcf8708 <zend_compile_const+936>
   0x0000000000cf877a: cmp dx,0x119
   0x0000000000cf877f: jne 0xcf852d <zend_compile_const+461>
Stack Head (17 entries):
   zend_compile_const        @ 0x0000000000cf8770: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d0139b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_args         @ 0x0000000000d0ae4c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_call_common  @ 0x0000000000d0b856: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_dynamic_call @ 0x0000000000d0bde4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_call         @ 0x0000000000d0eec6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d0144d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_stmt         @ 0x0000000000d175ba: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_top_stmt     @ 0x0000000000d2168b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_top_stmt     @ 0x0000000000d2173c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile              @ 0x0000000000c8ee77: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   compile_file              @ 0x0000000000c93b0e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   phar_compile_file         @ 0x000000000094e336: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e04: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x00000ffffffff3e4 rcx=0x0000000000000001 rdx=0x0000000000000000
rsi=0x000000000167f6e0 rdi=0x00007ffff3474208 rbp=0x00007fffffff9fb0 rsp=0x00007fffffff9ef0
 r8=0x0000000000000000  r9=0x00007ffff34740e0 r10=0x00007ffff34571f8 r11=0x00000ffffe68e81c
r12=0x0000000001b2d4c0 r13=0x00007fffffffa1d0 r14=0x000010007fff73e4 r15=0x00007ffff34571f8
rip=0x0000000000cf8770 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: 8734a1ce06c326c67800f544f64e14f5.47dba7a94858536b51bdfa87bd564e49
---CRASH SUMMARY---
Filename: /lab/php7/b992204bd5e292649e056071c25e6753f80b8ddde5c7c1bc38b5b12ae2bd641a.php
SHA1: bb52dac766562538573318a3701136e1290ea530
Classification: EXPLOITABLE
Hash: 8734a1ce06c326c67800f544f64e14f5.47dba7a94858536b51bdfa87bd564e49
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/b992204bd5e292649e056071c25e6753f80b8ddde5c7c1bc38b5b12ae2bd641a.php
Faulting Frame:
   zend_call_method @ 0x0000000000dd2959: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000dd2945: push r12
   0x0000000000dd2947: push rbx
   0x0000000000dd2948: lea rbx,[r14+0x7fff8000]
   0x0000000000dd294f: sub rsp,0x198
   0x0000000000dd2956: mov edx,DWORD PTR [rbp+0x10]
=> 0x0000000000dd2959: mov QWORD PTR [rbp-0x198],rcx
   0x0000000000dd2960: mov QWORD PTR [rbp-0x190],0x41b58ab3
   0x0000000000dd296b: mov QWORD PTR [rbp-0x188],rax
   0x0000000000dd2972: mov DWORD PTR [r14+0x7fff8000],0xf1f1f1f1
   0x0000000000dd297d: mov DWORD PTR [rbx+0x4],0xf4f40000
Stack Head (1000 entries):
   zend_call_method          @ 0x0000000000dd2959: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_call_getter      @ 0x0000000000e32fbe: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_read_property    @ 0x0000000000e3915b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_post_incdec_overload @ 0x000000000043e727: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_post_incdec_property @ 0x0000000000fc88e4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_call_getter      @ 0x0000000000e32fbe: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_read_property    @ 0x0000000000e3915b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_post_incdec_overload @ 0x000000000043e727: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_post_incdec_property @ 0x0000000000fc88e4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_std_call_getter      @ 0x0000000000e32fbe: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x000000000169e6c0 rbx=0x000010007fef7dde rcx=0x00000000016aca80 rdx=0x0000000000000001
rsi=0x00007ffff3404018 rdi=0x00007fffff7ff1f0 rbp=0x00007fffff7ff080 rsp=0x00007fffff7feec0
 r8=0x0000000000000005  r9=0x00007fffff7ff2e0 r10=0x00007ffff3404018 r11=0x00007ffff3404118
r12=0x0000000000365a11 r13=0x0000000001b2d088 r14=0x00000fffffeffdde r15=0x00007fffff7ff1f0
rip=0x0000000000dd2959 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: a1e9309ae47cd8efefa34876572acef5.986181c8757668380258aeab59795d21
---CRASH SUMMARY---
Filename: /lab/php7/439a4a22cc681652ca872eac26b73b441c13c35f8fa90a2089b8654a9d534e44.php
SHA1: 18b5289fdef797c9077d61b1cdf0e10873624515
Classification: EXPLOITABLE
Hash: a1e9309ae47cd8efefa34876572acef5.986181c8757668380258aeab59795d21
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/439a4a22cc681652ca872eac26b73b441c13c35f8fa90a2089b8654a9d534e44.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000d41ff3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_string_init          @ 0x0000000000d41ff3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_long_to_str          @ 0x0000000000d41ff3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_get_string_func     @ 0x0000000000d4412d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_make_printable_zval  @ 0x0000000000d60007: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   concat_function           @ 0x0000000000d3e4e7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_CONCAT_SPEC_CONST_CV @ 0x0000000000fae421: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_lookup_class_ex      @ 0x0000000000d2da11: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_lookup_class         @ 0x0000000000d2e581: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_class_exists          @ 0x0000000000dc1bbb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x0000000000000004 rcx=0x0000000000000000 rdx=0x0000000000000004
rsi=0x00007fffff7ff690 rdi=0x00007ffff34634f8 rbp=0x00007fffff7ff650 rsp=0x00007fffff7fee10
 r8=0x0000000000000003  r9=0x0000000000000000 r10=0x00007fffff7ff8c0 r11=0x0000000000000246
r12=0x00007fffff7ff690 r13=0x00007ffff34634f8 r14=0x00007fffff7ff690 r15=0x00007fffff7ff8c0
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 2) - Hash: 9f122ce10d05e907dcb53be5d37f992b.8bc3e108af5ca3ebb422cd77c8cd0a1b
---CRASH SUMMARY---
Filename: /lab/php7/c4747f942cae598b1fac225b64677e3ddb532595dfd1ba5a45cd4acf2fdf759e.php
SHA1: a28592cecfa8292d6818db483ab46a6a51e9a473
Classification: UNKNOWN
Hash: 9f122ce10d05e907dcb53be5d37f992b.8bc3e108af5ca3ebb422cd77c8cd0a1b
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/c4747f942cae598b1fac225b64677e3ddb532595dfd1ba5a45cd4acf2fdf759e.php
Faulting Frame:
   _php_stream_filter_flush @ 0x0000000000c6bc96: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000c6bc7e: je 0xc6be70 <_php_stream_filter_flush+816>
   0x0000000000c6bc84: mov rax,QWORD PTR [rbp-0xe8]
   0x0000000000c6bc8b: lea rdi,[rax+0x10]
   0x0000000000c6bc8f: mov rax,rdi
   0x0000000000c6bc92: shr rax,0x3
=> 0x0000000000c6bc96: cmp BYTE PTR [rax+0x7fff8000],0x0
   0x0000000000c6bc9d: jne 0xc6c439 <_php_stream_filter_flush+2297>
   0x0000000000c6bca3: mov rax,QWORD PTR [rbp-0xe8]
   0x0000000000c6bcaa: mov r13,QWORD PTR [rax+0x10]
   0x0000000000c6bcae: test r13,r13
Stack Head (9 entries):
   _php_stream_filter_flush  @ 0x0000000000c6bc96: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_stream_filter_remove  @ 0x0000000000be89b3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x040c8d2d8c2ec40e rbx=0x00007fffffffa950 rcx=0x00000ffffffff526 rdx=0x00000ffffe68ac1a
rsi=0x0000000000000001 rdi=0x2064696c61762071 rbp=0x00007fffffffaa00 rsp=0x00007fffffffa900
 r8=0x0000000000000007  r9=0x0000000000000002 r10=0x000010007e67a853 r11=0x00007fffffffa990
r12=0x00007ffff3403000 r13=0x00007fffffffaaf0 r14=0x00007ffff3403000 r15=0x00007ffff347dc20
rip=0x0000000000c6bc96 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 2) - Hash: 31c000bccf9e97016495201819827ff1.566e399253ce993e59a21841f32d71e0
---CRASH SUMMARY---
Filename: /lab/php7/d38db8ae5decd9d2bf4ee81ecddc76c8d831ae0a9cb7696ed4dd3ba21d91deae.php
SHA1: 380bbff68f9af5b709e0d9f30142b188d4054b20
Classification: PROBABLY_EXPLOITABLE
Hash: 31c000bccf9e97016495201819827ff1.566e399253ce993e59a21841f32d71e0
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/d38db8ae5decd9d2bf4ee81ecddc76c8d831ae0a9cb7696ed4dd3ba21d91deae.php
Faulting Frame:
   _zval_get_string_func @ 0x0000000000d441cf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d441b8: mov rax,QWORD PTR [rax+0x48]
   0x0000000000d441bc: test rax,rax
   0x0000000000d441bf: je 0xd442a3 <_zval_get_string_func+2195>
   0x0000000000d441c5: mov rdi,r12
   0x0000000000d441c8: lea rsi,[rbp-0xd0]
=> 0x0000000000d441cf: call rax
   0x0000000000d441d1: lea rdi,[rax+0x8]
   0x0000000000d441d5: mov r15,rax
   0x0000000000d441d8: mov rax,rdi
   0x0000000000d441db: mov rdx,rdi
Stack Head (19 entries):
   _zval_get_string_func     @ 0x0000000000d441cf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _zval_get_string          @ 0x00000000009aba46: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _parameter_string         @ 0x00000000009aba46: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _function_parameter_strin @ 0x00000000009ac420: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _function_string          @ 0x00000000009ac420: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _class_string             @ 0x00000000009ae1a1: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_reflection_class___to @ 0x00000000009b25be: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bcbf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zim_reflection_export     @ 0x0000000000982987: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bcbf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _reflection_export        @ 0x00000000009a389a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_FCALL_SPEC_RETVAL @ 0x0000000000ffa2f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x656d726f66206c6c rbx=0x00000ffffffff358 rcx=0x0000000000000000 rdx=0x00000000002d19d1
rsi=0x00007fffffff9ae0 rdi=0x00007fffffff9bf0 rbp=0x00007fffffff9bb0 rsp=0x00007fffffff9ac0
 r8=0x00007fffffff9bf9  r9=0x00007fffffff9bfa r10=0x00000ffffffff37e r11=0x00000ffffffff2ba
r12=0x00007fffffff9bf0 r13=0x000010007fff7358 r14=0x000010007fff737a r15=0x00007fffffff9bf0
rip=0x0000000000d441cf efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL during branch instruction
   Short description: BranchAvNearNull (13/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted. However, there is a chance it could be a NULL dereference.
---END SUMMARY---
(1 of 1) - Hash: cec58c6a2c752ecf31f0c031d96211a8.2a137f8933929e232f77bfb5a712fb06
---CRASH SUMMARY---
Filename: /lab/php7/a49be9b68bdc71d37fc31b39eab72f21dd647cbb4d2fef9de3bfcc04c977b39a.php
SHA1: 47e887063ef57a328989f0f5eb57c79aace39417
Classification: EXPLOITABLE
Hash: cec58c6a2c752ecf31f0c031d96211a8.2a137f8933929e232f77bfb5a712fb06
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/a49be9b68bdc71d37fc31b39eab72f21dd647cbb4d2fef9de3bfcc04c977b39a.php
Faulting Frame:
   zend_is_callable_check_func @ 0x0000000000d643d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d643c8: push r13
   0x0000000000d643ca: push r12
   0x0000000000d643cc: push rbx
   0x0000000000d643cd: mov rbx,rdx
   0x0000000000d643d0: sub rsp,0x88
=> 0x0000000000d643d7: mov DWORD PTR [rbp-0x60],edi
   0x0000000000d643da: mov DWORD PTR [rbp-0x44],ecx
   0x0000000000d643dd: mov rax,QWORD PTR fs:0x28
   0x0000000000d643e6: mov QWORD PTR [rbp-0x38],rax
   0x0000000000d643ea: xor eax,eax
Stack Head (1000 entries):
   zend_is_callable_check_fu @ 0x0000000000d643d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable_ex       @ 0x0000000000d7bd1e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_fcall_info_init      @ 0x0000000000d7dc55: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_arg_impl       @ 0x0000000000d7ed18: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_arg            @ 0x0000000000d7ed18: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_va_args        @ 0x0000000000d808f9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_parameters     @ 0x0000000000d8111e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_array_reduce          @ 0x0000000000ab69ed: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_array_reduce          @ 0x0000000000ab7066: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_array_reduce          @ 0x0000000000ab7066: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000006 rbx=0x00007fffff7ff720 rcx=0x0000000000000000 rdx=0x00007fffff7ff720
rsi=0x00007ffff328a1b0 rdi=0x0000000000000000 rbp=0x00007fffff7ff040 rsp=0x00007fffff7fef90
 r8=0x00007fffff7ff2c0  r9=0x00007fffff7ff2c0 r10=0x00007ffff328a1b8 r11=0x0000000000000000
r12=0x000010007fef7e16 r13=0x00000fffffeffe16 r14=0x0000000000000000 r15=0x00007ffff328a1b0
rip=0x0000000000d643d7 efl=0x0000000000010206  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: b56f534b8a1c6b1cd11d987acef1201b.330713be79c206daad9a89d85eafb3be
---CRASH SUMMARY---
Filename: /lab/php7/d810e38f955a6aabef6ee69984a61470143931b7f77192e90480b0fc2d26ba82.php
SHA1: c1d71f38450fac3d0cd0511a0f52a79b50f1c93a
Classification: EXPLOITABLE
Hash: b56f534b8a1c6b1cd11d987acef1201b.330713be79c206daad9a89d85eafb3be
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/d810e38f955a6aabef6ee69984a61470143931b7f77192e90480b0fc2d26ba82.php
Faulting Frame:
   zend_compile_expr @ 0x0000000000d00ec3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d00eaf: push r12
   0x0000000000d00eb1: lea r12,[r15+0x7fff8000]
   0x0000000000d00eb8: push rbx
   0x0000000000d00eb9: mov rbx,rsi
   0x0000000000d00ebc: sub rsp,0x178
=> 0x0000000000d00ec3: mov QWORD PTR [rbp-0xc8],rax
   0x0000000000d00eca: mov rax,rsi
   0x0000000000d00ecd: shr rax,0x3
   0x0000000000d00ed1: mov QWORD PTR [rbp-0xd0],0x41b58ab3
   0x0000000000d00edc: mov DWORD PTR [r15+0x7fff8000],0xf1f1f1f1
Stack Head (1000 entries):
   zend_compile_expr         @ 0x0000000000d00ec3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d01311: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_binary_op    @ 0x0000000000d07065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000001678cf8 rbx=0x00007ffff35aac28 rcx=0x0000000000000008 rdx=0x0000000000000000
rsi=0x00007ffff35aac28 rdi=0x00007fffff7ff0e0 rbp=0x00007fffff7ff080 rsp=0x00007fffff7feee0
 r8=0x0000000000000007  r9=0x0000000000000008 r10=0x0000000000000003 r11=0x0000000000000007
r12=0x000010007fef7df6 r13=0x00007fffff7ff0e0 r14=0x00007fffff7ff0e0 r15=0x00000fffffeffdf6
rip=0x0000000000d00ec3 efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 2) - Hash: a02e8584315d70b30fb13929e9fe12cd.123f8244711228dcf4d0cc7f56c2ac90
---CRASH SUMMARY---
Filename: /lab/php7/1dabaa5385c6a5d6da177fa669f162ce5b9d350762d169d936202664d010f479.php
SHA1: 2565260cabebfac372d9a8f9110034ced19336d0
Classification: EXPLOITABLE
Hash: a02e8584315d70b30fb13929e9fe12cd.123f8244711228dcf4d0cc7f56c2ac90
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/1dabaa5385c6a5d6da177fa669f162ce5b9d350762d169d936202664d010f479.php
Faulting Frame:
   None @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
Disassembly:
Stack Head (1000 entries):
   None                      @ 0x00007ffff4e5931d: in /usr/lib/x86_64-linux-gnu/libasan.so.0.0.0
   memcpy                    @ 0x0000000000d7c401: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable_ex       @ 0x0000000000d7c401: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_spl_autoload_unregist @ 0x00000000009fe3f1: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_spl_autoload_call     @ 0x00000000009fba6e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_method          @ 0x0000000000dd2e9a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_spl_autoload_call     @ 0x00000000009fba6e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff52cdf40 rbx=0x000000000000000b rcx=0x00007ffff34640d8 rdx=0x000000000000000b
rsi=0x00007ffff3401400 rdi=0x00007ffff34640d8 rbp=0x00007fffff7ff310 rsp=0x00007fffff7fead0
 r8=0x00007ffff34640e2  r9=0x00007fffff7ff500 r10=0x000000000000000a r11=0x00007ffff345ea28
r12=0x00007ffff3401400 r13=0x00007ffff34640d8 r14=0x0000000000000000 r15=0x00000ffffe68bd45
rip=0x00007ffff4e5931d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation during branch instruction
   Short description: BranchAv (4/22)
   Explanation: The target crashed on a branch instruction, which may indicate that the control flow is tainted.
---END SUMMARY---
(1 of 1) - Hash: 2e1cd96c8f5afa55725e5e2d1dc6ca27.994059afca99474763baab5a521523ec
---CRASH SUMMARY---
Filename: /lab/php7/f7706f7855dec08c9ef61b69b7f3d29b394e230218f36c235a61f2ac6aae2e8c.php
SHA1: 31dc0c21f9da02dfba50ae02b8327f87bd9d5f65
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 2e1cd96c8f5afa55725e5e2d1dc6ca27.994059afca99474763baab5a521523ec
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/f7706f7855dec08c9ef61b69b7f3d29b394e230218f36c235a61f2ac6aae2e8c.php
Faulting Frame:
   zend_string_release @ 0x0000000000cbf9c3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000cbf9ad: shr rdx,0x3
   0x0000000000cbf9b1: and ecx,0x7
   0x0000000000cbf9b4: movzx edx,BYTE PTR [rdx+0x7fff8000]
   0x0000000000cbf9bb: cmp dl,cl
   0x0000000000cbf9bd: jle 0xcc06c5 <ini_parse+11189>
=> 0x0000000000cbf9c3: movzx eax,BYTE PTR [rdi+0x5]
   0x0000000000cbf9c7: test al,0x2
   0x0000000000cbf9c9: jne 0xcbe300 <ini_parse+2032>
   0x0000000000cbf9cf: mov rdx,rdi
   0x0000000000cbf9d2: mov rcx,rdi
Stack Head (11 entries):
   zend_string_release       @ 0x0000000000cbf9c3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ini_parse                 @ 0x0000000000cbf9c3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_ini_string     @ 0x0000000000cc0fa6: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_parse_ini_string      @ 0x0000000000ac862d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000080 rbx=0x00007fffffff99c8 rcx=0x0000000000000000 rdx=0x0000000000000000
rsi=0x0000000000000000 rdi=0x000000000000007b rbp=0x00007fffffffa910 rsp=0x00007fffffff9780
 r8=0x00007ffff34140a0  r9=0x0000000000000007 r10=0x00007ffff34140a0 r11=0x0000000000000000
r12=0x0000000000000004 r13=0x0000000000000003 r14=0x00007fffffff9bc0 r15=0x00007fffffff9bb0
rip=0x0000000000cbf9c3 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: 67e583cf35dd9abe57cadc503c7e2ce8.8c5814319940474bb9865901c57de1a1
---CRASH SUMMARY---
Filename: /lab/php7/79351deb8152dacf72c84a936082be2aa0d5fb874333ba7bf481b04422b2cf2e.php
SHA1: d0133c17fa7aa80f2d29139f8219d4f8bc3755c1
Classification: EXPLOITABLE
Hash: 67e583cf35dd9abe57cadc503c7e2ce8.8c5814319940474bb9865901c57de1a1
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/79351deb8152dacf72c84a936082be2aa0d5fb874333ba7bf481b04422b2cf2e.php
Faulting Frame:
   zend_hash_find_bucket @ 0x0000000000db204b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000db2037: jle 0xdb2146 <zend_hash_find+870>
   0x0000000000db203d: test cl,cl
   0x0000000000db203f: jne 0xdb213e <zend_hash_find+862>
   0x0000000000db2045: mov rsi,r15
   0x0000000000db2048: mov rdi,rax
=> 0x0000000000db204b: mov QWORD PTR [rbp-0x50],r9
   0x0000000000db204f: mov QWORD PTR [rbp-0x48],r8
   0x0000000000db2053: call 0x4236a0 <memcmp@plt>
   0x0000000000db2058: test eax,eax
   0x0000000000db205a: mov r8,QWORD PTR [rbp-0x48]
Stack Head (1000 entries):
   zend_hash_find_bucket     @ 0x0000000000db204b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_hash_find            @ 0x0000000000db204b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_hash_find_ptr        @ 0x0000000000d6512f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable_check_fu @ 0x0000000000d6512f: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable_ex       @ 0x0000000000d7bd1e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable          @ 0x0000000000d7d6b7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_filter_callback       @ 0x000000000086ed3d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_zval_filter           @ 0x00000000008623d9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_filter_call           @ 0x00000000008634f8: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_filter_var            @ 0x00000000008643c2: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec2e84: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_filter_callback       @ 0x000000000086ee08: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_zval_filter           @ 0x00000000008623d9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007ffff3401400 rbx=0x00007ffff3401488 rcx=0x0000000000000000 rdx=0x0000000000000008
rsi=0x00007ffff34014a0 rdi=0x00007ffff3401400 rbp=0x00007fffff7ff040 rsp=0x00007fffff7feff0
 r8=0x00007ffff3401498  r9=0x000010007e678294 r10=0x0000000000000007 r11=0x0000000000000007
r12=0x0000609400007e20 r13=0x801ae6e807c08372 r14=0x0000609400001400 r15=0x00007ffff34014a0
rip=0x0000000000db204b efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 611ccc07f462bb6943d019dfd791a6ab.013bd7ebd0e3ad45af8303ad574e2728
---CRASH SUMMARY---
Filename: /lab/php7/9540ea8667c6809d48775f9ca1291a36a714fdbc90ce6a11df7aa75c374e1020.php
SHA1: aaa9606266ebac891903335804624aee1fcb1ccf
Classification: EXPLOITABLE
Hash: 611ccc07f462bb6943d019dfd791a6ab.013bd7ebd0e3ad45af8303ad574e2728
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/9540ea8667c6809d48775f9ca1291a36a714fdbc90ce6a11df7aa75c374e1020.php
Faulting Frame:
   xbuf_format_converter @ 0x0000000000c1b90d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000c1b8f5: shr rax,0x3
   0x0000000000c1b8f9: add rax,0x7fff8000
   0x0000000000c1b8ff: mov QWORD PTR [rbp-0x608],rax
   0x0000000000c1b906: mov rax,rsi
   0x0000000000c1b909: add rax,0x4
=> 0x0000000000c1b90d: mov QWORD PTR [rbp-0x698],rax
   0x0000000000c1b914: shr rax,0x3
   0x0000000000c1b918: add rax,0x7fff8000
   0x0000000000c1b91e: mov QWORD PTR [rbp-0x6a8],rax
   0x0000000000c1b925: lea rax,[rbp-0x590]
Stack Head (1000 entries):
   xbuf_format_converter     @ 0x0000000000c1b90d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   vspprintf                 @ 0x0000000000c20bc0: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_error                @ 0x0000000000430e0a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_FETCH_OBJ_R_SPEC_VAR @ 0x0000000000e82ef7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_error                @ 0x000000000043191c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_FETCH_OBJ_R_SPEC_VAR @ 0x0000000000e82ef7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   _call_user_function_ex    @ 0x0000000000d2d1d7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_error                @ 0x000000000043191c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_FETCH_OBJ_R_SPEC_VAR @ 0x0000000000e82ef7: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x00007fffff7ff8f4 rbx=0x00000000016b1380 rcx=0x0000000000000054 rdx=0x00000000016b1380
rsi=0x00007fffff7ff8f0 rdi=0x00007fffff7ff6b0 rbp=0x00007fffff7ff680 rsp=0x00007fffff7fefb0
 r8=0x00007fffff7ff8b0  r9=0x00007ffff3464130 r10=0x0000000000000014 r11=0x0000000000000000
r12=0x000010007fef7ed2 r13=0x00007fffff7ff7f0 r14=0x00007fffff7ff6b0 r15=0x00007fffff7ff6b0
rip=0x0000000000c1b90d efl=0x0000000000010202  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
(1 of 1) - Hash: 9b91d9dba38defd159bb990bc51acacd.dac8341e16dee706635b235ed28288ae
---CRASH SUMMARY---
Filename: /lab/php7/cf185cc64d931f40e342090853c1493ebc339d593b9d4b40da9becd5f4e975ce.php
SHA1: 4ed4ea5da5c02b3393f183f6f6f5994e2246c7a2
Classification: PROBABLY_EXPLOITABLE
Hash: 9b91d9dba38defd159bb990bc51acacd.dac8341e16dee706635b235ed28288ae
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/cf185cc64d931f40e342090853c1493ebc339d593b9d4b40da9becd5f4e975ce.php
Faulting Frame:
   spl_recursive_it_dtor @ 0x0000000000a041e3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000a041ca: shr r8,0x3
   0x0000000000a041ce: and r9d,0x7
   0x0000000000a041d2: movzx r8d,BYTE PTR [r8+0x7fff8000]
   0x0000000000a041da: cmp r8b,r9b
   0x0000000000a041dd: jle 0xa042c8 <spl_recursive_it_dtor+472>
=> 0x0000000000a041e3: cmp BYTE PTR [rax+0x10],0x0
   0x0000000000a041e7: je 0xa04190 <spl_recursive_it_dtor+160>
   0x0000000000a041e9: mov rcx,rax
   0x0000000000a041ec: shr rcx,0x3
   0x0000000000a041f0: cmp BYTE PTR [rcx+0x7fff8000],0x0
Stack Head (7 entries):
   spl_recursive_it_dtor     @ 0x0000000000a041e3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_objects_store_free_o @ 0x0000000000e41bc4: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   shutdown_executor         @ 0x0000000000d2875b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_deactivate           @ 0x0000000000d625fd: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_request_shutdown      @ 0x0000000000c11a48: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x0000000001006839: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000050 rbx=0x0000000000000003 rcx=0x0000000000000060 rdx=0x000000000034ea9c
rsi=0x00000ffffe680000 rdi=0x0000000000000000 rbp=0x00007fffffffcbd0 rsp=0x00007fffffffcb80
 r8=0x0000000000000000  r9=0x0000000000000000 r10=0x0000000000000003 r11=0x0000000000000000
r12=0x000010007e686460 r13=0x000010007e686461 r14=0x00000ffffe68e461 r15=0x00007ffff34723d0
rip=0x0000000000a041e3 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on destination operand
   Short description: DestAvNearNull (15/22)
   Explanation: The target crashed on an access violation at an address matching the destination operand of the instruction. This likely indicates a write access violation, which means the attacker may control write address and/or value. However, it there is a chance it could be a NULL dereference.
---END SUMMARY---
(1 of 2) - Hash: 73914cfac5361373c1d90a5308973a26.829ca371c25b24f22c313bfbe3c93167
---CRASH SUMMARY---
Filename: /lab/php7/62408dd1021c3b171adb75800162fb9e5777dd4939b53442a9316b0802e9ff43.php
SHA1: fca80742c993f0de603454ccf953b338dfd21ce0
Classification: PROBABLY_NOT_EXPLOITABLE
Hash: 73914cfac5361373c1d90a5308973a26.829ca371c25b24f22c313bfbe3c93167
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/62408dd1021c3b171adb75800162fb9e5777dd4939b53442a9316b0802e9ff43.php
Faulting Frame:
   zend_compile_const @ 0x0000000000cf8770: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000cf875b: and ecx,0x7
   0x0000000000cf875e: movzx edx,BYTE PTR [rdx+0x7fff8000]
   0x0000000000cf8765: add ecx,0x1
   0x0000000000cf8768: cmp cl,dl
   0x0000000000cf876a: jge 0xcf8ba8 <zend_compile_const+2120>
=> 0x0000000000cf8770: movzx edx,WORD PTR [rax]
   0x0000000000cf8773: cmp dx,0x84
   0x0000000000cf8778: je 0xcf8708 <zend_compile_const+936>
   0x0000000000cf877a: cmp dx,0x119
   0x0000000000cf877f: jne 0xcf852d <zend_compile_const+461>
Stack Head (16 entries):
   zend_compile_const        @ 0x0000000000cf8770: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d0139b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_args         @ 0x0000000000d0ae4c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_call_common  @ 0x0000000000d0b856: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_call         @ 0x0000000000d0f065: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_expr         @ 0x0000000000d0144d: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_stmt         @ 0x0000000000d175ba: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_top_stmt     @ 0x0000000000d2168b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile_top_stmt     @ 0x0000000000d2173c: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_compile              @ 0x0000000000c8ee77: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   compile_file              @ 0x0000000000c93b0e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   phar_compile_file         @ 0x000000000094e336: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e04: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000000000000 rbx=0x00000ffffffff3e4 rcx=0x0000000000000001 rdx=0x0000000000000000
rsi=0x000000000167f6e0 rdi=0x00007ffff3474038 rbp=0x00007fffffff9fb0 rsp=0x00007fffffff9ef0
 r8=0x0000000000000000  r9=0x00007ffff34740b8 r10=0x00007ffff34571f8 r11=0x00000ffffe68e817
r12=0x0000000001b2d4c0 r13=0x00007fffffffa1d0 r14=0x000010007fff73e4 r15=0x00007ffff34571f8
rip=0x0000000000cf8770 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation near NULL on source operand
   Short description: SourceAvNearNull (16/22)
   Explanation: The target crashed on an access violation at an address matching the source operand of the current instruction. This likely indicates a read access violation, which may mean the application crashed on a simple NULL dereference to data structure that has no immediate effect on control of the processor.
---END SUMMARY---
(1 of 1) - Hash: 964e94c46769fe4ca27c43715c5f92ac.18a82c8cfedde5f81aa954ba065f12df
---CRASH SUMMARY---
Filename: /lab/php7/d8966e41b761a35bbc254fab2ca8b00b6337d9c09fe6ed02bc20f85f318e9fc0.php
SHA1: 0c486e7ca13d9662250e9bd211ba834687157b94
Classification: UNKNOWN
Hash: 964e94c46769fe4ca27c43715c5f92ac.18a82c8cfedde5f81aa954ba065f12df
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/d8966e41b761a35bbc254fab2ca8b00b6337d9c09fe6ed02bc20f85f318e9fc0.php
Faulting Frame:
   spl_array_get_hash_table_ptr @ 0x0000000000a2bb09: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000a2baf3: mov r13,QWORD PTR [r13+0x0]
   0x0000000000a2baf7: lea rax,[r13+0x20]
   0x0000000000a2bafb: mov r9,rax
   0x0000000000a2bafe: mov QWORD PTR [rbp-0xe8],rax
   0x0000000000a2bb05: shr r9,0x3
=> 0x0000000000a2bb09: cmp BYTE PTR [r9+0x7fff8000],0x0
   0x0000000000a2bb11: jne 0xa2c45f <spl_array_get_dimension_ptr+2735>
   0x0000000000a2bb17: mov r10,QWORD PTR [r13+0x20]
   0x0000000000a2bb1b: test r10,r10
   0x0000000000a2bb1e: je 0xa2c1a5 <spl_array_get_dimension_ptr+2037>
Stack Head (13 entries):
   spl_array_get_hash_table_ @ 0x0000000000a2bb09: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_array_get_hash_table  @ 0x0000000000a2bb09: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_array_get_dimension_p @ 0x0000000000a2bb09: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   spl_array_read_dimension_ @ 0x0000000000a2c773: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_fetch_dimension_addr @ 0x000000000043c304: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_fetch_dimension_addr @ 0x000000000043c304: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_FETCH_DIM_R_SPEC_CV_ @ 0x0000000000f5ba27: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute              @ 0x0000000001002c83: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_execute_scripts      @ 0x0000000000d62e54: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   php_execute_script        @ 0x0000000000c14490: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   do_cli                    @ 0x00000000010080a3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   main                      @ 0x0000000000446826: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0xffffffff00000028 rbx=0x00007ffff3483220 rcx=0x0000000000000007 rdx=0x0000000000000000
rsi=0x00007ffff3483220 rdi=0x00007ffff3457258 rbp=0x00007fffffffa9d0 rsp=0x00007fffffffa8d0
 r8=0x00000ffffe68281a  r9=0x1fffffffe0000005 r10=0x00000ffffe690214 r11=0x00007ffff34810a0
r12=0x00007ffff3481080 r13=0xffffffff00000008 r14=0x00000ffffffff520 r15=0x000010007fff7520
rip=0x0000000000a2bb09 efl=0x0000000000010a06  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Access violation
   Short description: AccessViolation (21/22)
   Explanation: The target crashed due to an access violation but there is not enough additional information available to determine exploitability.
---END SUMMARY---
(1 of 5) - Hash: 7f7ed06172e08d033082d37ca70cc5b9.1b7b743a8a8a97765e555e34870700ee
---CRASH SUMMARY---
Filename: /lab/php7/9032523dd71701345d7ba7883ec28bd503750e593a6c01d56ccb7888e3dc7b4c.php
SHA1: 31fd57943ec536511f23608baa3b22b30bc5996f
Classification: EXPLOITABLE
Hash: 7f7ed06172e08d033082d37ca70cc5b9.1b7b743a8a8a97765e555e34870700ee
Command: /home/vagrant/builds/php-7.1.1-asan/bin/php /lab/php7/9032523dd71701345d7ba7883ec28bd503750e593a6c01d56ccb7888e3dc7b4c.php
Faulting Frame:
   zend_lookup_class_ex @ 0x0000000000d2d2b3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Disassembly:
   0x0000000000d2d29f: lea r15,[r14+0x7fff8000]
   0x0000000000d2d2a6: push r12
   0x0000000000d2d2a8: push rbx
   0x0000000000d2d2a9: sub rsp,0x1b8
   0x0000000000d2d2b0: test rsi,rsi
=> 0x0000000000d2d2b3: mov QWORD PTR [rbp-0x198],rdi
   0x0000000000d2d2ba: mov DWORD PTR [rbp-0x1a0],edx
   0x0000000000d2d2c0: mov QWORD PTR [rbp-0x190],0x41b58ab3
   0x0000000000d2d2cb: mov QWORD PTR [rbp-0x188],rax
   0x0000000000d2d2d2: mov DWORD PTR [r14+0x7fff8000],0xf1f1f1f1
Stack Head (1000 entries):
   zend_lookup_class_ex      @ 0x0000000000d2d2b3: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable_check_cl @ 0x0000000000d6384a: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_is_callable_ex       @ 0x0000000000d7cbfa: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_fcall_info_init      @ 0x0000000000d7dc55: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_arg_impl       @ 0x0000000000d7ed18: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_arg            @ 0x0000000000d7ed18: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_va_args        @ 0x0000000000d808f9: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_parse_parameters     @ 0x0000000000d8111e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_forward_static_call   @ 0x0000000000ac2678: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zif_forward_static_call   @ 0x0000000000ac277e: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   ZEND_DO_ICALL_SPEC_RETVAL @ 0x0000000000ec367b: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   execute_ex                @ 0x0000000000e750eb: in /home/vagrant/builds/php-7.1.1-asan/bin/php
   zend_call_function        @ 0x0000000000d2bfdf: in /home/vagrant/builds/php-7.1.1-asan/bin/php
Registers:
rax=0x0000000001683350 rbx=0x00007fffff7ff210 rcx=0x00007fffff7ff0c8 rdx=0x0000000000000001
rsi=0x0000000000000000 rdi=0x00007ffff3463480 rbp=0x00007fffff7ff0a0 rsp=0x00007fffff7feec0
 r8=0x00000fffffeffe18  r9=0x0000000000000000 r10=0x000000000168d4a0 r11=0x0000000000000061
r12=0x0000000000000001 r13=0x0000000000000000 r14=0x00000fffffeffde2 r15=0x000010007fef7de2
rip=0x0000000000d2d2b3 efl=0x0000000000010246  cs=0x0000000000000033  ss=0x000000000000002b
 ds=0x0000000000000000  es=0x0000000000000000  fs=0x0000000000000000  gs=0x0000000000000000
Extra Data:
   Description: Possible stack corruption
   Short description: PossibleStackCorruption (7/22)
   Explanation: GDB generated an error while unwinding the stack and/or the stack contained return addresses that were not mapped in the inferior's process address space and/or the stack pointer is pointing to a location outside the default stack region. These conditions likely indicate stack corruption, which is generally considered exploitable.
---END SUMMARY---
```
