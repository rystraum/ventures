<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    var lis = $("li", "#testimonials ");
    var index = Math.floor(Math.random() * lis.length) + 1;
    $("li:nth-child("+index+")", "#testimonials").show();
  });
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

    <?php $header_image = get_header_image();
    if ( ! empty( $header_image ) ) : ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-banner-link" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'header-right' ) ) : ?>
      <div id="header-right">
        <?php dynamic_sidebar( 'header-right' ); ?>
      </div>
    <?php endif; ?>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<div class="skip-link assistive-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu') ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
  
  <?php $banner_image = get_post_meta($post->ID, 'banner_image', true); ?>
  <?php 
    if (empty($banner_image)) $banner_image = get_stylesheet_directory_uri() . "/images/Banner_Home.jpg";
  ?>
  <div id="banner">
    <img src="<?php echo $banner_image ?>" id="page_banner" />
    <ul id="testimonials">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('testimonials') ) {} ?>
    </ul>
  </div>
  <div id="post_banner">
    <div id="inner_post"></div>
  </div>
  <div class="clear"></div>
	<div id="main" class="wrapper">