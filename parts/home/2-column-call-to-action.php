<?php
/*
 * 2-Column Section Call-To-Action (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// 3-Column Section Custom Fields

$bg_image   = get_field('cta-background_image');
$bg_img     = wp_get_attachment_image_src($bg_image, 'full');

$wysiwyg    = get_field('cta-right-side');

$image      = get_field('cta-left-image');
$img        = wp_get_attachment_image_src($image, 'full');
$alt        = get_post_meta($image, '_wp_attachment_image_alt', true); 
?>

<section class="call-to-action" style="background: url('<?php echo $bg_img[0];?>') no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-4 sm-col-0 col-centered">
                <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
            </div>
            <div class="col-7 sm-col-12 col-centered">
                <?php echo $wysiwyg; ?>
            </div>
            <div class="col-1 sm-col-0"></div>
        </div>
    </div>
</section> 