<?php
/*
 * 3-Column Section (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// 3-Column Section Custom Fields
$headline = get_field('3_column_section_headline');

if( have_rows('3_column_section_columns') ) :
  $i = 0; ?>

  <section class="three-column-section">
    <div class="container">
      <div class="row row--justify-content-start">
        <div class="col-10  sm-col-11 col-centered text-center">
          <h2><?php echo $headline; ?></h2>
        </div>

        <?php while( have_rows('3_column_section_columns') ) : the_row();
          $content = get_sub_field('content'); ?>

          <div class="col-4 sm-col-11 sm-col-centered" data-aos="fade-up" data-aos-delay="<?php echo $i * 200; ?>">
            <hr>

            <?php echo $content; ?>
          </div>

        <?php $i++; endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; ?>
