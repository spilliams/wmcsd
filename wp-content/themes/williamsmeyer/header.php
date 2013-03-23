<?php
/**
 * @package WilliamsMeyer
 * @since Williams & Meyer 1.0
 */
?><!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  
  <meta name="viewport" content="width=device-width" />
  
  <title><?php echo get_bloginfo("name"); ?></title>
  
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <link href='http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic|Flamenco:400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/foundation.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/social_foundicons.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
  <a name="top"></a>
  <div id="header" class="peach">
    <div class="row">
      <div class="twelve columns text-center">
        <h2 class="subtitle">Captains</h2>
        <div id="sticky-header">
          <h1 class="title"><a href="/"><?php echo get_bloginfo("name"); ?></a></h1>
          <div class="peach overlay"></div>
        </div>
        <h2 class="subtitle"><?php echo get_bloginfo("description"); ?></h2>
      </div>
    </div>
  </div>
  
  <div id="content">
  
    <div class="grey">
      <div class="row">
        <div class="three columns text-center"><h2><a href="/">Posts</a></h2></div>
        <div class="three columns text-center"><h2><a href="/about/">About</a></h2></div>
        <div class="three columns text-center"><h2><a href="/contact/">Contact</a></h2></div>
        <div class="three columns text-center"><h2><a href="/feed/">RSS<span class="social foundicons-rss"></span></a></h2></div>
      </div>
    </div>