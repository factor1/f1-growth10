<?php
/**
 * Text/split
 *
 * Template part used on the various templates/views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.2.0
 */

// Custom fields
$bg = wp_get_attachment_image_src(get_sub_field('text_split_background_image'), 'home_hero');
$intro = get_sub_field('text_split_intro_content');
$left_content = get_sub_field('text_split_left_content');
$left_btn_color = get_sub_field('text_split_left_button_color');
$btn_left = get_sub_field('text_split_left_button');
$right_content = get_sub_field('text_split_right_content');
$right_btn_color = get_sub_field('text_split_right_button_color');
$btn_right = get_sub_field('text_split_right_button');

?>

<section class="text-split" style="background: url(<?php echo $bg[0]; ?>) center/cover;">
  <div class="container">

    <?php if($intro): ?>
      <div class="row">
        <div class="col-12">
          <?php echo $intro; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="row">
      <div class="sm-col-12 col-6">
        <?php echo $left_content; ?>

        <?php if($btn_left): ?>
          <a href="<?php echo esc_url($btn_left['url']); ?>" class="button button--<?php echo $left_btn_color; ?>" role="link" title="<?php echo $btn_left['title']; ?>" target="<?php echo $btn_left['target']; ?>">
            <?php echo $btn_left['title']; ?>
          </a>
        <?php endif; ?>

      </div>
      <div class="sm-col-12 col-6">
        <?php echo $right_content; ?>

        <?php if($btn_right): ?>
          <a href="<?php echo esc_url($btn_right['url']); ?>" class="button button--<?php echo $right_btn_color; ?>" role="link" title="<?php echo $btn_right['title']; ?>" target="<?php echo $btn_right['target']; ?>">
            <?php echo $btn_right['title']; ?>
          </a>
        <?php endif; ?>

      </div>
    </div>

  </div>
</section>