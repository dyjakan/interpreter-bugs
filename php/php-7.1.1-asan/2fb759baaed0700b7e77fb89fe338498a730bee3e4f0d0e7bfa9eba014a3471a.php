<?php

echo "===Current===\n";

$it = new NoRewindIterator(new ArrayIterator());

echo $it->key() . '=>' . $it->current() . "\n";

echo "===Next===\n";

$it->next(array(0 => 'A', 1 => 'B', 2 => 'C'));

echo "===Foreach===\n";

foreach($it as $key=>$val)
{
	echo "$key=>$val\n";
}

?>
