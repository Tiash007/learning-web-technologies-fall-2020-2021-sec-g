<?php
if (isset($_POST['submit'])) {
	# code...

$myfile = fopen('users.txt', 'r');
	$data = fread($myfile, filesize('users.txt'));
	$data = fgets($myfile);
	$pieces = explode("|", $data);
	foreach ($pieces as $piece) {
		echo ($piece);
	}

}
?>