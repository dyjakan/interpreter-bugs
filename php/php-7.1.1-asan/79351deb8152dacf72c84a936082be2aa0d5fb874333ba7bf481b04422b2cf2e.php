<?php
function callback($var) {
var_dump(filter_var($var, FILTER_CALLBACK, array('options'=>'callback')));
}
$var = "test";
var_dump(filter_var($var, FILTER_CALLBACK, array('options'=>'callback')));
?>
