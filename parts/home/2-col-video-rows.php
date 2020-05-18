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
        <div class="row">
            <div class="col-7 sm-col-8">
                <div class="col-10  sm-col-11 col-centered text-center" style="margin-bottom:50px;">
                    <h2><?php echo $headline; ?></h2>
                    <div class="flex-video">
                        <iframe src="https://player.vimeo.com/video/397065857?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>        
                </div>
            </div>
        
            <div class="col-5 sm-col-6">
                <?php while( have_rows('3_column_section_columns') ) : the_row();
                    $content = get_sub_field('content'); ?>
                    <div class="row">
                        <div class="" data-aos="fade-up" data-aos-delay="<?php echo $i * 200; ?>">
                            <hr><?php echo $content; ?>
                        </div>
                    </div>
                <?php $i++; endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
