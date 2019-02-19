<!DOCTYPE html>
<html>
<head>
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