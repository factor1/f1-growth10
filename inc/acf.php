<?php
/*
 * ACF Options
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(
    array(
      'page_title' => 'Mega Menu',
      'position' => 4,
      'icon_url' => 'dashicons-menu-alt3'
    )
  );

  acf_add_options_page(
    array(
      'page_title' => 'Site Options',
      'position' => 4
    )
  );
} ?>
