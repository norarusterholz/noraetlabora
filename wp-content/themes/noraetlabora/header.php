<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <title><?php wp_title( '|', 'true', 'right'); bloginfo('name') ?></title>

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

  <?php wp_head(); ?>

</head>

<body class="b-container">

  <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => 'b-navigation', 'menu_class' => 'b-header-menu' ) ); ?>
  
  <header class="b-header">
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="b-header-image"/>
    <h1>
      <a class="b-header-title" href="<?php echo home_url('/')?>"><?php bloginfo('name')?></a>
    </h1>
    <h2 class="b-header-description"><?php bloginfo('description'); ?></h2>
    <?php wp_nav_menu( array( 'theme_location' => 'social-menu', 'container' => 'nav', 'container_class' => 'b-social-menu-container', 'menu_class' => 'b-social-menu' ) );
    ?>
  </header>