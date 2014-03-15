<!DOCTYPE html>
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
  
  <title><?php wp_title(''); ?></title>
  
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  
  <script type="text/javascript" src="http://typecast.com/project_css/jonnybrian/3651712e0ae99.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="p-grid p-grid-row">
      <div class="p-1">
        <a id="nav-toggle" href="javascript:void(0)" class="hamburger"></a>
        <a href= "<?php echo get_home_url(); ?>" class="logo">
          <span>Hand-crafted fine furniture</span>
        </a>
        <nav>
          <ul>
            <?php wp_nav_menu( array( 'container'=> false, 'items_wrap' => '%3$s' ) ); ?>
          </ul>
        </nav>
      </div>
    </div>
  </header>