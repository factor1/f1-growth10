<?php
/**
 * Hero (Single)
 *
 * Template part used on single.php
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

$img = featuredURL('post_featured'); ?>

<section class="hero--post">
  <div class="container">
    <div class="row row--justify-content-center">
      <div class="col-10 md-col-11">
        <h1>
          <?php the_title(); ?> 
        
          <button class="mark-unread">Mark as Unread</button>
        </h1>

        <?php // Optional featured image
        if( $img ) : ?>
          <div class="hero--post__img" style="background: url('<?php echo $img; ?>') center/cover no-repeat"></div>
        <?php endif;

        // Author
        get_template_part('parts/global/author'); ?>

      </div>
    </div>
  </div>
</section>
