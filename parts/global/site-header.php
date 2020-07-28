<?php
/*
 * Site Header
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

global $post;

// Default template
$isDefault = is_page() && !is_page_template();

// Check if hero exists
$bg = wp_get_attachment_image_src(get_field('hero_b_background', $post->ID), 'home_hero');

$headerClass = $isDefault && $bg ? ' has-hero' : ''; ?>

<header class="site-header<?php echo $headerClass; ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="site-header__logo">
	        <a href="https://growth10.com/home">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-white.svg" alt="<?php echo get_bloginfo('name'); ?>">
        </a>
        </div>

        <?php if( !is_page(208) ) :
          if( is_user_logged_in() ) : ?>

            <button class="menu-icon">
              <small class="sm-hide">Navigation</small>

              <span></span>
            </button>

          <?php else :

            wp_nav_menu(
              array(
                'theme_location' => 'primary',
                'container' => 'nav',
                'container_class' => 'nav--primary',
                'depth' => 1,
              )
            );

          endif;
        endif; ?>

      </div>
    </div>
  </div>
</header>
