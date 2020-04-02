<?php
/*
 * Site Header
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */
?>

<header class="site-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="site-header__logo">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-white.svg" alt="<?php echo get_bloginfo('name'); ?>">
        </div>

        <?php if( !is_page(208) ) :
          if( is_user_logged_in() ) : ?>

            <button class="menu-icon"><span></span></button>

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
