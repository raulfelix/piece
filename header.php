<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
    <div class="p-grid p-grid-row">
      <div class="p-1">
        <a id="nav-toggle" href="javascript:void(0)" class="hamburger"></a>
        <a href= "#" class="logo"></a>
        <span>Hand-crafted fine furniture by John Gallagher</span>
        <ul class="nav">
          <li><a href="commission.html">Commision a piece</a></li>
          <li><a href="index.html">Gallery</a></li>
          <li><a href="about.html">About John Gallagher</a></li>
          <li><a href="classes.html">Classes</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
    </div>
  </header>

  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
