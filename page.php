<?php
  /**
   * The default page template.
   */
  get_header(); ?>

  <div class="container" style="padding: 50px 0;">
  <div class="row">
	  <div class="col-10 col-centered">
	  <?php the_content(); ?>
	  </div>
  </div>
  </div>

  <?php get_footer();
