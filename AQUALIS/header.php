<header>
	<a id="lienburger" onclick="menuresp()"><img id="burger" alt="burger" src="./images/menuburger.png"></a>
	<div class="degrade beforeafter">
		<div class="centrage">	
			<div class="logo">
				<a href="./index.php">
					<div class="logoforme">
						<img class="goutte" src="./images/aqualis_logo_2.png" alt="Aqualis">
					</div>
					<div class="souligne"></div>
					<p class="aqualis">Aqua<span class="lis">lis</span></p>
				</a>
			</div>
			<div class="boursenews">
				<div class="bourse">
					<p class="boursetext"><strong class="textstyle">AQUALIS</strong>&nbsp;12,93€<br>&nbsp;&nbsp;&nbsp;2,10%<br>20/03/2016 15:18</p>
					<img class="up" src="./images/up.png" alt="up">
				</div>
				<div id="testpop">
					<div class="newsletter" id="popup" onclick="popupnews()">Newsletter</div>
					<div id="newslet" style="display: none">
						<div id="popupContact">
							<form action="./news.php" id="form" method="POST" name="form">
								<img id="close" alt="close" src="images/close.png" onclick ="popupnewsno()">
								<p id="recev">Recevoir notre newsletter</p>
								<input id="mail" type="email" name="email" placeholder="Saisir votre adresse e-mail">
								<p id="button"><input type="submit" id="submit" value="Valider"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="menu">
		<div class="menu2 beforeafter">
			<div class="trait1"></div>
			<a href="./index.php">
				<img class="home" src="./images/home.png" alt="home">
			</a>
			<div class="trait2"></div>
			<a class="textmenu1" href="./qui-sommes-nous.php">Qui sommes-nous ?</a>
			<div class="trait3"></div>
			<a class="textmenu2" href="./actualites.php">Actualités</a>
			<div class="trait4"></div>
			<a class="textmenu3" href="./la-marque.php">La marque</a>
			<div class="trait5"></div>
			<a class="textmenu4" href="./nos-engagements.php">Nos engagements</a>
			<div class="trait6"></div>
			<a class="textmenu5" href="./contact.php">Contact</a>
			<div class="trait7"></div>
		</div>
	</div>
	<div id="menuresponsive">
		<div id="menurespt">
			<a href="./index.php">
				<img class="home" src="./images/home.png" alt="home">
			</a>
			<a class="textmenu1" href="./qui-sommes-nous.php">Qui sommes-nous ?</a>
			<a class="textmenu2" href="./actualites.php">Actualités</a>
			<a class="textmenu3" href="./la-marque.php">La marque</a>
			<a class="textmenu4" href="./nos-engagements.php">Nos engagements</a>
			<a class="textmenu5" href="./contact.php">Contact</a>
			<img id="close2" alt="close" src="images/close.png" onclick ="menurespno()">
		</div>
	</div>
	<script src="jsnewsletter.js"></script>
	<script src="jsmenu.js"></script>
</header>