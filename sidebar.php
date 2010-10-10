<div id="supplementary">
<div class="meta">
  <?php if (is_home() || is_page()) {?>
  <ul>
    <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar() ) : ?>
    <!--<li>
      <h3>About</h3>
      <p>Uncomment this section if you want to put some information about you or the site here</p>
    </li>-->
    
    <li>
      <h3>Categories</h3>	
      <ul id="categories">
        <?php wp_list_categories('orderby=name&title_li='); ?>
      </ul>
    </li>
    
    <li>
      <h3>Archives</h3>
      <ul id="archives">
        <?php wp_get_archives('format=html'); ?>
      </ul>
    </li>
  <?php endif; ?>
  </ul>

  <?php } elseif (is_single()) { ?>
    <div class="post_nav">
      <h3>What's this?</h3>
      <p>You are currently reading <strong><?php the_title(); ?></strong> at
        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>.</p>
      
      <h3>meta</h3>
      <ul class="single_post_meta">
        <li><strong>Author:</strong> <?php the_author(); ?></li>
        <li><strong>Comments: </strong><?php comments_number('No Comments', '1 Comment', '% Comments' );?></li> 
        <li><strong>Categories:</strong> <?php the_category(', ') ?></li>
      </ul>
      <p class="edit"><?php edit_post_link('Edit', '', ''); ?></p>
    </div>
    
    <ul>
      <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
       <?php endif; ?>
    </ul>
    
    
    <?php } elseif (is_category()) { ?>
      <div class="post_nav">
        <h3>Where Am I?</h3>
        <p>You are currently browsing the <strong><?php single_cat_title(''); ?></strong> category at 
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>.</p>
          <div class="spacer"></div>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>
      
    <?php } elseif (is_tag()) { ?>
      <div class="post_nav">
        <h3>Where Am I?</h3>
        <p>You are currently browsing entries tagged with <strong><?php single_tag_title(); ?></strong> at
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?>.</p>
          <div class="spacer"></div>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>
    
    <?php } elseif (is_month()) { ?>
      <div class="post_nav">
        <h3>Where am I?</h3>
        <p>You are currently viewing the archives for <strong><?php the_time('F, Y'); ?></strong> at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>.</p>
        <div class="spacer"></div>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>

    <?php } elseif (is_year ()) { ?>
      <div class="post_nav">
        <h3>Where am I?</h3>
        <p>You are currently viewing the archives for <strong><?php the_time('Y'); ?></strong> at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>.</p>
        <div class="spacer"></div>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>

    <?php } elseif (is_day()) { ?>
      <div class="post_nav">
        <h3>Where am I?</h3>
        <p>You are currently viewing the archives for <strong><?php the_time('l, F jS, Y'); ?></strong> at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>.</p>
        <div class="spacer"></div>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>

    <?php } elseif (is_search()) {?>
      <div class="post_nav">
        <h3>Search Results</h3>
        <p>You are currently viewing the search results for <strong><?php the_search_query(); ?></strong>.</p>
        <div class="spacer"></div>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>

    <?php } elseif (is_page('about')) {?>
      <div class="post_nav">
        <h3>Blogroll</h3>
        <ul>
          <?php wp_list_bookmarks('categorize=0&title_li=0&title_after=&title_before=');?>
        </ul>
      </div>
      
      <ul>
        <?php if ( !function_exists('dynamic_sidebar')
          || !dynamic_sidebar() ) : ?>
         <?php endif; ?>
      </ul>

<?php } elseif (is_page('contact')) {?>
<?php } ?>
</div> <!-- close meta -->
</div> <!-- close supplementary -->

</div> <!-- close content -->