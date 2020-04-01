<?php
/*
 * Plans Section (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Plans Section Custom Fields
$bg = wp_get_attachment_image_src(get_field('plans_background'), 'home_hero');
$headline = get_field('plans_headline');
$content = get_field('plans_content');

if( have_rows('plans') ) : ?>

  <section class="plans-section" style="background: url('<?php echo $bg[0]; ?>') center/cover no-repeat">
    <div class="container">
      <div class="row row--justify-content-center row--align-items-center">
        <div class="col-10 sm-col-11 text-center">
          <h2><?php echo $headline; ?></h2>

          <div class="plans-section__toggle">
            <span>Monthly</span>

            <label class="switch">
              <input type="checkbox">
              <span class="slider"></span>
            </label>

            <span>Annual</span>
          </div>
        </div>

        <?php while( have_rows('plans') ) : the_row();
          // Plan Custom Subfields
          $desc = get_sub_field('description');
          $monthlyPrice = get_sub_field('monthly_price');
          $monthlyBtn = get_sub_field('monthly_join_button');
          $savings = get_sub_field('annual_price_savings');
          $annualPrice = get_sub_field('annual_price');
          $annualBtn = get_sub_field('annual_join_button');
          $trial = get_sub_field('free_trial'); ?>

          <div class="col-4 md-col-5 sm-col-10">
            <div class="plan">
              <?php echo $desc; ?>

              <div class="plan__monthly active text-center">
                <p class="plan__price"><?php echo $monthlyPrice; ?></p>

                <?php if( $monthlyBtn ) : ?>
                  <a href="<?php echo esc_url($monthlyBtn['url']); ?>" class="button button--ghost-blue" role="link" title="<?php echo $monthlyBtn['title']; ?>" target="<?php echo $monthlyBtn['target']; ?>">
                    <?php echo $monthlyBtn['title']; ?>
                  </a>
                <?php endif;

                if( $trial ) : ?>
                  <small><?php echo $trial; ?></small>
                <?php endif; ?>

              </div>

              <div class="plan__annual text-center">
                <span><?php echo $savings; ?></span>

                <p class="plan__price"><?php echo $annualPrice; ?></p>

                <?php if( $annualBtn ) : ?>
                  <a href="<?php echo esc_url($annualBtn['url']); ?>" class="button button--ghost-blue" role="link" title="<?php echo $annualBtn['title']; ?>" target="<?php echo $annualBtn['target']; ?>">
                    <?php echo $annualBtn['title']; ?>
                  </a>
                <?php endif;

                if( $trial ) : ?>
                  <small><?php echo $trial; ?></small>
                <?php endif; ?>

              </div>
            </div>
          </div>

        <?php endwhile; ?>

        <div class="col-10 sm-col-11 text-center">
          <?php echo $content; ?>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
