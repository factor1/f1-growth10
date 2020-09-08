<?php // CSS & JavaScript Enqueues

/**
 * Defer jQuery Parsing using the HTML5 defer property
 */

if (!(is_admin() )) {
  function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    // return "$url' defer ";
    return "$url' defer onload='";
  }
  add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}

/**
 * Link to all theme CSS files.
 */
function prelude_theme_scripts() {
  // Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&family=Montserrat:wght@400;700&family=Open+Sans:wght@400;700&display=swap', array(), THEME_VERSION );
  wp_enqueue_style('typekit', 'https://use.typekit.net/hww8zis.css', array(), THEME_VERSION );
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/c3fa898253.js', array(), THEME_VERSION );

  // CSS
  wp_enqueue_style('prelude-css', get_template_directory_uri() . '/dist/theme.css', array(), THEME_VERSION );

  // JS
  wp_enqueue_script('prelude-js', get_template_directory_uri() . '/dist/theme.js', array('jquery'), THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'prelude_theme_scripts' );
