<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo(title)?></title>
	<?php wp_head(); ?>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet">
</head>
<body>
	<?php 
		wp_nav_menu(
			array(
				'theme_location'=> 'top_menu',
				'container' => 'nav',
				'menu_class' => 'nav__list'
				)
		)
	?>