<?php

	function paginate($nb_enregistrements, $nb_par_page, $module, $action)
	{
		$nb_pages = ceil($nb_enregistrements/$nb_par_page);

		echo "<ul class='ul_paginate'>"; 

			for($i = 1; $i <= $nb_pages; $i++)
			{
				echo '<li><a href="?module=' . $module .'&action='. $action . '&page=' . $i .'">' . $i .'</a></li>';
			}

		echo "</ul>";
	}