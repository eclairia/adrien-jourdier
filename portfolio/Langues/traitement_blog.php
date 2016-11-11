<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=User_292_portfolio;charset=utf8', 'User_292_root', 'arrokqbk');

		$requete=$bdd->prepare('INSERT INTO blog(nom, prenom, commentaires) VALUES(?, ?, ?)');
		$requete->execute(array($_POST['nom'], $_POST['prenom'], $_POST['commentaires']));
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

header("Location: blog.php");

?>


