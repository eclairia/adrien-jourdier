<?php

	if ($_POST["prenombo"] == "adrien" && $_POST["mdpbo"] == "arrokqbk")
	{
		session_start();

		$_SESSION["prenom"] = $_POST["prenombo"];
		header("Location: backoffice2.php");
		exit;
	}

	else
	{
		echo "<p> Tu n'as rien à faire içi, retourne d'où tu viens </p>";
	}

?>
