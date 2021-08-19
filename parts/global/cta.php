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
$desc = get_sub_field('card_description');
$price = get_sub_field('card_price');
$btn = get_sub_field('card_button');
$blurb = get_sub_field('card_blurb');?>

<section class="cta" style="background: url('<?php echo $bg[0]; ?>') center/cover no-repeat">
  <div class="container">
    <div class="row row--justify-content-center row--align-items-center">
      <div class="col-10 sm-col-12 text-center">
        <h2><?php echo $headline; ?></h2>
      </div>

      <div class="col-6">
        <div class="cta__card">

          <?php echo $desc; ?>

          <div class="cta__price monthly active text-center">
            <h5>

              <?php echo $price; ?>

              <br>
              <em><small><?php echo $blurb; ?></small></em>

            </h5>
          </div>

        </div>
      </div>

      <div class="col-12 text-center">

        <a href="<?php echo esc_url($btn['url']); ?>" class="button button--teal button--monthly active" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
          <?php echo $btn['title']; ?>
        </a>

      </div>

    </div>
  </div>
</section>
