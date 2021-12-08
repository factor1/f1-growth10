<?php
/*
 * Card Banner (Global)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.4.0
 */

// Card Banner Custom Fields 
$prefix = 'card_banner_';
$bg = wp_get_attachment_image_src(get_sub_field($prefix . 'background'), 'home_hero');
$colSpan = get_sub_field($prefix . 'column_span');
$headline = get_sub_field($prefix . 'headline');
$content = get_sub_field($prefix . 'content'); ?>

<section class="card-banner" style="background: url('<?php echo $bg[0]; ?>') center/cover no-repeat">
  <div class="container">
    <div class="row row--justify-content-center">

      <?php if( $headline ) : ?>

        <div class="col-12 text-center">
          <h2 class="card-banner__headline"><?php echo $headline; ?></h2>
        </div>

      <?php endif; ?>

      <div class="col-<?php echo $colSpan; ?>">
        <div class="card-banner__card">
          <?php echo $content; ?>
        </div>

        <?php if( have_rows($prefix . 'buttons') ) : ?>

          <div class="card-banner__buttons text-center">

            <?php while( have_rows($prefix . 'buttons') ) : the_row();
              $btn = get_sub_field('button'); ?>

              <a href="<?php echo esc_url($btn['url']); ?>" class="button button--teal" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                <?php echo $btn['title']; ?>
              </a>

            <?php endwhile; ?>

          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>