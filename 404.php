<?php
/**
 * The 404 Not Found template.
 *
 * Used when WordPress encounters an unknown URL.
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.1.0
 */

// 404 Custom Fields
$bg = wp_get_attachment_image_src(get_field('404_background', 'option'), 'home_hero');
$content = get_field('404_content', 'option');
$btn = get_field('404_button', 'option');

get_header(); ?>

<section class="error-404" style="background: url('<?php echo $bg[0]; ?>') center/cover no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-10 sm-col-11 col-centered">
        <?php echo $content;

        // Optional button
        if( $btn ) : ?>

          <div class="text-center">
            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--ghost" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
              <?php echo $btn['title']; ?>
            </a>
          </div>  

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
