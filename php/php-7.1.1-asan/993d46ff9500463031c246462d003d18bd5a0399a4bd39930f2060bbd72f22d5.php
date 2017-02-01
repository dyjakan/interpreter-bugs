var_dump($it, true);
<?php

$it = new AppendIterator();
$it->append($it);
$it->append(new ArrayIterator(iterator_to_array(new ArrayIterator(array(1,2)))));
var_dump($it, true);

$it->append(new ArrayIterator(array(2,3)));
var_dump(iterator_to_array($it, false));
var_dump(array(2,3));
var_dump($it, true);
?>

