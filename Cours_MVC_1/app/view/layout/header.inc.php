<!DOCTYPE html>
<html lang="<?= PAGE_LANG ?>">
<head>
	<meta charset="<?= PAGE_CHARSET ?>">
	<title><?= PAGE_TITLE ?></title>
	<link rel='stylesheet' type="text/css" href='webroot/CSS/bootstrap.min.css' />
	<link rel='stylesheet' type="text/css" href='webroot/CSS/style.css' />
</head>
<body lang="<?= APP_LANG ?>">

	<div class="container-fluid header">
			
		<h2>Ceci est le header</h2>

	</div>

	<div class="container-fluid nav">
			
		<div class="container menu">
			
			<ul>

				<li><a href="index.php">Accueil</a></li>
				<li><a href="?module=users&action=all_users">Liste des utilisateurs</a></li>
				<?php 

					if(!isset($_SESSION["user"]))
					{ ?>	

						<li><a href="?module=users&action=login">Se connecter</a></li>

					<?php }

					else
					{ ?>
						<li id="liadmin">Bonjour admin</li>
						<li><a href="?module=users&action=logout">Se déconnecter</a></li>
					<?php } ?>

			</ul>	
				
		</div>

	</div>


