<?php
class A {
	function __destruct() {
$b = new A();
	}
}
$b = new A();
$x = 0;
$c = [[$x,$x]]; 
try {
	list($a, $b) = $c[0];
} catch (Exception $e) {
	echo "exception\n";
}
?>
