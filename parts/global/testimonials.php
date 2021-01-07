<?php
/*
 * Testimonials (Global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

$title = is_home() || is_front_page() ? get_field('testimonial_title') : get_sub_field('testimonial_title') ;
$testimonials = is_home() || is_front_page() ? get_field('testimonials_posts') : get_sub_field('testimonials_posts');
if( $testimonials ) :
  $i = 1; ?>

  <section class="home-testimonials">
	  <h3 class="text-center"><?php echo $title ?></h3>
    <div class="container home-testimonials__slider">

    <?php
      if( $testimonials ): $i = 1;?>
        <?php foreach( $testimonials as $post ): 
          setup_postdata($post);
          // Testimonials Fields
          $image = get_post_thumbnail_id();
          $img = wp_get_attachment_image_src($image, 'medium');
          $content = get_field('testimonial');
          $citation = get_field('citation');
          $alt = get_post_meta($image, '_wp_attachment_image_alt', true);
          $title = $citation ? '<b>'.get_the_title().'</b> — '.$citation : '<b>'.get_the_title().'</b>';

          // Conditional classes
          $rowClass = $i % 2 == 0 ? ' row--reverse' : '';
          $textClass = $i % 2 == 0 ? ' text-right' : ' text-left'; ?>

          <div class="row row--justify-content-center<?php echo $rowClass; ?>">
            <div class="col-2 sm-col-3 text-center">
              <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
            </div>

            <div class="col-8 sm-col-9 <?php echo $textClass; ?>">
              <?php echo $content; ?>
              <h4><?php echo $title; ?></h4>
            </div>
          </div>

          <div id="plans"><!-- Anchor for the plans button to scroll to --></div>
        <?php $i++; endforeach; ?>

    <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    </div>
  </section>

<?php endif; ?>