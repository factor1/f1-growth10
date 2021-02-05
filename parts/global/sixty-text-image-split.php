<?php
/**
 * 60/40 Text/Image Split
 *
 * Template part used on the various templates/views
 *
 */

// 60/40 Text/Image Split Custom Fields
$layoutOption = get_sub_field('sixty_split_layout_option'); // img on left or right
$img = wp_get_attachment_image_src(get_sub_field('sixty_split_image'), 'text_image_split');
$content = get_sub_field('sixty_split_content');
$contentBg = wp_get_attachment_image_src(get_sub_field('sixty_split_content_background_image'), 'text_image_split');
$btnToggle = get_sub_field('sixty_split_button_toggle');
$btn = get_sub_field('sixty_split_button');

// Conditional classes
$rowClass = $layoutOption == 'right' ? ' row--reverse' : ''; ?>

<section class="sixty-text-image-split">
  <div class="container">
    <div class="row row--justify-content-center<?php echo $rowClass; ?> row--full-width">

      <div class="col-5 stretch sixty-text-image-split__img col-no-pad">
        <div style="background: url('<?php echo $img[0]; ?>') center/cover no-repeat"></div>
      </div>

      <?php // Text ?>
      <div class="col-7 stretch sixty-text-image-split__text col-no-pad" style="background: url('<?php echo $contentBg[0]; ?>') center/cover no-repeat">
        <div class="content-container">

          <?php echo $content;

          // Optional button
          if( $btnToggle && $btn ) : ?>

            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--landing-ghost" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
              <?php echo $btn['title']; ?>
            </a>

          <?php endif; ?>

        </div>
      </div>

    </div>
  </div>
</section>
