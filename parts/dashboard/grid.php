<?php
/*
 * Dashboard Grid
 *
 * Template part used on the dashboard template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.6.0
 */

$section = 'dashboard_grid';
$intro = get_field($section . '_intro');

if( have_rows($section) ) :
  $i = 0; ?>

  <section class="dashboard-grid">
    <div class="container">
      <div class="row row--justify-content-center">
        <div class="col-12">

          <?php echo $intro; ?>

        </div>
        
        <?php while( have_rows($section) ) : the_row(); 
          $image = get_sub_field('image');
          $img = wp_get_attachment_image_src($image, 'dashboard_grid'); 
          $link = get_sub_field('link');
          $text = get_sub_field('link_text');
          $delay = $i % 3 * 250; ?>

          <div class="col-4 md-col-6 stretch text-center" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
            <a href="<?php echo esc_url($link['url']); ?>" class="dashboard-grid__tile" role="link" target="<?php echo $link['target']; ?>">
              <div class="dashboard-grid__img" style="background: url('<?php echo $img[0]; ?>') center/cover no-repeat"></div>
            
              <div class="dashboard-grid__text">
                <?php echo $text; ?>
              </div>
            </a>
          </div>

        <?php $i++; endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; ?>