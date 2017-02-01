<?php

class A
{
	const NAME = 'A';
	public static function test()
	{
		echo self::NAME, "\n";
		forward_static_call(array('A', 'test'));
	}
}

A::test();
echo "-\n";
B::test();
echo "-\n";
B::test2();
echo "-\n";
B::test3();
echo "-\n";
C::test();
echo "-\n";
C::test2();
echo "-\n";
C::test3();

?>
