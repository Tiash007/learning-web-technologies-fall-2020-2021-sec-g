<?php

if(isset($_POST['submit']))
{
	

	if(isset($_POST['ssc']) && isset($_POST['HSC'])&& isset($_POST['BSc']) && isset($_POST['MSc']) )
	{
		echo $_POST['ssc'] .$_POST['HSC']. $_POST['BSc']. $_POST['MSc'];
	}


	elseif(isset($_POST['ssc']) && isset($_POST['HSC'])&& isset($_POST['BSc'])  )
	{
		echo $_POST['ssc'] .$_POST['HSC']. $_POST['BSc'];
	}



	elseif(isset($_POST['ssc']) && isset($_POST['HSC'])&& isset($_POST['MSc'])  )
	{
		echo $_POST['ssc'] .$_POST['HSC']. $_POST['MSc'];
	}


	elseif(isset($_POST['ssc']) && isset($_POST['BSc'])&& isset($_POST['MSc'])  )
	{
		echo $_POST['ssc'] .$_POST['HSC']. $_POST['MSc'];
	}



	elseif ( isset($_POST['HSC'])&& isset($_POST['BSc']) && isset($_POST['MSc']) )
	{
		echo $_POST['HSC']. $_POST['BSc']. $_POST['MSc'];
	}


	elseif (  isset($_POST['ssc']) && isset($_POST['HSC']) )
	{
		echo  $_POST['ssc']. $_POST['HSC'];
	}


elseif (  isset($_POST['ssc']) && isset($_POST['BSc']) )
	{
		echo  $_POST['ssc']. $_POST['BSc'];
	}


elseif (  isset($_POST['ssc']) && isset($_POST['MSc']) )
	{
		echo  $_POST['ssc']. $_POST['MSc'];
	}


	elseif (  isset($_POST['BSc']) && isset($_POST['MSc']) )
	{
		echo  $_POST['BSc']. $_POST['MSc'];
	}



	elseif (  isset($_POST['HSC']) && isset($_POST['BSc']) )
	{
		echo  $_POST['HSC']. $_POST['BSc'];
	}


	elseif (  isset($_POST['HSC']) && isset($_POST['MSc']) )
	{
		echo  $_POST['HSC']. $_POST['MSc'];
	}



	elseif (   isset($_POST['MSc']) )
	{
		echo  $_POST['MSc'];
	}



	elseif (   isset($_POST['ssc']) )
	{
		echo  $_POST['ssc'];
	}



	elseif (   isset($_POST['HSC']) )
	{
		echo  $_POST['HSC'];
	}



	elseif (   isset($_POST['BSc']) )
	{
		echo  $_POST['BSc'];
	}

	
	

}
?>


<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>


<form  method="post" action="degree.php">
	<fieldset>
		<legend>Degree</legend>
  <input type="checkbox" id="ssc" name="ssc" value="ssc">
  <label for="ssc">SSC</label>
  <input type="checkbox" id="HSC" name="HSC" value="HSC">
  <label for="hsc">HSC</label>
  <input type="checkbox" id="BSc" name="BSc" value="BSc">
  <label for="bsc">BSc.</label>
   <input type="checkbox" id="BSc" name="MSc" value="MSc">
  <label for="msc">MSc.</label>
  <input type="submit" name="submit" value="Submit">
</fieldset>
</form> 

</body>
</html>
