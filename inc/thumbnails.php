<?php

/*-----------------------------------------------------------------------------
  Get featured image as url
-----------------------------------------------------------------------------*/
function featuredURL($size = 'full'){
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
  $url = $thumb['0'];
  return $url;
}

/*-----------------------------------------------------------------------------
  Adds thumbnail support and additional thumbnail sizes
-----------------------------------------------------------------------------*/

if( function_exists('prelude_features') ){
  // Use add_image_size below to add additional thumbnail sizes
  add_image_size( 'landing', 1920, 1200, array('center', 'center') );
  add_image_size( 'landing_logo', 680, 330, false );
}
