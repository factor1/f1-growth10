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

<section class="home-image-text-split-full-width">
    <div class="container container--direction-row full-width">
        <div class="col-6 sm-col-12 left-side">
            <div class="col-12 sm-col-12">    
                <?php echo $wysiwyg; ?>
            </div>
        </div> 
        <div class="col-6 sm-col-12 image"  
            style="background: url('<?php echo $img[0];?>') repeat-x 0% 50%;background-size: contain;">
        </div>
    </div>
</section>
