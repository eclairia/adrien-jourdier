<?php

	function counttable($table)
	{
		global $pdo;

		try
		{
			$query = $pdo->query("SELECT COUNT(*) AS nombre FROM " . $table);

			$query->execute();
			
			$result = $query->fetch();

			//On retourne tous les articles sélectionnés
			return $result['nombre'];

			$query->closeCursor();			
		}

		catch(Exception $e)
		{
			die('Erreur SQL: ' . $e->getMessage());
		}
	}	