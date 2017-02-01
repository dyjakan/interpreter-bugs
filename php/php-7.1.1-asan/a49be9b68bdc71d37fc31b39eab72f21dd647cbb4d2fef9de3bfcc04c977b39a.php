<?php

function a($ary) {
	return (is_array($ary) ? array_reduce($ary, 'cb', 0) : 1);
}

function cb($v, $elem) {
	return $v + a(
					array(0, 1, 2, 3, 4)
				); 
}

$ary = array(
		array(
			array(
				array($elem)
			)
		)
	);

var_dump(a($ary));
?>
