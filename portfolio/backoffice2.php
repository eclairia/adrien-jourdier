<?php

session_start();
if (!isset($_SESSION["prenom"])) {
	header('Location: backoffice.php');
	exit;
}
 
?>

<!DOCTYPE html>
<html>

<head>

	<title>Backoffice 2</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="backoffice2.css" />

</head>

<body>

<?php include("googleanalytics.php"); ?>

<?php

		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=User_292_portfolio;charset=utf8', 'User_292_root', 'arrokqbk');

			$reponse = $bdd->query('SELECT * FROM blog ORDER BY id DESC');

					while($donnees = $reponse->fetch())
					{
						echo "<div class='alldivbo'>";

							echo "<div class='divbo1'>";

							echo "<p>" . htmlspecialchars($donnees['date']) . "</p>";

							echo "<p>" . htmlspecialchars($donnees['prenom']) . "</p>";

							echo "<p>" . htmlspecialchars($donnees['nom']) . "</p>";

							echo "<a href='traitement_backoffice3.php'><img src='../portfolio/cross.png' /></a>";

							echo "<a href='traitement_backoffice2.php?id=".$donnees['id']."'><img src='../portfolio/delete.png' /></a>";

							

						echo "</div>";

							echo "<div class='divbo2'>";

							echo "<p class='pbo'>" . htmlspecialchars($donnees['commentaires']) . "</p>";

							echo "</div>";

					}

					$reponse->closeCursor();

		}

		catch (Exception $e)
		{
	    	    die('Erreur : ' . $e->getMessage());
		}
	

?>

</body>

</html>