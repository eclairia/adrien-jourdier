<?php

    include("mysql_inc.php");

    if (isset($_POST["auteur"]))
	{
        $query = "insert into projet1a_posts
                (post_date, post_category, post_author, post_title, post_content)
                values
                ('" . time() . "','" . $_POST["categorie"] . "','" .$_POST["auteur"] . "','" . $_POST["titre"] . "','" . addslashes($_POST["contenu"]) . "')";
        
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
	
