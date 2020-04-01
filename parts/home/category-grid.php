<?php
/*
 * Category Grid (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Category Grid Custom Fields
$headline = get_field('category_grid_headline');
$content = get_field('category_grid_content');
$cats = get_field('left_menu', 'option'); ?>

<section class="category-grid">
  <div class="container">
    <div class="row">
      <div class="col-10 sm-col-11 col-centered text-center">
        <h2><?php echo $headline; ?></h2>
      </div>

      <?php // Grid
      if( $cats ) : ?>

        <div class="col-12 text-center">
          <div class="block-grid-5 md-block-grid-4 sm-block-grid-3">

            <?php foreach( $cats as $cat ) :
              $imgBlue = wp_get_attachment_image_src(get_field('category_icon_blue', $cat), 'category_icon');?>

              <div class="col stretch text-center">
                <div>
                  <img src="<?php echo $imgBlue[0]; ?>" alt="<?php echo $cat->name; ?> icon blue">
                </div>

                <h4><?php echo $cat->name; ?></h4>
              </div>

            <?php endforeach; ?>

          </div>
        </div>

      <?php endif; ?>

      <div class="col-10 sm-col-11 col-centered">
        <?php echo $content; ?>
      </div>

    </div>
  </div>
</section>
