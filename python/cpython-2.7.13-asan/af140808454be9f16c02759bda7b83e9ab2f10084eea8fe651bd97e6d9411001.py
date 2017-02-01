"""
The compiler (>= 2.5) recurses happily.
"""

compile('()'*10**5, '?', 'exec')
