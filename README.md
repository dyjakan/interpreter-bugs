# interpreter-bugs

Fuzzing results for various interpreters.

# methodology

My current approach is to run [honggfuzz](https://github.com/google/honggfuzz) with [radamsa](https://github.com/aoh/radamsa) on an existing template corpus. I usually go for 10M+ iterations (not much but servers cost money, duh).

Initial triage is done with [exploitable](https://github.com/jfoote/exploitable) and [crashwalk](https://github.com/bnagy/crashwalk).

Having all that in mind I doubt that there are any _gems_ here (i.e. not only crashing but also reachable via user input).

Be my guest with regard to further analysis, IBB can't wait.

# links

* [Similar repository for PHP](https://github.com/hannob/php-crashers)
* [Similar repository for Python](http://svn.python.org/view/python/trunk/Lib/test/crashers/)
* [CrashingPython in the Python wiki](https://wiki.python.org/moin/CrashingPython)
