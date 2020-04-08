<?php
/**
 * The default blog / index template.
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

// Check if search results
$isSearch = is_search();

get_header();

get_template_part('parts/global/hero');

if( !$isSearch ) :
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  if( 1 == $paged ) :
    
    get_template_part('parts/global/popular-posts');

    get_template_part('parts/global/popular-tools');

    get_template_part('parts/global/deep-dives');
    
  endif;

endif;

get_template_part('parts/index/post-grid');

get_footer();
