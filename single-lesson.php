<?php
/**
 * Lesson CPT Archive
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.5.0
 */

get_header(); 

if( have_posts() ) : while( have_posts() ) : the_post();

  // Get course information
  $course = get_the_terms(get_the_ID(), 'course')[0];

  // For mark-as-read functionality 
  $id = get_the_ID();
  $currentUser = get_current_user_id();
  $userHasRead = get_user_meta($currentUser, 'read_post_' . $id, true); 
  
  // Next post link 
  $next = get_field('next_lesson');
  $nextText = $userHasRead ? 'Next Lesson' : 'Mark as Complete &amp; Next Lesson'; 
  
  function toggle_read() {
    // $id = get_the_ID();
    // $user = get_current_user_id();
    // $bool = $_POST['is_read'] == "true" ? true : false;
    // if( !empty( $_POST['mark_as_read'] ) ) {
      update_user_meta($user, 'read_post_' . get_the_ID(), true);
    // }
    if( !empty($_POST['next_lesson']) ) {
      wp_redirect( $_POST['next_lesson'] );
      exit;
    }
  } ?>

  <section class="lesson-content-section">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <h2><?php echo $course->name; ?></h2>

          <p><?php echo $course->description; ?></p>

        </div>

        <div class="col-4">

          <?php get_sidebar(); ?>

        </div>

        <div class="col-8">

          <h2><?php the_title(); ?></h2>

          <?php the_content(); ?>

          <?php // TODO: Link action to next post ?>
          <form name="toggle_read" id="toggle_read" method="POST" action="<?php toggle_read(); ?>">
            <input type="hidden" name="is_read" value="true" />
            <input type="hidden" name="next_lesson" value="<?php echo get_permalink($next); ?>" />
            <button type="submit" name="submit" class="button button--blue"><?php echo $nextText; ?></button>
          </form>

          <!-- <button class="button button--blue" onclick="<?php //mark_as_read($id, $currentUser, true); ?>">Mark Complete &amp; Next Lesson</button> -->

          <!-- <a href="<?php //echo get_permalink($next); ?>" class="button button--blue" onclick="<?php //toggle_read(true); //update_user_meta($currentUser, 'read_post_' . $id, true); ?>"><?php echo $nextText; ?></a> -->

          <?php //update_user_meta($currentUser, 'read_post_' . $id, true);
          
          
          // not quite right here
          //echo get_next_post_link('%link', 'Mark Complete &amp; Next Lesson', true, '', 'course'); ?>
            
        </div>
      </div>
    </div>
  </section>

<?php endwhile; endif; 

get_footer(); ?>