<?php
/**
 * Assessment (Index)
 *
 * Template part to be used for the User Profile Assessment
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */
?>

<?php acf_form_head(); ?> <!-- NEEDED FOR ACF FORM -->
  <!-- GETTING CURRENT USER ID -->
  <?php
    $current_user = wp_get_current_user();
    $current_user_id = $current_user->ID;
    $current_user_acf = 'user_' . $current_user_id;
  ?>

  <!-- GETTING FIELDS FROM USER PROFILE -->
  <h3>ACF Profile Fields</h3>
  <p><?php the_field('sales', $current_user_acf); ?></p>
  <p><?php the_field('marketing', $current_user_acf); ?></p>
  <p><?php the_field('money', $current_user_acf); ?></p>
  <p><?php the_field('people', $current_user_acf); ?></p>

  <!-- SETTING UP FORM TO SET/UPDATE ASSESSMENT LEVELS -->
  <h3 style="margin:0;">Update Assessment</h3>
  <?php
    $options = array(
      'post_id' => $current_user_acf,
      'field_groups' => array(3205), /* CHANGE INTEGER TO ACF FIELD GROUP ID */
      'form' => true,
      'html_before_fields' => '',
      'html_after_fields' => '',
      'submit_value' => 'Update Assessment'
    );
    acf_form( $options );
  ?>

  <!--
    BEGINNING QUERY WRITING FOR GRABBING POSTS COORELATED TO USER'S SET LEVEL IN EACH CATEGORY
    NEEDS TO BECOME DYNAMIC AS TERMS ARE HARDCODED TO IDS OF CATEGORY AND LEVEL
  -->
  <h3 style="margin:0;">Marketing Posts</h3>
  <?php
    $args_marketing = array(
      'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'category',
          'field' => 'term_id',
          'terms' => 23, // MARKETING
        ),
        array(
          'taxonomy' => 'post-levels',
          'field' => 'term_id',
          'terms' => 19, // INTEMEDIATE
        )
      )
    );
    $marketing_query = new WP_Query( $args_marketing );
    if ( $marketing_query->have_posts() ) : while ( $marketing_query->have_posts() ) : $marketing_query->the_post();
  ?>
      <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
  <?php endwhile; endif;  ?>
