<?php
/*
 * List/Modal Split (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Text/Image Split Custom Fields

$wysiwyg    = get_field('home-list-modal-wysiwyg');
$image      = get_field('home-list-modal-image');
$img        = wp_get_attachment_image_src($image, 'home_split');
$alt        = get_post_meta($image, '_wp_attachment_image_alt', true); 

?>
<section class="modal">
	<div class="container">
		<div class="row row--align-items-center">
			<div class="col-6 sm-col-12">
				<?php echo $wysiwyg;?>
			</div>
			<div class="col-6 sm-col-12">
				<img src="<?php echo $img[0]?>" height='<?php echo $img[2];?>px' alt="<?php echo $alt; ?>">
			</div>
		</div>
	</div>
</section>
<!-- 
      <div class="col-12" data-aos="fade-up">
        <?php echo $content;

        // Category indicator
        if( $isCat ) : ?>

          <p class="support text-center"><strong>Category:</strong> <?php echo get_queried_object()->name; ?></p>

        <?php endif;?>

          <div class="hero__buttons text-center">

<button 
    title="title"
    data-micromodal-trigger="hero-modal">MODAL BUTTON</button>



<div id="hero-modal" aria-hidden="">
   MODAL CONTENT
</div>

      </div>
    </div>
  </div>
</section> -->