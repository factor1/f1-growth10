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

get_header();

get_template_part('parts/global/hero');

get_template_part('parts/dashboard/welcome'); ?>

<section class="dashboard-main">
  <div class="container">
    <div class="row">
      <div class="col-6">

        <?php get_template_part('parts/dashboard/weekly-message'); ?>

        <?php get_template_part('parts/dashboard/workshops'); ?>

      </div>

      <div class="col-6">
        <div class="dashboard-main__content">

          <?php get_template_part('parts/dashboard/content-tabs'); ?>

          <!-- TODO: Conditional logic -->
          <?php get_template_part('parts/dashboard/g10-scale-content'); ?>

          <?php get_template_part('parts/dashboard/newest-content'); ?>

        </div>
      </div>
    </div>
  </div>
</section>

<?php /* get_template_part('parts/global/popular-posts');

get_template_part('parts/global/popular-tools');

get_template_part('parts/global/deep-dives'); ?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<hr>
			<h3>Have a content suggestion?</h3>
			<p>We all love great content. Have an idea you’d like to share or want to see something added, let us know!</p>
			<?php gravity_form( 4, false, false, false, '', false ); ?>
		</div>
	</div>
</div> */ ?>

<?php get_footer(); ?>
