<?php

	if($_POST['langues'] == "FR")
	{
		header("Location: index.php");
	}

	else if($_POST['langues'] == "EN")
	{
		header("Location: www.jourdier.prp/EN/en.php");	
	}
		
?>