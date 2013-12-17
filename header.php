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
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/html5.js"></script>
  <![endif]-->

  <script type="text/javascript">
    WebFontConfig = { fontdeck: { id: '40706' } };

    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>

  <script type="text/javascript">
    (function() {
      var config = {
        kitId: 'kkz3vji',
        scriptTimeout: 3000
      };
      var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
    })();
  </script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="p-grid p-grid-row">
      <div class="p-1">
        <a id="nav-toggle" href="javascript:void(0)" class="hamburger"></a>
        <a href= "<?php echo get_home_url(); ?>" class="logo"></a>
        <span>Hand-crafted fine furniture by John Gallagher</span>
        <nav>
          <ul>
            <?php wp_nav_menu( array( 'container'=> false, 'items_wrap' => '%3$s' ) ); ?>
          </ul>
        </nav>
      </div>
    </div>
  </header>