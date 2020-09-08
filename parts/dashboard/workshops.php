<?php
/*
 * Workshops
 *
 * Template part used on the dashboard template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.3.0
 */

// Workshops Custom Fields
$intro = get_field('dashboard_workshops_intro');
$btn = get_field('dashboard_workshops_button');

// WP Query arguments
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 2,
  'category_name' => 'live-workshops'
);

// WP Query
$workshops = new WP_Query($args);

if( $workshops->have_posts() ) : ?>

  <section class="dashboard-workshops">

    <?php echo $intro;

    while( $workshops->have_posts() ) : $workshops->the_post();

      get_template_part('components/workshop');

    endwhile;

    // Optional button
    if( $btn ) : ?>

      <a href="<?php echo esc_url($btn['url']); ?>" class="button button--teal" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
        <?php echo $btn['title']; ?>
      </a>

    <?php endif; ?>

  </section>

<?php endif; wp_reset_postdata(); ?>
