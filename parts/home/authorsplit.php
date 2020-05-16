<?php
/*
 * Text/Image Split Full Width (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Text/Image Split Custom Fields
$wysiwyg    = get_field('home-full-width-text-image_wysiwyg');
$image      = get_field('home-full-width-text-image_image');
$img        = wp_get_attachment_image_src($image, 'full');
$alt        = get_post_meta($image, '_wp_attachment_image_alt', true); 
?>

<section class="home5050 author-split">
    <div class="container full-width">
	    <div class="row">
        <div class="col-6 sm-col-11 copy-side" data-aos="fade-right" data-aos-delay="50">
                <?php echo $wysiwyg; ?>
        </div> 
        <div class="col-6 sm-col-12 image-side"  
            style="background-image: url('<?php echo $img[0];?>');">
        </div>
	    </div>
    </div>
</section>
