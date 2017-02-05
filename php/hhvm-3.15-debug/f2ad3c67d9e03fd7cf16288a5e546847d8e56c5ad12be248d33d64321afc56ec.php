<?php
class TestClass
{
    private $test;

    public function method()
    {
        return "Hello, world!\n";
    }
}

$callback = 'TestClass::method';
echo $callback();
?>
