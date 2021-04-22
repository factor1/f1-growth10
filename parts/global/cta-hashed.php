<?php
/**
 * CTA - Hashed
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

$product_id = 3843;
$product = wc_get_product($product_id);
$variations = $product->get_available_variations();
$variations_id = wp_list_pluck( $variations, 'variation_id' );

// $jscode = '<script>var variations = [';
// foreach( $variations_id as $variation ) {
//   $jscode .= $variation.',';
// }
// $jscode .= '];</script>';
// echo $jscode;

?>



<script>
	jQuery(document).ready(function($){
    var hash = window.location.hash.substr(1);
    var plan = $('#plan-'+hash);

    if(plan.length > 0) {
      plan.show();
    } else {
     $('#error').show();
    }
  });
</script>

<style>
#plans {display: block !important}

#plan1,
#plan2,
#plan3,
#plan4,
#plan5,
#plan6,
#plan7,
#plan8,
#plan9 {
  position: relative;
  width: 100%;
  text-align: center;
  }
  
 .plan-description {
	 padding: 50px 0 0;
 }




.hide-it{
  display: none !important;
}

</style>







<section class="cta" style="background: url('<?php echo $bg[0]; ?>') center/cover no-repeat">
  <div class="container">
    <div class="row row--justify-content-center row--align-items-center">
      <div class="col-10 sm-col-12 text-center">
        <h2><?php echo $headline; ?></h2>

        
      </div>

      <div class="col-6">
        <div class="cta__card">
        
          <div class="cta__toggle">
            <span>Monthly</span>

            <label class="switch">
              <input type="checkbox">
              <span class="slider"></span>
            </label>

            <span>Annual</span>
          </div>

          <?php echo $desc; ?>

          <?php // Monthly content ?>
          <div class="cta__price monthly active text-center">

            <?php foreach($variations as $variation): ?> 
  
              <div id="plan-<?php echo $variation['variation_id']; ?>" style="display: none;">
                <h5>$<?php echo $variation['display_price']; ?></h5>
                <a href="https://growth10.com/cart/?add-to-cart=<?php echo $product_id; ?>&variation_id=<?php echo $variation['variation_id']; ?>" class="button button--teal button--monthly active" role="link">Register here</a>
              </div>
            
            <?php endforeach; ?> 

              <div id="error" style="display: none;">
                <h5>404</h5>
                <em><small>Plan not found!</small></em>
              </div>

          </div>

          <?php // Yearly content ?>
          <div class="cta__price annual text-center">
            <h5>
              $10k
              <br>
              <em><small>how about that</small></em>
            </h5>
          </div>

        </div>
      </div>
   
    </div>
  </div>
</section>
