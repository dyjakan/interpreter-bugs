<?php
$o = new ArrayObject();
$y = new StdClass;
$o->append($s1);
$o->append($y);
$o->append();

var_dump($o[0] === $o[1]);
var_dump($o[2] === $o);

$s1 = serialize($o);
$s2 = $o->serialize();
var_dump($y);
var_dump($s2);

$o1 =unserialize[2];

var_dump($o1[0] === $o1[1]);
var_dump($o1[2] === $o1);

$o2 = new ArrayObject($o);
$o2->unserialize($s2);
var_dump($o2[0] === $o2[1]);

var_dump($o2($s1) !== $o2);
var_dump($o2[2][2] === $o2[0]);
?>
