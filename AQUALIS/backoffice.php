<?php
	session_start();
	
	if (isset($_SESSION['connect']))
	{
		$connect=$_SESSION['connect'];
	}
	
	else
	{
		$connect=0;
	}

	if ($connect == "1")
	{
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Aqualis - Backoffice</title>
		<meta charset="UTF-8">
		<meta name="description" content="Aqualis est une entreprise privée française, spécialisée dans la vente d’eau minérale, de boissons gazeuses, ainsi que de boissons énergisantes.">
		<meta name="theme-color" content="#48749C">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./backoffice.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="icon" type="image/png" href="./images/favicon.ico">
	</head>
	<body>
		<div class="container">
				
			<?php include("header.php"); ?>
			
			<h1>Backoffice</h1>
			<div id="gestion">
				<p class="titre">Gérer les articles :</p>
				<p class="lien"><a href="add-article.php">Ajouter un article</a></p>
				<p class="lien"><a href="del-article.php">Modifier un article</a></p>
				<p class="lien"><a href="del-article.php">Supprimer un article</a></p>
			</div>
			<div id="gestion">
				<p class="titre">Gérer les contacts :</p>
				<p class="lien"><a href="read-contact.php">Afficher les messages reçus</a></p>
			</div>
			<form class="logout" method="post" action="logout.php">
				<input class="logout" type="submit" value="Se déconnecter">
			</form>

			<?php include("footer.php"); ?>

		</div>
		
		<script src="menu.js"></script>
	</body>
</html>

<?php
	}
	
	else
	{
		header("Location:backoffice-connexion.php");
		exit;
	}
?>