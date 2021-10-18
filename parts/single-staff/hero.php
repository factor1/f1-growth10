<?php
/*
 * 2-Column Video Hero
 *
 * Template part used on the single staff template
 *
 */

  // Hero Custom Fields
  $image      = get_field('staff_hero_mobile_background', 'options');
  $img        = wp_get_attachment_image_src($image, 'staff_hero');
  $headline   = get_field('staff_hero_headline_text', 'options');
  $content    = get_field('staff_hero_content_right', 'options');
  $video      = get_field('staff_video_hero_file', 'options');
  $button_url = get_field('staff_video_hero_button_url', 'options');
?>

<section class="video-hero--home" style="background: url('<?php echo $img[0]; ?>') center/cover no-repeat">

<?php
  if( $video ) : ?>
    <div class="hero__video">
      <video autoplay loop muted playsinline>
        <source src="<?php echo $video['url']; ?>" type="video/mp4">
      </video>
    </div>

  <?php endif; ?>

    <div class="container">
      <div class="row">
          <div class="col-7 sm-col-11 sm-col-centered sm-text-center">
            <h1><?php echo $headline; ?></h1>
          </div>
          <div class="col-5 sm-col-11 sm-col-centered sm-text-center hero-button">
            <?php echo $content; ?>
          </div>
			</div>
		</div>
	</div>
</section>
