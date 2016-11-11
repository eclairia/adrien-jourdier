<!DOCTYPE html>
<html>

<head>

	<title>Blog</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style3.css" />

</head>

<body class="bodymove">

<section>

	<h1 id="h1blog">Blog in PHP</h1>
	<h3 id="h3blog"><a href="../Langues/anglais.php">Return on the homepage</a></h3>

	<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=User_292_portfolio;charset=utf8', 'User_292_root', 'arrokqbk');

		$reponse = $bdd->query('SELECT * FROM blog ORDER BY id DESC');


				while($donnees = $reponse->fetch())
				{
					echo "<div class='divblog'>";

					echo "<p>" . htmlspecialchars($donnees['date']) . "</p>";

					echo "<p>" . htmlspecialchars($donnees['prenom']) . "</p>";

					echo "<p>" . htmlspecialchars($donnees['nom']) . "</p>";


					echo "<p class='pcommentaires'>" . htmlspecialchars($donnees['commentaires']) . "</p>";

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

