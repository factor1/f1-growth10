<?php
/**
 * Three column content
 *
 * Template part used on the various templates/views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.2.0
 */

// Custom fields
$intro = get_sub_field('three_column_intro_content');
$btnToggle = get_sub_field('three_column_button_toggle');
$btnAlign = get_sub_field('three_column_button_alignment');
$btnClass = get_sub_field('three_column_button_color');
$btn = get_sub_field('three_column_button');

?>

<section class="three-column-content">
  <div class="container">
    <?php if($intro): ?>
      <div class="row">
        <div class="col-12">
          <div class="three-column-content__intro">
            <?php echo $intro; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>


    <?php if( have_rows('three_column_columns') ): ?>
      <div class="row">

        <?php while( have_rows('three_column_columns') ): the_row(); 
          $image = wp_get_attachment_image_src(get_sub_field('image'), 'medium');
          $content = get_sub_field('content');
        ?>
          <div class="col-4 stretch">
            <div class="three-column-content__single-column">
              <div class="single-image" style="background: url(<?php echo $image[0]; ?>) center/contain no-repeat;"></div>
              <div class="single-content">
                <?php echo $content; ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>

      </div>
    <?php endif; ?>

    <?php if($btnToggle && $btn): ?>
      <div class="row">
        <div class="col-12">

          <div class="text-<?php echo $btnAlign; ?>">
            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
              <?php echo $btn['title']; ?>
            </a>
          </div> 

        </div>
      </div>
    <?php endif; ?>

  </div>
</section>