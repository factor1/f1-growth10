<?php
/**
 * Template Name: Assessment
 *
 * Template part to be used for the User Profile Assessment
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

// Needed for ACF form, must be before any html
acf_form_head();

get_header(); ?>

<section class="default-content">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <?php if( have_posts() ) : while( have_posts() ) : the_post();

          the_content();

        endwhile; endif; ?>

        <?php // GETTING CURRENT USER ID
        $current_user = wp_get_current_user();
        $current_user_id = $current_user->ID;
        $current_user_acf = 'user_' . $current_user_id;

        // SETTING UP FORM TO SET/UPDATE ASSESSMENT LEVELS
        $options = array(
          'post_id' => $current_user_acf,
          'field_groups' => array(3671), /* CHANGE INTEGER TO ACF FIELD GROUP ID */
          'form' => true,
          'html_before_fields' => '',
          'html_after_fields' => '',
          'submit_value' => 'Update Assessment',
          'updated_message' => '<h3 style="color: #2ab2b0">Your changes have been saved!</h3>'
        );
        acf_form( $options ); ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
