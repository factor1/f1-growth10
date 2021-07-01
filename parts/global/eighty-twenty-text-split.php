<?php
/**
 * 80/20 Text/Image Split
 *
 * Template part used on the various templates/views
 *
 */

// 80/20 Text/Image Split Custom Fields
$layoutOption = get_sub_field('eighty_twenty_layout_option'); // img on left or right
$content80 = get_sub_field('eighty_twenty_content_80');
$content20 = get_sub_field('eighty_twenty_content_20');

// Conditional classes
$rowClass = $layoutOption == 'right' ? ' row--reverse' : ''; ?>

<section class="sixty-text-image-split extra-padding">
  <div class="container">
    <div class="row row--justify-content-center<?php echo $rowClass; ?> row--align-items-center">

      <?php if($content20): ?>
        <div class="col-3">
          <?php echo $content20; ?>
        </div>
      <?php endif; ?>

      <?php if($content80): ?>
        <div class="col-9">
          <?php echo $content80; ?>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>
