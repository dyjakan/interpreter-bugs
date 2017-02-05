<?php


$f = datefmt_create("en_us", -10000000, 1); 
var_dump($f, intl_get_error_message());

$f = datefmt_create("en_us", 1, -10000000); 
var_dump($f, intl_get_error_message());

?>
