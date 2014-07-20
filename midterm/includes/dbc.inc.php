<?php

?><?php
//	$dbc = @mysqli_connect('recipesHegemanJ.db.9765994.hostedresource.com','recipesHegemanJ','Lm@2629034059','recipesHegemanJ')or die('error connecting to database');
//	$dbc = @mysqli_connect('recipesJeff.db.10409130.hostedresource.com','recipesJeff','Tj@6084179704','recipesJeff')or die('error connecting to database');
//		$dbc = @mysqli_connect('gailsRecipes.db.11083099.hostedresource.com','gailsRecipes','GH@1660rl','gailsRecipes')or die('error connecting to database');
	global $dbc;
    $dbc = new MySQLi('recipesJeff.db.10409130.hostedresource.com','recipesJeff','Tj@6084179704','recipesJeff')or die('error connecting to database');
	
?>