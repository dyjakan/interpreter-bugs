<?php
class Foo {
    static public $foo;
    function __toString() {
$foo = (string)new Foo();
        self::$foo = $this;
        return 'foo';
    }
}

$foo = (string)new Foo();
var_dump(Foo::$foo);
?>
