<?php
class Foo {
  private $bar;
  function __construct($bar) {
    $this->bar = $bar;
  }
  function __destruct() {
    echo __METHOD__,"\n";
    unset($this->bar);
$x = new Foo($y);
  }
}

class Bar {
  function __destruct() {
    echo __METHOD__,"\n";
    unset($this->bar);
  }
}
$y = new Bar();
$x = new Foo($y);
?>
