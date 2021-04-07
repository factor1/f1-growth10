<?php
/*
 * Template Name: Home
 *
 * Template used on the home page
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

get_header();

get_template_part('parts/home/hero-2col-video');

get_template_part('parts/home/2-column-video-3_rows');

get_template_part('parts/global/page-sections');

get_template_part('parts/home/2-column-call-to-action');

get_template_part('parts/global/2-col-banner');

get_template_part('parts/home/2-column-list-modal');

//get_template_part('parts/home/aboutus');

//get_template_part('parts/home/authorsplit');

// get_template_part('parts/home/testimonials');

//get_template_part('parts/global/testimonials');

get_template_part('parts/home/plans');

get_footer(); ?>
