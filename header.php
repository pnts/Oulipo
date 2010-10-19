<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
  <head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php bloginfo('url'); ?>/xmlrpc.php?rsd" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!--[if IE]>
    <link href="<?php bloginfo('template_directory'); ?>/ie.css" type="text/css" rel="stylesheet" media="screen" />
  <![endif]-->
  
  <!--[if lte IE 6]>
    <link href="<?php bloginfo('template_directory'); ?>/ie6.css" type="text/css" rel="stylesheet" media="screen" />
  <![endif]-->

  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
  <div id="search">
    <span class="twitter"><!-- If you want to integrate Twitter, use http://rick.jinlabs.com/code/twitter/ and put the code snippet here.  --></span>
    <?php get_search_form(); ?>
</div>

<div id="main_nav">
    <span class="header_image"></span>
    <h1 class="masthead"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    <p class="description"><?php bloginfo('description'); ?></p>
  <?php if ( has_nav_menu( 'main-menu' )) : ?>
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '' )); ?>
  <?php else: ?>
    <ul class="menu">
      <?php wp_list_pages('title_li=&depth=2'); ?>
      <li><a href="<?php bloginfo('atom_url'); ?>">Feed</a></li>
    </ul>
  <?php endif; ?>
</div>
