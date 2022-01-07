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

  // Get course & lesson info
  $course = get_the_terms(get_the_ID(), 'course')[0];
  $id = get_the_ID();

  // User info for mark-as-read functionality 
  $currentUser = get_current_user_id();
  $userHasRead = get_user_meta($currentUser, 'read_post_' . $id, true); 
  
  // Next lesson link 
  $nextField = get_field('next_lesson');
  $next = $nextField ? $nextField : get_the_permalink();
  
  // if user hasn't read and there's a next lesson
  if( !$userHasRead && $nextField ) :
    $nextText = 'Mark as Complete &amp; Next Lesson';
  // if user has read and there's a next lesson 
  elseif( $userHasRead && $nextField ) : 
    $nextText = 'Next Lesson';
  // if user hasn't read and there's no next lesson 
  elseif( !$userHasRead && !$nextField ) : 
    $nextText = 'Finish Course';
  // if user has read and there's no next lesson 
  elseif( $userHasRead && !$nextField ) : 
    $nextText = 'Finish Course';
  else : 
    $nextText = 'Next Lesson';
  endif; ?>

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

          <?php the_content(); 
          
          // Form for processing mark as read ?>
          <form name="toggle_read" id="toggle_read" method="POST" action="">
            <?php if( $userHasRead ) : ?>
              <div>
                <label for="mark_incomplete">
                  <input type="checkbox" name="mark_incomplete" id="mark_incomplete" />
                  <span>Mark Lesson Incomplete?</span>
                </label>
              </div>
            <?php endif; ?>

            <input type="hidden" name="is_read" value="true" />
            <input type="hidden" name="next_lesson" value="<?php echo get_permalink($next); ?>" />
            <button type="submit" name="submit" class="button button--blue"><?php echo $nextText; ?></button>
            <?php wp_nonce_field( 'toggle_read', 'is_read_nonce'); ?>
          </form>
            
        </div>
      </div>
    </div>
  </section>

<?php endwhile; endif; 

get_footer(); ?>