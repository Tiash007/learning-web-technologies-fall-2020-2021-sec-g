

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form methods="post">
	<fieldset>
<label for="Blood Group">Blood Group</label>            
	<select  name="groups">
		
		<option value="A+">A+</option>
		<option value="A-">A-</option>
		<option value="B+">B+</option>
		<option value="B-">B-</option>
		<option value="AB+">AB+</option>
		<option value="AB-">AB-</option>
		<option value="O+">O+</option>
		<option value="O-">O-</option>
	</select><br>
	  <input type="submit" name="submit" value="submit">
	 </fieldset>
</form>    
</body>
</html>


<?php
if(isset($_POST['submit'])){
	$groups= $_POST['groups'];
	foreach ($groups as $select) {
		echo "you have selected " . $select;
	}
	
}
?>