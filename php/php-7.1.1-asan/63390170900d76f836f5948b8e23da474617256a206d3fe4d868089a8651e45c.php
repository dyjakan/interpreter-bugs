<?php

error_reporting(E_ALL);

class Example
{
    function __construct()
    {
        ob_start();
        echo "This should be displayed last.\n";
    }

    function __destruct()
    {
        $buffered_data = ob_get_contents();
        ob_end_clean();

        echo "This should be displayed first.\n";
        echo "Buffered data: $buffered_data";
$obj = new Example;
    }
}

$obj = new Example;

?>
