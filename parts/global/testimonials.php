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

$title = get_sub_field('testimonial_title') ;
$testimonials = get_sub_field('testimonials_posts');
$image = get_sub_field('testimonial_background_image');
$img = wp_get_attachment_image_src($image, 'large');

if( $testimonials ) : $i = 1; ?>

  <section class="home-testimonials" style="background: url(<?php echo $img[0]; ?>) center/cover;">
    <div class="container">
      <div class="row row--full-width">
        <div class="col-12">
          <h2 class="text-center"><?php echo $title ?></h2>
        </div>
        <div class="col-12 text-center col-no-pad">

          <div class="home-testimonials__slider">

            <?php
              if( $testimonials ): ?>
                <?php foreach( $testimonials as $post ): 
                  setup_postdata($post);
                  // Testimonials Fields
                  $image = get_post_thumbnail_id();
                  $img = wp_get_attachment_image_src($image, 'thumbnail');
                  $content = get_field('testimonial');
                  $citation = get_field('citation');
                  $alt = get_post_meta($image, '_wp_attachment_image_alt', true); ?>
        
                  <div class="single-testimonial">
                    <div class="quote">
                      <?php echo $content; ?>
                    </div>
                    <div class="info-combo">
                      <div class="author-img">
                        <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
                      </div>
                      <div class="author-data">
                        <?php echo get_the_title(); ?>
                        <?php if($citation): ?>
                          <?php echo '<br>'.$citation; ?>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
        
                <?php endforeach; ?>
        
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>

          </div>
          
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>