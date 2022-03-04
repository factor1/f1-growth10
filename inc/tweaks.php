<?php
  /*-----------------------------------------------------------------------------
    Custom Theme Tweaks and Features
  -----------------------------------------------------------------------------*/
  if ( !function_exists( 'prelude_features' ) ) {

    // Register Theme Features
    function prelude_features() {
      // Add theme support for Automatic Feed Links
      add_theme_support( 'automatic-feed-links' );

      // Add theme support for Post Formats
      add_theme_support('post-formats', array('status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside') );

      // Add theme support for Featured Images
      add_theme_support( 'post-thumbnails' );

      // Add theme support for HTML5 Semantic Markup
      add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );

      // Add theme support for document Title tag
      add_theme_support( 'title-tag' );

      // Clean up the default WordPress head section
      remove_action( 'wp_head', 'rsd_link' );
      remove_action( 'wp_head', 'wlwmanifest_link' );
      remove_action( 'wp_head', 'wp_generator' );
      remove_action( 'wp_head', 'start_post_rel_link' );
      remove_action( 'wp_head', 'index_rel_link' );
      remove_action( 'wp_head', 'adjacent_posts_rel_link' );
    }
    add_action( 'after_setup_theme', 'prelude_features' );
  }

  // Set the maximum content width for the theme
  function prelude_content_width() {
    $GLOBALS[ 'content_width' ] = apply_filters( 'prelude_content_width', 1200 );
  }
  add_action( 'after_setup_theme', 'prelude_content_width', 0 );

  // Add page excerpts
  function prelude_page_excerpt() {
    add_post_type_support( 'page', array('excerpt') );
  }
  add_action( 'init', 'prelude_page_excerpt' );

  // Customize the default read more link
  function prelude_continue_reading_link() {
    return ' <a href="' . get_permalink() . '">' .
     __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'theme-slug' ) .
     '</a>';
  }

  // Customize the default ellipsis (...)
  function prelude_auto_excerpt_more( $more ) {
    return '&hellip;' . prelude_continue_reading_link();
  }
  add_filter( 'excerpt_more', 'prelude_auto_excerpt_more' );

  // Remove the default gallery styling
  function prelude_remove_gallery_css( $css ) {
    return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
  }
  add_filter( 'gallery_style', 'prelude_remove_gallery_css' );

  // Customize which dashboard widgets show
  function prelude_remove_dashboard_boxes() {
    remove_meta_box('dashboard_right_now', 'dashboard', 'core' ); // Right Now Overview Box
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'core' ); // Incoming Links Box
    remove_meta_box('dashboard_quick_press', 'dashboard', 'core' ); // Quick Press Box
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'core' ); // Plugins Box
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core' ); // Recent Drafts Box
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'core' ); // Recent Comments
    remove_meta_box('dashboard_primary', 'dashboard', 'core' ); // WordPress Development Blog
    remove_meta_box('dashboard_secondary', 'dashboard', 'core' ); // Other WordPress News
  }
  add_action( 'admin_menu', 'prelude_remove_dashboard_boxes' );

  // Remove meta boxes from default posts screen
  function prelude_remove_default_post_metaboxes() {
    remove_meta_box( 'postcustom', 'post', 'normal' ); // Custom Fields Metabox
    //remove_meta_box( 'postexcerpt', 'post', 'normal' ); // Excerpt Metabox
    //remove_meta_box( 'commentstatusdiv', 'post', 'normal' ); // Comments Metabox
    remove_meta_box( 'trackbacksdiv', 'post', 'normal' ); // Talkback Metabox
    //remove_meta_box( 'authordiv', 'post', 'normal' ); // Author Metabox
  }
  add_action( 'admin_menu', 'prelude_remove_default_post_metaboxes' );

  // Remove meta boxes from default pages screen
  function prelude_remove_default_page_metaboxes() {
    remove_meta_box( 'postcustom', 'page', 'normal' ); // Custom Fields Metabox
    //remove_meta_box('commentstatusdiv', 'page', 'normal' ); // Discussion Metabox
    remove_meta_box( 'authordiv', 'page', 'normal' ); // Author Metabox
  }
  add_action( 'admin_menu', 'prelude_remove_default_page_metaboxes' );

  // Stop automatically hyper-linking images to themselves
  $image_set = get_option( 'image_default_link_type' );

  if ( !$image_set == 'none' ) {
    update_option( 'image_default_link_type', 'none' );
  }

  // Customize the Yoast SEO columns
  add_filter( 'wpseo_use_page_analysis', '__return_false' );

  // Add touch detection class to body
  function be_body_classes( $classes ) {
    $classes[] = 'no-touch';
    return $classes;
  }
  add_filter( 'body_class', 'be_body_classes' );

  // Keep the WordPress Kitchen Sink Toolkit open for all users.
  function enable_more_buttons($buttons) {
    $buttons[] = 'fontselect';
    $buttons[] = 'fontsizeselect';
    $buttons[] = 'styleselect';
    $buttons[] = 'backcolor';
    $buttons[] = 'newdocument';
    $buttons[] = 'cut';
    $buttons[] = 'copy';
    $buttons[] = 'charmap';
    $buttons[] = 'hr';
    $buttons[] = 'visualaid';

    return $buttons;
  }
  add_filter("mce_buttons_3", "enable_more_buttons");

  // Add async defer to font awesome script
  function add_async_attribute($tag, $handle) {
    if ( 'font-awesome' !== $handle )
      return $tag;
    return str_replace( ' src', ' async="async" src', $tag );
  }
  add_filter('script_loader_tag', 'add_async_attribute', 10, 2);

  // Hide ACF from everyone except factor1admin
  $us = get_user_by('login', 'factor1admin');

  // If the current logged-in user is not us, hide ACF
  if(wp_get_current_user()->user_login !== $us->user_login) :
    add_filter('acf/settings/show_admin', '__return_false');
  endif;

  // Add custom classes to WYSIWYGs
  function custom_wysiwyg_options( $init_array ) {
    $style_formats = array(
      array(
        'title' => 'Landing Heading',
  			'block' => 'h1',
        'classes' => 'landing-heading',
  			'wrapper' => false,
      ),
      array(
        'title' => 'Landing Big Title',
  			'block' => 'h2',
        'classes' => 'landing-big-title',
  			'wrapper' => false,
      ),
      array(
        'title' => 'Landing Medium Title',
  			'block' => 'h3',
        'classes' => 'landing-medium-title',
  			'wrapper' => false,
      ),
      array(
        'title' => 'Landing Small Title',
  			'block' => 'h4',
        'classes' => 'landing-small-title',
  			'wrapper' => false,
      ),
      array(
        'title' => 'Preview Medium Title',
  			'block' => 'h4',
        'classes' => 'preview-medium-title',
  			'wrapper' => false,
      ),
      array(
        'title' => 'Preview Small Title',
  			'block' => 'h5',
        'classes' => 'preview-small-title',
  			'wrapper' => false,
      ),
      array(
        'title' => 'Checklist',
  			'selector' => 'ul',
        'classes' => 'checklist',
  			'wrapper' => true,
      ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats_merge'] = true;
    $init_array['style_formats'] = wp_json_encode( $style_formats );
    return $init_array;
  }
  add_filter( 'tiny_mce_before_init', 'custom_wysiwyg_options' );
  

  // Customize Wordpress Admin
  // add login logo
  function custom_loginlogo() {
  	echo '<style type="text/css">
      .login {
        background: #fff;
      }
      .login .message,
      .login #login_error {
        margin-top: 30px;
        border-color: #2cbdbe;
      }
      .login p,
      .login label {
        font-family: "Comfortaa", sans-serif;
      }
      .login p a {
        color: #464646 !important;
        transition: all .4s ease;
      }
      .login p a:hover {
        color: #2cbdbe !important;
      }
      .login input[type="text"],
      .login input[type="password"] {
        border: 1px solid transparent;
        border-radius: 0;
        background-color: #e5e5e5;
        font: 400 18px/1 $cursive;
        color: #464646;
        transition: all .4s ease;
        outline: none;
      }
      .login input[type="text"]:active,
      .login input[type="text"]:focus,
      .login input[type="password"]:active,
      .login input[type="password"]:focus,
      input[type=text]:focus,
      input[type=search]:focus,
      input[type=radio]:focus,
      input[type=tel]:focus,
      input[type=time]:focus,
      input[type=url]:focus,
      input[type=week]:focus,
      input[type=password]:focus,
      input[type=checkbox]:focus,
      input[type=color]:focus,
      input[type=date]:focus,
      input[type=datetime]:focus,
      input[type=datetime-local]:focus,
      input[type=email]:focus,
      input[type=month]:focus,
      input[type=number]:focus,
      select:focus,
      textarea:focus {
        border-color: #2ab2b0;
        box-shadow: none;
      }
      .login input[type="submit"] {
        padding: 9px 29px;
        border: 1px solid transparent;
        border-radius: 0;
        background-color: #2ab2b0;
        font: 400 18px/1 $cursive;
        color: #fff;
        transition: all .4s ease;
        outline: none;
        box-shadow: none;
        text-shadow: none;
      }
      .login input[type="submit"]:active,
      .login input[type="submit"]:focus,
      .login input[type="submit"]:hover {
        background-color: #0356a4;
      }
    	h1 a {
    		height: 100% !important;
    		width:100% !important;
    		background-image: url(' . get_template_directory_uri() . '/assets/img/logo-color.svg) !important;
    		background-postion-x: center !important;
    		background-size:contain !important;
    		margin-bottom:10px !important;
      }
    	h1 {
    		width: 320px !important;
    		Height: 120px !important
      }
  	</style>';
  }
  add_action('login_head', 'custom_loginlogo');

  // add custom footer text
  function modify_footer_admin () {
  	echo 'Created by <a href="https://factor1studios.com">factor1</a>. ';
  	echo 'Powered by<a href="https://WordPress.org">WordPress</a>.';
  }
  add_filter('admin_footer_text', 'modify_footer_admin');

  // Hide admin bar
  add_filter('show_admin_bar', '__return_false');

  // Show page templates in admin
  add_filter( 'manage_pages_columns', 'page_column_views' );
  add_action( 'manage_pages_custom_column', 'page_custom_column_views', 5, 2 );
  function page_column_views( $defaults )
  {
     $defaults['page-layout'] = __('Template');
     return $defaults;
  }
  function page_custom_column_views( $column_name, $id )
  {
     if ( $column_name === 'page-layout' ) {
         $set_template = get_post_meta( get_the_ID(), '_wp_page_template', true );
         if ( $set_template == 'default' ) {
             echo 'Default';
         }
         $templates = get_page_templates();
         ksort( $templates );
         foreach ( array_keys( $templates ) as $template ) :
             if ( $set_template == $templates[$template] ) echo $template;
         endforeach;
     }
  }

  // Change post formats to radio buttons
  function admin_js() { ?>
    <script type="text/javascript">
      jQuery(document).ready( function () {
        jQuery('form#post').find('#post-formatchecklist input').each(function() {
          var new_input = jQuery('<input type="radio" />'),
          attrLen = this.attributes.length;

          for (i = 0; i < attrLen; i++) {
            if (this.attributes[i].name != 'type') {
              new_input.attr(this.attributes[i].name.toLowerCase(), this.attributes[i].value);
            }
          }

          jQuery(this).replaceWith(new_input);
        });
      });
    </script>

  <?php }
  add_action('admin_head', 'admin_js');

  // Add custom colors to wysiwygs
  function custom_editor_colors($init) {
    $custom_colors = '
        "0356A4", "Blue",
        "2AB2B0", "Teal",
        "2CBDBE", "Lighter Teal",
        "707070", "Gray",
        "464646", "Dark Gray",
        "FFFFFF", "White",
        "E5E5E5", "Light Gray",
        "000000", "Black",
        "0F203E", "Blue Dark",
        "16709A", "Blue Light"
    ';

    // build colour grid default+custom colors
    $init['textcolor_map'] = '['.$custom_colors.']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 2;

    return $init;
  }
  add_filter('tiny_mce_before_init', 'custom_editor_colors');

  // Add editor styles from custom wysiwyg options
  function custom_editor_styles() {
    add_editor_style('/dist/editor-styles.css');
  }
  add_action('init', 'custom_editor_styles');

  // Register custom query vars
  function custom_query_vars($vars) {
    $vars[] = 'level';

    return $vars;
  }
  add_filter( 'query_vars', 'custom_query_vars' );

  // Adjust queries
  function adjust_queries( $query ) {
    if( !is_admin() && $query->is_main_query() && is_category() ) :

      if( !empty( get_query_var('level') ) ) :
        $tax_query = array(
          array(
            'taxonomy' => 'post-levels',
            'field' => 'slug',
            'terms' => get_query_var('level')
          )
        );

        $query->set( 'tax_query', $tax_query );
      endif;

    endif;
  }
  add_action( 'pre_get_posts', 'adjust_queries' );

  //user has active membership

  function f1_check_membership($user) {
    $user_check = wc_memberships_is_user_active_member($user->ID, 2229) || wc_memberships_is_user_active_member($user->ID, 931) || wc_memberships_is_user_active_member($user->ID, 220) || wc_memberships_is_user_active_member($user->ID, 219) ? true : false;
    return $user_check;
  }

  // Mark as read function
  function toggle_read() {
    $id = get_the_ID();
    $user = get_current_user_id();

    // Check if user is logged in 
    if( !is_user_logged_in() ) {
      return;
    }

    // Grab form data 
    if( empty($_POST['is_read'] ) ) {
      return;
    }

    // Verify nonce
    if ( !wp_verify_nonce( $_POST['is_read_nonce'], 'toggle_read' ) ) {
      return;
    }

    // Update meta
    // Check for mark incomplete first
    if( $_POST['mark_incomplete'] == true ) {
      $bool = false;
    } else {
      $bool = $_POST['is_read'] == 'true' ? true : false;
    }
    update_user_meta($user, 'read_post_' . get_the_ID(), $bool);

    // Redirect 
    $link = $_POST['next_lesson'] ? $_POST['next_lesson'] : get_the_permalink();

    wp_redirect($link);
    exit;
  }
  add_action('template_redirect', 'toggle_read');


  add_action('admin_head', 'my_custom_fonts');

  function my_custom_fonts() {
    echo '<style>
      body > font,
      body > br {
        display: none !important;
      }
    </style>';
  }