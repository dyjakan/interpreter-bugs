<?php
class testme {
	function __clone() {
		echo "clonned\n";
clone new testme();
	}
}
clone new testme();
echo "NO LEAK\n";
?>
