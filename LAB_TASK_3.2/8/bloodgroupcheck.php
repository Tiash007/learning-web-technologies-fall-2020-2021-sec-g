<?php
if(isset($_POST['submit'])){
	$groups[]=$_POST['groups'];
	foreach ($groups as $select) {
		if($select==null)
			{ 
				echo "not valid";
			}
			else{
	
		echo "you have selected " . $select;
	}
	}
	
}
?>