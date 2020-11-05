<?php

if ( null !==$_POST['submit'])
{
	$dd=$_POST["dd"];
	$mm=$_POST["mm"];
	$yyyy=$_POST["yyyy"];
	echo $dd . "/" . $mm . "/" . $yyyy ;
	
}
?>

<!DOCTYPE html>
<html>
<body>


<form method="POST" action="dob.php">
  <fieldset>
  <legend>Date Of Birth</legend>
  
  <input type="text"  name="dd" value="">/ <input type="text" name="mm" value=""> /  <input type="text"  name="yyyy" value="">
  <hr/><input type="submit" name="submit" value="Submit">
  </fieldset>
</form>

</body>
</html>
