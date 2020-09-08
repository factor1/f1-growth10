<?php
/*
 * Workshop Component
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.3.0
 */

$author = get_the_author_meta('ID');
?>

<article class="workshop">
  <div class="workshop__date text-center">
    <h5>
      <?php echo get_the_date('j') . '<br>' . get_the_date('M'); ?>
    </h5>
  </div>

  <div class="workshop__content">
    <h3 class="post-title"><?php the_title(); ?></h3>

    <p class="author-name"><a href="<?php echo get_author_posts_url($author); ?>"><?php the_author(); ?></a></p>

    <?php the_content(); ?>

  </div>
</article>
