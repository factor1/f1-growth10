<?php
/*
 * Post Block Component
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.3.0
 */

// Post Fields
$postID = get_the_ID();
$cat = get_the_category()[0];
$image = featuredURL('post_grid');
$type = get_the_terms($post->ID, 'post-format')[0]->slug;
$iconWhite = wp_get_attachment_image_src(get_field('category_icon_white', $cat), 'category_icon');
$size = $image ? 'cover' : 'auto 50%';
$video = get_field('video_link');
$audio = get_field('audio_link');
$worksheet = get_field('worksheet');

// For mark as read functionality 
$currentUser = get_current_user_id();
$userHasRead = get_user_meta($currentUser, 'read_post_' . $postID, true);
$postClass = $userHasRead ? '' : ' unread';

// Images
if( $image ) :
  $img = $image;
  $class = '';
elseif( $type == 'book' || $type == 'link' ) :
  $img = '';
  $class = ' ' . $type;
else :
  $img = $iconWhite[0];
  $class = '';
endif; ?>

<article class="post-block<?php echo $postClass; ?>">
  <a href="<?php the_permalink(); ?>" class="post-block__img<?php echo $class; ?>" style="background: #0356a4 url('<?php echo $img; ?>') center/<?php echo $size; ?> no-repeat"></a>

  <a href="<?php the_permalink(); ?>" class="post-block__info">
    <div>
      <h4><?php the_title(); ?></h4>

      <?php if( shortcode_exists('rt_reading_time') ) : ?>
        <p><em><?php //echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="minute"]'); ?></em></p>
      <?php endif; ?>
    </div>

    <div class="post-block__formats">

      <?php if( $worksheet ) : ?>
        <i class="far fa-file-alt"></i>
      <?php endif;

      if( $video ) : ?>
        <i class="fab fa-youtube"></i>
      <?php endif;

      if( $audio ) : ?>
        <i class="far fa-microphone-alt"></i>
      <?php endif; ?>

    </div>
  </a>

  <?php /* Post favoriting/reading icons - to be included later
  <div class="post-block__icons text-right">
    <i class="far fa-heart"></i>

    <i class="far fa-check-square"></i>
  </div>
  */ ?>

</article>
