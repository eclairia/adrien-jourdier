<?php include("app/view/layout/header.inc.php"); ?>

	<h1>Liste des commentaires</h1>

	<?php 

	/*
	*Paramètre 1: Name du select
	*Paramètre 2: Attribut class
	*Paramètre 3: Attribut id
	*Paramètre 4: Attend un tableau de données
	*Paramètre 5: id de la colonne du tableau (partie de gauche)
	*Paramètre 6: valeur de la colonne du tableau (partie de droite)
	*/

	if(isset($_GET["user"]))
	{
		scrolllist("users", "dropdown", "listusers", $users, "ID", "display_name", array("default" => "Tous les users", "selected" => $_GET['user'])); 
	}

	else
	{
		scrolllist("users", "dropdown", "listusers", $users, "ID", "display_name", array("default" => "Tous les users"));
	}

	?>

	<?php 

		foreach($commentaires as $commentaire)
		{ 
			var_dump($commentaire); ?>

			<a href="?module=commentaire&action=supprimer_commentaire&page=<?= $page ?>&id=<?= $commentaire['comment_ID']; ?>" onclick=" return confirm('Etes-vous certain de vous certain de vouloir supprimer le message ?')">Supprimer le commentaire</a>

		<?php } 

	?>

	<?php 

		if(isset($_GET['user']))
		{
			paginate($nb_commentaires, PAGINATION_COMMENTAIRES, 'commentaire', 'admin', '&user=' . $_GET['user']);
		}

		else
		{
		 paginate($nb_commentaires, PAGINATION_COMMENTAIRES, 'commentaire', 'admin');
		}	

	?>

<script type="text/javascript" src="webroot/js/commentaire_admin.js"></script>

<?php include("app/view/layout/footer.inc.php"); ?>