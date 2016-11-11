<!DOCTYPE html>
<html>

<head>

	<title>Backoffice 2</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="traitement_backoffice3.css" />

</head>

<body>

	<div class="alldivtraitement_backoffice3">

		<div id="form_blogbo">

			<form method="POST" action="traitement_backoffice3blog.php">

				<h2>Poster un commentaire sur le blog</h2>
			
				<label for="nombo">Nom</label><input type="text" name="nombo" id="nombo" /> 

				<label for="prenombo">Prénom</label><input type="text" name="prenombo" id="prenombo" /> 
				
				<label for="commentairesbo">Commentaire</label><textarea name="commentairesbo" id="commentairesbo">Votre commentaire içi</textarea>

				<p id="submitbo"><input type="submit" name="envoyerbo" id="envoyerbo" value="Poster votre commentaire" /></p>

			</form>
		</div>

	</div>

</body>

</html>