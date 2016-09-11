<?php 

  /* Enable custom header */
  $args = array(
    'flex-width'    => true,
    'width'         => 240,
    'flex-height'    => true,
    'height'        => 240,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
  );

  add_theme_support( 'custom-header', $args );


  function noraetlabora_fonts_url() {
      $fonts_url = '';
   
      /* Translators: If there are characters in your language that are not
      * supported by Roboto, translate this to 'off'. Do not translate
      * into your own language.
      */
      $roboto = _x( 'on', 'Roboto font: on or off', 'noraetlabora' );
   
      if ( 'off' !== $roboto ) {
          $font_families = array();
   
          if ( 'off' !== $roboto ) {
              $font_families[] = 'Roboto:100,300,400,500,700';
          }
   
          $query_args = array(
              'family' => urlencode( implode( '|', $font_families ) ),
              'subset' => urlencode( 'latin,latin-ext' ),
          );
   
          $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
      }
   
      return esc_url_raw( $fonts_url );
  }

  /* Enable Menus */

  function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'social-menu' => __( 'Social Menu' )
    )
  );
  }

  add_action( 'init', 'register_my_menus' );

  /* Enable Google Fonts */

  function noraetlabora_scripts_styles() {
    wp_enqueue_style( 'noraetlabora-fonts', noraetlabora_fonts_url(), array(), null );
    }
  
  add_action( 'wp_enqueue_scripts', 'noraetlabora_scripts_styles' );

 ?>
