<?php
/*
 * Testimonial Slider
 *
 * component used on various templates/views
 */

$intro = get_sub_field('testimonial_intro_b');
$img = wp_get_attachment_image_src(get_sub_field('testimonial_background_image_b'), 'full');
$testimonials = get_sub_field('testimonials_posts_b');

if( $testimonials ): ?>
  <section class="testimonial-slider" style="background: url(<?php echo $img[0]; ?>) center/cover;">
    <div class="container">
      <?php if($intro): ?>
        <div class="row">
          <div class="col-12">
            <?php echo $intro; ?>
          </div>
        </div>
      <?php endif; ?>

      <div class="row row--justify-content-center">
        <div class="col-10 testimonials__slider">
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
      
                <div class="testimonials__single single-testimonial text-center">
                  <!-- <?php if($img): ?>
                    <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
                  <?php endif; ?> -->
                  <?php echo $content; ?>
                  <?php if($citation): ?>
                    <p class="citation"><?php echo get_the_title(); ?> - <?php echo $citation; ?></p>
                    <?php else:?>
                      <p class="citation"><?php echo get_the_title(); ?></p>
                  <?php endif; ?>
                </div>  
      
              <?php endforeach; ?>
      
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
      
    </div>
  </section>
<?php endif; ?>