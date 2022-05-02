<?php
/*
 * Logo slider
 *
 * Template part used on the various templates/views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.6.0
 */

if( have_rows(logo_slider) ) : ?>

  <section class="logo-slider">
    <div class="container">
      <div class="row row--justify-content-center row--full-width">
        <div class="col-12">

          <div class="logo-slider__slider">

            <?php while( have_rows(logo_slider) ) : the_row();
              $image = get_sub_field('image');
              $img = wp_get_attachment_image_src($image, 'logo_slide');
              $alt = get_post_meta($image, '_wp_attachment_image_alt', true); ?>

              <div class="logo-slider__slide text-center">
                <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
              </div>

            <?php endwhile; ?>

          </div>

        </div>
      </div>
    </div>
  </section>

<?php endif; ?>