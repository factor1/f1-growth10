<?php
/**
 * Author Section
 *
 * Template part used on single.php and author.php
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

// Check if single
$isPost = is_singular('post');

$author = get_the_author_meta('ID');
$li = get_the_author_meta('linkedin');
$url = get_the_author_meta('user_url');
$desc = get_the_author_meta('description');
$user = get_avatar_url($author, array( 'size' => 400 )); ?>

<div class="hero--post__author">
  <div class="hero--post__author__img" style="background: url('<?php echo $user; ?>') center/cover no-repeat"></div>

  <div class="hero--post__author__info">
    <div>
      <h4>
        <?php the_author(); ?>

        <span>
          <?php if( $li ) : ?>
            <a href="<?php echo $li; ?>"><i class="fab fa-linkedin"></i></a>
          <?php endif; ?>

          <?php if( $url ) : ?>
            <a href="<?php echo $url; ?>"><i class="far fa-globe"></i></a>
          <?php endif; ?>
        </span>
      </h4>

      <p class="author-description"><?php echo $desc; ?></p>

      <?php // All posts by author link
      if( $isPost ) : ?>

        <p><a href="<?php echo get_author_posts_url($author); ?>">See all content by <?php echo get_the_author(); ?></a></p>

      <?php endif; ?>

    </div>

    <?php /* Post favoriting/reading icons - to be included later
    <div class="hero--post__icons text-right">
      <i class="far fa-heart"></i>

      <i class="far fa-flag"></i>
    </div>
    */ ?>

  </div>
</div>
