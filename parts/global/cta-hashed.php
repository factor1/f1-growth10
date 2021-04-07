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
?>



<script>
	jQuery(document).ready(function($){
  var hash = window.location.hash.substr(1),
      allButtons = $('div[id^="plan"]'),
      plan1 = $('#plan1'),
      plan2 = $('#plan2'),
      plan3 = $('#plan3'),
      plan4 = $('#plan4'),
      plan5 = $('#plan5'),
      plan6 = $('#plan6'),
      plan7 = $('#plan7'),
      plan8 = $('#plan8'),
      plan9 = $('#plan9'),
      planError = $('#planError');

  //hide all buttons on load for switching
  allButtons.hide();
  
  // Listen to the URL hash. 
  //Looks like this in the real world: .com/tribe/#2

  if( hash == '1'){
    plan1.show();
  } else if ( hash == '2') {
    plan2.show();
  } else if ( hash == '3') {
    plan3.show();
  } else if ( hash == '4') {
    plan4.show();
  } else if ( hash == '5') {
    plan5.show();
  } else if ( hash == '6') {
    plan6.show();
  } else if ( hash == '7') {
    plan7.show();
  } else if ( hash == '8') {
    plan8.show();
  } else if ( hash == '9') {
    plan9.show();
  }
   else {
    planError.show();
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

          <?php echo $desc; ?>

          <?php // Monthly content ?>
          <div class="cta__price monthly active text-center">
	          <div id="plan1">
			  	<h5>$199</h5>
			  	<a href="https://growth10.com/cart/?add-to-cart=3843&variation_id=5546" class="button button--teal button--monthly active" role="link">Register here</a>
	          </div>
	          
	          <div id="plan2">
			  	<h5>$299</h5>
			  	<a href="https://growth10.com/cart/?add-to-cart=3843&variation_id=5547" class="button button--teal button--monthly active" role="link">Register here</a>
	          </div>
	          
	          <div id="plan3">
			  	<h5>$399</h5>
			  	<a href="https://growth10.com/cart/?add-to-cart=3843&variation_id=5548" class="button button--teal button--monthly active" role="link">Register here</a>
	          </div>
	          
	          <div id="plan4">
			  	<h5>$499</h5>
			  	<a href="https://growth10.com/cart/?add-to-cart=3843&variation_id=5549" class="button button--teal button--monthly active" role="link">Register here</a>
	          </div>
	          
	          <div id="plan5">
			  	<h5>$599</h5>
			  	<a href="https://growth10.com/cart/?add-to-cart=3843&variation_id=5550" class="button button--teal button--monthly active" role="link">Register here</a>
	          </div>
	          
	          <div id="plan6">
			  	<h5>$699</h5>
			  	<a href="https://growth10.com/cart/?add-to-cart=3843&variation_id=5551" class="button button--teal button--monthly active" role="link">Register here</a>
	          </div>
	          
	          <div id="plan7">
			  	<h5>$799</h5>
			  	<a href="https://growth10.com/cart/?add-to-cart=3843&variation_id=5552" class="button button--teal button--monthly active" role="link">Register here</a>
	          </div>
	          
	          <div id="plan8">
			  	<h5>$899</h5>
			  	<a href="https://growth10.com/cart/?add-to-cart=3843&variation_id=5553" class="button button--teal button--monthly active" role="link">Register here</a>
	          </div>
	          
	          <div id="plan9">
			  	<h5>$999</h5>
			  	<a href="https://growth10.com/cart/?add-to-cart=3843&variation_id=5554" class="button button--teal button--monthly active" role="link">Register here</a>
	          </div>

			  
          </div>



        </div>
      </div>

    
    </div>
  </div>
</section>
