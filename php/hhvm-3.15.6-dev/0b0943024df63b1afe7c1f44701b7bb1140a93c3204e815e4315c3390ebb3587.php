<?php
echo "Test\n";

$xmlreader = new XMLReader();
$xmlreader->xml("<a><b/></a>");
$xmlreader2 = clone $xmlreader;

$xmlreader->next();
$xmlreader2->next();
?>
Done
