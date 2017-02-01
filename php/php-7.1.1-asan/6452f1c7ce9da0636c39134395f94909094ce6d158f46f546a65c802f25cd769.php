<?php

function bar($x) {
  // since FCallBuiltin doesn't count as a php-call.
}

function foo($x) {
  $x = (array)$x;
  array_walk_recursive($x, "foo");
  bar($x);
}

foo(1);
