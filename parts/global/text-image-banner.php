<?php
/**
 * text/image banner
 *
 * Template part used on the various templates/views
 *
 */

// text/image banner Custom Fields
$layoutOption = get_sub_field('text_image_banner_layout_option'); // img on left or right
$img = wp_get_attachment_image_src(get_sub_field('text_image_banner_image'), 'text_image_split');
$content = get_sub_field('text_image_banner_content');
$contentBg = wp_get_attachment_image_src(get_sub_field('text_image_banner_content_background_image'), 'text_image_split');
$btnAlign = get_sub_field('text_image_banner_button_alignment');

// Conditional classes
$rowClass = $layoutOption == 'right' ? ' row--reverse' : ''; ?>

<section class="text-image-banner">
  <div class="container">
    <div class="row row--justify-content-center<?php echo $rowClass; ?>">

      <div class="col-4 stretch text-image-banner__img" style="background: url('<?php echo $img[0]; ?>') center/cover no-repeat">
      </div>

      <?php // Text ?>
      <div class="col-8 stretch text-image-banner__content" style="background: url('<?php echo $contentBg[0]; ?>') center/cover no-repeat">
        <div class="content-container">

          <?php echo $content; ?>

        </div>
        <?php // Optional buttons
          if( have_rows('text_image_banner_buttons') ) : ?>

          <div class="buttons text-<?php echo $btnAlign; ?>">

            <?php while( have_rows('text_image_banner_buttons') ) : the_row();
              $btnClass = get_sub_field('button_class');
              $btn = get_sub_field('button'); ?>

              <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                <?php echo $btn['title']; ?>
              </a>

            <?php endwhile; ?>

          </div>

        <?php endif; ?>
      </div>

    </div>
  </div>
</section>
