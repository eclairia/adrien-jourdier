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
		<title>Aqualis - Ajouter un article</title>
		<meta charset="UTF-8">
		<meta name="description" content="Aqualis est une entreprise privée française, spécialisée dans la vente d’eau minérale, de boissons gazeuses, ainsi que de boissons énergisantes.">
		<meta name="theme-color" content="#48749C">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./add-article.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="icon" type="image/png" href="./images/favicon.ico">
	</head>
	<body>
		<div class="container">
				
			<?php include("header.php"); ?>

			<div id="formulaire">
				<div id="publier">
					<h1>Publier un article :</h1>
					<form id="formu" name="formu" action="./add.php" method="POST">
						
						<div>Catégorie : </div><div>
													<input type="text" list="categorie" name="categorie" size="30" />
													<datalist id="categorie">
														<option value="1">Sport</option>
														<option value="2">Environnement</option>
														<option value="3">Marque</option>
													</datalist>
												</div>
						<div>Auteur : </div><div>
												<input type="text" list="auteur" name="auteur" size="30" />
												<datalist id="auteur">
													<option value="1">N.Gerbault</option>
													<option value="2">A.Juillet</option>
													<option value="3">P.Ray</option>
													<option value="4">A.Jourdier</option>
													<option value="5">A.Bonnaud</option>
												</datalist>
											</div>
						<div>Titre : </div><div><input type="text" name="titre" size="30" /></div>
						<div>Contenu : </div><div><textarea name="contenu" rows="7" cols="60"></textarea></div>
						<div><input type="submit" value="Publier" /></div>
					</form>
				</div>
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