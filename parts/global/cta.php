<?php
/**
 * CTA
 *
 * Template part used on the various templates/views
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.3.1
 */

$bg = wp_get_attachment_image_src(get_sub_field('cta_background'), 'home_hero');
$headline = get_sub_field('cta_headline');
$monthlyDesc = get_sub_field('card_monthly_description');
$monthlyPrice = get_sub_field('card_monthly_price');
$monthlyBtn = get_sub_field('card_monthly_button');
$annualDesc = get_sub_field('card_annual_description');
$annualSavings = get_sub_field('card_annual_price_savings');
$annualPrice = get_sub_field('card_annual_price');
$annualBtn = get_sub_field('card_annual_button'); ?>

<section class="cta" style="background: url('<?php echo $bg[0]; ?>') center/cover no-repeat">
  <div class="container">
    <div class="row row--justify-content-center row--align-items-center">
      <div class="col-10 sm-col-12 text-center">
        <h2><?php echo $headline; ?></h2>

        <?php // if 2 prices
        if( $monthlyBtn && $annualBtn ) : ?>

          <div class="cta__toggle">
            <span>Monthly</span>

            <label class="switch">
              <input type="checkbox">
              <span class="slider"></span>
            </label>

            <span>Annual</span>
          </div>

        <?php endif; ?>

      </div>

      <div class="col-6">
        <div class="cta__card">

          <?php // Monthly content ?>
          <div class="content content__monthly active text-center">

            <?php echo $monthlyDesc; ?>

            <h5 class="cta__price"><?php echo $monthlyPrice; ?></h5>

          </div>

          <?php if( $annualDesc && $annualBtn ) : ?>

            <div class="content content__annual text-center">

              <?php echo $annualDesc; ?>

              <h5 class="cta__price">

                <?php echo $annualPrice; ?>

                <?php if( $annualSavings ) : ?>

                  <br>
                  <em><small><?php echo $annualSavings; ?></small></em>

                <?php endif; ?>

              </h5>

            </div>

          <?php endif; ?>

        </div>
      </div>

      <div class="col-12 text-center">

        <a href="<?php echo esc_url($monthlyBtn['url']); ?>" class="button button--teal button--monthly active" role="link" title="<?php echo $monthlyBtn['title']; ?>" target="<?php echo $monthlyBtn['target']; ?>">
          <?php echo $monthlyBtn['title']; ?>
        </a>

        <?php if( $annualBtn ) : ?>

          <a href="<?php echo esc_url($annualBtn['url']); ?>" class="button button--teal button--annual" role="link" title="<?php echo $annualBtn['title']; ?>" target="<?php echo $annualBtn['target']; ?>">
            <?php echo $annualBtn['title']; ?>
          </a>

        <?php endif; ?>

      </div>

    </div>
  </div>
</section>
