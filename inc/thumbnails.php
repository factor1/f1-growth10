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
  add_image_size( 'category_icon', 200, 320, false );
  add_image_size( 'post_grid', 800, 480, array('center', 'center') );
  add_image_size( 'post_featured', 1500, 775, array('center', 'center') );
  add_image_size( 'resource', 600, 600, false );
  add_image_size( 'home_hero', 1920, 805, array('center', 'center') );
  add_image_size( 'home_split', 770, 460, false );
  add_image_size( 'text_image_split', 900, 810, false );
  add_image_size( 'tab_icon', 300, 300, false );
  add_image_size( 'tab_image', 1050, 750, array('center', 'center') );
  add_image_size( 'dashboard_grid', 750, 300, true );
  add_image_size( 'logo_slide', 400, 400, false );
}
