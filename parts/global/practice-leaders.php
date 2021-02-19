<?php
/**
 * Practice leaders (Staff grid CPT output)
 *
 * Template part used on the various templates/views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.2.0
 */

// Text/Image Split Custom Fields
$staffToggle = get_sub_field('show_practice_leaders');

 // Optional full-width content
      if( $staffToggle ) : ?>

<section class="text-image-split">
  <div class="container">
    <div class="row row--justify-content-center">
	<div class="col-10 col-centered">
	<h1 class="text-center">National Practice Leaders</h1>
	
	<p class="text-center">growth10 Practice Leaders create safe, confidential environments. They care about their members. Their members grow faster as people and professionals. The impact is lasting and they love the work.</p>
	    </div>
	<?php
	
	// WP Query arguments
  $args = array(
    'posts_per_page' => -1,
    'post_type'      => 'f1_staffgrid_cpt',
    'meta_key' 		 => 'last_name',
    'orderby'		 => 'menu_order',
    //'post__in' 	 => array( 2, 5, 12, 14, 20 );,  // Use ID's in an array for specific ordering.
    'order' 		 => 'ASC'
  );

  // WP Query
  $staff = new WP_Query($args); ?>
		<div class="row row--justify-content-start staff">
			<?php if( $staff->have_posts() ) : while( $staff->have_posts() ) : $staff->the_post(); ?>
			
			<div class="col-2 sm-col-12 staff--container text-center">
				<?php if( has_post_thumbnail() ) : ?>
				<div class="staff--container-img" 
					style="background: url(<?php echo featuredURL('medium'); ?>) center/cover no-repeat;" >	
					</div>
				<?php endif; ?>
				
				<h4><?php the_title(); ?> <a href="<?php the_field('linkedin_url'); ?>"target="_blank"><i class="fab fa-linkedin"></i></a></h4>
				<p><?php the_field('title'); ?></p>
			</div>
			<?php endwhile; endif; ?>
		</div>
    </div>
  </div>
</section>
<?php endif; 
	wp_reset_postdata();
?>