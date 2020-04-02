<?php
/**
 * The single post template.
 *
 * Used when a single post is queried.
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

get_header();

if( have_posts() ) : while( have_posts() ) : the_post(); ?>

  <article class="blog-post">

    <?php get_template_part('parts/single/hero');

    get_template_part('parts/single/content'); ?>

  </article>

<?php endwhile; endif;

get_footer(); ?>
