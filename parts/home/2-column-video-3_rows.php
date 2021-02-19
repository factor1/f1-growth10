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
$wysiwyg = get_field('home_2col_split_left');
// $headline = get_field('3_column_section_headline');


if( have_rows('3_column_section_columns') ) :
  $i = 0; ?>

<section class="three-column-section">
    <div class="container">
        <div class="row row--align-items-stretch">
            <div class="col-7 sm-col-12 container--align-items-end">
                <div class="col-10  sm-col-11" style="margin-bottom: 50px;">
                    <?php echo $wysiwyg; ?>
                </div>
            </div>
        
            <div class="col-5 sm-col-12 centered-content">
                <?php while( have_rows('3_column_section_columns') ) : the_row();
                    $content = get_sub_field('content'); ?>
                    <div class="row">
                        <div data-aos="fade-up" data-aos-delay="<?php echo $i * 200; ?>">
                            <hr><?php echo $content; ?>
                        </div>
                    </div>
                <?php $i++; endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
