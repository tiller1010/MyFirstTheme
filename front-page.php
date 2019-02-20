<?php get_header();?>

<div>
	<h1 class='siteTitle'><?php bloginfo('name');?></h1>
	<h1 class='siteDescription'><?php bloginfo('description');?></h1>
	<hr class='headerLine'>

	<?php if (have_posts()) : while(have_posts()) : the_post();?>

	<div class='pageContent'>
		<?php the_content();?>
	</div>

	<?php endwhile; endif;?>
</div>

<?php get_footer();?>