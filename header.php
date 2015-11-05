<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "content-container" div.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="header">
      <div class="header-content">
        <div class="header-logo">
          <h1>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>          
          </h1>
          <h2><?php 
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) : ?>
                  <?php echo $description; ?>
              <?php endif;
          ?></h2>
        </div>
        <a href="#" id="menu-button">
          <small>Menu</small>
          <span class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </span>
        </a>
      </div>
    </div>
    <div class="sidebar">
      <div class="sidebar-content">
        <?php get_sidebar(); ?>        
      </div>
    </div>
    <div class="content-wrapper">   
      <div class="content-container">