<?php
/*
 * Template Name: Login
 *
 * Template used on the login page
 * 
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

$img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
$colClass = $img ? '5' : '10';

// Check if user is logged in
$loggedIn = is_user_logged_in();

get_header();

if( $loggedIn ) :
  
  $url = get_bloginfo('url');
  wp_redirect( $url );
  exit;

else : ?>

  <section class="login-section">
    <div class="container">
      <div class="row row--justify-content-center">

        <?php // Optional image
        if( $img ) : ?>

          <div class="col-5 login-section__img">
            <img src="<?php echo $img[0]; ?>" alt="Dashboard image">
          </div>

        <?php endif; ?>

        <div class="col-<?php echo $colClass; ?>">

          <?php wp_login_form(); ?>

          <a href="<?php echo esc_url(home_url()); ?>/my-account/lost-password/">Lost your password?</a>

        </div>
      </div>
    </div>
  </section>

<?php endif;

get_footer(); ?>