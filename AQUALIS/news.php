<?php
    include("mysql_inc.php");
	
	$email = $_POST["email"];
	
    if (isset($_POST["email"]))
	{
        $query = "insert into projet1a_newsletter
                (newsletter_email)
                values
                ('" . $email . "')";
        
        $q = mysql_query($query);

        if (!$q)
		{
            header("Location:index.php?notif=nok");
            exit;
        }
		
        else
		{
            header("Location:index.php?notif=ok");
            exit;
        }
    }