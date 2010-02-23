<?php get_header(); ?>

<div id="content">

	<div id="entry_content">


	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
				<?php if(is_home()) { if ( function_exists('wp_list_comments') ) { ?> <div <?php post_class(); ?>> <?php }} ?>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="date"><?php the_time('F jS, Y') ?> <?php comments_popup_link('&sect; <span class="commentcount">0</span>', '&sect; <span class="commentcount">1</span>', '&sect; <span class="commentcount">%</span>'); ?></p>
				
				
				<div class="entry">
					<?php the_content('&raquo; Read the rest of this entry &laquo;'); ?>
					<?php wp_link_pages(array('before' => '<p>Page: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					
					<p class="tags"><?php the_tags('<strong>Tagged:</strong> ', ', ', ''); ?></p>
					<?php comments_template(); ?>
						
				</div>
				<?php if(is_home()) { if ( function_exists('wp_list_comments') ) { ?></div><!-- close post_class --><?php }} ?>
				
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