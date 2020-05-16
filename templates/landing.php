<?php
/*
 * Template Name: Landing Page
 *
 * Template used on the landing page
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Landing Page Custom Fields
$bg = featuredURL('landing');
$image = get_field('landing_logo');
$img = wp_get_attachment_image_src($image, 'landing_logo');
$alt = get_post_meta($image, '_wp_attachment_image_alt', true);
$headline = get_field('landing_headline_text');
$content = get_field('landing_content');
$btnToggle = get_field('landing_button_toggle');
$btn = get_field('landing_button_text');
$modal = get_field('landing_modal_content');

 ?>
 
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

  <?php // Main Content ?>
  <main>


<section class="landing-section" style="background: url('<?php echo $bg; ?>') center/cover no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-8 sm-col-11 col-centered text-center">

        <?php if( $image ) : ?>

          <div class="landing-section__logo">
            <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
          </div>

        <?php endif; ?>

        <h1 class="landing-section__rotate">
          <?php echo $headline . '<br>';

          // Rotating words
          if( have_rows('landing_rotating_words') ) : ?>

            <span class="span--outer">
              <?php while( have_rows('landing_rotating_words') ) : the_row();
                $word = get_sub_field('word'); ?>

                <span class="span--inner"><?php echo $word; ?></span>

              <?php endwhile; ?>
            </span><span>.</span>

          <?php endif; ?>
        </h1>

        <?php echo $content;

        // Optional button
        if( $btnToggle && $btn ) : ?>

          <button class="button button--ghost" data-micromodal-trigger="landing-modal"><?php echo $btn; ?></button>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<?php if( $btnToggle && $modal ) : ?>

  <div class="modal micromodal-slide" id="landing-modal" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-title">
        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>

        <div id="landing-modal-content">
          <?php echo $modal; ?>
        </div>
      </div>
    </div>
  </div>

<?php endif;

get_footer(); ?>
