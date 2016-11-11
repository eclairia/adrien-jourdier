<!DOCTYPE html>
<html>
	<head>
		<title>Aqualis - Contact</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<meta name="description" content="Aqualis est une entreprise privée française, spécialisée dans la vente d’eau minérale, de boissons gazeuses, ainsi que de boissons énergisantes.">
		<meta name="theme-color" content="#48749C">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./contact.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="icon" type="image/png" href="./images/favicon.ico">
	</head>
<body>
	<div class="container">
				
			<?php include("header.php"); ?>

<h1>Contactez-nous !</h1>
<div id="contact">
<form method="POST" id="formcontact" action="./cont.php" >
	<div id="test">
<table>
<tr>
	<td><label for="surname">Nom<span class="required">*</span></label></td> <td><input type="text" id="surname" name="surname" placeholder="Nom"  /></td>
</tr>
<tr>
	<td><label for="name">Prénom<span class="required">*</span></label></td> <td><input type="text" id="name" name="name" placeholder="Prénom"  /></td>
</tr>
<tr>
	<td><img src="./images/env.png" alt="mail" title="mail" /> <label for="mail">E-mail<span class="required">*</span></label></td> <td><input type="email" id="email" name="mail" placeholder="E-mail"  /></td>
</tr>
<tr>
	<td><label for="company">Société</label></td> <td><input type="text" id="company" name="company" placeholder="Société"  /></td>
</tr>
<tr>
	<td><img src="./images/city.png" alt="ville" title="ville" /> <label for="city">Ville<span class="required">*</span></label></td> <td><input type="text" id="city" name="city" placeholder="Ville"  /></td>
</tr>
<tr>
	<td><img src="./images/phone.png" alt="téléphone" title="téléphone" /> <label for="phone">Téléphone<span class="required">*</span></label></td> <td><input type="tel" id="phone" name="phone" placeholder="Numéro de téléphone"  /></td>
</tr>
<tr>
	<td><label for="msg">Message<span class="required">*</span></label></td> <td><textarea rows="4" id="msg" name="msg" ></textarea></td>
</tr>
<tr><td><p id="button2"><input type="submit" id="submit2" value="Valider" /></p></td></tr>
</table>

<div id="entreprise">
<h2>Nous contacter</h2>
<p><img src="./images/phone.png" alt="téléphone" title="téléphone" />N° de l'entreprise : <a href="tel:0145678925">01 45 67 89 25</a></p>
<p><img src="./images/city.png" alt="ville" title="ville" />Adresse de l'entreprise : 28 place de la Bourse, Paris 2ème</p>
<p><img src="./images/env.png" alt="mail" title="mail" />Nos e-mails :</p>
<ul>
	<li><a href="mailto:aurelien.bonnaud-leroux@eemi.com">aurelien.bonnaud-leroux@eemi.com</a></li>
	<li><a href="mailto:arnaud.juillet@eemi.com">arnaud.juillet@eemi.com</a></li> 
	<li><a href="mailto:nicolas.gerbault@eemi.com">nicolas.gerbault@eemi.com</a></li> 
	<li><a href="mailto:paul.ray@eemi.com">paul.ray@eemi.com</a></li>
	<li><a href="mailto:adrien.jourdier@eemi.com">adrien.jourdier@eemi.com</a></li>
</ul>
</div>
</div>

</div>
<p id="map" align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.4425706894017!2d2.339053915850596!3d48.86883910792467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3c8ab00dff%3A0xc8bb3a66d8ae2daa!2s28+Place+de+la+Bourse%2C+75002+Paris!5e0!3m2!1sfr!2sfr!4v1460801829768" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
</form>

		<?php include("footer.php"); ?>

		</div>
		<script src="menu.js"></script>
		<script type="text/javascript" src="contact.js"></script>
	</body>
</html>