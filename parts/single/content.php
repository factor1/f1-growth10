<?php
/**
 * Content (Single)
 *
 * Template part used on single.php
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

// Post Custom Fields
$video = get_field('video_link');
$audio = get_field('audio_link');
$worksheet = get_field('worksheet'); ?>

<section class="post-content">
  <div class="container">
    <div class="row">
      <div class="col-8 offset-3">

        <?php // Section buttons ?>
        <div class="post-content__buttons">
          <?php if( trim($post->post_content) !== '' ) : ?>
            <button id="text">Text</button>
          <?php endif; ?>

          <?php if( $video ) : ?>
            <button id="video">Video</button>
          <?php endif; ?>

          <?php if( $audio ) : ?>
            <button id="audio">Audio</button>
          <?php endif; ?>

          <?php if( $worksheet ) : ?>
            <button id="worksheet">Worksheet</button>
          <?php endif; ?>
        </div>

        <?php if( trim($post->post_content) !== '' ) : ?>
          <div class="post-content__text">
            <?php the_content(); ?>
          </div>
        <?php endif; ?>

        <?php if( $video ) : ?>
          <div class="post-content__video">
            <div class="flex-video">
              <iframe src="<?php echo $video; ?>" width="1000" height="563" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
          </div>
        <?php endif; ?>

        <?php if( $audio ) : ?>

        <?php endif; ?>

        <?php if( $worksheet ) : ?>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
