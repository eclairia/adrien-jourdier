<?php

	$c = mysql_connect("localhost", "gerbault", "804054");

	if (!$c) die('Erreur mysql_connect : ' . mysql_error());

	$s = mysql_select_db("gerbault");

	if (!$s) die('Erreur mysql_select_db : ' . mysql_error());

	$c = mysql_set_charset('utf8');

	if (!$c) die('Erreur mysql_set_charset : ' . mysql_error());

?>