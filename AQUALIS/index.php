<!DOCTYPE html>
<html>
	<head>
		<title>Aqualis - Accueil</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<meta name="description" content="Aqualis est une entreprise privée française, spécialisée dans la vente d’eau minérale, de boissons gazeuses, ainsi que de boissons énergisantes.">
		<meta name="theme-color" content="#48749C">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./index.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="./gallery.css">
		<link rel="stylesheet" href="./gallery.theme.css">
		<link rel="icon" type="image/png" href="./images/favicon.ico">
	</head>
	<body>
		<div class="container">
				
			<?php include("header.php"); ?>

			<div class="gallery autoplay items-3">
				<div id="item-1" class="control-operator"></div>
				<div id="item-2" class="control-operator"></div>
				<div id="item-3" class="control-operator"></div>
				<figure class="item">
					<img src="./images/caroussel.png" alt="caroussel1">
				</figure>
				<figure class="item">
					<img src="./images/caroussel1.png" alt="caroussel2">
				</figure>
				<figure class="item">
					<img src="./images/caroussel2.jpg" alt="caroussel3">
				</figure>
				<div class="controls">
					<a href="#item-1" class="control-button">•</a>
					<a href="#item-2" class="control-button">•</a>
					<a href="#item-3" class="control-button">•</a>
				</div>
			</div>
			<div class="main beforeafter">
				<div class="actus">
					<div class="actualites">Actualités</div>

					<?php
				
					include("mysql_inc.php");
					
					$query = 	"SELECT *
								FROM projet1a_posts
								ORDER BY projet1a_posts.post_date DESC";
					$q = mysql_query($query);
					
					if ($q)
					{
						while ($row = mysql_fetch_object($q))
						{
							echo '<div class="article1234"><p class="texttitre3">';
							echo $row->post_title;
							echo '</p><p class="textc">';
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
							echo '<p class="suite234"><a href="';
							echo 'article.php?id=' . $row->post_id . '';
							echo '">Lire la suite</a></p></div>';
							echo '<div class="separation"></div>';
						}
					}

					else 
					{	
						die('Erreur mysql_query : ' . mysql_error());
					}
					
				?>
				
				</div>
				<div class="center">
					<div class="a-la-une">
						<p class="a-la-une-titre">A la Une :</p>
						<div class="a-la-une-texte">
							<p><strong class="alaunegras">Aqualis au service du développement durable</strong></p>
							<p>Toujours très engagé en faveur de l’environnement, Aqualis a décidé de marquer le coup, en marge de la COP 21 qui se tenait à Paris fin 2015. En effet, comme l’écologie est une valeur qui nous tient à cœur, nous nous sommes engagés à diviser par deux la consommation électrique de notre usine située à Givors, en banlieue de Lyon, sous 5 ans. Une étude commandée par...<br /><strong class="lirelasuite"><a class="suitel" href="./article.php?id=7">Lire la suite &gt; &gt; &gt;</a></strong></p>
						</div>
					</div>
					<div class="centersepare"></div>
					<div class="qui-sommes-nous">
						<p class="qui-sommes-nous-titre">Qui sommes-nous ?</p>
						<div class="qui-sommes-nous-texte">
							<p><strong class="quigras">Aqualis, société privée française, est spécialisée dans la vente d’eau minérale, de boissons gazeuses, ainsi que de boissons énergisantes.</strong></p>
							<p>Depuis 1970, nous œuvrons en faveur d’une mise à disposition d’eau de qualité pour nos clients. Lors de la création d’Aqualis, notre but premier a été de proposer une eau minérale saine...<br /><strong class="lirelasuite"><a href="./qui-sommes-nous.php">Lire la suite &gt; &gt; &gt;</a></strong></p>
						</div>
					</div>
					<div class="centersepare"></div>
					<div class="fondateurs">
						<p class="fondadiri">Les Fondateurs et Dirigeants</p>
							<a href="./fondateurs.php">
								<div class="fondateurs-2">
									<div class="president beforeafter">
										<div class="nicolas">
											<div class="photonicolas"></div>
											<p class="textnicolas"><strong class="grasfondateur">Nicolas</strong><br><strong class="grasfondateur">GERBAULT</strong><br>Président<br>d’Aqualis<br>depuis 2010</p>
										</div>
										<div class="arnaud">
											<div class="photoarnaud"></div>
											<p class="textarnaud"><strong class="grasfondateur">Arnaud</strong><br><strong class="grasfondateur">JUILLET</strong><br>Président adjoint<br>d’Aqualis<br>depuis 2010</p>
										</div>
									</div>
									<div class="fondateur beforeafter">
										<div class="aurelien">
											<div class="photoaurelien"></div>
											<p class="textaurelien"><strong class="grasfondateur">Aurélien</strong><br><strong class="grasfondateur">BONNAUD</strong><br>Cofondateur<br>d’Aqualis<br>en 1970</p>
										</div>
										<div class="paul">
											<div class="photopaul"></div>
											<p class="textpaul"><strong class="grasfondateur">Paul</strong><br><strong class="grasfondateur">RAY</strong><br>Fondateur<br>d’Aqualis<br>en 1970</p>
										</div>
										<div class="adrien">
											<div class="photoadrien"></div>
											<p class="textadrien"><strong class="grasfondateur">Adrien</strong><br><strong class="grasfondateur">JOURDIER</strong><br>Cofondateur<br>d’Aqualis<br>en 1970</p>
										</div>
									</div>
								</div>
							</a>
						<p class="suitefonda"><a href="./fondateurs.php">Lire la suite &gt; &gt; &gt;</a></p>
					</div>
					<div id="fondateursresp">
						<p class="fondadiri" id="titrefondaresp">Les Fondateurs et Dirigeants</p>
						<div id="respfond1">
							<div class="respnicolas">
								<img src="./images/nicolas.png" alt="Nicolas Gerbault" class="respnicolasimg"></img>
								<p class="respnicolastext"><strong class="grasfondateur">Nicolas</strong><br><strong class="grasfondateur">GERBAULT</strong><br>Président<br>d’Aqualis<br>depuis 2010</p>
							</div>
							<div class="resparnaud">
								<img src="./images/arnaud.png" alt="Arnaud Juillet" class="respaurnaudimg"></img>
								<p class="resparnaudtext"><strong class="grasfondateur">Arnaud</strong><br><strong class="grasfondateur">JUILLET</strong><br>Président adjoint<br>d’Aqualis<br>depuis 2010</p>
							</div>
						</div>
						<div id="respfond2">
							<div class="respaurelien">
								<img src="./images/aurelien.png" alt="Aurélien Bonnaud" class="respaurelienimg"></img>
								<p class="respaurelientext"><strong class="grasfondateur">Aurélien</strong><br><strong class="grasfondateur">BONNAUD</strong><br>Cofondateur<br>d’Aqualis<br>en 1970</p>
							</div>
							<div class="resppaul">
								<img src="./images/paul.png" alt="Paul Ray" class="resppaulimg"></img>
								<p class="resppaultext"><strong class="grasfondateur">Paul</strong><br><strong class="grasfondateur">RAY</strong><br>Fondateur<br>d’Aqualis<br>en 1970</p>
							</div>
						</div>
						<p class="suitefondaresp"><a href="./fondateurs.php">Lire la suite &gt; &gt; &gt;</a></p>
					</div>
				</div>
				<div class="actus2">
					<div class="resultatsan">
						<div class="resultats-annuels-2015">Résultats annuels 2015</div>
						<div class="resultats">
							<p class="texttitreresultats">Aqualis en grande forme !</p>
							<div class="stats">
								<p class="text-style-10">Le Conseil d’Administration d’Aqualis s’est réuni le 23 janvier 2016 sous la présidence de Nicolas Gerbault et en présence du Commissaire aux Comptes. Le Conseil a arrêté les comptes pour l’exercice 2015.</p>
								<p>&nbsp;</p>
								<p><strong class="grasstats">Chiffre d’affaires</strong>&nbsp;: 3,22 milliards d’euros</p>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;+ 14,5 % à données publiées</p>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;+ 4,5 % à taux de change constants</p>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;+ 3,2 % à données comparables</p>
								<p>&nbsp;</p>
								<p><strong class="grasstats">Résultat d’exploitation</strong>&nbsp;: 322 millions d’euros, soit 10 % du chiffre d’affaires</p>
								<p>&nbsp;</p>
								<p><strong class="grasstats">Bénéfice net par action</strong>&nbsp;: 5,2 euros, en progression de 11,2 %</p>
								<p>&nbsp;</p>
								<p><strong class="grasstats">Dividende</strong>&nbsp;: + 11,4 % à 3,05 euros</p>
							</div>
						</div>
					</div>
					<div class="contact">
						<div class="contactez-nous">Contactez-nous</div>
						<div class="contact2">
							<div class="groupe1">
								<p class="typecontact">Par mail :</p>
								<p class="donnecontact">contact@aqualis-france.com</p>
							</div>
							<div class="groupe2">
								<p class="typecontact">Par téléphone :</p>
								<p class="donnecontact">+33(0)145528281</p>
							</div>
							<div class="groupe3">
								<p class="typecontact">Par voie postale :</p>
								<div class="donnecontact">
									<p class="text-style-10">Aqualis France</p>
									<p>1 Place de la Bourse</p>
									<p class="text-style-12">75002 Paris</p>
								</div>
							</div>
						</div>
						<p class="ensavoirplus"><a href="./contact.php">En savoir plus &gt; &gt; &gt;</a></p>
					</div>
					<div class="contact222">
						<div class="contactez-nous">Retrouvez-nous</div>
						<div class="contact2">
							<div class="groupe1">
								<p class="typecontact">Le 20/08/2016 à Paris</p>
								<p class="donnecontact">Les dirigeants d'Aqualis seront présents toute la journée pour le 23ème salon de l'eau, situé porte de Versailles.</p>
							</div>
							<div class="groupe2">
								<p class="typecontact">Le 14/10/2016 à Lille</p>
								<p class="donnecontact">Aqualis organise un diner de gala à l'occasion des 45 ans de la marque. Lieu à confirmer.</p>
							</div>
						</div>
						<p class="ensavoirplus"><a href="./contact.php">En savoir plus &gt; &gt; &gt;</a></p>
					</div>
				</div>
			</div>

		<?php include("footer.php"); ?>

		</div>
		<script src="menu.js"></script>
		<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
		<script>
		if (window.matchMedia("(min-width: 1024px)").matches)
		{
			window.sr = ScrollReveal();
				sr.reveal('.photonicolas', { origin: 'left', duration: 500, delay: 500, distance: '50px' });
				sr.reveal('.photoarnaud', { origin: 'right', duration: 500, delay: 0, distance: '50px' });
				sr.reveal('.photoaurelien', { origin: 'bottom', duration: 1500, delay: 300, });
				sr.reveal('.photopaul', { origin: 'bottom', duration: 1500, delay: 300, });
				sr.reveal('.photoadrien', { origin: 'bottom', duration: 1500, delay: 300, });
		}
		else
		{
			
		}

			
		</script>
	</body>
</html>