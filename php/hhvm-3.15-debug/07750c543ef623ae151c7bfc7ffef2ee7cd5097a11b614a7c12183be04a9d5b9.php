<?php
class TestClass
{
    private $test;

    public function method()
    {
        $this->test = 'test';
        return "Hello,  world!\n";
    }
}

$callback = 'TestClass::method';
echo $callback();
?>
