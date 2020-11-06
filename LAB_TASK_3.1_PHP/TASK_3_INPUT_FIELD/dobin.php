<!DOCTYPE html>
<html>
<body>


<form method="POST" action="dob.php">
  <fieldset>
  <legend>Date Of Birth</legend>
  
  <input type="text"  name="dd" value="<?php

if ( null !==$_POST['submit'])
{
	$dd=$_POST['dd'];?>">/ <input type="text" name="mm" value="<?php

if ( null !==$_POST['submit'])
{
	$dd=$_POST['mm'];?>"> /  <input type="text"  name="yyyy" value="<?php

if ( null !==$_POST['submit'])
{
	$dd=$_POST['yyyy'];?>">
  <hr/><input type="submit" name="submit" value="Submit">
  </fieldset>
</form>

</body>
</html>
