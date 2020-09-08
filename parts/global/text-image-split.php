<?php
/**
 * Text/Image Split
 *
 * Template part used on the various templates/views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.2.0
 */

// Text/Image Split Custom Fields
$fullToggle = get_sub_field('text_image_split_full_width_content_toggle');
$fullContent = get_sub_field('text_image_split_full_width_content');
$layoutOption = get_sub_field('text_image_split_layout_option'); // img on left or right
$columns = get_sub_field('text_image_split_columns'); // 4, 5, or 6
$image = get_sub_field('text_image_split_image');
$img = wp_get_attachment_image_src($image, 'text_image_split');
$content = get_sub_field('text_image_split_content');
$btnToggle = get_sub_field('text_image_split_button_toggle');
$btn = get_sub_field('text_image_split_button');

// Conditional classes
$rowClass = $layoutOption == 'right' ? ' row--reverse' : ''; ?>

<section class="text-image-split">
  <div class="container">
    <div class="row row--justify-content-center<?php echo $rowClass; ?>">

      <?php // Optional full-width content
      if( $fullToggle ) : ?>

        <div class="col-<?php echo $columns * 2; ?>">

          <?php echo $fullContent; ?>

        </div>

      <?php endif;

      // Image ?>
      <div class="col-<?php echo $columns; ?> stretch text-image-split__img">
        <div style="background: url('<?php echo $img[0]; ?>') center/cover no-repeat"></div>
      </div>

      <?php // Text ?>
      <div class="col-<?php echo $columns; ?> stretch text-image-split__text">
        <div>

          <?php echo $content;

          // Optional button
          if( $btnToggle && $btn ) : ?>

            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--teal" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
              <?php echo $btn['title']; ?>
            </a>

          <?php endif; ?>

        </div>
      </div>

    </div>
  </div>
</section>
