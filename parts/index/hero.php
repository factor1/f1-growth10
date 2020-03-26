<?php
/**
 * Hero (Index)
 *
 * Template part used on index.php
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

$cat = get_queried_object();
$imgWhite = wp_get_attachment_image_src(get_field('category_icon_white', $cat), 'category_icon'); ?>

<section class="hero--blog">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>
          <img src="<?php echo $imgWhite[0]; ?>" alt="<?php echo $cat->name; ?> icon white">

          <?php echo $cat->name; ?>
        </h1>

        <form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <i class="far fa-search"></i> <input type="text" class="field" name="s" id="s" placeholder="Search">
          <input type="hidden" name="post_type" value="post" />
          <input type="hidden" name="cat" value="<?php echo $cat->slug; ?>" />
          <input type="submit" id="searchsubmit" value="Submit" />
        </form>
      </div>
    </div>
  </div>
</section>
