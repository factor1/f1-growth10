<?php
/*
 * Image/Text Split Full Width (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Text/Image Split Custom Fields
$content = get_field('home_text_image_split_content');
$image = get_field('home_text_image_split_image');
$img = wp_get_attachment_image_src($image, 'home_split');
$alt = get_post_meta($image, '_wp_attachment_image_alt', true); 

?>

<section class="home-image-text-split-full-width">
    <div class="container container--direction-row full-width">
        <div class="col-6 sm-col-11 image"  
            style="background: url('<?php echo $img[0];?>') repeat-x 50% 50%;
                height: <?php echo $img[2];?>px;">
        </div>
        <div class="col-6 sm-col-11 right-side">
            <div class="realign row">
                <div class="col-11">    
                    <!-- <?php echo $content; ?> -->
                    <h2>Game-Changing Ideas by Entrepreneurs, for Entrepreneurs.</h2>
                    <p>Learn powerful concepts from talented business leaders who share their experience and expertise in an action-oriented format.</p>
                </div>
                <!-- <div class="col-1">asd</div> -->
            </div>
        </div> 
    </div>
</section>
