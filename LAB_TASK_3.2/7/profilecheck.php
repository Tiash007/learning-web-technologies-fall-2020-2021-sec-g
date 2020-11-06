<?php
if(isset($_POST['submit'])){
	if(empty($_POST['myfile']))
	{
		echo "not valid";
	}
	
	else
	{
		echo "submitted";
	}

	
}

?>