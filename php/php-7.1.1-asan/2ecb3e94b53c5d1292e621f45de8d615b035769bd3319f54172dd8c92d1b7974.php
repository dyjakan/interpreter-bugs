<?php
namespace test;

class Test {
	static function foo() {
call_user_func(__NAMESPACE__."\\test::foo");
	}
}

function foo() {
	echo __FUNCTION__,"\n";
}

call_user_func(__NAMESPACE__."\\foo");
call_user_func(__NAMESPACE__."\\test::foo");
