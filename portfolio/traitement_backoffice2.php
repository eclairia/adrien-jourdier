<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=User_292_portfolio;charset=utf8', 'User_292_root', 'arrokqbk');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

		$requete=$bdd->prepare(" DELETE FROM blog WHERE id = ?");
		$requete->execute(array($_GET['id']));

header("Location: backoffice2.php");

?>


