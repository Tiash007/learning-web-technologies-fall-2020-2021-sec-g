<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	echo $name;
	
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Name Inputs</title>
</head>
<body>
<form method="post" >
<fieldset>
<legend>NAME</legend>
<input type="text" name="name" value="">
<hr/>
<input type="submit" name="submit" value="Submit">
</fieldset>
</form>
</body>