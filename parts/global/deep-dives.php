<?php
/**
 * Deep Dives (Index)
 *
 * Template part used on index.php and other views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

// Check if dashboard template
$isDash = is_page_template('templates/dashboard.php');

// Check if category
$isCat = is_category();

$cat = get_queried_object();

// Fields
$title = $isCat ? 'Popular Deep Dives' : 'Newest Deep Dives';

// WP Query arguments
if( $isCat ) :
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'category__in' => $cat->term_id,
    'tag' => 'popular',
    'tax_query' => array(
      array(
        'taxonomy' => 'post-format',
        'field' => 'slug',
        'terms' => 'deep-dives'
      )
    )
  );
else :
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'tax_query' => array(
      array(
        'taxonomy' => 'post-format',
        'field' => 'slug',
        'terms' => 'deep-dives'
      )
    )
  );
endif;

// WP Query
$dives = new WP_Query($args);

if( $dives->have_posts() ) : ?>

  <section class="popular-posts">
    <div class="container">
      <div class="row row--justify-content-start">
        <div class="col-12 sm-text-center">
          <h3><?php echo $title; ?></h3>
        </div>

        <?php while( $dives->have_posts() ) : $dives->the_post();
          // Post Fields
          if( $isDash ) :
            $cat = get_the_category()[0]; // get first category for image fallback
          endif;
          $image = featuredURL('post_grid');
          $iconWhite = wp_get_attachment_image_src(get_field('category_icon_white', $cat), 'category_icon');
          $img = $image ? $image : $iconWhite[0];
          $size = $image ? 'cover' : 'auto 50%';
          $video = get_field('video_link');
          $audio = get_field('audio_link');
          $worksheet = get_field('worksheet'); ?>

          <div class="col-3 md-col-6 sm-col-6">
            <a href="<?php the_permalink(); ?>">
              <div class="img<?php echo $image ? ' has-featured' : ''; ?>" style="background: #0356a4 url('<?php echo $img; ?>') center/<?php echo $size; ?> no-repeat">
                <div class="formats text-right">

                  <?php if( $worksheet ) : ?>
                    <i class="far fa-file-alt"></i>
                  <?php endif;

                  if( $video ) : ?>
                    <i class="fab fa-youtube"></i>
                  <?php endif;

                  if( $audio ) : ?>
                    <i class="far fa-microphone-alt"></i>
                  <?php endif; ?>

                </div>
              </div>

              <h4><?php the_title(); ?></h4>
            </a>
          </div>

        <?php endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; wp_reset_postdata(); ?>
