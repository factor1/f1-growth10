<?php
/*
 * Text Split (home)
 *
 * Template part used on the home template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Text Split Custom Fields
$headline = get_field('text_split_headline');
$content = get_field('text_split_content');
$btn = get_field('text_split_button'); ?>

<section class="text-split">
  <div class="container">
    <div class="row">
      <div class="col-6 sm-col-11 sm-col-centered">
        <h2><?php echo $headline; ?></h2>
      </div>

      <div class="col-5 sm-col-11 sm-col-centered">
        <hr>

        <?php echo $content; ?>

        <?php if( $btn ) : ?>

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
