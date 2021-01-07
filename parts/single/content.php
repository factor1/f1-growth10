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
			
				<?php if( ( !wc_memberships_is_post_content_restricted($page_id) ) || ( wc_memberships_is_post_content_restricted($page_id) && f1_check_membership(get_current_user_id()) ) || has_tag( 'Promotional' )) :?>

						<?php // Resource view
							if( $isResource ) :

								get_template_part('parts/single/resource-content');

							// Regular blog view (tabbed)
							else :

								get_template_part('parts/single/tabbed-content');
								echo do_shortcode('[yasr_visitor_votes size="large" show_average="no"]');
								echo "<style> .yasr-visitor-votes-after-stars-class {display: none;}</style>";

							endif; ?>
						
					<?php else : ?>
					
					<h3>You must be logged in to view this content</h3>
					<h2><a href="<?php echo bloginfo('url'); ?>/login">Login here</a></h2>
					<h2>Not a member yet? <a href="<?php echo bloginfo('url'); ?>/">Join now</a></h2>
					
					<?php endif; ?>

      </div>
    </div>
  </div>
</section>

<section class="promo-content">
<div class="container">
    <div class="row">
      <div class="col-8 offset-3">
	      <?php if ( !is_user_logged_in() and has_tag( 'Promotional' ) ) { ?>
			<div class="promotionalCTA">
				<p>This is complimentary content from the growth10 on-demand library, which features hundreds of game-changing ideas (all in 10-minutes or less) to help you fast-track your business growth. </p>
				
				<a href="https://growth10.com/cart/?add-to-cart=925&variation_id=927&ref=PromotionalPost" class="button button--teal">
					START MY FREE 14-DAY TRIAL<br> 
					<span>No Credit Card Required</span>
				</a>
			</div>
			<?php }	?>
      </div>
    </div>
</div>
</section>