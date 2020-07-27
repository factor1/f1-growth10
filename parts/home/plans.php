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
$plansToggle = get_field('plans_toggle');
$featuresToggle = get_field('features_toggle');
$price = get_field('features_price');
$btn = get_field('features_button');
$intro = get_field('features_intro');
$content = get_field('plans_content'); ?>

<section class="plans-section" style="background: url('<?php echo $bg[0]; ?>') center/cover no-repeat" id="plans">
  <div class="container">
    <div class="row row--justify-content-center row--align-items-center">
      <div class="col-10 sm-col-12 text-center">
        <h2><?php echo $headline; ?></h2>

        <?php // Original plans section
        if( $plansToggle && have_rows('plans') ) : ?>

          <div class="plans-section__toggle">
            <span>Monthly</span>

            <label class="switch">
              <input type="checkbox">
              <span class="slider"></span>
            </label>

            <span>Annual</span>
          </div>

        <?php endif; ?>

        <?php // New plans section
        if( $featuresToggle && have_rows('features') ) : ?>

          <h4><?php echo $price; ?></h4>

          <?php if( $btn ) : ?>

            <a href="<?php echo esc_url($btn); ?>" class="button button--teal" role="link">
              Start my Free 14-Day Trial
            </a>

          <?php endif;

          echo $intro;

        endif; ?>

      </div>

      <?php // Original plans section
      if( $plansToggle ) :

        if( have_rows('plans') ) : while( have_rows('plans') ) : the_row();
          // Plan Custom Subfields
          $desc = get_sub_field('description');
          $monthlyPrice = get_sub_field('monthly_price');
          $monthlyBtn = get_sub_field('monthly_join_button');
          $savings = get_sub_field('annual_price_savings');
          $annualPrice = get_sub_field('annual_price');
          $annualBtn = get_sub_field('annual_join_button');
          $trial = get_sub_field('free_trial'); ?>

          <div class="col-4 md-col-5 sm-col-12">
            <div class="plan">
              <?php echo $desc; ?>

              <div class="plan__monthly active text-center">
                <span><?php echo $savings; ?></span>

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

        <?php endwhile; endif;

      endif;

      // New plans section
      if( $featuresToggle ) :

        $x = 1;

        if( have_rows('features') ) : while( have_rows('features') ) : the_row();
          // Features Custom Subfields
          $icon = get_sub_field('icon');
          $feature = get_sub_field('content'); ?>

          <div class="col-4 md-col-5 sm-col-12">
            <div class="feature" data-micromodal-trigger="home-modal-<?php echo $x; ?>">
              <div class="feature__icon">
                <?php echo $icon; ?>
              </div>

              <?php echo $feature; ?>
            </div>
          </div>

        <?php $x++; endwhile; endif;

      endif; ?>

      <div class="col-10 sm-col-12 text-center">
        <?php echo $content; ?>
      </div>
    </div>
  </div>
</section>
