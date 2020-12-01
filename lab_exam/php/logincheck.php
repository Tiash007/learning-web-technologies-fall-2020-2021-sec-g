<?php
if (isset($_POST['submit'])) {
	


	$myfile = fopen('users.txt', 'r');
	$data = fread($myfile, filesize('test.txt'));
	$data = fgets($myfile);
	echo $data;
$words = explode("|", $data);
foreach ($words as $word) {
	echo  $word[0];
	
}
	}


?>