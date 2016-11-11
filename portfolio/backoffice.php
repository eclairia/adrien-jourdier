<?php

session_start();
 if (isset($_SESSION["prenom"]) && $_SESSION["prenom"] == "adrien") {
 	header('Location: backoffice2.php');
 	exit;
 }

?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8" />
	<title>Backoffice</title>
	<link rel="stylesheet" type="text/css" href="backoffice.css" />

</head>

<body>

	<div>

		<form method="POST" action="traitement_backoffice.php">

			<label>Prénom: </label><input type="text" name="prenombo" id="prenombo" required />

			<label>Mot de passe: </label><input type="password" name="mdpbo" id="mdpbo" required />

			<input type="submit" name="submit" id="submit" />

		</form>

	</div>

</body>

</html>