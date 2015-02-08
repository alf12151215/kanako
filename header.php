<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=1200">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    
    <link rel="javascript" type="text/css" media="all" href="<?php echo get_bloginfo('stylesheet_directory') ?>/jquery.selectbox.css" />
    <script type="text/javascript" src="<?php echo get_bloginfo('stylesheet_directory') ?>/js/masonry.pkgd.js"></script>
   


    
<script>
docReady( function() {
    

  var container = document.querySelector('#fashion');
  var msnry = new Masonry( container, {
   columnWidth: 188,
   itemSelector: '.c-item',
   gutter: 20      
 });
    
  var container = document.querySelector('#beauty');
  var msnry = new Masonry( container, {
   columnWidth: 188,
   itemSelector: '.b-item', 
   gutter: 20
 });
    
  var container = document.querySelector('#advertising');
  var msnry = new Masonry( container, {
   columnWidth: 188,
   itemSelector: '.a-item',
   gutter: 20      
 });    
    
});    
</script>    
    
<script type="text/javascript" src="<?php echo get_bloginfo('stylesheet_directory') ?>/js/highlight.js"></script>

    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">KANAKO YOSHIDA</a></h1>
            <h2>Make-up artist</h2>



			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
            
            <p>&copy; <script type="text/javascript">
                var dteNow = new Date();
                var intYear = dteNow.getFullYear();
                document.write(intYear);
            </script> Kanako Yoshida</p>
		</div>


	</header><!-- #masthead -->

	<div id="main" class="site-main">