"""
The gc module can still invoke arbitrary Python code and crash.
This is an attack against _PyInstance_Lookup(), which is documented
as follows:

    The point of this routine is that it never call arbitrary Python code.
The following code causes mutation of the object graph during
the call to has_finalizer() in gcmodule.c, and that might
segfault.
"""

import gc


class A:
    def __hash__(self):
        return hash("__del__")
    def __eq__(self, other):
        del self.other
        return False

a = A()
b = A()

a.__dict__[b] = 'A'

a.other = b
b.other = a

gc.collect()
del a, b

gc.collect()
