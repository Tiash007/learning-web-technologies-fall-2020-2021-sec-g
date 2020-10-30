<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$firstcharacter=$name[0];
	if(is_null($name)==false && strlen($name)>=2 && is_numeric($firstcharacter)==false )
	{
		$name=$_POST['name'];
		echo $name;
		echo $firstcharacter;
	}
	else
		echo "this is not valid!";
}
?>