<?php
/**
 * Post Grid (Index)
 *
 * Template part used on index.php
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

// Check if search results
$isSearch = is_search();
$term = $isSearch ? $wp_query->query_vars : '';

// Check if author view
$isAuthor = is_author();

// Check if category
$isCat = is_category();

$cat = get_queried_object();

$title = $isSearch ? 'Search results for "' . $term['s'] . '"' : ($isAuthor ? 'All Articles by ' . get_the_author() : 'All ' . $cat->name . ' Content');
$subtitle = '';

if( $isCat ) :
  $level = !empty( get_query_var('level') ) ? get_query_var('level') : false;

  if( $level ) :
    $subtitle = '<p><img src="' . get_template_directory_uri() . '/assets/img/logo-g10.svg" alt="G10 logo">plan | ' . $level . '</p>';
  endif;
endif;

if( have_posts() ) : ?>

  <section class="post-grid">
    <div class="container">
      <div class="row">

        <?php // Author bio
        if( $isAuthor ) : ?>

          <div class="col-12">

            <?php get_template_part('parts/global/author'); ?>

          </div>

        <?php endif; ?>

        <?php /* <div class="col-12 sm-text-center">
          <h3><?php echo $title; ?></h3>

          <?php echo $subtitle; ?>
        </div> */ ?>

        <?php while( have_posts() ) : the_post(); ?>

          <div class="col-6 stretch">

            <?php get_template_part('components/post-block'); ?>

          </div>

        <?php endwhile; ?>

        <div class="col-12 text-center">
          <?php the_posts_pagination( array('mid_size' => 2) ); ?>
        </div>

      </div>
    </div>
  </section>

<?php else : ?>

  <section class="post-grid">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h5>Sorry, no posts have been found.</h5>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
