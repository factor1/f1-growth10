<?php
/**
 * The single f1 staffgrid cpt template.
 *
 * Used when a single staff member post is queried.
 * 
 */

get_header();

get_template_part('parts/single-staff/hero');

get_template_part('parts/single-staff/staff-profile');

get_template_part('parts/single-staff/page-sections');

get_template_part('parts/single-staff/CTA');

if( have_posts() ) : while( have_posts() ) : the_post(); ?>


<?php endwhile; endif;

get_footer(); ?>