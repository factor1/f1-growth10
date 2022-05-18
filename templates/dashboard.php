<?php
/*
 * Template Name: Dashboard
 *
 * Template used on the dashboard page
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

$user = get_current_user_id();
$showEngage = wc_memberships_is_user_active_member($user, 'engage-members');

get_header();

get_template_part('parts/global/hero');

get_template_part('parts/dashboard/welcome');

get_template_part('parts/dashboard/grid'); 

get_template_part('parts/dashboard/partners-grid'); ?>

<?php /* <section class="dashboard-main">
  <div class="container">
    <div class="row">
      <div class="col-6">

        <?php get_template_part('parts/dashboard/weekly-message'); ?>

        <?php get_template_part('parts/dashboard/workshops'); ?>

      </div>

      <div class="col-6">
        <div class="dashboard-main__content">

          <?php // Engage plan content
          //if( $showEngage ) :

            get_template_part('parts/dashboard/content-tabs');

            get_template_part('parts/dashboard/g10-scale-content');

          //endif;

          // All content
          get_template_part('parts/dashboard/newest-content'); ?>

        </div>
      </div>
    </div>
  </div>
</section> */ ?>

<?php get_footer(); ?>
