<?php // Close main ?>
</main>

<?php // Site footer
if( !is_page_template('templates/landing.php') ) :
  get_template_part('parts/global/site-footer');
endif;

get_template_part('parts/global/modals');

wp_footer(); ?>

</body>
</html>
