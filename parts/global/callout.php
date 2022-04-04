<?php
/**
 * Callout
 *
 * Template part used on the various templates/views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.2.0
 */

// Callout Custom Fields
$slimToggle = get_sub_field('callout_slim_toggle');
$bg = wp_get_attachment_image_src(get_sub_field('callout_background'), 'home_hero');
$bgColor = get_sub_field('callout_background_color');
$colSpan = get_sub_field('callout_column_span');
$content = get_sub_field('callout_content');
$btnToggle = get_sub_field('callout_button_toggle');
$btnAlign = get_sub_field('callout_button_alignment');
$btnClass = get_sub_field('callout_button_color');
$btn = get_sub_field('callout_button');

$sectionColor = $bgColor ? $bgColor : '#FFFFFF';
$slimClass = $slimToggle ? 'slim' : '';

?>

<section class="callout <?php echo $slimClass; ?>" style="background: <?php echo $sectionColor; ?> url('<?php echo $bg[0]; ?>') center/cover no-repeat">
  <div class="container">
    <div class="row row--justify-content-center">
      <div class="col-<?php echo $colSpan; ?>">

        <?php echo $content;

        // Optional button
        if( $btnToggle && $btn ) : ?>

          <div class="text-<?php echo $btnAlign; ?>">

            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
              <?php echo $btn['title']; ?>
            </a>

          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
