<?php
if (isset($_POST['submit'])) {
	# code...


	$myfile = fopen('users.txt', 'r');
	$data = fread($myfile, filesize('test.txt'));
	$data = fgets($myfile);
	echo $data;

	}


?>