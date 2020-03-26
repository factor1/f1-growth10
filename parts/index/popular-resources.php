<?php
/**
 * Popular Resources (Index)
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
  'posts_per_page' => 6,
  'category__in' => $cat->term_id,
  'tag' => 'popular',
  'tax_query' => array(
    array(
      'taxonomy' => 'resource',
      'field' => 'slug',
      'terms' => ['book', 'link']
    )
  )
);

// WP Query
$resources = new WP_Query($args);

if( $resources->have_posts() ) : ?>

  <section class="popular-resources">
    <div class="container">
      <div class="row row--justify-content-start">
        <div class="col-12 sm-text-center">
          <h2>Popular Resources</h2>
        </div>

        <?php while( $resources->have_posts() ) : $resources->the_post();
          $type = get_the_terms($post->ID, 'resource'); ?>

          <div class="col-4 sm-col-6">
            <a href="<?php the_permalink(); ?>">
              <div>
                <i class="fas fa-<?php echo $type[0]->slug; ?>"></i>
              </div>

              <div>
                <h4><?php the_title(); ?></h4>

                <h5>By <?php the_author(); ?></h5>
              </div>
            </a>
          </div>

        <?php endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; wp_reset_postdata(); ?>
