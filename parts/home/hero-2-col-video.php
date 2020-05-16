<?php
/*
 * 2-Column Video Hero (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Hero Custom Fields 
$img = wp_get_attachment_image_src(get_field('home_hero_background'), 'home_hero');
$headline = get_field('home_hero_headline_text'); 
$content = get_field('home_hero_content_right'); 

?>

<section class="video-hero--home" style="background: url('<?php echo $img[0]; ?>') center/cover no-repeat">
    <idv class="container">
        <div class="row">
            <div class="col-7 sm-col-12">
                <h1><?php echo $headline; ?></h1>
            </div>
            <div class="col-5 sm-col-12">
                <h2><?php echo $content; ?>
                <a href="#plans" 
                    class="button larger-25 button--teal" role="link">Free for 14-days</a>                
                </div>
            </div> 
        </div>
    </div>
</section>
