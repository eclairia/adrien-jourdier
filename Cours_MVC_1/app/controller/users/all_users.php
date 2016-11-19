<?php

	//Appel du modèle pour obtenir le nombre d'utilisateurs
	//include_once('app/model/users/lire_nb_users.php');
	//$nb_users = lire_nb_users();
	//var_dump($nb_users);

	$nb_users = counttable("blog_users");

	//Appel du modèle pour obtenir la liste des utilisateurs
	include_once('app/model/users/lire_users.php');
	$users = lire_users();
	//var_dump($users);

	//Appel de la vue correspondante
	define("APP_LANG", "fr");
	define("PAGE_TITLE", 'Liste des articles du blog');
	include_once('app/view/users/all_users.php');