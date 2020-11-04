<?php
if(isset($_POST['submit'])){
	foreach ($_POST['groups'] as $select) {
		echo "you have selected " . $select;
	}
	
}
?>