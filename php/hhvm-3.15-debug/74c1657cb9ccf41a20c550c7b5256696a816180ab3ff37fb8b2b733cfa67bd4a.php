<?php

$server = new SoapServer(NULL, array("uri"=>"test://"));
$server->setClass('hello_world');
$functions = $server->getFunctions();
foreach($functions as $func) {
  echo $func . "\n";
}
?>
