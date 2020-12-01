<?php
/**
 * Page Sections
 *
 * Template part used on the flexible template
 *
 * @package F1 Growth10
 * @author Factor1 Studios
 * @since 1.2.0
 */

if( have_rows('page_sections') ) : while( have_rows('page_sections') ) : the_row();

  if( get_row_layout() == 'callout' ) :

    get_template_part('parts/global/callout');

  elseif( get_row_layout() == 'text_image_split' ) :

    get_template_part('parts/global/text-image-split');

  elseif( get_row_layout() == 'practice_leaders' ) :

    get_template_part('parts/global/practice-leaders');

  elseif( get_row_layout() == 'cta' ) :

    get_template_part('parts/global/cta');

  endif;

endwhile; endif; ?>
