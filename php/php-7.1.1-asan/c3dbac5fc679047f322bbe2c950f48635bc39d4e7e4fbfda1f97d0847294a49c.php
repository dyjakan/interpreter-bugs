<?php

class A implements IteratorAggregate {
  function getIterator() {
    return new B;
  }
}
class B implements IteratorAggregate {
  function getIterator() {
    return new C;
  }
}
class C implements IteratorAggregate {
  function getIterator() {
    return new D;
  }
}
class D implements IteratorAggregate {
  function getIterator() {
    return new B;
  }
}

foreach (new IteratorIterator(new A) as $v) {
  var_dump($v);
}
