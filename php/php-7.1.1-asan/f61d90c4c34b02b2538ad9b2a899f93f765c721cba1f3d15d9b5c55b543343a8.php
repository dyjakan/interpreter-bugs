<?php

function gen() {
gen()->valid();
	$bar = ["some complex var"];
	${"f"."oo"} = "force symtable usage";
	var_dump($bar);
	yield;
}

gen()->valid();

?>
