<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name') ?>">
  <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" />


  <?php
  /* Theme color for browsers that support it
  <meta name="theme-color" content="#2cbdbe">
  */
  ?>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>

  <?php if (is_search()) { ?>
   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

  <?php if ( is_singular() && comments_open() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php // Header
  get_template_part('parts/global/site-header'); ?>

  <?php // Mega menu
  if( !is_page( get_option('woocommerce_cart_page_id') ) ) :
    get_template_part('parts/global/mega-menu');
  endif; ?>

  <?php // Main Content ?>
  <main>
