<?php
/*
 * Tabbed Content Section (Global)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.4.0
 */

// Tabbed Content Section Custom Fields 
$intro = get_sub_field('tabbed_content_intro');

if( have_rows('tabbed_content') ) :
  $i = 0;
  $x = 0; ?>

  <section class="tabbed-content-section">
    <div class="container">
      <div class="row row--justify-content-center">
        <div class="col-10">
          
          <?php echo $intro; ?>

          <div class="tabbed-content-section__tabs">

            <?php while( have_rows('tabbed_content') ) : the_row();
              $icon = get_sub_field('icon'); 
              $iconImg = wp_get_attachment_image_src($icon, 'tab_icon');
              $iconAlt = get_post_meta($icon, '_wp_attachment_image_alt', true);
              $text = get_sub_field('tab_text'); 
              
              // Conditional classes 
              $active = $i < 1 ? ' active' : ''; ?>

              <button class="tabbed-content-section__tab<?php echo $active; ?>" data-tab="<?php echo $i; ?>">
                <img src="<?php echo $iconImg[0]; ?>" alt="<?php echo $iconAlt; ?>">

                <span><?php echo $text; ?></span>
              </button>

            <?php $i++; endwhile; ?>

          </div>

          <div class="tabbed-content-section__content">

            <?php while( have_rows('tabbed_content') ) : the_row();
              $img = wp_get_attachment_image_src(get_sub_field('image'), 'tab_image');
              $content = get_sub_field('content'); 
              
              // Conditionals 
              $sectionActive = $x < 1 ? ' class="active"' : ''; ?>

              <section data-section="section-<?php echo $x; ?>"<?php echo $sectionActive; ?>>
                <div class="tabbed-content-section__image" style="background: url('<?php echo $img[0]; ?>') center/cover no-repeat"></div>

                <div class="tabbed-content-section__text">

                  <?php echo $content; 

                  if( have_rows('buttons') ) : ?>

                    <div class="buttons text-center">

                      <?php while( have_rows('buttons') ) : the_row(); 
                        $btn = get_sub_field('button'); ?>

                        <a href="<?php echo esc_url($btn['url']); ?>" class="button button--teal" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                          <?php echo $btn['title']; ?>
                        </a>

                      <?php endwhile; ?>

                    </div>

                  <?php endif; ?>

                </div>
              </section>

            <?php $x++; endwhile; ?>

          </div>

        </div>
      </div>
    </div>
  </section>

<?php endif; ?>