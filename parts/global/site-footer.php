<?php
/*
 * Site Footer
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */
?>

<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-12 sm-text-center">

        <div>
          <p>&copy;<?php echo date('Y') . ' ' . get_bloginfo('name'); ?> &ndash; All Rights Reserved</p>

          <?php // Footer menu
          wp_nav_menu(
            array(
              'theme_location' => 'footer',
              'container' => 'nav',
              'container_class' => 'nav--footer',
              'depth' => 1
            )
          ); ?>
        </div>

        <p class="text-right sm-text-center">Website by <a href="https://factor1studios.com">FACTOR1</a></p>

      </div>
    </div>
  </div>
</footer>
