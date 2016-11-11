<footer>

	<div id="form_blog">

		<form method="POST" action="traitement_blog.php">

			<h2>Postez un commentaire sur le blog</h2>
		
			<label for="nom">Nom</label><input type="text" name="nom" id="nom" required /> 

			<label for="prenom">Prénom</label><input type="text" name="prenom" id="prenom" required /> 
			
			<label for="commentaires" required>Commentaire</label><textarea name="commentaires" id="commentaires">Votre commentaire ici</textarea>

			<p id="submit"><input type="submit" name="envoyer" id="envoyer" value="Poster votre commentaire" /></p>

			<div id="inputcheckbox">

				<a href="juridique.php"><label id="lienjuridique">
				Acceptez-vous les conditions d'utilisations de vos données personnelles ?</label></a><input type="checkbox" id="juridique" name="juridique" value="1" required>

			</div>

		</form>

	</div>

	<div id="form_contact">

		<form method="post" action="traitement_contact.php">

			<h2>Me contacter</h2>
		
			<label for="nomcontact">Nom</label><input type="text" name="nomcontact" id="nomcontact" required /> 

			<label for="prenomcontact">Prénom</label><input type="text" name="prenomcontact" id="prenomcontact" required /> 

			<label for="mailcontact">Mail</label><input type="email" name="mailcontact" id="mailcontact" required /> 
			<label for="commentairescontact">Commentaire</label><textarea name="commentairescontact" id="commentairescontact" required>Votre commentaire ici</textarea>

			<p><input type="submit" name="submitcontact" id="submitcontact" value="Me contacter" /></p>

		</form>
	</div>

	<a href="#ancrehautdepage"></a>

</footer>