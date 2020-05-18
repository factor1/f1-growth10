<?php
/*
 * Text/Image Split (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Text/Image Split Custom Fields
$content = get_field('home_text_image_split_content');
$image = get_field('home_text_image_split_image');
$img = wp_get_attachment_image_src($image, 'home_split');
$alt = get_post_meta($image, '_wp_attachment_image_alt', true); ?>

<section class="home-text-image-split">
  <div class="container">
    <div class="row row--justify-content-center">
      <div class="col-6 sm-col-11">
        <?php echo $content; ?>
      </div>

      <div class="col-6 sm-col-11">
        <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
      </div>
    </div>
  </div>
</section>
