<?php
/*
 * Staff profile CTA
 *
 * Template part used on the single staff template
 *
 */

// staff profile CTA Custom Fields
$email = get_field('email_address');
$cta = get_field('cta_link');
$content = get_field('cta_content');
$bg = wp_get_attachment_image_src(get_field('cta_background_image'), 'home_hero'); ?>

<section class="callout" style="background: url('<?php echo $bg[0]; ?>') center/cover no-repeat">
  <div class="container">
    <div class="row row--justify-content-center">
      <div class="col-10">

        <?php echo $content;

        // Optional button
        if( $email || $cta ) : ?>

          <div class="text-center">

            <?php if( $email ) : ?>
              <a href="mailto:<?php echo $email; ?>" class="button button--teal" role="link" title="email address" target="_blank">
                <?php echo $email; ?>
              </a>
            <?php endif;
            if( $cta ) : ?>
              <a href="<?php echo esc_url($cta['url']); ?>" class="button button--teal" role="link" title="<?php echo $cta['title']; ?>" target="<?php echo $cta['target']; ?>">
                <?php echo $cta['title']; ?>
              </a>
            <?php endif; ?>

          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>