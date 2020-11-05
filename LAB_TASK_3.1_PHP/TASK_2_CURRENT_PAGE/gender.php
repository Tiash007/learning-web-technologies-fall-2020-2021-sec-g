<?php
if(isset($_POST['submit'])){
	$gender=$_POST['gender'];
	echo $gender;
	
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Gender</h2>

<form method="post" action="gender.php">
<fieldset>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  <br><input type="submit"  name="submit" value="Submit">
</fieldset>
</form> 

</body>
</html>