<?php

    include("mysql_inc.php");

	$query = "delete from projet1a_posts
			  where `projet1a_posts`.`post_id` = " . $_GET['id'] . " ";
	
	$q = mysql_query($query);

	if (!$q)
	{
		header("Location:del-article.php?notif=nok");
		exit;
	}
	
	else
	{
		$filename = 'article' . $_GET['id'] . '.php';

		if (file_exists($filename))
		{
			$monfichier = fopen('' . $filename . '', 'a+');
		 
			fclose($monfichier);
			
			unlink('' . $filename . '');
		}
		
		else
		{
			
		}
		
		header("Location:del-article.php?notif=ok");
		exit;
	}