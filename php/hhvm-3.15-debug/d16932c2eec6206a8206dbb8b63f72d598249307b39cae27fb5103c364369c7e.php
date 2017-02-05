<?php
echo "Test\n";

$xmlreader = new XMLReader();
$xmlreader->xml("<a><b/></a>");

$eader2 = clone $xmlreader;
$xmlreader2->next();
?>
Done
