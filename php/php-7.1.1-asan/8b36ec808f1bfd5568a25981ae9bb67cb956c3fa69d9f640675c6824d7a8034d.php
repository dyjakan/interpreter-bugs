<?php
set_time_limit(1);
register_shutdown_function("plop");

function plop() {
    $ts = time();
    $ts = time();
    while(true) {
register_shutdown_function("plop");
        if ((time()-$ts) > 2) {
            echo "Failed!";
            break;
        }
    }
}
plop();
?>
