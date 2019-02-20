<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
	<?php wp_head();?>
</head>
<body <?php body_class();?>>

<header class='mainHeader'>
	<nav id='mainNavigation'>
		<?php wp_nav_menu(
			array(
				'menu' => 'top-menu',
			)
		);?>
	</nav>
</header>