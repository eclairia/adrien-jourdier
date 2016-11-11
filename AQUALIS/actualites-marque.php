<!DOCTYPE html>
<html>
	<head>
		<title>Aqualis - Actualités Marque</title>
		<meta charset="UTF-8">
		<meta name="description" content="Voici les dernières actualités d'Aqualis, votre fournisseur de bien-être.">
		<meta name="theme-color" content="#48749C">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./actualites.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="icon" type="image/png" href="./images/favicon.ico">
	</head>
	<body>
		<div class="container">
		
			<?php include("header.php"); ?>

			<div id="contenu">
				<div class="titre groupe">
					<h1>Actualités de la marque</h1>
				</div>
				
				<?php
				
					include("mysql_inc.php");
					
					setlocale(LC_TIME, "fr_FR");
					
					$query = 	"SELECT *
								FROM projet1a_posts, projet1a_users, projet1a_categories, projet1a_pictures
								WHERE (post_author = user_id) AND (post_category = cat_id) AND (post_pic = pict_id) AND `projet1a_posts`.`post_category` = 3
								ORDER BY projet1a_posts.post_date DESC";
					$q = mysql_query($query);
					
					if ($q)
					{
						echo '<div class="menucategories">';
						echo '<p class="categories"><a href="actualites.php">Toutes</a></p>';
						echo '<p class="categories"><a href="actualites-sport.php">Sport</a></p>';
						echo '<p class="categories"><a href="actualites-environnement.php">Environnement</a></p>';
						echo '<p class="categories"><a href="actualites-marque.php">Marque</a></p>';
						echo '</div>';
							
						echo '<div class="ligne1 groupe">';

						while ($row = mysql_fetch_object($q))
						{
							echo '<div class="articles"><img src="';
							echo $row->pict_url;
							echo '" class="image-1" alt="';
							echo $row->pict_descr;
							echo '"><div class="texte"><p class="titre-article">';
							echo $row->post_title;
							echo '</p>';
							echo '<p class="date">';
							echo strftime("Le %A %d %B %Y", $row->post_date);
							echo '</p>';
							echo '<p class="texte-article">';
							$max_caracteres=215;
							$description = $row->post_content;
							
							if (strlen($description)>$max_caracteres)
							{    
								$description = substr($description, 0, $max_caracteres);
								$position_espace = strrpos($description, " ");
								$description = substr($description, 0, $position_espace);
								$description = $description."...";
							}
							
							echo "$description";
							echo '</p>';
							echo '<div class="footer-article group"><p class="auteur">';
							echo $row->display_name;
							echo '</p>';
							echo '<p class="lien-article"><a href="';
							echo 'article.php?id=' . $row->post_id . '';
							echo '">Lire la suite</a></p></div></div></div>';
						}
						echo '</div>';
					}

					else 
					{	
						die('Erreur mysql_query : ' . mysql_error());
					}
					
				?>
				
			</div>
   
			<?php include("footer.php"); ?>
			
		</div>
	<script src="menu.js"></script>
	</body>
</html>