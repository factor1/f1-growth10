<?php
/**
 * Hero (Global)
 *
 * Template part used on index.php and other views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

// Check if dashboard
$isDash = is_page_template('templates/dashboard.php');

// Check if category
$isCat = is_category();

if( $isCat ) :
  $cat = get_queried_object();
  $imgWhite = wp_get_attachment_image_src(get_field('category_icon_white', $cat), 'category_icon');
endif;

// Fields
$title = $isCat ? $cat->name : get_field('hero_headline'); ?>

<section class="hero--global">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>
          <?php if( $isCat ) : ?>
            <img src="<?php echo $imgWhite[0]; ?>" alt="<?php echo $cat->name; ?> icon white">
          <?php endif; ?>

          <?php echo $title; ?>
        </h1>

        <form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <i class="far fa-search"></i> <input type="text" class="field" name="s" id="s" placeholder="Search">
          <input type="hidden" name="post_type" value="post" />

          <?php if( $isCat ) : ?>
            <input type="hidden" name="cat" value="<?php echo $cat->slug; ?>" />
          <?php endif; ?>

          <input type="submit" id="searchsubmit" value="Submit" />
        </form>
      </div>
    </div>
  </div>
</section>
