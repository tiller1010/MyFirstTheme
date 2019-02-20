<?php get_header();?>

<div>
	<h1 class='pageTitle'><?php the_title();?></h1>

	<?php if(has_post_thumbnail()):?>
		<img class='singlePostImage' src="<?php the_post_thumbnail_url('largest')?>">

	<?php endif;?>

	<?php if (have_posts()) : while(have_posts()) : the_post();?>

	<div class='singlePostContent'>
		<?php the_content();?>
	</div>

	<?php if(comments_open()) :
		comments_template();
	endif;?>

	<?php endwhile; endif;?>
</div>

<?php get_footer();?>