<?php
/**
 * Popular Posts (Index)
 *
 * Template part used on index.php
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

$cat = get_queried_object();

// WP Query arguments
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 4,
  'category__in' => $cat->term_id,
  'tag' => 'popular',
);

// WP Query
$popular = new WP_Query($args);

if( $popular->have_posts() ) : ?>

  <section class="popular-posts">
    <div class="container">
      <div class="row">
        <div class="col-12 sm-text-center">
          <h2>Popular Ideas</h2>
        </div>

        <?php while( $popular->have_posts() ) : $popular->the_post();
          // Post Fields
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

              <h5>By <?php the_author(); ?></h5>
            </a>
          </div>

        <?php endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; wp_reset_postdata(); ?>
