<?php

    include("mysql_inc.php");

	$query = "delete from projet1a_contacts
			  where `projet1a_contacts`.`contact_id` = " . $_GET['id'] . " ";

	$q = mysql_query($query);

	if (!$q)
	{
		header("Location:read-contact.php?notif=nok");
		exit;
	}
	
	else
	{
		header("Location:read-contact.php?notif=ok");
		exit;
	}