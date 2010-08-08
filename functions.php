<?php 
if ( function_exists( 'add_theme_support' )) {
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size( 59, 59, true );
  add_custom_background();
  add_theme_support( 'automatic-feed-links' );
  
  define('HEADER_TEXTCOLOR', 'FF9900');
  define('HEADER_IMAGE', '%s/images/default_header.jpg'); // %s is the template dir uri
  define('HEADER_IMAGE_WIDTH', 160); // use width and height appropriate for your theme
  define('HEADER_IMAGE_HEIGHT', 120);
  
  function oulipo_header_style() { ?>
    <style type="text/css">
        span.header_image { background: url(<?php header_image(); ?>) no-repeat;
                  width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
                  height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
                  display: block;
                  margin-bottom: 30px;
                 }
        #main_nav h1.masthead a { color:#<?php header_textcolor();?>; }
    </style> <?php }
    
  function oulipo_admin_header_style() { ?>
    <style type="text/css">
            #headimg { background: url(<?php header_image() ?>) no-repeat;
                       width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
                       height: <?php echo HEADER_IMAGE_HEIGHT; ?>px; 
                      }
    </style><?php }
  
  add_custom_image_header('oulipo_header_style','oulipo_admin_header_style');
  
  add_action( 'init', 'register_oulipo_menus' );
  function register_oulipo_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main Navigation Menu' )
        ));
  }
}

if ( function_exists('register_sidebar') )
    register_sidebar();

$GLOBALS['content_width'] = 470;

add_filter( 'comments_template', 'legacy_comments' );
function legacy_comments( $file ) {
  if ( !function_exists('wp_list_comments') )
  $file = TEMPLATEPATH . '/legacy.comments.php';
  return $file;
}
?>