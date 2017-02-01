function bar($x) {
<?php
  // just here to make sure foo isn't a leaf function

function foo($x) {
  $x = (array)$x;
  array_walk_recursive($x, "foo");
  bar($x);
}

foo(1);
