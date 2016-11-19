<?php
	
	protection("user", "users", "login", USER_LAMBDA);

	if(!isset($_POST['post_title']))
	{
		//Appel du modèle pour obtenir la liste des catégories
		include_once("app/model/categories/lire_liste_categories.php");
		$categories = lire_liste_categories();

		include_once("app/view/article/new.php");
	}

	else
	{
		//Appel de modele pour insérer un article
		include_once("app/model/article/inserer_article.php");
		$retour = inserer_article($_POST, $_SESSION["user"]["ID"]);

		if(!$retour)
		{
			//header("Location:?module=article&action=new&notif=nok");
			location("action", "new", "notif=nok")
		}

		else
		{
			//header("Location:?module=article&action=detail&id=". $retour . "&notif=ok");
			location("action", "new", "id=" . $retour . "&notif=ok");
		}
	}
