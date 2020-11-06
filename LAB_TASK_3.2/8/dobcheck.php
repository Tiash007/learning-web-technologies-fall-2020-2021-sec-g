<?php

if(!empty($_POST["dd"]) && !empty($_POST["mm"]) && !empty($_POST["yyyy"]))
{
	$dd=$_POST["dd"];
	$mm=$_POST["mm"];
	$yyyy=$_POST["yyyy"];
	echo $dd . "/" . $mm . "/" . $yyyy ;
	
}
else
echo "invalid";
?>