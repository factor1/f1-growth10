<?php
/**
 * Staff page Sections
 *
 * Template part used on the flexible template
 *
 */


if( have_rows('page_sections', 'option') ) : while( have_rows('page_sections', 'option') ) : the_row();

  if( get_row_layout() == 'callout' ) :

    get_template_part('parts/global/callout');

  elseif( get_row_layout() == 'text_image_split' ) :

    get_template_part('parts/global/text-image-split');

  elseif( get_row_layout() == 'sixty_text_image_split' ) :

    get_template_part('parts/global/sixty-text-image-split');

  elseif( get_row_layout() == 'practice_leaders' ) :

    // get_template_part('parts/global/practice-leaders');

  elseif( get_row_layout() == 'testimonials_slider' ) :

    get_template_part('parts/global/testimonials');

  elseif( get_row_layout() == 'cta' ) :

    get_template_part('parts/global/cta');
  
  elseif( get_row_layout() == 'cta2' ) :

    get_template_part('parts/global/cta-hashed');

  elseif( get_row_layout() == 'eighty_twenty_text_split' ) :

    get_template_part('parts/global/eighty-twenty-text-split');

  elseif( get_row_layout() == 'text_image_banner' ) :

    get_template_part('parts/global/text-image-banner');

  elseif( get_row_layout() == 'four_column_content' ) :

    get_template_part('parts/global/4-col-content');

  endif;

endwhile; endif; ?>
