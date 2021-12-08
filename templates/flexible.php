<?php
/*
 * Template Name: Flexible Template
 *
 * Template used on various pages
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.2.0
 */

$navigation_toggle = get_field('flexible_navigation_toggle') ? get_field('flexible_navigation_toggle') : false;
$heroType = get_field('flexible_hero_type'); 

if(!$navigation_toggle){
  get_header();
} else {
  get_header('landing');  
}

if( $heroType ) : 

  get_template_part('parts/global/hero-2col-video');

else : 

  get_template_part('parts/global/hero-b');

endif; 

get_template_part('parts/global/page-sections');

get_footer(); ?>
