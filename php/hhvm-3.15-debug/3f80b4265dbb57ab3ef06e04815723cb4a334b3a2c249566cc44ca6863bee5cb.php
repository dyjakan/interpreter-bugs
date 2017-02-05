$data = array('01' => 'Zero', '+1' => 'Plus sign', ' 1' => 'Space');
<?php

var_dump(wddx_deserialize(wddx_serialize_vars('data')));
?>
