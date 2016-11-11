<!DOCTYPE html>
<html>

<head>

	<title>Portfolio Adrien Jourdier</title>
	<meta charset="utf-8" />
	<!--balise meta à remplir pour améliorer le référencement-->
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="responsive.css" />
	<meta name="keyword" content="adrien, jourdier, adrien, jourdier, adrien jourdier, portfolio, adrien portfolio, adrien jourdier portfolio, adrien parcours, adrien jourdier parcours, adrien jourdier compétences, adrien jourdier competence, adrien jourdier presentation, adrien jourdier presentation, qui est adrien jourdier " />
	<meta name="description" content="Je m'appelle Adrien Jourdier et suis actuellement en école de programmation de site web. Pour en savoir plus, allez sur le site :)" />

</head>

<body>

	<span id="ancrehautdepage"></span>

	<?php include("header.php"); ?>

	<section>

		<h2 id="h2qui">Who am I ?</h2>

		<div class="qui">

			<p id="pqui">My name is Adrien Jourdier, I am 18 years old and i m currently to <a href="http://www.eemi.com/fr/"> "l'Ecole Européenne des Métiers de l'Internet"</a> in Paris, "Place de la Bourse".<br />A school dedicated in the Internet knowledge and web in general.</p>

		</div>

		<h2 id="h2parcours">My studies</h2>

		<div class="parcours">

			<p id="pparcours">Being only 18 years old, I have never realized a professional cursus.<br />
			I was in the middle school <a href="http://www.stemarie-stjustin.fr/le-college-presentation/">Saint Justin</a> in Levallois Perret.<br />
			Then I studied in the hight school <a href="http://www.lyceemontalembert.org/">Montalembert</a> in Courbevoie<br /> where I realized a french secondary vocational school diploma speciality major in computer science.<br />
			I decided to join <a href="http://www.eemi.com/fr/">"l'Ecole Européenne des Métiers de l'Internet"</a> where i am currently in first year.</p>

		</div>

		<h2>Key skills</h2>

		<div class="alldivpourcentagecompetence">

			<div class="pourcentagecompetence">

				<label for="html">HTML/CSS: </label><progress value="90" max="100" id="html" class="html"></progress><span> 90%</span>

				<label for="php">PHP: </label><progress value="60" max="100" id="php"></progress><span> 60%</span> 

				<label for="sql">SQL: </label><progress value="99" max="100" id="sql"></progress><span> 99%</span> 

				<label for="js">JavaScript: </label><progress value="30" max="100" id="js"></progress><span> 20%</span> 

				<label fpr="photoshop">Photosop: </label><progress value="70" max="100" id="photoshop"></progress><span> 70%</span> 
				
				<label for="illustrator">Illustrator: </label></label><progress value="10" max="100" id="illustrator"></progress><span> 10%</span> 
				
				<label for="indesign">In Design: </label><progress value="10" max="100" id="indesign"></progress><span> 10%</span>
		 
			</div>

		</div>


		<div class="projets">

			<a href="http://www.jourdier.fr/dota/" target="_blank">Mon Dota 2</a>
			<a href="http://www.jourdier.pro/portfolio/Langues/anglais.php" target="_blank">Mon portfolio</a>	
			<a href="http://gerbault.etudiant-eemi.com/AQUALIS/index.php" target="_blank">Aqualis</a>

		</div>

		<div id="ancrehautdepage">

			<a href="#ancrehautdepage" id="ancre"><img src="arrows.png" alt="Ancre haut de page" id="#ancrehautdepage" /></a>

		</div>

	</section>

	<div class="clear" style="clear:both"></div>

	<?php include("footer.php"); ?>

<script src="blog.js"></script>

</body>

</html>