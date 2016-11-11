	<footer>

	<div id="form_blog">

		<form method="POST" action="traitement_blog.php">

			<h2>Post a comment on the blog</h2>
		
			<label for="nom">Name</label><input type="text" name="nom" id="nom" required /> 

			<label for="prenom">First name</label><input type="text" name="prenom" id="prenom" required /> 
			
			<label for="commentaires" required>Comment</label><textarea name="commentaires" id="commentaires">Your comment here</textarea>

			<p id="submit"><input type="submit" name="envoyer" id="envoyer" value="Post your commentary" /></p>

			<div id="inputcheckbox">

				<a href="juridique.php"><label id="lienjuridique">
				Do you accept the uses conditions of your personal datas ?</label></a><input type="checkbox" id="juridique" name="juridique" value="1" required>

			</div>

		</form>

	</div>

	<div id="form_contact">

		<form method="post" action="traitement_contact.php">

			<h2>Contact me</h2>
		
			<label for="nomcontact">Name</label><input type="text" name="nomcontact" id="nomcontact" required /> 

			<label for="prenomcontact">First name</label><input type="text" name="prenomcontact" id="prenomcontact" required /> 

			<label for="mailcontact">Mail</label><input type="email" name="mailcontact" id="mailcontact" required /> 
			<label for="commentairescontact">Comment</label><textarea name="commentairescontact" id="commentairescontact" required>Your comment here</textarea>

			<p id="submitcontact"><input type="submit" name="submitcontact" id="submitcontact" value="Me contacter" /></p>

		</form>
	</div>

	<a href="#ancrehautdepage"></a>

	</footer>