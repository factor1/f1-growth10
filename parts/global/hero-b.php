<?php
/**
 * Hero B (with background) (Global)
 *
 * Template part used on index.php and other views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.2.0
 */

global $post;

// Hero B Custom Fields
$bg = wp_get_attachment_image_src(get_field('hero_b_background', $post->ID), 'home_hero');
$contentToggle = get_field('hero_b_content_toggle', $post->ID);
$colSpan = get_field('hero_b_column_span', $post->ID);
$contentAlign = get_field('hero_b_content_alignment', $post->ID);
$content = get_field('hero_b_content', $post->ID);
$hero_toggle = get_field('hero_b_small_toggle', $post->ID);
$hero_class = $hero_toggle ? ' small-hero' : '';

if( $bg ) : ?>

  <section class="hero-b <?php echo $hero_class; ?>" style="background: #0356a4 url('<?php echo $bg[0]; ?>') center top/cover no-repeat">

    <?php if( $contentToggle ) : ?>

      <div class="container">
        <div class="row <?php echo $contentAlign; ?>">
          <div class="col-<?php echo $colSpan; ?>">
            <?php echo $content; ?>
          </div>
        </div>
      </div>

    <?php endif; ?>

  </section>

<?php endif; ?>
