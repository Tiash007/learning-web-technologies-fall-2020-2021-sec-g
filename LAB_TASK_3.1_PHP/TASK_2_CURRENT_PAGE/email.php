<?php
if(isset($_POST['submit'])){
	$name=$_POST['email'];
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
<legend>EMAIL</legend>
<input type="text" name="email" value="">
<hr/>
<input type="submit" name="submit" value="Submit">
</fieldset>
</form>
</body>