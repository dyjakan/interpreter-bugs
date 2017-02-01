<?php

echo "===Current===\n";

$it = new NoRewindIterator(new ArrayIterator(array(0 => 'A', 1 => 'B', 2 => 'C')));

foreach($it as $key=>$val)
echo "===Foreach===\n";
echo $it->key() . '=>' . $it->current() . "\n";
{
$it->next();


echo "===Next===\n";


	echo "$key=>$val\n";
}

?>
