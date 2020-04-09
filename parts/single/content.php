<?php
/**
 * Content (Single)
 *
 * Template part used on single.php
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

// Post Custom Fields
$isResource = has_term(['deep-dives', 'tools'], 'post-format'); ?>

<section class="post-content">
  <div class="container">
    <div class="row">
      <div class="col-8 offset-3">
	      
	   <?php if( is_user_logged_in() ) :?>

	        <?php // Resource view
	        if( $isResource ) :
	
	          get_template_part('parts/single/resource-content');
	
	        // Regular blog view (tabbed)
	        else :
	
	          get_template_part('parts/single/tabbed-content');
	
	        endif; ?>
	        
	     <?php else : ?>
	     
	     <h3>You must be logged in to view this content</h3>
	     <h2><a href="https://growth10.com/login">Login here</a></h2>
	     <h2>Not a member yet? <a href="https://growth10.com/">Join now</a></h2>
	     
	     <?php endif; ?>

      </div>
    </div>
  </div>
</section>
