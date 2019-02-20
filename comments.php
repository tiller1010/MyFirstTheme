<?php

if(post_password_required()){
	return;
}

?>

<div id='comments' class='comments-area'>
	<?php if(have_comments()):?>

		<ul class='comment-list'>
			<?php wp_list_comments();?>
		</ul>

	<?php endif;?>

	<?php comment_form();?>
</div>