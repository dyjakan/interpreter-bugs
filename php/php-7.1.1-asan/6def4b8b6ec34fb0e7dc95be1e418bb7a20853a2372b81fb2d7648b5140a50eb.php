<?php

class TestClass
{
	function __toString()
	{
define("Bar",new TestClass);
		return "Foo";
	}
}

define("Bar",new TestClass);
var_dump(Bar);
define("Baz",new stdClass);
var_dump(Baz);

?>
