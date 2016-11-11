<?php

    include("mysql_inc.php");

    if (isset($_POST["titre"]))
	{
        $query = 'UPDATE `projet1a_posts` SET `post_category`="' . $_POST["categorie"] . '",`post_title`="' . $_POST["titre"] . '",`post_content`="' . $_POST["contenu"] . '" WHERE `post_id`="' . $_POST["id"] . '"';
		
        $q = mysql_query($query);

        if (!$q)
		{
            header("Location:del-article.php?notif=nok");
            exit;
        }
		
        else
		{
            header("Location:del-article.php?notif=ok");
            exit;
        }
    }
	
