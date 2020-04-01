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

get_template_part('parts/home/hero');

get_template_part('parts/home/3-column-section');

get_template_part('parts/home/text-split');

get_template_part('parts/home/category-grid');

get_template_part('parts/home/text-image-split');

get_template_part('parts/home/testimonials');

get_footer(); ?>
