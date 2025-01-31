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

$toggle = get_field('cta_toggle');
?>
<?php if($toggle): ?>

    <section class="call-to-action" style="background: url('<?php echo $bg_img[0];?>') no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-3 sm-col-0 col-centered" data-aos="fade-up" data-aos-delay="50">
                    <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
                </div>
                <div class="col-9 sm-col-12 col-centered">
                    <?php echo $wysiwyg; ?>
                </div>
            </div>
        </div>
    </section> 

<?php endif; ?>
