<?php
/**
 * Modals (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Growth10
 * @author Factor 1 Studios
 * @since 0.0.1
 */

// Check if default template
$isDefault = is_page() && !is_page_template();

if( $isDefault ) :

  // Optional hero buttons
  if( have_rows('hero_buttons') ) :
    $i = 1;

    while( have_rows('hero_buttons') ) : the_row();
      // Hero Buttons Custom Subfields
      $type = get_sub_field('button_type'); // T/F opens a modal
      $modal = $type ? get_sub_field('modal_content') : '';

      if( $type ) : ?>

        <div class="modal micromodal-slide" id="hero-modal-<?php echo $i; ?>" aria-hidden="true">
          <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-title">
              <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>

              <div id="hero-modal-<?php echo $i; ?>-content">
                <?php echo $modal; ?>
              </div>
            </div>
          </div>
        </div>

      <?php endif;

    $i++; endwhile;

  endif;

endif; // end $isDefault ?>