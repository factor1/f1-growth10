<?php
/*
 * Timeline
 *
 * Template part used on the various templates/views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.6.0
 */

// Timeline Custom Fields
$cols = get_sub_field('timeline_column_span');
$intro = get_sub_field('timeline_intro'); ?>

<section class="timeline-section">
  <div class="container">
    <div class="row">
      <div class="col-<?php echo $cols; ?> col-centered">
        <?php echo $intro;

        if( have_rows('timeline') ) :
          $i = 1; ?>

          <div class="timeline">

            <?php while( have_rows('timeline') ) : the_row();
              $headline = get_sub_field('headline');
              $content = get_sub_field('content');
              $icon = get_sub_field('icon');

              // Conditional classes
              $open = $i < 2 ? ' open' : ''; ?>

              <div class="timeline__block">
                <h4 class="timeline__headline <?php echo $open; ?>"> <span class="item-title"> <span class="timeline-icon"><i class="fa-2x <?php echo $icon; ?>"></i></span> <?php echo $headline; ?></span> </h4>

                <div class="timeline__content">
                  <?php echo $content; ?>
                </div>
              </div>

              <span class="clear"></span>

            <?php $i++; endwhile; ?>

          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
