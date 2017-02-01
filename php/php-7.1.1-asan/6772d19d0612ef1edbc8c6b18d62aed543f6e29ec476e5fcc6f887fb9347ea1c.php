<?php

function bt() {
  global $g;
test(array(new X));
  $g = debug_backtrace();
}


class X {
  function __destruct() { bt(); }
}

function test($x) {}

test(array(new X));
var_dump($g[0]['args']);
