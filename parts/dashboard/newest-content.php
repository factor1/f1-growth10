<?php
/*
 * Newest Content
 *
 * Template part used on the dashboard template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.3.0
 */

$cats = get_categories( array('exclude' => 48) );

$user = get_current_user_id();
$showEngage = wc_memberships_is_user_active_member($user, 'engage-members');
$sectionClass = !$showEngage ? ' active' : '';

// Newest Content Custom Fields
$intro = get_field('dashboard_newest_content_intro');
$showLevel = false; ?>

<section class="dashboard-content<?php echo $sectionClass; ?>" id="content-new">

  <?php echo $intro;

  foreach( $cats as $cat ) :

    // WP Query parameters
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 2,
      'category_name' => $cat->slug
    );

    // WP Query
    $articles = new WP_Query($args);

    include( locate_template('components/dashboard-grid.php', false, false) );

  endforeach; ?>

</section>
