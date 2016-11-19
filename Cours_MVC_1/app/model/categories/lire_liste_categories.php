<?php

	function lire_liste_categories()
	{
		global $pdo;

		try
		{
			//On envoie la requête
			$query = $pdo->query('SELECT * FROM blog_categories');

			//On récupère tous les résultats
			$categories = $query->fetchAll();

			//On supprime le curseur
			$query->closeCursor();

			//On retourne toutes les categories selectionnées
			return $categories;
		}

		catch(Exception $e)
		{
			die('Erreur SQL: ' . $e->getMessage());
		}
	}