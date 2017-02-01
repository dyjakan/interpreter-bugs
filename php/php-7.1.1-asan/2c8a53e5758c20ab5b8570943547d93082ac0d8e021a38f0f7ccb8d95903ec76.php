<?php 

ini_set('unserialize_callback_func','check');

function check($name) {
	@unserialize('O:3:"FOO":0:{}');
	throw new exception;
}

try {

	@unserialize('O:3:"FOO":0:{}');
}
catch (Exception $e) {
	/* ignore */
}

	@unserialize('O:3:"FOO":0:{}');
?>
