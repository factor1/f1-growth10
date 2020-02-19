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
$btn = get_field('landing_button');

get_header(); ?>

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

          <a href="<?php echo esc_url($btn['url']); ?>" class="button button--ghost" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
            <?php echo $btn['title']; ?>
          </a>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
