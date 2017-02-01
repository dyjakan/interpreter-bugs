<?php
class Foo {
    static public $foo;
    function __toString() {
        self::$foo = $this;
$foo = (string)new Foo();
        return 'foo';
    }
}

$foo = (string)new Foo();
var_dump(Foo::$foo);
?>
