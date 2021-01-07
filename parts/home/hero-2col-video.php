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
    $image      = get_field('home_hero_mobile_background');
    $img        = wp_get_attachment_image_src($image, 'home_hero');
    $headline   = get_field('home_hero_headline_text');
    $content    = get_field('home_hero_content_right');
    $video      = get_field('home_video_hero_file');
    $button_url = get_field('home_video_hero_button_url');
?>

<section class="video-hero--home" style="background: url('<?php echo $img[0]; ?>') center/cover no-repeat">

<?php
  if( $video ) : ?>
    <div class="hero__video">
      <video autoplay loop muted>
        <source src="<?php echo $video['url']; ?>" type="video/mp4">
      </video>
    </div>

  <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-7 sm-col-11 sm-col-centered sm-text-center">
                <h1><?php echo $headline; ?></h1>
            </div>
            <div class="col-5 sm-col-11 sm-col-centered sm-text-center">
                <?php echo $content; ?>
                <a href="/tribe"
                    class="button button--teal" role="link">Learn More</a>
			</div>
		</div>
	</div>
</section>
