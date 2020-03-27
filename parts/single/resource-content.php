<?php
/**
 * Resource Content (Single)
 *
 * Template part used on blog posts
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

// Custom Fields
$image = get_field('post_resource_image');
$img = wp_get_attachment_image_src($image, 'resource');
$alt = get_post_meta($image, '_wp_attachment_image_alt', true);
$btn = get_field('post_resource_link'); ?>

<div class="row">
  <div class="col-4 sm-col-4">
    <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
  </div>

  <div class="col-8 sm-col-8">
    <?php the_content();

    // Optional button
    if( $btn ) : ?>

      <a href="<?php echo esc_url($btn['url']); ?>" class="button button--teal" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
        <?php echo $btn['title']; ?>
      </a>

    <?php endif; ?>
  </div>
</div>
