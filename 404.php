<?php get_header(); ?>

<div id="content">

	<div id="entry_content">


	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			
				
					
					<div class="mobile">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p class="date"><?php the_time('F jS, Y') ?> <?php comments_popup_link('&sect; <span class="commentcount">0</span>', '&sect; <span class="commentcount">1</span>', '&sect; <span class="commentcount">%</span>'); ?></p>


					<div class="mobile_entry">
						<?php the_content('&raquo; Read the rest of this entry &laquo;'); ?>
					</div>
						<div class="entry">
							<?php if (is_single()) { ?>
								<?php comments_template(); ?>
							<?php } ?>
						</div>
					</div>
					
				
		<?php endwhile; ?>

		<div class="navigation">
			<p class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></p>
			<p class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></p>
		</div>
		
	
			

	<?php else : ?>

		
		<div class="entry">
		<span class="error"><img src="<?php bloginfo('template_directory'); ?>/images/mal.png" alt="error duck" /></span>
		<p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
		</div>


	<?php endif; ?>
	
	
</div> <!-- close entry_content -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>