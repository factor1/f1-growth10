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

get_template_part('parts/index/popular-tools');

get_template_part('parts/index/deep-dives');

get_template_part('parts/index/post-grid');

get_footer();
