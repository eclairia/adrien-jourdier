<!DOCTYPE html>
<html>
	<head>
		<title>Aqualis - <?php
		
							include("mysql_inc.php");
							
							$query = "SELECT *
								FROM projet1a_posts, projet1a_users, projet1a_categories
								WHERE (post_author = user_id) AND (post_category = cat_id) AND (post_id = " . $_GET["id"] . ")";
							
							$q = mysql_query($query);
							
							if ($q)
							{
								while ($row = mysql_fetch_object($q))
								{
									echo $row->post_title;
								}
							}

							else 
							{	
								die('Erreur mysql_query : ' . mysql_error());
							}
						?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<meta name="description" content="<?php
		
											include("mysql_inc.php");
											
											$query = "SELECT *
												FROM projet1a_posts, projet1a_users, projet1a_categories
												WHERE (post_author = user_id) AND (post_category = cat_id) AND (post_id = " . $_GET["id"] . ")";
											
											$q = mysql_query($query);
											
											if ($q)
											{
												while ($row = mysql_fetch_object($q))
												{
													$max_caracteres=160;
													$description = $row->post_content;
													
													if (strlen($description)>$max_caracteres)
													{    
														$description = substr($description, 0, $max_caracteres);
														$position_espace = strrpos($description, " ");
														$description = substr($description, 0, $position_espace);
														$description = $description."...";
													}
													
													echo "$description";
												}
											}

											else 
											{	
												die('Erreur mysql_query : ' . mysql_error());
											}
										?>">
		<meta name="theme-color" content="#48749C">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./article-type.css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="icon" type="image/png" href="./images/favicon.ico">
	</head>
	<body>
		<div class="container">
				
			<?php include("header.php"); ?>

			<div class="main beforeafter">
				<img class="blaise" src="<?php
		
											include("mysql_inc.php");
											
											$query = "SELECT *
												FROM projet1a_posts, projet1a_users, projet1a_categories, projet1a_pictures
												WHERE (post_author = user_id) AND (post_category = cat_id) AND (post_id = " . $_GET["id"] . ") AND (post_pic = pict_id)";
											
											$q = mysql_query($query);
											
											if ($q)
											{
												while ($row = mysql_fetch_object($q))
												{
													echo $row->pict_url;
												}
											}

											else 
											{	
												die('Erreur mysql_query : ' . mysql_error());
											}
										?>" alt="<?php
		
													include("mysql_inc.php");
													
													$query = "SELECT *
														FROM projet1a_posts, projet1a_users, projet1a_categories, projet1a_pictures
														WHERE (post_author = user_id) AND (post_category = cat_id) AND (post_id = " . $_GET["id"] . ") AND (post_pic = pict_id)";
													
													$q = mysql_query($query);
													
													if ($q)
													{
														while ($row = mysql_fetch_object($q))
														{
															echo $row->pict_descr;
														}
													}

													else 
													{	
														die('Erreur mysql_query : ' . mysql_error());
													}
												?>">
				<div id="textart"><h1><?php
		
						include("mysql_inc.php");
						
						$query = "SELECT *
							FROM projet1a_posts, projet1a_users, projet1a_categories
							WHERE (post_author = user_id) AND (post_category = cat_id) AND (post_id = " . $_GET["id"] . ")";
						
						$q = mysql_query($query);
						
						if ($q)
						{
							while ($row = mysql_fetch_object($q))
							{
								echo $row->post_title;
							}
						}

						else 
						{	
							die('Erreur mysql_query : ' . mysql_error());
						}
					?></h1>
				<p class="date"><?php
		
									include("mysql_inc.php");
									
									setlocale(LC_TIME, "fr_FR");
									
									$query = "SELECT *
										FROM projet1a_posts, projet1a_users, projet1a_categories
										WHERE (post_author = user_id) AND (post_category = cat_id) AND (post_id = " . $_GET["id"] . ")";
									
									$q = mysql_query($query);
									
									if ($q)
									{
										while ($row = mysql_fetch_object($q))
										{
											echo strftime("Le %A %d %B %Y", $row->post_date);
										}
									}

									else 
									{	
										die('Erreur mysql_query : ' . mysql_error());
									}
								?></p>
				<div class="textearticle">
					<p><?php
		
							include("mysql_inc.php");
							
							$query = "SELECT *
								FROM projet1a_posts, projet1a_users, projet1a_categories
								WHERE (post_author = user_id) AND (post_category = cat_id) AND (post_id = " . $_GET["id"] . ")";
							
							$q = mysql_query($query);
							
							if ($q)
							{
								while ($row = mysql_fetch_object($q))
								{
									echo $row->post_content;
								}
							}

							else 
							{	
								die('Erreur mysql_query : ' . mysql_error());
							}
						?></p>
				</div>
				<p class="auteurarticle"><?php
		
											include("mysql_inc.php");
											
											$query = "SELECT *
												FROM projet1a_posts, projet1a_users, projet1a_categories
												WHERE (post_author = user_id) AND (post_category = cat_id) AND (post_id = " . $_GET["id"] . ")";
											
											$q = mysql_query($query);
											
											if ($q)
											{
												while ($row = mysql_fetch_object($q))
												{
													echo $row->display_name;
												}
											}

											else 
											{	
												die('Erreur mysql_query : ' . mysql_error());
											}
										?></p></div>
			</div>

		<?php include("footer.php"); ?>

		</div>
		<script src="menu.js"></script>
	</body>
</html>