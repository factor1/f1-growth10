<?php
/*
 * 2-Column Banner (Global)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 */

// 2-Column Banner

$section_toggle = get_field('twocol_banner_toggle');

$bg_image   = get_field('twocol_banner_background_image');
$bg_img     = wp_get_attachment_image_src($bg_image, 'full');

$wysiwyg    = get_field('twocol_banner_content');

$image      = get_field('twocol_banner_main_image');
$img        = wp_get_attachment_image_src($image, 'full');
$alt        = get_post_meta($image, '_wp_attachment_image_alt', true); 
?>

<?php if(!$section_toggle && ($wysiwyg || $bg_image || $image) ): ?>

    <section class="two-col-banner" style="background: url('<?php echo $bg_img[0];?>') no-repeat; background-size: cover;">
        <div class="container">
            <div class="row row--align-items-center">
                <div class="col-4 sm-col-23 col-centered">
                    <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
                </div>
                <div class="col-7 sm-col-12 col-centered">
                    <?php echo $wysiwyg; ?>
                    <?php if( have_rows('twocol_banner_social_links') ): ?>
                        <div class="landing-hero__social-links">
                            <?php while( have_rows('twocol_banner_social_links') ): the_row(); 
                            $icon = wp_get_attachment_image_src(get_sub_field('social_icon'), 'full');
                            $link = get_sub_field('social_link');
                            $linkAlt = get_post_meta(get_sub_field('social_link'), '_wp_attachment_image_alt', true);
                            ?>
                            <a href="<?php echo esc_url($link['url']); ?>" class="social-link" title="<?php echo $btn['title']; ?>" target="<?php echo $link['target']; ?>">
                                <img src="<?php echo $icon[0]; ?>" alt="<?php echo $linkAlt; ?>">
                            </a>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section> 

<?php endif; ?>
