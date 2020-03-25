<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name') ?>">

  <?php
  /* Theme color for browsers that support it
  <meta name="theme-color" content="#000">
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

  <?php // Header ?>
  <div class="container">
  <div class="row">
	  <div class="col-3 offset-1">
	  	<img src="<?php echo get_template_directory_uri();?>/assets/img/Growth10Logo_Color.jpg" alt="Growth 10">
	  </div>
	  <div class="col-8">
		  <h4 style="text-align: center; font-weight:100; margin-top: 60px"><!-- Site Coming Soon --></h4>
	  </div>
	  
  </div>
  </div>

  <?php // Main Content ?>
  <main>
