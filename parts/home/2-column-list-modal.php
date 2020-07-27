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
$modal    = get_field('modal_video');

?>
<section class="video-split">
	<div class="container">
		<div class="row row--align-items-center">
			<div class="col-6 sm-col-12">
				<?php echo $wysiwyg;?>
			</div>
			<div class="col-6 sm-col-12">
				<?php echo $modal; ?>
<!--
				<a data-micromodal-trigger="hero-modal-1">
				<img src="<?php //echo $img[0]?>" height='<?php //echo $img[2];?>px' alt="<?php //echo $alt; ?>">
				</a>
-->
			</div>
		</div>
	</div>
</section>


<?php /* <div class="modal micromodal-slide" id="hero-modal-1" aria-hidden="true">
          <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-title">
              <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>

              <div id="hero-modal-1-content">
                <?php echo $modal; ?>
              </div>
            </div>
          </div>
        </div> */ ?>
