<?php
/*
 * Icon data row
 *
 * Template part used on the various templates/views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.6.0
 */ ?>

<?php if( have_rows('icon_data_repeater') ) : ?>
  <section class="icon-data">
    <div class="container">
      <div class="row">

        <?php while( have_rows('icon_data_repeater') ) : the_row();
          $img = wp_get_attachment_image_src(get_sub_field('icon_image'), 'large');
          $alt = get_post_meta($img, '_wp_attachment_image_alt', true); 
          $stat = get_sub_field('icon_main_stat');
          $description = get_sub_field('icon_description'); ?>

          <div class="col-3 md-col-6 sm-col-12">
            <div class="icon-data__single text-center">
              <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>" class="single-icon">
              <div class="single-content">
                <?php if($stat): ?>
                  <h2><?php echo $stat; ?></h2>
                <?php endif; ?>
                <?php if($description): ?>
                  <h4><?php echo $description; ?></h4>
                <?php endif; ?>
              </div>
            </div>
          </div>

        <?php endwhile; ?>

      </div>
    </div>
  </section>
<?php endif; ?>