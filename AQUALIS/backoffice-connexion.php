<?php
	session_start();

	$_SESSION['connect']=0;

	if (isset($_POST['mot_de_passe']) AND isset($_POST['login']))
	{
		$mot_de_passe=$_POST['mot_de_passe'];
		$login=$_POST['login'];
	}

	else
	{
		$mot_de_passe="";
		$login="";
	}
	
	include("mysql_inc.php");
	
	$query = 	"SELECT *
				FROM projet1a_users";
				
	$q = mysql_query($query);
	
	if ($q)
	{
		$pass0 = mysql_result(mysql_query('SELECT user_password FROM projet1a_users'), 0);
		$log0 = mysql_result(mysql_query('SELECT user_login FROM projet1a_users'), 0);
		$pass1 = mysql_result(mysql_query('SELECT user_password FROM projet1a_users'), 1);
		$log1 = mysql_result(mysql_query('SELECT user_login FROM projet1a_users'), 1);
		$pass2 = mysql_result(mysql_query('SELECT user_password FROM projet1a_users'), 2);
		$log2 = mysql_result(mysql_query('SELECT user_login FROM projet1a_users'), 2);
		$pass3 = mysql_result(mysql_query('SELECT user_password FROM projet1a_users'), 3);
		$log3 = mysql_result(mysql_query('SELECT user_login FROM projet1a_users'), 3);
		$pass4 = mysql_result(mysql_query('SELECT user_password FROM projet1a_users'), 4);
		$log4 = mysql_result(mysql_query('SELECT user_login FROM projet1a_users'), 4);
		$pass5 = mysql_result(mysql_query('SELECT user_password FROM projet1a_users'), 5);
		$log5 = mysql_result(mysql_query('SELECT user_login FROM projet1a_users'), 5);
	}
	
	if (($mot_de_passe == $pass0 AND $login == $log0) OR ($mot_de_passe == $pass1 AND $login == $log1) OR ($mot_de_passe == $pass2 AND $login == $log2) OR ($mot_de_passe == $pass3 AND $login == $log3) OR ($mot_de_passe == $pass4 AND $login == $log4) OR ($mot_de_passe == $pass5 AND $login == $log5))
	{
		$_SESSION['connect']=1;
		$_SESSION['login']=$login;
		header("Location:backoffice.php");
		exit;
	}
	
	else
	{
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Aqualis - Backoffice</title>
		<meta charset="UTF-8">
		<meta name="description" content="Aqualis est une entreprise privée française, spécialisée dans la vente d’eau minérale, de boissons gazeuses, ainsi que de boissons énergisantes.">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./backoffice.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="icon" type="image/png" href="./images/favicon.ico">
	</head>
	<body>
		<div class="container">
				
			<?php include("header.php"); ?>
			
			<h1>Backoffice</h1>
			<div id="corps">
				<p id="iden">Veuillez vous identifier :</p>
				<form action="backoffice-connexion.php" method="post">
					<p><input type="text" name="login" placeholder="Votre login"/></p>
					<p><input type="password" name="mot_de_passe" placeholder="Votre mot de passe"/></p>
					<p><input type="submit" value="Valider"/></p>
				</form>
			</div>

			<?php include("footer.php"); ?>

		</div>
		
		<script src="menu.js"></script>
	</body>
</html>

<?php
	}
?>