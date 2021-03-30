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

if(!$navigation_toggle){
  get_header();
} else {
  get_header('landing');  
}

get_template_part('parts/global/hero-b');

get_template_part('parts/global/page-sections');

get_footer(); ?>
