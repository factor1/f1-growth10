<?php // Close main ?>
</main>

<footer class="landing-footer">
  <div class="container">
    <div class="row">
      <div class="col-6 sm-text-center">
        <div>
          <p>Copyright &copy;<?php echo date('Y'); ?> All Rights Reserved. Site by <a class="factor1" href="https://factor1studios.com" target="_blank">factor1</a></p>
        </div>
      </div>
      <div class="col-6 sm-text-center">

        <?php // Footer menu
        wp_nav_menu(
          array(
            'theme_location' => 'landing-footer',
            'container' => 'nav',
            'container_class' => 'nav--landing-footer',
            'depth' => 1
          )
        ); ?>

      </div>
    </div>
  </div>
</footer>

<?php // Site footer
wp_footer(); ?>

</body>
</html>
