<?php
/**
 * Hero (Single)
 *
 * Template part used on single.php
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

$img = featuredURL('post_featured');
$author = get_the_author_meta('ID');
$li = get_the_author_meta('linkedin');
$url = get_the_author_meta('user_url');
$desc = get_the_author_meta('description');
$user = get_avatar($author, 400); ?>

<section class="hero--post">
  <div class="container">
    <div class="row row--justify-content-center">
      <div class="col-10 md-col-11">
        <h1><?php the_title(); ?></h1>

        <?php // Optional featured image
        if( $img ) : ?>
          <div class="hero--post__img" style="background: url('<?php echo $img; ?>') center/cover no-repeat"></div>
        <?php endif;

        // Author ?>
        <div class="hero--post__author">
          <div class="hero--post__author__img">
            <?php echo $user; ?>
          </div>

          <div class="hero--post__author__info">
            <h4>
              <?php the_author(); ?>

              <?php if( $li ) : ?>
                <a href="<?php echo $li; ?>"><i class="fab fa-linkedin"></i></a>
              <?php endif; ?>

              <?php if( $url ) : ?>
                <a href="<?php echo $url; ?>"><i class="far fa-globe"></i></a>
              <?php endif; ?>
            </h4>

            <p class="author-description"><?php echo $desc; ?></p>
          </div>

          <div class="hero--post__icons text-right">
            <i class="far fa-heart"></i>

            <i class="far fa-flag"></i>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
