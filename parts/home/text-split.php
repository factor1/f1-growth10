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
$btn = get_field('text_split_button_text'); ?>

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
            <a href="#plans" class="button button--ghost anchor-scroll" role="link" title="<?php echo $btn; ?>">
              <?php echo $btn; ?>
            </a>
          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
