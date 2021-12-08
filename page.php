<?php
/**
 * The default page template.
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

get_header();

$heroType = get_field('default_hero_type'); 

if( $heroType ) : 

  get_template_part('parts/global/hero-2col-video');

else : 

  get_temlate_part('parts/global/hero-b'); 
  
endif; ?>

<section class="default-content">
  <div class="container">
    <div class="row">
  	  <div class="col-10 col-centered">
  	  <?php the_content(); ?>
  	  </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
