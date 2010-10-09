<?php get_header(); ?>

<div id="content">
<div id="entry_content">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <div class="entry">
      <?php { if ( function_exists('add_theme_support')) the_post_thumbnail( 'post-thumbnail' ); } ?>
      <?php the_content('Read the rest of this entry &raquo;'); ?>
      <?php comments_template(); ?>
    </div>
  <?php endwhile; ?>

  <div class="navigation">
    <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
    <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
  </div>

  <?php else : ?>
    <div class="entry">
      <p>Looks like what you were looking for isn't here.  You might want to give it another try, perhaps the server hiccuped, or perhaps you spelled something wrong (or maybe I did).</p>
    </div>
  <?php endif; ?>
</div> <!-- close entry_content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>