<?php
/**
 * Tabbed Content (Single)
 *
 * Template part used on blog posts
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

// Custom Fields
$video = get_field('video_link');
$audio = get_field('audio_link');
$intro = get_field('worksheet_intro');
$worksheet = get_field('worksheet');

// Section buttons ?>
<div class="post-content__buttons">
  <?php if( $video ) : ?>
    <button id="video">Video</button>
  <?php endif; ?>

  <?php if( $audio ) : ?>
    <button id="audio">Audio</button>
  <?php endif; ?>

  <?php if( (trim($post->post_content) !== '') && ( $video || $audio || $worksheet ) ) : ?>
    <button id="text">Text</button>
  <?php endif; ?>

  <?php if( $worksheet ) : ?>
    <button id="worksheet">Worksheet</button>
  <?php endif; ?>
</div>

<?php // Sections ?>
<div class="post-content__blocks">

  <?php if( $video ) : ?>

    <div class="post-content__video">
      <?php echo $video; ?>
    </div>

  <?php endif; ?>

  <?php if( $audio ) : ?>

    <div class="post-content__audio">
      <?php echo do_shortcode('[sc_embed_player_template1 fileurl="' . $audio . '"]'); ?>
    </div>

  <?php endif; ?>

  <?php if( trim($post->post_content) !== '' ) : ?>

    <div class="post-content__text">
      <?php the_content(); ?>
    </div>

  <?php endif; ?>

  <?php if( $worksheet ) : ?>

    <div class="post-content__worksheet">
      <?php echo $intro; ?>

      <a href="<?php echo $worksheet; ?>" class="button button--teal">Download</a>
    </div>

  <?php endif; ?>

</div>
