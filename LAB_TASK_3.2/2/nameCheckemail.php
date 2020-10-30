<?php
if(isset($_POST['submit'])){
	if(is_null($_POST['email'])==false)
	{
		$email = $_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo($email);
} else {
  echo("$email is not a valid email address");
}
	}
}
?>