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
		<title>Aqualis - Gérer les articles</title>
		<meta charset="UTF-8">
		<meta name="description" content="Aqualis est une entreprise privée française, spécialisée dans la vente d’eau minérale, de boissons gazeuses, ainsi que de boissons énergisantes.">
		<meta name="theme-color" content="#48749C">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./del-article.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="icon" type="image/png" href="./images/favicon.ico">
	</head>
	<body>
		<div class="container">
				
			<?php include("header.php"); ?>

			<div id="lesarticles">
				<h1>Gérer les articles :</h1>
				
				<?php
					include("mysql_inc.php");
					
					$query = 	"SELECT *
								FROM projet1a_posts
								ORDER BY projet1a_posts.post_date DESC";
					$q = mysql_query($query);
					
					if ($q)
					{
						echo '<div id="gene">';

						while ($row = mysql_fetch_object($q))
						{
							echo '<div><p class="titre-article">';
							echo $row->post_title;
							echo '</p>';
							echo '<p class="lien-article"><a href="';
							echo 'article.php?id=' . $row->post_id . '';
							echo '">Lire la suite</a></p>';
							echo '<p class="lien-del"><a href="';
							echo 'mod-article.php?id=' . $row->post_id . '">Modifier</a></p>';
							echo '<p class="lien-del"><a id="verif" onclick="return confirm('."'Attention : l\'article sera définitivement supprimé !'".')" href="';
							echo 'del.php?id=' . $row->post_id . '">Supprimer</a></p></div></br>';
						}
						
						echo '</div>';
					}

					else 
					{	
						die('Erreur mysql_query : ' . mysql_error());
					}
				?>
				
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