<?php

	/*if(isset($_SESSION["user"]))
	{
		header("Location:?module=article&action=admin");
	}*/

	if(!isset($_POST["user_login"]))
	{
		include_once("app/view/users/login.php");
	}

	else
	{
		//var_dump($_POST);

		//Appel du modèle pour chercher un user
		include_once("app/model/users/verif_login.php");
		$retour = verif_login($_POST);

		//var_dump($retour);

		if(!$retour)
		{
			header("Location:?module=users&action=login&notif=nok");
		}

		else
		{
			$_SESSION["user"] = $retour;

			if($retour["ID"] == 1)
			{
				$_SESSION["level"] = USER_ADMIN;
				header("Location:?module=article&action=admin");
			}

			else
			{
				$_SESSION["level"] = USER_LAMBDA;
				header("Location:?");
			}
			
			
			
		}
	}