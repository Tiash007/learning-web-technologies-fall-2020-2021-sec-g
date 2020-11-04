<?php
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