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

                <?php if( have_rows('home_hero_buttons') ): ?>
                  <?php while( have_rows('home_hero_buttons') ): the_row(); 
                    $link = get_sub_field('link'); ?>
                    <a href="<?php echo $link['url']; ?>" class="button button--teal" target="<?php echo $link['target']; ?>" role="link"><?php echo $link['title']; ?></a>
                  <?php endwhile; ?>
                <?php endif; ?>
            </div>
			</div>
		</div>
	</div>
</section>
