<?php
/**
 * The default blog / index template.
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

get_header();

get_template_part('parts/index/hero');

get_template_part('parts/index/popular-posts');

// if ( have_posts() ) : while ( have_posts() ) : the_post();
//
//   the_content();
//
// endwhile;
//     the_posts_pagination( array('mid_size' => 2) );
// else :
//   echo '<h2>Sorry, no posts have been found</h2>';
// endif;

get_footer();
