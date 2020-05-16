<?php
/*
 * Testimonials (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

if( have_rows('home_testimonials') ) :
  $i = 1; ?>

  <section class="home-testimonials">
    <div class="container home-testimonials__slider">

      <?php while( have_rows('home_testimonials') ) : the_row();
        // Testimonials Custom Fields
        $image = get_sub_field('image');
        $img = wp_get_attachment_image_src($image, 'medium');
        $content = get_sub_field('content');
        $alt = get_post_meta($image, '_wp_attachment_image_alt', true);

        // Conditional classes
        $rowClass = $i % 2 == 0 ? ' row--reverse' : ''; ?>

        <div class="row row--justify-content-center<?php echo $rowClass; ?>">
          <div class="col-2 sm-col-3 text-center">
            <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
          </div>

          <div class="col-8 sm-col-9">
            <?php echo $content; ?>
          </div>
        </div>

      <?php $i++; endwhile; ?>

    </div>
  </section>

<?php endif; ?>
