<?php
/*
 * Mega Menu
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

$category = get_queried_object();
$leftMenu = get_field('left_menu', 'option');

if( !is_page( get_option('woocommerce_cart_page_id') ) ) : ?>

  <section class="mega-menu">
    <div class="container">
      <div class="row row--justify-content-center">

        <div class="col-12">
          <div class="mega-menu__logo">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-color.svg" alt="Growth 10">
          </div>

          <button class="menu-icon menu-icon--blue"><span></span></button>
        </div>

        <?php // Logged-in menu
        if( is_user_logged_in() ) : ?>

          <div class="col-9">

            <?php // Mega menu left
            if( $leftMenu ) : ?>

              <nav class="nav--left">
                <ul>

                  <?php foreach( $leftMenu as $cat ) :
                    $imgBlue = wp_get_attachment_image_src(get_field('category_icon_blue', $cat), 'category_icon');
                    $imgTeal = wp_get_attachment_image_src(get_field('category_icon_teal', $cat), 'category_icon');
                    $active = $category->term_id === $cat->term_id ? ' active' : ''; ?>

                    <li>
                      <a href="<?php echo get_category_link($cat); ?>" class="text-center<?php echo $active; ?>">
                        <div>
                          <img src="<?php echo $imgBlue[0]; ?>" alt="<?php echo $cat->name; ?> icon blue">
                          <img src="<?php echo $imgTeal[0]; ?>" alt="<?php echo $cat->name; ?> icon teal">
                        </div>

                        <span><?php echo $cat->name; ?></span>
                      </a>
                    </li>

                  <?php endforeach; ?>

                </ul>
              </nav>

            <?php endif;

            // Search ?>
            <form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <i class="far fa-search"></i> <input type="text" class="field" name="s" id="s" placeholder="Search">
              <input type="hidden" name="post_type" value="post" />
              <input type="submit" id="searchsubmit" value="Submit" />
            </form>
          </div>

          <div class="col-3">

            <?php // Mega menu right
            wp_nav_menu(
              array(
                'theme_location' => 'mega_right',
                'container' => 'nav',
                'container_class' => 'nav--right'
              )
            ); ?>

          </div>

        <?php // Logged-out menu
        else :

          wp_nav_menu(
            array(
              'theme_location' => 'mobile',
              'container' => 'nav',
              'container_class' => 'nav--mobile'
            )
          );

        endif; ?>

      </div>
    </div>
  </section>

<?php endif; ?>
