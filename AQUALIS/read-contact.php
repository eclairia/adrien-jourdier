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
		<title>Aqualis - Messages reçus</title>
		<meta charset="UTF-8">
		<meta name="description" content="Aqualis est une entreprise privée française, spécialisée dans la vente d’eau minérale, de boissons gazeuses, ainsi que de boissons énergisantes.">
		<meta name="theme-color" content="#48749C">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./read-contact.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="icon" type="image/png" href="./images/favicon.ico">
	</head>
	<body>
		<div class="container">
				
			<?php include("header.php"); ?>
			
			<h1>Messages reçus</h1>
			
			<?php
				include("mysql_inc.php");
				
				$query = 	"SELECT *
							FROM projet1a_contacts
							ORDER BY projet1a_contacts.contact_id DESC";
				$q = mysql_query($query);
				
				if ($q)
				{
					while ($row = mysql_fetch_object($q))
					{
						echo '<div class="messages"><p class="noms">';
						echo $row->contact_firstname;
						echo '&nbsp';
						echo $row->contact_lastname;
						echo '</p>';
						echo '<p class="societe">Société : ' . $row->contact_company . '</p>';
						echo '<p class="ville">Ville : ' . $row->contact_city . '</p>';
						echo '<p class="contenu">' . $row->contact_message . '</p>';
						echo '<div class="auteur">';
						echo '<p>' . $row->contact_phone . '</p>';
						echo '<p><a target="_blank" href="mailto:' . $row->contact_mail . '">' . $row->contact_mail . '</a></p>';
						echo '</div>';
						echo '<div class="del">';
						echo '<p class="del"><a href="';
						echo 'del2.php?id=' . $row->contact_id . '" onclick="return confirm('."'Attention : l\'article sera définitivement supprimé !'".')">Supprimer</a></p>';
						echo '</div>';
						echo '</div>';
					}
				}

				else 
				{	
					die('Erreur mysql_query : ' . mysql_error());
				}
			?>
			
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