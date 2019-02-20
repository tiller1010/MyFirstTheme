<?php get_header();?>

<div>
	<h1 class='pageTitle'><?php the_title();?></h1>

	<?php if (have_posts()) : while(have_posts()) : the_post();?>

	<div class='pageContent'>
		<?php the_content();?>
	</div>

	<?php endwhile; endif;?>
</div>

<?php get_footer();?>