<!doctype html>
<html <?php language_attributes(); ?> >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
   <!-- Nav Menu -->
   <?php include get_template_directory().'/inc/navbar.php' ?>