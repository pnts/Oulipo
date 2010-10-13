<?php 
if ( function_exists( 'add_theme_support' )) {
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size( 59, 59, true );
  add_custom_background();
  add_theme_support( 'automatic-feed-links' );
  add_editor_style();

  
  define('HEADER_TEXTCOLOR', '000000');
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
    </style><?php }
    
  function oulipo_admin_header_style() { ?>
    <style type="text/css">
            #headimg { 
                      }
    </style><?php }
    
    function oulipo_admin_header_image() { ?>
       <div id="headimg">
         <style type="text/css">
            h1.masthead, p.description { font-family: "Hoefler Text","Cambria",Georgia,"Times New Roman",Times,serif; width: 160px; }
            p.description { color: #666666; font-size: 13px; }
            h1.masthead a { font-size: 24px; font-weight: normal; font-variant: small-caps; text-decoration: none; }
            h1.masthead { margin: 30px 0 0 0;}
         </style>
           <?php
           if ( 'blank' == get_theme_mod( 'header_textcolor',
    HEADER_TEXTCOLOR ) || '' == get_theme_mod( 'header_textcolor',
    HEADER_TEXTCOLOR ) )
               $style = ' style="display:none;"';
           else
               $style = ' style="color:#' . get_theme_mod(
    'header_textcolor', HEADER_TEXTCOLOR ) . ';"';
           ?>
           <img src="<?php esc_url ( header_image() ); ?>" alt="" />
           
           <h1 class="masthead"><a <?php echo $style; ?> onclick="return false;"
    href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' );
    ?></a></h1>
           <p class="description"><?php bloginfo(
    'description' ); ?></div>
           
       </div>
    <?php }   
  
  add_custom_image_header('oulipo_header_style','oulipo_admin_header_style', 'oulipo_admin_header_image');
  
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

$content_width = 470;

add_filter( 'comments_template', 'legacy_comments' );
function legacy_comments( $file ) {
  if ( !function_exists('wp_list_comments') )
  $file = TEMPLATEPATH . '/legacy.comments.php';
  return $file;
}
?>