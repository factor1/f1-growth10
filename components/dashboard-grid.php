<?php
/*
 * Dashboard Grid Component
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.3.0
 */

$link = $showLevel ? get_category_link($cat) . '?level=' . strtolower($level) : get_category_link($cat);

if( $articles->have_posts() ) : ?>

  <div class="dashboard-grid">
    <div class="dashboard-grid__top">
      <div>
        <h4><?php echo $cat->name; ?>:</h4>

        <a href="<?php echo $link; ?>">See more in <?php echo $cat->name; ?></a>
      </div>

      <?php if( $showLevel ) :
        $levels = [
          'Beginner' => '0 0, 40 0, 50 10, 40 20, 0 20',
          'Intermediate' => '0 0, 40 0, 50 10, 40 20, 0 20, 10 10',
          'Advanced' => '0 0, 40 0, 50 10, 40 20, 0 20, 10 10',
          'Expert' => '0 0, 50 0, 50 20, 0 20, 10 10'
        ];

        $i = 0;
        $pos = array_search( $level, array_keys($levels) ); ?>

        <div class="dashboard-grid__levels">

          <?php foreach( $levels as $item ) :
            $fill = $i <= $pos ? '#0356a4' : 'transparent'; ?>

            <div>
              <svg width="100%" height="100%" viewBox="0 0 50 20">
                <polygon points="<?php echo $item; ?>" stroke="#0356a4" stroke-width="2" fill="<?php echo $fill; ?>"></polygon>
              </svg>

            </div>

          <?php $i++; endforeach; ?>

          <span class="<?php echo strtolower($level); ?>"><?php echo $level; ?></span>
        </div>

      <?php endif; ?>

    </div>

    <div class="dashboard-grid__main">

      <?php while( $articles->have_posts() ) : $articles->the_post(); ?>

        <div>
          <?php get_template_part('components/post-block'); ?>
        </div>

      <?php endwhile; ?>

    </div>
  </div>

<?php endif; wp_reset_postdata(); ?>
