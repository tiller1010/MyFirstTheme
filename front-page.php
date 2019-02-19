<?php get_header();?>

<div>
	<h1><?php bloginfo('name');?></h1>
	<h1><?php bloginfo('description');?></h1>

	<?php if (have_posts()) : while(have_posts()) : the_post();?>

		<?php the_content();?>

	<?php endwhile; endif;?>
</div>

<?php get_footer();?>