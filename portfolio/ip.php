<?php 

echo "<div id='iddiv'>";

	echo 'Votre IP est : '. $_SERVER['REMOTE_ADDR'] .'<br />'; 
	echo 'L\'IP de votre serveur est : '. $_SERVER['SERVER_ADDR'] .''; 
echo "</div>";

?>