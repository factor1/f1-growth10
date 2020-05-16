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

get_template_part('parts/home/2-column-video-hero');

get_template_part('parts/home/2-column-video-3_rows');

get_template_part('parts/home/2-column-call-to-action');


get_template_part('parts/home/2-column-list-modal');

get_template_part('parts/home/full-width-image-text-split');

get_template_part('parts/home/full-width-text-image-split'); 


get_template_part('parts/home/testimonials');

get_template_part('parts/home/plans');

get_footer(); ?>
