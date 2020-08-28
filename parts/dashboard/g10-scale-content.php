<?php
/*
 * G10 Scale Content
 *
 * Template part used on the dashboard template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.3.0
 */

$cats = get_categories( array('exclude' => [48, 1]) );
$user = get_current_user_id();

// Newest Content Custom Fields
$intro = get_field('dashboard_g10_scale_intro');
$content = get_field('dashboard_g10_scale_content');
$btn = get_field('dashboard_g10_scale_button');
$showLevel = true; ?>

<section class="dashboard-content active" id="content-scale">

  <?php echo $intro;

  foreach( $cats as $cat ) :

    $field = $cat->slug;
    $level = get_field($field, 'user_' . $user);

    // WP Query parameters
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 2,
      'category_name' => $cat->slug,
      'tax_query' => array(
        array(
          'taxonomy' => 'post-levels',
          'field' => 'slug',
          'terms' => strtolower($level)
        )
      )
    );

    // WP Query
    $articles = new WP_Query($args);

    include( locate_template('components/dashboard-grid.php', false, false) );

  endforeach; ?>

  <div class="assessment">
    <div class="assessment__icon">
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pencil.svg" alt="Assessment icon">
      </div>
    </div>

    <div class="assessment__content">
      <?php echo $content;

      // Optional button
      if( $btn ) : ?>

        <a href="<?php echo esc_url($btn['url']); ?>" class="button button--teal" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
          <?php echo $btn['title']; ?>
        </a>

      <?php endif; ?>

    </div>
  </div>
</section>
