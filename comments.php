<?php if ( post_password_required() ) : ?>
				<p class="nocomments"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'oulipo' ); ?></p>
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	
	<h3 id="comments"><?php
			printf( _n( '&sect; One Response to %2$s', '&sect; %1$s Responses to %2$s"', get_comments_number(), 'oulipo' ),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?></h3>

	<ul class="commentlist">
	<?php wp_list_comments(); ?>
	</ul>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(); ?></div> 
		<div class="alignright"><?php next_comments_link(); ?></div>
	</div>
 	
	<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( 'open' == $post->comment_status ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e( 'Comments are closed.', 'oulipo' ); ?></p>

	<?php endif; ?>
<?php endif; ?>

	<?php comment_form(); ?>