<?php
register_tick_function(function () { echo "tick\n"; });
function ʳfoo() { }

declare(ticks=1) {

$statement;
foo();

}
?>
