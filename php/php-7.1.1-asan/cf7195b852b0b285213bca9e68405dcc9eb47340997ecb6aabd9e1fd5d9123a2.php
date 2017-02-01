<?php
Abstract class F {
	private function bar($a = self::cใlass) {}
}

Trait T
{
	private function bar($a = self::class) {}
}


class B {
	use T;
}

echo new \ReflectionMethod('F', 'bar');
echo new \ReflectionMethod('T', 'bar');
echo new \ReflectionMethod('B', 'bar');
?>
